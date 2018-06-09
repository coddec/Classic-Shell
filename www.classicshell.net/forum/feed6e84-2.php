<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=2694" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-05-30T07:46:41-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=2694</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-30T07:46:41-07:00</updated>
<published>2014-05-30T07:46:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13050#p13050</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13050#p13050"/>
<title type="html"><![CDATA[Re: Can Windows 7 orb move to bottom if taskbar pushed to le]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13050#p13050"><![CDATA[
It will expand but some settings will have to be set:<br />- The <strong>Pinned Programs folder</strong> setting on the <strong>Main Menu</strong> tab must be set to <strong>Use Start Menu folder</strong>. You can move any programs you pinned from %appdata%\ClassicShell\Pinned to %AppData%\Microsoft\Windows\Start Menu.<br />- On the <strong>General Behavior</strong> tab of Start Menu settings, make sure that the setting <strong>Expand folder shortcuts</strong> is checked.<br /><br />After configuring these settings, the shortcut you create by drag and drop should expand.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri May 30, 2014 7:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[prr]]></name></author>
<updated>2014-05-30T07:36:10-07:00</updated>
<published>2014-05-30T07:36:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13048#p13048</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13048#p13048"/>
<title type="html"><![CDATA[Re: Can Windows 7 orb move to bottom if taskbar pushed to le]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13048#p13048"><![CDATA[
Nice idea. Does this new folder expand to show its contents? Mine isn't. Or do I have to reboot?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=427">prr</a> — Fri May 30, 2014 7:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-30T06:37:46-07:00</updated>
<published>2014-05-30T06:37:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13046#p13046</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13046#p13046"/>
<title type="html"><![CDATA[Re: Can Windows 7 orb move to bottom if taskbar pushed to le]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13046#p13046"><![CDATA[
Well, you could try this to move &quot;Programs&quot; to the top.<br />1. In the Run dialog or Start Menu search box, type or copy-paste the following:<br /><br />shell:::{7be9d83c-a729-4d97-b5a7-1b7313c39e0a}<br /><br />and press Enter.<br /><br />2. A &quot;Programs Folder&quot; will open. Drag its folder icon from the address bar over to the Start button till the menu opens and then finally drop it into the area where your pinned shortcuts are.<br /><br />3. That will create an expanding shortcut to Programs that is closer to the Start button at the top. You can rename it if you want but don't try to rename it exactly &quot;Programs&quot;. Name it something else like &quot;All Programs&quot;, &quot;My Programs&quot; or &quot;Apps&quot; or &quot;Software&quot;. This is because the shortcut it creates can be in the same folder as the &quot;Programs&quot; folder.<br /><br />4. To hide the &quot;Programs&quot; item at the bottom of the menu, go to Start Menu Settings -&gt; Customize Start Menu tab, select the Programs item and press Delete to remove it. Click OK. Removing the Programs item is only possible in the classic style, not in Windows 7 style.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri May 30, 2014 6:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[prr]]></name></author>
<updated>2014-05-30T06:10:21-07:00</updated>
<published>2014-05-30T06:10:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13044#p13044</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13044#p13044"/>
<title type="html"><![CDATA[Re: Can Windows 7 orb move to bottom if taskbar pushed to le]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13044#p13044"><![CDATA[
One &quot;workaround&quot; has been simply to put fewer items in the pinned start menu list. I just pruned a few. That way, when I click on the start orb in the upper right corner, my mouse doesn't have to travel as far, because with fewer items in the pinned list, the All Programs menu isn't that far away.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=427">prr</a> — Fri May 30, 2014 6:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[prr]]></name></author>
<updated>2014-05-28T10:01:31-07:00</updated>
<published>2014-05-28T10:01:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13028#p13028</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13028#p13028"/>
<title type="html"><![CDATA[Re: Can Windows 7 orb move to bottom if taskbar pushed to le]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13028#p13028"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />No there is no option yet. It may be possible to move the Start button to just above the notification area (system tray). However the Start button will then no longer be in one of the screen's corners making it harder to target with the mouse. Corners are easier to target because you can just shove the mouse pointer into the corners and click to access any corner buttons. Also, the Windows Start button will have to be hidden. I don't think this feature is planned by Ivo because it has little advantage in terms of usability.<br /></div><br /><br />The usability benefit that I see is that as of now, my start orb is in the upper left corner. I click on it, then move the cursor down several inches to access the programs menu. If the start orb were down (just above the systray), I could simply move immediately to the right, after clicking the start orb, to access my programs. But I realize that few people would use this feature, as most simply have the taskbar along the bottom.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=427">prr</a> — Wed May 28, 2014 10:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[prr]]></name></author>
<updated>2014-05-28T07:16:01-07:00</updated>
<published>2014-05-28T07:16:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13010#p13010</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13010#p13010"/>
<title type="html"><![CDATA[Re: Can Windows 7 orb move to bottom if taskbar pushed to le]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13010#p13010"><![CDATA[
OK thanks anyways.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=427">prr</a> — Wed May 28, 2014 7:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-28T04:40:57-07:00</updated>
<published>2014-05-28T04:40:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13002#p13002</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13002#p13002"/>
<title type="html"><![CDATA[Re: Can Windows 7 orb move to bottom if taskbar pushed to le]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=13002#p13002"><![CDATA[
No there is no option yet. It may be possible to move the Start button to just above the notification area (system tray). However the Start button will then no longer be in one of the screen's corners making it harder to target with the mouse. Corners are easier to target because you can just shove the mouse pointer into the corners and click to access any corner buttons. Also, the Windows Start button will have to be hidden. I don't think this feature is planned by Ivo because it has little advantage in terms of usability.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed May 28, 2014 4:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[prr]]></name></author>
<updated>2014-05-26T19:42:34-07:00</updated>
<published>2014-05-26T19:42:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=12987#p12987</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=12987#p12987"/>
<title type="html"><![CDATA[Can Windows 7 orb move to bottom if taskbar pushed to left?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2694&amp;p=12987#p12987"><![CDATA[
I have just moved the taskbar to the left of my monitor screen, instead of the default bottom. I'm wondering now if the start orb can be moved to the bottom of the taskbar. I see all the system tray icons at the bottom left. I'm wondering if the start orb can be moved to just above them, instead of being pushed to the top of the display screen, in the upper left corner. Does Classic shell have this option?<br /><br /><a href="http://paulrittman.com/Screenshot.png" class="postlink">I have linked to a screenshot</a> to show what I'd like to do. The red arrow goes from the spot the orb is now, and points to where I want to put it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=427">prr</a> — Mon May 26, 2014 7:42 pm</p><hr />
]]></content>
</entry>
</feed>