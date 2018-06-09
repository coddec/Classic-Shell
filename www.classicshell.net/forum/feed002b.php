<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=318" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-02-28T05:56:23-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=318</id>
<entry>
<author><name><![CDATA[jbarrington]]></name></author>
<updated>2013-02-28T05:56:23-07:00</updated>
<published>2013-02-28T05:56:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1507#p1507</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1507#p1507"/>
<title type="html"><![CDATA[Re: Windows Explorer opens 2nd window when a folder is selec]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1507#p1507"><![CDATA[
I have used Win7 and Classic Shell for quite a while, but I had installed Classic Shell at roughly the same time that I first started using Win7, and I had also made the custom Desktop icon launch for Windows Explorer. I had made similar custom Windows Explorer launches for my previous versions of Windows, so when I just started using Win7 and also just started using Classic Shell, I had created this custom launch for Win7, I just took it for granted that it was a &quot;bug&quot; of Classic shell. I liked many of the other benefits Classic Shell so much that I felt that small inconvenience was well worth it. <br /><br />I had roughly roughly looked in here at the forums from time to time to see if anyone else had made mention of it. I felt that the second launching might get mentioned at some point, but I never saw it, so that's the reason that I brought it up. In the previous versions of Windows, I had never had this happen before, so I naturally took it for granted it was Classic shell, and hoped for a future fix. When the more recent update happened and the second launching still continued to occur, I felt that I should mention it.<br /><br />I am very surprised this was related to Microsoft, since I had never had this happen to me before, so I am big enough to step forward to admit my embarrassment and mistake. I hope this entire posting of my assumption will be of some benefit to some other person that might be suffering from the same issue, just lurking for an answer, and that they will read it and perform a similar fix.<br /><br />Again, my apologies to the developer(s) of Classic Shell.  <img src="http://www.classicshell.net/forum/images/smilies/icon_redface.gif" alt=":oops:" title="Embarrassed" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=389">jbarrington</a> — Thu Feb 28, 2013 5:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-02-28T01:25:04-07:00</updated>
<published>2013-02-28T01:25:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1493#p1493</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1493#p1493"/>
<title type="html"><![CDATA[Re: Windows Explorer opens 2nd window when a folder is selec]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1493#p1493"><![CDATA[
An unfortunate bug in Explorer.exe since Vista. With certain switches used, a second Explorer.exe process does start as expected but doesn't exit at all. We have to terminate it using Task Manager or taskkill.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Feb 28, 2013 1:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jbarrington]]></name></author>
<updated>2013-02-27T20:21:35-07:00</updated>
<published>2013-02-27T20:21:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1486#p1486</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1486#p1486"/>
<title type="html"><![CDATA[Re: Windows Explorer opens 2nd window when a folder is selec]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1486#p1486"><![CDATA[
Oops. My bad, and my apologies. I had gone into the folder settings countless times to examine it, but it wasn't set to open the folders in a separate windows explorer. I even had set it open, saved it, and then set it back to normal with no positive results. Then it hit me that I had made a custom version of windows explorer and that it might causing the issue.<br /><br />This was it. <br /><br />%windir%\explorer.exe /e,/root, C:\<br /><br />I made a small change to:<br /><br />%windir%\explorer.exe /e C:<br /><br />No more second windows explorer!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=389">jbarrington</a> — Wed Feb 27, 2013 8:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-02-27T19:10:58-07:00</updated>
<published>2013-02-27T19:10:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1483#p1483</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1483#p1483"/>
<title type="html"><![CDATA[Re: Windows Explorer opens 2nd window when a folder is selec]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1483#p1483"><![CDATA[
i have never experienced this, but i also use qttab..<br /><br />it sounds more like a problem with your install.. i'd try uninstalling, rebooting, then installing again..<br /><br />otherwise, i dont think this is classicshell related, unless its a conflict with some other explorer tweak on your system<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Wed Feb 27, 2013 7:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jbarrington]]></name></author>
<updated>2013-02-27T14:14:52-07:00</updated>
<published>2013-02-27T14:14:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1480#p1480</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1480#p1480"/>
<title type="html"><![CDATA[Windows Explorer opens 2nd window when a folder is selected.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=318&amp;p=1480#p1480"><![CDATA[
I'm using Win7 Home Premium (64 bit) with Classic Shell installed. <br /><br />Whenever I open Windows Explorer and then select any folder within it, a second Windows Explorer will always open.<br /><br />If I select any folder within that second opened Windows Explorer, I can navigate around and continue to make other folder selections fine within the second Windows Explorer without any other Windows Explorer windows from opening. <br /><br />However, regardless if that second Windows Explorer is open or not, anytime I go back to that <em><span style="text-decoration: underline"><strong>VERY</strong></span></em> first opened Windows Explorer and make another folder selection, it will open up another Windows Explorer window.<br /><br />I looked around within Classic Shell to see if there was a setting to prevent this from happening, and I couldn't see one, unless I either keep over looking it, or it is labeled in a fashion to where I haven't recognize it.<br /><br />Is this a quirk of Classic Shell, or is there a setting that will prevent this from happening?<br /><br />Thanks. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=389">jbarrington</a> — Wed Feb 27, 2013 2:14 pm</p><hr />
]]></content>
</entry>
</feed>