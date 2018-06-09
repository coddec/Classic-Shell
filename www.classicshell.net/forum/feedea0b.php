<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=1049" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-08-18T11:27:46-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=1049</id>
<entry>
<author><name><![CDATA[jorgk3]]></name></author>
<updated>2013-08-18T11:27:46-07:00</updated>
<published>2013-08-18T11:27:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5821#p5821</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5821#p5821"/>
<title type="html"><![CDATA[Re: Icon spacing in file pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5821#p5821"><![CDATA[
Fantastic! Thank you so much.<br />Folder Options X was already installed on my machine, but I had it do nothing, since I wasn't aware of this feature. Now the view looks like this (see attachment).<br />Thank you once again for the great software and the great support.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=600">jorgk3</a> — Sun Aug 18, 2013 11:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-18T10:50:40-07:00</updated>
<published>2013-08-18T10:50:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5818#p5818</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5818#p5818"/>
<title type="html"><![CDATA[Re: Icon spacing in file pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5818#p5818"><![CDATA[
Use Folder Options X (<!-- m --><a class="postlink" href="http://free-sk.t-com.hr/T800soft/software/FolderOptions.htm">http://free-sk.t-com.hr/T800soft/softwa ... ptions.htm</a><!-- m -->) to disable full row select. It forces Explorer to use the older List View control which has reduced icon spacing. It works except for Libraries.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Aug 18, 2013 10:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jorgk3]]></name></author>
<updated>2013-08-06T03:38:43-07:00</updated>
<published>2013-08-06T03:38:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5436#p5436</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5436#p5436"/>
<title type="html"><![CDATA[Icon spacing in file pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1049&amp;p=5436#p5436"><![CDATA[
I've been using Windows 7 since April 2013 and thanks to Classic Shell and Classic Explorer I've survived it so far <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";-)" title="Wink" /><br /><br />Today I changed the icons for open and closed folders like so<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Windows Registry Editor Version 5.00<br /><br />&#91;HKEY_LOCAL_MACHINE\SOFTWARE\Wow6432Node\Microsoft\Windows\CurrentVersion\explorer\Shell Icons&#93;<br />&quot;3&quot;=&quot;\&quot;C:\\ClassicShell\\icons\\folder3.ico\&quot;&quot;<br />&quot;4&quot;=&quot;\&quot;C:\\ClassicShell\\icons\\folder4.ico\&quot;&quot;<br /><br />&#91;HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\Shell Icons&#93;<br />&quot;3&quot;=&quot;\&quot;C:\\ClassicShell\\icons\\folder3.ico\&quot;&quot;<br />&quot;4&quot;=&quot;\&quot;C:\\ClassicShell\\icons\\folder4.ico\&quot;&quot;<br /></div><br />to the old icons from Windows XP.<br /><br />In Classic Explorer you can change the tree item spacing in the Navigation Pane.<br /><br />Question: Can you also somehow change the spacing in the file pane? I'd like to reduce the space in between the icons. See attached screenshot.<br /><br />Perhaps the answer is &quot;no&quot;: <strong>GauravK</strong><br /> wrote in another post:<br />The left pane of Explorer uses the standard treeview control whose behavior can be modified because it is documented. The right pane of Windows 7/8 Explorer uses an undocumented private ItemsView control.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=600">jorgk3</a> — Tue Aug 06, 2013 3:38 am</p><hr />
]]></content>
</entry>
</feed>