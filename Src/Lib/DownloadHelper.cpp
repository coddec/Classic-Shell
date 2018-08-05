// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#include <stdafx.h>
#include "resource.h"
#include "..\Setup\UpdateBin\resource.h"
#include "DownloadHelper.h"
#include "Settings.h"
#include "SettingsUIHelper.h"
#include "LanguageSettingsHelper.h"
#include "ResourceHelper.h"
#include "ComHelper.h"
#include "FNVHash.h"
#include "StringUtils.h"
#include "Translations.h"
#include <wininet.h>
#include <softpub.h>

//#define UPDATE_LOG L"-|%LOCALAPPDATA%\\OpenShell\\UpdateLog.txt"

const __int64 TIME_DIVISOR=360000000; // divisor for FILETIME to get 0.01 hour precision
const int TIME_PRECISION=100; // 0.01 hour precision

class CProgressDlg: public CResizeableDlg<CProgressDlg>
{
public:
	CProgressDlg( void );
	BEGIN_MSG_MAP( CProgressDlg )
		MESSAGE_HANDLER( WM_INITDIALOG, OnInitDialog )
		MESSAGE_HANDLER( WM_CLEAR, OnClear )
		COMMAND_HANDLER( IDCANCEL, BN_CLICKED, OnCancel )
	END_MSG_MAP()

	BEGIN_RESIZE_MAP
	END_RESIZE_MAP

	void Create( HWND owner, const wchar_t *title );
	void SetText( const wchar_t *text ); // may block if messages are not processed
	void SetProgress( int progress ); // -1 for undefined
	void EnableCancel( bool bEnabled );
	bool IsCanceled( void ) const { return m_bCanceled; }

protected:
	// Handler prototypes:
	//  LRESULT MessageHandler(UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled);
	//  LRESULT CommandHandler(WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled);
	//  LRESULT NotifyHandler(int idCtrl, LPNMHDR pnmh, BOOL& bHandled);
	LRESULT OnInitDialog( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled );
	LRESULT OnClear( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled );
	LRESULT OnCancel( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled );

private:
	bool m_bCanceled;
	bool m_bMarquee;
	CWindow m_Progress;

	enum
	{
		COMMAND_SET_PROGRESS,
		COMMAND_ENABLE_CANCEL,
	};
};

CProgressDlg::CProgressDlg( void )
{
	m_bCanceled=m_bMarquee=false;
}

LRESULT CProgressDlg::OnInitDialog( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled )
{
	InitResize(MOVE_HORIZONTAL|MOVE_VERTICAL);
	m_Progress=GetDlgItem(IDC_PROGRESS);
	m_Progress.SendMessage(PBM_SETRANGE,0,MAKELPARAM(0,100));
	return TRUE;
}

void CProgressDlg::Create( HWND owner, const wchar_t *title )
{
	DLGTEMPLATE *pTemplate=LoadDialogEx(IDD_PROGRESS);
	CResizeableDlg<CProgressDlg>::Create(owner,pTemplate);
	SetWindowText(title);
	ShowWindow(SW_SHOW);
	SetDlgItemText(IDC_MESSAGE,L"");
}

void CProgressDlg::SetText( const wchar_t *text )
{
	SetDlgItemText(IDC_MESSAGE,text);
}

void CProgressDlg::SetProgress( int progress )
{
	PostMessage(WM_CLEAR,COMMAND_SET_PROGRESS,progress);
}

void CProgressDlg::EnableCancel( bool bEnabled )
{
	PostMessage(WM_CLEAR,COMMAND_ENABLE_CANCEL,bEnabled?1:0);
}

LRESULT CProgressDlg::OnClear( UINT uMsg, WPARAM wParam, LPARAM lParam, BOOL& bHandled )
{
	if (wParam==COMMAND_SET_PROGRESS)
	{
		int progress=(int)lParam;
		if (progress>=0)
		{
			if (m_bMarquee)
			{
				m_Progress.SendMessage(PBM_SETMARQUEE,FALSE);
				m_bMarquee=false;
			}
			m_Progress.SendMessage(PBM_SETPOS,progress);
		}
		else
		{
			if (!m_bMarquee)
			{
				m_Progress.SendMessage(PBM_SETMARQUEE,TRUE,50);
				m_Progress.SetWindowLong(GWL_STYLE,m_Progress.GetWindowLong(GWL_STYLE)|PBS_MARQUEE);
				m_bMarquee=true;
			}
			m_Progress.SendMessage(PBM_STEPIT);
		}
	}
	else if (wParam==COMMAND_ENABLE_CANCEL)
	{
		GetDlgItem(IDCANCEL).EnableWindow(lParam!=0);
	}
	return 0;
}

LRESULT CProgressDlg::OnCancel( WORD wNotifyCode, WORD wID, HWND hWndCtl, BOOL& bHandled )
{
	m_bCanceled=true;
	return 0;
}

///////////////////////////////////////////////////////////////////////////////

static bool g_bCheckingVersion;

static DWORD GetTimeStamp( const wchar_t *fname )
{
	HANDLE h=CreateFile(fname,GENERIC_READ,FILE_SHARE_READ,NULL,OPEN_EXISTING,FILE_ATTRIBUTE_NORMAL,NULL);
	if (h==INVALID_HANDLE_VALUE)
		return 0;
	DWORD res=0;
	DWORD q;
	IMAGE_DOS_HEADER header;
	if (ReadFile(h,&header,sizeof(header),&q,NULL) && q==sizeof(header))
	{
		if (SetFilePointer(h,header.e_lfanew+8,NULL,FILE_BEGIN)!=INVALID_SET_FILE_POINTER)
		{
			if (!ReadFile(h,&res,4,&q,NULL) || q!=4)
				res=0;
		}
	}
	CloseHandle(h);
	return res;
}

