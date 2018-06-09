<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=622" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-05-04T22:53:19-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=622</id>
<entry>
<author><name><![CDATA[JackOverIP]]></name></author>
<updated>2013-05-04T22:53:19-07:00</updated>
<published>2013-05-04T22:53:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3132#p3132</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3132#p3132"/>
<title type="html"><![CDATA[Re: Explorer folder selection bug]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3132#p3132"><![CDATA[
Gaurav,<br />That thread is close to the issue and possibly defines it wholly but as described there, the 2nd column selection will move the columns left and that is not my experience. We're probably playing semantics here though. The issue occurs whenever the rightmost column is partially displayed, selection within that column will shift the columns left. And yes it's that way in Windows Explorer too. Come to think of it, I don't think I've used Windows Explorer since Windows 95. Have had some better experiences with some of the custom TRS-80 Model I explorer packages. It's not all that different today but then, the manufacturers were held to quality standards in the beginnings of this industry. Thanks for looking at it.<br />Jack Over IP<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=700">JackOverIP</a> — Sat May 04, 2013 10:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-05-04T09:51:03-07:00</updated>
<published>2013-05-04T09:51:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3128#p3128</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3128#p3128"/>
<title type="html"><![CDATA[Re: Explorer folder selection bug]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3128#p3128"><![CDATA[
If you mean this bug: <!-- m --><a class="postlink" href="http://social.technet.microsoft.com/Forums/en-US/w7itproui/thread/94f1ad37-9110-4273-a473-ed02e36af386/">http://social.technet.microsoft.com/For ... 2e36af386/</a><!-- m -->, then unfortunately, it cannot be fixed but some user reports in that thread of having it fixed by forcing the ListView control in Explorer using a registry tweak. Although I haven't tested that.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat May 04, 2013 9:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[JackOverIP]]></name></author>
<updated>2013-05-04T09:31:26-07:00</updated>
<published>2013-05-04T09:31:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3127#p3127</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3127#p3127"/>
<title type="html"><![CDATA[Explorer folder selection bug]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=622&amp;p=3127#p3127"><![CDATA[
Explorer folder selection does not display folder contents. Simply scrolls folder list horizontally to position selected folder left within the folder selection window. This will only occur when the list of folders in the content window exceeds the width of the window. Typical scenario:<br />List view of 200 folders exceeds available window width. Visible list showing 4 rows of 25 each in current window and having 4 rows of 25 each beyond current window to right. The first row of the second group is partially exposed in the first view so that the folder icon and part of the folder name is exposed in the first window to the far right. Selection of a folder in that far right row causes the entire list of folders to shift left to fully expose that selected folder rather than display the contents of that folder. This action is contrary to the expected behavior of displaying that folder content and conflicts with standard action of all other explorer applications including windows explorer.<br />JackOverIP<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=700">JackOverIP</a> — Sat May 04, 2013 9:31 am</p><hr />
]]></content>
</entry>
</feed>