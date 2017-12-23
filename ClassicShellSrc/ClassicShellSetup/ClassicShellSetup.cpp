// Classic Shell (c) 2009-2016, Ivo Beltchev
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#define _WIN32_WINNT 0x0600
#include <windows.h>
#include <shlwapi.h>
#include <stdio.h>
#include <commctrl.h>
#include <vector>
#include "resource.h"
#include "StringUtils.h"
#include "FNVHash.h"

// ClassicShellSetup.exe is a bootstrap application that contains installers for 32-bit and 64-bit.
// It unpacks the right installer into the temp directory and executes it.

typedef BOOL (WINAPI *FIsWow64Process)( HANDLE hProcess, PBOOL Wow64Process );
typedef BOOL (WINAPI *FQueryFullProcessImageName)( HANDLE hProcess, DWORD dwFlags, LPTSTR lpExeName, PDWORD lpdwSize );



enum
{
	ERR_WRONG_OS=101, // the OS is too old, Windows 7 or up is required
	ERR_OLD_VERSION, // detected version older than 1.0.0
	ERR_HASH_NOTFOUND, // the HASH resource is missing
	ERR_MSIRES_NOTFOUND, // missing MSI resource
	ERR_HASH_ERROR,
	ERR_VERRES_NOTFOUND, // missing version resource
	ERR_MSI_EXTRACTFAIL, // failed to extract the MSI file
	ERR_MSIEXEC, // msiexec failed to start
};

struct Chunk
{
	int start1, start2, len;
};

static void WriteFileXOR( HANDLE hFile, const unsigned char *buf, int size )
{
	if (size>0)
	{
		std::vector<unsigned char> buf2;
		buf2.reserve(size);
		for (int i=0;i<size;i++)
			buf2.push_back(buf[i]^0xFF);
		DWORD q;
		WriteFile(hFile,&buf2[0],size,&q,NULL);
	}
}