enum TDownloadResult
{
	DOWNLOAD_OK,
	DOWNLOAD_SAMETIME,
	DOWNLOAD_CANCEL,

	// errors
	DOWNLOAD_FIRST_ERROR,
	DOWNLOAD_INTERNET=DOWNLOAD_FIRST_ERROR,
	DOWNLOAD_START,
	DOWNLOAD_FAIL,
};

// Downloads a file
// filename - returns the name of the downloaded file
// timestamp - if not zero, it is compared to the timestamp of the file and returns DOWNLOAD_SAMETIME if the same (and buf will be empty)
static TDownloadResult DownloadFile( const wchar_t *url, std::vector<char> &buf, CString *pFilename, DWORD timestamp, bool bAcceptCached, CProgressDlg *pProgress, TSettingsComponent component )
{
	const wchar_t *compName=L"Open-Shell";
	switch (component)
	{
		case COMPONENT_EXPLORER: compName=L"Classic Explorer"; break;
		case COMPONENT_MENU: compName=L"Open-Shell Menu"; break;
		case COMPONENT_IE: compName=L"Classic IE"; break;
		case COMPONENT_UPDATE: compName=L"Open-Shell Update"; break;
	}

	DWORD compVersion=GetVersionEx(g_Instance);

	wchar_t agent[100];
	Sprintf(agent,_countof(agent),L"%s %d.%d.%d (Win %x)",compName,compVersion>>24,(compVersion>>16)&0xFF,compVersion&0xFFFF,GetWinVersion());

	TDownloadResult res=DOWNLOAD_OK;
	HINTERNET hInternet=InternetOpen(agent,INTERNET_OPEN_TYPE_PRECONFIG,NULL,NULL,0);
	if (!hInternet)
		return DOWNLOAD_INTERNET;
	if (pProgress && pProgress->IsCanceled())
		res=DOWNLOAD_CANCEL;

	wchar_t host[256];
	wchar_t file[256];
	URL_COMPONENTS components={sizeof(components)};
	components.lpszHostName=host;
	components.dwHostNameLength=_countof(host);
	components.lpszUrlPath=file;
	components.dwUrlPathLength=_countof(file);
	InternetCrackUrl(url,0,0,&components);
	int time=GetTickCount();
	if (pProgress)
		pProgress->SetText(LoadStringEx(IDS_PROGRESS_CONNECT));
	HINTERNET hConnect=InternetConnect(hInternet,host,INTERNET_DEFAULT_HTTP_PORT,L"",L"",INTERNET_SERVICE_HTTP,0,0);
	if (hConnect)
	{
		if (pProgress && pProgress->IsCanceled())
			res=DOWNLOAD_CANCEL;
		const wchar_t *accept[]={L"*/*",NULL};
		if (res==DOWNLOAD_OK)
		{
			HINTERNET hRequest=HttpOpenRequest(hConnect,L"GET",file,NULL,NULL,accept,bAcceptCached?0:INTERNET_FLAG_RELOAD,0);
			if (hRequest)
			{
				if (pProgress && pProgress->IsCanceled())
					res=DOWNLOAD_CANCEL;
				// get size (may be missing)
				DWORD fileSize;
				if (res==DOWNLOAD_OK)
				{
					if (HttpSendRequest(hRequest,NULL,0,NULL,0))
					{
						DWORD len=sizeof(fileSize);
						DWORD index=0;
						if (!HttpQueryInfo(hRequest,HTTP_QUERY_CONTENT_LENGTH|HTTP_QUERY_FLAG_NUMBER,&fileSize,&len,&index))
							fileSize=0;
					}
					else
						res=DOWNLOAD_START;
				}

				// get file name (must be after HttpSendRequest to resolve any redirections)
				if (res==DOWNLOAD_OK && pFilename)
				{
					wchar_t buf[1024];
					DWORD len=sizeof(buf);
					if (InternetQueryOption(hRequest,INTERNET_OPTION_URL,buf,&len))
					{
						const wchar_t *name=wcsrchr(buf,'/');
						if (name && name[1])
							*pFilename=name+1;
						else
							res=DOWNLOAD_START;
					}
					else
						res=DOWNLOAD_START;
				}

				if (res==DOWNLOAD_OK)
				{
					if (pProgress)
					{
						pProgress->SetText(LoadStringEx(IDS_PROGRESS_DOWNLOAD));
						if (fileSize==0)
							pProgress->SetProgress(-1);
					}
					int CHUNK_SIZE=timestamp?1024:32768; // start with small chunk to verify the timestamp
					DWORD size=0;
					buf.reserve(fileSize+CHUNK_SIZE);
					while (1)
					{
						if (pProgress && pProgress->IsCanceled())
						{
							res=DOWNLOAD_CANCEL;
							break;
						}
						DWORD dwSize;
						buf.resize(size+CHUNK_SIZE);
						if (!InternetReadFile(hRequest,&buf[size],CHUNK_SIZE,&dwSize))
						{
							res=DOWNLOAD_FAIL;
							break;
						}
						if (dwSize==0)
							break;
						size+=dwSize;
						if (pProgress && fileSize)
							pProgress->SetProgress(size*100/fileSize);
						if (timestamp && (size<sizeof(IMAGE_DOS_HEADER) || buf[0]!='M' || buf[1]!='Z'))
						{
							res=DOWNLOAD_FAIL;
							break;
						}
						if (timestamp && size>=sizeof(IMAGE_DOS_HEADER))
						{
							DWORD pos=((IMAGE_DOS_HEADER*)&buf[0])->e_lfanew+8;
							if (size>=pos+4)
							{
								if (timestamp==*(DWORD*)&buf[pos])
								{
									res=DOWNLOAD_SAMETIME;
									break;
								}
								timestamp=0;
								CHUNK_SIZE=32768;
							}
						}
					}
					buf.resize(size);
				}
				InternetCloseHandle(hRequest);
			}
			else
				res=DOWNLOAD_START;
		}
		InternetCloseHandle(hConnect);
	}
	else
		res=DOWNLOAD_START;

	InternetCloseHandle(hInternet);
	return res;
}

