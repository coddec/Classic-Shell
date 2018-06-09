<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=5604" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-01-17T22:46:42-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=5604</id>
<entry>
<author><name><![CDATA[Franpa]]></name></author>
<updated>2016-01-17T22:46:42-07:00</updated>
<published>2016-01-17T22:46:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24590#p24590</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24590#p24590"/>
<title type="html"><![CDATA[Re: Windows Explorer hangs when right-clicking HDD's (4.2.5)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24590#p24590"><![CDATA[
The problem seems to be intermittent (I don't often right-click a HDD), if I can get it to happen again I'll mess with programs that are integrating in to Windows Explorer/adding to context menues.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11051">Franpa</a> — Sun Jan 17, 2016 10:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-17T22:38:37-07:00</updated>
<published>2016-01-17T22:38:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24589#p24589</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24589#p24589"/>
<title type="html"><![CDATA[Re: Windows Explorer hangs when right-clicking HDD's (4.2.5)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24589#p24589"><![CDATA[
My mistake - WinRAR was reporting the &quot;packed size&quot; as 0.<br />I see the right-click menu hangs when getting the icon for the drive for some reason. It may have something to do with libraries. Do you have a sub-menu named &quot;Include in library&quot; or something?<br />Either way, I see no evidence of the problem being related to Classic Shell. If you uninstall Classic Shell, does it still happen?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 17, 2016 10:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Franpa]]></name></author>
<updated>2016-01-17T22:15:54-07:00</updated>
<published>2016-01-17T22:15:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24588#p24588</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24588#p24588"/>
<title type="html"><![CDATA[Re: Windows Explorer hangs when right-clicking HDD's (4.2.5)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24588#p24588"><![CDATA[
10.0.10586.0<br /><br />Their all 11 Megabytes here, even when uncompressed. Is your file decompresser working okay? Maybe try 7zip or Winrar?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11051">Franpa</a> — Sun Jan 17, 2016 10:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-17T21:11:49-07:00</updated>
<published>2016-01-17T21:11:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24587#p24587</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24587#p24587"/>
<title type="html"><![CDATA[Re: Windows Explorer hangs when right-clicking HDD's]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24587#p24587"><![CDATA[
It didn't work. All files except the first one are 0 bytes.<br />What is the version of your explorer.exe? You can see that in the file properties.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 17, 2016 9:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Franpa]]></name></author>
<updated>2016-01-17T21:03:56-07:00</updated>
<published>2016-01-17T21:03:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24586#p24586</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24586#p24586"/>
<title type="html"><![CDATA[Windows Explorer hangs when right-clicking HDD's (4.2.5)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5604&amp;p=24586#p24586"><![CDATA[
Windows Explorer hangs when right-clicking HDD's in the left pane (Dual pane view), right-clicking HDD's in the right pane (When looking at &quot;This PC&quot;) works fine. I performed <strong>procdump -n 10 -s 1 explorer.exe</strong> &amp; then triggered the Hang while it was generating dump logs, I've attached them all here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11051">Franpa</a> — Sun Jan 17, 2016 9:03 pm</p><hr />
]]></content>
</entry>
</feed>