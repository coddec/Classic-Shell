<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=534" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-04-17T00:32:21-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=534</id>
<entry>
<author><name><![CDATA[jorgk3]]></name></author>
<updated>2013-04-17T00:32:21-07:00</updated>
<published>2013-04-17T00:32:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2802#p2802</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2802#p2802"/>
<title type="html"><![CDATA[Re: Selection colours/colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2802#p2802"><![CDATA[
Thank you very much! You made my day! This bug was the single most annoying thing about Windows 7.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=600">jorgk3</a> — Wed Apr 17, 2013 12:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-17T00:03:18-07:00</updated>
<published>2013-04-17T00:03:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2801#p2801</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2801#p2801"/>
<title type="html"><![CDATA[Re: Selection colours/colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2801#p2801"><![CDATA[
KB2653385 (<!-- m --><a class="postlink" href="http://support.microsoft.com/kb/2653385">http://support.microsoft.com/kb/2653385</a><!-- m -->) fixes the bug you are talking about for Windows 7 SP1. Unfortunately, due to the extremely poor way in which the Windows division is run now, the bug has cropped up again for Windows 8. Sigh as this did not happen in the old Microsoft.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Apr 17, 2013 12:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jorgk3]]></name></author>
<updated>2013-04-16T23:19:51-07:00</updated>
<published>2013-04-16T23:19:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2799#p2799</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2799#p2799"/>
<title type="html"><![CDATA[Re: Selection colours/colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2799#p2799"><![CDATA[
Thank you for your answer. I tried &quot;Folder Options X&quot;, at least it will prevent accidental deletion of the wrong item, since the focus is always on the right.<br /><br />&quot;Windows Classic&quot; is a nightmare, since it exposes a bug, which is documented here and also exists in the aero and basic themes:<br />Classic:<br /><!-- m --><a class="postlink" href="http://social.technet.microsoft.com/Forums/en-US/w7itproui/thread/305410c5-c3c2-4924-a223-75f0e9e6e14d">http://social.technet.microsoft.com/For ... f0e9e6e14d</a><!-- m --><br />Aero, basic:<br /><!-- m --><a class="postlink" href="http://social.technet.microsoft.com/Forums/en-US/w7itproui/thread/bc4c7e43-a603-420c-baf7-7211c5abe3e4">http://social.technet.microsoft.com/For ... 11c5abe3e4</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=600">jorgk3</a> — Tue Apr 16, 2013 11:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-16T22:40:09-07:00</updated>
<published>2013-04-16T22:40:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2798#p2798</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2798#p2798"/>
<title type="html"><![CDATA[Re: Selection colours/colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2798#p2798"><![CDATA[
The left pane of Explorer uses the standard treeview control whose behavior can be modified because it is documented. The right pane of Windows 7/8 Explorer uses an undocumented private ItemsView control. A registry hack or a tool like Folder Options X: <!-- m --><a class="postlink" href="http://free-sk.t-com.hr/T800soft/software/FolderOptions.htm">http://free-sk.t-com.hr/T800soft/softwa ... ptions.htm</a><!-- m --> can force the ListView control for the right pane which is documented/standard.<br /><br />I don't know however if the selection color can be changed in ListView because Aero-based themes use visual styles/bitmaps. If you change to &quot;Windows Classic&quot; theme, you will get a darker selection color which can also be changed in Personalization Control Panel -&gt; Window color -&gt; Advanced appearance. Under &quot;Items&quot;, set the colors for &quot;Selected Items&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Apr 16, 2013 10:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jorgk3]]></name></author>
<updated>2013-04-16T01:01:26-07:00</updated>
<published>2013-04-16T01:01:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2770#p2770</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2770#p2770"/>
<title type="html"><![CDATA[Selection colours/colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=534&amp;p=2770#p2770"><![CDATA[
First of all: Thank you so much for Classic Shell and Classic Explorer. They are invaluable!<br /><br />I have a question/request regarding the colour of selected items/folders.<br /><br />Today I posted on Microsoft's forum:<br /><a href="http://social.technet.microsoft.com/Forums/en-US/w7itproui/thread/bc4c7e43-a603-420c-baf7-7211c5abe3e4" class="postlink">http://social.technet.microsoft.com/Forums/en-US/w7itproui/thread/bc4c7e43-a603-420c-baf7-7211c5abe3e4</a><br /><a href="http://social.technet.microsoft.com/Forums/en-US/w7itproui/thread/1f1b1ffe-8e14-4f60-a960-aa907827d812" class="postlink">http://social.technet.microsoft.com/Forums/en-US/w7itproui/thread/1f1b1ffe-8e14-4f60-a960-aa907827d812</a><br />Basically Explorer gets confused with its colours.<br /><br />Using Classic Explorer the situation is not as bad as in the first post, instead it looks like this:<br /><img src="http://www.jorgk.com/misc/classic-explorer-1.png" alt="" /><br />and<br /><img src="http://www.jorgk.com/misc/classic-explorer-2.png" alt="" /><br /><br />It's good that the selected item shows up in bold blue on the left. Sadly it does not apply when selecting on the right side.<br /><br />Questions:<br />1) Would it be possible to show a selected item on the right in the same bold colour as on the left?<br />2) Can the light grey and light blue be changed?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=600">jorgk3</a> — Tue Apr 16, 2013 1:01 am</p><hr />
]]></content>
</entry>
</feed>