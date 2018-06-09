<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=4561" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-04-25T08:26:23-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=4561</id>
<entry>
<author><name><![CDATA[codenotes]]></name></author>
<updated>2015-04-25T08:26:23-07:00</updated>
<published>2015-04-25T08:26:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19110#p19110</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19110#p19110"/>
<title type="html"><![CDATA[Re: creating a full context menu/QueryContextMenu()]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19110#p19110"><![CDATA[
Yeah, I will really go through MenuCommands and see if I can isolate anything.  I bet it has to do with the PIDL or object.  I am starting from a string filename, getting the PIDL, using SHParseDisplayName, and then pulling up a context on that.   I bet that that PIDL is somehow different (relative vs absolute) or something subtle like that.  I really appreciate the help here. If I get this figured out, I will post the result.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10087">codenotes</a> — Sat Apr 25, 2015 8:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-04-25T08:18:45-07:00</updated>
<published>2015-04-25T08:18:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19109#p19109</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19109#p19109"/>
<title type="html"><![CDATA[Re: creating a full context menu/QueryContextMenu()]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19109#p19109"><![CDATA[
Yeah, my guess was that you are running in multithreaded apartment, which would trip some of the shell extensions which are designed to run single-threaded.<br />But if you do CoInitialize(NULL) it should be fine.<br /><br />I don't know what else to tell you. There is nothing more to it, nothing to concatenate manually. Take a look at the Classic Shell sources and try to isolate the context menu code from MenuCommands.cpp.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Apr 25, 2015 8:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[codenotes]]></name></author>
<updated>2015-04-25T08:02:24-07:00</updated>
<published>2015-04-25T08:02:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19108#p19108</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19108#p19108"/>
<title type="html"><![CDATA[Re: creating a full context menu/QueryContextMenu()]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19108#p19108"><![CDATA[
Initializing COM with CoInitialize(0); Not good?<br /><br />Interesting behavior when I play around there, though...If I callCoInitializeEx(0, COINIT_MULTITHREADED) instead of APARTMENT, one of the menu items (a third party one) doesn't appear. So Maybe it has something to do with COM initialization...but there are only two ways to initialize things that I know of.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10087">codenotes</a> — Sat Apr 25, 2015 8:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[codenotes]]></name></author>
<updated>2015-04-25T08:00:43-07:00</updated>
<published>2015-04-25T08:00:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19107#p19107</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19107#p19107"/>
<title type="html"><![CDATA[Re: creating a full context menu/QueryContextMenu()]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19107#p19107"><![CDATA[
I'd add that Raymond Chen's blog (that you link to) is the original source I am using. That also brings up just the truncated menu. I've been back and forth through his 11 part tutorial. <br /><br />I think what is happening is that I am supposed to &quot;compose&quot; the different menus together, ie, cocreate all the exentsions, query their context menu and merge them all. Raymond mentioned this. Perhaps I should be going through the registry and doing that...I think that'd work, however I don't see any other examples or samples every doing this.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10087">codenotes</a> — Sat Apr 25, 2015 8:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-04-25T07:58:17-07:00</updated>
<published>2015-04-25T07:58:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19106#p19106</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19106#p19106"/>
<title type="html"><![CDATA[Re: creating a full context menu/QueryContextMenu()]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19106#p19106"><![CDATA[
How are you initializing COM?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Apr 25, 2015 7:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[codenotes]]></name></author>
<updated>2015-04-25T07:55:36-07:00</updated>
<published>2015-04-25T07:55:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19105#p19105</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19105#p19105"/>
<title type="html"><![CDATA[Re: creating a full context menu/QueryContextMenu()]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19105#p19105"><![CDATA[
Yeah, count is returning 10 items, I actually have 11 on the menu (perhaps one of the items is special, maybe &quot;properties&quot;).   I have about 3 or 4 different implementations of this menu code from different open source projects, tutorials, etc.  And most these are using IContextMenu3 and 4 as I understand these are important for processing messages and owner draw.  But in every case, sample and approach, all applications just popup the smaller menu.   I noticed the things that are missing in my menu are all thins that  are all in */ContextMenuHandlers in the registry..3rd party shell extensions. So maybe these are shortcut extensions and property sheet extensions, but I would still think these should popup.  So it is a real mystery...tried on multiple machines, always the same. <br /><br />Could it have something to do with the parent of the item maybe?  I notice all the shell functions are very focused on the parent folder of the object.   In my case, I have isolated files and am not getting to them recursively from the parent.  I<br /><br />Classic Shell DOES bring up the entire menu.  When you search in classic shell,the files and objects are assembled,and right-clicking them does bring up the full menu.  But I have not isolated the exact chain of events in classic shell yet.  So far I don't see much of a difference.  Really stumped on this.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10087">codenotes</a> — Sat Apr 25, 2015 7:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-04-25T07:15:05-07:00</updated>
<published>2015-04-25T07:15:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19104#p19104</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19104#p19104"/>
<title type="html"><![CDATA[Re: creating a full context menu/QueryContextMenu()]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19104#p19104"><![CDATA[
I don't know why you are not getting the rest of the verbs. Maybe you are not initializing COM correctly for the thread, so they can't be created?<br /><br />Also, you may be getting them but they may not display correctly. For that to work you need to forward the messages to IContextMenu2. <!-- m --><a class="postlink" href="http://blogs.msdn.com/b/oldnewthing/archive/2004/09/27/234739.aspx">http://blogs.msdn.com/b/oldnewthing/arc ... 34739.aspx</a><!-- m --><br /><br />To be sure, look at the number of menu items using GetMenuItemCount(hmenu) to see if it matches what you see on screen. If you have fewer items on screen then in hmenu, then some items just don't draw.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Apr 25, 2015 7:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[codenotes]]></name></author>
<updated>2015-04-25T06:57:43-07:00</updated>
<published>2015-04-25T06:57:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19102#p19102</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19102#p19102"/>
<title type="html"><![CDATA[creating a full context menu/QueryContextMenu()]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4561&amp;p=19102#p19102"><![CDATA[
I am a big fan of classic shell; I am developing a tool and am trying to replicate a little of what classic shell is able to do via right-click context menus.  (Specifically, I am merging dnGrep with VoidSoft's &quot;Everything&quot; instant hard drive search.) Have spent a few days reading and researching everything, and have looked through shell code as well, but not finding a solution; hoping for a pointer. <br /><br />Specifically, I can create a context menu on an item much as explorer does, the context menu appears and operates via code like this:<br /><br />if (SUCCEEDED(GetUIObjectOfFile(hwnd, L&quot;C:\\temp\\somefile.txt&quot;,<br />IID_IContextMenu, (void**)&amp;pcm))) {<br />HMENU hmenu = CreatePopupMenu();<br />if (hmenu) {<br />if (SUCCEEDED(pcm-&gt;QueryContextMenu(hmenu, 0,<br />SCRATCH_QCM_FIRST, SCRATCH_QCM_LAST,<br />CMF_NORMAL))) {<br />int iCmd = TrackPopupMenuEx(<br /><br /><br /><br />This works, but the menu I get is minimal.  I notice that I do not get any of the menu items for any shell extensions that are in the ContextMenuHandler area of the registry.   In short, when you right click on items in Explorer or Classic shell, you get my minimal menu, but also the installed ShellExtension items (like 7-Zip, winzip, toirtoise GIT, etc.).  What am I missing such that I can not bring these items up in my context menu?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10087">codenotes</a> — Sat Apr 25, 2015 6:57 am</p><hr />
]]></content>
</entry>
</feed>