<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=7638" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-06-01T10:08:17-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=7638</id>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-06-01T10:08:17-07:00</updated>
<published>2017-06-01T10:08:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32844#p32844</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32844#p32844"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32844#p32844"><![CDATA[
Hey Juniper7 , I have created New post about the new skin.<br />Here it is &quot;http://www.classicshell.net/forum/viewtopic.php?f=17&amp;t=7650&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Thu Jun 01, 2017 10:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-31T09:26:45-07:00</updated>
<published>2017-05-31T09:26:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32830#p32830</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32830#p32830"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32830#p32830"><![CDATA[
Ok, Thanks Juniper7 for answering each question. You are really a great help. I will shortly post an image of the start menu i am trying to develop so that you can tell me it is possible or not. (concept image)<br /><br />And Yes, I am not sure what was on my mind when asked the fourth question above.<br />my fifth question will be cleared through the concept image shortly<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Wed May 31, 2017 9:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-05-30T21:55:32-07:00</updated>
<published>2017-05-30T21:55:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32827#p32827</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32827#p32827"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32827#p32827"><![CDATA[
<span style="background-color:#FFFFFF;">1] Is there any way to make pattern or emblem appear in programs tree?</span> Good question. As far as I know, can't have a separate image in there.<br />If there is an image on the first column of main menu, the image will show on the programs tree if you use this text instead:<br /><br />Programs_background=transparent <br /><br />It is not perfect. Only works properly if operating system has glass blur, or if not transparent. <br />(A white desktop will show through brightly, without glass feature) <br /><br /><span style="background-color:#FFFFFF;">2] Is there any way to make pattern or emblem appear in submenus?</span> No. Ivo said it uses too many resources, which can slow down menu operation.<br />You can ask him about it. One can put an image into the submenu bitmap. Problem is, it will stretch and shrink so much. <br />A submenu can be as tall as the monitor, or as small as one entry.<br /><br /><span style="background-color:#FFFFFF;">3] Any way to have something behind each individual menu items (not as a whole) (Like we see behind the apps in the mobile phones (like cards))</span><br />Sorry, don't know. I don't even use a smart phone. I only have a 3 year old Nokia flip phone, for talking. <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br />I can easily buy one. Just don't want to get hooked played silly games half of every day. <br /><br /><span style="background-color:#FFFFFF;">4] Any way to make submenus transparent?</span> Yes. Can use Submenu_opacity=fullalpha or Submenu_opacity=fullglass. <br />Your Crystal skin has it working already.<br /><br /><span style="background-color:#FFFFFF;">5] Any way to make programs tree blur?</span> I see your skin has Programs_background=#E8FFFFFF. The first 2 number/letters are for setting the alpha transparency. In this case alpha value is 232/255. The last 6 hex numbers are for rgb color. Maybe I don't understand properly, <br />unless it's about using the alternative Programs_background=transparent<br /><br /><span style="background-color:#FFFFFF;">6] Also the order in which things appear like which one will appear at the top- Menu background, Menu opacity, Pattern, Emblem, icon, etc.</span><br />I don't think we can control how all the layers work in a skin.<br />It looks like text and icons are at the top. Icon frames, selectors, and new program selectors seem to want to fight for second spot. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br />Emblems and patterns are under selectors. Sometimes the selector has to be very transparent to show the image underneath.<br />I really don't know how the programming works. I would think of the background color like RGB, with opacity alpha underneath that.<br />At least that's the way I imagine it in a photo editor.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Tue May 30, 2017 9:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-30T19:55:15-07:00</updated>
<published>2017-05-30T19:55:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32825#p32825</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32825#p32825"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32825#p32825"><![CDATA[
Hey Juniper7, Sorry for disturbing you again. But I need to ask few questions<br /><br />1] Is there any way to make pattern or emblem appear in programs tree<br />2] Is there any way to make pattern or emblem appear in submenus<br />3] Anyway to have something behhind each individual menu items (not as a whole) (Like we see behind the apps in the mobile phones (like cards))<br />4] Any way to make submneus transparent<br />5] Any way to make programs tree blur<br /><br />6] Also the order in which things appear like which one will appear at the top- Menu background, Menu opacity, Pattern, Emblem, icon etc.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Tue May 30, 2017 7:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-30T05:24:17-07:00</updated>
<published>2017-05-30T05:24:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32823#p32823</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32823#p32823"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32823#p32823"><![CDATA[
Ok Thanks for the info. i will read those posts and try to add some new in the skin.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Tue May 30, 2017 5:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-05-29T22:22:26-07:00</updated>
<published>2017-05-29T22:22:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32821#p32821</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32821#p32821"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32821#p32821"><![CDATA[
The only other thing I did to your new skin, was make an extra shutdown mask that has the section 2 and 3,<br />with more green in it. Its bitmap reference is under the custom color option.<br />I placed the text as the first option, above the FULLGLASS option. See below:<br /><br />Main_emblem=<br />;-----------------------------------------------------------------------------------------<br /><br />OPTION_COLOR COLOR_CUSTOM=&quot;Selector custom color&quot;,0,TRUE,000000<br />[COLOR_CUSTOM]<br />Main_selection_tint1=@COLOR_CUSTOM@<br />Main_split_selection_tint1=@COLOR_CUSTOM@<br />Main2_selection_tint1=@COLOR_CUSTOM@<br />Main2_split_selection_tint1=@COLOR_CUSTOM@<br />Shutdown_selection_tint1=<br />Shutdown_selection_tint2=@COLOR_CUSTOM@<br />List_selection_tint1=@COLOR_CUSTOM@<br />List_split_selection_tint1=@COLOR_CUSTOM@<br />Submenu_selection_tint1=@COLOR_CUSTOM@<br />Submenu_split_selection_tint1=@COLOR_CUSTOM@<br />;Submenu_pager_tint1=@COLOR_CUSTOM@<br />Shutdown_selection_mask=28<br />;-----------------------------------------------------------------------------------------<br />OPTION FULLGLASS=&quot;Glass Transparency&quot;,0<br />[FULLGLASS]<br />Main_opacity=fullglass<br />Main2_opacity=fullglass<br />Submenu_opacity=fullglass<br /><br /><br /><br />Emblems and Patterns eh! They only work on main menu, not submenu. Easier to try with classic style. Less complicated.<br />Not a huge amount of people have made skins with all the extras, that Ivo put in the program.<br />I made a post to some one else about emblems and patterns:<br /><!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewtopic.php?f=17&amp;t=7643">viewtopic.php?f=17&amp;t=7643</a><!-- l --><br />Jcee is working on a very complicated one.<br />Best to look inside the skins that have those features, and copy.<br />The Metallic skin has more info about it inside the file. <br />Also there is some updates about Emblems in Announcements section:<br /><!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewtopic.php?f=4&amp;t=6412">viewtopic.php?f=4&amp;t=6412</a><!-- l --><br />Pattern with transparency.<br />This is where it gets more complicated.<br />If I remember correctly the pattern mask to carry over the transparency ALPHA channel part,<br />has to be 32 bit, The alpha channel should be 0/255 Alpha. <br />The image if I recall will mix 100 percent with the menu bitmap. <br />Having the pattern mask color less than 255/255 will mix less. <br />The alpha part of image and alpha of bitmap, I think mixes 50 percent.<br />Probably the only way to get the full alpha channel is to have original menu bitmap at 0 alpha. I have only done a few projects, so I could be very wrong about it.<br />I don't recall problems with Emblems.<br />I think blur can only happen on fullglass main, submenus. Not on selectors, and other images.<br /><br />Color bleed. <br />I don't know if it's the right name for it, but it fits. I only notice it on Windows 10, because the color is so strong. Even when there is no glass color mask, some leaks through. <br />It should go to nothing if the opacity setting is at 0. <br />The 0 setting won't cut all the intentional glass color to nothing.<br />Have to remember the desktop is going to show the color behind menu, if menu is transparent. <br />Alpha does not leak any color.<br />Maybe you can ask Ivo if possible to have a skin option to it on or off?<br />In my last skin, I wanted to get rid of the glass color bleed. I thought OK, I'll make fullalpha for the white transparent part, and fullglass for the dark colored second column. It stuck on full glass for both sides. <br />Looks like only a couple of combinations work. <br /><br />Goodnight.  <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Mon May 29, 2017 10:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-29T20:01:06-07:00</updated>
<published>2017-05-29T20:01:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32820#p32820</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32820#p32820"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32820#p32820"><![CDATA[
Also Juniper 7, I tried to add an image as emblem in menu. It did. But i see that the transparency is gone. it is Opaque.<br />Image added was Png image like a normal wallpaper.<br /><br />Is there any way to add an image without loosing transparency.<br />Or any way to add an image without loosing blur\<br /><br />Thanks in advance<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Mon May 29, 2017 8:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-29T19:52:45-07:00</updated>
<published>2017-05-29T19:52:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32819#p32819</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32819#p32819"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32819#p32819"><![CDATA[
OK, I got your point. I also noticed the selection was hard to see in light mode.<br />No problem, i will add the text in the next update which I think will come soon. <br /><br />By the way, I was now working on emblems and patterns, that i leave at the first attempt (yes, this is my very first skin) because they look somewhat typical. So do you know any post or something that tells more about these things other than the Ivo's skinning tutorial (I had read it already).<br /><br />Also, when i was playing with the glass opacity in Main Menu Section of classic shell settings , I noticed that at 0% the first column becomes stained by the glass color which i think is known as color bleed. I was thinking why this is happening but could not figure it out till now.<br /><br />Do you know Why this is happening?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Mon May 29, 2017 7:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-05-29T16:28:49-07:00</updated>
<published>2017-05-29T16:28:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32818#p32818</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32818#p32818"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32818#p32818"><![CDATA[
I can see you do things in a very methodical way in your skin. <br />Each option is fenced in and duplicated to probably to test different adjustments, <br />and omit anything that is not required.<br />Very efficient. <br /><br />I have just tried your new version.<br />I didn't even realize a 7 style menu could be single column with internal programs tree, done from skin options.<br />Totally amazing, no customize. Just click it.<br /><br />Dark side looks good. It's black baby, black as night. <br />That selector color option lets anyone set their own to glass, to black, grey, whatever, <br />while still retaining the black menu. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> <br /><br />On the none dark mode, my eyes have trouble seeing the 2nd column selector, <br />because it's the same intensity as menu. All depends on desktop background.<br />What I did on your last version, was split up the selector/color mask, just for the non dark option. <br />I made the 2nd column a little darker, 1st a little lighter, so I could see it better. <br />It made the text more complicated.<br />I had to make white selectors bitmaps for 1st column, black selector bitmaps for second, <br />that shared a reduced red color mask.<br />I'm not sure if you like making extra, as you made the skin in the minimalist way possible. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br />Edit: forgot all this extra work above.<br /><br />Edit:<br />You know, I was thinking about simplicity.<br />How about having a color picker option in your skin option, just for the selectors? <br />That can work on Dark and non Dark mode.<br /><br />Edit AGAIN: I'm on Windows 10 by the way, in case it makes any difference, to the way things look.<br />It works. All I did was add this text to you new version: <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />OPTION_COLOR COLOR_CUSTOM=&quot;Selector custom color&quot;,0,TRUE,000000<br /><br />[COLOR_CUSTOM]<br />Main_selection_tint1=@COLOR_CUSTOM@<br />Main_split_selection_tint1=@COLOR_CUSTOM@<br />Main2_selection_tint1=@COLOR_CUSTOM@<br />Main2_split_selection_tint1=@COLOR_CUSTOM@<br />;Shutdown_selection_tint1=@COLOR_CUSTOM@<br />List_selection_tint1=@COLOR_CUSTOM@<br />List_split_selection_tint1=@COLOR_CUSTOM@<br />Submenu_selection_tint1=@COLOR_CUSTOM@<br />Submenu_split_selection_tint1=@COLOR_CUSTOM@<br />;Submenu_pager_tint1=@COLOR_CUSTOM@<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Mon May 29, 2017 4:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-29T02:57:15-07:00</updated>
<published>2017-05-29T02:57:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32813#p32813</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32813#p32813"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32813#p32813"><![CDATA[
Hi juniper7. I have done few changes in the skin as above. Hope this might solve the problem in dark background.<br /><br />What do you think about it?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Mon May 29, 2017 2:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-29T09:23:26-07:00</updated>
<published>2017-05-29T02:49:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32812#p32812</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32812#p32812"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32812#p32812"><![CDATA[
Hi There, I have added two new features in the crystal skin. Here these are:<br /><br />1] Now in the dark mode, you can choose the color of the selection (which appears when you hover the cursor over something) instead of just black (thanks to juniper7 for suggesting it). It picks the color from glass color, so change it to get the desires color. Here the screenshots with white selection:<br /><img src="http://www.classicshell.net/forum/download/file.php?mode=view&amp;id=4663&amp;sid=b73a5c23a8060a934fde408905da3b80" alt="" /><br /><br />2] Now you can use the Windows 7 Style in single column mode. You just have to select the &quot;Single column&quot; option in the settings menu. In this way, you don't have to use the &quot;Customize start Menu&quot; Section in the Classic shell Settings Menu (for removing everything in the second column and make it go away) . And When you Like To return To The two columns, you just have to uncheck the option (And hence don't have to add again all the second column items you might have removed). Here Are the screenshots of Light And Dark Mode:<br /><br /><br /><img src="http://www.classicshell.net/forum/download/file.php?mode=view&amp;id=4664&amp;sid=b73a5c23a8060a934fde408905da3b80" alt="" /><br /><br /><br />Few Additional Notes:<br /><br />1] Suppose you are using the dark mode in the skin and have made the selection white. After sometime using it, you are done with dark mode and want to come back to light mode and so uncheck the Dark Mode Option. And When You Open the Start menu, You See it and then Wow!!!!! , What has happened??? (See in the screenshot)<br /><img src="http://www.classicshell.net/forum/download/file.php?mode=view&amp;id=4665&amp;sid=b73a5c23a8060a934fde408905da3b80" alt="" /><br /><br />This is not a skin error and is like this because you have made the glass color white. So just change it to the color you prefer and everything will be normal.<br /><br />2] When Using the Single column mode, you always get Glass Transparency (that is Blur). There is not an option to get transparency without blur.<br /><br />OK Guys. Have Fun. Waiting for problems and suggestions and likes.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Mon May 29, 2017 2:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-05-28T11:56:14-07:00</updated>
<published>2017-05-28T11:56:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32809#p32809</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32809#p32809"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32809#p32809"><![CDATA[
I have poor contrast vision. It may look perfectly fine for others.<br />Could keep selectors as black as possible, <br />and lighten up menu a little bit just enough to see the difference, <br />when there is black desktop background.<br /><br />Or could lighten up selectors fully, or just the border. Not everybody like borders.<br />To lighten up the border, make the selector masks have edge border at say 230 instead of 255 red.<br />That should lighten it up a tiny amount to see in front of black background, <br />Make lower value red to make brighter.<br />Or keep the selector border black 255 red, with the inside lighter 230 red. See picture.<br />You might have to make separate masks for dark mode, and leave the normal mode untouched?<br /><br /><br />Probably best, and easiest to just lighten up the menu a bit, and forget about trying to find a sweet spot with selectors. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sun May 28, 2017 11:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-28T09:35:03-07:00</updated>
<published>2017-05-28T09:35:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32808#p32808</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32808#p32808"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32808#p32808"><![CDATA[
Ok I got your point. I will make selection look less dark, preferably white or glass color and then post the new skin.<br /><br />New Skin will be ready only in few time as there are not more than two values that has to be changed in the skin file (If i gather correctly).<br /><br />And Thanks for advice.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Sun May 28, 2017 9:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-05-27T10:07:56-07:00</updated>
<published>2017-05-27T10:07:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32802#p32802</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32802#p32802"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32802#p32802"><![CDATA[
I just had to try an icon image on a different skin first, to see what it looked like.<br />OK.<br />I'm using your skin now. A lot of people like dark menus like this.<br />It's a bit hard for me to discern the shutdown button, <br />and selector on dark portion sometimes.<br />I like the white part of menu. There is no color bleed with glass, <br />as the opacity is already preset in XML file to get rid of it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Sat May 27, 2017 10:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-05-27T09:26:04-07:00</updated>
<published>2017-05-27T09:26:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32800#p32800</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32800#p32800"/>
<title type="html"><![CDATA[Re: Crystal (New Skin for Classic Shell)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7638&amp;p=32800#p32800"><![CDATA[
Yes! It was not on my mind when i started creating the skin. When i got to the search bitmap, i tried to make a new magnifier icon in photoshop but it don't look great at normal size (I created it at 700% size in Photoshop). So I Created The bitmap with letters.<br /><br />By the way, Have you tried my skin? If you had, please tell me how it was and any recommendations?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Sat May 27, 2017 9:26 am</p><hr />
]]></content>
</entry>
</feed>