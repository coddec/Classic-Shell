<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=5999" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-05-07T23:54:34-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=5999</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-05-07T23:54:34-07:00</updated>
<published>2016-05-07T23:54:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5999&amp;p=26493#p26493</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5999&amp;p=26493#p26493"/>
<title type="html"><![CDATA[Brute Force CSM Settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5999&amp;p=26493#p26493"><![CDATA[
Ive noticed that classic shell doesn't necessarily preform the same safety checks when parsing a 'Menu Settings.xml' File. This means that you can actually manually modify certain parts to achieve settings otherwise impossible through the basic UI. (NOTE: This is might potentially corrupt your settings, or maybe even your classic shell install.. so explore at your own risk)<br /><br />One such 'hack' allows you to change the classic menu hotkey to a single character.. <br />In this 'tutorial' Ill set classic shell to open when you press the Tab key..<br />1. Create a backup Menu Settings.xml<br />2. Navigate to it in explorer, and right click, then EDIT<br />3. Search for: &lt;CSMHotkey<br />4. Change the number to the right to 9<br />5. save as: whatever.xml (NOTE: Dont save it over Menu Settings.xml in-case you make an error)<br />6. From classic shell settings, click Backup&gt;Load Then navigate to whatever.xml and load it<br />7. hit OK, and now pressing [tab] should open your start menu<br /><br />Here is a table of various codes (not all work in classic shell, but it should atleast be 'safe' to try any number here... (I cant say the same for the rest of the settings))<br /><a href="http://www.asciitable.com/" class="postlink">http://www.asciitable.com/</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat May 07, 2016 11:54 pm</p><hr />
]]></content>
</entry>
</feed>