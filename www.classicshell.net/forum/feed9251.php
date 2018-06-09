<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=1712" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-11-15T10:12:47-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=1712</id>
<entry>
<author><name><![CDATA[Yaron]]></name></author>
<updated>2013-11-15T10:12:47-07:00</updated>
<published>2013-11-15T10:12:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8777#p8777</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8777#p8777"/>
<title type="html"><![CDATA[Re: Custom Command Syntax]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8777#p8777"><![CDATA[
Thanks again for the detailed explanation. Great!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=102">Yaron</a> — Fri Nov 15, 2013 10:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-11-15T00:04:06-07:00</updated>
<published>2013-11-15T00:04:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8766#p8766</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8766#p8766"/>
<title type="html"><![CDATA[Re: Custom Command Syntax]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8766#p8766"><![CDATA[
Oh ok great! If you're a pro with AutoHotkey, then it's even better as it won't show a console window. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />You enter the parameters right after the executable path in the Command field. Make sure you enclose the path in double quotes and then enter the parameters. e.g.<br />&quot;C:\Windows\Nircmd.exe&quot; emptybin<br /><br />You can also use %1, %2 etc. %1 is the path of the current folder. Keep in mind that if the current folder is a root of a drive it will end with a backslash (like C:\) %2 is the path of the selected file (only when a single file is selected). Rest of them are documented in the help file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Nov 15, 2013 12:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Yaron]]></name></author>
<updated>2013-11-14T23:39:04-07:00</updated>
<published>2013-11-14T23:39:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8765#p8765</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8765#p8765"/>
<title type="html"><![CDATA[Re: Custom Command Syntax]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8765#p8765"><![CDATA[
Thank you. I appreciate your help.<br /><br />With your help in another post, I've written the following script in AutoHotkey: <br />#NoTrayIcon<br />FileRecycleEmpty<br />SoundPlay, %A_WinDir%\Media\Windows Recycle.wav, wait<br /><br /><br />I could have used one of your links or &quot;nircmd.exe emptybin&quot;.<br /><!-- m --><a class="postlink" href="http://www.nirsoft.net/utils/nircmd.html">http://www.nirsoft.net/utils/nircmd.html</a><!-- m --><br /><br />My question is how to use the parameter  &quot;emptybin&quot; in <strong>Classic Explorer -&gt; Custom toolbar button</strong> (Command or Link).<br />(I prefer the script. I'm just curious as to using parameters in CS).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=102">Yaron</a> — Thu Nov 14, 2013 11:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-11-14T22:35:49-07:00</updated>
<published>2013-11-14T22:35:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8763#p8763</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8763#p8763"/>
<title type="html"><![CDATA[Re: Custom Command Syntax]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8763#p8763"><![CDATA[
Windows doesn't have a command line process to empty the Recycle Bin but you can use bin.exe from here: <!-- m --><a class="postlink" href="http://www.maddogsw.com/cmdutils/">http://www.maddogsw.com/cmdutils/</a><!-- m --> or emptyrecyclebin.exe from here: <a href="http://www.optimumx.com/downloads.html#EmptyRecycleBin" class="postlink">http://www.optimumx.com/downloads.html#EmptyRecycleBin</a><br /><br />Disclaimer: Classic Shell does not bear any responsibility for third party software recommendations.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Nov 14, 2013 10:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Yaron]]></name></author>
<updated>2013-11-14T13:25:04-07:00</updated>
<published>2013-11-14T13:25:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8745#p8745</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8745#p8745"/>
<title type="html"><![CDATA[Empty Recycle Bin button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1712&amp;p=8745#p8745"><![CDATA[
I'd like to add a custom button to empty the Recycle Bin.<br /><br />I've added the following code to the Registry:<br />[HKEY_CURRENT_USER\Software\Classes\CLSID\{645FF040-5081-101B-9F08-00AA002F954E}\shell\empty\command]<br />&quot;DelegateExecute&quot;=&quot;&quot;<br />@=&quot;nircmd.exe emptybin&quot;<br /><br />What should be the syntax in Classic Explorer -&gt; custom button?<br /><br />Thank you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=102">Yaron</a> — Thu Nov 14, 2013 1:25 pm</p><hr />
]]></content>
</entry>
</feed>