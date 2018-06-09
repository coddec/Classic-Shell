<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=109" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-02-22T11:58:08-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=109</id>
<entry>
<author><name><![CDATA[DonC]]></name></author>
<updated>2013-02-22T11:58:08-07:00</updated>
<published>2013-02-22T11:58:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1301#p1301</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1301#p1301"/>
<title type="html"><![CDATA[Re: Setup Start for 1 user -- not all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1301#p1301"><![CDATA[
Ok, didn't dig deep enough.  Right Click on Automatic to reach Disable.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=164">DonC</a> — Fri Feb 22, 2013 11:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-02-16T21:13:58-07:00</updated>
<published>2013-02-16T21:13:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1193#p1193</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1193#p1193"/>
<title type="html"><![CDATA[Re: Setup Start for 1 user -- not all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1193#p1193"><![CDATA[
The service can be disabled from Services.msc (in Administrative Tools). No need to rename any files.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Feb 16, 2013 9:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DonC]]></name></author>
<updated>2013-02-16T16:30:51-07:00</updated>
<published>2013-02-16T16:30:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1191#p1191</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1191#p1191"/>
<title type="html"><![CDATA[Re: Setup Start for 1 user -- not all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=1191#p1191"><![CDATA[
I think you may need to update this article.  First, there is no way to disable or remove the service. Second, <br />at the next restart, the service will be reactivated.<br /> <br /> <br />What you need to do is install Classic Shell.  Next go to C:\Programs Files and rename ClassicShellService.exe to something else like ClassicShellService.ex_ Next reboot and the service won't be installed.  Then add a shortcut to the  ClassicShellMenu.exe into the user's Startup folder. <br /> <br />Works like a charm.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=164">DonC</a> — Sat Feb 16, 2013 4:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DonC]]></name></author>
<updated>2013-01-19T11:52:46-07:00</updated>
<published>2013-01-19T11:52:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=416#p416</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=416#p416"/>
<title type="html"><![CDATA[Re: Setup Start for 1 user -- not all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=416#p416"><![CDATA[
Thanks, I was hoping...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=164">DonC</a> — Sat Jan 19, 2013 11:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-19T09:09:45-07:00</updated>
<published>2013-01-19T09:09:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=409#p409</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=409#p409"/>
<title type="html"><![CDATA[Re: Setup Start for 1 user -- not all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=409#p409"><![CDATA[
All Classic Start Menu settings are per-user however on Windows 8, all items loaded at startup whether from the per-user or all user (per machine) startup locations are delayed significantly. Because of this, on Windows 8, Classic Shell uses a service to start itself fast, a service will start it for all users. If you want make it per-user, simply go to Services.msc and stop/disable the service. Then add a shortcut to C:\Program Files\Classic Shell\ClassicStartMenu.exe to the user's startup folder. (But note that it will start with a delay of few seconds - that is because of Windows 8).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jan 19, 2013 9:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DonC]]></name></author>
<updated>2013-01-19T07:06:53-07:00</updated>
<published>2013-01-19T07:06:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=406#p406</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=406#p406"/>
<title type="html"><![CDATA[Setup Start for 1 user -- not all]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=109&amp;p=406#p406"><![CDATA[
How can I easily add the Start menu for a specific user and not for others?<br /> <br />Let's say I want only an advanced User to have the Start button added to Windows 8 and other users setup in the Default Windows 8 configuration?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=164">DonC</a> — Sat Jan 19, 2013 7:06 am</p><hr />
]]></content>
</entry>
</feed>