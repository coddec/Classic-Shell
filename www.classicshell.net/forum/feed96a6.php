<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7939" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-27T23:04:36-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7939</id>
<entry>
<author><name><![CDATA[nitro22888]]></name></author>
<updated>2017-09-27T23:04:36-07:00</updated>
<published>2017-09-27T23:04:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34248#p34248</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34248#p34248"/>
<title type="html"><![CDATA[Re: Start Menu pinning issue in Windows 7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34248#p34248"><![CDATA[
Oh... so I just searched under C:\ for Start Menu and found the 2nd folder you mentioned -- and there they were. Deleted them! Seems to be solved. Thanks a lot Gaurav. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24618">nitro22888</a> — Wed Sep 27, 2017 11:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-27T23:04:06-07:00</updated>
<published>2017-09-27T23:04:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34247#p34247</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34247#p34247"/>
<title type="html"><![CDATA[Re: Start Menu pinning issue in Windows 7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34247#p34247"><![CDATA[
The folder might be hidden. Copy paste it or enable hidden and system files.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Sep 27, 2017 11:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nitro22888]]></name></author>
<updated>2017-09-27T23:01:54-07:00</updated>
<published>2017-09-27T23:01:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34246#p34246</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34246#p34246"/>
<title type="html"><![CDATA[Re: Start Menu pinning issue in Windows 7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34246#p34246"><![CDATA[
I checked those 3 paths and the first didn't contain either of the 3 programs; I don't have the 2nd file path (under C:\ there is no program data folder); and the 3rd folder was just empty. I'm wondering if there's some issue between what my computer wants to do and Classic Shell wants to do. So far they're still stuck there.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24618">nitro22888</a> — Wed Sep 27, 2017 11:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-27T22:49:30-07:00</updated>
<published>2017-09-27T22:49:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34245#p34245</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34245#p34245"/>
<title type="html"><![CDATA[Re: Start Menu pinning issue in Windows 7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34245#p34245"><![CDATA[
Check the following folders in Explorer:<br />- %appdata%\Microsoft\Windows\Start Menu (This is the per-user Start menu folder)<br />- C:\ProgramData\Microsoft\Windows\Start Menu (All users Start Menu folder)<br />- %appdata%\ClassicShell\Pinned (Per-user Pinned folder)<br /><br />The shortcuts must be there in either of these folders. You can delete them from Explorer. Right click -&gt; Delete will do the same thing as Right click -&gt; Unpin.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Sep 27, 2017 10:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nitro22888]]></name></author>
<updated>2017-09-27T22:42:28-07:00</updated>
<published>2017-09-27T22:42:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34244#p34244</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34244#p34244"/>
<title type="html"><![CDATA[Start Menu pinning issue in Windows 7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7939&amp;p=34244#p34244"><![CDATA[
Hello, I'm new to Classic Shell, but I've enjoyed it for a couple weeks. I am having one issue though. Under Main Menu in the section titled &quot;Pinned Programs Folder&quot; I have Use Start Menu Folder selected, which seems to put my &quot;pinned&quot; items above the frequently used programs stacked above the All Programs &amp; Search section. The problem I'm having is, Bittorrent, Windows Updates, and Default Programs are all pinned there and I can't figure out how to unpin them. I can pin another program and then remove said program, but those 3 seem stuck there -- whether I drag them off somewhere else, right click (to which I find no unpin from start menu selection), or search the Classic Shell menu for a solution. So, I'm here looking for help. I don't want either of those 3 pinned on my start menu... so if it's possible to remove them I'd love to know how to do that. I hope I've given enough information here to explain the issue, and maybe find a solution. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> I'll eagerly await a reply. -- Colby<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24618">nitro22888</a> — Wed Sep 27, 2017 10:42 pm</p><hr />
]]></content>
</entry>
</feed>