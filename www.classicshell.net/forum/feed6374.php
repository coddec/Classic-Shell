<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=7779" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-28T20:23:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=7779</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-28T20:23:45-07:00</updated>
<published>2017-07-28T20:23:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33515#p33515</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33515#p33515"/>
<title type="html"><![CDATA[Re: Search uses contains instead of starts with]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33515#p33515"><![CDATA[
There are no plans to make it exactly as Windows search. The Windows 7 menu search has certain deficiencies which Classic Start Menu improved upon:<br /><br />- Because Windows 7's menu can't do partial matches, you can't type RAR to open WinRAR. Or dataexecut to open DEP properties. With Classic Start Menu, you can.<br /><br />- For EXE names, the Windows menu doesn't have autocomplete so you've to type the full name e.g. Reged will produce nothing, you've to type Regedit. In Classic menu, you can type: rege. Or gpe or diskm. <br /><br />- Windows 7 Start menu requires the resource-hogging Windows Search service to be running constantly. Without it, it cannot search program names and Control Panel Settings. Classic Start Menu only needs Windows Search for file search, but it can find programs and settings without the Search service running.<br /><br />- Classic menu has some special searching features too: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=4&amp;t=1588#SpecialFeatures">viewtopic.php?f=4&amp;t=1588#SpecialFeatures</a><!-- l --><br /><br />- Classic menu also supports search providers: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=4&amp;t=1588#SearchProviders">viewtopic.php?f=4&amp;t=1588#SearchProviders</a><!-- l --><br /><br />I suggest you take a look at the full search guide: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=1588">viewtopic.php?f=7&amp;t=1588</a><!-- l --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Jul 28, 2017 8:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[54HSEbZmlu]]></name></author>
<updated>2017-07-28T13:52:13-07:00</updated>
<published>2017-07-28T13:52:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33510#p33510</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33510#p33510"/>
<title type="html"><![CDATA[Re: Search uses contains instead of starts with]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33510#p33510"><![CDATA[
Thanks for the explanation. It would be nice if there was a search option that exactly matched the native start menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22268">54HSEbZmlu</a> — Fri Jul 28, 2017 1:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-28T09:10:59-07:00</updated>
<published>2017-07-28T09:10:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33507#p33507</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33507#p33507"/>
<title type="html"><![CDATA[Re: Search uses contains instead of starts with]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33507#p33507"><![CDATA[
Space is considered a word separator so finding words beginning with b is normal e.g. Bluetooth or blink rate. Maybe your batch files also contain words beginning with b. If you don't want to search file contents, also uncheck &quot;Search contents&quot; under &quot;Search files&quot;.<br /><br />It is not the exact Windows 7 search algorithm however there are few differences. If you type 3 letters, the results should not be drastically different. Typing: w m p should find Windows Media Player.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Jul 28, 2017 9:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[54HSEbZmlu]]></name></author>
<updated>2017-07-28T08:08:28-07:00</updated>
<published>2017-07-28T08:08:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33506#p33506</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33506#p33506"/>
<title type="html"><![CDATA[Re: Search uses contains instead of starts with]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33506#p33506"><![CDATA[
With that setting unchecked I type 'b' into the search box and get these results:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Programs:<br />test.bat<br />test2.bat<br />etc.<br />Settings:<br />Add a Bluetooth device<br />Change cursor blink rate<br />etc.<br /></div><br /><br />It still seems to be finding 'b' in the middle of items.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22268">54HSEbZmlu</a> — Fri Jul 28, 2017 8:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-27T23:02:44-07:00</updated>
<published>2017-07-27T23:02:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33496#p33496</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33496#p33496"/>
<title type="html"><![CDATA[Re: Search uses contains instead of starts with]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33496#p33496"><![CDATA[
Yes open Start Menu Settings -&gt; Search Box tab. Uncheck 'Match parts of words'.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jul 27, 2017 11:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[54HSEbZmlu]]></name></author>
<updated>2017-07-27T13:08:30-07:00</updated>
<published>2017-07-27T13:08:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33488#p33488</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33488#p33488"/>
<title type="html"><![CDATA[Search uses contains instead of starts with]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7779&amp;p=33488#p33488"><![CDATA[
In Windows 7 the start menu search uses a &quot;starts with&quot; method -- e.g. typing 'a' into the box only finds items that start with 'a'. Classic Shell's start menu uses a &quot;contains&quot; method and finds all items that contain 'a'. Is there an option to make the search use the &quot;starts with&quot; method?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22268">54HSEbZmlu</a> — Thu Jul 27, 2017 1:08 pm</p><hr />
]]></content>
</entry>
</feed>