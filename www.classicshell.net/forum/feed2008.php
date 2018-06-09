<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=659" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-05-19T01:30:25-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=659</id>
<entry>
<author><name><![CDATA[Horcrux7]]></name></author>
<updated>2013-05-19T01:30:25-07:00</updated>
<published>2013-05-19T01:30:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3272#p3272</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3272#p3272"/>
<title type="html"><![CDATA[Re: Pick up an icon from a *.exe in toolbar button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3272#p3272"><![CDATA[
Thanks for the workaround with console.dll. It works.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=749">Horcrux7</a> — Sun May 19, 2013 1:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-05-18T22:27:09-07:00</updated>
<published>2013-05-18T22:27:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3271#p3271</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3271#p3271"/>
<title type="html"><![CDATA[Re: Pick up an icon from a *.exe in toolbar button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3271#p3271"><![CDATA[
hmm, why does command.exe use it? for legacy sake?, thats the only reason i can think of.. or is it just some arbitrary thing..?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat May 18, 2013 10:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-05-18T18:51:16-07:00</updated>
<published>2013-05-18T18:51:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3270#p3270</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3270#p3270"/>
<title type="html"><![CDATA[Re: Pick up an icon from a *.exe in toolbar button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3270#p3270"><![CDATA[
The standard way to refer to an icon in the system is in the format &quot;file,number&quot;. There are two ways to interpret the number - one is as index of an icon, and the other is as an ID of the icon. Using indices gives you access to all icons, including ones with string IDs. However the index can change between versions of Windows because icons are added and removed. So to keep the icons consistent between versions I elected to use IDs instead of indices.<br /><br />There are very few icons that have string IDs. In fact I have not seen another one besides cmd.exe. So the downside is not as bad as you'd think.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat May 18, 2013 6:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-05-18T18:44:09-07:00</updated>
<published>2013-05-18T18:44:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3269#p3269</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3269#p3269"/>
<title type="html"><![CDATA[Re: Pick up an icon from a *.exe in toolbar button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3269#p3269"><![CDATA[
well why does classic shell only support numeric ID's? XD, im sure this problem is ran into quite often, so it is something that should be fixed if possible <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat May 18, 2013 6:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-05-18T11:41:50-07:00</updated>
<published>2013-05-18T11:41:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3263#p3263</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3263#p3263"/>
<title type="html"><![CDATA[Re: Pick up an icon from a *.exe in toolbar button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3263#p3263"><![CDATA[
Icons in EXEs work fine. The problem is that the icon stored in cmd.exe has a string ID, and not a numeric ID. Classic Shell only supports numeric IDs. Try using the same icon from console.dll and it will work. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat May 18, 2013 11:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Horcrux7]]></name></author>
<updated>2013-05-18T11:17:31-07:00</updated>
<published>2013-05-18T11:17:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3262#p3262</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3262#p3262"/>
<title type="html"><![CDATA[Pick up an icon from a *.exe in toolbar button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=659&amp;p=3262#p3262"><![CDATA[
I want to use the icon from an exe file which I run with a custom toolbar button. But it does not work. The exe is cmd.exe. I can select the file because there is a *.exe filter for the icon file. But the list of icons is empty after selection the cmd.exe. Also if I use an empty icon setting it does not use the default from the *.exe.<br /><br />I use the version version 3.6.7 on Windows 7.<br /><br /><br />Is this a bug, missing feature or do I something wrong?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=749">Horcrux7</a> — Sat May 18, 2013 11:17 am</p><hr />
]]></content>
</entry>
</feed>