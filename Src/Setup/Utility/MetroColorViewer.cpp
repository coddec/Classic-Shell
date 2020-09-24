// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#ifndef _WIN64

#define STRICT_TYPED_ITEMIDS
#define _ATL_CSTRING_EXPLICIT_CONSTRUCTORS	// some CString constructors will be explicit
#include <atlbase.h>
#include <atltypes.h>
#include <atlstr.h>
#include <atlwin.h>
#include "resource.h"
#include "StringUtils.h"
#include "ResourceHelper.h"

//#define WRITE_COLORS
//#define READ_COLORS

#ifdef READ_COLORS
#undef WRITE_COLORS
#endif

static struct
{
	const wchar_t *name;
	int code;
} g_SystemColors[]=
{
	{L"SystemScrollbar",COLOR_SCROLLBAR},
	{L"SystemBackground",COLOR_BACKGROUND},
	{L"SystemActiveCaption",COLOR_ACTIVECAPTION},
	{L"SystemInactiveCaption",COLOR_INACTIVECAPTION},
	{L"SystemMenu",COLOR_MENU},
	{L"SystemWindow",COLOR_WINDOW},
	{L"SystemWindowFrame",COLOR_WINDOWFRAME},
	{L"SystemMenuText",COLOR_MENUTEXT},
	{L"SystemWindowText",COLOR_WINDOWTEXT},
	{L"SystemCaptionText",COLOR_CAPTIONTEXT},
	{L"SystemActiveBorder",COLOR_ACTIVEBORDER},
	{L"SystemInactiveBorder",COLOR_INACTIVEBORDER},
	{L"SystemAppWorkspace",COLOR_APPWORKSPACE},
	{L"SystemHighlight",COLOR_HIGHLIGHT},
	{L"SystemHighlightText",COLOR_HIGHLIGHTTEXT},
	{L"SystemBtnFace",COLOR_BTNFACE},
	{L"SystemBtnShadow",COLOR_BTNSHADOW},
	{L"SystemGrayText",COLOR_GRAYTEXT},
	{L"SystemBtnText",COLOR_BTNTEXT},
	{L"SystemInactiveCaptionText",COLOR_INACTIVECAPTIONTEXT},
	{L"SystemBtnHighlight",COLOR_BTNHIGHLIGHT},
	{L"System3DDKShadow",COLOR_3DDKSHADOW},
	{L"System3DLight",COLOR_3DLIGHT},
	{L"SystemInfoText",COLOR_INFOTEXT},
	{L"SystemInfoBK",COLOR_INFOBK},
	{L"SystemHotLight",COLOR_HOTLIGHT},
	{L"SystemGradientActiveCaption",COLOR_GRADIENTACTIVECAPTION},
	{L"SystemGradientInactiveCaption",COLOR_GRADIENTINACTIVECAPTION},
	{L"SystemMenuHilight",COLOR_MENUHILIGHT},
	{L"SystemMenuBar",COLOR_MENUBAR},
};

#ifndef READ_COLORS
typedef int (WINAPI *TGetImmersiveUserColorSetPreference)(bool bForceCheckRegistry, bool bSkipCheckOnFail);
typedef int (WINAPI *TGetImmersiveColorSetCount)();
typedef DWORD (WINAPI *TGetImmersiveColorFromColorSetEx)(UINT dwImmersiveColorSet, UINT dwImmersiveColorType, bool bIgnoreHighContrast, UINT dwHighContrastCacheMode);
typedef const wchar_t **(WINAPI *TGetImmersiveColorNamedTypeByIndex)(UINT dwImmersiveColorType);
typedef int (WINAPI *TGetImmersiveColorTypeFromName)(const wchar_t *name);

static TGetImmersiveUserColorSetPreference GetImmersiveUserColorSetPreference;
static TGetImmersiveColorFromColorSetEx GetImmersiveColorFromColorSetEx;
static TGetImmersiveColorSetCount GetImmersiveColorSetCount;
static TGetImmersiveColorNamedTypeByIndex GetImmersiveColorNamedTypeByIndex;
static TGetImmersiveColorTypeFromName GetImmersiveColorTypeFromName;
#endif

struct MetroColor 
{
	CString name;
	CString NAME;
	int type;
	DWORD color;
};

static std::vector<MetroColor> g_MetroColors;
static int g_MaxMetroColorType;

class CMetroColorViewer: public CDialogImpl<CMetroColorViewer>
{
public:
	CMetroColorViewer( void );

