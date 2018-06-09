<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7134" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-01-02T19:42:53-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7134</id>
<entry>
<author><name><![CDATA[crvst]]></name></author>
<updated>2017-01-02T19:42:53-07:00</updated>
<published>2017-01-02T19:42:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=31031#p31031</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=31031#p31031"/>
<title type="html"><![CDATA[Re: Explorer Crashes ONLY When Using Search Box Win10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=31031#p31031"><![CDATA[
I wasn't able to capture a crash dump but I was able to fix this issue using the file swap uploaded by Ivo on this thread: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=5385">viewtopic.php?f=12&amp;t=5385</a><!-- l -->. Thank you!<br /><br />It fixed explorer.exe crashing when searching system apps / right clicking results. The event log should indicate that the problem was with ClassicStartMenuDLL. <br /><br />Referencing since this is the first google result when searching for this issue, hope it helps others as well.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16354">crvst</a> — Mon Jan 02, 2017 7:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-11-30T03:41:51-07:00</updated>
<published>2016-11-30T03:41:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30632#p30632</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30632#p30632"/>
<title type="html"><![CDATA[Re: Explorer Crashes ONLY When Using Search Box Win10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30632#p30632"><![CDATA[
If it's indeed crashing, procdump -e explorer.exe should capture it as soon as it crashes without any waiting period. You can also try the alternative way for capturing crash dumps: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6#p9789">viewtopic.php?f=12&amp;t=6#p9789</a><!-- l --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Nov 30, 2016 3:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-11-29T23:29:23-07:00</updated>
<published>2016-11-29T23:29:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30624#p30624</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30624#p30624"/>
<title type="html"><![CDATA[Re: Explorer Crashes ONLY When Using Search Box Win10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30624#p30624"><![CDATA[
Getting a crash dump does not require the crash to last 1 second. Simply run ProcDump, then make it crash by searching.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Nov 29, 2016 11:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DistortionUltra]]></name></author>
<updated>2016-11-29T21:34:54-07:00</updated>
<published>2016-11-29T21:34:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30622#p30622</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30622#p30622"/>
<title type="html"><![CDATA[Explorer Crashes ONLY When Using Search Box Win10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7134&amp;p=30622#p30622"><![CDATA[
Okay, so I have scoured the forms looking for a solution, and none of them seem search box specific, and none of the solutions work. I have tired ensuring the internet options are off, the indexing options are off, I have ensured a clean update and install, and I have disabled auto-fill and accessibility options. I still get a explorer crash and restart (all windows close, and task bar resets) EVERY TIME i use the search box, about 3 or 4 seconds into typing. I hate the Anniversary update start menu, but these crashes are incredible debilitating. Pleas help!! Additionally, there is no way to get a crash dump log because it only lasts for about 1 seconds.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16444">DistortionUltra</a> — Tue Nov 29, 2016 9:34 pm</p><hr />
]]></content>
</entry>
</feed>