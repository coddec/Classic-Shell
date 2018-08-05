// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#include <exdispid.h>
#include <shobjidl.h>
#include <map>

// CClassicIEBHO

class ATL_NO_VTABLE CClassicIEBHO :
	public CComObjectRootEx<CComSingleThreadModel>,
	public CComCoClass<CClassicIEBHO, &CLSID_ClassicIEBHO>,
	public IObjectWithSiteImpl<CClassicIEBHO>,
	public IDispEventImpl<1,CClassicIEBHO,&DIID_DWebBrowserEvents2,&LIBID_SHDocVw,1,1>
{
public:
	CClassicIEBHO()
	{
		m_Settings=0;
		m_StatusBar=NULL;
		m_Tooltip=NULL;
		m_ProgressBar=NULL;
		m_TextWidth=0;
		m_Progress=-1;
	}

	static HRESULT WINAPI UpdateRegistry( BOOL bRegister );

	BEGIN_SINK_MAP( CClassicIEBHO )
		SINK_ENTRY_EX(1, DIID_DWebBrowserEvents2, DISPID_NAVIGATECOMPLETE2, OnNavigateComplete)
		SINK_ENTRY_EX(1, DIID_DWebBrowserEvents2, DISPID_PROGRESSCHANGE, OnProgressChange)
		SINK_ENTRY_EX(1, DIID_DWebBrowserEvents2, DISPID_ONQUIT, OnQuit)
	END_SINK_MAP()

	BEGIN_COM_MAP(CClassicIEBHO)
		COM_INTERFACE_ENTRY(IObjectWithSite)
	END_COM_MAP()



	DECLARE_PROTECT_FINAL_CONSTRUCT()

	HRESULT FinalConstruct()
	{
		return S_OK;
	}

	// IObjectWithSite
	STDMETHOD(SetSite)(IUnknown *pUnkSite);

	// DWebBrowserEvents2
	STDMETHOD(OnNavigateComplete)( IDispatch *pDisp, VARIANT *URL );
	STDMETHOD(OnProgressChange)( long progress, long progressMax );
	STDMETHOD(OnQuit)( void );

private:
	enum
	{
		PART_TEXT,
		PART_PROGRESS,
		PART_ZONE,
		PART_ZOOM,

		PART_COUNT,
		PART_OFFSET=100,

		PROGRESS_WIDTH=110,
		MIN_TEXT_WIDTH=100,
	};

	CComPtr<IShellBrowser>m_pBrowser;
	CComPtr<IWebBrowser2> m_pWebBrowser;
	CComPtr<IInternetZoneManager> m_pZoneManager;
	CComPtr<IInternetSecurityManager> m_pSecurityManager;

	DWORD m_Settings;
	HWND m_StatusBar;
	HWND m_Tooltip;
	HWND m_ProgressBar;
	CString m_ProtectedMode;
	int m_TextWidth;
	int m_Progress;
	std::map<unsigned int,HICON> m_IconCache;

	static LRESULT CALLBACK SubclassStatusProc( HWND hWnd, UINT uMsg, WPARAM wParam, LPARAM lParam, UINT_PTR uIdSubclass, DWORD_PTR dwRefData );

	void ResetParts( void );
};

OBJECT_ENTRY_AUTO(__uuidof(ClassicIEBHO), CClassicIEBHO)
