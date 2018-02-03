@REM !!!!! CHANGE THE GUIDS WHEN CHANGING THE VERSION !!!!!
SET CS_VERSION=4.3.1
SET CS_VERSION_STR=4_3_1
SET CS_VERSION_NUM=40301
SET CS_GUID32=8A99142D-5D6E-40b6-AF88-8BD46F0C5CB4
SET CS_GUID64=CABCE573-0A86-42fa-A52A-C7EA61D5BE08

REM ********* Build Help
@setlocal EnableDelayedExpansion
@if %CS_HAS_HELP%==1 (
	SET CS_ERROR=0
	if NOT %CS_LANG_FOLDER%==English mklink /J ..\Localization\%CS_LANG_FOLDER%\images ..\Localization\English\images
	hhc ..\Localization\%CS_LANG_FOLDER%\ClassicShell.hhp
	@REM looks like hhc returns 0 for error, >0 for success
	@if NOT ERRORLEVEL 1 @SET CS_ERROR=1
	if NOT %CS_LANG_FOLDER%==English rmdir ..\Localization\%CS_LANG_FOLDER%\images
	@if !CS_ERROR!==1 exit /b 1
)
@endlocal
@if %CS_HAS_HELP%==0 (
	copy /Y ..\Localization\English\ClassicShell.chm ..\Localization\%CS_LANG_FOLDER%\ClassicShell.chm
)

@if %CS_HAS_EULA%==0 copy /Y ..\Localization\English\ClassicShellEULA.rtf ..\Localization\%CS_LANG_FOLDER%
@if %CS_HAS_README%==0 copy /Y ..\Localization\English\ClassicShellReadme.rtf ..\Localization\%CS_LANG_FOLDER%

@if _%CS_LANG_NAME%==_ echo Unrecognized language '%CS_LANG_FOLDER%'
@if _%CS_LANG_NAME%==_ exit /b 1

SET CS_INSTALLER_NAME=ClassicShellSetup_%CS_VERSION_STR%-%CS_LANG_NAME_SHORT%
if %CS_LANG_NAME_SHORT%==en SET CS_INSTALLER_NAME=ClassicShellSetup_%CS_VERSION_STR%

md Temp
del /Q Temp\*.*

@if not exist ..\Localization\%CS_LANG_FOLDER%\ClassicShellText-%CS_LANG_NAME%.wxl exit /b 1

REM ********* Build 32-bit MSI
candle ClassicShellSetup.wxs -out Temp\ClassicShellSetup32.wixobj -ext WixUIExtension -ext WixUtilExtension -dx64=0 -dCS_LANG_FOLDER=%CS_LANG_FOLDER% -dCS_LANG_NAME=%CS_LANG_NAME%
@if ERRORLEVEL 1 exit /b 1

@REM We need to suppress ICE38 and ICE43 because they apply only to per-user installation. We only support per-machine installs
@REM We need to suppress ICE09 because the helper DLLs need to go into the system directory (for safety reasons)
light Temp\ClassicShellSetup32.wixobj -out Temp\ClassicShellSetup32.msi -ext WixUIExtension -ext WixUtilExtension -loc ..\Localization\%CS_LANG_FOLDER%\ClassicShellText-%CS_LANG_NAME%.wxl -loc ..\Localization\%CS_LANG_FOLDER%\WixUI_%CS_LANG_NAME%.wxl -sice:ICE38 -sice:ICE43 -sice:ICE09
@if ERRORLEVEL 1 exit /b 1


REM ********* Build 64-bit MSI
candle ClassicShellSetup.wxs -out Temp\ClassicShellSetup64.wixobj -ext WixUIExtension -ext WixUtilExtension -dx64=1 -dCS_LANG_FOLDER=%CS_LANG_FOLDER% -dCS_LANG_NAME=%CS_LANG_NAME%
@if ERRORLEVEL 1 exit /b 1

@REM We need to suppress ICE38 and ICE43 because they apply only to per-user installation. We only support per-machine installs
@REM We need to suppress ICE09 because the helper DLLs need to go into the system directory (for safety reasons)
light Temp\ClassicShellSetup64.wixobj -out Temp\ClassicShellSetup64.msi -ext WixUIExtension -ext WixUtilExtension -loc ..\Localization\%CS_LANG_FOLDER%\ClassicShellText-%CS_LANG_NAME%.wxl -loc ..\Localization\%CS_LANG_FOLDER%\WixUI_%CS_LANG_NAME%.wxl -sice:ICE38 -sice:ICE43 -sice:ICE09
@if ERRORLEVEL 1 exit /b 1


REM ********* Build MSI Checksums
start /wait ClassicShellUtility\Release\ClassicShellUtility.exe crcmsi Temp
@if ERRORLEVEL 1 exit /b 1

REM ********* Build bootstrapper
for /f "usebackq tokens=*" %%i in (`"%ProgramFiles(x86)%\Microsoft Visual Studio\Installer\vswhere.exe" -latest -products * -requires Microsoft.Component.MSBuild -property installationPath`) do set MSBuildDir=%%i\MSBuild\15.0\Bin\

"%MSBuildDir%MSBuild.exe" ClassicShellSetup.sln /m /t:Rebuild /p:Configuration="Release" /p:Platform="Win32" /verbosity:minimal
@if ERRORLEVEL 1 exit /b 1

md Final

del Final\%CS_INSTALLER_NAME%.exe
copy /B Release\ClassicShellSetup.exe Final\%CS_INSTALLER_NAME%.exe

if defined APPVEYOR (
	appveyor PushArtifact Release\ClassicShellSetup.exe -FileName %CS_INSTALLER_NAME%.exe
)

md Output\Releases
copy /B Final\%CS_INSTALLER_NAME%.exe Output\Releases\%CS_INSTALLER_NAME%.exe


SET CS_LANG_FOLDER=
SET CS_LANG_NAME=
SET CS_LANG_NAME_SHORT=

exit /b 0
