<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7274" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-01-22T08:42:23-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7274</id>
<entry>
<author><name><![CDATA[Hafwit]]></name></author>
<updated>2017-01-22T08:42:23-07:00</updated>
<published>2017-01-22T08:42:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31349#p31349</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31349#p31349"/>
<title type="html"><![CDATA[Re: Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31349#p31349"><![CDATA[
No problem.<br /><br />Only one monitor in use now, although when I first installed the Classicshell I was experimenting with a second monitor to the left with the taskbar extended for access on both.  I have since changed back to just one monitor and a new VGA card and updated VGA drivers.  I was not playing any games at this time to confirm if the problem was occurring with that particular set up.<br /><br />Start button settings are as follows:<br /><br />&lt;Settings version=&quot;4.3.0&quot; component=&quot;StartMenu&quot;&gt;<br />&lt;MenuStyle value=&quot;Win7&quot;/&gt;<br />&lt;ControlPanelCategories value=&quot;0&quot;/&gt;<br />&lt;ProgramsStyle value=&quot;Inline&quot;/&gt;<br />&lt;RecentPrograms value=&quot;Frequent&quot;/&gt;<br />&lt;RecentProgsTop value=&quot;1&quot;/&gt;<br />&lt;RecentSortName value=&quot;1&quot;/&gt;<br />&lt;HybridShutdown value=&quot;1&quot;/&gt;<br />&lt;SearchBox value=&quot;Normal&quot;/&gt;<br />&lt;SearchSelect value=&quot;0&quot;/&gt;<br />&lt;InvertMetroIcons value=&quot;1&quot;/&gt;<br />&lt;SkinC1 value=&quot;Windows Aero&quot;/&gt;<br />&lt;SkinVariationC1 value=&quot;&quot;/&gt;<br /><br />&lt;SkinOptionsC1&gt;<br />&lt;Line&gt;CAPTION=1&lt;/Line&gt;<br />&lt;Line&gt;USER_IMAGE=0&lt;/Line&gt;<br />&lt;Line&gt;USER_NAME=0&lt;/Line&gt;<br />&lt;Line&gt;CENTER_NAME=0&lt;/Line&gt;<br />&lt;Line&gt;SMALL_ICONS=0&lt;/Line&gt;<br />&lt;Line&gt;LARGE_FONT=0&lt;/Line&gt;<br />&lt;Line&gt;ICON_FRAMES=1&lt;/Line&gt;<br />&lt;Line&gt;OPAQUE=0&lt;/Line&gt;<br />&lt;/SkinOptionsC1&gt;<br />&lt;SkinW7 value=&quot;Windows Aero&quot;/&gt;<br />&lt;SkinVariationW7 value=&quot;&quot;/&gt;<br /><br /><br />&lt;SkinOptionsW7&gt;<br />&lt;Line&gt;USER_IMAGE=0&lt;/Line&gt;<br />&lt;Line&gt;SMALL_ICONS=1&lt;/Line&gt;<br />&lt;Line&gt;LARGE_FONT=0&lt;/Line&gt;<br />&lt;Line&gt;DISABLE_MASK=0&lt;/Line&gt;<br />&lt;Line&gt;WHITE_SUBMENUS=1&lt;/Line&gt;<br />&lt;/SkinOptionsW7&gt;<br />&lt;EnableStartButton value=&quot;1&quot;/&gt;<br />&lt;AllTaskbars value=&quot;0&quot;/&gt;<br />&lt;StartButtonType value=&quot;CustomButton&quot;/&gt;<br />&lt;StartButtonPath value=&quot;%SystemRoot%\WindowsStartButtonSmall.png&quot;/&gt;<br />&lt;StartButtonAlign value=&quot;0&quot;/&gt;<br />&lt;CustomTaskbar value=&quot;1&quot;/&gt;<br />&lt;TaskbarLook value=&quot;Opaque&quot;/&gt;<br />&lt;SkipMetro value=&quot;1&quot;/&gt;<br />&lt;DisablePinExt value=&quot;1&quot;/&gt;<br /><br /><br />Any time I select &quot;Replace start button&quot; option, with a default or custom graphic the issue is present.  Not selecting this option resolves the issue.<br /><br />Thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17251">Hafwit</a> — Sun Jan 22, 2017 8:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-01-22T07:52:17-07:00</updated>
<published>2017-01-22T07:52:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31348#p31348</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31348#p31348"/>
<title type="html"><![CDATA[Re: Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31348#p31348"><![CDATA[
Sorry, nothing funny here. I want to repro the exact conditions as you and want to remove all ambiguity.<br /><br />What are your start button settings?<br /><br />Do you have multiple monitors? If so, what are their resolutions? Do you have the taskbar on them?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 22, 2017 7:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hafwit]]></name></author>
<updated>2017-01-22T07:31:41-07:00</updated>
<published>2017-01-22T07:31:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31347#p31347</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31347#p31347"/>
<title type="html"><![CDATA[Re: Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31347#p31347"><![CDATA[
Both desktop and game resolution 1920x1200.<br /><br />Sorry, are you trying to be funny?  Two reasons: when the cursor is over where the start button would be it flickers as the windows mouse cursor, and because I can move my mouse down and left a couple of inches which would completely overshoot the bottom left corner.  Not the other corners, only the bottom left.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17251">Hafwit</a> — Sun Jan 22, 2017 7:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-01-22T07:21:21-07:00</updated>
<published>2017-01-22T07:21:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31346#p31346</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31346#p31346"/>
<title type="html"><![CDATA[Re: Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31346#p31346"><![CDATA[
What is your desktop resolution and your game resolution?<br />If the game doesn't have a mouse pointer, how do you know you are clicking in the corner?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 22, 2017 7:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hafwit]]></name></author>
<updated>2017-01-22T06:51:26-07:00</updated>
<published>2017-01-22T06:51:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31345#p31345</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31345#p31345"/>
<title type="html"><![CDATA[Re: Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31345#p31345"><![CDATA[
Sorry!  I am using Windows 10 Pro.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17251">Hafwit</a> — Sun Jan 22, 2017 6:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-01-22T05:11:23-07:00</updated>
<published>2017-01-22T05:11:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31342#p31342</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31342#p31342"/>
<title type="html"><![CDATA[Re: Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31342#p31342"><![CDATA[
Are you using Windows 10 or 7?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jan 22, 2017 5:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hafwit]]></name></author>
<updated>2017-01-22T04:11:44-07:00</updated>
<published>2017-01-22T04:11:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31341#p31341</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31341#p31341"/>
<title type="html"><![CDATA[Re: Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31341#p31341"><![CDATA[
Hi and many thanks for the quick reply.  When I type &quot;corner&quot; into the search box I only get the option to 'Align the Start Menu to corner'.  I have looked around the options for anything else relating to corner actions but do not see anything representing the options you suggest.  I considered the option may not be available with my current settings for a more Windows 7 like interface.<br /><br />I did some experimenting, though, and discovered it is my use of a custom graphic for the Start button that creates the problem - using your default button resolves the problem while sitching back to a custom image replicates the problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17251">Hafwit</a> — Sun Jan 22, 2017 4:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-01-21T21:14:02-07:00</updated>
<published>2017-01-21T21:14:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31338#p31338</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31338#p31338"/>
<title type="html"><![CDATA[Re: Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31338#p31338"><![CDATA[
If you are on Windows 8/8.1, open Classic Start Menu Settings. In the search box of the Settings window, type: corner. Set Disable active corners to &quot;All&quot;. Click OK. Now try the game. Does that fix it?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jan 21, 2017 9:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hafwit]]></name></author>
<updated>2017-01-21T17:20:07-07:00</updated>
<published>2017-01-21T17:20:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31337#p31337</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31337#p31337"/>
<title type="html"><![CDATA[Windows Button invisible in games but always at top.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7274&amp;p=31337#p31337"><![CDATA[
The windows start button is invisible while in games, but any time my mouse is in the bottom left corner of the screen and I click, the game I am playing minimises as the start button has been activated.  This happens in games with no active mouse cursor (Doom, Deus EX) as well as strategy games where I have an active mouse cursor.<br /><br />I looked for anyone else with the same issue but could not see anything on the same topic.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17251">Hafwit</a> — Sat Jan 21, 2017 5:20 pm</p><hr />
]]></content>
</entry>
</feed>