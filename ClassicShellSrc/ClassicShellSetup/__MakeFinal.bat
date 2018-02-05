@cd %~dp0

@rem Default version
@set CS_VERSION=4.4.0

@if defined APPVEYOR_BUILD_VERSION (
	@set CS_VERSION=%APPVEYOR_BUILD_VERSION%
)

@rem Convert . to _
@set CS_VERSION_STR=%CS_VERSION:.=_%

@call BuildBinaries.bat
@if ERRORLEVEL 1 exit /b 1

@call _BuildEnglish.bat
@if ERRORLEVEL 1 exit /b 1

call BuildArchives.bat

@exit /b 0