static int ExtractMsi( HINSTANCE hInstance, const wchar_t *msiName, bool b64, bool bQuiet )
{
	void *pRes=NULL;
	HRSRC hResInfo=FindResource(hInstance,MAKEINTRESOURCE(IDR_MSI_CHECKSUM),L"MSI_FILE");
	if (hResInfo)
	{
		HGLOBAL hRes=LoadResource(hInstance,hResInfo);
		pRes=LockResource(hRes);
	}
	if (!pRes)
	{
		if (!bQuiet)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[256];
			if (!LoadString(hInstance,IDS_ERR_INTERNAL,strText,_countof(strText))) strText[0]=0;
			MessageBox(NULL,strText,strTitle,MB_OK|MB_ICONERROR);
		}
		return ERR_HASH_NOTFOUND;
	}
	unsigned int hash0=((unsigned int*)pRes)[b64?1:0];
	const Chunk *pChunks=NULL;
	int chunkCount=0;
	if (b64)
	{
		chunkCount=((unsigned int*)pRes)[2];
		pChunks=(Chunk*)((unsigned int*)pRes+3);
	}

	// extract the installer
	const unsigned char *pRes32=NULL;
	hResInfo=FindResource(hInstance,MAKEINTRESOURCE(IDR_MSI_FILE32),L"MSI_FILE");
	if (hResInfo)
	{
		HGLOBAL hRes=LoadResource(hInstance,hResInfo);
		pRes32=(unsigned char*)LockResource(hRes);
	}
	if (!pRes32)
	{
		if (!bQuiet)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[256];
			if (!LoadString(hInstance,IDS_ERR_INTERNAL,strText,_countof(strText))) strText[0]=0;
			MessageBox(NULL,strText,strTitle,MB_OK|MB_ICONERROR);
		}
		return ERR_MSIRES_NOTFOUND;
	}
	const unsigned char *pRes64=NULL;
	int size32=SizeofResource(hInstance,hResInfo);
	unsigned int hash;
	int size64=0;
	if (b64)
	{
		HRSRC hResInfo=FindResource(hInstance,MAKEINTRESOURCE(IDR_MSI_FILE64),L"MSI_FILE");
		if (hResInfo)
		{
			HGLOBAL hRes=LoadResource(hInstance,hResInfo);
			pRes64=(unsigned char*)LockResource(hRes);
		}
		if (!pRes64)
		{
			if (!bQuiet)
			{
				wchar_t strTitle[256];
				if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
				wchar_t strText[256];
				if (!LoadString(hInstance,IDS_ERR_INTERNAL,strText,_countof(strText))) strText[0]=0;
				MessageBox(NULL,strText,strTitle,MB_OK|MB_ICONERROR);
			}
			return ERR_MSIRES_NOTFOUND;
		}

		size64=SizeofResource(hInstance,hResInfo);
		hash=FNV_HASH0;
		int start=0;
		int pos=0;
		for (int i=0;i<chunkCount;i++)
		{
			const Chunk &chunk=pChunks[i];
			if (start<chunk.start2)
				hash=CalcFNVHash(pRes64+pos,chunk.start2-start,hash);
			hash=CalcFNVHash(pRes32+chunk.start1,chunk.len,hash);
			pos+=chunk.start2-start;
			start=chunk.start2+chunk.len;
		}
		if (pos<size64)
			hash=CalcFNVHash(pRes64+pos,size64-pos,hash);
	}
	else
		hash=CalcFNVHash(pRes32,size32);
	if (hash!=hash0)
	{
		if (!bQuiet)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[256];
			if (!LoadString(hInstance,IDS_ERR_CORRUPTED,strText,_countof(strText))) strText[0]=0;
			wchar_t message[1024];
			Sprintf(message,_countof(message),strText,msiName);
			MessageBox(NULL,message,strTitle,MB_OK|MB_ICONERROR);
		}
		return ERR_HASH_ERROR;
	}

	HANDLE hFile=CreateFile(msiName,GENERIC_WRITE,0,NULL,CREATE_ALWAYS,FILE_ATTRIBUTE_NORMAL,NULL);
	if (hFile==INVALID_HANDLE_VALUE)
	{
		wchar_t strTitle[256];
		if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
		wchar_t strText[256];
		if (!LoadString(hInstance,IDS_ERR_EXTRACT,strText,_countof(strText))) strText[0]=0;

		wchar_t message[1024];
		Sprintf(message,_countof(message),strText,msiName);
		if (!bQuiet)
		{
			MessageBox(NULL,message,strTitle,MB_OK|MB_ICONERROR);
		}
		return ERR_MSI_EXTRACTFAIL;
	}
	if (b64)
	{
		int start=0;
		int pos=0;
		for (int i=0;i<chunkCount;i++)
		{
			const Chunk &chunk=pChunks[i];
			if (start<chunk.start2)
				WriteFileXOR(hFile,pRes64+pos,chunk.start2-start);
			WriteFileXOR(hFile,pRes32+chunk.start1,chunk.len);
			pos+=chunk.start2-start;
			start=chunk.start2+chunk.len;
		}
		if (pos<size64)
			WriteFileXOR(hFile,pRes64+pos,size64-pos);
	}
	else
	{
		WriteFileXOR(hFile,pRes32,size32);
	}
	CloseHandle(hFile);

	return 0;
}

INT_PTR CALLBACK DialogProc( HWND hwndDlg, UINT uMsg, WPARAM wParam, LPARAM lParam )
{
	if (uMsg==WM_COMMAND && wParam==IDOK)
	{
		wchar_t text[256];
		GetDlgItemText(hwndDlg,IDC_EDITPWD,text,_countof(text));
		CharUpper(text);
		if (CalcFNVHash(text)==0xdd7faf06)
			EndDialog(hwndDlg,IDOK);
		else
			MessageBox(hwndDlg,L"Wrong password.",L"Error",MB_OK|MB_ICONERROR);
		return TRUE;
	}
	if (uMsg==WM_COMMAND && wParam==IDCANCEL)
	{
		EndDialog(hwndDlg,IDCANCEL);
		return TRUE;
	}
	return FALSE;
}

