<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=7664" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-06-09T21:42:29-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=7664</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-06-09T21:42:29-07:00</updated>
<published>2017-06-09T21:42:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7664&amp;p=32955#p32955</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7664&amp;p=32955#p32955"/>
<title type="html"><![CDATA[Re: Link windows Theme to Start button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7664&amp;p=32955#p32955"><![CDATA[
The Start button image path is stored here:<br /><br />HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu in the string value called StartButtonPath.<br /><br />Just exit the menu, change this using some script or cmd.exe and start the menu again.<br /><br />Your idea is great though. There seems to be a way to <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/bb773365(v=vs.85).aspx" class="postlink">get the current theme's name</a>, using which an image could be associated with it. Although, the menu will need to have a UI for the user to enumerate all the themes that are going to be applied so it can check which theme is in use.<br /><br />It's up to Ivo obviously as he's the sole developer of this great app. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Jun 09, 2017 9:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sakujo]]></name></author>
<updated>2017-06-09T19:24:01-07:00</updated>
<published>2017-06-09T19:24:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7664&amp;p=32951#p32951</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7664&amp;p=32951#p32951"/>
<title type="html"><![CDATA[Link windows Theme to Start button]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7664&amp;p=32951#p32951"><![CDATA[
Hi,<br />I'd like to have a setting that will change the Start button depending on which Theme windows is using.<br />I use a program that switches the theme randomly each boot and I noticed how I can't link the theme to the start icon.<br /><br />So there would just need to be a way to have the icon switch to another one if the theme used is called different.<br /><br />Something like &quot;If theme==dragon.theme --&gt;icon == dragon.png&quot;<br /><br />Examples: <!-- m --><a class="postlink" href="http://imgur.com/a/8W9SB">http://imgur.com/a/8W9SB</a><!-- m --><br /><br />Here you can see the theme changes the wallpaper and the window frame color but I have to switch the icon manually, <br />which doesn't work well with the random theme each boot ...<br /><br />I would really love to have that feature! <br />Maybe one of you guys can write a small workaround for that?:mrgreen:<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13933">Sakujo</a> — Fri Jun 09, 2017 7:24 pm</p><hr />
]]></content>
</entry>
</feed>