<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=2801" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-05-06T01:50:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=2801</id>
<entry>
<author><name><![CDATA[Ramin2536]]></name></author>
<updated>2016-05-06T01:50:32-07:00</updated>
<published>2016-05-06T01:50:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=26462#p26462</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=26462#p26462"/>
<title type="html"><![CDATA[Re: Classic Theme Border Outline?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=26462#p26462"><![CDATA[
does it work on windows 10 ?<br />i cant find it on windows 8.1 and 10 <br />is any 3rd party software make windows borders 3d like windows 98 in windows 10 <br />i tired to search about it on the web and the all of answers is change theme to high contrast but i don't want it i exactly want classic theme like windows 98 the dark blue softly change to light blue in active title bar and borders are 3d in high contrast borders doesn't exist<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11232">Ramin2536</a> — Fri May 06, 2016 1:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tPenguinLTG]]></name></author>
<updated>2014-10-28T17:33:44-07:00</updated>
<published>2014-10-28T17:33:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=15436#p15436</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=15436#p15436"/>
<title type="html"><![CDATA[Re: Classic Theme Border Outline?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=15436#p15436"><![CDATA[
If anyone's still interested, the easiest way to tweak that border is by changing the ButtonShadow, ButtonDkShadow, ButtonLight, and ButtonHilight values in the theme file. To get the theme file, save the tweaked theme and navigate to %LOCALAPPDATA%\Microsoft\Windows\Themes.<br /><br />Open the theme file in a text editor and find the [Control Panel\Colors] section.<br />You can make it easy for yourself and replace the whole section with this:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&#91;Control Panel\Colors&#93;<br />ActiveTitle=0 0 128<br />Background=0 128 128<br />Hilight=0 0 128<br />HilightText=255 255 255<br />TitleText=255 255 255<br />Window=255 255 255<br />WindowText=0 0 0<br />Scrollbar=192 192 192<br />InactiveTitle=128 128 128<br />Menu=192 192 192<br />WindowFrame=0 0 0<br />MenuText=0 0 0<br />ActiveBorder=192 192 192<br />InactiveBorder=192 192 192<br />AppWorkspace=128 128 128<br />ButtonFace=192 192 192<br />ButtonShadow=128 128 128<br />GrayText=128 128 128<br />ButtonText=0 0 0<br />InactiveTitleText=192 192 192<br />ButtonHilight=255 255 255<br />ButtonDkShadow=0 0 0<br />ButtonLight=223 223 223<br />InfoText=0 0 0<br />InfoWindow=255 255 225<br />GradientActiveTitle=0 0 128<br />GradientInactiveTitle=128 128 128<br />ButtonAlternateFace=192 192 192<br />HotTrackingColor=0 0 128<br />MenuHilight=0 0 128<br />MenuBar=192 192 192<br /></div><br /><br />If I remember correctly, I pulled these values directly from Windows 95 a few years ago.<br /><br />After that, open the Personalize dialog (close then reopen if it was already open), switch to the default &quot;Windows Classic&quot; theme, then switch back to the Windows 95 theme.<br /><br />I've attached a screenshot of what the theme looks like and a working .theme file (remove the .txt extension); just save and double-click to apply. Be warned, though, that if you choose to use my theme file, any changes you've made to the desktop icons, sounds, wallpapers, and screensaver will be lost. Simply replacing the Colors section as outlined above will preserve your changes.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4691">tPenguinLTG</a> — Tue Oct 28, 2014 5:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[R.O.B.]]></name></author>
<updated>2014-08-11T14:29:18-07:00</updated>
<published>2014-08-11T14:29:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=14399#p14399</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=14399#p14399"/>
<title type="html"><![CDATA[Re: Classic Theme Border Outline?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=14399#p14399"><![CDATA[
You can edit the registry to change this. Check in <strong>HKCU\Control Panel\Colors</strong> for the color data. I might post up a .reg file that will give you Windows 95 colors/metrics if I have time later.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3546">R.O.B.</a> — Mon Aug 11, 2014 2:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-06-14T06:03:32-07:00</updated>
<published>2014-06-14T06:03:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13359#p13359</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13359#p13359"/>
<title type="html"><![CDATA[Re: Classic Theme Border Outline?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13359#p13359"><![CDATA[
Oh I see you mean very thin outline of the border, I don't know any way to tweak that.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jun 14, 2014 6:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2014-06-13T11:57:48-07:00</updated>
<published>2014-06-13T11:57:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13340#p13340</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13340#p13340"/>
<title type="html"><![CDATA[Re: Classic Theme Border Outline?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13340#p13340"><![CDATA[
Unfortunately, that's not what I'm talking about. I myself thought that might've been it, but I quickly realized that it wasn't as soon as I noticed the active border was something else entirely from the border / window frame outline <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /><br /><br />Thanks for the suggestion either way!<p>Statistics: Posted by Guest — Fri Jun 13, 2014 11:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-06-12T23:45:59-07:00</updated>
<published>2014-06-12T23:45:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13332#p13332</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13332#p13332"/>
<title type="html"><![CDATA[Re: Classic Theme Border Outline?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13332#p13332"><![CDATA[
For the Classic theme, you can tweak the active window border and inactive window borders by opening the Appearance Control Panel. <br /><br />On Windows 7, you can open it by running: <br />rundll32.exe shell32.dll,Control_RunDLL desk.cpl,,5 <br /><br />On Vista, this command works: rundll32.exe shell32.dll,Control_RunDLL desk.cpl,,2 <br />And then click the Advanced button.    <br />  <br />On Windows 8, the Classic theme is removed so it may not be possible.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jun 12, 2014 11:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2014-06-12T15:41:06-07:00</updated>
<published>2014-06-12T15:41:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13324#p13324</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13324#p13324"/>
<title type="html"><![CDATA[Classic Theme Border Outline?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2801&amp;p=13324#p13324"><![CDATA[
Hey everyone! I'm currently skinning Windows 7 to look like 95 for whatever reason (I'd have to guess boredom XD), and I ran across a pretty glaring difference recently that I can't seem to alter to my tastes. Rather than try to explain it to ya, here's a picture detailing what I mean:<br /><br />[IMG]http://i.imgur.com/juExxaN.png[/IMG]<br /><br />The one on the top is what I have so far (doing this comparison actually revealed a colour difference I just now noticed), and the one on the bottom is legit Windows 95. As you can tell from the title of the thread, I'm specifically talking about the outline of the window borders: around Windows 2000, they were changed to be lighter and darker shades of the colour chosen, while in Windows 95 and I think 98, they were white and black respectively.<br /><br />What I'm asking here is, is there any possible way to change this? Registry edit? Carefully tweaking shell32 or shellstyle or whatever .dll stores this information? Something else? Much help would be appreciated!<p>Statistics: Posted by Guest — Thu Jun 12, 2014 3:41 pm</p><hr />
]]></content>
</entry>
</feed>