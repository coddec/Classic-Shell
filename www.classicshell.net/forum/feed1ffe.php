<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=2654" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2018-05-15T15:37:19-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=2654</id>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2018-05-15T15:37:19-07:00</updated>
<published>2018-05-15T15:37:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=35818#p35818</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=35818#p35818"/>
<title type="html"><![CDATA[Re: Can't pin to Taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=35818#p35818"><![CDATA[
Pin a batch file to the Start menu or taskbar in Windows 10 . . . <!-- m --><a class="postlink" href="https://winaero.com/blog/pin-a-batch-file-to-the-start-menu-or-taskbar-in-windows-10/">https://winaero.com/blog/pin-a-batch-fi ... indows-10/</a><!-- m --><br /><br />Right click on the Desktop / New / Shortcut<br />Browse to the .bat file / Select it<br />In the shortcut target, modify it as follows:  cmd /c &quot;full path to your batch file&quot;<br />Rename the shortcut<br />Change the icon<br />Right-click / Run / Minimized<br />Right-click / Pin to taskbar . . . No - this is not necessary, and, does not Pin it<br />. . . Instead, drag it to the Taskbar, and delete it from your Desktop<br />. . . Right-click to un-Pin it<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Tue May 15, 2018 3:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Galane]]></name></author>
<updated>2014-05-19T02:37:09-07:00</updated>
<published>2014-05-19T02:37:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12865#p12865</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12865#p12865"/>
<title type="html"><![CDATA[Re: Can't pin to Taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12865#p12865"><![CDATA[
That only has Pin to Start Menu (Classic Shell) for pinning options.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3768">Galane</a> — Mon May 19, 2014 2:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-19T02:31:07-07:00</updated>
<published>2014-05-19T02:31:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12864#p12864</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12864#p12864"/>
<title type="html"><![CDATA[Re: Can't pin to Taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12864#p12864"><![CDATA[
Can you find the Explorer shortcut in your Start Menu, right click and select Pin to Taskbar?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon May 19, 2014 2:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Galane]]></name></author>
<updated>2014-05-19T01:58:12-07:00</updated>
<published>2014-05-19T01:58:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12863#p12863</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12863#p12863"/>
<title type="html"><![CDATA[Re: Can't pin to Taskbar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12863#p12863"><![CDATA[
I deleted the explorer shortcut from user pinned. Still cannot pin explorer but just about any other program has pin to taskbar in its right click window.<br /><br />The pinner program does get an icon in there BUT how it behaves is not like how any other pinned program works. Click the explorer icon and it works like old Quick Launch where it puts a regular taskbar button on the taskbar instead of grouping on the pinned Explorer icon.<br /><br />Must be a glitch somewhere that is only affecting explorer.exe I don't know how it got unpinned and I don't know why it is being blocked from being put back how it was.<br /><br />I have a laptop* computer with Win7 Pro x64. Paths in the shortcut and desktop.ini in the user pinned folder are the same. (Not goint to try unpinning then seeing if it'll let me pin it.)<br /><br />Windows Explorer.lnk=@%SystemRoot%\system32\shell32.dll,-22067<br /><br />%windir%\explorer.exe<br /><br />I just tried copying the shortcut from the other computer to user pinned on this one. Still doesn't show up nor can I pin it.<br /><br />Probably something to do with using PC Mover to copy some software and files to 7 from the old XP install that was on here. Also having a glitch where it keeps attempting and failing to install KB2961194, another where sometimes the audio service doesn't start soon enough to suit Windows so I have no sound (sometimes) after booting until I run services.msc and manually restart it - and despite every test and fix for WMI saying there's nothing wrong with WMI, and SFC saying there's nothing wrong with any system file, Autopatcher refuses to run due to some &quot;error&quot; with Windows Management Interface.<br /><br />Had Win 7 installed about a week and on this computer it's already developed as many apparently incurable problems as an XP install would take years to develop. (Some such problems were why I finally installed 7 on this, my main use PC.)<br /><br />I may just have try an upgrade in place by running the Win 7 installer from within Win 7 and see if that will forcibly correct whatever is screwed up. My luck it probably won't. That hasn't worked very well since Win 98. Installing Win 95 over itself bulldozed over *everything*, replacing all Windows files and registry with fresh copies. A couple of memorable cases. Once when a Russian woman brought me a laptop she'd bought in Scotland and a friend of hers had &quot;helpfully&quot; installed Russian Windows 95a over the UK original 95a version. I installed the US 95B version (you wouldn't believe how much MS wanted for a special order of the RU version of windows 95) over that mess then set it to use the UK keyboard and added the RU layout too. Another instance was where some nut installed original Windows 95 over 95B because he'd hidden the taskbar and couldn't figure out how to get it back. Reinstalling 95B over that fixed it but due to the &quot;no quarter&quot; way that worked he had to reinstall all his programs but user files weren't affected.<br /><br />Starting with Win98 it began to 'preserve' some things and if the problem was in some file or part of the Registry the install could not be forced into overwriting, &quot;nuke and pave&quot; was the cure.<br /><br />I once preserved a Win 95 (not even 95a) install through at least 8 motherboard changes and numerous other hardware changes. Booting to Safe Mode then deleting everything it was possible to delete in Device Manager was the trick to it. Then after installing the new drivers, exporting then reimporting the Registry. The end to that coincidentally came when I changed the critical stop error sound to a breaking glass sound effect. Something unrelated got corrupted in the Registry with non-displayable characters. The effect it had was very strange. Almost everything worked except in Windows Explorer I could single left click on three things, files or folders and on the third click it'd pop a critical stop and crash Windows. I got very sick of hearing that breaking glass sound... Couldn't change the sounds, attempting that also made it crash. Had to find an old Windows version of XTree (XTree for DOS was excellent!) to be able to copy my files off so I could wipe the drive. The Registry export would hit that corrupt key and fail so that was out as a fix and at the time there just weren't any registry optimizers/fixers.<br /><br />I've been working with computers since 1983 so I've seen many many strange things happen with them.<br /><br />*MPC TransPort T2500 (Samsung X65 with a different logo/name) from 2008. Other than having a CardBus slot instead of an ExpressCard slot, it's better in every other aspect than many laptops on the market right now.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3768">Galane</a> — Mon May 19, 2014 1:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-19T00:34:08-07:00</updated>
<published>2014-05-19T00:34:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12861#p12861</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12861#p12861"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12861#p12861"><![CDATA[
There is a bug in Windows due to which pinned items sometimes do not appear on the Taskbar and it does not even let you pin another instance. Open this folder: %AppData%\Microsoft\Internet Explorer\Quick Launch\User Pinned\TaskBar and delete Windows Explorer shortcut if it exists there. Then it should let you pin normally.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon May 19, 2014 12:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Galane]]></name></author>
<updated>2014-05-18T23:41:07-07:00</updated>
<published>2014-05-18T23:41:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12860#p12860</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12860#p12860"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12860#p12860"><![CDATA[
I'll try the pinner tool. Shift right click only gets me the old style restore close maximize menu. The taskbar pinner tool says c:\windows\explorer.exe is already pinned.<br /><br />OK, so why is it not visible on the taskbar?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3768">Galane</a> — Sun May 18, 2014 11:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-18T21:55:43-07:00</updated>
<published>2014-05-18T21:55:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12858#p12858</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12858#p12858"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12858#p12858"><![CDATA[
Try Shift+right click to get the full context menu. You can also use the freeware tool, Winaero Taskbar Pinner: <!-- m --><a class="postlink" href="http://winaero.com/comment.php?comment.news.108">http://winaero.com/comment.php?comment.news.108</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun May 18, 2014 9:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Galane]]></name></author>
<updated>2014-05-18T15:04:05-07:00</updated>
<published>2014-05-18T15:04:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12856#p12856</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12856#p12856"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12856#p12856"><![CDATA[
Well I can't pin anything to the taskbar since installing Classic Shell. Somehow Explorer got unpinned and I can't get it back there. All I get on a right click is close window. Dragging things there just shows the &quot;NO&quot; symbol, even with the taskbar unlocked.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3768">Galane</a> — Sun May 18, 2014 3:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-05-18T13:49:35-07:00</updated>
<published>2014-05-18T13:49:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12854#p12854</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12854#p12854"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12854#p12854"><![CDATA[
The Classic Shell pin command does not affect the &quot;Pin to Taskbar&quot; in any way.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun May 18, 2014 1:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Galane]]></name></author>
<updated>2014-05-18T13:45:01-07:00</updated>
<published>2014-05-18T13:45:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12853#p12853</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12853#p12853"/>
<title type="html"><![CDATA[Re: Remove Pin To Start Menu (Classic Shell) from context me]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2654&amp;p=12853#p12853"><![CDATA[
Does this restore the Pin to Taskbar function?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3768">Galane</a> — Sun May 18, 2014 1:45 pm</p><hr />
]]></content>
</entry>
</feed>