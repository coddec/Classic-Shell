// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

#include <vector>
#include "ItemManager.h"

// Returns true if the given app has a non-empty jumplist
bool HasJumplist( const wchar_t *appid );

struct CJumpItem
{
	CJumpItem( void ) { type=TYPE_UNKNOWN; hash=0; bHidden=bHasArguments=false; }
	enum Type
	{
		TYPE_UNKNOWN,
		TYPE_ITEM, // IShellItem
		TYPE_LINK, // IShellLink
		TYPE_SEPARATOR,
	};
	Type type;
	unsigned int hash;
	bool bHidden;
	bool bHasArguments;
	CString name;
	CComPtr<IUnknown> pItem;
};

struct CJumpGroup
{
	CJumpGroup( void ) { type=TYPE_RECENT; bHidden=false; }
	enum Type
	{
		TYPE_RECENT,
		TYPE_FREQUENT,
		TYPE_TASKS,
		TYPE_CUSTOM,
		TYPE_PINNED,
	};
	
	Type type;
	bool bHidden;
	CString name;
	std::vector<CJumpItem> items;
};

struct CJumpList
{
	std::vector<CJumpGroup> groups;

	void Clear( void ) { groups.clear(); }
};

// Returns the jumplist for the given shortcut
bool GetJumplist( const wchar_t *appid, CJumpList &list, int maxCount, int maxHeight, int sepHeight, int itemHeight );

// Executes the given item using the correct application
bool ExecuteJumpItem( const CItemManager::ItemInfo *pAppInfo, const CJumpItem &item, HWND hwnd );

// Removes the given item from the jumplist
void RemoveJumpItem( const CItemManager::ItemInfo *pAppInfo, CJumpList &list, int groupIdx, int itemIdx );

// Pins or unpins the given item from the jumplist
void PinJumpItem( const CItemManager::ItemInfo *pAppInfo, const CJumpList &list, int groupIdx, int itemIdx, bool bPin, int pinIndex );
