<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=4227" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-02-04T23:22:31-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=4227</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-04T23:22:31-07:00</updated>
<published>2015-02-04T23:22:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17794#p17794</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17794#p17794"/>
<title type="html"><![CDATA[Re: setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17794#p17794"><![CDATA[
I have not found a way to reliably detect the deletion dialog. It may even be hosted by another process than explorer.exe. It is following the new broker architecture that is needed for Metro apps as they don't have direct access to the file system and need an external process to do it for them. Trust me, I have tried. The alternative is to allow it to open behind the start menu and you have no way to access it, effectively locking the machine.<br />It is not just the deletion UI. Potentially any operation you do from the context menu can launch UI. In Windows 7 such UI can be positioned above the start menu but in newer OSes this is broken. The only safe thing to do is to hide the menu.<br /><br />And really, I have no idea what &quot;downloadthemall&quot; is. Extension for what? Visual Studio? Why would I even want to download the mall?<br />And are you suggesting that I support some unknown software for you because the original developer quit? Software is not like a car that you can take from one mechanic to another to rotate the tires.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Feb 04, 2015 11:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2015-02-04T22:59:06-07:00</updated>
<published>2015-02-04T22:59:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17793#p17793</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17793#p17793"/>
<title type="html"><![CDATA[Re: setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17793#p17793"><![CDATA[
&quot;The menu must close to give you access to any potential popup&quot;<br /><br />Not true, you can force startmenu to stay on top (doesn't mean the deletion wizard will be behind startmenu, it means startmenu doesn't hide) once startmenu is open &amp; detects the deletion wizard.<br /><br /><br />&amp; downloadthemall is an extension, pretending you don't know it in 2015 &amp; as a coder, is telling me you don't wanna help. ok.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Wed Feb 04, 2015 10:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-04T22:42:20-07:00</updated>
<published>2015-02-04T22:42:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17792#p17792</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17792#p17792"/>
<title type="html"><![CDATA[Re: setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17792#p17792"><![CDATA[
The reason the start menu closes (on Windows 8 and up) is because deleting a shortcut may pop up a confirmation dialog box. After Windows 7, there is no way to get the box to show up on top of the start menu. It is a problem that was introduced with Metro. The menu must close to give you access to any potential popup that may show up.<br /><br />I have no idea what you mean about downloading. Nothing you say makes it sound like related to Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Feb 04, 2015 10:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2015-02-04T21:45:00-07:00</updated>
<published>2015-02-04T21:45:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17790#p17790</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17790#p17790"/>
<title type="html"><![CDATA[Re: setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17790#p17790"><![CDATA[
ok, 4.2 is installed, i was too hasty to see a fix ive been awaiting which is still not there..<br /><br />keeping startmenu open when i delete its shortcuts..<br /><br />by the wayj, if u can add a fix to that because the author of downloadthemall hasn't updated his app since ages,<br />let me know ...<br /><br />I have an issue with downloadthemall &amp; the author stopped programming since a year. see if you know what i should change to prevent it..<br /><br />pages i try to download from urls that contain hashtags (#) aren't downloaded because downloadthemall breaks the urls when it detects<br />a hashtag..<br /><br />So if i try to download my filters from yandex email server:<br /><!-- m --><a class="postlink" href="https://mail.yandex.ru/neo2/?ncrnd=1008#setup/filters-create/id=2330000000000914265">https://mail.yandex.ru/neo2/?ncrnd=1008 ... 0000914265</a><!-- m --><br />downloadthemall will change that url to<br /><!-- m --><a class="postlink" href="https://mail.yandex.ru/neo2/?ncrnd=1008">https://mail.yandex.ru/neo2/?ncrnd=1008</a><!-- m --><br /><br />i'm using downloadthemall 3.0b5<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Wed Feb 04, 2015 9:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2015-02-04T21:09:54-07:00</updated>
<published>2015-02-04T21:09:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17789#p17789</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17789#p17789"/>
<title type="html"><![CDATA[Re: setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17789#p17789"><![CDATA[
like i told you, i have 4.1, files checked in program files.<br /><br />i love uninstalling such programs before updating, i'm gonna have to play with exporting &amp; removing folders where i tweaked skins configs,<br />what a mess<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Wed Feb 04, 2015 9:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-04T20:53:53-07:00</updated>
<published>2015-02-04T20:53:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17788#p17788</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17788#p17788"/>
<title type="html"><![CDATA[Re: setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17788#p17788"><![CDATA[
Looks like you currently have version 4.0.4. Before installing 4.2.0 you need to uninstall the previous version. The uninstaller needs a file that is no longer available on your machine. It is either deleted or corrupted.<br />You need to download the installer for 4.0.4, run it, and choose the Remove option. Only after 4.0.4 is gone from the system you can install 4.2.0<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Feb 04, 2015 8:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2015-02-04T19:06:05-07:00</updated>
<published>2015-02-04T19:06:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17787#p17787</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17787#p17787"/>
<title type="html"><![CDATA[Re: setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17787#p17787"><![CDATA[
I have v4.1, &amp; that doesn't make sense to me..<br />I tried the command you gave me using cmd, but it doesn't help either..<br />&amp; i searched the file your setup needs &quot;out of nowhere&quot;:<br /><br /><a href="http://postimg.org/image/riuabz3ll/" class="postlink"><img src="http://s28.postimg.org/riuabz3ll/Issue.jpg" alt="" /></a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Wed Feb 04, 2015 7:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-04T18:39:32-07:00</updated>
<published>2015-02-04T18:39:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17786#p17786</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17786#p17786"/>
<title type="html"><![CDATA[Re: setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17786#p17786"><![CDATA[
Maybe this will help: <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#install_repair">http://www.classicshell.net/faq/#install_repair</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Feb 04, 2015 6:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[delicacy]]></name></author>
<updated>2015-02-04T11:26:58-07:00</updated>
<published>2015-02-04T11:26:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17780#p17780</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17780#p17780"/>
<title type="html"><![CDATA[setup issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4227&amp;p=17780#p17780"><![CDATA[
<h3><a href="http://www.classicshell.net/history/#v420" class="postlink">Beta version 4.2.0</a></h3><br /><br /><br />that setup asks me where's the msi file, after having closed my previous version.<br />unale to install<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=720">delicacy</a> — Wed Feb 04, 2015 11:26 am</p><hr />
]]></content>
</entry>
</feed>