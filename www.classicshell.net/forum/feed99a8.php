<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=5082" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-09-06T19:30:44-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=5082</id>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-09-06T19:30:44-07:00</updated>
<published>2015-09-06T19:30:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21886#p21886</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21886#p21886"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21886#p21886"><![CDATA[
FINALLY!  FOUND IT!  ProcMon finally showed it clearly.<br /><br />It wasn't Pictures, it was <em>Favorites</em>.<br /><br />A long time ago I experimented by making the Favorites folder under my username on my VM into a reparse point using MKLINK /D, so that it would point to my host system's Favorites folder.  I'd forgotten to undo that experiment, because frankly it worked perfectly (same account name/password on both systems).<br /><br />For whatever reason occasionally the networking connection between the guest VM and host system takes noticeable time to re-establish.<br /><br />I'm sorry to have wasted your time with this!<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Sun Sep 06, 2015 7:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-09-06T18:24:10-07:00</updated>
<published>2015-09-06T18:24:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21874#p21874</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21874#p21874"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21874#p21874"><![CDATA[
Saw one delay just now.  I did not set up any special monitoring and just clicked the Start button on an otherwise quiet system to shut it down.<br /><br />This time I caught Classic Shell failing to access 184.167.173.1 port 80 (Explorer tried to access <!-- w --><a class="postlink" href="http://www.ClassicShell.net">www.ClassicShell.net</a><!-- w -->, presumably to check for updates, was blocked by my Firewall; I need to set up a specific exception for that).  <br /><br />This was the first time I saw a delay today, and the delay seemed shorter than usual.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Sun Sep 06, 2015 6:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-06T15:35:26-07:00</updated>
<published>2015-09-06T15:35:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21858#p21858</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21858#p21858"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21858#p21858"><![CDATA[
I don't think the contents of the Pictures folder matter. The menu is just trying to find the path for the folder and is reading your profile from disk where all such paths are stored.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Sep 06, 2015 3:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-09-06T13:02:57-07:00</updated>
<published>2015-09-06T13:02:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21846#p21846</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21846#p21846"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21846#p21846"><![CDATA[
Hm, I have been trying all day to capture the problem in ProcMon and it's not been cooperating.<br /><br />After your second confirmation that the problem might somehow be related to my Pictures folder, I went looking there (I don't normally use that, AT ALL).<br /><br />There were 3 subfolders, and within one of them was a small file:  <strong>C:\Users\NoelC\Pictures\Screenshots\Screenshot (1).png</strong><br /><br />Since I don't use that folder and can't imagine how that file got there, I opened it up with Irfan View.  It was all black.  It opened immediately, but then I figured since I didn't create it (on purpose) and had no use for it maybe I ought to just get rid of it, so I moved it to my TEMP folder.  It's just a 160 x 23 pixel black image, in a file that's 176 bytes long.<br /><br />Since then I haven't seen one slow startup of the Classic Shell start menu, but I am only cautiously optimistic since I also was running ProcMon in every case and that of course changes the timing of everything.<br /><br />I'm going to try some more today WITHOUT ProcMon and see whether the problem comes back.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Sun Sep 06, 2015 1:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-05T21:23:24-07:00</updated>
<published>2015-09-05T21:23:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21833#p21833</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21833#p21833"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21833#p21833"><![CDATA[
Yes, same thing - it is trying to resolve the Pictures folder. Here's the callstack:<br />ntdll.dll!NtCreateFile<br />KERNELBASE.dll!CreateFileInternal<br />KERNELBASE.dll!CreateFileW<br />windows.storage.dll!CCachedINIFile::Load<br />windows.storage.dll!CPrivateProfileCache::_AddNewINIFromFile<br />windows.storage.dll!CPrivateProfile::Initialize<br /><br />Appears it tries to load some INI file from disk and that is taking a long time. I don't have the exact name of that file because this is a minidump and it doesn't include that piece of memory. Possibly the INI file has some expiration date, like 5 minutes. So after that time it has to be loaded again.<br /><br />You may try Process Monitor to catch which exact file is being read and then try to determine why it is being slow.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Sep 05, 2015 9:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-09-05T20:15:53-07:00</updated>
<published>2015-09-05T20:15:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21830#p21830</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21830#p21830"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21830#p21830"><![CDATA[
No, this system is too fast for there to be a 3 second delay in doing anything.  The VM has 16 virtual processors and runs from an SSD array.  Plus the problem occurs after leaving it alone for a while.  Nothing is causing the cache to flush.<br /><br />Here's another sequence of dumps.  I believe either the 2nd or 3rd one will show Explorer waiting on whatever is causing the delay.<br /><br /><!-- m --><a class="postlink" href="http://Noel.ProDigitalSoftware.com/temp/explorer.exe_dmp.zip">http://Noel.ProDigitalSoftware.com/temp ... xe_dmp.zip</a><!-- m --><br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Sat Sep 05, 2015 8:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-04T21:57:02-07:00</updated>
<published>2015-09-04T21:57:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21796#p21796</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21796#p21796"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21796#p21796"><![CDATA[
I don't think this has anything to do with spinning down. Simply the information is cached in RAM, and if it is not used for some time it is purged. So next time it is slow.<br /><br />A few more successful dumps will help confirm if this problem is indeed related to the Pictures folder or that was just a random sample.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 04, 2015 9:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-09-04T21:50:39-07:00</updated>
<published>2015-09-04T21:50:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21795#p21795</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21795#p21795"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21795#p21795"><![CDATA[
I coded up a little app (with help from the good folks at StackOverflow) to dump out the status of the drive.  It shows the one and only virtual drive - C: - is powered-up the whole time.  So it's not some kind of virtual power-down state.<br /><br />// DrivePowerStateCheck.cpp : Defines the entry point for the console application.<br />//<br /><br />#include &quot;stdafx.h&quot;<br /><br />int _tmain(int argc, _TCHAR* argv[])<br />{<br />for (int DriveNumber = 0; DriveNumber &lt; 128; ++DriveNumber) {<br />TCHAR Drive[128];<br />_stprintf(Drive, _T(&quot;\\\\.\\PHYSICALDRIVE%d&quot;), DriveNumber);<br />HANDLE hDevice = CreateFile(Drive, 0, FILE_SHARE_READ | FILE_SHARE_WRITE, 0, OPEN_EXISTING, 0, 0);<br />if (hDevice != INVALID_HANDLE_VALUE) {<br />BOOL DeviceIsOn = FALSE;<br />if (GetDevicePowerState(hDevice, &amp;DeviceIsOn) != 0) {<br />_tprintf(_T(&quot;Physical Drive %d is Powered %s (DeviceIsOn=%d)\n&quot;), DriveNumber, DeviceIsOn ? _T(&quot;On&quot;) : _T(&quot;Off&quot;), (int) DeviceIsOn);<br />}<br />CloseHandle(hDevice);<br />}<br />}<br /><br />return 0;<br />}<br /><br /><br />I guess I can go through resurrecting a virgin installation, and add all my tweaks and augments in methodically, all the while testing for the recurrence of this problem (assuming it doesn't happen in the virgin Win 10 setup).<br /><br />Would capturing another sequence of logs help you?<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Fri Sep 04, 2015 9:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-04T08:38:53-07:00</updated>
<published>2015-09-04T08:38:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21759#p21759</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21759#p21759"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21759#p21759"><![CDATA[
It resolves the few special folders in advance in case they are needed. And it is not clear from the start if they are needed. Some folders require special case handling, so even if you add it manually by path the special behavior must be used. However I don't know it is a special folder unless I know the path of that special folder.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 04, 2015 8:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-09-04T08:22:28-07:00</updated>
<published>2015-09-04T08:22:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21758#p21758</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21758#p21758"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21758#p21758"><![CDATA[
The Pictures folder itself is intact, though I have hidden it from display under &quot;This PC&quot; in the Navigation pane by tweaking the registry (I can look up the specifics if you'd like; I don't remember them off the top of my head - I think it was a matter of setting an IsPinnedToNamespaceTree value to 0).<br /><br />A fundamental question is, though...  Why does ClassicShell try to resolve the location of Pictures?  I don't have that showing in any menus.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Fri Sep 04, 2015 8:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-03T21:33:00-07:00</updated>
<published>2015-09-03T21:33:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21751#p21751</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21751#p21751"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21751#p21751"><![CDATA[
At the time of the second dump it was trying to resolve the location of your Pictures folder. And so Windows goes on to read your profile from disk.<br />I don't know if that's the cause of the slowdown. It may just happen to be what was in progress while the dump was taken.<br />But see if there is something funky going on with the Pictures folder on your end.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Sep 03, 2015 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-09-03T19:16:59-07:00</updated>
<published>2015-09-03T19:16:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21744#p21744</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21744#p21744"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21744#p21744"><![CDATA[
OK, that strategy worked.  I thought to start the dump sequencing process before clicking the Start button, and sure enough caught a delay.<br /><br />I believe I clicked the Start button around the time of dump 1 being created and the menu opened around the time of dump 3.<br /><br />Here's the lot of them:  <!-- m --><a class="postlink" href="http://Noel.ProDigitalSoftware.com/temp/explorer.exe_dmps.zip">http://Noel.ProDigitalSoftware.com/temp ... e_dmps.zip</a><!-- m --><br /><br />This is from an up-to-date 10240 build.  Let me know if I can provide anything more.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Thu Sep 03, 2015 7:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-09-03T17:36:56-07:00</updated>
<published>2015-09-03T17:36:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21736#p21736</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21736#p21736"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21736#p21736"><![CDATA[
Sorry I haven't had time to do a series of dumps so far.  I had 5 minutes but failed to <br /><br />Here's a copy of my Win 10 settings:<br /><!-- m --><a class="postlink" href="http://Noel.ProDigitalSoftware.com/temp/Menu_Settings.zip">http://Noel.ProDigitalSoftware.com/temp ... ttings.zip</a><!-- m --><br /><br />This really is feeling like some kind of &quot;virtual drive spin-down&quot;, since it's NEVER reproducible a second time right away, and it always seems to catch me when I've returned to the VM to do something after leaving it alone for a while.  However I've just checked the power plan settings for the Nth time and the settings are properly at &quot;Never spin down&quot;.<br /><br />I need to leave a command window set up to capture the dumps to remind me to run it when I come back to the VM.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Thu Sep 03, 2015 5:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-31T19:49:17-07:00</updated>
<published>2015-08-31T19:49:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21676#p21676</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21676#p21676"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21676#p21676"><![CDATA[
Can you save and attach your Classic Start Menu settings XML on Windows 10? The delay could be happening only with some specific settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Aug 31, 2015 7:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-08-31T14:41:28-07:00</updated>
<published>2015-08-31T14:41:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21673#p21673</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21673#p21673"/>
<title type="html"><![CDATA[Re: Seeing 2 Sec Delay after clicking Start Before Menu Show]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5082&amp;p=21673#p21673"><![CDATA[
I've used a lot of debugging aids, but procdmp is new to me.  Do you have a link?<br /><br />EDIT:  Never mind - I see:  <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l --><br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Mon Aug 31, 2015 2:41 pm</p><hr />
]]></content>
</entry>
</feed>