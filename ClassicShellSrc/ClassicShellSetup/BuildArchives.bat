REM ***** Collect PDBs

del Final\ClassicShellPDB_%CS_VERSION_STR%.zip
"C:\Program Files\WinRAR\winrar" a -afzip -ep1 Final\ClassicShellPDB_%CS_VERSION_STR%.zip Output\PDB32 Output\PDB64

cd ..

REM ***** Collect Sources

del ClassicShellSetup\Final\ClassicShellSrc_%CS_VERSION_STR%.zip
"C:\Program Files\WinRAR\winrar" a -afzip -ep1 -ed -r -x*.intermediate.manifest -x*.embed.manifest -x*_i.h -xWebsite\ ClassicShellSetup\Final\ClassicShellSrc_%CS_VERSION_STR%.zip *.h *.cpp *.rc *.vcproj *.ini *.def *.ico *.idl *.rgs *.jpg *.manifest *.wxl *.wxs *.sln *.bat *.bmp *.txt *.html *.rtf *.gif *.png *.hhp *.hhc ??-??.dll

REM ***** Collect Localization files

del ClassicShellSetup\Final\ClassicShellLoc.zip
"C:\Program Files\WinRAR\winrar" a -afzip -ep1 -ed -r -x*WixUI_en-us.wxl -x*.adml -x*.admx -x*LocComments.txt ClassicShellSetup\Final\ClassicShellLoc.zip Localization\English ClassicExplorer\ExplorerL10N.ini ClassicStartMenu\StartMenuL10N.ini ClassicStartMenu\StartMenuHelper\StartMenuHelperL10N.ini Localization\English\ClassicShellText-en-US.wxl Localization\English\ClassicShellEULA.rtf

cd ClassicShellSetup
