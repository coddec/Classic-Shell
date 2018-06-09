<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=8134" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-12-02T06:07:57-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=8134</id>
<entry>
<author><name><![CDATA[JohnnyMartins]]></name></author>
<updated>2017-12-02T06:07:57-07:00</updated>
<published>2017-12-02T06:07:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8134&amp;p=34894#p34894</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8134&amp;p=34894#p34894"/>
<title type="html"><![CDATA[Re: The old Classic Shell Threads Issue - Explorer Crashing]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8134&amp;p=34894#p34894"><![CDATA[
Have you tried to set File Explorer to &quot;Launch folder windows in a separate process&quot; and restart the PC?<br />I'm on Win10 1703 and it's my experience that this fix didn't work before on ClassicShell 4.3.0 and earlier but it works now on ClassicShell 4.3.1<br /><br />The only downside to this setting is that now frequently File Replace dialogs will pop under other File Explorer windows and go unnoticed...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27181">JohnnyMartins</a> — Sat Dec 02, 2017 6:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CosmicThing2]]></name></author>
<updated>2017-11-29T07:42:19-07:00</updated>
<published>2017-11-29T07:42:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8134&amp;p=34879#p34879</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8134&amp;p=34879#p34879"/>
<title type="html"><![CDATA[The old Classic Shell Threads Issue - Explorer Crashing]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8134&amp;p=34879#p34879"><![CDATA[
Hey all,<br /><br />At the start and middle of this year, I posted on here about issues I was having with Classic Shell crashing explorer on Windows 10. A lot of others chimed in too, saying that they were having similar issues.<br /><br />I was using 4.3.0 but I've now updated to 4.3.1 and I'm miffed to say that I'm still getting this problem. It seems slightly less frequent than before but on an average day, classic shell will still crash explorer 2 or 3 times - requiring you to manually restart explorer.exe via task manager. I'm still very keen to use Classic Shell because, despite this issue, I really like it - this is why it annoys me so much because everything else about Classic Shell is awesome.<br /><br />For anyone getting similar freezes/crashes - if you open Task manager while Classic Shell is running, you can almost watch the problem occuring. Go to the 'Performance' tab of task manager --&gt; Open Resource Monitor. With the Resource Monitor open, sort by threads and you should see explorer.exe. While Classic Shell is open, these threads will slowly rise over the course of a few hours (typically) until they hit around 820-830, at which point explorer will then freeze. The problem is exasperated the more windows and programs you open. It's like a memory leak or something.<br /><br />Admittedly I haven't tried Windows 10 versions 1703/1709 as we're currently using 1607 (due to being a school and cautious about potential bugs and issues).<br /><br />Is there any way round this? We didn't really get anywhere last year and I abandoned using Classic Shell in the end. I did submit a log but it never really got anywhere I don't think.<br /><br />Thanks very much<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17403">CosmicThing2</a> — Wed Nov 29, 2017 7:42 am</p><hr />
]]></content>
</entry>
</feed>