	BEGIN_MSG_MAP( CMetroColorViewer )
		MESSAGE_HANDLER( WM_INITDIALOG, OnInitDialog )
		MESSAGE_HANDLER( WM_CLOSE, OnClose )
		COMMAND_HANDLER( IDCANCEL, BN_CLICKED, OnCancel )
		COMMAND_HANDLER( IDC_EDIT1, EN_UPDATE, OnUpdateSet )
		COMMAND_HANDLER( IDC_EDIT2, EN_UPDATE, OnUpdateFilter )
		NOTIFY_HANDLER( IDC_LIST1, NM_CUSTOMDRAW, OnCustomDraw )
		NOTIFY_HANDLER( IDC_LIST1, LVN_COLUMNCLICK, OnColumnClick )
		REFLECT_NOTIFICATIONS()
	END_MSG_MAP()

	enum { IDD=IDD_COLORS };

protected:
	LRESULT OnInitDialog( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled );
	LRESULT OnClose( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled );
	LRESULT OnCancel( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled );
	LRESULT OnUpdateSet( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled );
	LRESULT OnUpdateFilter( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled );
	LRESULT OnCustomDraw( int idCtrl, LPNMHDR pnmh, BOOL& bHandled );
	LRESULT OnColumnClick( int idCtrl, LPNMHDR pnmh, BOOL& bHandled );

private:
	int m_ColorSet;
	int m_SortColumn;
	CString m_Filter;
	void UpdateRows( void );
	void UpdateColors( void );
	void SetSortColumn( int sort );

	static int CALLBACK CompareFunc( LPARAM lParam1, LPARAM lParam2, LPARAM lParamSort );
};

CMetroColorViewer::CMetroColorViewer( void )
{
	m_ColorSet=-1;
	m_SortColumn=-1;
}

int CALLBACK CMetroColorViewer::CompareFunc( LPARAM lParam1, LPARAM lParam2, LPARAM lParamSort )
{
	if (lParamSort==1)
	{
		// type
		lParam1=g_MetroColors[lParam1].type;
		lParam2=g_MetroColors[lParam2].type;
	}
	if (lParam1<lParam2) return -1;
	if (lParam1>lParam2) return 1;
	return 0;
}

LRESULT CMetroColorViewer::OnInitDialog( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled )
{
#ifdef READ_COLORS
	m_ColorSet=0;
	int setCount=1;
	GetDlgItem(IDC_EDIT1).EnableWindow(FALSE);
#else
	int setCount=GetImmersiveColorSetCount();
#endif
	SendDlgItemMessage(IDC_SPIN1,UDM_SETRANGE,0,MAKELONG(setCount-1,-1));
	SetDlgItemInt(IDC_EDIT1,-1,TRUE);
	SendDlgItemMessage(IDC_LIST1,LVM_SETEXTENDEDLISTVIEWSTYLE,LVS_EX_FULLROWSELECT|LVS_EX_DOUBLEBUFFER,LVS_EX_FULLROWSELECT|LVS_EX_DOUBLEBUFFER);

	HWND list=GetDlgItem(IDC_LIST1);
	{
		LVCOLUMN column={LVCF_WIDTH|LVCF_TEXT,0,380,(LPWSTR)L"Name"};
		ListView_InsertColumn(list,0,&column);
	}
	{
		LVCOLUMN column={LVCF_WIDTH|LVCF_TEXT,0,50,(LPWSTR)L"#"};
		ListView_InsertColumn(list,1,&column);
	}
	{
		LVCOLUMN column={LVCF_WIDTH|LVCF_TEXT,0,100,(LPWSTR)L"Code"};
		ListView_InsertColumn(list,2,&column);
	}
	{
		LVCOLUMN column={LVCF_WIDTH|LVCF_TEXT,0,100,(LPWSTR)L"Color"};
		ListView_InsertColumn(list,3,&column);
	}
	int order[]={1,0,2,3};
	ListView_SetColumnOrderArray(list,_countof(order),order);
	SetSortColumn(1);

	UpdateRows();
	return TRUE;
}

void CMetroColorViewer::SetSortColumn( int sort )
{
	CWindow list=GetDlgItem(IDC_LIST1);
	list.SendMessage(LVM_SETSELECTEDCOLUMN,m_SortColumn);
	CWindow header=ListView_GetHeader(list);
	HDITEM hdItem= {HDI_FORMAT};
	hdItem.fmt= HDF_LEFT|HDF_STRING;
	if (m_SortColumn>=0)
		header.SendMessage(HDM_SETITEM,m_SortColumn,(LPARAM)&hdItem);
	hdItem.fmt|= HDF_SORTDOWN;
	m_SortColumn=sort;
	header.SendMessage(HDM_SETITEM,m_SortColumn,(LPARAM)&hdItem);
}

