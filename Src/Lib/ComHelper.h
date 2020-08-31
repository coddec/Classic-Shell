// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#include <shlobj.h>
#include "Assert.h"

class CAbsolutePidl
{
public:
	CAbsolutePidl( void ) { m_Pidl=NULL; }
	CAbsolutePidl( const CAbsolutePidl &pidl ) { m_Pidl=pidl?ILCloneFull(pidl):NULL; }
	~CAbsolutePidl( void ) { Clear(); }
	void operator=( const CAbsolutePidl &pidl ) { Clone(pidl); }
	void operator=( PCIDLIST_ABSOLUTE pidl ) { Clone(pidl); }

	void Clear( void ) { if (m_Pidl) ILFree(m_Pidl); m_Pidl=NULL; }
	operator PIDLIST_ABSOLUTE( void ) const { return m_Pidl; }
	PIDLIST_ABSOLUTE* operator&( void ) { Assert(m_Pidl==NULL); return &m_Pidl; }
	void Swap( CAbsolutePidl &pidl ) { PIDLIST_ABSOLUTE q=pidl.m_Pidl; pidl.m_Pidl=m_Pidl; m_Pidl=q; }
	void Attach( PIDLIST_ABSOLUTE pidl ) { Clear(); m_Pidl=pidl; }
	PIDLIST_ABSOLUTE Detach( void ) { PIDLIST_ABSOLUTE pidl=m_Pidl; m_Pidl=NULL; return pidl; }
	void Clone( PCIDLIST_ABSOLUTE pidl ) { Clear(); m_Pidl=pidl?ILCloneFull(pidl):NULL; }

private:
	PIDLIST_ABSOLUTE m_Pidl;
};

class CComString
{
public:
	CComString( void ) { m_String=NULL; }
	~CComString( void ) { Clear(); }

	void Clear( void ) { if (m_String) CoTaskMemFree(m_String); m_String=NULL; }
	operator const wchar_t*( void ) const { return m_String; }
	wchar_t** operator&( void ) { Assert(m_String==NULL); return &m_String; }
	void MakeUpper( void ) { if (m_String) CharUpper(m_String); }

private:
	CComString( const CComString &str );
	void operator=( const CComString &str );
	wchar_t *m_String;
};
