<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6819" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-09-14T22:53:59-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6819</id>
<entry>
<author><name><![CDATA[BrendonIrwan]]></name></author>
<updated>2016-09-14T22:53:59-07:00</updated>
<published>2016-09-14T22:53:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29333#p29333</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29333#p29333"/>
<title type="html"><![CDATA[Re: Start Menu broken when declining UAC prompts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29333#p29333"><![CDATA[
Hello again. I'm back.<br /><br />Your solution on reverting UAC to the old one didn't work either. But I am certain that the fault goes to Windows as it also happens elsewhere outside the start menu. But I am also certain that it MOSTLY happens on the FIRST UAC prompt requested by the start menu (since I always start my Windows session that way).<br /><br />Ivo you may want to see this issue optionally.<br /><br /><br />Thank you once again!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15103">BrendonIrwan</a> — Wed Sep 14, 2016 10:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[BrendonIrwan]]></name></author>
<updated>2016-09-12T14:28:23-07:00</updated>
<published>2016-09-12T14:28:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29308#p29308</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29308#p29308"/>
<title type="html"><![CDATA[Re: Start Menu broken when declining UAC prompts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29308#p29308"><![CDATA[
Ah I see. I like UAC (for security and death prevention =D). I'd rather be more cautious on running apps via the Start Menu then.<br /><br />Seems that Windows just gets less traditional which, in my opinion, is pissing the crap out of many Win32 developers.<br /><br /><br />Thanks anyways!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15103">BrendonIrwan</a> — Mon Sep 12, 2016 2:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-12T11:36:41-07:00</updated>
<published>2016-09-12T11:36:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29299#p29299</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29299#p29299"/>
<title type="html"><![CDATA[Re: Start Menu broken when declining UAC prompts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29299#p29299"><![CDATA[
I have noticed a problem in Windows 10 Anniversary Update where the redesigned UAC prompt does not get focus and so it shows in the background. Unfortunately, it does not always show its flashing button on the Taskbar as the older UAC prompt used to reliably show. So it's a hidden window. If you Alt+Tab to it, it gets focus. Until then the menu will obviously not open. I don't think the bug is in Classic Shell.<br /><br />If it happens frequently, you could try disabling the new UAC prompt.<br /><br />HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Authentication\LogonUI\TestHooks<br />Change XamlCredUIAvailable to 0.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Sep 12, 2016 11:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-12T09:08:55-07:00</updated>
<published>2016-09-12T09:08:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29296#p29296</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29296#p29296"/>
<title type="html"><![CDATA[Re: Start Menu broken when declining UAC prompts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29296#p29296"><![CDATA[
Weird. I don't get a UAC prompt when running cleanmgr.exe, even if I run it as admin.<br />But running cmd.exe as admin, then declining the prompt, didn't cause any problems with the start menu.<br />Can you make the problem happen again?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Sep 12, 2016 9:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[BrendonIrwan]]></name></author>
<updated>2016-09-12T09:05:27-07:00</updated>
<published>2016-09-12T09:05:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29295#p29295</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29295#p29295"/>
<title type="html"><![CDATA[Start Menu broken when declining UAC prompts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6819&amp;p=29295#p29295"><![CDATA[
Updated to Win 10 Anniv Update, which uninstalled ClassicShell so...you get the rest. Dumb Windows.<br /><br />Wanted to run cleanmgr.exe as an admin via the context menu option, UAC prompts, I accidentally tapped on No, and my menu won't open ever again, ever.<br /><br />To fix this one has to restart explorer.exe (Windows Explorer) either via command-line or Task Manager.<br /><br /><br />This problem did not occur to me on the November Update and an older version of ClassicShell.<br /><br />FYI I am running ClassicShell 4.3, clean copy :)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15103">BrendonIrwan</a> — Mon Sep 12, 2016 9:05 am</p><hr />
]]></content>
</entry>
</feed>