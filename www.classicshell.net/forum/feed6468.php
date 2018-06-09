<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=18&amp;t=1456" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-07-02T18:50:12-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=18&amp;t=1456</id>
<entry>
<author><name><![CDATA[R.O.B.]]></name></author>
<updated>2014-07-02T18:50:12-07:00</updated>
<published>2014-07-02T18:50:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13740#p13740</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13740#p13740"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13740#p13740"><![CDATA[
Well yeah, glass effect is what I meant by animation. Sorry if that confused you. Also, I don't believe it has a 'pressed' state, as Microsoft designed the button to immediately take the user to Metro, meaning the user probably wouldn't see it pressed. This can be seen with Classic Shell, as the button only changes if you hover over it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3546">R.O.B.</a> — Wed Jul 02, 2014 6:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-07-02T16:28:53-07:00</updated>
<published>2014-07-02T16:28:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13739#p13739</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13739#p13739"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13739#p13739"><![CDATA[
hmmm.. DWM renders graphics on screen.. and it does that using buffering.. so I'm guessing its rendered via your hardware, in a buffered state only, and doesnt get stored anywhere.. meaning you'd not be able to see it unless you could some how extract it from the buffer.. <br /><br />but are you saying that its only a 3-button state.. there is no animation actually, that it just fades one &quot;glass effect&quot; over the original image to make it look a lighter color or something?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Wed Jul 02, 2014 4:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[R.O.B.]]></name></author>
<updated>2014-07-02T13:32:44-07:00</updated>
<published>2014-07-02T13:32:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13737#p13737</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13737#p13737"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13737#p13737"><![CDATA[
It's whatever color is selected on the Start Screen, so Windows 8 colors. I guess the animation could be somewhere, but I get the feeling it's animated by Metro. I think the color and animation is drawn behind the start button, and the hover image overlays it. I didn't see anything resembling the shine/gloss animation in twinui.dll, but I guess it could be somewhere else. I really don't know how the coloring works, but my guess is it's drawn by Metro. However, I suppose it could be in a bitmap (or maybe a string as RGB/HEX data) somewhere, but I don't know where.<br /><br />One interesting note though; if you disable DWM, the start button will disappear when you hover over it, meaning that it is unable to display the hover start button. So since the hover button is DWM dependent, it's likely that Metro does the coloring/animation on the fly.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3546">R.O.B.</a> — Wed Jul 02, 2014 1:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2014-07-02T07:26:15-07:00</updated>
<published>2014-07-02T07:26:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13728#p13728</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13728#p13728"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13728#p13728"><![CDATA[
how can you be sure its an overlay animation?<br /><br />and where is that animation?<br /><br />It could actually take the new image you specify, and simply create an animation using it, including the overlay colors merged to a series of single frames<br /><br />can you select any one of millions of colors? or just several basic win-8 style colors?<br /><br />if the color selection is limited, it could contain an animation of each color somewhere..<br /><br />otherwise, it may simply add the color you selected to the task bar as a set graphic, and then the button itself is actually just a transparent glass effect, which just happens to be exactly in the same location as the graphic below it<br /><br />I am interested to know how it works<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Wed Jul 02, 2014 7:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[R.O.B.]]></name></author>
<updated>2014-07-01T18:56:28-07:00</updated>
<published>2014-07-01T18:56:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13708#p13708</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13708#p13708"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=13708#p13708"><![CDATA[
Hey, sorry to bump this thread, but Windows 8.1 actually <em>does </em>use a static image for its start button. Well, sort of.<br /><br />The images for the start button are located in <em><br />C:\Windows\System32\twinui.dll</em> <br />They are actually PNG files (rather than bitmaps like in Windows 7). Here's what they look like:<br /><br /><img src="http://i.imgur.com/SckJyYB.png" alt="" /><br />Start Button image with large taskbar icons...<br /><br /><img src="http://i.imgur.com/U0oorkf.png" alt="" /><br />...and small taskbar icons.<br /><br />So as you can see, they are nothing more than regular images. But the start button changes when you hover over it. This is where things get a little more complicated. They are still images, but they are partially animated by the Metro UI. Here are the hover images<br /><br /><img src="http://i.imgur.com/WReMGPC.png" alt="" /><br />Large taskbar icons<br /><br /><img src="http://i.imgur.com/47dHCC1.png" alt="" /><br />Small taskbar icons<br /><br />As you can see, they're pretty much just black boxes with the Windows 8 logo cut out. Metro will fill in the cut out logo area with whatever color you have selected on the start screen, and also create a shine/gloss animation over the logo.<br /><br />So there you have it! Hopefully this has been helpful to those who need it. And for those who want it, here they are as a Classic Shell start buttons:<br /><br /><img src="http://i.imgur.com/Zhc6Oen.png" alt="" /><br />Large taskbar icons<br /><br /><img src="http://i.imgur.com/uMyk490.png" alt="" /><br />Small taskbar icons<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3546">R.O.B.</a> — Tue Jul 01, 2014 6:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hyperzz]]></name></author>
<updated>2013-12-09T23:40:54-07:00</updated>
<published>2013-12-09T23:40:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=9410#p9410</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=9410#p9410"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=9410#p9410"><![CDATA[
I revised that slightly. I didn't enjoy the way the overlays were done. Here is mine. I suggest not using Small Taskbar Icons and use 0 px size for the Button Size. Enjoy <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2477">hyperzz</a> — Mon Dec 09, 2013 11:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-18T02:39:51-07:00</updated>
<published>2013-10-18T02:39:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7455#p7455</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7455#p7455"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7455#p7455"><![CDATA[
Well, there is this button (attached to this post, right click -&gt; Save image as to download it), that is similar. The Windows logo in it follows your Aero/Taskbar color with it. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Oct 18, 2013 2:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[c627627]]></name></author>
<updated>2013-10-18T02:17:22-07:00</updated>
<published>2013-10-18T02:17:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7454#p7454</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7454#p7454"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7454#p7454"><![CDATA[
Got it. Thank you. What is the closest static Windows 8.1 image you have seen here or elsewhere?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1875">c627627</a> — Fri Oct 18, 2013 2:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-18T02:12:21-07:00</updated>
<published>2013-10-18T02:12:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7453#p7453</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7453#p7453"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7453#p7453"><![CDATA[
The Windows 8.1 button has a shine animation across the currently set accent color, so it's not something that can be &quot;extracted&quot;. Maybe the images are static but the animation isn't.<br /><br />Edit: Update, Classic Shell now supports animated Start buttons, so interested people can create their own animated Start button. Look here for the animated Start button specification: <!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/buttontutorial.html">http://www.classicshell.net/tutorials/b ... orial.html</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Oct 18, 2013 2:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[c627627]]></name></author>
<updated>2013-10-18T01:48:51-07:00</updated>
<published>2013-10-18T01:48:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7450#p7450</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7450#p7450"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7450#p7450"><![CDATA[
I want to go back from Windows 8<strong>.1</strong> to Windows 8 and take that button with me to custom install in Classic Shell under Windows 8.<br /><br />Has anyone made the original Windows 8.1 button for the purposes of installing it under Windows 8?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1875">c627627</a> — Fri Oct 18, 2013 1:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-18T01:25:49-07:00</updated>
<published>2013-10-18T01:25:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7448#p7448</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7448#p7448"/>
<title type="html"><![CDATA[Re: Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7448#p7448"><![CDATA[
No it can't be extracted along with the animation intact. But on Windows 8.1, you can choose not to replace the Start button at all so it uses the original. Just uncheck the &quot;Replace Start button&quot; checkbox in Settings. <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />Or use the alternative button below which is also quite special, it follows your Taskbar color.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Oct 18, 2013 1:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[c627627]]></name></author>
<updated>2013-10-18T01:16:57-07:00</updated>
<published>2013-10-18T01:16:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7447#p7447</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7447#p7447"/>
<title type="html"><![CDATA[Original Windows 8.1 Start Button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1456&amp;p=7447#p7447"><![CDATA[
Can original Windows 8.1 Start Button be extracted?<br /><br />Does anyone have it, can they post it if they do?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1875">c627627</a> — Fri Oct 18, 2013 1:16 am</p><hr />
]]></content>
</entry>
</feed>