void CMetroColorViewer::UpdateRows( void )
{
	CWindow list=GetDlgItem(IDC_LIST1);
	if (!list.IsWindow()) return;

	std::vector<CString> tokens;
	for (const wchar_t *str=m_Filter;*str;)
	{
		wchar_t token[256];
		str=GetToken(str,token,_countof(token),L" ");
		if (token[0])
			tokens.push_back(token);
	}
	list.SetRedraw(FALSE);
	ListView_DeleteAllItems(list);
	for (int i=0;i<(int)g_MetroColors.size();i++)
	{
		const MetroColor &color=g_MetroColors[i];
		bool found=true;
		for (std::vector<CString>::const_iterator it=tokens.begin();it!=tokens.end();++it)
		{
			if (!wcsstr(color.NAME,*it))
			{
				found=false;
				break;
			}
		}
		if (!found) continue;
		LVITEM item={LVIF_PARAM|LVIF_TEXT};
		item.lParam=i;
		item.pszText=(wchar_t*)(const wchar_t*)color.name;
		item.iItem=10000;
		int idx=ListView_InsertItem(list,&item);

		wchar_t text[20];
		Sprintf(text,_countof(text),L"%d",color.type);
		ListView_SetItemText(list,idx,1,text);
	}
	ListView_SortItems(list,CompareFunc,m_SortColumn);
	list.SetRedraw(TRUE);
	UpdateColors();
}

void CMetroColorViewer::UpdateColors( void )
{
	CWindow list=GetDlgItem(IDC_LIST1);
	if (!list.IsWindow()) return;
#ifndef READ_COLORS
	int set=m_ColorSet>=0?m_ColorSet:GetImmersiveUserColorSetPreference(false,false);
#endif
	int count=ListView_GetItemCount(list);
	list.SetRedraw(FALSE);
	for (int i=0;i<count;i++)
	{
		LVITEM item={LVIF_PARAM};
		item.iItem=i;
		ListView_GetItem(list,&item);
		int idx=(int)item.lParam;
		COLORREF color;
#ifndef READ_COLORS
		if (g_MetroColors[idx].type<=g_MaxMetroColorType)
			color=GetImmersiveColorFromColorSetEx(set,g_MetroColors[idx].type,true,0);
		else
#endif
			color=g_MetroColors[idx].color;
		wchar_t text[20];
		Sprintf(text,_countof(text),L"%02X%02X%02X%02X",(color>>24)&0xFF,color&0xFF,(color>>8)&0xFF,(color>>16)&0xFF);
		ListView_SetItemText(list,i,2,text);
	}
	list.SetRedraw(TRUE);
	::InvalidateRect(list,NULL,TRUE);
}

LRESULT CMetroColorViewer::OnClose( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled )
{
	EndDialog(0);
	return 0;
}

LRESULT CMetroColorViewer::OnCancel( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled )
{
	if (GetFocus()==GetDlgItem(IDC_EDIT2))
		SetDlgItemText(IDC_EDIT2,L"");
	return 0;
}

LRESULT CMetroColorViewer::OnUpdateSet( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled )
{
	m_ColorSet=GetDlgItemInt(IDC_EDIT1);
	UpdateColors();
	return 0;
}

LRESULT CMetroColorViewer::OnUpdateFilter( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled )
{
	CString filter;
	GetDlgItemText(IDC_EDIT2,filter);
	filter.MakeUpper();
	if (filter!=m_Filter)
	{
		m_Filter=filter;
		UpdateRows();
	}
	return 0;
}

LRESULT CMetroColorViewer::OnCustomDraw( int idCtrl, LPNMHDR pnmh, BOOL& bHandled )
{
	NMLVCUSTOMDRAW *pDraw=(NMLVCUSTOMDRAW*)pnmh;
	if (pDraw->nmcd.dwDrawStage==CDDS_PREPAINT)
		return CDRF_NOTIFYITEMDRAW;
	if (pDraw->nmcd.dwDrawStage==CDDS_ITEMPREPAINT)
		return CDRF_NOTIFYSUBITEMDRAW;
	if (pDraw->nmcd.dwDrawStage==(CDDS_ITEMPREPAINT|CDDS_SUBITEM) && pDraw->iSubItem==3)
	{
		RECT rc;
		ListView_GetSubItemRect(pnmh->hwndFrom,pDraw->nmcd.dwItemSpec,pDraw->iSubItem,LVIR_BOUNDS,&rc);
		DWORD color;
#ifndef READ_COLORS
		if (g_MetroColors[pDraw->nmcd.lItemlParam].type<=g_MaxMetroColorType)
		{
			int set=m_ColorSet>=0?m_ColorSet:GetImmersiveUserColorSetPreference(false,false);
			color=GetImmersiveColorFromColorSetEx(set,g_MetroColors[pDraw->nmcd.lItemlParam].type,true,0);
		}
		else
#endif
			color=g_MetroColors[pDraw->nmcd.lItemlParam].color;
		SetDCBrushColor(pDraw->nmcd.hdc,color&0xFFFFFF);
		FillRect(pDraw->nmcd.hdc,&rc,(HBRUSH)GetStockObject(DC_BRUSH));
		return CDRF_SKIPDEFAULT;
	}
	return CDRF_DODEFAULT;
}

