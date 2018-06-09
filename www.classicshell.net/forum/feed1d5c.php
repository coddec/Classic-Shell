<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=381" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-06-27T01:12:09-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=381</id>
<entry>
<author><name><![CDATA[tompooh]]></name></author>
<updated>2013-06-27T01:12:09-07:00</updated>
<published>2013-06-27T01:12:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=4072#p4072</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=4072#p4072"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=4072#p4072"><![CDATA[
Unfortunately the backup-application called &quot;mozy pro&quot; is a must, installed by the system admin.<br />But I got permission to disable this service temporarily. Things are working more stable now. So your guess, it could be incompatibility, seems to be proven by that.<br />After more than one week of proper operation, &quot;mozy pro&quot; is still disabled, next crashes occured.<br />See dump-files for more details.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=742">tompooh</a> — Thu Jun 27, 2013 1:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-14T08:13:15-07:00</updated>
<published>2013-06-14T08:13:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3710#p3710</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3710#p3710"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3710#p3710"><![CDATA[
Two of these dumps don't even have Classic Explorer loaded.<br />One of them casts suspicion on something called &quot;mozy pro&quot;. See if you can disable it and check again for crashes.<br />It may not be a single application that's the problem. It may be incompatibility between two of them.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Jun 14, 2013 8:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tompooh]]></name></author>
<updated>2013-06-14T00:06:04-07:00</updated>
<published>2013-06-14T00:06:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3698#p3698</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3698#p3698"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3698#p3698"><![CDATA[
Changed setting, Disable Classic Explorer Bar and ExplorerBHO, according your (Ivo) recommendations.<br />Please find corresponding dump-file attached.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=742">tompooh</a> — Fri Jun 14, 2013 12:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tompooh]]></name></author>
<updated>2013-06-14T00:05:04-07:00</updated>
<published>2013-06-14T00:05:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3697#p3697</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3697#p3697"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3697#p3697"><![CDATA[
Changed setting, Disable Classic Explorer Bar, according your (Ivo) recommendations.<br />Please find corresponding dump-file attached.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=742">tompooh</a> — Fri Jun 14, 2013 12:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-07T09:59:34-07:00</updated>
<published>2013-06-07T09:59:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3609#p3609</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3609#p3609"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3609#p3609"><![CDATA[
Actually I don't think there is a need to test with just the start menu. Keep Classic Explorer installed, but go to the Internet Explorer -&gt; Tools -&gt; Manage add-ons. Disable Classic Explorer Bar (it will ask you if you want to disable ExplorerBHO as well, uncheck it). Log off and log in. Now only ExplorerBHO will be enabled. See if you can crash it.<br />If it crashes, disable ExplorerBHO as well.<br />If it doesn't crash, enable Classic Explorer Bar, but disable ExplorerBHO.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Jun 07, 2013 9:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-07T07:55:30-07:00</updated>
<published>2013-06-07T07:55:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3608#p3608</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3608#p3608"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3608#p3608"><![CDATA[
That's great, Classic Explorer is the simpler of the two components and many of its options can be turned off. So we can more easily narrow down the problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Jun 07, 2013 7:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tompooh]]></name></author>
<updated>2013-06-07T03:13:27-07:00</updated>
<published>2013-06-07T03:13:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3606#p3606</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3606#p3606"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3606#p3606"><![CDATA[
Here are the Dump-files I got after Classic Start menu had been removed.<br />As next step I reinstalled Classic Start menu and removed Classic Explorer. Results will be reported next week.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=742">tompooh</a> — Fri Jun 07, 2013 3:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-03T08:36:03-07:00</updated>
<published>2013-06-03T08:36:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3524#p3524</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3524#p3524"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3524#p3524"><![CDATA[
Unfortunately the new dumps don't tell me anything I don't already know. There is a heap corruption, but by the time the crash happens it is too late to see what is causing it.<br /><br />We can do two things to narrow down the problem:<br />1) You can try to figure out which component is causing the problem by installing them one at a time - is it Classic Explorer or the start menu? Once you find out, you can try selectively disabling feature to narrow it down further<br />2) I can make a debug build for you with a few more diagnostics in a blind hope it will catch something. I will try to do that a week from now.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jun 03, 2013 8:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tompooh]]></name></author>
<updated>2013-06-03T00:53:54-07:00</updated>
<published>2013-06-03T00:53:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3514#p3514</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3514#p3514"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3514#p3514"><![CDATA[
got two dumps by method 1, see attachment<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=742">tompooh</a> — Mon Jun 03, 2013 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-05-28T08:47:37-07:00</updated>
<published>2013-05-28T08:47:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3404#p3404</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3404#p3404"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3404#p3404"><![CDATA[
OK, try these 2 things:<br />1) Change the DumpType to 1, and if it produces smaller dumps, send them to me<br />2) Remove both registry keys, and try to make new dumps using procdump<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue May 28, 2013 8:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tompooh]]></name></author>
<updated>2013-05-28T02:22:28-07:00</updated>
<published>2013-05-28T02:22:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3395#p3395</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3395#p3395"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3395#p3395"><![CDATA[
Clicking the submit-button I had a sudden insperation.<br />During debug I added entries below, found at the web, to the registry which add explorer to the App Verifier:<br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\Windows Error Reporting\LocalDumps\Explorer.exe]<br />&quot;DumpFolder&quot;=hex(2):43,00,3a,00,5c,00,4c,00,6f,00,63,00,61,00,6c,00,44,00,75,\<br />  00,6d,00,70,00,73,00,00,00<br />&quot;DumpType&quot;=dword:00000002<br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Image File Execution Options\explorer.exe]<br />&quot;GlobalFlag&quot;=dword:02000100<br />&quot;PageHeapFlags&quot;=dword:00000003<br /><br />So this is just another way to get dump-information about the explorer hang-up. It was inserted after trouble occured, not before.<br />Dumpfiles are about 360MBytes, which is of cause much to much for this forum.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=742">tompooh</a> — Tue May 28, 2013 2:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tompooh]]></name></author>
<updated>2013-05-28T02:05:32-07:00</updated>
<published>2013-05-28T02:05:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3394#p3394</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3394#p3394"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3394#p3394"><![CDATA[
Microsoft Application Verifier is not running in the Explorer for any special purpose. Even can't remember when added explorer to it. Maybe I did that during researching<br />for the root cause of the explorer trouble. Now I removed explorer from the App Verifier.<br /><br />What else could be done to support debugging?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=742">tompooh</a> — Tue May 28, 2013 2:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-05-27T09:58:01-07:00</updated>
<published>2013-05-27T09:58:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3375#p3375</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3375#p3375"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3375#p3375"><![CDATA[
The problem looks like a heap corruption, which can be caused by any software (including Classic Shell, of course, and from what you are saying it is the prime suspect). Unfortunately the crash dumps are not very helpful.<br /><br />I see the App Verifier is running in the Explorer. Did you enable it on purpose?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon May 27, 2013 9:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tompooh]]></name></author>
<updated>2013-05-27T00:34:03-07:00</updated>
<published>2013-05-27T00:34:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3372#p3372</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3372#p3372"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3372#p3372"><![CDATA[
Nothing special, somtimes explorer crashes directly after start-up, sometimes the system works stabil half a working-day. But, if Classic Shell is in use, explorer<br />crashes at least once a day. Uninstalling Classic Shell resolve the explorer trouble; but that is not my prefered solution. To me it looks like a randomized mailfuntion. At leased it is not related to an particular userinteraktion.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=742">tompooh</a> — Mon May 27, 2013 12:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-05-24T09:41:50-07:00</updated>
<published>2013-05-24T09:41:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3335#p3335</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3335#p3335"/>
<title type="html"><![CDATA[Re: Windows Explorer has stopped working]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=381&amp;p=3335#p3335"><![CDATA[
What were you doing at the time of the crash? The dumps point to the thread pool manager, but Classic Shell doesn't use the thread pool, not directly anyway.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri May 24, 2013 9:41 am</p><hr />
]]></content>
</entry>
</feed>