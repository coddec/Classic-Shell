// Classic Shell (c) 2009-2016, Ivo Beltchev
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#ifdef CLASSICIEDLL_EXPORTS
#define CSIEAPI __declspec(dllexport)
#else
#define CSIEAPI __declspec(dllimport)
#endif

void InitClassicIE( HMODULE hModule );
CSIEAPI void ShowIESettings( void );
CSIEAPI DWORD GetIESettings( void );
CSIEAPI void CheckForNewVersionIE( void );
CSIEAPI void WaitDllInitThread( void );
CSIEAPI void DllLogToFile( const wchar_t *location, const wchar_t *message, ... );

#ifndef _WIN64
CSIEAPI bool DllSaveAdmx( const char *admxFile, const char *admlFile, const char *docFile, const wchar_t *language );
#endif
CSIEAPI bool DllImportSettingsXml( const wchar_t *fname );
CSIEAPI bool DllExportSettingsXml( const wchar_t *fname );

enum
{
	IE_SETTING_CAPTION=1,
	IE_SETTING_PROGRESS=2,
	IE_SETTING_ZONE=4,
	IE_SETTING_PROTECTED=8,
};

#define CIE_LOG L"Software\\IvoSoft\\ClassicIE\\Settings|LogLevel|%LOCALAPPDATA%\\ClassicShell\\ClassicIELog.txt"
