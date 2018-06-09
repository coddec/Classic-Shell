<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=6316" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-11-19T10:48:03-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=6316</id>
<entry>
<author><name><![CDATA[SebastianOnofrei4454]]></name></author>
<updated>2016-11-19T10:48:03-07:00</updated>
<published>2016-11-19T10:48:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=30410#p30410</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=30410#p30410"/>
<title type="html"><![CDATA[Re: Shell, booting to a blank screen - I want it, how?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=30410#p30410"><![CDATA[
You should do the following:<br /><br />1. Hide the taskbar<br />2. Hide your desktop icons<br />3. Set your desktop background to a black solid colour<br />4. Copy and paste an application in your Startup folder<br />5. Set that application to start in full screen mode<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16144">SebastianOnofrei4454</a> — Sat Nov 19, 2016 10:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[primergy]]></name></author>
<updated>2016-07-14T11:52:52-07:00</updated>
<published>2016-07-14T11:52:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27548#p27548</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27548#p27548"/>
<title type="html"><![CDATA[Re: Shell, booting to a blank screen - I want it, how?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27548#p27548"><![CDATA[
Yay, that created a nice &amp; BLACK screen. Problem: My app doesn't start anymore either, hehe.<br /><br />I try to run it manually and it comes back with an error Window - Explorer.exe - Class not registered.<br />(It is a Windows App, not a program.)<br /><br />I am wiser nonetheless, trying this! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_geek.gif" alt=":geek:" title="Geek" /><br /><br />Edit:<br />I am using a shortcut placed in the Startup Folder for the App to load which seemed to be the only way I was able to get it to load on startup (it is an in-house / homebrew app).<br />Likely part of the issue?!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14132">primergy</a> — Thu Jul 14, 2016 11:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-07-14T11:28:18-07:00</updated>
<published>2016-07-14T11:28:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27546#p27546</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27546#p27546"/>
<title type="html"><![CDATA[Re: Shell, booting to a blank screen - I want it, how?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27546#p27546"><![CDATA[
At HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon in the Registry, there is a Shell value. You could try setting it to hh.exe or rundll32 any null exe that doesn't load the Windows Shell (Taskbar). It used to work in old versions of Windows, haven't tried it in newer versions. <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jul 14, 2016 11:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[primergy]]></name></author>
<updated>2016-07-14T07:45:58-07:00</updated>
<published>2016-07-14T07:45:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27542#p27542</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27542#p27542"/>
<title type="html"><![CDATA[Re: Shell, booting to a blank screen - I want it, how?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27542#p27542"><![CDATA[
Thanks &amp; my bad.<br /><br />This is for WIndows 10 Ent. IoT.<br />The taskbar elimination is a good step. It would also help if components are not installed in the first place.<br />Let me dig, maybe I can get rid of the taskbar with a few registry settings?!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14132">primergy</a> — Thu Jul 14, 2016 7:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-07-13T17:43:25-07:00</updated>
<published>2016-07-13T17:43:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27532#p27532</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27532#p27532"/>
<title type="html"><![CDATA[Re: Shell, booting to a blank screen - I want it, how?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27532#p27532"><![CDATA[
<a href="http://www.aviassin.com/taskbareliminator" class="postlink">http://www.aviassin.com/taskbareliminator</a><br /><a href="http://www.thewindowsclub.com/hide-taskbar-windows-7-hotkey" class="postlink">http://www.thewindowsclub.com/hide-taskbar-windows-7-hotkey</a><br />I cant say if either of these work with your OS as you havnt listed which. and I duno if they will work with classic shell (you might need to create a script that runs *InstallDirectory*/classicstartmenu.exe -toggle<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Jul 13, 2016 5:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[primergy]]></name></author>
<updated>2016-07-13T15:31:41-07:00</updated>
<published>2016-07-13T15:31:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27531#p27531</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27531#p27531"/>
<title type="html"><![CDATA[Shell, booting to a blank screen - I want it, how?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6316&amp;p=27531#p27531"><![CDATA[
Hello Forum, <br /><br />First post from a Classic Shell user and already going somewhat OT!<br /><br />Since there are many shell knowledgeable ppl. here, I have a question:<br />I need to be able to boot into Windows with a completely blank screen. No taskbar, nada.<br />Via autostart I will still pull up an application and it will load and go full-screen.<br /><br />Plan is for users not to see that this is a Windows based PC. Right now this is all about visuals and boot-up time.<br /><br />I tried googling it but, oh wonder, no one wants this to happen, everyone is <span style="text-decoration: underline">complaining</span> about empty screens and black screens of death!<br /><br />Does anyone here have a suggestion on how to achieve this?<br />Do I need a custom shell for it?<br /><br />TIA, <br />Primergy<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14132">primergy</a> — Wed Jul 13, 2016 3:31 pm</p><hr />
]]></content>
</entry>
</feed>