<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7889" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-09T03:44:26-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7889</id>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-09-09T03:37:36-07:00</updated>
<published>2017-09-09T03:37:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34040#p34040</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34040#p34040"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34040#p34040"><![CDATA[
Well, a workaround: I have changed<br /><br />%SystemDrive%\Classic\shutdown.vbs<br /><br />to<br /><br />%SystemDrive%\Classic\shutdown.vbs -a<br /><br />(a meaningless parameter which is not processed by the script), and the empty element disappeared.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sat Sep 09, 2017 3:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-09-09T03:44:26-07:00</updated>
<published>2017-09-09T03:34:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34039#p34039</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34039#p34039"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34039#p34039"><![CDATA[
These settings should produce the empty item on your system (it links to the shutdown uutility that exists on any Windows system).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sat Sep 09, 2017 3:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-09-09T03:29:19-07:00</updated>
<published>2017-09-09T03:29:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34038#p34038</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34038#p34038"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34038#p34038"><![CDATA[
An interesting fact is that the empty item appears only if the link links to a file using full path, and the file exists. If it uses a command such as &quot;shutdown -p&quot; the empty item does not appear. If the file does not exist, there is no empty item either. If there are command prompt parameters, there is no empty item, only if there are none.<br /><br />For instance, link %SystemRoot%\System32\shutdown.exe produces empty item, whille %SystemRoot%\System32\shutdown.exe -p does not.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sat Sep 09, 2017 3:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-09-09T03:24:33-07:00</updated>
<published>2017-09-09T03:24:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34037#p34037</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34037#p34037"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34037#p34037"><![CDATA[
I reset all settings, repeated the actions (removed default command from power off button, added link to a script), and got the empty element again. It does not depend on skin and appears even after settings reset.<br /><br /><img src="http://storage4.static.itmages.ru/i/17/0909/h_1504952527_8827763_35b8fa8bcb.jpeg" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sat Sep 09, 2017 3:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-09-08T20:11:39-07:00</updated>
<published>2017-09-08T20:11:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34035#p34035</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34035#p34035"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34035#p34035"><![CDATA[
Doesn't happen for me with your settings.<br />The (empty) element should appear only when you drag something into the menu.<br />What version of Windows do you have? Which skin are you using?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 08, 2017 8:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-09-08T10:34:34-07:00</updated>
<published>2017-09-08T10:34:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34028#p34028</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34028#p34028"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34028#p34028"><![CDATA[
More precisely, when adding a new command to the &quot;shortcut&quot; fild.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Sep 08, 2017 10:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-09-08T09:39:56-07:00</updated>
<published>2017-09-08T09:39:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34027#p34027</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34027#p34027"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34027#p34027"><![CDATA[
Attached the settings, but I can assure you the item appears if to remove the default command from the shutdown box.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Sep 08, 2017 9:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-09-08T09:12:01-07:00</updated>
<published>2017-09-08T09:12:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34025#p34025</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34025#p34025"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34025#p34025"><![CDATA[
Post your exact settings in XML form.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 08, 2017 9:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-09-08T08:58:54-07:00</updated>
<published>2017-09-08T08:58:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34024#p34024</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34024#p34024"/>
<title type="html"><![CDATA[Re: Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34024#p34024"><![CDATA[
This empty element appears if to change the default action for shutdown button.<br /><br />Like this:<br /><br /><img src="http://storage7.static.itmages.ru/i/17/0908/h_1504886369_8613797_6ac7cf6dbf.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Sep 08, 2017 8:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-09-08T08:49:43-07:00</updated>
<published>2017-09-08T08:49:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34023#p34023</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34023#p34023"/>
<title type="html"><![CDATA[Empty element in shutdown box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7889&amp;p=34023#p34023"><![CDATA[
<img src="http://storage9.static.itmages.ru/i/17/0908/h_1504885744_9582327_325937d3cc.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Sep 08, 2017 8:49 am</p><hr />
]]></content>
</entry>
</feed>