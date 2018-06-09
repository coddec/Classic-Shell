<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=4655" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-05-25T00:51:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=4655</id>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2015-05-25T00:51:45-07:00</updated>
<published>2015-05-25T00:51:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19563#p19563</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19563#p19563"/>
<title type="html"><![CDATA[Re: Matching taskbar color. 7Sidebar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19563#p19563"><![CDATA[
GauravK, you are on the ball, as usual.<br /><br />Ok, I kind of got some of that info, but probably can't use it, for I'm not a coder. <br />Still very interesting. I was thinking more of how Classic shell, <br />could use the info to have the color intensity track better for menus.<br />Not that is has to match, just decrease/increase proportionately, to the intensity slider.<br /><br />It's rather funny you showing a menu with high transparency.<br />I've been playing with a simple skin, that at first, was close to taskbar auto color.<br />Gave up on that now, as it looked too milky most of the time. Still readable from background, though.<br /><br />Now I'm playing with alpha transparency at 85/255. Color mask at mild 128/255.<br />Still white text can be just readable with white background. It's when there is <br />black text in background, or overlapping menu, where it turns really terrible. <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br />Still, I never made an almost transparent skin, for use with desktop background pictures. <br />Single column is best for it. I guess Win7 style wasn't made for it. I made the two columns transparent, <br />but for some reason, full alpha on first column, made the desktop background colors bleed into the text.<br />Anyway, I'm doing this one for myself. If I eventually upload it,<br />I will surely add white submenus as an anti confusion option. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Mon May 25, 2015 12:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-05-24T05:51:30-07:00</updated>
<published>2015-05-24T05:51:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19555#p19555</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19555#p19555"/>
<title type="html"><![CDATA[Re: Matching taskbar color. 7Sidebar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19555#p19555"><![CDATA[
The Start Menu cannot be as translucent as the Taskbar because it creates readability issues like this when another window is behind it:<br /><br /><img src="http://www.classicshell.net/forum/download/file.php?id=2066" alt="" /><br /><br /><br />Btw, I use the 7 Sidebar gadget myself too, so I observed how well the Gadget matched the Taskbar color and had a chat with Helmut Buhler a while back about this (he uses Classic Shell too btw <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /> ). Here's what he had to say:<br /><br />&quot;It actually was quite some work to get the color right. It still takes the wrong color on Windows 8 if you move the 3rd color slider to the most left. And yes, it detects if it's running on Windows 8 and takes special measures. You can enable compatibility mode to see the difference. If you are building something like it I'll be happy to share the needed code with you.<br /><br />For Windows 8.1 taskbar color, first render your window with the color 0x57&lt;&lt;24 (black with alpha). Then also enable transparency via SetLayeredWindowAttributes(hwnd, 0, 157, ULW_ALPHA); You also have to enable the DWM thing, but you probably do that already. And of course you also have to use the flag WS_EX_LAYERED. In the case that the user has selected a classic theme (the black and white ones) you have to disable the transparency though. I check that with LastAeroColor &amp; 0x00ffffff with the color returned by DwmGetColorizationColor.&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun May 24, 2015 5:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2015-05-24T03:34:50-07:00</updated>
<published>2015-05-24T03:34:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19554#p19554</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19554#p19554"/>
<title type="html"><![CDATA[Matching taskbar color. 7Sidebar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4655&amp;p=19554#p19554"><![CDATA[
Hi.<br />I was trying out a recent &quot;8Gadgetpack&quot; for Windows 8.1.<br />It has &quot;7Sidebar&quot; that can match the taskbar transparent color.<br /><br />The maker, Helmut Buhler, must have found the best place to tap the values, <br />even the intensity slider tracks almost all the way down. Good job.<br />Wonder how it's done? <img src="http://www.classicshell.net/forum/images/smilies/icon_neutral.gif" alt=":|" title="Neutral" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sun May 24, 2015 3:34 am</p><hr />
]]></content>
</entry>
</feed>