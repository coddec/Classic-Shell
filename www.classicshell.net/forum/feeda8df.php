<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=5397" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-02-01T10:06:46-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=5397</id>
<entry>
<author><name><![CDATA[Peter890]]></name></author>
<updated>2016-02-01T10:06:46-07:00</updated>
<published>2016-02-01T10:06:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24984#p24984</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24984#p24984"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24984#p24984"><![CDATA[
That works just great!! Thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12595">Peter890</a> — Mon Feb 01, 2016 10:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-01T09:26:52-07:00</updated>
<published>2016-02-01T09:26:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24983#p24983</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24983#p24983"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24983#p24983"><![CDATA[
Open Classic Explorer Settings and go to &quot;Toolbar Buttons&quot; tab. Scroll down in the right column and drag the item called Custom to the left column where you want the button.<br /><br />Then double click the Custom item in the left column to bring up the Edit Toolbar Item dialog. In the Command field, type:<br />explorer.exe /select,&quot;%2&quot;<br /><br />Give it an icon and tooltip and label if you want e.g. Open folder containing selected item. Click OK everywhere to save settings and re-open the Explorer window. %2 in Classic Explorer means currently selected item. So when you select an item in search results and click the button, it will open in a new Explorer window with that item selected, making it easier for you to locate it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Feb 01, 2016 9:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Peter890]]></name></author>
<updated>2016-02-01T09:21:27-07:00</updated>
<published>2016-02-01T09:21:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24982#p24982</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24982#p24982"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24982#p24982"><![CDATA[
That's a little bit over my head, can you explain?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12595">Peter890</a> — Mon Feb 01, 2016 9:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-01T09:19:07-07:00</updated>
<published>2016-02-01T09:19:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24981#p24981</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24981#p24981"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24981#p24981"><![CDATA[
You can add a Custom command/button: explorer.exe /select,&quot;%2&quot;   <br />  <br />It'll work if the item is selected in the right pane of Explorer.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Feb 01, 2016 9:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Peter890]]></name></author>
<updated>2016-02-01T09:06:04-07:00</updated>
<published>2016-02-01T09:06:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24980#p24980</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24980#p24980"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24980#p24980"><![CDATA[
Yes, that's one option.<br /><br />Just think it's strange that in Explorer you cannot escape from the search context easily. <br /><br />Is it possible to make a button: &quot;Open file location&quot;?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12595">Peter890</a> — Mon Feb 01, 2016 9:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-01T09:03:44-07:00</updated>
<published>2016-02-01T09:03:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24979#p24979</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24979#p24979"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24979#p24979"><![CDATA[
You could search from the Start Menu instead of Explorer. It's the same search.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Feb 01, 2016 9:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-01T08:43:07-07:00</updated>
<published>2016-02-01T08:43:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24978#p24978</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24978#p24978"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24978#p24978"><![CDATA[
The search was changed in Windows 7 and I don't know of a way to change it back.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Feb 01, 2016 8:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Peter890]]></name></author>
<updated>2016-02-01T08:38:48-07:00</updated>
<published>2016-02-01T08:38:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24977#p24977</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24977#p24977"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24977#p24977"><![CDATA[
That's what I also mentioned in my post.<br /><br />But is there a way to make that standard?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12595">Peter890</a> — Mon Feb 01, 2016 8:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-01T08:36:46-07:00</updated>
<published>2016-02-01T08:36:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24975#p24975</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24975#p24975"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24975#p24975"><![CDATA[
You right-click on the file and select &quot;Open file location&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Feb 01, 2016 8:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Peter890]]></name></author>
<updated>2016-02-01T07:57:01-07:00</updated>
<published>2016-02-01T07:57:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24973#p24973</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24973#p24973"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24973#p24973"><![CDATA[
Another question: In Win 10 if you click on a folder within search results one stays within search results. It doesn't open the new folder itself, Vista did this.<br />Of course I can right click and choose Open Folder Location (or something), but that's tedious.<br /><br />Any trick?<br /><br />Thanks!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12595">Peter890</a> — Mon Feb 01, 2016 7:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Peter890]]></name></author>
<updated>2016-02-01T06:15:41-07:00</updated>
<published>2016-02-01T06:15:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24969#p24969</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24969#p24969"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24969#p24969"><![CDATA[
Going to try that later, thanks.<br />Any idea as how to fix it in the task bar (the horizontal bar at botoom of teh sceen)?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12595">Peter890</a> — Mon Feb 01, 2016 6:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-01T05:58:46-07:00</updated>
<published>2016-02-01T05:58:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24968#p24968</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24968#p24968"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24968#p24968"><![CDATA[
If you want to instead add Recent Places to the right side column, go to Customize Start Menu tab. Add a Custom item and double click it. The Edit Menu Item dialog will show up. In its &quot;Link&quot; field, copy-paste:<br />shell:::{22877a6d-37a1-461a-91b0-dbda5aaebc99}<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Feb 01, 2016 5:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Peter890]]></name></author>
<updated>2016-02-01T04:02:06-07:00</updated>
<published>2016-02-01T04:02:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24966#p24966</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24966#p24966"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24966#p24966"><![CDATA[
I got the menu to work, thanks! <br />Another question: I would like to pin this menu to the task bar, but if I drag it won't stick. Is there a solution for this?<br />Also I would like to have it on the right hand side of the menu, next below (or above) to the Recent Items button.<br /><br />Is this possible, or am I asking for too much, now? <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><br /><br />Made also the translation topic.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12595">Peter890</a> — Mon Feb 01, 2016 4:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-01-31T01:18:35-07:00</updated>
<published>2016-01-31T01:18:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24913#p24913</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24913#p24913"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24913#p24913"><![CDATA[
I don't understand anything. Where are you getting Missing link or cannot find link? Please post exact steps. Checking/unchecking what doesn't help? Try these steps: <!-- m --><a class="postlink" href="http://winaero.com/blog/recent-places-add-to-the-left-pane-in-windows-10-file-explorer/">http://winaero.com/blog/recent-places-a ... -explorer/</a><!-- m --><br /><br />You can post translation errors here in this forum. Just make a new topic for example called &quot;Dutch translation issues&quot; at <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewforum.php?f=20">viewforum.php?f=20</a><!-- l --> You can post them in a separate forum thread or if there are many long strings, then paste them in a text file and attach/upload it to the post.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jan 31, 2016 1:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Peter890]]></name></author>
<updated>2016-01-30T14:51:53-07:00</updated>
<published>2016-01-30T14:51:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24900#p24900</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24900#p24900"/>
<title type="html"><![CDATA[Re: Win 10 &quot;Recent places&quot; is gone from File Exp navigation ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5397&amp;p=24900#p24900"><![CDATA[
Found a whole bunch of errors in translation. Spent 2 hours looking for them, so consider that my contribution. But: where todeliver them?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12595">Peter890</a> — Sat Jan 30, 2016 2:51 pm</p><hr />
]]></content>
</entry>
</feed>