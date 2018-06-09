<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=7738" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-12T10:53:14-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=7738</id>
<entry>
<author><name><![CDATA[Mr Wolf]]></name></author>
<updated>2017-07-12T10:53:14-07:00</updated>
<published>2017-07-12T10:53:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33286#p33286</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33286#p33286"/>
<title type="html"><![CDATA[Re: No icon for shared folders in Windows 10?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33286#p33286"><![CDATA[
Thanks! Searching, I found there's a limit of 11. And, in my pc, 6 are related to OneDrive. (!!!)<br />If there's not any another solution, I think I'm going to remove it, since I don't need it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2048">Mr Wolf</a> — Wed Jul 12, 2017 10:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-12T10:29:46-07:00</updated>
<published>2017-07-12T10:29:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33281#p33281</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33281#p33281"/>
<title type="html"><![CDATA[Re: No icon for shared folders in Windows 10?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33281#p33281"><![CDATA[
It can be an issue with overlay icons hitting their maximum limit. Windows can only display a limited amount of overlay icons and Windows 10 uses up quite a few for its own features like OneDrive, Offline Files and Storage Spaces. In Windows Registry Editor, go to this key and check if lots of them are installed:<br /><br />HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\ShellIconOverlayIdentifiers<br /><br />Also, for the folder sharing icon to show up, you need to log out and login again but I assume you already tried that.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jul 12, 2017 10:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mr Wolf]]></name></author>
<updated>2017-07-12T07:41:42-07:00</updated>
<published>2017-07-12T07:41:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33279#p33279</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33279#p33279"/>
<title type="html"><![CDATA[No icon for shared folders in Windows 10?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7738&amp;p=33279#p33279"><![CDATA[
Hi!<br />I've just bought a new notebook and installed Windows 10 Educational Version 1703 ...and I'm struggling with it. <img src="http://www.classicshell.net/forum/images/smilies/icon_evil.gif" alt=":evil:" title="Evil or Very Mad" /><br /><br />However, I set the option to add a small icon to shared folders, but it doesn't seem to work: the icon doesn't appear.<br />It works in Windows 7.<br /><br />Can anyone tell me it is an issue with Windows 10 or just my problem?<br /><br />Thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2048">Mr Wolf</a> — Wed Jul 12, 2017 7:41 am</p><hr />
]]></content>
</entry>
</feed>