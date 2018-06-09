<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=939" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-17T10:40:15-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=939</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-17T10:40:15-07:00</updated>
<published>2013-07-17T10:40:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=939&amp;p=4828#p4828</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=939&amp;p=4828#p4828"/>
<title type="html"><![CDATA[Re: Two small bugs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=939&amp;p=4828#p4828"><![CDATA[
1) Hmm. Split button's a special case vs a regular item/submenu. As Ivo explained after I discussed this issue with him, the reason the menu closes normally is that another item gets activated. For items with sub-menus, activation is tied to the opening of the submenu of another item. However in case of a split button, it's timer is different from the regular &quot;Menu delay&quot;. So the first expanded menu will close after the split button delay time passes and it opens. You could always hover over the right part of the button to open it with the Menu Delay.<br /><br />2) A harmless minor bug.<br /><br />Thanks for reporting. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jul 17, 2013 10:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[x79]]></name></author>
<updated>2013-07-17T08:20:10-07:00</updated>
<published>2013-07-17T08:20:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=939&amp;p=4822#p4822</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=939&amp;p=4822#p4822"/>
<title type="html"><![CDATA[Two small bugs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=939&amp;p=4822#p4822"><![CDATA[
First: I set my &quot;Delay Multiplier for split buttons %&quot; to a high value. Now if I hover something with a submenu (like Recents) and then move my mouse to hover the Shutdown menu, The Recents submenu doesn't disappear.<br /><br />Second: If I left click the start button to bring up the menu, then I right click on the start button, the two menus overlap. I would expect, instead, that the start menu would disappear before the context menu appeared.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1119">x79</a> — Wed Jul 17, 2013 8:20 am</p><hr />
]]></content>
</entry>
</feed>