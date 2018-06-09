<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=5&amp;t=281" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-06-16T05:32:44-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=5&amp;t=281</id>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-06-16T05:32:44-07:00</updated>
<published>2013-06-16T05:32:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=3747#p3747</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=3747#p3747"/>
<title type="html"><![CDATA[Re: Add &quot;Shutdown Timer&quot; menu Item to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=3747#p3747"><![CDATA[
how is a bat file easier than:   shellexecute /F:shutdown.exe /P:-s -t 300 /R:hidden<br /><br />i just duplicated my menu from my desktop to my laptop today, and that was about the easiest thing i could have done, i didnt have to change anything, just put shellexecute.exe in my Windows folder<br /><br />what sucked was changing all the locations to bat files for menu items using bats or the vbbs files, or to the timer and the vlc etc.. i had to go through and change the addresss one by one<br /><br />shellexecute is by far superior since every button using it or nircmd or straight cmd, works on any computer with a nircmd or shellexecute in the windwos drive.. didnt have to touch any of those at all.. i wish all program executables could just be thrown onto the Windows Drive to work..<br /><br />i'd like a program that scans for and finds all the program exe files &amp; folders that classic shell commands &amp; links point to<br /><br />or a way to change the mapping altogether for all buttons using bats, vbs, or other installed programs<br /><br />anyway.. it took me a long time to do all the rest<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Sun Jun 16, 2013 5:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kkcool120]]></name></author>
<updated>2013-06-15T21:21:15-07:00</updated>
<published>2013-06-15T21:21:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=3742#p3742</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=3742#p3742"/>
<title type="html"><![CDATA[Re: Add &quot;Shutdown Timer&quot; menu Item to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=3742#p3742"><![CDATA[
make a bat file<br /><br />@SET /P time=Enter Time in Minutes <br />@set /a time=time*60<br />@timeout /T %time% /nobreak<br />shutdown -s -t 0<br /><br />link to it and name it &quot;shutdown in specified minutes&quot; or &quot;shutdown in x minutes&quot;<br /><br />Optionally Make another shortcut that links to the shutdown -a command and name it &quot;cancel shutdown&quot;<br /><br />Remember NOT to press ctrl+c if you want to cancel the command, instead close the window.<br /><br /><br />As an added bonus it's much easier than creating all the custom items.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=881">kkcool120</a> — Sat Jun 15, 2013 9:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-25T17:40:12-07:00</updated>
<published>2013-04-25T17:40:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=2997#p2997</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=2997#p2997"/>
<title type="html"><![CDATA[Re: Add &quot;Shutdown Timer&quot; menu Item to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=2997#p2997"><![CDATA[
with Cancel Shutdown in your List, you can change the normal Shutdown Button to:<br /><br />shellexecute /F:shutdown.exe /P:-s -t 10 /R:hidden<br /><br />to give you a 10 second window to change your mind before shutting down...<br /><br />if you want to cancel shutdown because you forgot something, or because you accidentally hit shutdown, just click on your Cancel shutdown button, and Logoff/Shutdown/Restart will be cancelled<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 25, 2013 5:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-25T06:20:28-07:00</updated>
<published>2013-04-25T06:20:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=2983#p2983</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=2983#p2983"/>
<title type="html"><![CDATA[Re: Add &quot;Shutdown Timer&quot; menu Item to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=2983#p2983"><![CDATA[
Add a New Item, Named &quot;CancelShutdown&quot;<br /><br /><ul><li>Command:<ul><li>shellexecute /F:shutdown.exe /P:-a /R:hidden</li></ul></li><li>Label: <br /><ul><li>Cancel Shutdown</li></ul></li><li>Icon:<ul><li>shell32.dll</li><li># 338</li></ul></li></ul><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 25, 2013 6:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-02-22T03:25:08-07:00</updated>
<published>2013-02-22T03:25:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1287#p1287</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1287#p1287"/>
<title type="html"><![CDATA[Re: How to Add &quot;Shutdown Timer&quot; menu Item to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1287#p1287"><![CDATA[
ya, its a pretty powerful tool... I love it..<br /><br />Just make sure to turn off the &quot;Exit&quot; button in the settings.. so we dont accidentally default back to the crappy Windows 7 one..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Fri Feb 22, 2013 3:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-02-22T01:20:09-07:00</updated>
<published>2013-02-22T01:20:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1282#p1282</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1282#p1282"/>
<title type="html"><![CDATA[Re: How to Add &quot;Shutdown Timer&quot; menu Item to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1282#p1282"><![CDATA[
A custom Shutdown menu always allows for so much more. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Feb 22, 2013 1:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-20T20:49:55-07:00</updated>
<published>2013-02-21T23:10:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1279#p1279</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1279#p1279"/>
<title type="html"><![CDATA[Add &quot;Shutdown Timer&quot; menu Item to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=281&amp;p=1279#p1279"><![CDATA[
<img src="http://i771.photobucket.com/albums/xx354/chinarabbit/Capture4_zpsa31a4cd6.jpg" alt="" /> <br />Here is how to created the above Shutdown Timer Menu for the Classic Shell Start Menu:<br />(I do this mostly because I like to listen to music as I leave the house or fall asleep..)<br /><br />**UPDATED to include GauravK's implementation of Shellexecute.exe, added to create Method 1.. Method 2 is without ShellExecute.exe, and linking to BAT files instead<br /><div align="center">*******************************************************************</div><span style="text-decoration: underline"><strong>***Method 1:</strong><strong>***</strong></span><br /><br /><strong>Step 1, Install Shellexecute.exe</strong> :<br /><ul><li>if you followed the tutorial for <a href="http://classicshell.net/forum/viewtopic.php?f=5&amp;t=61" class="postlink">&quot;Pin to Classic Shell Menu&quot;</a> then you already have done this step, and you can skip down to step 2</li><li>Download the free shellexecute.exe from here: <a href="http://www.optimumx.com/downloads.html#ShellExecute" class="postlink">http://www.optimumx.com/downloads.html#ShellExecute</a></li><li>Extract it &amp; Copy it to your &quot;C:/Windows&quot; folder</li></ul><strong>Step 2, Set Up the New Menu:</strong><br /><ul><li>Right Click the Start button, click &quot;Settings&quot;</li><li>Click &quot;All Settings&quot; at the bottom</li><li>Click the &quot;Customize Start Menu&quot; Tab</li><li>In the Left column, under &quot;Current Menu Items&quot;, scroll down to &quot;ShutdownBoxItem&quot;</li><li>Click on the Item &quot;SEPARATOR&quot;, just above &quot;ShutdownBoxItem&quot;</li><li>In the Right Column, under &quot;Available Commands&quot;, scroll to the bottom &amp; double-click &quot;Custom Command&quot;<ul><li>It should appear between &quot;SEPARATOR&quot; and &quot;ShutdownBoxItem&quot;</li></ul></li><li>Right-Click the new Item, &amp; Select &quot;Edit Item&quot;<ul><li>in the &quot;Command&quot; box, type &quot;shutdown_box&quot;</li><li>in the &quot;Label&quot; box, type &quot;Shutdown Timer&quot;</li><li>in the &quot;Icon&quot; Box, click the &quot;...&quot; to the right<ul><li>Browse to Icon #28, or any icon you have or want</li></ul></li><li>Click on the &quot;Split Button Item&quot; checkbox</li><li>Click OK</li></ul></li><li>Now Click on the new Item you created, it should say &quot;Shutdown&quot;</li><li>in the Right Column, double-click &quot;Custom Command&quot; 5 times<ul><li>all the commands should be in a sub-menu under the first one you created, if they arent, just drag them there</li><li>You should see:<ul><li>CustomItem</li><li>CustomItem2</li><li>CustomItem3</li><li>CustomItem4</li><li>CustomItem5</li></ul></li></ul></li><li>Right-Click &quot;CustomItem&quot;, and select &quot;Rename&quot; and give them a name without spaces, like:<ul><li>5MinuteShutdown </li><li>15MinuteShutdown</li><li>30MinuteShutdown</li><li>45MinuteShutdown</li><li>60MinuteShutdown</li></ul></li></ul>(You can also use these to replace the Shutdown Submenu, so that they are each buttons themselves, just drag them out of the sub-menu and place them on the same level as the Shutdown button)<br /><br /><strong>Step 3, Input Commands:</strong><br /><ul><li>Right Click the first CustomItem (5MinuteShutdown), and select &quot;Edit Item&quot; <br /><ul><li>in the &quot;Command&quot; box, type: shellexecute /F:shutdown.exe /P:-s -t 300 /R:hidden </li><li>in the &quot;Label&quot; box, type &quot;5 Minutes&quot;</li><li>in the &quot;Icon&quot; Box, click the &quot;...&quot; to the right<ul><li>Browse to Icon #28, or any icon you have or want</li></ul></li></ul></li><li>Repeat with all the other CustomItems (15MinuteShutdown, etc), except with the following changes:<ul><li>for 15MinuteShutdown:<ul><li>in the &quot;Command&quot; box, type: shellexecute /F:shutdown.exe /P:-s -t 900 /R:hidden </li><li>in the &quot;Label&quot; box, type &quot;15 Minutes&quot;</li></ul></li><li>for 30MinuteShutdown:<ul><li>in the &quot;Command&quot; box, type: shellexecute /F:shutdown.exe /P:-s -t 1800 /R:hidden </li><li>in the &quot;Label&quot; box, type &quot;30 Minutes&quot;</li></ul></li><li>for 45MinuteShutdown:<ul><li>in the &quot;Command&quot; box, type: shellexecute /F:shutdown.exe /P:-s -t 2700 /R:hidden </li><li>in the &quot;Label&quot; box, type &quot;45 Minutes&quot;</li></ul></li><li>for 60MinuteShutdown:<ul><li>in the &quot;Command&quot; box, type: shellexecute /F:shutdown.exe /P:-s -t 3600 /R:hidden </li><li>in the &quot;Label&quot; box, type &quot;60 Minutes&quot; or &quot;1 Hour&quot;</li></ul></li></ul></li><li>Click OK to close each of them as you finish them</li><li>Click OK again to close the Settings window</li><li>Done!</li></ul><div align="center">*******************************************************************</div><br /><span style="text-decoration: underline"><strong>***Method 2</strong><strong>***</strong></span><br />(Without ShellExecute.exe installed - for linking to bat files - but Method 1 is the Preferred Method since no command window will flash up &amp; disappear)<br /><strong><br />Step 1, Create Bat Files: </strong><br /><ul><li>Create the Bat Files:<ul><li>Go to the folder on your computer you save all of your .Bat files</li><li>Right-click an empty space, and click New&gt;Text Document</li><li>Name it &quot;5 Minute Shutdown.bat&quot;</li><li>Right Click it and select Edit</li><li>Paste the following text: c:\windows\system32\shutdown -s -f -t 300</li><li>Click Save &amp; Close it</li><li>Right-click it, select Copy</li><li>Hit Ctrl+V 4 times</li><li>Rename them all to:<br /><ul><li>&quot;15 Minute Shutdown.bat&quot;</li><li>&quot;30 Minute Shutdown.bat&quot;</li><li>&quot;45 Minute Shutdown.bat&quot;</li><li>&quot;60 Minute Shutdown.bat&quot;</li></ul></li><li>Right-click them one by one, and paste the following:<ul><li>for 15 minutes, paste: c:\windows\system32\shutdown -s -f -t 900</li><li>for 30 minutes, paste c:\windows\system32\shutdown -s -f -t 1800</li><li>for 45 minutes, paste c:\windows\system32\shutdown -s -f -t 2700</li><li>for 60 minutes, paste c:\windows\system32\shutdown -s -f -t 3600<ul><li>(-s=shutdown, -f=force shutdown, -t=time)</li></ul></li></ul></li><li>Save them all &amp; Close them</li></ul></li></ul><strong>Step 2, Set Up the New Menu:<br /></strong><ul><li>Follow the Same Procedures Detailed in &quot;Step 2&quot; above, in Method 1</li></ul><strong>Step 3, Input Commands:</strong><br /><ul><li>Right Click the first CustomItem (5MinuteShutdown), and select &quot;Edit Item&quot; <br /><ul><li>in the &quot;Command&quot; box, click the &quot;...&quot; to the right, and browse to your &quot;5 Minute Shutdown.bat&quot; file</li><li>in the &quot;Label&quot; box, type &quot;5 Minutes&quot;</li><li>in the &quot;Icon&quot; Box, click the &quot;...&quot; to the right<ul><li>Browse to Icon #28, or any icon you have or want</li></ul></li></ul></li><li>Repeat with all the other CustomItems (15MinuteShutdown, etc), except with the following changes:<ul><li>for 15MinuteShutdown:<ul><li>in the &quot;Command&quot; box, browse to your &quot;15 Minute Shutdown.bat&quot; file</li><li>in the &quot;Label&quot; box, type &quot;15 Minutes&quot;</li></ul></li><li>for 30MinuteShutdown:<ul><li>in the &quot;Command&quot; box, browse to your &quot;30 Minute Shutdown.bat&quot; file</li><li>in the &quot;Label&quot; box, type &quot;30 Minutes&quot;</li></ul></li><li>for 45MinuteShutdown:<ul><li>in the &quot;Command&quot; box, browse to your &quot;45 Minute Shutdown.bat&quot; file</li><li>in the &quot;Label&quot; box, type &quot;45 Minutes&quot;</li></ul></li><li>for 60MinuteShutdown:<ul><li>in the &quot;Command&quot; box, browse to your &quot;60 Minute Shutdown.bat&quot; file</li><li>in the &quot;Label&quot; box, type &quot;60 Minutes&quot; or &quot;1 Hour&quot;</li></ul></li></ul></li><li>Click OK to close each of them as you finish them</li><li>Click OK again to close the Settings window</li><li>Done!</li></ul><div align="center">*******************************************************************</div><br />Here is what it should look like, except &quot;CustomItem's&quot; should be your Names without Spaces, i was lazy:<br /><br /><br /><img src="http://i771.photobucket.com/albums/xx354/chinarabbit/Capture11_zps4217d0cd.jpg" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Feb 21, 2013 11:10 pm</p><hr />
]]></content>
</entry>
</feed>