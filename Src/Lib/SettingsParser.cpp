// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#include <stdafx.h>
#include "SettingsParser.h"
#include "ResourceHelper.h"
#include "StringUtils.h"
#include <algorithm>

const int MAX_TREE_LEVEL=10;

// Reads a file into m_Text
bool CSettingsParser::LoadText( const wchar_t *fname )
{
	// read settings file into buf
	FILE *f=NULL;
	if (_wfopen_s(&f,fname,L"rb")) return false;
	if (!f) return false;
	fseek(f,0,SEEK_END);
	int size=ftell(f);
	fseek(f,0,SEEK_SET);
	std::vector<unsigned char> buf(size);
	if (size<4 || fread(&buf[0],1,size,f)!=size)
	{
		fclose(f);
		return false;
	}
	fclose(f);
	LoadText(&buf[0],size);
	return true;
}

// Reads a text resource into m_Text
bool CSettingsParser::LoadText( HMODULE hMod, HRSRC hResInfo )
{
	HGLOBAL hRes=LoadResource(hMod,hResInfo);
	int size=SizeofResource(hMod,hResInfo);
	unsigned char *buf=(unsigned char*)LockResource(hRes);
	if (!buf) return false;
	LoadText(buf,size);
	return true;
}

void CSettingsParser::LoadText( const unsigned char *buf, int size )
{
	// copy buf to text and convert to UTF16
	if (buf[0]==0xFF && buf[1]==0xFE)
	{
		// UTF16
		int len=(size-2)/2;
		m_Text.resize(len+1);
		memcpy(&m_Text[0],&buf[2],size-2);
		m_Text[len]=0;
	}
	else if (buf[0]==0xEF && buf[1]==0xBB && buf[2]==0xBF)
	{
		// UTF8
		int len=MultiByteToWideChar(CP_UTF8,0,(const char*)&buf[3],size-3,NULL,0);
		m_Text.resize(len+1);
		MultiByteToWideChar(CP_UTF8,0,(const char*)&buf[3],size-3,&m_Text[0],len);
		m_Text[len]=0;
	}
	else
	{
		// ACP
		int len=MultiByteToWideChar(CP_ACP,0,(const char*)&buf[0],size,NULL,0);
		m_Text.resize(len+1);
		MultiByteToWideChar(CP_UTF8,0,(const char*)&buf[0],size,&m_Text[0],len);
		m_Text[len]=0;
	}
}

void CSettingsParser::LoadText( const wchar_t *buf, int size )
{
	m_Text.resize(size+1);
	memcpy(&m_Text[0],buf,size*2);
	m_Text[size]=0;
}

// Splits m_Text into m_Lines
void CSettingsParser::ParseText( void )
{
	if (m_Text.empty()) return;
	// split into lines
	wchar_t *str=&m_Text[0];
	while (*str)
	{
		if (*str!=';') // ignore lines starting with ;
		{
			// trim leading whitespace
			while (*str==' ' || *str=='\t')
				str++;
			m_Lines.push_back(str);
		}
		wchar_t *p1=wcschr(str,'\r');
		wchar_t *p2=wcschr(str,'\n');
		wchar_t *end=&m_Text[m_Text.size()-1];
		if (p1) end=p1;
		if (p2 && p2<end) end=p2;

		wchar_t *next=end;
		while (*next=='\r' || *next=='\n')
			next++;

		// trim trailing whitespace
		while (end>str && (*end==' ' || *end=='\t'))
			end--;
		*end=0;
		str=next;
	}
}

// Filters the settings that belong to the given language
// languages is a 00-terminated list of language names ordered by priority
void CSettingsParser::FilterLanguages( const wchar_t *languages )
{
	std::vector<const wchar_t*> lines;
	lines.swap(m_Lines);
	for (const wchar_t *lang=languages;*lang;lang+=wcslen(lang)+1)
	{
		size_t langLen=wcslen(lang);
		for (size_t i=0;i<lines.size();i++)
		{
			const wchar_t *line=lines[i];
			if (*line=='[' && _wcsnicmp(line+1,lang,langLen)==0 && line[langLen+1]==']')
			{
				for (i++;i<lines.size();i++)
				{
					line=lines[i];
					if (*line=='[') break;
					m_Lines.push_back(line);
				}
				break;
			}
		}
	}
	std::reverse(m_Lines.begin(),m_Lines.end());
}

