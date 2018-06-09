<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=571" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-08-03T23:53:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=571</id>
<entry>
<author><name><![CDATA[Machines]]></name></author>
<updated>2013-08-03T23:53:45-07:00</updated>
<published>2013-08-03T23:53:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=5353#p5353</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=5353#p5353"/>
<title type="html"><![CDATA[Re: How to get all titles non-antialiased like Classic Explo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=5353#p5353"><![CDATA[
I have the same problem. I posted it on<br /><!-- m --><a class="postlink" href="http://creativx.net/forums/wsb-vsb-support/121345-how-change-caption-font.html">http://creativx.net/forums/wsb-vsb-supp ... -font.html</a><!-- m --><br />but no one knows the answer.<br /><br />WindowBlinds solves the problem, but only for 30 days. I want a free solution.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1256">Machines</a> — Sat Aug 03, 2013 11:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jimuazu]]></name></author>
<updated>2013-04-24T05:27:21-07:00</updated>
<published>2013-04-24T05:27:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2951#p2951</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2951#p2951"/>
<title type="html"><![CDATA[Re: How to get all titles non-antialiased like Classic Explo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2951#p2951"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />What do you mean by &quot;Classic Explorer&quot;? Classic Explorer is a component of Classic Shell, but it has nothing to do with the title bar in Windows 2012.<br /></div><br /><br /><br />If I go to the Classic Shell START menu, then My Documents (for instance), it brings up an Explorer-like window which I understood was a Classic Explorer window (with Classic Shell installed). This window has a bitmap-style window title rendering (with the settings I mentioned earlier), unlike all the other windows (which use LCD-optimised rendering). So I want to know what is special about this window, and how can I make other windows act the same way.<br /><br />Now you're making me suspect that it isn't something special you've done in Classic Explorer, so I uninstalled Classic Shell and rebooted -- and it's true, in File Explorer, it still has the bitmap rendering. So whatever 'trick' they're using to make it work correctly is buried in Windows code somewhere. This is disappointing. Oh well, sorry for the confusion. I'll mark this as resolved.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=650">jimuazu</a> — Wed Apr 24, 2013 5:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-04-23T15:04:27-07:00</updated>
<published>2013-04-23T15:04:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2935#p2935</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2935#p2935"/>
<title type="html"><![CDATA[Re: How to get all titles non-antialiased like Classic Explo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2935#p2935"><![CDATA[
What do you mean by &quot;Classic Explorer&quot;? Classic Explorer is a component of Classic Shell, but it has nothing to do with the title bar in Windows 2012.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Apr 23, 2013 3:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jimuazu]]></name></author>
<updated>2013-04-23T13:57:11-07:00</updated>
<published>2013-04-23T13:57:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2933#p2933</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2933#p2933"/>
<title type="html"><![CDATA[How to get all titles non-antialiased like Classic Explorer?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=571&amp;p=2933#p2933"><![CDATA[
On Windows 2012: I have turned off ClearType (Display-&gt;Adjust ClearType text) and font smoothing (System-&gt;Advanced system settings-&gt;Performance Settings-&gt;Smooth edges of screen fonts). Windows ignores these settings in various places, though. The most troublesome is in the window title area. However, I notice that Classic Explorer windows respect my settings! Great! They show the title with bitmap-style rendering. I want to know why that happens, and if it is at all feasible to extend this to all other windows. (If necessary I might be able to hack some Windows code together if someone gives me a reliable hint, but I have very little Windows coding experience.)<br /><br />The motivation is that in my day-job we have software which learns fonts and then 'OCRs' the display over a VNC connection for testing. However it only works reliably when the fonts are displayed with neither anti-aliasing nor sub-pixel positioning nor excessive kerning. Windows8/2012 seem really brain-dead in this regard in that they continue to output LCD-optimised sub-pixel-positioned text in the titles even with all the settings turned off, and even if the display is set to be rotated (i.e. the rendering doesn't even adapt to the rotation).<br /><br />I also experimented with replacing Segoe UI with some other (bitmap) font, but Windows seems determined that I will not modify any of the system font files. It might not have worked anyway. Registry tweaks also failed to make any difference. Any ideas would be appreciated.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=650">jimuazu</a> — Tue Apr 23, 2013 1:57 pm</p><hr />
]]></content>
</entry>
</feed>