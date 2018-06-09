<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=6279" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-07-12T12:30:59-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=6279</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-07-12T12:30:59-07:00</updated>
<published>2016-07-12T12:30:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27506#p27506</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27506#p27506"/>
<title type="html"><![CDATA[Re: Customization Improvements]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27506#p27506"><![CDATA[
1. Maybe in a scenario where some menu items have icons and others don't; except... the user can always opt for an invisible icon (item 50 in shell32.dll)<br />2. I assume this is a technical limitation; so ill leave it alone<br />3. yes there is a 'recent programs' item but when you throw it in the menu it removes the list of recent programs... The way I see it the menu item should be mandatory (because it determines the location for it) to show the recent programs at all, and the option should tell CSM whether its a list, or a menu<br />4. You can; but then why implement it in such a way? Just include a custom menu item for 'Windows start-menu' less confusing, and more customizable.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Jul 12, 2016 12:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-07-12T08:02:28-07:00</updated>
<published>2016-07-12T08:02:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27488#p27488</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27488#p27488"/>
<title type="html"><![CDATA[Re: Customization Improvements]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27488#p27488"><![CDATA[
All menus in Windows align the text for the menu items, regardless if there is an icon or not. I think that looks better than moving the text to the left.<br /><br />The pinned items can't be anywhere in the menu. They (as well as the recent items), can get too many, and the menu must show a scrollbar. The scrollbar can only be at the top of the left column.<br /><br />I'm not sure what you mean about the recent_programs menu item. It already exists and you can add it anywhere in the main menu.<br /><br />You can make your own shortcut or custom menu item with the command &quot;ClassicStartMenu -togglenew&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 12, 2016 8:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-07-02T07:52:16-07:00</updated>
<published>2016-07-02T07:52:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27392#p27392</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27392#p27392"/>
<title type="html"><![CDATA[Customization Improvements]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6279&amp;p=27392#p27392"><![CDATA[
If an icon for a custom menu item is left &lt;blank&gt; its label should be justified left rather than leaving an empty space for a missing icon<br />There should be a Custom menu item for 'Pinned Items' that determines where this list of items populates (pinning to the right column for example)<br />You should add a checkbox 'recent programs as menu/list' that makes the 'recent_programs' menu item function as a list/dropdown menu Then require the 'recent_programs' menu item should be required to display recent programs, and allow you to move the list anywhere in the menu.<br />The 'Show Start screen shortcut' when checked should create a new menu item in the 'customize start menu' tab (so a user can define where they want this link) It should also be in the windows 8/10 tab<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat Jul 02, 2016 7:52 am</p><hr />
]]></content>
</entry>
</feed>