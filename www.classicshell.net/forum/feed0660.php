<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=5584" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-01-12T13:03:26-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=5584</id>
<entry>
<author><name><![CDATA[inga78]]></name></author>
<updated>2016-01-12T13:03:26-07:00</updated>
<published>2016-01-12T13:03:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24505#p24505</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24505#p24505"/>
<title type="html"><![CDATA[Re: Startmenu not automaticaly applied on multi-user systems]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24505#p24505"><![CDATA[
Hi Ivo,<br /><br />thank you for your reply.<br /><br />I've found the issue - the regkey &quot;AutoRun&quot; was set to 0. I've switched it via GPP to 1 and Classic-Startmenu runs on every logged on user.<br /><br />Kind regards<br />Inga<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12441">inga78</a> — Tue Jan 12, 2016 1:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-12T09:37:19-07:00</updated>
<published>2016-01-12T09:37:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24503#p24503</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24503#p24503"/>
<title type="html"><![CDATA[Re: Startmenu not automaticaly applied on multi-user systems]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24503#p24503"><![CDATA[
Are you installing Classic Shell on the machine, or just copying the files?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jan 12, 2016 9:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[inga78]]></name></author>
<updated>2016-01-12T03:37:08-07:00</updated>
<published>2016-01-12T03:37:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24501#p24501</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24501#p24501"/>
<title type="html"><![CDATA[Startmenu not automaticaly applied on multi-user systems]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5584&amp;p=24501#p24501"><![CDATA[
Hi there,<br /><br />we are developing classic-startmenu on our server 2012R2 terminalservers using GPOs to configure the settings.<br />But on every logon of a user, the startmenu wasn't applied automaticaly.<br /><br />Start via link from &quot;C:\Program Files\Classic Shell\Start Menu Settings&quot; will add the classic menu.<br /><br />We've set the documented keys in the registry:<br />HLKM\Software\IvoSoft\ClassicStartMenu\ [MenuStyle_Default = 1]<br />and<br />HKLM\Software\Microsoft\Windows\Current Version\Run\ [Classic Start Menu = &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -autorun]<br /><br />We are running:<br />Server 2012 R2 in a Citrix XenApp 7.6 environment<br /><br />Hope someone can help us<br /><br />Kind regards<br />Inga<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12441">inga78</a> — Tue Jan 12, 2016 3:37 am</p><hr />
]]></content>
</entry>
</feed>