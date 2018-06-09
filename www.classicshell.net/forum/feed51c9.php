<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=5011" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-09-29T23:28:42-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=5011</id>
<entry>
<author><name><![CDATA[mochi]]></name></author>
<updated>2015-09-29T23:28:42-07:00</updated>
<published>2015-09-29T23:28:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22624#p22624</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22624#p22624"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22624#p22624"><![CDATA[
I have the same problem, the menu takes a very long time to show in Windows 10, almost 30 seconds. The fix that I found was to disable &quot;Pre-cache icons&quot; and &quot;Delay loading of icons&quot;, now the menu shows much faster but the searches take longer. To be true Classic Shell is a must have for Windows 8.1 and below and Server 2012, but if Microsoft fixes a few bugs with their start menu (mainly the hardcoded 512 start menu items), I'll probably use the standard one, it does what I need. Nothing to take off from Classic Shell anyway, it has always been and still is an outstanding program. <br /><br />Just as a suggestion (maybe it's a stupid thing), why don't just scrape the icons and content in a separate thread with low priority (possibly as an additional option).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11637">mochi</a> — Tue Sep 29, 2015 11:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-23T12:15:46-07:00</updated>
<published>2015-09-23T12:15:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22432#p22432</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22432#p22432"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22432#p22432"><![CDATA[
The few dumps I examined are few seconds apart and look for different icons inside the avs4you folder. A single folder should not take much time at all.<br /><br />Icons are normally cached in the file %LOCALAPPDATA%\ClassicShell\DataCache.db, so even if they are slow they won't be loaded more than once. Check if that file exists and has a recent timestamp.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Sep 23, 2015 12:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TraxJax]]></name></author>
<updated>2015-09-22T22:13:03-07:00</updated>
<published>2015-09-22T22:13:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22426#p22426</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22426#p22426"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22426#p22426"><![CDATA[
Have completely uninstalled avs4you. Makes no difference.<br />As mentioned AV software is switched off as is Firewall.<br />No bad sectors. Has been checked.<br /><br />Any more ideas? Seems it involves W10 and/or CS in W10.<br /><br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11577">TraxJax</a> — Tue Sep 22, 2015 10:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-22T20:39:58-07:00</updated>
<published>2015-09-22T20:39:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22425#p22425</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22425#p22425"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22425#p22425"><![CDATA[
It appears stuck trying to load the icon for this program: c:\program files (x86)\avs4you\avsvideoconverter\avsvideoconverter.exe<br />I don't know why. Open that folder in Explorer right after you reboot and see if the EXE icon shows up right away or after a while. Maybe you have a bad sector or something on your disk and it takes many retries to read it.<br />Another possibility is AV software blocking or delaying access to that program for some reason, causing Explorer to retry.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Sep 22, 2015 8:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TraxJax]]></name></author>
<updated>2015-09-22T20:32:52-07:00</updated>
<published>2015-09-22T20:32:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22424#p22424</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22424#p22424"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22424#p22424"><![CDATA[
Ok have uploaded file to mediafire<br />DMP_70.rar<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11577">TraxJax</a> — Tue Sep 22, 2015 8:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-22T19:57:55-07:00</updated>
<published>2015-09-22T19:57:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22422#p22422</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22422#p22422"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22422#p22422"><![CDATA[
You can drop the file here: <!-- m --><a class="postlink" href="http://www.mediafire.com/filedrop/filedrop_hosted.php?drop=4980d8cea2079e5b90ae68b5d5b14a60ceb6f95ea06cd44ea5f267ca5151aa1d">http://www.mediafire.com/filedrop/filed ... ca5151aa1d</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Sep 22, 2015 7:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TraxJax]]></name></author>
<updated>2015-09-22T19:23:47-07:00</updated>
<published>2015-09-22T19:23:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22420#p22420</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22420#p22420"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22420#p22420"><![CDATA[
Sorry Dump file is too big. Max allowed is 5Mb. This rar is 11.4 Mb.(12 dumps)<br />Here is 5 dumps if that helps.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11577">TraxJax</a> — Tue Sep 22, 2015 7:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TraxJax]]></name></author>
<updated>2015-09-22T19:12:49-07:00</updated>
<published>2015-09-22T19:12:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22419#p22419</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22419#p22419"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22419#p22419"><![CDATA[
Ivo<br /><br /><br /><br />Attached is the dump file (rar). I ran about 12 dumps but this doesn’t covers the time taken for Classic Shell to load on the *second* attempt – see below.<br /><br />“procdump -n 12 -s 1 explorer.exe”<br /><br />Windows 10 was fully loaded when dump was taken. CS took about 40 seconds to load but it normally is 60/70 secs.<br /><br />As stated earlier the 60/70 load is the same for ‘auto load’.<br /><br /><br /><br />For the dump I manually started CS and as previously written it loads fine (or appears to) on this *first* use and programs can be loaded/run from the menu. However on the *second* attempt (dump taken then) CS took about 40/50 secs to be usable. <br /><br /><br /><br />Also please note no other program *pined to the taskbar* can be started during this CS load period. Also, and I don’t know if this means anything, the CS start icon ‘slips’ behind the taskbar during this load period if you click on it. <br /><br /><br /><br />MenuPeak<br /><br />The first thing I did was to completely uninstall/install Classic Shell 4.2.4. Also shutdown Firewall/Malware progs.<br /><br />Doing that changed nothing.<br /><br /><br /><br />Remember Guys this only became a problem when I upgraded from W8.1 pro to W10 pro. Everything was/is fine in 8.1. No other programs have been installed in W10 and as far as I can tell at this stage everything else is ok.<br /><br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11577">TraxJax</a> — Tue Sep 22, 2015 7:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MenuPeak]]></name></author>
<updated>2015-09-22T15:10:43-07:00</updated>
<published>2015-09-22T15:10:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22417#p22417</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22417#p22417"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22417#p22417"><![CDATA[
<div class="quotetitle">TraxJax wrote:</div><div class="quotecontent"><br />&quot;<span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Wait 5 minutes and start ClassicStartMenu.exe and see if the menu takes long time or not&quot;</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">Now here is something strange. After waiting 5 minutes and starting Classic Shell it starts immediately and I can run/start progs from within the start menu BUT then on an immediate second attempt to open &#39;Start&#39; once again it takes approximately 60/70 secs to load. After that it&#39;s fine.</span></span><br /></div><br />Are you sure there's no security software interfering with CS? If you have antivirus/firewall software installed, I'd try disabling them completely first, add exceptions for Classic Start Menu and even try completely uninstalling it, for testing purposes.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3771">MenuPeak</a> — Tue Sep 22, 2015 3:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TraxJax]]></name></author>
<updated>2015-09-22T14:57:41-07:00</updated>
<published>2015-09-22T14:57:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22416#p22416</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22416#p22416"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22416#p22416"><![CDATA[
&quot;<span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Wait 5 minutes and start ClassicStartMenu.exe and see if the menu takes long time or not&quot;</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">Now here is something strange. After waiting 5 minutes and starting Classic Shell it starts immediately and I can run/start progs from within the start menu BUT then on an immediate second attempt to open &#39;Start&#39; once again it takes approximately 60/70 secs to load. After that it&#39;s fine.</span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">Haven&#39;t done the dumps yet as above may alter your suggestions.</span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">Thanks</span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><br /></span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11577">TraxJax</a> — Tue Sep 22, 2015 2:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-22T08:01:37-07:00</updated>
<published>2015-09-22T08:01:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22402#p22402</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22402#p22402"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22402#p22402"><![CDATA[
The startup log looks OK.<br /><br />Let's try to determine if this is a Windows startup problem or a start menu startup problem. Turn off the setting &quot;Start automatically for this user&quot; from the General Behavior tab in the settings. Then restart - the menu shouldn't load. Wait 5 minutes and start ClassicStartMenu.exe and see if the menu takes long time or not.<br /><br />If it loads quickly then the problem is that it competes with other programs during startup.<br /><br />If it loads slowly, then restart again, and use the technique here: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l --> to capture series of dumps while the menu is starting up.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Sep 22, 2015 8:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TraxJax]]></name></author>
<updated>2015-09-22T05:07:19-07:00</updated>
<published>2015-09-22T05:07:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22400#p22400</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22400#p22400"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22400#p22400"><![CDATA[
Guarav<br />Here is the .txt file. My bad I created the DWORD in <span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">HKCU\Software\IvoSoft\ClassicStartMenu instead of </span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">HKCU\Software\IvoSoft\ClassicStartMenu\Settings</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Just timed CS start time more accurately</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"> and it was 70 secs. BTW CS is fine, as would be expected, with hibernate.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">MenuPeak</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">I will check out </span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"> </span></span></span><a href="http://www.r2.com.au/page/products/show/startup-delayer/" class="postlink">Startup Delayer</a><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"> if we can&#39;t get this sorted.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Thanks</span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11577">TraxJax</a> — Tue Sep 22, 2015 5:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MenuPeak]]></name></author>
<updated>2015-09-22T01:53:30-07:00</updated>
<published>2015-09-22T01:53:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22397#p22397</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22397#p22397"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22397#p22397"><![CDATA[
From my personal experience, the Windows 10 boot-up is quicker than 8.x to show the desktop screen, but it takes longer than 8.x before the user can actually start opening programs and using the PC. It kind of &quot;cheats&quot; a feeling of being faster than 8.x, but it actually isn't it - pretty much the same.<br /><br />As a general suggestion, I'd recommend the use of the excellent <a href="http://www.r2.com.au/page/products/show/startup-delayer/" class="postlink">Startup Delayer</a>, especially if you have several startup entries. You can greatly customize, speed-up and improve your startup-sequence, for example make Classic Shell start first while delaying the less important stuff.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3771">MenuPeak</a> — Tue Sep 22, 2015 1:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-09-22T01:28:54-07:00</updated>
<published>2015-09-22T01:28:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22396#p22396</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22396#p22396"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22396#p22396"><![CDATA[
The log should be in %LOCALAPPDATA%\ClassicShell after setting it to 1 and restarting.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Sep 22, 2015 1:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TraxJax]]></name></author>
<updated>2015-09-22T00:31:47-07:00</updated>
<published>2015-09-22T00:31:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22395#p22395</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22395#p22395"/>
<title type="html"><![CDATA[Re: Windows 10, small delay at first startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5011&amp;p=22395#p22395"><![CDATA[
Thanks for the reply Gaurav.<br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;"> &quot;Make sure that the folder %localappdata%\ClassicShell is writable and has no permissions issues&quot; </span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">Full permission</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">&quot;</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">delete the %localappdata%\ClassicShell folder itself, and log out and log in again.&quot;</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Did this and then CS loads fast/immediately BUT after restart/shutdown CS again takes about 1 minute to load.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">&quot;</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">create a shortcut to C:\Program Files\Classic Shell\ClassicStartMenu.exe and paste it in your Startup folder</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"> &quot;</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Did this and it makes no difference.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">&quot;</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Create a new DWORD value named LogStartup&quot; - &quot;</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Restart and log in&quot;</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Did this but after restart/shutdown there is no &#39;</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">StartupLog.txt&#39; in </span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">%APPDATA%\ClassicShell</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"> </span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Tried DWORD value of 1 and 0. Searched all of C: but no Startuplog.txt file.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">I only have one start program running at any time and as previously stated CS was/is fine in W8.1 &#40;I still run 8.1 as well&#41;</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Running Windows 10 Pro</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Thanks</span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11577">TraxJax</a> — Tue Sep 22, 2015 12:31 am</p><hr />
]]></content>
</entry>
</feed>