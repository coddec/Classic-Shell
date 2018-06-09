<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=4266" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-02-16T19:37:03-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=4266</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-16T19:37:03-07:00</updated>
<published>2015-02-16T19:37:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17897#p17897</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17897#p17897"/>
<title type="html"><![CDATA[Re: &quot;Run as...&quot; context menu option for cmd.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17897#p17897"><![CDATA[
I see. This looks like a bug. I will look into it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Feb 16, 2015 7:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[anewuser]]></name></author>
<updated>2015-02-16T14:58:40-07:00</updated>
<published>2015-02-16T14:58:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17893#p17893</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17893#p17893"/>
<title type="html"><![CDATA[Re: &quot;Run as...&quot; context menu option for cmd.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17893#p17893"><![CDATA[
I'm sorry for not being specific enough. I've even failed to mention that I'm running Windows 10. Thank you for being friendly and providing direct support.<br /><br />I opened the ClassicShell settings, and re-enabled the &quot;Search the system path&quot; option (which I had disabled manually before). After that, the context menu worked for cmd / cmd.exe . Maybe that's the difference between our setups.<br /><br />I couldn't identify where my problematic result was from, but I've found a solution. I looked up the clickabled result for the search term &quot;prompt&quot; and opened the properties for it. It's a simple shortcut located at <div class="codetitle"><b>Code:</b></div><div class="codecontent">C:\Users\username\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\System Tools</div><br /><br />I was able to rename it to cmd, and now this is the only thing that shows up when I look up &quot;cmd&quot; with the &quot;Search the system path&quot; option disabled (<a href="https://i.imgur.com/Slws7Wx.png" class="postlink">screenshot</a>), exactly like I wanted.<br /><br />Thank you for your software and time again!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9392">anewuser</a> — Mon Feb 16, 2015 2:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-16T00:16:36-07:00</updated>
<published>2015-02-16T00:16:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17886#p17886</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17886#p17886"/>
<title type="html"><![CDATA[Re: &quot;Run as...&quot; context menu option for cmd.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17886#p17886"><![CDATA[
&quot;cmd&quot; works for me as well. The top result is cmd.exe and I do get &quot;Run as administrator&quot; for it. Even if it is the program itself it should have a right-click menu. The right-click menu for files in fact comes from Explorer, and not the start menu.<br /><br />You need to figure out what is it that gets found in your case. Locate that same file (be it a shortcut, exe, bat file, whatever), open it in Explorer and right-click on it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Feb 16, 2015 12:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[anewuser]]></name></author>
<updated>2015-02-15T20:25:23-07:00</updated>
<published>2015-02-15T20:25:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17884#p17884</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17884#p17884"/>
<title type="html"><![CDATA[Re: &quot;Run as...&quot; context menu option for cmd.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17884#p17884"><![CDATA[
I just typed &quot;Command Prompt&quot;, and this option indeed appears. But I was trying it only with the &quot;cmd&quot; keyword, and nothing happens when I right-click on it (likely because it's the result for the program itself, not a shortcut). I can try to get used to typing &quot;prompt&quot; instead of the  &quot;cmd&quot;, but it'll take a while since I'm so used to it and do it automatically.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9392">anewuser</a> — Sun Feb 15, 2015 8:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-15T20:02:37-07:00</updated>
<published>2015-02-15T20:02:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17883#p17883</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17883#p17883"/>
<title type="html"><![CDATA[Re: &quot;Run as...&quot; context menu option for cmd.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17883#p17883"><![CDATA[
It works for me. Do you not see &quot;Run as administrator&quot; when you right click on the Command Prompt shortcut?<br />Also you can press Ctrl+Shift+Enter to run the selected item as admin. Works for documents too.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Feb 15, 2015 8:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[anewuser]]></name></author>
<updated>2015-02-15T16:24:32-07:00</updated>
<published>2015-02-15T16:24:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17882#p17882</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17882#p17882"/>
<title type="html"><![CDATA[&quot;Run as...&quot; context menu option for cmd.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4266&amp;p=17882#p17882"><![CDATA[
Something useful that the Windows 8.1  search pane added was the option to run the Windows Command Prompt (cmd.exe) as an administrator by right-clicking on it on the search results. Can you add it to Classic Shell too?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9392">anewuser</a> — Sun Feb 15, 2015 4:24 pm</p><hr />
]]></content>
</entry>
</feed>