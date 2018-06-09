<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=5619" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-03-22T09:06:22-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=5619</id>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2016-03-22T09:06:22-07:00</updated>
<published>2016-03-22T09:06:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=25841#p25841</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=25841#p25841"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=25841#p25841"><![CDATA[
[originally posted in the wrong thread]<br />Uhh...sorry for the bump, but I came up with another possible approach: Toggle it with a hotkey. The end user could set the transparency to be opaque when WIN+UP ARROW is pressed and transparent when WIN+DOWN, WIN+LEFT, or WIN+RIGHT are pressed, and then it would toggle as if it were according to Windows being maximized. Atleast for those who abuse hotkeys like crazy.<br /><br />Seem like a possibility?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Tue Mar 22, 2016 9:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-01-30T05:11:39-07:00</updated>
<published>2016-01-30T05:11:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24881#p24881</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24881#p24881"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24881#p24881"><![CDATA[
I just wanted to update, and say, as of now, display fusion beta supports the trigger events required to make your request possible. (Though it still doesn't detect snap left/right, or which monitor the window was maximized on if you have more than 1) For your use-case it might still be acceptable. <br /><br />Basically you would create a function that adds to a counter (current # of maximized windows), and then sends a !ShowMeter bang to the 'taskbar' skin you create, when a window is maximized.<br /><br />To hide this meter, you would have to create a function that activates on: minimize, restore, close, that subtracts from the counter, and if = 0, then sends a !HideMeter bang to the 'taskbar' skin you create<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat Jan 30, 2016 5:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ChristenColour]]></name></author>
<updated>2016-01-25T21:28:01-07:00</updated>
<published>2016-01-25T21:28:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24767#p24767</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24767#p24767"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24767#p24767"><![CDATA[
Well, I agree that there are usability concerns for a completely transparent taskbar, so I have a rainmeter skin creating a gradient shadow behind the icons, so I don't have an issue with that, my issue is that aesthetically the transparent taskbar only looks good until you maximize a window, at which point it looks quite odd.<br />Personally, I don't think that an update on transparency from say 100% transparent, to opaque dark gray, would be distracting, it would simply solidify the visual presented by maximizing a window, hiding any part of the desktop that shows through the task bar, and that the taskbar being transparent when only the desktop is visible makes the digital environment feel open and less cramped. <br /><br />With regards to performance, while this website has opened my eyes to the word of people who are quite happy with the way windows was in vista, xp, and before, and even want it to go back to being visually the same as it was then, we live in a world where people have dual (or higher) graphics card configurations, chip sets are overclocked to 6+ GHz, and I'm typing this on what is techincally a tablet with 8 Gb of RAM and an i7 processor, with a 256 Gb SSD, a tablet running windows 10 that can run chrome with 50+ tabs and fetch 1080p web content from youtube servers somewhere else in the world and its integrated graphics (that sadden me greatly) can display them without stuttering. I'm sure there are plenty of people out there who have computers that may have issues with updating a single color value (or depending on how the data is formatted, just an alpha or transparency value) repeatedly and very rapidly, upon user input, I'm also sure that plenty of computers can handle it more easily than 99% of what their users put them through daily.<br /><br />I think the main concerns are really<br />1) usability (I personally happen to have this sorted out for my particular use case, but that means little to others, who may have other use cases), but then, transparency is an existing feature, my point was sort of just that this would make full, or even partial transparency, more usable, and improve the UI<br />2) feasibility and value: Ivo would have to code this and it quite frankly wouldn't be that big of an improvement for that many people (relative to what Ivo said it would require in order to implement)<br /><br />However, I don't think performance, or distraction are an issue, though I'm sure some one, if really dedicated to making an ugly desktop, could do something like make it go from neon green to bright red, and I'm sure that would be distracting, but as an interface designer, there are plenty of ways one could take advantage of a feature like this, without it being at all unpleasant, in fact, Chrome OS does exactly this and it's quite attractive (unfortunately the rest of the UI isn't as attractive and polished as google's other platform, android, but hey, we'll see if it improves with more time)<br /><br />All of my long winded ramblings aside, I believe Ivo has expressed his feelings that, within the parameters of this piece of software and it's intended goals, it isn't worth implementation (also, correct me if I'm wrong about that Ivo, I don't mean to put words in your mouth, and if that isn't how you feel, I do apologize), which is understandable given my understanding of what would, or rather, might, be required to implement this feature. <br />However, that leaves me attempting to figure how I might simulate this kind of UI behavior, so I'll probably try to get in touch with the devs at DisplayFusion and get their input, regarding feasibility, and potential implementation.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12532">ChristenColour</a> — Mon Jan 25, 2016 9:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-01-25T20:48:30-07:00</updated>
<published>2016-01-25T20:48:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24764#p24764</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24764#p24764"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24764#p24764"><![CDATA[
My opinion is that:<br />1.  The transparent taskbar while it looks great aesthetically, it's not very usable because the desktop background can be anything and there is text to read on the taskbar. Full transparency causes readability issues.<br />2.  Changing taskbar color or transparency *that* frequently in a multitasking OS would be a visual distraction. It can even affect performance if user rapidly switches between windows at a time when CPU consumption is high.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 25, 2016 8:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2016-01-25T11:55:14-07:00</updated>
<published>2016-01-25T11:55:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24754#p24754</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24754#p24754"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24754#p24754"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Those are two separate things. In one case you have the look of one program change according to its state. In the other, the piece you are changing (the taskbar) is in another process. The two solutions nothing in common.<br /></div><br /><br />Oh...I thought detecting when the program's state changes was the obstacle, not applying that to the taskbar.<br /><br />In that case...look at Windows Vista. Its taskbar has the behaviour, though I can't get it to work on Windows 8...meh, IDK if the problem is the detection or the behaviour exerted, but Windows 8's DWM does have some serious lack of Aero Glass, so... ._:-.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Mon Jan 25, 2016 11:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[redblade8]]></name></author>
<updated>2016-01-25T11:42:56-07:00</updated>
<published>2016-01-25T11:42:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24753#p24753</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24753#p24753"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24753#p24753"><![CDATA[
<div class="quotetitle">Splitwirez wrote:</div><div class="quotecontent"><br /><div class="quotetitle">redblade8 wrote:</div><div class="quotecontent">The taskbar isn't themeable in windows 8<br /></div><br /><br />wat<br /><br />no<br /><br />I can tell you from experience ( <!-- m --><a class="postlink" href="http://rob55rod.deviantart.com/art/Plexcellent-VS-for-Windows-8-1-WIP-4-i4got2count-571303944">http://rob55rod.deviantart.com/art/Plex ... -571303944</a><!-- m --> ) that Windows 8's taskbar is themeable. Windows 10's isn't, though ._:-.</div><br /><br /><br />I'm sorry, you're correct. For some reason I was thinking about the classic theme in windows 8 &amp; 10.<br /><br />True transparency and display fusion might be something worth looking into. <br /><br />Or the taskbar could change from transparency to solid with any window open. The 'only when maximized' feature could come at a later date when its figured out.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1899">redblade8</a> — Mon Jan 25, 2016 11:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-01-25T10:40:31-07:00</updated>
<published>2016-01-25T10:40:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24751#p24751</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24751#p24751"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24751#p24751"><![CDATA[
This particular feature might be more in-line with what displayfusion is actually doing right now.. Though Ive been holding out for several reasons (1 its a pay program, 2 its not necessarily going to be added, and 3 the function would still need to be coded, though it would be quite easy, and the DF staff are good about coding custom functions for their customers, if they are relatively simple<br /><br />This thread, has atleast a request for detection of maximization: <!-- m --><a class="postlink" href="https://www.displayfusion.com/Discussions/View/click-through-function-request/?ID=c8164cd9-c564-4072-b38e-8f142d2c0656">https://www.displayfusion.com/Discussio ... 142d2c0656</a><!-- m --><br />So if you are willing to pay, I would maybe post in that thread voicing your opinion, and use-case<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Jan 25, 2016 10:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-25T10:38:21-07:00</updated>
<published>2016-01-25T10:38:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24750#p24750</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24750#p24750"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24750#p24750"><![CDATA[
Those are two separate things. In one case you have the look of one program change according to its state. In the other, the piece you are changing (the taskbar) is in another process. The two solutions nothing in common.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 25, 2016 10:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2016-01-25T10:33:28-07:00</updated>
<published>2016-01-25T10:33:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24749#p24749</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24749#p24749"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24749#p24749"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />The taskbar is implemented by Explorer, so yes.<br />I don't know what TT does, but it most likely injects itself into every application, which is totally unrelated to what is needed here.<br /></div><br /><br />I know the taskbar is implemented by Explorer, I was referring to Classic Shell's proposed affect on it.<br /><br />TrueTransparency is an application which simply skins window borders. It was designed in the pre-Vista era to emulate the then-overhyped-to-hell-and-back Aero Glass effect, but still works on Windows 7, 8 and 10, though its borders are anything-but stable, as the application frequently jams in place, behaves oddly, becomes unresponsive, fails to comply to Aero snap, or simply crashes. Nonetheless, that seems to be due to DWM, and I doubt the mechanism for detecting maximized windows is at fault. To clarify how I know that it can tell when a Window is maximized...TrueTransparency skins include 2 sets of borders, one for restored Windows, and one for Maximized windows. TrueTransparency switches these borders per-application as you'd expect, and this seems to be the only feature which works reliably on Windows 7, 8, and 10 <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Mon Jan 25, 2016 10:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-25T09:43:33-07:00</updated>
<published>2016-01-25T09:43:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24746#p24746</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24746#p24746"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24746#p24746"><![CDATA[
The taskbar is implemented by Explorer, so yes.<br />I don't know what TT does, but it most likely injects itself into every application, which is totally unrelated to what is needed here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 25, 2016 9:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2016-01-25T09:24:22-07:00</updated>
<published>2016-01-25T09:24:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24744#p24744</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24744#p24744"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24744#p24744"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />I've been following this thread from the sidelines. As Jcee pointed out, the main problem is detecting when a window is getting maximized. It gets more complicated once you add multiple monitors (and multiple taskbars) into the mix. Another possible complication is for programs running as admin - they may prevent Explorer from detecting their maximized state.<br /></div><br /><br />...wait, all this has to run through explorer? ._:-.<br /><br />Hmm...well as I said above, TrueTransparency doesn't need to be run as an administrator to skin applications which are run as an administrator, and it can tell when they're maximized just fine...I dunno if tearing it apart to figure this out would help or not...it was just a thought ._._.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Mon Jan 25, 2016 9:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-25T08:36:30-07:00</updated>
<published>2016-01-25T08:36:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24743#p24743</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24743#p24743"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24743#p24743"><![CDATA[
I've been following this thread from the sidelines. As Jcee pointed out, the main problem is detecting when a window is getting maximized. It gets more complicated once you add multiple monitors (and multiple taskbars) into the mix. Another possible complication is for programs running as admin - they may prevent Explorer from detecting their maximized state.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 25, 2016 8:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2016-01-25T00:20:32-07:00</updated>
<published>2016-01-25T00:20:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24729#p24729</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24729#p24729"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24729#p24729"><![CDATA[
<div class="quotetitle">redblade8 wrote:</div><div class="quotecontent"><br />The taskbar isn't themeable in windows 8<br /></div><br /><br />wat<br /><br />no<br /><br />I can tell you from experience ( <!-- m --><a class="postlink" href="http://rob55rod.deviantart.com/art/Plexcellent-VS-for-Windows-8-1-WIP-4-i4got2count-571303944">http://rob55rod.deviantart.com/art/Plex ... -571303944</a><!-- m --> ) that Windows 8's taskbar is themeable. Windows 10's isn't, though ._:-.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Mon Jan 25, 2016 12:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[redblade8]]></name></author>
<updated>2016-01-24T22:59:15-07:00</updated>
<published>2016-01-24T22:59:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24728#p24728</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24728#p24728"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24728#p24728"><![CDATA[
<div class="quotetitle">Splitwirez wrote:</div><div class="quotecontent"><br /><div class="quotetitle">ChristenColour wrote:</div><div class="quotecontent"><div class="quotetitle">Jcee wrote:</div><div class="quotecontent">At-least on-the fly changing of the monitor transparency is feasible.. The ongo real hurdle would be detecting if a window is maximized or not.<br /></div><br /><br /><br />yeah, that's sorta what I was thinking with regards to the primarwo fficulty, but as I said, if it can be done within the scope of this program, I think it really would sure worth wile feature.<br /><br />as far as it being implemented goes, I think that's the second hurdle though: it being useful enough, to enough people, to warrant the dev(s) putting the time into making it happen.</div><br /><br />Personally, I feel that Classic Shell has the potential to become a huge aid to themers, possibly outdoing some of StarDock's own tools...<br /><br />...but IDK if they'll ever know until they take a risk :/</div><br /><br /><br />Unfortunately, I don't think Ivo is interested in 'potential'. He is a one man army, and hes said that full customization could possibly takes years of blood and sweat to actually be possible. That he's just not interested in. Plus I didn't get a reply back on my post trying to clear things up on that topic, so I'm just not sure of what his thoughts are on what I wrote.<br /><br />The classic shell we know might or might not get new features, it might just stay the same without offering much customization to the explorer, or further customization to the start menu. Which the start menu is very good at this point, but could still use further enhancements &amp; customizability options.<br /><br />But please, don't take my word for it, as I don't know much &amp; all I said could be wrong.<br /><br />Anyways, I think this is a good idea. We could even add in an option for the taskbar to slowly either fade in, or fade out, from transparency to solid, or vice versa. You could specify how many seconds it takes to fade as well. If the option to fade is unchecked, the change would be immediate. There could also be separate options for fade in, and fade out. This could potentially open possibilities to have the taskbar fade in, but not fade out, and fade out, but not fade in making the transition immediate on fading in, but it will still fade out. There could be two values for this, 0 for both fading in and out for immediate change, no fade out or in effect. If you increase the value , the taskbar will start the fading transitioning effect. 0.5 seconds would either fade in or fade out fully within that time frame. <br /><br />There could be a check box to 'do not transition' if you want the taskbar to not become solid upon opening a maximized window. <br /><br />What about a check box for if you want the taskbar to become solid if any window , whether it be maximized or not too?<br /><br />I don't think we can suggest for the taskbar to become solid and change to another color though. The taskbar isn't themeable in windows 8 and 10 I'm fairly sure, so I don't think that to change or specify a color on being solid would be possible on the taskbar. <br /><br /><br />This would just be a windows only option that you change the color normally in your personalization options. So the color idea is a no go, but transitioning between solid and transparent &amp; fading in and out would be a great feature to have. <br /><br />I support this idea.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1899">redblade8</a> — Sun Jan 24, 2016 10:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2016-01-24T13:14:01-07:00</updated>
<published>2016-01-24T13:14:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24715#p24715</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24715#p24715"/>
<title type="html"><![CDATA[Re: Taskbar Transparency Change on maximize]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5619&amp;p=24715#p24715"><![CDATA[
<div class="quotetitle">ChristenColour wrote:</div><div class="quotecontent"><br /><div class="quotetitle">Jcee wrote:</div><div class="quotecontent">At-least on-the fly changing of the monitor transparency is feasible.. The only real hurdle would be detecting if a window is maximized or not.<br /></div><br /><br /><br />yeah, that's sorta what I was thinking with regards to the primary difficulty, but as I said, if it can be done within the scope of this program, I think it really would be a worth wile feature.<br /><br />as far as it being implemented goes, I think that's the second hurdle though: it being useful enough, to enough people, to warrant the dev(s) putting the time into making it happen.</div><br /><br />Personally, I feel that Classic Shell has the potential to become a huge aid to themers, possibly outdoing some of StarDock's own tools...<br /><br />...but IDK if they'll ever know until they take a risk :/<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Sun Jan 24, 2016 1:14 pm</p><hr />
]]></content>
</entry>
</feed>