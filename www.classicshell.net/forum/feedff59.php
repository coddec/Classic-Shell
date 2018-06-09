<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=5365" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-11-17T00:02:04-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=5365</id>
<entry>
<author><name><![CDATA[benfar278]]></name></author>
<updated>2015-11-17T00:02:04-07:00</updated>
<published>2015-11-17T00:02:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23560#p23560</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23560#p23560"/>
<title type="html"><![CDATA[Re: Full-size offset for sub-folders: resets on 2 monitor dr]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23560#p23560"><![CDATA[
My Classic Shell (Explorer Settings.xml) reads:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&lt;?xml version=&quot;1.0&quot;?&gt;<br />&lt;Settings component=&quot;Explorer&quot; version=&quot;4.2.5&quot;&gt;<br />    &lt;FullIndent value=&quot;1&quot;/&gt;<br />&lt;/Settings&gt;<br /></div><br />With the above settings I get behavior as described in my post when drag from one screen to another occurs. Maybe some form of recalibration is going on when more than 50% of the app window moves to the next screen. There is a little delay in the drag movement when this occurs. I noticed this also when dragging a video on play (using potplayer) between screens.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12013">benfar278</a> — Tue Nov 17, 2015 12:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-11-15T21:11:57-07:00</updated>
<published>2015-11-15T21:11:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23514#p23514</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23514#p23514"/>
<title type="html"><![CDATA[Re: Full-size offset for sub-folders: resets on 2 monitor dr]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23514#p23514"><![CDATA[
Can you attach your Classic Explorer Settings XML? Use the Backup button to save the XML.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Nov 15, 2015 9:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[benfar278]]></name></author>
<updated>2015-11-14T20:51:10-07:00</updated>
<published>2015-11-14T20:51:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23490#p23490</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23490#p23490"/>
<title type="html"><![CDATA[Full-size offset for sub-folders: resets on 2 monitor drag]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5365&amp;p=23490#p23490"><![CDATA[
Hello. I am referring to this post which is in the Beta section of the forum. <br /><br /><!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=19&amp;t=4949">viewtopic.php?f=19&amp;t=4949</a><!-- l --><br /><br />But this issue is present in the recent version 4.2.5. So I have decided to post here, as I believe my post will be unnoticed in the Beta forum.<br /><br />I am getting the exact same quirky behavior as the OP.<br /><br />Under Windows 10, I have two exact same monitors connected to the same GPU (gtx 670). DPI scaling is set identical on both monitors. When I have <span style="text-decoration: underline">full-size offset</span> enabled, and open a new file explorer window, the offset is disabled as I drag the window into the second monitor. What I noticed is that as I drag the file explorer into the second monitor, as soon as more than half of the width of the file explorer window passes into the second monitor, the offset is disabled at that 50% demarcation point. The folders then move to the left as OP showed in the image. This is even if the drag is done extremely slowly.<br /><br />I was also testing <span style="text-decoration: underline">Tree item spacing</span> and this is preserved upon dragging across monitors. So such dragging only affects horizontal parameters, not vertical. <br /><br />I only recently starting using classic shell with v. 4.2.5 after my upgrade to Windows 10 (10586.3), but tested v. 4.2.4 which behaves the same.<br /><br />Does anyone have any clue what is going on here? <img src="http://www.classicshell.net/forum/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12013">benfar278</a> — Sat Nov 14, 2015 8:51 pm</p><hr />
]]></content>
</entry>
</feed>