<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=5310" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-06-08T05:10:28-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=5310</id>
<entry>
<author><name><![CDATA[llcepick]]></name></author>
<updated>2016-06-08T05:10:28-07:00</updated>
<published>2016-06-08T05:10:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=27060#p27060</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=27060#p27060"/>
<title type="html"><![CDATA[Re: Windows 8.1 and Windows 10 Per-Monitor-DPI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=27060#p27060"><![CDATA[
I have been using it for a while now... This is working so much nicer. Thanks!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11875">llcepick</a> — Wed Jun 08, 2016 5:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-11-17T04:33:10-07:00</updated>
<published>2015-11-17T04:33:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23586#p23586</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23586#p23586"/>
<title type="html"><![CDATA[Re: Windows 8.1 and Windows 10 Per-Monitor-DPI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23586#p23586"><![CDATA[
@llcepick, try Classic Shell 4.2.5. It supports per-monitor DPI. The text and menu elements are scaled independently for each monitor. The icon size depends on the global system DPI.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Nov 17, 2015 4:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-10-29T09:21:02-07:00</updated>
<published>2015-10-29T09:21:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23202#p23202</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23202#p23202"/>
<title type="html"><![CDATA[Re: Windows 8.1 and Windows 10 Per-Monitor-DPI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23202#p23202"><![CDATA[
I am not talking about Explorer or SHGetFileInfo. I am talking about the internal cache stored by the start menu and saved to disk. It does not support arbitrary number of sizes. Particularly because icons are mostly preloaded, they would have to be preloaded at many different sizes because I don't know what DPI will be used when you open the menu next. That adds overhead to both performance and code complexity.<br /><br />I know how to scale fonts. The problem is that to create an HFONT you need to give it actual pixel size. If the next time the DPI is different, a new font needs to be created. Same for skin elements. Some skins contain bitmaps to be used for high DPI values. At the time of loading the skin the correct bitmap is chosen based on the DPI and the rest are discarded. If the next time the DPI is different, the skin must be loaded again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Oct 29, 2015 9:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[llcepick]]></name></author>
<updated>2015-10-29T08:49:09-07:00</updated>
<published>2015-10-29T08:49:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23201#p23201</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23201#p23201"/>
<title type="html"><![CDATA[Re: Windows 8.1 and Windows 10 Per-Monitor-DPI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23201#p23201"><![CDATA[
For the skins problem:<br /><br />Fonts - the sizes provided can be considered for 96DPI - and use nNewFontSize=MulDiv(nFontSize,nMonitorDpi,96); to get the per-monitor font size.<br />Images/graphics - do not worry about having exact sizes for every DPI - instead use WIX to scale (FANT for going down in size, CUBIC for going up)<br /><br />Also, only activate this code path if the user has a multiple-monitor system with monitors that have different DPI - this can avoid memory over-use.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11875">llcepick</a> — Thu Oct 29, 2015 8:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[llcepick]]></name></author>
<updated>2015-10-29T08:40:34-07:00</updated>
<published>2015-10-29T08:40:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23200#p23200</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23200#p23200"/>
<title type="html"><![CDATA[Re: Windows 8.1 and Windows 10 Per-Monitor-DPI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23200#p23200"><![CDATA[
Windows Explorer actually has many more sizes for all of its icons - the limit is with using SHGetFileInfo - where it only has small and large flag - I am using an alternate API which allows me to ask the OS for pixel sizes - so I can get the icons to use at sizes I want to use.<br /><br />When there is not a larger size, I use Windows Imaging (WIX) to scale the icon bitmaps to the size required. I actually use the 256x256 size of an ICO to generate all intermediate sizes below using the FANT filter of WIX.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11875">llcepick</a> — Thu Oct 29, 2015 8:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-10-28T23:36:00-07:00</updated>
<published>2015-10-28T23:36:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23199#p23199</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23199#p23199"/>
<title type="html"><![CDATA[Re: Windows 8.1 and Windows 10 Per-Monitor-DPI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23199#p23199"><![CDATA[
Explorer.exe seems to have DPI aware manifest and on Windows 10, Microsoft made changes to Explorer to scale per-monitor (dynamic scaling): <!-- m --><a class="postlink" href="https://blogs.technet.microsoft.com/askcore/2015/12/08/display-scaling-in-windows-10/">https://blogs.technet.microsoft.com/ask ... indows-10/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Oct 28, 2015 11:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-10-28T20:44:42-07:00</updated>
<published>2015-10-28T20:44:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23198#p23198</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23198#p23198"/>
<title type="html"><![CDATA[Re: Widnows 8.1 and Windows 10 Per-Monitor-DPI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23198#p23198"><![CDATA[
There are 3 problems here:<br />1) The start menu runs inside Explorer, therefore it depends if the Explorer process is multi-DPI aware or not. I have to check<br />2) The start menu only has one set of small and one set of large icons and their sizes are determined at startup. It is not possible to use different size icons for each monitor<br />3) The font sizes and the skin element sizes are determined when the skin is loaded. If you keep switching monitors the skin has to be reloaded<br /><br />Out of those, only #3 is something that can be done, and even then there is some performance cost for reloading the skin. The menu may open slower if you switch monitors<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Oct 28, 2015 8:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[llcepick]]></name></author>
<updated>2015-10-28T11:52:07-07:00</updated>
<published>2015-10-28T11:52:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23190#p23190</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23190#p23190"/>
<title type="html"><![CDATA[Windows 8.1 and Windows 10 Per-Monitor-DPI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5310&amp;p=23190#p23190"><![CDATA[
The biggest problem is that I have multiple monitors with mixed UHD and HD resolutions - including 192DPI, 144DPI and 96DPI monitors - and the start menu is not sized correctly when using the start button on the individual monitors.<br /><br />Windows 10 adds a slider (per monitor) that allows the UI to be scaled via the system - which makes it easier to test an implementation with non UHD monitors (install two 1600x1200 monitors - and set one to 200% - only in Windows 10).<br /><br />Here is the link to look at about get the Start Menu implemented with Per-Monitor-DPI awareness.<br /><br /><a href="https://msdn.microsoft.com/en-us/library/windows/desktop/dn469266(v=vs.85).aspx" class="postlink">https://msdn.microsoft.com/en-us/library/windows/desktop/dn469266(v=vs.85).aspx</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11875">llcepick</a> — Wed Oct 28, 2015 11:52 am</p><hr />
]]></content>
</entry>
</feed>