<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=248" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-02-12T14:14:13-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=248</id>
<entry>
<author><name><![CDATA[bufke]]></name></author>
<updated>2013-02-12T14:14:13-07:00</updated>
<published>2013-02-12T14:14:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1101#p1101</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1101#p1101"/>
<title type="html"><![CDATA[Re: Skip Windows 8 UI for new users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1101#p1101"><![CDATA[
This does seem to lock the setting so users can't change it. But it still shows the metro UI on first log in. Is there anyway to make it work even on first log in?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=313">bufke</a> — Tue Feb 12, 2013 2:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-02-12T10:36:55-07:00</updated>
<published>2013-02-12T10:36:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1098#p1098</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1098#p1098"/>
<title type="html"><![CDATA[Re: Skip Windows 8 UI for new users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1098#p1098"><![CDATA[
For per-user:<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu]<br />&quot;SkipMetro&quot;=dword:00000001<br /><br />For all users:<br />Windows Registry Editor Version 5.00<br /><br />[HKEY_LOCAL_MACHINE\Software\IvoSoft\ClassicStartMenu]<br />&quot;SkipMetro&quot;=dword:00000001<br /><br />Note that if you merge in HKLM, this setting will be disabled on Windows 8 Settings tab in the GUI.<br /><br /><br /><br />Note that this is for Windows 8 only. On Windows 8.1, the Skip Metro setting in Classic Start Menu settings only changes the OS boot to desktop setting which can also be set from the Navigation tab of Taskbar Properties. So adding it for all users in HKLM won't work. Windows 8.1 doesn't seem to have a Group Policy either for all users/Computer Configuration to boot to desktop.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Feb 12, 2013 10:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bufke]]></name></author>
<updated>2013-02-12T10:27:36-07:00</updated>
<published>2013-02-12T10:27:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1097#p1097</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1097#p1097"/>
<title type="html"><![CDATA[Skip Windows 8 UI for new users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=248&amp;p=1097#p1097"><![CDATA[
Hello, I'm trying to set up Classic Start Menu for all users so that it skips the Windows 8 UI completely. I saw there are Group Policy options but I don't see anything that skips the configuration screen on first run.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=313">bufke</a> — Tue Feb 12, 2013 10:27 am</p><hr />
]]></content>
</entry>
</feed>