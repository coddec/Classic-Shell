<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=7650" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-21T22:45:49-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=7650</id>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-07-21T22:45:49-07:00</updated>
<published>2017-07-21T22:45:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33424#p33424</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33424#p33424"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33424#p33424"><![CDATA[
I've made those types with straight sides before. Thanks for investigating.<br /><br />Round selectors will get straight sides if dpi, font, text size increased.<br />If any of the above is reverse, the shape collapses in on itself, looking terrible.<br /><br />I found out there is nothing I can do when the search box selector is used. <br />I tried adjusting the main selector slices, the best I could, but still look like rats ate it.<br />I don't think there is a separate selector for search box.<br />By the way,  <br />I finished and uploaded that project already. Thanks anyway. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />You may not hear from me for awhile. Doing projects away from computer. <br />Bye meetHG.  <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Fri Jul 21, 2017 10:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-07-21T21:44:54-07:00</updated>
<published>2017-07-21T21:44:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33423#p33423</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33423#p33423"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33423#p33423"><![CDATA[
Hi Juniper, Oops somewhat late.<br />Got Some work to do.<br /><br />So, yes selectors.<br />I take a look. You wanted selectors like in the below picture earlier, but after that they don't look great.<br />Then you shifted to round selectors.<br />Well, earlier was easy to made, as we can change the slices and leave the circular edges, so that only straight portion is in the extension slice.<br /><br />Round selectors are somewhat else. We can easily setup the Slice_X, but Slices_Y will produce the distortion in the circular areas.<br />I think there is no other choice to make all the selectors for different things. But I am not sure.<br />Although one idea came to my mind, but I am not sure it will work or not. I had not tried it.<br />Well, I will take a look today.<br /><br />Bye.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Fri Jul 21, 2017 9:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-07-20T02:26:37-07:00</updated>
<published>2017-07-20T02:26:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33398#p33398</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33398#p33398"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33398#p33398"><![CDATA[
Hi, Juniper<br />Skin is officially launched. I am not posting link to it, as you know well where to find it.<br /><br />I will come back for your round selectors here soon.<br /><br />Bye.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Thu Jul 20, 2017 2:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-07-19T18:15:05-07:00</updated>
<published>2017-07-19T18:15:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33389#p33389</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33389#p33389"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33389#p33389"><![CDATA[
Hi meetHG.<br />I spent some time with skin.<br />I don't know what is causing that bar at the bottom.<br /><br />Clues:<br />At 144 dpi visible as in picture.<br />If dpi reduced a little or menu height is reduced, bar goes lower. <br />Turning off search box makes it go lower, but not disappear.<br />Hiding shutdown button shows bar all the way across menu, including side borders.<br />Put internal black pattern image, looks ok, then same picture again, same problem.<br />Try a number of different external picture images. <br />Most good, 2 bad. It appears to take portion of top image and put at bottom ? <br />There has to be a 1 or more pixel height that is getting stretched with menu.<br /><br /><br /><br />I'm tired now. Time to call it a day. <br />Good night.<br /><br />EDIT: Top is bottom as tile means repeat. <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_mad.gif" alt=":x" title="Mad" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" />:o<br /><br />Nothing wrong with your skin. The tile just repeated itself, because it's a patterned image.<br />That was way over my head. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Wed Jul 19, 2017 6:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-07-19T08:44:50-07:00</updated>
<published>2017-07-19T08:44:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33383#p33383</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33383#p33383"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33383#p33383"><![CDATA[
Traveling can be very draining, worse when it's a new area.<br /><br />I'll get back to you tonight about the bar. You mean that is not your design?<br /><br />Yes, rectangle with round ends. To make it go a little faster, <br />I made templates that can be used over, and over with PixelFormer.<br /><br />You know I started making the split selector with a vertcal line. <br />The more I made, the more dirty they looked. I had to stop that design. They looked too porno, if you know what I mean.<br />See picture, I'm not putting that in my updated skin. I made it different now with a complete circle. <br />Now, I must have made about qty 50 so far. Then I had an idea to make a smaller circle at end. <br />It looked better, but it is too late. I have committed myself to the second version, not the third version. <br />I'm not starting over again. <br /><br />I will try your skin sometime tonight.<br /><br />I am the Master of Disaster. You know I tried playing with your now complicated skin, maybe doing same thing as you.<br />I totally wasted it. I made too many changes, (wrong changes), and killed it. It won't even start now. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />There is a point, where you have to say, &quot;That's it, no more changes, this IS the FINAL one&quot;!<br /><br />Have a good one. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Wed Jul 19, 2017 8:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-07-19T06:36:28-07:00</updated>
<published>2017-07-19T06:36:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33382#p33382</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33382#p33382"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33382#p33382"><![CDATA[
Home Sweet Home. Come back after a tiring journey. Uff.<br /><br />Ok, I got it. And Also I will shift glass and transparent settings below background color option.<br /><br />I talked to Gaurav. He said he is busy. <img src="http://www.classicshell.net/forum/images/smilies/icon_neutral.gif" alt=":|" title="Neutral" /> <br />About the icon padding, I think in rev-b text padding will alone can take care of it.<br />Here's a little info- In Main Menu Column1, Icon padding does the padding job and text padding is zero.<br />In others like column2, submenu, list, text padding does the job and icon padding is for the alignment of icons only. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_ugeek.gif" alt=":ugeek:" title="Uber Geek" /> <br /><br />Hey, I don't know from where these bars come. Can you please elaborate with a bigger picture. <img src="http://www.classicshell.net/forum/images/smilies/icon_question.gif" alt=":?:" title="Question" /> <br /><br />Round selectors. Umm.. Do you mean rectangular selectors with round corners?<br />If yes, then don't get upset. You can make them with less effort.<br />I will tell how, but first clear that I am right or wrong with the above question. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /> <br /><br />Oh Boy, You are quest of ideas <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> . I get an idea from your windows accent settings.<br />Idea is to remove the default black color. Accent option can be used for that.<br />Color should automatically point to glass color in rev-c.<br /><br />Below is the skin file.<br />Hope you try it.<br /><br />This skin still have the transparency difference bug.<br />Now I have posted the settings menu also.<br />Check If you can find the culprit.<br /><br />Ok, Bye.<br />Have a good day.<br /><br /><br />EDIT:- I tried the skin after doing changes.<br />It helped less and also destroyed several things. <img src="http://www.classicshell.net/forum/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> <br />So reverting all the changes<br />Plus tired of Transparency and blur, I removed them entirely from the skin.<br /><br />Uff.... This ruined all my mood. <img src="http://www.classicshell.net/forum/images/smilies/icon_mad.gif" alt=":x" title="Mad" /> <br /><br />Here's the skin.<br />Check if you find some setting that need to be adjusted.<br />If not, Skin will be officially launched tomorrow. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Wed Jul 19, 2017 6:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-07-18T23:20:52-07:00</updated>
<published>2017-07-18T23:20:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33373#p33373</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33373#p33373"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33373#p33373"><![CDATA[
Hi<br />I wanted to have the borders with glass Windows 10 auto color, for myself. I am happy now.  <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <br />I copied OPTION_COLOR ACCENT section and pasted for new section with different name, and took away the @ACCENT@<br />and left like this <br />[WINDOWS_ACCENT]<br />Main_bitmap_tint1=<br />Main_bitmap_search_tint1=<br />Main_bitmap_jump_tint1=<br />Main_separator_tint1=<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Tue Jul 18, 2017 11:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-07-18T20:56:28-07:00</updated>
<published>2017-07-18T20:56:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33370#p33370</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33370#p33370"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33370#p33370"><![CDATA[
Hello.<br /><br />[Hey, You say that to do like this]<br />Yeah, I did too. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> My excuse is that text was different. It used the bitmaps that were there already, <br />giving grey trans/glass blur borders, or mild transparancy/glass blur without borders.<br />I swear it must be search bots that download attachments. That add on text script, downloaded 18 times now.<br /><br /><br />I can put at 144 DPI, but my monitor is not same as high density systems like 3200 x 1800.<br />It looks ok to me. But if you are like Gaurav, in order for it to look good and work properly,<br />he likes arrow padding boosted, vertical second column text padding increased, <br />and more vertical Submenu_icon_padding=5,1,1,1,100%, all for 144Dpi.<br />(What you put is half good. Submenu_icon_padding=5,0,0,0,100%. I doubt 0 will multiply to anything higher than zero, though)<br /><br />It would be great if there was a second opinion from someone with one of those monitors. <br />On my monitor 144DPI size makes menu huge.<br />I have to sit four to five feet away.<br /><br /><br />[translucent bars] see picture<br />I guess it's part of search background. I see tiny multicolored bitmaps, cute.<br /><br />My update project. Why oh why did I want to make perfectly round ended selectors. If they stretch, or shrink, it all distorts badly.<br />I have to make so many exact sizes. Single and split = 2 x 3 100%, 125%, 144% x 3 small, large , no icons x 5 diff types = Qty 90<br />Shoot plus 9 new program selectors for a grand total of 99 selectors to make. Oh boy.<br /><br />See you <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Tue Jul 18, 2017 8:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-07-18T19:26:40-07:00</updated>
<published>2017-07-18T19:26:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33369#p33369</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33369#p33369"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33369#p33369"><![CDATA[
Oops. Changed mind at the last time.<br />Actually I was using the skin without any image and selecting &quot;choose different image&quot; option. There glass and transparent options come handy.<br /><br />Hey, You say that to do like this.<br />Didn't You said to automatically add a grey background color when glass and transparent option is selected.<br />But, You know what- thoose two radio buttons down the background color is a good idea. I will adjust them.<br /><br />I am out of home and PC is at home. Replying with Mobile.<br />So i can not post the image of settings menu with exact options right now, but try to use a dark background color to make the difference in transparency more noticeable. If you use light colors it is hard to see the difference.<br /><br />I don' t understand about the translucent bars.<br /><br />Hey, Try the menu at HiDPI, I made some chandes to the paddings in list and submenu veiw. See if they look ok or not.<br /><br />Ok. Bye. Have a nice day.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Tue Jul 18, 2017 7:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-07-18T12:24:42-07:00</updated>
<published>2017-07-18T12:24:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33364#p33364</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33364#p33364"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33364#p33364"><![CDATA[
Hi.<br /><br />Say what? Huh? <br />I thought you made a final decision that you were going to cut out the main background transparency/blur? <br />Opaque background still looks best, because it doesn't look milky, and more intense. <br />Am I missing something? It just seems redundant with the Main Menu transparency/glass blur options up there. <br />Can't those two radio options be put under the Show Background Card color option, that only enable when card color picked.<br />And maybe default true is 000000 black? <br /><br /><br />I did not notice transparency, or brightness difference with main/search views. What options were on at the time?<br /><br />The translucent bar either side of shutdown button, matches height now. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Tue Jul 18, 2017 12:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-07-18T01:13:19-07:00</updated>
<published>2017-07-18T01:13:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33360#p33360</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33360#p33360"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33360#p33360"><![CDATA[
Below is the new skin file. I corrected the mistakes.<br /><br />Also Added the transparency as suggested by juniper.<br />One thing is remaining- Although I added the alpha channel in the Search_background bitmaps but due to some reason, search area transparency and main menu transparency are not matching. I tried hard to find the reason but couldn't find out.<br />Try to find the solution.<br /><br />I also changed some paddings and HIDPI settings.<br />Hey, Gaurav please check if this skin do the good with paddings at HIDPI.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Tue Jul 18, 2017 1:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-07-17T23:43:30-07:00</updated>
<published>2017-07-17T23:43:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33359#p33359</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33359#p33359"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33359#p33359"><![CDATA[
Thanks for that, gaurav. Now I will exit the menu before saving any changes. This saves a lot of trouble.<br /><br />One question about these padding scripts:-<br />Main_arrow_padding option is present in the skin file.<br />So, Main_split_arrow_padding will inherit from the Main_arrow_padding (as per skinning tutorial).<br />And Main2_arrow_padding will also inherit in the same way from_main_arrow_padding.<br />And Main2_split_arrow_padding will ,then, inherit from the main2_arrow_padding.<br />And Shutdown_Arrow_padding also inherits from the main_arrow_padding.<br />So, In this way, Main_arrow_padding will suffice the below three. Right or not?<br />If yes, then why we add these three padding scripts?<br /><br />Yeah, there sure is reason. Submenu arrows and separators also take color from the accent color.<br />But there is one mistake. Option should be like this &quot;Choose Menu Accent Color&quot; ,not &quot;Choose Main Menu Accent Color&quot;. I will correct them.<br /><br />OK, Bye.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Mon Jul 17, 2017 11:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-07-17T23:43:10-07:00</updated>
<published>2017-07-17T23:43:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33358#p33358</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33358#p33358"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33358#p33358"><![CDATA[
There sure is a way .<br />Accent color is appearing due to several tint options. If you adjust the tint settings present below the OPTION_COLOR ACCENT, red channel by default point to the glass color.<br /><br />But how so. Arrow color comes from the accent color selected in the settings menu, not from the glass color. If Accent color is not selected, black is used by default.<br /><br />Oops, Spellings. Ok, I will correct them.<br /><br />Ok, By Juniper.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Mon Jul 17, 2017 11:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-17T11:18:35-07:00</updated>
<published>2017-07-17T11:18:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33356#p33356</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33356#p33356"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33356#p33356"><![CDATA[
Sorry for late reply.....life tasks never end <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /> I don't know how you got the non-working skin, it usually happens if you save it while Classic Start Menu is still running. Before saving it, you must exit the menu.<br /><br />I made some changes to the high DPI section to show what I meant about #2 and #4. Sorry if the split button's right portion seems big-ass ugly but I like the buttons big on my PC for touch+high DPI with my tiny mouse pointer which can't be enlarged by DPI scaling beyond a certain extent. <img src="http://www.classicshell.net/forum/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> Notice the big ass jumplist buttons too similar to the Shutdown arrow button. Here is the modded version.<br /><br />I would add those 3 parameters to the non High DPI portion too (but of course with values adjusted and appropriate to normal DPI):<br />Main_split_arrow_padding=xx,xx,100%<br />Main2_split_arrow_padding=xx,xx,100%<br />Shutdown_arrow_padding=xx,xx,100%<br /><br /><br />Is there any reason to have &quot;Use White Arrows in submenu&quot; greyed out unless &quot;Don't use accent color.....&quot; is checked? You could remove that dependency. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /> <br /><br />I find everything else OK. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Great job meetHG really with this skin and thanks to skinning pro, juniper7 <img src="http://www.classicshell.net/forum/images/smilies/icon_e_geek.gif" alt=":geek:" title="Geek" /> for your invaluable help with skinning.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jul 17, 2017 11:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-07-17T09:50:12-07:00</updated>
<published>2017-07-17T09:50:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33354#p33354</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33354#p33354"/>
<title type="html"><![CDATA[Re: New skin with full customization (can set background,col]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7650&amp;p=33354#p33354"><![CDATA[
Hi meetHG. <br />I still did not try every option out.<br />Ah, yes. Not just the border, but all kinds of accents. Accents it is.<br /><br />At first I didn't notice the borders look thinner, with border removed at bottom. <br />What I did was use your sunset mountain image from last skin, and compare. <br />The best part of your skin is the glass border when it's setup for the intermingling of the picture.<br />The default black or white look good. <br />When I put in an accent color similar to glass color looks good too. <br />Is there any way to have accent color track the glass color, like the selector buttons do, <br />maybe not same intensity though? <br /><br />My Win 10 desktop background always changing, which changes the glass/metro color.<br />Sometimes, not always, other picture images make it hard to see the colored arrows.<br />I think I like it when the arrows are same color as text.<br /><br />Now I really don't know which menu is better. <br />I like the old border thickness, but I like the new skin selector transparency.<br /><br />Just remembered, a couple spelling mistakes for the options. &quot;s&quot; is missing in Tranparent<br /><br />You can never tell who is on the internet. I could be a multi millionaire, with nothing to do sometimes,<br />or an unemployed bedridden individual with a lot of time. I do use my wireless mouse in bed sometimes.<br />I did eat a can of Heinz baked beans last night as well!<br /><br />My project. I'm changing the Bare glass skin to have less transparent white, like one of your skins.<br />Now that you showed me what a &quot;more&quot; picture is, I'm changing to a white magnifier with maybe a plus inside.<br />Ok maybe not. I guess the plus sign is for making bigger view, not more. I tried looking on internet for a &quot;more&quot; symbol.<br />All I got was bigger than sign, which looks like metro arrow. <br />I'm adding option for round selectors. Going to take awhile to do. Turning into bore chore.<br /><br />Seeya. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Mon Jul 17, 2017 9:50 am</p><hr />
]]></content>
</entry>
</feed>