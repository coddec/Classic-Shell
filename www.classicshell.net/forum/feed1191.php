<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=5229" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-10-05T13:07:01-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=5229</id>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-10-05T13:07:01-07:00</updated>
<published>2015-10-05T13:07:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22795#p22795</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22795#p22795"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22795#p22795"><![CDATA[
Have just discovered that PHP's ImageMagick lib writes .ico files, so I'll probably write some kind of drag-and-drop multi-file, multi-resolution upload script to do all the hard work for me.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Mon Oct 05, 2015 1:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-10-05T12:52:43-07:00</updated>
<published>2015-10-05T12:52:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22794#p22794</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22794#p22794"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22794#p22794"><![CDATA[
They'll for sure all need individual love and care at 16px, and if I'm building a set of 4, I'll need to work out a workflow that won't be too onerous.<br /><br />Current thinking is...<br /><br />Setup:<br /><br /><ol style="list-style-type: decimal"><li>Build base PSD (as above)</li></ol><br /><br /><br />Design (per icon):<br /><br /><ol style="list-style-type: decimal"><li>Copy base PSD and rename</li><li>Copy and paste existing 24px icon</li><li>Create vectors for 48px+ icon sizes</li><li>Resize to complete 32px and possibly 24px icons</li><li>Manually paint 16px image</li></ol><br /><br />Creation (per icon):<br /><br /><br /><ol style="list-style-type: decimal"><li>Export all sizes using File &gt; Quick Export as PNG</li><li>Use the online service <a href="http://icoconvert.com/Multi_Image_to_one_icon/" class="postlink">Icon Convert</a> to merge images and create icon frames</li></ol><br /><br />Editing (per icon)<br /><br /><br /><ol style="list-style-type: decimal"><li>Export as in previous step</li><li>Use <a href="http://icofx.ro/" class="postlink">IcoFX</a> to import individual frames</li></ol><br /><br /><br />Fingers-crossed that's covers everything!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Mon Oct 05, 2015 12:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2015-10-05T12:11:22-07:00</updated>
<published>2015-10-05T12:11:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22790#p22790</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22790#p22790"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22790#p22790"><![CDATA[
Is that bicubic?<br />I was just thinking.<br />Maybe for 16x16 size, they don't need re-sizing. Just cropped to 16x16?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Mon Oct 05, 2015 12:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-10-05T12:05:43-07:00</updated>
<published>2015-10-05T12:05:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22789#p22789</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22789#p22789"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22789#p22789"><![CDATA[
Luckily some icons lend themselves to reduction better than others!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Mon Oct 05, 2015 12:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2015-10-05T11:59:10-07:00</updated>
<published>2015-10-05T11:59:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22788#p22788</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22788#p22788"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22788#p22788"><![CDATA[
You are right, davestewart.<br />Just wanted to see what it takes to resize your large picture, and touch up for 16x16 icon.<br />It's tough. I must have spent an hour to get to what's in the submenu screenshot.<br /><br />Must be some program that can do it automatically with good results.<br />Happy painting. My eyes just gave out. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Mon Oct 05, 2015 11:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-10-05T12:02:59-07:00</updated>
<published>2015-10-05T05:24:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22786#p22786</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22786#p22786"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22786#p22786"><![CDATA[
<div class="quotetitle">juniper7 wrote:</div><div class="quotecontent"><br />That would truly be one size for all.<br /></div><br /><br /><br />Actually, weirdly not!<br /><br />The less pixels you have to play with, the more &quot;iconic&quot; your images have to be.<br /><br />Take the &quot;pictures&quot; folder for example. At small image sizes you need to be really careful with your pixel-pushing.<br />Of course if it was larger you could get away with all sorts!<br /><br />In a set of icons you might get away with the larger ones being resized, but for the very smallest sizes, you will often need to craft something by hand, pixel-by-pixel, sometimes even creating a new composition in order to make things legible when you only have 16 units to play with <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Mon Oct 05, 2015 5:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2015-10-04T21:20:55-07:00</updated>
<published>2015-10-04T21:20:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22784#p22784</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22784#p22784"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22784#p22784"><![CDATA[
Reading your posts, you are very talented, and will do it for sure. <br /><br />That would be great if Windows could display vectors in icons. <br />That would truly be one size for all.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sun Oct 04, 2015 9:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-10-04T21:09:08-07:00</updated>
<published>2015-10-04T21:09:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22783#p22783</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22783#p22783"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22783#p22783"><![CDATA[
Juniper, yep - it is!<br /><br />Though in practice, only the smaller icon sizes require the hard work to make sure they don't look woolly. <br /><br />Anything on and over 32px I suspect can be a resized from a larger version, so I'll probably create vectors than can be re-purposed.<br /><br />I have a new MacBook Pro running Bootcamp, so I can probably test on there<br /><br /><img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Sun Oct 04, 2015 9:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2015-10-04T20:55:38-07:00</updated>
<published>2015-10-04T20:55:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22782#p22782</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22782#p22782"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22782#p22782"><![CDATA[
Wish I could have a 4k monitor to answer that question.<br />Using your 96 DPI setting with 24x24 size icon, as base,<br />Ivos' DPI overide settings, can go as high as 480 DPI,<br />so I guess icon sizes could go to 128x128 RGBA to keep proper proportion.<br /><br />Just out of curiousity, I opened up a couple of standard program icons in PixelFormer. <br /><br />Recuva has 6 images inside:<br />32x32 256 colors<br />16x16 256 colors<br />256x256 RGBA<br />48x48 RGBA<br />32x32 RGBA<br />16x16 RGBA<br /><br />Firefox has 4 images inside:<br />16x16 RGBA<br />32x32 RGBA<br />48x48 RGBA<br />256x256 RGBA<br /><br />I would gather the 256 size is for a desktop icon.<br />Looks like a one size fits all, does not apply for icons, if you want perfect sharp images.<br />That's a huge amount of work to make so many, and integrate them into icons!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sun Oct 04, 2015 8:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-10-04T20:20:46-07:00</updated>
<published>2015-10-04T20:20:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22779#p22779</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22779#p22779"/>
<title type="html"><![CDATA[Re: Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22779#p22779"><![CDATA[
Well Windows as you may be knowing supports all the way up to 256 px but icons up to 48 px will be good enough for a start. For 4K resolutions of today, some higher size than 48 px might look good. (Anyone have a 4K monitor to test?). Even a size like 64 px is used by the Classic Start Menu for the large icon it shows in place of the user picture when you hover over an item in the right side column in the Windows 7 style. But if you create only 256 px, it should be fairly easy to create the other small sizes.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Oct 04, 2015 8:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-10-04T13:40:38-07:00</updated>
<published>2015-10-04T13:40:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22769#p22769</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22769#p22769"/>
<title type="html"><![CDATA[Icon sizes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5229&amp;p=22769#p22769"><![CDATA[
I've been working on a bunch of icons for my Windows 10 theme, and they're looking pin-sharp at 24px (the theme's &quot;large icon&quot; size):<br /><br /><img src="https://cloud.githubusercontent.com/assets/132681/10267781/2165bcb6-6a9b-11e5-9200-c84e1e431a34.png" alt="" /><br /><br />However, I've realised I probably need to build a 16px set for small icons / submenus, AND make all of them work on high-density screens.<br /><br />Does this mean I need the following sizes?<br /><br /><ul><li>16px (small)</li><li>32px (small, high-res)</li><li>24px (large)</li><li>48px (large, high-res)</li></ul><br />I don't want to do any more work that I need to, but after putting this much effort in I would like the skin to be fairly robust.<br /><br />If someone could advise if my assumptions are correct or not, and what sets I need to create, that would be great,<br /><br /><br />Thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Sun Oct 04, 2015 1:40 pm</p><hr />
]]></content>
</entry>
</feed>