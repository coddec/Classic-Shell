// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#ifndef _WIN64

#include "resource.h"
#include <atlbase.h>
#include <atltypes.h>
#include <atlstr.h>
#include <atlwin.h>
#include "..\StartMenu\StartMenuDLL\LogManager.h"
#include "StringUtils.h"
#include <shlobj.h>

static int g_MenuCheckboxes[][2]=
{
	{IDC_CHECKOPEN, LOG_OPEN},
	{IDC_CHECKITEMS, LOG_ITEMS},
	{IDC_CHECKEXECUTE, LOG_EXECUTE},
	{IDC_CHECKMFU, LOG_MFU},
	{IDC_CHECKNEW, LOG_NEW},
	{IDC_CHECKAPPS, LOG_APPS},
	{IDC_CHECKSEARCH, LOG_SEARCH},
	{IDC_CHECKSEARCH_SQL, LOG_SEARCH_SQL},
	{IDC_CHECKMOUSE, LOG_MOUSE},
	{IDC_CHECKCACHE, LOG_CACHE},
};

static int g_FileLinks[]=
{
	IDC_SYSLINKSTART,
	IDC_SYSLINKCACHE,
	IDC_SYSLINKSTARTUP,
	IDC_SYSLINKEXPLORER,
	IDC_SYSLINKIE,
};

class CLoggingDialog: public CDialogImpl<CLoggingDialog>
{
public:
	CLoggingDialog( void ) {}

	BEGIN_MSG_MAP( CLoggingDialog )
		MESSAGE_HANDLER( WM_INITDIALOG, OnInitDialog )
		COMMAND_HANDLER( IDOK, BN_CLICKED, OnOK )
		COMMAND_HANDLER( IDCANCEL, BN_CLICKED, OnCancel )
		NOTIFY_HANDLER( IDC_SYSLINKSTART, NM_CLICK, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKSTART, NM_RETURN, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKCACHE, NM_CLICK, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKCACHE, NM_RETURN, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKSTARTUP, NM_CLICK, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKSTARTUP, NM_RETURN, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKEXPLORER, NM_CLICK, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKEXPLORER, NM_RETURN, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKIE, NM_CLICK, OnLink )
		NOTIFY_HANDLER( IDC_SYSLINKIE, NM_RETURN, OnLink )
		REFLECT_NOTIFICATIONS()
	END_MSG_MAP()

	enum { IDD=IDD_LOGSETTINGS };

protected:
	LRESULT OnInitDialog( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled );
	LRESULT OnOK( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled );
	LRESULT OnCancel( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled );
	LRESULT OnLink( int idCtrl, LPNMHDR pnmh, BOOL& bHandled );

private:
	DWORD GetSetting( const wchar_t *regPath, const wchar_t *name );
	void SetSetting( const wchar_t *regPath, const wchar_t *name, DWORD value );
	CString GetPathForLink( int link );
};

DWORD CLoggingDialog::GetSetting( const wchar_t *regPath, const wchar_t *name )
{
	CRegKey regKey;
	if (regKey.Open(HKEY_CURRENT_USER,regPath,KEY_READ|KEY_WOW64_64KEY)==ERROR_SUCCESS)
	{
		DWORD value;
		if (regKey.QueryDWORDValue(name,value)==ERROR_SUCCESS)
			return value;
	}
	return 0;
}

void CLoggingDialog::SetSetting( const wchar_t *regPath, const wchar_t *name, DWORD value )
{
	CRegKey regKey;
	if (regKey.Create(HKEY_CURRENT_USER,regPath)==ERROR_SUCCESS)
		regKey.SetDWORDValue(name,value);
}

CString CLoggingDialog::GetPathForLink( int link )
{
	const wchar_t *path=NULL;
	if (link==IDC_SYSLINKSTART)
		path=L"%LOCALAPPDATA%\\OpenShell\\StartMenuLog.txt";
	else if (link==IDC_SYSLINKCACHE)
		path=L"%LOCALAPPDATA%\\OpenShell\\DataCache.txt";
	else if (link==IDC_SYSLINKSTARTUP)
		path=L"%LOCALAPPDATA%\\OpenShell\\StartupLog.txt";
	else if (link==IDC_SYSLINKEXPLORER)
		path=L"%LOCALAPPDATA%\\OpenShell\\ExplorerLog.txt";
	else if (link==IDC_SYSLINKIE)
		path=L"%LOCALAPPDATA%\\OpenShell\\ClassicIELog.txt";
	else
		return CString();

	wchar_t fname[_MAX_PATH];
	Strcpy(fname,_countof(fname),path);
	DoEnvironmentSubst(fname,_countof(fname));
	return fname;
}

