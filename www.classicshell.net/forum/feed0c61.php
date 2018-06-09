<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=8029" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-10-20T11:25:54-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=8029</id>
<entry>
<author><name><![CDATA[Wotan]]></name></author>
<updated>2017-10-20T11:25:54-07:00</updated>
<published>2017-10-20T11:25:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34523#p34523</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34523#p34523"/>
<title type="html"><![CDATA[Re: Classic Start Menu opens and closes after Session Logon]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34523#p34523"><![CDATA[
Hello,<br /><br />thank you for the answer.<br /><br />Well, I know that.<br />I thought about settings like:<br /><br />- <strong>Auto-start delay</strong> (<a href="http://getadmx.com/?Category=ClassicShell&amp;Policy=IvoSoft.Policies.ClassicStartMenu::CSM_AutoStartDelay&amp;Language=en-en" class="postlink">http://getadmx.com/?Category=ClassicShell&amp;Policy=IvoSoft.Policies.ClassicStartMenu::CSM_AutoStartDelay&amp;Language=en-en</a>)<br />- <strong>Delay loading of icons</strong> (<a href="http://getadmx.com/?Category=ClassicShell&amp;Policy=IvoSoft.Policies.ClassicStartMenu::CSM_DelayIcons&amp;Language=en-en" class="postlink">http://getadmx.com/?Category=ClassicShell&amp;Policy=IvoSoft.Policies.ClassicStartMenu::CSM_DelayIcons&amp;Language=en-en</a>)<br /><br />I wanted to know, if they would be suitable for the mentioned issue.<br />Perhaps anybody could share some experience.<br /><br />At least the delevoper should know, why he has implemented these settings ...<br /><br />Thank you<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23772">Wotan</a> — Fri Oct 20, 2017 11:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-10-20T07:29:51-07:00</updated>
<published>2017-10-20T07:29:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34518#p34518</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34518#p34518"/>
<title type="html"><![CDATA[Re: Classic Start Menu opens and closes after Session Logon]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34518#p34518"><![CDATA[
If the remote computer has many tasks set to run at logon or startup, I think it's normal if some of them are stealing focus as you just log in to your session. Just wait for a few seconds.<br /><br />If you can identify which apps or tasks are doing this and they are not necessary, you can disable them. SysInternals AutoRuns would be the best tool to show you everything in detail: <!-- m --><a class="postlink" href="https://docs.microsoft.com/en-us/sysinternals/downloads/autoruns">https://docs.microsoft.com/en-us/sysint ... s/autoruns</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Oct 20, 2017 7:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Wotan]]></name></author>
<updated>2017-10-19T22:44:01-07:00</updated>
<published>2017-10-19T22:44:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34514#p34514</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34514#p34514"/>
<title type="html"><![CDATA[Classic Start Menu opens and closes after Session Logon]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8029&amp;p=34514#p34514"><![CDATA[
Hello,<br /><br />I have implemented Classic Start Menu on a Windows Server 2016 Terminal Server.<br />Classic Start Menu has been setup through Group Policy. (ADMX-Template)<br /><br />I start a session through RDP and as soon as the session is loaded and I have control, I click the start-button and the start menu opens.<br />I think there are still some windows logon tasks running, which take over the focus, and the start menu closes. I have to press the start-button again and the start menu opens.<br />Again some tasks are running and the start menu closes. After some seconds everything is loaded and then everything is fine.<br /><br />I think this is normal behavior and everybody has this issue, but I still wanted to ask, if there is a <strong>possibility to improve the user experience?</strong><br /><br />Thank you<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23772">Wotan</a> — Thu Oct 19, 2017 10:44 pm</p><hr />
]]></content>
</entry>
</feed>