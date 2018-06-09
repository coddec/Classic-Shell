<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=159" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-24T10:40:41-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=159</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-24T10:40:41-07:00</updated>
<published>2013-07-24T10:40:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=5038#p5038</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=5038#p5038"/>
<title type="html"><![CDATA[Re: Question regarding Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=5038#p5038"><![CDATA[
Well good news for you. Now the latest public beta version of Classic Shell which is available from the home page has full Windows Search integration, including file search. Try it if you are interested.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jul 24, 2013 10:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[WDSinWin8]]></name></author>
<updated>2013-01-28T16:10:50-07:00</updated>
<published>2013-01-28T16:10:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=692#p692</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=692#p692"/>
<title type="html"><![CDATA[Re: Question regarding Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=692#p692"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />search_files actually runs the command &quot;search-ms:&quot;.<br /></div><br /><br />Just the pointer I needed, thanks.<br /><br />Following a quick google on &quot;search-ms:&quot; and reading the help section on searches, I've now connected CSM with Windows Desktop Search (full version <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" />). <br /><br />The sub-menu item for the search box that works for me is:<br /><em>- Command:</em> search-ms:query=%2<br /><em>- Label:</em> $Menu.SearchFiles<br /><em>- Icon: </em>shell32.dll,134<br /><br />So my fingers don't even have to leave the keyboard, i.e.<br /><em> &lt;WINKEY&gt;keyword from:friend to:me&lt;ALT&gt;+F </em><br />and the results window is there... outlook emails, files, warts and all.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=219">WDSinWin8</a> — Mon Jan 28, 2013 4:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-28T15:41:25-07:00</updated>
<published>2013-01-28T15:41:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=691#p691</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=691#p691"/>
<title type="html"><![CDATA[Re: Question regarding Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=691#p691"><![CDATA[
search_files actually runs the command &quot;search-ms:&quot;. It is customizable from the General Behavior tab.<br />If you want a search that passes the typed text into a third-party search program, look at the Search section in the help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 28, 2013 3:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[WDSinWin8]]></name></author>
<updated>2013-01-28T15:06:28-07:00</updated>
<published>2013-01-28T15:06:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=689#p689</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=689#p689"/>
<title type="html"><![CDATA[Re: Question regarding Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=689#p689"><![CDATA[
Thank you for Classic Shell, and especially the Start Menu, it has helped me a lot in migrating my family to Windows 8.<br /><br />I'm one of those who happened to rather like the extended functions of the Win 7 Start Menu Integrated Search (is it called Windows Desktop Search?) which could parse simple search like &quot;from:&quot; in order to go and look through the (already indexed) Outlook .pst files.<br /><br />In Windows 8 (with Outlook 2010) I had been quite frustrated that this had been consigned to the dustbin by TPTB at Mcrsft. Then tonight I tried Classic Shell Start Menu &quot;Search&quot;-&gt;&quot;For Files or Folders&quot; and found that it actually causes an Explorer window to open with a search box which allows me to search the whole &quot;ex-WDS&quot; index - including those emails in the .pst files).<br /><br />It may well be that this does not work for Outlook 2013+ (perhaps someone can test it?), and I know there are lots of 3rd party products that replace WDS, but it seems a shame to cause a whole second index to have to be created (and let 2 indexing engines compete for resources).<br /><br />So, finally my questions... <br />1. what does the CSM &quot;search_files&quot; item really do (behind the scenes) to open explorer.exe in that state (i.e. is there a command line for that?), and<br />2. is it possible to pass in the query string (so I could customise the search box to use that route to my &quot;whole computer&quot; index<br /><br />NB: So far I haven't worked out how to convince explorer.exe to conduct this type of search in any other way!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=219">WDSinWin8</a> — Mon Jan 28, 2013 3:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-28T01:46:57-07:00</updated>
<published>2013-01-28T01:46:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=659#p659</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=659#p659"/>
<title type="html"><![CDATA[Re: Question regarding Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=659#p659"><![CDATA[
Btw, you can already execute them from the search box although I agree if they return in search results, it will be even better.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 28, 2013 1:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-27T12:32:29-07:00</updated>
<published>2013-01-27T12:32:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=629#p629</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=629#p629"/>
<title type="html"><![CDATA[Re: Question regarding Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=629#p629"><![CDATA[
That's a good idea. I'll add it to the list.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 27, 2013 12:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maddox]]></name></author>
<updated>2013-01-27T12:27:31-07:00</updated>
<published>2013-01-27T12:27:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=627#p627</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=627#p627"/>
<title type="html"><![CDATA[Question regarding Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=159&amp;p=627#p627"><![CDATA[
After the installation of windows 8 i missed something. Then i found the missing piece in Classic Shell. Classic shell mimics windows 7 start menu very well except for the search.<br /><br />In windows vista/7 the start menu search finds programms which are neither in start menu nor in the path environment variable. These programms are registered in: <br /><br />HKLM &quot;Software\Microsoft\Windows\CurrentVersion\App Paths&quot;<br /><br />Are there any plans to extend the classic shell search to this elements?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=210">maddox</a> — Sun Jan 27, 2013 12:27 pm</p><hr />
]]></content>
</entry>
</feed>