<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=413" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-03-22T17:58:51-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=413</id>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-22T17:58:51-07:00</updated>
<published>2013-03-22T17:58:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2183#p2183</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2183#p2183"/>
<title type="html"><![CDATA[Re: Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2183#p2183"><![CDATA[
thats cool.. <br /><br />interesting occurrence..<br /><br />the Process I see in my taskmanager is called &quot;ClassicStartMenu.exe&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Fri Mar 22, 2013 5:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ib_ghs]]></name></author>
<updated>2013-03-22T15:31:33-07:00</updated>
<published>2013-03-22T15:31:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2180#p2180</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2180#p2180"/>
<title type="html"><![CDATA[Re: Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2180#p2180"><![CDATA[
Sorted.<br />Conflict with AMD Radeon Graphics &quot;Catalyst Control Centre&quot;.<br />Specific setting: Desktop Manager &gt; Dialog Control &gt; Enable Dialog Repositioning. Unchecking this box allowed normal function of Classic Shell Classic Explorer file copy dialogs.<br /><br />Extract from Help File:<br />&quot;The HydraVision &gt; Desktop Manager &gt; Dialog Control area contains options for controlling where child dialogs for an application appear on screen. <br />Select the desired option:<br /><br />    Show on preferred display—Opens dialogs on a specific display. For displays running in extended desktop mode, a drop-down list becomes available, allowing you to select the appropriate target display. For display groups, dialogs open in the preferred display set for the group. For more information, see Setting the Preferred Display.<br />    Show on application's display—Opens dialogs on the display containing the parent application.&quot;<br /><br />Tenzen, thank you for your suggestions. For information: I cannot find a process or service in Task Manager for Classic Shell, even if show processes for all users.  Similarly, only one entry in program wizard.  Had already tried uninstall, reboot, reinstall as admin.<br /><br />Also, used Nirsoft Shell Extension View and Shell Menu View, and Autoruns to disable all non Microsoft shell extensions. Didn't solve conflict.<br /><br />Then ran MalwareBytes and TDSSKiller, machine was clean.<br /><br />Not sure what made me think of playing with the Video driver settings.  I had a conflict with hotkeys on another machine with the Catalyst Control Centre.  So credit to you for triggering the idea.<br /><br />Many thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=483">ib_ghs</a> — Fri Mar 22, 2013 3:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-22T02:36:58-07:00</updated>
<published>2013-03-22T02:36:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2163#p2163</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2163#p2163"/>
<title type="html"><![CDATA[Re: Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2163#p2163"><![CDATA[
maybe also check to see if you dont have any other 3rd party Shell extensions installed in Explorer<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Fri Mar 22, 2013 2:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-22T02:34:35-07:00</updated>
<published>2013-03-22T02:34:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2162#p2162</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2162#p2162"/>
<title type="html"><![CDATA[Re: Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2162#p2162"><![CDATA[
maybe check your task manager and see that only one instance of classic shell is running and check that only one program is installed in ur appwiz.cpl<br /><br />if not, I'd try uninstalling classic shell, restarting, then re-installing it<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Fri Mar 22, 2013 2:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ib_ghs]]></name></author>
<updated>2013-03-21T23:47:35-07:00</updated>
<published>2013-03-21T23:47:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2155#p2155</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2155#p2155"/>
<title type="html"><![CDATA[Re: Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2155#p2155"><![CDATA[
Thank you for suggestions<br /><br />&quot;Replace File Conflict Dialog&quot; and &quot;Replace Folder Conflict Dialog&quot; and what do you have there? - Both are checked<br /><br />Does it happen every time, and for all kinds of files? - Yes<br /><br />Try disabling the feature and do the copy again using only the Windows 7 UI. See if there are any abnormalities. <br />- No, works normally with W7, dialog only comes up once. Selecting the Classic Explorer options again and the Xp-style dialog comes up. If you click 'Yes' to file copy/move, the dialog comes up a second time. If click 'Yes' again, the operation occurs successfully.<br /><br />Problem happens with all users on machine, including administrator,<br /><br />IB<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=483">ib_ghs</a> — Thu Mar 21, 2013 11:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-21T22:23:00-07:00</updated>
<published>2013-03-21T22:23:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2154#p2154</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2154#p2154"/>
<title type="html"><![CDATA[Re: Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2154#p2154"><![CDATA[
I haven't seen the behavior you describe.<br />Does it happen every time, and for all kinds of files?<br />Basically if the Classic Shell dialog shows up twice that means the Windows dialog also tries to appear twice.<br />Try disabling the feature and do the copy again using only the Windows 7 UI. See if there are any abnormalities.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Mar 21, 2013 10:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-21T22:19:27-07:00</updated>
<published>2013-03-21T22:19:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2153#p2153</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2153#p2153"/>
<title type="html"><![CDATA[Re: Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2153#p2153"><![CDATA[
i actually prefer the Windows 7 one, so i deselected those<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Mar 21, 2013 10:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-21T22:14:27-07:00</updated>
<published>2013-03-21T22:14:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2152#p2152</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2152#p2152"/>
<title type="html"><![CDATA[Re: Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2152#p2152"><![CDATA[
go to the &quot;File Operation&quot; tab, and look at &quot;Replace File Conflict Dialog&quot; and &quot;Replace Folder Conflict Dialog&quot; and what do you have there?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Mar 21, 2013 10:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ib_ghs]]></name></author>
<updated>2013-03-21T00:17:33-07:00</updated>
<published>2013-03-21T00:17:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2129#p2129</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2129#p2129"/>
<title type="html"><![CDATA[Win 7 64bit Replace File Conflict Dialog - appears twice]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=413&amp;p=2129#p2129"><![CDATA[
Win 7 64 bit, Classic Explorer 3.6.5<br />Default settings for File Operation<br /><br />When copying files to a folder where they already exist, the XP-style conflict box comes up &quot;Confirm File Replace&quot;. If you click 'Yes', the dialog box comes up a second time. If you click 'Yes' the copy occurs. If you click 'More...' after the first dialog box appears, the Win 7 Copy File dialog comes up behind the Xp-style Confirm File Replace dialog, and is partly hidden by the Xp-Style box. However, if you click 'More...' after the second XP-style conflict box comes up &quot;Confirm File Replace&quot;, the 'More...' button doesn't work and the file copy fails - all the dialog boxes just close.<br /><br />Have tried uninstalling and reinstalling as Admin. Add-ins enabled in IE9/IE10. Have not deleted any registry settings after uninstalling/reinstalling - some settings seem to be remembered after reinstall.<br />Have tried changing Classic Explorer settings: 'Always show more details', 'Delay for more details', 'Enable only in Explorer'.<br />Have another identical computer, Classic explorer behaviour is normal. So seems to be a problem with just this computer.<br /><br />Any advice please?<br />IB<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=483">ib_ghs</a> — Thu Mar 21, 2013 12:17 am</p><hr />
]]></content>
</entry>
</feed>