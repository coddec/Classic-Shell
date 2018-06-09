<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=5864" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-15T10:40:43-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=5864</id>
<entry>
<author><name><![CDATA[GerryB]]></name></author>
<updated>2017-08-15T10:40:43-07:00</updated>
<published>2017-08-15T10:40:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33708#p33708</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33708#p33708"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33708#p33708"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Tip: You can customize the status bar in certain apps that respect the system setting with Winaero Tweaker. It gives you an easy to use GUI for that.<br /></div>I was just on their website. They mention that a change in the status bar font affects tooltips, as well. I had already discovered that through experimentation, and by adjusting the tooltip font I was able to improve the status bars of many other apps besides Classic Explorer.<br /><br />A few of my apps don't respect system settings at all, so they're unaffected by tweaks. In fact, some of them bypass the system font altogether, and do not provide adjustments of their own. My current global system font is a substitution in the registry to eliminate the use of MS Sans Serif, but some apps manage to ignore what's in the registry and use what appears to be 8 point MS Sans Serif. I'd get rid of them if they weren't so useful.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14982">GerryB</a> — Tue Aug 15, 2017 10:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-15T09:17:55-07:00</updated>
<published>2017-08-15T09:17:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33704#p33704</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33704#p33704"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33704#p33704"><![CDATA[
Tip: You can customize the status bar in certain apps that respect the system setting with Winaero Tweaker. It gives you an easy to use GUI for that.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 15, 2017 9:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GerryB]]></name></author>
<updated>2017-08-15T09:12:46-07:00</updated>
<published>2017-08-15T09:12:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33703#p33703</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33703#p33703"/>
<title type="html"><![CDATA[[Solved] Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33703#p33703"><![CDATA[
OK, I just found a workaround: The status bar font in Windows 7 is the same as the tooltip font, which was set to Tahoma 8. I just changed that to Tahoma 11 bold. What an improvement! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14982">GerryB</a> — Tue Aug 15, 2017 9:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GerryB]]></name></author>
<updated>2017-08-15T08:49:41-07:00</updated>
<published>2017-08-15T08:49:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33700#p33700</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33700#p33700"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33700#p33700"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Oh, right, you are using Windows 7. This setting is not available on Windows 7, because in this case the status bar comes from Explorer.<br />On Windows 8 and up, Classic Shell creates its own status bar and can use whatever font it wants. But on Windows 7 the font is decided by Explorer.<br /></div>Ah, ha! I thought all along it might be OS dependent. Unfortunately, the Windows 7 color scheme dialogue doesn't offer a separate setting for the status bar, which seems to use the same font as the menus. I'd use a larger font there, but it messes up the overall layout. It gets even worse if I increase the DPI; some items don't fit properly.<br /><br />However, I was able to change the system font in the registry from a barely visible MS Sans Serif 9 to Tahoma Bold 9 without messing up the layout too much. Your file conflict dialogue seems to use the system font, so if I hadn't changed that, it would be very hard to read the dialogue.<br /><br />Thanks for your help, Ivo!<br /><br />Edit: Oops -- I was wrong; Windows 7 uses a smaller font for the status bar than it uses for the menus.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14982">GerryB</a> — Tue Aug 15, 2017 8:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-08-15T06:57:47-07:00</updated>
<published>2017-08-15T06:57:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33696#p33696</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33696#p33696"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33696#p33696"><![CDATA[
Oh, right, you are using Windows 7. This setting is not available on Windows 7, because in this case the status bar comes from Explorer.<br />On Windows 8 and up, Classic Shell creates its own status bar and can use whatever font it wants. But on Windows 7 the font is decided by Explorer.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 15, 2017 6:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GerryB]]></name></author>
<updated>2017-08-15T06:37:07-07:00</updated>
<published>2017-08-15T06:37:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33695#p33695</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33695#p33695"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33695#p33695"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Have you checked &quot;Show all settings&quot; at the top?<br /></div>Actually I had already checked it, otherwise the status bar options tab wouldn't have appeared at all. Only three options show up on that tab, and I have enabled all three, which are working:<br /><br />&quot;Show free space and file size&quot;<br />&quot;Show detailed info for single selection&quot;<br />&quot;Force status refresh&quot;<br /><br />By the way, everything else in Classic Shell is super! I especially like your replacement for the file conflict dialogue; the native dialogue in Windows 7 is so wordy that part of it drops below my screen and I can't hit the confirmation button.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14982">GerryB</a> — Tue Aug 15, 2017 6:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pepanee]]></name></author>
<updated>2017-08-14T23:05:33-07:00</updated>
<published>2017-08-14T23:05:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33689#p33689</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33689#p33689"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33689#p33689"><![CDATA[
Oh my bad, I may have sounded a bit confusing. I thought I read that you had version 4.1.3, you said 4.3.1, which is newer than mine. Sorry about the slight confusion. <br /><br />So yea, try doing what Ivo said, he's the creator, he knows best, you probably forgot to put that check mark.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10038">pepanee</a> — Mon Aug 14, 2017 11:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-08-14T22:56:01-07:00</updated>
<published>2017-08-14T22:56:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33688#p33688</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33688#p33688"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33688#p33688"><![CDATA[
Have you checked &quot;Show all settings&quot; at the top?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Aug 14, 2017 10:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GerryB]]></name></author>
<updated>2017-08-14T21:40:53-07:00</updated>
<published>2017-08-14T21:40:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33687#p33687</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33687#p33687"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33687#p33687"><![CDATA[
<div class="quotetitle">pepanee wrote:</div><div class="quotecontent"><br />Hello, yes I'll show you what to do. <br /><br />First thing though, I'm running Classic Explorer 4.3.0. Check to see if you have those options in your version before getting this new version. If your version has this setting then you're good. <br /><br />Open Classic Explorer settings and refer to the picture I attached. Press the button with the three dots. I set mine as:<br />Font: Segoe UI<br />Font Style: Semibold<br />Size: 11<br /><br />Hope this helped =)<br /></div><br /><br />Thanks! That's where I had been looking, but the option isn't there. I had Version 4.3.0 previously, and never noticed it there, either, but then I wasn't looking for it at the time. That font adjustment would be a big help, as my vision is pretty bad, so maybe I'll have to downgrade to 4.3.0. I've backed up my settings to XML files, so it shouldn't be difficult. If I can't find the option in 4.3.0 I'll just upgrade again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14982">GerryB</a> — Mon Aug 14, 2017 9:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pepanee]]></name></author>
<updated>2017-08-14T21:21:34-07:00</updated>
<published>2017-08-14T21:21:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33686#p33686</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33686#p33686"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33686#p33686"><![CDATA[
Hello, yes I'll show you what to do. <br /><br />First thing though, I'm running Classic Explorer 4.3.0. Check to see if you have those options in your version before getting this new version. If your version has this setting then you're good. <br /><br />Open Classic Explorer settings and refer to the picture I attached. Press the button with the three dots. I set mine as:<br />Font: Segoe UI<br />Font Style: Semibold<br />Size: 11<br /><br />Hope this helped  =)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10038">pepanee</a> — Mon Aug 14, 2017 9:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GerryB]]></name></author>
<updated>2017-08-14T21:05:43-07:00</updated>
<published>2017-08-14T21:05:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33685#p33685</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33685#p33685"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33685#p33685"><![CDATA[
<div class="quotetitle">pepanee wrote:</div><div class="quotecontent"><br />Hi, I just want to post back on here to state that this has been fixed. There is a feature within Classic Explorer now that allows the modification of the Status Bar font &amp; size.<br /></div>Could you please tell me where that feature is to be found? I'm running Classic Shell v.4.3.1 on Windows 7 (x86), and I can't find that option anywhere in Classic Explorer Settings.<br /><br />Or is it unavailable in my Windows version?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14982">GerryB</a> — Mon Aug 14, 2017 9:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pepanee]]></name></author>
<updated>2017-06-20T18:51:30-07:00</updated>
<published>2017-06-20T18:51:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33090#p33090</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33090#p33090"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=33090#p33090"><![CDATA[
Hi, I just want to post back on here to state that this has been fixed. There is a feature within Classic Explorer now that allows the modification of the Status Bar font &amp; size.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10038">pepanee</a> — Tue Jun 20, 2017 6:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pepanee]]></name></author>
<updated>2016-04-05T13:09:14-07:00</updated>
<published>2016-04-05T13:09:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26026#p26026</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26026#p26026"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26026#p26026"><![CDATA[
Alright, so I messed around a bit again with all this. I noticed that I prefer to keep the DPI at exactly 100% since that is what is shown as accurate (for example, when I want to type a document, I want to see its exact size before printing it; I don't want to see it enlarged on the computer and notice that it's actually small when I print it). <br /><br />I've actually temporarily fixed this in the past, yet reverted to its small size again because of other conditions. As a matter of fact, I found exactly what can make that font bigger (I'm using Windows 8.1):<br />Right click Desktop -&gt; Screen resolution -&gt; Make text and other items larger or smaller -&gt; At the bottom, select Tooltips &amp; change that font size. That is the exact option to change the font size for what I want to change in that picture above. Yet I use a program called Media Player Classic a lot (it's an audio/video player) and the thing is that in the bottom of that program, the word &quot;Playing&quot; gets enlarged and the bottom of the letters &quot;y&quot; &amp; &quot;g&quot; don't show. I don't like how it shows that, so I revert back to the smaller font so the whole word is visible.<br /><br />So the only resolution is if Classic Shell can implement the feature we were talking about earlier. It would be so great if that's possible. Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10038">pepanee</a> — Tue Apr 05, 2016 1:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pepanee]]></name></author>
<updated>2016-04-05T11:43:53-07:00</updated>
<published>2016-04-05T11:43:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26023#p26023</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26023#p26023"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26023#p26023"><![CDATA[
Oh, I never knew you can type in a new number or adjust the ruler by dragging it. I clicked the drop down menu and just assumed that the options are restricted to those values. But still, changing the height of the status bar, and font size, is more preferable for me.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10038">pepanee</a> — Tue Apr 05, 2016 11:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-04-04T22:06:25-07:00</updated>
<published>2016-04-04T22:06:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26017#p26017</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26017#p26017"/>
<title type="html"><![CDATA[Re: Font Size On Bottom Of Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5864&amp;p=26017#p26017"><![CDATA[
You can increase DPI by point percentages too. Click &quot;Custom sizing options&quot; and enter the percentage there. e.g. 105% or 107%.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Apr 04, 2016 10:06 pm</p><hr />
]]></content>
</entry>
</feed>