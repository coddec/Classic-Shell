<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=7148" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-12-16T21:00:00-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=7148</id>
<entry>
<author><name><![CDATA[PaulBags]]></name></author>
<updated>2016-12-16T21:00:00-07:00</updated>
<published>2016-12-16T21:00:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30832#p30832</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30832#p30832"/>
<title type="html"><![CDATA[Re: Losing my changes because I forget I have to click 'ok']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30832#p30832"><![CDATA[
Ok using <a href="http://www.donationcoder.com/Software/Skrommel/#NoClose" class="postlink">this</a> for now I guess, still would be better if Classic Shell fixed it's shoddy behaviour.<br /><br />Edit, now using this:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Run, &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -settings,,,<br />WinWait, Settings for Classic Start Menu<br />DisableCloseButton(WinExist())<br /><br />DisableCloseButton(hWnd) {<br /> hSysMenu:=DllCall(&quot;GetSystemMenu&quot;,&quot;Int&quot;,hWnd,&quot;Int&quot;,FALSE)<br /> nCnt:=DllCall(&quot;GetMenuItemCount&quot;,&quot;Int&quot;,hSysMenu)<br /> DllCall(&quot;RemoveMenu&quot;,&quot;Int&quot;,hSysMenu,&quot;UInt&quot;,nCnt-1,&quot;Uint&quot;,&quot;0x400&quot;)<br /> DllCall(&quot;RemoveMenu&quot;,&quot;Int&quot;,hSysMenu,&quot;UInt&quot;,nCnt-2,&quot;Uint&quot;,&quot;0x400&quot;)<br /> DllCall(&quot;DrawMenuBar&quot;,&quot;Int&quot;,hWnd)<br />}<br /><br />Exit</div><br /><br />I don't have to have it running in the tray persistently but I do have to call it to open settings, which means disabling the 'right click on start menu' since there's no way to change that menus actions.<br /><br /><br />Still hoping for a proper fix to this problem in classic shell though.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16283">PaulBags</a> — Fri Dec 16, 2016 9:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PaulBags]]></name></author>
<updated>2016-12-16T19:37:00-07:00</updated>
<published>2016-12-16T19:37:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30830#p30830</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30830#p30830"/>
<title type="html"><![CDATA[Re: Losing my changes because I forget I have to click 'ok']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30830#p30830"><![CDATA[
This is really bugging me. Shame that Classic Shell is closed source. I found the relevant dialog in ClassicStartMenuDLL.dll using res hacker but I have zero idea how to remove the close button and/or make the default close behaviour &quot;save&quot;.<br /><br />Might have a look around to see if there's a program that detect a specific dialog from a specific program and prevent it from closing with red X and alt+f4.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16283">PaulBags</a> — Fri Dec 16, 2016 7:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PaulBags]]></name></author>
<updated>2016-12-15T02:55:02-07:00</updated>
<published>2016-12-15T02:55:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30815#p30815</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30815#p30815"/>
<title type="html"><![CDATA[Re: Losing my changes because I forget I have to click 'ok']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30815#p30815"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Most programs don't have live settings. Since Classic Start Menu has many settings that are live, there is no Apply button. It will only increase the number of clicks: change some setting -&gt; Apply -&gt; open Start menu to test it.<br /><br />Also, the settings dialog is shared with Classic Explorer and Classic IE where almost all settings require re-opening the Explorer or IE window so the OK button works like the Apply button for those.<br /><br />You can get used to lack of the Apply button because the changes are all still cancellable when you press Cancel. Also you can use keyboard shortcuts. Ctrl+Enter=OK, Esc=Cancel for the Settings dialog.<br /></div><br /><br />I don't think you read my post at all, or at least I don't think you understood it.<br /><br /><div class="quotetitle">PaulBags wrote:</div><div class="quotecontent"><br />I'd like an apply button (preferably), or to be asked to save changes on close/cancel. Sometimes I'm multitasking and forget that I need to explicitly click ok or I lose all of the menu changes I've been working on - especially since changes go live instantly. Currently to save my work as I go I'd have to click ok, and then reopen settings. Most programs/dialogs have a way to save what you're doing without closing the program/dialog, usually in settings dialogs this is an apply button.<br /><br />I searched and found some threads requesting an apply button before, their reasons however were not as compelling.<br /></div><br /><br />Because there is no apply button and changes are live it is <em>very</em> easy to forget changes must to &quot;okayed&quot; to be saved - this is very abnormal behaviour. Maybe the label &quot;save&quot; button would suit better than &quot;apply&quot;? There is a <strong>lot</strong> more clicks involved in rebuilding lost menu changes. There are also more clicks involved reloading the settings dialog because the only way to save changes while still making them closes the dialog unnecessarily.<br /><br />Also a close button is not a &quot;cancel&quot; or &quot;discard changes&quot; button, and it's unreasonable that it act as such. Not really sure esc should be acting that way either, at least not without confirmation.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16283">PaulBags</a> — Thu Dec 15, 2016 2:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-12-03T21:30:20-07:00</updated>
<published>2016-12-03T21:30:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30696#p30696</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30696#p30696"/>
<title type="html"><![CDATA[Re: Losing my changes because I forget I have to click 'ok']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30696#p30696"><![CDATA[
Most programs don't have live settings. Since Classic Start Menu has many settings that are live, there is no Apply button. It will only increase the number of clicks: change some setting -&gt; Apply -&gt; open Start menu to test it.<br /><br />Also, the settings dialog is shared with Classic Explorer and Classic IE where almost all settings require re-opening the Explorer or IE window so the OK button works like the Apply button for those.<br /><br />You can get used to lack of the Apply button because the changes are all still cancellable when you press Cancel. Also you can use keyboard shortcuts. Ctrl+Enter=OK, Esc=Cancel for the Settings dialog.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Dec 03, 2016 9:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PaulBags]]></name></author>
<updated>2016-12-03T13:40:13-07:00</updated>
<published>2016-12-03T13:40:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30688#p30688</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30688#p30688"/>
<title type="html"><![CDATA[Losing my changes because I forget I have to click 'ok']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7148&amp;p=30688#p30688"><![CDATA[
I'd like an apply button (preferably), or to be asked to save changes on close/cancel. Sometimes I'm multitasking and forget that I need to explicitly click ok or I lose all of the menu changes I've been working on - especially since changes go live instantly. Currently to save my work as I go I'd have to click ok, and then reopen settings. Most programs/dialogs have a way to save what you're doing without closing the program/dialog, usually in settings dialogs this is an apply button.<br /><br />I searched and found some threads requesting an apply button before, their reasons however were not as compelling.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16283">PaulBags</a> — Sat Dec 03, 2016 1:40 pm</p><hr />
]]></content>
</entry>
</feed>