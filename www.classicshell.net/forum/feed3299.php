<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7853" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-26T09:47:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7853</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-26T09:47:32-07:00</updated>
<published>2017-08-26T09:47:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7853&amp;p=33839#p33839</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7853&amp;p=33839#p33839"/>
<title type="html"><![CDATA[Re: Popup Startmenu not using explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7853&amp;p=33839#p33839"><![CDATA[
No such supported method but you can try:<br />C:\Program Files\Classic Shell\ClassicStartMenu.exe -nohook<br /><br />However note that it is unsupported. It is only for troubleshooting, not everyday use.<br /><br />Particularly after version 3.9.0, -nohook parameter does not work in all cases and can cause performance issues.<br /><br />For proper functioning, Classic Shell needs to inject its DLL into Explorer.exe.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Aug 26, 2017 9:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[comhon]]></name></author>
<updated>2017-08-25T13:12:47-07:00</updated>
<published>2017-08-25T13:12:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7853&amp;p=33825#p33825</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7853&amp;p=33825#p33825"/>
<title type="html"><![CDATA[Popup Startmenu not using explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7853&amp;p=33825#p33825"><![CDATA[
I am currently experimenting with programming my own custom &quot;taskbar&quot;, so I would like to have my own button to lanuch the StartMenu.<br /><br />My attempt is to develop a simple taskbar like windows 95 in windows 10 <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" />.<br />So far I implemented:<br />* simple access to 'Run' dialog (no need to use Ctrl+Shift+Esc to run taskmgr before)<br />* bring some running application window to front (restore from minimized state if needed) using my own buttons<br /><br />Would it be possible to popup the Classic Start Menu in an other way than clicking the Start Button in explorer.exe?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23318">comhon</a> — Fri Aug 25, 2017 1:12 pm</p><hr />
]]></content>
</entry>
</feed>