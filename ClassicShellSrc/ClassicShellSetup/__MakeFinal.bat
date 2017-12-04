@call BuildBinaries.bat
@if %CS_ERROR%==1 goto end

@call _BuildEnglish.bat
@if %CS_ERROR%==1 goto end

call BuildArchives.bat

:end
