<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=7776" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-06T09:08:50-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=7776</id>
<entry>
<author><name><![CDATA[waltz]]></name></author>
<updated>2017-08-06T09:08:50-07:00</updated>
<published>2017-08-06T09:08:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33578#p33578</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33578#p33578"/>
<title type="html"><![CDATA[Re: Customize statusbar details?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33578#p33578"><![CDATA[
Well, I've changed ClassicExplorer's settings to &quot;show free space and file size&quot; but not &quot;show detailed info for single selection&quot;.<br />Free space is now always shown, even if in a variable position. Better than nothing.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1351">waltz</a> — Sun Aug 06, 2017 9:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-27T23:17:27-07:00</updated>
<published>2017-07-27T23:17:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33499#p33499</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33499#p33499"/>
<title type="html"><![CDATA[Re: Customize statusbar details?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33499#p33499"><![CDATA[
Yeah it would've been great to have it working for AllFileSystemObjects. Unfortunately, it doesn't work.<br /><br />The only time I've seen System.FileCount work is in Windows Explorer stacked search results. Unfortunately, stacking was removed after Windows Vista.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jul 27, 2017 11:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[waltz]]></name></author>
<updated>2017-07-27T17:38:58-07:00</updated>
<published>2017-07-27T17:38:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33495#p33495</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33495#p33495"/>
<title type="html"><![CDATA[Re: Customize statusbar details?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33495#p33495"><![CDATA[
Thanks. Didn't know that. It could be a halfway solution, though it can't be used to configure statusbar parts, like always having things indicated in fixed locations.<br /><br /> Haven't managed to get it to work yet. <br /><br /> Is there a way to get it to use AllFileSystemObjects without tweaking all type-specific InfoTips? <br />I suppose System.FileCount doesn't return the count for the current directory, but for a selected directory?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1351">waltz</a> — Thu Jul 27, 2017 5:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-27T08:02:13-07:00</updated>
<published>2017-07-27T08:02:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33484#p33484</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33484#p33484"/>
<title type="html"><![CDATA[Re: Customize statusbar details?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33484#p33484"><![CDATA[
The status bar details are the same as what the tooltip/infotip shows. You can customize the tooltip using the Registry but it's per-file type.<br /><br />As an example, see the &quot;InfoTip&quot; Reg value's data at HKEY_CLASSES_ROOT\lnkfile. Article on it: Add More Details to Shortcut ToolTip in Windows 10: <!-- m --><a class="postlink" href="http://winaero.com/blog/add-details-shortcut-tooltip-windows-10/">http://winaero.com/blog/add-details-sho ... indows-10/</a><!-- m --><br /><br />The Explorer Details pane can be customized similarly per file-type: <!-- m --><a class="postlink" href="http://winaero.com/blog/customize-details-pane-windows-10/">http://winaero.com/blog/customize-detai ... indows-10/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jul 27, 2017 8:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[waltz]]></name></author>
<updated>2017-07-27T07:32:30-07:00</updated>
<published>2017-07-27T07:32:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33483#p33483</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33483#p33483"/>
<title type="html"><![CDATA[Customize statusbar details?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7776&amp;p=33483#p33483"><![CDATA[
Is there a way to customize the details shown in the Explorer statusbar beyond the 3 options in the settings?<br />I'm thinking, something like a format string for selected/unselected defining text and variables to show, and statusbar segments.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1351">waltz</a> — Thu Jul 27, 2017 7:32 am</p><hr />
]]></content>
</entry>
</feed>