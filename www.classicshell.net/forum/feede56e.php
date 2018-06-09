<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=1865" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-01-05T10:43:49-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=1865</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-01-05T10:43:49-07:00</updated>
<published>2014-01-05T10:43:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9919#p9919</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9919#p9919"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9919#p9919"><![CDATA[
I would prefer if we discuss this over PMs, since we are talking about an unreleased version.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 05, 2014 10:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2014-01-05T07:44:56-07:00</updated>
<published>2014-01-05T07:44:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9916#p9916</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9916#p9916"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9916#p9916"><![CDATA[
Will check PM out ASAP. Right now I've reinstalled Classic Shell, and even more icons disappeared on startup - Windows Volume icon, Internet Connection Icon, Skype, DAEMON, Realtek Audio Manager, Logitech Software...<br /><br />Rebooted without Classic Shell in startup - all is there... *sigh*. Checking PM now.<br /><br /><strong><span style="text-decoration: underline">EDIT</span></strong>: New Classic Start Menu (4.0.4.0) doesn't launch unless I launch it in CompatibilityFixes 8 (haven't tried other compat modes yet). If this compatibility mode is not set, it just hangs in processes.<br /><br /><strong><span style="text-decoration: underline">EDIT 2</span></strong>: Okaaay, this is bad. Skype was in the processes, but tray icon was missing. I've reached up to 192 (C0) CompatibilityFixes, and it <strong><span style="text-decoration: underline">did not</span></strong> solve the problem. Only completely disabling Classic Shell on startup did.<br />Re-enabled Classic Shell on startup, Skype is missing again...<br /><br /><strong><span style="text-decoration: underline">EDIT 3</span></strong>: New Classic Start Menu files (4.0.4.0) <em><strong>***seem***</strong></em> to solve the problem. At least i did 5 reboots with 4.0.2, and all had missing Skype. As I switched to 4.0.4 (which I have to run in compat mode 8), Skype is back. Looks like compat mode has nothing to do with it though, as it didn't help with version 4.0.2.<br /><br />Rebooting and rebooting - looks like 4.04 solves the issue with missing icons so far, question is if DAEMON was screwed up for the same reason or not. Can't test it now, as I've reinstalled Classic Shell earlier today, and as I mentioned above, it solves the problem with DAEMON (temporarily?).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Sun Jan 05, 2014 7:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-01-04T12:22:47-07:00</updated>
<published>2014-01-04T12:22:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9904#p9904</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9904#p9904"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9904#p9904"><![CDATA[
I have sent you a PM with some tests I'd like you to run in order to determine the cause of the problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jan 04, 2014 12:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2014-01-04T11:19:39-07:00</updated>
<published>2014-01-04T11:19:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9901#p9901</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9901#p9901"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9901#p9901"><![CDATA[
It worked on my comps for a while, but then Steam icon disappeared. I had to delete my icon cache to restore it (icon.db file or whatever it's called). After that, DAEMON and Skype icons <span style="text-decoration: underline">disappeared on startup again</span>. DAEMON doesn't even launch anymore, <span style="text-decoration: underline">Skype launches, but its tray icon is missing</span>.<br /><br />Aaaaaand magically <span style="text-decoration: underline">it all works when Classic Shell is disabled</span> on startup. All icons are present, nothing is missing.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Sat Jan 04, 2014 11:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[autumnlover]]></name></author>
<updated>2014-01-04T15:30:35-07:00</updated>
<published>2013-12-19T13:14:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9631#p9631</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9631#p9631"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9631#p9631"><![CDATA[
Unfortunately no change after doing uninstall, reboot and reinstalling using &quot;ClassicShellSetup.exe /qb START_MENU_FOLDER=0&quot; method. &quot;Nvidia control panel&quot; and &quot;Bitmeter&quot; icons did not appear. Then after uninstalling CS &quot;nvidia control panel&quot; icon did appear instantly, without restarting explorer.exe nor rebooting.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2539">autumnlover</a> — Thu Dec 19, 2013 1:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-12-19T10:26:10-07:00</updated>
<published>2013-12-19T10:26:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9629#p9629</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9629#p9629"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9629#p9629"><![CDATA[
No, I haven't tried <strong>/qn</strong> yet. Ever since I've installed Windows using <strong>/qb</strong> alone, everything works fine on all machines, and I decided to accept that fact and stop playing with The Powers That Be. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />But I will do a test reformat (I'd trust only a full reformat to test this issue) on my second machine using only <strong>/qn</strong> switch to see if it's <strong>/qn</strong> that causes the issue, or <strong>/qn + /qb</strong>, as I used them in my command before.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Thu Dec 19, 2013 10:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-12-19T08:37:43-07:00</updated>
<published>2013-12-19T08:37:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9619#p9619</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9619#p9619"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9619#p9619"><![CDATA[
I am using the built-in Windows Installer. The Classic Shell installer is just a container for the MSI file. When you run it, the MSI file is extracted and then executed.<br />I would expect /qn+/qb to behave like /qn. Have you tried /qn by itself?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Dec 19, 2013 8:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-12-18T22:59:35-07:00</updated>
<published>2013-12-18T22:59:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9615#p9615</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9615#p9615"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9615#p9615"><![CDATA[
Pardon me for double post, but I feel this should make a standalone post:<br /><br /><strong><span style="color:#ff0000;"><span style="text-decoration: underline">Here's my report on the problem:</span></span></strong><br /><br />When I was installing Windows 7 (x86 and x64) across <span style="text-decoration: underline">multiple machines</span>, using <span style="text-decoration: underline">different Classic Shell versions</span> using the <span style="text-decoration: underline">following command</span>, I <span style="text-decoration: underline">always had the bug</span>. For <span style="text-decoration: underline">more than a year</span>, after <span style="text-decoration: underline">many reformats</span>.<br /><br /><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><strong>start /wait %WINDIR%\Setup\Scripts\ClassicShellSetup.exe /qn /qb START_MENU_FOLDER=0</strong></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Then I tried <span style="text-decoration: underline">this command</span> instead:</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><strong>start /wait %WINDIR%\Setup\Scripts\ClassicShellSetup.exe /qb START_MENU_FOLDER=0</strong></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;"><br /><br /></span></span></span>It is essentially the same command, but with missing <strong>/qn</strong> switch.<br />Once again, I tried using it on <span style="text-decoration: underline">multiple machines</span>, did <span style="text-decoration: underline">a couple of reformats</span>, installed all my programs and games, and <span style="text-decoration: underline">there is no bug</span>. Positive.<br /><br /><br />----------------------<br /><br />The bottom line is - Ivo, you are sure in your Classic Shell, but how sure are you in your installer? It appears that either <strong>/qn</strong> switch itself is messing something up, or a combination of <strong>/qn + /qb</strong> switches.<br />In my post above I already stated that using both switches in one command may potentially cause issues. Maybe I was right.<br /><br />What installation-making program are you using?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Wed Dec 18, 2013 10:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-12-18T13:02:04-07:00</updated>
<published>2013-12-18T13:02:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9605#p9605</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9605#p9605"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9605#p9605"><![CDATA[
Yes, I am going to see if it runs fine before I import my settings. But for now, I ran a different test. I've reinstalled Windows with the following CS' installer command:<br /><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">start /wait %WINDIR%\Setup\Scripts\ClassicShellSetup.exe /qb START_MENU_FOLDER=0</span></span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">It is missing the &quot;/qn&quot; switch. I figured using both /qn and /qb may cause installer confusion, since one switch asks it to run in silent mode, another asks it to run in basic mode. AND my glitch disappeared last time I reinstalled CS in non-silent mode.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;"><br /></span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#dce1e5;">So the results of my fresh installation <strong><span style="text-decoration: underline">so far</span></strong> - DAEMON installed, and 18 reboots without any issues... I will not jump to any conclusions, I made that mistake too many times before, but so far it looks promising. Sure as hell more promising than anything up to this point.</span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Wed Dec 18, 2013 1:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-12-18T09:43:35-07:00</updated>
<published>2013-12-18T09:43:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9602#p9602</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9602#p9602"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9602#p9602"><![CDATA[
Ah, so the plot thickens. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />The recommended way to run the installer is as a normal user, not as admin. That's because the installer runs the start menu at the end, and it needs to run as the same user as the explorer process. However if you reboot afterwards it should erase the difference. There should be no difference in the installed files or registry entries themselves. However I am not quite that familiar with installers to be 100% confident in this.<br /><br />See if DAEMON works before you apply your registry settings, and then after. It may be an issue with your particular combination of settings. Save them to XML and attach them here. Also try resetting the ones that are not default (they will be bold in the settings dialog) and see if you can find a particular setting that is the problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Dec 18, 2013 9:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-12-18T08:38:42-07:00</updated>
<published>2013-12-18T08:38:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9600#p9600</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9600#p9600"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9600#p9600"><![CDATA[
Ivo, I found something extremely interesting. DAEMON Tools bug is present only on my fresh Windows installation. Classic Shell silently installs on first Windows run. And then DAEMON Tools glitches. But right now I've reinstalled CS on both my computers, and the bug disappeared. After reinstallation of CS everything is fine. But that is strange...<br /><br />I'm using:<br /><br />start /wait %WINDIR%\Setup\Scripts\ClassicShellSetup.exe /qn /qb START_MENU_FOLDER=0<br /><br />I will continue looking into the issue. Something in this quiet installs is different from the actual install. Or maybe it has something to do with me deleting installation entries and importing my registry settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Wed Dec 18, 2013 8:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-12-17T20:42:05-07:00</updated>
<published>2013-12-17T20:42:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9595#p9595</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9595#p9595"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9595#p9595"><![CDATA[
<div class="quotetitle">autumnlover wrote:</div><div class="quotecontent"><br />Edit: Processes of each of the programs I listed above are running and are present in memory. Only their icons do not show. I did not saw this behavior of tray icons since I disabled Classic Shell, so this must be CS related issue.<br /></div><br />Since the processes are there, see if restarting Explorer will make the icons reappear. Open task manager. Then kill the explorer.exe process, then from the <strong>File -&gt; New task</strong> type explorer and click OK.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Dec 17, 2013 8:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[autumnlover]]></name></author>
<updated>2013-12-17T12:56:23-07:00</updated>
<published>2013-12-17T12:56:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9578#p9578</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9578#p9578"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9578#p9578"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Also, does it only happen on login, or you are seeing the icons disappearing at arbitrary time?<br /></div><br />Only on each login. I did not noticed icons to disappear anytime later. When I log out and log in back it sometimes happen again (at random) or do not happen again. And when I say &quot;random&quot; I mean random number of icons missing. Sometimes only one is not loading, sometimes a few of them are missing.<br /><br />I also suspected that Windows 7 &quot;file search indexing&quot; service has something to do (I was thinking that icons do not appear before indexing session is completed) but disabling searching service did not solve the problem. <br /><br /><div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />BTW, I am using 7+TT myself, and I'm seeing no problems on Windows 7 and Windows 8.<br /></div><br />Yes, this is great little tool, I use it solely for hiding that pesky &quot;show desktop&quot; icon on the low-right corner and to conserve taskbar space. It seems to be only working solution for this I managed to find. I think it would be great to see &quot;hide Win7 show-desktop-icon&quot; feature in Classic Shell one day.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2539">autumnlover</a> — Tue Dec 17, 2013 12:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-12-17T12:43:42-07:00</updated>
<published>2013-12-17T12:43:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9577#p9577</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9577#p9577"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9577#p9577"><![CDATA[
In the case of DAEMON Tools that supraspecies reported, it is not just the icon that has disappeared. It is the process itself that's gone.<br />For the programs you are reporting, can you confirm if only the icon is gone, or is the entire software disabled? There may be different issues at play here.<br />Also, does it only happen on login, or you are seeing the icons disappearing at arbitrary time?<br /><br />BTW, I am using 7+TT myself, and I'm seeing no problems on Windows 7 and Windows 8.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Dec 17, 2013 12:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[autumnlover]]></name></author>
<updated>2013-12-17T13:06:59-07:00</updated>
<published>2013-12-17T12:36:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9576#p9576</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9576#p9576"/>
<title type="html"><![CDATA[Re: CS causes missing DAEMON Tools tray icon on startup]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1865&amp;p=9576#p9576"><![CDATA[
I have to confirm the bug. It causes trouble not only with DAEMON Tools icon, but with other icons, rather randomly on each startup. I do not use D.T. but in my case those were icons for PeerBlock, Speedfan, old version (not open source) of BitMeter, Virtual CloneDrive, ClamWin Antivirus, X-Mouse Button, VIA HD Audio Deck, 7+ Taskbar Tweaker. <br /><br />First I was thinking that the bug is related to the iconcache.db system file (I found such suggestion somewhere) but this was unrelated to iconcache.db. It was caused by Classic Shell. When I disabled Classic Shell all those symptoms ceased. <br /><br />Classic Shell is a great program (thanks!), but this bug is very irritating.<br /><br />Edit: Processes of each of the programs I listed above are running and are present in memory. Only their icons do not show. I did not saw this behavior of tray icons since I disabled Classic Shell, so this must be CS related issue.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2539">autumnlover</a> — Tue Dec 17, 2013 12:36 pm</p><hr />
]]></content>
</entry>
</feed>