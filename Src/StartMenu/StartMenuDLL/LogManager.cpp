// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

// LogManager.cpp - logging functionality (for debugging)

#include "stdafx.h"
#include "LogManager.h"
#include "ResourceHelper.h"
#include "ComHelper.h"
#include <propvarutil.h>
#include <chrono>

int g_LogCategories;
static FILE *g_LogFile;
static std::chrono::time_point<std::chrono::steady_clock> g_LogTime;

void InitLog( int categories, const wchar_t *fname )
{
	CloseLog();
	if (categories==0) return;
	if (_wfopen_s(&g_LogFile,fname,L"wb")==0)
	{
		wchar_t bom=0xFEFF;
		fwrite(&bom,2,1,g_LogFile);
		g_LogCategories=categories;
		g_LogTime=std::chrono::steady_clock::now();
		LogMessage(L"version=%x, PID=%d, TID=%d, Categories=%08x\r\n",GetWinVersion(),GetCurrentProcessId(),GetCurrentThreadId(),categories);
	}
}

void CloseLog( void )
{
	if (g_LogFile) fclose(g_LogFile);
	g_LogFile=NULL;
	g_LogCategories=0;
}

void LogMessage( const wchar_t *text, ... )
{
	if (!g_LogFile) return;

	wchar_t buf[2048];
	int len=Sprintf(buf,_countof(buf),L"%8d: ",std::chrono::duration_cast<std::chrono::milliseconds>(std::chrono::steady_clock::now()-g_LogTime).count());
	fwrite(buf,2,len,g_LogFile);

	va_list args;
	va_start(args,text);
	len=Vsprintf(buf,_countof(buf),text,args);
	va_end(args);
	fwrite(buf,2,len,g_LogFile);

	fwrite(L"\r\n",2,2,g_LogFile);

	fflush(g_LogFile);
}

void LogPropertyStore(TLogCategory category, IPropertyStore* store)
{
	if (!store)
		return;

	DWORD count = 0;
	store->GetCount(&count);
	for (DWORD i = 0; i < count; i++)
	{
		PROPERTYKEY key{};
		store->GetAt(i, &key);

		PROPVARIANT val;
		PropVariantInit(&val);

		store->GetValue(key, &val);

		CComString valueStr;
		PropVariantToStringAlloc(val, &valueStr);
		PropVariantClear(&val);

		wchar_t guidStr[100]{};
		StringFromGUID2(key.fmtid, guidStr, _countof(guidStr));

		LOG_MENU(category, L"Property: {%s, %u} = %s", guidStr, key.pid, valueStr ? valueStr : L"???");
	}
}
