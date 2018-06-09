<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=3433" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-09-30T23:39:34-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=3433</id>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-09-30T23:39:34-07:00</updated>
<published>2015-09-30T23:39:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=22663#p22663</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=22663#p22663"/>
<title type="html"><![CDATA[Re: AHK Script to remove Address bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=22663#p22663"><![CDATA[
I have updated the script and the executable. Now it works better!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Wed Sep 30, 2015 11:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powerplayer]]></name></author>
<updated>2015-09-05T01:18:06-07:00</updated>
<published>2015-09-05T01:18:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=21803#p21803</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=21803#p21803"/>
<title type="html"><![CDATA[Re: Address bar remover.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=21803#p21803"><![CDATA[
<div class="quotetitle">R.O.B. wrote:</div><div class="quotecontent"><br />The navigation pane can already be hidden. Classic Shell even has an option for it.<br /></div><br /><br />No the navigation folderband remains and the adressbar too Ivo should add these 2 tweaks asap<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1059">powerplayer</a> — Sat Sep 05, 2015 1:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[R.O.B.]]></name></author>
<updated>2015-02-08T19:18:15-07:00</updated>
<published>2015-02-08T19:18:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=17841#p17841</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=17841#p17841"/>
<title type="html"><![CDATA[Re: Address bar remover.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=17841#p17841"><![CDATA[
The navigation pane can already be hidden. Classic Shell even has an option for it.<br /><br />Anyway, this would be nice as an option for Classic Shell, especially if it could replace the default address bar with a classic xp style one.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3546">R.O.B.</a> — Sun Feb 08, 2015 7:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[powerplayer]]></name></author>
<updated>2015-01-31T23:41:48-07:00</updated>
<published>2015-01-31T23:41:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=17687#p17687</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=17687#p17687"/>
<title type="html"><![CDATA[Re: Address bar remover.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=17687#p17687"><![CDATA[
that need to be added to classicshell along with navigation panel hider<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1059">powerplayer</a> — Sat Jan 31, 2015 11:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-09-30T23:39:05-07:00</updated>
<published>2014-12-09T18:48:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=16007#p16007</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=16007#p16007"/>
<title type="html"><![CDATA[AHK Script to remove Address bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3433&amp;p=16007#p16007"><![CDATA[
Here is a program that removes the Address bar/Navigation bar from File explorer windows.<br /><br />It is written in AHK, here is the source code, t5he exe is attached:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">#NoTrayIcon<br />#NoEnv<br />Gui +LastFound<br />hWnd := WinExist()<br />SetControlDelay, -1<br />SetBatchLines -1<br /><br />DllCall( &quot;RegisterShellHookWindow&quot;, UInt,hWnd )<br />MsgNum := DllCall( &quot;RegisterWindowMessage&quot;, Str,&quot;SHELLHOOK&quot; )<br />OnMessage( MsgNum, &quot;ShellMessage&quot; )<br />Return<br /><br />ShellMessage(wParam,lParam) {<br />If (wParam = 1 ) ; HSHELL_WINDOWCREATED := 1<br />{<br /><br />WinGetClass, WinClass, ahk_id %lParam%<br />if (WinClass = &quot;CabinetWClass&quot;) {<br /><br />ControlGetPos, ,y1,,ha,ReBarWindow321, ahk_id %lParam%<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlGetPos,,y2,,h1,ShellTabWindowClass1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />WinSet, Redraw,, ahk_id %lParam%<br /><br />Sleep, 100<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlGetPos,,y2,,h1,ShellTabWindowClass1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />WinSet, Redraw,, ahk_id %lParam%<br /><br />Sleep, 100<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlGetPos,,y2,,h1,ShellTabWindowClass1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />WinSet, Redraw,, ahk_id %lParam%<br /><br />Sleep, 100<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />WinSet, Redraw,, ahk_id %lParam%<br /><br />}<br />}<br />}</div><br /><img src="http://storage8.static.itmages.ru/i/14/1123/h_1416749644_6681554_abfce282f0.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Tue Dec 09, 2014 6:48 pm</p><hr />
]]></content>
</entry>
</feed>