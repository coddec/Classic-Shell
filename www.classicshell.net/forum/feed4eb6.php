<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=7842" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-28T04:13:51-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=7842</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-08-28T04:13:51-07:00</updated>
<published>2017-08-28T04:13:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33868#p33868</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33868#p33868"/>
<title type="html"><![CDATA[Re: Clover3 Navigation Pane reverts to Win7 mode]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33868#p33868"><![CDATA[
clover is actually wrapping explorer.exe (and from my testing, causes SYSTEM instability not just when using windows explorer) things like desktop work area are hard-coded in (in my case, with my 4k monitor, the taskbar is at the center of my screen, unless i set my resolution to 1920x1080) along with other various lockups. You may find it more stable, but if you notice any oddities I would start with clover.<br />It should work fine with explorer toolbars, but I think classic shell is trying to hook explorer.exe (and instead seeing clover.exe and not activating)<br />In-theory you could trick classic shell into thinking clover is explorer.exe... but Theres no telling how that will play out <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Aug 28, 2017 4:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-22T20:15:30-07:00</updated>
<published>2017-08-22T20:15:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33797#p33797</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33797#p33797"/>
<title type="html"><![CDATA[Re: Clover3 Navigation Pane reverts to Win7 mode]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33797#p33797"><![CDATA[
Hey Gaurav,<br /><br />I don't think they have an API-Guide or anything like this; it's a hack and from what I can see they're pretty private about how it works. There are newer versions, which might fix my <em>bug</em>, but the installer is in Chinese (I've had to take pictures with my phone and then use picture-translate to figure-out the buttons) and from what I can see, they only add a better bookmarks manager. Plus, the newer versions make explorer access the network, so I don't trust them.<br /><br />However, I know some other users of Classic Shell use Clover 3; I found it searching the forum. So maybe someone figured out a way to make it play nice with Classic Explorer? They work together, but the Navigation Pane reverts to Win7 default. It's not too bad, but Microsoft stupidly removed the scrollbar at the bottom, which is really annoying sometimes when you dig deep in the filesystem. I was hoping Ivo had been interested at some point in having tabs in his own Explorer, and tried Clover...<br /><br />Best Regards,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Tue Aug 22, 2017 8:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-22T05:17:13-07:00</updated>
<published>2017-08-22T05:17:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33793#p33793</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33793#p33793"/>
<title type="html"><![CDATA[Re: Clover3 Navigation Pane reverts to Win7 mode]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33793#p33793"><![CDATA[
Does Clover have any official notes or info on whether it can be used with other Explorer BHOs and shell extensions?<br /><br />Their FAQ says:<br />&quot;1. Code is hastily written, and it has a lot of problems.&quot;<br /><br />So I suspect it is not designed to work with other shell extensions.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 22, 2017 5:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-21T21:44:54-07:00</updated>
<published>2017-08-21T21:44:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33788#p33788</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33788#p33788"/>
<title type="html"><![CDATA[Clover3 Navigation Pane reverts to Win7 mode]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7842&amp;p=33788#p33788"><![CDATA[
Good day.<br /><br />I have been &quot;play-testing&quot; Clover3 (v3.0.406, the English one which does not call home to China) - it adds Tabs to Explorer.<br /><br />I notice that with this installed, my Explorer &quot;Navigation Pane&quot; reverts to the Windows 7 default mode, with the little disappearing arrows and no scrollbar, even tho I have selected Windows Xp Style in Classic Explorer. However, if I open a Clover3 window, and then manually run Explorer.exe, the new Tab that opens *does* have the little + next to the folders. But when I open Explorer for the fist time, or when I add Tabs to an existing &quot;Clover3&quot; window, they have the little arrows (and more important, no scrollbar at the bottom!)<br /><br />Is there any way to fix this?<br /><br />Thank you.<br />Best Regards,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Mon Aug 21, 2017 9:44 pm</p><hr />
]]></content>
</entry>
</feed>