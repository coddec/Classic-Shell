// Classic Shell (c) 2009-2016, Ivo Beltchev
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#ifdef _DEBUG

bool dbg_assert( const char *exp, const char *file, unsigned line );
#define Assert(exp) do { if (!(exp) && !dbg_assert(#exp,__FILE__,__LINE__)) _CrtDbgBreak(); } while (0)

#else

#define Assert(exp) ((void)0)

#endif
