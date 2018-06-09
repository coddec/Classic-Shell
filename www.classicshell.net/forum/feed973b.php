<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=1847" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-12-07T06:13:04-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=1847</id>
<entry>
<author><name><![CDATA[KrX]]></name></author>
<updated>2013-12-07T06:13:04-07:00</updated>
<published>2013-12-07T06:13:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9338#p9338</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9338#p9338"/>
<title type="html"><![CDATA[Re: Skip Settings screen after installation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9338#p9338"><![CDATA[
Ok got it.<br /><br />Thank you very much.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2431">KrX</a> — Sat Dec 07, 2013 6:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-12-07T06:08:32-07:00</updated>
<published>2013-12-07T06:08:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9337#p9337</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9337#p9337"/>
<title type="html"><![CDATA[Re: Skip Settings screen after installation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9337#p9337"><![CDATA[
Yes it's possible. Depending on whether you want to skip settings screen for a single user or all users, the method is different.<br /><br />For a single user account which is currently logged in, create a DWORD value called &quot;ShowedStyle2&quot; in HKCU\Software\IvoSoft\ClassicStartMenu and set it to 1.<br /><br />For the HKLM branch (which affects all users), to suppress the initial opening of the settings, create a new string value MenuStyle_Default in HKLM\Software\IvoSoft\ClassicStartMenu and set it to &quot;Classic1&quot;, &quot;Classic2&quot; or &quot;Win7&quot; depending on which style you want to be the default.<br /><br />If you merge the regs before installing, you won't have to restart Classic Start Menu. The first time it starts after installation, it will directly load your settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Dec 07, 2013 6:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[KrX]]></name></author>
<updated>2013-12-07T04:43:24-07:00</updated>
<published>2013-12-07T04:43:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9336#p9336</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9336#p9336"/>
<title type="html"><![CDATA[Skip Settings screen after installation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1847&amp;p=9336#p9336"><![CDATA[
Hi,<br /><br />im installing Classic Start Menu with this options:<br /><br />ClassicShellSetup64_4_0_2.msi /qn ADDLOCAL=ClassicStartMenu START_MENU_FOLDER=0<br /><br />after installation im using a registry file to customize this tool. but after clicking the first time on the windows button the  settings screen appears but i want to skip that.<br /><br />Is there a way to achieve that?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2431">KrX</a> — Sat Dec 07, 2013 4:43 am</p><hr />
]]></content>
</entry>
</feed>