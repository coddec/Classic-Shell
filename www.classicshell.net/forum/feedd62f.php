<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7902" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-14T03:55:42-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7902</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-14T03:55:42-07:00</updated>
<published>2017-09-14T03:55:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7902&amp;p=34081#p34081</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7902&amp;p=34081#p34081"/>
<title type="html"><![CDATA[Re: Instant WerFault.exe crash on ClassicShell 4_3_1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7902&amp;p=34081#p34081"><![CDATA[
ucrtbase.dll is the C programming language runtime library DLL that is part of Windows. It might be missing, corrupted or replaced by some wrong version on your PC.<br /><br />From an elevated command prompt, run the 2 following commands in succession. Let them finish. It may take a while.<br /><br />Dism /Online /Cleanup-Image /ScanHealth<br />Dism /Online /Cleanup-Image /RestoreHealth<br /><br />Thereafter, run this command:<br />sfc /scannow<br />Let it finish.<br /><br />Restart Windows 10. Now see if the crash goes away.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Sep 14, 2017 3:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Complaint_Bot]]></name></author>
<updated>2017-09-13T23:54:05-07:00</updated>
<published>2017-09-13T23:54:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7902&amp;p=34080#p34080</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7902&amp;p=34080#p34080"/>
<title type="html"><![CDATA[Instant WerFault.exe crash on ClassicShell 4_3_1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7902&amp;p=34080#p34080"><![CDATA[
I am running Windows 10x64 Pro Version 1703.<br /><br />Classicshell instantly crashes, popping WerFault.exe, upon installation. <br />After installation when I click the start menu I get the default Windows start menu. It's horrible, and I hate it.<br />I have tried uninstalling and reinstalling multiple times. I have tried using the cleanup utility to remove and reinstall. <br />Here is the corresponding event in the Event Viewer:<br /><br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />Faulting application name: ClassicStartMenu.exe, version: 4.3.1.0, time stamp: 0x59907505<br />Faulting module name: ucrtbase.dll, version: 10.0.15063.413, time stamp: 0x5ba8b66e<br />Exception code: 0xc0000005<br />Fault offset: 0x0000000000045ac0<br />Faulting process id: 0x2194<br />Faulting application start time: 0x01d32d2162d0274c<br />Faulting application path: C:\Program Files\Classic Shell\ClassicStartMenu.exe<br />Faulting module path: C:\WINDOWS\System32\ucrtbase.dll<br />Report Id: 164541f2-fc33-46dc-9014-9f62fff7c612<br />Faulting package full name: <br />Faulting package-relative application ID:<br /></div><br /><br />AND<br /><br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />Fault bucket , type 0<br />Event Name: APPCRASH<br />Response: Not available<br />Cab Id: 0<br /><br />Problem signature:<br />P1: ClassicStartMenu.exe<br />P2: 4.3.1.0<br />P3: 59907505<br />P4: ucrtbase.dll<br />P5: 10.0.15063.413<br />P6: 5ba8b66e<br />P7: c0000005<br />P8: 0000000000045ac0<br />P9: <br />P10: <br /><br />Attached files:<br /><br />These files may be available here:<br />C:\ProgramData\Microsoft\Windows\WER\ReportQueue\AppCrash_ClassicStartMenu_c87bfb494991ddbfce4ec7e0dbb6591af3de0df_22dd3d46_20de5103<br /><br />Analysis symbol: <br />Rechecking for solution: 0<br />Report Id: 164541f2-fc33-46dc-9014-9f62fff7c612<br />Report Status: 100<br />Hashed bucket:<br /></div><br /><br />The path cited above leads to a .wer file. Let me know if you need that or any additional information. <br /><br />Let me know if there is any testing you would like me to do.<br /><br />I tried to capture a procdump and this is what happened:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">./procdump -e ClassicStartMenu.exe -w<br /><br />ProcDump v9.0 - Sysinternals process dump utility<br />Copyright (C) 2009-2017 Mark Russinovich and Andrew Richards<br />Sysinternals - www.sysinternals.com<br /><br />Waiting for process named ClassicStartMenu.exe...<br /><br />Process: ClassicStartMenu.exe (3748)<br />Process image: C:\Program Files\Classic Shell\ClassicStartMenu.exe<br />CPU threshold: n/a<br />Performance counter: n/a<br />Commit threshold: n/a<br />Threshold seconds: n/a<br />Hung window check: Disabled<br />Log debug strings: Disabled<br />Exception monitor: Unhandled<br />Exception filter: &#91;Includes&#93;<br />*<br />&#91;Excludes&#93;<br />Terminate monitor: Disabled<br />Cloning type: Disabled<br />Concurrent limit: n/a<br />Avoid outage: n/a<br />Number of dumps: 1<br />Dump folder: Z:\bin\SysInternals\<br />Dump filename/mask: PROCESSNAME_YYMMDD_HHMMSS<br />Queue to WER: Disabled<br />Kill after dump: Disabled<br /><br /><br />Press Ctrl-C to end monitoring without terminating the process.<br /><br />&#91;23:53:00&#93; The process has exited.<br />&#91;23:53:00&#93; Dump count not reached.</div><br /><br />I attached a dump from the &quot;slow&quot; method.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23981">Complaint_Bot</a> — Wed Sep 13, 2017 11:54 pm</p><hr />
]]></content>
</entry>
</feed>