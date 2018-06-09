<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=460" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-03-31T11:37:51-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=460</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-03-31T11:37:51-07:00</updated>
<published>2013-03-31T11:37:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2388#p2388</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2388#p2388"/>
<title type="html"><![CDATA[Re: Support for Recent Places as a menu in CS menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2388#p2388"><![CDATA[
Yep ::{22877a6d-37a1-461a-91b0-dbda5aaebc99} doesn't work but  shell:::{22877a6d-37a1-461a-91b0-dbda5aaebc99} does. (3 colons after shell).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Mar 31, 2013 11:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-31T08:15:36-07:00</updated>
<published>2013-03-31T08:15:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2387#p2387</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2387#p2387"/>
<title type="html"><![CDATA[Re: Support for Recent Places as a menu in CS menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2387#p2387"><![CDATA[
Looks like for some reason the shell doesn't recognize &quot;::{22877A6D-37A1-461A-91B0-DBDA5AAEBC99}&quot; as a valid path. That's probably a bug (or feature) of Windows. It works for many other CLSIDs, like Computer or Games.<br /><br />You should be able to drag the Recent Places folder to the left part of the menu. If you have the &quot;Expand folder shortcuts&quot; checked it should open as a sub-menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 31, 2013 8:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-03-31T07:37:18-07:00</updated>
<published>2013-03-31T07:37:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2382#p2382</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2382#p2382"/>
<title type="html"><![CDATA[Re: Support for Recent Places as a menu in CS menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2382#p2382"><![CDATA[
To add Recent Places, add a Custom Item. In the Link field, specify:  shell:::{22877a6d-37a1-461a-91b0-dbda5aaebc99}<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Mar 31, 2013 7:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rol]]></name></author>
<updated>2013-03-31T06:33:46-07:00</updated>
<published>2013-03-31T06:33:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2374#p2374</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2374#p2374"/>
<title type="html"><![CDATA[Support for Recent Places as a menu in CS menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=460&amp;p=2374#p2374"><![CDATA[
I've tried to add the Recent Places as a sub-menu in the right pane of the CS menu, without success. It is possible to open an Explorer window with the Recent Places already opened by creating a shortcut to Recent Places on the desktop, and it is also possible to add a custom item to call that shortcut from the CS menu, but it doesn't shows the sub-menu arrow and the recent places directly in the menu. It is still necessary to open Explorer.<br /><br />It would be nice if you could add Recent Places in the hardcoded options of CS menu, in a way similar to Recent Items.<br /><br />BTW, the CLIID of Recent Places is {22877a6d-37a1-461a-91b0-dbda5aaebc99}<br /><br />Thanks!<br /><br />Using Win8 pro x64 with CS 3.6.5.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=519">rol</a> — Sun Mar 31, 2013 6:33 am</p><hr />
]]></content>
</entry>
</feed>