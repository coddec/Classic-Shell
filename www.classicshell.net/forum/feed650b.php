<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=5206" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-10-04T07:09:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=5206</id>
<entry>
<author><name><![CDATA[wiggidywac]]></name></author>
<updated>2015-10-04T07:09:32-07:00</updated>
<published>2015-10-04T07:09:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22765#p22765</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22765#p22765"/>
<title type="html"><![CDATA[Re: Admin Template Tree Item Spacing doesn't like neg number]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22765#p22765"><![CDATA[
Thanks for the tip about adding _Default to the registry key.  That works great!  I initially read about that in the help file but for some reason forgot to apply it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11611">wiggidywac</a> — Sun Oct 04, 2015 7:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-28T20:20:48-07:00</updated>
<published>2015-09-28T20:20:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22613#p22613</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22613#p22613"/>
<title type="html"><![CDATA[Re: Admin Template Tree Item Spacing doesn't like neg number]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22613#p22613"><![CDATA[
If you don't want to lock the setting and just change the default value, add &quot;_Default&quot; to the name of the registry key. For more information look at the Administrative Settings section on the help file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Sep 28, 2015 8:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wiggidywac]]></name></author>
<updated>2015-09-27T19:03:57-07:00</updated>
<published>2015-09-27T19:03:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22588#p22588</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22588#p22588"/>
<title type="html"><![CDATA[Re: Admin Template Tree Item Spacing doesn't like neg number]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22588#p22588"><![CDATA[
Aha!  That worked!  I also should say I backed up the entire registry before making changes (via regedit - highlight computer - file - export - named file &quot;REGEDIT_BACKUP.reg&quot;.  Then I &quot;merged&quot; the file I created, logged out, and logged into the different accounts that I have on my PC.  The settings that I had specified in the file (there were only a few), are now greyed out and are the default for all users.  Settings that I did not edit, can still be edited by all users.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11611">wiggidywac</a> — Sun Sep 27, 2015 7:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-27T18:46:22-07:00</updated>
<published>2015-09-27T18:46:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22586#p22586</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22586#p22586"/>
<title type="html"><![CDATA[Re: Admin Template Tree Item Spacing doesn't like neg number]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22586#p22586"><![CDATA[
That would work, but make sure it only includes the settings you want.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Sep 27, 2015 6:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wiggidywac]]></name></author>
<updated>2015-09-27T18:14:29-07:00</updated>
<published>2015-09-27T18:14:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22582#p22582</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22582#p22582"/>
<title type="html"><![CDATA[Re: Admin Template Tree Item Spacing doesn't like neg number]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22582#p22582"><![CDATA[
From other forum posts it says to export registry settings from Current User and then &quot;merge&quot; to Local Machine.  I'm unfamiliar how to do this, but I'm willing to try.<br /><br />Do I export the settings from:<br />HKEY_CURRENT_USER\Software\IvoSoft\ClassicExplorer\Settings<br /><br />Edit the file so that it says<br />HKEY_LOCAL_MACHINE\Software\IvoSoft\ClassicExplorer<br />instead of<br />HKEY_CURRENT_USER\Software\IvoSoft\ClassicExplorer\Settings<br /><br />Save the reg file under a new name (so the original still exists)<br /><br />Then right click on the newly saved reg file and select &quot;merge&quot;?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11611">wiggidywac</a> — Sun Sep 27, 2015 6:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-09-27T18:00:37-07:00</updated>
<published>2015-09-27T18:00:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22579#p22579</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22579#p22579"/>
<title type="html"><![CDATA[Re: Admin Template Tree Item Spacing doesn't like neg number]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22579#p22579"><![CDATA[
Unfortunately the gpedit tool limits numbers to be between 0 and 9999. This makes it unsuitable for entering negative numbers or color values.<br />For those settings you will have to use the registry directly.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Sep 27, 2015 6:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wiggidywac]]></name></author>
<updated>2015-09-27T17:23:52-07:00</updated>
<published>2015-09-27T17:23:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22577#p22577</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22577#p22577"/>
<title type="html"><![CDATA[Admin Template Tree Item Spacing doesn't like neg numbers]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5206&amp;p=22577#p22577"><![CDATA[
Windows 7 x64bit<br />Latest Classic Shell (4.2.4)<br /><br />I have just installed the latest version of Classic Shell - my first attempt in using this application. I only installed the &quot;Classic Explorer&quot; portion, and not anything related to the Start Menu or IE. I followed the forum directions to install the Admin Templates to C:\Windows\PolicyDefinitions (unzip the &quot;PolicyDefinitions&quot; folder in C:\Program Files\Classic Shell, and copy the .admx files from C:\Program Files\Classic Shell\PolicyDefinitions to C:\Windows\PolicyDefinitions; and copy the .adml files from C:\Program Files\Classic Shell\PolicyDefinitions\en-US to C:\Windows\PolicyDefinitions\en-US).<br /><br />I was able to &quot;Disable Breadcrumbs&quot; via the Admin Template. However, I cannot for the life of me get the &quot;Tree Item Spacing&quot; template to accept negative numbers. The help section in Windows Group Policy even says enter &quot;negative numbers to reduce the spacing&quot; and it also states that the setting requires Classic Shell 4.0.4 or later, which I have. I can only get the&quot;Tree Item Spacing&quot; templates (for both Computer Configuration and User Configuration) to accept positive numbers, and not negative numbers.<br /><br />I can set a negative number via the regular way in Class Shell settings, but not via the Admin Templates. When I select &quot;Apply&quot;, nothing happens, and when I select &quot;OK&quot;, nothing happens - and it won't let me close the dialogue until I select &quot;Cancel&quot; or until I enter a positive number and select &quot;OK&quot;.<br /><br />I've ran CCleaner to clear all cache and memory, restarted, and tried again, but still no luck. <br /><br />Ideas? Maybe install an older version?<br />Thanks!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11611">wiggidywac</a> — Sun Sep 27, 2015 5:23 pm</p><hr />
]]></content>
</entry>
</feed>