<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7949" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-10-02T10:46:05-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7949</id>
<entry>
<author><name><![CDATA[Fid33l]]></name></author>
<updated>2017-10-02T10:46:05-07:00</updated>
<published>2017-10-02T10:46:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34295#p34295</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34295#p34295"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34295#p34295"><![CDATA[
Done! Thank you again for putting up with my shit   <img src="http://www.classicshell.net/forum/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><br /><br />By the way I managed to get rid of that 1 pixel permanent grey border by changing Main_opacity from solid to region<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24743">Fid33l</a> — Mon Oct 02, 2017 10:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-10-02T10:32:52-07:00</updated>
<published>2017-10-02T10:32:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34294#p34294</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34294#p34294"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34294#p34294"><![CDATA[
Yours is still 27 pixels wide, however it has blue lines to the left of the 'windows 98 text' thus we change the numbers:<br />from Main_bitmap_slices_X=21,1,1,0,1,3<br />to Main_bitmap_slices_X=22,1,1,0,1,2<br /><br />Y slices really don't matter in this case because we still have 3 pixels on top, and on bottom for your image.<br />Reshacker can be a bit of a pain (especially the 'new' version, where even the search function is broke) also it cant save in your skins folder (I would suggest saving to desktop, and just dragging to the skins folder)<br />and remember anytime you edit the text in a skin you have to manually compile it, or its just saving the old version. (do this by selecting a different resource, then hitting 'yes' for the prompt asking to compile)<br /><br />Here is that file, if you still cant figure it out:<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Oct 02, 2017 10:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fid33l]]></name></author>
<updated>2017-10-02T09:57:23-07:00</updated>
<published>2017-10-02T09:57:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34293#p34293</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34293#p34293"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34293#p34293"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />Glad I could help <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /></div><br /><br /><br />Hey Jc, I still for the love of god can't figure bitmap slices out<br /><br />What numbers should I put in &quot;Main_bitmap_slices_X&quot; and &quot;Main_bitmap_slices_Y&quot;<br />for this new bitmap I made to work? (I just need the numbers)<br />Again, I need the 3 pixel (Grey and white) border to appear at the left and top side and the 2 pixel black and grey at the right side and bottom and the blue part as the caption of course<br /><br />Sorry for the inconvenience...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24743">Fid33l</a> — Mon Oct 02, 2017 9:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-10-01T19:26:28-07:00</updated>
<published>2017-10-01T19:26:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34292#p34292</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34292#p34292"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34292#p34292"><![CDATA[
Glad I could help <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sun Oct 01, 2017 7:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fid33l]]></name></author>
<updated>2017-10-01T19:15:37-07:00</updated>
<published>2017-10-01T19:15:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34291#p34291</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34291#p34291"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34291#p34291"><![CDATA[
Thank you Jcee, that's exactly what I had in mind.<br />I just did some tweaks to show the border only at the left and top side like in 98 but now it's perfect.<br />I appreciate the help<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24743">Fid33l</a> — Sun Oct 01, 2017 7:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-10-01T18:16:51-07:00</updated>
<published>2017-10-01T18:16:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34290#p34290</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34290#p34290"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34290#p34290"><![CDATA[
Ok, now I understand why you were having problems <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />This particular skin uses a color fill option for the main area, instead of stretching a bitmap (like 99% of other skins), its also overly complicated by all the options <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />but this is what I had to do:<br /><br />1. open the first file in the skin, find 'Variation3=102,<br />Windows 98&quot;<br />This tells me that this variation has its own variables applied after everything in this '1' file is read (also what bitmap to use)<br /><br />2. we go to 102 (2 files down) and note that Main_bitmap=102<br />3. export bitmap 102<br />4. realize that bitmap 102 doesnt have any gray to its right, and thus something funky is up<br />5. ??? (lets call it magic, because i really duno what i did possibly nothing, it took about 15 minutes)<br />6. change the Main_bitmap_slices_X in file 1, (changing the last number from 0 to 3<br />7. change Main_bitmap_slices_Y in file 1 (changing the first number to 3)<br />8. compile<br />9. add 6 pixels to the height, and 3 to the width (and then edit the colors of said pixels)<br />10. import the new image, save and exit and throw into .skins folder<br />.<br /><br />Here is the finished product, (I think, not a big win98 buff so it might need a few more tweaks, though that should be alot easier now, that the bitmap actually stretches how its suposed to)<br /><br />PS I broke every other variation except the windows 98 one <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> so if you want other versions from that skin, just save it with a new filename<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sun Oct 01, 2017 6:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-10-01T14:53:54-07:00</updated>
<published>2017-10-01T14:53:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34289#p34289</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34289#p34289"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34289#p34289"><![CDATA[
In case you want to chop up and tailor an already made skin,  see here:<br /><br /><!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewtopic.php?f=17&amp;t=6796">viewtopic.php?f=17&amp;t=6796</a><!-- l --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sun Oct 01, 2017 2:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-10-01T13:32:20-07:00</updated>
<published>2017-10-01T13:32:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34287#p34287</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34287#p34287"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34287#p34287"><![CDATA[
This always confused me. <img src="http://www.classicshell.net/forum/images/smilies/icon_neutral.gif" alt=":|" title="Neutral" /> <br />Comments from Jcee are good.<br />Here are some more.<br /><br />If you are using the &quot;Classic skin&quot;, the line or 2 lines are added automatically<br />the menu part of bitmap has 0 alpha channel, so it can be used in Classic theme on Windows 7.<br /><br />I copied over what I found in the skin file:<br /><br />; Main_thin_frame - use a thin 1-pixel frame instead of the thick 3D frame<br />; This parameter is only used in Classic mode, and when Main_opacity is &quot;solid&quot;. Default is 0<br />Main_thin_frame=1<br /><br />If you don't want to use a theme, maybe the only way is add this text to skin file:<br /><br />Main_opacity=region<br /><br />and edit the bitmap, to change the 0/255 alpha channel to 255/255 alpha.<br />The menu bitmap is 32 bit. <br />Another way, is convert to bitmap 24 bit( without the alpha channel),<br />Most cheapo photo programs might save it as 24 bit automatically.<br />You would need to add your own pixel lines to taste.<br /><br />Just tried it with:<br /><br />; Main_thin_frame - use a thin 1-pixel frame instead of the thick 3D frame<br />; This parameter is only used in Classic mode, and when Main_opacity is &quot;solid&quot;. Default is 0<br />Main_thin_frame=0<br />Main_opacity=region<br /><br /><br />Oh, I see you uploaded your skin now. Well, I'll leave it up to you guys.  <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sun Oct 01, 2017 1:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fid33l]]></name></author>
<updated>2017-10-01T13:18:53-07:00</updated>
<published>2017-10-01T13:18:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34286#p34286</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34286#p34286"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34286#p34286"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />1. edit the .bmp file in photoshop to look different<br />2. edit the slices, to add more pixels to the outside layer: <br /><!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html#slices">http://www.classicshell.net/tutorials/s ... tml#slices</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html#main_menu">http://www.classicshell.net/tutorials/s ... #main_menu</a><!-- m --><br />3. save and add .skin to the skins folder<br />Or<br />attach the .skin in question here...<br /></div><br /><br /><br />I've been trying to do that for a while now, but failed<br /><br />I hope I'm not asking too much but could you do it for me?<br /><br />PS: It's just the &quot;Windows 98&quot; variation, of course<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24743">Fid33l</a> — Sun Oct 01, 2017 1:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-10-01T12:35:26-07:00</updated>
<published>2017-10-01T12:35:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34285#p34285</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34285#p34285"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34285#p34285"><![CDATA[
1. edit the .bmp file in photoshop to look different<br />2. edit the slices, to add more pixels to the outside layer: <br /><!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html#slices">http://www.classicshell.net/tutorials/s ... tml#slices</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html#main_menu">http://www.classicshell.net/tutorials/s ... #main_menu</a><!-- m --><br />3. save and add .skin to the skins folder<br />Or<br />attach the .skin in question here...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sun Oct 01, 2017 12:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fid33l]]></name></author>
<updated>2017-10-01T10:38:05-07:00</updated>
<published>2017-10-01T10:38:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34284#p34284</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34284#p34284"/>
<title type="html"><![CDATA[[REQUEST] Help with the border (Classic)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34284#p34284"><![CDATA[
So, I've been messing with the skins for a couple of days and I've been doing fine but there's something I can't figure out<br />How do I change this 1 pixel grey border at the top:<br /><img src="https://i.imgur.com/rjDcaIP.jpg" alt="" /><br /><br />To a 3 pixel border just like I was able to add on the caption, so it ends up looking like this:<br /><img src="https://i.imgur.com/HGWPcOT.jpg" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24743">Fid33l</a> — Sun Oct 01, 2017 10:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-09-30T23:40:06-07:00</updated>
<published>2017-09-30T23:40:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34279#p34279</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34279#p34279"/>
<title type="html"><![CDATA[Re: I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34279#p34279"><![CDATA[
Yes, but its not 'easy' <!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html">http://www.classicshell.net/tutorials/skintutorial.html</a><!-- m --> should get you started. alternatively, check the skins sub-forum to see if something close has been posted, or make a request (if the task of doing it yourself is too daunting)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat Sep 30, 2017 11:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fid33l]]></name></author>
<updated>2017-09-30T14:21:43-07:00</updated>
<published>2017-09-30T14:21:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34277#p34277</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34277#p34277"/>
<title type="html"><![CDATA[I need help with the menu's border]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7949&amp;p=34277#p34277"><![CDATA[
So I'm a long time StartIsBack user moving to Classic Shell because of all the settings and customization.<br />I'm a bit lay but I'm close to emulate the Windows 98 start menu pixel perfectly so I need help with something:<br /><img src="https://i.imgur.com/0K7j3pL.jpg" alt="" /><br /><br />Any way I can add this 3 pixel border to the start menu? I know I can add it on the caption by changing the bitmap but what about the top border?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24743">Fid33l</a> — Sat Sep 30, 2017 2:21 pm</p><hr />
]]></content>
</entry>
</feed>