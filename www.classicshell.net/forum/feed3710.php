<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=4555" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-10-02T19:29:06-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=4555</id>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-10-02T19:29:06-07:00</updated>
<published>2015-10-02T19:29:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=22740#p22740</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=22740#p22740"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=22740#p22740"><![CDATA[
Classic theme on any operating system, Win8 or Win10 can now be enabled using only Microsoft-provided tools.<br /><br />Using the <a href="https://technet.microsoft.com/en-us/sysinternals/bb896655.aspx" class="postlink">handle utility</a> from Sysinternals use the following command to enable the Classic theme for all newly started applications:<br /><br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />@FOR /F &quot;tokens=3,6 delims=: &quot; %%A IN ('Handle ThemeSection') DO Handle -c %%B -p %%A -y<br /></div><br /><br /><br />So this problem is not limited to the W8Classic utility.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Oct 02, 2015 7:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[R.O.B.]]></name></author>
<updated>2015-05-02T11:31:36-07:00</updated>
<published>2015-05-02T11:31:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19224#p19224</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19224#p19224"/>
<title type="html"><![CDATA[Re: Problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19224#p19224"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />The Classic theme is not officially supported on Windows 8. The app which tries to bring it back like the one you mentioned says on its page here: <!-- m --><a class="postlink" href="http://forum.thinkpads.com/viewtopic.php?f=67&amp;t=113024">http://forum.thinkpads.com/viewtopic.php?f=67&amp;t=113024</a><!-- m --> &quot;This program replaces the default shell with itself&quot;. This is not a supported scenario. It was a lucky coincidence that Classic Shell 4.1 worked with this configuration.<br /></div><br /><br />Actually, the program can be used without the replacement of the shell now. I'm also using the classic theme on Windows 8.1, so I can confirm that the quick launch spacing issue does happen. It's not a huge deal to me, but I would like to see a fix (I don't mind if that fix doesn't come from Classic Shell). I don't really feel like using an empty toolbar though.<br /><br />I also got the taskbar jumping issue, but I got it to stop by disabling Anixx's AutoHotKey script. So they're just not compatible at the moment. This is something I will also live with for now.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3546">R.O.B.</a> — Sat May 02, 2015 11:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-04-28T07:55:59-07:00</updated>
<published>2015-04-28T07:55:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19162#p19162</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19162#p19162"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19162#p19162"><![CDATA[
On Windows 7 with the official Classic theme there is no issue with Classic Shell 4.2.1 and the Classic button:<br /><br />Disabling DWM on Windows 8 is also another unsupported OS modification.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Apr 28, 2015 7:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-04-26T16:19:05-07:00</updated>
<published>2015-04-26T16:19:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19130#p19130</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19130#p19130"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19130#p19130"><![CDATA[
By the way, a workaround for the too close position of Quick Launch and the start button is to create an empty launch bar in between. Still I hope this problem to be fixed somehow in the future versions. Currently sticking with 4.1 anyway at least as long as I am on Win8 because of incompatibility with the AHK script I use.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Apr 26, 2015 4:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-04-26T07:28:58-07:00</updated>
<published>2015-04-26T07:28:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19121#p19121</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19121#p19121"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19121#p19121"><![CDATA[
Also I wonder why the 4.2.1 version is not compatible with the above script. If it moves the Quick Launch, why it alwatys adds the x-coordinate rather than to put it in a definite position?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Apr 26, 2015 7:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-04-26T07:10:27-07:00</updated>
<published>2015-04-26T07:10:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19120#p19120</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19120#p19120"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19120#p19120"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br /><div class="quotetitle">Anixx wrote:</div><div class="quotecontent">The default button, when not using any other utilities, eats 1 pixel from the first Quick Launch button, making its left edge invisible<br /></div><br />And is that also happening without Classic Shell? If so, then the fault of eating pixels is not related to Classic Shell, but to the classic theme hack.</div><br /><br />It is related to Windows 8. The default Win8 button is not intended for use with the Classic theme.<br /><br />The Classic button of Classic Shell is intended on the other hand. Why not to make the Classic button 2 pixels smaller or shift the Quick Launch by 2 pixels to the right?<br /><br />I think the issue will be there under Win7 as well, although I cannot test it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Apr 26, 2015 7:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-04-25T07:05:59-07:00</updated>
<published>2015-04-25T07:05:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19103#p19103</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19103#p19103"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19103#p19103"><![CDATA[
<div class="quotetitle">Anixx wrote:</div><div class="quotecontent"><br />The default button, when not using any other utilities, eats 1 pixel from the first Quick Launch button, making its left edge invisible<br /></div><br />And is that also happening without Classic Shell? If so, then the fault of eating pixels is not related to Classic Shell, but to the classic theme hack.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Apr 25, 2015 7:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-04-25T02:31:26-07:00</updated>
<published>2015-04-25T02:16:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19100#p19100</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19100#p19100"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19100#p19100"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Do you see similar issues if you stick with the default Windows 8.1 button?<br /></div><br /><br />The default button, when not using any other utilities, eats 1 pixel from the first Quick Launch button, making its left edge invisible:<br /><br /><img src="http://storage2.static.itmages.ru/i/15/0425/h_1429953129_1783969_0f9e514f21.png" alt="" /><br /><br />I experience no Quick Launch jumps with the default button, even when the above script is enabled.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sat Apr 25, 2015 2:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-04-24T09:19:45-07:00</updated>
<published>2015-04-24T09:19:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19095#p19095</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19095#p19095"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19095#p19095"><![CDATA[
Do you see similar issues if you stick with the default Windows 8.1 button?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Apr 24, 2015 9:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-04-24T09:06:18-07:00</updated>
<published>2015-04-24T09:06:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19091#p19091</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19091#p19091"/>
<title type="html"><![CDATA[Re: Classic button position problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19091#p19091"><![CDATA[
An example of mis-behavior of the 4.2.1 version.<br /><br />Here is an AutoHotKey script. It moves (adjusts) the taskbar elements vertically.<br />Under 4.1 it works as it should. Under 4.2.1 each time it runs, the Quick Launsh also shifted horizontally by about 2 cm.<br />There is nothing such thing in the script. So it turns out that Classic Shell moves the Quick Launch every time <br />somebody moves the elements on the taskbar. And moves it not to a fixed position, but adds about 2 cm each time<br />regardless of where it is currently.<br /><br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">#NoEnv<br />#NoTrayIcon<br /> <br />SetControlDelay, -1<br />Gui +LastFound<br />hWnd := WinExist()<br /> <br />Sleep, 5000<br /><br />;WinGet, id,, ahk_class Shell_TrayWnd<br /><br />WinGetPos,,,ww,wh, % &quot;ahk_id &quot; id<br /><br />ControlMove, ReBarWindow321,,4,,,  % &quot;ahk_id &quot; id<br /><br />ControlGetPos, ,y,,h,ReBarWindow321,  % &quot;ahk_id &quot; id<br />ControlMove, TrayNotifyWnd1,,4,,h-4,  % &quot;ahk_id &quot; id<br /><br />WinSet, Redraw,,  % &quot;ahk_id &quot; id<br /><br />DllCall( &quot;RegisterShellHookWindow&quot;, UInt,hWnd )<br />MsgNum := DllCall( &quot;RegisterWindowMessage&quot;, Str,&quot;SHELLHOOK&quot; )<br />OnMessage( MsgNum, &quot;ShellMessage&quot; )<br />Return<br /><br />ShellMessage(wParam,lParam) {<br /><br /><br />   If (wParam = 1 or wParam = 2) ;  HSHELL_WINDOWCREATED := 1<br />   {<br /><br />;WinGetClass, WinClass, ahk_id %lParam%<br /><br />WinGet, lParam,, ahk_class Shell_TrayWnd<br /><br />WinGetPos,,,ww,wh, % &quot;ahk_id &quot; ahk_id %lParam%<br /><br />ControlMove, ReBarWindow321,,4,,,  ahk_id %lParam%<br /><br />ControlGetPos, ,y,,h,ReBarWindow321,  ahk_id %lParam%<br />ControlMove, TrayNotifyWnd1,,4,,h-2,  ahk_id %lParam%<br /><br />WinSet, Redraw,,  ahk_id %lParam%<br /><br />}<br /><br />}</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Apr 24, 2015 9:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-04-24T08:46:01-07:00</updated>
<published>2015-04-24T08:46:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19087#p19087</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19087#p19087"/>
<title type="html"><![CDATA[Re: Problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19087#p19087"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />It remains an unsupported scenario because multiple programs are trying to manipulate position of UI elements on the taskbar. With the default Windows 8 theme, there are a few pixels between the Classic button and the Quick Launch.<br /></div><br /><br />There are several programs that disable theming on Win8. The most easy way is disabling DWM<br /><br /><!-- m --><a class="postlink" href="http://forums.guru3d.com/showthread.php?t=383450">http://forums.guru3d.com/showthread.php?t=383450</a><!-- m --><br /><br />With this method Classic Shell misses the pixel also.<br /><br />If Classic Theme is not supported, why there is an option fot the Classic menu cover and button in the first place?<br />Is Classic Shell not for classic desktop?<br /><br />Why it is not possible to restore the things as they were at 4.1? If the change was to fix Win10 compatibility, it can be implemented conditionally.<br /><br />Something really wrong with CS 4.2.1. It conflicts with Everything. And I am not sure its placement is correct with the default theme either (the misplacement is just less visible).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Apr 24, 2015 8:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-04-24T04:01:10-07:00</updated>
<published>2015-04-24T04:01:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19083#p19083</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19083#p19083"/>
<title type="html"><![CDATA[Re: Problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19083#p19083"><![CDATA[
It remains an unsupported scenario because multiple programs are trying to manipulate position of UI elements on the taskbar. With the default Windows 8 theme, there are a few pixels between the Classic button and the Quick Launch.<br /><br />The Classic theme is not officially supported on Windows 8. The app which tries to bring it back like the one you mentioned says on its page here: <!-- m --><a class="postlink" href="http://forum.thinkpads.com/viewtopic.php?f=67&amp;t=113024">http://forum.thinkpads.com/viewtopic.php?f=67&amp;t=113024</a><!-- m --> &quot;This program replaces the default shell with itself&quot;. This is not a supported scenario. It was a lucky coincidence that Classic Shell 4.1 worked with this configuration.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Apr 24, 2015 4:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-04-24T02:32:00-07:00</updated>
<published>2015-04-24T02:32:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19080#p19080</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19080#p19080"/>
<title type="html"><![CDATA[Re: Problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19080#p19080"><![CDATA[
Classic Shell 4.1:<br /><br /><img src="http://storage3.static.itmages.ru/i/15/0424/h_1429867717_7835386_c50ce69bbc.png" alt="" /><br /><br />All is perfect.<br /><br />Classic Shell 4.2.1:<br /><br /><img src="http://storage4.static.itmages.ru/i/15/0424/h_1429867754_2853409_f8114dabfd.png" alt="" /><br /><br />No space between the first Quick Launch button and the Start Button.<br /><br />Also I have noticed that it conflicts with a third program, Taskbar Fixer. Thus it conflicts with 3 utilities I use plus displays things wrong even without any third-party applications.<br /><br />The 4.1 version did not conflict with anything and displayed things perfectly.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Apr 24, 2015 2:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2015-04-24T01:52:29-07:00</updated>
<published>2015-04-24T01:52:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19078#p19078</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19078#p19078"/>
<title type="html"><![CDATA[Re: Problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19078#p19078"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Well, looks like you have 3 separate programs that all try to mess with the layout of the taskbar. That's not at all supported. They can't all get their way. You have to disable the taskbar features for two of them. For Classic Shell this means to disable the custom start button and use the default Windows button. Then it won't try to move things around.<br /></div><br /><br />Is there Classic button in Windows 8 at all? There is not!<br /><br />In Classic Shell 4.1 all works well.<br /><br />At least with Classic Shell being the only used program, there is the following glitch with 4.2.1:<br /><br />- The Quick Launch buttons became very close to the Start Button, there is not a single pixel between Start button and the first Quick Launch button (when the taskbar is locked), in 4.1 there were 2 pixels as in Windows usually.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Fri Apr 24, 2015 1:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-04-24T00:35:39-07:00</updated>
<published>2015-04-24T00:35:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19077#p19077</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19077#p19077"/>
<title type="html"><![CDATA[Re: Problem after updating to 4.2.1]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4555&amp;p=19077#p19077"><![CDATA[
Well, looks like you have 3 separate programs that all try to mess with the layout of the taskbar. That's not at all supported. They can't all get their way. You have to disable the taskbar features for two of them. For Classic Shell this means to disable the custom start button and use the default Windows button. Then it won't try to move things around.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Apr 24, 2015 12:35 am</p><hr />
]]></content>
</entry>
</feed>