// Returns a setting with the given name. If no setting is found, returns def
const wchar_t *CSettingsParser::FindSetting( const wchar_t *name, const wchar_t *def )
{
	const wchar_t *str=FindSettingInt(name,wcslen(name));
	return (str && *str)?str:def;
}

const wchar_t *CSettingsParser::FindSettingDirect( const wchar_t *name )
{
	return FindSettingInt(name,wcslen(name));
}

const wchar_t *CSettingsParser::FindSettingInt( const wchar_t *name, size_t len )
{
	for (std::vector<const wchar_t*>::const_reverse_iterator it=m_Lines.rbegin();it!=m_Lines.rend();++it)
	{
		const wchar_t *str=*it;
		if (_wcsnicmp(name,str,len)==0)
		{
			str+=len;
			while (*str==' ' || *str=='\t')
				str++;
			if (*str!='=') continue;
			str++;
			while (*str==' ' || *str=='\t')
				str++;
			return str;
		}
	}

	return NULL;
}

// Frees all resources
void CSettingsParser::Reset( void )
{
	m_Lines.clear();
	m_Text.clear();
}

// Parses a tree structure of items. The rootName setting must be a list of item names.
void CSettingsParser::ParseTree( const wchar_t *rootName, std::vector<TreeItem> &items )
{
	const wchar_t *str=FindSetting(rootName);
	if (str)
	{
		CString names[MAX_TREE_LEVEL];
		ParseTreeRec(str,items,names,0);
	}
	else
	{
		TreeItem last={L"",-1};
		items.push_back(last);
	}
}

int CSettingsParser::ParseTreeRec( const wchar_t *str, std::vector<TreeItem> &items, CString *names, int level )
{
	size_t start=items.size();
	while (*str)
	{
		wchar_t token[256];
		str=GetToken(str,token,_countof(token),L", \t");
		if (token[0])
		{
			// 
			bool bFound=false;
			for (int i=0;i<level;i++)
				if (_wcsicmp(token,names[i])==0)
				{
					bFound=true;
					break;
				}
				if (!bFound)
				{
					TreeItem item={token,-1};
					items.push_back(item);
				}
		}
	}
	size_t end=items.size();
	if (start==end) return -1;

	TreeItem item={L"",-1};
	items.push_back(item);

	if (level<MAX_TREE_LEVEL-1)
	{
		for (size_t i=start;i<end;i++)
		{
			wchar_t buf[266];
			Sprintf(buf,_countof(buf),L"%s.Items",items[i].name);
			const wchar_t *str2=FindSetting(buf);
			if (str2)
			{
				names[level]=items[i].name;
				// these two statements must be on separate lines. otherwise items[i] is evaluated before ParseTreeRec, but
				// the items vector can be reallocated inside ParseTreeRec, causing the address to be invalidated -> crash!
				int idx=ParseTreeRec(str2,items,names,level+1);
				items[i].children=idx;
			}
		}
	}
	return (int)start;
}

///////////////////////////////////////////////////////////////////////////////

bool CSkinParser::LoadVariation( const wchar_t *fname )
{
	m_VarText.swap(m_Text);
	bool res=LoadText(fname);
	if (res)
	{
		std::vector<const wchar_t*> lines;
		lines.swap(m_Lines);
		lines.push_back(L"[TRUE]");
		ParseText();
		m_Lines.insert(m_Lines.begin(),lines.begin(),lines.end());
	}
	m_VarText.swap(m_Text);
	return res;
}

bool CSkinParser::LoadVariation( HMODULE hMod, HRSRC hResInfo )
{
	m_VarText.swap(m_Text);
	bool res=LoadText(hMod,hResInfo);
	if (res)
	{
		std::vector<const wchar_t*> lines;
		lines.swap(m_Lines);
		lines.push_back(L"[TRUE]");
		ParseText();
		m_Lines.insert(m_Lines.begin(),lines.begin(),lines.end());
	}
	m_VarText.swap(m_Text);
	return res;
}

