<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=703" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-06-02T05:35:05-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=703</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-02T05:35:05-07:00</updated>
<published>2013-06-02T05:35:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3473#p3473</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3473#p3473"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3473#p3473"><![CDATA[
Ah. That's a bug. Thanks for reporting! It's supposed to disable &quot;Open&quot; for regular folders but not for program shortcuts with jumplists.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jun 02, 2013 5:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2013-06-02T05:00:49-07:00</updated>
<published>2013-06-02T05:00:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3472#p3472</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3472#p3472"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3472#p3472"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />It looks like the &quot;Open&quot; item is greyed out in its context menu, which is why it isn't starting. I have no idea why the first 2 items are greyed out in the context menu. Also, what I meant was, does clicking Dxtory (the item just above &quot;Unpin&quot;) in this jumplist picture start the program? Or it does nothing? Since the program starts from search, the jumplist may be gotten corrupt.<br /><br /><img src="http://www.classicshell.net/forum/download/file.php?id=315" alt="" /><br /><br />To exit the menu, there is an &quot;Exit&quot; item when you right click the Start button. If it is missing, it must be disabled. Check in the Start Menu Settings -&gt; All Settings -&gt; &quot;Context menu&quot; tab that &quot;Enable Exit&quot; is enabled. Another way to exit is C:\Program Files\Classic Shell\ClassicStartMenu.exe -exit<br /></div><br /><br />Huh. apparently the problem is that &quot;Enable Windows Explorer&quot; works erroneusly. It not only disables the &quot;open file containing folder&quot; option but also opening the program in this case.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Sun Jun 02, 2013 5:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-02T04:15:42-07:00</updated>
<published>2013-06-02T04:15:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3471#p3471</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3471#p3471"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3471#p3471"><![CDATA[
It looks like the &quot;Open&quot; item is greyed out in its context menu, which is why it isn't starting. I have no idea why the first 2 items are greyed out in the context menu. Also, what I meant was, does clicking Dxtory (the item just above &quot;Unpin&quot;) in this jumplist picture start the program? Or it does nothing? Since the program starts from search, the jumplist may be gotten corrupt.<br /><br /><img src="http://www.classicshell.net/forum/download/file.php?id=315" alt="" /><br /><br />To exit the menu, there is an &quot;Exit&quot; item when you right click the Start button. If it is missing, it must be disabled. Check in the Start Menu Settings -&gt; All Settings -&gt; &quot;Context menu&quot; tab that &quot;Enable Exit&quot; is enabled. Another way to exit is C:\Program Files\Classic Shell\ClassicStartMenu.exe -exit<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jun 02, 2013 4:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2013-06-02T03:07:14-07:00</updated>
<published>2013-06-02T03:07:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3470#p3470</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3470#p3470"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3470#p3470"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />From your screenshot, it looks like it is the jumplist (that submenu is called the jumplist). After pinning the program to the taskbar, are you able to start the program by clicking the command under the &quot;Tasks&quot; (Feladatok) section from the taskbar jumplist?<br /></div><br />It's not there. As I said it was separate from those.<br />(I didn't mention it before but I'm on win8x64)<br /><br />PS:<br />If I try to change the language Classic Start menu says to right click on the button and click exit. The option doesn't exist.<br /><br />Stopping the start menu service and killing the process also doesn't work. So at this point I don't see a way to restart it without restarting the OS.<br />It would be nice if the program provided option the restart automatically when I changed the language. (Maybe it would useful in the start button context menu too.)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Sun Jun 02, 2013 3:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2013-06-02T03:06:12-07:00</updated>
<published>2013-06-02T03:06:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3469#p3469</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3469#p3469"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3469#p3469"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Unfortunately that means nothing to me <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /> I don't even recognize the language.<br /></div><br /><br />It's pretty much the same as other items except the topmost which means open is greyed out. (Curiously the second - which is something like: open file containing folder- is always greyed out. )<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Sun Jun 02, 2013 3:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-01T19:47:09-07:00</updated>
<published>2013-06-01T19:47:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3464#p3464</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3464#p3464"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3464#p3464"><![CDATA[
From your screenshot, it looks like it is the jumplist (that submenu is called the jumplist). After pinning the program to the taskbar, are you able to start the program by clicking the command under the &quot;Tasks&quot; (Feladatok) section from the taskbar jumplist?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jun 01, 2013 7:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-01T17:14:49-07:00</updated>
<published>2013-06-01T17:14:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3461#p3461</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3461#p3461"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3461#p3461"><![CDATA[
Unfortunately that means nothing to me <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /> I don't even recognize the language.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jun 01, 2013 5:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2013-06-01T17:08:32-07:00</updated>
<published>2013-06-01T17:08:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3460#p3460</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3460#p3460"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3460#p3460"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Show me what you get when you right-click on it.<br /></div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Sat Jun 01, 2013 5:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-01T14:21:53-07:00</updated>
<published>2013-06-01T14:21:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3459#p3459</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3459#p3459"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3459#p3459"><![CDATA[
Show me what you get when you right-click on it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jun 01, 2013 2:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2013-06-01T13:51:35-07:00</updated>
<published>2013-06-01T13:51:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3458#p3458</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3458#p3458"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3458#p3458"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />What happens if you click on the Dxtory text?<br /></div><br />You mean the one next to the blue icon? Nothing. If I hover the submenu comes up, but clicking doesn't do anything.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Sat Jun 01, 2013 1:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-06-01T13:20:27-07:00</updated>
<published>2013-06-01T13:20:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3457#p3457</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3457#p3457"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3457#p3457"><![CDATA[
What happens if you click on the Dxtory text?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jun 01, 2013 1:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2013-06-01T13:14:13-07:00</updated>
<published>2013-06-01T13:14:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3456#p3456</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3456#p3456"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3456#p3456"><![CDATA[
That popup menu has an entry for the main program separate from the rest (under them with the unpin option)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Sat Jun 01, 2013 1:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-01T12:07:03-07:00</updated>
<published>2013-06-01T12:07:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3455#p3455</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3455#p3455"/>
<title type="html"><![CDATA[Re: Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3455#p3455"><![CDATA[
Ok, so you mean you get a jumplist tasks section but clicking the main icon doesn't start the program from the Start Menu?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jun 01, 2013 12:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2013-06-01T11:57:48-07:00</updated>
<published>2013-06-01T11:57:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3454#p3454</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3454#p3454"/>
<title type="html"><![CDATA[Can't start a program from recent programs.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=703&amp;p=3454#p3454"><![CDATA[
Hello!<br />I'd like to report that I can't start a program, that appears on the recent programs list. I only get a sort of tools submenu, but I can't start the main program from here.<br />There's no problem with starting the program from quick search.<br /><br />(Copied from <a href="https://sourceforge.net/p/classicshell/bugs/231/" class="postlink">SF</a>, because I realized that this is the new place for bug reports)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Sat Jun 01, 2013 11:57 am</p><hr />
]]></content>
</entry>
</feed>