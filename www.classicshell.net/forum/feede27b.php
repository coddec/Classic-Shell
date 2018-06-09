<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=5385" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-12-16T02:06:56-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=5385</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-12-16T02:06:56-07:00</updated>
<published>2015-12-16T02:06:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=24028#p24028</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=24028#p24028"/>
<title type="html"><![CDATA[Re: Crash involving ClassicStartMenuDLL.dll in RemoteApp]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=24028#p24028"><![CDATA[
@bottswana, can you try the fix too and verify it works? I could only get Classic Start Menu to crash once in a RemoteApp session with Word running and never again after that.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Dec 16, 2015 2:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rood]]></name></author>
<updated>2015-12-16T00:42:57-07:00</updated>
<published>2015-12-16T00:42:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=24027#p24027</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=24027#p24027"/>
<title type="html"><![CDATA[Re: Crash involving ClassicStartMenuDLL.dll in RemoteApp]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=24027#p24027"><![CDATA[
It works <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><br />Thnx for the quick response!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12188">rood</a> — Wed Dec 16, 2015 12:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-12-08T10:14:07-07:00</updated>
<published>2015-12-08T10:14:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23913#p23913</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23913#p23913"/>
<title type="html"><![CDATA[Re: Crash involving ClassicStartMenuDLL.dll in RemoteApp]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23913#p23913"><![CDATA[
Try the attached zip file. It replaces two of the files in the Program Files\Classic Shell directory.<br />You will have to exit the start menu when you do the swap. Right-click on the start button and select Exit.<br /><br /><span style="color:#ff0000;"><strong>Note that the attached file is only for Classic Shell 4.2.5. Replacing the files if you have a later version installed may not fix your issue and this fix below is most probably already included in versions of Classic Shell after 4.2.5.</strong></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Dec 08, 2015 10:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rood]]></name></author>
<updated>2015-12-08T02:42:22-07:00</updated>
<published>2015-12-08T02:42:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23907#p23907</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23907#p23907"/>
<title type="html"><![CDATA[Re: Crash involving ClassicStartMenuDLL.dll in RemoteApp]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23907#p23907"><![CDATA[
We are having the same problem with Classic Startmenu and Windows 2012 R2 RDS. Is there already a workaround available? RemoteApp is now crashing after a few seconds. Thnx!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12188">rood</a> — Tue Dec 08, 2015 2:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bottswana]]></name></author>
<updated>2015-11-19T10:33:27-07:00</updated>
<published>2015-11-19T10:33:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23639#p23639</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23639#p23639"/>
<title type="html"><![CDATA[Re: Crash involving ClassicStartMenuDLL.ddl in RemoteApp]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23639#p23639"><![CDATA[
That makes sense, my understanding is rdpinit is meant to be a lightweight shell based on explorer without most of the UX elements.<br />Is there any way to blacklist it from hooking into rdpinit? I don't mind helping test a solution, but we are going to have to push these servers into production at some point most likely without Classic Shell, which would suck because we all (and our users) love it!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12068">bottswana</a> — Thu Nov 19, 2015 10:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-11-19T09:59:59-07:00</updated>
<published>2015-11-19T09:59:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23637#p23637</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23637#p23637"/>
<title type="html"><![CDATA[Re: Crash involving ClassicStartMenuDLL.ddl in RemoteApp]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23637#p23637"><![CDATA[
Looks like ClassicStartMenu.exe is trying to inject into the rdpinit.exe instead of explorer.exe. It is possible rdpinit is creating a window with the same class name &quot;Shell_TrayWnd&quot; as the taskbar. That's not a supported scenario.<br />I may add some extra safety checks in the future, but at the moment I don't know what they'll be.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Nov 19, 2015 9:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bottswana]]></name></author>
<updated>2015-11-19T09:37:13-07:00</updated>
<published>2015-11-19T09:37:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23635#p23635</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23635#p23635"/>
<title type="html"><![CDATA[Crash involving ClassicStartMenuDLL.dll in RemoteApp]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5385&amp;p=23635#p23635"><![CDATA[
Hello,<br /><br />We have Classic Shell installed on a Server 2012 R2 terminal server for testing, and also connect via RemoteApp (A reduced connection without a traditional explorer shell).<br />We don't intend to use Classic Shell when in RemoteApp (since there is no shell!) but we have noticed that when it is installed for normal desktop sessions, any RemoteApp sessions that are opened crash out on the RemoteApp process (rdpinit.exe) with a Faulting Module as ClassicStartMenuDLL.dll<br /><br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br /><strong><span style="font-family:Segoe UI,sans-serif;"><span style="color:#0066CC;">Problem signature:</span></span></strong><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Problem Event Name: APPCRASH</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Application Name: rdpinit.exe</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Application Version: 6.3.9600.17415</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Application Timestamp: 54504afb</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Fault Module Name: ClassicStartMenuDLL.dll</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Fault Module Version: 4.2.4.0</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Fault Module Timestamp: 55c7808a</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Exception Code: c000041d</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Exception Offset: 00000000000ce6cc</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> OS Version: 6.3.9600.2.0.0.144.8</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Locale ID: 2057</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Additional Information 1: 4330</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Additional Information 2: 4330d2fef657c24dbbd687be2b1cf41d</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Additional Information 3: 2c3c</span></span><br /><span style="font-family:Segoe UI,sans-serif;"><span style="color:black;"> Additional Information 4: 2c3cfea4c9d4c996ba42d1aa3c1707ef</span></span><br /></div><br />I have attached two crash dumps captured from rdpinit.exe when the crash occurs.<br />The issue can be replicated in our environment just by connecting in via RemoteApp and waiting for a few minutes. <br />The crash does not occur when users connect to the same server in a full RDP shell.<br />The issue is resolved by removing Classic Shell. We only have the Start Menu component and updater components installed.<br /><br />The version of Classic Shell is 4.2.5<br />Many Thanks,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12068">bottswana</a> — Thu Nov 19, 2015 9:37 am</p><hr />
]]></content>
</entry>
</feed>