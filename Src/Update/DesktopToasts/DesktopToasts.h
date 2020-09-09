#include <VersionHelpers.h>

using DesktopToastActivateHandler = void(__cdecl*)(void* context, LPCWSTR invokedArgs);

HRESULT Initialize(LPCWSTR appUserModelId, DesktopToastActivateHandler handler, void* handlerContext);
HRESULT DisplaySimpleToast(LPCWSTR title, LPCWSTR text);

class DesktopToasts
{
public:
	explicit DesktopToasts(LPCWSTR appUserModelId)
	{
		if (::IsWindows10OrGreater())
		{
			auto m_lib = ::LoadLibrary(L"DesktopToasts.dll");
			if (m_lib)
			{
				m_pInitialize = (decltype(m_pInitialize))::GetProcAddress(m_lib, "Initialize");
				m_pDisplayToast = (decltype(m_pDisplayToast))::GetProcAddress(m_lib, "DisplaySimpleToast");

				if (m_pInitialize && m_pDisplayToast)
				{
					if (m_pInitialize(appUserModelId, ToastActivate, this) == S_OK)
						m_initialized = true;
				}
			}
		}
	}

	~DesktopToasts()
	{
		if (m_lib)
			::FreeLibrary(m_lib);
	}

	explicit operator bool() const
	{
		return m_initialized;
	}

	HRESULT DisplaySimpleToast(LPCWSTR title, LPCWSTR text)
	{
		return m_pDisplayToast(title, text);
	}

private:
	virtual void OnToastActivate(LPCWSTR invokedArgs) {}

	static void __cdecl ToastActivate(void* context, LPCWSTR invokedArgs)
	{
		static_cast<DesktopToasts*>(context)->OnToastActivate(invokedArgs);
	}

	bool m_initialized = false;

	HMODULE m_lib = nullptr;
	decltype(&::Initialize) m_pInitialize = nullptr;
	decltype(&::DisplaySimpleToast) m_pDisplayToast = nullptr;
};
