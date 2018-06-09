<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=87" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-01-15T22:51:31-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=87</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-15T22:51:31-07:00</updated>
<published>2013-01-15T22:51:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=316#p316</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=316#p316"/>
<title type="html"><![CDATA[Re: Classic menu disappered]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=316#p316"><![CDATA[
Btw Classic Shell only includes translation for toolbar labels, the Explorer UI and the start menu items. If you are interested in fully translating Classic Shell to Norwegian (like the settings UI etc), let us know here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jan 15, 2013 10:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[W8classic]]></name></author>
<updated>2013-01-15T09:54:30-07:00</updated>
<published>2013-01-15T09:54:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=290#p290</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=290#p290"/>
<title type="html"><![CDATA[Re: Classic menu disappered]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=290#p290"><![CDATA[
I found a way that works.<br /><br />When trying to reinstall, I rather tried this :<br /><br /><img src="http://i47.tinypic.com/260vok8.jpg" alt="" /><br /><br /><br />&quot;Feilsøk kompabilitet&quot; is in Norwegian , and means something like &quot; scan for compatibility error&quot;<br />After fixing that error , I could install the Classic Shell again.<br /><br />Thanks for the help <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><br /><br /><br />Edit:  Maybe one reason to the problems could be that W8  made some updates 1 days ago ?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=139">W8classic</a> — Tue Jan 15, 2013 9:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-15T09:18:05-07:00</updated>
<published>2013-01-15T09:18:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=287#p287</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=287#p287"/>
<title type="html"><![CDATA[Re: Classic menu disappered]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=287#p287"><![CDATA[
This message is shown by the installer if it cannot locate msiexec.exe. Is it possible it is not in the path? A damaged path setting can cause all sorts of problems. Maybe it was the cause of the initial problem before uninstalling.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jan 15, 2013 9:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[W8classic]]></name></author>
<updated>2013-01-15T09:11:24-07:00</updated>
<published>2013-01-15T09:11:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=284#p284</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=284#p284"/>
<title type="html"><![CDATA[Re: Classic menu disappered]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=284#p284"><![CDATA[
I ran the SFC/scannow. It took some time , but it is okay.<br />It did not ask me to restart.<br /><br />Then I checked the Windows installer , and it is running.<br /><br />I restated the computer , but the same error message popped up again. <br /><br />I then tried to install a lot of other programs , and they installed perfectly.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=139">W8classic</a> — Tue Jan 15, 2013 9:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-15T08:15:45-07:00</updated>
<published>2013-01-15T08:15:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=278#p278</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=278#p278"/>
<title type="html"><![CDATA[Re: Classic menu disappered]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=278#p278"><![CDATA[
Looks like your Windows Installer is damaged. From an elevated (admin) command prompt, run: SFC /scannow and let it complete. Restart if it says so, then try running Classic Shell setup again. Check in Services.msc if Windows Installer service is running.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jan 15, 2013 8:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[W8classic]]></name></author>
<updated>2013-01-15T07:51:24-07:00</updated>
<published>2013-01-15T07:51:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=277#p277</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=277#p277"/>
<title type="html"><![CDATA[Classic menu disappered]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=87&amp;p=277#p277"><![CDATA[
I have installed the classic menu on my new W8 , and i worked fine for about 1 week.<br /><br />Today when starting up my computer , the classic button down on the left side was not there anymore.<br /><br />I removed the classic shell , and tried to reinstall it.<br />It did not work , I got this message:<br /><br /><img src="http://i46.tinypic.com/v7xcv8.jpg" alt="" /><br /><br /><br />I even tried to install 3.64 - 3.63 - 3.62 and got the same message.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=139">W8classic</a> — Tue Jan 15, 2013 7:51 am</p><hr />
]]></content>
</entry>
</feed>