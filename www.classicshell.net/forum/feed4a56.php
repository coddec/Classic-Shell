<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=8092" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-11-14T13:19:42-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=8092</id>
<entry>
<author><name><![CDATA[shelly_r]]></name></author>
<updated>2017-11-14T13:19:42-07:00</updated>
<published>2017-11-14T13:19:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8092&amp;p=34700#p34700</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8092&amp;p=34700#p34700"/>
<title type="html"><![CDATA[Win10: Allow to set default shutdown/restart option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8092&amp;p=34700#p34700"><![CDATA[
On Windows 10 the shutdown dialog does no longer remembers the previously used option (log-off/shutdown/restart(hibernate/energy save).<br /><br />However via registry it is still possible to set a default option for this dialog (verified on v1710):<br /><br />HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced<br />DWORD Start_PowerButtonAction<br /><br />0x000001: log-off<br />0x000002: shutdown<br />0x000004: restart<br />0x000040: hibernate<br />0x000100: switch user<br />0x000200: lock<br />0x200010: energy save<br />Please add a settings option for specifying this value.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=26864">shelly_r</a> — Tue Nov 14, 2017 1:19 pm</p><hr />
]]></content>
</entry>
</feed>