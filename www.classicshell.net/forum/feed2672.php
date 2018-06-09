<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=6909" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-10-30T05:37:09-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=6909</id>
<entry>
<author><name><![CDATA[iorx]]></name></author>
<updated>2017-10-30T05:37:09-07:00</updated>
<published>2017-10-30T05:37:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34618#p34618</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34618#p34618"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34618#p34618"><![CDATA[
Maybe resurrecting something very old here. But I've got this working for me with upgraded Windows 10 machines.<br /><br />Note: I only use the Start Menu component from Classic shell, nothing else.<br /><br />Running the below as a startup script on computers through a GPO.<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">@echo off<br />rem * --------------------------------------------------------------------------<br />SETLOCAL ENABLEDELAYEDEXPANSION<br /><br />if Not Exist &quot;%systemRoot%\System32\StartMenuHelper64.dll&quot; (<br />echo * No Classic Shell found<br />goto :eof<br />)<br /><br />set valCurrentBuild=<br />set valCalcCurrentBuild=<br />set valClassicWinVersion=<br /><br />rem 10240 1507 Threshold 1<br />rem 10586 1511 November Update<br />rem 14393 1607 Anniversary Update<br />rem 15063 1703 Creators Update<br />rem 16299 1709 Fall Creators Update<br />rem xxxxx 1803 Redstone 4<br /><br />rem * Windows build<br />for /f &quot;tokens=1,2,3&quot; %%i in ('reg query &quot;HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion&quot; ^| find &quot;CurrentBuild&quot;') do set valCurrentBuild=%%k<br />echo * Windows Build %valCurrentBuild%<br />set /a valCalcCurrentBuild=16777216*10+%valCurrentBuild%<br /><br />rem * Classic Shell check<br />for /f &quot;tokens=1,2,3&quot; %%i in ('reg query &quot;HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicShell&quot; ^| find &quot;WinVersion&quot;') do set /a valClassicWinVersion=%%k<br />if Not Defined valClassicWinVersion (<br />echo * No Classic shell WinVersion number found<br />goto :eof<br />)<br />echo * Caclulated vaule for ClassicShell %valCalcCurrentBuild%<br />echo * Registry value for ClassicShell %valClassicWinVersion%<br /><br />rem * Fix Classic Shell registry value<br />if %valCalcCurrentBuild% GTR %valClassicWinVersion% (<br />echo * New value to HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicShell\WinVersion = %valCalcCurrentBuild%<br />reg add &quot;HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicShell&quot; /v &quot;WinVersion&quot; /t REG_DWORD /d %valCalcCurrentBuild% /f<br />regsvr32 /s %SystemRoot%\System32\StartMenuHelper64.dll<br />) else (<br />echo * Classic Shell WinVersion is OK.<br />)<br />rem * --------------------------------------------------------------------------<br /><br /></div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=25993">iorx</a> — Mon Oct 30, 2017 5:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powellap]]></name></author>
<updated>2017-10-26T21:51:58-07:00</updated>
<published>2017-10-26T21:51:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34583#p34583</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34583#p34583"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34583#p34583"><![CDATA[
I have no idea how you figured that out, but thanks for the work!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10604">powellap</a> — Thu Oct 26, 2017 9:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[__trj]]></name></author>
<updated>2017-10-26T17:05:04-07:00</updated>
<published>2017-10-26T17:05:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34582#p34582</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34582#p34582"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=34582#p34582"><![CDATA[
<div class="quotetitle">powellap wrote:</div><div class="quotecontent"><br />Thank you. I guess what I'm struggling with is, where that AU value is, so that I can update the WinVersion in the future so that it matches.<br /></div><br /><br /><br />The formula is <strong>appears</strong> to be 2^24 * (Windows 10 major version number) + (Windows 10 build number).<br /><br />So the Fall Creators Update (1709) is 2^24 * 10 + 16299 = 167788459<br /><br />Just posting here because I have to deal with this every time there's a Windows 10 upgrade and I kept coming across this post and no answer, so I decided to figure out how the number is calculated.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=25850">__trj</a> — Thu Oct 26, 2017 5:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powellap]]></name></author>
<updated>2016-10-01T13:02:40-07:00</updated>
<published>2016-10-01T13:02:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29647#p29647</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29647#p29647"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29647#p29647"><![CDATA[
Thank you. I guess what I'm struggling with is, where that AU value is, so that I can update the WinVersion in the future so that it matches.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10604">powellap</a> — Sat Oct 01, 2016 1:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-01T11:46:46-07:00</updated>
<published>2016-10-01T11:46:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29645#p29645</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29645#p29645"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29645#p29645"><![CDATA[
You need to set the value WinVersion in HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicShell to 167786553. It corresponds to the AU version.<br />If this number doesn't match the current Windows version, the auto-upgrade behavior will kick in and you will get the popup after you log in.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Oct 01, 2016 11:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powellap]]></name></author>
<updated>2016-10-01T11:25:37-07:00</updated>
<published>2016-10-01T11:25:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29644#p29644</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29644#p29644"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29644#p29644"><![CDATA[
Maybe I'm missing it, but is the WinVersion calculated or is it based on a value from Windows?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10604">powellap</a> — Sat Oct 01, 2016 11:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powellap]]></name></author>
<updated>2016-09-30T08:43:26-07:00</updated>
<published>2016-09-30T08:43:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29628#p29628</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29628#p29628"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29628#p29628"><![CDATA[
I'm looking in HKLM\Software\Microsoft\Windows NT\CurrentVersion, but nothing seems to compare to your WinVersion value.   Any ideas?<br /><br />By the way thanks for the help on this.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10604">powellap</a> — Fri Sep 30, 2016 8:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-30T08:35:49-07:00</updated>
<published>2016-09-30T08:35:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29627#p29627</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29627#p29627"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29627#p29627"><![CDATA[
Ah, right. I was a bit confused.<br />The problem is that the AU upgrade will destroy some registry settings that require admin access to restore. You need to register the StartMenuHelper dll and update the Windows version in the registry, which will stop the update checks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 30, 2016 8:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powellap]]></name></author>
<updated>2016-09-30T08:18:55-07:00</updated>
<published>2016-09-30T08:18:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29625#p29625</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29625#p29625"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29625#p29625"><![CDATA[
Awesome.  Thanks.  <br /><br />Ivo, 4.30 is installed.   The problem is, CS needs permissions a standard user doesn't have.  They will see this message every time they reboot the PC.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10604">powellap</a> — Fri Sep 30, 2016 8:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-30T07:17:22-07:00</updated>
<published>2016-09-30T07:17:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29623#p29623</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29623#p29623"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29623#p29623"><![CDATA[
Why not just upgrade all computers to version 4.3.0? It will not be removed by the AU.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 30, 2016 7:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-30T06:54:51-07:00</updated>
<published>2016-09-30T06:54:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29621#p29621</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29621#p29621"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29621#p29621"><![CDATA[
The Windows version has to match the value stored in HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicShell: DWORD WinVersion.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Sep 30, 2016 6:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powellap]]></name></author>
<updated>2016-09-30T06:05:10-07:00</updated>
<published>2016-09-30T06:05:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29618#p29618</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29618#p29618"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29618#p29618"><![CDATA[
Okay this is a good start.   But... let me ask this a different way.<br /><br />Computer has Win 10 (1511) (not AU) and CS 4.30 installed.  Everything is working fine.  Microsoft randomly picks this PC to upgrade to 1607 AU. <br />(1) Next reboot into the GUI, CS throws the message that it needs to configure itself for the new OS.  Admin user agrees (by allowing UAC prompt), changes are made.  <br />(2) All reboots afterwards (until MS breaks it again) CS and Windows go along there merry way. No message from CS about configuration.<br /><br />I assume CS is checking something (registry setting?, file versions?)  in both (1) and (2) to decide whether to throw the message and attempt to do the &quot;configure&quot;.   Can you share what those checks are?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10604">powellap</a> — Fri Sep 30, 2016 6:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-30T05:49:13-07:00</updated>
<published>2016-09-30T05:49:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29617#p29617</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29617#p29617"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29617#p29617"><![CDATA[
You need to do two things:<br />1) In the registry, open HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Run, and find the value &quot;Classic Start Menu&quot;. Replace the &quot;-autorun&quot; parameter with &quot;-startup&quot;. This will stop the upgrading.<br />2) After the upgrade of Windows, run regsvr32 %windir%\System32\StartMenuHelper64.dll (or StartMenuHelper32.dll for 32-bit Windows)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Sep 30, 2016 5:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powellap]]></name></author>
<updated>2016-09-30T05:35:30-07:00</updated>
<published>2016-09-30T05:35:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29616#p29616</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29616#p29616"/>
<title type="html"><![CDATA[Re: Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29616#p29616"><![CDATA[
I want to automate the process.  I need to know what CS is checking/looking for when it throws the message that it needs to configure itself for the new OS.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10604">powellap</a> — Fri Sep 30, 2016 5:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powellap]]></name></author>
<updated>2016-09-29T14:42:50-07:00</updated>
<published>2016-09-29T14:42:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29608#p29608</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29608#p29608"/>
<title type="html"><![CDATA[Post Windows 10 AU Upgrade]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6909&amp;p=29608#p29608"><![CDATA[
I am running CS 4.3.0.  This was installed as an admin but the users on the PCs are not.<br /><br />After Windows 10 AU (1607) installs, I receive a message about CS needing to configure itself for the new OS.  If the user is a admin this happens with a prompt from the UAC, which they approve and life goes on.  However, on the PCs that have standard users, this prompt happens every time they restart the PC because they obviously don't have the proper permissions to make the changes.<br /><br />Is there a way to detect when CS is in this state so that I can do something about it? ie. Registry setting, etc?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10604">powellap</a> — Thu Sep 29, 2016 2:42 pm</p><hr />
]]></content>
</entry>
</feed>