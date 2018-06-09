<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=163" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-09-24T13:24:33-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=163</id>
<entry>
<author><name><![CDATA[Neil Swartz]]></name></author>
<updated>2013-09-24T13:24:33-07:00</updated>
<published>2013-09-24T13:24:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6790#p6790</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6790#p6790"/>
<title type="html"><![CDATA[Re: pin to startmenu items do not show in the pin to start m]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6790#p6790"><![CDATA[
It worked - Thank you for you fast response.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=772">Neil Swartz</a> — Tue Sep 24, 2013 1:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-24T11:28:51-07:00</updated>
<published>2013-09-24T11:28:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6788#p6788</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6788#p6788"/>
<title type="html"><![CDATA[Re: pin to startmenu items do not show in the pin to start m]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6788#p6788"><![CDATA[
@Neil Swartz, merge this to the registry (paste it into Notepad, save as .reg file and double click it) to remove &quot;Pin to Start Menu (Classic Shell)&quot;:<br /><br />Windows Registry Editor Version 5.00<br />[-HKEY_CLASSES_ROOT\exefile\shellex\ContextMenuHandlers\StartMenuExt]<br />[-HKEY_CLASSES_ROOT\lnkfile\shellex\ContextMenuHandlers\StartMenuExt]<br /><br /><br />However it may return after you update Classic Shell<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Sep 24, 2013 11:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neil Swartz]]></name></author>
<updated>2013-09-24T10:40:46-07:00</updated>
<published>2013-09-24T10:40:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6787#p6787</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6787#p6787"/>
<title type="html"><![CDATA[Re: pin to startmenu items do not show in the pin to start m]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=6787#p6787"><![CDATA[
How does one remove Pin to the Start Menu (Classic Shell) context menu.  I will never pin anything anywhere.  I have removed all Pin to... context menu/toolbar entries except for this one.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=772">Neil Swartz</a> — Tue Sep 24, 2013 10:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-24T10:56:28-07:00</updated>
<published>2013-07-24T10:56:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=5042#p5042</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=5042#p5042"/>
<title type="html"><![CDATA[Re: pin to startmenu items do not show in the pin to start m]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=5042#p5042"><![CDATA[
Well, good news for you. Now the latest public beta version of Classic Shell which is available from the home page has proper 'Pin to Start Menu (Classic Shell)' in the right click menu. Try it if you are interested.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jul 24, 2013 10:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-28T03:42:28-07:00</updated>
<published>2013-01-28T03:42:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=661#p661</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=661#p661"/>
<title type="html"><![CDATA[Re: pin to startmenu items do not show in the pin to start m]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=661#p661"><![CDATA[
The right click &quot;Pin to Start&quot; item only pins to the Windows 8 Start screen. To get &quot;Pin to Classic Start Menu&quot; item for versions 3.6.x, follow the tutorial here: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=5&amp;t=61">viewtopic.php?f=5&amp;t=61</a><!-- l -->. Another way to pin is to simply drag and drop items to the pinnable area. Or yet another way to copy-paste shortcuts in the shell:Start Menu folder.<br /><br />You can drag anything over the Start button, wait for the Start menu to open and then drop it in the pinnable area.Version 3.9.0 and later have a better integrated pinning feature.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 28, 2013 3:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xconan]]></name></author>
<updated>2013-01-27T23:58:04-07:00</updated>
<published>2013-01-27T23:58:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=657#p657</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=657#p657"/>
<title type="html"><![CDATA[pin to startmenu items do not show in the pin to start menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=163&amp;p=657#p657"><![CDATA[
When pinning items to the start menu, items will appear in the Windows 8 start menu, however items do not appear in the classic shell start menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=214">xconan</a> — Sun Jan 27, 2013 11:58 pm</p><hr />
]]></content>
</entry>
</feed>