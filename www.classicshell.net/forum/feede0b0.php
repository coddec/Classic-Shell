<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=6399" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-26T11:14:16-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=6399</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-26T11:14:16-07:00</updated>
<published>2017-07-26T11:14:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=33477#p33477</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=33477#p33477"/>
<title type="html"><![CDATA[Re: Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=33477#p33477"><![CDATA[
Besides IDT, there is ONE MORE driver that I've found which crashes Control Panel. Realtek's audio driver if you haven't updated it, contains RtkAPO.dll which has the same effect as IDT's CPL file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jul 26, 2017 11:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zzzzk]]></name></author>
<updated>2016-07-30T13:31:46-07:00</updated>
<published>2016-07-30T13:31:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27895#p27895</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27895#p27895"/>
<title type="html"><![CDATA[Re: Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27895#p27895"><![CDATA[
I uninstalled the IDT driver, rebooted, renamed the cpl that remained just in case.  Now classic shell is working and so is the sound.  Thank you for your help!   <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14381">zzzzk</a> — Sat Jul 30, 2016 1:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zzzzk]]></name></author>
<updated>2016-07-30T13:15:17-07:00</updated>
<published>2016-07-30T13:15:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27894#p27894</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27894#p27894"/>
<title type="html"><![CDATA[Re: Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27894#p27894"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Your crash is related to IDTNC64.cpl, which is probably not compatible with Windows 10. Search the Internet and you'll see many people complaining about it.<br /><br />I don't know what sttray64.exe is. The crash doesn't seem to be related to Classic Shell. None of the Classic Shell code is even loaded by that process.<br /></div><br /><br /><br />Ok, thank you for the quick response. I'll check into it.  FYI, I looked up the sttray64.exe and it also has to do with teh IDT audio driver.  Why would an audio driver interfere with classic shell?  Any way to prevent this while I look for another driver?  Thank you<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14381">zzzzk</a> — Sat Jul 30, 2016 1:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-07-30T13:11:49-07:00</updated>
<published>2016-07-30T13:11:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27893#p27893</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27893#p27893"/>
<title type="html"><![CDATA[Re: Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27893#p27893"><![CDATA[
Your crash is related to IDTNC64.cpl, which is probably not compatible with Windows 10. Search the Internet and you'll see many people complaining about it.<br /><br />I don't know what sttray64.exe is. The crash doesn't seem to be related to Classic Shell. None of the Classic Shell code is even loaded by that process.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jul 30, 2016 1:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zzzzk]]></name></author>
<updated>2016-07-30T12:58:53-07:00</updated>
<published>2016-07-30T12:58:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27892#p27892</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27892#p27892"/>
<title type="html"><![CDATA[Re: Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27892#p27892"><![CDATA[
I uploaded a zip file of two dump files on MediaMire ClassicShell account. These both showed crashes of sttray64.exe and explorer.exe at time of installation and activation of classic shell. Please advise how to fix. Thank you. File too big for forum upload.  File has my forum name zzzzk.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14381">zzzzk</a> — Sat Jul 30, 2016 12:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zzzzk]]></name></author>
<updated>2016-07-29T23:37:48-07:00</updated>
<published>2016-07-29T23:37:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27885#p27885</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27885#p27885"/>
<title type="html"><![CDATA[Re: Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27885#p27885"><![CDATA[
Did not work. will send log.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14381">zzzzk</a> — Fri Jul 29, 2016 11:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zzzzk]]></name></author>
<updated>2016-07-28T12:35:34-07:00</updated>
<published>2016-07-28T12:35:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27852#p27852</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27852#p27852"/>
<title type="html"><![CDATA[Re: Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27852#p27852"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Try the beta version of Classic Shell, 4.2.7 from the home page. If that version also crashes, please capture a crash dump as per these instructions: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l --><br /></div><br /><br /><br />Ok, I'll try it.  Thank you for the quick response.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14381">zzzzk</a> — Thu Jul 28, 2016 12:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-07-28T11:22:58-07:00</updated>
<published>2016-07-28T11:22:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27850#p27850</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27850#p27850"/>
<title type="html"><![CDATA[Re: Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27850#p27850"><![CDATA[
Try the beta version of Classic Shell, 4.2.7 from the home page. If that version also crashes, please capture a crash dump as per these instructions: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jul 28, 2016 11:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zzzzk]]></name></author>
<updated>2016-07-28T11:01:07-07:00</updated>
<published>2016-07-28T11:01:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27849#p27849</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27849#p27849"/>
<title type="html"><![CDATA[Windows 10 - windows explorer continuously crashes]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6399&amp;p=27849#p27849"><![CDATA[
Hello,<br /><br />Love classic shell, but after upgrading to windows 10, windows explorer continuously crashes after I try to use classic shell. Any fix? I have version 4.2.5c. Thank you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14381">zzzzk</a> — Thu Jul 28, 2016 11:01 am</p><hr />
]]></content>
</entry>
</feed>