static int SaveFile( const wchar_t *fname, const std::vector<char> &buf )
{
	HANDLE h=CreateFile(fname,GENERIC_WRITE,0,NULL,CREATE_ALWAYS,FILE_ATTRIBUTE_NORMAL,NULL);
	int err=0;
	if (h!=INVALID_HANDLE_VALUE)
	{
		DWORD size=(DWORD)buf.size();
		DWORD q;
		if (WriteFile(h,&buf[0],size,&q,NULL) && q==size)
			CloseHandle(h);
		else
		{
			err=GetLastError();
#ifdef UPDATE_LOG
			LogToFile(UPDATE_LOG,L"Failed to write file '%s': 0x%08X",fname,err);
#endif
			CloseHandle(h);
			DeleteFile(fname);
		}
	}
	else
	{
		err=GetLastError();
#ifdef UPDATE_LOG
		LogToFile(UPDATE_LOG,L"Failed to save file '%s': 0x%08X",fname,err);
#endif
	}
	return err;
}

struct VersionCheckParams
{
	TVersionCheck check;
	TSettingsComponent component;
	tNewVersionCallback callback;
	CProgressDlg *progress;
};

// 0 - fail, 1 - success, 2 - cancel
static DWORD WINAPI ThreadVersionCheck( void *param )
{
	VersionCheckParams params=*(VersionCheckParams*)param;
	delete param;
	param=NULL;
	ULONGLONG curTimeL;
	GetSystemTimeAsFileTime((FILETIME*)&curTimeL);
	DWORD curTime=(DWORD)(curTimeL/TIME_DIVISOR); // in 0.01 hours

	CRegKey regKey;
	if (regKey.Open(HKEY_CURRENT_USER,L"Software\\OpenShell\\OpenShell")!=ERROR_SUCCESS)
	{
		g_bCheckingVersion=false;
		return 0;
	}
	DWORD curVersion=GetVersionEx(g_Instance);
	regKey.SetDWORDValue(L"LastUpdateVersion",curVersion);

	// download file
	wchar_t fname[_MAX_PATH]=L"%ALLUSERSPROFILE%\\OpenShell";
	DoEnvironmentSubst(fname,_countof(fname));
	SHCreateDirectory(NULL,fname);
	PathAppend(fname,L"update.ver");

	bool res=false;
	CString urlBase=LoadStringEx(IDS_VERSION_URL);
	VersionData data;
	data.Clear();
	if (data.Load(fname,false)==VersionData::LOAD_OK)
	{
		if (!data.altUrl.IsEmpty())
			urlBase=data.altUrl;
		WIN32_FILE_ATTRIBUTE_DATA attr;
		if (GetFileAttributesEx(fname,GetFileExInfoStandard,&attr))
		{
			DWORD writeTime=(DWORD)(((((ULONGLONG)attr.ftLastWriteTime.dwHighDateTime)<<32)|attr.ftLastWriteTime.dwLowDateTime)/TIME_DIVISOR);
			if (curTime>writeTime && (curTime-writeTime)<TIME_PRECISION)
			{
				res=true; // the file is valid and less than an hour old, don't download again
			}
		}
	}
	if (!res)
	{
		data.Clear();
		CString url;
		url.Format(L"%s%d.%d.%d.ver",urlBase,curVersion>>24,(curVersion>>16)&0xFF,curVersion&0xFFFF);

	#ifdef UPDATE_LOG
		LogToFile(UPDATE_LOG,L"URL: %s",url);
	#endif

		std::vector<char> buf;
		TDownloadResult download=DownloadFile(url,buf,NULL,GetTimeStamp(fname),false,params.progress,params.component);
	#ifdef UPDATE_LOG
		LogToFile(UPDATE_LOG,L"Download result: %d",download);
	#endif
		if (download==DOWNLOAD_CANCEL)
		{
			g_bCheckingVersion=false;
			return 2;
		}

		if (download<DOWNLOAD_FIRST_ERROR)
		{
			if (download==DOWNLOAD_SAMETIME || SaveFile(fname,buf)==0)
			{
				if (download==DOWNLOAD_SAMETIME)
				{
					HANDLE h=CreateFile(fname,GENERIC_WRITE,0,NULL,OPEN_EXISTING,FILE_ATTRIBUTE_NORMAL,NULL);
					if (h!=INVALID_HANDLE_VALUE)
					{
						SetFileTime(h,NULL,NULL,(FILETIME*)&curTimeL);
						CloseHandle(h);
					}
				}
				if (params.progress)
				{
					params.progress->SetText(LoadStringEx(IDS_PROGRESS_VERIFY));
					params.progress->SetProgress(-1);
				}
				VersionData::TLoadResult load=data.Load(fname,false);
	#ifdef UPDATE_LOG
				LogToFile(UPDATE_LOG,L"Load result: %d",load);
	#endif
				if (load==VersionData::LOAD_BAD_FILE)
					DeleteFile(fname);
				res=(load==VersionData::LOAD_OK);
			}
		}
	}

	curTime+=(rand()*TIME_PRECISION)/(RAND_MAX+1)-(TIME_PRECISION/2); // add between -30 and 30 minutes to randomize access
	if (!res)
	{
		g_bCheckingVersion=false;
		// if the check failed pretend we checked 5 days ago (so we check again in 48 hours)
		if (curTime>24*5*TIME_PRECISION)
			regKey.SetDWORDValue(L"LastUpdateTime",curTime-24*5*TIME_PRECISION);
		return 0;
	}

	regKey.SetDWORDValue(L"LastUpdateTime",curTime);

	{
		DWORD remindedVersion;
		if (regKey.QueryDWORDValue(L"RemindedVersion",remindedVersion)!=ERROR_SUCCESS)
			remindedVersion=0;
		data.bNewVersion=(data.newVersion>curVersion);
		data.bIgnoreVersion=(data.bNewVersion && data.newVersion<=remindedVersion);
	}
	{
		wchar_t languages[100]={0};
		CString language2=GetSettingString(L"Language");
		if (!language2.IsEmpty())
		{
			Strcpy(languages,_countof(languages)-1,language2);
		}
		else
		{
			ULONG size=0;
			ULONG len=_countof(languages);
			GetUserPreferredUILanguages(MUI_LANGUAGE_NAME,&size,languages,&len);
		}

		bool bNewLanguage=false;
		for (wchar_t *lang=languages;*lang;lang+=Strlen(lang)+1)
		{
			if (_wcsicmp(lang,L"en")==0 || _wcsnicmp(lang,L"en-",3)==0)
				break; // English
			DWORD dllVersion=0, dllBuild=0;
			HINSTANCE resInstance=LoadTranslationDll(lang);
			if (resInstance)
			{
				dllVersion=GetVersionEx(resInstance,&dllBuild);
				FreeLibrary(resInstance);
			}

			DWORD newVersion=0, newBuild=0;
			for (std::vector<LanguageVersionData>::const_iterator it=data.languages.begin();it!=data.languages.end();++it)
			{
				if (_wcsicmp(it->language,lang)==0)
				{
					newVersion=it->version;
					newBuild=it->build;
					break;
				}
			}
			if (newVersion==0)
				continue;

			if (newVersion>dllVersion || (newVersion==dllVersion && newBuild>dllBuild))
			{
				// a new DLL for this language exists
				data.bNewLanguage=true;
				data.newLanguage=lang;
				data.encodedLangVersion=(newVersion&0xFFFF0000)|((newVersion&0xFF)<<8)|(newBuild&0xFF);
				DWORD remindedVersion;
				if (regKey.QueryDWORDValue(L"RemindedLangVersion",remindedVersion)!=ERROR_SUCCESS)
					remindedVersion=0;
				data.bIgnoreLanguage=(data.encodedLangVersion<=remindedVersion);
			}
			break;
		}
	}

	data.bValid=true;
	if (params.check==CHECK_UPDATE)
	{
		params.callback(data);
		g_bCheckingVersion=false;
		return 1;
	}
	if ((data.bNewVersion && !data.bIgnoreVersion) || (data.bNewLanguage && !data.bIgnoreLanguage))
		params.callback(data);
	g_bCheckingVersion=false;
	return 0;
}

