<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=1242" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-09-11T09:55:00-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=1242</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-11T09:55:00-07:00</updated>
<published>2013-09-11T09:55:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6512#p6512</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6512#p6512"/>
<title type="html"><![CDATA[Re: Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6512#p6512"><![CDATA[
Yes, Resource Hacker creates a backup of any original file automatically.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Sep 11, 2013 9:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[balmforthk]]></name></author>
<updated>2013-09-11T09:12:41-07:00</updated>
<published>2013-09-11T09:12:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6511#p6511</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6511#p6511"/>
<title type="html"><![CDATA[Re: Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6511#p6511"><![CDATA[
Hi, <br />  <br />A backup file called Classic Skin_original.skin seems to have been created automatically. Is this expected? <br />  <br />Thanks,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1568">balmforthk</a> — Wed Sep 11, 2013 9:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[balmforthk]]></name></author>
<updated>2013-09-11T08:58:30-07:00</updated>
<published>2013-09-11T08:58:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6510#p6510</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6510#p6510"/>
<title type="html"><![CDATA[Re: Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6510#p6510"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />The name of the skin on the Skin tab and the file name on the disk are the same. Go to C:\Program Files\Classic Shell\Skins. You need to open &quot;Classic Skin.skin&quot;. If you are using the new 3.9.x beta with the new Windows 7 style, you need to edit &quot;Classic Skin.skin7&quot; (skin7 is a format specific to the Windows 7 style in Classic Shell versions 3.9.x and later). <br /><br />Also, it is recommended that you copy the skin to some other location which is not UAC protected such as the Desktop, rename the skin, modify it and then copy it back to the Skins folder with the new name. Copying it to a different folder is recommended because if you are directly modifying the skin in the skins folder, then you will have to open Resource Hacker as administrator to save changes to the skin. Also, renaming is recommended because when you update Classic Shell, the original skin files will be overwritten by the installer. <br /><br />Btw, the Classic Skin has a built-in option called &quot;Solid Color Selection&quot; which makes the selection color darker although it's not totally dark. The Classic Skin follows system colors (on Windows 7, you can modify this color via the Advanced Appearance control panel. on Windows 8, you can't). <br /><br /><img src="http://www.volsoft.com/tutorials/img/fonts01.png" alt="" /><br /></div> <br /><br />Hi, <br /><br />Thanks for your help. I have UAC turned off. When I upgrade Classic Shell, I'll have to remember to take a copy of my modified skin file or, more likely, I'll keep a note of the changes I've made and reapply them to the new skin file when I've forgotten to take a copy of the modified file <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /> . <br /><br />Anyway, I've played with the skin file and I think I've achieved what I want by changing the following: <br /><br /><br />Main_selection=#0B0B61 <br />Main_text_color=#000000,#FFFFFF,#7F7F7F,#7F7F7F <br /><br /><br />Submenu_text_color=#000000,#FFFFFF,#7F7F7F,#7F7F7F <br />Submenu_selection=#0B0B61 <br /><br /><br /><br />This seems to give behaviour very similar to my Windows XP system. <br /><br />Your page detailing the contents of the skin file was very helpful. <br />  <br />And I won't be upgrading to Windows 8, probably ever. <br /><br />Regards,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1568">balmforthk</a> — Wed Sep 11, 2013 8:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-11T08:18:02-07:00</updated>
<published>2013-09-11T08:18:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6509#p6509</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6509#p6509"/>
<title type="html"><![CDATA[Re: Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6509#p6509"><![CDATA[
The name of the skin on the Skin tab and the file name on the disk are the same. Go to C:\Program Files\Classic Shell\Skins. You need to open &quot;Classic Skin.skin&quot;. If you are using the new 3.9.x beta with the new Windows 7 style, you need to edit &quot;Classic Skin.skin7&quot; (skin7 is a format specific to the Windows 7 style in Classic Shell versions 3.9.x and later).<br /><br />Also, it is recommended that you copy the skin to some other location which is not UAC protected such as the Desktop, rename the skin, modify it and then copy it back to the Skins folder with the new name. Copying it to a different folder is recommended because if you are directly modifying the skin in the skins folder, then you will have to open Resource Hacker as administrator to save changes to the skin. Also, renaming is recommended because when you update Classic Shell, the original skin files will be overwritten by the installer.<br /><br />Btw, the Classic Skin has a built-in option called &quot;Solid Color Selection&quot; which makes the selection color darker although it's not totally dark. The Classic Skin follows system colors (on Windows 7, you can modify this color via the Advanced Appearance control panel. on Windows 8, you can't).<br /><br /><img src="http://www.volsoft.com/tutorials/img/fonts01.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Sep 11, 2013 8:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[balmforthk]]></name></author>
<updated>2013-09-11T08:12:02-07:00</updated>
<published>2013-09-11T08:12:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6507#p6507</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6507#p6507"/>
<title type="html"><![CDATA[Re: Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6507#p6507"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />You can find the skin you are using by right clicking the Start button -&gt; Settings -&gt; Skin tab. The skin format is documented by Ivo here: <!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html">http://www.classicshell.net/tutorials/skintutorial.html</a><!-- m --><br /></div> Hi, <br /><br />I right clicked the Start button -&gt; Settings -&gt; Skin tab and it says Classic Skin, but how do I know which file to open for that skin in Reshacker? <br /><br />Thanks again for your help,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1568">balmforthk</a> — Wed Sep 11, 2013 8:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-11T08:08:31-07:00</updated>
<published>2013-09-11T08:08:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6506#p6506</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6506#p6506"/>
<title type="html"><![CDATA[Re: Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6506#p6506"><![CDATA[
You can find the skin you are using by right clicking the Start button -&gt; Settings -&gt; Skin tab. The skin format is documented by Ivo here: <!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html">http://www.classicshell.net/tutorials/skintutorial.html</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Sep 11, 2013 8:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[balmforthk]]></name></author>
<updated>2013-09-11T08:06:28-07:00</updated>
<published>2013-09-11T08:06:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6505#p6505</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6505#p6505"/>
<title type="html"><![CDATA[Re: Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6505#p6505"><![CDATA[
Hi,<br /><br />     Thanks for your reply. I've installed reshacker but how do I know which .skin fileI'm using and which entry in the file do I need to modify and to what value please?<br /><br />     Thanks,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1568">balmforthk</a> — Wed Sep 11, 2013 8:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-09-11T07:58:52-07:00</updated>
<published>2013-09-11T07:58:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6504#p6504</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6504#p6504"/>
<title type="html"><![CDATA[Re: Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6504#p6504"><![CDATA[
Yes this is possible through modification of the .skin file<br />You will need to open the .skin file for your current theme in reshacker (its free)  <a href="http://www.angusj.com/resourcehacker/" class="postlink">http://www.angusj.com/resourcehacker/</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Sep 11, 2013 7:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[balmforthk]]></name></author>
<updated>2013-09-11T07:53:49-07:00</updated>
<published>2013-09-11T07:53:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6503#p6503</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6503#p6503"/>
<title type="html"><![CDATA[Classic Shell Start Menu hover colour]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1242&amp;p=6503#p6503"><![CDATA[
Hi, <br />  <br />    Is it possible to change the colour of the item in the Start menu when you're hovering over it.  For example, I click the Start button and the Start menu appears. I hover over Programs, or any of the other items in the menu, and the colour of the item being hovered over is light blue. <br />  <br />    I'd like to change it to dark blue like in Windows XP. Is this possible please? <br />  <br />    Thanks,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1568">balmforthk</a> — Wed Sep 11, 2013 7:53 am</p><hr />
]]></content>
</entry>
</feed>