LRESULT CLoggingDialog::OnInitDialog( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled )
{
	DWORD log=GetSetting(L"Software\\OpenShell\\StartMenu\\Settings",L"LogCategories");
	for (int i=0;i<_countof(g_MenuCheckboxes);i++)
	{
		if (log&g_MenuCheckboxes[i][1])
			CheckDlgButton(g_MenuCheckboxes[i][0],BST_CHECKED);
	}

	log=GetSetting(L"Software\\OpenShell\\StartMenu\\Settings",L"LogStartup");
	if (log)
		CheckDlgButton(IDC_CHECKSTARTUP,BST_CHECKED);

	log=GetSetting(L"Software\\OpenShell\\ClassicExplorer\\Settings",L"LogLevel");
	if (log)
		CheckDlgButton(IDC_CHECKEXPLORER,BST_CHECKED);

	log=GetSetting(L"Software\\OpenShell\\ClassicIE\\Settings",L"LogLevel");
	if (log)
		CheckDlgButton(IDC_CHECKIE,BST_CHECKED);

	CWindow tooltip;
	tooltip.Create(TOOLTIPS_CLASS,m_hWnd,NULL,NULL,WS_POPUP|TTS_NOPREFIX);
	for (int i=0;i<_countof(g_FileLinks);i++)
	{
		TOOLINFO tool={sizeof(tool),TTF_SUBCLASS|TTF_IDISHWND,m_hWnd,(UINT_PTR)GetDlgItem(g_FileLinks[i]).m_hWnd};
		CString str=GetPathForLink(g_FileLinks[i]);
		tool.lpszText=(LPWSTR)(LPCWSTR)str;
		tooltip.SendMessage(TTM_ADDTOOL,0,(LPARAM)&tool);
	}

	return TRUE;
}

LRESULT CLoggingDialog::OnOK( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled )
{
	int res=0;
	DWORD log=0;
	for (int i=0;i<_countof(g_MenuCheckboxes);i++)
	{
		if (IsDlgButtonChecked(g_MenuCheckboxes[i][0])==BST_CHECKED)
			log|=g_MenuCheckboxes[i][1];
	}
	if (log!=GetSetting(L"Software\\OpenShell\\StartMenu\\Settings",L"LogCategories"))
	{
		SetSetting(L"Software\\OpenShell\\StartMenu\\Settings",L"LogCategories",log);
		res=1;
	}

	log=IsDlgButtonChecked(IDC_CHECKSTARTUP)==BST_CHECKED?1:0;
	if (log!=GetSetting(L"Software\\OpenShell\\StartMenu\\Settings",L"LogStartup"))
	{
		SetSetting(L"Software\\OpenShell\\StartMenu\\Settings",L"LogStartup",log);
		res=1;
	}

	log=IsDlgButtonChecked(IDC_CHECKEXPLORER)==BST_CHECKED?1:0;
	if (log!=GetSetting(L"Software\\OpenShell\\ClassicExplorer\\Settings",L"LogLevel"))
	{
		SetSetting(L"Software\\OpenShell\\ClassicExplorer\\Settings",L"LogLevel",log);
		res=1;
	}

	log=IsDlgButtonChecked(IDC_CHECKIE)==BST_CHECKED?1:0;
	if (log!=GetSetting(L"Software\\OpenShell\\ClassicIE\\Settings",L"LogLevel"))
	{
		SetSetting(L"Software\\OpenShell\\ClassicIE\\Settings",L"LogLevel",log);
		res=1;
	}

	EndDialog(res);
	return 0;
}

LRESULT CLoggingDialog::OnCancel( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled )
{
	EndDialog(0);
	return 0;
}

LRESULT CLoggingDialog::OnLink( int idCtrl, LPNMHDR pnmh, BOOL& bHandled )
{
	CString path=GetPathForLink(idCtrl);
	if (!path.IsEmpty())
	{
		PIDLIST_ABSOLUTE pidl;
		if (SUCCEEDED(SHParseDisplayName(path,NULL,&pidl,0,NULL)))
		{
			HRESULT hr=SHOpenFolderAndSelectItems(pidl,0,NULL,0);
			ILFree(pidl);
		}
		else
		{
			wchar_t dir[_MAX_PATH];
			Strcpy(dir,_countof(dir),path);
			PathRemoveFileSpec(dir);
			ShellExecute(NULL,L"open",dir,NULL,dir,SW_SHOWNORMAL);
		}
	}
	return 0;
}

void EditLoggingOptions( void )
{
	if (CLoggingDialog().DoModal(NULL))
	{
		MessageBox(NULL,L"The changes to the logging options will take effect after you restart.",L"Logging options",MB_OK|MB_ICONINFORMATION);
	}
}

#endif
