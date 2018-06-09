<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=6081" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-06-16T17:12:10-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=6081</id>
<entry>
<author><name><![CDATA[shelluser]]></name></author>
<updated>2016-06-16T17:12:10-07:00</updated>
<published>2016-06-16T17:12:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27220#p27220</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27220#p27220"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27220#p27220"><![CDATA[
You are welcome <strong>matsuda0707<br /><br /></strong><br />I can confirm that the latest dll posted above works sweet and has fixed the bug!!<br /><br />Well done mate!!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13788">shelluser</a> — Thu Jun 16, 2016 5:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[matsuda0707]]></name></author>
<updated>2016-06-14T08:12:04-07:00</updated>
<published>2016-06-14T08:12:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27164#p27164</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27164#p27164"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27164#p27164"><![CDATA[
Thanks, Mer.shelluser!<br />You just made clear that this problem is not specific to my PCs!<br /><br />I just installed 4.2.7 and replaced ClassicStartMenuDLL.dll taht was released by Ivo.<br />Now the problem looks disappear! It works OK.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12254">matsuda0707</a> — Tue Jun 14, 2016 8:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-06-13T22:36:52-07:00</updated>
<published>2016-06-13T22:36:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27159#p27159</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27159#p27159"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27159#p27159"><![CDATA[
Thanks. That was very helpful. The part that says &quot;ImmersiveShell=0&quot; is a good clue.<br /><br />Let's try this one more time, with the new file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jun 13, 2016 10:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shelluser]]></name></author>
<updated>2016-06-13T13:54:22-07:00</updated>
<published>2016-06-13T13:54:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27148#p27148</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27148#p27148"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27148#p27148"><![CDATA[
Hi mate, did exactly as you said, same bug occured as soon as i shut down the lappy waited 10 secs and restarted, for your info the windows key and shift plus windows worked ok, the mouse click and shift click did not. Heres the complete winmenulog.txt generated:<br /><br />    478921  2452 StartMenu DLL: TASKLIST WSMM<br />    478921  2452 StartMenu DLL: OpenStartScreen ImmersiveShell=0, monitor=0000000000010001<br />    526687  2452 StartMenu DLL: OPEN_WINDOWS<br />    546140  2452 StartMenu DLL: TASKLIST WSMK<br /><br />good luck fixing it mate.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13788">shelluser</a> — Mon Jun 13, 2016 1:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-06-12T20:33:06-07:00</updated>
<published>2016-06-12T20:33:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27136#p27136</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27136#p27136"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27136#p27136"><![CDATA[
Please try the attached file.<br />Right-click on the start button and select Exit. Then go to the Classic Shell folder, and replace the file ClassicStartMenuDLL.dll with the one that is attached. It is compatible with 64-bit version of Classic Shell 4.2.7, but it should probably work with 4.2.6 as well. Run ClassicStartMenu.exe to restart the menu, or simply log off.<br /><br />If you don't see any problems for the next couple of days, then most likely the problem is fixed. Report that here.<br /><br />If the problem happens again, follow these instructions, VERY CAREFULLY:<br />1) Go to the folder %LOCALAPPDATA%\ClassicShell in Explorer. Delete the file WinMenuLog.txt. Don't close the Explorer window<br />2) Open the start menu settings and go to the Controls tab. Make sure that the mouse click, Shift+click, the Win key and Shift+Win are all set to open the Windows start menu. Don't close the settings<br />3) Try to open the Windows start menu 4 times in the <strong>following order</strong> - the mouse click, Shift+click, the Win key and Shift+Win. After each try wait 5 seconds. If the attempt was successful, close the start menu by pressing Escape or clicking on the desktop. DO NOT use the Win key or the start button to close the menu<br />4) Make a copy of the WinMenuLog.txt file immediately<br />5) Click Cancel on the start menu settings. This will revert any changes you made to the controls and will go back to your previous settings<br />6) Post the results here - include the text file, and report which of the 4 attempts to open the start menu was successful<br /><br /><strong><span style="color:#ff0000;">Note that the attached file is only for Classic Shell 4.2.7. If you have a later version of Classic Shell installed, it may not fix your issue and this fix below is most probably already included in versions of Classic Shell after 4.2.7.</span></strong><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jun 12, 2016 8:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shelluser]]></name></author>
<updated>2016-06-12T10:21:22-07:00</updated>
<published>2016-06-12T10:21:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27131#p27131</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27131#p27131"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27131#p27131"><![CDATA[
Yep is the latest build, and not seen it yet in 4.2.6 but am expecting to given what you say about the code being largly identical, the problem is sporadic and when it occurs it seems that somehow classic shell is stopping the windows explorer from loading at startup, it don't happen on restarts and it don't happen when i maunally start the explorer when the clash occurs, yeah it feels like sometimes classic shell and explorer clash and the explorer gets blocked from loading - all aspects of the explorer don't work, left click and right click advanced menu both not available. other than that classic shell works really well and is a credit to your programming skills.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13788">shelluser</a> — Sun Jun 12, 2016 10:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-06-11T19:51:12-07:00</updated>
<published>2016-06-11T19:51:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27126#p27126</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27126#p27126"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27126#p27126"><![CDATA[
But which build do you use - 10240, 10586, 14342 or the latest 14361?<br /><br />The only difference between 4.2.6 and 4.2.7 is a single bug that only affects 32-bit Windows. There is no way they work differently for you.<br />Most likely the problem occurs sporadically, and it just hasn't happened yet with 4.2.6.<br /><br />I suspect the problem is that sometimes the code thinks incorrectly that the menu is already open, and doesn't open it. I am changing how I check if the menu is open, and I'm adding more logging.<br />In the next few days I hope to post a test version for you to try.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jun 11, 2016 7:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shelluser]]></name></author>
<updated>2016-06-11T19:38:57-07:00</updated>
<published>2016-06-11T19:38:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27125#p27125</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27125#p27125"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27125#p27125"><![CDATA[
Windows 10 64bit, laptop single monitor, neither the start button nor the button in classic shell work when the bug kicks in, no matter how i try to open it but when it's working i tend to use a mouse click, version 4.2.6 seems ok so far...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13788">shelluser</a> — Sat Jun 11, 2016 7:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-06-11T16:09:56-07:00</updated>
<published>2016-06-11T16:09:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27124#p27124</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27124#p27124"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27124#p27124"><![CDATA[
Which exact version of Windows do you have? Is it 32-bit or 64-bit?<br />Do you have multiple monitors?<br />Do you use the Windows start button or the one from Classic shell?<br />And how are you opening the start menu - Win key, Shift+Win, mouse click, or Shift+click?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jun 11, 2016 4:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shelluser]]></name></author>
<updated>2016-06-11T15:13:07-07:00</updated>
<published>2016-06-11T15:13:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27123#p27123</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27123#p27123"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=27123#p27123"><![CDATA[
matsuda0707 is right, version 4.2.7 does somehow crash or stop the windows 10 default start menu from working as he has described. im on the latest version of windows 10 x64 and i have had similar issues. it don't happen every time and my fix is to restart the explorer which gets it all working as it should. there's defo a major bug in 4.2.7 beta i've not tried 4.2.6, where can i download it guys as its anoying not to be able to get to the OS menu if you need too. ps uninstalling classic shell fixes the problem with the windows shell - thankfully.<br /><br />hope this info helps track down the bug, well done matsuda0707!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13788">shelluser</a> — Sat Jun 11, 2016 3:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[matsuda0707]]></name></author>
<updated>2016-05-25T16:09:09-07:00</updated>
<published>2016-05-25T16:09:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26819#p26819</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26819#p26819"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26819#p26819"><![CDATA[
The followins are the results for this error;<br /><br />1)When this error occurs, the click of Classic shell start button and the start button without setting (Windows 10 native button) both does not work (no response for left-click). Win-key opens start menu normally.<br />By terminating the classic start menu, the start button (Windows 10 default) works normally.<br />2)Using default setting, the same error occurs.<br />3)By exiting classic shell after error, the native windows 10 start button works.<br /><br />When this error occured, it sometime becomes normal after restarting or power-up (but not always), but becomes to the same error after another restart!<br />On my laptop pc, this error occurs after install (most of times), and by going back to 4.2.5c, the classic shell becomes normal!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12254">matsuda0707</a> — Wed May 25, 2016 4:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-05-25T08:41:46-07:00</updated>
<published>2016-05-25T08:41:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26800#p26800</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26800#p26800"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26800#p26800"><![CDATA[
Sorry, I can't reproduce this problem. Please try a few tests to narrow it down:<br />1) Try with the &quot;Replace start button&quot; setting and without it<br />2) Try using the default controls, where the Win key and the mouse click open the Classic start menu, and Shift+Win and Shift+Click open the Windows start menu<br />3) When the problem starts happening, right-click on the start button, select Exit, and try to open the Windows menu again<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed May 25, 2016 8:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[matsuda0707]]></name></author>
<updated>2016-05-23T21:35:47-07:00</updated>
<published>2016-05-23T21:35:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26753#p26753</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26753#p26753"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26753#p26753"><![CDATA[
Shift+click the start button does also not work when normal click is unavailable, but the right click works!<br />(Now I re installed 4.2.7 on my laptop pc for the collection of data relating to this error, and so please ask me to do any operation and collect data for this error. Now my laptop pc installed 4.2.7 and this error can be recreated easily)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12254">matsuda0707</a> — Mon May 23, 2016 9:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-05-23T18:48:05-07:00</updated>
<published>2016-05-23T18:48:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26750#p26750</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26750#p26750"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26750#p26750"><![CDATA[
So basically you are saying that the Windows 10 menu frequently doesn't show when you click on the start button?<br />Does the Classic menu show up correctly every time when you Shift+click the start button?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon May 23, 2016 6:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[matsuda0707]]></name></author>
<updated>2016-05-23T18:04:33-07:00</updated>
<published>2016-05-23T18:04:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26749#p26749</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26749#p26749"/>
<title type="html"><![CDATA[Re: Big trouble of 4.2.7 !!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6081&amp;p=26749#p26749"><![CDATA[
After 4.2.7 install for my 2 PCs, the same error occured as follows;<br /><br />1) desktop PC (syslog1.txt)  Windows10 64bit<br />2) laptop pc (syslog2.txt) Windows10 64bit (surface 3 pro)<br /><br />On desktop pc, this error occured once just after Classic shell install, but on laptop pc, it occured very frequently (mailnly just after power on startup).<br />The click for start button is no response for it, but the right click operation for setting it works!<br />So I went back to 4.2.5c for laptop pc, it become OK as previous 4.2.5!<br /><br />I attached the system log for these errors;<br /><br />syslog1  ...  for desktop pc ( only once occurence)<br />syslog2  ...  for laptop pc (occured on startup)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12254">matsuda0707</a> — Mon May 23, 2016 6:04 pm</p><hr />
]]></content>
</entry>
</feed>