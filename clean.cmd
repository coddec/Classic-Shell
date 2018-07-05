REM :: This script will forcefully clean the repository of residual cruft from the build process in the offchance I have forgotten
REM :: to include something. It is not perfect but it appears to do the job.
REM :: This is an alternative to 'git reset --hard HEAD' which would destroy local changes.
REM :: - Xenhat
git rm -f *..lastbuildstate
git rm -f *.dll
git rm -f *.exe
git rm -f *.exp
git rm -f *.iobj
git rm -f *.lastbuildstate
git rm -f *.lib
git rm -f *.log
git rm -f *.ltlog
git rm -f *.ipdb
git rm -f *.obj
git rm -f *.pch
git rm -f *.pdb
git rm -f *.res
git rm -f *.tlog
git rm -f *.adml
git rm -f *.admx
