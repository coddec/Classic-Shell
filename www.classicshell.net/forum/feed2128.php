<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=5305" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-10-27T08:41:02-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=5305</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-10-27T08:41:02-07:00</updated>
<published>2015-10-27T08:41:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23177#p23177</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23177#p23177"/>
<title type="html"><![CDATA[Re: Second Instance of Explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23177#p23177"><![CDATA[
This has nothing to do with Classic Shell. It is a Windows setting. It is supposed to stick.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Oct 27, 2015 8:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Novaklone]]></name></author>
<updated>2015-10-27T08:39:05-07:00</updated>
<published>2015-10-27T08:39:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23176#p23176</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23176#p23176"/>
<title type="html"><![CDATA[Re: Second Instance of Explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23176#p23176"><![CDATA[
That makes sense... I honestly can't say what for sure is causing the explorer.exe to crash, All of the error messages give me an unknown faulting module... I just know that it is only happening to this one instance of explore.exe and not the other.<br /><br />Is it common for this setting to stick even after uninstalling Classic Shell? I am almost tempted to delete the registry entry just to see if it will at least stop the second instance.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11860">Novaklone</a> — Tue Oct 27, 2015 8:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-10-27T08:10:00-07:00</updated>
<published>2015-10-27T08:10:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23175#p23175</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23175#p23175"/>
<title type="html"><![CDATA[Re: Second Instance of Explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23175#p23175"><![CDATA[
It is an Explorer setting named &quot;Launch folder windows in a separate process&quot;.<br />However in my experience it makes Explorer crash less, not more.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Oct 27, 2015 8:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Novaklone]]></name></author>
<updated>2015-10-27T05:42:10-07:00</updated>
<published>2015-10-27T05:42:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23171#p23171</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23171#p23171"/>
<title type="html"><![CDATA[Second Instance of Explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5305&amp;p=23171#p23171"><![CDATA[
I have had this issue for weeks now occurring on another user's machine. Windows 7, 32 Bit system, 4 Gigs of RAM.<br /><br />Explorer.exe crashes without rhyme or reason.<br /><br />When i first noticed the issue, i thought it was weird that her desktop icons and task bar never disappeared... just the folder window she had opened.<br /><br />After weeks of uninstalling this and that... I finally noticed a second instance of Explorer.exe that only pops up when browsing folders. I googled everything I could think of, and finally came across the nifty Process Explorer. When i check the properties of the command line of the second explorer that keeps crashing, i see this:<br /><br />c:\windows\explorer.exe /factory,{ceff45ee-c862-41de-aee2-a022c81eda92} -embedding<br /><br />I searched that entire string, and learned that {ceff45ee-c862-41de-aee2-a022c81eda92} is actually a value in the registry. When I google that value itself, it led me to this very forum.<br /><br />In regards to Classic Shell, one of the first things i did was disable the shell extensions to see if that would disable the second instance running every time a folder was open. Nothing changed.<br /><br />I then went ahead and completely uninstalled classic shell. Nothing Changed. At all. <br /><br />Is classic shell known for editing this registry value? How can I stop this second instance of explorer.exe from starting?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11860">Novaklone</a> — Tue Oct 27, 2015 5:42 am</p><hr />
]]></content>
</entry>
</feed>