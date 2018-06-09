<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=8172" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-12-14T13:58:52-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=8172</id>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-12-14T13:58:52-07:00</updated>
<published>2017-12-14T13:58:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35038#p35038</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35038#p35038"/>
<title type="html"><![CDATA[Re: Help. small icons on 1st, LARGE ICONS on 2nd]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35038#p35038"><![CDATA[
Good questions, but I never modify system files anymore,<br />I believe Windows will fake an icon size, when not available in the icon file.<br />Icon sizes in CSM settings are set at default. Also, the picture I supplied is reduced in size.<br />They are really 16/32 icon sizes. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />I did a little research. I tried StarFox classic skin on Win7 OS, with CSM 4.3.0<br />The small icons 1st, large icons 2nd option works as it should.<br />That skin also has an option for no icons on 1st, with no icons, small, or large icons on 2nd.<br />That also works. CSM took about 5 seconds to reconfigure something, then worked correctly. <br /><br />I then upgraded CSM to 4.3.1<br />Now I get the same issue with the icons not refreshing all of the 2nd column showing most as white icon, <br />Using the no icons option on 1st, large/ small icons not showing anything at all on 2nd column. <br /> <br />I think it does not have anything to do with operating system.<br />Just something has changed a little in CSM v4.3.1<br />Doing the switching large icons on 1st, to small icons routine at least temporarily fixes problem.<br /><br />I still wonder if it is the text &quot;Main_large_icons=0&quot; that I put in, is confusing the logic?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Thu Dec 14, 2017 1:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Blokk888]]></name></author>
<updated>2017-12-14T10:58:12-07:00</updated>
<published>2017-12-14T10:58:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35036#p35036</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35036#p35036"/>
<title type="html"><![CDATA[Re: Help. small icons on 1st, LARGE ICONS on 2nd]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35036#p35036"><![CDATA[
maybe shell32.dll or imageres.dll do not have 24x24 icons<br /><br />(sorry for bad spelling)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27227">Blokk888</a> — Thu Dec 14, 2017 10:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[juniper7]]></name></author>
<updated>2017-12-13T16:47:28-07:00</updated>
<published>2017-12-13T16:47:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35029#p35029</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35029#p35029"/>
<title type="html"><![CDATA[Help. small icons on 1st, LARGE ICONS on 2nd]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8172&amp;p=35029#p35029"><![CDATA[
Hello, long time no communication. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> <br />I have a problem with lack of skinning text information, <br />concerning small icon skinning text on 1st column, large icon skinning text on 2nd column.<br /><br />The skin text below used to work before,<br />with older Windows 10, and older Classic Shell v4.3.0<br /><br />Now all the proper icons don't show in 2nd column.<br />I have to select large icons for both columns, click the start button to get menu,<br />then click on settings to make 1st column small icons, <br />then by clicking start button again, icons show properly.<br /><br />If I restart computer, I have to do the routine again. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /><br /><br />What text can I put in, or take out to remedy this problem? <br />I like this different icon size feature, as it is similar to XP menu. <br />See picture for better explanation of what's going on.<br />No rush for answer.<br /><br /><br /><br /><br /><br />OPTION RADIOGROUP=&quot;Icon size 1st column&quot;,0,SMALLICONS|LARGEICONS<br />OPTION SMALLICONS=&quot;Small&quot;,0<br />OPTION LARGEICONS=&quot;Large&quot;,1<br />OPTION RADIOGROUP=&quot;Icon size 2nd column&quot;,0,NOICONS2|SMALLICONS2|LARGEICONS2<br />OPTION NOICONS2=&quot;None&quot;,0<br />OPTION SMALLICONS2=&quot;Small&quot;,0, TWO_COLUMNS, 0<br />OPTION LARGEICONS2=&quot;Large&quot;,1, TWO_COLUMNS, 0<br /><br /><br /><br /><br />;first column<br />[SMALLICONS]<br />Main_large_icons=0<br />Main_icon_size=small<br />Main_icon_padding=4,4,4,4,100%<br />Main_text_padding=1,3,8,4,100%<br /><br /><br />[LARGEICONS]<br />Main_large_icons=0<br />Main_icon_size=large<br /><br /><br /><br />;second column<br />[NOICONS2]<br />Main_large_icons=0<br />Main2_icon_size=none<br />Main2_text_padding=1,7,8,7,100%<br />;Main_no_icons2=1<br /><br /><br />[SMALLICONS2]<br />Main_large_icons=0<br />Main2_icon_size=small<br />Main2_icon_padding=4,4,4,4,100%<br />Main2_text_padding=1,3,8,4,100%<br /><br /><br />[LARGEICONS2]<br />Main_large_icons=0<br />Main2_icon_size=large<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=856">juniper7</a> — Wed Dec 13, 2017 4:47 pm</p><hr />
]]></content>
</entry>
</feed>