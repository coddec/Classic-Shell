<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=1977" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-01-09T12:50:43-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=1977</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-01-09T12:50:43-07:00</updated>
<published>2014-01-09T12:50:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9982#p9982</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9982#p9982"/>
<title type="html"><![CDATA[Re: Option to set and retain all File Explorer view options]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9982#p9982"><![CDATA[
Maybe this will help clarify things: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-set-a-folder-view-in-explorer-for-all-folders-list-details-tiles-small-or-large-icons/">http://winaero.com/blog/how-to-set-a-fo ... rge-icons/</a><!-- m --> If you use Libraries to access the folders contained in them, the folders use the parent Library's view.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jan 09, 2014 12:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-01-08T20:01:53-07:00</updated>
<published>2014-01-08T20:01:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9963#p9963</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9963#p9963"/>
<title type="html"><![CDATA[Re: Option to set and retain all File Explorer view options]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9963#p9963"><![CDATA[
It may be that previously set views are stored in the registry and are overriding the view you are trying to set. <br /><br />First create a Restore Point on your system for the C:\ volume by opening SystemPropertiesProtection.exe. (type SystemPropertiesProtection.exe into the Classic Start Menu's search box).<br /><br />Then open Regedit.exe and go to HKEY_CURRENT_USER\Software\Classes\Local Settings\Software\Microsoft\Windows\Shell key. Delete the <strong>BagMRU and Bags </strong>keys. Make sure you don't delete any other keys. These keys store Explorer views. After deleting them, try doing &quot;Apply to all folders&quot; 5 times by opening a folder containing 5 content types.<br /><br />It is definitely supposed to work and I've tested it on Windows 8.1 and it works (since I am also a fan of List View). If they don't work on your system despite these steps, then something's broken.<br /><br />Btw, note that this isn't related to Classic Shell, so we are merely trying to help. Classic Shell is not responsible if anything goes wrong on your system due to registry tweaking. You should always take a Restore Point before doing registry changes should something go wrong.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 08, 2014 8:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[empkae]]></name></author>
<updated>2014-01-08T15:19:02-07:00</updated>
<published>2014-01-08T15:19:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9962#p9962</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9962#p9962"/>
<title type="html"><![CDATA[Re: Option to set and retain all File Explorer view options]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9962#p9962"><![CDATA[
Yes. I have gone that route. It is not sticky. Or it is not as pervasive as I want it to be. I simply want EVERYTHING do default to List, no matter what, UNLESS I specifically set that folder and optionally its children to another view.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2678">empkae</a> — Wed Jan 08, 2014 3:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-01-08T11:42:02-07:00</updated>
<published>2014-01-08T11:42:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9961#p9961</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9961#p9961"/>
<title type="html"><![CDATA[Re: Option to set and retain all File Explorer view options]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9961#p9961"><![CDATA[
In Windows 7 and Windows 8.1/8, folder view settings are saved for 5 different folder &quot;templates&quot; depending on their content. So to set the view to List view permanently:<br />1. Open five folders, one each of the 5 types - containing General/Miscellaneous files, Documents, Pictures, Music, and Videos.<br />2. Set the view to List view for each of these.<br />3. Open Folder Options from the Ribbon UI in *that folder*. Folder Options is located on the View tab on the Ribbon.<br />4. In Folder Options, switch to View tab and click &quot;Apply to all folders&quot;. <br /><br />For example, suppose you open a folder containing Pictures, change to List View and then do &quot;Apply to all folders&quot;, then it will only make it save the setting for all folders of that content type (Pictures). So you've to switch to List view for each of these 5 types and do &quot;Apply to all folders&quot; for all 5. Then the view settings will be saved.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 08, 2014 11:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[empkae]]></name></author>
<updated>2014-01-08T10:55:15-07:00</updated>
<published>2014-01-08T10:55:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9959#p9959</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9959#p9959"/>
<title type="html"><![CDATA[Option to set and retain all File Explorer view options]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1977&amp;p=9959#p9959"><![CDATA[
When opening W8.1 File Explorer it seems to show up with the Detail view most often, but others intrude, too. I prefer all be set to List no matter what. The Windows options for setting this are there but no longer work. This is an unresolved complaint as seen by my searching for a solution.<br /><br />Perhaps Classic Shell can fix this???<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2678">empkae</a> — Wed Jan 08, 2014 10:55 am</p><hr />
]]></content>
</entry>
</feed>