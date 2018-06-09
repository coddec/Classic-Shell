<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=5&amp;t=588" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-10-20T18:46:44-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=5&amp;t=588</id>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-10-20T18:46:44-07:00</updated>
<published>2013-10-20T18:46:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=7689#p7689</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=7689#p7689"/>
<title type="html"><![CDATA[Re: Add Countdown Timer Alarms to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=7689#p7689"><![CDATA[
<div class="quotetitle">adlenalui wrote:</div><div class="quotecontent"><br />thanks for sharing such a nice post<br /></div><br /><br />please share some cookies.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Sun Oct 20, 2013 6:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-26T05:36:39-07:00</updated>
<published>2013-04-26T05:36:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=3008#p3008</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=3008#p3008"/>
<title type="html"><![CDATA[Re: Add Countdown Timer Alarms to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=3008#p3008"><![CDATA[
Optimized the Alarm Clock Image for Smaller Icons, utilizing the square space better<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Fri Apr 26, 2013 5:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-25T19:54:46-07:00</updated>
<published>2013-04-25T19:54:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=3002#p3002</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=3002#p3002"/>
<title type="html"><![CDATA[Re: Add Countdown Timer Alarms to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=3002#p3002"><![CDATA[
Wow! Chris works fast.. he told me at 2 am last night he would have a look at it in a couple days, and he had finished version 1.9 by 10am this morning!<br /><br />Chris changed it from Version 1.8 which was looking for the Sounds folder relative to the current working directory when it went to play the sound, to version 1.9 which now looks for the Sound folder relative to the *.exe, when populating the menu and going to play a sound.. and also fixed a bug where long path names &amp; special characters required 3 sets of quotes<br /><br />super cool guy..<br /><br />so..<br /><br /><div align="center"><strong>Method 1 &#40;The Preferred Method&#41;:</strong></div>now, instead of using Nircmd, you can use Orzeszek Timer, which is way better, since you can see the timers, &amp; cancel them by closing the window, and it doesnt launch any media players or interfere with your music listening..<br /><br />the Command Line for Orzeszek Timer is super flexible and easy to use.. you basically can guess the syntax for whatever time you want and it'll work<br /><br />Here is How to Set it Up:<br /><ul><li>Download <strong><a href="http://www.orzeszek.org/dev/timer/" class="postlink">Orzeszek Timer</a></strong></li><li>Extract the contents to a New Folder at a Permanent Location on your computer</li><li>Place your custom WAV files in the &quot;Sounds&quot; folder, or use the default ones</li><li>Double-Click Orzeszek Timer.exe, right-click the interface, &amp; select the Custom Sound you wanted to add, or the existing sounds</li><li>Type in &quot;3 seconds&quot; &amp; hit enter to be sure it sounds the way you want it to</li><li>Select other options like &quot;loop playback&quot; (for heavy sleepers) or &quot;loop timer&quot; (great for office break timers), Close When Done, etc.. </li><li>Close the Program<ul><li>You've now saved the settings for all your future timers..</li></ul></li><li>Edit your New Menu Item Button<ul><li>Command:<ul><li>&quot;I:\Tenzen's Computing\Utilities\Countdown Timers\Orzeszek Timer 1.9\Orzeszek Timer.exe&quot; 5 minutes</li><li>Change the path above to the path of your Orzeszek Timer.exe (FileMenu Tools can easily copy paths with a right-click)</li><li>Use the Following Formats:<ul><li>1 minute</li><li>1 hour</li><li>1 hour 15 minutes</li><li>2 hours 30 minutes</li><li>8 hours</li></ul></li><li>You can also use a variety of other syntax, for example:</li></ul></li></ul></li></ul><blockquote class="editor"><blockquote class="editor"><blockquote class="editor"><blockquote class="editor"><blockquote class="editor"><ul><li><strong>5</strong> – 5 minutes</li><li><strong>2 30</strong> <strong>00</strong> - 2 hours 30 minutes</li><li><strong>2.5</strong> – 2 minutes 30 seconds</li><li><strong>2 30</strong> – 2 minutes 30 seconds</li><li><strong>1d 5h 3m 25s</strong> – 1 day 5 hours 3 minutes 25 seconds</li><li><strong>1.05:03:25</strong> – 1 day 5 hours 3 minutes 25 seconds</li><li><strong>1 5 3 25</strong> – 1 day 5 hours 3 minutes 25 seconds</li><li><strong>01/01/2011</strong> – until midnight on 1 January 2011</li><li><strong>01/01/2011 5:00 PM</strong> – until 5:00 pm on 1 January 2011</li></ul></blockquote></blockquote></blockquote></blockquote></blockquote><br />Click on the timer and watch it go, with a cool, simple Graphically Animated Interface<br /><br />Be sure to send out your thanks to <a href="http://www.orzeszek.org/dev/about/" class="postlink">Chris Dziemborowicz</a> for this awesome program<br /><br />and we're all looking forward to Version 2, Chris.. thanks!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 25, 2013 7:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-25T20:17:04-07:00</updated>
<published>2013-04-25T18:46:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=2999#p2999</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=2999#p2999"/>
<title type="html"><![CDATA[Re: Add Countdown Timer Alarms to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=2999#p2999"><![CDATA[
<strong>Method 1 (Preferred Method):</strong><br /><br />Chris Dziemborowicz's Orzeszek Timer.exe supports Command Line, but I couldnt get the Alarm to sound..<br /><br />Chris said he would modify it in the next few days to read Sounds from the .exe files directory, instead of the sounds folder...<br /><br />if that works, I'll post that one up here, since its an awesome timer.. maybe some of you guys will have better luck<br /><br />He said he created it on a Windows 7 64-bit, and now he uses Windows 8 64, and says he can use it..<br /><br />when I launch it from the command line, I get the timer, but when it counts down, no sound plays, and no sound is shown in the options..<br /><br />it works fine when launched just from the .exe file though..<br /><br />it only supports WAV files.. the 1st method above can use any audio file..<br /><br />Chris also said that there'll be a Whole New Version 2 of his Orzeszek Timer that'll be out in a couple months.. he said its only about one full days work, but he's got alot of other things going on right now.. he said he's planning on adding command line location parameters for the audio file, and other command-line buffs.. and i think support for more audio file types<br /><br />so we should all definitely be looking forward to that<br /><br />the website is here <a href="http://www.orzeszek.org/dev/timer/" class="postlink">http://www.orzeszek.org/dev/timer/</a><br /><br />the parameters are simple and easy, the interface is awesome.. if you get it to work from command line on your system, let me know.. i'd like to compare notes..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 25, 2013 6:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-26T08:12:07-07:00</updated>
<published>2013-04-25T18:32:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=2998#p2998</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=2998#p2998"/>
<title type="html"><![CDATA[Add Countdown Timer Alarms to your Start Menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=588&amp;p=2998#p2998"><![CDATA[
<div align="center"><strong>Method 2 - Nircmd:<br />&#40;See Below for Method 1 - The Preferred Method&#41;<br /></strong></div><br /><strong>Step 1:</strong><br /><ul><li>Download <a href="http://www.nirsoft.net/utils/nircmd.html" class="postlink">NIRCMD.EXE</a> and place it in C:\Windows Directory</li></ul><strong>Step 2:</strong><br /><ul><li>Right Click the Start button, click &quot;Settings&quot;</li><li>Click &quot;All Settings&quot; at the bottom</li><li>Click the &quot;Customize Start Menu&quot; Tab</li><li>Create a New Item<ul><li>Rename it: OvenTimers</li><li>Double-Click to Edit:<ul><li>Label: Oven Timers</li><li>Icon (See Below)</li></ul></li></ul></li><li>Ctrl+Drag that Item down until a duplicate fits as a Sub-menu Item<ul><li>Rename it: Countdown_1 or Timer1, etc</li></ul></li><li>Double-Click to Edit that Submenu Item<br /><ul><li>Command:<ul><li>nircmd.exe cmdwait 60000 execmd &quot;L:\Tenzen's Data\Computing\Sounds\CoolAlarm2.wav&quot;</li><li>Change the directory to whatever audio file you want to play...</li></ul></li><li>Label:<ul><li>1 Minute Timer</li></ul></li><li>Icon:<ul><li>See Below, or one of your choice</li></ul></li><li>Click OK</li></ul></li><li>Ctrl+Drag that Item down to create a copy in the same sub-level as the one above it</li><li>Continue Dragging it down until you have 29 Timers (or as many as you like)</li><li>Rename them all as shown in the image below (hit F2 to rename an Item)</li><li>Double-Click the second one (or highlight &amp; hit enter), &amp; drag-resize the window wide enough to see the entire command<br /><ul><li>Change the number of milliseconds for each one, as follows:<ul><li>1 minute = 60000</li><li>2 minutes = 120000</li><li>3 minutes = 180000</li><li>5 minutes = 300000</li><li>8 minutes = 480000 </li><li>10 minutes = 600000</li><li>12 minutes = 720000</li><li>15 minutes = 900000</li><li>20 minutes = 1200000</li><li>25 minutes = 1500000</li><li>30 minutes = 1800000</li><li>35 minutes = 2100000</li><li>40 minutes = 2400000</li><li>45 minutes = 2700000</li><li>50 minutes = 3000000</li><li>55 minutes = 3300000</li><li>60 minutes = 3600000</li><li>1hr15min = 4500000</li><li>1hr30min = 5400000</li><li>1hr45 = 6300000</li><li>2hr = 7200000</li><li>2hr30min = 9000000</li><li>3hr = 10800000</li><li>4hr = 14400000</li><li>5hr = 18000000</li><li>6hr = 21600000</li><li>7 hr = 25200000</li><li>8hr = 28800000</li></ul></li></ul></li><li>Double-Click a Timer to Activate it</li><li>To Cancel all Timers:<ul><li>Create a New Item Above all the other Timers, but in the same Sub-menu Level</li><li>Add a Separator below the new button, between it and the other timers below</li><li>Rename the Item &quot;CancelAllTimers&quot;</li><li>Double-click to Edit:<ul><li>Command: <ul><li>nircmd.exe execmd taskkill /IM nircmd.exe /F</li></ul></li></ul><ul><li>Label:<br /><ul><li>Cancel All Timers</li></ul></li><li> Icon: <br /><ul><li>shell32.dll</li><li># 338</li></ul></li></ul></li></ul></li></ul><strong>(Note that nircmd's execmd command functions like shellexecute, in that it hides the process - Cool Stuff)</strong><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 25, 2013 6:32 pm</p><hr />
]]></content>
</entry>
</feed>