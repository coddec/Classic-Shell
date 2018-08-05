// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

const unsigned int FNV_HASH0=2166136261;

// Calculate FNV hash for a memory buffer
unsigned int CalcFNVHash( const void *buf, int len, unsigned int hash=FNV_HASH0 );

// Calculate FNV hash for a string
unsigned int CalcFNVHash( const char *text, unsigned int hash=FNV_HASH0 );

// Calculate FNV hash for a wide string
unsigned int CalcFNVHash( const wchar_t *text, unsigned int hash=FNV_HASH0 );
