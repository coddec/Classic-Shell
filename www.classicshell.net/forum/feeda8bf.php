<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7629" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-06-12T17:31:11-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7629</id>
<entry>
<author><name><![CDATA[WebFritzi]]></name></author>
<updated>2017-06-12T17:31:11-07:00</updated>
<published>2017-06-12T17:31:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32990#p32990</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32990#p32990"/>
<title type="html"><![CDATA[Re: Standard Windows 10 Start menu after each reboot]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32990#p32990"><![CDATA[
Hey guys. Thanks so much. It worked out. The problem was that &quot;Start automatically for this user&quot; was not checked in the settings - for whatever reason. Thanks again!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20279">WebFritzi</a> — Mon Jun 12, 2017 5:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-05-22T06:28:27-07:00</updated>
<published>2017-05-22T06:28:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32735#p32735</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32735#p32735"/>
<title type="html"><![CDATA[Re: Standard Windows 10 Start menu after each reboot]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32735#p32735"><![CDATA[
Often the reason for this problem is that ClassicStartMenu.exe is marked to start as admin. Open its properties and Explorer and look at the Compatibility tab. All options should be turned off.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon May 22, 2017 6:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-21T23:58:09-07:00</updated>
<published>2017-05-21T23:58:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32732#p32732</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32732#p32732"/>
<title type="html"><![CDATA[Re: Standard Windows 10 Start menu after each reboot]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32732#p32732"><![CDATA[
Right click the Start button -&gt; Settings. Check &quot;Show all settings&quot;. On the Controls tab, set &quot;Left click opens&quot; to Classic Start Menu. There, you can also set what Shift+click opens, what Windows key opens and so on. Make sure that ClassicStartMenu.exe is running when your computer starts, otherwise it means Classic Shell is not starting correctly. <br /><br />There is an option 'Start automatically for this user' on the General Behavior tab of Start Menu Settings to launch the Start Menu when Windows boots. Make sure that it is checked.<br /><br />If ClassicStartMenu.exe is not running as per Task Manager, then it means the Start Menu isn't running at all. Then run C:\Program Files\Classic Shell\ClassicStartMenu.exe to manually start it. You can put a shortcut to this EXE in C:\Users\&lt;your user name&gt;\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup to load it when Windows boots.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun May 21, 2017 11:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[WebFritzi]]></name></author>
<updated>2017-05-21T11:47:44-07:00</updated>
<published>2017-05-21T11:47:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32728#p32728</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32728#p32728"/>
<title type="html"><![CDATA[Standard Windows 10 Start menu after each reboot]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7629&amp;p=32728#p32728"><![CDATA[
Hey dudes,<br /><br />ClassicShell works fine for me, but when I reboot Windows 10 it is gone and the standard Windows 10 start menu opens when I click on the Start button. This was already the case before the last Windows 10 update and with any ClassicShell version so far. Actually, it has been like this all the time on this computer (Windows 10 Prof, 64 Bit). Is this a known issue? I could not find anything about it...<br /><br />Thanks for reading.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20279">WebFritzi</a> — Sun May 21, 2017 11:47 am</p><hr />
]]></content>
</entry>
</feed>