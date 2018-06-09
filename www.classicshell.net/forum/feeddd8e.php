<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=5673" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-02-04T08:45:00-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=5673</id>
<entry>
<author><name><![CDATA[johnlsenchak]]></name></author>
<updated>2016-02-04T08:45:00-07:00</updated>
<published>2016-02-04T08:45:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25097#p25097</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25097#p25097"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25097#p25097"><![CDATA[
Yes, it was  added by me  for easy access    to my network share drives.   Like I already stated  , I thought it was the network drives that where hanging  Windows  8.1  but  in<br />actuality  it  maybe was the reverse via the short cut . This    then caused  the shortcut,  to hang   Classic Shell<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12632">johnlsenchak</a> — Thu Feb 04, 2016 8:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-04T06:47:50-07:00</updated>
<published>2016-02-04T06:47:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25089#p25089</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25089#p25089"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25089#p25089"><![CDATA[
The CLSID that you mentioned {208D2C60-3AEA-1069-A2D7-08002B30309D} is the old Network folder which is known to cause Explorer to become unresponsive. It's not there by default in Classic Shell, you must've added it yourself.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Feb 04, 2016 6:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnlsenchak]]></name></author>
<updated>2016-02-04T06:37:35-07:00</updated>
<published>2016-02-04T06:37:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25088#p25088</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25088#p25088"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25088#p25088"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />That is quite likely to be the cause of the slowdown! The Network folder is best not added to the Start Menu as an expanding menu because it takes some time to populate PCs on the network. You could add it as a link that opens in Explorer.<br /></div><br /><br /><br />No dumps <br /><br />Nothing yet   ,  still  have not   recreated   the hang after  removing the network shortcut.  You should post on the  main   site  about this issue in the F.A.Q.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12632">johnlsenchak</a> — Thu Feb 04, 2016 6:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnlsenchak]]></name></author>
<updated>2016-02-03T12:47:09-07:00</updated>
<published>2016-02-03T12:47:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25068#p25068</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25068#p25068"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25068#p25068"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />That is quite likely to be the cause of the slowdown! The Network folder is best not added to the Start Menu as an expanding menu because it takes some time to populate PCs on the network. You could add it as a link that opens in Explorer.<br /></div><br /><br /><br /><br />Running whoscrashed dump program, I'll  get back to you  on this<br /><br /><span style="font-family:Segoe UI, Arial;"><span style="color:#000000;"><span style="font-size: 100%; line-height: 116%;">Computer name: WINDOWS-0B0FK46<br />Windows version: Windows 8.1 , 6.3, build: 9600<br />Windows dir: C:\WINDOWS<br />Hardware: Inspiron 5720, Dell Inc. , 023HTX<br />CPU: GenuineIntel Intel&#40;R&#41; Core&#40;TM&#41; i5-3210M CPU @ 2.50GHz Intel586, level: 6<br />4 logical processors, active mask: 15<br />RAM: 6292516864 bytes total</span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12632">johnlsenchak</a> — Wed Feb 03, 2016 12:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-03T12:17:53-07:00</updated>
<published>2016-02-03T12:17:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25067#p25067</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25067#p25067"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25067#p25067"><![CDATA[
That is quite likely to be the cause of the slowdown! The Network folder is best not added to the Start Menu as an expanding menu because it takes some time to populate PCs on the network. You could add it as a link that opens in Explorer.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Feb 03, 2016 12:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnlsenchak]]></name></author>
<updated>2016-02-03T12:19:44-07:00</updated>
<published>2016-02-03T12:15:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25066#p25066</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25066#p25066"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25066#p25066"><![CDATA[
Okay, I have to find time to do that<br /><br /><br />I also have a network shortcut using &quot;Folder (.{208D2C60-3AEA-1069-A2D7-08002B30309D})&quot; which also could be the issue<br /><strong><br />Deleted </strong><br /><br />I just tried opening the File Explorer after some time and their was some lag, but it didn't hang, before removing the above<br /><br /><br />God  mode codes<br /><!-- m --><a class="postlink" href="http://www.thewindowsclub.com/the-secret-behind-the-windows-7-godmode">http://www.thewindowsclub.com/the-secre ... -7-godmode</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12632">johnlsenchak</a> — Wed Feb 03, 2016 12:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-03T11:37:42-07:00</updated>
<published>2016-02-03T11:37:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25065#p25065</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25065#p25065"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25065#p25065"><![CDATA[
It will capture the state of Explorer when it crashes inside a dump file which you can upload here. The dump can be used to analyze and determine what causes the crash.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Feb 03, 2016 11:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnlsenchak]]></name></author>
<updated>2016-02-03T11:33:43-07:00</updated>
<published>2016-02-03T11:33:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25064#p25064</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25064#p25064"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25064#p25064"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Have you tried capturing the crash dump as instructed in <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l -->. Try both ways: procdump -e Explorer.exe and if that doesn't capture it then the alternative way in the post below it.<br /></div><br /><br /><br /><br />Downloaded the program, but haven't done that  yet. Can you tell me the benefits here  of running that program<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12632">johnlsenchak</a> — Wed Feb 03, 2016 11:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnlsenchak]]></name></author>
<updated>2016-02-03T11:29:55-07:00</updated>
<published>2016-02-03T11:29:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25063#p25063</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25063#p25063"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25063#p25063"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Did removing the shortcut from the desktop fix the problem?<br /></div><br /><br /><br />Yes the shortcut  was removed   but apparently no on  fixing the issue .It still might be the network share drives slowly down the opening of Explorer. I noticed a few times that the network shares (connected to the network port) take the longest to appear in Explorer which may be causing the time out. This then causes Explorer.exe to restart <br /><br /><br /><br />I'm on a WIFI network right now, where the Network Shares are not connected via the network port<br /><br /><br />Usual if I don't open Explorer.exe for a long period of time, then click on it, the hang occurs<br /><br />I still haven't ruled out uploading files to Facebook. The hang occurred just after uploading files via Chrome<br /><br /><br />Facebook is well known to cause issues with browsers.<br /><br /><br />I  removed the shortcut   but haven't rebooted the  computer<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12632">johnlsenchak</a> — Wed Feb 03, 2016 11:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-03T09:42:10-07:00</updated>
<published>2016-02-03T09:42:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25053#p25053</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25053#p25053"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25053#p25053"><![CDATA[
Have you tried capturing the crash dump as instructed in <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l -->. Try both ways: procdump -e Explorer.exe and if that doesn't capture it then the alternative way in the post below it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Feb 03, 2016 9:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-03T09:21:14-07:00</updated>
<published>2016-02-03T09:21:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25051#p25051</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25051#p25051"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25051#p25051"><![CDATA[
Did removing the shortcut from the desktop fix the problem?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Feb 03, 2016 9:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnlsenchak]]></name></author>
<updated>2016-02-03T08:58:10-07:00</updated>
<published>2016-02-03T08:58:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25049#p25049</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25049#p25049"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25049#p25049"><![CDATA[
Which causes Explorer.exe to reload after the bad hang I need a answer  on this !<br /><br /><br />Log Name: Microsoft-Windows-DeviceSetupManager/Admin<br />Source: Microsoft-Windows-DeviceSetupManager<br />Date: 2/3/2016 10:17:14 AM<br />Event ID: 131<br />Task Category: None<br />Level: Error<br />Keywords: <br />User: SYSTEM<br />Computer: WINDOWS-0B0FK46<br />Description:<br />Metadata staging failed, result={1C852A4D-B800-1F08-ABCD-D89D67D762F0} for container '0x80070490'<br /><br />Log Name: System<br />Source: Virtual Disk Service<br />Date: 2/3/2016 10:16:02 AM<br />Event ID: 9<br />Task Category: None<br />Level: Error<br />Keywords: Classic<br />User: N/A<br />Computer: WINDOWS-0B0FK46<br />Description:<br /><span style="text-decoration: underline"><strong>Unexpected provider failure. Restarting the service may fix the problem. Error code: 8007001F@02000014<br /><br /><br />Log Name: System<br />Source:   Microsoft-Windows-DistributedCOM<br />Date:2/3/2016 10:50:49 AM<br />Event ID: 10010<br />Task Category: None<br />Level:    Error<br />Keywords: Classic<br />User:WINDOWS-0B0FK46\johnlsenchak<br />Computer: WINDOWS-0B0FK46<br />Description:<br />The server {CEFF45EE-C862-41DE-AEE2-A022C81EDA92} did not register with DCOM within the required timeout.<br /><br /><br /><br /></strong></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12632">johnlsenchak</a> — Wed Feb 03, 2016 8:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-02T18:54:35-07:00</updated>
<published>2016-02-02T18:54:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25042#p25042</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25042#p25042"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25042#p25042"><![CDATA[
This looks like the desktop is referencing itself, causing a infinitely deep nesting.<br />It should not cause a crash, but it might.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Feb 02, 2016 6:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnlsenchak]]></name></author>
<updated>2016-02-02T18:24:38-07:00</updated>
<published>2016-02-02T18:24:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25041#p25041</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25041#p25041"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25041#p25041"><![CDATA[
I may have  found the solution.   You can  create  short cuts  to  explorer  using certain codes.   It's like the code   for creating a short cut<br />for  &quot;God Mode&quot;   I had  a  short cut on my desktop, with one of those code going to  Windows/Thispc/desktop.  <br /><br />This may have caused  conflict   with  classic  shell<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12632">johnlsenchak</a> — Tue Feb 02, 2016 6:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-02T07:52:50-07:00</updated>
<published>2016-02-02T07:52:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25023#p25023</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25023#p25023"/>
<title type="html"><![CDATA[Re: Classic   Explorer  hanging  in  Windows  8.1.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5673&amp;p=25023#p25023"><![CDATA[
If you can capture a crash dump as instructed here: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l -->, the cause of the slowdown/hang or crash can be determined by inspecting the dump.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Feb 02, 2016 7:52 am</p><hr />
]]></content>
</entry>
</feed>