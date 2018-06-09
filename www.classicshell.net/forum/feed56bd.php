<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=4772" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-07-07T03:55:37-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=4772</id>
<entry>
<author><name><![CDATA[NoahNicholsFourm]]></name></author>
<updated>2015-07-07T03:55:37-07:00</updated>
<published>2015-07-07T03:55:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4772&amp;p=20137#p20137</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4772&amp;p=20137#p20137"/>
<title type="html"><![CDATA[Disable DWM on Windows 8 and 8.1 (possibly Windows 10?)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4772&amp;p=20137#p20137"><![CDATA[
Needed:<br />Computer with at least Windows 8<br /><br />Commands:<br />taskkill /IM explorer.exe /F<br />pssuspend.exe winlogon.exe<br />taskkill /IM dwm.exe /F<br />C:\Windows\explorer.exe<br /><br />Restore:<br />taskkill /IM explorer.exe /F<br />pssuspend.exe -r winlogon.exe<br />dwm.exe<br />C:\Windows\explorer.exe<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10096">NoahNicholsFourm</a> — Tue Jul 07, 2015 3:55 am</p><hr />
]]></content>
</entry>
</feed>