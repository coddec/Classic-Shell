<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=6847" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-09-19T02:35:12-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=6847</id>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2016-09-19T02:35:12-07:00</updated>
<published>2016-09-19T02:35:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29419#p29419</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29419#p29419"/>
<title type="html"><![CDATA[Re: Concerning FFlags]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29419#p29419"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />The tweak switches the Explorer control from ItemsView to SysListView32. In the older control, there is one less View. Tiles View becomes Extended Tiles (similar to Content View of the newer control), the List View also gets full row selection like the Details view, and there is no regular Tiles View. The spacing is also narrower in more compact views. And it requires running the AHK script to fix some of the side effects but not all.<br /></div><br /><br />Folder Options X allows to use SysListView32 without desktop mode. It does not require AHK. What Desktop Mode is about is that it allows 32px icons, which makes icons look sharper. Without it one simply could use Folder Options X and change the control to SysListView32.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Mon Sep 19, 2016 2:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-19T00:31:44-07:00</updated>
<published>2016-09-19T00:31:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29417#p29417</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29417#p29417"/>
<title type="html"><![CDATA[Re: Concerning FFlags]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29417#p29417"><![CDATA[
The tweak switches the Explorer control from ItemsView to SysListView32. In the older control, there is one less View. Tiles View becomes Extended Tiles (similar to Content View of the newer control), the List View also gets full row selection like the Details view, and there is no regular Tiles View. The spacing is also narrower in more compact views. And it requires running the AHK script to fix some of the side effects but not all.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Sep 19, 2016 12:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2016-09-18T21:42:13-07:00</updated>
<published>2016-09-18T21:42:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29416#p29416</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29416#p29416"/>
<title type="html"><![CDATA[Re: Concerning FFlags]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29416#p29416"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />I tried FWF_DESKTOP. It seems to break the scroll bar in Explorer and the &quot;List View&quot; turns into &quot;Small Icons view&quot; - so this change is not without unwanted side effects.<br /></div><br /><br />Yes, the icons get aligned vertically. But this can be fixed by removing certain attributes from ListView control, for instance this AHK script removes vertical align and adds a scrollbar:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Control, Style, -0x2800, SysListView321, ahk_id %lParam%</div><br /><br />I do not understand what you mean under &quot;changes to the small icons view&quot;. <br /><br />This is the full version of the script that would fix the issues when FWF_DESKTOP is enabled:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">#NoTrayIcon<br />#NoEnv<br />Gui +LastFound<br />hWnd := WinExist()<br />SetControlDelay, -1<br />SetBatchLines -1<br /><br />DllCall( &quot;RegisterShellHookWindow&quot;, UInt,hWnd )<br />MsgNum := DllCall( &quot;RegisterWindowMessage&quot;, Str,&quot;SHELLHOOK&quot; )<br />OnMessage( MsgNum, &quot;ShellMessage&quot; )<br />Return<br /><br />ShellMessage(wParam,lParam) {<br />If (wParam = 1 or wParam = 6) ; HSHELL_WINDOWCREATED := 1<br />{<br /><br />WinGetClass, WinClass, ahk_id %lParam%<br />if (WinClass = &quot;CabinetWClass&quot;) {<br /><br />Control, Style, -0x2800, FolderView, ahk_id %lParam%<br />Control, Style, -0x2800, SysListView321, ahk_id %lParam%<br />}<br /><br />}<br /><br />}</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Sep 18, 2016 9:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-18T06:16:30-07:00</updated>
<published>2016-09-18T06:16:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29412#p29412</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29412#p29412"/>
<title type="html"><![CDATA[Re: Concerning FFlags]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29412#p29412"><![CDATA[
I tried FWF_DESKTOP. It seems to break the scroll bar in Explorer and the &quot;List View&quot; turns into &quot;Small Icons view&quot; - so this change is not without unwanted side effects.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Sep 18, 2016 6:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-18T06:10:28-07:00</updated>
<published>2016-09-18T06:10:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29411#p29411</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29411#p29411"/>
<title type="html"><![CDATA[Re: Concerning FFlags]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29411#p29411"><![CDATA[
Correct, Classic Shell does not touch the registry to achieve most of its features. The one exception are the new settings to show hidden files and the file extensions.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Sep 18, 2016 6:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2016-09-18T03:24:13-07:00</updated>
<published>2016-09-18T03:24:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29410#p29410</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29410#p29410"/>
<title type="html"><![CDATA[Re: Concerning FFlags]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29410#p29410"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />According to what Ivo told me, Classic Shell's Explorer component does it programmatically without any reg keys. Folder Options X also does it programmatically? If you do it via Registry keys, it sometimes messes up the view of other folder templates.<br /></div><br /><br />Folder Options X actually does it via registry keys. I browsed its source code.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Sep 18, 2016 3:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-17T23:08:02-07:00</updated>
<published>2016-09-17T23:08:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29408#p29408</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29408#p29408"/>
<title type="html"><![CDATA[Re: Concerning FFlags]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29408#p29408"><![CDATA[
According to what Ivo told me, Classic Shell's Explorer component does it programmatically without any reg keys. Folder Options X also does it programmatically? If you do it via Registry keys, it sometimes messes up the view of other folder templates.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Sep 17, 2016 11:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2016-09-17T14:08:57-07:00</updated>
<published>2016-09-17T14:08:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29400#p29400</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29400#p29400"/>
<title type="html"><![CDATA[Concerning FFlags]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6847&amp;p=29400#p29400"><![CDATA[
Classic Explorer has a feature &quot;Show sorting headers in all view modes&quot;. I think it is done via modifying FFlags key in the registry at runtime (if I am wrong please correct me).<br /><br />If it is so, then more interesting things can be done with that key. Particularly, the utility Folder Options X allows the following features through modifying FFlags:<br /><br />* Disable full row select (a classical mode)<br /><br />* Column headers in all views (exactly what Classic shell already can do)<br /><br />* Enable icon reordering. It changes the used widget from IconView to ListView, which was used in previous Windows versions Win95-Vista. This mode makes icons area more compact and classical.<br /><br />* Keep focus on file list view (do not know what is it).<br /><br />But we with guys from WinClassic forum have found one more mode that is not included in Folder Options X. <br />Particularly, if to set FFlags to FWF_DESKTOP (0x20), the desktop mode gets enabled (the same as on the desktop but in folders!). <br />Particularly, one can set the icon size exactly to 32px (or even smaller), while still having labels below! This make a lot of icons look much better.<br /><br />It would be great if Classic Shell included all these options, especially forcing ListView widget and Desktop mode.<br /><br />But even better would be if it were possible to set a custom FFlags through Classic Explorer settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sat Sep 17, 2016 2:08 pm</p><hr />
]]></content>
</entry>
</feed>