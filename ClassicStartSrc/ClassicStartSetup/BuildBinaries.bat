md Output
del /Q /S Output\*.*
md Output\x64
md Output\PDB32
md Output\PDB64

for /f "usebackq tokens=*" %%i in (`"%ProgramFiles(x86)%\Microsoft Visual Studio\Installer\vswhere.exe" -latest -products * -requires Microsoft.Component.MSBuild -property installationPath`) do set MSBuildDir=%%i\MSBuild\15.0\Bin\

REM ********* Build 64-bit solution
"%MSBuildDir%MSBuild.exe" ..\ClassicStart.sln /m /t:Rebuild /p:Configuration="Setup" /p:Platform="x64" /verbosity:minimal
@if ERRORLEVEL 1 exit /b 1

REM ********* Build 32-bit solution (must be after 64-bit)
"%MSBuildDir%MSBuild.exe" ..\ClassicStart.sln /m /t:Rebuild /p:Configuration="Setup" /p:Platform="Win32" /verbosity:minimal
@if ERRORLEVEL 1 exit /b 1


REM ********* Make en-US.dll
cd ..
start /wait ClassicStartSetup\ClassicStartUtility\Release\ClassicStartUtility.exe makeEN ClassicExplorer\Setup\ClassicExplorer32.dll ClassicStartMenu\Setup\ClassicStartMenuDLL.dll ClassicIE\Setup\ClassicIEDLL_32.dll ClassicStartUpdate\Release\ClassicStartUpdate.exe
@if ERRORLEVEL 1 exit /b 1

start /wait ClassicStartSetup\ClassicStartUtility\Release\ClassicStartUtility.exe extract en-US.dll en-US.csv
copy en-US.dll Localization\English
move en-US.csv Localization\English

cd ClassicStartSetup


REM ********* Copy binaries

copy /B ..\ClassicExplorer\Setup\ClassicExplorer32.dll Output
copy /B ..\ClassicExplorer\Setup\ClassicExplorerSettings.exe Output
copy /B ..\ClassicIE\Setup\ClassicIEDLL_32.dll Output
copy /B ..\ClassicIE\Setup\ClassicIE_32.exe Output
copy /B ..\ClassicStartMenu\Setup\ClassicStartMenu.exe Output
copy /B ..\ClassicStartMenu\Setup\ClassicStartMenuDLL.dll Output
copy /B ..\ClassicStartUpdate\Release\ClassicStartUpdate.exe Output
copy /B ..\ClassicStartMenu\StartMenuHelper\Setup\StartMenuHelper32.dll Output
copy /B ..\ClassicStartSetup\SetupHelper\Release\SetupHelper.exe Output

copy /B ..\ClassicExplorer\Setup64\ClassicExplorer64.dll Output\x64
copy /B ..\ClassicIE\Setup64\ClassicIEDLL_64.dll Output\x64
copy /B ..\ClassicIE\Setup64\ClassicIE_64.exe Output\x64
copy /B ..\ClassicStartMenu\Setup64\ClassicStartMenu.exe Output\x64
copy /B ..\ClassicStartMenu\Setup64\ClassicStartMenuDLL.dll Output\x64
copy /B ..\ClassicStartMenu\StartMenuHelper\Setup64\StartMenuHelper64.dll Output\x64

copy /B "..\ClassicStartMenu\Skins\Classic Skin.skin" Output
copy /B "..\ClassicStartMenu\Skins\Full Glass.skin" Output
copy /B "..\ClassicStartMenu\Skins\Smoked Glass.skin" Output
copy /B "..\ClassicStartMenu\Skins\Windows Aero.skin" Output
copy /B "..\ClassicStartMenu\Skins\Windows Basic.skin" Output
copy /B "..\ClassicStartMenu\Skins\Windows XP Luna.skin" Output
copy /B "..\ClassicStartMenu\Skins\Windows 8.skin" Output
copy /B "..\ClassicStartMenu\Skins\Metro.skin" Output
copy /B "..\ClassicStartMenu\Skins\Classic Skin.skin7" Output
copy /B "..\ClassicStartMenu\Skins\Windows Aero.skin7" Output
copy /B "..\ClassicStartMenu\Skins\Windows 8.skin7" Output
copy /B "..\ClassicStartMenu\Skins\Midnight.skin7" Output
copy /B "..\ClassicStartMenu\Skins\Metro.skin7" Output
copy /B "..\ClassicStartMenu\Skins\Metallic.skin7" Output


