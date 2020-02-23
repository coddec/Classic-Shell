// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#include <stdafx.h>
#include "StringSet.h"

static CString CreateString( const WORD *data )
{
	int len=*data;
	data++;
	if (len==0) return NULL;

	CString str;
	wchar_t *ptr=str.GetBuffer(len);
	if (ptr)
	{
		memcpy(ptr,data,len*2);
		ptr[len]=0;
		str.ReleaseBufferSetLength(len);
	}

	return str;
}

BOOL CALLBACK CStringSet::EnumResNameProc( HMODULE hModule, LPCTSTR lpszType, LPTSTR lpszName, LONG_PTR lParam )
{
	CStringSet *set=(CStringSet*)lParam;
	// find resource
	HRSRC hr=FindResource(hModule,lpszName,RT_STRING);
	if (!hr) return TRUE;

	HGLOBAL hg=LoadResource(hModule,hr);
	if (hg)
	{
		const WORD *res=(WORD*)LockResource(hg);
		if (res)
		{
			for (int i=0;i<16;i++)
			{
				int id=(((int)(intptr_t)lpszName)<<4)+i-16;

				CString str=CreateString(res);
				if (!str.IsEmpty())
					(*set)[id]=str;
				res+=(*res)+1;
			}
			UnlockResource(hg);
		}
	}
	return TRUE;
}

// Initializes the string database
void CStringSet::Init( HINSTANCE hInstance )
{
	clear();
	m_hInstance=hInstance;
	if (hInstance)
		EnumResourceNames(hInstance,RT_STRING,EnumResNameProc,(LONG_PTR)this);
}

// Returns a string by ID (returns "" if the string is missing)
CString CStringSet::GetString( UINT uID )
{
	// search in the database
	const_iterator it=find(uID);

	if (it!=end())
	{
		if (it->second)
			return it->second;
	}
	return CString();
}
