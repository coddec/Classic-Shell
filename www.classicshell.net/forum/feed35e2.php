<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=1418" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-10-30T10:59:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=1418</id>
<entry>
<author><name><![CDATA[Slartibartfast]]></name></author>
<updated>2013-10-30T10:59:45-07:00</updated>
<published>2013-10-30T10:59:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=8244#p8244</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=8244#p8244"/>
<title type="html"><![CDATA[Re: Vertical Bar Separating Folder and Pane Views Very Thin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=8244#p8244"><![CDATA[
Update on this issue:<br /><br />I used &quot;RegShot&quot; from SourceForge ( <!-- m --><a class="postlink" href="http://sourceforge.net/projects/regshot/">http://sourceforge.net/projects/regshot/</a><!-- m --> ) to determine which key(s) change in the registry when I change the Active Border Width in Windows XP. This Active Border Width setting also changes the width of the divider between the Folder pane and File pane in Windows Explorer on XP.<br /><br />The setting that changes is:<br /><br />HKEY_USERS\S-1-5-21-123456789-123456789-1234567890-1003\Control Panel\Desktop\WindowMetrics\BorderWidth<br /><br />(I changed the numbers after S-1-5-21-, in case that would identify me to Microsoft).<br /><br />The Active Border Width can be changed in XP by going to Control Panel / Display / Appearance / Advanced. Use the drop down box to select &quot;Active Window Border&quot;.<br /><br />When the border is width &quot;1', the key value is &quot;-12&quot;.<br />When the border is width &quot;2', the key value is &quot;-24&quot;.<br />When the border is width &quot;3', the key value is &quot;-36&quot;, etc.<br /><br /><br />This key is also present in the registry of Windows 7, so I was hopeful that I could change it to produce the same effect in Windows Explorer on Windows 7. No such luck.<br /><br />I also discovered that there is a way to adjust this setting without going into the registry: Control Panel / Display / Personalization / Window Color. Then use the drop down box to select &quot;Active Window Border&quot;.<br /><br />When the border is width &quot;1', the key value is &quot;-15&quot;.<br />When the border is width &quot;2', the key value is &quot;-30&quot;.<br />When the border is width &quot;3', the key value is &quot;-45&quot;, etc.<br /><br /><br />So, Windows Explorer in Windows 7 does not use the Window Border setting when drawing the line between the Folder pane and the File pane.<br /><br />But, guess what DOES use the Window Border setting... &quot;regedit&quot;! Yes, they screwed up Explorer but, thankfully, kept their sticky little fingers away from the &quot;regedit&quot; code. So &quot;regedit&quot; has a nice thick / adjustable divider which is easy to grab, but Explorer - which needs it much more - doesn't.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1820">Slartibartfast</a> — Wed Oct 30, 2013 10:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-10-15T06:04:22-07:00</updated>
<published>2013-10-15T06:04:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7342#p7342</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7342#p7342"/>
<title type="html"><![CDATA[Re: Vertical Bar Separating Folder and Pane Views Very Thin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7342#p7342"><![CDATA[
I Run windows 8 but yes it is, and if i recall it was to in 7 which I used for quite a while. Also it seems that windows vista had thin borders for that area to<br /><br />You may want to ask around on this forum to see if what you want can or cant be done: <a href="http://vistastylebuilder.com/forum/index.php?PHPSESSID=81p6nek7aorm8ph90708glp8h7&amp;board=19.0" class="postlink">http://vistastylebuilder.com/forum/index.php?PHPSESSID=81p6nek7aorm8ph90708glp8h7&amp;board=19.0</a><br />and maybe if someone will do it for you (upload/link to your theme)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Oct 15, 2013 6:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Slartibartfast]]></name></author>
<updated>2013-10-15T01:40:25-07:00</updated>
<published>2013-10-15T01:40:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7337#p7337</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7337#p7337"/>
<title type="html"><![CDATA[Re: Vertical Bar Separating Folder and Pane Views Very Thin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7337#p7337"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />Im not specifically aware of any that have this particular change, but Im fairly certain that it is defined by the theme, if its changeable at all<br /></div><br />Thanks for your response, but it looks like not so good news! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /><br /><br />My big worry is that this is another XP feature that is gone from Windows 7, like most of the &quot;Desktop / Display Properties / Appearance /Advanced Appearance&quot; items that we could adjust to really fine tune XP to make it work and look the way we wanted it.<br /><br />So Jcee, do you run Windows 7 and is <em>your </em>divider between the folder pane and file pane as thin as my one?<br /><br />And don't you have trouble grabbing it and moving it?<br /><br />Regards,<br /><br />Roger.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1820">Slartibartfast</a> — Tue Oct 15, 2013 1:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-10-15T00:40:54-07:00</updated>
<published>2013-10-15T00:40:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7336#p7336</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7336#p7336"/>
<title type="html"><![CDATA[Re: Vertical Bar Separating Folder and Pane Views Very Thin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7336#p7336"><![CDATA[
Im not specifically aware of any that have this particular change, but Im fairly certain that it is defined by the theme, if its changeable at all<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Oct 15, 2013 12:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Slartibartfast]]></name></author>
<updated>2013-10-14T22:47:50-07:00</updated>
<published>2013-10-14T22:47:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7330#p7330</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7330#p7330"/>
<title type="html"><![CDATA[Re: Vertical Bar Separating Folder and Pane Views Very Thin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7330#p7330"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />what you are refering to is part of the theme you are using, not part of classic shell<br /></div><br />Thanks for your reply - that is good news. <br /><br />Are you saying that I just have to change the desktop theme to another and this thin divider may get wider?<br /><br />I just tried the &quot;Windows 7 Basic&quot; theme and the thin divider is still there - see image below.<br /><br />Can you suggest a theme where the divider is wider and easier to grab?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1820">Slartibartfast</a> — Mon Oct 14, 2013 10:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-10-14T14:06:24-07:00</updated>
<published>2013-10-14T14:06:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7319#p7319</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7319#p7319"/>
<title type="html"><![CDATA[Re: Vertical Bar Separating Folder and Pane Views Very Thin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7319#p7319"><![CDATA[
what you are refering to is part of the theme you are using, not part of classic shell<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Oct 14, 2013 2:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Slartibartfast]]></name></author>
<updated>2013-10-14T07:15:51-07:00</updated>
<published>2013-10-14T07:15:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7314#p7314</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7314#p7314"/>
<title type="html"><![CDATA[Vertical Bar Separating Folder and Pane Views Very Thin]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1418&amp;p=7314#p7314"><![CDATA[
First of all, thank you for this wonderful utility. <br /><br />I have just installed Windows 7 on my old laptop to try it out before installing it on my desktop and saying goodbye to XP. (Maybe <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> ).<br /><br />While setting up various folders and shortcuts I've been frustrated by my inability to grab the dividing line between the folder pane and the file pane with my mouse. It doesn't matter whether the scroll bar is present or not - when it is present, you must grab the right side edge of the vertical scroll bar. When it is not present, you must grab the thin vertical line.<br /><br />But I believe the &quot;grab region&quot; is much thinner in Classic Explorer than in Windows XP Explorer.<br /><br />I enclose a couple of screen-shots - one from XP and one from Win7.<br /><br />In each image, my mouse is just in the correct position to grab the vertical divider, so the mouse icon has changed to a small horizontal line with arrows on either end. (Sorry, I don't know the technical name for it).<br /><br />I would estimate that the &quot;XP Windows Explorer&quot; line has a vertical region about 5 or 6 pixels wide for grabbing, whereas the &quot;Classic Explorer&quot; line is maybe only 2 or 3 pixels wide. You can actually see how much thinner the line is in Classic Explorer.<br /><br />Whatever the numbers are, I find it quite hard to reliably grab that divider with my mouse pointer.<br /><br />If you could make the grab region wider, or adjustable, that would be fantastic.<br /><br />Thanks for taking the time to read this and if Classic Explorer already has a setting for adjusting this value, please tell me where it is and I apologise for not finding it!<br /><br />All the best,<br /><br />Roger.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1820">Slartibartfast</a> — Mon Oct 14, 2013 7:15 am</p><hr />
]]></content>
</entry>
</feed>