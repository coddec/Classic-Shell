<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7577" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-05-09T17:10:00-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7577</id>
<entry>
<author><name><![CDATA[Nodens]]></name></author>
<updated>2017-05-09T17:10:00-07:00</updated>
<published>2017-05-09T17:10:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32588#p32588</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32588#p32588"/>
<title type="html"><![CDATA[Re: Explorer freeze on Nvidia driver update (dumps inside)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32588#p32588"><![CDATA[
This started happening a few months ago, I thought it was related to the nvidia driver and did not investigate any further until I reproduced it in the laptop.<br /><br />Not sure if you have Nvidia hardware but can you try this reproduction scenario:<br />Install a previous version of Nvidia driver and install Geforce Experience with it.<br />Initiate driver update from within Geforce Experience.<br />After the update finishes explorer should be in this state.<br /><br />Unfortunately I am not very familiar with the inner workings of explorer but perhaps I could help somehow as I am a software developer.<br />Is there any way to identify which COM object triggers the thread spam? Or provide better debugging information via VS debugger?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19790">Nodens</a> — Tue May 09, 2017 5:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-05-06T19:52:39-07:00</updated>
<published>2017-05-06T19:52:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32539#p32539</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32539#p32539"/>
<title type="html"><![CDATA[Re: Explorer freeze on Nvidia driver update (dumps inside)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32539#p32539"><![CDATA[
This appears to be the dreaded &quot;too many threads get created by COM&quot; problem. As of now I have not been able to repro it and I don't know how to fix it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat May 06, 2017 7:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nodens]]></name></author>
<updated>2017-05-06T10:28:21-07:00</updated>
<published>2017-05-06T10:28:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32526#p32526</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32526#p32526"/>
<title type="html"><![CDATA[Re: Explorer freeze on Nvidia driver update (dumps inside)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32526#p32526"><![CDATA[
No it does not. The first thing I tried was uninstalling classic shell to test.<br /><br />I will also add that both systems are in mint condition. They both pass sfc and dism checks. Specifically the laptop is new and has fresh installation of windows.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19790">Nodens</a> — Sat May 06, 2017 10:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-05T22:37:12-07:00</updated>
<published>2017-05-05T22:37:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32514#p32514</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32514#p32514"/>
<title type="html"><![CDATA[Re: Explorer freeze on Nvidia driver update (dumps inside)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32514#p32514"><![CDATA[
Does this happen if Classic Start Menu is not running? Try that.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri May 05, 2017 10:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nodens]]></name></author>
<updated>2017-05-05T21:13:13-07:00</updated>
<published>2017-05-05T21:13:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32513#p32513</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32513#p32513"/>
<title type="html"><![CDATA[Explorer freeze on Nvidia driver update (dumps inside)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7577&amp;p=32513#p32513"><![CDATA[
During the nvidia driver update, explorer freezes and needs to be killed and restarted via task manager. The driver installation completes successfully.<br />I have taken a series of 30 dumps because the nvidia installer takes some time to complete.<br />I believe the issue is manifesting between dump 20 and 24 as I see the taskbar flashing at that point and then it's frozen. It looks like blocked event loop.<br />Notice that:<br />a) I use and have kept Launch folder windows at separate process enabled and taken the dump using the pid.<br />b) Issue manifests on two systems in my disposal both running 4.3.0 on build 15063.250 but it also happened prior to the Creator's Update.<br /><br /><!-- m --><a class="postlink" href="https://www.dropbox.com/s/7a0a9htxfyk78w1/Explorer_Freeze.7z?dl=0">https://www.dropbox.com/s/7a0a9htxfyk78 ... ze.7z?dl=0</a><!-- m --><br /><br />Cheers!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19790">Nodens</a> — Fri May 05, 2017 9:13 pm</p><hr />
]]></content>
</entry>
</feed>