DWORD CheckForNewVersion( HWND owner, TSettingsComponent component, TVersionCheck check, tNewVersionCallback callback )
{
	if (g_bCheckingVersion) return 0;

	if (check==CHECK_UPDATE)
	{
		g_bCheckingVersion=true;
		VersionCheckParams *params=new VersionCheckParams;
		params->check=check;
		params->component=component;
		params->callback=callback;
		params->progress=NULL;

		if (!owner)
			return ThreadVersionCheck(params);

		CProgressDlg progress;
		params->progress=&progress;
		progress.Create(owner,LoadStringEx(IDS_PROGRESS_TITLE_CHECK));

		HANDLE hThread=CreateThread(NULL,0,ThreadVersionCheck,params,0,NULL);

		while (1)
		{
			DWORD wait=MsgWaitForMultipleObjects(1,&hThread,FALSE,INFINITE,QS_ALLINPUT);
			if (wait!=WAIT_OBJECT_0+1)
				break;
			MSG msg;
			while (PeekMessage(&msg,0,0,0,PM_REMOVE))
			{
				TranslateMessage(&msg);
				DispatchMessage(&msg);
			}
		}
		progress.DestroyWindow();
		DWORD exit;
		if (!GetExitCodeThread(hThread,&exit))
			exit=0;
		CloseHandle(hThread);
		return exit;
	}
	else
	{
		DWORD buildTime=0;
		{
			// skip the update if the update component is not found
			wchar_t path[_MAX_PATH];
			GetModuleFileName(_AtlBaseModule.GetModuleInstance(),path,_countof(path));
			PathRemoveFileSpec(path);
			PathAppend(path,L"Update.exe");

			WIN32_FILE_ATTRIBUTE_DATA attr;
			if (!GetFileAttributesEx(path,GetFileExInfoStandard,&attr))
				return 0;

			buildTime=(DWORD)(((((ULONGLONG)attr.ftCreationTime.dwHighDateTime)<<32)|attr.ftCreationTime.dwLowDateTime)/TIME_DIVISOR); // in 0.01 hours
		}

		ULONGLONG curTimeL;
		GetSystemTimeAsFileTime((FILETIME*)&curTimeL);
		DWORD curTime=(DWORD)(curTimeL/TIME_DIVISOR); // in 0.01 hours
		if (curTime-buildTime>24*365*TIME_PRECISION)
			return 0; // the build is more than a year old, don't do automatic updates

		CRegKey regKey;
		if (regKey.Open(HKEY_CURRENT_USER,L"Software\\OpenShell\\OpenShell")!=ERROR_SUCCESS)
			regKey.Create(HKEY_CURRENT_USER,L"Software\\OpenShell\\OpenShell");

		DWORD lastVersion;
		if (regKey.QueryDWORDValue(L"LastUpdateVersion",lastVersion)!=ERROR_SUCCESS)
			lastVersion=0;
		if (lastVersion==GetVersionEx(g_Instance))
		{
			DWORD lastTime;
			if (regKey.QueryDWORDValue(L"LastUpdateTime",lastTime)!=ERROR_SUCCESS)
				lastTime=0;
			if ((int)(curTime-lastTime)<168*TIME_PRECISION)
				return 0; // check weekly
		}

		// check the Update setting (uses the current value in the registry, not the one from memory
		{
			CRegKey regSettings, regSettingsUser, regPolicy, regPolicyUser;
			bool bUpgrade=OpenSettingsKeys(COMPONENT_SHARED,regSettings,regSettingsUser,regPolicy,regPolicyUser);

			CSetting settings[]={
				{L"Update",CSetting::TYPE_BOOL,0,0,1},
				{NULL}
			};

			settings[0].LoadValue(regSettings,regSettingsUser,regPolicy,regPolicyUser);

			if (!GetSettingBool(settings[0]))
					return 0;
		}

		VersionCheckParams *params=new VersionCheckParams;
		params->check=check;
		params->component=component;
		params->callback=callback;
		params->progress=NULL;

		g_bCheckingVersion=true;
		if (check==CHECK_AUTO_WAIT)
			return ThreadVersionCheck(params);
		HANDLE hThread=CreateThread(NULL,0,ThreadVersionCheck,params,0,NULL);
		CloseHandle(hThread);
		return hThread!=NULL?1:0;
	}
}

