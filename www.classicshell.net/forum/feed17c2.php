<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4999" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-09-29T02:58:17-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4999</id>
<entry>
<author><name><![CDATA[sadonly]]></name></author>
<updated>2015-09-29T02:58:17-07:00</updated>
<published>2015-09-29T02:58:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22618#p22618</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22618#p22618"/>
<title type="html"><![CDATA[Re: Apply start menu settings and customizations to All User]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22618#p22618"><![CDATA[
hi. <br />maybe an option to backup restore setting or various settings to server side by using forum account, by example, would be a better way.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11630">sadonly</a> — Tue Sep 29, 2015 2:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-09-16T07:01:05-07:00</updated>
<published>2015-09-16T07:01:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22253#p22253</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22253#p22253"/>
<title type="html"><![CDATA[Re: Apply start menu settings and customizations to All User]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22253#p22253"><![CDATA[
Yes, to eliminate initial display of settings window, there is a Group Policy setting called <strong>Menu style</strong> under Computer Configuration branch.<br /><br />You can also choose to edit registry directly instead. <br />For a single user account which is currently logged in, create a DWORD value called &quot;ShowedStyle2&quot; in <strong>HKCU</strong>\Software\IvoSoft\ClassicStartMenu and set it to 1. <br /><br />For the HKLM branch (which affects <strong><span style="text-decoration: underline">all users</span></strong>), to suppress the initial opening of the settings, create a new string value <strong>MenuStyle_Default</strong> in  <strong>HKLM</strong>\Software\IvoSoft\ClassicStartMenu and set it to &quot;Classic1&quot;, &quot;Classic2&quot; or &quot;Win7&quot; depending on which style you want to be the default. <br /><br />The menu must be restarted after changing registry settings. You can exit it from the command line using: &quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -exit<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Sep 16, 2015 7:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ath0mps0]]></name></author>
<updated>2015-09-16T06:30:07-07:00</updated>
<published>2015-09-16T06:30:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22252#p22252</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22252#p22252"/>
<title type="html"><![CDATA[Re: Apply start menu settings and customizations to All User]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=22252#p22252"><![CDATA[
Is there a way to eliminate the initial display of the Classic Shell Settings page for all users?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11529">ath0mps0</a> — Wed Sep 16, 2015 6:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-17T08:36:42-07:00</updated>
<published>2015-08-17T08:36:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=21305#p21305</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=21305#p21305"/>
<title type="html"><![CDATA[Re: Apply start menu settings and customizations to All User]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=21305#p21305"><![CDATA[
Yes there are two options to do this. Either edit the Registry or use Group Policy.<br /><br />1. For editing the Registry so the configuration can be applied to all users (and is enforced/locked down so users cannot modify it), you have to copy the settings from the HKCU\Software\IvoSoft branch to HKLM\Software\IvoSoft branch. Look up the settings in HKCU branch (current user) and copy them to HKLM to affect all users. But the Registry keys for settings in HKCU and HKLM are slightly different.<br /><br />For HKCU, the settings are at HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Settings<br />For HKLM, the settings are at HKEY_LOCAL_MACHINE\Software\IvoSoft\ClassicStartMenu<br /><br />Modify a setting in the Settings dialog to know its Registry name and value. Look it up in HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Settings and then create the same configuration at HKEY_LOCAL_MACHINE\Software\IvoSoft\ClassicStartMenu (note that there is no 'Settings' subkey for HKLM).<br /><br />Sometimes you may want to lock a setting to its default value, but you don't know what the default value is. Then create a DWORD value and set it to 0xDEFA.<br /><br />In some cases you may not want to lock the value for all users, but simply modify the initial value of the setting. In such case add &quot;_Default&quot; to the name of the value. For example if you want to context menu to be disabled by default but still allow the users to enable it if they wish, create a DWORD value named &quot;EnableContextMenu_Default&quot; and set it to 0.<br /><br /><strong>This is also explained in the 'Administrative Settings' section of the documentation. Right click the Start button and click Help.</strong><br /><br />2. Another method is Group Policy. The file, C:\Program Files\Classic Shell\PolicyDefinitions.zip includes the policy definitions. If you have an Active Directory domain, extract the files to %logonserver%\sysvol\%userdnsdomain%\policies\PolicyDefinitions\ or whatever your Group Policy Central Store is. For Local Group Policy, extract them to C:\Windows\PolicyDefinitions folder.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Aug 17, 2015 8:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[heisey]]></name></author>
<updated>2015-08-17T06:53:55-07:00</updated>
<published>2015-08-17T06:53:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=21302#p21302</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=21302#p21302"/>
<title type="html"><![CDATA[Apply start menu settings and customizations to All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4999&amp;p=21302#p21302"><![CDATA[
Hi all,<br /><br />Is there a way to apply all Classic Start Menu customizations and settings changes made to one user account to all user accounts rather than doing them individually (Windows 7 Enterprise)?<br /><br />TIA for any advice,<br /><br />Laura<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11194">heisey</a> — Mon Aug 17, 2015 6:53 am</p><hr />
]]></content>
</entry>
</feed>