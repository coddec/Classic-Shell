// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#include <map>

class CStringSet: public std::map<int,CString>
{
public:
	CStringSet( void ) { m_hInstance=NULL; }
	// Initializes the string database
	void Init( HINSTANCE hInstance );

	// Returns a string by ID (returns "" if the string is missing)
	CString GetString( UINT uID );

private:
	HINSTANCE m_hInstance;

	static BOOL CALLBACK EnumResNameProc( HMODULE hModule, LPCTSTR lpszType, LPTSTR lpszName, LONG_PTR lParam );
};