static CString LoadStringEx( HMODULE hModule, int stringId, int langId )
{
	CString res;

	HRSRC hrsrc=FindResourceEx(hModule,RT_STRING,MAKEINTRESOURCE((stringId>>4)+1),(WORD)langId);
	if (!hrsrc) return res;
	HGLOBAL hglb=LoadResource(hModule,hrsrc);
	if (!hglb) return res;
	WORD *data=(WORD*)LockResource(hglb);
	if (!data) return res;

	stringId&=15;
	for (int i=0;i<stringId;i++)
		data+=*data+1;
	int len=*data;
	data++;

	if (len)
	{
		wchar_t *buf=res.GetBuffer(len);
		memcpy(buf,data,len*2);
		buf[len]=0;
		res.ReleaseBufferSetLength(len);
	}

	UnlockResource(hglb);
	return res;
}

static BOOL CALLBACK EnumStringLanguages( HMODULE hModule, LPCTSTR lpszType, LPCTSTR lpszName, WORD wIDLanguage, LONG_PTR lParam )
{
	VersionData &data=*(VersionData*)lParam;
	CString url=LoadStringEx(hModule,IDS_LNG_URL,wIDLanguage);
	if (url.IsEmpty()) return TRUE;
	CString ver=LoadStringEx(hModule,IDS_LNG_VERSION,wIDLanguage);
	if (ver.IsEmpty()) return TRUE;
	CString crc=LoadStringEx(hModule,IDS_LNG_CRC,wIDLanguage);
	if (crc.IsEmpty()) return TRUE;

	LanguageVersionData langData;
	langData.bBasic=(ver[ver.GetLength()-1]=='*');

	int v1, v2, v3, v4;
	if (swscanf_s(ver,L"%d.%d.%d.%d",&v1,&v2,&v3,&v4)==4)
	{
		wchar_t buf[100];
		if (GetLocaleInfo(wIDLanguage,LOCALE_SNAME,buf,_countof(buf)))
		{
			langData.languageId=wIDLanguage;
			langData.language=buf;
			langData.version=(v1<<24)|(v2<<16)|v3;
			langData.build=v4;
			langData.url=url;
			wchar_t *q;
			langData.hash=wcstoul(crc,&q,16);
			data.languages.push_back(langData);
		}
	}

	return TRUE;
}

