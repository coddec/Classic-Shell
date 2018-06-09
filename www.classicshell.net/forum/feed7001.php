<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=8023" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-10-19T09:45:55-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=8023</id>
<entry>
<author><name><![CDATA[stevemg7]]></name></author>
<updated>2017-10-19T09:45:55-07:00</updated>
<published>2017-10-19T09:45:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34510#p34510</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34510#p34510"/>
<title type="html"><![CDATA[Re: classic shell start menu not working at all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34510#p34510"><![CDATA[
excellent-that did the trick-thank you so much for your help!!!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=25499">stevemg7</a> — Thu Oct 19, 2017 9:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-10-18T21:13:13-07:00</updated>
<published>2017-10-18T21:13:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34496#p34496</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34496#p34496"/>
<title type="html"><![CDATA[Re: classic shell start menu not working at all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34496#p34496"><![CDATA[
Right click the Start button. Do you see a Settings item? Click it and go to the Controls tab (if Show all settings is checked, otherwise it's the Basic Settings tab). On the Controls tab, make sure &quot;Left click opens&quot; and &quot;Windows key opens&quot; are both set to &quot;Classic Start Menu&quot;. Click OK to save settings.<br /><br />Classic Start Menu's EXE injects a DLL into the Explorer.exe process, that is how it works. This is done automatically when Explorer.exe loads. You can also run the Start menu manually by executing C:\Program Files\Classic Shell\ClassicStartMenu.exe (in case it doesn't auto-start).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Oct 18, 2017 9:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[stevemg7]]></name></author>
<updated>2017-10-18T06:43:05-07:00</updated>
<published>2017-10-18T06:43:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34480#p34480</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34480#p34480"/>
<title type="html"><![CDATA[classic shell start menu not working at all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8023&amp;p=34480#p34480"><![CDATA[
I just installed classic shell on a windows 7 machine and it appears as if it's not working at all.  I see it running in task manager and it's set to run at startup but any changes I make do not appear to work.  For example, I changed the start menu to a single column and the classic skin and it still shows the windows 7 2 column one.  The machine I installed did have some local group policies that did similar things but even if I disable them all and reboot it still doesn't work.  Are there any requirements or other pieces of software that I might need for classic shell to run that may not be installed?  Or can someone tell me how classic shell works in order to for me to troubleshoot what is going on-for example does it keep a configuration file somewhere that might have issues or does it change the microsoft settings in the registry or something else?  Any help would be appreciated.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=25499">stevemg7</a> — Wed Oct 18, 2017 6:43 am</p><hr />
]]></content>
</entry>
</feed>