void CSkinParser::Reset( void )
{
	CSettingsParser::Reset();
	m_VarText.clear();
}

static const wchar_t *g_OptionNames[SKIN_OPTION_TYPE_COUNT]={
	L"OPTION ",
	L"OPTION_NUMBER ",
	L"OPTION_STRING ",
	L"OPTION_COLOR ",
	L"OPTION_IMAGE ",
};

// Parses the option from m_Lines[index]. Returns false if index is out of bounds
bool CSkinParser::ParseOption( CString &name, TSkinOptionType &type, CString &label, bool &value, CString &condition, CString &disValue, int index )
{
	if (index<0 || index>=(int)m_Lines.size())
		return false;
	name.Empty();
	wchar_t buf[256];
	const wchar_t *line=m_Lines[index];
	if (_wcsnicmp(line,L"OPTION",6)!=0)
		return true;
	type=SKIN_OPTION_NONE;
	for (int i=0;i<SKIN_OPTION_TYPE_COUNT;i++)
	{
		int len=Strlen(g_OptionNames[i]);
		if (_wcsnicmp(line,g_OptionNames[i],len)==0)
		{
			type=(TSkinOptionType)i;
			line+=len;
			break;
		}
	}
	if (type==SKIN_OPTION_NONE)
		return true;

	const wchar_t *end=wcschr(line,'=');
	if (!end) return true;
	line=GetToken(line,buf,_countof(buf),L" \t=");
	name=buf;
	line=GetToken(line,buf,_countof(buf),L",");
	if (buf[0]=='#')
		label=LoadStringEx(_wtol(buf+1));
	else
		label=buf;
	if (label.IsEmpty())
		name.Empty();
	line=GetToken(line,buf,_countof(buf),L" \t,");
	value=_wtol(buf)!=0;
	line=GetToken(line,buf,_countof(buf),L",");
	condition=buf;
	line=GetToken(line,buf,_countof(buf),L" \t,");
	disValue=buf;
	if (type==SKIN_OPTION_BOOL && name==L"RADIOGROUP")
		type=SKIN_OPTION_GROUP;
	return true;
}

// Filters the conditional groups
// values/count - list of true options. the rest are assumed to be false
void CSkinParser::FilterConditions( const wchar_t **values, int count )
{
	std::vector<const wchar_t*> lines;
	lines.swap(m_Lines);

	bool bEnable=true;

	for (size_t i=0;i<lines.size();i++)
	{
		const wchar_t *line=lines[i];
		if (*line=='[')
		{
			bEnable=false;
			wchar_t condition[256];
			const wchar_t *end=wcschr(line,']');
			if (!end) continue; // not closed
			int len=(int)(end-line)-1;
			if (len>_countof(condition)-1)
				continue; // too long
			memcpy(condition,line+1,len*2);
			condition[len]=0;

			// evaluate condition
			if (EvalCondition(condition,values,count)==1)
				bEnable=true;
			continue;
		}
		if (bEnable)
			m_Lines.push_back(line);
	}
}

// Substitutes the provided macro strings
void CSkinParser::ApplyMacros( const std::vector<std::pair<CString,CString>> &macros )
{
	std::vector<CString> names;
	for (std::vector<std::pair<CString,CString>>::const_iterator it=macros.begin();it!=macros.end();++it)
	{
		wchar_t name[256];
		Sprintf(name,_countof(name),L"@%s@",it->first);
		names.push_back(name);
	}

	for (std::vector<const wchar_t*>::iterator it=m_Lines.begin();it!=m_Lines.end();++it)
	{
		if (wcschr(*it,'@'))
		{
			CString string=*it;
			for (size_t i=0;i<names.size();i++)
				string.Replace(names[i],macros[i].second);

			m_ExtraStrings.push_back(string);
			*it=string;
		}
	}
}

// Returns a setting with the given name
const wchar_t *CSkinParser::FindSetting( const wchar_t *name )
{
	const wchar_t *str=CSettingsParser::FindSetting(name);
	if (!str && m_Aliases)
	{
		for (int i=0;m_Aliases[i];i+=2)
		{
			if (wcscmp(name,m_Aliases[i])==0)
				return CSettingsParser::FindSetting(m_Aliases[i+1]);
		}
	}
	return str;
}

