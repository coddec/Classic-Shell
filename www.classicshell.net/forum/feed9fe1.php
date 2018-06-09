<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=459" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-03-31T07:32:48-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=459</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-31T07:32:48-07:00</updated>
<published>2013-03-31T07:32:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=459&amp;p=2381#p2381</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=459&amp;p=2381#p2381"/>
<title type="html"><![CDATA[Re: Explorer crashes when launching an UAC program from Sear]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=459&amp;p=2381#p2381"><![CDATA[
Try 2 things:<br />1) Disable the auto-complete from the Search Box settings and see if the crash continues<br />2) Capture a crash dump using the instructions at the top of this page<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 31, 2013 7:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rol]]></name></author>
<updated>2013-03-31T06:08:15-07:00</updated>
<published>2013-03-31T06:08:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=459&amp;p=2371#p2371</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=459&amp;p=2371#p2371"/>
<title type="html"><![CDATA[Explorer crashes when launching an UAC program from Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=459&amp;p=2371#p2371"><![CDATA[
Windows Explorer (the desktop) crashes when a program requiring an UAC prompt is launched by typing its name in the Search box.<br /><br />How to reproduce:<br />1. Type, for example, &quot;regedit&quot; in the search box.<br />2. Hit immediately the Enter key, before Classic Shell has a chance to display the popup menu with the choices.<br />3. The UAC prompt pops up. Accept it.<br />4. Regedit is opened correctly, but after a few seconds, Explorer crashes (and is restarted automatically by Windows).<br /><br />It seems that that bug doesn't happen if Classic Shell can display its popup menu before the UAC prompt. Therefore, I guess that the popup menu is responsible of the crash when it tries to open itself during the UAC prompt. I'm not sure though. The crash might also be caused by hitting too rapidly the Enter key, even with non-UAC programs.<br /><br />Note that I have several programs with &quot;regedit&quot; in their names. The popup menu displays 3 options when it has sufficient time to pop up.<br /><br />I'm using Windows 8 pro x64 with all updates and CS v.3.6.5.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=519">rol</a> — Sun Mar 31, 2013 6:08 am</p><hr />
]]></content>
</entry>
</feed>