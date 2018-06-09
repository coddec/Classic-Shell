<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=916" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-20T13:04:37-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=916</id>
<entry>
<author><name><![CDATA[studog]]></name></author>
<updated>2013-07-20T13:04:37-07:00</updated>
<published>2013-07-20T13:04:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4916#p4916</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4916#p4916"/>
<title type="html"><![CDATA[Re: Tearing in the left Explorer Navigationpane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4916#p4916"><![CDATA[
ttc, you don't specify which Windows you're running, so I don't know if this will help or not: these instructions are for Windows 7 x64. Also note these are my personal instructions, me talking to myself.<br />And the whitespace has been clobbered.<br /><br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&gt; These attributes are SFGAO_ values (see below)<br /># NOTE:<br /># Hiding User Libraries has been deprecated in favour of disabling by removal from the namespace<br /># This has the side effect of forcing shortcuts to certain folders to operate in the &quot;Computer&quot; namespace<br /># and thus auto-navigate properly; affected folders are user folders like Downloads, My Videos, etc<br /># - hide User Libraries from navigation pane<br /># &#91;HKEY_CLASSES_ROOT\CLSID\{031E4825-7B94-4dc3-B131-E946B44C8DD5}\ShellFolder&#93;<br /># &quot;Attributes&quot;=dword:b090010d ; was b080010d<br /># &#91;HKEY_CLASSES_ROOT\Wow6432Node\CLSID\{031E4825-7B94-4dc3-B131-E946B44C8DD5}\ShellFolder&#93;<br /># &quot;Attributes&quot;=dword:b090010d ; was b080010d<br />- disable User Libraries<br />&#91;-HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\Desktop\NameSpace\{031E4825-7B94-4dc3-B131-E946B44C8DD5}&#93;<br />; Revert to original values<br />; &#91;HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\Desktop\NameSpace\{031E4825-7B94-4dc3-B131-E946B44C8DD5}&#93;<br />; @=&quot;UsersLibraries&quot;<br />; &quot;Removal Message&quot;=&quot;@shell32.dll,-9047&quot;<br />&#91;-HKEY_LOCAL_MACHINE\SOFTWARE\Wow6432Node\Microsoft\Windows\CurrentVersion\explorer\Desktop\NameSpace\{031E4825-7B94-4dc3-B131-E946B44C8DD5}&#93;<br />; Revert to original values<br />; &#91;HKEY_LOCAL_MACHINE\SOFTWARE\Wow6432Node\Microsoft\Windows\CurrentVersion\explorer\Desktop\NameSpace\{031E4825-7B94-4dc3-B131-E946B44C8DD5}&#93;<br />; @=&quot;UsersLibraries&quot;<br />; &quot;Removal Message&quot;=&quot;@shell32.dll,-9047&quot;<br />- hide user files from navigation pane<br />&#91;HKEY_CLASSES_ROOT\CLSID\{59031a47-3f72-44a7-89c5-5595fe6b30ee}\ShellFolder&#93;<br />&quot;Attributes&quot;=dword:f094012d ; was f084012d<br />&#91;HKEY_CLASSES_ROOT\Wow6432Node\CLSID\{59031a47-3f72-44a7-89c5-5595fe6b30ee}\ShellFolder&#93;<br />&quot;Attributes&quot;=dword:f094012d ; was f084012d<br />- hide Control Panel from navigation pane<br />&#91;HKEY_CLASSES_ROOT\CLSID\{26EE0668-A00A-44D7-9371-BEB064C98683}\ShellFolder&#93;<br />&quot;Attributes&quot;=dword:a0100004 ; was a0000004<br />&#91;HKEY_CLASSES_ROOT\Wow6432Node\CLSID\{26EE0668-A00A-44D7-9371-BEB064C98683}\ShellFolder&#93;<br />&quot;Attributes&quot;=dword:a0100004 ; was a0000004<br />&gt; These attributes are NOT SFGAO_ values<br />- hide Favorites from navigation pane<br />&#91;HKEY_CLASSES_ROOT\CLSID\{323CA680-C24D-4099-B94D-446DD2D7249E}\ShellFolder&#93;<br />&quot;Attributes&quot;=dword:a0d00100 ; was a0900100<br />&#91;HKEY_CLASSES_ROOT\Wow6432Node\CLSID\{323CA680-C24D-4099-B94D-446DD2D7249E}\ShellFolder&#93;<br />&quot;Attributes&quot;=dword:a0d00100 ; was a0900100</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=855">studog</a> — Sat Jul 20, 2013 1:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-07-15T14:30:46-07:00</updated>
<published>2013-07-15T14:30:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4752#p4752</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4752#p4752"/>
<title type="html"><![CDATA[Re: Tearing in the left Explorer Navigationpane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4752#p4752"><![CDATA[
yea the reason classic shell doesn't is that editing the registry is pretty much the only way to do it... and can cause major problems in some cases (like yours <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" />)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Jul 15, 2013 2:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ttc]]></name></author>
<updated>2013-07-14T06:39:54-07:00</updated>
<published>2013-07-14T06:39:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4723#p4723</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4723#p4723"/>
<title type="html"><![CDATA[Re: Tearing in the left Explorer Navigationpane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4723#p4723"><![CDATA[
I could Not reverse it, but somehow i destroyed the ability to open any Explorer Windows <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> <br /><br />Well, its my private PC, so maybe in the Winter I'll install a fresh Windows, for now recovering a Trueimage from One Month ago took 7 minutes... no real harm done.<br /><br />I would of cause LOVE a well programmed Option in Classic Shell to hide stuff like favorites and bibliothekes, but i guess theres a good reason that there is not.<br /><br />I dont wanna bash Bibliothekes, i just don't need/want them<br /><br />Best regards<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1096">ttc</a> — Sun Jul 14, 2013 6:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ttc]]></name></author>
<updated>2013-07-13T11:39:14-07:00</updated>
<published>2013-07-13T11:39:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4709#p4709</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4709#p4709"/>
<title type="html"><![CDATA[Re: Tearing in the left Explorer Navigationpane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4709#p4709"><![CDATA[
HOT DAMN <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />That's exactly what i did... <br /><br />Wanting to have ones own order ain't for free it seems...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1096">ttc</a> — Sat Jul 13, 2013 11:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-13T08:20:33-07:00</updated>
<published>2013-07-13T08:20:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4708#p4708</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4708#p4708"/>
<title type="html"><![CDATA[Re: Tearing in the left Explorer Navigationpane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4708#p4708"><![CDATA[
I think I've seen it when I used a registry hack to hide Favorites.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Jul 13, 2013 8:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ttc]]></name></author>
<updated>2013-07-13T08:11:11-07:00</updated>
<published>2013-07-13T08:11:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4707#p4707</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4707#p4707"/>
<title type="html"><![CDATA[Tearing in the left Explorer Navigationpane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=916&amp;p=4707#p4707"><![CDATA[
Hello,<br /><br />a little bug on my system doesn't seem to be only Classic Shell related, as after resetting to standard values, the error still apears, but just for a few Milliseconds, then it refreshes/reloads and the visual glitch is corrected.<br /><br />Perhaps someone can hint at something... but first, let's see what im writing about in the attachment...<br /><br /><br /><br />Not to forget, thanks for the help and the great and really greatly needed Programs of Classic Shell, i worked professionally with Win XP for over a decade (since SP2 <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />) and could work it like a Savant, the missing explorer window (one with, the other(s) without navigation pane) alone slows down my &quot;productivity&quot; by a lot... at least it all is bearable thanks to classic shell...<br /><br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1096">ttc</a> — Sat Jul 13, 2013 8:11 am</p><hr />
]]></content>
</entry>
</feed>