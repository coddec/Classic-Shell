@echo off

rem CreateSourceIndex.bat <src-root-path>

rem Create source index (write to stdout)

rem Based on information provided here:
rem https://gist.github.com/baldurk/c6feb31b0305125c6d1a

rem expand src root
set SRC_ROOT=%~fdp1

rem get repo url
for /f %%A in ('git remote get-url origin') do set REPO_URL=%%A
rem remove .git from the end
set REPO_URL=%REPO_URL:~0,-4%

rem get actual commit id
for /f %%A in ('git rev-parse HEAD') do set COMMIT=%%A

echo SRCSRV: ini ------------------------------------------------
echo VERSION=2
echo VERCTRL=http
echo SRCSRV: variables ------------------------------------------
echo SRCSRVTRG=%REPO_URL%/raw/%COMMIT%/%%var2%%
echo SRCSRV: source files ---------------------------------------

setlocal enabledelayedexpansion
for /f %%A in ('git ls-tree --full-tree -r --name-only head') do (
	rem full path to source file
	set SRC_FILE=%SRC_ROOT%\%%A
	rem replace / by \
	set SRC_FILE=!SRC_FILE:/=\!
	rem convert to lowercase
	for %%C in (a b c d e f g h i j k l m n o p q r s t u v w x y z) do set SRC_FILE=!SRC_FILE:%%C=%%C!
	rem <full-path-to-src>*<relative-repo-path>
	echo !SRC_FILE!*%%A
)
setlocal disabledelayedexpansion

echo SRCSRV: end ------------------------------------------------
