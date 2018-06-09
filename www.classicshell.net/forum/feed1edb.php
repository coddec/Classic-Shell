<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=4489" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-04-20T04:52:50-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=4489</id>
<entry>
<author><name><![CDATA[wonderpoof]]></name></author>
<updated>2015-04-20T04:52:50-07:00</updated>
<published>2015-04-20T04:52:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18954#p18954</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18954#p18954"/>
<title type="html"><![CDATA[Re: Skin modification help]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18954#p18954"><![CDATA[
<div class="quotetitle">juniper7 wrote:</div><div class="quotecontent"><br />Hello wonderpoof. <br />...<br /></div><br /><br />Hello Juniper! Thanks for the help.<br /><br />The main cause I'm looking for the secret recipe is because I like and use the auto color feature of the taskbar.<br /><br />Currently I use a grey background a bit darker then You advised (#444444), 185 alpha, and #700000 mask, and it's quite good. During the trial and error, I began with disabling the transparency of the taskbar, and the start menu too, and then I could match up almost the exact color for the start menu(99%), but when transparency is enabled, the &quot;golden ratio&quot; has to be tuned further to maintain the colour match. Anyway, I've almost finished the other parts of the skin, and i'm quite statisfied with the result. After a bit polishing up, and preparing it to be used by others, in the end i will experiment more with the backgrounds. Hopefully somebody will hop by until then with the ultimate knowledge and help me out, because currently the colour of it is not the exact same.<br /><br />Pics of the current version. It needs quite a bit fine tuning in Classsic Shell settings, but the final appearance is pleasing (for me at least <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> ), the &quot;slide out&quot; animations with a moderate-fast speed make it look awesome <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><img src="http://i58.tinypic.com/xofqyp.png" alt="" /><br /><img src="http://i60.tinypic.com/s5l5ic.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10001">wonderpoof</a> — Mon Apr 20, 2015 4:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2015-04-19T13:42:12-07:00</updated>
<published>2015-04-19T13:42:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18939#p18939</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18939#p18939"/>
<title type="html"><![CDATA[Re: Skin modification help]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18939#p18939"><![CDATA[
Hello wonderpoof. <br /><br />The secret sauce ingredients.<br />We can only guess. It still won't track properly if on auto color, <br />even if you set the transparency, brightness, and color saturation perfectly for a preset Windows color.<br /> Auto color will tend to boost the intensity most of time, from what I notice.<br /><br />Anyway,<br />your picture looks like it is close to finishing. To get closer to your ideal,<br />the grey or brightness needs to be turned down on the skin bitmap or overridden more.<br /><br />I can only go from a test skin I made from before:<br />The bitmap was grey at 40 red, 40 green, 40 blue  (#282828)<br />The alpha transparency layer was 150 Maybe a little higher is better?<br />The opacity in the skin text was set to fullalpha<br />The color intensity red mask(no bitmap, just text), <br />was set to 165  (#A50000)  Probably anywhere from 150 to 180 <br />This would be ball park similar to Win8.1 transparent taskbar.<br /><br />Might need to make selectable variation amounts for matching solid taskbar,<br />or if blured with 3rd party software.<br /><br />Bye.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sun Apr 19, 2015 1:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wonderpoof]]></name></author>
<updated>2015-04-18T04:36:27-07:00</updated>
<published>2015-04-18T04:36:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18915#p18915</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18915#p18915"/>
<title type="html"><![CDATA[Re: Skin modification help]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18915#p18915"><![CDATA[
Here is what I've got so far<br /><img src="http://i61.tinypic.com/2yl198m.png" alt="" /><br />I could only get this close to the taskbar color, with lots of trial and error. But I still believe that with a specific background color (and transparency on the alpha chanel), combined with the proper glass color blending amount, and opacity mode it is possible to achieve the exact same look and color of the taskbar. The only clue i've found is in Classic Shell's settings, where one can disable the taskbar transparency.<br /><img src="http://i62.tinypic.com/eg711h.jpg" alt="" /><br />Maybe these values are what Windows uses on the taskbar by default?<br />If somebody has any advice please let me know.<br />Notice the start button, which is from forum user &quot;GauravK&quot; (thanks a lot), on which the logo blends in to the exact taskbar colour. So I guess then it is possible what I'm after.<br /><br />I've also replicated the looks of the selection in the taskbar (and the little white arrow too but since there is no accessible sub menus in my menu it is now visible) to the start menu from scratch, which with I'm quite satisfacted considering I'm not into graphics design at all. But I think maybe these images (and masks) what the taskbar uses could be found somewhere in the system, which would come really handy for me to get the EXACT same look. Any advice regarding this is also welcome.<br /><br />And of course if somebody would like a copy of my StartBar skin, let me know <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10001">wonderpoof</a> — Sat Apr 18, 2015 4:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wonderpoof]]></name></author>
<updated>2015-04-16T10:15:34-07:00</updated>
<published>2015-04-16T10:15:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18899#p18899</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18899#p18899"/>
<title type="html"><![CDATA[Re: Skin modification help]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18899#p18899"><![CDATA[
I'm using a 3x3px black bmp as background, and &quot;Main_opacity=fullalpha&quot;. As far as i undestand, i have to find the right amount of alpha for the background, and the right amount of blending with the glass colour using &quot;Main_bitmap_mask=#000000&quot;.<br /><br />So far, i've tried various alpha levels (127-160-200-220) and fiddled around with the amount of blending, but still unable to find the exact taskbar look. Maybe somebody can help me come up with the recipe?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10001">wonderpoof</a> — Thu Apr 16, 2015 10:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wonderpoof]]></name></author>
<updated>2015-04-16T07:33:05-07:00</updated>
<published>2015-04-16T07:33:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18895#p18895</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18895#p18895"/>
<title type="html"><![CDATA[Skin modification help]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4489&amp;p=18895#p18895"><![CDATA[
Hello everybody!<br /><br />I'm trying to create a basic minimalistic skin for Classic Shell, but stuck mangling the background. <br /><br />What I'm trying to achive is a taskbar-like start menu, which has exactly the same glass color and transparency as the task bar, fading out in the top edge. See attached &quot;goal.png&quot;<br /><br />I've tried my best mangling with the background image, mask, and opacity, but the results are far from the goal, see attached&quot;current.png&quot;.<br /><br />I've succesfully set up the appearence with the icon size, and various padding settings, but i can't find a way to achive the same transparency, and colour (The taskbar colour is set to &quot;auto&quot; in windows).<br />Could somebody help me with this?<br /><br />Also, the fading top edge looks impossible to achive for me, anybody could hint me how could it be done?<br /><br />Thanks in advance!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10001">wonderpoof</a> — Thu Apr 16, 2015 7:33 am</p><hr />
]]></content>
</entry>
</feed>