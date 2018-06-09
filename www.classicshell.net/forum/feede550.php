<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=463" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-04-02T09:59:11-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=463</id>
<entry>
<author><name><![CDATA[beejay33]]></name></author>
<updated>2013-04-02T09:59:11-07:00</updated>
<published>2013-04-02T09:59:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2413#p2413</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2413#p2413"/>
<title type="html"><![CDATA[Re: Delay before Classic Menu starts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2413#p2413"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Try merging this (paste this into notepad, save as a .REG file and merge) or create such a value manually in the registry:<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon]<br />&quot;TaskMan&quot;=&quot;C:\\Program Files\\Classic Shell\\ClassicStartMenu.exe&quot;<br /><br />Then Classic Shell will start much faster on Windows 8.<br /></div>Many thanks, that seems to have done the trick <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=522">beejay33</a> — Tue Apr 02, 2013 9:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-01T10:58:52-07:00</updated>
<published>2013-04-01T10:58:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2405#p2405</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2405#p2405"/>
<title type="html"><![CDATA[Re: Delay before Classic Menu starts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2405#p2405"><![CDATA[
Try merging this (paste this into notepad, save as a .REG file and merge) or create such a value manually in the registry:<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon]<br />&quot;TaskMan&quot;=&quot;C:\\Program Files\\Classic Shell\\ClassicStartMenu.exe&quot;<br /><br />Then Classic Shell will start much faster on Windows 8.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Apr 01, 2013 10:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-04-01T07:42:12-07:00</updated>
<published>2013-04-01T07:42:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2404#p2404</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2404#p2404"/>
<title type="html"><![CDATA[Re: Delay before Classic Menu starts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2404#p2404"><![CDATA[
From your description it looks like the service starts, but quite late. Try putting a link to ClassicStartMenu.exe in your startup folder. It should start a bit faster, like 5-10 seconds.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Apr 01, 2013 7:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[beejay33]]></name></author>
<updated>2013-04-01T05:35:11-07:00</updated>
<published>2013-04-01T05:35:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2402#p2402</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2402#p2402"/>
<title type="html"><![CDATA[Delay before Classic Menu starts]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=463&amp;p=2402#p2402"><![CDATA[
Hi Everyone,<br />Firstly, fantastic 'life'saver' program that has stopped me from having to replace Win 8 with Win 7 on my new PC thanks to all involved.<br /><br />My 'minor' problem is that no matter what I do, (I have all the correct boxes checked) there is a delay of about 30 seconds before the Metro screen is replaced by the Classic Menu of choice.<br /><br />I have search other posts and found a few things to try but it is still the same. The service is running in 'Automatic' mode and the registry value for the service remains a t'2' (one of the posts suggested it got change each boot up to '3' (Manual) but this is not the case.<br /><br />I have a new Dell XPS 8500 with 32Gb cache SSD and I wonder if the 'Intel's Smart Response Technology' is causing a problem or whether it is something else?<br /><br />I could live with this I suppose, but if anyone has any helpful suggestions to get it to get there more quickly, I would be gratedful<br /><br />thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=522">beejay33</a> — Mon Apr 01, 2013 5:35 am</p><hr />
]]></content>
</entry>
</feed>