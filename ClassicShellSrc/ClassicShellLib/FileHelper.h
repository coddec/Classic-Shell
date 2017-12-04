// Classic Shell (c) 2009-2016, Ivo Beltchev
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

bool CreateFakeFolder( const wchar_t *source, const wchar_t *fname );
void DeleteFakeFolder( const wchar_t *fname );
bool IsFakeFolder( const wchar_t *fname );
