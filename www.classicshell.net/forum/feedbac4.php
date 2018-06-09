<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=5212" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-09-30T08:52:56-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=5212</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-09-30T08:52:56-07:00</updated>
<published>2015-09-30T08:52:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22635#p22635</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22635#p22635"/>
<title type="html"><![CDATA[Re: Slow loading of ClassicShell on Terminal Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22635#p22635"><![CDATA[
Is it possible that your entire appdata folder (%username%\Appdata, not %appdata%) is redirected using folder redirection?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Sep 30, 2015 8:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-30T08:13:57-07:00</updated>
<published>2015-09-30T08:13:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22633#p22633</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22633#p22633"/>
<title type="html"><![CDATA[Re: Slow loading of ClassicShell on Terminal Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22633#p22633"><![CDATA[
I don't see anything happening in those dumps. The main Explorer thread and the Classic Shell worker threads are doing nothing at the time. They are just waiting for user action.<br />Maybe the dumps are not captured at the right time? Or maybe the slowdown is not related to the start menu?<br />You can try using Process Monitor to see what files or registry keys are being accessed by Explorer during that time. Also make sure you close all Explorer windows to reduce the noise.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Sep 30, 2015 8:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[padkipz]]></name></author>
<updated>2015-09-30T04:10:27-07:00</updated>
<published>2015-09-30T04:10:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22627#p22627</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22627#p22627"/>
<title type="html"><![CDATA[Slow loading of ClassicShell on Terminal Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5212&amp;p=22627#p22627"><![CDATA[
We have recently rolled out 6 RDServers to one of our clients, as they have moved on to a full TS solution. These servers are running Windows 2012R2, and have Classic Shell installed to simulate a startmenu, instead of the metro screen.<br /><br />Since migrating everyone on to these servers, we have found a real slowness in Classic Shell opening the startmenu when clicked - this can take between 5seconds and 30seconds.<br /><br />I ran a procdump while testing this slowness (files attached), and had a long freeze up between the last 4-5 dump files.<br /><br />My inkling tells me this could be down to looking for the location of certain libraries, as they are all handled by folder redirection, but there is a 10GB link between the servers and the storage, so I would really hope that is enough to handle it.<br /><br />Would really appriciate some help on this one!<br /><br />Thanks in advance.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11638">padkipz</a> — Wed Sep 30, 2015 4:10 am</p><hr />
]]></content>
</entry>
</feed>