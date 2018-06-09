<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6755" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-28T11:39:24-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6755</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-08-28T11:39:24-07:00</updated>
<published>2016-08-28T11:39:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29083#p29083</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29083#p29083"/>
<title type="html"><![CDATA[Re: Selected search result reset (Minor)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29083#p29083"><![CDATA[
I think the problem is that when the search results are getting refreshed, the start menu tries to recover the selected item, and does it by name. If you have duplicates then maybe the wrong item will be selected.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Aug 28, 2016 11:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ReaperDeath]]></name></author>
<updated>2016-08-28T11:31:39-07:00</updated>
<published>2016-08-28T11:31:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29082#p29082</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29082#p29082"/>
<title type="html"><![CDATA[Re: Selected search result reset (Minor)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29082#p29082"><![CDATA[
Yea I am on 4.3.0 and am on Win10 Home with the latest updates if that helps any. After more testing it seems to be a pain to reproduce which is always fun. I seem to have figured out a bit more about it and how minor it is. For it to happen the following need to be true for both files<br /><br />- Exact same name<br />- Is shortcut<br />- Points to two different .exe's in different locations<br /><br /><a href="https://drive.google.com/open?id=0B4aXFx3_CMXsSkxUQ2hIa1NCSU0" class="postlink">Here is an example you should be able to throw into your start menu to reproduce the bug</a> Just throw the two folders into your Start Menu\Programs folder then search zabc, the files the shortcuts are pointing too should not need to exist for it to work. <!-- m --><a class="postlink" href="http://i.imgur.com/r9fZE1K.gifv">http://i.imgur.com/r9fZE1K.gifv</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14909">ReaperDeath</a> — Sun Aug 28, 2016 11:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-28T03:53:56-07:00</updated>
<published>2016-08-28T03:53:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29070#p29070</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29070#p29070"/>
<title type="html"><![CDATA[Re: Selected search result reset (Minor)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29070#p29070"><![CDATA[
What version of Classic Shell are you using? Make sure you are on Classic Shell 4.3.0. I tried with Win, Ctrl+V and quickly pressing Down before the search finished but couldn't reproduce the issue you describe of the selected search result getting reset. If you can figure out and give us the exact steps (when exactly does the selected search item move to the top again), it might be easier to repro.<br /><br />The forum software (phpbb) has numerous bugs and limitations depending on which web browser you use but it is better I think than any of the dozens of other forum software I have tried on the web. Google Chrome and Opera give me the least issues in general with any websites.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Aug 28, 2016 3:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ReaperDeath]]></name></author>
<updated>2016-08-26T19:21:46-07:00</updated>
<published>2016-08-26T19:21:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29047#p29047</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29047#p29047"/>
<title type="html"><![CDATA[Selected search result reset (Minor)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6755&amp;p=29047#p29047"><![CDATA[
During a search you can select things with the arrow keys, that finishes if the top and selected file share a name <a href="http://i.imgur.com/NIlo6XN.gifv" class="postlink">like so.</a> Only keys pressed during the gif are Win, Ctrl+V and Down twice. This is obviously quite minor but when I started making this post I thought it happened with everything not just files sharing names and I worked so hard on that gif. <br /><br />I also just discovered a bug with your forums (Or my browser). Deleting multiple words screws up the line below it <a href="http://i.imgur.com/ZAGkdPA.png" class="postlink">like[1]</a> <a href="http://i.imgur.com/F3o13Pp.png" class="postlink">so[2].</a><br /><br />Sorry if this has been reported already but I had no clue what to search for it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14909">ReaperDeath</a> — Fri Aug 26, 2016 7:21 pm</p><hr />
]]></content>
</entry>
</feed>