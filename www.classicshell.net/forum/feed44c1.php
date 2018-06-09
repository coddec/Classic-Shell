<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7824" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-21T21:10:51-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7824</id>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-21T21:10:51-07:00</updated>
<published>2017-08-21T21:10:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33786#p33786</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33786#p33786"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33786#p33786"><![CDATA[
Alright, forget that, I checked my Recycle Bin and the shortcut's not there; lost forever now lol...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Mon Aug 21, 2017 9:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-21T16:26:24-07:00</updated>
<published>2017-08-21T16:26:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33785#p33785</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33785#p33785"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33785#p33785"><![CDATA[
Hey Gaurav.<br /><br />Yeah, I bet it took lots of experimentation to get the right algorithm to show the most used programs. I read the links you posted: Funny how they say &quot;And then we had to tweak it&quot; - Yeah, they did tweak it: Notice how Microsoft Office programs appear right smack in the middle / near the top of the list the very first time you use them? Hahaha. I'm not sure which is better, Windows' or Classic Start Menu, I haven't used CSM a lot yet. So long as it's similar, I'll be fine. But I too am glad that Ivo coded the weight system similar to Windows', I have found it to be adequate. I didn't know/hadn't really thought about sorting the frequent list. It's a neat idea, but I kinda like knowing which program is about to drop off the list because it is at the bottom; if I sort the list then things will suddenly disappear with me not having a clue as to why.<br /><br />Still don't know what was wrong with that shortcut. I think it's in my Administrator user's trashcan, I'll zip it and attach it here next time I log as Admin. Might be useful one day.<br /><br />See you.<br />Best Regards,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Mon Aug 21, 2017 4:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-19T04:27:40-07:00</updated>
<published>2017-08-19T04:27:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33751#p33751</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33751#p33751"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33751#p33751"><![CDATA[
Hi Sylvain, that's interesting - all the things you did. Windows does seem to periodically reset the run counts. Also, it's cool that we have a tool to not only decode the UserAssist data but also manipulate it. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> <br /><br />I really have no idea why that particular shortcut was being &quot;blocked&quot; in Classic Start Menu's MFU list. It might be some minor bug. Well at least the other 99% of the apps do reliably show up. I am really glad with the way Ivo designed the MFU algorithm for Classic Shell. It required so much testing and observation about the way the Windows menu behaves. I think in the end, it became better than the Windows menu, which as you pointed out gives weightage to how recently the program has been run. Heck, even the description in Taskbar Properties says &quot;Recently used programs&quot; even though they are really your most used programs.<br /><br />Classic Shell's separate Recent list is a pure first-in-first-out list. It appeared first actually in Classic Shell. The Frequent list was added in Classic Shell 4. And have you noticed the other settings related to this feature? - the Recent/Frequent lists can switch places with the Pinned app list if you like. Perhaps, the coolest feature is how Classic Shell can sort the Frequent/Recent lists by name so that makes it easier to quickly locate certain &quot;most used&quot; programs that you know are going to be in the list.<br /><br />I remember that in the past, this exact same bug that you faced happened to me but it was for the Google Chrome shortcut. No matter how many times I had run it, it would not show up in CSM. But after a reinstall of Windows (which I had to do anyway for other reasons), the Chrome shortcut started up showing just fine. Anyway, if some app shortcut decides to act up this way, you could just pin it to the menu.<br /><br />If you are interested, Raymond Chen has written some articles on this topic:<br />- <a href="https://technet.microsoft.com/en-us/library/2007.05.windowsconfidential.aspx" class="postlink">Windows Confidential: Determining What Is Frequently Used</a><br />- <a href="https://blogs.msdn.microsoft.com/oldnewthing/20070611-00/?p=26483" class="postlink">What determines which programs show up on the front page of the Windows XP Start menu?</a><br />- <a href="https://blogs.msdn.microsoft.com/oldnewthing/20160329-00/?p=93214" class="postlink">Why doesn’t a program show up on the Start menu’s Recently Used Programs list if I just used it to open a document?</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Aug 19, 2017 4:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-18T20:22:14-07:00</updated>
<published>2017-08-18T20:22:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33750#p33750</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33750#p33750"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33750#p33750"><![CDATA[
Donated $15, small contribution to the cause. Gaurav you should get a portion of that <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":-)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Fri Aug 18, 2017 8:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-18T20:01:45-07:00</updated>
<published>2017-08-18T20:01:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33749#p33749</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33749#p33749"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33749#p33749"><![CDATA[
Good day.<br /><br />Okay, so I deleted IpNetInfo from UserAssist registry keys, then ran it several times -&gt; It quickly climbed back into Windows' own Start Menu, but STILL REFUSED to show in Classic Start Menu. Hmmm. Screw it; I deleted ALL of UserAssist (using the Windows Start Menu options). Then ran IpNetInfo -&gt; It appeared right away in Windows' Start Menu's Frequent List, since the list was now empty, but it was STILL NOT appearing in Classic Start Menu's Frequent Programs! WTF! So finally I deleted the shortcut from the ProgramData\blabla\StartMenu and re-created it. Then ran it once and NOW it is appearing in Classic Start Menu's Frequent Programs!<br /><br />I had a backup of the UserAssist registry keys, so I restored (so now I had the same Frequent Programs as before) and then ran the new IpNetInfo shortcut and sure enough, it was now appearing in Classic Start Menu's Frequent Programs. Something was somehow wrong with the old shortcut. We shall never know what was wrong lol. If it happens again I will ask Ivo to maybe have a look...<br /><br />So I proceeded using your Start Menu Frequent Programs tool to examine the User Assist data, and found it was full of old references to no longer existing shortcuts (like when I renamed the Start Menu Folder &quot;DiskTools&quot; to &quot;Disk Tools&quot; (with a space) ALL the old entries were still in User Assist.) So in the end I just deleted everything again lol. It will take some time to get everything back the way I liked it, but it's better I think than a database full of broken entries.<br /><br />Thank's a LOT for your help!<br />Best Regards,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Fri Aug 18, 2017 8:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-18T19:18:00-07:00</updated>
<published>2017-08-18T19:18:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33748#p33748</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33748#p33748"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33748#p33748"><![CDATA[
Hi Gaurav.<br /><br />I downloaded Start Menu Frequent Programs; it shows pretty much the same thing as UserAssit program - i.e. 99% of all listed programs have a count=0. I have no idea how you managed a runCount of 72 for Notepad - I've used my Notepad just as much, but its count remains at 6 (my highest count). Windows seems to reset counts regularly. Your tool lets us <strong>change</strong> the run count however, so I increased IpNetInfo's two entries (LNK and EXE) from &quot;2&quot; to &quot;99&quot; -&gt; It climbed near the top in Windows' own Start Menu; restarted Classic Start Menu -&gt; Still not visible.<br /><br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />If I remember correctly, the Windows 7 UserAssist algorithm had some weird requirements: the program's shortcut must be in the Start Menu Programs folder, launched at least once using the shortcut for it to show up in the UserAssist Registry.<br /></div><br />Yup, but I'm good there, it's in ProgramData\blabla\StartMenu and that's where I run it from (e.g. from the Start Menu).<br /><br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />The Recent list will show it without issues because it is not based on data collected by Windows. It is maintained internally by Classic Shell. The Frequent list depends on what Windows collects and stores in the Registry. Classic Shell merely decodes it and &quot;presents&quot; it.<br /></div><br />Ah! Didn't know that. I know Classic Shell doesn't present the list &quot;exactly&quot; like Windows - for one thing, Windows seems to place a big emphasis on how recently you used the program, I'm not sure Classic Shell follows the same logic. But that still does not explain why IpNetInfo is missing completely from the Classic Shell Frequent Programs - it is in the database, and even when I set the run count higher than everything else, it remains missing.<br /><br />I can delete single entries with your tool - I will try deleting IpNetInfo and then run it a lot; see if that brings it back...<br />If nothing works I'll just wipe the entire list...<br />Will report back.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Fri Aug 18, 2017 7:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-17T22:50:38-07:00</updated>
<published>2017-08-17T22:50:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33740#p33740</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33740#p33740"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33740#p33740"><![CDATA[
I use this app called Start Menu Frequent Programs (<!-- m --><a class="postlink" href="http://www.byounce.com/clicks/click.php?id=5">http://www.byounce.com/clicks/click.php?id=5</a><!-- m -->). You can enter the UserAssist CLSIDs in it and then it decodes those Registry keys. The UserAssist CLSIDs for Windows 7/8.1 are:<br /><br />{CEBFF5CD-ACE2-4F4F-9178-9926F41749EA},{F4E57C4B-2036-45F0-A9AB-443BCFE33D9F}<br /><br />One is for LNK and other is for EXE files. Run it as administrator and enter these CLSIDs in Tools menu -&gt; Options.<br /><br />If I remember correctly, the Windows 7 UserAssist algorithm had some weird requirements: the program's shortcut must be in the Start Menu Programs folder, launched at least once using the shortcut for it to show up in the UserAssist Registry.<br /><br />The Recent list will show it without issues because it is not based on data collected by Windows. It is maintained internally by Classic Shell. The Frequent list depends on what Windows collects and stores in the Registry. Classic Shell merely decodes it and &quot;presents&quot; it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Aug 17, 2017 10:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-17T16:38:29-07:00</updated>
<published>2017-08-17T16:38:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33736#p33736</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33736#p33736"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33736#p33736"><![CDATA[
Hi guys.<br /><br />Thanks for the quick reply. Nope, I haven't pinned the program anywhere. And it shows in Classic Shell if I use &quot;Recent Programs&quot; - it just won't show in &quot;Frequent Programs&quot; mode, and it really should, since I use it frequently. Is Classic Shell using the &quot;UserAssist&quot; registry keys to find Frequent Programs? I just installed the UserAssist tool from Didier Stevens (<!-- m --><a class="postlink" href="https://blog.didierstevens.com/?s=userassist">https://blog.didierstevens.com/?s=userassist</a><!-- m -->) but something's not right, I see like 400 entries and 99% have a counter (number of times used) of zero. Either the tool is wrong or I do not understand how the database works.<br /><br />Should I just reset the database and see? I'd like to avoid that, but if that's the only thing that comes to mind, I'll clear it.<br /><br />Thanks.<br />Best Regards,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Thu Aug 17, 2017 4:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-17T05:29:16-07:00</updated>
<published>2017-08-17T05:29:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33733#p33733</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33733#p33733"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33733#p33733"><![CDATA[
I installed this NirSoft tool but it appeared in my Frequent list after launching it a couple of times. So technically, there's nothing odd about its shortcut or the app itself to prevent it from appearing in the Frequent list. No idea what could be causing your issue.<br /><br />P.S. Offtopic but wow you seem to be a power user!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Aug 17, 2017 5:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-08-16T22:35:28-07:00</updated>
<published>2017-08-16T22:35:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33725#p33725</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33725#p33725"/>
<title type="html"><![CDATA[Re: Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33725#p33725"><![CDATA[
Is the program pinned to the taskbar or the start menu? That would prevent it from showing in the list.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Aug 16, 2017 10:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Sylvain]]></name></author>
<updated>2017-08-16T20:31:09-07:00</updated>
<published>2017-08-16T20:31:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33724#p33724</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33724#p33724"/>
<title type="html"><![CDATA[Frequent Programs different than Windows' own]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7824&amp;p=33724#p33724"><![CDATA[
Good day.<br /><br />I'm sure this has been discussed before, but the Forum will not let me search for &quot;Frequent Programs&quot; and so I am unable to find the topic.<br /><br />I have recently discovered a small bug in the start menu with my new Kaspersky Anti-Virus on Win7. No problem, I thought, I'll just switch to using the Classic Shell one (I was already using Classic Shell to make changes to Windows' own Start Menu anyway). But I discovered that the list of Frequent Programs in Classic Shell is different than the one Windows shows in its own Start Menu. Not a huge problem, but there is ONE program I use frequently which just REFUSES to appear in Classic Shell's list of frequent programs. It does appear if I change to Recent Programs, but no amount of coaxing makes it appear in Classic Shell's <strong>Frequent</strong> Programs.<br /><br />How is this possible? Don't both Start Menus use the same database, maintained by Windows?<br /><br />I increased the number of shown Frequent Programs to 40 in Classic Shell, to see if perhaps the program was just a bit lower in the list, but nope, it just won't show :-(<br /><br />Here are screenshots:<br /><a href="https://www.dropbox.com/s/w11irz4lqfwg4nb/FrequentApps-Windows.jpg?dl=1" class="postlink">Windows-Start-Menu with IpNetInfo in Frequent Programs</a><br /><a href="https://www.dropbox.com/s/ujp1t1lgewe3bvg/FrequentApps-ClassicShell.jpg?dl=1" class="postlink">Classic-Shell-Start-Menu with 40 Frequent Programs and no IpNetInfo</a><br /><br />Can someone explain and/or let me know what I need to do to have IpNetInfo show in CS's Frequent Programs list?<br /><br />Thank you much.<br />Best Regards,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22972">Sylvain</a> — Wed Aug 16, 2017 8:31 pm</p><hr />
]]></content>
</entry>
</feed>