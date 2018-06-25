REM ***** Collect PDBs

del Final\ClassicStartPDB_%CS_VERSION_STR%.zip
cd Output
7z a ..\Final\ClassicStartPDB_%CS_VERSION_STR%.zip PDB32 PDB64
cd ..

cd ..

REM ***** Collect Sources

del ClassicStartSetup\Final\ClassicStartSrc_%CS_VERSION_STR%.zip
7z a -r -x!*.intermediate.manifest -x!*.embed.manifest -x!*_i.h -x!Website\ ClassicStartSetup\Final\ClassicStartSrc_%CS_VERSION_STR%.zip *.h *.cpp *.rc *.vcproj *.ini *.def *.ico *.idl *.rgs *.jpg *.manifest *.wxl *.wxs *.sln *.bat *.bmp *.txt *.html *.rtf *.gif *.png *.hhp *.hhc ??-??.dll

REM ***** Collect Localization files

del ClassicStartSetup\Final\ClassicStartLoc.zip
cd Localization
7z a -r -x!en-US -x!*WixUI_en-us.wxl -x!*.adml -x!*.admx -x!*LocComments.txt ..\ClassicStartSetup\Final\ClassicStartLoc.zip English ..\ClassicExplorer\ExplorerL10N.ini ..\ClassicStartMenu\StartMenuL10N.ini ..\ClassicStartMenu\StartMenuHelper\StartMenuHelperL10N.ini English\ClassicStartText-en-US.wxl English\ClassicStartEULA.rtf
cd ..

cd ClassicStartSetup
