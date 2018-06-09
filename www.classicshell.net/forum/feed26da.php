<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7709" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-26T11:10:10-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7709</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-26T11:10:10-07:00</updated>
<published>2017-07-26T11:10:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33476#p33476</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33476#p33476"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33476#p33476"><![CDATA[
Besides IDT, there is ONE MORE driver that I've found which crashes Control Panel. Realtek's audio driver if you haven't updated it, contains RtkAPO.dll which has the same effect as IDT's CPL file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jul 26, 2017 11:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[as300182]]></name></author>
<updated>2017-07-14T15:07:04-07:00</updated>
<published>2017-07-14T15:07:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33337#p33337</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33337#p33337"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33337#p33337"><![CDATA[
<div class="quotetitle">songwoods wrote:</div><div class="quotecontent"><br />I'm finally working -- Thanks for all your help.<br /><br />It might be helpful for others -- Renaming IDTNC64.CPL wasn't enough<br />I REN'ed IDTNC64.CPL to IDTNC64_BAK.CPL.<br />Rebooted and it continued to crash.<br /><br />DL'ed <span style="color:#454545;"><span style="font-family:Segoe UI, Lucida Grande, Verdana, Arial, Helvetica, sans-serif;"><span style="font-size: 100%; line-height: 116%;">windbg and did my own analysis &#40;you guys had done enough !&#41;, and while I don&#39;t claim to know what I was seeing</span><span style="font-size: 175%; line-height: 116%;">, </span></span></span><br />IDTNC_BAK.CPL was clearly being highlighted as a problem.<br /><br />MOVED IDTNC64_BAK.CPL to Documents, rebooted and now working.<br /><br />Thanks again !<br /></div><br /><br /><br />If you'd renamed IDTNC64.CPL to IDTNC64.CPL.bak it would have worked first time. Because you left the file in the system32 folder with a valid control panel file extension, it still caused an issue.<br /><br />Worth noting for the future.  If you're going to rename a file, change the extension.  If you leave it with a valid extension, like dll, exe, or cpl for instance, it's still a useable file that can get loaded whether you like it or not.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21767">as300182</a> — Fri Jul 14, 2017 3:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[songwoods]]></name></author>
<updated>2017-07-14T06:58:28-07:00</updated>
<published>2017-07-14T06:58:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33326#p33326</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33326#p33326"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33326#p33326"><![CDATA[
I'm finally working -- Thanks for all your help.<br /><br />It might be helpful for others -- Renaming IDTNC64.CPL wasn't enough<br />I REN'ed IDTNC64.CPL to IDTNC64_BAK.CPL.<br />Rebooted and it continued to crash.<br /><br />DL'ed <span style="color:#454545;"><span style="font-family:Segoe UI, Lucida Grande, Verdana, Arial, Helvetica, sans-serif;"><span style="font-size: 100%; line-height: 116%;">windbg and did my own analysis &#40;you guys had done enough !&#41;, and while I don&#39;t claim to know what I was seeing</span><span style="font-size: 175%; line-height: 116%;">, </span></span></span><br />IDTNC_BAK.CPL was clearly being highlighted as a problem.<br /><br />MOVED IDTNC64_BAK.CPL to Documents, rebooted and now working.<br /><br />Thanks again !<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21530">songwoods</a> — Fri Jul 14, 2017 6:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-13T17:15:44-07:00</updated>
<published>2017-07-13T17:15:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33318#p33318</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33318#p33318"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33318#p33318"><![CDATA[
When the start menu launches it collects all items from the interesting folders (icons, names, etc).<br />I think you can get the same crash when you simply view the Control Panel in Explorer.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jul 13, 2017 5:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[as300182]]></name></author>
<updated>2017-07-13T15:31:40-07:00</updated>
<published>2017-07-13T15:31:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33316#p33316</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33316#p33316"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33316#p33316"><![CDATA[
Yes I have that file.  Having renamed it, Classic Shell is behaving again.  Thanks for your help.<br /><br />Why would a control panel file have such devastating effects?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21767">as300182</a> — Thu Jul 13, 2017 3:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-13T15:00:27-07:00</updated>
<published>2017-07-13T15:00:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33315#p33315</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33315#p33315"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33315#p33315"><![CDATA[
Do you happen to have the IDTNC64.cpl file in C:\Windows\System32 folder? If so, rename it or delete it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jul 13, 2017 3:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[as300182]]></name></author>
<updated>2017-07-13T14:27:55-07:00</updated>
<published>2017-07-13T14:27:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33314#p33314</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33314#p33314"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33314#p33314"><![CDATA[
I have the same problem after installing the Win 10 creator update.  I've followed the instructions to remove and re-install Classic Menu but it makes no difference.  I do hope this issue is being taken seriously?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21767">as300182</a> — Thu Jul 13, 2017 2:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-13T09:38:51-07:00</updated>
<published>2017-07-13T09:38:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33305#p33305</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33305#p33305"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33305#p33305"><![CDATA[
I hate to say it, but you still have the file &quot;C:\Windows\System32\IDTCN64.cpl&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jul 13, 2017 9:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[songwoods]]></name></author>
<updated>2017-07-13T09:31:30-07:00</updated>
<published>2017-07-13T09:31:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33302#p33302</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33302#p33302"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33302#p33302"><![CDATA[
Follow-on from 'Blink' thread.<br /><br />Still 'blinking, but now about 11 secs between refresh and Explorer actually crashes.<br />Uninstalled with Utility, reinstalled, no change.<br />Ran cmd /k d:procdump64 -e explorer.exe x4 (in ZIP file)<br /><br />Note: The PC is near unresponsive during the blink.  TaskMAnager &gt;ClassicShell &gt; End Task can take up to 12 or more attempts to actually stop CS.<br />(reloads during refresh ?)<br />so at one point Renamed ClassicStartMenu.exe to ClassicStartMenu_.exe so that I could Logout/LogIN, start Procdump and then start ClassicShell via a desktop shortcut.<br />Didn't want this being a problem in .dmp analysis.<br /><br />Thx.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21530">songwoods</a> — Thu Jul 13, 2017 9:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-02T01:28:43-07:00</updated>
<published>2017-07-02T01:28:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33173#p33173</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33173#p33173"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33173#p33173"><![CDATA[
Okay then create a crash dump please.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jul 02, 2017 1:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rony albert]]></name></author>
<updated>2017-07-07T14:41:00-07:00</updated>
<published>2017-07-01T15:05:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33171#p33171</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33171#p33171"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33171#p33171"><![CDATA[
I am getting same issue.<br /><br /><span style="font-size: 85%; line-height: 116%;"><a href="http://www.healthgala.info/" class="postlink"><span style="color:transparent;">Disease</span></a><a href="http://www.rxdrugs.xyz/" class="postlink"><span style="color:transparent;">Drugs</span></a></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19579">rony albert</a> — Sat Jul 01, 2017 3:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-06-28T21:02:49-07:00</updated>
<published>2017-06-28T21:02:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33160#p33160</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33160#p33160"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33160#p33160"><![CDATA[
Can you capture a crash dump somehow by following these steps? <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l --> If you can, then the crash can be fixed for the next version of Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jun 28, 2017 9:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[guiman.david]]></name></author>
<updated>2017-06-28T10:34:49-07:00</updated>
<published>2017-06-28T10:34:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33158#p33158</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33158#p33158"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33158#p33158"><![CDATA[
Thanks for the link. I tried it (twice), but Classic Shell keeps crashing and taking explore with it (the taskbar goes away and comes back...).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21097">guiman.david</a> — Wed Jun 28, 2017 10:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-06-27T23:46:44-07:00</updated>
<published>2017-06-27T23:46:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33156#p33156</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33156#p33156"/>
<title type="html"><![CDATA[Re: Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33156#p33156"><![CDATA[
Try using the Classic Shell Utility to completely remove it including all Settings for all users: <!-- m --><a class="postlink" href="http://www.mediafire.com/download/3ukeryzw41qpfz8/ClassicShellUtility.exe">http://www.mediafire.com/download/3uker ... tility.exe</a><!-- m --> Then re-install it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jun 27, 2017 11:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[guiman.david]]></name></author>
<updated>2017-06-27T09:46:06-07:00</updated>
<published>2017-06-27T09:46:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33152#p33152</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33152#p33152"/>
<title type="html"><![CDATA[Crashes Explorer in Win 10 Creator]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7709&amp;p=33152#p33152"><![CDATA[
I updated to Windows 10 Creator, and installed the latest version of Classic Shell, but it crashes Explorer. Classic Shell starts. Explorer crashes. Classic Shell restarts. Explorer crashes. This cycle continues until I manually kill Classic Shell and prevent it from restarting.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21097">guiman.david</a> — Tue Jun 27, 2017 9:46 am</p><hr />
]]></content>
</entry>
</feed>