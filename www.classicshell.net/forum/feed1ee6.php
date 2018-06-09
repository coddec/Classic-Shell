<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7729" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-09T09:12:56-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7729</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-09T09:12:56-07:00</updated>
<published>2017-07-09T09:12:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7729&amp;p=33236#p33236</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7729&amp;p=33236#p33236"/>
<title type="html"><![CDATA[Re: CS won't search for Settings items]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7729&amp;p=33236#p33236"><![CDATA[
Open Control Panel -&gt; Indexing Options. Make sure the following folder is being indexed. If not add this folder to the index by clicking the Modify button. You may have to expand folders quite a bit under the treeview to get to this folder.<br /><br />C:\Users\&lt;Your user name&gt;\AppData\Local\Packages\windows.immersivecontrolpanel_cw5n1h2txyewy\LocalState\Indexed\Settings\en-US<br /><br />Also, AppData folder might be hidden so once you get to C:\Users\&lt;Your user name&gt;, Appdata may not be listed in the Indexed Locations box. To fix this, close the dialog and close Indexing Options. Then you can unhide the Appdata folder from an elevated command prompt by giving the command:<br /><br />attrib %userprofile%\appdata -h -r -s<br /><br /><br />Then open Indexing Options in Control Panel again.<br /><br />Add the above mentioned folder to your search index.<br /><br />Once Windows finishes indexing this folder, PC Settings from your C: drive should show up in Classic Start Menu search results.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jul 09, 2017 9:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[LAMBDA471]]></name></author>
<updated>2017-07-09T07:04:03-07:00</updated>
<published>2017-07-09T07:04:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7729&amp;p=33234#p33234</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7729&amp;p=33234#p33234"/>
<title type="html"><![CDATA[CS won't search for Settings items]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7729&amp;p=33234#p33234"><![CDATA[
I tried to search for similar thread, but all I found was this from last year:<br /><br /><!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?t=6396&amp;p=27840">viewtopic.php?t=6396&amp;p=27840</a><!-- l --><br /><br />My &quot;search for files&quot; is enabled and &quot;search indexing&quot; should also be enabled as it's a fresh installation from today with nothing altered.<br /><br /><br />Even so, I still can't get CS to display results from Settings, which is really annoying, what should I do?<br /><br /><br />EDIT: I also found out I must have a specific folder regarding Settings, but it doesn't even exist for me. I read that CU also broke the rest of the start menu alternatives the same way.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16329">LAMBDA471</a> — Sun Jul 09, 2017 7:04 am</p><hr />
]]></content>
</entry>
</feed>