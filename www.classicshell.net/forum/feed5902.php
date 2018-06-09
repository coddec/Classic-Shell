<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=8043" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-10-25T08:07:13-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=8043</id>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2017-10-25T08:07:13-07:00</updated>
<published>2017-10-25T08:07:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34564#p34564</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34564#p34564"/>
<title type="html"><![CDATA[Re: NumLock &quot;on&quot;, InitialKeyboardIndicators, hybrid shutdown]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34564#p34564"><![CDATA[
. . . Windows 8/8.1/10 all have hybrid shutdown on by default. Classic Shell simply follows the default Windows setting.<br /><br />I don't think it's on by default in Win 10, because:<br /><br />a.) when I shutdown with the Windows &quot;Power&quot; button / re-booted / the Registry setting worked<br /><br />b.) when I un-checked &quot;Enable Hybrid Shutdown&quot; in CS / re-booted / the Registry setting worked . . . but, the Registry setting did &quot;not&quot; work, when CS &quot;Hybrid Shutdown&quot; was enabled.<br /><br />. . . It might even be broken or not work at all at the login screen. A lot of things are broken in Windows 10.<br /><br />I got the above to work, so this Registry setting is not broken, it only doesn't work if &quot;Enable Hybrid Shutdown&quot; is checked in CS<br /><br />. . . You can change the state of numlock with a simple VBScript placed in your Startup folder<br /><br />Thank you! But I fixed this a lot easier as described above - the full explanation is on the HP page (link above).<br /><br />. . . This script will of course only change the state of Numlock after logging in, not at the sign in screen.<br /><br />But that's where I want it on, and a lot of other people do too . . . fixed, as described above<br /><br />. . . Try using Group Policy to set it as a &quot;Startup script&quot; and see if it works.<br /><br />Fixed a lot easier, as described above.<br /><br />I'm just posting this, because I think you might want to consider how many CS users there are, that want to use that NumLock &quot;on&quot; Registry setting, it doesn't work, and they have no idea why.<br /><br />I think that &quot;Enable Hybrid Shutdown&quot; should be un-checked by default in future versions of CS for this reason.<br /><br />Also, I didn't see any significantly lower speed with it off. Maybe that's due to my system, with a C: SSD drive.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Wed Oct 25, 2017 8:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-10-24T21:16:42-07:00</updated>
<published>2017-10-24T21:16:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34558#p34558</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34558#p34558"/>
<title type="html"><![CDATA[Re: NumLock &quot;on&quot;, InitialKeyboardIndicators, hybrid shutdown]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34558#p34558"><![CDATA[
Windows 8/8.1/10 all have hybrid shutdown on by default. Classic Shell simply follows the default Windows setting.<br /><br />The Reg values have changed across each Windows version: <!-- m --><a class="postlink" href="https://winaero.com/blog/enable-numlock-logon-screen-windows-10/">https://winaero.com/blog/enable-numlock ... indows-10/</a><!-- m --> I don't know what they are for the latest Windows 10 release. It might even be broken or not work at all at the login screen. A lot of things are broken in Windows 10.<br />You can change the state of numlock with a simple VBScript placed in your Startup folder. Copy and paste the following in Notepad and save as a &quot;Numlock.vbs&quot; file. Copy it to your Startup folder at C:\Users\&lt;YOUR USER NAME&gt;\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup.<br /><br />set WshShell = CreateObject(&quot;WScript.Shell&quot;)<br />WshShell.SendKeys &quot;{NUMLOCK}&quot;<br /><br />This script will of course only change the state of Numlock after logging in, not at the sign in screen. Try using Group Policy to set it as a &quot;Startup script&quot; and see if it works.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Oct 24, 2017 9:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2017-10-24T15:59:07-07:00</updated>
<published>2017-10-24T15:59:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34554#p34554</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34554#p34554"/>
<title type="html"><![CDATA[NumLock &quot;on&quot;, InitialKeyboardIndicators, hybrid shutdown]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8043&amp;p=34554#p34554"><![CDATA[
I'm using Classic Shell 4.3.1 . . . I have found that in order for this setting in the Registry to work, which will make NumLock &quot;on&quot;:<br /><br />HKEY_USERS \ .DEFAULT \ Control Panel \ Keyboard \ InitialKeyboardIndicators<br />Default: 2147483648<br />Change it to: 2147483650<br /><br />It's necessary to [un-check] &quot;Enable hybrid shutdown&quot;:<br /><br />Classic Start Menu Settings / Main Menu / [un-check] Enable hybrid shutdown . . . (Is this primarily for Win 8, which is not used much today?  Maybe it should be un-checked by default?)<br /><br />Please see this page for the full story:<br /><br />With this BIOS setting, why isn't NumLock enabled / &quot;On&quot; when it gets to the Login screen? . . . https://h30434.www3.hp.com/t5/Desktop-Software-and-How-To-Questions/With-this-BIOS-setting-why-isn-t-NumLock-enabled-quot-On/m-p/6186353#M68595<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Tue Oct 24, 2017 3:59 pm</p><hr />
]]></content>
</entry>
</feed>