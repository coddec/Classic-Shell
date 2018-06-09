<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=1442" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-11-10T09:54:05-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=1442</id>
<entry>
<author><name><![CDATA[eukaryote]]></name></author>
<updated>2013-11-10T09:54:05-07:00</updated>
<published>2013-11-10T09:54:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8622#p8622</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8622#p8622"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8622#p8622"><![CDATA[
I really don't think it's a Win8.1 thing, as this problem started while I still ran Win8. If I weren't lazy I'd try installing an older version of CS to see if that matters.<br /><br />I guess the upshot is that unless this issue is somehow remediated in a future version, I can't use hover to open the CS menu.<br /><br />Thanks for the replies.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1847">eukaryote</a> — Sun Nov 10, 2013 9:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-11-08T09:33:49-07:00</updated>
<published>2013-11-08T09:33:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8567#p8567</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8567#p8567"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8567#p8567"><![CDATA[
That's a clue. Windows insists that the only way for a program to get focus is through a user action. &quot;Hover&quot; doesn't count. So the start menu does some hacks to steal the focus even after hover, but it is not always successful. It is possible that the trick doesn't work anymore on Windows 8.1 because it relies on some leftover behavior from the old start menu.<br /><br />If it fails to get focus, clicking away won't close the menu because the menu closes when it loses focus. But it never got it to begin with.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Nov 08, 2013 9:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eukaryote]]></name></author>
<updated>2013-11-07T18:27:39-07:00</updated>
<published>2013-11-07T18:27:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8555#p8555</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8555#p8555"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=8555#p8555"><![CDATA[
It was foolish for me to say this ever had anything to do with AutoHideDesktopIcons; it does not. I have removed that software, updated to Windows 8.1, reinstalled Classic Shell 4.0.2, yet this problem is persistent.<br /><br />Perhaps related is the fact that if I open the CS menu with a mouse hover, I can't type anything in the Search box, even though the cursor is blinking there. I either have to open the CS menu with a click, or open it with a hover and then click in the Search box.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1847">eukaryote</a> — Thu Nov 07, 2013 6:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eukaryote]]></name></author>
<updated>2013-10-20T10:08:50-07:00</updated>
<published>2013-10-20T10:08:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7641#p7641</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7641#p7641"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7641#p7641"><![CDATA[
The only settings I have in any state other than &quot;Not configured&quot; are at the computer (not user) level, and seem unrelated:<br /><br />Allow Automatic Updates immediate installation<br />Automatic Updates detection frequency<br />Check for New Signatures Before Scheduled Scans<br />Configure Automatic Updates<br />Do not display the lock screen<br />Limit reservable bandwidth<br />No Auto-restart with logged on users for scheduled automatic updates installation<br /><br />I see the <strong>Hide and disable all items on the desktop</strong> setting (under User Configuration), but it's set to &quot;Not configured&quot;.<br /><br />Also, I searched my entire registry for &quot;NoDesktop&quot; and it wasn't found.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1847">eukaryote</a> — Sun Oct 20, 2013 10:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-20T10:04:44-07:00</updated>
<published>2013-10-20T10:04:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7640#p7640</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7640#p7640"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7640#p7640"><![CDATA[
Do you have the Group Policy 'Hide and disable all items on the desktop' enabled or its equivalent registry tweak &quot;NoDesktop&quot;? Then I get the behavior you describe, otherwise the menu closes reliably when clicked outside.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Oct 20, 2013 10:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eukaryote]]></name></author>
<updated>2013-10-20T09:46:42-07:00</updated>
<published>2013-10-20T09:46:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7637#p7637</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7637#p7637"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7637#p7637"><![CDATA[
I haven't been running AutoHideDesktopIcons since opening this thread, yet the problem is still there, to an extent. Often, the Start menu just doesn't want to close when I click away. The hidden desktop icons may exacerbate the issue, but they aren't the sole cause of it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1847">eukaryote</a> — Sun Oct 20, 2013 9:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-20T07:44:29-07:00</updated>
<published>2013-10-20T07:44:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7632#p7632</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7632#p7632"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7632#p7632"><![CDATA[
Strange, with AutoHideDesktopIcons, the menu closes for me as expected when I click outside on both Windows 7 x64 and Windows 8.1 x64.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Oct 20, 2013 7:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eukaryote]]></name></author>
<updated>2013-10-17T14:15:39-07:00</updated>
<published>2013-10-17T14:15:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7425#p7425</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7425#p7425"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7425#p7425"><![CDATA[
That's not the behavior I see here. If I let AutoHideDesktopIcons hide desktop icons, focusing any application and then clicking on the desktop does deactivate the app's window (it also makes the desktop icons reappear, which is the design intention of AutoHideDesktopIcons).<br /><br />If I close AutoHideDesktopIcons and instead hide the desktop icons by unchecking the native &quot;Show desktop icons&quot; option (in the desktop's context menu), the app's window is also deactivated when I click the desktop, but of course the icons don't reappear.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1847">eukaryote</a> — Thu Oct 17, 2013 2:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-10-16T23:29:27-07:00</updated>
<published>2013-10-16T23:29:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7394#p7394</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7394#p7394"/>
<title type="html"><![CDATA[Re: Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7394#p7394"><![CDATA[
I'm pretty sure the same issue appeared with old versions, even with the Windows 7 own menu.<br /><br />Basically the start menu closes when another window is activated. But when the icons are hidden, clicking on the desktop doesn't do anything.<br />You can see the same behavior with any program, like Notepad for example. Show the icons, open Notepad, then click on the desktop. You will see how Notepad is deactivated.<br />Then hide the icons and do the same. You'll see that clicking on the desktop doesn't deactivate Notepad.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Oct 16, 2013 11:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eukaryote]]></name></author>
<updated>2013-10-16T16:14:22-07:00</updated>
<published>2013-10-16T16:14:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7390#p7390</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7390#p7390"/>
<title type="html"><![CDATA[Compatibility issue with AutoHideDesktopIcons]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1442&amp;p=7390#p7390"><![CDATA[
Windows 8 Pro x64<br />Classic Shell 4.0.0<br /><br />I have found what seems to be a compatibility issue with <a href="http://www.softwareok.com/?seite=Microsoft/AutoHideDesktopIcons" class="postlink">AutoHideDesktopIcons</a>. It seems that whenever the Desktop icons are hidden by AutoHideDesktopIcons, this issue occurs: Clicking away from the Classic Shell 4.0.0 Start menu fails to hide the menu. If I click the Desktop and force the icons to be shown, the problem doesn't occur.<br /><br />I don't believe this compatibility issue occurred with Classic Shell 3.6.8.<br /><br />I am not posting this in expectation of a change.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1847">eukaryote</a> — Wed Oct 16, 2013 4:14 pm</p><hr />
]]></content>
</entry>
</feed>