///////////////////////////////////////////////////////////////////////////////

enum TType
{
	TYPE_AND,
	TYPE_OR,
	TYPE_NOT,
	TYPE_PAR, // '('
};

static bool ApplyOperator( bool *valStack, int &vsp, TType op )
{
	switch (op)
	{
	case TYPE_AND:
		if (vsp<2) return false;
		vsp--;
		valStack[vsp-1]=valStack[vsp-1] && valStack[vsp];
		return true;
	case TYPE_OR:
		if (vsp<2) return false;
		vsp--;
		valStack[vsp-1]=valStack[vsp-1] || valStack[vsp];
		return true;
	case TYPE_NOT:
		if (vsp<1) return false;
		valStack[vsp-1]=!valStack[vsp-1];
		return true;
	}
	return false;
}

// Evaluates a boolean condition. vars/count - a list of variable names that are TRUE. The rest are assumed FALSE
// Returns: 0 - false, 1 - true, -1 - error
int EvalCondition( const wchar_t *condition, const wchar_t *const *values, int count )
{
	wchar_t token[256];
	TType opStack[16];
	int osp=0;
	bool valStack[16];
	int vsp=0;

	while (1)
	{
		// skip leading whitespace
		while (*condition==' ' || *condition=='\t')
			condition++;
		if (!*condition) break;

		if (*condition=='(')
		{
			if (osp>=_countof(opStack)) return -1; // too much nesting
			opStack[osp]=TYPE_PAR;
			osp++;
			condition++;
			continue;
		}

		if (*condition==')')
		{
			bool found=false;
			while (osp>0)
			{
				osp--;
				if (opStack[osp]==TYPE_PAR)
				{
					found=true;
					break;
				}
				if (!ApplyOperator(valStack,vsp,opStack[osp])) return -1; // invalid operation
			}
			if (!found) return -1; // too many )
			condition++;
			continue;
		}

		// find token
		const wchar_t *end=condition;
		while (*end && *end!=' ' && *end!='\t' && *end!='(' && *end!=')')
			end++;

		int len=(int)(end-condition);
		if (len>=sizeof(token)) return -1; // too long token
		memcpy(token,condition,len*2);
		token[len]=0;
		condition=end;
		while (*condition==' ' || *condition=='\t')
			condition++;

		if (_wcsicmp(token,L"and")==0 || _wcsicmp(token,L"or")==0)
		{
			while (osp>0 && opStack[osp-1]!=TYPE_PAR)
			{
				osp--;
				if (!ApplyOperator(valStack,vsp,opStack[osp])) return -1; // invalid operation
			}
			if (osp>=_countof(opStack)) return -1; // too much nesting
			opStack[osp]=(token[0]=='a' || token[0]=='A')?TYPE_AND:TYPE_OR;
			osp++;
		}
		else if (_wcsicmp(token,L"not")==0)
		{
			while (osp>0 && opStack[osp-1]==TYPE_NOT)
			{
				osp--;
				if (!ApplyOperator(valStack,vsp,opStack[osp])) return -1; // invalid operation
			}
			if (osp>=_countof(opStack)) return -1; // too much nesting
			opStack[osp]=TYPE_NOT;
			osp++;
		}
		else
		{
			if (vsp>=_countof(valStack)) return -1; // too much nesting
			bool bValue=false;
			if (_wcsicmp(token,L"true")==0)
				bValue=true;
			else
			{
				for (int i=0;i<count;i++)
					if (_wcsicmp(token,values[i])==0)
					{
						bValue=true;
						break;
					}
			}
			valStack[vsp++]=bValue;
		}
	}

	while (osp>0)
	{
		osp--;
		if (opStack[osp]==TYPE_PAR) return -1; // unclosed (
		if (!ApplyOperator(valStack,vsp,opStack[osp])) return -1; // invalid operation
	}

	if (vsp!=1) return -1; // unbalanced expression
	return valStack[0]?1:0;
}
