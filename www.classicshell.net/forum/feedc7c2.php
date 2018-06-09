<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7527" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-05-17T08:40:10-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7527</id>
<entry>
<author><name><![CDATA[Frosch]]></name></author>
<updated>2017-05-17T08:40:10-07:00</updated>
<published>2017-05-17T08:40:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32679#p32679</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32679#p32679"/>
<title type="html"><![CDATA[Re: slow start menu on Windows Server 2012 R2 Terminal Serve]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32679#p32679"><![CDATA[
Sorry for the late response, but it's sometimes not so easy to get things moving here...<br /><br />As soon as we deactivated the jumplist the start menu was again as fast as lightning. Thank you very much <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Now we wonder: is there a way to deactivate them globally for all users? We would like to skip the part where we have to log on with every user on the two machines and set this option manually...<br /><br />EDIT: <br />Nevermind, after some more searching I found the relevant passage in the help file under &quot;Administrative Settings&quot;. <br /><br />So I am quite satisfied now. Thank you guys for a this neat tool!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19477">Frosch</a> — Wed May 17, 2017 8:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-05-02T07:03:10-07:00</updated>
<published>2017-05-02T07:03:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32438#p32438</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32438#p32438"/>
<title type="html"><![CDATA[Re: slow start menu on Windows Server 2012 R2 Terminal Serve]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32438#p32438"><![CDATA[
It is trying to read the jumplist contents from this folder: %APPDATA%\Microsoft\Windows\Recent\AutomaticDestinations. It takes a few seconds to access it in your case.<br />You can turn off the jumplists from the start menu settings if you want to sacrifice that feature for performance.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue May 02, 2017 7:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Frosch]]></name></author>
<updated>2017-04-26T01:41:57-07:00</updated>
<published>2017-04-26T01:41:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32335#p32335</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32335#p32335"/>
<title type="html"><![CDATA[slow start menu on Windows Server 2012 R2 Terminal Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7527&amp;p=32335#p32335"><![CDATA[
After searching in this forum the closest we found was the following: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=5212">viewtopic.php?f=12&amp;t=5212</a><!-- l --><br />Since it kinda stopped I created a new topic.<br /><br />We have two Terminal Server with Windows Server 2012 R2 and have redirected the start menu folder to a network share so we can configure it remotely. <br /><br />The problem: for some users the start menu takes 5 to 8 secons until it appears. We could not pin the cause to anything specific, it happens to some users, but not others. It seems to stick to those users though, the start menu won't get fast for those again. For other users it's always fast. <br /><br />Testing with different settings did not help, users with a slow menu continued to have a slow menu.<br /><br />We also tried checking whether Classic Shell is doing something in the background, but poking around with processExplorer or similar tools gave us no hint of something going on.<br /><br />Maybe you could help us out? We are out of ideas and generated some dumps hoping that there would be a clue to the slowness of the start menu.<br /><br />We are using:<br />Classic Start Menu 4.3.0<br />Windows Server 2012 R2 64bit<br /><br />We would be very glad if there was any kind of hint you could give us.<br /><br />Thanks in advance!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19477">Frosch</a> — Wed Apr 26, 2017 1:41 am</p><hr />
]]></content>
</entry>
</feed>