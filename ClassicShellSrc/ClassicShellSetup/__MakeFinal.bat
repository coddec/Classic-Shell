@echo off
set PATH=C:\Program Files\7-Zip\;C:\Program Files (x86)\HTML Help Workshop;C:\Program Files (x86)\WiX Toolset v3.11\bin\;%PATH%

@cd %~dp0

@rem Clean repository and build fresh. Will erase current changes so disabled by default.
rem git clean -dfx

@rem Default version
@set CS_VERSION=4.3.2

@if defined APPVEYOR_BUILD_VERSION (
	@set CS_VERSION=%APPVEYOR_BUILD_VERSION%
)

@rem Convert . to _
@set CS_VERSION_STR=%CS_VERSION:.=_%

@call BuildBinaries.bat
@if ERRORLEVEL 1 exit /b 1


@call _BuildEnglish.bat
@if ERRORLEVEL 1 exit /b 1

@rem Build other languages
@call _BuildChineseCN.bat
@call _BuildChineseTW.bat
@call _BuildFrench.bat
@call _BuildGerman.bat
@call _BuildItalian.bat
@call _BuildPolish.bat
@call _BuildRussian.bat
@call _BuildSpanish.bat
@if ERRORLEVEL 1 exit /b 1

call BuildArchives.bat

@exit /b 0
