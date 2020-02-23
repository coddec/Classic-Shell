REM ***** Collect PDBs

echo -- Creating symbols package
set CS_SYMBOLS_NAME=OpenShellPDB_%CS_VERSION_STR%.7z

cd Output
7z a -mx9 ..\Final\%CS_SYMBOLS_NAME% PDB32 PDB64 > nul
cd ..

if defined APPVEYOR (
	appveyor PushArtifact Final\%CS_SYMBOLS_NAME%
)

cd ..

REM ***** Collect Localization files

echo -- Creating localization package
cd Localization
7z a -r -x!en-US -x!*WixUI_en-us.wxl -x!*.adml -x!*.admx -x!*LocComments.txt ..\Setup\Final\OpenShellLoc.zip English ..\ClassicExplorer\ExplorerL10N.ini ..\StartMenu\StartMenuL10N.ini ..\StartMenu\StartMenuHelper\StartMenuHelperL10N.ini English\OpenShellText-en-US.wxl English\OpenShellEULA.rtf > nul
cd ..

cd Setup

exit /b 0
