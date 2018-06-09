<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=1193" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-08-30T20:16:50-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=1193</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-30T20:16:50-07:00</updated>
<published>2013-08-30T20:16:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6253#p6253</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6253#p6253"/>
<title type="html"><![CDATA[Re: Search and or Indexing question]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6253#p6253"><![CDATA[
If it was Windows 7, Server 2008/R2 or Vista, the gadget platform was available. There was a nearly official gadget from a Microsoft employee on the shell team to control the speed of indexing and see display status information: <a href="http://gallery-live.com/sidebar-gadgets/Indexer%20Status%20Gadget" class="postlink">http://gallery-live.com/sidebar-gadgets/Indexer%20Status%20Gadget</a><br /><img src="http://windowsvistablog.com/photos/windows_experience_images/images/497035/original.aspx" alt="" /> <br /><img src="http://i1-win.softpedia-static.com/screenshots/thumbs/Indexer-Status-Gadget-thumb.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Aug 30, 2013 8:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-30T14:37:13-07:00</updated>
<published>2013-08-30T14:37:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6247#p6247</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6247#p6247"/>
<title type="html"><![CDATA[Re: Search and or Indexing question]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6247#p6247"><![CDATA[
No, it doesn't get into those. Only the contents of the Start Menu folders (both of them).<br />Run Process Monitor and see who touches what.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Aug 30, 2013 2:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-08-30T14:34:25-07:00</updated>
<published>2013-08-30T14:34:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6246#p6246</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6246#p6246"/>
<title type="html"><![CDATA[Re: Search and or Indexing question]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6246#p6246"><![CDATA[
Ivo,<br />What about links to Documents, Pictures etc. in right hand pane of start menu?<br />Pete<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Fri Aug 30, 2013 2:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-30T13:46:17-07:00</updated>
<published>2013-08-30T13:46:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6244#p6244</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6244#p6244"/>
<title type="html"><![CDATA[Re: Search and or Indexing question]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6244#p6244"><![CDATA[
The start menu scans the Start Menu folders and looks for shortcuts. Then it tries to resolve the targets of those shortcuts. This information is needed for features like &quot;frequently used programs&quot; or &quot;highlight new programs&quot;. Some of that information is cached, however on startup it has to go and verify if it is up to date (it is faster than the original scan, but not free).<br /><br />The start menu does not index the files for search purposes. That's done by the indexing service. Look at your indexing settings to see if some unwanted folders are listed there.<br /><br />See what process is consuming CPU and I/O bandwidth. Also see if not starting the start menu has any effect (you can disable it per user from the General Behavior tab).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Aug 30, 2013 1:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-08-30T13:06:29-07:00</updated>
<published>2013-08-30T13:06:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6242#p6242</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6242#p6242"/>
<title type="html"><![CDATA[Search and or Indexing question]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1193&amp;p=6242#p6242"><![CDATA[
Ivo,<br />We have deployed 3.9.3 to a few hundred desktops and an RDP cluster. All users are running W8 on the desktop and WS2012 on RDS. We have roaming profiles enabled and redirect documents, pictures, favorites etc. AppData is local but obviously roaming is copied to the profile server on logoff.<br />We now have many users logging on and CPU on the fileserver that hosts home folders with redirected folders mentioned above shoots up and sticks at 100% for minutes. So my question is &quot;does CSM try to index these folders at logon&quot; and is this causing high CPU on the file server.<br />I only ask as this is a possibility. Last year we had same setup but with W7 + WS2K8R2 and no issues.<br />If this is a possible reason for the high CPU is there a way to disable the indexing or change the way it operates?<br />Regards,<br />Pete<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Fri Aug 30, 2013 1:06 pm</p><hr />
]]></content>
</entry>
</feed>