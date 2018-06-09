<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7941" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-28T10:15:27-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7941</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-28T10:15:27-07:00</updated>
<published>2017-09-28T10:15:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34260#p34260</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34260#p34260"/>
<title type="html"><![CDATA[Re: Support for AutoStart/StartUp-Folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34260#p34260"><![CDATA[
I don't remember any gotchas. Use it and let us know if you find any drawbacks. Already discovered this one: shortcuts placed in Startup folder don't start.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Sep 28, 2017 10:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MichaelFX]]></name></author>
<updated>2017-09-28T09:17:19-07:00</updated>
<published>2017-09-28T09:17:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34255#p34255</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34255#p34255"/>
<title type="html"><![CDATA[Re: Support for AutoStart/StartUp-Folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34255#p34255"><![CDATA[
I think you are right. Sounds logical.<br />Of course there are other ways running a program on user-login. I would come around that.<br /><br />Are there any other known drawbacks when using the built-in Classic Shell redirection?<br />Microsoft Folder Redirection also has drawbacks. What would you recommend to use?<br /><br />Thank you!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24642">MichaelFX</a> — Thu Sep 28, 2017 9:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-28T06:51:42-07:00</updated>
<published>2017-09-28T06:51:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34254#p34254</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34254#p34254"/>
<title type="html"><![CDATA[Re: Support for AutoStart/StartUp-Folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34254#p34254"><![CDATA[
The actual mechanism for starting a program by placing its shortcut in the Startup folder is a feature of Windows. If you are using Classic Shell's Group Policy Settings to redirect the Start Menu folder, try using the Windows policy settings instead. Then shortcuts placed under the redirected Startup folder might auto-start.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Sep 28, 2017 6:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MichaelFX]]></name></author>
<updated>2017-09-28T05:52:42-07:00</updated>
<published>2017-09-28T05:52:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34253#p34253</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34253#p34253"/>
<title type="html"><![CDATA[Support for AutoStart/StartUp-Folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7941&amp;p=34253#p34253"><![CDATA[
Hello,<br /><br />I am testing Classic Start Menu in an enterprise environment.<br />I did setup group policies with the ADMX-templates. The following settings are in place to redirect the start menu to a network-share:<br /><br />&gt; Common Start Menu folder | \\FileServer\Share<br />&gt; Start Menu folder | \\FileServer\Share<br /><br />I did place &quot;Notepad.lnk&quot; into the &quot;\\FileServer\Share\Programs\<strong>Startup</strong>&quot; Folder.<br /><br />I hoped, that Notepad would automatically launch on users-logon, but nothing did happen.<br />Should this work? / Is the AutoStart/StartUp-Folder supported by Classic Shell?<br /><br />Thank you!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24642">MichaelFX</a> — Thu Sep 28, 2017 5:52 am</p><hr />
]]></content>
</entry>
</feed>