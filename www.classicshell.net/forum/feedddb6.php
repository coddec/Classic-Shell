<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=592" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-04-28T15:57:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=592</id>
<entry>
<author><name><![CDATA[RNFolsom]]></name></author>
<updated>2013-04-28T15:57:32-07:00</updated>
<published>2013-04-28T15:57:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3057#p3057</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3057#p3057"/>
<title type="html"><![CDATA[Re: For update, check &quot;Create a start menu folder&quot; - yes or ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3057#p3057"><![CDATA[
GauravK:<br /><br />Thanks very much for answering all of my questions!<br /><br />I can now report that my second try replacing Classic Shell (all components) version 3.6.5 by the latest version (3.6.7) did work.  This time I did NOT exit Windows Explorer promptly after clicking the ClassicShell_3_6_7 installation file, but instead I waited until I got a window containing two entries for Windows Explorer (why two, I know not) and an option for ClassicShell to close Windows Explorer (or to reboot, but I didn't try that).  I selected that option, and ClassicShell finished the installation.<br /><br />And none of my Start Menu was altered.<br /><br />Thanks again for all the help.<br /><br />R.N. (Roger) Folsom<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=487">RNFolsom</a> — Sun Apr 28, 2013 3:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-27T01:11:19-07:00</updated>
<published>2013-04-27T01:11:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3034#p3034</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3034#p3034"/>
<title type="html"><![CDATA[Re: For update, check &quot;Create a start menu folder&quot; - yes or ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3034#p3034"><![CDATA[
Don't worry about the XML size. They're alright.<br /><br />A fresh installation also has all 4 components but the Update component was introduced in the past recent few releases, so if you upgraded from a much older version, you may not have had it. &quot;Will be installed on local hard drive&quot; and &quot;Entire feature will be installed on local hard drive&quot; mean one and the same thing in case of Classic Shell because the components do not have sub-components. If it had subcomponents like for example, Microsoft Office has, then &quot;Entire feature....&quot; means all sub-components will be installed. &quot;Will be installed&quot; means just the main component will be installed. Not applicable to Classic Shell - they're the same.<br /><br />&quot;Entire feature will be unavailable&quot; means that component will be uninstalled. All 4 components are independent of each other and you can choose not to install any of them.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Apr 27, 2013 1:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RNFolsom]]></name></author>
<updated>2013-04-27T00:18:28-07:00</updated>
<published>2013-04-27T00:18:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3031#p3031</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3031#p3031"/>
<title type="html"><![CDATA[Re: For update, check &quot;Create a start menu folder&quot; - yes or]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3031#p3031"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />1. 'Create a Start Menu folder' simply means create shortcuts to change settings inside &quot;All Programs&quot; and is a harmless choice whether you set it or not. :) Better to check it so that settings for all components are easily accessible.<br /><br />2. and 3. All Classic Shell settings are preserved upon upgrade and upon uninstall as well. You just need to start the new installer, quickly let it close Explorer and the menu and auto restart it. Everything will be preserved.<br /><br />Nevertheless, it is a good idea to backup all settings if you have spent time customizing the menu. Click the &quot;Backup&quot; button in the Settings of that component (Start Menu, Classic Explorer, Classic IE) to backup settings for that component to an XML file. You can also load that file on another PC to put the same settings there. The settings are stored in the registry at HKEY_CURRENT_USER\Software\IvoSoft\ so exporting that registry key as a backup will be the same thing as saving settings as an XML.<br /></div><br />GauravK:<br /><br />Thanks for the good news that to install an Classic Shell Update I &quot;just need to start the new installer, quickly let it close Explorer and the menu and auto restart it. Everything will be preserved.&quot; I think that I closed Explorer instead of waiting for the installer to close Explorer, which may be why my installation of 3.6.7 failed.<br /><br />Thanks also for the reminder to back up settings for Classic Start Menu, Explorer, and IE9. I have backed them up as XML files (and put the backups into a special folder in partition D:), but each of the three backups is only 1kb in size, which makes me wonder whether my backups are incomplete.<br /><br />In addition to backups, I will also save the registry settings at HKEY_CURRENT_USER\Software\IvoSoft\, even though &quot;exporting that registry key as a backup will be the same thing as saving settings as an XML.&quot;<br /><br />When installing a brand-new Classic Shell, the Classic Shell Setup has three components: Classic Start Menu, Classic Explorer, and Classic IE9. But to update an existing Classic Shell there are those three components, plus a Classic Shell Update component, which &quot;checks periodically for new versions&quot; and has three options:<br />&quot;Will be installed on local hard drive&quot;<br />&quot;Entire feature will be installed on local hard drive&quot;<br />&quot;Entire feature will be unavailable.&quot;<br />Judging from the icons for each of these options, the default apparently is the second option.<br />But what would be the consequences if the first option were selected?<br />And what would be the consequences if the third option were selected?<br /><br />Thanks very much for the help.<br /><br />R.N. (Roger) Folsom<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=487">RNFolsom</a> — Sat Apr 27, 2013 12:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-04-26T13:44:31-07:00</updated>
<published>2013-04-26T13:44:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3024#p3024</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3024#p3024"/>
<title type="html"><![CDATA[Re: For update, check &quot;Create a start menu folder&quot; - yes or ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3024#p3024"><![CDATA[
the size of the xml file, and the amount of time spent customizing in many cases, almost warrants an automatic backup feature that backs up the last 10~ edits (an edit being any 5-15 minute interval that a setting has changed, rather than every single change), and maybe a backup every 24 hour period (save 10 edits here to)<br /><br />not that im requesting this, and users should be in the habbit of backing up things, particularly to an online source, and in cases like this, where its a small file, with alot of time invested into making it.. just like a painting...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Fri Apr 26, 2013 1:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-26T10:59:34-07:00</updated>
<published>2013-04-26T10:59:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3023#p3023</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3023#p3023"/>
<title type="html"><![CDATA[Re: For update, check &quot;Create a start menu folder&quot; - yes or]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3023#p3023"><![CDATA[
1. 'Create a Start Menu folder' simply means create shortcuts to change settings inside &quot;All Programs&quot; and is a harmless choice whether you set it or not. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Better to check it so that settings for all components are easily accessible.<br /><br />2. and 3. All Classic Shell settings are preserved upon upgrade and upon uninstall as well. You just need to start the new installer, quickly let it close Explorer and the menu and auto restart it. Everything will be preserved.<br /><br />Nevertheless, it is a good idea to backup all settings if you have spent time customizing the menu. Click the &quot;Backup&quot; button in the Settings of that component (Start Menu, Classic Explorer, Classic IE) to backup settings for that component to an XML file. You can also load that file on another PC to put the same settings there. The settings are stored in the registry at HKEY_CURRENT_USER\Software\IvoSoft\ so exporting that registry key as a backup will be the same thing as saving settings as an XML.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Apr 26, 2013 10:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RNFolsom]]></name></author>
<updated>2013-04-26T10:10:05-07:00</updated>
<published>2013-04-26T10:10:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3022#p3022</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3022#p3022"/>
<title type="html"><![CDATA[For update, check &quot;Create a start menu folder&quot; - yes or no?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=592&amp;p=3022#p3022"><![CDATA[
On a Win7sp1 laptop, I had previously installed all of the Classic Shell options, version 3.6.5 (using the most classic settings).  I have not been using this laptop recently, but today I did use it and got a notice that version 3.6.7 was available.  I downloaded it, and installed it, but the installation did not take effect.<br /><br />I need to know what to do next.<br /><em><strong><br />Questions:</strong></em>  After opening Windows Explorer to download location of the new version, running the installation file, ignoring the Windows' security warning and selecting the Run button, closing Windows Explorer, clicking the Next button in the Classic Shell Setup Wizard, accepting the license agreement, I get the Custom Setup window (with Classic Explorer, Start Menu, IE9, and Classic Shell Update).<br />At the bottom of the Custom Setup window, the path to my current installation folder is specified.<br /><br /><br />1) That last window has a Check box for &quot;Create a Start Menu Folder.&quot;  In my failed attempt to install version 3.6.7, I <em><strong>DID</strong></em> check that box, even though of course I already have Classic Start Menu installed.<br /><br />1a) What does &quot;Start Menu Folder&quot; mean?  Is it the folder into which Classic Shell will be installed?  Or is it the Start button itself, or some other &quot;Start Menu Folder&quot;?<br /><br />1b) Was I wrong to check the Check box for &quot;Create a Start Menu Folder,?  Is checking it the reason for my failure to install version 3.6.7?  <br /><br />2) As I mentioned above, the Custom Setup window includes a &quot;Classic Shell Update&quot; option.<br />If enabled, does this option tell the installation not to mess up my carefully designed Classic Start Menu?<br />Or does this option tell the installation to include a reminder to announce the availability of a new Classic Shell version (e.g. 3.6.8 or above)?<br /><br />3) I would appreciate any other suggestions to enable me to upgrade to version 3.6.7.  But the one thing I cannot do is uninstall everything, and then do a clean install of version 3.6.7.  I spent at least a full day (maybe more) arranging my start menu the way I wanted it, and I simply don't have time to do that all over again.  So if a clean install is necessary, I will have to stick with 3.6.5, even though 3.6.6 (presumably included in 3.6.7) says that 3.6.6 fixed some bugs.<br /><br />Thanks for any comments, suggestions, or help.<br /><br />R.N. (Roger) Folsom<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=487">RNFolsom</a> — Fri Apr 26, 2013 10:10 am</p><hr />
]]></content>
</entry>
</feed>