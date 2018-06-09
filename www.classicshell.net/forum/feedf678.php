<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=6584" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-23T22:56:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=6584</id>
<entry>
<author><name><![CDATA[twirtz4162]]></name></author>
<updated>2016-08-23T22:56:45-07:00</updated>
<published>2016-08-23T22:56:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28849#p28849</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28849#p28849"/>
<title type="html"><![CDATA[Re: Install errors ClassicExplorerXX]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28849#p28849"><![CDATA[
The Antivirus I use is Kaspersky Internet Security 2016. I have a multi user license and have it installed on another desktop. Had no problem installing C S 4.3.0 on that computer, while leaving Kaspersky running. It has been updated to Win 10 build 1607. MS disabled Classic Shell when update occurred but &quot;Repair&quot; got it back. It is newer with UEFI bios. The desktop with the update problem (now resolved) is still running Win10 build 1511. It is an older desktop using MBR bios.<br />Hope that helps.<br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14830">twirtz4162</a> — Tue Aug 23, 2016 10:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-23T22:27:39-07:00</updated>
<published>2016-08-23T22:27:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28846#p28846</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28846#p28846"/>
<title type="html"><![CDATA[Re: Install errors ClassicExplorerXX]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28846#p28846"><![CDATA[
Can you tell which AV were you using?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 23, 2016 10:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[twirtz4162]]></name></author>
<updated>2016-08-23T18:25:48-07:00</updated>
<published>2016-08-23T18:25:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28841#p28841</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28841#p28841"/>
<title type="html"><![CDATA[Re: Install errors ClassicExplorerXX]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28841#p28841"><![CDATA[
Your proposal that antivirus might be the culprit was correct. I paused my antivirus and after windows registered all its objections I attempted a reinstall. It offered a &quot;Repair&quot;option which I clicked. After a few seconds it announced installation was successful. No error messages. I restarted antivirus and then opened a windows explorer window. I can now optionally activate the Classic Shell toolbar. Consider this case solved and closed.<br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14830">twirtz4162</a> — Tue Aug 23, 2016 6:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-20T22:58:53-07:00</updated>
<published>2016-08-20T22:58:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28788#p28788</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28788#p28788"/>
<title type="html"><![CDATA[Re: Install errors ClassicExplorerXX]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28788#p28788"><![CDATA[
If you have an anti-virus, it could be preventing Classic Shell files from being registered. Try to temporarily disable it and install again.<br /><br />Or as Ivo said, it can be a registry permissions issue.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Aug 20, 2016 10:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-08-20T20:42:53-07:00</updated>
<published>2016-08-20T20:42:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28785#p28785</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28785#p28785"/>
<title type="html"><![CDATA[Re: Install errors ClassicExplorerXX]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28785#p28785"><![CDATA[
This error means &quot;access is denied&quot;. It is hard to know access to what, but I'm guessing the registry. Possibly the registry permissions are messed up.<br />Open an admin command prompt in the Classic Shell directory and type the command &quot;regsvr32 ClassicExplorer32.dll&quot;. See if you get any more detailed error message.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Aug 20, 2016 8:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[twirtz4162]]></name></author>
<updated>2016-08-20T17:07:18-07:00</updated>
<published>2016-08-20T17:07:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28781#p28781</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28781#p28781"/>
<title type="html"><![CDATA[Install errors ClassicExplorerXX]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6584&amp;p=28781#p28781"><![CDATA[
Installed Classic Shell 4.3.0 on Win10 version 1511 computer. Get two errors during install; &quot;ClassicExplorer32.dll failed to register. HRESULT -2147024891. Contact your support personnel.&quot; Later I get the same error for ClassicExplorer64.dll and same HRESULT number.<br />Using procedures listed in the forum via Internet Explorer, tools,  no options are displayed for Classic Explorer. Completely removed Classic Shell and re-installed. Same errors during install. How do I fix this?<br />Other parts of Classic Shell seem to be working okay.<br />Thanks<br />Ted<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14830">twirtz4162</a> — Sat Aug 20, 2016 5:07 pm</p><hr />
]]></content>
</entry>
</feed>