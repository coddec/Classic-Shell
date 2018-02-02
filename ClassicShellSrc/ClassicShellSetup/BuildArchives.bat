REM ***** Collect PDBs

del Final\ClassicShellPDB_%CS_VERSION_STR%.zip
cd Output
7z a ..\Final\ClassicShellPDB_%CS_VERSION_STR%.zip PDB32 PDB64
cd ..

cd ..

REM ***** Collect Sources

del ClassicShellSetup\Final\ClassicShellSrc_%CS_VERSION_STR%.zip
7z a -r -x!*.intermediate.manifest -x!*.embed.manifest -x!*_i.h -x!Website\ ClassicShellSetup\Final\ClassicShellSrc_%CS_VERSION_STR%.zip *.h *.cpp *.rc *.vcproj *.ini *.def *.ico *.idl *.rgs *.jpg *.manifest *.wxl *.wxs *.sln *.bat *.bmp *.txt *.html *.rtf *.gif *.png *.hhp *.hhc ??-??.dll

REM ***** Collect Localization files

del ClassicShellSetup\Final\ClassicShellLoc.zip
cd Localization
7z a -r -x!en-US -x!*WixUI_en-us.wxl -x!*.adml -x!*.admx -x!*LocComments.txt ..\ClassicShellSetup\Final\ClassicShellLoc.zip English ..\ClassicExplorer\ExplorerL10N.ini ..\ClassicStartMenu\StartMenuL10N.ini ..\ClassicStartMenu\StartMenuHelper\StartMenuHelperL10N.ini English\ClassicShellText-en-US.wxl English\ClassicShellEULA.rtf
cd ..

cd ClassicShellSetup
