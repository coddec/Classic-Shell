<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=2908" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-07-02T11:34:55-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=2908</id>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2014-07-02T11:34:55-07:00</updated>
<published>2014-07-02T11:34:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13735#p13735</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13735#p13735"/>
<title type="html"><![CDATA[Re: Running 2 commands for menu items ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13735#p13735"><![CDATA[
Thanks, fixed.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Wed Jul 02, 2014 11:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-07-02T11:13:54-07:00</updated>
<published>2014-07-02T11:13:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13734#p13734</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13734#p13734"/>
<title type="html"><![CDATA[Re: Running 2 commands for menu items ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13734#p13734"><![CDATA[
Try this:<br /><br /><br />Sub RunApplication(ByVal sFile)<br /><br />Dim WShell : Set WShell = CreateObject(&quot;WScript.Shell&quot;)<br />WShell.Run Chr(34) &amp; sFile &amp; Chr(34), 8, false<br /><br />End Sub<br /><br />RunApplication &quot;C:\Program Files\Tools\desklock.exe&quot;<br />RunApplication &quot;C:\Program Files\Tools\shutdown.exe&quot;&quot; -s suspend -l 0&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jul 02, 2014 11:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2014-07-02T11:34:13-07:00</updated>
<published>2014-07-02T10:46:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13733#p13733</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13733#p13733"/>
<title type="html"><![CDATA[Re: Running 2 commands for menu items ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13733#p13733"><![CDATA[
Like i told you i don't have programming skills, i tried this:<br /><br />Sub RunApplication(ByVal sFile)<br /><br />    Dim WShell : Set WShell = CreateObject(&quot;WScript.Shell&quot;)<br />    WShell.Run Chr(34) &amp; sFile &amp; Chr(34), 8, false<br /><br />End Sub<br /><br />RunApplication &quot;C:\Program Files\Tools\desklock.exe&quot;<br />RunApplication &quot;C:\Program Files\Tools\shutdown.exe&quot; -s suspend -l 0<br /><br />Then i tried this, still unsuccessfully.. &gt;&gt;<br /><br />Sub RunApplication(ByVal sFile)<br /><br />    Dim WShell : Set WShell = CreateObject(&quot;WScript.Shell&quot;)<br />    WShell.Run Chr(34) &amp; sFile &amp; Chr(34), 8, false<br /><br />End Sub<br /><br />RunApplication &quot;C:\Program Files\Tools\desklock.exe&quot;<br />RunApplication &quot;&quot;C:\Program Files\Tools\shutdown.exe&quot; -s suspend -l 0&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Wed Jul 02, 2014 10:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-07-02T07:39:36-07:00</updated>
<published>2014-07-02T07:39:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13730#p13730</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13730#p13730"/>
<title type="html"><![CDATA[Re: Running 2 commands for menu items ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13730#p13730"><![CDATA[
Looks like you have an extra quote at the end.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 02, 2014 7:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2014-07-02T00:23:06-07:00</updated>
<published>2014-07-02T00:23:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13724#p13724</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13724#p13724"/>
<title type="html"><![CDATA[Re: Running 2 commands for menu items ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13724#p13724"><![CDATA[
Ivo, i don't have programming skills, it would be cool if you could fix my vbs, i picked an ex online &amp; it doesn't work:<br /><br />the content of my vbs file:<br /><br />Sub RunApplication(ByVal sFile)<br /><br />    Dim WShell : Set WShell = CreateObject(&quot;WScript.Shell&quot;)<br />    WShell.Run Chr(34) &amp; sFile &amp; Chr(34), 8, false<br /><br />End Sub<br /><br />RunApplication &quot;C:\Program Files\Tools\desklock.exe&quot;<br />RunApplication &quot;C:\Program Files\Tools\shutdown.exe&quot; -s suspend -l 0&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Wed Jul 02, 2014 12:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-07-01T21:19:16-07:00</updated>
<published>2014-07-01T21:19:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13714#p13714</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13714#p13714"/>
<title type="html"><![CDATA[Re: Running 2 commands for menu items ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13714#p13714"><![CDATA[
The command can only run one thing. If you want to do multiple things you need to create a script of some sort, like .BAT or .VBS.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 01, 2014 9:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2014-07-01T19:28:07-07:00</updated>
<published>2014-07-01T19:28:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13711#p13711</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13711#p13711"/>
<title type="html"><![CDATA[Running 2 commands for menu items ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2908&amp;p=13711#p13711"><![CDATA[
How can i use 2 commands in the command section while editing a menu item ?<br /><br />&quot;%SystemDrive%\Program Files\Tools\desklock.exe&quot;;&quot;%windir%\System32\rundll32.exe powrprof.dll,SetSuspendState &quot;<br />&amp; this<br />&quot;%SystemDrive%\Program Files\Tools\desklock.exe&quot;;sleep<br />&amp; this<br />&quot;%SystemDrive%\Program Files\Tools\desklock.exe&quot;;&quot;sleep&quot;<br /><br />without success .. .<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Tue Jul 01, 2014 7:28 pm</p><hr />
]]></content>
</entry>
</feed>