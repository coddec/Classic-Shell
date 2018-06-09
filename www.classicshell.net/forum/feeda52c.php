<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=2831" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-07-28T10:57:56-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=2831</id>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-07-28T10:57:56-07:00</updated>
<published>2014-07-28T10:57:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14226#p14226</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14226#p14226"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14226#p14226"><![CDATA[
I don't know how to make the .bat file with those arguments. I'll need the exact code. I'm afraid I don't understand MakeLink's &quot;help&quot; section. Or do you not know how and I should ask on whatever forums MakeLink has?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Mon Jul 28, 2014 10:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-07-28T07:46:47-07:00</updated>
<published>2014-07-28T07:46:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14218#p14218</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14218#p14218"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14218#p14218"><![CDATA[
You will need to write some script, for example a .bat file. If there is no selected file, %2 would be empty. You can check for that.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 28, 2014 7:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-07-27T13:37:13-07:00</updated>
<published>2014-07-27T13:37:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14210#p14210</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14210#p14210"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14210#p14210"><![CDATA[
Is there a way to add an &quot;if&quot; argument so I don't need two buttons?<br /><br />And is there a way to add a button to toggle the status bar?<br />What about a shortcut to control panel folder options?<br /><br />I love Classic Shell, and especially you guys' help on it. Don't know what I'd do without it!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Sun Jul 27, 2014 1:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-07-26T13:14:57-07:00</updated>
<published>2014-07-26T13:14:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14206#p14206</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14206#p14206"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14206#p14206"><![CDATA[
<div class="quotetitle">Weboh wrote:</div><div class="quotecontent"><br />Using this, how can I make it create a shortcut to the current folder if no item is selected?<br /></div> <br />Use %1 instead of %2. %1=current folder, %2=selected item.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jul 26, 2014 1:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-07-26T12:42:16-07:00</updated>
<published>2014-07-26T12:42:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14205#p14205</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14205#p14205"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=14205#p14205"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />I've attached it now. Copy makelink to some directory in your system path e.g. C:\Windows. To create a shortcut to the selected item and place it in a folder use this command:<br /><br />makelink.exe &quot;%2&quot; -CSIDL:40 -SUBDIR:Links\Links<br /><br />%2 means selected item. CSIDL value of 40 is the %userprofile% directory. Change the path after that as per your requirement.<br /></div><br />Using this, how can I make it create a shortcut to the current folder if no item is selected?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Sat Jul 26, 2014 12:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-28T19:31:10-07:00</updated>
<published>2014-06-28T19:31:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13601#p13601</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13601#p13601"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13601#p13601"><![CDATA[
Toolbars are designed to contain buttons of identical size. While it is possible to add a static image to a toolbar, it is not an easy task. It is a cosmetic feature with no practical use. And it doesn't play well with other features, like a customizable button size. So no, it is not something that will happen.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jun 28, 2014 7:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-06-28T19:13:42-07:00</updated>
<published>2014-06-28T19:13:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13599#p13599</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13599#p13599"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13599#p13599"><![CDATA[
Currently? You are still adding features to Classic Shell, right? Could something like this be on your list (since it's <em>Classic</em> Shell and that's a classic feature)?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Sat Jun 28, 2014 7:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-28T16:24:51-07:00</updated>
<published>2014-06-28T16:24:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13594#p13594</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13594#p13594"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13594#p13594"><![CDATA[
I'm afraid what you are trying to do is not possible.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jun 28, 2014 4:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-06-28T14:45:38-07:00</updated>
<published>2014-06-28T14:45:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13593#p13593</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13593#p13593"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13593#p13593"><![CDATA[
How do I add padding? And if this doesn't work, and I decide to split into two icons instead, how can I remove the gap between them? And how do I make it un-clickable?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Sat Jun 28, 2014 2:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-22T13:00:52-07:00</updated>
<published>2014-06-22T13:00:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13474#p13474</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13474#p13474"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13474#p13474"><![CDATA[
The toolbar requires that all icons are the same size and are square. The size of the icons is specified in the &quot;Toolbar Settings&quot; tab. If you have a non-square image you need to pad it or crop it to become square. If the size doesn't match the toolbar icons size the image will be resized.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jun 22, 2014 1:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-06-22T12:57:23-07:00</updated>
<published>2014-06-22T12:57:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13473#p13473</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13473#p13473"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13473#p13473"><![CDATA[
Oh, and while I'm at it, how can I make an icon not be square? I want to add a &quot;button&quot; to the toolbar that does nothing, but just shows the Windows Classic logo, like 98's explorer has. But, I need an icon to do that, and as far as I know, there's no way to make an icon be wider than it is tall, which is how the picture would fit. Is there a way to not use an icon, and if not, do you plan on adding that in future versions? Here's what I'm trying to add:<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Sun Jun 22, 2014 12:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-06-22T12:50:22-07:00</updated>
<published>2014-06-22T12:50:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13472#p13472</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13472#p13472"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13472#p13472"><![CDATA[
Thanks so much! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Sun Jun 22, 2014 12:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-06-22T05:33:52-07:00</updated>
<published>2014-06-22T05:33:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13457#p13457</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13457#p13457"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13457#p13457"><![CDATA[
I've attached it now. Copy makelink to some directory in your system path e.g. C:\Windows. To create a shortcut to the selected item and place it in a folder use this command:<br /><br />makelink.exe &quot;%2&quot; -CSIDL:40 -SUBDIR:Links\Links<br /><br />%2 means selected item. CSIDL value of 40 is the %userprofile% directory. Change the path after that as per your requirement.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jun 22, 2014 5:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-06-19T08:14:02-07:00</updated>
<published>2014-06-19T08:14:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13423#p13423</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13423#p13423"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13423#p13423"><![CDATA[
You haven't attached it to the forum, and I'm afraid I can't figure it out with that little information. I need to know the command to use to make it create a shortcut to the selected item in explorer, and place it in %USERPROFILE%\Links\Links Toolbar.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Thu Jun 19, 2014 8:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-06-18T19:35:33-07:00</updated>
<published>2014-06-18T19:35:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13421#p13421</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13421#p13421"/>
<title type="html"><![CDATA[Re: Links Toolbar custom button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2831&amp;p=13421#p13421"><![CDATA[
You could use a command line program like makelink.exe which is a console tool to create shortcuts (*.LNKs). I've attached it to this forum. Run makelink /? to see its command line syntax.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jun 18, 2014 7:35 pm</p><hr />
]]></content>
</entry>
</feed>