<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=1542" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-10-25T07:06:17-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=1542</id>
<entry>
<author><name><![CDATA[Ian Rogers]]></name></author>
<updated>2013-10-25T07:06:17-07:00</updated>
<published>2013-10-25T07:06:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7953#p7953</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7953#p7953"/>
<title type="html"><![CDATA[Re: Windows 8  latest update..]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7953#p7953"><![CDATA[
<div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />P.S. Oh! I guess then the anti-spambot questions involving colors should be replaced by some other clever questions.<br /></div><br /><br />Don't worry about that!!! I have a non colour blind friend that sits next to me.... The worrying thing is... I'm an electronic designer..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2003">Ian Rogers</a> — Fri Oct 25, 2013 7:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-25T05:09:05-07:00</updated>
<published>2013-10-25T05:09:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7946#p7946</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7946#p7946"/>
<title type="html"><![CDATA[Re: Windows 8  latest update..]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7946#p7946"><![CDATA[
We're aware of this - how the user is left with a blank screen with nothing else and isn't aware that he needs to press Ctrl+Shift+Esc to start Task Manager and then close Explorer.exe if it hasn't properly exited, and then start Explorer.exe again. <br /><br />This root of this problem lies in the way Windows Installer handles version upgrades. It is a case of Windows Restart Manager failing to properly close and restart Explorer.exe. Classic Shell uses Microsoft's Windows Installer to update itself. Windows Installer integrates with yet another component of Windows called &quot;Restart Manager&quot;. If some files are in use, they cannot be updated until the programs using them are closed. To avoid completely restarting Windows itself, the Restart Manager determines what programs need to be closed, closes them automatically for you if you choose not to reboot Windows and then starts them again. Unfortunately, the Windows Restart Manager is not very reliable, most of the times it works but sometimes it fails to restart the application, *especially* Explorer.exe is a process which often fails to close and restart. Microsoft should definitely make this feature more user-friendly/robust/foolproof.<br /><br />At the most, what we can do is put a note somewhere in the installer how to close Explorer.exe if it isn't closing, press Ctrl+Shift+Esc to start Task Manager and then start Explorer.exe again. That will definitely help unaware users but it's something Ivo will decide (the developer of Classic Shell) whether it can and should be added.<br /><br />P.S. Oh! I guess then the anti-spambot questions involving colors should be replaced by some other clever questions.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Oct 25, 2013 5:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ian Rogers]]></name></author>
<updated>2013-10-25T04:47:13-07:00</updated>
<published>2013-10-25T04:47:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7944#p7944</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7944#p7944"/>
<title type="html"><![CDATA[Windows 8  latest update..]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1542&amp;p=7944#p7944"><![CDATA[
I had a bit of trouble ( I fixed it ) I wish to post the problem here..<br /><br />Classic shell installed the latest update last night.... The program closed EVERY piece of running software.... Once completed it left me with an empty Metro screen with no control whatsoever..... The lid close and power buttons were &quot;sleep&quot; by default...<br /><br />I had to run &quot;Task manager&quot; and re-load explorer so I could run control panel... Then I could re-program the power switch so I could reboot.....<br /><br />I don't think some people would know how to do this....<br /><br /><br />P.S.   One other little thing.... I am colour blind so I needed help to register here....<br /><br />BTW... Excellent piece of software.... Works extremely well.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2003">Ian Rogers</a> — Fri Oct 25, 2013 4:47 am</p><hr />
]]></content>
</entry>
</feed>