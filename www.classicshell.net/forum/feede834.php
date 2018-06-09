<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=8018" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-10-17T02:57:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=8018</id>
<entry>
<author><name><![CDATA[wvanassen]]></name></author>
<updated>2017-10-17T02:57:32-07:00</updated>
<published>2017-10-17T02:57:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8018&amp;p=34466#p34466</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8018&amp;p=34466#p34466"/>
<title type="html"><![CDATA[Classic Start menu 4.3 slow down due citrix]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8018&amp;p=34466#p34466"><![CDATA[
Goodmorning,<br />When a user clicks on 'Start -&gt; All programs' the system gets stuck for a few seconds. In these seconds it is creating the DataCache.db. file located in the local appdata (%LOCALAPPDATA%). Since we use Citrix, the localappdata is only saved for one day on one server. That results in the DataCache.db been generated every day again, giving the users the slowdown.<br />We wish to use the old variable (%APPDATA%) to make sure the DataCache file is stored in the roaming profile.<br />Is there any way to make this possible?<br />So instead of: Appdata/Local/ClassicShell, use Appdata/Roaming/ClassicShell?<br />Thanks in advance.<br />With kind regards,<br />Wilbert<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=25457">wvanassen</a> — Tue Oct 17, 2017 2:57 am</p><hr />
]]></content>
</entry>
</feed>