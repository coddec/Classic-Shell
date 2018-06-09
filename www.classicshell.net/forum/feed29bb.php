<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4441" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-04-04T12:19:59-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4441</id>
<entry>
<author><name><![CDATA[AKsarben]]></name></author>
<updated>2015-04-04T12:19:59-07:00</updated>
<published>2015-04-04T12:19:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18615#p18615</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18615#p18615"/>
<title type="html"><![CDATA[Re: Create link to System Restore in Classic Shell programs?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18615#p18615"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />You can simply paste the shortcut you created inside the following folder to include it inside the Start Menu:<br />C:\ProgramData\Microsoft\Windows\Start Menu\Programs\System Tools<br /></div><br /><br />Many thanks! That went well AFTER I went into the control panel and File Explorer - View and made sure to show hidden files and folder and drives. THEN the first part showed up..&quot;ProgramData&quot; Also another folder I had to open to get there (which may be endemic to Windows 10) was this path: C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Windows Accessories\System Tools and in there is where I dropped the copy/paste shortcut to &quot;System Restore&quot;<br /><br />Why did Microsoft not inculde this in the lineup? Seems like a very nice shortcut to have!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9880">AKsarben</a> — Sat Apr 04, 2015 12:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-04-04T10:04:55-07:00</updated>
<published>2015-04-04T10:04:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18610#p18610</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18610#p18610"/>
<title type="html"><![CDATA[Re: Create link to System Restore in Classic Shell programs?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18610#p18610"><![CDATA[
You can simply paste the shortcut you created inside the following folder to include it inside the Start Menu:<br />C:\ProgramData\Microsoft\Windows\Start Menu\Programs\System Tools<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Apr 04, 2015 10:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[AKsarben]]></name></author>
<updated>2015-04-04T08:54:04-07:00</updated>
<published>2015-04-04T08:54:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18608#p18608</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18608#p18608"/>
<title type="html"><![CDATA[Create link to System Restore in Classic Shell programs?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4441&amp;p=18608#p18608"><![CDATA[
In Windows XP you can go to &quot;Programs - Accessories - System Tools  and in there is Character Map, Clipboard Viewer and System Restore.  It is not present in the 8.1 and 10 version we have.  I created a shortcut on the desktop using right click on desktop and then in the field box type in c:\Windows\System32\sysdm.cpl ,4   (note: the space between the .cpl and the , is necessary)  and click enter and 'Voila, you have a System Restore but funny icon.  Right click on it and choose Properties and at the bottom is &quot;Change Icon&quot;  choose that and then you need to browse in the \System32 folder for the executable called rstrui.exe  and choose it.  Icon appears and click ok and you are done.  You could mererly type in rstrui in the &quot;run&quot; command, but that gives you a System Restore that only lets you choose former restore points.  This new shortcut will allow you to do that PLUS it will allow you to create a System Restore point as well.<br /><br />Seems to be missing in the newest versions of Windows operating systmems.  Can this shortcut be incorporated into the menu part of Classic Shell to add to the start menu? I pinned it in both the 8.1 and 10 version to Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9880">AKsarben</a> — Sat Apr 04, 2015 8:54 am</p><hr />
]]></content>
</entry>
</feed>