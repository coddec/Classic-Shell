#include "stdafx.h"
#include <filesystem>
namespace fs = std::filesystem;

static void CopyRegKey(HKEY root, const wchar_t* srcKey, const wchar_t* dstKey)
{
	CRegKey src;
	if (src.Open(root, srcKey, KEY_READ | KEY_WOW64_64KEY) == ERROR_SUCCESS)
	{
		CRegKey dst;
		if (dst.Create(root, dstKey, nullptr, 0, KEY_ALL_ACCESS | KEY_WOW64_64KEY, nullptr, nullptr) == ERROR_SUCCESS)
			::RegCopyTree(src, nullptr, dst);
	}
}

static void CopyFolder(const wchar_t* srcPath, const wchar_t* dstPath)
{
	wchar_t src[MAX_PATH]{};
	::ExpandEnvironmentStrings(srcPath, src, _countof(src));

	wchar_t dst[MAX_PATH]{};
	::ExpandEnvironmentStrings(dstPath, dst, _countof(dst));

	std::error_code err;
	fs::copy(src, dst, fs::copy_options::recursive | fs::copy_options::update_existing, err);
}

void ImportLegacyData()
{
	CRegKey reg;
	if (reg.Open(HKEY_CURRENT_USER, L"Software\\OpenShell", KEY_READ | KEY_WOW64_64KEY) == ERROR_FILE_NOT_FOUND)
	{
		CopyRegKey(HKEY_CURRENT_USER, L"Software\\IvoSoft\\ClassicExplorer", L"Software\\OpenShell\\ClassicExplorer");
		CopyRegKey(HKEY_CURRENT_USER, L"Software\\IvoSoft\\ClassicIE", L"Software\\OpenShell\\ClassicIE");
		CopyRegKey(HKEY_CURRENT_USER, L"Software\\IvoSoft\\ClassicShell", L"Software\\OpenShell\\OpenShell");
		CopyRegKey(HKEY_CURRENT_USER, L"Software\\IvoSoft\\ClassicStartMenu", L"Software\\OpenShell\\StartMenu");

		CopyFolder(L"%APPDATA%\\ClassicShell", L"%APPDATA%\\OpenShell");
		CopyFolder(L"%LOCALAPPDATA%\\ClassicShell", L"%LOCALAPPDATA%\\OpenShell");
	}
}
