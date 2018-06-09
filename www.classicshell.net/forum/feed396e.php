<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=6473" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-05T07:17:29-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=6473</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-05T07:17:29-07:00</updated>
<published>2016-08-05T07:17:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6473&amp;p=28258#p28258</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6473&amp;p=28258#p28258"/>
<title type="html"><![CDATA[Explorer Toolbar button for &quot;Create shortcut&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6473&amp;p=28258#p28258"><![CDATA[
Here is an AutoHotkey script I found somewhere on the web ages ago that I use to add &quot;Create shortcut&quot; functionality to the Classic Explorer toolbar. It does not work with more than one selected file at a time though. But if you set it to run as administrator from Compatibility tab in Properties, it can create a shortcut in UAC-protected locations where Explorer fails to create a shortcut and asks you to create one on the Desktop.<br /><br />The syntax is:<br />CreateShortcut.exe &lt;item to which you wish to create a shortcut&gt;<br /><br />So for a Classic Explorer Toolbar button, you must use this in the Command field:<br />&lt;Full path to CreateShortcut.exe &quot;%2&quot;<br />The shortcut will be created in the same folder as the original item.<br /><br />I did not create this AutoHotkey and I don't remember the source. Credits go to the original author, whoever wrote it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Aug 05, 2016 7:17 am</p><hr />
]]></content>
</entry>
</feed>