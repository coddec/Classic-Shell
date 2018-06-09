<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=898" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-08-17T20:15:27-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=898</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-17T20:15:27-07:00</updated>
<published>2013-08-17T20:15:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5797#p5797</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5797#p5797"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5797#p5797"><![CDATA[
The latest version 3.9.1 should fix this problem. It no longer needs to use the MSI system.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Aug 17, 2013 8:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pev69]]></name></author>
<updated>2013-08-14T10:01:18-07:00</updated>
<published>2013-08-14T10:01:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5720#p5720</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5720#p5720"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5720#p5720"><![CDATA[
Yes I saw what is missing from the output of your test program and also from the event log. Don't know how or when it could have been lost. Doesn't matter really because Steam works OK, I can get to their support  by other ways. Haven't tried a repair install, maybe will at some point.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1346">pev69</a> — Wed Aug 14, 2013 10:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-14T07:21:19-07:00</updated>
<published>2013-08-14T07:21:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5711#p5711</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5711#p5711"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5711#p5711"><![CDATA[
Great. So looks like the test is able to retrieve the shortcut properties without triggering the self-repair.<br /><br />BTW, looks like you are missing Support.url. &quot;state 2&quot; means INSTALLSTATE_ABSENT. Maybe you deleted it or it got corrupted. Does the Steam installer fail to self-repair?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Aug 14, 2013 7:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pev69]]></name></author>
<updated>2013-08-14T00:56:18-07:00</updated>
<published>2013-08-14T00:56:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5693#p5693</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5693#p5693"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5693#p5693"><![CDATA[
The results from command window below. The popup appeared with 1 but not 2.<br /><br />M:\Tempi&gt;Test.exe 1 &quot;C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Steam\Steam Support Center.lnk&quot;<br />path: C:\Windows\Installer\{048298C9-A4D3-490B-9FF9-AB023A9238F3}\Icon048298C92.url<br />M:\Tempi&gt;Test.exe 2 &quot;C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Steam\Steam Support Center.lnk&quot;<br />flags: 0x000050DD<br />product: {048298C9-A4D3-490B-9FF9-AB023A9238F3}<br />feature: Steam_Base<br />component: {17D4903C-068A-47A0-9753-EDF4909D42FF}<br />state: 2<br />path: D:\Program Files (x86)\Steam\Support.url<br />M:\Tempi&gt;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1346">pev69</a> — Wed Aug 14, 2013 12:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-13T22:44:24-07:00</updated>
<published>2013-08-13T22:44:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5692#p5692</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5692#p5692"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5692#p5692"><![CDATA[
Let's try this test. Download the attached file and unpack it somewhere.<br />Open a command prompt and type:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">test.exe 1 &quot;&lt;full path to the bad link&gt;&quot;</div>Note if the MSI popup shows up. Also copy the output from the command prompt.<br />Then type:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">test.exe 2 &quot;&lt;full path to the bad link&gt;&quot;</div>Again, note if the MSI popup shows up and copy the output.<br /><br />Report the results here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 13, 2013 10:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pev69]]></name></author>
<updated>2013-08-13T16:10:41-07:00</updated>
<published>2013-08-13T16:10:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5683#p5683</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5683#p5683"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5683#p5683"><![CDATA[
Okay. I already deleted the offending shortcut, but was able to restore it from the recycle bin. So the problem shoud be reproducible when you want <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />. In the meanwhile I'll stick with Classic Chell 3.6.8, and thank you for this wonderful product! I don't remember if I have already donated, but certainly will soon!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1346">pev69</a> — Tue Aug 13, 2013 4:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-13T15:58:52-07:00</updated>
<published>2013-08-13T15:58:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5681#p5681</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5681#p5681"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5681#p5681"><![CDATA[
I'll double-check if I'm doing it right, but I think I also request that no UI is to be shown. If that's the case, then MSI goes against my wishes.<br />Please don't repair the problem for another day or two. I want to try few things first.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 13, 2013 3:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pev69]]></name></author>
<updated>2013-08-13T15:17:52-07:00</updated>
<published>2013-08-13T15:17:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5679#p5679</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5679#p5679"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5679#p5679"><![CDATA[
Wow, yes, that's it! There is a &quot;Steam Support Center&quot; shortcut in my start menu Steam folder that causes the same install popup to appear!<br /><br />Could this somehow be improved in the new Classic Shell, some sort of alternate behaviour or at least a notification to the user of the real problem? Or is this MSI mechanism such that it cannot be meddled with?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1346">pev69</a> — Tue Aug 13, 2013 3:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-13T14:42:13-07:00</updated>
<published>2013-08-13T14:42:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5678#p5678</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5678#p5678"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5678#p5678"><![CDATA[
Ah, I see. Now it is starting to make sense.<br /><br />Some features that are new for version 3.9.0 need to know the target EXE for each shortcut. Some shortcuts (so-called &quot;advertised&quot; shortcuts) don't actually store their target but rely on the MSI system to resolve them. So if such shortcut is considered corrupted, MSI will try to repair it. I think that's what you are seeing.<br />It is hard to know which particular shortcut is triggering this behavior. Try launching all of Steam's shortcuts and see if one of them complains. You can do that in version 3.6.8. You can do that even from Explorer, just so we exclude Classic Shell from the process.<br /><br />The reason you are seeing this error after installation is that when the start menu is launched it scans all shortcuts and grabs their targets. Search may be doing something similar.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 13, 2013 2:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pev69]]></name></author>
<updated>2013-08-13T14:20:28-07:00</updated>
<published>2013-08-13T14:20:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5677#p5677</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5677#p5677"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5677#p5677"><![CDATA[
Sorry for not being clear enough, it is not either installer, but rather (as I understand it) from the msi installer process itself, as seen in the attached picture (which is similar to Tiggaa's picture, only this time in english <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />).<br /><br />When this has happened, there are two warning events (source: MsiInstaller) in the application event log with details:<br /><br />1) Detection of product '{048298C9-A4D3-490B-9FF9-AB023A9238F3}', feature 'Steam_Base', component '{17D4903C-068A-47A0-9753-EDF4909D42FF}' failed. The resource 'D:\Program Files (x86)\Steam\Support.url' does not exist.<br />2) Detection of product '{048298C9-A4D3-490B-9FF9-AB023A9238F3}', feature 'Steam_Base' failed during request for component '{17D4903C-068A-47A0-9753-EDF4909D42FF}'<br /><br />and one error event (source: MsiInstaller) with details:<br /><br />3) Product: Steam -- Error 1706. No valid source could be found for product Steam. Windows Installer cannot continue.<br /><br />And as I said Steam itself is working OK, no problems in running Steam or games from it.<br /> <br />EDIT: The number and paranthesis in front of the event details above are just my additions for possible referencing in further discussion <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1346">pev69</a> — Tue Aug 13, 2013 2:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-13T13:13:08-07:00</updated>
<published>2013-08-13T13:13:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5672#p5672</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5672#p5672"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5672#p5672"><![CDATA[
OK, this looks serious. I don't have any ideas how to troubleshot it though.<br /><br />The first step is to have a reliable repro case. From what you are saying, every time you do a search, an installer pops up. Is this the steam installer or the Outlook installer?<br /><br />Can you see in the event viewer if there are any errors related to steam or outlook?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 13, 2013 1:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pev69]]></name></author>
<updated>2013-08-13T12:20:42-07:00</updated>
<published>2013-08-13T12:20:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5670#p5670</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5670#p5670"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5670#p5670"><![CDATA[
I have the exact same problem with 3.9.0 as Tiggaa here about the installer popup, except for me it is for Steaminstall.msi (and I have english Win7 Home premium 64-bit). I have had Steam installed a long time and it still works OK. The installer popup appears right after dismissing the Classic shell (3.9.0) &quot;install complete&quot; (or whatever it says) window, and then also every time right after restarting windows. Everything (including Classic shell 3.9.0) seems to otherwise work fine in windows except for these two things:<br />1) Outlook 2010 complains about not being the default mail program anymore, and cannot load images in mails; this happens every time when starting Outlook and it starts working properly only after doing a repair install of Outlook.<br />2) When trying to type something in the classic start menu search box, the installer popup also appears immediately (how odd!).<br />I have tried alternating between 3.6.8 and 3.9.0 a few times, always uninstalling the other first, restarting computer and then installing the other. Always the result is the same: 3.6.8 works without problems, and 3.9.0 causes the same problems.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1346">pev69</a> — Tue Aug 13, 2013 12:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-24T12:46:41-07:00</updated>
<published>2013-07-24T12:46:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5047#p5047</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5047#p5047"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5047#p5047"><![CDATA[
When you install 3.9.0 for the first time it does a one-time transfer of your old settings to the new ones. If you went back to 3.6.8 and changes some settings, then installed 3.9.0 again, the changes will not be transferred.<br />The transfer is not perfect. In some cases settings can be lost (for example if you some third-party skins).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 24, 2013 12:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tiggaa]]></name></author>
<updated>2013-07-24T12:41:09-07:00</updated>
<published>2013-07-24T12:41:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5046#p5046</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5046#p5046"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5046#p5046"><![CDATA[
News<br />After finishing backup of my Desktop PC i decided to install 3.9.0, do not care about known problems on my Laptop.<br />I can't explain why, but everything went fine. Its working, no error message. Hit Finish Button on Install Finished Window and it was done. Restarted Comp to be sure: still okay. But no bmp.msi on Desktop PC to be found.<br />Found Differences: Install on Desktop PC changes skin away from wanted smoked glass, but i am able to reconfigure it without problems.<br />On Laptop at first i wasn't able to do same. 3.9.0 keeps default system colors. Then i noticed: some posssible Options of Smoked Glas Skin were gone, hit Reset Skin Button gave it back. Done this i suddenly got able to switch to / use this skin.<br />No changing on that error popup window.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1160">Tiggaa</a> — Wed Jul 24, 2013 12:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tiggaa]]></name></author>
<updated>2013-07-24T08:56:02-07:00</updated>
<published>2013-07-24T08:56:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5024#p5024</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5024#p5024"/>
<title type="html"><![CDATA[Re: Install Beta over 3.6.8]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=898&amp;p=5024#p5024"><![CDATA[
<strong>Posted:</strong> Mon Jul 22, 2013 10:53 pm --&gt; &quot; ... there is never such folder and search of complete PC tells me: no such file on all my HDD.&quot; <br />As written i searched my complete PC (Desktop PC + Laptop) to find any bmp.msi in any location. There are no more settings like : hide some system files / folders or something like that. So all possible folders were checked. I adviced check too, to check inside packed files / archieves too. I even checked all software installed or no more / not yet installed Software on my HDD too.<br />I did that in front of register to this Forum. In Fact, because of there was not even one found bmp.msi file i decided to register.<br /><br />To answer your Question: yes, i did install again this time / point of try &amp; error. Did not help..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1160">Tiggaa</a> — Wed Jul 24, 2013 8:56 am</p><hr />
]]></content>
</entry>
</feed>