// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#include <propsys.h>

// LogManager.h - logging functionality (for debugging)
// Logs different events in the start menu
// Turn it on by setting the LogLevel setting in the registry
// The logging is consuming very little resources when it is turned off

enum TLogCategory
{
	LOG_OPEN=        0x001, // logs opening and closing of menus
	LOG_ITEMS=       0x002, // logs the menu items
	LOG_EXECUTE=     0x004, // logs when items are executed
	LOG_MFU=         0x008, // logs the MFU items and ranks
	LOG_NEW=         0x010, // logs the highlighted programs
	LOG_APPS=        0x120, // logs the found metro apps
	LOG_SEARCH=      0x040, // logs the search results and ranks
	LOG_SEARCH_SQL=  0x080, // logs the SQL search queries and results
	LOG_MOUSE=       0x100, // logs mouse events (only hovering for now)
	LOG_CACHE=       0x200, // logs the contents of the cache file

	LOG_ALL=         0xFFF
};

#define LOG_MENU( CATEGORY, TEXT, ... ) if (g_LogCategories&CATEGORY) { LogMessage(TEXT,__VA_ARGS__); }

extern int g_LogCategories;
void InitLog( int categories, const wchar_t *fname );
void CloseLog( void );
void LogMessage( const wchar_t *text, ... );

#define STARTUP_LOG L"Software\\OpenShell\\StartMenu\\Settings|LogStartup|%LOCALAPPDATA%\\OpenShell\\StartupLog.txt"

void LogPropertyStore(TLogCategory category, IPropertyStore* store);
