<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=1293" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-09-24T08:14:20-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=1293</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-24T08:14:20-07:00</updated>
<published>2013-09-24T08:14:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1293&amp;p=6782#p6782</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1293&amp;p=6782#p6782"/>
<title type="html"><![CDATA[Re: Search addin for network]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1293&amp;p=6782#p6782"><![CDATA[
If you are using Windows 7, you can add network files to Libraries using a tool such as Winaero's Librarian (<a href="http://winaero.com/comment.php?comment.news.8" class="postlink">http://winaero.com/comment.php?comment.news.8</a>) (Explorer won't allow adding them). And then add the following registry tweak:<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\SearchPlatform\Preferences]<br />&quot;EnableSearchingSlowLibrariesInStartMenu&quot;=dword:00000001<br /><br />This will allow the **Windows 7** Start Menu to search the contents of the shares you added to Libraries, although note that they are not really indexed by Windows Search. The Windows Start Menu searches them without indexing. Also, it works only with the Windows 7 Start Menu, not Classic Shell's Start Menu.<br /><br />On Windows 8/8.1, the Start screen may be able to search network files that you added to Libraries if you press the Win+F hotkey but again they are not really indexed, it searches them after you type the query like the old non-indexed search did. See the guide here: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-search-network-shares-or-mapped-drives-in-windows-10/">http://winaero.com/blog/how-to-search-n ... indows-10/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Sep 24, 2013 8:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[standarduser]]></name></author>
<updated>2013-09-24T04:41:30-07:00</updated>
<published>2013-09-24T04:41:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1293&amp;p=6780#p6780</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1293&amp;p=6780#p6780"/>
<title type="html"><![CDATA[Search network mapped shares/ Add network files to Libraries]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1293&amp;p=6780#p6780"><![CDATA[
back in XP/Vista days there was search addin to index UNC locations- <!-- m --><a class="postlink" href="http://www.microsoft.com/en-us/download/details.aspx?id=3383">http://www.microsoft.com/en-us/download ... px?id=3383</a><!-- m --> But it does not work with Win7. can Classic Shell create replacment search addin for Win7/Win8? Thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1279">standarduser</a> — Tue Sep 24, 2013 4:41 am</p><hr />
]]></content>
</entry>
</feed>