<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=4884" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-07-04T07:41:37-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=4884</id>
<entry>
<author><name><![CDATA[Joey79100]]></name></author>
<updated>2016-07-04T07:41:37-07:00</updated>
<published>2016-07-04T07:41:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=27424#p27424</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=27424#p27424"/>
<title type="html"><![CDATA[Re: Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=27424#p27424"><![CDATA[
<span style="font-size: 85%; line-height: 116%;">I'm not sure if it's right to post in an old thread on this forum, but as I've noticed something about this issue I see no point in creating a new one.</span><br /><br />I've had this delay too when showing the Start Menu (4.2.7).<br />I've tested several things, and found out that <em>showing the frequent programs</em> with <strong>Show recent Metro Apps</strong> ticked causes the menu to take a long time to open. <em>Showing recent programs</em> with <strong>Show recent Metro Apps</strong> ticked makes it a bit faster, but there's still a delay. Disabling <strong>Show recent Metro Apps</strong> removes that delay almost completely in both cases.<br /><br />To make it even faster, it's also possible to just show nothing (I mean, no recent/frequent programs), also to <em>disable jumplists</em>, and <em>sort the main menu only the first time</em>. But these ones only make light improvements, the main reason for the delay is indeed the recent Metro Apps. At least for me.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11296">Joey79100</a> — Mon Jul 04, 2016 7:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-08-08T17:01:32-07:00</updated>
<published>2015-08-08T17:01:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20931#p20931</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20931#p20931"/>
<title type="html"><![CDATA[Re: Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20931#p20931"><![CDATA[
OK, I'll try those things.  It's a bit slow to test since it doesn't happen all the time.  My normal setup:<br /><br />ClassicShell button is mine, derived from your shell.<br />AV software is Microsoft's Defender.  <br />Running processes minimized.  When nothing much is running, they number in the mid to high 40s.<br />Search button / field in the taskbar is off.<br />Aero Glass is on.<br />UAC is off.<br /><br />I have a suspicion it may have to do with my running UAC-disabled.  Unfortunately we've moved past where Microsoft even remotely supports operating in that manner.  If a delay is the worst thing that results from that, I can probably live with it.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Sat Aug 08, 2015 5:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-08-08T09:34:10-07:00</updated>
<published>2015-08-08T09:34:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20911#p20911</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20911#p20911"/>
<title type="html"><![CDATA[Re: Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20911#p20911"><![CDATA[
I don't see anything immediately obvious from the PML file. Try these things to see if any of them makes a difference:<br />1) Use the Classic Shell button instead of the Windows 10 button, or vice versa<br />2) Hide the Search button in the taskbar (or show it if it is hidden)<br />3) Disable Aero Glass<br /><br />Also keep a Process Explorer opened in admin mode and look for another process that may be doing something expensive from time to time - like AV software or a service or something.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Aug 08, 2015 9:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-08-08T09:11:51-07:00</updated>
<published>2015-08-08T09:11:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20910#p20910</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20910#p20910"/>
<title type="html"><![CDATA[Re: Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20910#p20910"><![CDATA[
Nope, unchecking the box even though it was disabled at a higher level made no difference.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Sat Aug 08, 2015 9:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-08-07T23:29:31-07:00</updated>
<published>2015-08-07T23:29:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20897#p20897</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20897#p20897"/>
<title type="html"><![CDATA[Re: Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20897#p20897"><![CDATA[
That was turned off long ago.<br /><br />I should clarify...  That particular box was actually checked, but the Show recent or frequent programs setting was set to &quot;Don't show&quot;, so the box was grayed out.  I've unchecked it now and returned back to the &quot;Don't show&quot; setting, and will report back if the timing seems better.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Fri Aug 07, 2015 11:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-08-07T07:38:33-07:00</updated>
<published>2015-08-07T07:38:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20851#p20851</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20851#p20851"/>
<title type="html"><![CDATA[Re: Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20851#p20851"><![CDATA[
Verify that if you turn off the &quot;Show recent Metro apps&quot; setting the problem goes away.<br />The next version will have much faster recent apps list.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Aug 07, 2015 7:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-08-06T13:10:19-07:00</updated>
<published>2015-08-06T13:10:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20806#p20806</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20806#p20806"/>
<title type="html"><![CDATA[Re: Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20806#p20806"><![CDATA[
Hi Ivo,<br /><br />I didn't think there was much chance I'd be able to capture the problem, but incredibly I just managed it.  I remembered to start Procmon just prior to pressing the Start orb, saw a several second delay, then stopped the event capture.<br /><br />You can download the Procmon event list here:<br /><br />Filtered only for Explorer.exe (5 MB):  <br /><!-- m --><a class="postlink" href="http://Noel.ProDigitalSoftware.com/temp/StartButtonDelay.PML">http://Noel.ProDigitalSoftware.com/temp ... nDelay.PML</a><!-- m --><br /><br />With all events (39 MB):  <br /><!-- m --><a class="postlink" href="http://Noel.ProDigitalSoftware.com/temp/StartButtonDelayAllEvents.PML">http://Noel.ProDigitalSoftware.com/temp ... Events.PML</a><!-- m --><br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Thu Aug 06, 2015 1:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-08-05T18:15:40-07:00</updated>
<published>2015-08-05T18:15:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20742#p20742</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20742#p20742"/>
<title type="html"><![CDATA[Re: Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20742#p20742"><![CDATA[
Try to capture a series of dumps as it happens.<br />Also if you can run Process Monitor to see what files or registry keys are being accessed by the explorer process.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Aug 05, 2015 6:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-08-05T17:59:07-07:00</updated>
<published>2015-08-05T17:59:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20740#p20740</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20740#p20740"/>
<title type="html"><![CDATA[Intermittent delay in showing the Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4884&amp;p=20740#p20740"><![CDATA[
Has anyone else seen an occasional several second delay in opening the Classic View Start Menu on Win 10 after the Start button is pressed?<br /><br />I have SSDs, so there's no chance of it being a disk spinning up.  Nothing should really be taking several seconds to become ready.<br /><br />Can't say I ever experienced that on Win 8.1 or older.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Wed Aug 05, 2015 5:59 pm</p><hr />
]]></content>
</entry>
</feed>