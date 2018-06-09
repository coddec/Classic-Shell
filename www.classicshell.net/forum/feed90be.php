<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6924" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-15T13:59:06-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6924</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-15T13:59:06-07:00</updated>
<published>2017-08-15T13:59:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=33716#p33716</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=33716#p33716"/>
<title type="html"><![CDATA[Re: open file location]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=33716#p33716"><![CDATA[
<div class="quotetitle">futurewave wrote:</div><div class="quotecontent"><br />GREAT. Thank you!!!<br /><br />Also another problem. I searched for part of a file name I've used for many videos I have in dropbox. The showed up in the Shell search. However, when I clicked “see more results” it went to “search results in indexed locations” and said “no items match your search”<br />However when in File Explorer I chose Dropbox and did the same search it found many.<br />Yet in “indexed locations” the Dropbox folder on my computer (in partition E of my hard drive) shows that Dropbox is checked and shows the many videos with that name (followed by dates, etc.)<br /><br />Why doesn't &quot;see more results&quot; work?<br /></div><br /><br /><br />I think I found why this is happening. The correct URL to use is:<br /><br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />To fix this, follow these steps:<br />1. Open Start Menu Settings<br />2. Go to Customize Start Menu tab<br />3. Now:<br /><br />3-A:<br />If using <strong><span style="text-decoration: underline">classic style</span></strong>, add a sub-item for the &quot;Search Box&quot; item by dragging &quot;Custom&quot; from the right column and dropping it over the &quot;Search Box&quot; in the left column. Then double click Custom and enter this URL I mentioned above as the &quot;Command&quot;.<br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />Enter a text label, for example, See results in Explorer... and pick an icon.<br /><br />OR<br /><br />3-B:<br />If using <strong><span style="text-decoration: underline">Windows 7 style</span></strong>, add a Custom item on the Customize Start Menu tab by pressing the Insert key. Change &quot;Administrative Tools&quot; to &quot;Custom&quot;. Now double click the icon of the &quot;Custom&quot; item and enter this URL I mentioned above as the &quot;Command&quot;.<br /><br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />Enter a text label, for example, See results in Explorer... and pick an icon.<br /><br />Now when you search for anything and click See results in Explorer... the results in your Explorer window that opens will be consistent with what the Classic Start Menu shows.<br /><br />For now, you will have to ignore the built-in item called &quot;See More Results&quot; and use &quot;See results in Explorer...&quot; that you added manually.<br /><br />Essentially, if you use more of the Advanced Query Syntax, the current implementation of &quot;See More Results&quot; sometimes returns an empty Explorer window whereas a search provider defined with this URL returns results consistent with the Start menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 15, 2017 1:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[futurewave]]></name></author>
<updated>2016-10-05T20:43:48-07:00</updated>
<published>2016-10-05T20:43:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29701#p29701</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29701#p29701"/>
<title type="html"><![CDATA[Re: open file location]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29701#p29701"><![CDATA[
Why would there be a registry problem and how do I fix it?<br /><br />Also another problem.  I can't drag folders or files to the classic shell  start menu.  How do I add my favorite quick-start items?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15470">futurewave</a> — Wed Oct 05, 2016 8:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-10-05T00:57:09-07:00</updated>
<published>2016-10-05T00:57:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29677#p29677</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29677#p29677"/>
<title type="html"><![CDATA[Re: open file location]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29677#p29677"><![CDATA[
@futurewave, this happens sometimes if any of your Windows Explorer related Registry entries are missing.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Oct 05, 2016 12:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[futurewave]]></name></author>
<updated>2016-10-04T20:49:44-07:00</updated>
<published>2016-10-04T20:49:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29675#p29675</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29675#p29675"/>
<title type="html"><![CDATA[Re: open file location]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29675#p29675"><![CDATA[
GREAT.  Thank you!!!<br /><br />Also another problem.  I searched for part of a file name I've used for many videos I have in dropbox.  The showed up in the Shell search.   However, when I clicked “see more results” it went to “search results in indexed locations” and  said “no items match your search”<br />However when in  File Explorer I chose Dropbox and did the same search it found many.<br />Yet in “indexed locations” the Dropbox folder on my computer (in partition E of my hard drive) shows that Dropbox is checked and shows the many videos with that name (followed by dates, etc.)<br /><br />Why doesn't &quot;see more results&quot; work?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15470">futurewave</a> — Tue Oct 04, 2016 8:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-04T15:36:51-07:00</updated>
<published>2016-10-04T15:36:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29674#p29674</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29674#p29674"/>
<title type="html"><![CDATA[Re: open file location]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29674#p29674"><![CDATA[
Select &quot;Explore&quot;. It is different than &quot;open file location&quot;, which a Windows command for shortcut files.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Oct 04, 2016 3:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[futurewave]]></name></author>
<updated>2016-10-04T15:31:53-07:00</updated>
<published>2016-10-04T15:31:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29673#p29673</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29673#p29673"/>
<title type="html"><![CDATA[open file location]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6924&amp;p=29673#p29673"><![CDATA[
Just installed classic shell on windows 10 Dell PC.  Love the Windows 7 look.  However when I search for a file and right click on it, I don't see the option to &quot;open file location&quot;.  Searched help and didn't find this term.  Is there a way to turn this on or is  this a bug in  Shell?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15470">futurewave</a> — Tue Oct 04, 2016 3:31 pm</p><hr />
]]></content>
</entry>
</feed>