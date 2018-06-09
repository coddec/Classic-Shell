<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=6597" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-28T03:44:13-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=6597</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-28T03:44:13-07:00</updated>
<published>2016-08-28T03:44:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=29069#p29069</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=29069#p29069"/>
<title type="html"><![CDATA[Re: Environment passed to launched apps (specifically cmd.ex]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=29069#p29069"><![CDATA[
The Microsoft Start menu/screen search in Windows 8/Windows 10 has the ability to search shortcuts even if the user types the target EXE name of the shortcut. So if you type: cmd, it will return Command Prompt. If you type: wmplayer, it will return Windows Media Player.<br /><br />Every shortcut file has a &quot;Start in&quot; property. The command prompt shortcut has &quot;%HOMEDRIVE%%HOMEPATH%&quot; in the Start in. That is why it opens with the user's profile directory but when cmd.exe is run directly, it opens C:\Windows\system32.<br /><br />Classic Start Menu as of Classic Shell 4.3.0 does not have the ability to show shortcuts when you type the target EXE name. It will show you shortcuts only if you type the full or partial name of the shortcut. So you have three options:<br /><br />- Either type: command instead of cmd and make sure you open the shortcut called &quot;Command Prompt&quot;. It will start in C:\Users\&lt;your user name&gt;<br /><br />OR<br /><br />- Create a shortcut called &quot;Cmd&quot; linking to C:\Windows\system32\cmd.exe in your Start Menu -&gt; All Programs folder and specify its &quot;Start in&quot; path as %HOMEDRIVE%%HOMEPATH%<br /><br />OR<br /><br />- Open this folder in Explorer: C:\Users\&lt;your user name&gt;\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\System Tools\ and rename the &quot;Command Prompt&quot; shortcut to &quot;Cmd&quot;.<br /><br />After doing any of the above 3 things, your command prompt will open in C:\Users\&lt;your user name&gt; when you type: cmd<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Aug 28, 2016 3:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Lint]]></name></author>
<updated>2016-08-24T17:02:37-07:00</updated>
<published>2016-08-24T17:02:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28857#p28857</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28857#p28857"/>
<title type="html"><![CDATA[Re: Environment passed to launched apps (specifically cmd.ex]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28857#p28857"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Which item are you opening - a shortcut or the cmd.exe directly?<br /></div><br /><br />Just typing cmd into the 'search programs and files' box.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14875">Lint</a> — Wed Aug 24, 2016 5:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-23T22:24:20-07:00</updated>
<published>2016-08-23T22:24:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28844#p28844</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28844#p28844"/>
<title type="html"><![CDATA[Re: Environment passed to launched apps (specifically cmd.ex]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28844#p28844"><![CDATA[
Which item are you opening - a shortcut or the cmd.exe directly?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 23, 2016 10:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Lint]]></name></author>
<updated>2016-08-23T15:40:00-07:00</updated>
<published>2016-08-23T15:40:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28837#p28837</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28837#p28837"/>
<title type="html"><![CDATA[Environment passed to launched apps (specifically cmd.exe)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6597&amp;p=28837#p28837"><![CDATA[
I'm seeing a somewhat unexpected behavior on Classic Menu vs launching via the  windows search/cortana.<br /><br />The stock behavior is to have you homed in user profile directory (i.e. %userprofile%), via classic menu its homed to %systemroot%\system32 (where the exe is).<br /><br />Is this expected/normal? Is there a way to make it do the stock behavior?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14875">Lint</a> — Tue Aug 23, 2016 3:40 pm</p><hr />
]]></content>
</entry>
</feed>