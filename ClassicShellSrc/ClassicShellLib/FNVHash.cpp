// Classic Shell (c) 2009-2016, Ivo Beltchev
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#include <stdafx.h>
#include "FNVHash.h"
#include "StringUtils.h"

// FNV hash algorithm as described here: http://www.isthe.com/chongo/tech/comp/fnv/index.html

// Calculate FNV hash for a memory buffer
unsigned int CalcFNVHash( const void *buf, int len, unsigned int hash )
{
	for (int i=0;i<len;i++)
		hash=(hash^((const unsigned char*)buf)[i])*16777619;
	return hash;
}

// Calculate FNV hash for a string
unsigned int CalcFNVHash( const char *text, unsigned int hash )
{
	return CalcFNVHash(text,Strlen(text),hash);
}

// Calculate FNV hash for a wide string
unsigned int CalcFNVHash( const wchar_t *text, unsigned int hash )
{
	return CalcFNVHash(text,Strlen(text)*2,hash);
}
