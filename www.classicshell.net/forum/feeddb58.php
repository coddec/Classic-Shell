<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=6103" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-12-01T22:33:02-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=6103</id>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2016-12-01T22:33:02-07:00</updated>
<published>2016-12-01T22:33:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=30660#p30660</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=30660#p30660"/>
<title type="html"><![CDATA[Re: New skinning features 4.2.7 and 4.3.0]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=30660#p30660"><![CDATA[
<div class="quotetitle">juniper7 wrote:</div><div class="quotecontent"><br />Hello.<br />I'm looking at more of the new skinning features in version 4.3.0<br /><br /><br />(New internal skin option &quot;SEARCHBOX&quot;,<br />which is true when the search box is visible to allow skins to use different settings based on that.)<br /><br />What does this mean in layman's language?<br /></div><br /><br />Ok, I think I figured out the &quot;SEARCHBOX&quot; if true, inskin feature.<br /><br />So, if say a skin has a large bottom border that normally has search box sitting on top, all is well.<br />But if user turns off the search box, in CSM settings, the above entries fill in space, <br />usually not well aligned. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /> <br /><br /><br /><br />If I use below text, it will push up bottom padding above border, only if user turns <strong>off</strong> search box.<br /><br />[NOT SEARCHBOX AND LEFT_EXTEND_PADDING]<br />Main_padding=8,106,8,68<br /><br /><br />Or can be used like below, and add settings only if user has search box turned <strong>on</strong>.<br /><br />[SEARCHBOX]<br />Main_emblem1=53<br /><br />Also SEARCHBOX does not need to be set up as an option. It's already there. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Thu Dec 01, 2016 10:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2016-10-08T13:19:13-07:00</updated>
<published>2016-10-08T13:19:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=29754#p29754</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=29754#p29754"/>
<title type="html"><![CDATA[Re: New skinning features 4.2.7 and 4.3.0]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=29754#p29754"><![CDATA[
Hello.<br />I'm looking at more of the new skinning features in version 4.3.0<br /><br />My brain is finding it difficult to comprehend. Require more vitamins, or high voltage zap to get neurons firing. <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br /><br />One:<br />(New internal skin option &quot;SEARCHBOX&quot;,<br />which is true when the search box is visible to allow skins to use different settings based on that.)<br /><br />What does this mean in layman's language? <br /><br />Two:<br />(New internal skin settings, Main_icon_size and Main2_icon_size. You can set them to &quot;none&quot;, &quot;small&quot; and &quot;large&quot; independently)<br /><br />I could not get it to work properly, unless I added &quot;Main_large_icons=0&quot;<br />It's a very nice feature. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />Is this the proper way to do it? <br />Here is what I put in script&#058;<br /><br /><br />OPTION RADIOGROUP=&quot;Icon size 1st column&quot;,0,NOICONS|SMALLICONS|LARGEICONS|<br />OPTION NOICONS=&quot;None&quot;,1<br />OPTION SMALLICONS=&quot;Small&quot;,0<br />OPTION LARGEICONS=&quot;Large&quot;,0<br /><br />OPTION RADIOGROUP=&quot;Icon size 2nd column&quot;,0,NOICONS2|SMALLICONS2|LARGEICONS2|<br />OPTION NOICONS2=&quot;None&quot;,1<br />OPTION SMALLICONS2=&quot;Small&quot;,0<br />OPTION LARGEICONS2=&quot;Large&quot;,0<br /><br /><br /><br />Classic1_options=variations,NOICONS,SMALLICONS,LARGEICONS<br />Classic2_options=variations,,NOICONS,SMALLICONS,LARGEICONS,NOICONS2,SMALLICONS2,LARGEICONS2<br /><br /><br /><br /><br />[NOICONS]<br />Main_icon_size=none<br />Main_large_icons=0<br /><br />[SMALLICONS]<br />Main_icon_size=small<br />Main_large_icons=0<br /><br />[LARGEICONS]<br />Main_icon_size=large<br />Main_large_icons=0<br /><br />[NOICONS2]<br />Main2_icon_size=none<br />Main_large_icons=0<br /><br />[SMALLICONS2]<br />Main2_icon_size=small<br />Main_large_icons=0<br /><br />[LARGEICONS2]<br />Main2_icon_size=large<br />Main_large_icons=0<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sat Oct 08, 2016 1:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GTK48]]></name></author>
<updated>2016-07-16T09:50:06-07:00</updated>
<published>2016-07-16T09:50:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27590#p27590</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27590#p27590"/>
<title type="html"><![CDATA[Re: New skinning features 4.2.7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27590#p27590"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Yes, it will be around the same time Windows 10 Redstone 1 comes out of Beta.<br /></div><br /><br />Windows 10 will continue to have Beta builds. The RS1 should go final for the GP on 8.2.2016.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9951">GTK48</a> — Sat Jul 16, 2016 9:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-07-16T08:34:35-07:00</updated>
<published>2016-07-16T08:34:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27589#p27589</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27589#p27589"/>
<title type="html"><![CDATA[Re: New skinning features 4.2.7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27589#p27589"><![CDATA[
Yes, it will be around the same time Windows 10 Redstone 1 comes out of Beta.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jul 16, 2016 8:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GTK48]]></name></author>
<updated>2016-07-16T07:57:25-07:00</updated>
<published>2016-07-16T07:57:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27588#p27588</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27588#p27588"/>
<title type="html"><![CDATA[Re: New skinning features 4.2.7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27588#p27588"><![CDATA[
Is this release ever going to come out of Beta?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9951">GTK48</a> — Sat Jul 16, 2016 7:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2016-06-23T16:36:05-07:00</updated>
<published>2016-06-23T16:36:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27303#p27303</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27303#p27303"/>
<title type="html"><![CDATA[Re: New skinning features 4.2.7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27303#p27303"><![CDATA[
Good question. <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br />I think my mind figured it would be invisible or same place like 1/4 of center.<br />Invisible would be better. I will use the right align though. That way search and normal are same. Jump list view move to right. It's a good feature when one does not want in this case, the fake power button trim to be stretched.<br /><br /><br />One more thing.<br />Is the text logic stricter?<br />It's difficult to have radio buttons greyed out.<br />I did not want the user picture to show up with a menu that does not have the top border space for it.<br />I arranged text further on down, to not let it happen. I just can't get the options to be greyed out.<br />I must be omitting something.<br /><br />; OPTIONS<br />OPTION <span style="background-color:#ffff00;">TOP</span>=&quot;Add top border&quot;,1<br />OPTION RADIOGROUP=&quot;User Picture&quot;,0,NO_USER_PIC|USER_PIC|USER_OFFSET|USER_INSIDE<br />OPTION NO_USER_PIC=&quot;None&quot;,1 <br />OPTION USER_PIC=&quot;On top&quot;,0<span style="background-color:#ffff00;">, TOP,0</span><br />OPTION USER_OFFSET=&quot;Offset frame on top. Use with default English setup&quot;,0<span style="background-color:#ffff00;">, TOP,0</span><br />OPTION USER_INSIDE=&quot;Inside menu&quot;,0<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Thu Jun 23, 2016 4:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-06-23T05:51:59-07:00</updated>
<published>2016-06-23T05:51:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27290#p27290</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27290#p27290"/>
<title type="html"><![CDATA[Re: New skinning features 4.2.7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27290#p27290"><![CDATA[
What do you want to happen in that case though? Do you want &quot;center2&quot; to behave like &quot;right&quot; if there is no second column?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jun 23, 2016 5:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2016-06-22T22:17:08-07:00</updated>
<published>2016-06-22T22:17:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27286#p27286</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27286#p27286"/>
<title type="html"><![CDATA[Re: New skinning features 4.2.7]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27286#p27286"><![CDATA[
Hello. I have another request for more info.<br /><br />I'm playing with a tiny emblem on a .skin7 Win7 style.<br /><br />Main_emblem1=29<br />Main_emblem1_padding=12,12,12,11<br />Main_emblem1_alignH=<span style="color:#0000ff;">center2</span><br />Main_emblem1_alignV=bottom<br /><br />It works fine with Main_bitmap and Main_bitmap_jump.<br />But with Main_bitmap_search, the emblem just sits in the bottom right corner 1/2 cut off. <br />The height matches. The horizontal alignment does not work. I understand search results menu does not have center2, as it's one column.<br /><br />What extra text can I put in to differentiate it? <br /><br />Thought this extra text would work. Nope.<br /><br />Main_search_emblem1=29<br />Main_search_emblem1_padding=12,12,50,11<br />Main_search_emblem1_alignH=right<br />Main_search_emblem1_alignV=bottom<br /><br /><br /><br /><br />Center works ok for all main, jump, and search menus. Using right for all works too.<br />I may end up just using the right for all.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Wed Jun 22, 2016 10:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-06-08T17:49:39-07:00</updated>
<published>2016-06-08T17:49:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27074#p27074</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27074#p27074"/>
<title type="html"><![CDATA[Re: New skinning features png]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27074#p27074"><![CDATA[
SSDs can replace your primary hard disk; or even your dvd drive: <a href="http://www.ebay.com/itm/2nd-HDD-Caddy-9-5mm-SATA-to-SATA-Hard-Drive-Adapter-For-Laptop-Universal-CD-DVD-/252220286611?hash=item3ab9802693:g:IzkAAOSwUdlWdzEx" class="postlink">http://www.ebay.com/itm/2nd-HDD-Caddy-9-5mm-SATA-to-SATA-Hard-Drive-Adapter-For-Laptop-Universal-CD-DVD-/252220286611?hash=item3ab9802693:g:IzkAAOSwUdlWdzEx</a><br /><br />Also Im all for features, even if they cause 'some lag' because the user can always disable them (and if they lag on old hardware just disable them by default, and give a warning in the features tooltip that it causes a performance hit)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Jun 08, 2016 5:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2016-06-08T12:06:23-07:00</updated>
<published>2016-06-08T12:06:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27071#p27071</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27071#p27071"/>
<title type="html"><![CDATA[Re: New skinning features png]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27071#p27071"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Submenus laggier? Get an SSD. <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /></div><br /><br />How do you SSD a laptop?  <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br /><br />Uh...wow, this is really offtopic ._.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Wed Jun 08, 2016 12:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-06-08T11:47:10-07:00</updated>
<published>2016-06-08T11:47:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27070#p27070</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27070#p27070"/>
<title type="html"><![CDATA[Re: New skinning features png]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27070#p27070"><![CDATA[
Submenus laggier? Get an SSD. <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jun 08, 2016 11:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-06-08T09:32:26-07:00</updated>
<published>2016-06-08T09:32:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27067#p27067</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27067#p27067"/>
<title type="html"><![CDATA[Re: New skinning features png]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27067#p27067"><![CDATA[
Well, part of the time is taken by collecting the items to show, and possibly loading their icons. If you add the drawing of the complex background, it will be even laggier <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jun 08, 2016 9:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2016-06-08T06:26:17-07:00</updated>
<published>2016-06-08T06:26:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27062#p27062</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27062#p27062"/>
<title type="html"><![CDATA[Re: New skinning features png]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27062#p27062"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />No, submenus don't have patterns. They are using a more light-weight composition to keep them more responsive and dynamic.<br /></div><br /><br />Really? Why are they still so much laggier? Or...is that just an issue on my end? ._.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Wed Jun 08, 2016 6:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-06-07T22:14:34-07:00</updated>
<published>2016-06-07T22:14:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27058#p27058</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27058#p27058"/>
<title type="html"><![CDATA[Re: New skinning features png]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27058#p27058"><![CDATA[
No, submenus don't have patterns. They are using a more light-weight composition to keep them more responsive and dynamic.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jun 07, 2016 10:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2016-06-07T21:50:59-07:00</updated>
<published>2016-06-07T21:50:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27057#p27057</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27057#p27057"/>
<title type="html"><![CDATA[Re: New skinning features png]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6103&amp;p=27057#p27057"><![CDATA[
Hello.<br />Another question about texture patterns in beta 4.2.7<br />By any chance, can a pattern be applied to a submenu as well?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Tue Jun 07, 2016 9:50 pm</p><hr />
]]></content>
</entry>
</feed>