<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=22&amp;t=6568" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-17T11:39:05-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=22&amp;t=6568</id>
<entry>
<author><name><![CDATA[thor.a]]></name></author>
<updated>2016-08-17T11:39:05-07:00</updated>
<published>2016-08-17T11:39:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28697#p28697</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28697#p28697"/>
<title type="html"><![CDATA[Re: Tools to prevent modification of the MBR?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28697#p28697"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />You can open Local Security Policy (secpol.msc) -&gt; Local Policy -&gt; Security Options. Enable the setting: &quot;User Account Control: Only elevate executables that are signed and validated&quot;. Once enabled, only signed EXEs are allowed by Windows to elevate. Others will fail with the error message: &quot;A referral was returned from the server.&quot;<br /><br />This will provide you with pretty good security as no app besides the ones that are either digitally signed will be able to run on your PC. Without admin privileges, the damage that malware can cause is limited.<br /><br />This method is not without its flaws. Many useful apps are not signed so you will be unable to run those which require admin permissions. Some programs like file copy utilities or shell extensions need to self-elevate and cannot be run manually or from the command line. You will not be able to run such rare programs but the tradeoff is that your Windows system will be highly secure.<br /><br />You can run such unsigned apps that require admin permissions using Windows Task Scheduler: <!-- m --><a class="postlink" href="http://winaero.com/blog/open-any-program-as-administrator-without-uac-prompt/">http://winaero.com/blog/open-any-progra ... ac-prompt/</a><!-- m --><br /></div><br />Thanks for the hint. I could imagine to enable this setting on my productive systems. The drawbacks are perhaps fewer than the advantage of being relative safe. <br /><br />Thorsten<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14787">thor.a</a> — Wed Aug 17, 2016 11:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-17T10:56:58-07:00</updated>
<published>2016-08-17T10:56:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28696#p28696</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28696#p28696"/>
<title type="html"><![CDATA[Re: Tools to prevent modification of the MBR?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28696#p28696"><![CDATA[
You can open Local Security Policy (secpol.msc) -&gt; Local Policy -&gt; Security Options. Enable the setting: &quot;User Account Control: Only elevate executables that are signed and validated&quot;. Once enabled, only signed EXEs are allowed by Windows to elevate. Others will fail with the error message: &quot;A referral was returned from the server.&quot;<br /><br />This will provide you with pretty good security as no app besides the ones that are either digitally signed will be able to run on your PC. Without admin privileges, the damage that malware can cause is limited.<br /><br />This method is not without its flaws. Many useful apps are not signed so you will be unable to run those which require admin permissions. Some programs like file copy utilities or shell extensions need to self-elevate and cannot be run manually or from the command line. You will not be able to run such rare programs but the tradeoff is that your Windows system will be highly secure.<br /><br />You can run such unsigned apps that require admin permissions using Windows Task Scheduler: <!-- m --><a class="postlink" href="http://winaero.com/blog/open-any-program-as-administrator-without-uac-prompt/">http://winaero.com/blog/open-any-progra ... ac-prompt/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Aug 17, 2016 10:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thor.a]]></name></author>
<updated>2016-08-17T10:21:41-07:00</updated>
<published>2016-08-17T10:21:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28695#p28695</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28695#p28695"/>
<title type="html"><![CDATA[Re: Tools to prevent modification of the MBR?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28695#p28695"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />The link is valid, but probably your browser rejects it because it is infected.<br /></div><br />I think I would notice if Chrome blocks something. But Mediafire says: <br />&quot;File Blocked for Violation. The file you requested has been blocked for a violation of ourTerms of Service.&quot;<br /><br />Ok, I will observe the elevation window with more concentration. But many (good) software tools have not certificates at all. E.g. SMplayer... So this method would not have been helped.<br /><br />Thorsten<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14787">thor.a</a> — Wed Aug 17, 2016 10:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-08-17T09:39:54-07:00</updated>
<published>2016-08-17T09:39:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28693#p28693</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28693#p28693"/>
<title type="html"><![CDATA[Re: Tools to prevent modification of the MBR?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28693#p28693"><![CDATA[
The link is valid, but probably your browser rejects it because it is infected. When I have time I'll try to zip the file or find other way to work around the blocks.<br /><br />The only advice I can give you is to always check the digital signature and don't accept UAC prompts with unknown publisher. That's what UAC is for. If you accept, then the program runs as admin and owns your machine. Even if AV software can detect tinkering with the MBR, there is no way to know if it is legitimate or not.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Aug 17, 2016 9:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thor.a]]></name></author>
<updated>2016-08-17T09:32:26-07:00</updated>
<published>2016-08-17T09:32:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28692#p28692</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28692#p28692"/>
<title type="html"><![CDATA[Re: Tools to prevent modification of the MBR?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28692#p28692"><![CDATA[
This link is not valid anymore. (Probably it's better...)<br /><br />Any suggestions concerning my question on how to prevent against such attacks?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14787">thor.a</a> — Wed Aug 17, 2016 9:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-08-17T08:56:04-07:00</updated>
<published>2016-08-17T08:56:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28691#p28691</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28691#p28691"/>
<title type="html"><![CDATA[Re: Tools to prevent modification of the MBR?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28691#p28691"><![CDATA[
You can find an infected copy of Classic Shell here: <!-- m --><a class="postlink" href="http://www.mediafire.com/download/n7gtikdgajfjkkk/ClassicShellSetup_4_3_0_infected.exe">http://www.mediafire.com/download/n7gti ... fected.exe</a><!-- m --><br /><br /><span style="color:#FF0000;"><strong>Notice to everybody: Do not download this file unless you know exactly what you are doing! This file contains malware, not Classic Shell. It is here only so you can find ways to defeat such malware in the future by experimenting in safe isolated environment like a virtual machine.</strong></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Aug 17, 2016 8:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thor.a]]></name></author>
<updated>2016-08-17T08:32:00-07:00</updated>
<published>2016-08-17T08:32:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28690#p28690</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28690#p28690"/>
<title type="html"><![CDATA[Tools to prevent modification of the MBR?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6568&amp;p=28690#p28690"><![CDATA[
Hello,<br /><br />I got the retro virus, too. But not via a ClassicShell-Download on fosshub, but via a SMplayer download on the same day at fosshub, too. I should have seen that there was something wrong with the file: It had just 35 kB (compared to about 35 MB as normal).<br /><br />The restore process of my computer was much, much harder than the usual ways which are currently known because I run a laptop with a special SSD/HDD combination which is seen as one drive (from Lenovo, called RapidDrive). I finally restored the disk combination successfully (yesterday) after several days of research by using a very special Windows Rescue Environment which &quot;knew&quot; about this SSD/HDD by means of an already injected driver. <br /><br />But that's not the point. What I am still thinking about is: How could I prevent such a damage in future? Of course, I could check the file sizes, or I could check the correct certificates. But that's not enough. On 8/3/2016 I was tired and still sitting in front of my laptop trying to find a good video player which have no problems to play a special video format. Of course I had not in my mind that I could get some malicious malware when I downloaded the well known player SMplayer. Of course I installed it ASAP without even noticing the elevation window. This is mainly an automatic process when it is near midnight and I know the software before.<br /><br />So, there is some other mechanism needed. Some guard in the background, some piece of software which checks that there is something wrong with a malware program like this. It's not normal for a program to modify a MBR... Normally, one thinks of antivirus software at this point. Surely it would be interesting if those antivirus tools would have been prevented the infection of the MBR. Did anybody of the victims had such a tool? (I had no antivirus tool in the background running.) <br /><br />And beside the antivirus tools like Kasperski etc. exist some other tools which claim to detect malware with the help of heuristic means. (I like this concept). I found one of those tools some months ago (Anti-Exploit from malwarebytes.com), but I didn't have time yet to test it.<br /><br />Nevertheless it's difficult to prepare a test environment for these tools because normally one's lacking the right piece of malware (should be very young and dangerous!). If I had a copy of the infected smplayer left on my computer I would have taken it and test it with these tools in a virtual machine. But unfortunately I deleted the malware immediately after installing (because it had no function at all...) with Shift-Delete and installed some other video players immediately afterwards. There is nothing left on my harddisk from this retro virus, I checked double with some rescue software like Recuva. No chance.<br /><br />So, if anybody still owns a copy of this malware it would be nice if he could test those tools in a virtual machine wether they prevent the destroying of the MBR. Of course I would be a voluntary, too.<br /><br />Thorsten<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14787">thor.a</a> — Wed Aug 17, 2016 8:32 am</p><hr />
]]></content>
</entry>
</feed>