<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=620" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-05-04T07:53:03-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=620</id>
<entry>
<author><name><![CDATA[TheEnzo]]></name></author>
<updated>2013-05-04T07:53:03-07:00</updated>
<published>2013-05-04T07:53:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3125#p3125</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3125#p3125"/>
<title type="html"><![CDATA[Re: CS Slow to start on Win 8 pro 64 after creating a new us]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3125#p3125"><![CDATA[
Thanks for that, I will test it out and report back!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=697">TheEnzo</a> — Sat May 04, 2013 7:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-05-03T18:06:55-07:00</updated>
<published>2013-05-03T18:06:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3122#p3122</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3122#p3122"/>
<title type="html"><![CDATA[Re: CS Slow to start on Win 8 pro 64 after creating a new us]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3122#p3122"><![CDATA[
Try merging this (paste this into notepad, save as a .REG file and merge) or create such a value manually in the registry:<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon]<br />&quot;TaskMan&quot;=&quot;C:\\Program Files\\Classic Shell\\ClassicStartMenu.exe&quot;<br /><br />Then Classic Shell will start much faster on Windows 8.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri May 03, 2013 6:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TheEnzo]]></name></author>
<updated>2013-05-03T12:18:13-07:00</updated>
<published>2013-05-03T12:18:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3121#p3121</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3121#p3121"/>
<title type="html"><![CDATA[CS Slow to start on Win 8 pro 64 after creating a new user]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=620&amp;p=3121#p3121"><![CDATA[
This is strange. Classic Shell usually launches desktop on start up. I installed it on a lenovo PC and it was fine.<br />I then created a new user account on the PC and logged into that. Whenever that user account is used, you are presented with metro start until say 20 seconds have passed and <br />then classic shell fires up. Worse than this - when you go into the original account, CS also takes a long time to start where it was fine before.<br />I have to uninstall it completely, delete the new user account, reboot, re-install CS and then it works fine as before - but this means I can only use one account on the machine!<br /><br />Any ideas what's going on?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=697">TheEnzo</a> — Fri May 03, 2013 12:18 pm</p><hr />
]]></content>
</entry>
</feed>