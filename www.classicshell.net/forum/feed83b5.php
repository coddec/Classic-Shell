<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7817" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-11-02T02:42:50-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7817</id>
<entry>
<author><name><![CDATA[sws]]></name></author>
<updated>2017-11-02T02:42:50-07:00</updated>
<published>2017-11-02T02:42:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=34638#p34638</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=34638#p34638"/>
<title type="html"><![CDATA[Re: Windows 10 LTSB Slowndown explorer.exe after 1 minute st]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=34638#p34638"><![CDATA[
This sounds pretty similar to my posted problem<a href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=5954" class="postlink">http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=5954</a><br /><br />We narrowed the cause down to roaming profiles in combination with folder redirection.<br />We started using a powershell script to restart the explorer and started logging the restarts.<br />For Users with extreme restart counts (20-100 restarts a day) we used to follwing &quot;fix&quot;:<br />Open an Explorer Window, go to the Folder Options, change any option in the &quot;View&quot; tab and apply.<br />Relog the user or restart the client.<br />Aslong as the local copy of the roaming profile isnt deleted, the explorer is just fine.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13258">sws</a> — Thu Nov 02, 2017 2:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[JPVJ]]></name></author>
<updated>2017-09-07T01:52:16-07:00</updated>
<published>2017-09-07T01:52:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33980#p33980</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33980#p33980"/>
<title type="html"><![CDATA[Re: Windows 10 LTSB Slowndown explorer.exe after 1 minute st]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33980#p33980"><![CDATA[
<div class="quotetitle">danielk@home.nl wrote:</div><div class="quotecontent"><br /><div class="quotetitle">Gaurav wrote:</div><div class="quotecontent">Has this issue been narrowed down to the Start menu component? Have you tried installing only the Start menu and omitting Classic Explorer and IE components?<br /></div><br /><br />Just did some tests:<br />Installed Classic Shell with only the Classic Explorer feature. The threads stay low.<br />Installed Classic Shell with only the Classic Start Menu feature. The threads went up to 820.<br /><br />So yes, i think it has something to do with the Start menu component.</div><br /><br /><br />Thx. for testing!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23701">JPVJ</a> — Thu Sep 07, 2017 1:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[danielk@home.nl]]></name></author>
<updated>2017-08-17T08:06:57-07:00</updated>
<published>2017-08-17T08:06:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33735#p33735</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33735#p33735"/>
<title type="html"><![CDATA[Re: Windows 10 LTSB Slowndown explorer.exe after 1 minute st]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33735#p33735"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Has this issue been narrowed down to the Start menu component? Have you tried installing only the Start menu and omitting Classic Explorer and IE components?<br /></div><br /><br />Just did some tests:<br />Installed Classic Shell with only the Classic Explorer feature. The threads stay low.<br />Installed Classic Shell with only the Classic Start Menu feature. The threads went up to 820.<br /><br />So yes, i think it has something to do with the Start menu component.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22992">danielk@home.nl</a> — Thu Aug 17, 2017 8:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-17T05:32:36-07:00</updated>
<published>2017-08-17T05:32:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33734#p33734</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33734#p33734"/>
<title type="html"><![CDATA[Re: Windows 10 LTSB Slowndown explorer.exe after 1 minute st]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33734#p33734"><![CDATA[
Has this issue been narrowed down to the Start menu component? Have you tried installing only the Start menu and omitting Classic Explorer and IE components?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Aug 17, 2017 5:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[danielk@home.nl]]></name></author>
<updated>2017-08-17T01:52:59-07:00</updated>
<published>2017-08-17T01:52:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33731#p33731</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33731#p33731"/>
<title type="html"><![CDATA[Re: Windows 10 LTSB Slowndown explorer.exe after 1 minute st]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33731#p33731"><![CDATA[
We're also running Windows 10 Enterprise LTSB with the latest windows updates. I can also reproduce this problem with domain users which are member of the clients local admin group. <br /><br />Clicking random folders in explorer increases the thread count in a few minutes to approximately 820. Then explorer crashes and I'll have to restart the explorer.exe process and it starts all over again.<br />When i remove classic shell in the 'infected' user session (so without restarting windows or logging out and in) and restart explorer.exe i can't reproduce the problem anymore. When i reinstall classic shell in the same user session the problem is back immediately. I tried this multiple times just to be sure that is has something to do with classic shell.<br /><br />But sometimes if we restart the computer or logout and login again the explorer.exe stays around 100 threads no matter how often we click random folders. So the problem is not consistent.<br /><br />If the developers are still struggling to reproduce the problem, maybe its an idea that we give the devs remote access to an 'infected' user session?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22992">danielk@home.nl</a> — Thu Aug 17, 2017 1:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dod]]></name></author>
<updated>2017-08-16T08:07:12-07:00</updated>
<published>2017-08-16T08:07:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33720#p33720</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33720#p33720"/>
<title type="html"><![CDATA[Re: Windows 10 LTSB Slowndown explorer.exe after 1 minute st]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33720#p33720"><![CDATA[
Hello Ivo, <br />Ok I think It's not easy. <br />I have work today on my vm and I have found maybe 2 ways for a solution. (I send the printscreens on the zip attachement) <br /><br />1. <br />When I'm in Group Admin Local with my user, I have not problem. It's run very well. <br />When I'm in Group User (without rights) with my user, the problem come. <br /><br />On this website <a href="https://msdn.microsoft.com/en-us/library/bb625963.aspx" class="postlink">https://msdn.microsoft.com/en-us/library/bb625963.aspx</a> (Table 7 Integrity levels linked to specific SIDs) I read that: <br /><br />  <br />If admin mode explorer.exe run in HIGH Assigned integrity level (Administrators) <br /><br />If user mode explorer.exe run in MEDIUM Assigned integrity level (Authenticated Users) <br /><br />2. <br />When I'm in Group User (without rights) with my user, the problem come. <br />First time In Process Explorer, the process ClassisStartmenu.exe is under Explorer.exe. <br />When the stuck coming is restart explorer.exe, the process ClassicStartmenu.exe is alone not under Explorer.exe.  <br />I close my session and I restart my session and I have no problem. <br />  <br />Another information: <br />In my Virtual environnment, I use VMWare UEM for the userprofile. <br />Classic Shell use special folder or registry in the user ? Beacause I'ts very important that I capture this settings. <br />  <br />Thank's for your help. <br />  <br />David<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22912">dod</a> — Wed Aug 16, 2017 8:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-08-15T21:18:31-07:00</updated>
<published>2017-08-15T21:18:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33717#p33717</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33717#p33717"/>
<title type="html"><![CDATA[Re: Windows 10 LTSB Slowndown explorer.exe after 1 minute st]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33717#p33717"><![CDATA[
I don't know what is causing this problem. I was hoping some changes to the latest version will make it go away, but obviously not.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 15, 2017 9:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-15T09:25:15-07:00</updated>
<published>2017-08-15T09:25:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33705#p33705</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33705#p33705"/>
<title type="html"><![CDATA[Re: Windows 10 LTSB Slowndown explorer.exe after 1 minute st]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33705#p33705"><![CDATA[
This problem was reported by some other Windows 10 users. Hopefully your dump will help Ivo determine the cause.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 15, 2017 9:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dod]]></name></author>
<updated>2017-08-15T05:34:48-07:00</updated>
<published>2017-08-15T05:34:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33692#p33692</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33692#p33692"/>
<title type="html"><![CDATA[Windows 10 LTSB Slowndown explorer.exe after 1 minute start]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7817&amp;p=33692#p33692"><![CDATA[
Good Morning, <br /><br />My environment is virtual. <br />(VDI on VMware Horizon 7.2) <br />Windows 10 Enterprise 2016 LTSB <br />IE11 <br />Classic Shell 4.3.1 <br />Office 2016 Enterprise plus <br />Adobe Reader DC, 7Zip, Notepad++, VLC, Pdfcreator and another small tools. <br /><br />When I start my session, I check with Resmon the threads on &quot;Explorer.exe &quot; and it's 173 <br />After one minute, the explorer is stuck; new check and the threads on &quot;Explorer.exe &quot; is more 812 <br /><br />I restart the process explorer.exe and it's OK. <br /><br />I don't understand where is the problem. <br /><br />In my Zip attachment, I have several dump <br /><br />Thank's in advance for your help. <br /><br />David<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22912">dod</a> — Tue Aug 15, 2017 5:34 am</p><hr />
]]></content>
</entry>
</feed>