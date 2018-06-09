<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7732" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2018-05-15T15:34:31-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7732</id>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2018-05-15T15:34:31-07:00</updated>
<published>2018-05-15T15:34:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=35817#p35817</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=35817#p35817"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=35817#p35817"><![CDATA[
Pin a batch file to the Start menu or taskbar in Windows 10 . . . <!-- m --><a class="postlink" href="https://winaero.com/blog/pin-a-batch-file-to-the-start-menu-or-taskbar-in-windows-10/">https://winaero.com/blog/pin-a-batch-fi ... indows-10/</a><!-- m --><br /><br />Right click on the Desktop / New / Shortcut<br />Browse to the .bat file / Select it<br />In the shortcut target, modify it as follows:  cmd /c &quot;full path to your batch file&quot;<br />Rename the shortcut<br />Change the icon<br />Right-click / Run / Minimized<br />Right-click / Pin to taskbar . . . No - this is not necessary, and, does not Pin it<br />. . . Instead, drag it to the Taskbar, and delete it from your Desktop<br />. . . Right-click to un-Pin it<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Tue May 15, 2018 3:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-11T16:43:48-07:00</updated>
<published>2017-07-11T16:43:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33274#p33274</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33274#p33274"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33274#p33274"><![CDATA[
I think you need to use attrib +s on the desktop.ini file, not on the folder itself<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 11, 2017 4:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ndhopkins]]></name></author>
<updated>2017-07-11T13:46:18-07:00</updated>
<published>2017-07-11T13:46:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33271#p33271</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33271#p33271"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33271#p33271"><![CDATA[
Ivo,<br /><br />Maybe I'm doing something incorrectly. Can you evaluate my steps to see where I am messing up?<br /><br /><strong>Derived from <!-- m --><a class="postlink" href="https://superuser.com/questions/142420/folder-vs-file-folder-can-i-create-a-folder-from-the-command-line">https://superuser.com/questions/142420/ ... mmand-line</a><!-- m --></strong><br /><strong>I'm doing this via PowerShell...</strong><br /><br /><strong>#1 Create new folder</strong><br />new-item -Path &quot;C:\Temp\XYZ&quot; -ItemType Directory<br /><strong>#2 Create desktop.ini</strong><br />new-item -path &quot;C:\Temp\XYZ\desktop.ini&quot; -ItemType File<br /><strong>#3 Edit desktop.ini</strong><br />&quot;[.ShellClassInfo]&quot;&gt;&gt;&quot;C:\Temp\XYZ\desktop.ini&quot;<br />&quot;CLSID2={0AFACED1-E828-11D1-9187-B532F1E9575D}&quot;&gt;&gt;&quot;C:\Temp\XYZ\desktop.ini&quot;<br />&quot;Flags=2&quot;&gt;&gt;&quot;C:\Temp\XYZ\desktop.ini&quot;<br /><strong>#4 Create a shortcut named target.lnk in the folder pointing to the destination folder</strong><br />$wshShell = New-Object -ComObject wscript.shell<br />$shortcut = $wshShell.CreateShortcut(&quot;C:\Temp\XYZ\target.lnk&quot;)<br />$shortcut.TargetPath = &quot;C:\Temp\XYZ&quot;<br />$shortcut.Save()<br /><strong>#5 Add two empty files that the pinned shortcut will cascade</strong><br />New-Item -path &quot;C:\Temp\XYZ\test1.txt&quot; -ItemType File<br />New-Item -Path &quot;C:\Temp\XYZ\Test2.txt&quot; -ItemType File<br /><strong>#6 Add the system attribute to the folde</strong>r<br />attrib +s &quot;C:\Temp\XYZ&quot;<br />Copy-Item -Path &quot;C:\Temp\XYZ&quot; -Destination &quot;C:\Users\svcDT176071w10sv\AppData\Roaming\ClassicShell\Pinned&quot; -Force<br /><em>Observations:<br />The 2 folders I pinned via right-click show up as shortcut icons, but the one I just created (XYZ) does not have the shortcut icon (see attachment-2)</em><br />When I click on Start - I now see XYZ as a pinned shortcut, but when I hoover over it, it cascades to show &quot;Empty.&quot; I would expect to see &quot;Test1.txt&quot; and &quot;Test2.txt&quot;<br /><br /><br /><strong>Performing the pinned step manually via right-click</strong><br /><strong>#1 Create new folder</strong><br />I created C:\Temp\ZYX<br /><br /><strong>#2 Create two empty text files</strong><br />test.txt<br />test2.txt<br /><br /><strong>#3 Pin to Start menu (Classic Shell)</strong><br />ZYX is now pinned to the Start menu, hovering over shows test.txt test2.txt (see attachment-3)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21628">ndhopkins</a> — Tue Jul 11, 2017 1:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-11T09:34:01-07:00</updated>
<published>2017-07-11T09:34:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33270#p33270</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33270#p33270"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33270#p33270"><![CDATA[
So you prefer the expanding shortcut? Instead of moving them, you can just delete it and create it again using the cmd line Windows tool, mklink.exe. You can use either the /J or /D switch.<br /><br />If you prefer the GUI, install the &quot;Link Shell Extension&quot;: <!-- m --><a class="postlink" href="http://schinagl.priv.at/nt/hardlinkshellext/linkshellextension.html">http://schinagl.priv.at/nt/hardlinkshel ... nsion.html</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jul 11, 2017 9:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-11T09:31:36-07:00</updated>
<published>2017-07-11T09:31:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33269#p33269</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33269#p33269"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33269#p33269"><![CDATA[
Then try pinning it via the start menu, then compare the results. There must be some difference between what you are doing and what the start menu is doing.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 11, 2017 9:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ndhopkins]]></name></author>
<updated>2017-07-11T09:19:12-07:00</updated>
<published>2017-07-11T09:19:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33268#p33268</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33268#p33268"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33268#p33268"><![CDATA[
Hi Ivo,<br />Thanks for your quick reply...<br />I attempted to following the steps as described in <!-- m --><a class="postlink" href="https://superuser.com/questions/142420/folder-vs-file-folder-can-i-create-a-folder-from-the-command-line">https://superuser.com/questions/142420/ ... mmand-line</a><!-- m -->.  But I get the same result as I posted previously, a shortcut to the folder is pinned to the start menu.  When you execute the shortcut, and Explorer window is opened to C:\Temp\XYZ, instead of cascading the contents of C:\Temp\XYZ.<br /><br />Thanks,<br />Nate<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21628">ndhopkins</a> — Tue Jul 11, 2017 9:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-11T08:42:52-07:00</updated>
<published>2017-07-11T08:42:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33267#p33267</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33267#p33267"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33267#p33267"><![CDATA[
When you pin a folder, Classic Shell creates a special &quot;folder shortcut&quot; as described here: <!-- m --><a class="postlink" href="https://superuser.com/questions/142420/folder-vs-file-folder-can-i-create-a-folder-from-the-command-line">https://superuser.com/questions/142420/ ... mmand-line</a><!-- m --><br />It is a folder that contains a target.lnk file and a desktop.ini file with special contents.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 11, 2017 8:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ndhopkins]]></name></author>
<updated>2017-07-11T08:33:14-07:00</updated>
<published>2017-07-11T08:33:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33266#p33266</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33266#p33266"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33266#p33266"><![CDATA[
Hi Gaurav,<br /><br />Thanks for your reply...I attempted your steps, but I was still unsuccessful. A couple of observations:<br /><br /><strong>Creating a shortcut or copy-paste on in C:\Users\&lt;UserName&gt;\AppData\Roaming\ClassicShell\Pinned</strong><br />This operation resulted in a &quot;shortcut&quot; not a &quot;File folder.&quot; Please see attachment-1.<br /><br />When I execute the new pinned shortcut for &quot;Clinical Applications&quot; that was created via copy-paste, a new explorer window is opened, rather than cascading to New Text Document. Please see attachment-2.<br /><br />When I pin the shortcut manually (Pin from Start menu (Classic Shell)) (see attachment-3) you can see &quot;Clinical Applications&quot; cascades to New Text Document.<br /><br />Thanks in advance for your advice.<br /><br />Nate<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21628">ndhopkins</a> — Tue Jul 11, 2017 8:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-11T05:32:51-07:00</updated>
<published>2017-07-11T05:32:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33257#p33257</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33257#p33257"/>
<title type="html"><![CDATA[Re: Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33257#p33257"><![CDATA[
When pinning, a symbolic link is created.<br /><br />To &quot;pin&quot; a regular shortcut, just create a shortcut or copy-paste one in C:\Users\&lt;userName&gt;\AppData\Roaming\ClassicShell\Pinned using File Explorer or Command Prompt. Then it will be created without the shortcut arrow. Or you can right click an existing pinned item in the Start menu and choose &quot;New shortcut&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jul 11, 2017 5:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ndhopkins]]></name></author>
<updated>2017-07-10T13:41:51-07:00</updated>
<published>2017-07-10T13:41:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33248#p33248</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33248#p33248"/>
<title type="html"><![CDATA[Windows 10 Pinned Shortcuts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7732&amp;p=33248#p33248"><![CDATA[
Question regarding Pinned Shortcuts on Windows 10:<br /><br />I have several custom shortcuts that I want to appear on end user's start menus.  I'm using version 4.3.0 of Classic Shell with Windows 7 style enabled.  I can manually pin the shortcut by performing the following:<br />Start - All Programs - right-click on the desired folder - click Pin to Start menu (Classic Shell).  This will create the pinned shortcut on the left side of the start menu.  I have observed the pinned shortcut gets created at C:\Users\&lt;userName&gt;\AppData\Roaming\ClassicShell\Pinned.  It appears as a type: File folder, but has an associated icon that looks like shortcut.<br /><br />If I manually configured the start menu by right-clicking and choosing Pin to Start Menu, I would expect that I would be able to harvest these &quot;shortcuts&quot; and deploy them via an automated method.<br /><br />But when I copy these shortcuts to a temporary location, unpin the shortcuts from the start menu and then copy the shortcut from the temporary location back to C:\Users\&lt;userName&gt;\AppData\Roaming\ClassicShell\Pinned the &quot;shortcut&quot; shows up as a type: File folder, but without the associated icon that looks like a shortcut.<br /><br />Does anybody have a method that can pin and unpin shortcuts from the start menu in an automated fashion?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21628">ndhopkins</a> — Mon Jul 10, 2017 1:41 pm</p><hr />
]]></content>
</entry>
</feed>