<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=1437" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-10-16T06:34:23-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=1437</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-10-16T06:34:23-07:00</updated>
<published>2013-10-16T06:34:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1437&amp;p=7371#p7371</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1437&amp;p=7371#p7371"/>
<title type="html"><![CDATA[Re: Disable Aero/Compositing in Windows 8.x (it is possible)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1437&amp;p=7371#p7371"><![CDATA[
Thanks for the info <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> good to know, and yea i agree, if they were really trying to increase performance they would have probably done more than just stopped the blur, as for the 'style' that is windows 8/metro Its simply a re-branding. they wanted a look that felt different from their previous, and minimalistic is 'in' right now.., though windows 8 is still far from minimal in many respects... (Though im sure most of their design decision revolved around matching &quot;windows 8 rtm&quot; which I dont even think shares much of the same code (though ive never really looked into it so take this with salt)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Oct 16, 2013 6:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[webulator70]]></name></author>
<updated>2013-10-16T05:47:45-07:00</updated>
<published>2013-10-16T05:47:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1437&amp;p=7367#p7367</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1437&amp;p=7367#p7367"/>
<title type="html"><![CDATA[Disable Aero/Compositing in Windows 8.x (it is possible)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1437&amp;p=7367#p7367"><![CDATA[
Some times its nice to have Composting turned off for old games or emus, specially for gaining back a frame of display latency in some cases.<br /><br />There still exists a way to disable Aero a.k.a. Composting in Windows 8.x, it involves suspending (not terminating) the process for winlogon.exe and then terminating dwm.exe. If explorer remains glitchy, restarting its process after doing the previous steps will fix things. These glitches are due to the metro bits not rendering properly without DWM on. They include the corners being dead zones that block clicks and the metro clock sometimes getting stuck on screen. The explorer restart can almost be completely avoided if all 4 corners are disabled with CS first. The only remaining glitchy bit is the metro clock. (Either Process Explorer, Process Hacker, or the command line tool, Pssuspend.exe is required to suspend the winlogon.exe process.)<br /><br />[ramble]<br />This all makes me wonder why MS went all Metro on the desktop stuff. Some say its a performance/battery life thing but if thats the case why still use Aero to handle it? After all, you can patch the uxtheme file and load themes up just like before, blur aside. It is indeed still pretty much full Aero. To me, its nothing more than a design/marketting item to make Windows 8 appear simpler and less overwhelming or intimidating to people. Either that or the blur took up too much resources/battery life but then why not just kill the blur and leave the rest? Better yet, make a new, blurless style that, you know, had some style to it. I'm personally not a fan of it looking less styled then windows 3.1.<br /><br />It seems kind of funny to me that we are all ditching skeuomorphism. With all the touch based stuff, you'd think that it would be more marketable to at least try to simulate the feel of pressing buttons a bit more rather then less. <br /><br />I bet once they perfect touchscreens that can reproduce physical textures, all this flat stuff will seem passe. Hell, in 5-10 years time, it will be passe no matter what happens, I'm almost certain.<br />[/ramble]<br /><br />Anyway, I hope this helps anyone that might want to get back one more bit of functionality lost in windows 8.x.<br /><br />P.S. Some programs that are Aero aware but ran fine with it off on Win7, need to be run in compatibility mode for Win7. FFsplit is one such example.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=488">webulator70</a> — Wed Oct 16, 2013 5:47 am</p><hr />
]]></content>
</entry>
</feed>