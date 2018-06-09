<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=2304" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-12-27T11:17:15-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=2304</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-12-27T11:17:15-07:00</updated>
<published>2014-12-27T11:17:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=17173#p17173</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=17173#p17173"/>
<title type="html"><![CDATA[Re: Disable Pin to Start Menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=17173#p17173"><![CDATA[
First, if you are using version 4.1.0 or later you can just check the setting &quot;Disable the Pin shell extension&quot; in the Context Menu tab. No need to mess with the registry.<br /><br />Second, the context menu command is called &quot;An Startmenü anheften (Classic Shell)&quot;. The one you show belongs to Windows. Classic Shell has no control over it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Dec 27, 2014 11:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cbleek]]></name></author>
<updated>2014-12-27T03:00:08-07:00</updated>
<published>2014-12-27T03:00:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=17166#p17166</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=17166#p17166"/>
<title type="html"><![CDATA[Re: Disable Pin to Start Menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=17166#p17166"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />In Classic Shell 4.0.4, there is a new hidden setting &quot;DisablePinExt&quot;. Add a DWORD value of this name to either HKCU\Software\IvoSoft\ClassicStartMenu\Settings or HKLM\Software\IvoSoft\ClassicStartMenu. A value data of 1 hides the &quot;Pin to Start Menu (Classic Shell)&quot; context menu item. This hidden setting is present as a Group Policy setting too called 'Disable the Pin shell extension'.<br /></div><br /><br />I made the Registry Entry, but it had no effect (see attached picture)!?<br />I am using version 4.1.0.<br /><br />What else can I do, to remove the &quot;pin to start&quot; entry from the start menu?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6660">cbleek</a> — Sat Dec 27, 2014 3:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-03-12T10:02:13-07:00</updated>
<published>2014-03-12T10:02:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11434#p11434</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11434#p11434"/>
<title type="html"><![CDATA[Re: Disable Pin to Start Menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11434#p11434"><![CDATA[
No this setting is not there in the Settings UI. You can instead export the HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu branch or HKEY_LOCAL_MACHINE\Software\IvoSoft\ClassicStartMenu branch (depending on whether you configured the policy/registry for single user or all users).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Mar 12, 2014 10:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[smaragdus]]></name></author>
<updated>2014-03-12T09:40:08-07:00</updated>
<published>2014-03-12T09:40:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11428#p11428</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11428#p11428"/>
<title type="html"><![CDATA[Re: Disable Pin to Start Menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11428#p11428"><![CDATA[
@GauravK<br /><br />Many thanks for your immediate response. Your tip worked!<br /><br />Classic Shell is excellent, I wouldn't be able to use Windows 8 without it. Yet I think that for users who do not use &quot;Pin to Start&quot; feature it would be easier and handier if Classic Shell offered an option for enabling/disabling &quot;Pin to Start menu (Classic Shell)&quot; item during installation.<br /><br />I have one last question- if I export Classic Shell settings to a XML file, will this context menu item be affected (I suppose not).<br /><br />Thank you for the help!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3220">smaragdus</a> — Wed Mar 12, 2014 9:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-03-12T09:13:07-07:00</updated>
<published>2014-03-12T09:13:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11423#p11423</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11423#p11423"/>
<title type="html"><![CDATA[Re: Disable Pin to Start Menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11423#p11423"><![CDATA[
In Classic Shell 4.0.4, there is a new hidden setting &quot;DisablePinExt&quot;. Add a DWORD value of this name to either HKCU\Software\IvoSoft\ClassicStartMenu\Settings or HKLM\Software\IvoSoft\ClassicStartMenu. A value data of 1 hides the &quot;Pin to Start Menu (Classic Shell)&quot; context menu item. This hidden setting is present as a Group Policy setting too called 'Disable the Pin shell extension'.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Mar 12, 2014 9:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[smaragdus]]></name></author>
<updated>2014-03-12T09:07:29-07:00</updated>
<published>2014-03-12T09:07:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11422#p11422</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11422#p11422"/>
<title type="html"><![CDATA[Disable Pin to Start Menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2304&amp;p=11422#p11422"><![CDATA[
Hello, <br /><br />I would like to ask whether there is a way to remove a shell item that Classic Shell adds to Windows Explorer context menu- &quot;Pin to Start menu (Classic Shell)&quot;from Classic Shell settings without modifying the registry manually? <br /><br />I want to disable this entry- <!-- m --><a class="postlink" href="http://i62.tinypic.com/mj7ixj.png">http://i62.tinypic.com/mj7ixj.png</a><!-- m --> <br /><br />It appears when I right-click on an executable file. Is there a way to remove it from Windows Explorer? <br /><br />Thanks in advance! <br /><br />Regards<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3220">smaragdus</a> — Wed Mar 12, 2014 9:07 am</p><hr />
]]></content>
</entry>
</feed>