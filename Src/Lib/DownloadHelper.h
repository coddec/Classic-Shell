// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#include <vector>

enum TVersionCheck
{
	CHECK_AUTO,
	CHECK_AUTO_WAIT,
	CHECK_UPDATE,
};

enum TSettingsComponent;

struct LanguageVersionData
{
	CString language;
	CString url;
	DWORD version;
	DWORD build;
	DWORD hash;
	bool bBasic;
	WORD languageId;
	HBITMAP bitmap;

	LanguageVersionData( void ) { bBasic=false; bitmap=NULL; }
};

struct VersionData
{
	bool bValid = false;
	DWORD newVersion = 0;
	DWORD encodedLangVersion = 0;
	CString downloadUrl;
	CString downloadSigner;
	CString news;
	CString updateLink;
	CString languageLink;
	CString altUrl;
	bool bNewVersion = false;
	bool bIgnoreVersion = false;
	bool bNewLanguage = false;
	bool bIgnoreLanguage = false;
	CString newLanguage;
	std::vector<LanguageVersionData> languages;

	~VersionData( void ) { Clear(); }
	void Clear( void );
	void Swap( VersionData &data );

	enum TLoadResult
	{
		LOAD_OK,
		LOAD_ERROR, // the file is missing some data
		LOAD_BAD_VERSION, // the version is wrong
		LOAD_BAD_FILE, // the file is corrupted
	};

	TLoadResult Load();
	TLoadResult LoadNightly();
	TLoadResult Load( const wchar_t *fname, bool bLoadFlags );
private:
	void operator=( const VersionData& );
};

typedef void (*tNewVersionCallback)( VersionData &data );

// 0 - fail, 1 - success, 2 - cancel
DWORD CheckForNewVersion( HWND owner, TSettingsComponent component, TVersionCheck check, tNewVersionCallback callback );
DWORD DownloadLanguageDll( HWND owner, TSettingsComponent component, const LanguageVersionData &data, CString &error );
DWORD DownloadNewVersion( HWND owner, TSettingsComponent component, const wchar_t *url, const wchar_t *signer, CString &fname, CString &error );