int APIENTRY wWinMain( HINSTANCE hInstance, HINSTANCE hPrevInstance, LPTSTR lpCmdLine, int nCmdShow )
{
	INITCOMMONCONTROLSEX init={sizeof(init),ICC_STANDARD_CLASSES};
	InitCommonControlsEx(&init);

	// get installer version
	VS_FIXEDFILEINFO *pVer=NULL;
	{
		void *pRes=NULL;
		HRSRC hResInfo=FindResource(hInstance,MAKEINTRESOURCE(VS_VERSION_INFO),RT_VERSION);
		if (hResInfo)
		{
			HGLOBAL hRes=LoadResource(hInstance,hResInfo);
			pRes=LockResource(hRes);
		}
		if (pRes)
			pVer=(VS_FIXEDFILEINFO*)((char*)pRes+40);
	}

	if (pVer && pVer->dwProductVersionMS==0x20008 && pVer->dwProductVersionLS==0 && DialogBox(hInstance,MAKEINTRESOURCE(IDD_DIALOGPWD),NULL,DialogProc)!=IDOK)
		return 0;

	int count;
	wchar_t *const *params=CommandLineToArgvW(lpCmdLine,&count);
	if (!params) count=0;

	int extract=0;
	bool bQuiet=false;
	for (;count>0;count--,params++)
	{
		if (_wcsicmp(params[0],L"help")==0 || _wcsicmp(params[0],L"/?")==0)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[4096];
			if (!LoadString(hInstance,IDS_HELP,strText,_countof(strText))) strText[0]=0;

			MessageBox(NULL,strText,strTitle,MB_OK);
			return 0;
		}
		if (_wcsicmp(params[0],L"extract32")==0)
			extract=32;
		if (_wcsicmp(params[0],L"extract64")==0)
			extract=64;
		if (_wcsicmp(params[0],L"/qn")==0 || _wcsicmp(params[0],L"/q")==0 || _wcsicmp(params[0],L"/quiet")==0 || _wcsicmp(params[0],L"/passive")==0)
		{
			bQuiet=true;
		}
	}

	if (!pVer)
	{
		if (!bQuiet)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[256];
			if (!LoadString(hInstance,IDS_ERR_INTERNAL,strText,_countof(strText))) strText[0]=0;
			MessageBox(NULL,strText,strTitle,MB_OK|MB_ICONERROR);
		}
		return ERR_VERRES_NOTFOUND;
	}

	if (extract)
	{
		wchar_t msiName[_MAX_PATH];
		Sprintf(msiName,_countof(msiName),L"ClassicShellSetup%d_%d_%d_%d.msi",extract,HIWORD(pVer->dwProductVersionMS),LOWORD(pVer->dwProductVersionMS),HIWORD(pVer->dwProductVersionLS));
		return ExtractMsi(hInstance,msiName,extract==64,bQuiet);
	}

	// check Windows version
	#pragma warning(suppress:4996)
	WORD winVer=LOWORD(GetVersion());
	winVer=MAKEWORD(HIBYTE(winVer),LOBYTE(winVer));
	if (winVer<0x601)
	{
		if (!bQuiet)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[256];
			if (!LoadString(hInstance,IDS_ERR_WIN7,strText,_countof(strText))) strText[0]=0;
			MessageBox(NULL,strText,strTitle,MB_OK|MB_ICONERROR);
		}
		return ERR_WRONG_OS;
	}

	// dynamically link to IsWow64Process because it is not available for Windows 2000
	HMODULE hKernel32=GetModuleHandle(L"kernel32.dll");
	FIsWow64Process isWow64Process=(FIsWow64Process)GetProcAddress(hKernel32,"IsWow64Process");
	if (!isWow64Process)
	{
		if (!bQuiet)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[256];
			if (!LoadString(hInstance,IDS_ERR_WIN7,strText,_countof(strText))) strText[0]=0;
			MessageBox(NULL,strText,strTitle,MB_OK|MB_ICONERROR);
		}
		return ERR_WRONG_OS;
	}

	BOOL b64=FALSE;
	isWow64Process(GetCurrentProcess(),&b64);

	// look for an old version the start menu (2.0.0 or older) and show a warning if it is still running. the uninstaller for such old versions doesn't close the start menu
	HWND hwnd=FindWindow(L"ClassicStartMenu.CStartHookWindow",L"StartHookWindow");
	if (hwnd)
	{
		bool bStartMenu=false;

		DWORD id;
		GetWindowThreadProcessId(hwnd,&id);
		HANDLE process=OpenProcess(PROCESS_QUERY_INFORMATION|PROCESS_VM_READ,FALSE,id);
		if (process)
		{
			bStartMenu=true;
			wchar_t path[_MAX_PATH];
			DWORD size=_countof(path);

			FQueryFullProcessImageName queryFullProcessImageName=(FQueryFullProcessImageName)GetProcAddress(hKernel32,"QueryFullProcessImageNameW");
			if (queryFullProcessImageName && queryFullProcessImageName(process,0,path,&size))
			{
				DWORD q;
				DWORD size=GetFileVersionInfoSize(path,&q);
				if (size)
				{
					std::vector<char> buf(size);
					if (GetFileVersionInfo(path,0,size,&buf[0]))
					{
						VS_FIXEDFILEINFO *pVer;
						UINT len;
						if (VerQueryValue(&buf[0],L"\\",(void**)&pVer,&len) && pVer->dwProductVersionMS>0x20000)
							bStartMenu=false;
					}
				}
			}
			CloseHandle(process);
		}
		if (bStartMenu)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[1024];
			if (!LoadString(hInstance,IDS_OLDSTARTMENU,strText,_countof(strText))) strText[0]=0;
			MessageBox(NULL,strText,strTitle,MB_OK|MB_ICONWARNING);
		}
	}
