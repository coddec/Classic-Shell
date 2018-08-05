// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

// Parses the settings from an ini file. Supports UTF16, UTF8 or ANSI files
// Use forceLang for force a specific language
void ParseTranslations( const wchar_t *fname, const wchar_t *forceLang );

// Loads text overrides from the given module. They must be in a "L10N" resource with ID=1
void LoadTranslationOverrides( HMODULE hModule );

// Returns a setting with the given name. If no setting is found, returns def
const wchar_t *FindTranslation( const wchar_t *name, const wchar_t *def );

// Checks for right-to-left languages
bool IsLanguageRTL( void );

// Language DLLs between this version and the current version are acceptable
const int MIN_LANGUAGE_VERSION=0x03090005;
