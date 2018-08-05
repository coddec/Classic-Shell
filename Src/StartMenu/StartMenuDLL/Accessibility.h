// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

class CMenuContainer;

// CMenuAccessible - provides accessibility services for a CMenuContainer
class CMenuAccessible: public IAccessible
{
public:
	CMenuAccessible( CMenuContainer *pOwner );
	~CMenuAccessible( void );
	void Reset( void ); // called by the owner when it is destroyed

	// IUnknown
	virtual STDMETHODIMP QueryInterface( REFIID riid, void **ppvObject )
	{
		*ppvObject=NULL;
		if (IID_IUnknown==riid || IID_IDispatch==riid || IID_IAccessible==riid)
		{
			AddRef();
			*ppvObject=static_cast<IAccessible*>(this);
			return S_OK;
		}
		return E_NOINTERFACE;
	}

	virtual ULONG STDMETHODCALLTYPE AddRef( void ) 
	{ 
		return InterlockedIncrement(&m_RefCount);
	}

	virtual ULONG STDMETHODCALLTYPE Release( void )
	{
		long nTemp=InterlockedDecrement(&m_RefCount);
		if (!nTemp) delete this;
		return nTemp;
	}

	// IDispatch
	virtual HRESULT STDMETHODCALLTYPE GetTypeInfoCount( UINT *pctinfo ) { return E_NOTIMPL; }
	virtual HRESULT STDMETHODCALLTYPE GetTypeInfo( UINT iTInfo, LCID lcid, ITypeInfo **ppTInfo ) { *ppTInfo=NULL; return E_NOTIMPL; }
	virtual HRESULT STDMETHODCALLTYPE GetIDsOfNames( REFIID riid, LPOLESTR *rgszNames, UINT cNames, LCID lcid, DISPID *rgDispId ) { return E_NOTIMPL; }
	virtual HRESULT STDMETHODCALLTYPE Invoke( DISPID dispIdMember, REFIID riid, LCID lcid, WORD wFlags, DISPPARAMS *pDispParams, VARIANT *pVarResult, EXCEPINFO *pExcepInfo, UINT *puArgErr ) { return E_NOTIMPL; }

	// IAccessible
	virtual HRESULT STDMETHODCALLTYPE get_accParent( IDispatch **ppdispParent );
	virtual HRESULT STDMETHODCALLTYPE get_accChildCount( long *pcountChildren );
	virtual HRESULT STDMETHODCALLTYPE get_accChild( VARIANT varChild, IDispatch **ppdispChild );
	virtual HRESULT STDMETHODCALLTYPE get_accName( VARIANT varChild, BSTR *pszName );
	virtual HRESULT STDMETHODCALLTYPE get_accValue( VARIANT varChild, BSTR *pszValue ) { *pszValue=NULL; return DISP_E_MEMBERNOTFOUND; }
	virtual HRESULT STDMETHODCALLTYPE get_accDescription( VARIANT varChild, BSTR *pszDescription );
	virtual HRESULT STDMETHODCALLTYPE get_accRole( VARIANT varChild, VARIANT *pvarRole );
	virtual HRESULT STDMETHODCALLTYPE get_accState( VARIANT varChild, VARIANT *pvarState );
	virtual HRESULT STDMETHODCALLTYPE get_accHelp( VARIANT varChild, BSTR *pszHelp ) { *pszHelp=NULL; return S_FALSE; }
	virtual HRESULT STDMETHODCALLTYPE get_accHelpTopic( BSTR *pszHelpFile, VARIANT varChild, long *pidTopic ) { *pszHelpFile=NULL; return S_FALSE; }
	virtual HRESULT STDMETHODCALLTYPE get_accKeyboardShortcut( VARIANT varChild, BSTR *pszKeyboardShortcut );
	virtual HRESULT STDMETHODCALLTYPE get_accFocus( VARIANT *pvarChild );
	virtual HRESULT STDMETHODCALLTYPE get_accSelection( VARIANT *pvarChildren );
	virtual HRESULT STDMETHODCALLTYPE get_accDefaultAction( VARIANT varChild, BSTR *pszDefaultAction );
	virtual HRESULT STDMETHODCALLTYPE accSelect( long flagsSelect, VARIANT varChild );
	virtual HRESULT STDMETHODCALLTYPE accLocation( long *pxLeft, long *pyTop, long *pcxWidth, long *pcyHeight, VARIANT varChild );
	virtual HRESULT STDMETHODCALLTYPE accNavigate( long navDir, VARIANT varStart, VARIANT *pvarEndUpAt );
	virtual HRESULT STDMETHODCALLTYPE accHitTest( long xLeft, long yTop, VARIANT *pvarChild );
	virtual HRESULT STDMETHODCALLTYPE accDoDefaultAction( VARIANT varChild );
	virtual HRESULT STDMETHODCALLTYPE put_accName( VARIANT varChild, BSTR szName ) { return E_NOTIMPL; }
	virtual HRESULT STDMETHODCALLTYPE put_accValue( VARIANT varChild, BSTR szValue ) { return DISP_E_MEMBERNOTFOUND; }

private:
	LONG m_RefCount;
	CMenuContainer *m_pOwner;
	CComPtr<IAccessible> m_pStdAccessible;
};