REM ********* Collect debug info

REM Explorer 32
copy /B ..\ClassicExplorer\Setup\ClassicExplorer32.pdb Output\PDB32
copy /B Output\ClassicExplorer32.dll Output\PDB32
copy /B ..\ClassicExplorer\Setup\ClassicExplorerSettings.pdb Output\PDB32
copy /B Output\ClassicExplorerSettings.exe Output\PDB32

REM Explorer 64
copy /B ..\ClassicExplorer\Setup64\ClassicExplorer64.pdb Output\PDB64
copy /B Output\x64\ClassicExplorer64.dll Output\PDB64

REM IE 32
copy /B ..\ClassicIE\Setup\ClassicIEDLL_32.pdb Output\PDB32
copy /B Output\ClassicIEDLL_32.dll Output\PDB32
copy /B ..\ClassicIE\Setup\ClassicIE_32.exe Output\PDB32
copy /B Output\ClassicIE_32.exe Output\PDB32

REM IE 64
copy /B ..\ClassicIE\Setup64\ClassicIEDLL_64.pdb Output\PDB64
copy /B Output\x64\ClassicIEDLL_64.dll Output\PDB64
copy /B ..\ClassicIE\Setup64\ClassicIE_64.exe Output\PDB64
copy /B Output\x64\ClassicIE_64.exe Output\PDB64

REM Menu 32
copy /B ..\ClassicStartMenu\Setup\ClassicStartMenu.pdb Output\PDB32
copy /B Output\ClassicStartMenu.exe Output\PDB32
copy /B ..\ClassicStartMenu\Setup\ClassicStartMenuDLL.pdb Output\PDB32
copy /B Output\ClassicStartMenuDLL.dll Output\PDB32
copy /B ..\ClassicStartMenu\StartMenuHelper\Setup\StartMenuHelper32.pdb Output\PDB32
copy /B Output\StartMenuHelper32.dll Output\PDB32
copy /B ..\ClassicStartUpdate\Release\ClassicStartUpdate.pdb Output\PDB32
copy /B Output\ClassicStartUpdate.exe Output\PDB32

REM Menu 64
copy /B ..\ClassicStartMenu\Setup64\ClassicStartMenu.pdb Output\PDB64
copy /B Output\x64\ClassicStartMenu.exe Output\PDB64
copy /B ..\ClassicStartMenu\Setup64\ClassicStartMenuDLL.pdb Output\PDB64
copy /B Output\x64\ClassicStartMenuDLL.dll Output\PDB64
copy /B ..\ClassicStartMenu\StartMenuHelper\Setup64\StartMenuHelper64.pdb Output\PDB64
copy /B Output\x64\StartMenuHelper64.dll Output\PDB64


REM ********* Build ADMX
if exist Output\PolicyDefinitions.zip (
  del Output\PolicyDefinitions.zip
)
cd ..\Localization\English
..\..\ClassicStartMenu\Setup\ClassicStartMenu.exe -saveadmx en-US
@if ERRORLEVEL 1 exit /b 1
..\..\ClassicExplorer\Setup\ClassicExplorerSettings.exe -saveadmx en-US
@if ERRORLEVEL 1 exit /b 1
..\..\ClassicIE\Setup\ClassicIE_32.exe -saveadmx en-US
@if ERRORLEVEL 1 exit /b 1
md en-US
copy /B *.adml en-US
7z a ..\..\ClassicStartSetup\Output\PolicyDefinitions.zip *.admx en-US\*.adml PolicyDefinitions.rtf
rd /Q /S en-US
cd ..\..\ClassicStartSetup

exit /b 0
