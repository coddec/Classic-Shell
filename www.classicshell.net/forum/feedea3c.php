<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7765" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-02T08:44:43-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7765</id>
<entry>
<author><name><![CDATA[10z20]]></name></author>
<updated>2017-09-02T08:44:43-07:00</updated>
<published>2017-09-02T08:44:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33916#p33916</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33916#p33916"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33916#p33916"><![CDATA[
Ah. That's a shame then. Oh well! Thank you regardless. Reinstalling Windows is not a particular option for me right now.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22086">10z20</a> — Sat Sep 02, 2017 8:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-01T22:54:38-07:00</updated>
<published>2017-09-01T22:54:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33909#p33909</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33909#p33909"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33909#p33909"><![CDATA[
Hmm then the search-related Registry entries are damaged on your PC for this particular Windows installation. If you clean install/reinstall Windows on this or another PC, it should work because I tested it on many computers. Basically, shell:::{9343812E-1C37-4A49-A12E-4B2D810D956B} is the CLSID for 'Indexed Locations'.<br /><br />Your Indexed Locations.search-ms does not open in Explorer as it should, instead it seems to be incorrectly associated with Notepad.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Sep 01, 2017 10:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[10z20]]></name></author>
<updated>2017-09-01T18:21:45-07:00</updated>
<published>2017-09-01T18:21:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33908#p33908</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33908#p33908"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33908#p33908"><![CDATA[
Thank you very much for the help, Gaurav. Unfortunately, that solution still does not work. I appreciate your help very much though. I understand if it's just a lost cause, ha.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22086">10z20</a> — Fri Sep 01, 2017 6:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-15T13:53:56-07:00</updated>
<published>2017-08-15T13:53:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33714#p33714</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33714#p33714"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33714#p33714"><![CDATA[
I think I found why this is happening. The correct URL to use is:<br /><br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />To fix this, follow these steps:<br />1. Open Start Menu Settings<br />2. Go to Customize Start Menu tab<br />3. Now:<br /><br />3-A:<br />If using <strong><span style="text-decoration: underline">classic style</span></strong>, add a sub-item for the &quot;Search Box&quot; item by dragging &quot;Custom&quot; from the right column and dropping it over the &quot;Search Box&quot; in the left column. Then double click Custom and enter this URL I mentioned above as the &quot;Command&quot;.<br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />Enter a text label, for example, See results in Explorer... and pick an icon.<br /><br />OR<br /><br />3-B:<br />If using <strong><span style="text-decoration: underline">Windows 7 style</span></strong>, add a Custom item on the Customize Start Menu tab by pressing the Insert key. Change &quot;Administrative Tools&quot; to &quot;Custom&quot;. Now double click the icon of the &quot;Custom&quot; item and enter this URL I mentioned above as the &quot;Command&quot;.<br /><br />search-ms:&amp;crumb=location:::{9343812E-1C37-4A49-A12E-4B2D810D956B}&amp;crumb=%2<br /><br />Enter a text label, for example, See results in Explorer... and pick an icon.<br /><br />Now when you search for anything and click See results in Explorer... the results in your Explorer window that opens will be consistent with what the Classic Start Menu shows.<br /><br />For now, you will have to ignore the built-in item called &quot;See More Results&quot; and use &quot;See results in Explorer...&quot; that you added manually.<br /><br />Essentially, if you use more of the Advanced Query Syntax, the current implementation of &quot;See More Results&quot; sometimes returns an empty Explorer window whereas a search provider defined with this URL returns results consistent with the Start menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 15, 2017 1:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[10z20]]></name></author>
<updated>2017-07-23T11:02:00-07:00</updated>
<published>2017-07-23T11:02:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33437#p33437</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33437#p33437"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33437#p33437"><![CDATA[
When I click &quot;Indexed Locations&quot;, it opens a text document that I don't know what to do with. As for the registry file, I ran it and restarted my computer and unfortunately nothing changed.<br /><br />Thank you all for your support regardless of whether or not I eventually get this thing working!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22086">10z20</a> — Sun Jul 23, 2017 11:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-23T04:32:00-07:00</updated>
<published>2017-07-23T04:32:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33435#p33435</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33435#p33435"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33435#p33435"><![CDATA[
See More Results/Saved Searches is a Windows feature that seems to be damaged on your computer. <br /><br />Looking at your screenshot, it appears that the file association might be messed up for search-ms files on your PC. That's why it may not be working. You say nothing happens when you double click &quot;Indexed Locations&quot;?<br /><br />Download the attached ZIP file below. Run the Reg file inside it to repair your search-ms file associations. Then log out from your user account and log in again or restart Windows. Then see if search-ms files/saved searches/see more results is working.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jul 23, 2017 4:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[10z20]]></name></author>
<updated>2017-07-22T18:52:21-07:00</updated>
<published>2017-07-22T18:52:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33433#p33433</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33433#p33433"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33433#p33433"><![CDATA[
Sorry, I do not understand. Clicking indexed files does nothing for me, regardless of what program I try to use to open with. And where am I searching?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22086">10z20</a> — Sat Jul 22, 2017 6:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-22T18:44:46-07:00</updated>
<published>2017-07-22T18:44:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33432#p33432</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33432#p33432"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33432#p33432"><![CDATA[
Try this - in Explorer, go into your user folder under Desktop, then go to Searches.<br />Double-click &quot;Indexed Locations&quot;. Then type the search word in the search field in Explorer. Does it find anything?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jul 22, 2017 6:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[10z20]]></name></author>
<updated>2017-07-22T18:33:18-07:00</updated>
<published>2017-07-22T18:33:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33431#p33431</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33431#p33431"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33431#p33431"><![CDATA[
Windows 10, and this same thing happens no matter what I search.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22086">10z20</a> — Sat Jul 22, 2017 6:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-22T17:10:15-07:00</updated>
<published>2017-07-22T17:10:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33430#p33430</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33430#p33430"/>
<title type="html"><![CDATA[Re: &quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33430#p33430"><![CDATA[
What are you searching for? What version of Windows do you have?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jul 22, 2017 5:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[10z20]]></name></author>
<updated>2017-07-22T16:40:02-07:00</updated>
<published>2017-07-22T16:40:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33429#p33429</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33429#p33429"/>
<title type="html"><![CDATA[&quot;See More Results&quot; Search function not working.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7765&amp;p=33429#p33429"><![CDATA[
Huge fan of Classic Shell, have been considering donating if not for this glaring issue. <br /><br />Upon searching a term in the search bar, results appear quickly and I am able to access them. However, upon clicking &quot;See More Results&quot; (often a necessary thing to do when looking to open file locations), the search ends up returning zero results. I posed a picture with the issue below. <br /><br />Thank you for any and all help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22086">10z20</a> — Sat Jul 22, 2017 4:40 pm</p><hr />
]]></content>
</entry>
</feed>