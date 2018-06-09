<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=2902" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-06-30T23:38:35-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=2902</id>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-06-30T23:38:35-07:00</updated>
<published>2014-06-30T23:38:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13678#p13678</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13678#p13678"/>
<title type="html"><![CDATA[Re: Animated Start Button Pixel Colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13678#p13678"><![CDATA[
ok, cool , i've updated the tutorial to reflect all this.. thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Mon Jun 30, 2014 11:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-30T23:07:29-07:00</updated>
<published>2014-06-30T23:07:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13676#p13676</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13676#p13676"/>
<title type="html"><![CDATA[Re: Animated Start Button Pixel Colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13676#p13676"><![CDATA[
While it might work to not have the last 4 pixels, they should be there for completeness. Imagine if a future version of Classic Shell (or some other software) decides to support those transitions. Then if you don't set the data to 0, your start button will become incompatible.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jun 30, 2014 11:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-06-30T23:01:06-07:00</updated>
<published>2014-06-30T23:01:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13675#p13675</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13675#p13675"/>
<title type="html"><![CDATA[Re: Animated Start Button Pixel Colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13675#p13675"><![CDATA[
by that you mean:<br /><br />6 Normal to Hot - Value Data<br />7 Normal to Hot - Range<br />8 Hot to Normal - Value Data<br />9 Hot to normal - Range<br />10 Normal to Pressed - 0R, 0G, 0B<br />11 Pressed to Normal - 0R, 0G, 0B<br />12 Hot to Pressed - 0R, 0G, 0B<br />13 Pressed to Hot - 0R, 0G, 0B<br /><br />right?<br /><br />I see now the redundancy of adding information to the Hot to Pressed and Pressed to Hot, since its already defined in pixels 4 &amp; 5..  negating any animation or need for frames whatsoever<br /> <br />is there any reason the last 4 pixels can't just be left blank?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Mon Jun 30, 2014 11:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-30T22:48:15-07:00</updated>
<published>2014-06-30T22:48:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13674#p13674</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13674#p13674"/>
<title type="html"><![CDATA[Re: Animated Start Button Pixel Colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13674#p13674"><![CDATA[
No transitions are supported except between Normal and Hot. If the button is already in the Hot state, clicking with the mouse presses the button, but no frames between the two states can be played. Leave the last 4 transitions as single black pixels.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jun 30, 2014 10:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-06-30T17:32:44-07:00</updated>
<published>2014-06-30T17:32:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13666#p13666</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13666#p13666"/>
<title type="html"><![CDATA[Re: Animated Start Button Pixel Colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13666#p13666"><![CDATA[
Also, for the Hot to Pressed and the Pressed to Hot, it only supports one frame of animation between those two states anyway, and so is the Green value even necessary there, and must it also accompany a &quot;Range&quot; defined in the adjacent Pixel, or can simply one pixel be defined?<br /><br />for example, in the second example above, pixel 12 is hot to pressed, and pixel 13 is pressed to hot.. if we define those, as a single frame, since no more is possible, do we still need the ranges defined in 13 &amp; 15?, moving to Pressed to Hot to the 14th pixel?<br /><br />and is Normal to Pressed also only 1 frame? and same with Pressed to Normal?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Mon Jun 30, 2014 5:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-06-30T17:19:12-07:00</updated>
<published>2014-06-30T17:19:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13664#p13664</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13664#p13664"/>
<title type="html"><![CDATA[Animated Start Button Pixel Colors]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2902&amp;p=13664#p13664"><![CDATA[
So.. I have some questions<br /><br />Pixels 0 &amp; 1 are required and dont change<br /><br />Pixel 2 just says number of frames in animation and how many rows of information you are using.. i'm sure never more than 1<br /><br />Pixels 3-5 just name the single frame for each button state<br /><br />then pixels 6+ describe transitions, and are used in pairs of pixels if a transition is defined, with the first pixel being transition info and the second pixel being the range of frames to animate... and if there is no transition defined, then its left as a single blank.. is that right?<br /><br />so for example. these frames:<br /><br />6 &amp; 7 Normal to Hot<br />8 &amp; 9 Hot to Normal<br />10 &amp; 11 Normal to Pressed<br />12 &amp; 13 Pressed to Normal<br />14 &amp; 15 Hot to Pressed<br />16 &amp; 17 Pressed to Hot<br /><br />are ok if they are all defined as transitions...<br /><br />but if we only define one type of transition, then it would be: <br /><br />6 Normal to Hot (left blank)<br />7 Hot to Normal (left blank)<br />8 &amp; 9 Normal to Pressed<br />10 &amp; 11 Pressed to Normal<br />12 Hot to Pressed (left blank)<br />13 Pressed to Hot (left blank)<br /><br />is that right? <br /><br />and I also don't understand &quot;Normal to Pressed&quot;<br /><br />and how is that animation different from going from normal to hot.. can you explain what the mouse is doing at that time, and how the animations are different?<br /><br />thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Mon Jun 30, 2014 5:19 pm</p><hr />
]]></content>
</entry>
</feed>