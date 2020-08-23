// Context menu handler for Open-Shell Modern Settings shell folder

// Based on Explorer Data Provider Sample (https://docs.microsoft.com/en-us/windows/win32/shell/samples-explorerdataprovider)

#include "stdafx.h"
#include "ModernSettings.h"
#include "ModernSettingsContextMenu.h"

#define MENUVERB_OPEN     0

struct ICIVERBTOIDMAP
{
	LPCWSTR pszCmd;         // verbW
	LPCSTR  pszCmdA;        // verbA
	UINT    idCmd;          // hmenu id
};

static const ICIVERBTOIDMAP g_ContextMenuIDMap[] =
{
	{ L"open",       "open",      MENUVERB_OPEN },
	{ NULL,          NULL,        (UINT)-1      }
};

HRESULT _MapICIVerbToCmdID(LPCMINVOKECOMMANDINFO pici, UINT* pid)
{
	if (IS_INTRESOURCE(pici->lpVerb))
	{
		*pid = LOWORD((UINT_PTR)pici->lpVerb);
		return S_OK;
	}

	if (pici->fMask & CMIC_MASK_UNICODE)
	{
		for (const auto& i : g_ContextMenuIDMap)
		{
			if (StrCmpIC(((LPCMINVOKECOMMANDINFOEX)pici)->lpVerbW, i.pszCmd) == 0)
			{
				*pid = i.idCmd;
				return S_OK;
			}
		}
	}
	else
	{
		for (const auto& i : g_ContextMenuIDMap)
		{
			if (StrCmpICA(pici->lpVerb, i.pszCmdA) == 0)
			{
				*pid = i.idCmd;
				return S_OK;
			}
		}
	}

	return E_FAIL;
}

static bool ActivateModernSettingPage(const WCHAR* page)
{
	CComPtr<IApplicationActivationManager> mgr;
	mgr.CoCreateInstance(CLSID_ApplicationActivationManager);
	if (mgr)
	{
		DWORD pid = 0;
		return SUCCEEDED(mgr->ActivateApplication(L"windows.immersivecontrolpanel_cw5n1h2txyewy!microsoft.windows.immersivecontrolpanel", page, AO_NONE, &pid));
	}

	return false;
}

extern ModernSettings::Setting GetModernSetting(LPCITEMIDLIST pidl);

static HRESULT OpenItemByPidl(LPCITEMIDLIST pidl)
{
	auto child = ILFindLastID(pidl);
	auto setting = GetModernSetting(child);

	if (!setting)
		return E_INVALIDARG;

	if (setting.hostId == L"{6E6DDBCB-9C89-434B-A994-D5F22239523B}")
	{
		std::wstring cmd(L"windowsdefender://");
		cmd += setting.deepLink;

		return (intptr_t)::ShellExecute(nullptr, L"open", cmd.c_str(), nullptr, nullptr, SW_SHOWNORMAL) > 32 ? S_OK : E_FAIL;
	}

	if (setting.pageId.empty())
		return E_INVALIDARG;

	std::wstring page;

	page += L"page=";
	page += setting.pageId;

	if (!setting.settingId.empty())
	{
		page += L"&target=";
		page += setting.settingId;
	}
	else if (!setting.groupId.empty())
	{
		page += L"&group=";
		page += setting.groupId;
	}

	page += L"&ActivationType=Search";

	ActivateModernSettingPage(page.c_str());

	return S_OK;
}


// CModernSettingsContextMenu

HRESULT CModernSettingsContextMenu::QueryContextMenu(HMENU hmenu, UINT indexMenu, UINT idCmdFirst, UINT /* idCmdLast */, UINT /* uFlags */)
{
	InsertMenu(hmenu, indexMenu++, MF_BYPOSITION, idCmdFirst + MENUVERB_OPEN, L"Open");
	// other verbs could go here...

	// indicate that we added one verb.
	return MAKE_HRESULT(SEVERITY_SUCCESS, 0, (USHORT)(1));
}

HRESULT CModernSettingsContextMenu::InvokeCommand(LPCMINVOKECOMMANDINFO pici)
{
	HRESULT hr = E_INVALIDARG;
	UINT uID;
	// Is this command for us?
	if (SUCCEEDED(_MapICIVerbToCmdID(pici, &uID)))
	{
		if (uID == MENUVERB_OPEN && m_pdtobj)
		{
			LPITEMIDLIST pidl;
			hr = SHGetIDListFromObject(m_pdtobj, &pidl);
			if (SUCCEEDED(hr))
			{
				hr = OpenItemByPidl(pidl);
				ILFree(pidl);
			}
		}
	}

	return hr;
}

HRESULT CModernSettingsContextMenu::GetCommandString(UINT_PTR /* idCmd */, UINT /* uType */, UINT* /* pRes */, LPSTR /* pszName */, UINT /* cchMax */)
{
	return E_NOTIMPL;
}

HRESULT CModernSettingsContextMenu::Initialize(PCIDLIST_ABSOLUTE /* pidlFolder */, IDataObject* pdtobj, HKEY /* hkeyProgID */)
{
	m_pdtobj = pdtobj;
	return S_OK;
}

HRESULT CModernSettingsContextMenu::SetSite(IUnknown* punkSite)
{
	m_punkSite = punkSite;
	return S_OK;
}

HRESULT CModernSettingsContextMenu::GetSite(REFIID riid, void** ppvSite)
{
	return m_punkSite ? m_punkSite->QueryInterface(riid, ppvSite) : E_FAIL;
}
