// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#include <stdafx.h>
#include "StringUtils.h"

static DWORD _stdcall AssertThreadProc( void *param )
{
	return MessageBoxA(NULL,(const char *)param,"Assertion Failed",MB_ABORTRETRYIGNORE|MB_TASKMODAL|MB_ICONERROR);
}

// debug assert
bool dbg_assert( const char *exp, const char *file, unsigned line )
{
	char buf[2048];
	Sprintf(buf,_countof(buf),"Expression: %s\r\nFile: %s\r\nLine: %d\n",exp,file,line);
	HANDLE h=CreateThread(NULL,0,AssertThreadProc,buf,0,NULL);
	if (h)
	{
		WaitForSingleObject(h,INFINITE);
		DWORD res=IDRETRY;
		GetExitCodeThread(h,&res);
		if (res==IDABORT)
			TerminateProcess(GetCurrentProcess(),1);
		return (res==IDIGNORE); // true will continue, false will cause _CrtDbgBreak
	}
	return true;
}
