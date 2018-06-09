<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7661" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-06-27T23:47:52-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7661</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-06-27T23:47:52-07:00</updated>
<published>2017-06-27T23:47:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33157#p33157</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33157#p33157"/>
<title type="html"><![CDATA[Re: Slow Start Menu after computer idle]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33157#p33157"><![CDATA[
Can you ZIP those shortcut files and upload them here so Ivo can take a look what kind of shortcuts? Dead shortcuts causing Start Menu slowdown means there is a problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jun 27, 2017 11:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bodger]]></name></author>
<updated>2017-06-27T01:50:14-07:00</updated>
<published>2017-06-27T01:50:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33151#p33151</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33151#p33151"/>
<title type="html"><![CDATA[Re: Slow Start Menu after computer idle]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33151#p33151"><![CDATA[
Thanks again for the advice on this Ivo.<br /><br />Rather than disable the &quot;Highlight newly installed programs&quot;, i figured i'd take the opportunity to do a bit of an audit. There were 6 or 7 old windows 8 shortcuts being distributed which no longer pointed to valid exe's (running from a mixture of local and server shares). <br /><br />Removing these appears to have solved it.<br /><br />Tested both machines and accounts from this thread and it appears to be much more responsive! (even with NetSupport running).<br /><br />Cheers very much for getting me on the right track!<br />Matt<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20696">bodger</a> — Tue Jun 27, 2017 1:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-06-26T09:02:17-07:00</updated>
<published>2017-06-26T09:02:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33147#p33147</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33147#p33147"/>
<title type="html"><![CDATA[Re: Slow Start Menu after computer idle]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33147#p33147"><![CDATA[
In this case the menu is trying to get the timestamp for a shortcut in the start menu to see if it has changed. That shortcut is probably on a remote machine.<br />See if disabling the settings &quot;Highlight newly installed programs&quot; makes a difference for you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jun 26, 2017 9:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bodger]]></name></author>
<updated>2017-06-26T02:52:59-07:00</updated>
<published>2017-06-26T02:52:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33146#p33146</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33146#p33146"/>
<title type="html"><![CDATA[Re: Slow Start Menu after computer idle]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=33146#p33146"><![CDATA[
Hey Ivo,<br /><br />Thanks for the response and appologies for taking a while to come back. The DLL in question is part of a management suite called NetSupport which was a reasonable candidate for causing the slowdown, but i've since taken it off my machine (a different PC to the one i used in the last test) and i'm still getting a noticeable pause when loading Classic Start Menu.<br /><br />The pause is not experienced when loading the regular start menu (via shift / start).<br /><br /><br />Appdata is based on server, but LocalAppdata is not redirected (and remains local)... Network is enterprise level with 10Gbps between switches and 1Gbps. It normally servers 500+ simultaneous users, but today, just about 30 as it's a training day, so high spec, low use.<br /><br />Any further advice with the new logs available here?<br />New logs: <!-- m --><a class="postlink" href="https://drive.google.com/open?id=0B5lh199lkkqoM2lrUV9UTWF0R1k">https://drive.google.com/open?id=0B5lh1 ... V9UTWF0R1k</a><!-- m --><br />The start menu click was between logfile 1 and 2 (possibly 3).<br /><br /><br />Thanks again for your time here, would love to get this nailed down!<br /><br />Cheers,<br />Matt<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20696">bodger</a> — Mon Jun 26, 2017 2:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-06-10T06:27:19-07:00</updated>
<published>2017-06-10T06:27:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=32958#p32958</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=32958#p32958"/>
<title type="html"><![CDATA[Re: Slow Start Menu after computer idle]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=32958#p32958"><![CDATA[
The slowdown seems to be caused by the file C:\Program Files (x86)\NSL\NSCommonHook64.dll.<br />It is probably trying to access a network location and waiting for a response.<br />Possibly related to the user profile being on a remote machine.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jun 10, 2017 6:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bodger]]></name></author>
<updated>2017-06-09T04:10:20-07:00</updated>
<published>2017-06-09T04:10:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=32935#p32935</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=32935#p32935"/>
<title type="html"><![CDATA[Slow Start Menu after computer idle]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7661&amp;p=32935#p32935"><![CDATA[
Hey, first up, thanks for Classic Start Menu. It's fabulous!<br /><br />We having been running it from an early date with much success, but recently i've noticed delays in the start menu popping up. Sometimes as much as 30 seconds from clicking.<br /><br />Whilst i suspect it's a network issue rather than a bug in classic start menu, i don't know how to troubleshoot the dmp files generated by procdump.<br /><br />Would someone be able to either take a look or give me some guidance to take a look myself? (I tried opening in VS Express, but that just lists DLL's).<br /><br />I uploaded the zip file to your mediafire location with a name starting &quot;bodger&quot;.<br /><br />Environment is:<br />Classic Start Menu 4.3.0<br />Windows 10 Edu x64 (v1607)<br />Network installation with multiple DC's, DNS etc.<br /><br />We have done some server work recently, so i'm hoping it's some reference to an old dc (as i saw in another post), but i can't work out how to get more info out of the dmp files!<br /><br />Thanks in advance!<br /><br />Matt<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20696">bodger</a> — Fri Jun 09, 2017 4:10 am</p><hr />
]]></content>
</entry>
</feed>