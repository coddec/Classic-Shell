<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=6839" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-06-23T23:38:29-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=6839</id>
<entry>
<author><name><![CDATA[tomtinker]]></name></author>
<updated>2017-06-23T23:38:29-07:00</updated>
<published>2017-06-23T23:38:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=33124#p33124</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=33124#p33124"/>
<title type="html"><![CDATA[Re: [Windows 10] Classic Explorer toolbar not present]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=33124#p33124"><![CDATA[
I've got the same problem. No Explorer toolbar in Win 10. I've tried all of the recommendations detailed here, and still, no go.<br />Has anyone found a solution yet?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2904">tomtinker</a> — Fri Jun 23, 2017 11:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-03-23T04:08:36-07:00</updated>
<published>2017-03-23T04:08:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31922#p31922</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31922#p31922"/>
<title type="html"><![CDATA[Re: [Windows 10] Classic Explorer toolbar not present]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31922#p31922"><![CDATA[
If all addons are enabled in the Manage Addons dialog, and you also enabled the option &quot;Enable third party browser extensions&quot; and yet if you are unable to turn on the File Explorer toolbar, then it may be a case of File Explorer getting confused with the toolbars it has installed.<br /><br />To fix that, first close all File Explorer windows. Then open Registry Editor (C:\Windows\system32\regedit.exe) and go to HKEY_CURRENT_USER\Software\Microsoft\Internet Explorer\Toolbar\ShellBrowser key and delete the value called ITBar7Layout. Then re-open File Explorer and try enabling Classic Explorer Toolbar again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Mar 23, 2017 4:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tomtinker]]></name></author>
<updated>2017-03-23T03:48:21-07:00</updated>
<published>2017-03-23T03:43:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31920#p31920</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31920#p31920"/>
<title type="html"><![CDATA[Re: [Windows 10] Classic Explorer toolbar not present]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31920#p31920"><![CDATA[
Thanks for the reply, Gaurav...<br />I already had everything set just as recommended on that page. But still, no toolbar.<br />It was working until about a week ago, and I haven't changed any ClassicShell or IE settings recently.<br />(I don't even use IE.) Any ideas what else it might be?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2904">tomtinker</a> — Thu Mar 23, 2017 3:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-03-20T21:58:33-07:00</updated>
<published>2017-03-20T21:58:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31898#p31898</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31898#p31898"/>
<title type="html"><![CDATA[Re: [Windows 10] Classic Explorer toolbar not present]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31898#p31898"><![CDATA[
@TomTinker, try these steps: <!-- m --><a class="postlink" href="http://classicshell.net/faq/#explorer">http://classicshell.net/faq/#explorer</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Mar 20, 2017 9:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tomtinker]]></name></author>
<updated>2017-03-20T21:34:26-07:00</updated>
<published>2017-03-20T21:34:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31897#p31897</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31897#p31897"/>
<title type="html"><![CDATA[Re: [Windows 10] Classic Explorer toolbar not present]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=31897#p31897"><![CDATA[
Classic Explorer Bar no longer works. &quot;Classic Explorer Bar&quot; does appear in the Windows Explorer options list, but it cannot be checkmarked/selected. This seems to have happened after the latest Win10 update (but I'm not sure). The item in the Options list is not grayed out, but it acts as if it were. So the toolbar cannot be displayed. Is there a viable workaround? <br />Using Win 10 Build 14393, Classic Shell 4.3.0<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2904">tomtinker</a> — Mon Mar 20, 2017 9:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jimbo1qaz]]></name></author>
<updated>2016-09-17T00:53:22-07:00</updated>
<published>2016-09-17T00:53:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=29370#p29370</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=29370#p29370"/>
<title type="html"><![CDATA[[Windows 10] Classic Explorer toolbar not present]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6839&amp;p=29370#p29370"><![CDATA[
I'm using Windows 10 Anniversary Edition and Classic Shell 4.3.0. In Windows Explorer, the Classic Explorer toolbar cannot be seen. I can't find any way to select toolbars (BHOs?).<br /><br />Also, QTTabBar does not function. Maybe it's because of native images not present at the paths referenced by Explorer. Maybe it's the same issue as this.<br /><br />I opened Classic Explorer settings from the Start Menu. Other settings (at least I tested &quot;disable breadcrumbs&quot;) function properly.<br /><br />Do I need to install some mod to enable toolbars?<br /><br />----<br /><br />EDIT: Fixed: <!-- m --><a class="postlink" href="http://classicshell.net/faq/#explorer">http://classicshell.net/faq/#explorer</a><!-- m -->, then open Explorer window -&gt; View tab -&gt; Options (v arrow) -&gt; Classic Explorer Bar.<br /><br />This was completely unfamiliar and confusing, coming from Windows 7.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3856">jimbo1qaz</a> — Sat Sep 17, 2016 12:53 am</p><hr />
]]></content>
</entry>
</feed>