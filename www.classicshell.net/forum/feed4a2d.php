<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=4047" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-12-27T12:28:55-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=4047</id>
<entry>
<author><name><![CDATA[Simone73]]></name></author>
<updated>2014-12-27T12:28:55-07:00</updated>
<published>2014-12-27T12:28:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17178#p17178</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17178#p17178"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17178#p17178"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />I found the problem. The BMP file consists of 3 parts:<br />1 - the file header<br />2 - the image header<br />3 - the pixels<br /><br />The image header contains the size of the pixels section (part #3). The files you have incorrectly use the sum of the sizes of parts #2 and #3. Some programs ignore the size and read the image anyway. The Windows API I use to load the image is more picky and fails.<br /><br />BTW, I recommend you enable the &quot;Report skin errors&quot; setting at the bottom of the General Behavior tab. It will show you extra information to help you troubleshoot the problems.<br /></div><br /><br /><br />Tnks for your effort Ivo!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6189">Simone73</a> — Sat Dec 27, 2014 12:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-12-27T11:56:49-07:00</updated>
<published>2014-12-27T11:56:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17176#p17176</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17176#p17176"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17176#p17176"><![CDATA[
I found the problem. The BMP file consists of 3 parts:<br />1 - the file header<br />2 - the image header<br />3 - the pixels<br /><br />The image header contains the size of the pixels section (part #3). The files you have incorrectly use the sum of the sizes of parts #2 and #3. Some programs ignore the size and read the image anyway. The Windows API I use to load the image is more picky and fails.<br /><br />BTW, I recommend you enable the &quot;Report skin errors&quot; setting at the bottom of the General Behavior tab. It will show you extra information to help you troubleshoot the problems.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Dec 27, 2014 11:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Simone73]]></name></author>
<updated>2014-12-27T04:16:01-07:00</updated>
<published>2014-12-27T04:16:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17169#p17169</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17169#p17169"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17169#p17169"><![CDATA[
Ok, resaving all bitmaps with photoshop (CS6) solved the problem. Something is wrong in the bitmaps saved by resource hacker.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6189">Simone73</a> — Sat Dec 27, 2014 4:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Simone73]]></name></author>
<updated>2014-12-26T15:09:34-07:00</updated>
<published>2014-12-26T15:09:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17155#p17155</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17155#p17155"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17155#p17155"><![CDATA[
I'm using photoshop CS6.<br /><br />The compiled skin works fine, the uncompressed one not, same resources.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6189">Simone73</a> — Fri Dec 26, 2014 3:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-12-26T14:30:54-07:00</updated>
<published>2014-12-26T14:30:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17152#p17152</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17152#p17152"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17152#p17152"><![CDATA[
BTW, resaving the bitmaps with Photoshop CS2 fixes the problem.<br />What program did you use to save the bitmaps?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Dec 26, 2014 2:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Simone73]]></name></author>
<updated>2014-12-26T14:27:41-07:00</updated>
<published>2014-12-26T14:27:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17150#p17150</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17150#p17150"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17150#p17150"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />For some reason the 3.bmp file fails to load. I don't know why. I will have to investigate over the weekend.<br /></div><br /><br /><br />ok, tnks!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6189">Simone73</a> — Fri Dec 26, 2014 2:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-12-26T14:26:20-07:00</updated>
<published>2014-12-26T14:26:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17149#p17149</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17149#p17149"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17149#p17149"><![CDATA[
For some reason the 3.bmp file fails to load. I don't know why. I will have to investigate over the weekend.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Dec 26, 2014 2:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Simone73]]></name></author>
<updated>2014-12-26T10:40:38-07:00</updated>
<published>2014-12-26T10:40:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17144#p17144</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17144#p17144"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17144#p17144"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Create a zip file with the exact files you have extracted and attach it here.<br /></div><br /><br /><br />This is the content of my skins folder, all resources are from aero glass skin.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6189">Simone73</a> — Fri Dec 26, 2014 10:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-12-26T10:09:55-07:00</updated>
<published>2014-12-26T10:09:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17143#p17143</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17143#p17143"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17143#p17143"><![CDATA[
Create a zip file with the exact files you have extracted and attach it here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Dec 26, 2014 10:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Simone73]]></name></author>
<updated>2014-12-26T09:01:26-07:00</updated>
<published>2014-12-26T09:01:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17141#p17141</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17141#p17141"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17141#p17141"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />The proper skin editing procedure is to download <!-- m --><a class="postlink" href="http://www.angusj.com/resourcehacker/">http://www.angusj.com/resourcehacker/</a><!-- m --><br />then edit open with<br />from there you can edit the code, or export any .bmps contained within properly<br /></div><br /><br /><br />so i've to recompile the script every time ? i just want to avoid that like explained in the tutorial.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6189">Simone73</a> — Fri Dec 26, 2014 9:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2014-12-26T06:47:54-07:00</updated>
<published>2014-12-26T06:47:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17139#p17139</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17139#p17139"/>
<title type="html"><![CDATA[Re: Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17139#p17139"><![CDATA[
The proper skin editing procedure is to download <!-- m --><a class="postlink" href="http://www.angusj.com/resourcehacker/">http://www.angusj.com/resourcehacker/</a><!-- m --><br />then edit open with<br />from there you can edit the code, or export any .bmps contained within properly<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Fri Dec 26, 2014 6:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Simone73]]></name></author>
<updated>2014-12-26T06:27:19-07:00</updated>
<published>2014-12-26T06:27:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17138#p17138</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17138#p17138"/>
<title type="html"><![CDATA[Custom Skin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4047&amp;p=17138#p17138"><![CDATA[
I'm trying to customize a skin and i've extracted all the resources in the skins folder and named like this:<br /><br />1.txt<br />1.bmp<br />2.bmp<br />...<br />...<br />...<br /><br />When i select the custom skin in classic menu i can see al settings but the bmps are not loaded.<br /><br />What is wrong ?<br /><br />P.S. I'm using classic shell 4.20 beta<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6189">Simone73</a> — Fri Dec 26, 2014 6:27 am</p><hr />
]]></content>
</entry>
</feed>