<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=5234" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-10-06T03:23:52-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=5234</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-10-06T02:42:38-07:00</updated>
<published>2015-10-06T02:42:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5234&amp;p=22822#p22822</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5234&amp;p=22822#p22822"/>
<title type="html"><![CDATA[Re: Fix for failed Windows 10 Cumulative Update KB3093266]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5234&amp;p=22822#p22822"><![CDATA[
Yes, Microsoft has unnecessarily protected plain shortcuts in the Start Menu with ACLs and if they're moved or deleted, it detects it as a system integrity violation.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Oct 06, 2015 2:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-10-06T03:23:52-07:00</updated>
<published>2015-10-06T01:53:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5234&amp;p=22821#p22821</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5234&amp;p=22821#p22821"/>
<title type="html"><![CDATA[Fix for failed Windows 10 Cumulative Update KB3093266]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5234&amp;p=22821#p22821"><![CDATA[
My Windows 10 machine has been failing on the latest Windows update, and I finally tracked down why.<br /><br />Apparently it's as basic as Start Menu items not being where Windows expects them.<br /><br />But there's an easy fix:<br /><br /><ol style="list-style-type: decimal"><li>Right click on &quot;Command prompt&quot;. Select &quot;Run as Administrator&quot;</li><li>In the command window type run the System File Checker by typing in: sfc /scannow</li><li>Wait a few minutes while it completes.</li><li>Close the command window.</li><li>Retry the system update.</li></ol><ol style="list-style-type: decimal"></ol><ol style="list-style-type: decimal"></ol><ol style="list-style-type: decimal"></ol><br />It worked for me, though you'll want to move the items back where they were if you'd moved them before.<br /><br />Info found <a href="http://answers.microsoft.com/en-us/windows/forum/windows_10-update/kb3093266-has-failed-to-install-on-my-computer/1788d268-25ac-4ca8-9420-68a5bce2601a" class="postlink">here</a>.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Tue Oct 06, 2015 1:53 am</p><hr />
]]></content>
</entry>
</feed>