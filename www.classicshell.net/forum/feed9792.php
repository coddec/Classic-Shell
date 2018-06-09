<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7834" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-21T22:19:21-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7834</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-21T22:19:21-07:00</updated>
<published>2017-08-21T22:19:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33790#p33790</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33790#p33790"/>
<title type="html"><![CDATA[Re: Classic start menu slow when opened]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33790#p33790"><![CDATA[
@heciluss, Why it happens can be figured out if you create a slowdown dump and post it here so it can be analyzed to find the cause of the sluggishness. Here's how to capture a slowdown dump: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6">viewtopic.php?f=12&amp;t=6</a><!-- l --> (procdump -n 10 -s 1 explorer.exe)<br /><br />It can be that the location where the Classic Start Menu writes the cached data is not writable on your PC, or its security permissions got messed up or maybe some security app is blocking it. If the menu cannot write the information to a datacache.db file, it will be slow.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Aug 21, 2017 10:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[heciluss]]></name></author>
<updated>2017-08-21T15:18:37-07:00</updated>
<published>2017-08-21T15:18:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33784#p33784</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33784#p33784"/>
<title type="html"><![CDATA[Re: Classic start menu slow when opened]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33784#p33784"><![CDATA[
MeetHg Thank you! so much, that solved the issue it's as snappy as ever why does this happen?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23108">heciluss</a> — Mon Aug 21, 2017 3:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-20T23:20:11-07:00</updated>
<published>2017-08-20T23:20:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33764#p33764</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33764#p33764"/>
<title type="html"><![CDATA[Re: Classic start menu slow when opened]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33764#p33764"><![CDATA[
If you are using Windows 10, the Classic Start Menu might be sluggish to open. I experience this too on my Creators Update 64-bit but the cause is not known yet because the menu is extremely fast and fluid on Windows 8.1/7.<br /><br />You could try disabling your security apps, one by one, at a time. Antivirus apps have been known to interfere with Classic Shell's modifications to Explorer.exe.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Aug 20, 2017 11:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[meetHG]]></name></author>
<updated>2017-08-20T22:04:24-07:00</updated>
<published>2017-08-20T22:04:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33763#p33763</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33763#p33763"/>
<title type="html"><![CDATA[Re: Classic start menu slow when opened]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33763#p33763"><![CDATA[
Try changing the option from &quot;Show Frequent Programs&quot; to &quot;Show Recent Programs&quot; in the &quot;Main Menu&quot; tab of Classic Shell Settings Menu.<br /><br />I noticed this when I was developing a start menu skin. It may solve your problem,but not sure.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20364">meetHG</a> — Sun Aug 20, 2017 10:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[heciluss]]></name></author>
<updated>2017-08-20T19:24:10-07:00</updated>
<published>2017-08-20T19:24:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33762#p33762</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33762#p33762"/>
<title type="html"><![CDATA[Classic start menu slow when opened]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7834&amp;p=33762#p33762"><![CDATA[
<img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> Hello greetings everyone first off I’m new to this forum and I really love classic shell it’s functionality is great it’s fast and it’s ui is good I even donatedi to classic shell so recently classic shell start menu has become slow not only on startup the computer could be on for hours with a low cpu usage like 6% and it takes like a solid 5 seconds for the menu to open unlike when I first downloaded it a long time ago when it was instant meanwhile in safe mode that is not the case it feels snappy any idea to why that is the case my current security config is bitdefender free mbam premium and cómodo firewall incase it’s relevant, I run windows 10 64 bit.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23108">heciluss</a> — Sun Aug 20, 2017 7:24 pm</p><hr />
]]></content>
</entry>
</feed>