static bool VerifyDigitalCertificate( const wchar_t *fname, const wchar_t *signer )
{
	// verify the certificate
	WINTRUST_FILE_INFO fileData={sizeof(fileData),fname};

	WINTRUST_DATA winTrustData={sizeof(winTrustData)};
	winTrustData.dwUIChoice=WTD_UI_NONE;
	winTrustData.fdwRevocationChecks=WTD_REVOKE_NONE;
	winTrustData.dwUnionChoice=WTD_CHOICE_FILE;
	winTrustData.dwStateAction=WTD_STATEACTION_VERIFY;
	winTrustData.pFile=&fileData;

	GUID policyGUID=WINTRUST_ACTION_GENERIC_VERIFY_V2;
	LONG lStatus=WinVerifyTrust((HWND)INVALID_HANDLE_VALUE,&policyGUID,&winTrustData);
#ifdef UPDATE_LOG
	LogToFile(UPDATE_LOG,L"Verify Trust Result: 0x%08X",lStatus);
#endif

	winTrustData.dwStateAction=WTD_STATEACTION_CLOSE;
	WinVerifyTrust((HWND)INVALID_HANDLE_VALUE,&policyGUID,&winTrustData);
	if (lStatus!=ERROR_SUCCESS && lStatus!=CERT_E_EXPIRED)
		return false;

	// verify the signer name
	CString signerName;

	HCERTSTORE hStore;
	HCRYPTMSG hMsg;
	if (CryptQueryObject(CERT_QUERY_OBJECT_FILE,fname,CERT_QUERY_CONTENT_FLAG_ALL,CERT_QUERY_FORMAT_FLAG_ALL,0,NULL,NULL,NULL,&hStore,&hMsg,NULL) && hStore && hMsg)
	{
		DWORD len;
		if (CryptMsgGetParam(hMsg,CMSG_SIGNER_INFO_PARAM,0,NULL,&len) && len>0)
		{
			std::vector<char> signerInfo(len);
			CMSG_SIGNER_INFO *pSignerInfo=(CMSG_SIGNER_INFO*)&signerInfo[0];
			if (CryptMsgGetParam(hMsg,CMSG_SIGNER_INFO_PARAM,0,pSignerInfo,&len))
			{
				CERT_INFO certInfo;
				certInfo.Issuer=pSignerInfo->Issuer;
				certInfo.SerialNumber=pSignerInfo->SerialNumber;
				PCCERT_CONTEXT pCertContext=CertFindCertificateInStore(hStore,X509_ASN_ENCODING|PKCS_7_ASN_ENCODING,0,CERT_FIND_SUBJECT_CERT,&certInfo,NULL);
				if (pCertContext)
				{
					len=CertGetNameString(pCertContext,CERT_NAME_SIMPLE_DISPLAY_TYPE,0,NULL,NULL,0);
					if (len>1)
					{
						wchar_t *buf=signerName.GetBuffer(len-1);
						if (buf)
						{
							DWORD res=CertGetNameString(pCertContext,CERT_NAME_SIMPLE_DISPLAY_TYPE,0,NULL,buf,len);
							signerName.ReleaseBufferSetLength(len-1);
							if (!res) signerName.Empty();
						}

#ifdef UPDATE_LOG
						LogToFile(UPDATE_LOG,L"Signer: '%s', '%s'",signer,signerName);
#endif
					}
					else
					{
#ifdef UPDATE_LOG
						LogToFile(UPDATE_LOG,L"CertGetNameString failed");
#endif
					}
				}
				else
				{
#ifdef UPDATE_LOG
					LogToFile(UPDATE_LOG,L"CertFindCertificateInStore failed");
#endif
				}
			}
			else
			{
#ifdef UPDATE_LOG
				LogToFile(UPDATE_LOG,L"CryptMsgGetParam2 failed");
#endif
			}
		}
		else
		{
#ifdef UPDATE_LOG
			LogToFile(UPDATE_LOG,L"CryptMsgGetParam1 failed");
#endif
		}
		if (hStore) CertCloseStore(hStore,0);
		if (hMsg) CryptMsgClose(hMsg);
	}
	else
	{
#ifdef UPDATE_LOG
		LogToFile(UPDATE_LOG,L"CryptQueryObject failed");
#endif
	}

	return (signerName==signer);
}

void VersionData::Clear( void )
{
	bValid=false;
	newVersion=encodedLangVersion=0;
	downloadUrl.Empty();
	downloadSigner.Empty();
	news.Empty();
	updateLink.Empty();
	languageLink.Empty();
	altUrl.Empty();
	bNewVersion=bIgnoreVersion=bNewLanguage=bIgnoreLanguage=false;
	newLanguage.Empty();
	for (std::vector<LanguageVersionData>::iterator it=languages.begin();it!=languages.end();++it)
		if (it->bitmap)
			DeleteObject(it->bitmap);
	languages.clear();
}

void VersionData::Swap( VersionData &data )
{
	std::swap(bValid,data.bValid);
	std::swap(newVersion,data.newVersion);
	std::swap(encodedLangVersion,data.encodedLangVersion);
	std::swap(downloadUrl,data.downloadUrl);
	std::swap(downloadSigner,data.downloadSigner);
	std::swap(news,data.news);
	std::swap(updateLink,data.updateLink);
	std::swap(languageLink,data.languageLink);
	std::swap(altUrl,data.altUrl);
	std::swap(bNewVersion,data.bNewVersion);
	std::swap(bIgnoreVersion,data.bIgnoreVersion);
	std::swap(bNewLanguage,data.bNewLanguage);
	std::swap(bIgnoreLanguage,data.bIgnoreLanguage);
	std::swap(newLanguage,data.newLanguage);
	std::swap(languages,data.languages);
}

