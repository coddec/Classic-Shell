<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7926" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-22T12:25:10-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7926</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-22T12:25:10-07:00</updated>
<published>2017-09-22T12:25:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7926&amp;p=34195#p34195</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7926&amp;p=34195#p34195"/>
<title type="html"><![CDATA[Re: What is the actual search logic behind Classic Start Men]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7926&amp;p=34195#p34195"><![CDATA[
Read the Start Menu Search Guide for a detailed explanation: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=1588">viewtopic.php?f=7&amp;t=1588</a><!-- l --><br /><br />In summary, Classic Shell uses its own fast search for finding app/program shortcuts and Control Panel settings. The advantage of this is that this search continues to work even if the Windows Search service is disabled.<br /><br />But Classic Start Menu relies on Windows 7/Vista Search index for finding files (documents, pictures, music, videos and other files). This index is a database so only the files included in this database by Windows will be returned in the search. The indexing is done in the background by a system service. As far as the Start Menu's Windows Search integration is concerned, this means that only indexed files will be returned in the search results (exactly like the Windows 7 Start Menu). For non-indexed searches of files in other folders, you must use Explorer, or add the folder to the index.<br /><br />So Classic Shell itself has no file/folder search functionality of its own, it relies entirely on Windows Search indexer for that.<br /><br />You can expand the scope of what is searched (indexed) by adding folders to a Library or to Indexing Options in Control Panel.<br /><br />Also, shell extensions (think of them like plugins/addons for Explorer) called IFilters and Property handlers extend the ability of Windows (and thus the Classic Start Menu) to index the contents and metadata of many more file types.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Sep 22, 2017 12:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[smarr]]></name></author>
<updated>2017-09-22T10:25:07-07:00</updated>
<published>2017-09-22T10:25:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7926&amp;p=34194#p34194</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7926&amp;p=34194#p34194"/>
<title type="html"><![CDATA[What is the actual search logic behind Classic Start Menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7926&amp;p=34194#p34194"><![CDATA[
...in pseudo-code detail? For example, when you do a search in classic shell and begin typing, is the order and locations searched something like:<br /><br />for each foldername in c:\users\current user\program Files<br />for each filename in c:\users\current user\programs Files (x86)<br />for each foldername in registry location....<br />for each file in registry location.....<br />for each shortcut in c:\users\current user\shortcut folder.....<br />for each item in some index......<br />Done.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24381">smarr</a> — Fri Sep 22, 2017 10:25 am</p><hr />
]]></content>
</entry>
</feed>