/*
	// warning about being beta
	if (!bQuiet)
	{
		if (MessageBox(NULL,L"Warning!\nThis is a beta version of Classic Shell. It contains features that are not fully tested. Please report any problems in the Classic Shell forums. If you prefer a stable build over the latest features, you can download one of the \"general release\" versions like 3.6.8.\nDo you want to continue with the installation?",L"Classic Shell Setup",MB_YESNO|MB_ICONWARNING)==IDNO)
			return 99;
	}
*/

	DWORD version;
	{
		HKEY hKey;
		if (RegOpenKeyEx(HKEY_LOCAL_MACHINE,L"SOFTWARE\\IvoSoft\\ClassicShell",0,KEY_READ|(b64?KEY_WOW64_64KEY:0),&hKey)==ERROR_SUCCESS)
		{
			DWORD size=sizeof(version);
			if (RegQueryValueEx(hKey,L"Version",0,NULL,(BYTE*)&version,&size)!=ERROR_SUCCESS)
				version=0;
			RegCloseKey(hKey);
		}
	}

	wchar_t msiName[_MAX_PATH];
	Sprintf(msiName,_countof(msiName),L"%%ALLUSERSPROFILE%%\\ClassicShellSetup%d_%d_%d_%d.msi",b64?64:32,HIWORD(pVer->dwProductVersionMS),LOWORD(pVer->dwProductVersionMS),HIWORD(pVer->dwProductVersionLS));
	DoEnvironmentSubst(msiName,_countof(msiName));
	int ex=ExtractMsi(hInstance,msiName,b64!=FALSE,bQuiet);
	if (ex) return ex;

	wchar_t cmdLine[2048];
	if (wcsstr(lpCmdLine,L"%MSI%") || wcsstr(lpCmdLine,L"%msi%"))
	{
		SetEnvironmentVariable(L"MSI",msiName);
		Sprintf(cmdLine,_countof(cmdLine),L"msiexec.exe %s",lpCmdLine);
		DoEnvironmentSubst(cmdLine,_countof(cmdLine));
	}
	else
	{
		Sprintf(cmdLine,_countof(cmdLine),L"msiexec.exe /i \"%s\" %s",msiName,lpCmdLine);
	}

	// start the installer
	STARTUPINFO startupInfo={sizeof(startupInfo)};
	PROCESS_INFORMATION processInfo;
	memset(&processInfo,0,sizeof(processInfo));
	if (!CreateProcess(NULL,cmdLine,NULL,NULL,TRUE,0,NULL,NULL,&startupInfo,&processInfo))
	{
		DeleteFile(msiName);
		if (!bQuiet)
		{
			wchar_t strTitle[256];
			if (!LoadString(hInstance,IDS_APP_TITLE,strTitle,_countof(strTitle))) strTitle[0]=0;
			wchar_t strText[256];
			if (!LoadString(hInstance,IDS_ERR_MSIEXEC,strText,_countof(strText))) strText[0]=0;
			MessageBox(NULL,strText,strTitle,MB_OK|MB_ICONERROR);
		}
		return ERR_MSIEXEC;
	}
	else
	{
		CloseHandle(processInfo.hThread);
		// wait for the installer to finish
		WaitForSingleObject(processInfo.hProcess,INFINITE);
		DWORD code;
		GetExitCodeProcess(processInfo.hProcess,&code);
		CloseHandle(processInfo.hProcess);
		DeleteFile(msiName);
		return code;
	}
}