VersionData::TLoadResult VersionData::Load( const wchar_t *fname, bool bLoadFlags )
{
	Clear();
	if (!VerifyDigitalCertificate(fname,L"Ivaylo Beltchev"))
		return LOAD_BAD_FILE;

	HMODULE hModule=LoadLibraryEx(fname,NULL,LOAD_LIBRARY_AS_DATAFILE|LOAD_LIBRARY_AS_IMAGE_RESOURCE);
	if (!hModule) return LOAD_BAD_FILE;

	if (GetVersionEx(hModule)!=GetVersionEx(g_Instance))
	{
		FreeLibrary(hModule);
		return LOAD_BAD_VERSION;
	}

	wchar_t defLang[100]=L"";
	{
		CRegKey regKeyLng;
		if (regKeyLng.Open(HKEY_LOCAL_MACHINE,L"Software\\OpenShell\\OpenShell",KEY_READ|KEY_WOW64_64KEY)==ERROR_SUCCESS)
		{
			ULONG size=_countof(defLang);
			if (regKeyLng.QueryStringValue(L"DefaultLanguage",defLang,&size)!=ERROR_SUCCESS)
				defLang[0]=0;
		}
	}

	const int DEFAULT_LANGUAGE=0x409;

	int defLangId;
	if (!defLang[0] || !GetLocaleInfoEx(defLang,LOCALE_ILANGUAGE|LOCALE_RETURN_NUMBER,(LPWSTR)&defLangId,4))
		defLangId=DEFAULT_LANGUAGE;

	downloadUrl=LoadStringEx(hModule,IDS_INSTALL_URL,defLangId);
	// these are always in en-US
	downloadSigner=LoadStringEx(hModule,IDS_INSTALL_SIGNER,DEFAULT_LANGUAGE);
	CString strVer=LoadStringEx(hModule,IDS_VERSION,defLangId);
	if (strVer.IsEmpty())
		strVer=LoadStringEx(hModule,IDS_VERSION,DEFAULT_LANGUAGE);
	updateLink=LoadStringEx(hModule,IDS_UPDATE_LINK,DEFAULT_LANGUAGE);
	languageLink=LoadStringEx(hModule,IDS_LANGUAGE_LINK,DEFAULT_LANGUAGE);
	altUrl=LoadStringEx(hModule,IDS_ALT_URL,DEFAULT_LANGUAGE);

	int v1, v2, v3;
	if (!downloadUrl.IsEmpty() && swscanf_s(strVer,L"%d.%d.%d",&v1,&v2,&v3)==3)
	{
		newVersion=(v1<<24)|(v2<<16)|v3;
		news=LoadStringEx(hModule,IDS_NEWS,defLangId);
		if (news.IsEmpty())
			news=LoadStringEx(hModule,IDS_NEWS,DEFAULT_LANGUAGE);

		EnumResourceLanguages(hModule,RT_STRING,MAKEINTRESOURCE((IDS_LNG_URL>>4)+1),EnumStringLanguages,(LONG_PTR)this);
		for (std::vector<LanguageVersionData>::iterator it=languages.begin();it!=languages.end();++it)
			it->bitmap=(HBITMAP)LoadImage(hModule,MAKEINTRESOURCE(it->languageId),IMAGE_BITMAP,22,27,LR_CREATEDIBSECTION);
	}

	FreeLibrary(hModule);

	if (newVersion && !downloadUrl.IsEmpty() && !news.IsEmpty())
		return LOAD_OK;
	Clear();
	return LOAD_ERROR;
}

struct DownloadFileParams
{
	// input
	const wchar_t *url;
	const wchar_t *signer;
	DWORD hash;
	const wchar_t *path;
	CString fname; // file name on input, full path on output
	CProgressDlg *progress;
	bool bAcceptCached;
	TSettingsComponent component;

	// output
	TDownloadResult downloadRes;
	int saveRes;
	bool valid;
};

static DWORD WINAPI ThreadDownloadFile( void *param )
{
	DownloadFileParams &params=*(DownloadFileParams*)param;
	param=NULL;
	params.valid=false;
	params.saveRes=0;

	std::vector<char> buf;
	params.downloadRes=DownloadFile(params.url,buf,params.fname.IsEmpty()?&params.fname:NULL,0,params.bAcceptCached,params.progress,params.component);
	if (params.downloadRes==DOWNLOAD_CANCEL || params.downloadRes>=DOWNLOAD_FIRST_ERROR)
		return 0;

	params.valid=!buf.empty();
	if (!params.valid)
		return 0;

	// validate hash
	if (params.hash)
	{
		if (params.progress)
			params.progress->SetText(LoadStringEx(IDS_PROGRESS_VERIFY));

		params.valid=(CalcFNVHash(&buf[0],(int)buf.size(),FNV_HASH0)==params.hash);
		if (!params.valid)
			return 0;
	}

	// save
	if (params.progress)
	{
		params.progress->SetText(LoadStringEx(IDS_PROGRESS_SAVE));
		params.progress->EnableCancel(false);
		params.progress->SetProgress(-1);
	}
	wchar_t fname[_MAX_PATH];
	Sprintf(fname,_countof(fname),L"%s\\%s",params.path,params.fname);
	params.fname=fname;
	params.saveRes=SaveFile(fname,buf);
	if (params.saveRes)
		return 0;

	// validate signer
	if (params.signer)
	{
		if (params.progress)
			params.progress->SetText(LoadStringEx(IDS_PROGRESS_VERIFY));
		params.valid=VerifyDigitalCertificate(fname,params.signer);
		if (!params.valid)
		{
			DeleteFile(fname);
			return 0;
		}
	}

	return 0;
}

