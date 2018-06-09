<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=20" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-01-07T23:12:31-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=20</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-07T23:12:31-07:00</updated>
<published>2013-01-07T23:12:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=79#p79</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=79#p79"/>
<title type="html"><![CDATA[Re: How to end process in Task Manager]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=79#p79"><![CDATA[
ClassicStartMenu.exe is not a commonly started program. No need to pollute the App Paths with it. If a script needs the path, it can be found in HKLM\Software\IvoSoft\ClassicShell<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 07, 2013 11:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-07T23:06:49-07:00</updated>
<published>2013-01-07T23:06:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=78#p78</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=78#p78"/>
<title type="html"><![CDATA[Re: How to end process in Task Manager]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=78#p78"><![CDATA[
Given that people do need to exit CSM and restart it, why not App Paths? <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />. It's a harmless improvement and users need to exit the menu for *some* changes definitely. In fact, while adding to App Paths, it can be shortened to CSM instead of &quot;ClassicStartMenu.exe&quot;. It's easier for scripts too since one may choose to install Classic Shell in D:\Program Files instead of C:\. Most users aren't aware of App Paths to add it themselves.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 07, 2013 11:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ripyard]]></name></author>
<updated>2013-01-07T21:13:42-07:00</updated>
<published>2013-01-07T21:13:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=66#p66</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=66#p66"/>
<title type="html"><![CDATA[Re: How to end process in Task Manager]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=66#p66"><![CDATA[
Thanks. I figured it out.<br /><br />I used the following on the command line:<br /><span style="color:#3366ff;">&gt;&quot;C:\Program Files\Classic Shell\ClassicStartMenu.exe&quot; -exit</span><br /><br />And thanks for explanation about the process and why &quot;End task&quot; in the Task Manager does not kill it. Now I get it. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=73">ripyard</a> — Mon Jan 07, 2013 9:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-07T19:06:03-07:00</updated>
<published>2013-01-07T19:06:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=60#p60</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=60#p60"/>
<title type="html"><![CDATA[Re: How to end process in Task Manager]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=60#p60"><![CDATA[
You have to enter it on the command line. Of course you have to be in the Classic Shell directory, where ClassicStartMenu.exe is.<br />The start menu is not in that process. The start menu is in the explorer process. The ClassicStartMenu process is there to inject the start menu into explorer and to watch in case explorer restarts for some reason.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 07, 2013 7:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ripyard]]></name></author>
<updated>2013-01-07T18:54:57-07:00</updated>
<published>2013-01-07T18:54:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=57#p57</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=57#p57"/>
<title type="html"><![CDATA[Re: How to end process in Task Manager]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=57#p57"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Sure. ClassicStartMenu.exe -exit<br /></div><br /><br />Where would one use that command? It doesn't work at command prompt, and it doesn't work within a AutoHotkey script.<br /><br />And how do you end Classic Start Menu within Task Manager? I'm confused because &quot;Classic Start Menu&quot; is listed under &quot;Processes&quot; within Task Manager but when you click &quot;End task&quot; it disappears from the list but the software remains running. And there doesn't seem to be any other process in Task Manager to end. I don't understand how a software can have its process ended and still remain functioning.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=73">ripyard</a> — Mon Jan 07, 2013 6:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-07T08:58:36-07:00</updated>
<published>2013-01-07T08:58:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=35#p35</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=35#p35"/>
<title type="html"><![CDATA[Re: How to end process in Task Manager]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=35#p35"><![CDATA[
Sure. ClassicStartMenu.exe -exit<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 07, 2013 8:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ripyard]]></name></author>
<updated>2013-01-07T07:40:01-07:00</updated>
<published>2013-01-07T07:40:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=33#p33</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=33#p33"/>
<title type="html"><![CDATA[How to end process in Task Manager]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=20&amp;p=33#p33"><![CDATA[
Greetings.<br /><br />How do you end the ClassicStartMenu.exe in Task Manager? Because &quot;end task&quot; using Task Manager does not end it. It remains running even though it disappears from the Task Manager list.<br /><br />Or any method other than right clicking the Start button and clicking &quot;Exit&quot;?<br /><br />I'm trying to build a script for use with AutoHotKey that exits Class Start Menu with a hotkey, and without using a mouse driven or click method.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=73">ripyard</a> — Mon Jan 07, 2013 7:40 am</p><hr />
]]></content>
</entry>
</feed>