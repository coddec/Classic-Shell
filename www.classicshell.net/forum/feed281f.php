<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=7292" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-02-16T09:52:49-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=7292</id>
<entry>
<author><name><![CDATA[GCRaistlin]]></name></author>
<updated>2017-02-16T09:52:49-07:00</updated>
<published>2017-02-16T09:52:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31684#p31684</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31684#p31684"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31684#p31684"><![CDATA[
It would be definitely a more correct solution than the current implementation of w8classic.<br /><br />Returning to the subject of Windows 8.1 [Dark Active Button] theme, it's a good idea to apply Windows default theme first. To be honest, it's the only way I was able to make it work. Unsigned themes service restart didn't help, and it isn't needed with this method.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17389">GCRaistlin</a> — Thu Feb 16, 2017 9:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-02-16T09:28:22-07:00</updated>
<published>2017-02-16T09:28:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31683#p31683</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31683#p31683"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31683#p31683"><![CDATA[
<div class="quotetitle">GCRaistlin wrote:</div><div class="quotecontent"><br />Unfortunately it works only for sessions w8classic wasn't enabled using userinit replacement trick for. It is was then there's really no such an object.<br /></div><br /><br />Yes. There is method of deleting the object (non-reversible) and another method, just changing the access rights (reversible). If you deleted the object, you cannot change the access rights on it, obviously.<br /><br />I think the changing access rights method can be made into a command-line utility or into a VBS/PowerShell/AHK script. I do not have enough skills for it though.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Thu Feb 16, 2017 9:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GCRaistlin]]></name></author>
<updated>2017-02-16T07:09:34-07:00</updated>
<published>2017-02-16T07:09:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31681#p31681</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31681#p31681"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31681#p31681"><![CDATA[
<div class="quotetitle">Anixx wrote:</div><div class="quotecontent"><br />You can temporarily enable or disable Classic theme by changing the access rights to \Sessions\X\Windows\ThemeSection object (where X is the number of the current session) using for instance, ObjDir utility: <!-- m --><a class="postlink" href="https://www.osronline.com/article.cfm?article=42">https://www.osronline.com/article.cfm?article=42</a><!-- m --><br /></div><br />Unfortunately it works only for sessions w8classic wasn't enabled using userinit replacement trick for. It is was then there's really no such an object.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17389">GCRaistlin</a> — Thu Feb 16, 2017 7:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GCRaistlin]]></name></author>
<updated>2017-02-13T13:42:14-07:00</updated>
<published>2017-02-13T13:42:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31654#p31654</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31654#p31654"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31654#p31654"><![CDATA[
That was my fault - I had the old version of w8classic. Sorry for such a stupid reason.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17389">GCRaistlin</a> — Mon Feb 13, 2017 1:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-02-13T06:56:17-07:00</updated>
<published>2017-02-13T06:56:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31651#p31651</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31651#p31651"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31651#p31651"><![CDATA[
<div class="quotetitle">GCRaistlin wrote:</div><div class="quotecontent"><br /><div class="quotetitle">Anixx wrote:</div><div class="quotecontent">There is a fix for Firefox. There are actually several different methods, for instance, this one:<br /></div><br />Thanks, it works, but... not squred tabs look really ugly. Can you give a link or something to different ones?</div><br /><br />You can make tabs squared with other extensions. Just install whatever extensions you want. AFAIK there is &quot;squared tabs extension&quot; or the like. You can also try different themes. Another method is explained here: <!-- m --><a class="postlink" href="http://winclassic.boards.net/thread/39/extended-glass-borders-fix">http://winclassic.boards.net/thread/39/ ... orders-fix</a><!-- m --><br /><br />All the methos are listed on the linked site.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Mon Feb 13, 2017 6:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GCRaistlin]]></name></author>
<updated>2017-02-13T06:40:09-07:00</updated>
<published>2017-02-13T06:40:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31650#p31650</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31650#p31650"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31650#p31650"><![CDATA[
<div class="quotetitle">Anixx wrote:</div><div class="quotecontent"><br />There is a fix for Firefox. There are actually several different methods, for instance, this one:<br /></div><br />Thanks, it works, but... not squred tabs look really ugly. Can you give a link or something to different ones?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17389">GCRaistlin</a> — Mon Feb 13, 2017 6:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-02-12T16:03:24-07:00</updated>
<published>2017-02-12T16:03:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31649#p31649</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31649#p31649"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31649#p31649"><![CDATA[
&gt; That's an unwanted action. I'll look closer at your links, though. Thanks.<br /><br />To switch on or off the Classic theme you have to have the admin rights. A non-admin user can use it but only if it was prevuously installed by an admin.<br /><br />&gt; There's another issue, and it's more serious one. With w8classic, my Firefox window title looks like this:<br /><br />There is a fix for Firefox. There are actually several different methods, for instance, this one: <br /><!-- m --><a class="postlink" href="http://winclassic.boards.net/thread/25/windows-classic-theme-fix-firefox">http://winclassic.boards.net/thread/25/ ... ix-firefox</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Feb 12, 2017 4:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GCRaistlin]]></name></author>
<updated>2017-02-12T14:58:56-07:00</updated>
<published>2017-02-12T14:58:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31647#p31647</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31647#p31647"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31647#p31647"><![CDATA[
<div class="quotetitle">Anixx wrote:</div><div class="quotecontent"><br />Start it as admin<br /></div><br />That's an unwanted action. I'll look closer at your links, though. Thanks.<br /><br />There's another issue, and it's more serious one. With w8classic, my Firefox window title looks like this:<br /><a href="http://fastpic.ru/view/90/2017/0213/922aa0e51dcbc6c9c4f805fa68277ced.png.html" class="postlink"><img src="http://i90.fastpic.ru/thumb/2017/0213/ed/922aa0e51dcbc6c9c4f805fa68277ced.jpeg" alt="" /></a><br />Any ideas?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17389">GCRaistlin</a> — Sun Feb 12, 2017 2:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-02-12T12:53:08-07:00</updated>
<published>2017-02-12T12:53:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31644#p31644</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31644#p31644"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31644#p31644"><![CDATA[
<div class="quotetitle">GCRaistlin wrote:</div><div class="quotecontent"><br /><strong>Splitwirez<br /></strong>Yes, that's what I want exactly. And what I get, too. But in some situations there's a need to enable the native Win8 look back. I'm trying to find a way to do this without entering an admin password.<br /></div><br /><br />You can temporarily enable or disable Classic theme by changing the access rights to \Sessions\X\Windows\ThemeSection object (where X is the number of the current session) using for instance, ObjDir utility: <!-- m --><a class="postlink" href="https://www.osronline.com/article.cfm?article=42">https://www.osronline.com/article.cfm?article=42</a><!-- m --><br /><br />Start it as admin and remove read and query privs from the object ThemeSection for users you want to have Classic theme under current session. Then any windows started from those users will have Classic theme.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Feb 12, 2017 12:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-02-12T12:47:43-07:00</updated>
<published>2017-02-12T12:47:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31643#p31643</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31643#p31643"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31643#p31643"><![CDATA[
<div class="quotetitle">GCRaistlin wrote:</div><div class="quotecontent"><br />It may be a bit difficult to copy Wi-Fi key from KeePass on the login screen.<br /></div><br /><br />You can use a third-party Wi-Fi utility. Such as NetSetMan, for instance:<br /><br /><img src="http://storage2.static.itmages.ru/i/16/0605/h_1465140902_1594515_2eee0dbcfa.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Feb 12, 2017 12:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GCRaistlin]]></name></author>
<updated>2017-02-12T12:46:33-07:00</updated>
<published>2017-02-12T12:46:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31642#p31642</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31642#p31642"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31642#p31642"><![CDATA[
<strong>Splitwirez<br /></strong>Sad to hear. But anyway, what the renaming thing is all about?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17389">GCRaistlin</a> — Sun Feb 12, 2017 12:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-02-12T12:44:23-07:00</updated>
<published>2017-02-12T12:44:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31641#p31641</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31641#p31641"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31641#p31641"><![CDATA[
<div class="quotetitle">GCRaistlin wrote:</div><div class="quotecontent"><br />An addition to your bug list:<br />- standard Task Manager doesn't work. But Sysinternals' Process Explorer is better anyway.<br /></div><br /><br />I use this one:<br /><br /><!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-restore-the-good-old-task-manager-in-windows-8/">http://winaero.com/blog/how-to-restore- ... windows-8/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Feb 12, 2017 12:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2017-02-12T12:37:21-07:00</updated>
<published>2017-02-12T12:37:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31640#p31640</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31640#p31640"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31640#p31640"><![CDATA[
<div class="quotetitle">GCRaistlin wrote:</div><div class="quotecontent"><br />But in some situations there's a need to enable the native Win8 look back. I'm trying to find a way to do this without entering an admin password.<br /></div><br />Yeah I misunderstood the problem, sorry .-.<br /><br />I'm afraid I can't help you with that, currently the only way to re-enable Visual Styles is to log out and log back in .-.<br /><br />That may change in the future though. Who knows what the future may bring?  <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Sun Feb 12, 2017 12:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GCRaistlin]]></name></author>
<updated>2017-02-12T12:35:18-07:00</updated>
<published>2017-02-12T12:35:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31639#p31639</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31639#p31639"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31639#p31639"><![CDATA[
<strong>Splitwirez<br /></strong>No, I don't have it installed. Look at the screenshot above - it's not the Classic Theme. And yes, I want &quot;Enable Classic Theme Now, for the current user session&quot; feature.<br />Can you please give me a link to the instructions?<br /><br /><strong>Anixx<br /></strong><br />Yes, that's what I want exactly. And what I get, too. But in some situations there's a need to enable the native Win8 look back. I'm trying to find a way to do this without entering an admin password.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17389">GCRaistlin</a> — Sun Feb 12, 2017 12:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-02-12T12:25:11-07:00</updated>
<published>2017-02-12T12:25:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31638#p31638</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31638#p31638"/>
<title type="html"><![CDATA[Re: Change the look of the active task on the taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7292&amp;p=31638#p31638"><![CDATA[
<div class="quotetitle">GCRaistlin wrote:</div><div class="quotecontent"><br />Is it possible to get this normal look on Win8?<br /></div><br /><br />If you like something like this (my Win 8.1):<br /><br /><a href="https://itmages.ru/image/view/4907904/ed0e4931" class="postlink"><img src="http://storage6.static.itmages.ru/i/16/0919/s_1474306360_7582604_ed0e493155.png" alt="" /></a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Feb 12, 2017 12:25 pm</p><hr />
]]></content>
</entry>
</feed>