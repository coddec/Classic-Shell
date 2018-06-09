<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=2702" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-05-30T08:07:09-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=2702</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-05-30T08:07:09-07:00</updated>
<published>2014-05-30T08:07:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13052#p13052</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13052#p13052"/>
<title type="html"><![CDATA[Re: line spacing in classic menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13052#p13052"><![CDATA[
There is another Main2_text_padding in the [SMALL_ICONS] section. Also make sure you edit the right file. Classic Skin.skin7 is for the Windows 7 style and Classic Skin.skin is for the Classic style.<br />Also verify there are no permission issues. It is best to move the skin in some other folder, edit it there, than copy it back.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri May 30, 2014 8:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-30T07:44:41-07:00</updated>
<published>2014-05-30T07:44:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13049#p13049</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13049#p13049"/>
<title type="html"><![CDATA[Re: line spacing in classic menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13049#p13049"><![CDATA[
For submenus, you might need to change Submenu_padding.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri May 30, 2014 7:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lvm]]></name></author>
<updated>2014-05-30T00:40:17-07:00</updated>
<published>2014-05-30T00:40:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13043#p13043</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13043#p13043"/>
<title type="html"><![CDATA[Re: line spacing in classic menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13043#p13043"><![CDATA[
Ok, I changed my Classic Skin.skin7 to<br /><br />Main_text_padding=1,1,8,1,100%<br />Main2_text_padding=1,1,8,1,100%<br />;Main_text_padding=1,3,8,4,100%<br />;Main2_text_padding=1,7,8,7,100%<br /><br />restarted Classic Menu and yet nothing's changed, line spacing remains the same. Icons are disabled (small icon size and large icon size are both set to 0)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3825">lvm</a> — Fri May 30, 2014 12:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-05-29T08:21:18-07:00</updated>
<published>2014-05-29T08:21:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13040#p13040</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13040#p13040"/>
<title type="html"><![CDATA[Re: line spacing in classic menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13040#p13040"><![CDATA[
Few versions ago I fixed a few bugs in the skin engine and cleaned up the skins to make them more consistent with each other. This added some subtle changes to the skin metrics.<br />You can copy the Classic skin and then edit it to change the item padding or the font size to make it smaller. Here's how you can edit skins: <!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html">http://www.classicshell.net/tutorials/skintutorial.html</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu May 29, 2014 8:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lvm]]></name></author>
<updated>2014-05-28T23:46:16-07:00</updated>
<published>2014-05-28T23:46:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13035#p13035</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13035#p13035"/>
<title type="html"><![CDATA[Re: line spacing in classic menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13035#p13035"><![CDATA[
Yes, now classic skin looks exactly the same as no skin as far as line spacing is concerned (i.e. too big), and I found no way to adjust it - skin or no skin.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3825">lvm</a> — Wed May 28, 2014 11:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-28T06:09:13-07:00</updated>
<published>2014-05-28T06:09:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13006#p13006</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13006#p13006"/>
<title type="html"><![CDATA[Re: line spacing in classic menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=13006#p13006"><![CDATA[
&quot;&lt;No skin&gt;&quot; is built into the Start Menu as a backup if all other skins are deleted or corrupted. You can't edit it and shouldn't rely on its line spacing. <br /><br />Use the Classic skin with no caption and with solid selection. It is pretty much the same. Edit the line spacing in the Classic skin.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed May 28, 2014 6:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lvm]]></name></author>
<updated>2014-05-27T22:02:51-07:00</updated>
<published>2014-05-27T22:02:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=12996#p12996</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=12996#p12996"/>
<title type="html"><![CDATA[line spacing in classic menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2702&amp;p=12996#p12996"><![CDATA[
I am using classic-style start menu with no skin on windows 7. After the upgrade from 4.0.4 to 4.1 line spacing in the start menu increased, as a result some of the frequently used [sub]menus stopped fitting to screen height. Is it possible to bring line spacing back to what it was in 4.0.4 or make it configurable?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3825">lvm</a> — Tue May 27, 2014 10:02 pm</p><hr />
]]></content>
</entry>
</feed>