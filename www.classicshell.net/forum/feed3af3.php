<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=1081" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-08-24T18:42:22-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=1081</id>
<entry>
<author><name><![CDATA[cheebie]]></name></author>
<updated>2013-08-24T18:42:22-07:00</updated>
<published>2013-08-24T18:42:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=6050#p6050</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=6050#p6050"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=6050#p6050"><![CDATA[
Thank you for your reply, Gaurav. Unfortunately, I think it raised as many questions for me as it answered!  <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" />  <br />  <br />I have done GOBS of research since you answered on Wednesday, to try to fill in the gaps in my understanding of this issue; and I've learned a lot. However, I'm not &quot;there&quot; yet. I think perhaps it would be best if I proceed with getting my Win 8 machine online and configured, and check out the visual style which you so kindly supplied. Having that, and having some further research, perhaps I can either (a) answer my own questions or (b) pose some better-informed (if not more intelligent!) ones. So it will probably be several days until I post here again. <br />  <br />Thanks, <br />cheebie<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1327">cheebie</a> — Sat Aug 24, 2013 6:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-21T22:19:52-07:00</updated>
<published>2013-08-21T22:19:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5947#p5947</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5947#p5947"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5947#p5947"><![CDATA[
1) Visual styles are not compatible across Windows versions! You can't just use 'Windows Classic' theme from XP in Windows 8. It won't even apply. You will have to find a visual style specifically for Windows 8. You can use this somewhat Classic-looking style that someone made for Windows 8: <!-- m --><a class="postlink" href="http://kizo2703.deviantart.com/art/Windows-classic-theme-for-Windows-8-RTM-325642288">http://kizo2703.deviantart.com/art/Wind ... -325642288</a><!-- m --> but it's not decent-looking because even the areas that are supposed to be white are gray. It looks like it's a color modification of the high contrast themes so that one won't even require UxStyle.<br /><br />2) All Windows 8 themes are already DWM compatible. There is no question of graphics performance, perceived or otherwise in Windows 8. In Vista it was bcoz only when DWM was off, it used GDI to render everything and GDI wasn't even hardware accelerated like XP. In Windows 7, some commonly used GDI functions are accelerated but with DWM off, you still lose the smoothness (and performance too according to some 2D graphics benchmarks done by sites like Tom's Hardware and Passmark).<br /><br />3) No<br /><br />4) Yes. That's the theme I linked to above. You can modify it further.<br /><br />I have no relation to UxStyle and can't comment on when it will be updated.<br /><br />Edit: I attached to this post a slightly modded &quot;Classic&quot; theme for Windows 8 that makes some gray areas white. You don't even require UxStyle for it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Aug 21, 2013 10:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cheebie]]></name></author>
<updated>2013-08-21T14:52:57-07:00</updated>
<published>2013-08-21T14:52:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5931#p5931</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5931#p5931"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5931#p5931"><![CDATA[
Hi Gaurav, <br /><br />Well, it's very clear that you really, REALLY know your stuff when it comes to Windows UI! Thank you for taking the time to post here and answer my questions. However, you do (on occasion) &quot;leave me in the dust!&quot; So once again, I could use a few clarifications... <br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Well visual styles and Classic Shell are unrelated so it doesn't make sense to include this in the FAQ. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /></div> <br />I take your point here, Gaurav! However, from my very first post, I have been trying to make the point that ***PHILOSOPHICALLY***, getting the &quot;Classic&quot; look back in terms of colors COULD be related to the other work done in Classic Shell: <br /><div class="quotetitle">cheebie wrote:</div><div class="quotecontent"><br />&quot;Since restoring the look of &quot;classic&quot; Windows was the goal of Classic Shell, I thought I might find some resonance and understanding of the problem here. (If Classic Shell _had_ such a theme available, I would gladly pay $10 or $20 for it!!)&quot;<br /></div> <br />But I digress. Certainly, it's up to you and Ivo to decide where to draw the line. I'm just saying that from a USER'S standpoint, the two matters ARE related! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br /><br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />MS requires signed visual styles ever since XP, so this hasn't changed for Windows 8. What *has* changed though is the classic theme which did not use visual styles. It followed system colors which the user could customize easily from Advanced Appearance control panel in Windows XP, Vista, 7.<br /></div> <br />THAT explains my frustration with the &quot;theme editing&quot; tools in Win 8! At LAST, an answer! <img src="http://www.classicshell.net/forum/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />I should also mention here that I have <span style="text-decoration: underline">never used</span> Vista or Win 7. That helps to explain why some of these things are such a shock for me (although apparently, Win 8 is now <span style="text-decoration: underline">taking away</span> some of the things it instituted in Vista/7! Maybe I won't know what I'm missing? For instance: from the sounds of it, I don't think I'll miss Aero Glass!) <br /><br /><br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Unfortunately, the classic theme in Windows 7/Vista didn't support DWM, so the fun of using those OSes with Aero disabled was lost anyways if the Classic theme was used (and no full GDI acceleration either like XP had means performance, at least perceived smoothness and performance was laggy). MS has removed the Classic theme entirely in Windows 8. This is where they could have done better. In Windows 8, they updated the rest of the themes (the high contrast ones, that didn't work with DWM in Windows 7) to now work with Aero+DWM on. DWM in fact can't be turned off in Windows 8. But they chose to remove the Classic theme as well as the Advanced Appearance control panel, they could have created a Classic looking theme with DWM on as well.<br /></div> <br />For those of you out there (like me) who do NOT know as much about UI issues as Gaurav does, there is an awesome article on Wikipedia that delves into the significance of both Aero and (to a lesser extent) DWM: <br /><a href="http://en.wikipedia.org/wiki/Windows_Aero" class="postlink">http://en.wikipedia.org/wiki/Windows_Aero</a> <br /><br />So, Gaurav, a few questions: <br />(1) When you say &quot;DWM in fact can't be turned off in Windows 8&quot;, what ramifications does that have for someone who wants to run the &quot;Windows Classic&quot; theme (from XP) in Win 8? Will it run, but simply not comply with DWM? Does applying UxStyle cause these themes to comply with DWM, or simply make it so that Win 8 doesn't CARE that they're not DWM-compliant? <br /><br />(2) If I understand you correctly, the fact that a given theme is not compliant with DWM is what causes the perceived loss of performance (compared to another theme on the same machine that _IS_ DWM-compliant.) Of course, if UxStyle covers the DWM-compliance issue (as I mentioned above), this is no longer an issue. However, in the event that it does NOT, I'm wondering how much of a performance hit I'll see? I also have to note here that my present computer is a single-processor model circa 2005, with an Intel onboard graphics card and half a gig of RAM; and the new machine is a 4th-gen Intel I7 quad-processor with 12 gigs of RAM. I wonder if I would even NOTICE any &quot;hampered&quot; graphics performance?? <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />(3) It's also my understanding (<a href="http://www.pcmag.com/article2/0,2817,2404647,00.asp" class="postlink">http://www.pcmag.com/article2/0,2817,2404647,00.asp</a>) that while DWM is permanently turned _ON_ in Win 8, Aero (or at least Aero Glass) is permanently turned _OFF_. Since I don't think I would have liked any of the &quot;features&quot; added by Aero Glass, I don't think I will miss this (as I said above.) Does the absence of Aero Glass have any performance ramifications for me? <br /><br />(4) If all else fails: I would assume that hacking my way to an acceptable theme using Windows Style Builder or Resource Hacker would result in my having a theme that looked like the Windows Classic theme, but would be DWM-compliant (and thus not have any performance issues.) Is that correct? <br /><br /><br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />I have had no trouble using UxStyle on Windows 8 64-bit. 8.1 is a different story where it will have to be updated.<br /></div> <br />Good to know. Are you in communication with the developer (Rafael Rivera), such that you have any information on when the _official_ status of the Win 8.0 version will change from &quot;experimental&quot; to &quot;ready for Prime Time&quot; (or whatever)? The current Win 8 version seems to be nearly a year old... <br /><br />Thanks, <br />cheebie<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1327">cheebie</a> — Wed Aug 21, 2013 2:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Satuim]]></name></author>
<updated>2013-08-21T05:01:21-07:00</updated>
<published>2013-08-21T05:01:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5906#p5906</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5906#p5906"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5906#p5906"><![CDATA[
This is where I really praise Linux and other Open source OS's that don't lock down there users.<br /><br />Windows 8 sounds really annoying.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1232">Satuim</a> — Wed Aug 21, 2013 5:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-20T22:02:24-07:00</updated>
<published>2013-08-20T22:02:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5902#p5902</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5902#p5902"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5902#p5902"><![CDATA[
Well visual styles and Classic Shell are unrelated so it doesn't make sense to include this in the FAQ. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> MS requires signed visual styles ever since XP, so this hasn't changed for Windows 8. What *has* changed though is the classic theme which did not use visual styles. It followed system colors which the user could customize easily from Advanced Appearance control panel in Windows XP, Vista, 7. Unfortunately, the classic theme in Windows 7/Vista didn't support DWM, so the fun of using those OSes with Aero disabled was lost anyways if the Classic theme was used (and no full GDI acceleration either like XP had means performance, at least perceived smoothness and performance was laggy). MS has removed the Classic theme entirely in Windows 8. This is where they could have done better. In Windows 8, they updated the rest of the themes (the high contrast ones, that didn't work with DWM in Windows 7) to now work with Aero+DWM on. DWM in fact can't be turned off in Windows 8. But they chose to remove the Classic theme as well as the Advanced Appearance control panel, they could have created a Classic looking theme with DWM on as well.<br /><br />I have had no trouble using UxStyle on Windows 8 64-bit. 8.1 is a different story where it will have to be updated.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 20, 2013 10:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cheebie]]></name></author>
<updated>2013-08-20T17:00:40-07:00</updated>
<published>2013-08-20T17:00:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5899#p5899</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5899#p5899"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5899#p5899"><![CDATA[
Hi Gaurav, <br /><br />This is THE BEST explanation of what happened to Win 8 themes that I have <span style="text-decoration: underline">EVER SEEN</span>!! (Maybe I just didn't search far enough; but I spent two to four <span style="text-decoration: underline">hours</span> searching!) I nominate this for inclusion in the Classic Shell FAQ (since, IMHO, the Win 8 &quot;visual style&quot; is almost as much of a monstrosity as the part of the UI that is fixed by Classic Shell!) <br /><br />Notwithstanding, I do have a couple questions/clarifications/comments: <br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Microsoft locked the Windows theming engine by default so that only theme DLLs which are digitally signed by Microsoft can be used... that requires purchasing a not-so-cheap code signing certificate.<br /></div> <br />Why does THAT not surprise me? <img src="http://www.classicshell.net/forum/images/smilies/icon_evil.gif" alt=":evil:" title="Evil or Very Mad" /> Microsoft can lock people into their &quot;new and improved&quot; color scheme, or charge people a ransom to be able to change it! <br /><br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Third party visual styles are not signed. What UxStyle enables by doing some extremely clever in-memory patching is the use of these unsigned themes. It runs as a service, as long as that service is running, you can use unsigned visual styles.<br /></div> <br /><br />Got it (I think.) When the &quot;style engine&quot; loads, it has the proper MS digital signature; so MS allows it to load. Once it's in memory, another application (e.g. UXStyle) can change the bytes loaded in memory so that it allows unsigned themes to load, and Windows will never catch it. (Let's hope Rafael never decides to apply his talents to the design of Malware!! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> ) <br /><br /><br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Note that UxStyle is not yet released for Windows 8.1. For 64-bit versions of Windows, the kernel mode driver must again be signed and that requires purchasing a not-so-cheap code signing certificate. UxStyle's developer, Rafael Rivera, according to its website, plans to update it soon to work with Windows 8.1.<br /></div> <br />OK, I'm a little confused here. I have Win 8.0 (and I'm not planning to upgrade it to 8.1 until LOTS of other people have debugged it!) However, my version of Win 8 is definitely a &quot;64-bit version.&quot; Does that mean that the current version of UXStyle will not work properly with my Win 8? (I noticed on the <a href="http://www.uxstyle.com" class="postlink">www.uxstyle.com</a> site that the button to download the Win 8 version is labeled with the text: &quot;Download for Window 8 (experimental)&quot; ...) <br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />There is also a paid app called Windows Style Builder (<!-- m --><a class="postlink" href="http://vistastylebuilder.com/windows7.html">http://vistastylebuilder.com/windows7.html</a><!-- m -->) developed by Andreas Verhoeven that lets advanced users visually create these visual styles - edit the theme's graphical elements etc. Of course, you can also use a free tool like Resource Hacker to edit .msstyles files if you know how.<br /></div> <br /><br />This looks like an interesting alternative; however, I'm not necessarily THAT interested in doing surgery on the Win 8 themes, if there is a reasonable (and free) way to just use a .theme file from a previous version of Windows. (I mean, learning is ALWAYS valuable; but I got other stuff to do right now!) <br /><br />Thanks again for all your great explanations, Gaurav, <br />cheebie<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1327">cheebie</a> — Tue Aug 20, 2013 5:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-20T05:25:16-07:00</updated>
<published>2013-08-20T05:25:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5888#p5888</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5888#p5888"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5888#p5888"><![CDATA[
The developer of the app is required to sign the driver and pay for the certificate, not the end user.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 20, 2013 5:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Satuim]]></name></author>
<updated>2013-08-20T04:20:40-07:00</updated>
<published>2013-08-20T04:20:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5887#p5887</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5887#p5887"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5887#p5887"><![CDATA[
<div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />For 64-bit versions of Windows, the kernel mode driver must again be signed and that requires purchasing a not-so-cheap code signing certificate.<br /></div><br />Huh? Does that affect me?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1232">Satuim</a> — Tue Aug 20, 2013 4:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-19T21:33:00-07:00</updated>
<published>2013-08-19T21:33:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5882#p5882</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5882#p5882"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5882#p5882"><![CDATA[
The correct word for these mods that change the look of the OS using bitmapped graphical elements is 'visual styles'. They were introduced with Windows XP. Theme or themepack technically is just a bunch of settings that applies a set of visual styles and other elements like wallpaper, sounds, mouse pointers etc. But everyone in the Windows community uses the word &quot;theme&quot; in place of &quot;visual styles&quot; (probably because in pre-Windows XP era, there were only themes, no visual styles).<br /> <br /> <br />Microsoft locked the Windows theming engine by default so that only theme DLLs which are digitally signed by Microsoft can be used. Third party visual styles are not signed. What UxStyle enables by doing some extremely clever in-memory patching is the use of these unsigned themes. It runs as a service, as long as that service is running, you can use unsigned visual styles. Of course, those styles that you download from sites like Deviantart.com have to be designed for a specific version of Windows. Meaning a style that *looks* like XP can be for Windows 7 and/or Windows 8. Make sure you get the right version. Styles for Windows 7 won't work for Windows 8. Note that UxStyle is not yet released for Windows 8.1. For 64-bit versions of Windows, the kernel mode driver must again be signed and that requires purchasing a not-so-cheap code signing certificate. UxStyle's developer, Rafael Rivera, according to its website, plans to update it soon to work with Windows 8.1.<br /><br />There is also a paid app called Windows Style Builder (<!-- m --><a class="postlink" href="http://vistastylebuilder.com/windows7.html">http://vistastylebuilder.com/windows7.html</a><!-- m -->) developed by Andreas Verhoeven that lets advanced users visually create these visual styles - edit the theme's graphical elements etc. Of course, you can also use a free tool like Resource Hacker to edit .msstyles files if you know how.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Aug 19, 2013 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cheebie]]></name></author>
<updated>2013-08-19T18:33:46-07:00</updated>
<published>2013-08-19T18:33:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5878#p5878</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5878#p5878"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5878#p5878"><![CDATA[
Hi all, <br />  <br />Thanks for this discussion! <br />  <br />GauravK, thank you for the reference to UIStyle. This is one of the programs I looked at. However, I had the same question as Satuim, who helped me out by asking my question for me! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" />  <br />  <br />And then thanks AGAIN to Gaurav, for your thorough explanation on this point! I had mentioned UI Theme Patcher in my original post. After doing some searching on my (XP)machine today, I found that the utility I used (or tried to) was actually called &quot;UltraUIThemePatcher.&quot; I was directed to use this utility by one of the Themes on the DeviantArt site: <span style="font-size: 100%; line-height: 116%;">(</span><a href="http://carborunda.deviantart.com/art/Snowy-v3-0-for-Windows-8-363931948" class="postlink"><span style="color:#0000cc;"><span style="font-size: 100%; line-height: 116%;">http://carborunda.deviantart.com/art/Snowy-v3-0-for-Windows-8-363931948</span></span></a><span style="font-size: 100%; line-height: 116%;">). </span>UltraUIThemePatcher did NOT run properly. I learned that it had not (at that point) been updated to run on the current version of Windows 8. That was the point where I started digging a little deeper, and learned that UltraUIThemePatcher was modifying System files. I heard the same thing said about other UI-modifying utilities, including UIStyle! I decided I wanted nothing to do with things that would patch system files, for the reasons Gaurav discussed. Thank you for explaining it so well, Gaurav; and given your explanation, I would consider trying UIStyle. <br />  <br />A couple questions: <br />(1) I understand that it is necessary to install UIStyle if I want to use Themes from an older version of Windows (say, the &quot;Luna&quot; theme, or perhaps the &quot;Windows Classic&quot; theme that I like so much on my current computer.) Is it NECESSARY to install UIStyle in order to use _any_ of the Themes from DeviantArt? (Apparently, at least _one_ theme recommends a different utility...) <br />  <br />(2) Ivo answered above that my understanding of themes was correct, that &quot;... a &quot;theme&quot; can include its own color palette, icon files, line widths, etc. &quot; (I took it for granted that he understood that my question applied to Windows 8, and Windows 8 Themes.) If a standard Win 8 theme can control all this information, _why_ would it be _necessary_ to employ an external &quot;patcher&quot; (even one like UIStyle?) I know that Win 8 does not make it EASY to access all the details which would restore a &quot;Windows Classic&quot; look instead of the abominable standard Win 8 Themes; my question was &quot;why hasn't some brilliant programmer (like Ivo!!) figured out how to dig in to the new Win 8 themes and make the needed changes?&quot; (or perhaps even developed a _utility_ to allow users the same access to themes as they did in XP?) <br />  <br />Gaurav, the floor is yours...<img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" />  <br />  <br />cheebie (AKA George)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1327">cheebie</a> — Mon Aug 19, 2013 6:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Satuim]]></name></author>
<updated>2013-08-19T04:30:48-07:00</updated>
<published>2013-08-19T04:30:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5855#p5855</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5855#p5855"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5855#p5855"><![CDATA[
I might switch to UxStyle. But I do feel that the Theme Patcher just works and it doesn't run any background tasks. It just patches.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1232">Satuim</a> — Mon Aug 19, 2013 4:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-19T04:14:38-07:00</updated>
<published>2013-08-19T04:14:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5852#p5852</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5852#p5852"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5852#p5852"><![CDATA[
I haven't checked out other theme patchers because they all mostly patch the Windows theming engine DLL on the disk, which requires taking ownership of that DLL and admin permissions. This reduces security as that DLL is protected by Windows Resource Protection. And even then, updates to Windows can restore the original unpatched DLL, then the modded theme or visual style will stop working or the system can become unstable.<br /><br />UxStyle does in-memory patching which is very hard to do because it requires writing a kernel mode driver which patches multiple bytes of the DLL plus it has added logic to continue working even if few bytes in the DLL change (due to updates or service packs). It &quot;just works&quot;, you just install it and forget about it, and then just apply the theme.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Aug 19, 2013 4:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Satuim]]></name></author>
<updated>2013-08-19T03:53:10-07:00</updated>
<published>2013-08-19T03:53:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5850#p5850</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5850#p5850"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5850#p5850"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />@cheebie, you can download UxStyle (<!-- m --><a class="postlink" href="http://uxstyle.com/">http://uxstyle.com/</a><!-- m -->) which will enable you to use third party visual styles from Deviantart to change the look of Windows 8.<br /><br />Disclaimer: Any third party software recommendation is only for your convenience. Classic Shell does not bear any responsibility for that app.<br /></div><br />Hey GauravK, Is there any advantage/difference in using that programs compared to Universal Theme Patcher. Which is the program I use to patch my third party themes?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1232">Satuim</a> — Mon Aug 19, 2013 3:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-18T22:25:24-07:00</updated>
<published>2013-08-18T22:25:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5846#p5846</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5846#p5846"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5846#p5846"><![CDATA[
@cheebie, you can download UxStyle (<!-- m --><a class="postlink" href="http://uxstyle.com/">http://uxstyle.com/</a><!-- m -->) which will enable you to use third party visual styles from Deviantart to change the look of Windows 8.<br /><br />Disclaimer: Any third party software recommendation is only for your convenience. Classic Shell does not bear any responsibility for that app.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Aug 18, 2013 10:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cheebie]]></name></author>
<updated>2013-08-12T21:34:12-07:00</updated>
<published>2013-08-12T21:34:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5642#p5642</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5642#p5642"/>
<title type="html"><![CDATA[Re: Win 8 &quot;colors&quot; (or lack thereof): please educate me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1081&amp;p=5642#p5642"><![CDATA[
Thanks, Ivo! I just ***knew*** that you would know the right direction to pursue!<br /><br />George<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1327">cheebie</a> — Mon Aug 12, 2013 9:34 pm</p><hr />
]]></content>
</entry>
</feed>