LRESULT CMetroColorViewer::OnColumnClick( int idCtrl, LPNMHDR pnmh, BOOL& bHandled )
{
	NMLISTVIEW *pSort=(NMLISTVIEW *)pnmh;
	if (pSort->iSubItem==0 || pSort->iSubItem==1)
	{
		SetSortColumn(pSort->iSubItem);
		ListView_SortItems(pnmh->hwndFrom,CompareFunc,m_SortColumn);
	}
	return 0;
}

void ShowMetroColorViewer( void )
{
#ifndef READ_COLORS
	HMODULE hUxTheme=LoadLibrary(L"uxtheme.dll");
	DWORD ver=GetVersionEx(hUxTheme);
	if (hUxTheme && ver>=0x6020000)
	{
		GetImmersiveUserColorSetPreference=(TGetImmersiveUserColorSetPreference)GetProcAddress(hUxTheme,MAKEINTRESOURCEA(98));
		GetImmersiveColorFromColorSetEx=(TGetImmersiveColorFromColorSetEx)GetProcAddress(hUxTheme,MAKEINTRESOURCEA(95));
		GetImmersiveColorSetCount=(TGetImmersiveColorSetCount)GetProcAddress(hUxTheme,MAKEINTRESOURCEA(94));
		GetImmersiveColorNamedTypeByIndex=(TGetImmersiveColorNamedTypeByIndex)GetProcAddress(hUxTheme,MAKEINTRESOURCEA(100));
		GetImmersiveColorTypeFromName=(TGetImmersiveColorTypeFromName)GetProcAddress(hUxTheme,MAKEINTRESOURCEA(96));
	}
	if (GetImmersiveUserColorSetPreference && GetImmersiveColorFromColorSetEx && GetImmersiveColorSetCount && GetImmersiveColorNamedTypeByIndex && GetImmersiveColorTypeFromName)
#endif
	{
#ifdef READ_COLORS
		FILE *fin=NULL;
		fopen_s(&fin,"d:\\colors.txt","rt");
#endif
#ifdef WRITE_COLORS
		FILE *fout=NULL;
		fopen_s(&fout,"d:\\colors.txt","wt");
#endif
#ifndef READ_COLORS
		int set=GetImmersiveUserColorSetPreference(false,false);
#endif
		g_MaxMetroColorType=0;
		for (int i=0;;i++)
		{
			const wchar_t *name=NULL;
			int type=i;
			COLORREF color=0;

#ifdef READ_COLORS
			char buf[200]={0};
			if (fin) fgets(buf,_countof(buf),fin);
#endif
			wchar_t text[256];
#ifdef READ_COLORS
			CStringW str;
			if (Strlen(buf)>9)
			{
				str=buf+9;
				str.Trim(L"\r\n");
				name=str;
			}
#else
			const wchar_t **ptr=GetImmersiveColorNamedTypeByIndex(i);
			if (ptr)
				name=*ptr;
#endif
			if (!name)
				break;
			Sprintf(text,_countof(text),L"Immersive%s",name);
#ifdef READ_COLORS
			char *end;
			color=strtoul(buf,&end,16);
			color=(color&0xFF00FF00)|((color>>16)&0xFF)|((color&0xFF)<<16);
#else
			type=GetImmersiveColorTypeFromName(text);
#endif
#ifdef WRITE_COLORS
			color=GetImmersiveColorFromColorSetEx(set,type,true,0);
			if (fout) fprintf(fout,"%02X%02X%02X%02X %S\n",(color>>24)&0xFF,color&0xFF,(color>>8)&0xFF,(color>>16)&0xFF,name);
#endif
			MetroColor mc;
			mc.name=text;
			mc.NAME=mc.name;
			mc.NAME.MakeUpper();
			mc.type=type;
			if (g_MaxMetroColorType<type)
				g_MaxMetroColorType=type;
#ifdef READ_COLORS
			mc.color=color;
#endif
			g_MetroColors.push_back(mc);
		}
#ifdef READ_COLORS
		if (fin) fclose(fin);
#endif
#ifdef WRITE_COLORS
		if (fout) fclose(fout);
#endif

		for (int i=0;i<_countof(g_SystemColors);i++)
		{
			MetroColor mc;
			mc.name=g_SystemColors[i].name;
			mc.NAME=mc.name;
			mc.NAME.MakeUpper();
			mc.type=g_MaxMetroColorType+1+i;
			mc.color=GetSysColor(g_SystemColors[i].code)|0xFF000000;
			g_MetroColors.push_back(mc);
		}

		CMetroColorViewer().DoModal(NULL);
	}
}

#endif
