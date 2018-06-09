<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=5947" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-04-22T22:22:55-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=5947</id>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2016-04-22T22:22:55-07:00</updated>
<published>2016-04-22T22:22:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5947&amp;p=26289#p26289</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5947&amp;p=26289#p26289"/>
<title type="html"><![CDATA[User picture types]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5947&amp;p=26289#p26289"><![CDATA[
User picture types.<br /><br />Just posting this for anyone thinking of adding user picture to a skin that does not have it.<br />Shows the different results, using Classic style.<br />Positioning text, text padding accommodation would need to be put in skin file too. <br />The skinning tutorial can teach most of that, or look at a similar made skin. <br /><br />CSM can auto build a square frame for user picture.<br />Just requires &quot;User_image_size=48&quot; to be put in skin file.<br /><br />Or have a custom frame for the square picture, called a &quot;User_bitmap&quot;<br />Make sure the part in middle has alpha channel at 0/255.<br />Sometimes the corners of user picture can become visible, if frame is transparent at those corners.<br /><br />Can overcome the square user picture, by using a round one called &quot;User_mask&quot;.<br />It can be used with or without the frame (User bitmap).<br />Have to make sure the bitmap is same size as User image size. It can be square, round, spikey, etc. In this case round is better. <br />It has to have alpha 255/255 at the middle part, and 0/255 alpha where you don't want picture to show.<br />The extra benefit of using a &quot;user mask&quot; is transparent png user picture/icons can be used, to blend in with menu background.<br />To get that, use CSM user picture settings to add picture instead of Windows.<br /><br />Edit: added extra info. I like palm trees better than Jeff.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Fri Apr 22, 2016 10:22 pm</p><hr />
]]></content>
</entry>
</feed>