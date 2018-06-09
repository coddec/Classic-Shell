<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=5267" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-12-17T00:48:41-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=5267</id>
<entry>
<author><name><![CDATA[clintwelbar]]></name></author>
<updated>2015-12-17T00:48:41-07:00</updated>
<published>2015-12-17T00:48:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=24039#p24039</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=24039#p24039"/>
<title type="html"><![CDATA[Re: A button to copy-paste a file in the current folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=24039#p24039"><![CDATA[
More about.....<a href="http://net-informations.com/q/mis/robocopy.html" class="postlink">Robocopy</a><br /><br />Clint<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12251">clintwelbar</a> — Thu Dec 17, 2015 12:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[poq]]></name></author>
<updated>2015-10-17T01:17:18-07:00</updated>
<published>2015-10-17T01:17:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22998#p22998</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22998#p22998"/>
<title type="html"><![CDATA[Re: A button to copy-paste a file in the current folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22998#p22998"><![CDATA[
Looks like there is an issue with the xcopy.exe command in my Windows 10 : it does not work when one of the folders in the current path contains spaces (for example : create the file in &quot;D:\Shenmue 2&quot;) while the robocopy.exe command does not work at all. I get no error message in both cases.<br /><br />But I found an alternative solution with New Menu Editor.exe : <!-- m --><a class="postlink" href="http://www.freewarefiles.com/screenshot.php?programid=77566">http://www.freewarefiles.com/screenshot ... amid=77566</a><!-- m --><br />You can insert your own template files in the right click context menu of Windows Explorer. It's not an 1-click solution but the file creation is slightly faster, the file is automatically selected and the file name edition is automatically active right after the creation. The only drawback is that you can't associate more than one template with each file type.<br /><br />I guess there is also an Auto Hotkey solution for only keyboard manipulation.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11776">poq</a> — Sat Oct 17, 2015 1:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-10-16T20:01:20-07:00</updated>
<published>2015-10-16T20:01:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22996#p22996</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22996#p22996"/>
<title type="html"><![CDATA[Re: A button to copy-paste a file in the current folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22996#p22996"><![CDATA[
You mean you wish to copy-paste with 1 click? You can create a Custom command on the Explorer toolbar that uses xcopy.exe or Robocopy.exe and for the current folder you can use %1.<br /><br />1. Open Classic Explorer Settings and check Show all settings at the top.<br />2. Go to Toolbar Buttons tab and scroll down in the right column. Drag the &quot;Custom&quot; item to the left column and position it where you want.<br />3. Double click the Custom item and in its &quot;Command:&quot; field, type your copy command. For example, xcopy &quot;C:\Document.txt&quot; &quot;%1&quot;<br /><br />Make sure you put any paths to the document in double quotes.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Oct 16, 2015 8:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[poq]]></name></author>
<updated>2015-10-16T08:39:44-07:00</updated>
<published>2015-10-16T08:39:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22990#p22990</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22990#p22990"/>
<title type="html"><![CDATA[A button to copy-paste a file in the current folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5267&amp;p=22990#p22990"><![CDATA[
Hi,<br />I'm looking for a way to copy-paste a predefined file (like a text template or an excel document saved in a certain location) to the current folder where I click the button. Is that possible ?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11776">poq</a> — Fri Oct 16, 2015 8:39 am</p><hr />
]]></content>
</entry>
</feed>