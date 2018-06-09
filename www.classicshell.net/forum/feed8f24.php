<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=897" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-09T09:33:13-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=897</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-09T09:33:13-07:00</updated>
<published>2013-07-09T09:33:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4625#p4625</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4625#p4625"/>
<title type="html"><![CDATA[Re: How to close CSM from command line?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4625#p4625"><![CDATA[
It's not there in the help file yet so it's understandable. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> The others are -toggle, -togglenew, -nohook, -open, -settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jul 09, 2013 9:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[SaschaS]]></name></author>
<updated>2013-07-09T09:12:33-07:00</updated>
<published>2013-07-09T09:12:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4624#p4624</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4624#p4624"/>
<title type="html"><![CDATA[Re: How to close CSM from command line?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4624#p4624"><![CDATA[
O M G - so simple? <img src="http://www.classicshell.net/forum/images/smilies/icon_redface.gif" alt=":oops:" title="Embarrassed" /> <br /><br />Almost right. This is what I did:<br /><br />ClassicStartMenu.exe /?<br />ClassicStartMenu.exe -?<br />ClassicStartMenu.exe -settings<br />ClassicStartMenu.exe -end<br />ClassicStartMenu.exe -e<br />ClassicStartMenu.exe -kill<br />ClassicStartMenu.exe -stop<br /><br />Thanks! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=943">SaschaS</a> — Tue Jul 09, 2013 9:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-09T08:42:04-07:00</updated>
<published>2013-07-09T08:42:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4622#p4622</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4622#p4622"/>
<title type="html"><![CDATA[Re: How to close CSM from command line?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4622#p4622"><![CDATA[
&quot;%ProgramFiles%\Classic Shell\ClassicStartMenu.exe&quot; -exit<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jul 09, 2013 8:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[SaschaS]]></name></author>
<updated>2013-07-09T08:38:35-07:00</updated>
<published>2013-07-09T08:38:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4621#p4621</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4621#p4621"/>
<title type="html"><![CDATA[How to close CSM from command line?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=897&amp;p=4621#p4621"><![CDATA[
Hi@all,<br /><br />I need some help. I'm looking for a possibility to close Classic Start Menu from a script.<br /><br />I've already tried to kill it with &quot;<span style="font-family:Courier;">taskkill /IM ClassicStartMenu.exe</span>&quot; but it returns with a success message but CSM is still running in the taskbar. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_confused.gif" alt=":?" title="Confused" /> <br /><br />Any ideas?<br /><br />thx for help<br />SaschaS<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=943">SaschaS</a> — Tue Jul 09, 2013 8:38 am</p><hr />
]]></content>
</entry>
</feed>