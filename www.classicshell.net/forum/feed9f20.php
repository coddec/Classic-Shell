<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=1746" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-11-28T01:11:50-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=1746</id>
<entry>
<author><name><![CDATA[Galane]]></name></author>
<updated>2014-11-28T01:11:50-07:00</updated>
<published>2014-11-28T01:11:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=15847#p15847</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=15847#p15847"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=15847#p15847"><![CDATA[
I still haven't been able to find out why Explorer (and only Explorer) on my x64 Win 7 Ultimate install cannot be pinned. I somehow unpinned it and now the only rightclick option I get on any Explorer taskbar button is Close Window.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3768">Galane</a> — Fri Nov 28, 2014 1:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-01-20T05:12:56-07:00</updated>
<published>2014-01-20T05:12:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=10239#p10239</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=10239#p10239"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=10239#p10239"><![CDATA[
In Classic Shell 4.0.4, there is a new hidden setting &quot;DisablePinExt&quot;. Add a DWORD value of this name to either HKCU\Software\IvoSoft\ClassicStartMenu\Settings or HKLM\Software\IvoSoft\ClassicStartMenu. A value data of 1 hides the &quot;Pin to Start Menu (Classic Shell)&quot; context menu item. This hidden setting is present as a Group Policy setting too called 'Disable the Pin shell extension'.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 20, 2014 5:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-11-22T09:34:41-07:00</updated>
<published>2013-11-22T09:34:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=9019#p9019</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=9019#p9019"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=9019#p9019"><![CDATA[
It might actually work. Every component has its own CLSID.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Nov 22, 2013 9:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[suixelo]]></name></author>
<updated>2013-11-22T08:00:57-07:00</updated>
<published>2013-11-22T08:00:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=9012#p9012</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=9012#p9012"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=9012#p9012"><![CDATA[
In case you want to (a) not remove the keys while (b) still definitely disable the context menu entry (even after updating) I suggest simply blocking the corresponding CLSID:<br /><br />Either from a command line:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">reg add &quot;HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Shell Extensions\Blocked&quot; /v &quot;{E595F05F-903F-4318-8B0A-7F633B520D2B}&quot; /f</div><br />Or via a .reg file:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Windows Registry Editor Version 5.00<br /><br />&#91;HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Shell Extensions\Blocked&#93;<br />&quot;{E595F05F-903F-4318-8B0A-7F633B520D2B}&quot;=&quot;&quot;</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1604">suixelo</a> — Fri Nov 22, 2013 8:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cousindupree69]]></name></author>
<updated>2013-11-19T10:03:08-07:00</updated>
<published>2013-11-19T10:03:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8923#p8923</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8923#p8923"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8923#p8923"><![CDATA[
Thanks, .reg didn't work, so went in and removed both manually.  Did the trick.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2307">cousindupree69</a> — Tue Nov 19, 2013 10:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-11-19T08:33:25-07:00</updated>
<published>2013-11-19T08:33:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8916#p8916</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8916#p8916"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8916#p8916"><![CDATA[
Merge this to the registry (paste it into Notepad, save as .reg file and double click it) to remove &quot;Pin to Start Menu (Classic Shell)&quot;:<br /><br />Windows Registry Editor Version 5.00<br />[-HKEY_CLASSES_ROOT\exefile\shellex\ContextMenuHandlers\StartMenuExt]<br />[-HKEY_CLASSES_ROOT\lnkfile\shellex\ContextMenuHandlers\StartMenuExt]<br /><br /><br />However it may return after you update Classic Shell<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Nov 19, 2013 8:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cousindupree69]]></name></author>
<updated>2013-11-19T06:55:53-07:00</updated>
<published>2013-11-19T06:55:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8914#p8914</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8914#p8914"/>
<title type="html"><![CDATA[Remove Pin To Start Menu (Classic Shell) from context menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1746&amp;p=8914#p8914"><![CDATA[
How do I remove the Pin To Start Menu (Classic Shell) from my Windows 7 context menu?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2307">cousindupree69</a> — Tue Nov 19, 2013 6:55 am</p><hr />
]]></content>
</entry>
</feed>