DWORD DownloadLanguageDll( HWND owner, TSettingsComponent component, const LanguageVersionData &data, CString &error )
{
	// download file
	wchar_t path[_MAX_PATH]=L"%ALLUSERSPROFILE%\\OpenShell\\Languages";
	DoEnvironmentSubst(path,_countof(path));
	SHCreateDirectory(NULL,path);
	wchar_t fname[_MAX_PATH];
	Sprintf(fname,_countof(fname),L"%s.dll",data.language);

	CProgressDlg progress;
	progress.Create(owner,LoadStringEx(IDS_PROGRESS_TITLE_DOWNLOAD));

	DownloadFileParams params;
	params.url=data.url;
	params.signer=NULL;
	params.hash=data.hash;
	params.path=path;
	params.fname=fname;
	params.progress=&progress;
	params.bAcceptCached=true;
	params.component=component;

	HANDLE hThread=CreateThread(NULL,0,ThreadDownloadFile,&params,0,NULL);

	while (1)
	{
		DWORD wait=MsgWaitForMultipleObjects(1,&hThread,FALSE,INFINITE,QS_ALLINPUT);
		if (wait!=WAIT_OBJECT_0+1)
			break;
		MSG msg;
		while (PeekMessage(&msg,0,0,0,PM_REMOVE))
		{
			TranslateMessage(&msg);
			DispatchMessage(&msg);
		}
	}
	progress.DestroyWindow();
	CloseHandle(hThread);

	if (params.downloadRes==DOWNLOAD_CANCEL)
		return 2;
	if (params.downloadRes==DOWNLOAD_INTERNET)
	{
		error=LoadStringEx(IDS_INTERNET_FAIL);
		return 0;
	}
	else if (params.downloadRes==DOWNLOAD_START)
	{
		error=LoadStringEx(IDS_INITIATE_FAIL);
		return 0;
	}
	else if (params.downloadRes==DOWNLOAD_FAIL)
	{
		error=LoadStringEx(IDS_LANG_DOWNLOAD_FAIL);
		return 0;
	}

	if (params.saveRes)
	{
		wchar_t msg[256];
		FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM|FORMAT_MESSAGE_IGNORE_INSERTS,NULL,params.saveRes,0,msg,_countof(msg),NULL);
		error.Format(LoadStringEx(IDS_LANG_SAVE_FAIL),params.fname);
		error+="\r\n";
		error+=msg;
		return 0;
	}

	if (!params.valid)
	{
		error=LoadStringEx(IDS_LANG_DOWNLOAD_FAIL);
		return 0;
	}

	return 1;
}

DWORD DownloadNewVersion( HWND owner, TSettingsComponent component, const wchar_t *url, const wchar_t *signer, CString &fname, CString &error )
{
	CComString pPath;
	if (FAILED(SHGetKnownFolderPath(FOLDERID_Downloads,0,NULL,&pPath)) || !pPath)
	{
		if (FAILED(SHGetKnownFolderPath(FOLDERID_Documents,0,NULL,&pPath)) || !pPath)
		{
			if (FAILED(SHGetKnownFolderPath(FOLDERID_Desktop,0,NULL,&pPath)) || !pPath)
			{
				error=LoadStringEx(IDS_INST_DOWNLOAD_FAIL);
				return 0;
			}
		}
	}

	CProgressDlg progress;
	progress.Create(owner,LoadStringEx(IDS_PROGRESS_TITLE_DOWNLOAD));

	DownloadFileParams params;
	params.url=url;
	params.signer=signer;
	params.hash=0;
	params.path=pPath;
	params.progress=&progress;
	params.bAcceptCached=true;
	params.component=component;

	HANDLE hThread=CreateThread(NULL,0,ThreadDownloadFile,&params,0,NULL);

	while (1)
	{
		DWORD wait=MsgWaitForMultipleObjects(1,&hThread,FALSE,INFINITE,QS_ALLINPUT);
		if (wait!=WAIT_OBJECT_0+1)
			break;
		MSG msg;
		while (PeekMessage(&msg,0,0,0,PM_REMOVE))
		{
			TranslateMessage(&msg);
			DispatchMessage(&msg);
		}
	}
	progress.DestroyWindow();
	CloseHandle(hThread);

	if (params.downloadRes==DOWNLOAD_CANCEL)
		return 2;
	if (params.downloadRes==DOWNLOAD_INTERNET)
	{
		error=LoadStringEx(IDS_INTERNET_FAIL);
		return 0;
	}
	else if (params.downloadRes==DOWNLOAD_START)
	{
		error=LoadStringEx(IDS_INITIATE_FAIL);
		return 0;
	}
	else if (params.downloadRes==DOWNLOAD_FAIL)
	{
		error=LoadStringEx(IDS_INST_DOWNLOAD_FAIL);
		return 0;
	}

	if (params.saveRes)
	{
		wchar_t msg[256];
		FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM|FORMAT_MESSAGE_IGNORE_INSERTS,NULL,params.saveRes,0,msg,_countof(msg),NULL);
		error.Format(LoadStringEx(IDS_INST_SAVE_FAIL),params.fname);
		error+="\r\n";
		error+=msg;
		return 0;
	}

	if (!params.valid)
	{
		error=LoadStringEx(IDS_INST_DOWNLOAD_FAIL);
		return 0;
	}

	fname=params.fname;
	return 1;
}
