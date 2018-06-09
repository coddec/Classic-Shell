<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=6944" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-12-22T08:12:27-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=6944</id>
<entry>
<author><name><![CDATA[powerplayer]]></name></author>
<updated>2016-12-22T08:12:27-07:00</updated>
<published>2016-12-22T08:12:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=30886#p30886</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=30886#p30886"/>
<title type="html"><![CDATA[Re: update for win 10 anniversary update required....]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=30886#p30886"><![CDATA[
Oh thats an easy one : Make a .reg file and run it<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Policies\Explorer]<br />&quot;UseDefaultTile&quot;=dword:00000001<br /><br />Now u go to C:\ProgramData\Microsoft\User Account Pictures<br /><br />Photoshop the pics to whatever u like <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> and next time you restart you will have your pic turn into to whatever you added into it<br />Your done!!!<br /><br /><br />OPTIONAL: <br /><br />To remove that annoying microsoft sign in pic<br /><br />Windows Registry Editor Version 5.00<br /><br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\Policies\Microsoft\Windows\System]<br />&quot;DisableLogonBackgroundImage&quot;=dword:00000001<br /><br /><br />No phone style swipe lockscreen reg<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\Policies\Microsoft\Windows\Personalization]<br />&quot;NoLockScreen&quot;=dword:00000001<br /><br />I keep my regs for every time i do clean install<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1059">powerplayer</a> — Thu Dec 22, 2016 8:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-10-08T23:14:23-07:00</updated>
<published>2016-10-08T23:14:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29758#p29758</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29758#p29758"/>
<title type="html"><![CDATA[Re: update for win 10 anniversary update required....]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29758#p29758"><![CDATA[
You can remove the user name and user image from the logon screen by following these steps: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-make-windows-10-ask-for-user-name-and-password-during-log-on/">http://winaero.com/blog/how-to-make-win ... ng-log-on/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Oct 08, 2016 11:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-08T20:18:54-07:00</updated>
<published>2016-10-08T20:18:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29757#p29757</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29757#p29757"/>
<title type="html"><![CDATA[Re: update for win 10 anniversary update required....]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29757#p29757"><![CDATA[
Classic Shell does not change the appearance of the login screen. None of its components are activated until you actually log in.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Oct 08, 2016 8:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hippicorn]]></name></author>
<updated>2016-10-08T20:16:25-07:00</updated>
<published>2016-10-08T20:16:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29756#p29756</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29756#p29756"/>
<title type="html"><![CDATA[update for win 10 anniversary update required....]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6944&amp;p=29756#p29756"><![CDATA[
I am running windows 10 with the anniversary update.<br />I want to remove the user picture from the login screen but even with the use of the latest classic shell (4.3.0) the default picture still remains. despite deselecting the  &quot;show user picture&quot; option.<br /><br />TIA<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15556">Hippicorn</a> — Sat Oct 08, 2016 8:16 pm</p><hr />
]]></content>
</entry>
</feed>