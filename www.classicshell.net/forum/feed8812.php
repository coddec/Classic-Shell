<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=2728" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-03-17T08:04:26-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=2728</id>
<entry>
<author><name><![CDATA[sutucol]]></name></author>
<updated>2016-03-17T08:04:26-07:00</updated>
<published>2016-03-17T08:04:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=25777#p25777</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=25777#p25777"/>
<title type="html"><![CDATA[Re: Classic explorer to show previous versions of file (VSS-]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=25777#p25777"><![CDATA[
<span style="font-family:Arial;"><span style="font-size: 100%; line-height: 116%;">No, VSS still back up also files in Windows 8.1. In Windows 10 Version 1511 the previous files tab is back!<br />There are some workarounds to access previous files in Windows 8:<br /><br /></span></span><ol style="list-style-type: decimal"><li><span style="font-family:Arial;"><span style="font-size: 100%; line-height: 116%;">Access your local partitions as a network share - then the previous files tab is back.<br />\\localhost\c$<br />\\localhost\d$<br /><br />Unfortunately this doesn&#39;t work for C: - the previous files tab is back but the file list is empty - although shadow copies exists like the next two workarounds will show.<br /><br /></span></span></li><li><span style="font-family:Arial;"><span style="font-size: 100%; line-height: 116%;">Use <!-- m --><a class="postlink" href="http://www.shadowexplorer.com/">http://www.shadowexplorer.com/</a><!-- m -->.<br /><br /></span></span></li><li><span style="font-family:Arial;"><span style="font-size: 100%; line-height: 116%;">List shadow copies and create a symlink to the</span></span><span style="font-family:Arial;"><span style="font-size: 100%; line-height: 116%;">required shadow copy - 7 stands for the number of the shadow copy:</span></span><span style="font-family:Arial;"><span style="font-size: 100%; line-height: 116%;"><br />&gt;vssadmin list shadows<br />&gt;mklink /d %SystemDrive%\shadow_C \\?\GLOBALROOT\Device\HarddiskVolumeShadowCopy<span style="color:#ff0000;">7</span>\</span></span></li></ol><span style="font-family:Arial;"><span style="font-size: 100%; line-height: 116%;"><br />Nevertheless it would be great to have the UI also in Windows 8/8.1</span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12967">sutucol</a> — Thu Mar 17, 2016 8:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-06-02T20:27:56-07:00</updated>
<published>2014-06-02T20:27:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=13129#p13129</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=13129#p13129"/>
<title type="html"><![CDATA[Re: Classic explorer to show previous versions of file (VSS-]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=13129#p13129"><![CDATA[
VSS is present but it has been modified in Windows 8 to only back up system files. It no longer operates on all files including document files so even if the UI was revived, VSS now only has the ability to back up system files.<br /><br /><img src="http://www.classicshell.net/forum/download/file.php?id=832" alt="" /><br /><br />Extremely disappointing but that is why Windows 8 failed. Unacceptable and retarded changes like these.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jun 02, 2014 8:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[j_suh]]></name></author>
<updated>2014-06-02T13:15:15-07:00</updated>
<published>2014-06-02T13:15:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=13121#p13121</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=13121#p13121"/>
<title type="html"><![CDATA[Classic explorer to show previous versions of file (VSS-UI)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2728&amp;p=13121#p13121"><![CDATA[
The feature of controlling volume shadow copies would greatly enchance functionality of classic explorer in a manner that users would be able to restore accidentally deleted / modified versions of files. Underlying VSS is still present in Windows 8/8.1 but just the UI element is hidden. VSS-API provides direct method of accessing copies, so this should be relatively straightforward to implement.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3854">j_suh</a> — Mon Jun 02, 2014 1:15 pm</p><hr />
]]></content>
</entry>
</feed>