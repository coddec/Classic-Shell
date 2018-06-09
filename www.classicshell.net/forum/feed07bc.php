<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=1853" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-12-09T10:09:36-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=1853</id>
<entry>
<author><name><![CDATA[Lebowsky]]></name></author>
<updated>2013-12-09T10:09:36-07:00</updated>
<published>2013-12-09T10:09:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9403#p9403</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9403#p9403"/>
<title type="html"><![CDATA[Re: Windows 7: avoid delete from navigation pane due to focu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9403#p9403"><![CDATA[
that did it, thanks a lot!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1293">Lebowsky</a> — Mon Dec 09, 2013 10:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-12-09T07:50:24-07:00</updated>
<published>2013-12-09T07:50:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9402#p9402</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9402#p9402"/>
<title type="html"><![CDATA[Re: Windows 7: avoid delete from navigation pane due to focu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9402#p9402"><![CDATA[
No this is not caused by Classic Shell. That is a bug in Explorer which that article describes. Try installing the KB hotfix update from that article and restart Windows. <br /><br />Go to this page: <!-- m --><a class="postlink" href="http://support.microsoft.com/hotfix/KBHotfix.aspx?kbnum=2653385&amp;kbln=en-us">http://support.microsoft.com/hotfix/KBH ... kbln=en-us</a><!-- m -->, accept the agreement, tick the hotfix (Fix389740) and enter your email address there and the CAPTCHA and click &quot;Request hotfix&quot;. The bug fix will be sent to your email. Extract the bug fix update from the EXE and install it. Then restart Windows 7 and see if the bug happens again in Explorer.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Dec 09, 2013 7:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Lebowsky]]></name></author>
<updated>2013-12-09T05:28:19-07:00</updated>
<published>2013-12-09T05:28:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9400#p9400</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9400#p9400"/>
<title type="html"><![CDATA[Re: Windows 7: avoid delete from navigation pane due to focu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9400#p9400"><![CDATA[
Hmm not quite. Consider the following structure. A DATAFOLDER folder on the D:\ disk, containing a SUBDATAFOLDER folder, itself containing two files:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">D:\<br />|<br />|--DATAFOLDER\<br />   |<br />   |--SUBDATAFOLDER1\<br />   |  |<br />   |  |--datafile1<br />   |  |--datafile2<br />   |  |--etc...<br />   |<br />   |--SUBDATAFOLDER2\</div><br /><br />Let's say that I open D:\ in the right pane. then double-click on DATAFOLDER, and then SUBDATAFOLDER to enter it, and you see the two files.<br /><br />Then click on the UP arrow from classic shell. You get back in DATAFOLDER. In the right pane, SUBDATAFOLDER is highlighted in blue. In the left navigation pane, DATAFOLDER (the parent) is highlighted in blue.<br /><br />When hitting shift + del, it's DATAFOLDER from the navigationpane which gets deleted, whereas you would expect SUBDATAFOLDER1 from the right pane to be deleted.<br /><br />At least that's how it works in XP. This actually might be a bug from the UP arrow?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1293">Lebowsky</a> — Mon Dec 09, 2013 5:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-12-08T12:51:36-07:00</updated>
<published>2013-12-08T12:51:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9383#p9383</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9383#p9383"/>
<title type="html"><![CDATA[Re: Windows 7: avoid delete from navigation pane due to focu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9383#p9383"><![CDATA[
Does KB2653385 (<!-- m --><a class="postlink" href="http://support.microsoft.com/kb/2653385">http://support.microsoft.com/kb/2653385</a><!-- m -->) describe the problem you are facing?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Dec 08, 2013 12:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Lebowsky]]></name></author>
<updated>2013-12-08T08:42:33-07:00</updated>
<published>2013-12-08T08:42:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9366#p9366</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9366#p9366"/>
<title type="html"><![CDATA[Windows 7: avoid delete from navigation pane due to focus?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1853&amp;p=9366#p9366"><![CDATA[
Hi,<br /><br />since running windows 7 for a weeks (installed classic shell of course), I already unwillingly deleted some folders because the focus behaviour in explorer seems to be different than in vista and XP. Somehow, when a folder is opened and you see its insides in the right pane, and select sub-folder for deletion, the parent folder (which is opened) also has focus, and when hitting shift + del it is the parent folder in the navigation pane which has priority and gets deleted.<br /><br />This is also described here (gotta love the reply from MS): <!-- m --><a class="postlink" href="http://answers.microsoft.com/en-us/windows/forum/windows_7-files/how-do-i-prevent-unintended-folder-deletions-from/1371ef85-fcc0-4364-95a5-e869fa302038">http://answers.microsoft.com/en-us/wind ... 69fa302038</a><!-- m --> <br /><br />Is there a way to prevent this in explorer or classic shell? This is a really very disturbing change in behavior in windows...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1293">Lebowsky</a> — Sun Dec 08, 2013 8:42 am</p><hr />
]]></content>
</entry>
</feed>