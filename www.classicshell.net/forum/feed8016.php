<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6068" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-05-22T12:47:22-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6068</id>
<entry>
<author><name><![CDATA[atari800xl]]></name></author>
<updated>2016-05-22T12:47:22-07:00</updated>
<published>2016-05-22T12:47:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26724#p26724</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26724#p26724"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26724#p26724"><![CDATA[
Yep, I could also remove the &quot;if build &gt;=14316, rename installer&quot; part from my PostInstall thingy, so looking pretty good!!!<br />Really like the easy taskbar color change option!!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=873">atari800xl</a> — Sun May 22, 2016 12:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[atari800xl]]></name></author>
<updated>2016-05-22T12:31:00-07:00</updated>
<published>2016-05-22T12:31:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26723#p26723</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26723#p26723"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26723#p26723"><![CDATA[
Wow, that was fast... <br />Good thing I kept the disk image (14342ent32), I could test within a few minutes. Looking good, problem gone!!! <br />Now I will replace 4.2.5 with 4.2.7 in my PostInst and test that, so one more image restore and this whole thing was fixed in just one day! <br />You are a genuis, sir... <img src="http://www.classicshell.net/forum/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=873">atari800xl</a> — Sun May 22, 2016 12:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-05-22T12:06:00-07:00</updated>
<published>2016-05-22T12:06:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26722#p26722</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26722#p26722"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26722#p26722"><![CDATA[
I found the problem. There was a wrong calling convention for some Windows function that only causes problems on 32-bit Windows 10.<br />Try this new installer: <!-- m --><a class="postlink" href="http://www.mediafire.com/download/7hvdd2rfm9d6fxd/ClassicShellSetup_4_2_7.exe">http://www.mediafire.com/download/7hvdd ... _4_2_7.exe</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun May 22, 2016 12:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[atari800xl]]></name></author>
<updated>2016-05-22T11:55:05-07:00</updated>
<published>2016-05-22T11:55:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26721#p26721</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26721#p26721"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26721#p26721"><![CDATA[
Well, I like to play around with PE, disk imagers, automatic postinstall, software testing etc., so for me it was a &quot;fun&quot; (ahem) project, but of course it's too bad that there is a problem with the new beta.<br />  <br />My first &quot;recovery&quot; was a quick restore of a disk image, but then in a later test I tried to recover from the flashing (and somewhat entertaining) explorer crashes by hitting ctrl-sh-esc and trying to kill the ClassicStartmenu process fast enough before a new entry appeared in the list, and/or the task manager lost focus. In this case it was a good thing I tested on a slow computer... <img src="http://www.classicshell.net/forum/images/smilies/icon_e_surprised.gif" alt=":o" title="Surprised" />  <br />  <br />Seriously, not a very practical way of &quot;recovery&quot;, so I really hope you can find the problem soon. <br />  <br />I am still a very happy ClassicShell user, so hopefully on to the next beta soon!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=873">atari800xl</a> — Sun May 22, 2016 11:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-05-22T11:22:05-07:00</updated>
<published>2016-05-22T11:22:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26720#p26720</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26720#p26720"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26720#p26720"><![CDATA[
Yes, there appears to be a problem on 32-bit Windows 10. How did you manage to recover? I want to post instructions for other people affected by this.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun May 22, 2016 11:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[atari800xl]]></name></author>
<updated>2016-05-22T04:59:28-07:00</updated>
<published>2016-05-22T04:59:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26708#p26708</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26708#p26708"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26708#p26708"><![CDATA[
Tested with 14342 x86 Enterprise as well now, exactly the same problem: Constant explorer restarts/ flashing screen (looks like CS gets killed as soon as it appears). <br />Has nobody else tested this?  EDIT: 4.2.5 is fine (after renaming the installer, of course).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=873">atari800xl</a> — Sun May 22, 2016 4:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[atari800xl]]></name></author>
<updated>2016-05-22T01:28:00-07:00</updated>
<published>2016-05-22T01:28:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26703#p26703</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26703#p26703"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26703#p26703"><![CDATA[
I used the &quot;HKLM&quot; method to make the dumps, from the zip info it looks like all the dumps are identical, not sure if they're something useful in there... <br />Please let me know if you want me to try other stuff, I have plenty of test laptops around.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=873">atari800xl</a> — Sun May 22, 2016 1:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-05-22T00:05:45-07:00</updated>
<published>2016-05-22T00:05:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26699#p26699</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26699#p26699"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26699#p26699"><![CDATA[
Can you capture a crash dump? Instructions are at the top of this page.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun May 22, 2016 12:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[atari800xl]]></name></author>
<updated>2016-05-21T23:05:55-07:00</updated>
<published>2016-05-21T23:05:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26698#p26698</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26698#p26698"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26698#p26698"><![CDATA[
Woops, spoke too soon, installed 4.2.6 on clean 14342edu32, things are not working correctly: the screen keeps flickering, looks like ClassicShell is continually restarting or something...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=873">atari800xl</a> — Sat May 21, 2016 11:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[atari800xl]]></name></author>
<updated>2016-05-21T21:38:03-07:00</updated>
<published>2016-05-21T21:38:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26697#p26697</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26697#p26697"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26697#p26697"><![CDATA[
Thanks for the new version. <br />It must be inconvenient to keep up with all these insider builds, but it seems to be the new &quot;reality&quot;, so thanks again for allowing us to test them, without having to miss out on our beloved Classic Start Menu!!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=873">atari800xl</a> — Sat May 21, 2016 9:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-05-21T21:24:30-07:00</updated>
<published>2016-05-21T21:24:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26696#p26696</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26696#p26696"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26696#p26696"><![CDATA[
There is a new version 4.2.6 beta that should work just fine with the Insider builds.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat May 21, 2016 9:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-05-21T11:56:56-07:00</updated>
<published>2016-05-21T11:56:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26690#p26690</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26690#p26690"/>
<title type="html"><![CDATA[Re: Latest Windows Insider build doesn't let ClassicShell ru]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26690#p26690"><![CDATA[
Rename the installer and install it. Or wait for an updated release which will be out soon.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat May 21, 2016 11:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[arealnoob]]></name></author>
<updated>2016-05-21T03:15:41-07:00</updated>
<published>2016-05-21T03:15:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26678#p26678</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26678#p26678"/>
<title type="html"><![CDATA[Latest Windows Insider build doesn't let ClassicShell run]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6068&amp;p=26678#p26678"><![CDATA[
<span style="background-color:#ffffff;">I am a Windows Insider...and get MSFT updates to Windows 10.<br /><br />The latest, installed automatically last night, prevents Classic Shell from running.<br /><br />Windows 10's security platform stops Classic Shell from running, saying it's a security risk.<br /><br />Classic Shell developers: talk to Microsoft about this.<br /><br />...and do it fast.</span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13532">arealnoob</a> — Sat May 21, 2016 3:15 am</p><hr />
]]></content>
</entry>
</feed>