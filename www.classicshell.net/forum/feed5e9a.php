<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7524" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-05-03T00:09:53-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7524</id>
<entry>
<author><name><![CDATA[Display]]></name></author>
<updated>2017-05-03T00:09:53-07:00</updated>
<published>2017-05-03T00:09:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32448#p32448</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32448#p32448"/>
<title type="html"><![CDATA[Re: 64-bit Copy dialog not working in 32-bit apps]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32448#p32448"><![CDATA[
Thank you for the suggestion!<br />Okay, I've successfully registered the ClassicExplorer32.dll and rebooted.<br />I did some more tests and this it what I've found:<br /><br /><br />Drag-Drop from almost any x86 or x64 application into 64-bit Windows Explorer will bring up the Classic Shell Copy dialog as expected:<br /><br /><img src="http://i.imgur.com/STMe9Lk.png" alt="" /><br /><br /><br /><br />However, Drag-Drop from any x86 or x64 application into any x86 application or any x86/x64 Open/Save dialog box will bring up the default Windows Copy dialog:<br /><br /><img src="http://i.imgur.com/UHYqWFU.png" alt="" /><br /><br /><br />Is it possible to somehow intercept *all* copy/replace requests and invoke the Classic Shell Copy? <br />Now that I'm seeing the default OS Copy dialog more often (due to using XYplorer) I'm really struggling to make decisions whenever prompted by Copy/Replace... it's such a confusing design!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19469">Display</a> — Wed May 03, 2017 12:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-05-02T06:47:01-07:00</updated>
<published>2017-05-02T06:47:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32437#p32437</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32437#p32437"/>
<title type="html"><![CDATA[Re: 64-bit Copy dialog not working in 32-bit apps]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32437#p32437"><![CDATA[
Possibly the 32-bit shell extension was not correctly registered. From an admin command prompt type:<br />regsvr32 &quot;C:\Program Files\Classic Shell\ClassicExplorer32.dll&quot;<br />(replace the C:\Program Files&quot; with the actual path where you installed Classic Shell, if it is different)<br /><br />It is also possible that some programs have their own copy dialogs that happen to look similar to the one in Windows but is not the same. In such case Classic Shell can't do anything.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue May 02, 2017 6:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Display]]></name></author>
<updated>2017-04-26T06:14:46-07:00</updated>
<published>2017-04-26T06:14:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32339#p32339</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32339#p32339"/>
<title type="html"><![CDATA[Re: 64-bit Copy dialog not working in 32-bit apps]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32339#p32339"><![CDATA[
Ah yes! I completely forgot to mention the OS! I'm running:<br />Windows 7 Ultimate x64 SP1<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19469">Display</a> — Wed Apr 26, 2017 6:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-04-26T03:40:10-07:00</updated>
<published>2017-04-26T03:40:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32337#p32337</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32337#p32337"/>
<title type="html"><![CDATA[Re: 64-bit Copy dialog not working in 32-bit apps]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32337#p32337"><![CDATA[
Are you using Windows 7?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Apr 26, 2017 3:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Display]]></name></author>
<updated>2017-04-25T14:12:21-07:00</updated>
<published>2017-04-25T14:12:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32331#p32331</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32331#p32331"/>
<title type="html"><![CDATA[64-bit Copy dialog not working in 32-bit apps]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7524&amp;p=32331#p32331"><![CDATA[
Hello!<br />I've recently noticed that the 64-bit Classic Shell Copy dialog doesn't appear in any 32-bit applications.<br /><br />For example, if I'm dragging files from an x64 application like Winrar/7zip into an x86 application, such as XYplorer, the default (hideous) Windows Explorer copy dialog is invoked.<br /><br />Is there any way to allow for the Classic Shell to <strong>always</strong> be used regardless of bit state? Maybe via the registry with some CLSID edits?<br />Thank you and any help would be greatly appreciated!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19469">Display</a> — Tue Apr 25, 2017 2:12 pm</p><hr />
]]></content>
</entry>
</feed>