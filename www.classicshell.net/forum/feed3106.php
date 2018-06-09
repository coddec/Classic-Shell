<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4877" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-08-14T02:12:34-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4877</id>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2015-08-14T02:12:34-07:00</updated>
<published>2015-08-14T02:12:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21225#p21225</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21225#p21225"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21225#p21225"><![CDATA[
I added the users folder and enabled indexing for &quot;.settingcontent-ms&quot; which was disabled by default, didn't help.<br />It kept disabling by default relevant paths like my user's folder appdata, it makes no sense.. So I kept enablind them manually. There's a hu-HU folder left I didn't find. It's not in the path you shared. It doesn't show where it is, naturally... What a pile of crap...<br /><br />Anyway.  It still doesn't work. I wish CSM would handle this automatically. Not sure what else can I do...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Fri Aug 14, 2015 2:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2015-08-11T13:12:47-07:00</updated>
<published>2015-08-11T13:12:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21110#p21110</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21110#p21110"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21110#p21110"><![CDATA[
Tanks<br />Well I added %LocalAppdata%\Packages\windows.immersivecontrolpanel_cw5n1h2txyewy and subfolders, but it still doesn't work. Oh well...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Tue Aug 11, 2015 1:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-11T08:40:32-07:00</updated>
<published>2015-08-11T08:40:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21103#p21103</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21103#p21103"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21103#p21103"><![CDATA[
Your User profile is normally indexed by default by Windows Search. The PC Settings folder is at:<br />%LocalAppdata%\Packages\windows.immersivecontrolpanel_cw5n1h2txyewy\LocalState\Indexed\Settings\xx-XX<br /><br />where xx-XX is differently named depending on the language. It's part of the appdata folder is included in the user profile.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 11, 2015 8:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2015-08-11T08:15:13-07:00</updated>
<published>2015-08-11T08:15:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21102#p21102</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21102#p21102"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21102#p21102"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />No, just enabling the indexing should do it. The folder is indexed by default on Windows 8.1 and Windows 10 unless you removed it.<br /></div><br />I might have. Which is it?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Tue Aug 11, 2015 8:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-11T08:12:01-07:00</updated>
<published>2015-08-11T08:12:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21101#p21101</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21101#p21101"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21101#p21101"><![CDATA[
No, just enabling the indexing should do it. The folder is indexed by default on Windows 8.1 and Windows 10 unless you removed it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 11, 2015 8:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2015-08-11T07:30:01-07:00</updated>
<published>2015-08-11T07:30:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21099#p21099</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21099#p21099"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21099#p21099"><![CDATA[
Do I need to make sure some folder is indexed to get PC settings results?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Tue Aug 11, 2015 7:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-11T05:31:48-07:00</updated>
<published>2015-08-11T05:31:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21090#p21090</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21090#p21090"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21090#p21090"><![CDATA[
Indexing is needed for PC Settings. Old Control Panel settings are in a single special virtual folder. PC Settings are stored as a large number of files on the disk. Their keywords are stored as properties in the &quot;Comments&quot; field.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 11, 2015 5:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2015-08-11T05:16:37-07:00</updated>
<published>2015-08-11T05:16:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21087#p21087</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21087#p21087"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21087#p21087"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />If PC Settings are not being searched for you at all, try this:<br /><br />1. In Classic Start Menu settings, go to the &quot;Search box&quot; tab. Make sure the &quot;Search PC settings&quot; option is checked.<br />2. In Control Panel -&gt; Indexing Options -&gt; Advanced -&gt; go to the file type, settingcontent-ms. Try changing the default from &quot;Index properties and file contents&quot; to &quot;Index properties only&quot;.<br /><br />The index will be rebuilt. That will take time depending on how many files and folders you have added to the index. After it is rebuilt, you should be able to search PC Settings too.<br /></div><br /><br />I have indexing disabled. I didn't need it for old settings.<br />If memory serves I wanted use it to have the majority of my applications show up which are not in %programfiles%. But it was useless for it because it didn't check subfolders... unlike how %programfiles% is checked.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Tue Aug 11, 2015 5:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2015-08-11T05:06:34-07:00</updated>
<published>2015-08-11T05:06:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21086#p21086</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21086#p21086"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21086#p21086"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />Right click start button&gt;Classic Shell Settings<br />Type 'pc' into the search box<br />the only setting available should be the one you need<br /><br />(alternatively its in the &quot;Search Box&quot; tab, when show all settings is checked)<br /></div><br />No it isn't when it's localized.<br /><br />I have anything checked in the relevant section including PC settings. Maybe it only works on english windows 10 for some reason?<br /><br />I can type in both english and my locale to get results for normal settings. For example I can type &quot;mouse&quot; or &quot;egér&quot; and get much the same results. <span style="font-size: 85%; line-height: 116%;">(It's not perfect because for example I get microphone settings as a first result for &quot;egér&quot; also I get multiple options that are missing/available for one but not the other search term)</span> I don't get anything from PC settings whatsoever.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Tue Aug 11, 2015 5:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-11T04:58:05-07:00</updated>
<published>2015-08-11T04:58:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21085#p21085</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21085#p21085"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21085#p21085"><![CDATA[
If PC Settings are not being searched for you at all, try this:<br /><br />1. In Classic Start Menu settings, go to the &quot;Search box&quot; tab. Make sure the &quot;Search PC settings&quot; option is checked.<br />2. In Control Panel -&gt; Indexing Options -&gt; Advanced -&gt; go to the file type, settingcontent-ms. Try changing the default from &quot;Index properties and file contents&quot; to &quot;Index properties only&quot;.<br /><br />The index will be rebuilt. That will take time depending on how many files and folders you have added to the index. After it is rebuilt, you should be able to search PC Settings too.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 11, 2015 4:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2015-08-11T04:56:42-07:00</updated>
<published>2015-08-11T04:56:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21083#p21083</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21083#p21083"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21083#p21083"><![CDATA[
Right click start button&gt;Classic Shell Settings<br />Type 'pc' into the search box<br />the only setting available should be the one you need<br /><br />(alternatively its in the &quot;Search Box&quot; tab, when show all settings is checked)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Aug 11, 2015 4:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2015-08-11T04:40:57-07:00</updated>
<published>2015-08-11T04:40:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21082#p21082</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21082#p21082"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21082#p21082"><![CDATA[
Not my experience. I don't get anything from there.<br />Wait. How do you get PC settings under the normal setting? Because I don't get that at all.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Tue Aug 11, 2015 4:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-11T03:43:06-07:00</updated>
<published>2015-08-11T03:43:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21081#p21081</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21081#p21081"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21081#p21081"><![CDATA[
The Start Menu already searches the PC Settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 11, 2015 3:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[avada]]></name></author>
<updated>2015-08-11T01:53:13-07:00</updated>
<published>2015-08-11T01:53:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21075#p21075</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21075#p21075"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=21075#p21075"><![CDATA[
I would have expected for this &quot;PC settings&quot; and it's submenus/categories to show up in the settings section of the searchbox results just like the old style settings, but it didn't. It only shows up (and only PC settings, nothing that's inside it) when I enable show metro apps and in the app section.<br />Will PC settings stuff be added to the searchbox?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=809">avada</a> — Tue Aug 11, 2015 1:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-08-08T09:42:38-07:00</updated>
<published>2015-08-08T09:42:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=20913#p20913</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=20913#p20913"/>
<title type="html"><![CDATA[Re: Windows 10 Classic Shell needs a Windows10 Settings shor]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4877&amp;p=20913#p20913"><![CDATA[
Thanks for reporting the bug about PC Settings not working if it has a sub-menu. It will be fixed in the upcoming version 4.2.4.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Aug 08, 2015 9:42 am</p><hr />
]]></content>
</entry>
</feed>