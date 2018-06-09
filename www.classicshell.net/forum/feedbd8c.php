<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7107" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-11-23T08:37:52-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7107</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-11-23T08:37:52-07:00</updated>
<published>2016-11-23T08:37:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30482#p30482</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30482#p30482"/>
<title type="html"><![CDATA[Re: drag and drop fails in administrator mode]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30482#p30482"><![CDATA[
This is a security feature of Windows called UIPI. You can't drag from low-security process to high-security process.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Nov 23, 2016 8:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-11-23T07:45:04-07:00</updated>
<published>2016-11-23T07:45:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30478#p30478</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30478#p30478"/>
<title type="html"><![CDATA[Re: drag and drop fails in administrator mode]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30478#p30478"><![CDATA[
How is this related to Classic Shell? It only makes certain additions to Explorer but doesn't change anything about integrity levels. Processes with lower integrity levels cannot communicate with processes with higher integrity levels. Explorer is restricted by DCOM to always run as non-admin.<br /><br />You can add an &quot;Open as administrator&quot; toolbar command to Classic Explorer toolbar. See how to do that here: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=8&amp;t=6482">viewtopic.php?f=8&amp;t=6482</a><!-- l --> It will allow you to open any document, file or program as administrator from Explorer.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Nov 23, 2016 7:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[janhec]]></name></author>
<updated>2016-11-23T05:36:51-07:00</updated>
<published>2016-11-23T05:36:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30477#p30477</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30477#p30477"/>
<title type="html"><![CDATA[drag and drop fails in administrator mode]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7107&amp;p=30477#p30477"><![CDATA[
Hi,<br />Using version 4.3.0 (with great pleasure), I found that when I start (e.g.) notepad, wordpad, ms word in admin mode, I cannot use it as a target in drag and drop from explorer.<br />In user mode the drag and drop works fine, but in admin mode the dropped file will not be opened.<br />Reason: editing batchfiles in C:\Program Files will not allow a save (same name), using admin mode probably makes this possible.<br />Severity: non critical (but perhaps easy to fix). The workaround is easy, save other name, use explorer to delete old (batch)file and rename new (batch)file.<br />On the adagium that all programmers should be lazy, I prefer the non-workaround method, of course <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><br />Thanks,<br />Jan<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16341">janhec</a> — Wed Nov 23, 2016 5:36 am</p><hr />
]]></content>
</entry>
</feed>