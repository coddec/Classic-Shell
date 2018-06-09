<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=113" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-01-20T12:33:11-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=113</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-20T12:33:11-07:00</updated>
<published>2013-01-20T12:33:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=113&amp;p=430#p430</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=113&amp;p=430#p430"/>
<title type="html"><![CDATA[Re: Trouble with Logoff button, RDP and Windows 7 style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=113&amp;p=430#p430"><![CDATA[
In the Windows 7 style, logoff and disconnect are part of the shutdown menu. However it looks like a group policy is disabling the Shutdown menu.<br /><br />You can manually add the missing items to the main menu using the Customize Start Menu in the settings - simply drag them from the right column into the left.<br /><br />Another solution will be to clear the command of the ShutdownBoxItem (double-click on it, delete the contents of the Command: setting, also uncheck Split Button Item at the bottom). This will enable the menu (because it is no longer associated with the forbidden shutdown_box command)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 20, 2013 12:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ted]]></name></author>
<updated>2013-01-20T12:22:03-07:00</updated>
<published>2013-01-20T12:22:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=113&amp;p=429#p429</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=113&amp;p=429#p429"/>
<title type="html"><![CDATA[Trouble with Logoff button, RDP and Windows 7 style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=113&amp;p=429#p429"><![CDATA[
Hi there.<br /><br />I have a problem with the Classic Start Menu V3.6.5 on a Windows Server 2008 R2 to which I connect via remote desktop.<br /><br />In with the Start Menu Style &quot;Windows Classic&quot; everything is fine (and also in the original Microsoft Start Menu of Windows 2008):<br /><a href="http://www.image-load.net/show/img/HrydevYfh0.gif" class="postlink"><img src="http://www.image-load.net/users/public/thumbnails/HrydevYfh0_t.gif" alt="" /></a><br /><br />I have a logoff button and also the option to disconnect.<br /><br />But if I change to &quot;Windows 7 Style&quot; this options are gone:<br /><a href="http://www.image-load.net/show/img/StHmnOlz5M.gif" class="postlink"><img src="http://www.image-load.net/users/public/thumbnails/StHmnOlz5M_t.gif" alt="" /></a><br />The only option is to use &quot;Windows-Sicherheit&quot; (Windows security) to log off or disconnect. But this is an awkward way to do so.<br /><br />My settings of classic start menu don't show me a reason for the missing buttons:<br /><a href="http://www.image-load.net/show/img/KnlXY1glkz.gif" class="postlink"><img src="http://www.image-load.net/users/public/thumbnails/KnlXY1glkz_t.gif" alt="" /></a><br /><br /><br /><br />How can I solve this problem? Is anything in the settings wrong or is it a little bug in combination with the given, shut down locking group policy?<br /><br />Thanks for any reply or idea,<br />Ted.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=167">Ted</a> — Sun Jan 20, 2013 12:22 pm</p><hr />
]]></content>
</entry>
</feed>