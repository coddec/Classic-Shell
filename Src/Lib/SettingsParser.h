// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#include <vector>

///////////////////////////////////////////////////////////////////////////////

class CSettingsParser
{
public:
	// Reads a file into m_Text
	bool LoadText( const wchar_t *fname );
	// Reads a text resource into m_Text
	bool LoadText( HMODULE hMod, HRSRC hResInfo );

	void LoadText( const unsigned char *buf, int size );
	void LoadText( const wchar_t *buf, int size );

	// Splits m_Text into m_Lines
	void ParseText( void );

	// Filters the settings that belong to the given language
	// languages is a 00-terminated list of language names ordered by priority
	void FilterLanguages( const wchar_t *languages );

	// Returns a setting with the given name. If no setting is found, returns def
	const wchar_t *FindSetting( const wchar_t *name, const wchar_t *def=NULL );
	// Returns a setting with the given name, even if the value is blank. If the setting is not found, returns NULL
	const wchar_t *FindSettingDirect( const wchar_t *name );

	// Frees all resources
	virtual void Reset( void );

	struct TreeItem
	{
		CString name; // empty - last child
		int children; // index to the first child. -1 - no children
	};

	// Parses a tree structure of items. The rootName setting must be a list of item names.
	// Then for each name in the list the function will search for name.Items recursively.
	// The last child in the list will have an empty name.
	// Note - the rootName item will not be added to the list
	void ParseTree( const wchar_t *rootName, std::vector<TreeItem> &items );

protected:
	std::vector<wchar_t> m_Text;
	std::vector<const wchar_t*> m_Lines;

private:
	const wchar_t *FindSettingInt( const wchar_t *name, size_t len );

	int ParseTreeRec( const wchar_t *rootName, std::vector<TreeItem> &items, CString *names, int level );
};

///////////////////////////////////////////////////////////////////////////////

enum TSkinOptionType
{
	SKIN_OPTION_GROUP=-2,
	SKIN_OPTION_NONE=-1,
	SKIN_OPTION_BOOL,
	SKIN_OPTION_NUMBER,
	SKIN_OPTION_STRING,
	SKIN_OPTION_COLOR,
	SKIN_OPTION_IMAGE,

	SKIN_OPTION_TYPE_COUNT
};

class CSkinParser: public CSettingsParser
{
public:
	CSkinParser( void ) { m_Aliases=NULL; }
	bool LoadVariation( const wchar_t *fname );
	bool LoadVariation( HMODULE hMod, HRSRC hResInfo );
	void SetAliases( const wchar_t **aliases ) { m_Aliases=aliases; }
	virtual void Reset( void );

	// Parses the option from m_Lines[index]. Returns false if index is out of bounds
	bool ParseOption( CString &name, TSkinOptionType &type, CString &label, bool &value, CString &condition, CString &disValue, int index );

	// Filters the conditional groups
	// values/count - list of true options. the rest are assumed to be false
	void FilterConditions( const wchar_t **values, int count );

	// Substitutes the provided macro strings
	void ApplyMacros( const std::vector<std::pair<CString,CString>> &macros );

	// Returns a setting with the given name
	const wchar_t *FindSetting( const wchar_t *name );

protected:
	std::vector<wchar_t> m_VarText;
	const wchar_t **m_Aliases;
	std::vector<CString> m_ExtraStrings;
};

///////////////////////////////////////////////////////////////////////////////

int EvalCondition( const wchar_t *condition, const wchar_t *const *values, int count );
