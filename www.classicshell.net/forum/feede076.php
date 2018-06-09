<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6786" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-09-04T10:43:34-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6786</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-04T10:43:34-07:00</updated>
<published>2016-09-04T10:43:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29196#p29196</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29196#p29196"/>
<title type="html"><![CDATA[Re: Reboot - Shut down]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29196#p29196"><![CDATA[
One of the changes in Classic Shell 4.3.0 was that if a menu item's Label (name) has a user-defined accelerator key using an ampersand (&amp;) character, that item will be preferred/executed when you press the accelerator key, ignoring other items in the menu that begin with that letter but do not have a user-defined accelerator, or submenus that used to expand with that accelerator.<br /><br />For the Shutdown submenu, u when focus was not in search box (or Alt+u when focus was in search box) used to open the Shutdown submenu. Now it executes the Shutdown... command if it is the default Shutdown command as its accelerator is defined in C:\Program Files\Classic Shell\StartMenuL10N.ini. After releasing this version, we realized this change prevents access to some items via their first letter the older way allowed.<br /><br />It will be fixed in the next version. Until then you can use Win -&gt; right arrow key -&gt; right arrow key -&gt; u or r to shutdown or reboot.<br /><br />If you are using the Classic style, you can go to Customize Start Menu tab. Double click &quot;Shutdown dialog&quot; and uncheck &quot;Split button item&quot;. Click OK everywhere to save settings. Now Alt+u should open the Shutdown menu again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Sep 04, 2016 10:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bert07]]></name></author>
<updated>2016-09-04T09:42:16-07:00</updated>
<published>2016-09-04T09:42:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29194#p29194</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29194#p29194"/>
<title type="html"><![CDATA[Re: Reboot - Shut down]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29194#p29194"><![CDATA[
Also, I see no need for the extra window opening up.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9729">bert07</a> — Sun Sep 04, 2016 9:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[bert07]]></name></author>
<updated>2016-09-04T09:36:53-07:00</updated>
<published>2016-09-04T09:36:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29193#p29193</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29193#p29193"/>
<title type="html"><![CDATA[Reboot - Shut down]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6786&amp;p=29193#p29193"><![CDATA[
In version 4.3.0 you have changed the &quot;reboot&quot; &quot;shutdown&quot; shortcuts.<br /><br />It used to be:<br /><br />ALT- U - R (reboot)<br /><br />or<br /><br />ALT - U -U (shut down)<br /><br /><br />But you changed it in:<br /><br />ALT - U - R - ENTER (reboot)<br /><br />and<br /><br />ALT - U - U - ENTER (Shut down)<br /><br /><br />Why did you do that for?<br /><br /><br />As far as I can see, there was no reason for it.<br /><br />Bert.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9729">bert07</a> — Sun Sep 04, 2016 9:36 am</p><hr />
]]></content>
</entry>
</feed>