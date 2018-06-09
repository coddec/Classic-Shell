<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=1404" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-10-14T11:45:02-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=1404</id>
<entry>
<author><name><![CDATA[MainTrane]]></name></author>
<updated>2013-10-14T11:45:02-07:00</updated>
<published>2013-10-14T11:45:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7317#p7317</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7317#p7317"/>
<title type="html"><![CDATA[Re: Persistent 'remove from this list']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7317#p7317"><![CDATA[
Thanks for taking the time to inform me on all of this.<br />I will try my hand at tweaking the relevant registry data.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1804">MainTrane</a> — Mon Oct 14, 2013 11:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-12T19:43:58-07:00</updated>
<published>2013-10-12T19:43:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7266#p7266</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7266#p7266"/>
<title type="html"><![CDATA[Re: Persistent 'remove from this list']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7266#p7266"><![CDATA[
Well since from your signature it is apparent that you are familiar with 7+ Taskbar Tweaker. It has a Taskbar Inspector feature which lets you view the AppID of the running desktop app. For Modern apps installed from the Store, a quick way to see the AppID is the %LocalAppData%\Microsoft\Windows\Application Shortcuts folder. You can also see the AppID in the Registry as that MSDN article says.<br /><br /><br /><br />The way to hide a shortcut that uses AppIDs is to create a subkey NoStartPageAppUserModelIDs at HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\FileAssociation and add the AppUserModelID there as string value. AppUserModelID can be found by going to key at HKCR\ActivatableClasses\Package\&lt;packagename&gt;\Server\&lt;packagefullname&gt; string value AppUserModelID.<br /><br />Or you can type shell:::{4234d49b-0245-4df3-b780-3893943456e1} into the Run dialog/Start Menu's search box and enable the AppUserModellID column for the folder that opens, switch to details view to view the AppUserModelID.<br /><br /><br />Yes I know it's a rather annoying and painful process to block shortcuts by their AppID. NoStartPage is easier. If you can get TweakUI running on Windows 7, it lets you hide shortcuts by adding NoStartPage. The 32-bit version of TweakUI released by Microsoft works on Windows 7 32-bit in XP compatibility mode+set to Run as Administrator. For 64-bit Windows 7, you need to download the 64-bit version of TweakUI from <!-- m --><a class="postlink" href="http://neosmart.net/TweakUI/">http://neosmart.net/TweakUI/</a><!-- m --> and also get Microsoft's Application Compatibility Toolkit 5.6, run the Compatibility Administrator tool as admin. Create a shim (Application Fix) for TweakUI with the Win2k3SP1VersionLie and Run as admin.<br /><br /><br />Maybe someone in the community can code an app to hide frequent programs that adds NoStartPage as well as the AppUserModelID for shortcuts that use it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Oct 12, 2013 7:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-10-12T16:59:43-07:00</updated>
<published>2013-10-12T16:59:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7261#p7261</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7261#p7261"/>
<title type="html"><![CDATA[Re: Persistent 'remove from this list']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7261#p7261"><![CDATA[
The registry settings are in the HKLM parts of the registry, which are only accessible by admins. The start menu runs as a normal user and has no write access there.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Oct 12, 2013 4:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MainTrane]]></name></author>
<updated>2013-10-12T16:36:55-07:00</updated>
<published>2013-10-12T16:36:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7260#p7260</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7260#p7260"/>
<title type="html"><![CDATA[Re: Persistent 'remove from this list']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7260#p7260"><![CDATA[
Thanks for the informative help Gaurav.<br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Windows Start Menu in Windows 7 does not respect NoStartPage.<br /></div>I'm on Win7 (x64). One question. How do I retrieve a programs AppID?<br /><br />It's going to be a pain in the neck to locate &amp; enter each AppUserModelID on a case by case basis into the registry, ++ do likwise for Classic Shell with NoStartPage (dozens of entries over time). A tweak to the current 'remove from this list' command would make this a breeze for any user. So, I'll still hold out hope that my original request is considered by the Classic Shell dev team.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1804">MainTrane</a> — Sat Oct 12, 2013 4:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-12T11:18:42-07:00</updated>
<published>2013-10-12T11:18:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7249#p7249</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7249#p7249"/>
<title type="html"><![CDATA[Re: Persistent 'remove from this list']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7249#p7249"><![CDATA[
• To permanently hide a program from the Classic Start Menu's Frequent list, use this &quot;NoStartPage&quot; method: <!-- m --><a class="postlink" href="http://support.microsoft.com/kb/284198">http://support.microsoft.com/kb/284198</a><!-- m -->.<br />• To permanently hide a Modern app shortcut or some new desktop app shortcuts from the MFU list which won't hide with &quot;NoStartPage&quot; (some new desktop app shortcuts use AppUserModelIDs), use this method: <a href="http://msdn.microsoft.com/en-us/library/windows/desktop/dd378459(v=vs.85).aspx" class="postlink">http://msdn.microsoft.com/en-us/library/windows/desktop/dd378459(v=vs.85).aspx</a><br /><br />Windows Start Menu in Windows 7 does not respect NoStartPage.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Oct 12, 2013 11:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MainTrane]]></name></author>
<updated>2013-10-12T10:55:02-07:00</updated>
<published>2013-10-12T10:55:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7248#p7248</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7248#p7248"/>
<title type="html"><![CDATA[Persistent 'remove from this list']]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1404&amp;p=7248#p7248"><![CDATA[
An option to make removal of items from the frequently/recently used list more permanent (for both the default Windows start menu and the Classic Shell start menu) would be much appreciated. Items constantly reappear when their shortcuts are accessed again; retaining their highly accessed position to boot <img src="http://www.classicshell.net/forum/images/smilies/icon_e_surprised.gif" alt=":o" title="Surprised" /> .<br /><br />- jermain<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1804">MainTrane</a> — Sat Oct 12, 2013 10:55 am</p><hr />
]]></content>
</entry>
</feed>