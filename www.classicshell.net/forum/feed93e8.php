<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4910" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-08-10T04:01:54-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4910</id>
<entry>
<author><name><![CDATA[Clemens]]></name></author>
<updated>2015-08-10T04:01:54-07:00</updated>
<published>2015-08-10T04:01:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=21006#p21006</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=21006#p21006"/>
<title type="html"><![CDATA[Re: 4.2.3 RC, crash when no user picture]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=21006#p21006"><![CDATA[
I tested it with 4.2.4, and the issue is fixed. (I know in the release notes was written that all known issues were fixed, but I thought I test it to be sure)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11054">Clemens</a> — Mon Aug 10, 2015 4:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Clemens]]></name></author>
<updated>2015-08-08T02:44:35-07:00</updated>
<published>2015-08-08T02:44:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20903#p20903</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20903#p20903"/>
<title type="html"><![CDATA[Re: 4.2.3 RC, crash when no user picture]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20903#p20903"><![CDATA[
If I use the slowdown command, I get the dumps in the zip. I hope they are ok.<br />If I use the crash command and open the start menu, this is what comes on the screen, a dumpfile is not created.<br /><br />[11:39:51] Exception: E06D7363.?AVResultException@wil@@<br />[11:39:51] Exception: E06D7363.msc<br />[11:39:51] The process has exited.<br />[11:39:51] Dump count not reached.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11054">Clemens</a> — Sat Aug 08, 2015 2:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-08-07T07:21:43-07:00</updated>
<published>2015-08-07T07:21:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20848#p20848</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20848#p20848"/>
<title type="html"><![CDATA[Re: 4.2.3 RC, crash when no user picture]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20848#p20848"><![CDATA[
Please, capture a crash dump following these instructions: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Aug 07, 2015 7:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-07T06:49:06-07:00</updated>
<published>2015-08-07T06:49:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20846#p20846</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20846#p20846"/>
<title type="html"><![CDATA[Re: 4.2.3 RC, crash when no user picture]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20846#p20846"><![CDATA[
Yes reproduced the crash on a new user account with no user account picture set. No it's not related to that other crash. It's a slowdown actually which causes Explorer.exe to restart. But you're right it's caused by the missing user account picture.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Aug 07, 2015 6:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Clemens]]></name></author>
<updated>2015-08-07T04:07:19-07:00</updated>
<published>2015-08-07T04:07:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20843#p20843</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20843#p20843"/>
<title type="html"><![CDATA[4.2.3 RC, crash when no user picture]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4910&amp;p=20843#p20843"><![CDATA[
If no user picture is selected, classic shell 4.2.3 crashes constant, OS is Windows 10 home 64x.<br />From the moment as a picture for your account is selected, it runs fine.<br /><br />Version is 4.2.3 RC<br /><br />Maybe the issue is already known, if not I'm glad that I can help.<br /><br />EDIT probably it has something to do with this: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=4822">viewtopic.php?f=7&amp;t=4822</a><!-- l --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11054">Clemens</a> — Fri Aug 07, 2015 4:07 am</p><hr />
]]></content>
</entry>
</feed>