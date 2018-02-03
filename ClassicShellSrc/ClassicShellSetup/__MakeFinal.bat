@cd %~dp0

@call BuildBinaries.bat
@if ERRORLEVEL 1 exit /b 1

@call _BuildEnglish.bat
@if ERRORLEVEL 1 exit /b 1

call BuildArchives.bat

@exit /b 0
