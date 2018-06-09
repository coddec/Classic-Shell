<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7697" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-11T10:53:15-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7697</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-11T10:53:15-07:00</updated>
<published>2017-09-11T10:53:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7697&amp;p=34061#p34061</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7697&amp;p=34061#p34061"/>
<title type="html"><![CDATA[Re: Dissable options]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7697&amp;p=34061#p34061"><![CDATA[
This is how your Registry should be configured (merge this REG). Note that the Settings in HKLM are in HKLM\Software\IvoSoft\ClassicStartMenu whereas the Settings in HKCU are in HKCU\SOFTWARE\IvoSoft\ClassicStartMenu\Settings subbranch. The same should work for any other Reg value including EnableSettings.<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicStartMenu]<br />&quot;EnableContextMenu_Default&quot;=dword:00000000<br /><br />[HKEY_CURRENT_USER\SOFTWARE\IvoSoft\ClassicStartMenu\Settings]<br />&quot;EnableContextMenu&quot;=dword:00000001<br /><br />After adding the Registry entries, make sure you log off your user account and login again or exit the Classic Start Menu (right click -&gt; Exit) and start it again from C:\Program Files\Classic Shell\ClassicStartMenu.exe.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Sep 11, 2017 10:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fakfull]]></name></author>
<updated>2017-06-23T00:12:43-07:00</updated>
<published>2017-06-23T00:12:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7697&amp;p=33116#p33116</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7697&amp;p=33116#p33116"/>
<title type="html"><![CDATA[Dissable options]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7697&amp;p=33116#p33116"><![CDATA[
Hello,<br /><br /><br /><br /><br />I am using Classic shell v. 4,3,0. I need to use in on Windows 10 Enterprise v.1607 and I need to disable on user XXXXX to disable right click and options menu. I tryied some registeres, some options but nothing work properly.<br />I tryied Registers with &quot;EnableContextMenu&quot; value 0, &quot;EnableContextMenu_Ddefault&quot; value 0, &quot;EnableSettings&quot; value 0 and Context menu Enalbe right-click menu and still i can open options where user can change options and open internet conection, play games and do some stuff.<br /><br />We are talking about some work terminals for workers and i need to block everything from start menu except log off and shutdown and stupid Windows 10 can't block it by GPO. Can someone give me any advice ? <br /><br />Thanks a lot for any advice <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br /><br />Fakfull<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20981">Fakfull</a> — Fri Jun 23, 2017 12:12 am</p><hr />
]]></content>
</entry>
</feed>