// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

// ShareOverlay.cpp : Implementation of CShareOverlay

#include "stdafx.h"
#include "ShareOverlay.h"

// CShareOverlay - adds an overlay icon to the shared folders

bool CShareOverlay::s_bEnabled=false;
bool CShareOverlay::s_bShowHidden=false;
int CShareOverlay::s_Index;
wchar_t CShareOverlay::s_IconPath[_MAX_PATH];

CShareOverlay::CShareOverlay( void )
{
	SHGetDesktopFolder(&m_pDesktop);
	m_pShareInfo=NULL;
	m_ShareCount=0;
	m_UpdateTime=0;
	InitializeCriticalSection(&m_Section);
}

void CShareOverlay::FinalRelease( void )
{
	DeleteCriticalSection(&m_Section);
	if (m_pShareInfo)
		NetApiBufferFree(m_pShareInfo);
	m_pShareInfo=NULL;
}

void CShareOverlay::InitOverlay( const wchar_t *icon, bool showHidden )
{
	s_bEnabled=true;
	if (icon)
	{
		Strcpy(s_IconPath,_countof(s_IconPath),icon);
		wchar_t *c=wcsrchr(s_IconPath,',');
		if (c)
		{
			*c=0;
			s_Index=-_wtol(c+1);
		}
		else
			s_Index=0;
	}
	else
	{
		Strcpy(s_IconPath,_countof(s_IconPath),L"%windir%\\system32\\imageres.dll");
		s_Index=-164;
	}
	DoEnvironmentSubst(s_IconPath,_countof(s_IconPath));
	s_bShowHidden=showHidden;
}

HRESULT CShareOverlay::_InternalQueryInterface( REFIID iid, void** ppvObject )
{
	if (iid==IID_IUnknown)
	{
		AddRef();
		*ppvObject=static_cast<IUnknown*>(this);
		return S_OK;
	}
	if (iid==IID_IShellIconOverlayIdentifier && s_bEnabled)
	{
		// only support IShellIconOverlayIdentifier if s_bEnabled is true
		AddRef();
		*ppvObject=static_cast<IShellIconOverlayIdentifier*>(this);
		return S_OK;
	}
	*ppvObject=NULL;
	return E_NOINTERFACE;
}

STDMETHODIMP CShareOverlay::IsMemberOf( LPCWSTR pwszPath, DWORD dwAttrib )
{
	EnterCriticalSection(&m_Section);
	UpdateShareInfo();
	HRESULT res=S_FALSE;
	if (m_pShareInfo)
	{
		for (DWORD i=0;i<m_ShareCount;i++)
		{
			if (!(m_pShareInfo[i].shi502_type&STYPE_SPECIAL) && _wcsicmp(pwszPath,m_pShareInfo[i].shi502_path)==0)
			{
				if (s_bShowHidden)
				{
					res=S_OK;
					break;
				}
				int len=Strlen(m_pShareInfo[i].shi502_netname);
				if (len==0 || m_pShareInfo[i].shi502_netname[len-1]!='$')
				{
					res=S_OK;
					break;
				}
			}
		}
	}
	LeaveCriticalSection(&m_Section);
	return res;
}

STDMETHODIMP CShareOverlay::GetOverlayInfo( LPWSTR pwszIconFile, int cchMax, int * pIndex, DWORD * pdwFlags )
{
	Strcpy(pwszIconFile,cchMax,s_IconPath);
	*pIndex=s_Index;
	*pdwFlags=ISIOI_ICONFILE;
	if (s_Index)
		*pdwFlags|=ISIOI_ICONINDEX;
	return S_OK;
}

STDMETHODIMP CShareOverlay::GetPriority( int * pIPriority )
{
	*pIPriority=0;
	return S_OK;
}

void CShareOverlay::UpdateShareInfo( void )
{
	int time=GetTickCount();
	if (time-m_UpdateTime<5000)
		return;
	m_UpdateTime=time;
	if (m_pShareInfo)
		NetApiBufferFree(m_pShareInfo);
	m_pShareInfo=NULL;
	DWORD countAll;
	if (NetShareEnum(NULL,502,(BYTE**)&m_pShareInfo,MAX_PREFERRED_LENGTH,&m_ShareCount,&countAll,NULL)!=NERR_Success)
		m_ShareCount=0;
}
