// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#include "stdafx.h"
#include "TouchHelper.h"

typedef BOOL (WINAPI *tGetPointerType)( UINT32 pointerId, POINTER_INPUT_TYPE *pointerType );
typedef BOOL (WINAPI *tGetPointerCursorId)( UINT32 pointerId, UINT32 *cursorId );
typedef BOOL (WINAPI *tGetPointerInfo)( UINT32 pointerId, POINTER_INFO *pointerInfo );
typedef BOOL (WINAPI *tGetCurrentInputMessageSource)( INPUT_MESSAGE_SOURCE *inputMessageSource );
typedef BOOL (WINAPI *tGetCIMSSM)( INPUT_MESSAGE_SOURCE *inputMessageSource );

static tGetPointerType fGetPointerType;
static tGetPointerCursorId fGetPointerCursorId;
static tGetPointerInfo fGetPointerInfo;
static tGetCurrentInputMessageSource fGetCurrentInputMessageSource;
static tGetCIMSSM fGetCIMSSM;

void InitTouchHelper( void )
{
	HMODULE user32=GetModuleHandle(L"user32.dll");
	fGetPointerType=(tGetPointerType)GetProcAddress(user32,"GetPointerType");
	fGetPointerCursorId=(tGetPointerCursorId)GetProcAddress(user32,"GetPointerCursorId");
	fGetPointerInfo=(tGetPointerInfo)GetProcAddress(user32,"GetPointerInfo");
	fGetCurrentInputMessageSource=(tGetCurrentInputMessageSource)GetProcAddress(user32,"GetCurrentInputMessageSource");
	fGetCIMSSM=(tGetCIMSSM)GetProcAddress(user32,"GetCIMSSM");
}

BOOL GetPointerType2( UINT32 pointerId, POINTER_INPUT_TYPE *pointerType )
{
	return fGetPointerType && fGetPointerType(pointerId,pointerType);
}

BOOL GetPointerCursorId2( UINT32 pointerId, UINT32 *cursorId )
{
	return fGetPointerCursorId && fGetPointerCursorId(pointerId,cursorId);
}

BOOL GetPointerInfo2( UINT32 pointerId, POINTER_INFO *pointerInfo )
{
	return fGetPointerInfo && fGetPointerInfo(pointerId,pointerInfo);
}

BOOL GetCurrentInputMessageSource2( INPUT_MESSAGE_SOURCE *inputMessageSource )
{
	return fGetCurrentInputMessageSource && fGetCurrentInputMessageSource(inputMessageSource);
}

BOOL GetCIMSSM2( INPUT_MESSAGE_SOURCE *inputMessageSource )
{
	return fGetCIMSSM && fGetCIMSSM(inputMessageSource);
}
