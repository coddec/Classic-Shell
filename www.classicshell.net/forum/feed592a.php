<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=5573" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-01-10T23:52:01-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=5573</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-10T23:52:01-07:00</updated>
<published>2016-01-10T23:52:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24482#p24482</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24482#p24482"/>
<title type="html"><![CDATA[Re: [Solved] One Submenu Always Displays Slowly]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24482#p24482"><![CDATA[
Wait, is it SD or SSD? SD cards are quite slow, compared even to internal mechanical drives.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 10, 2016 11:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-01-10T21:16:27-07:00</updated>
<published>2016-01-10T21:16:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24479#p24479</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24479#p24479"/>
<title type="html"><![CDATA[Re: [Solved] One Submenu Always Displays Slowly]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24479#p24479"><![CDATA[
Another thing is your anti-virus installs a file system filter driver to scan files in the background as they are accessed. It might be scanning the files in your Downloads folder which also being located on an external SD card is causing more of a slowdown. Some AVs use heuristics scanning which can increase the time for the file icon to be displayed. Plus the SD card I/O interface isn't blazingly fast unlike other interfaces like USB 3.0 or your internal SATA or PCIe bus using which your SSD is connected, are much faster. If the flash memory that your SD card uses itself is slower or if your card is old (SDHC or earlier with a lower class speed rating), its read speed might be slower.<br /><br />You could try temporarily moving your Downloads folder to your internal SSD and add that new path as the Downloads folder in Classic Start Menu. See if it loads faster that way than vs your external SD.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jan 10, 2016 9:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-10T18:31:15-07:00</updated>
<published>2016-01-10T18:31:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24474#p24474</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24474#p24474"/>
<title type="html"><![CDATA[Re: [Solved] One Submenu Always Displays Slowly]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24474#p24474"><![CDATA[
No, the start menu does not use the Windows cache. Windows caches only very specific sizes, and besides, the quality on some of them is not that good.<br />The cached icons are stored in C:\Users\Ivo\AppData\Local\ClassicShell\DataCache.db. However - even if the icons are cached, the start menu still needs to read some of the information to check if it hasn't changed. Also not all icons are cached. App icons in particular depend on the current OS settings and are therefore never cached.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 10, 2016 6:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnywhy]]></name></author>
<updated>2016-01-10T16:10:44-07:00</updated>
<published>2016-01-10T16:10:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24473#p24473</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24473#p24473"/>
<title type="html"><![CDATA[Re: [Solved] One Submenu Always Displays Slowly]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24473#p24473"><![CDATA[
it's already an SSD. <br /><br />question: does Classic Shell use Windows icon cache? It seems not, because even if folder icons load quickly, Classic start icons still load slowly on first time. <br /><br />Where is Classic Start's icon cache stored?<br /><br />thx<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1839">johnywhy</a> — Sun Jan 10, 2016 4:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-01-09T20:32:19-07:00</updated>
<published>2016-01-09T20:32:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24452#p24452</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24452#p24452"/>
<title type="html"><![CDATA[Re: [Solved] One Submenu Always Displays Slowly]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24452#p24452"><![CDATA[
You could replace your hard disk drive (HDD) with a solid state drive (SSD). That will improve file access speeds considerably.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jan 09, 2016 8:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-09T15:55:17-07:00</updated>
<published>2016-01-09T15:55:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24451#p24451</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24451#p24451"/>
<title type="html"><![CDATA[Re: [Solved] One Submenu Always Displays Slowly]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24451#p24451"><![CDATA[
The delaying of the icons is the way to speed up showing of files. It is used everywhere in Windows - the desktop, the taskbar, Explorer, start menu, etc.<br />There is nothing more that can be cut to speed things up. Everything else is necessary to display the folder.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jan 09, 2016 3:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnywhy]]></name></author>
<updated>2016-01-09T15:36:13-07:00</updated>
<published>2016-01-09T15:36:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24450#p24450</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24450#p24450"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24450#p24450"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />The pre-caching only affects the start menu folders, the desktop and Favorites.<br />Do you have the &quot;Delay loading of icons&quot; turned on? It should be on by default.<br /></div><br /><br />&quot;Delay loading of icons&quot; was in fact turned off. I guess that's Classic Shell's workaround for this very problem. I enabled it, and now the menu opens much quicker. <br /><br />Thx! Solved. <br /><br />Any way to speed up menu with &quot;Delay loading of icons&quot; <em>enabled?</em><br /><br />Any way to speed up menu with &quot;Delay loading of icons&quot; <em>disabled?</em><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1839">johnywhy</a> — Sat Jan 09, 2016 3:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-09T15:14:33-07:00</updated>
<published>2016-01-09T15:14:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24447#p24447</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24447#p24447"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24447#p24447"><![CDATA[
The pre-caching only affects the start menu folders, the desktop and Favorites.<br />Do you have the &quot;Delay loading of icons&quot; turned on? It should be on by default.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jan 09, 2016 3:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnywhy]]></name></author>
<updated>2016-01-09T14:47:09-07:00</updated>
<published>2016-01-09T14:47:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24446#p24446</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24446#p24446"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24446#p24446"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Even after a restart? Also, after you see the folder in Explorer, is it still slow in the start menu?<br /></div><br /><br />It's only after a restart that it becomes slow again.<br /><br />If i open the folder in Explorer, i notice that its <em>icons</em> load very slowly. <br /><br />But, even if i open the folder in Explorer and allow the icons to load fully, the menu still opens slowly in Classic Shell Start. <br /><br />I count about 17 seconds to open the Downloads menu in all scenarios. <br /><br />So this does not seem to be related to slow-loading icons-- assuming Classic Shell Start shares Windows icon cache.<br /><br />Classic Shell Start settings is set to Pre-cache icons. I will try giving the OS more time to 'settle', and see if that helps. <br /><br /><br />If not, then i will delete %USERPROFILE%\AppData\Local\Iconcache.db, and see if that helps. <br /><br />thx<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1839">johnywhy</a> — Sat Jan 09, 2016 2:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-09T12:36:18-07:00</updated>
<published>2016-01-09T12:36:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24444#p24444</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24444#p24444"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24444#p24444"><![CDATA[
Even after a restart? Also, after you see the folder in Explorer, is it still slow in the start menu?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jan 09, 2016 12:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnywhy]]></name></author>
<updated>2016-01-09T11:01:01-07:00</updated>
<published>2016-01-09T11:01:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24441#p24441</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24441#p24441"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24441#p24441"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />BTW, do you see a similar difference when you open the two folders in Explorer?<br /></div><br /><br /><br />both open instantly in file explorer.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1839">johnywhy</a> — Sat Jan 09, 2016 11:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-09T10:55:25-07:00</updated>
<published>2016-01-09T10:55:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24440#p24440</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24440#p24440"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24440#p24440"><![CDATA[
BTW, do you see a similar difference when you open the two folders in Explorer?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jan 09, 2016 10:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-09T10:54:46-07:00</updated>
<published>2016-01-09T10:54:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24439#p24439</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24439#p24439"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24439#p24439"><![CDATA[
Well, folders are easier because their properties are simple and they all have the same icon. Files can potentially have unique icons each.<br />30 items is not that many though. Possibly the external drive is just slow.<br />I have 180 files/folders in my Downloads and they take 3-4 seconds to open from my internal drive.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jan 09, 2016 10:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johnywhy]]></name></author>
<updated>2016-01-09T10:48:33-07:00</updated>
<published>2016-01-09T10:48:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24438#p24438</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24438#p24438"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24438#p24438"><![CDATA[
i moved files around, as you suggested. Does not seem related to a specific file, just seems to get worse with more files/folders.<br /><br />Documents and downloads are on same drive , external SD.<br /><br />Documents: 26 folders, 1 file<br />Downloads: 5 folders, 25 files<br /><br />loads quickly after 1st slow load.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1839">johnywhy</a> — Sat Jan 09, 2016 10:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-09T09:21:45-07:00</updated>
<published>2016-01-09T09:21:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24436#p24436</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24436#p24436"/>
<title type="html"><![CDATA[Re: One Submenu Always Loads Slow]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5573&amp;p=24436#p24436"><![CDATA[
There may be a particular file there that's causing the problem. Try moving half of the files temporarily to another location to see if that fixes the problem. If not, move half of what's left, and so on.<br />Also it is possible that your Downloads folder is on another drive that needs to spin up when it is accessed.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jan 09, 2016 9:21 am</p><hr />
]]></content>
</entry>
</feed>