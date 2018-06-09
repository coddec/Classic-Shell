<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=99" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-02-13T12:36:03-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=99</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-02-13T12:36:03-07:00</updated>
<published>2014-02-13T12:36:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=10919#p10919</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=10919#p10919"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=10919#p10919"><![CDATA[
For the Classic Start Menu:<br /><br />For current user, the key is HKCU\Software\IvoSoft\ClassicStartMenu\<strong>Settings</strong>.<br />For all users, the Settings subkey is not required. The key is HKLM\SOFTWARE\IvoSoft\<strong>ClassicStartMenu</strong><br /><br />Same rule applies for Classic Explorer and Classic IE registry keys.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Feb 13, 2014 12:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mbrinkho]]></name></author>
<updated>2014-02-13T12:23:36-07:00</updated>
<published>2014-02-13T12:23:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=10918#p10918</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=10918#p10918"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=10918#p10918"><![CDATA[
Having a heck of a time getting this to work. I just want to set some registry keys so that all users get the same default config when they login for the first time, I don't necessarily care if they can change them or not. I tried exporting the HKCU:Software\IvoSoft key and modifying the .REG file so that it imports into HKLM and that didn't do it [step removed]. I'd prefer not to use group policy if at all possible. Any ideas?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2996">mbrinkho</a> — Thu Feb 13, 2014 12:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-25T09:02:18-07:00</updated>
<published>2013-01-25T09:02:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=554#p554</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=554#p554"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=554#p554"><![CDATA[
It should make no difference whether the reg is merged before or after because when uninstalled, the settings are left and preserved in the registry. So a clean first-time install should be the same as a reinstall. Make sure you export the settings with &quot;ShowedStyle&quot; set to 1 in HKCU so you don't get prompted for the style.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Jan 25, 2013 9:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dvkrgr]]></name></author>
<updated>2013-01-25T08:05:20-07:00</updated>
<published>2013-01-25T08:05:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=553#p553</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=553#p553"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=553#p553"><![CDATA[
When pushing out via user logon GPO, should ClassicStart be installed before or after the .reg?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=182">dvkrgr</a> — Fri Jan 25, 2013 8:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-22T19:11:54-07:00</updated>
<published>2013-01-22T19:11:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=485#p485</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=485#p485"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=485#p485"><![CDATA[
Yes, this is stored in the ShowedStyle value.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jan 22, 2013 7:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dvkrgr]]></name></author>
<updated>2013-01-22T16:10:29-07:00</updated>
<published>2013-01-22T16:10:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=479#p479</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=479#p479"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=479#p479"><![CDATA[
By importing the registry hive, does this also disable the first run of settings dialog opening with new users?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=182">dvkrgr</a> — Tue Jan 22, 2013 4:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-18T18:28:06-07:00</updated>
<published>2013-01-18T18:28:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=385#p385</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=385#p385"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=385#p385"><![CDATA[
XML file is same a registry settings. You can export the settings from HKCU\Software\IvoSoft key to export all Classic Shell settings. If you wish to export only Start Menu settings, export only this branch:<br />HKCU\Software\IvoSoft\ClassicStartMenu\Settings.<br /><br />Finally, if you wish to make these settings the same for all user accounts on one PC, export them from HKCU\Software\IvoSoft\ClassicStartMenu\Settings and add them to <strong>HKEY_LOCAL_MACHINE</strong>\Software\IvoSoft\ClassicStartMenu (Note HKLM instead of HKCU and the lack of a \Settings key at the end).<br /><br />If you merge them in HKLM, the settings are locked for administrators. They can't be modified from settings GUI by users.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Jan 18, 2013 6:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jep]]></name></author>
<updated>2013-01-18T09:28:53-07:00</updated>
<published>2013-01-18T09:28:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=366#p366</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=366#p366"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=366#p366"><![CDATA[
I had read that different versions of classic shell could change the registry structure and so it wasn't the best way to go.  I perhaps incorrectly assumed the xml would be a little more generic and less prone to that.  What I'm actually thinking now is I just need a regular job to overwrite the current settings with the one from the file on the network.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=155">jep</a> — Fri Jan 18, 2013 9:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-18T02:03:42-07:00</updated>
<published>2013-01-18T02:03:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=356#p356</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=356#p356"/>
<title type="html"><![CDATA[Re: Allow installer to take command line option for config x]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=356#p356"><![CDATA[
All Classic Shell settings are stored in the registry at HKEY_CURRENT_USER\Software\IvoSoft. So you can back up that key and silently merge it. The XML is only there as a manual way for novice users to easily restore the settings.<br /><br />Note that <strong>changing the registry settings directly while the Start Menu is running isn't supported</strong>. So you can right click the Start button -&gt; Exit. Merge a set of exported .REG settings and start the menu again from C:\Program Files\Classic Shell\ClassicStartMenu.exe.<br /><br />You can also automate this using a batch file:<br /><br />&quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -exit<br />Regedit /s &quot;&lt;Path to REG file.reg&gt;&quot;<br />&quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Jan 18, 2013 2:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jep]]></name></author>
<updated>2013-01-18T00:06:09-07:00</updated>
<published>2013-01-18T00:06:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=343#p343</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=343#p343"/>
<title type="html"><![CDATA[Allow installer to take command line option for config xml]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=99&amp;p=343#p343"><![CDATA[
It would be helpful if you could pass an xml file to the installer to have it load that just like it would be if you chose &quot;Load from XML file&quot;.  That, along with silent install options that would let you configure stuff like whether to add a start menu folder, auto-check for updates, etc. would make it a lot easier to install on lots of machines on our network.<br /><br />Thanks for such a great app.  The one good thing about MS removing the start menu in win8 was that it brought me to an app like this.  Love my new totally configured start menu.  Much better than MS's choices.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=155">jep</a> — Fri Jan 18, 2013 12:06 am</p><hr />
]]></content>
</entry>
</feed>