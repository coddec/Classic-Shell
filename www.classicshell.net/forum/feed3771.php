<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=18&amp;t=2830" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-06-17T10:50:00-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=18&amp;t=2830</id>
<entry>
<author><name><![CDATA[TigerNightmare]]></name></author>
<updated>2014-06-17T10:50:00-07:00</updated>
<published>2014-06-17T10:50:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13406#p13406</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13406#p13406"/>
<title type="html"><![CDATA[Re: Can the HOT state be a loop?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13406#p13406"><![CDATA[
Nevermind, I think I figured it out. The 7th pixel determines up to 255 ranges, which could be identical for a loop-like effect and the following pixels animate any combination of ranges in order and the program doesn't read for the next setting until it gets through all the set ranges first. I just need to figure out the right numbers so it looks right.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3965">TigerNightmare</a> — Tue Jun 17, 2014 10:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TigerNightmare]]></name></author>
<updated>2014-06-17T08:23:17-07:00</updated>
<published>2014-06-17T08:23:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13405#p13405</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13405#p13405"/>
<title type="html"><![CDATA[Re: Can the HOT state be a loop?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13405#p13405"><![CDATA[
How do I do that? As it is now, I have 11 frames copied 7 times and simply have it set to go from 0 to 98. I know that the 7th and 9th pixel have the range data, but for the 8th pixel (normal to hot), how do I get it to go 0 to 32, then repeat frames 22-32 however many times? Is it possible to have multiple ranges for the same transition?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3965">TigerNightmare</a> — Tue Jun 17, 2014 8:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-17T08:03:08-07:00</updated>
<published>2014-06-17T08:03:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13404#p13404</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13404#p13404"/>
<title type="html"><![CDATA[Re: Can the HOT state be a loop?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13404#p13404"><![CDATA[
You don't need to have copies of the same frame. That's what ranges are for. You can reuse the same range multiple times within an animation.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jun 17, 2014 8:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TigerNightmare]]></name></author>
<updated>2014-06-17T01:18:54-07:00</updated>
<published>2014-06-17T01:18:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13402#p13402</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13402#p13402"/>
<title type="html"><![CDATA[Re: Can the HOT state be a loop?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13402#p13402"><![CDATA[
I see. I'm just going to copy those sets of frames several times so it seems like it's looping. Hopefully a 10 MB image won't slow anyone down.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3965">TigerNightmare</a> — Tue Jun 17, 2014 1:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-16T22:34:43-07:00</updated>
<published>2014-06-16T22:34:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13401#p13401</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13401#p13401"/>
<title type="html"><![CDATA[Re: Can the HOT state be a loop?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13401#p13401"><![CDATA[
No, states cannot have animations. This is for 2 reasons. First, if a state is animated then the beginning of the transition to other states will not match. And second, it is not nice to consume system resources while in a static state.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jun 16, 2014 10:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TigerNightmare]]></name></author>
<updated>2014-06-16T10:57:44-07:00</updated>
<published>2014-06-16T10:57:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13396#p13396</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13396#p13396"/>
<title type="html"><![CDATA[Can the HOT state be a loop?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2830&amp;p=13396#p13396"><![CDATA[
I spent a decent amount of time creating my first animated start menu button and I think it's pretty good, more or less. But I'm not 100% satisfied. I would like to have the hot state loop instead of fixated on any single frame. Is this possible? The documentation on the site only shows the capabilities of the custom animated button system through the examples provided, but there's nothing about having multiple ranges and what you could do with that.<br /><br />As it is right now, frame 0 is the normal state, frame 33 is the hot state and frame 8 is the pressed state. What I would like to do is have the normal to hot transition be frames 0-33 followed by a loop of a range with frames 9-33. Any help appreciated, thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3965">TigerNightmare</a> — Mon Jun 16, 2014 10:57 am</p><hr />
]]></content>
</entry>
</feed>