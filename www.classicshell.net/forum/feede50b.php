<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=777" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-06-21T14:58:59-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=777</id>
<entry>
<author><name><![CDATA[bamajon1974]]></name></author>
<updated>2013-06-21T14:58:59-07:00</updated>
<published>2013-06-21T14:58:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3953#p3953</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3953#p3953"/>
<title type="html"><![CDATA[Re: Commands for invert selection and deselect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3953#p3953"><![CDATA[
Ok I believe I found a solution but need a little help to finish it off. <br /><br />So basically I need to know what the keyboard shortcuts for Invert Selection and Select None are and how would you correctly code them in a vbscript file. <br /><br />I figured out how to add a &quot;Select&quot; parent menu with Select All, Invert Select, and Select None operations based on right click menu based on cascading context menu tutorials from AskVG.<br /><br /><!-- m --><a class="postlink" href="http://www.askvg.com/add-cascading-menus-for-your-favorite-programs-in-windows-7-desktop-context-menu/">http://www.askvg.com/add-cascading-menu ... text-menu/</a><!-- m --><br /><br />In registry editor, I added a &quot;Select&quot; menu in<br /><br />[HKEY_CLASSES_ROOT\*\shell\]<br />[HKEY_CLASSES_ROOT\Folder\shell\]<br />[HKEY_CLASSES_ROOT\Directory\Background\shell\]<br />[HKEY_CLASSES_ROOT\LibraryFolder\background\shell\]<br /><br />For example, in <br /><br />[HKEY_CLASSES_ROOT\LibraryFolder\background\shell\]<br /><br />I added a new key called Menu. <br />I added MUIVerb string called &quot;Select&quot;<br />I added Subcommands called &quot;Windows.selectall;SelectInvert;SelectNone<br />I also added Icon and Position strings but left them blank. <br /><br />I did the same thing for *, folder, and library, in addition to desktop background. <br /><br />Then I went to <br /><br />HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\CommandStore\Shell<br /><br />Windows.selectall functionality is already there and the operation works as is. Invert select and select none is not. So i have to add it some way. <br /><br />So I found this tutorial to add selectall and invert selection on door2windows using vbscripts based on keyboard shortcuts. <br /><br /><!-- m --><a class="postlink" href="http://www.door2windows.com/how-to-select-all-files-in-a-folder-using-context-menu/">http://www.door2windows.com/how-to-sele ... text-menu/</a><!-- m --><br /><br />Select all is control + a<br />Invert select is Alt + E + I<br />Select none is ???? -- I don't know here, I have seen Shift + A but I don't think it works. Can someone help? <br /><br />Write a vbscript for invert selection: <br /><br />set oShell = WScript.CreateObject(&quot;WScript.Shell&quot;)<br />oShell.SendKeys &quot;%ei&quot;<br /><br />Open notepad, save the script as &quot;InvertSelect.vbs&quot; in windows directory. <br /><br />Write a vbscript for select none: <br /><br />set oShell = WScript.CreateObject(&quot;WScript.Shell&quot;)<br />oShell.SendKeys &quot;+a&quot;<br /><br />Open notepad, save the script as &quot;SelectNone.vbs&quot; in windows directory.<br /><br />In ....\CommandStore\Shell, I made &quot;selectinvert&quot; key and &quot;selectnone&quot; key<br /><br />For selectinvert, the Default string, the value is &quot;Invert Selection&quot; <br />I added an icon string with a path to an appropriate invert selection icon. <br />In the selectinvert key, i made a new sub-key and called it &quot;command&quot; <br />and set the value to the path where I saved InvertSelect.vbs file. <br /><br />For selectnone, the Default string, the value is &quot;Select None&quot; <br />I added an icon string with a path to an appropriate select none icon. <br />In the selectnone key, i made a new sub-key and called it &quot;command&quot; <br />and set the value to the path where I saved SelectNone.vbs file. <br /><br />Now I have the cascading Select menu with Select All, Invert Selection, and Select None, all with Icons. Select All works, but the other two don't because I don't think I have the right format for keyboard shortcuts. This should be a simple fix. Can someone help?<br /><br />Or if there is a better solution, I am all ears. <br /><br />Thanks!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=905">bamajon1974</a> — Fri Jun 21, 2013 2:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bamajon1974]]></name></author>
<updated>2013-06-20T07:39:28-07:00</updated>
<published>2013-06-20T07:39:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3886#p3886</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3886#p3886"/>
<title type="html"><![CDATA[Re: Commands for invert selection and deselect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3886#p3886"><![CDATA[
I am running 64-bit windows so the crashcoursesoftware files as is won't work. <br /> <br />So the invert selection is a menu item in explorer, but not a context menu. What is the command to get invert selection to run from the menu bar? Could it be modified for a right-click entry? <br /><br />Alternatively, the keyboard shortcut for invert select is Alt + E + I. Could that be incorporated into the registry to make a right click entry?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=905">bamajon1974</a> — Thu Jun 20, 2013 7:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-20T07:16:15-07:00</updated>
<published>2013-06-20T07:16:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3884#p3884</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3884#p3884"/>
<title type="html"><![CDATA[Re: Commands for invert selection and deselect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3884#p3884"><![CDATA[
No they can't be added to the context menu on Windows 7 in that case. For 32-bit Windows 7, there is a shell extension with 'Select All' and 'Invert Selection' commands: <!-- m --><a class="postlink" href="http://crashcoursesoftware.com/download/">http://crashcoursesoftware.com/download/</a><!-- m --> but it won't work with 64-bit Windows 7.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jun 20, 2013 7:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bamajon1974]]></name></author>
<updated>2013-06-20T06:50:32-07:00</updated>
<published>2013-06-20T06:50:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3879#p3879</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3879#p3879"/>
<title type="html"><![CDATA[Re: Commands for invert selection and deselect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3879#p3879"><![CDATA[
Yep, that tutorial on Winaero is the basis for this tutorial <br /><br /><!-- m --><a class="postlink" href="http://www.eightforums.com/tutorials/13586-select-add-remove-context-menu-windows-8-a.html">http://www.eightforums.com/tutorials/13 ... s-8-a.html</a><!-- m --> <br /><br />for creating the cascading select menu. Problem is Windows 7 doesn't have windows.invertselection and windows.selectnone commands in the command store. Could they be exported from Win8 to Win7? I don't know as I don't have Win8.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=905">bamajon1974</a> — Thu Jun 20, 2013 6:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-19T21:40:32-07:00</updated>
<published>2013-06-19T21:40:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3856#p3856</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3856#p3856"/>
<title type="html"><![CDATA[Re: Commands for invert selection and deselect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3856#p3856"><![CDATA[
See if this helps: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-add-any-ribbon-command-to-the-right-click-menu-in-windows-8/">http://winaero.com/blog/how-to-add-any- ... windows-8/</a><!-- m --> and comment there if it's helpful.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jun 19, 2013 9:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bamajon1974]]></name></author>
<updated>2013-06-19T20:34:36-07:00</updated>
<published>2013-06-19T20:34:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3854#p3854</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3854#p3854"/>
<title type="html"><![CDATA[Re: Commands for invert selection and deselect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3854#p3854"><![CDATA[
Ok I see. This looks like coding beyond my non-existent knowledge of writing software. I am guessing that using IFolder code, one could compile a script or dll file to regsvr and add these select all, invert select, and deselect to the context menu of explorer?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=905">bamajon1974</a> — Wed Jun 19, 2013 8:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-19T20:09:43-07:00</updated>
<published>2013-06-19T20:09:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3853#p3853</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3853#p3853"/>
<title type="html"><![CDATA[Re: Commands for invert selection and deselect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3853#p3853"><![CDATA[
The selection manipulation is not done through the registry. I am using the IFolderView interface: <!-- m --><a class="postlink" href="http://msdn.microsoft.com/en-us/library/windows/desktop/bb775616(v=vs.85">http://msdn.microsoft.com/en-us/library ... 16(v=vs.85</a><!-- m -->).aspx<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jun 19, 2013 8:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bamajon1974]]></name></author>
<updated>2013-06-19T20:01:41-07:00</updated>
<published>2013-06-19T20:01:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3852#p3852</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3852#p3852"/>
<title type="html"><![CDATA[Commands for invert selection and deselect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=777&amp;p=3852#p3852"><![CDATA[
What are the registry shell command line codes for the invert selection and deselect commands that are added to classic shell explorer? I am trying to figure out how to make registry entries to add these features to directory and folder right click context menu of explorer. Any help would be appreciated. <br /> <br />Thank you!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=905">bamajon1974</a> — Wed Jun 19, 2013 8:01 pm</p><hr />
]]></content>
</entry>
</feed>