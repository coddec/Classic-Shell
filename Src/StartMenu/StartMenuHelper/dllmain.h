// dllmain.h : Declaration of module class.

class CStartMenuHelperModule : public CAtlDllModuleT< CStartMenuHelperModule >
{
public :
	DECLARE_LIBID(LIBID_StartMenuHelperLib)
	DECLARE_REGISTRY_APPID_RESOURCEID(IDR_STARTMENUHELPER, "{62D2FBE4-89F7-48A5-A35F-DA2B8A3C54B7}")
};

extern CStartMenuHelperModule _AtlModule;

void WaitDllInitThread( void );
