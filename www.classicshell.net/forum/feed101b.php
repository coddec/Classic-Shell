<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=874" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-03T17:20:27-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=874</id>
<entry>
<author><name><![CDATA[soyabeaner]]></name></author>
<updated>2013-07-03T17:20:00-07:00</updated>
<published>2013-07-03T17:20:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4429#p4429</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4429#p4429"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4429#p4429"><![CDATA[
I found the solution without needing to reimage (but I'm going to do so anyway for other reasons)! When I checked CCleaner I didn't notice anything unusual, but then I remember that running CCleaner as admin usually reveals more options.  The Classic Shell DLLs had been disabled in the startup, but only under my admin account not the standard account.  I re-enabled them and it works again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1025">soyabeaner</a> — Wed Jul 03, 2013 5:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[soyabeaner]]></name></author>
<updated>2013-07-03T15:13:48-07:00</updated>
<published>2013-07-03T15:13:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4428#p4428</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4428#p4428"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4428#p4428"><![CDATA[
Ah very true.  I might missed that one.  Thanks for all your time &amp; help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1025">soyabeaner</a> — Wed Jul 03, 2013 3:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-03T15:11:35-07:00</updated>
<published>2013-07-03T15:11:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4427#p4427</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4427#p4427"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4427#p4427"><![CDATA[
All settings are stored in HKCU\Software\IvoSoft. You said you deleted the ClassicExplorer key, but that doesn't include the start menu settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 03, 2013 3:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[soyabeaner]]></name></author>
<updated>2013-07-03T15:09:43-07:00</updated>
<published>2013-07-03T15:09:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4426#p4426</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4426#p4426"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4426#p4426"><![CDATA[
Rats. I don't use System Restore. I was hoping it wouldn't come to that as my last disk image is a bit behind after some software &amp; setting tweaks that I forgot all the details about and should've documented <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /><br /><br />One more thing before we end this thread: how is it possible that Classic Shell automatically remembered and loaded my previous settings when I uninstalled the old and installed the new version? I never loaded the two XML files myself. I'm wondering where it stores it settings other than HKEY_CURRENT_USER\Software\IvoSoft -- maybe if I could clear it and it will regenerate the default settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1025">soyabeaner</a> — Wed Jul 03, 2013 3:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-03T15:02:40-07:00</updated>
<published>2013-07-03T15:02:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4425#p4425</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4425#p4425"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4425#p4425"><![CDATA[
Everything seems to be in order. I've seen this problem in the past a couple of times, and in all cases it turned out the Active Accessibility system was broken. Unfortunately we weren't able to find the real cause or a fix.<br /><br />I blame CCleaner. Didn't you know Windows is dry-clean only, and not to use any harsh chemicals on it?<br /><br />I think your only option is to try to roll back to an earlier restore point before the damage.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 03, 2013 3:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[soyabeaner]]></name></author>
<updated>2013-07-03T14:57:03-07:00</updated>
<published>2013-07-03T14:57:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4424#p4424</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4424#p4424"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4424#p4424"><![CDATA[
I really hope it's simply a misconfigured or conflicted setting, but here are both of them.<br /><br />-----<br /><br />Other things possibly relevant: <br />1) When I installed Classic Shell, I right-clicked on the installer and selected 'Run as administrator'.  Would that have mattered since my main account is a standard user?<br />2) When I switch my account (with standard user still logged in) to the administrator the Classic Explorer Bar is grayed out / disabled in Windows Explorer's View menu.  If anything, the admin account should have more privileges.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1025">soyabeaner</a> — Wed Jul 03, 2013 2:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-03T14:47:58-07:00</updated>
<published>2013-07-03T14:47:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4423#p4423</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4423#p4423"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4423#p4423"><![CDATA[
OK, export your settings to XML file and attach it here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 03, 2013 2:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[soyabeaner]]></name></author>
<updated>2013-07-03T14:46:01-07:00</updated>
<published>2013-07-03T14:46:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4422#p4422</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4422#p4422"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4422#p4422"><![CDATA[
Yes, all other features have been working. I always disable the breadcrumbs - no problems there. Interesting discovery: I access Internet Explorer options in the Control Panel and found 2 Classic Shell add-ons in the &quot;new&quot; status, so I enabled both of them, log off/on, still no luck.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1025">soyabeaner</a> — Wed Jul 03, 2013 2:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-03T14:29:12-07:00</updated>
<published>2013-07-03T14:29:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4421#p4421</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4421#p4421"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4421#p4421"><![CDATA[
No, Classic Explorer doesn't run on its own. It runs with Explorer.<br />Do any other features work? Like do you have a toolbar? Or can you disable the breadcrumbs?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 03, 2013 2:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[soyabeaner]]></name></author>
<updated>2013-07-03T14:24:36-07:00</updated>
<published>2013-07-03T14:24:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4420#p4420</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4420#p4420"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4420#p4420"><![CDATA[
One other thing I forgot to mention: HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Run --&gt; other than ClassicStartMenu.exe, could there be something else that's missing like ClassicExplorerSettings.exe ?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1025">soyabeaner</a> — Wed Jul 03, 2013 2:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[soyabeaner]]></name></author>
<updated>2013-07-03T14:21:22-07:00</updated>
<published>2013-07-03T14:21:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4418#p4418</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4418#p4418"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4418#p4418"><![CDATA[
Thanks for the super fast reply.<br /><br />Yes, I've also read the FAQ (edited my previous post in between <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />), but I don't quite understand it.  No matter the scenario, it no longer invokes the Classic Shell dialog like it used to.  It previously never failed before the CCleaner incident. Surely if the folder replacement dialog appears from/to the same location then the file dialog would work?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1025">soyabeaner</a> — Wed Jul 03, 2013 2:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-03T14:16:15-07:00</updated>
<published>2013-07-03T14:16:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4417#p4417</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4417#p4417"/>
<title type="html"><![CDATA[Re: Replace File dialog not working anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4417#p4417"><![CDATA[
Have you tried the steps here? <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#explorer_toolbar">http://www.classicshell.net/faq/#explorer_toolbar</a><!-- m --><br />Disabling the start menu from the registry has no effect on the Explorer dialogs. They are separate things.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 03, 2013 2:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[soyabeaner]]></name></author>
<updated>2013-07-03T17:20:27-07:00</updated>
<published>2013-07-03T14:12:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4416#p4416</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4416#p4416"/>
<title type="html"><![CDATA[Replace File dialog not working anymore [SOLVED]]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=874&amp;p=4416#p4416"><![CDATA[
On my Windows 7 x64 system I used to be able to get Classic Shell's replace <strong>file</strong> conflict dialog working. It no longer displays each time I test Windows Explorer by creating a blank file with the same name and attempting to move it to another location with the same-named file. It's a simple, common simulation. I only get the default Windows diaglog. What's odd is Classic Shell's <strong>folder</strong> conflict dialog still works. <br /><br />I think the problem started when I was troubleshooting and temporarily disabled ClassicStartMenu.exe within CCleaner's Startup config. If I'm not mistaken the registry key it's pointing to is [HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Run]<br />&quot;Classic Start Menu&quot;=&quot;C:\\Program Files\\Classic Shell\\ClassicStartMenu.exe&quot;<br /><br />What's strange is I later re-enabled the startup key and rebooted of course, but the file conflict reverts to the Windows native dialog. I've tried the following, each time at least logging off then back on:<br />-resetting the settings to the defaults<br />-manually deleting the registry key itself: HKEY_CURRENT_USER\Software\IvoSoft\ClassicExplorer<br /><br />-clean uninstalling Classic Shell v3.6.7 and then installing the latest v3.6.8 ...which incidentally was very strange since I it retained all my previous settings for both my Classic Shell Start Menu and Explorer! This makes me wonder whether Classic Shell stores additional settings elsewhere in either the registry or system files that I'm not aware of, which I find surprising since I &quot;monitored&quot; all file &amp; registry changes using System Explorer's Snapshot feature before and after I installed Classic Shell initially.<br />-I also read the FAQ <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#explorer_copy">http://www.classicshell.net/faq/#explorer_copy</a><!-- m --> , but I'm not really understanding it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1025">soyabeaner</a> — Wed Jul 03, 2013 2:12 pm</p><hr />
]]></content>
</entry>
</feed>