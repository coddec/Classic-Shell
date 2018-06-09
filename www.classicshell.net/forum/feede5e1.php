<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=8028" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-10-19T15:41:33-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=8028</id>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-10-19T15:41:33-07:00</updated>
<published>2017-10-19T15:41:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34513#p34513</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34513#p34513"/>
<title type="html"><![CDATA[Re: User_frame_position=left2,104 Invalid?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34513#p34513"><![CDATA[
Silly of me, center positions for both columns in classic too.  <img src="http://www.classicshell.net/forum/images/smilies/icon_redface.gif" alt=":oops:" title="Embarrassed" />  <br /><br />What I did in past was set the + ,- for left or right, <br />but once an entry is added to column with longer name, everything went out of alignment.<br />Worse for column left, not so much for column right, for users don't change entries, except maybe add another network entry.<br /><br />Maybe MeetHG knows something?<br /><br /><br />I'm having  a similar stretching shrinking problem of LCARS skin  I'm making. <br />Wish there was some skin text to put in, lock 2nd column at a certain height/width.<br />I can get 12 or 13 color bar entries to show correctly. Anything less, menu collapse into a black hole.  <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br /><br /><br /><br />The name font size would need to be bigger for Hidpi, as Ivo said it does not auto change like regular text.<br /><br />This has nothing to do with Classic shell.<br />I updated to latest Fall Update. Now I can't turn off the damn horizontal scrolling on Edge explorer. It's freaking me out.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Thu Oct 19, 2017 3:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-10-19T14:59:57-07:00</updated>
<published>2017-10-19T14:59:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34512#p34512</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34512#p34512"/>
<title type="html"><![CDATA[Re: User_frame_position=left2,104 Invalid?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34512#p34512"><![CDATA[
Thanks this solves the user bitmap mask; I had assumed because the .bmp included in the skin was just black and white, that a .png would need to follow the same rules, with black being auto-converted to transparency.<br /><br />So your saying you don't think there is a way to align the user frame to the left side of the right column?<br />the right side of the the right column with some negative offset would do the trick.<br />As i mentioned <span style="background-color:#dce1e5;"><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">User_frame_position=center2,104</span></span></span>works; aligning to the center of the right column (though I need the left)<br /><br /><br />also Thanks for the name position, i hadn't gotten to that yet <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Thu Oct 19, 2017 2:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-10-19T08:01:07-07:00</updated>
<published>2017-10-19T08:01:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34509#p34509</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34509#p34509"/>
<title type="html"><![CDATA[Re: User_frame_position=left2,104 Invalid?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34509#p34509"><![CDATA[
Looks like invalid.<br />Looking at the tute, for classic style, just negative or positive numbers, and 7 style auto centers in right column. <br />I got tricked into thinking user name positions could be used too. <br />Using +,- numbers inside does not work too well from past experience,<br /> with shrinking , expanding.<br /> A good future request.<br /><br />The user image png is not 32 bit transparent on outside.<br /><br />Reading of left2,<br />helping out with rough name position:<br /><br />OPTION USER_NAME=#7015,0<br /><br />[USER_NAME]<br />User_name_position=65,315,-70,355<br />User_name_align=left2<br />User_font=&quot;Franklin Gothic Medium&quot;,normal,22<br />User_text_color=#FFFFFF<br /><br />[HIGH_DPI AND USER_NAME]<br />User_name_position=80,315,-80,355<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Thu Oct 19, 2017 8:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-10-19T01:12:53-07:00</updated>
<published>2017-10-19T01:12:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34506#p34506</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34506#p34506"/>
<title type="html"><![CDATA[User_frame_position=left2,104 Invalid?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8028&amp;p=34506#p34506"><![CDATA[
This should be the correct formatting to get the user frame aligned to the left side of the right column correct? User_frame_position=center2,104 works to align center<br /><br />also  can User_mask=61 refer to a .png in the IMAGE folder (documentation suggest it can, however it doesnt seem to work for me.), or does it need to be a bitmap in the Bitmap folder?<br /><br />Attached is the Skin in question<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Thu Oct 19, 2017 1:12 am</p><hr />
]]></content>
</entry>
</feed>