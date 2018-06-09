<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7936" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-26T13:07:57-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7936</id>
<entry>
<author><name><![CDATA[Tanki]]></name></author>
<updated>2017-09-26T13:07:57-07:00</updated>
<published>2017-09-26T13:07:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34226#p34226</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34226#p34226"/>
<title type="html"><![CDATA[Re: About unattend install]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34226#p34226"><![CDATA[
Yes but for msi installer, it's good argument...<br /><br />i'l test your suggestion<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24528">Tanki</a> — Tue Sep 26, 2017 1:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-26T12:40:47-07:00</updated>
<published>2017-09-26T12:40:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34225#p34225</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34225#p34225"/>
<title type="html"><![CDATA[Re: About unattend install]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34225#p34225"><![CDATA[
You are specifying a / before ADDLOCAL. I think it is not required.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Sep 26, 2017 12:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tanki]]></name></author>
<updated>2017-09-26T11:39:59-07:00</updated>
<published>2017-09-26T11:39:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34224#p34224</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34224#p34224"/>
<title type="html"><![CDATA[Re: About unattend install]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34224#p34224"><![CDATA[
<div class="codetitle"><b>Code:</b></div><div class="codecontent">ClassicShellSetup_4_3_0-fr.exe /qb /ADDLOCAL=&quot;ClassicExplorer,ClassicStartMenu&quot; /norestart<br /></div><br /><br />doesn't work, i get popup about msi installer... same for 4.3.1 version.<br /><br />service msiserver is started.<br /><br />edit: i have try with other .exe and work, only your software cause a problem... Every test (.exe or .msi) = <span style="background-color:#ff0000;">FAIL</span><br /><br />So, ok but why with:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent"> /ADDLOCAL=&quot;ClassicExplorer,ClassicStartMenu,ClassicShellUpdate&quot;</div><br /><br />This wrong apparently?<br /><br />Don't work:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">ClassicShellSetup_4_3_1-fr.exe /qn /ADDLOCAL=ClassicExplorer,ClassicStartMenu,ClassicShellUpdate<br /></div><br /><br />same for <div class="codetitle"><b>Code:</b></div><div class="codecontent">ClassicShellSetup_4_3_1-fr.exe /qn /ADDLOCAL=ClassicStartMenu</div><br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">ClassicShellSetup_4_3_1-fr.exe /qn</div> or /qb work perfectly<br /><span style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span style="background-color:#e6f2fa;"><br /></span></span><br /><span style="font-family:Verdana, Arial, Helvetica, sans-serif;"><span style="background-color:#e6f2fa;"><br /></span><span style="background-color:#e6f2fa;"><br /></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24528">Tanki</a> — Tue Sep 26, 2017 11:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-09-26T07:47:08-07:00</updated>
<published>2017-09-26T07:47:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34220#p34220</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34220#p34220"/>
<title type="html"><![CDATA[Re: About unattend install]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34220#p34220"><![CDATA[
You don't have to extract the MSI. Simply run the installer EXE with the command line you want. The command line will be passed to the MSI.<br />I don't know what sfx is.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Sep 26, 2017 7:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tanki]]></name></author>
<updated>2017-09-26T07:04:48-07:00</updated>
<published>2017-09-26T07:04:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34218#p34218</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34218#p34218"/>
<title type="html"><![CDATA[About unattend install]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7936&amp;p=34218#p34218"><![CDATA[
Hello,<br /><br />sorry for my bad english...<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">ClassicShellSetup32.msi /qn /norestart</div><br /><br />default install, quiet, no restart with all local<br /><br />It's good or not? <br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">ClassicShellSetup32.msi /qn /ADDLOCAL=\&quot;ClassicExplorer,ClassicStartMenu,ClassicShellUpdate\&quot; /norestart</div><br /><br />and about ClassicShell, I need to include ClassicShell or it's included by default?<br /><br />same for LicenseAccepted, value is set to 1, so i don't need include on my sfx?<br /><br />I include \&quot;\&quot; because i use 7z sfx...<br /><br />Cheers,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24528">Tanki</a> — Tue Sep 26, 2017 7:04 am</p><hr />
]]></content>
</entry>
</feed>