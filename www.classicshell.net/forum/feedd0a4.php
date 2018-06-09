<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=5587" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-01-25T03:12:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=5587</id>
<entry>
<author><name><![CDATA[MicrodigitUK]]></name></author>
<updated>2016-01-25T03:12:32-07:00</updated>
<published>2016-01-25T03:12:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24731#p24731</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24731#p24731"/>
<title type="html"><![CDATA[Re: Classic Start Menu hangs explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24731#p24731"><![CDATA[
Hi I have been doing some testing this issue with CSH.<br /><br />This issue seems to be linked with OneDrive sync tool.<br />It only happens when running both OneDrive sync tool and Classic shell at the same time.<br /><br />As a work around we have disabled OneDrive sync by doing the following:<br />Locate:<br />“HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Run”<br />and delete the “OneDrive” key<br /><br />And via GPO when you download the Windows 10 templates -<br />Computer Config &gt; Admin Templates &gt; Windows Components &gt; OneDrive - Prevent the usage of OneDrive for file storage – Enabled<br /><br />This then seems to stop the conflict that causes explorer to crash.<br /><br />Question is why would they conflict and what if we want to enable OneDrive sync tool at the same time?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12556">MicrodigitUK</a> — Mon Jan 25, 2016 3:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CSH]]></name></author>
<updated>2016-01-19T02:20:49-07:00</updated>
<published>2016-01-19T02:20:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24600#p24600</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24600#p24600"/>
<title type="html"><![CDATA[Re: Classic Start Menu hangs explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24600#p24600"><![CDATA[
Cheers for taking a look. We'll do some more testing our side and update this thread if we find out anything more.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12450">CSH</a> — Tue Jan 19, 2016 2:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-14T09:02:46-07:00</updated>
<published>2016-01-14T09:02:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24540#p24540</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24540#p24540"/>
<title type="html"><![CDATA[Re: Classic Start Menu hangs explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24540#p24540"><![CDATA[
That's weird. I do see an extraordinary large number of threads in the Explorer process - more than 800. That can certainly lead to slowdowns and crashes.<br />However I can't see the connection with Classic Shell. Its code is not even running in the dump.<br /><br />Unfortunately it is one of those things that I need to reproduce on my end to be able to do something about it. I'll keep an eye out, but at this time I can't offer you a solution.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jan 14, 2016 9:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CSH]]></name></author>
<updated>2016-01-14T01:38:10-07:00</updated>
<published>2016-01-14T01:38:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24536#p24536</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24536#p24536"/>
<title type="html"><![CDATA[Re: Classic Start Menu hangs explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24536#p24536"><![CDATA[
I'm browsing the network via Explorer. If I exit the start menu I cannot reproduce the problem.<br /><br />I've also been told that we encounter the same issue when browsing local folders.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12450">CSH</a> — Thu Jan 14, 2016 1:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-13T09:44:40-07:00</updated>
<published>2016-01-13T09:44:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24524#p24524</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24524#p24524"/>
<title type="html"><![CDATA[Re: Classic Start Menu hangs explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24524#p24524"><![CDATA[
Are you browsing the network using the start menu?<br />If you exit the start menu (right-click on the start button -&gt; Exit), do you have the same problem?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jan 13, 2016 9:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CSH]]></name></author>
<updated>2016-01-13T02:24:17-07:00</updated>
<published>2016-01-13T02:24:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24511#p24511</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24511#p24511"/>
<title type="html"><![CDATA[Classic Start Menu hangs explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5587&amp;p=24511#p24511"><![CDATA[
Hi folks, I'm having a strange problem where running the Classic Start Menu will cause Explorer to hang while browsing network folders. The start menu itself does not crash and continues to work very well, but this issue only happens while the start menu is running. Explorer doesn't fully crash, it just seems to pause as if it's waiting for input, we don't even get a spinning cursor to suggest the UI has crashed. After around 5 minutes the UI will come back but crash again after trying to open another folder.<br /><br />I've attached a dump from procdump, hope you can help!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12450">CSH</a> — Wed Jan 13, 2016 2:24 am</p><hr />
]]></content>
</entry>
</feed>