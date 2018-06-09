<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=2462" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-04-13T12:23:11-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=2462</id>
<entry>
<author><name><![CDATA[Yaron]]></name></author>
<updated>2014-04-13T12:23:11-07:00</updated>
<published>2014-04-13T12:23:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12147#p12147</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12147#p12147"/>
<title type="html"><![CDATA[Re: Open - menu button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12147#p12147"><![CDATA[
Thanks again. I appreciate your help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=102">Yaron</a> — Sun Apr 13, 2014 12:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-04-13T11:27:26-07:00</updated>
<published>2014-04-13T11:27:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12146#p12146</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12146#p12146"/>
<title type="html"><![CDATA[Re: Open - menu button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12146#p12146"><![CDATA[
No that's not possible for an Explorer toolbar button AFAIK. The programs and icon are obtained on-the-fly from the Registry. You can get the same in the right click context menu though which has Open With.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Apr 13, 2014 11:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Yaron]]></name></author>
<updated>2014-04-13T10:10:32-07:00</updated>
<published>2014-04-13T10:10:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12140#p12140</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12140#p12140"/>
<title type="html"><![CDATA[Re: Open - menu button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12140#p12140"><![CDATA[
Thank you GauravK. I really appreciate it.<br /><br />Would it be possible to emulate exactly the behavior of the button in the command bar?<br />1) Getting the list of additional potential programs for the selected item when clicking the arrow (e.g. Notepad++ for a text file)? <br />2) Can I set the icon to change dynamically according to the selected item?<br /><br />Best regards.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=102">Yaron</a> — Sun Apr 13, 2014 10:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-04-12T23:24:32-07:00</updated>
<published>2014-04-12T23:24:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12129#p12129</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12129#p12129"/>
<title type="html"><![CDATA[Re: Open - menu button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12129#p12129"><![CDATA[
For &quot;Open&quot;, create a custom command button with the target:<br /><br /><strong>open %2</strong><br /><br />That will work like Open. As for the Open with/Choose default program functionality of that button, create a subitem for the above button, and use this command:<br /><br /><strong>rundll32.exe shell32.dll,OpenAs_RunDLL %2</strong><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Apr 12, 2014 11:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Yaron]]></name></author>
<updated>2014-04-12T14:13:58-07:00</updated>
<published>2014-04-12T14:13:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12118#p12118</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12118#p12118"/>
<title type="html"><![CDATA[Open - menu button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2462&amp;p=12118#p12118"><![CDATA[
Hello,<br /><br />Could you please duplicate the Open - menu button (in the Command Bar, displaying the associated program when an item is selected) to CS toolbar?<br />I'd like to remove the Command Bar; Open is the only button I find useful.<br /><br />Thank you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=102">Yaron</a> — Sat Apr 12, 2014 2:13 pm</p><hr />
]]></content>
</entry>
</feed>