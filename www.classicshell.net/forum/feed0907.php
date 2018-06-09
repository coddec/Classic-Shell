<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=92" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-01-16T06:07:42-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=92</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-16T06:07:42-07:00</updated>
<published>2013-01-16T06:07:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=92&amp;p=319#p319</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=92&amp;p=319#p319"/>
<title type="html"><![CDATA[Re: Prevent users from choosing default style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=92&amp;p=319#p319"><![CDATA[
You can export the contents of this registry key HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu to a reg file.<br /><br />To apply it for all users, you can merge silently at user logon using a Group Policy user script. Or if you want to lock down the settings and not allow users to make any changes, replace all instances of HKCU by HKEY_LOCAL_MACHINE by opening the reg file in Notepad, save it and merge it back. Logoff and logon back to restart Classic Start Menu. Then all settings can only be modified by administrators from the registry. The settings UI will be locked and choosing any style will have no effect.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 16, 2013 6:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hal07]]></name></author>
<updated>2013-01-16T02:55:22-07:00</updated>
<published>2013-01-16T02:55:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=92&amp;p=317#p317</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=92&amp;p=317#p317"/>
<title type="html"><![CDATA[Prevent users from choosing default style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=92&amp;p=317#p317"><![CDATA[
I've just installed this product on Windows Server 2012 and it looks great. However I wonder if it's possible to stop asking new users for their preferred menu style. I want them all to use Vista<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=147">hal07</a> — Wed Jan 16, 2013 2:55 am</p><hr />
]]></content>
</entry>
</feed>