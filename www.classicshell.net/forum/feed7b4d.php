<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=747" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-06-20T12:53:53-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=747</id>
<entry>
<author><name><![CDATA[studog]]></name></author>
<updated>2013-06-20T12:53:53-07:00</updated>
<published>2013-06-20T12:53:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3908#p3908</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3908#p3908"/>
<title type="html"><![CDATA[Re: Shared folder overlay icon not present in file pane?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3908#p3908"><![CDATA[
Indeed, this is the problem. TortoiseSVN is taking up most of the slots, and, on my old machine I'd configured enough of them off that ClassicShell's sharing overlay happened to be available.<br /><br />It would be nice if ClassicShell could detect this and mention it. However, I noticed that turning off the TSVN overlays doesn't actually remove them from the ShellIconOverlayIdentifiers key so I don't know if detecting which ones are active vs merely present is possible.<br /><br />Thanks for the help. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":-)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=855">studog</a> — Thu Jun 20, 2013 12:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-20T08:18:16-07:00</updated>
<published>2013-06-20T08:18:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3894#p3894</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3894#p3894"/>
<title type="html"><![CDATA[Re: Shared folder overlay icon not present in file pane?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3894#p3894"><![CDATA[
It looks like you have hit the limit for the maximum number of shell overlay icons Explorer can have. It has a limit of 15 overlay icons.<br /> <br />You can see all the installed overlays at this registry key:<br />HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\ShellIconOverlayIdentifiers<br /> <br />If they're 14 or 15 it means you've hit the limit due to other software also installed which shows overlays.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jun 20, 2013 8:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[studog]]></name></author>
<updated>2013-06-20T08:06:24-07:00</updated>
<published>2013-06-20T08:06:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3893#p3893</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3893#p3893"/>
<title type="html"><![CDATA[Re: Shared folder overlay icon not present in file pane?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3893#p3893"><![CDATA[
I updated the screenshots to highlight the exact problem I am seeing.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=855">studog</a> — Thu Jun 20, 2013 8:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[studog]]></name></author>
<updated>2013-06-20T08:01:04-07:00</updated>
<published>2013-06-20T08:01:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3891#p3891</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3891#p3891"/>
<title type="html"><![CDATA[Re: Shared folder overlay icon not present in file pane?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3891#p3891"><![CDATA[
Okay, the screenshots should be attached to this post; one showing normal operation and one showing the bug.<br /><br />It appears to be a conflict between ClassicShell and TortoiseSVN in certain configurations.<br /><br />My old job I had (probably) a Dell laptop running Win7 Professional 64-bit, and had ClassicShell 3.6.5 and TortoiseSVN 1.7.11.23600 installed. I do not recall seeing this problem then, but, it's possible I might not have noticed.<br /><br />My current job I have a Lenovo laptop running Win7 Enterprise SP1 64-bit (6.1.7601 Service Pack 1 Build 7601), and ClassicShell 3.6.7 and TortoiseSVN 1.7.13.24257.<br /><br />In all instances of the bug, having TSVN installed causes ClassicShell's shared icon overlay to not appear in the file pane of explorer. Uninstalling TSVN causes ClassicShell's shared icon overly to reappear in the file pane of explorer. I tried ClassicShell 3.6.7 with TSVN 1.7.9.23248, 1.7.10.23359, 1.7.11.23600, 1.7.12.24070 and 1.7.13.24257; and ClassicShell 3.6.5 with TSVN 1.7.11.23600. All these combinations exhibit this behaviour.<br /><br />I can test debug builds, etc. Let me know how to help from here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=855">studog</a> — Thu Jun 20, 2013 8:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-14T19:08:52-07:00</updated>
<published>2013-06-14T19:08:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3723#p3723</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3723#p3723"/>
<title type="html"><![CDATA[Re: Shared folder overlay icon not present in file pane?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3723#p3723"><![CDATA[
Can you include screenshot?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Jun 14, 2013 7:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[studog]]></name></author>
<updated>2013-06-14T09:15:05-07:00</updated>
<published>2013-06-14T09:15:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3712#p3712</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3712#p3712"/>
<title type="html"><![CDATA[Re: Shared folder overlay icon not present in file pane?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3712#p3712"><![CDATA[
I followed those steps, turning on or enabling all the options (the IvoSoft stuff was disabled in add-ons management for instance), with no effect. Nav pane shows the shard overlay, file pane does not.<br /><br />Anything else to try?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=855">studog</a> — Fri Jun 14, 2013 9:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-13T06:32:41-07:00</updated>
<published>2013-06-13T06:32:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3684#p3684</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3684#p3684"/>
<title type="html"><![CDATA[Re: Shared folder overlay icon not present in file pane?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3684#p3684"><![CDATA[
That means Classic Explorer isn't yet fully enabled. Follow these steps: <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#explorer_toolbar">http://www.classicshell.net/faq/#explorer_toolbar</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jun 13, 2013 6:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[studog]]></name></author>
<updated>2013-06-13T06:27:36-07:00</updated>
<published>2013-06-13T06:27:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3683#p3683</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3683#p3683"/>
<title type="html"><![CDATA[Shared folder overlay icon not present in file pane?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=747&amp;p=3683#p3683"><![CDATA[
ClassicShell 3.6.7<br />Win7 Enterprise SP1 x64<br /><br />I've turned on<br />File Pane -&gt; Add icon overlay for shared folders =&gt; checked<br />FIle Pane -&gt; Share overlay icon: %windir%\system32\shell32.dll,29<br />File Pane -&gt; Show overlay only in Explorer (improves performance) =&gt; unchecked<br /><br />I see the overlay in the navigation pane, but not in the file pane.<br /><br />Am I overlooking a config option?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=855">studog</a> — Thu Jun 13, 2013 6:27 am</p><hr />
]]></content>
</entry>
</feed>