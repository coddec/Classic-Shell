<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=127" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-04-20T09:17:22-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=127</id>
<entry>
<author><name><![CDATA[Piddle Paddle]]></name></author>
<updated>2017-04-20T09:17:22-07:00</updated>
<published>2017-04-20T09:17:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=32283#p32283</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=32283#p32283"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=32283#p32283"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />The Start Menu can be manually started from C:\Program Files\Classic Shell\ClassicStartMenu.exe. Does starting it from there put the button back on the taskbar and do you see it running in the Task Manager? If yes, then it's just not starting at startup reliably. Put a shortcut to that EXE in your startup folder. Check in Services.msc if the Classic Shell service is disabled. It should be set to Automatic and started. The service starts the Start Menu on Windows 8.<br /></div><br /><br />just to get a slightly more direct solution, for anyone else having the original posters issue,<br /><br /> rather than bother clicking the<strong> classicstartmenu.exe</strong>, instead scroll further down the folder <strong>C:/program files/classic shell/</strong>,  and click the &quot;<strong>start menu settings</strong>&quot; <br /><br />shortcut/icon which will bring up the <strong>settings menu</strong>, then:<br /><br />click on the <strong>Start Button tab</strong> and look down the options for &quot;<strong>icon size</strong>&quot; and &quot;<strong>button size</strong>&quot; and reset them to zero (<strong>0</strong>)<br /><br />then click &quot;OK&quot;, and the button should now appear.<br /><br />i am guessing a custom setting had been used, hence possibly this issue, as that's how it happened to me. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19318">Piddle Paddle</a> — Thu Apr 20, 2017 9:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Piddle Paddle]]></name></author>
<updated>2017-04-20T09:11:46-07:00</updated>
<published>2017-04-20T09:11:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=32282#p32282</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=32282#p32282"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=32282#p32282"><![CDATA[
<div class="quotetitle">UKShell wrote:</div><div class="quotecontent"><br />I have been using Classic for a few weeks and it worked very well. I lost the Start Button but it returned. Tonight, despite rebooting, uninstalling, reinstalling, no button<br /><br />I am running Win8/32. Ctrl-Esc gets the Win 8 screen. An option there gets the classic windows desktop and all my task bar and quick launch icons are as expected just the Start button is missing/<br /><br />My system had had a semi-lock up. One program continued to function but the task bar items would not respond. I had to do a hard boot and it was then that I lost the start button.<br /><br />How do I get it back?<br /></div><br /><br />this is the most simple and direct fix for your issue, i think, , if it is the same issue that was bothering me, although it appears to be a different cause perhaps for you.<br /><br />similar to an above suggestion, BUT, go to C: program files &gt; Classic Shell &gt; scorll down the folder to &quot;Start Menu settings&quot; shortcut icon , and click it.<br />when you click it, the settings menu, of course, appears.<br />now check to see what your settings are for &quot;button look&quot;, which is in the  &quot;Start Button tab.<br />on that tabs menu you will see chopice directly under &quot;button look&quot;, and a few more choices under &quot;Custom Button&quot;<br /><br />maybe you adjusted one of the size settings? or, somehow, one of the size settings for the button have been changed?<br />see: &quot;icon size&quot; and &quot;button size&quot; as having those wrong, especially for me, earlier today, &quot;button size&quot;.<br /><br />in short, anyone with this issue, go to the start settings menu icon/shortcut in the classic shell program files folder, click it and so on...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19318">Piddle Paddle</a> — Thu Apr 20, 2017 9:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[UKShell]]></name></author>
<updated>2013-01-24T16:06:48-07:00</updated>
<published>2013-01-24T16:06:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=535#p535</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=535#p535"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=535#p535"><![CDATA[
back.  I have a bug with the other program so I uninstalled that and reinstalled CV.  No joy, still no Start Button.<br /><br />Is there a clean uninstall routine I can follow before reinstalling?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=179">UKShell</a> — Thu Jan 24, 2013 4:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[UKShell]]></name></author>
<updated>2013-01-23T08:57:44-07:00</updated>
<published>2013-01-23T08:57:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=501#p501</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=501#p501"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=501#p501"><![CDATA[
Gauravk, I confess that having been driven round the bend not having a start button etc that I looked elsewhere and now had a different product.<br /><br />Can I say though that I enjoyed using Classic for the last month or more and it gave me much more of a Win 7 look and feel than the one I have switched too.  That one is nearer Win 8 in its presentation but giving the Win 7 access that I really needed.<br /><br />Thanks again for your help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=179">UKShell</a> — Wed Jan 23, 2013 8:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-23T06:02:48-07:00</updated>
<published>2013-01-23T06:02:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=496#p496</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=496#p496"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=496#p496"><![CDATA[
Look in Zone Alarm's setting for exclusion list to exclude EXEs and add ClassicShellMenu.exe to it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 23, 2013 6:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[UKShell]]></name></author>
<updated>2013-01-23T03:07:51-07:00</updated>
<published>2013-01-23T03:07:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=495#p495</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=495#p495"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=495#p495"><![CDATA[
And I am using Zone Alarm<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=179">UKShell</a> — Wed Jan 23, 2013 3:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[UKShell]]></name></author>
<updated>2013-01-23T03:07:34-07:00</updated>
<published>2013-01-23T03:07:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=494#p494</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=494#p494"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=494#p494"><![CDATA[
'it seems to work' - the icon responds but nothing else happens.<br /><br />I think I understand what you are saying 'go to Controls tab from Settings and check if Left click and Windows key opens settings are set to open the Classic Start Menu' <br /><br />I go to the Win 8 side panel and open Change PC settings.  There is no controls tab.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=179">UKShell</a> — Wed Jan 23, 2013 3:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-23T01:10:40-07:00</updated>
<published>2013-01-23T01:10:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=493#p493</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=493#p493"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=493#p493"><![CDATA[
So the button failed to appear even after checking that setting and logging out? What do you mean the 'action seems to work'? <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Please go to Controls tab from Settings and check if Left click and Windows key opens settings are set to open the Classic Start Menu. Also, what anti-virus are you using (it may be conflicting).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 23, 2013 1:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[UKShell]]></name></author>
<updated>2013-01-23T00:53:32-07:00</updated>
<published>2013-01-23T00:53:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=492#p492</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=492#p492"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=492#p492"><![CDATA[
I have tried to open Classic Start Menu the action seems to work but it doesn't open.  I also tried a repair from the installation menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=179">UKShell</a> — Wed Jan 23, 2013 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-22T20:36:08-07:00</updated>
<published>2013-01-22T20:36:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=487#p487</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=487#p487"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=487#p487"><![CDATA[
I am also running Windows 8 32-bit, unfortunately unable to reproduce the issue. Check this. Open Classic Start Menu Settings. Click the All Settings radio button at the bottom. Then go to Start Button tab and make sure &quot;Enable Start Button&quot; checkbox is checked. Click OK, log out and log back in and see if the Start button appears on the taskbar.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jan 22, 2013 8:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[UKShell]]></name></author>
<updated>2013-01-22T15:30:04-07:00</updated>
<published>2013-01-22T15:30:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=478#p478</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=478#p478"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=478#p478"><![CDATA[
Running ClassicStartMenu.exe didn't work.<br /><br />In Task Manager I have Classic Shell Service and Classic Start Menu running in background.<br /><br />I am not sure how to put a short cut in the Startup Folder.  I will reboot and check tomorrow.<br /><br />In Start Up in Task Manager Classic is not shown.<br /><br />In Services local Shell Service is shown but not Classic Start Menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=179">UKShell</a> — Tue Jan 22, 2013 3:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-22T13:52:41-07:00</updated>
<published>2013-01-22T13:52:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=473#p473</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=473#p473"/>
<title type="html"><![CDATA[Re: Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=473#p473"><![CDATA[
The Start Menu can be manually started from C:\Program Files\Classic Shell\ClassicStartMenu.exe. Does starting it from there put the button back on the taskbar and do you see it running in the Task Manager? If yes, then it's just not starting at startup reliably. Put a shortcut to that EXE in your startup folder. Check in Services.msc if the Classic Shell service is disabled. It should be set to Automatic and started. The service starts the Start Menu on Windows 8.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jan 22, 2013 1:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[UKShell]]></name></author>
<updated>2013-01-22T13:19:54-07:00</updated>
<published>2013-01-22T13:19:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=472#p472</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=472#p472"/>
<title type="html"><![CDATA[Start Button Disappeared]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=127&amp;p=472#p472"><![CDATA[
I have been using Classic for a few weeks and it worked very well.  I lost the Start Button but it returned.  Tonight, despite rebooting, uninstalling, reinstalling, no button<br /> <br />I am running Win8/32.  Ctrl-Esc gets the Win 8 screen.  An option there gets the classic windows desktop and all my task bar and quick launch icons are as expected just the Start button is missing/<br /> <br />My system had had a semi-lock up.  One program continued to function but the task bar items would not respond.  I had to do a hard boot and it was then that I lost the start button.<br /> <br />How do I get it back?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=179">UKShell</a> — Tue Jan 22, 2013 1:19 pm</p><hr />
]]></content>
</entry>
</feed>