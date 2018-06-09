<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=3242" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-10-08T01:21:36-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=3242</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2014-10-08T01:21:36-07:00</updated>
<published>2014-10-08T01:21:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3242&amp;p=15195#p15195</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3242&amp;p=15195#p15195"/>
<title type="html"><![CDATA[Ignore for now]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3242&amp;p=15195#p15195"><![CDATA[
Ignore this for now Ivo, unless you absolutely feel like you won't be willing to implement it ever <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> (in which case go-ahead and tell me before I finish) Im just posting it in an un-finished state, and ill get back to it later.. maybe (and PM you when its ready for review)<br /><br />Anyways.. Id like to try and develop a new language for defining the UI elements of a skin. Drawing Inspiration from cropping rather than stretching. This will permit more robust skins without all the annoyances of a stretched skin.<br /><br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">MaxMainW = 500; //this limits the width of the main column to 500 pixels.<br />MinMainW = 100; // The minimum<br />MaxSideW = 500; //this limits the width of the right/side column to 500 pixels.<br />MinSideW<br /><br />W<br /><br />WCrop((MainWidth-20), s2b.bmp, 0); <br />//s2b.bmp would be a separate image, that would correspond  logically to the center slice in the main column (2nd slice, row b)<br />//This code would crop its width to that of the main column minus 20 pixels. <br />//s2b.bmp should start out at 480 pixels wide in this case, to accommodate any size start menu width without stretching.<br />// the 0 at the end represent the x(horizontal) coordinates that the image should be cropped from. <br />//If you specified 480 it would crop away the left side of the image, if you specified 240 it would crop away equal parts from left, and right retaining the center.<br />HCrop((MainHeight-20), s2b.bmp, 0); <br /><br />s2a.bmp = Maintopleft(20,0);<br />//This would create the image at the top left, offset by 20 pixels to the right. Since this item is created first, it will be on the bottom layer.<br />s1.bmp = Main.top.left(0,0); //This is equal to the top left slice, and doesn't need cropped, since it is below s2.bmp it will display over<br /><br />add buttons; <br />//This tells classic shell to create all the start menu items on this layer, above everything before it, and below everything after<br /><br /></div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Oct 08, 2014 1:21 am</p><hr />
]]></content>
</entry>
</feed>