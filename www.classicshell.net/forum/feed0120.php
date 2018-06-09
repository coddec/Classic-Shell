<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=5657" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-01-31T11:31:04-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=5657</id>
<entry>
<author><name><![CDATA[johannes.a.schmid]]></name></author>
<updated>2016-01-31T11:31:04-07:00</updated>
<published>2016-01-31T11:31:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24941#p24941</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24941#p24941"/>
<title type="html"><![CDATA[Re: Synchronization icon for OneDrive disappears]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24941#p24941"><![CDATA[
... you are right - it is rather a Windows issue related to the number of overlays in the registry - and not a problem of Classic shell<br />Registry:<br />HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\explorer \ShellIconOverlayIdentifiers<br /><br />I uninstalled some other synchronizing packages (GDrive and Dropbox) - and deleted entries in the registry and then it worked again (showing the synchronization marks on top of the file icons). <br />Thanks and best wishes, <br /><br />Johannes<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12608">johannes.a.schmid</a> — Sun Jan 31, 2016 11:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-31T08:56:10-07:00</updated>
<published>2016-01-31T08:56:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24929#p24929</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24929#p24929"/>
<title type="html"><![CDATA[Re: Synchronization icon for OneDrive disappears]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24929#p24929"><![CDATA[
Do you mean the synchronization mark on top of the file icons? If so, it is likely due to reaching the limit of 15 overlays allowed by Windows. It is a very low number and is a limitation that dates back to Windows 95.<br />Classic Explorer uses one of the overlays to show shared folders. You can turn off that feature from the File Pane tab of the settings. Uncheck &quot;Add icon overlay for shared folders&quot;. Then reboot.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 31, 2016 8:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johannes.a.schmid]]></name></author>
<updated>2016-01-31T02:12:19-07:00</updated>
<published>2016-01-31T02:12:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24916#p24916</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24916#p24916"/>
<title type="html"><![CDATA[Synchronization icon for OneDrive disappears]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5657&amp;p=24916#p24916"><![CDATA[
Dear classic shell team, I made the observation (on Windows 10, classic shell 4.2.5) that the synchronization indicator disappears due to classic shell. <br />Thus it is difficult to see, whether certain files are already synchronized with the cloud or not.<br /><br />Can you fix that or comment on it?<br />Thanks and best wishes, <br /><br />Johannes<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12608">johannes.a.schmid</a> — Sun Jan 31, 2016 2:12 am</p><hr />
]]></content>
</entry>
</feed>