<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=626" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-08T22:57:30-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=626</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-08T22:57:30-07:00</updated>
<published>2013-07-08T22:57:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=4614#p4614</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=4614#p4614"/>
<title type="html"><![CDATA[Re: disabling kybd shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=4614#p4614"><![CDATA[
@HammyBits, you can edit the MSI yourself it's easy.<br />1. Download the Windows Installer 4.5 SDK from here: <!-- m --><a class="postlink" href="http://download.microsoft.com/download/7/c/4/7c426dfc-46e2-4ded-bab4-3b33600ad7d1/msi45sdk.msi">http://download.microsoft.com/download/ ... i45sdk.msi</a><!-- m --> and install it.<br />2. Go to C:\Program Files\Windows Installer 4.5 SDK\Tools and double click on 'Orca.msi' to install it.<br />3. You can save the Orca installer somewhere and uninstall the MSI 4.5 SDK. You don't need the SDK any more if you don't use the other tools besides Orca.<br />4. Download the Fix It MSI for KB216893 (<!-- m --><a class="postlink" href="http://support.microsoft.com/kb/216893">http://support.microsoft.com/kb/216893</a><!-- m -->). Save it somewhere.<br />5. Start Orca from the Start menu and open the MSI file you downloaded for the Fix It in Orca.<br />6. Orca will load that MSI and show its table. Locate &quot;LaunchCondition&quot;.<br />7. In the right column with &quot;LaunchCondition&quot; highlighted, select the first row which is called:<br />((VersionNT=500 OR VersionNT=502 OR VersionNT=600 OR VersionNT=601) AND MsiNTProductType&lt;&gt;1) OR ((VersionNT=501 OR VersionNT=502 OR VersionNT=500 OR VersionNT=600 OR VersionNT=601) AND MsiNTProductType=1)<br /><br />and delete that row by pressing the Del key on the keyboard.<br />8. Save the MSI and close Orca.<br />9. Now it should install on Windows 8.<br /><br />Note: Instead of deleting that row, you can also add 'OR VersionNT=602' for Windows 8 but you will have to update it again for the next release of Windows, so it's better to just remove the check.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jul 08, 2013 10:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[HammyBits]]></name></author>
<updated>2013-07-08T21:24:03-07:00</updated>
<published>2013-07-08T21:24:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=4613#p4613</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=4613#p4613"/>
<title type="html"><![CDATA[Re: disabling kybd shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=4613#p4613"><![CDATA[
<strong>GauravK,<br /><br />Do you have a means of enabling the windows key in the same fashion? I used your method, and it succeeded (thanks!). Now I have a keyboard that can toggle the key as<br />enabled and disabled so I would like to be able to use it again.</strong> <img src="http://www.classicshell.net/forum/images/smilies/icon_question.gif" alt=":?:" title="Question" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1067">HammyBits</a> — Mon Jul 08, 2013 9:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Joedunn6]]></name></author>
<updated>2013-05-11T02:14:11-07:00</updated>
<published>2013-05-11T02:14:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3178#p3178</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3178#p3178"/>
<title type="html"><![CDATA[Re: disabling kybd shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3178#p3178"><![CDATA[
Thanks for the mod ... will try it this weekend and update you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=682">Joedunn6</a> — Sat May 11, 2013 2:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-05-11T01:19:07-07:00</updated>
<published>2013-05-11T01:19:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3177#p3177</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3177#p3177"/>
<title type="html"><![CDATA[Re: disabling kybd shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3177#p3177"><![CDATA[
I modded that Fix It's MSI using Orca to remove the OS check. Try it now: <!-- m --><a class="postlink" href="https://www.dropbox.com/s/fzcj3ub7869tb0t/MicrosoftFixit50465.msi">https://www.dropbox.com/s/fzcj3ub7869tb ... t50465.msi</a><!-- m --> It should install on Windows 8 as well. A restart may be required to fully disable the Win key.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat May 11, 2013 1:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Joedunn6]]></name></author>
<updated>2013-05-06T05:11:37-07:00</updated>
<published>2013-05-06T05:11:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3139#p3139</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3139#p3139"/>
<title type="html"><![CDATA[Re: disabling kybd shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3139#p3139"><![CDATA[
Guaravk, <br />  <br />Tks for the reply. I found the Microsoft tip last week, tried running the &quot;Fix It&quot; but according to MS the fix and code does not apply to my OS Window 8. <br />  <br />Also, I tried the regedit &quot;NoWinKeys&quot; fix and the results are as follows: <br />  <br />Windows Key  Display or hide the Start screen ..... Disabled<br />Windows Key + F1 Open Windows Help and Support ..... Disabled<br />Windows Key + C Open the Charms ..... Still Working<br />Windows Key + D Display and hide the desktop ..... Disabled<br />Windows Key + E Open Computer ..... Disabled<br />Windows Key + F Open Charm and search for files ..... Disabled<br />Windows Key + I Open the Settings charm ..... Still Working<br />Windows Key + K Open the Devices charm ..... Still Working<br />Windows Key + L Lock your PC or switch users ..... Still Working<br />Windows Key + M Minimize all windows ..... Disabled<br />Windows Key + O Lock device orientation ..... Disabled<br />Windows Key + R Open the Run dialog box ..... Disabled<br />Windows Key + U Open Ease of Access Center ..... Still Working<br />Windows Key + W Open Charm and search for settings ..... Disabled<br />Windows Key + PAUSE  Display the Sys Properties dialog box ..... Disabled<br />Windows Key + SHIFT M  Restore minimized windows ..... Disabled<br />Windows Key + ▲ Maximize the desktop window ..... Disabled<br />Windows Key + ▼ Minimize the desktop window ..... Disabled<br />Windows Key + ALT ENTER  Open Taskbar Properties ..... Still Working<br />Windows Key + + Zoom in using Magnifier ..... Disabled<br />Windows Key + - Zoom out using Magnifier ..... Disabled<br />Windows Key + ESC  Exit Magnifier ..... Disabled <br />  <br />Any suggestion? <br />  <br />Tks <br />  <br />Joe<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=682">Joedunn6</a> — Mon May 06, 2013 5:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-05-05T21:37:54-07:00</updated>
<published>2013-05-05T21:37:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3138#p3138</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3138#p3138"/>
<title type="html"><![CDATA[Re: disabling kybd shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3138#p3138"><![CDATA[
Make sure you are adding NoWinKeys correctly. To disable it for all users, it's to be added at HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Policies\Explorer<br /><br />DWORD Value 1: NoWinKeys<br /><br />You also need to logoff and login back, only then Winkeys will be disabled.<br /><br />To completely disable the Windows key, see <!-- m --><a class="postlink" href="http://support.microsoft.com/kb/216893">http://support.microsoft.com/kb/216893</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun May 05, 2013 9:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Joedunn6]]></name></author>
<updated>2013-05-05T19:47:07-07:00</updated>
<published>2013-05-05T19:47:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3137#p3137</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3137#p3137"/>
<title type="html"><![CDATA[disabling kybd shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=626&amp;p=3137#p3137"><![CDATA[
Hi Everyone,<br /><br />Recently installed Classic Start Menu and it is working great. I was wondering if anyone can suggest a solution to disabling kybd shortcuts. I've recent tried add the Key &quot;NoWinKeys&quot; DWORD Value=1 to regedit but to no avail. The change is for my Aunt who is having problems hitting the WinKey, Ctrl, and Alt. Biggest problem is she hits WIN along with the Caps key because her hand trembles. As an example typing Upper case C results in the Metro Charm being displayed and R displays the Run box.<br /><br />Any suggestions?<br /><br />Joe<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=682">Joedunn6</a> — Sun May 05, 2013 7:47 pm</p><hr />
]]></content>
</entry>
</feed>