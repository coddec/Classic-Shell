<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=3334" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-12-08T17:16:47-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=3334</id>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-12-08T17:16:47-07:00</updated>
<published>2015-12-08T17:16:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23921#p23921</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23921#p23921"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23921#p23921"><![CDATA[
I have updated also the download file in the beginnig of the topic. This script does not remove the address bar, only fixes the border:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">#NoTrayIcon<br />#NoEnv<br />Gui +LastFound<br />hWnd := WinExist()<br />SetControlDelay, -1<br /><br />DllCall( &quot;RegisterShellHookWindow&quot;, UInt,hWnd )<br />MsgNum := DllCall( &quot;RegisterWindowMessage&quot;, Str,&quot;SHELLHOOK&quot; )<br />OnMessage( MsgNum, &quot;ShellMessage&quot; )<br />Return<br /><br />ShellMessage(wParam,lParam) {<br />If (wParam = 1 or wParam = 6) ; HSHELL_WINDOWCREATED := 1<br />{<br />WinGetClass, WinClass, ahk_id %lParam%<br /><br />if (WinClass = &quot;CabinetWClass&quot;) {<br />Control, ExStyle, +0x200, SysTreeView321, ahk_id %lParam%<br />Control, ExStyle, +0x200, FolderView, ahk_id %lParam%<br /><br />ControlGetPos,,,,h, ShellTabWindowClass1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,,,,h+1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,,,,h, ahk_id %lParam%<br /><br />}<br /><br />}<br />}</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Tue Dec 08, 2015 5:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-12-08T14:28:57-07:00</updated>
<published>2015-12-08T14:28:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23918#p23918</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23918#p23918"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23918#p23918"><![CDATA[
This is an updated script. It supports navigational mode browsing (open each folder in separate window) and the navigational tree. It also removes the address bar. Remember that you would need to use the Folder Options X utility as described above for the fixed borders to work. The executable for the script is in the archive.<br /><br /><img src="http://storage9.static.itmages.ru/i/15/1208/h_1449560819_4366313_85b4284633.png" alt="" /><br /><br />Enjoy.<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">#NoTrayIcon<br />#NoEnv<br />Gui +LastFound<br />hWnd := WinExist()<br />SetControlDelay, -1<br />SetBatchLines -1<br /><br />DllCall( &quot;RegisterShellHookWindow&quot;, UInt,hWnd )<br />MsgNum := DllCall( &quot;RegisterWindowMessage&quot;, Str,&quot;SHELLHOOK&quot; )<br />OnMessage( MsgNum, &quot;ShellMessage&quot; )<br />Return<br /><br />ShellMessage(wParam,lParam) {<br />If (wParam = 1 or wParam = 6) ; HSHELL_WINDOWCREATED := 1<br />{<br /><br />WinGetClass, WinClass, ahk_id %lParam%<br />if (WinClass = &quot;CabinetWClass&quot;) {<br /><br />;ControlGetPos,x,,w,,DirectUIHWND2, ahk_id %lParam%<br />;ControlMove, ShellTabWindowClass1,x-1,,w+1,, ahk_id %lParam%<br /><br />Control, ExStyle, +0x200, FolderView, ahk_id %lParam%<br />Control, ExStyle, +0x200, SysTreeView321, ahk_id %lParam%<br /><br />If (wParam = 6){<br />ControlGetPos,,,,h, ShellTabWindowClass1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,,,,h+1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,,,,h, ahk_id %lParam%<br />}<br /><br />ControlGetPos, ,y1,,ha,ReBarWindow321, ahk_id %lParam%<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlGetPos,,y2,,h1,ShellTabWindowClass1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />WinSet, Redraw,, ahk_id %lParam%<br /><br />Sleep, 100<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlGetPos,,y2,,h1,ShellTabWindowClass1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />WinSet, Redraw,, ahk_id %lParam%<br /><br />Sleep, 100<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlGetPos,,y2,,h1,ShellTabWindowClass1, ahk_id %lParam%<br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />WinSet, Redraw,, ahk_id %lParam%<br /><br />Sleep, 100<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />WinSet, Redraw,, ahk_id %lParam%<br /><br />Sleep, 100<br /><br />SendMessage, 0x0082,,,ReBarWindow321, ahk_id %lParam%<br /><br />Control, Hide,, WorkerW1, ahk_id %lParam%<br />Control, Hide,, ReBarWindow321, ahk_id %lParam%<br /><br />ControlMove, ShellTabWindowClass1,, y1,,y2-y1+h1, ahk_id %lParam%<br />ControlMove, ReBarWindow321,,,,0, ahk_id %lParam%<br /><br />;here<br />}<br /><br />if (WinClass = &quot;NotebookFrame&quot;) {<br />Control, ExStyle, ^0x200, NotebookContent1, ahk_id %lParam%<br />WinGetPos, , , , h, ahk_id %lParam%<br />WinMove, ahk_id %lParam%,,,,,h-1<br />;WinMove, ahk_id %lParam%,,,,,h<br /><br />}<br /><br />}<br /><br />}</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Tue Dec 08, 2015 2:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-10-28T16:28:11-07:00</updated>
<published>2015-10-28T16:28:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23195#p23195</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23195#p23195"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23195#p23195"><![CDATA[
<div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />Your .exe's that you included didn't seem to popup on my system either. I turned avast off so I could run them, but that didn't seem to work.<br /></div><br /><br />Follow the advice above, install Folder Options X, check &quot;Enable Icon Reordering&quot; and then run my script.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Wed Oct 28, 2015 4:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[redblade8]]></name></author>
<updated>2015-10-19T15:48:46-07:00</updated>
<published>2015-10-19T15:48:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23042#p23042</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23042#p23042"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=23042#p23042"><![CDATA[
<div class="quotetitle">Anixx wrote:</div><div class="quotecontent"><br />Is it possible to include a feature that would implement this new fascinating find?<br /><br /><br />There is a great open-source utility <a href="http://www.softpedia.com/get/Programming/Debuggers-Decompilers-Dissasemblers/zero-Dump.shtml" class="postlink">Zero Dump</a> but unfortunately it is abandoned. With this utility it is possible to modify control styles of the running windows. Particularly, it is possible to make the FolderView in Windows Explorer in Vista+ to appear like in Classic Windows, with the 3D border around:<br /><br /><img src="http://storage5.static.itmages.ru/i/14/1107/h_1415376864_7087240_1b2b55ea65.png" alt="" /><br /><br />This can be done by setting the property &quot;Client Edge&quot; in the extended style tab in ZeroDump. This sets the control style to the value 56001348.<br /><br />Unfortunately the utility can do this only with one Explorer window and every time the procedure should be repeated manually. It would be great if Classic Shell could do the same every time it loads.<br /><br /><br /><img src="http://storage7.static.itmages.ru/i/14/1107/h_1415398454_3906601_1ce207a532.png" alt="" /><br /><br /><br /><img src="http://storage5.static.itmages.ru/i/14/1107/h_1415398543_9603971_802d05137d.png" alt="" /><br /></div><br /><br /><br />I found a good search utility a few years ago called 'locate32' it looks like the search utility in windows 98, and it finds everything fairly fast after indexing everything .<br /><br />Ill try out your script for zero dump, I was searching online to see if I could find more information about zero dump, and I found this post.<br /><br />Edit: Using zero dump on windows 10 and turning the client edge setting on, doesn't seem to do anything. Your .exe's that you included didn't seem to popup on my system either. I turned avast off so I could run them, but that didn't seem to work.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1899">redblade8</a> — Mon Oct 19, 2015 3:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hitokage]]></name></author>
<updated>2015-10-07T00:52:58-07:00</updated>
<published>2015-10-07T00:52:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22839#p22839</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22839#p22839"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22839#p22839"><![CDATA[
<div class="quotetitle">Anixx wrote:</div><div class="quotecontent"><br />Do you know there is a similar 3D border fix for Firefox? Add something like this to Stylish:<br /></div>No I didn't - I be taking a look at that. Although it never really bothered me in Firefox (or Pale Moon) for some reason - it might be because of the (full/complete) theme I've been using.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11668">hitokage</a> — Wed Oct 07, 2015 12:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-12-04T21:23:20-07:00</updated>
<published>2015-10-06T17:46:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22835#p22835</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22835#p22835"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22835#p22835"><![CDATA[
<div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />I think I'm going to be looking at some of the third party search tools. Most of the time when I'm running a search I know roughly where something is, and liked being able to limit the search to the folder I'm in along with any subfolders.<br /></div><br />If you find a good utility, please share it.<br /><br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />Having to use extra utilities to restore things to how the were before is frustrating. This is why I was holding off from moving to Windows 7<br /></div><br /><br />I use about 10 third-party utilities to make Win8 to look classic. But actually the Address Bar remover works better under Win8 with classic theme than Win7 because DWM make the moment when the address bar disappears invisible for the most time. In Win8 you see it in the process less often than in Win7.<br /><br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />This is also why I switched away from Firefox to <a href="http://www.palemoon.org/" class="postlink">Pale Moon</a>.<br /></div><br /><br />Do you know there is a similar 3D border fix for Firefox? Add something like this to Stylish:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">browser {<br />padding:1px !important;<br />}<br /><br />.browserStack {<br />border-top: 0px solid ThreeDShadow !important; <br />border-left: 1px solid ThreeDShadow !important;<br />border-right: 1px solid ThreeDHighlight !important;<br />border-bottom: 1px solid ThreeDHighlight !important;<br />}<br /><br />.browserStack:before {<br />content:&quot;\a0&quot; !important;<br />display:block !important;<br />padding:2px 0 !important;<br />line-height:1px !important;<br />border-top:1px solid ThreeDDarkShadow !important;<br />border-left:1px solid ThreeDDarkShadow !important; <br />border-right:1px solid ThreeDLightShadow !important; <br />border-bottom:1px solid ThreeDLightShadow !important; <br />}<br /></div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Tue Oct 06, 2015 5:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hitokage]]></name></author>
<updated>2015-10-06T09:57:13-07:00</updated>
<published>2015-10-06T09:57:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22826#p22826</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22826#p22826"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22826#p22826"><![CDATA[
<div class="quotetitle">Anixx wrote:</div><div class="quotecontent"><br />But in any case, I have updated the script to work win any widget.<br /></div>The new version still doesn't work for me. If I use Folder Option X with the setting you mentioned, both the old and new version work fine.<br /><br /><div class="quotetitle">Anixx wrote:</div><div class="quotecontent"><br />You can press Ctrl+F and type the things you want to search. The words will appear in the caption of the window. But I usually use the search embeeded in Classic Shell.<br /></div>I think I'm going to be looking at some of the third party search tools. Most of the time when I'm running a search I know roughly where something is, and liked being able to limit the search to the folder I'm in along with any subfolders.<br /><br /><br />Having to use extra utilities to restore things to how the were before is frustrating. This is why I was holding off from moving to Windows 7 - at least XP let you choose. This is also why I switched away from Firefox to <a href="http://www.palemoon.org/" class="postlink">Pale Moon</a>. I am not a fan of the current trend of supposed &quot;minimalism&quot; UI design.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11668">hitokage</a> — Tue Oct 06, 2015 9:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-10-05T21:49:36-07:00</updated>
<published>2015-10-05T21:49:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22816#p22816</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22816#p22816"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22816#p22816"><![CDATA[
<div class="quotetitle">hitokage wrote:</div><div class="quotecontent"><br />EDIT (yes, nearly twelve whole hours later) - Anixx, I'm also curious as to how you have searching set up. I realized there is a problem if I hide the search box and/or the address bar.<br /></div><br /><br />You can press Ctrl+F and type the things you want to search. The words will appear in the caption of the window. But I usually use the search embeeded in Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Mon Oct 05, 2015 9:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-10-05T21:50:36-07:00</updated>
<published>2015-10-05T21:40:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22815#p22815</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22815#p22815"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22815#p22815"><![CDATA[
<div class="quotetitle">hitokage wrote:</div><div class="quotecontent"><br />I've been wanting a fix for this forever. I found this after looking through your other posts on this forum after seeing your screenshot in the <a href="http://www.classicshell.net/forum/viewtopic.php?f=8&amp;t=3433" class="postlink">AHK Script to remove Address bar</a> thread which had this fixed. It doesn't seem to work for me though - running borderfix.exe (shows in task manager) and opening a folder. I do have it set to use multiple windows, and I tried borderfix_onewindow (after killing the borderfix task) just in case. I even experimented with the old Zero Dump utility mentioned in your first post, and it too doesn't seem to work. Do you have any ideas of what I could be doing wrong? I'm using Windows 7 x64, and the address bar remover tool works fine.<br /></div><br /><br />My bad! I possibly failed to mention that in this older version it is setting the border referring to the class of the element rather than caption. The class I was using (and use now) in ListView rather than IconView. So this version does not work with the IconView class which is used in Win7+ by default.<br /><br />For this version to work one has to download utility &quot;Folder Options X&quot; and check &quot;Enable Icon Reordering&quot;. This option will make the appearance of the folders even more classic, because it uses the widget ListView which has been used for this purpose from Windows95 till Vista. Alternatively it can be changed via registry (but registry method is less reliable).<br /><br />But in any case, I have updated the script to work win any widget.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Mon Oct 05, 2015 9:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-10-05T21:38:15-07:00</updated>
<published>2015-10-05T21:38:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22814#p22814</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22814#p22814"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22814#p22814"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />Zero dump, it said somewhere that the developer is no-longer working on it, so its likely not to work on win 10. though it should on 7<br /></div><br />It works on Win8.1. It should work on Win10 as well.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Mon Oct 05, 2015 9:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2015-10-05T21:26:52-07:00</updated>
<published>2015-10-05T21:26:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22813#p22813</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22813#p22813"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22813#p22813"><![CDATA[
Zero dump, it said somewhere that the developer is no-longer working on it, so its likely not to work on win 10. though it should on 7<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Oct 05, 2015 9:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-10-05T21:04:27-07:00</updated>
<published>2015-10-05T21:04:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22812#p22812</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22812#p22812"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22812#p22812"><![CDATA[
This script combines the two tasks: removes the address bar and adds the 3D border. Note though that it works properly only when &quot;open each folder in separate window&quot; option is enabled.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Mon Oct 05, 2015 9:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-10-05T21:01:11-07:00</updated>
<published>2015-10-05T21:01:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22811#p22811</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22811#p22811"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22811#p22811"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />Are you refering to Anixx's ahk script? or the one in the first post?<br />The first one was abandoned, but windows 7 is old enough that it might still be compatible.<br /></div><br />Sorry, but what is abandoned?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Mon Oct 05, 2015 9:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hitokage]]></name></author>
<updated>2015-10-03T23:50:21-07:00</updated>
<published>2015-10-03T23:50:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22763#p22763</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22763#p22763"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22763#p22763"><![CDATA[
I'm referring to Anixx's script, which is what I'd be willing to leave running, but I did try the other program in the first post to see if it would work when the script didn't.<br /><br />EDIT (yes, nearly twelve whole hours later) - Anixx, I'm also curious as to how you have searching set up. I realized there is a problem if I hide the search box and/or the address bar.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11668">hitokage</a> — Sat Oct 03, 2015 11:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2015-10-03T13:24:22-07:00</updated>
<published>2015-10-03T13:24:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22755#p22755</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22755#p22755"/>
<title type="html"><![CDATA[Re: Utility to have 3D border around folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3334&amp;p=22755#p22755"><![CDATA[
Are you refering to Anixx's ahk script? or the one in the first post?<br />The first one was abandoned, but windows 7 is old enough that it might still be compatible.<br /><br />Also I dont know for sure, but displayfusion (25$) does have this feature, among others, for windows 8/8.1 (and im not sure if it applies to windows 7, but there is a free trial to find out) Not that I (or likely you) would pay 25$ for the fix your looking for <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat Oct 03, 2015 1:24 pm</p><hr />
]]></content>
</entry>
</feed>