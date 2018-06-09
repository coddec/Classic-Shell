<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=6595" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-23T13:48:04-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=6595</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-23T13:48:04-07:00</updated>
<published>2016-08-23T13:48:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28836#p28836</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28836#p28836"/>
<title type="html"><![CDATA[Re: delete all but specific file type]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28836#p28836"><![CDATA[
That was just an example. You can use the Windows Search Advanced Query Syntax: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=4&amp;t=1588#WindowsSearchAQS">viewtopic.php?f=4&amp;t=1588#WindowsSearchAQS</a><!-- l --><br /><br />Find the query that suits your requirement.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 23, 2016 1:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jaykappy]]></name></author>
<updated>2016-08-23T12:47:26-07:00</updated>
<published>2016-08-23T12:47:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28835#p28835</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28835#p28835"/>
<title type="html"><![CDATA[Re: delete all but specific file type]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28835#p28835"><![CDATA[
1. When I do the search is shows the folders as well....I dont want to delete the folders only files.<br /><br /><br />2. Can I string this together somehow and search for .pdf and .msg?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14870">jaykappy</a> — Tue Aug 23, 2016 12:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-23T12:18:37-07:00</updated>
<published>2016-08-23T12:18:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28833#p28833</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28833#p28833"/>
<title type="html"><![CDATA[Re: delete all but specific file type]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28833#p28833"><![CDATA[
Classic Explorer custom commands cannot recurse folders.<br /><br />A faster way that works on subfolders would be to use the Explorer search box. Suppose you want to keep *.txt files but delete all other files, then type this into the Explorer search box:<br /><br />*.* NOT *.txt<br /><br />Then select all the the search results and delete.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 23, 2016 12:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jaykappy]]></name></author>
<updated>2016-08-23T07:30:18-07:00</updated>
<published>2016-08-23T07:30:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28826#p28826</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28826#p28826"/>
<title type="html"><![CDATA[delete all but specific file type]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6595&amp;p=28826#p28826"><![CDATA[
<span style="font-family:Helvetica Neue, Helvetica, Arial, Trebuchet MS, sans-serif;"><span style="color:#333333;"><span style="background-color:#dedfdf;">I am trying to run a command that will search a bunc h of folders and DELETE ALL files EXCEPT a specific file.</span></span></span><br /><span style="font-family:Helvetica Neue, Helvetica, Arial, Trebuchet MS, sans-serif;"><span style="color:#333333;"><span style="background-color:#dedfdf;">I am using this right now.</span></span></span><br /><span style="font-family:Helvetica Neue, Helvetica, Arial, Trebuchet MS, sans-serif;"><span style="color:#333333;"><span style="background-color:#dedfdf;">for %i in &#40;*&#41; do if not %i == .msg del %i</span></span></span><br /><span style="font-family:Helvetica Neue, Helvetica, Arial, Trebuchet MS, sans-serif;"><span style="color:#333333;"><span style="background-color:#dedfdf;">Questions:<br />1. This does not work on subfolders.  How do I modify it to do so?<br />2. How do I specify more than one type of file to KEEP &#40;right now only the .msg are kept&#41;</span></span></span><br /><span style="font-family:Helvetica Neue, Helvetica, Arial, Trebuchet MS, sans-serif;"><span style="color:#333333;"><span style="background-color:#dedfdf;">PLEASE HELP!!!!!  Cheers</span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14870">jaykappy</a> — Tue Aug 23, 2016 7:30 am</p><hr />
]]></content>
</entry>
</feed>