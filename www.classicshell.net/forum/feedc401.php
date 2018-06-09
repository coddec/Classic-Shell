<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=86" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-02-11T16:25:59-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=86</id>
<entry>
<author><name><![CDATA[bichim]]></name></author>
<updated>2013-02-11T16:25:59-07:00</updated>
<published>2013-02-11T16:25:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1071#p1071</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1071#p1071"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1071#p1071"><![CDATA[
It is very strange indeed (probably the most strange thing I have seen on Windows). Without locking the registry will always go from 2 to 3 after some minutes running. No other problem noticed. The only problem that the next start I have a 30 sec delay and I have to look at Metro all this time (not to mention that I hate it:)). <br /><br />However, after I have locked the registry it works just perfect.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=296">bichim</a> — Mon Feb 11, 2013 4:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-10T10:56:03-07:00</updated>
<published>2013-02-10T10:56:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1011#p1011</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1011#p1011"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1011#p1011"><![CDATA[
One possibility is that the service is crashing, and the system disables it by setting to Manual. However that doesn't explain why it starts after 30 seconds. It shouldn't start at all.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Feb 10, 2013 10:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-02-10T10:43:11-07:00</updated>
<published>2013-02-10T10:43:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1010#p1010</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1010#p1010"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1010#p1010"><![CDATA[
2=Automatic, 3=Manual, 4=Disabled, so it should be 2 always if Services.msc says Automatic. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> I don't understand how it's changing to 3 on some PCs? Maybe some bug?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Feb 10, 2013 10:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bichim]]></name></author>
<updated>2013-02-10T09:26:50-07:00</updated>
<published>2013-02-10T09:26:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1009#p1009</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1009#p1009"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=1009#p1009"><![CDATA[
After spending 2 day with a similar problem I have found the solution.HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\services\ClassicShellService---&gt; Start: the value must be 2 in order that the Classic Shell will start very fast.<br />However just editing the value will only make thinkg better the next start. The system (or some other program) overwrites the value to 3 and at a second start again the Classic Shell will load slow (30 sec on my system). In fact the instaler of Classic shell will set the value to 2, but the first start after the instalation the system will overwrite the value to 3.<br /> <br />The solution is:<br />1) Manually change the value  HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\services\ClassicShellService---&gt; Start=2.<br />2) Prevent any changes to the registry key (lock it). Below is the tutorial I have used to do this:<br /> <br /><a href="http://www.bench3.org/tech/prevent-changes-to-a-registry-key-avoid-softwares-to-modify-your-windows-registry/" class="postlink">http://www.bench3.org/tech/prevent-changes-to-a-registry-key-avoid-softwares-to-modify-your-windows-registry/</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=296">bichim</a> — Sun Feb 10, 2013 9:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-09T13:01:23-07:00</updated>
<published>2013-02-09T13:01:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=993#p993</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=993#p993"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=993#p993"><![CDATA[
You can upload them somewhere and pm me with the link.<br />Also, I suspect all differences are in the HKLM hive. If you remove the rest, I suspect the size will shrink considerably.<br />You can also trim the files to only the areas around the diffs.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 09, 2013 1:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[frahax]]></name></author>
<updated>2013-02-09T12:30:55-07:00</updated>
<published>2013-02-09T12:30:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=992#p992</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=992#p992"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=992#p992"><![CDATA[
The 2 reg dumps are 37 MByte zipped. Is there a secure way to send the zip-file to you?<br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=218">frahax</a> — Sat Feb 09, 2013 12:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-09T12:17:57-07:00</updated>
<published>2013-02-09T12:17:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=991#p991</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=991#p991"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=991#p991"><![CDATA[
This diff is not very useful. I can't see the full registry paths. Please attach the complete registry dumps.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 09, 2013 12:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[frahax]]></name></author>
<updated>2013-02-09T11:50:02-07:00</updated>
<published>2013-02-09T11:50:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=990#p990</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=990#p990"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=990#p990"><![CDATA[
Hi,<br /><br />I exported a registry prior to and another after an upgrade to 3.6.5<br /><br />The comparison of the 2 regs shows surprisingly 730 differences.<br /><br />I copied some differences which relate Classic Shell into a file.<br /><br />You can download the file for the next 3 days:<br /><br /><!-- m --><a class="postlink" href="http://www.daten-transport.de/?id=xFmNsJnerbyA">http://www.daten-transport.de/?id=xFmNsJnerbyA</a><!-- m --><br /><br />Hope this brings us closer to the problem<br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=218">frahax</a> — Sat Feb 09, 2013 11:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-02T13:15:18-07:00</updated>
<published>2013-02-02T13:15:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=794#p794</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=794#p794"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=794#p794"><![CDATA[
Well, if you have a way of comparing the registry between the two images maybe you can find the difference in the service registration.<br />Also, you may try upgrading from 3.6.2 to 3.6.5 by just replacing the files and not reinstalling. This will keep the service registration from the image that works.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 02, 2013 1:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[frahax]]></name></author>
<updated>2013-02-02T12:36:07-07:00</updated>
<published>2013-02-02T12:36:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=790#p790</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=790#p790"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=790#p790"><![CDATA[
Hi, moving to higher groups has no effect, tried that a couple of weeks ago.<br /><br />I installed 3.6.2 right after the birth of the computer, Dec 1, 2012. Since I collected all the Acronis image-files, I found out, that I moved to 3.6.4 at image-file number 16, dec 28, 2012. At this time, the machine was 90% finished and CS still worked fine. That destroys the theory, that the late installation of a new version results in a late start.<br /><br />What a nice problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=218">frahax</a> — Sat Feb 02, 2013 12:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-02T10:48:23-07:00</updated>
<published>2013-02-02T10:48:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=787#p787</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=787#p787"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=787#p787"><![CDATA[
OK, now that we know the scheduler doesn't make things faster we can try other things, like changing the service group.<br /><br />Go to HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\services\ClassicShellService and change the Group property from UIGroup to AudioGroup. Do a full restart and see if it makes any difference.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 02, 2013 10:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[frahax]]></name></author>
<updated>2013-02-02T10:27:41-07:00</updated>
<published>2013-02-02T10:27:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=785#p785</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=785#p785"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=785#p785"><![CDATA[
The scheduler does not make any relevant difference, may be even a bit slower. I switched the &quot;regular&quot; CS-service to manual and then  tried with various start options in the scheduler.<br /><br />I can not believe, that I am the only one with this issue. It is the last and only problem on a quite complex W8pro machine.<br /><br />Thanks to Acronis, I can always go back to the &quot;good&quot; mode.<br /><br />One day I will solve the problem. Sorry for being a perfectionist. However, many thanks to Ivo for developing this software. Without this, i would have had to downgrade the new PC to W7.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=218">frahax</a> — Sat Feb 02, 2013 10:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-02T08:47:11-07:00</updated>
<published>2013-02-02T08:47:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=783#p783</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=783#p783"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=783#p783"><![CDATA[
When the service starts it launches one copy of the start menu for every logged in user, and then starts listening for more login events. As soon as somebody logs in, a new copy of the start menu will be launched.<br /><br />The start menu (ClassicStartMenu.exe) tries to simulate pressing the Win+D key every half second. It stops when the desktop shows up or after 5 seconds.<br /><br />So basically if the desktop shows up but late, it means that the service was started late. If the desktop doesn't show up but you still get a start button, it means the Win+D didn't work (maybe something was blocking it).<br /><br />Basically the OS doesn't know that the service needs to be started during login. It starts whenever is its turn (which may be in the order of installation). One way to associate the start menu with the login is by using the scheduler. That's why I urge people having the first kind of problem (menu starts with some delay), to try the scheduler and report the results.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 02, 2013 8:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[frahax]]></name></author>
<updated>2013-02-02T08:28:49-07:00</updated>
<published>2013-02-02T08:28:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=782#p782</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=782#p782"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=782#p782"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />I found this if it might help: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-reduce-the-startup-delay-for-desktop-apps-in-windows-8/">http://winaero.com/blog/how-to-reduce-t ... windows-8/</a><!-- m --><br /></div><br /><br />Many thanks to GauravK, but still no change: Any upgrade or re-install of CS pushes the start of CS from first in the row to last. <br />Before the upgrade I don't even see the metro screen, after the upgrade it is displayed for more than 20sec.<br />(It does not matter if I uninstall 3.6.4 an re-install it, or if I upgrade to 3.6.5, thus it has nothing to do with the version)<br /><br />Anyone who can explain the start mechanism of Classic Shell under Windows8pro to me?<br /><br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=218">frahax</a> — Sat Feb 02, 2013 8:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-28T20:16:11-07:00</updated>
<published>2013-01-28T20:16:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=693#p693</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=693#p693"/>
<title type="html"><![CDATA[Re: Cannot skip Metro screen]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=86&amp;p=693#p693"><![CDATA[
I found this if it might help: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-reduce-the-startup-delay-for-desktop-apps-in-windows-8/">http://winaero.com/blog/how-to-reduce-t ... windows-8/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 28, 2013 8:16 pm</p><hr />
]]></content>
</entry>
</feed>