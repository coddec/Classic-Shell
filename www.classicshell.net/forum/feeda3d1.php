<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=196" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-02-05T05:13:59-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=196</id>
<entry>
<author><name><![CDATA[ono25]]></name></author>
<updated>2013-02-05T05:13:59-07:00</updated>
<published>2013-02-05T05:13:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=861#p861</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=861#p861"/>
<title type="html"><![CDATA[Re: Problem with Windows Keyboard Shortcuts and certain apps]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=861#p861"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />The only way the start menu can affect the keyboard shortcuts system-wide is if the Shift+Win is enabled. However it should not leave anything behind once uninstalled (assuming you rebooted afterwards). See if setting &quot;Shift+Win opens&quot; to &quot;Nothing&quot; in the settings fixes your problem.<br /></div><br /><br />Ivo - many thanks for the rapid response - it is much appreciated.<br /><br />In answer to your points I am as mystified as you are. I did reboot after the uninstall but it is hard to know what if anything is left behind - the ivosoft registry key in HKLM was certainly still there after the uninstall as I removed it manually. I have now tried setting &quot;Shift+Win opens&quot; to nothing (and rebooted) but it made no difference.<br /><br />I should have added that I have also tried installing Classic Start Shell on an almost brand new Windows 8 laptop and encountered exactly the same problem.<br /><br />Perhaps if you or someone else on the formum could find the time you could install Ditto Clipboard Manager and have a try (you might even like the utility - it is actually quite a good). The mskey.exe utility I am using comes with the Microsoft IntelliType drivers.<br /><br />Thanks again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=260">ono25</a> — Tue Feb 05, 2013 5:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-04T21:30:16-07:00</updated>
<published>2013-02-04T21:30:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=854#p854</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=854#p854"/>
<title type="html"><![CDATA[Re: Problem with Windows Keyboard Shortcuts and certain apps]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=854#p854"><![CDATA[
The only way the start menu can affect the keyboard shortcuts system-wide is if the Shift+Win is enabled. However it should not leave anything behind once uninstalled (assuming you rebooted afterwards). See if setting &quot;Shift+Win opens&quot; to &quot;Nothing&quot; in the settings fixes your problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Feb 04, 2013 9:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ono25]]></name></author>
<updated>2013-02-04T18:49:56-07:00</updated>
<published>2013-02-04T18:49:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=851#p851</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=851#p851"/>
<title type="html"><![CDATA[Problem with Windows Keyboard Shortcuts and certain apps]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=196&amp;p=851#p851"><![CDATA[
Firstly I’d like to thank you for an essential application. I can honestly say that it transforms Windows 8 or would if it weren’t for the following problem which seems to be attributable to Classic Start Menu and which makes it unusable in conjunction with certain other applications.<br /><br />The applications in question are applications that use some form of Pop Up triggered by a Shortcut Key - examples that I have encountered problems with include Ditto Clipboard Manager, ArsClip and VistaSwitcher. I am sure there may be others that those are the apps I have tested.<br /><br />All of the applications work perfectly in isolation with Windows Pro 8 64 bit but encounter problems once Classic Start Menu has been installed.<br /><br />Taking Ditto Clipboard Manager as an example, one normally uses a Shortcut Key such as Ctrl+’ to open a Pop Up list of recent clips that can then be pasted into whatever application is running. If one monitors the keyboard with MSkey.exe ( a keystroke monitoring application) it is possible to see that both keys are depressed and then released in turn:<br /><br />Key: Ctrl (make) - 0x1b<br />Key: ' (make) - 0x28<br />Key: ' (break) - 0x28<br />Key Ctrl (break) - 0x1b<br /><br />However, once Classic Start Menu has been installed this behaviour changes and although the Ditto Clipboard Manager Pop Up opens normally the system then behaves as though the two keys Ctrl and ‘ are still depressed and this can be seen by MSkey.exe which shows them listed as “currently being depressed”<br /><br />Key: Ctrl (make) - 0x1b<br />Key: ' (make) - 0x28<br /><br />What then happens is that the whole system behaves erratically depending upon whatever keystrokes are pressed next as they operate as though they are being pressed in conjunction with one or other of the depressed keys (Ctrl or ‘) . The effect as one types is like a lot of different short cut keys being triggered - Windows can open, the system can jump to the Start Screen etc. until the whole system becomes unusable.<br /><br />Even more strangely the problem persists after Classic Start Menu has been uninstalled.<br /><br />The only way I have found of reverting to normal is to go back to a Disk Image made immediately prior to the installation of Classic Start Menu.<br /><br />Sorry for the length of the above but I would dearly love a find a solution that doesn’t involve me reverting back to a hard drive image made some months ago and which will enable me to continue using Classic Start Menu.<br /><br />Many thanks<br /><br />MB<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=260">ono25</a> — Mon Feb 04, 2013 6:49 pm</p><hr />
]]></content>
</entry>
</feed>