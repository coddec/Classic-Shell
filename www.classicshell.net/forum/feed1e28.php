<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=1050" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-09-19T12:02:25-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=1050</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-19T12:02:25-07:00</updated>
<published>2013-09-19T12:02:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6701#p6701</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6701#p6701"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6701#p6701"><![CDATA[
Maybe the help file can stress the difference that when it's under HKCU, only then it is under a \Settings subkey? It is something the user can easily miss. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Sep 19, 2013 12:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-09-19T11:53:27-07:00</updated>
<published>2013-09-19T11:53:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6700#p6700</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6700#p6700"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6700#p6700"><![CDATA[
The settings were moved in HKCU so admins can lock them using key permissions. They were not moved in HKLM because that's not needed and for backwards compatibility.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Sep 19, 2013 11:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sconstantine]]></name></author>
<updated>2013-09-19T11:49:47-07:00</updated>
<published>2013-09-19T11:49:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6699#p6699</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6699#p6699"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6699#p6699"><![CDATA[
Ah ha, thanks; I was mimicking the HKCU config into HKLM which has that DWORD under a &quot;Settings&quot; subkey (that wasn't clear to me in the CHM).  Any particular reason they're not identical?<br /><br />Thx again, with this help I got the config I was searching for:  Not auto starting by default for everyone<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1620">sconstantine</a> — Thu Sep 19, 2013 11:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-19T11:30:21-07:00</updated>
<published>2013-09-19T11:30:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6698#p6698</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6698#p6698"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6698#p6698"><![CDATA[
You will either need to create this key to not auto start it for all users (this will lock the &quot;AutoStart&quot; setting for all users)<br /><br />Windows Registry Editor Version 5.00<br />[HKEY_LOCAL_MACHINE\Software\IvoSoft\ClassicStartMenu]<br />&quot;AutoStart&quot;=dword:00000000<br /><br />OR<br /><br />You can add this to change the default autostart for all users to off but still allow your users to autostart it if they want via the Settings dialog:<br /><br />Windows Registry Editor Version 5.00<br />[HKEY_LOCAL_MACHINE\Software\IvoSoft\ClassicStartMenu]<br />&quot;AutoStart_Default&quot;=dword:00000000<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Sep 19, 2013 11:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-09-19T11:12:31-07:00</updated>
<published>2013-09-19T11:12:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6697#p6697</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6697#p6697"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6697#p6697"><![CDATA[
Yes, you can set that setting in HKLM and then it will apply to all users. Then you can find an alternative way to launch for admins.<br />Or you can simply change the default to 0, which will disable it for everybody (by default) but then enable it manually for the users who care. Look at the Administrative Settings section in the help for the new feature that allows you to tweak the defaults.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Sep 19, 2013 11:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sconstantine]]></name></author>
<updated>2013-09-19T10:58:10-07:00</updated>
<published>2013-09-19T10:58:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6695#p6695</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6695#p6695"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6695#p6695"><![CDATA[
I saw that but unfortunately this approach now deprecates the previous ability to disable system wide for all users: new and old.<br /><br />The goal in my circumstance is to install on a 2012 RDS system but disable by default and only present the Start Menu to administrators or select users with a manual startup shortcut. With this new design approach in 3.9.x+, I would have to gain password access and log into every single user session once and manually select to disable or enable (which isn't a very viable option). <br /><br />Is there an HKLM reg I can set to disable system wide, or more details you can provide on the new mechanism 3.9.x uses for instantiation?<br /><br />(P.S. Thanks for the incredible speed and attention you provide the forums as well)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1620">sconstantine</a> — Thu Sep 19, 2013 10:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-09-19T10:48:47-07:00</updated>
<published>2013-09-19T10:48:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6694#p6694</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6694#p6694"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6694#p6694"><![CDATA[
There is a new setting &quot;Start automatically for this user&quot; in the General Behavior tab.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Sep 19, 2013 10:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sconstantine]]></name></author>
<updated>2013-09-19T10:45:03-07:00</updated>
<published>2013-09-19T10:45:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6693#p6693</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6693#p6693"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=6693#p6693"><![CDATA[
Ivo, how do we disable per user in the 3.9.x+ versions?  The service is no longer present to disable and start via per user shortcut.<br /><br />Many thanks!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1620">sconstantine</a> — Thu Sep 19, 2013 10:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-06T22:00:47-07:00</updated>
<published>2013-08-06T22:00:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5466#p5466</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5466#p5466"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5466#p5466"><![CDATA[
Versions prior to 3.9.0 use a service. Version 3.9.0 uses a different method of launching on Windows 8, but it also requires admin access to set up.<br /><br />As I said, if you want to run the start menu without being an admin, go ahead and copy the files, then find a way to launch ClassicStartMenu.exe somehow. One way is to put a shortcut in the Startup folder. It will start with some delay (on Windows 8 and up), but that's the best you can do as a standard user. If you are on Windows 7 then there won't even be a delay.<br /><br />As for GUI editor for admin settings, it is possible but a lot of work. I am not interested in working on this at the moment. Most admins require locking down only few specific settings and they are usually comfortable editing the registry.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 06, 2013 10:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[standarduser]]></name></author>
<updated>2013-08-06T21:38:57-07:00</updated>
<published>2013-08-06T21:38:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5465#p5465</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5465#p5465"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5465#p5465"><![CDATA[
I don't understand. There is no service in the beta version I am using but it seems to start just fine. What difference does it make for starting up if it is installed to C:\Program Files\Classic Shell or C:\Users\username\AppData\Roaming\Classic Shell? I know I can run the Start menu as standard user. I want to install it on computers where I don't have admin access if I install only the menu. Also, I want an admin settings mode with a parameter ClassicStartMenu.exe -adminsettings, so it will modify HKLM settings after elevating.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1279">standarduser</a> — Tue Aug 06, 2013 9:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-06T07:59:13-07:00</updated>
<published>2013-08-06T07:59:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5448#p5448</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5448#p5448"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5448#p5448"><![CDATA[
Classic Shell is no ordinary software. Particularly on Windows 8 it requires admin access, as it needs to install a service.<br />You can certainly run the start menu as a normal user. Just copy the binaries somewhere and launch ClassicStartMenu.exe. It will work find on Windows 7. However on Windows 8 I am unaware of any way to launch a program right after login without requiring UAC. There is always a delay of 5-10 seconds.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 06, 2013 7:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-08-06T06:16:57-07:00</updated>
<published>2013-08-06T06:16:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5444#p5444</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5444#p5444"/>
<title type="html"><![CDATA[Re: Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5444#p5444"><![CDATA[
The new version doesn't actually support vista anymore <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Aug 06, 2013 6:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[standarduser]]></name></author>
<updated>2013-08-06T04:06:48-07:00</updated>
<published>2013-08-06T04:06:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5437#p5437</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5437#p5437"/>
<title type="html"><![CDATA[Modify it for standard user and admins]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1050&amp;p=5437#p5437"><![CDATA[
Hi. First, I would like to congratulate on amazing program. It is excellently made.<br /><br />I use only Start menu part of it and do not need other parts. How to install Classic Shell for standard user to %appdata% directory if only Start menu is selected during install? (I presume installing other shell extension dlls is why it requires admin permissions?)<br /><br />Ever since Windows 7, Microsoft encourages standard user software installation. Windows Installer 5.0 has features to make the same package for standard user and all users (admin): <!-- m --><a class="postlink" href="http://blogs.msdn.com/b/windows_installer_team/archive/2009/09/02/authoring-a-single-package-for-per-user-or-per-machine-installation-context-in-windows-7.aspx">http://blogs.msdn.com/b/windows_install ... ows-7.aspx</a><!-- m --><br /><br />Some other programs install this way. e.g. Google Chrome, 7 Taskbar Tweaker, StartIsBack. So I want to request feature to install without UAC prompt to C:\Users\username\AppData\Roaming\ClassicShell. I installed beta version and noticed this directory already exists but it does not contain program files, only some logs and database files.<br /><br />Classic Shell setup should be modified to install for current logged in user without UAC prompt or all users. I also want to request GUI for admin settings. So if I give it CSM -adminsettings it will open settings window with UAC prompt and will modify settings in HKLM. As admin, I prefer settings UI to reg editing as it is hard to understand reg values.<br /><br />I thought that because Classic Shell supported Vista, per user installs were not supported as Vista shell does not have per user extensibility points. New version beta which is only for Windows 7 and up is good opportunity to change this if only Start menu is installed.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1279">standarduser</a> — Tue Aug 06, 2013 4:06 am</p><hr />
]]></content>
</entry>
</feed>