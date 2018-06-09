<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=2915" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-07-03T17:04:26-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=2915</id>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-07-03T17:04:26-07:00</updated>
<published>2014-07-03T17:04:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13759#p13759</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13759#p13759"/>
<title type="html"><![CDATA[Re: Animation Implementation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13759#p13759"><![CDATA[
I suppose it would need a new extension, such as .AIS (Animated Image Sequence?) or somehting.. maybe .APNG or .apg for short...  and a codec which renders it as animated, so it will never be viewed as a long strip of stills<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Jul 03, 2014 5:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-07-03T16:49:35-07:00</updated>
<published>2014-07-03T16:49:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13758#p13758</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13758#p13758"/>
<title type="html"><![CDATA[Re: Animation Implementation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13758#p13758"><![CDATA[
wow, thats awesome, well done!<br /><br />I believe this is the first viable Animate PNG scenario<br /><br />I sent an email to all people at the W3C Consortium for the World-Wide-Web HTML5..<br /><br />I wonder if you would be willing to put in another state, aside from Normal, Hot, and Pressed, to &quot;Animated&quot;<br /><br />so it can just loop continuously in its normal state.. that would be cool for Orbs, but also essential for development and use in other areas<br /><br />It really needs to have a looping from start to end and back to start (repeating loop).. as well as a start to end, end to start loop (reversing loop)<br /><br />having those would allow the image to save file size and reduce the frames..<br /><br />and maybe also have a once play through function..<br /><br />and it would also be pretty important to be able to define each frames individual duration during the animation, in pairs of pixels, so we could literally use several rows of pixels for the initial data, and have quite a complex animation. <br /><br />and then you could create a small little executable tool that could auto-fill in the pixels based on user-defined data in a GUI<br /><br />and to resize an image, it could read the pixel data and count the rows of data, then remove those rows from the image, then resize it, then add those rows back to the image with the original pixel data<br /><br />it'd be even better if it could stitch the individual image frames together<br /><br />May I suggest adding the first ANM &amp; BTM ASCII data to the first two pixels in every row used, so that a program will be able to more easily define which rows are information, as its reading and copying the info for resizing purposes<br /><br />I'll PM you the email I sent<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Jul 03, 2014 4:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-07-03T08:17:09-07:00</updated>
<published>2014-07-03T08:17:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13750#p13750</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13750#p13750"/>
<title type="html"><![CDATA[Re: Animation Implementation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13750#p13750"><![CDATA[
I thought it would be cool if the hover effect is not just a simple cross-blend but an actual animated sequence. I invented this format myself but I have no problem if other programs start using it. It is somewhat based on the system used for animated cursors.<br /><br />I myself made the original button as layers in Photoshop and then hand-stitched them in a larger bitmap, then added the description row. This way I can resize the PSD without bleeding between the frames.<br />Notice that the description pixels don't depend on the image size. They can be reused without change for every size.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jul 03, 2014 8:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-07-03T03:16:41-07:00</updated>
<published>2014-07-03T03:16:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13745#p13745</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13745#p13745"/>
<title type="html"><![CDATA[Re: Animation Implementation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13745#p13745"><![CDATA[
not even Photoshop supports the kind of design functions needed to create these animated PNGs... namely the ability to copy and paste frames in place, within a square marching ants selection in the long document.<br /><br />I requested it on their forums..<br /><br />a great program would be one that sews together your sequence of images into one long image, and then adds the first pixel data for you...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Jul 03, 2014 3:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-07-03T03:11:37-07:00</updated>
<published>2014-07-03T03:11:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13744#p13744</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13744#p13744"/>
<title type="html"><![CDATA[Animation Implementation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2915&amp;p=13744#p13744"><![CDATA[
So.. Where does the idea for the Animation for the Orb come from?<br /><br />Where else has it been implemented?<br /><br />Who created the First-Line pixel data reading idea?<br /><br />And where else is it supported? anywhere?<br /><br />is this available in HTML5?<br /><br />and are there any Players / Readers / Browsers that support these Animated PNGs?<br /><br />they are infinitely better than gifs.. its the coolest thing Ive seen on the web, ever.. but its not on the web<br /><br />It wouldn't be too difficult to create a program which calculates the desired output file-size &amp; dimensions with a given frame number, then calculates the total image Height, then resizes the width according to the needs of the height, and also adds the one row of pixels on the top<br /><br />with a GUI for the colors in the data to be automatically filled in by the program when you enter the required values in the fields..<br /><br />seems like someone could make a great program that could spread around the web as a new standard, and be soon accepted by all kinds of media &amp; web apps..<br /><br />maybe there could also be a codec which is created to add support for animated PNG's for your favorite apps &amp; browsers<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Jul 03, 2014 3:11 am</p><hr />
]]></content>
</entry>
</feed>