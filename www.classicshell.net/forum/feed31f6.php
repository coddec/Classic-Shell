<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=7566" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-05-06T23:54:11-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=7566</id>
<entry>
<author><name><![CDATA[SuperGiulia]]></name></author>
<updated>2017-05-06T23:54:11-07:00</updated>
<published>2017-05-06T23:54:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32542#p32542</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32542#p32542"/>
<title type="html"><![CDATA[Re: could be added the possibility to set font size?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32542#p32542"><![CDATA[
<div class="quotetitle">juniper7 wrote:</div><div class="quotecontent"><br />You could put it in the &quot;Feature Request&quot; section location, for Ivo to see.<br />It can probably be done, that will override any skin. <br /><br />Here are my thoughts on it.<br />I see a couple of problems with it though. <br /><br />1.If a skin has selectors with texture on it, that were made to look correct at a specific font size,<br />changing font size could distort (stretch/shrink) the texture. <br /><br />2.The arrows will stay same size. From what I've noticed, arrows only change size with dpi scaling, <br />and only if it's a numerical value, not a bitmap. Maybe there is a way? <br /><br /><br />Have you tried the &quot;Metallic&quot; skin7. There is a skin option that allows changing the font size greatly.<br /><br />If there is one particular skin that you want adjustable override font size, <br />you could copy some text from Metallic skin, and put in your favourite skin.<br /><br />I put the below text at the very end of the file, in Windows 8 skin7 to see what happens, it seems to work:<br /><br /><br /><br />OPTION_NUMBER CUSTOM_TEXT_SIZE=#7038,0,TRUE,12<br /><br />[CUSTOM_TEXT_SIZE]<br />Main_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br />Search_hint_font=&quot;Segoe UI&quot;,italic,@CUSTOM_TEXT_SIZE@<br />Submenu_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br /><br />Main2_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br />Shutdown_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br />Programs_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br />List_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br /></div><br /><br />hi<br />thanks<br />but i haven't the metallic skin<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10393">SuperGiulia</a> — Sat May 06, 2017 11:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-05T08:57:37-07:00</updated>
<published>2017-05-05T08:57:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32498#p32498</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32498#p32498"/>
<title type="html"><![CDATA[Re: could be added the possibility to set font size?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32498#p32498"><![CDATA[
This is the recommended method to change font size: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=2051">viewtopic.php?f=7&amp;t=2051</a><!-- l --> There is no setting for it unless you use the Metallic skin.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri May 05, 2017 8:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-05-04T11:59:11-07:00</updated>
<published>2017-05-04T11:59:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32480#p32480</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32480#p32480"/>
<title type="html"><![CDATA[Re: could be added the possibility to set font size?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32480#p32480"><![CDATA[
You could put it in the &quot;Feature Request&quot; section location, for Ivo to see.<br />It can probably be done, that will override any skin. <br /><br />Here are my thoughts on it.<br />I see a couple of problems with it though. <br /><br />1.If a skin has selectors with texture on it, that were made to look correct at a specific font size,<br />changing font size could distort (stretch/shrink) the texture. <br /><br />2.The arrows will stay same size. From what I've noticed, arrows only change size with dpi scaling, <br />and only if it's a numerical value, not a bitmap. Maybe there is a way? <br /><br /><br />Have you tried the &quot;Metallic&quot; skin7. There is a skin option that allows changing the font size greatly.<br /><br />If there is one particular skin that you want adjustable override font size, <br />you could copy some text from Metallic skin, and put in your favourite skin.<br /><br />I put the below text at the very end of the file, in Windows 8 skin7 to see what happens, it seems to work:<br /><br /><br /><br />OPTION_NUMBER CUSTOM_TEXT_SIZE=#7038,0,TRUE,12<br /><br />[CUSTOM_TEXT_SIZE]<br />Main_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br />Search_hint_font=&quot;Segoe UI&quot;,italic,@CUSTOM_TEXT_SIZE@<br />Submenu_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br /><br />Main2_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br />Shutdown_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br />Programs_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<br />List_font=&quot;Segoe UI&quot;,normal,@CUSTOM_TEXT_SIZE@<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Thu May 04, 2017 11:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[SuperGiulia]]></name></author>
<updated>2017-05-04T02:29:57-07:00</updated>
<published>2017-05-04T02:29:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32471#p32471</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32471#p32471"/>
<title type="html"><![CDATA[could be added the possibility to set font size?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7566&amp;p=32471#p32471"><![CDATA[
hi<br />i run classic start menu under windows 8.1 and i really love it<br /><br />is there a way to set the font size ?<br />i 'm talking about set the font size for example 10 or 12 or 20..<br /><br />thanks you so much for classic menu<br /><br /><img src="http://i.imgur.com/TmGTasI.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10393">SuperGiulia</a> — Thu May 04, 2017 2:29 am</p><hr />
]]></content>
</entry>
</feed>