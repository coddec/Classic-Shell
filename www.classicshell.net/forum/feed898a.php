<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=760" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-06-17T06:27:33-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=760</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-17T06:27:33-07:00</updated>
<published>2013-06-17T06:27:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=760&amp;p=3757#p3757</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=760&amp;p=3757#p3757"/>
<title type="html"><![CDATA[Re: Pin to CSM]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=760&amp;p=3757#p3757"><![CDATA[
The one with the blue Pin icon is the older mod. To uninstall the changes made by the context menu mod, merge this reg (paste into Notepad, save as .REG and merge it). Then, delete makelink.exe and shellexecute.exe from C:\Windows if you no longer need them.<br /><br />----- Begin copying from line below -----<br />Windows Registry Editor Version 5.00<br /><br />[-HKEY_CURRENT_USER\Software\Classes\*\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\AllFileSystemObjects\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\Drive\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\lnkfile\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\InternetShortcut\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\Microsoft.Website\Shell\PintoClassicStartMenu]<br />----- Stop copying at line above -----<br /> <br />The Start Menu in Classic Shell 4.0 now has a setting called &quot;Pinned Programs folder&quot; on the 'Main Menu' tab, to use a separate Pinned folder for pinning shortcuts instead of the old Start Menu folder. If you change the option back to use the old Start menu folder, then they will disappear from within All Programs and you don't have to repin them.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jun 17, 2013 6:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[streetwolf]]></name></author>
<updated>2013-06-17T05:45:08-07:00</updated>
<published>2013-06-17T05:45:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=760&amp;p=3755#p3755</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=760&amp;p=3755#p3755"/>
<title type="html"><![CDATA[Pin to CSM]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=760&amp;p=3755#p3755"><![CDATA[
First off I installed CSM 3.9 over the production version. A one column display still shows all the programs I added. A two column display shows no programs on the left side. However, under 'All Programs' they are all still there and all I need is to pin them to the CSM start menu to get them back.<br /><br />One problem though. I previously installed the mod under the production CSM that added this feature. It appears that 3.9 has this built in as I now have two pin to CSM. One has a pin icon the other one doesn't. The one with the pin icon pins the program to the top of the 'All Programs' list creating a duplicate. The one without the pin icon places the program on the left side of a two column display. I assume the one with the pin icon is new to 3.9 and the other one is the mod. Seems to me the mod is working as it should while the other one isn't.<br /><br /><br />**** Just found the option 'Pinned Programs Folder' which appears to place the program where I want it to go.  So I guess I can get rid of the mod?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=476">streetwolf</a> — Mon Jun 17, 2013 5:45 am</p><hr />
]]></content>
</entry>
</feed>