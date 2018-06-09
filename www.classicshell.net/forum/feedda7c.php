<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=2452" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-11-23T18:55:11-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=2452</id>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2014-11-23T18:55:11-07:00</updated>
<published>2014-11-23T18:55:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=15770#p15770</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=15770#p15770"/>
<title type="html"><![CDATA[Re: Need help: Metro Apps running minimized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=15770#p15770"><![CDATA[
I solved the same problem on my computer by uninstalling the video driver (Intel HD Graphics) that was part of the September 2014 Windows Update.<br />After the uninstall, I rebooted and everything worked fine (most likely with the old, generic MS driver).<br /><br />Hope this helps someone else, too.<p>Statistics: Posted by Guest — Sun Nov 23, 2014 6:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2014-08-04T06:00:07-07:00</updated>
<published>2014-08-04T06:00:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=14310#p14310</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=14310#p14310"/>
<title type="html"><![CDATA[Re: Need help: Metro Apps running minimized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=14310#p14310"><![CDATA[
Hi,<br />Had the same issue of store applications getting minimized and not working in windows 8.1.<br />Been trying all options mentioned in the microsoft website and others but nothing worked out.<br />Finally I added the read only permission of HKEY_CLASSES_ROOT for All Applications Packages group and it worked.<img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><br />Thanks a lot for the useful suggestion.<p>Statistics: Posted by Guest — Mon Aug 04, 2014 6:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-06-29T05:51:50-07:00</updated>
<published>2014-06-29T05:51:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=13612#p13612</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=13612#p13612"/>
<title type="html"><![CDATA[Re: Need help: Metro Apps running minimized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=13612#p13612"><![CDATA[
Good to know that the problem isn't related to Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jun 29, 2014 5:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[smithcferg]]></name></author>
<updated>2014-06-28T17:17:20-07:00</updated>
<published>2014-06-28T17:17:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=13597#p13597</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=13597#p13597"/>
<title type="html"><![CDATA[Re: Need help: Metro Apps running minimized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=13597#p13597"><![CDATA[
Pretty much the same thing happened to me as to the poster of this thread, jayray999.<br /><br />I updated to win8.1 from win8.  I had classic shell installed at the time.<br /><br />As he said, &quot;I noticed then that most Metro Apps were not launching at all. They would appear to launch then vanish.&quot;<br /><br />After trying a number of different solutions, and using a microsoft troubleshooter that can be downloaded to repair apps, I was in the same boat.  the Apps would open partway, and then minimize, where they could be seen in the taskbar.  An attempt to restore them would bring them back for a couple of seconds, then they would minimize again.<br /><br />Then I ran across this microsoft knowledge base article:<br /><!-- m --><a class="postlink" href="http://support.microsoft.com/kb/2798317">http://support.microsoft.com/kb/2798317</a><!-- m --><br /><br />The action that I needed to take was this:<br />&quot;Make sure the All Applications Packages group has the Read permissions to the following registry paths:<br /><br />    HKEY_CLASSES_ROOT&quot;<br /><br /><br />I found that the registry key had no permissions for this group. I changed the key so that read permissions were granted to the All Applications Packages group and bingo, the apps started to work.<br /><br /><br />Doing this repair does require having some experience in using the registry editor and also a knowledge of how to adjust permissions. If you are not used to doing either of these things, it would be helpful for you to have an experienced friend deal with this, as an accidental deletion of a registry key or incorrect permission setting can wreak havoc with your system.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4040">smithcferg</a> — Sat Jun 28, 2014 5:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-18T00:15:10-07:00</updated>
<published>2014-05-18T00:15:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12843#p12843</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12843#p12843"/>
<title type="html"><![CDATA[Re: Need help: Metro Apps running minimized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12843#p12843"><![CDATA[
@Tiberious, this appears to be a Windows issue: <!-- m --><a class="postlink" href="http://answers.microsoft.com/en-us/windows/forum/windows8_1-pictures/in-windows-81-and-multiple-monitors-metro-apps/fcfde026-1095-46cf-b403-964ee7349794?page=1&amp;tm=1400397044409">http://answers.microsoft.com/en-us/wind ... 0397044409</a><!-- m --> Not related to Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun May 18, 2014 12:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tiberious]]></name></author>
<updated>2014-05-17T15:31:29-07:00</updated>
<published>2014-05-17T15:31:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12837#p12837</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12837#p12837"/>
<title type="html"><![CDATA[Re: Need help: Metro Apps running minimized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12837#p12837"><![CDATA[
I have this same exact problem. I run dual monitors and modern/metro apps will run but immediately minimize and cannot be restored nor alt-tabbed to. The only app that doesn't is the Windows Store. I've tried disabling Classic Shell to no avail. Any help would be most appreciated!<br />Jim<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3763">Tiberious</a> — Sat May 17, 2014 3:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-04-09T05:20:59-07:00</updated>
<published>2014-04-09T05:20:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12048#p12048</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12048#p12048"/>
<title type="html"><![CDATA[Re: Need help: Metro Apps running minimized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12048#p12048"><![CDATA[
No it is unlikely to be related to Classic Shell because it only adds a Start Menu to the Taskbar and other Explorer enhancements. It does not modify Windows in an unsafe way, doesn't modify files or affect the Windows Runtime on which Metro apps run. <br /><br />You can try these steps one-by-one: <br /><a href="http://winaero.com/blog/how-to-fix-windows-8-apps-slow-start-or-app-errors/" class="postlink">* How to fix Windows 8 apps slow start or app errors</a><br /><a href="http://winaero.com/blog/fix-windows-8-1-metro-apps-do-not-work-or-crash/" class="postlink">* FIX: Windows 8.1 Metro apps do not work or crash</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Apr 09, 2014 5:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jayray999]]></name></author>
<updated>2014-04-09T05:06:20-07:00</updated>
<published>2014-04-09T05:06:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12047#p12047</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12047#p12047"/>
<title type="html"><![CDATA[Need help: Metro Apps running minimized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2452&amp;p=12047#p12047"><![CDATA[
Sorry to start a new topic if this is a known issue. Here's what has happened.<br /><br />1. I was unaware of Windows 8.1 Update.<br /><br />2. I updated Classic Shell to 4.06 when prompted.<br /><br />3. I noticed then that most Metro Apps were not launching at all. They would appear to launch then vanish.<br /><br />4. I uninstalled Classic Shell. No change.<br /><br />5. I installed Windows 8.1 Update completely.<br /><br />6. Now running Metro Apps are visible (minimized) in the Taskbar but are still not useable since they do not show up on the screen. They flash for an instant and then run minimized on the taskbar.<br /><br />7. I re-installed Classic Shell 4.06. No change.<br /><br />I have no idea if this problem is related to Classic Shell but hopefully someone has a fix. I love the fact that the Usual desktop is always on but sometime I do need to run a Metro App. For example, CHANGE PC SETTINGS cannot be run. I have to use Control Panel.<br /><br />The only Metro App that shows up on the screen is PHOTOS.<br /><br />Please help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3456">jayray999</a> — Wed Apr 09, 2014 5:06 am</p><hr />
]]></content>
</entry>
</feed>