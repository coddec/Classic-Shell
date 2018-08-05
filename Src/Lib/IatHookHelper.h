// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

struct IatHookData
{
	unsigned char jump[4]; // jump instruction 0x90, 0x90, 0xFF, 0x25
	DWORD jumpOffs; // jump instruction offset
	void *newProc; // the address of the new proc
	void *oldProc; // the address of the old proc
	IMAGE_THUNK_DATA *thunk; // the IAT thunk
};

void InitializeIatHooks( void );
IatHookData *SetIatHook( HMODULE hPatchedModule, const char *targetModule, const char *targetProc, void *newProc );
void ClearIatHook( IatHookData *hook );
void ClearIatHooks( void );
