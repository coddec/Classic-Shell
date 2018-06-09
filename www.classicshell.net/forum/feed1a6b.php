<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4199" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-04-13T10:17:17-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4199</id>
<entry>
<author><name><![CDATA[thatha]]></name></author>
<updated>2017-04-13T10:17:17-07:00</updated>
<published>2017-04-13T10:17:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=32223#p32223</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=32223#p32223"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=32223#p32223"><![CDATA[
i am new user,, still to listen <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19039">thatha</a> — Thu Apr 13, 2017 10:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rkagerer]]></name></author>
<updated>2017-04-12T16:06:17-07:00</updated>
<published>2017-04-12T16:06:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=32217#p32217</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=32217#p32217"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=32217#p32217"><![CDATA[
Confirmed, this is a problem caused by installing the AirDroid software. Like Zerpus, I was lucky enough to have used Total Uninstall so I was able to identify how AirDroid caused the problem.<br /><br />It hijacks the Open All Users command by overwriting the <em>C:\ProgramData\Microsoft\Windows\Start Menu.lnk</em> shortcut with one that points to <em>C:\Program Files (x86)\AirDroid\Launcher.exe</em><br />The file is <em>supposed</em> to point to <em>C:\ProgramData\Microsoft\Windows\Start Menu</em><br />Uninstalling the software did not correct the issue (it just makes the command stop working altogether as the link target is gone); you need to manually repair the link.<br /><br />I have emailed the AirDroid developers identifying the issue and chastizing them on this. To date, I haven't heard back. I hope this information helps others.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19154">rkagerer</a> — Wed Apr 12, 2017 4:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Zerpus5678]]></name></author>
<updated>2015-08-20T07:29:34-07:00</updated>
<published>2015-08-20T07:29:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=21381#p21381</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=21381#p21381"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=21381#p21381"><![CDATA[
Problem is the PC version of 'AirDroid'. Uninstalling 'AirDroid' does not help. With 'Total unstall' I could eliminate the problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9189">Zerpus5678</a> — Thu Aug 20, 2015 7:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-03-29T11:31:34-07:00</updated>
<published>2015-03-29T11:31:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18468#p18468</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18468#p18468"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18468#p18468"><![CDATA[
Then something is wrong with your Start Menu folder if you can't even open it from the Run box (which is an OS dialog and not part of Classic Shell). It may be something with permissions or attributes or something - hard to tell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 29, 2015 11:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Vim]]></name></author>
<updated>2015-03-29T11:27:30-07:00</updated>
<published>2015-03-29T11:27:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18467#p18467</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18467#p18467"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18467#p18467"><![CDATA[
Nothing at all happens. That is, the run box just flashes quickly - this is with and without quotes.<br />For info if I go to Start &gt; Programs then right click on Programs the Open All Users menu works from there.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9737">Vim</a> — Sun Mar 29, 2015 11:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-03-19T07:35:49-07:00</updated>
<published>2015-03-19T07:35:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18243#p18243</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18243#p18243"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18243#p18243"><![CDATA[
Press Win+R, type &quot;C:\ProgramData\Microsoft\Windows\Start Menu&quot;, press Enter.<br />What happens?<br />Try it both with and without the quotes.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Mar 19, 2015 7:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Vim]]></name></author>
<updated>2015-03-19T03:35:41-07:00</updated>
<published>2015-03-19T03:35:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18237#p18237</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18237#p18237"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=18237#p18237"><![CDATA[
Morning Ivo,<br /><br />I'm having <strong>exactly </strong>the same problem as the OP. If you would, I'd be grateful if you would take a log at the log file I've uploaded to the Media Fire FileDrop.<br /><br />Thanks a lot.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9737">Vim</a> — Thu Mar 19, 2015 3:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-05T09:31:24-07:00</updated>
<published>2015-02-05T09:31:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17797#p17797</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17797#p17797"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17797#p17797"><![CDATA[
Everything looks OK. If I were you I would investigate that grayed out shortcut called &quot;Programme&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Feb 05, 2015 9:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Zerpus5678]]></name></author>
<updated>2015-02-05T07:27:56-07:00</updated>
<published>2015-02-05T07:27:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17795#p17795</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17795#p17795"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17795#p17795"><![CDATA[
Sorry, i thought there would be an easy solution for this problem. I saw no difference between the call from 'All Programs' and the call from 'Classic Shell'.<br />Because the File contains sensitive data, i would not like to send this via PM.<br />Maybe this helps, at the begining of the file is written:<br />***<br />System<br /> Windows version (real): 6.03.9600 64-bit<br /> Windows version (reported): 6.02<br /> Windows version (registry): Windows 8.1 Pro with Media Center 6.3<br /> Computer: xyz<br /> User: xyz<br /> User Languages: de-DE|en-US<br /> Thread Languages: de-DE|de|en-US<br /> Monitor: 0, 0 - (1920 x 1080)<br />  Taskbar: 0, 1040 - (1920 x 40)<br /> Start Menu folder: 'C:\Users\xyz\AppData\Roaming\Microsoft\Windows\Start Menu'<br /> Programs folder: 'C:\Users\xyz\AppData\Roaming\Microsoft\Windows\Start Menu\Programs'<br /> Common Start Menu folder: 'C:\ProgramData\Microsoft\Windows\Start Menu'<br /> Common Programs folder: 'C:\ProgramData\Microsoft\Windows\Start Menu\Programs'<br /> Pending updates (0x00000000): 0, 0, 1<br /> Skip to Desktop: 1<br />***<br />Perhaps i may just live with this little problem. Thanks for the support.<br />Regards<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9189">Zerpus5678</a> — Thu Feb 05, 2015 7:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Zerpus5678]]></name></author>
<updated>2015-02-02T09:08:47-07:00</updated>
<published>2015-02-02T09:08:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17726#p17726</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17726#p17726"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17726#p17726"><![CDATA[
Menu 'All Programs' -&gt; 'All Users' no problem<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9189">Zerpus5678</a> — Mon Feb 02, 2015 9:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-02-02T09:07:58-07:00</updated>
<published>2015-02-02T09:07:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17725#p17725</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17725#p17725"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17725#p17725"><![CDATA[
Why do you have two &quot;Programme&quot; items in your start menu folder? I suspect there is some mixup with your start menu folders.<br /><br />Download the Classic Shell Utility from here: <!-- m --><a class="postlink" href="http://www.classicshell.net/downloads/">http://www.classicshell.net/downloads/</a><!-- m --><br />Run it and send me the log file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Feb 02, 2015 9:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Zerpus5678]]></name></author>
<updated>2015-02-01T07:22:05-07:00</updated>
<published>2015-02-01T07:22:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17693#p17693</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17693#p17693"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17693#p17693"><![CDATA[
Yes, the call from 'All Programs' works correctly. (see pic 1, pic 2)<br />Sorry, my englisch is not good.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9189">Zerpus5678</a> — Sun Feb 01, 2015 7:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-01-31T09:59:41-07:00</updated>
<published>2015-01-31T09:59:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17675#p17675</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17675#p17675"/>
<title type="html"><![CDATA[Re: Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17675#p17675"><![CDATA[
Usually it goes to this folder: C:\ProgramData\Microsoft\Windows\Start Menu<br />Check if it exists and that you can open it in Explorer manually.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jan 31, 2015 9:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Zerpus5678]]></name></author>
<updated>2015-01-30T11:50:41-07:00</updated>
<published>2015-01-30T11:50:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17667#p17667</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17667#p17667"/>
<title type="html"><![CDATA[Open All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4199&amp;p=17667#p17667"><![CDATA[
'Open All Users no longer works. Where is the problem? (see picture)<br /><br />Greetings<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9189">Zerpus5678</a> — Fri Jan 30, 2015 11:50 am</p><hr />
]]></content>
</entry>
</feed>