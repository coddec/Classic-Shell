<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7392" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-11T11:18:47-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7392</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-11T11:18:47-07:00</updated>
<published>2017-09-11T11:18:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=34063#p34063</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=34063#p34063"/>
<title type="html"><![CDATA[Re: classicshell freezing explorer.exe in windows10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=34063#p34063"><![CDATA[
Can you try the Windows Explorer setting &quot;Launch folder windows in a separate process&quot; (File Explorer Options)<br /><br />reg.exe add &quot;HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced&quot; /v SeparateProcess /t reg_dword /d 0x1<br /><br />to see if the freezing session/high thread count problem on Windows 10 goes away?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Sep 11, 2017 11:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jelkins]]></name></author>
<updated>2017-03-24T05:57:19-07:00</updated>
<published>2017-03-24T05:57:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31931#p31931</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31931#p31931"/>
<title type="html"><![CDATA[Re: classicshell freezing explorer.exe in windows10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31931#p31931"><![CDATA[
I had a freeze this morning here is the dump file from explorer.<br /><br /><!-- m --><a class="postlink" href="https://www.dropbox.com/s/rpg4yuvegzle8ko/explorer.rar?dl=0">https://www.dropbox.com/s/rpg4yuvegzle8 ... r.rar?dl=0</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=18507">jelkins</a> — Fri Mar 24, 2017 5:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-03-22T09:56:42-07:00</updated>
<published>2017-03-22T09:56:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31912#p31912</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31912#p31912"/>
<title type="html"><![CDATA[Re: classicshell freezing explorer.exe in windows10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31912#p31912"><![CDATA[
OK, while in that state, can you capture a dump? You can right-click on the process in Process Explorer, then save a mini dump.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Mar 22, 2017 9:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[summerloud]]></name></author>
<updated>2017-03-22T09:19:15-07:00</updated>
<published>2017-03-22T09:19:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31911#p31911</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31911#p31911"/>
<title type="html"><![CDATA[Re: classicshell freezing explorer.exe in windows10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31911#p31911"><![CDATA[
while the freezes cannot always be reproduced, what always happens is a really high thread count in explorer.exe with several threads hanging. if you analyze those threads with process explorer, you can always see they get started by classic shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=18376">summerloud</a> — Wed Mar 22, 2017 9:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-03-21T04:39:17-07:00</updated>
<published>2017-03-21T04:39:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31904#p31904</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31904#p31904"/>
<title type="html"><![CDATA[Re: classicshell freezing explorer.exe in windows10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31904#p31904"><![CDATA[
OK but as you can see, there doesn't seem to be definite way to reproduce the issue on our Windows 10 test PCs. Only then it can be fixed. Without it, its cause is unknown.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Mar 21, 2017 4:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CosmicThing2]]></name></author>
<updated>2017-03-21T03:26:40-07:00</updated>
<published>2017-03-21T03:26:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31900#p31900</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31900#p31900"/>
<title type="html"><![CDATA[Re: classicshell freezing explorer.exe in windows10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31900#p31900"><![CDATA[
Me and several others are having this exact same issue summerloud and it's currently unsolved, see: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=5954">viewtopic.php?f=12&amp;t=5954</a><!-- l --> and <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=7297">viewtopic.php?f=12&amp;t=7297</a><!-- l --><br /><br />It's once the threads hit 800 or so, it'll freeze explorer. Issue seems only related to Windows 10.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17403">CosmicThing2</a> — Tue Mar 21, 2017 3:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-03-20T11:30:43-07:00</updated>
<published>2017-03-20T11:30:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31896#p31896</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31896#p31896"/>
<title type="html"><![CDATA[Re: classicshell freezing explorer.exe in windows10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31896#p31896"><![CDATA[
It would be most helpful if you can capture a SLOWDOWN dump: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Mar 20, 2017 11:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[summerloud]]></name></author>
<updated>2017-03-20T10:30:55-07:00</updated>
<published>2017-03-20T10:30:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31895#p31895</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31895#p31895"/>
<title type="html"><![CDATA[classicshell freezing explorer.exe in windows10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7392&amp;p=31895#p31895"><![CDATA[
unfortunately for everyone, our company switched to windows 10...<br /><br />we are using classic shell, however we keep having problems with explorer.exe freezes, which after long analysis we could pinpoint to classic shell<br /><br />the freezes cannot always be replicated, but every user always gets hanging explorer.exe threads in task manager after logon<br /><br />if we analyze the hanging threads via process explorer, the thread ID they are waiting for is always started by classic shell<br /><br />is this a known issue with windows 10, and is there a workaround? we could like to continue using classic shell if possible...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=18376">summerloud</a> — Mon Mar 20, 2017 10:30 am</p><hr />
]]></content>
</entry>
</feed>