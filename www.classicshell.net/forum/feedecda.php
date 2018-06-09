<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7029" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-10-31T13:08:00-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7029</id>
<entry>
<author><name><![CDATA[doruforum]]></name></author>
<updated>2016-10-31T13:08:00-07:00</updated>
<published>2016-10-31T13:08:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30174#p30174</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30174#p30174"/>
<title type="html"><![CDATA[Re: Classic Shell keeps restarting on Win10+AU]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30174#p30174"><![CDATA[
It wasn't the antivirus. I've managed to solve it by looking into the Event viewer and noticing errors related to IDTNC64.cpl. After a quick search on Google I found that this file can cause Explorer to crash on Win10. I renamed it to IDTNC64.cpl.bak as suggested on another forum and then I installed Classic Shell: the issue is gone, now everything works properly!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15921">doruforum</a> — Mon Oct 31, 2016 1:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-10-31T03:04:39-07:00</updated>
<published>2016-10-31T03:04:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30166#p30166</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30166#p30166"/>
<title type="html"><![CDATA[Re: Classic Shell keeps restarting on Win10+AU]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30166#p30166"><![CDATA[
It looks like you have McAfee installed. It may be blocking the Start menu since it injects its DLL into Explorer.exe. See if you can find a way to whitelist Classic Shell's files at C:\Program Files\Classic Shell in McAfee's settings. Or temporarily disable it and see if you can get the Start menu working.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Oct 31, 2016 3:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[doruforum]]></name></author>
<updated>2016-10-31T00:30:51-07:00</updated>
<published>2016-10-31T00:30:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30165#p30165</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30165#p30165"/>
<title type="html"><![CDATA[Re: Classic Shell keeps restarting on Win10+AU]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30165#p30165"><![CDATA[
I've tried to remove Classic Shell using ClassicShell Utility and re-installed again, but I have the same issue.<br />Here is the system log with Classic Shell installed.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15921">doruforum</a> — Mon Oct 31, 2016 12:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-10-30T23:21:12-07:00</updated>
<published>2016-10-30T23:21:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30162#p30162</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30162#p30162"/>
<title type="html"><![CDATA[Re: Classic Shell keeps restarting on Win10+AU]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30162#p30162"><![CDATA[
Yes the Utility log needs to be generated when it is installed.<br /><br />Also try this, Fix Classic Shell on Windows 10 Anniversary Update: <!-- m --><a class="postlink" href="http://winaero.com/blog/fix-classic-shell-on-windows-10-anniversary-update/">http://winaero.com/blog/fix-classic-she ... ry-update/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Oct 30, 2016 11:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[doruforum]]></name></author>
<updated>2016-10-30T22:49:08-07:00</updated>
<published>2016-10-30T22:49:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30161#p30161</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30161#p30161"/>
<title type="html"><![CDATA[Re: Classic Shell keeps restarting on Win10+AU]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30161#p30161"><![CDATA[
Indeed, now it isn't installed because I could not use the taskbar when it was installed: the start menu kept switching because classic style and win10 style endlessly. I can re-install it though and send you again the system log (or other logging) if that helps.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15921">doruforum</a> — Sun Oct 30, 2016 10:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-30T16:23:13-07:00</updated>
<published>2016-10-30T16:23:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30153#p30153</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30153#p30153"/>
<title type="html"><![CDATA[Re: Classic Shell keeps restarting on Win10+AU]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30153#p30153"><![CDATA[
Classic Shell does not seem to be installed at all.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Oct 30, 2016 4:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[doruforum]]></name></author>
<updated>2016-10-30T15:13:57-07:00</updated>
<published>2016-10-30T15:13:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30151#p30151</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30151#p30151"/>
<title type="html"><![CDATA[Re: Classic Shell keeps restarting on Win10+AU]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30151#p30151"><![CDATA[
Thanks for the quick reply!<br />Here you have the system log.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15921">doruforum</a> — Sun Oct 30, 2016 3:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-30T14:46:57-07:00</updated>
<published>2016-10-30T14:46:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30149#p30149</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30149#p30149"/>
<title type="html"><![CDATA[Re: Classic Shell keeps restarting on Win10+AU]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30149#p30149"><![CDATA[
Use the Classic Shell Utility to save a system log file. Send it to me.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Oct 30, 2016 2:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[doruforum]]></name></author>
<updated>2016-10-30T15:15:11-07:00</updated>
<published>2016-10-30T14:43:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30148#p30148</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30148#p30148"/>
<title type="html"><![CDATA[Explorer keeps restarting on Win10+AU (Solved)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7029&amp;p=30148#p30148"><![CDATA[
After I updated Win10 (Anniversary Update) and installed (successfully) Classic Shell 4.3.0, I can get it running anymore: it seems the Classic Start Menu is blocked somehow and then it restarts again, and it goes like this forever... I've saved some logging using ClassicShellUtility in case somebody can find the issue by inspecting it:<br /><br />1054390 2588 StartMenu DLL: DLL_PROCESS_ATTACH<br />1054390 2588 StartMenu DLL: InitStartMenuDLL<br />1056671 5544 StartMenuHelper: DLL_PROCESS_ATTACH<br />1056671 5544 StartMenuHelper: WaitDllInitThread<br />1056671 5544 StartMenuHelper: DllGetClassObject1<br />1056687 5544 StartMenuHelper: DllGetClassObject2<br />1056687 5544 StartMenuHelper: starting &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -startup<br />1056750 7020 StartMenu DLL: DLL_PROCESS_ATTACH<br />1056765 7020 StartMenu: start '-startup'<br />1056890 7020 StartMenu: mutex ClassicStartMenu.Mutex.Doru.Default<br />1056890 7020 StartMenu: exit (mutex exists)<br />1056890 7020 StartMenu DLL: DLL_PROCESS_DETACH<br />1058828 5544 StartMenu DLL: DLL_PROCESS_ATTACH<br />1058828 5544 StartMenu DLL: InitStartMenuDLL<br />1061421 3416 StartMenuHelper: DLL_PROCESS_ATTACH<br />1061437 3416 StartMenuHelper: WaitDllInitThread<br />1061437 3416 StartMenuHelper: DllGetClassObject1<br />1061437 3416 StartMenuHelper: DllGetClassObject2<br />1061437 3416 StartMenuHelper: starting &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -startup<br />1061484 8048 StartMenu DLL: DLL_PROCESS_ATTACH<br />1061484 8048 StartMenu: start '-startup'<br />1061640 8048 StartMenu: mutex ClassicStartMenu.Mutex.Doru.Default<br />1061640 8048 StartMenu: exit (mutex exists)<br />1061640 8048 StartMenu DLL: DLL_PROCESS_DETACH<br />1064046 3416 StartMenu DLL: DLL_PROCESS_ATTACH<br />1064046 3416 StartMenu DLL: InitStartMenuDLL<br />1066203 4852 StartMenuHelper: DLL_PROCESS_ATTACH<br />1066203 4852 StartMenuHelper: WaitDllInitThread<br />1066203 4852 StartMenuHelper: DllGetClassObject1<br />1066203 4852 StartMenuHelper: DllGetClassObject2<br />1066203 4852 StartMenuHelper: starting &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -startup<br />1066250 7696 StartMenu DLL: DLL_PROCESS_ATTACH<br />1066265 7696 StartMenu: start '-startup'<br />1066406 7696 StartMenu: mutex ClassicStartMenu.Mutex.Doru.Default<br />1066406 7696 StartMenu: exit (mutex exists)<br />1066406 7696 StartMenu DLL: DLL_PROCESS_DETACH<br />1068328 4852 StartMenu DLL: DLL_PROCESS_ATTACH<br />1068328 4852 StartMenu DLL: InitStartMenuDLL<br />1070890 4408 StartMenuHelper: DLL_PROCESS_ATTACH<br />1070890 4408 StartMenuHelper: WaitDllInitThread<br />1070890 4408 StartMenuHelper: DllGetClassObject1<br />1070890 4408 StartMenuHelper: DllGetClassObject2<br />1070890 4408 StartMenuHelper: starting &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -startup<br />1070953 7724 StartMenu DLL: DLL_PROCESS_ATTACH<br />1070968 7724 StartMenu: start '-startup'<br />1071109 7724 StartMenu: mutex ClassicStartMenu.Mutex.Doru.Default<br />1071109 7724 StartMenu: exit (mutex exists)<br />1071109 7724 StartMenu DLL: DLL_PROCESS_DETACH<br />1073515 4408 StartMenu DLL: DLL_PROCESS_ATTACH<br />1073515 4408 StartMenu DLL: InitStartMenuDLL<br />1075859 6604 StartMenuHelper: DLL_PROCESS_ATTACH<br />1075859 6604 StartMenuHelper: WaitDllInitThread<br />1075859 6604 StartMenuHelper: DllGetClassObject1<br />1075859 6604 StartMenuHelper: DllGetClassObject2<br />1075859 6604 StartMenuHelper: starting &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -startup<br />1075921 5788 StartMenu DLL: DLL_PROCESS_ATTACH<br />1075921 5788 StartMenu: start '-startup'<br />1076109 5788 StartMenu: mutex ClassicStartMenu.Mutex.Doru.Default<br />1076109 5788 StartMenu: exit (mutex exists)<br />1076109 5788 StartMenu DLL: DLL_PROCESS_DETACH<br />1078625 6604 StartMenu DLL: DLL_PROCESS_ATTACH<br />1078625 6604 StartMenu DLL: InitStartMenuDLL<br />1081015 7396 StartMenuHelper: DLL_PROCESS_ATTACH<br />1081015 7396 StartMenuHelper: WaitDllInitThread<br />1081015 7396 StartMenuHelper: DllGetClassObject1<br />1081031 7396 StartMenuHelper: DllGetClassObject2<br />1081031 7396 StartMenuHelper: starting &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -startup<br />1081078 6432 StartMenu DLL: DLL_PROCESS_ATTACH<br />1081078 6432 StartMenu: start '-startup'<br />1081234 6432 StartMenu: mutex ClassicStartMenu.Mutex.Doru.Default<br />1081234 6432 StartMenu: exit (mutex exists)<br />1081234 6432 StartMenu DLL: DLL_PROCESS_DETACH<br />1083671 7396 StartMenu DLL: DLL_PROCESS_ATTACH<br />1083671 7396 StartMenu DLL: InitStartMenuDLL<br />1085875 6064 StartMenuHelper: DLL_PROCESS_ATTACH<br />1085875 6064 StartMenuHelper: WaitDllInitThread<br />1085875 6064 StartMenuHelper: DllGetClassObject1<br />1085875 6064 StartMenuHelper: DllGetClassObject2<br />1085875 6064 StartMenuHelper: starting &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -startup<br />1085968 6472 StartMenu DLL: DLL_PROCESS_ATTACH<br />1085984 6472 StartMenu: start '-startup'<br />1086109 6472 StartMenu: mutex ClassicStartMenu.Mutex.Doru.Default<br />1086109 6472 StartMenu: exit (mutex exists)<br />1086109 6472 StartMenu DLL: DLL_PROCESS_DETACH<br />1087421 6244 StartMenu DLL: DLL_PROCESS_ATTACH<br />1087421 6244 StartMenu: start '-exit'<br />1088375 6064 StartMenu DLL: DLL_PROCESS_ATTACH<br />1088375 6064 StartMenu DLL: InitStartMenuDLL<br />1089718 6244 StartMenu DLL: DLL_PROCESS_DETACH<br />1091093 5468 StartMenuHelper: DLL_PROCESS_ATTACH<br />1091093 5468 StartMenuHelper: WaitDllInitThread<br />1091093 5468 StartMenuHelper: DllGetClassObject1<br />1091093 5468 StartMenuHelper: DllGetClassObject2<br />1091093 5468 StartMenuHelper: starting &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -startup<br />1091187 7944 StartMenu DLL: DLL_PROCESS_ATTACH<br />1091187 7944 StartMenu: start '-startup'<br />1091312 7944 StartMenu: mutex ClassicStartMenu.Mutex.Doru.Default<br />1091312 7944 StartMenu: exit (mutex exists)<br />1091312 7944 StartMenu DLL: DLL_PROCESS_DETACH<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15921">doruforum</a> — Sun Oct 30, 2016 2:43 pm</p><hr />
]]></content>
</entry>
</feed>