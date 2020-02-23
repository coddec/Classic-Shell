REM :: This script will forcefully clean the repository of residual cruft from the build process in the offchance I have forgotten
REM :: to include something. It is not perfect but it appears to do the job.
REM :: This is an alternative to 'git reset --hard HEAD' which would destroy local changes.
REM :: - Xenhat
git clean -xdf
