<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=5735" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-02-17T09:34:12-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=5735</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-17T09:34:12-07:00</updated>
<published>2016-02-17T09:34:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5735&amp;p=25393#p25393</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5735&amp;p=25393#p25393"/>
<title type="html"><![CDATA[Re: Classic shell needs to configure itself for the new OS]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5735&amp;p=25393#p25393"><![CDATA[
Yes, there is a way.<br />You need to do two things:<br />1) In the registry, open <strong>HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Run</strong>, and find the value &quot;Classic Start Menu&quot;. Replace the &quot;-autorun&quot; parameter with &quot;-startup&quot;. This will stop the upgrading.<br />2) After the upgrade of Windows, run <strong>regsvr32 %windir%\System32\StartMenuHelper64.dll</strong> (or StartMenuHelper32.dll for 32-bit Windows)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Feb 17, 2016 9:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rayk_sland]]></name></author>
<updated>2016-02-16T17:23:58-07:00</updated>
<published>2016-02-16T17:23:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5735&amp;p=25384#p25384</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5735&amp;p=25384#p25384"/>
<title type="html"><![CDATA[Classic shell needs to configure itself for the new OS]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5735&amp;p=25384#p25384"><![CDATA[
After a Windows upgrade, &quot;Classic shell needs to configure itself for the new OS&quot; appears and needs admin privileges to execute. Is there any way to do whatever it needs as a group policy? I understand that it's doing some re-registering. would some regsvr32 command line suffice? Currently an administrator has to authenticate to allow the process to complete.<br /><br />Great program, by the way. The current windows menus are insane. This is sane.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12751">rayk_sland</a> — Tue Feb 16, 2016 5:23 pm</p><hr />
]]></content>
</entry>
</feed>