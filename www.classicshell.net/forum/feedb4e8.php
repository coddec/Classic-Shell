<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=5703" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-02-15T04:34:06-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=5703</id>
<entry>
<author><name><![CDATA[derekmines]]></name></author>
<updated>2016-02-15T04:34:06-07:00</updated>
<published>2016-02-15T04:34:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25337#p25337</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25337#p25337"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25337#p25337"><![CDATA[
Hi Ivo<br /><br />Thanks for all the help.<br />Unfortunately somehow (I have no idea how) I seem to have locked myself out of the classic shell control panel on my 2 RDS servers<br />I've been through all of my GPOs and can't see anything that would stop access but it simply won't open.<br /><br />Are there any back door ways into it or am I going to have to uninstall and start again?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12701">derekmines</a> — Mon Feb 15, 2016 4:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-13T09:39:45-07:00</updated>
<published>2016-02-13T09:39:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25306#p25306</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25306#p25306"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25306#p25306"><![CDATA[
According to your log file, these are already done:<br /><strong>Disable Right Click on Classic Shell Menus</strong><br /><strong>Remove 'start screen' shortcut from the Start Menu</strong><br /><br />Are they not working for you?<br /><br />About the rest:<br /><strong>Remove 'this PC' shortcut from the Start Menu</strong> - in the policy &quot;Menu items for classic menu with one column&quot; remove the item ComputerItem<br /><strong>Under start menu / programs subgroup remove pictures and system tools</strong> - you can't suppress certain programs via policies. If a file is in the Start Menu folder it will be shown in the start menu. Unless you delete it or hide it.<br /><strong>Disable Right Click on start button</strong> - you are almost there. By now you should only have the Help and Exit left in the menu. Disable Exit with the policy &quot;Enable Exit&quot;. Disable the help by deleting the CHM file from the installation. Once you disable all items, the menu will not open.<br /><strong>Remove 'last run' programs from the Start Menu</strong> - I don't know what &quot;last run&quot; is<br /><strong>Remove the charms bar and time and date popup</strong> - Not a Classic Shell feature<br /><strong>Remove Right click on toolbar (clock etc)</strong> - Not a Classic Shell feature<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 13, 2016 9:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[derekmines]]></name></author>
<updated>2016-02-13T06:26:13-07:00</updated>
<published>2016-02-13T06:26:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25305#p25305</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25305#p25305"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25305#p25305"><![CDATA[
It's not quite as straightforward as that sadly, the settings that I set via Group Policy on the domain controller are pushed out to all the students who log in, that's fine.<br /><br />The issue is that not all of the settings that I need to set can be done within Group Policy, some seem to need to be done on the registry, obviously I can't do that on the registry on the domain controller as that doesn't have classic shell installed, so has no classic shell settings within its registry.<br />If I set the registry settings on the RDS server then it's fine for whichever user is logged in when I make those registry changes but when another person logs in to the RDS server they don't get those settings applied.<br /><br />The easiest way around this would be either for someone to tell me how to apply registry settings to all users from within group policy (I know the theory but not the correct syntax) or if I have actually missed Group Policy settings that do what I need (hence listing out what I need on a previous post)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12701">derekmines</a> — Sat Feb 13, 2016 6:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-12T15:22:04-07:00</updated>
<published>2016-02-12T15:22:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25289#p25289</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25289#p25289"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25289#p25289"><![CDATA[
I was asking about what specific Classic Shell setting you've set via GPO, that is currently not working for you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Feb 12, 2016 3:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[derekmines]]></name></author>
<updated>2016-02-12T15:16:46-07:00</updated>
<published>2016-02-12T15:16:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25288#p25288</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25288#p25288"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25288#p25288"><![CDATA[
So, I've run it on both the Domain Controller and the RDS server, file outputs attached.<br /><br />In terms of the functionality I'm missing, these are the things that I still need to lock down before I can allow the students to log on, I'm aware that not all of these are controlled by Classic Shell, but I list them all here for completeness.<br /><br />Disable Right Click on Classic Shell Menus (including the start button)<br />Remove 'last run' programs from the Start Menu<br />Remove 'start screen' shortcut from the Start Menu<br />Remove 'this PC' shortcut from the Start Menu<br />Under start menu / programs subgroup remove pictures and system tools (or at least remove computer and file explorer from the system tools menu)<br />Remove the charms bar and time and date popup<br />Remove Right click on toolbar (clock etc) (I have already removed right click for the desktop icons)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12701">derekmines</a> — Fri Feb 12, 2016 3:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-12T13:28:10-07:00</updated>
<published>2016-02-12T13:28:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25284#p25284</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25284#p25284"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25284#p25284"><![CDATA[
Run it on the exact machine/account where the problem exists.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Feb 12, 2016 1:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[derekmines]]></name></author>
<updated>2016-02-12T13:11:03-07:00</updated>
<published>2016-02-12T13:11:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25283#p25283</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25283#p25283"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25283#p25283"><![CDATA[
No issues, I can do that.<br /><br />Which machine would you like me to run it from?<br /><br />The domain controller (doesn't have classic shell installed but does control all our Group Policy processing<br />The RDS server (does have classic shell installed but I can only log in locally to it using the domain admin a/c and that is excluded from most Group Policy processing<br />The RDS client's local session (has classic shell installed, all Group Policy processed)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12701">derekmines</a> — Fri Feb 12, 2016 1:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-12T12:57:47-07:00</updated>
<published>2016-02-12T12:57:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25277#p25277</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25277#p25277"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25277#p25277"><![CDATA[
If you are sure you set the group policies correctly, and they still don't show up on the user accounts, let's do this test:<br />Download the Classic Shell Utility from here: <!-- m --><a class="postlink" href="http://www.classicshell.net/downloads/">http://www.classicshell.net/downloads/</a><!-- m --><br />Run it, save a system log, and attach it here.<br />Also list all settings that you modified and you expect to be applied to that account.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Feb 12, 2016 12:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[derekmines]]></name></author>
<updated>2016-02-12T11:40:32-07:00</updated>
<published>2016-02-12T11:40:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25268#p25268</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25268#p25268"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25268#p25268"><![CDATA[
OK, so I've just confirmed that the above is the case, I changed a setting within Group Policy for Classic Shell and it's applied to all students who log in.<br />That's not an issue, I just need to find where in group policy a couple of the options are set and I should be away.<br /><br />I'm assuming setting it up this way around is supported?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12701">derekmines</a> — Fri Feb 12, 2016 11:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[derekmines]]></name></author>
<updated>2016-02-12T11:30:37-07:00</updated>
<published>2016-02-12T11:30:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25266#p25266</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25266#p25266"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25266#p25266"><![CDATA[
On both the RDS servers, when I log in as Administrator I see the classic shell menu.<br /><br />When I log in any of the students to the thin client machines, I also get the classic shell menu, but it's not got the same skin as those on the admin accounts when I log directly into the servers. <br />The strange thing is that the students all get the same menu, it just isn't the one that I set up under the Administrator login on the RDS servers.<br /><br />I imported the ADMX etc tools into Group Policy on my domain controller (the domain controller is actually a third server that I don't want the start menu installed on) and I have one or two settings set through Group Policy.<br /><br />Is it possible somehow that what the students are picking up is some sort of classic shell setup from group policy on the domain controller rather than from the RDS servers?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12701">derekmines</a> — Fri Feb 12, 2016 11:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-12T10:58:47-07:00</updated>
<published>2016-02-12T10:58:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25262#p25262</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25262#p25262"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25262#p25262"><![CDATA[
First let's confirm that those users are getting the classic start menu at all. Otherwise no amount of settings are going to make a difference.<br />Are you seeing the Classic Shell menu for them?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Feb 12, 2016 10:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[derekmines]]></name></author>
<updated>2016-02-12T10:38:17-07:00</updated>
<published>2016-02-12T10:38:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25261#p25261</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25261#p25261"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25261#p25261"><![CDATA[
So in theory what you're saying makes perfect sense....<br /><br />Unfortunately the reality is a little different.<br /><br />Both of my RDS servers now have identical start menus that are close to exactly how I want them to appear for users.<br /><br />Unfortunately users aren't picking up the start menus from the RDS servers when they log in.....<br />I'm not sure where they are getting their settings from, they're getting sort of a halfway house of settings where some of the settings are the same as I have set on the 2 servers but others are not.<br /><br />I have checked the registry entries that you mention on both RDS servers and they are identical (which accounts for the reason that both servers have identical start menus<br /><br />The bit I'm missing seems to be how to make it so that whoever logs in to these 2 servers get the same start menu settings as the administrators of those servers get currently<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12701">derekmines</a> — Fri Feb 12, 2016 10:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-02-12T09:12:44-07:00</updated>
<published>2016-02-12T09:12:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25253#p25253</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25253#p25253"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25253#p25253"><![CDATA[
I have no experience with RDS or domains so I may be wrong but as I understand, you don't need to install Classic Shell on the thin client since it RDPs into the Remote Desktop Server. You need to configure Classic Shell on one of the RDS servers which as I understand is also your domain controller. Export the REG on it from the HKCU branch. Open it in a text editor and find and replace HKCU\Software\IvoSoft\ClassicStartMenu\Settings by HKLM\Software\IvoSoft\ClassicStartMenu. Then merge the same reg again on the same RDS domain controller. After that you will have to restart the Start menu on the RDS computer by right clicking it and choosing Exit. Start it again from C:\Program Files\Classic Shell\ClassicStartMenu.exe. Only after restarting it, the Registry changes made directly will take effect.<br /><br />After this, the thin client that connects to that RDS server will get the same Start menu which the RDS server has. If there are other standalone clients (non thin-clients) or servers in your domain, then only on those, you need to install Classic Shell but configure the Classic Shell Group Policy settings on the *domain controller*, so that after gpupdate /force, they will get the same configuration.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Feb 12, 2016 9:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-02-12T09:12:22-07:00</updated>
<published>2016-02-12T09:12:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25252#p25252</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25252#p25252"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25252#p25252"><![CDATA[
I don't fully understand the whole RDS server and thin client thing. But here are some facts:<br />* You should not have to install Classic Shell multiple times on the same machine (same Windows installation). It gets installed in C:\Program Files and should work for all users<br />* Of course if you uninstall Classic Shell, then no amount of GPO settings will make it work<br />* When you edit the settings using the settings dialog, they are saved in HKCU\Software\IvoSoft. Classic Shell never writes to HKLM because it doesn't run as admin<br />* Group policies are saved in Software\Policies\IvoSoft. Computer policies are under HKLM and User policies are under HKCU<br /><br />As I said, I don't know anything about administering RDS servers, thin clients, or domain controllers. There may be subtleties that are beyond my understanding.<br />However, at the end of the day, the start menu will read its settings from the registry. How the registry is written is not important. What's important is the contents of these keys:<br />HKCU\Software\IvoSoft\ClassicStartMenu\Settings<br />HKCU\Software\Policies\IvoSoft\ClassicStartMenu<br />HKLM\Software\IvoSoft\ClassicStartMenu<br />HKLM\Software\Policies\IvoSoft\ClassicStartMenu<br /><br />I would recommend that you reset all settings, and first make sure that the start menu at least launches for all users you care about.<br />Only then you try to adjust the settings. After you change the settings, verify that they are actually stored in the registry keys listed above. And that those keys are actually accessible by the users.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Feb 12, 2016 9:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[derekmines]]></name></author>
<updated>2016-02-12T08:42:38-07:00</updated>
<published>2016-02-12T08:42:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25251#p25251</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25251#p25251"/>
<title type="html"><![CDATA[Re: Classic Shell and RDS Server]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5703&amp;p=25251#p25251"><![CDATA[
The whole situation is now possibly unrescuable...<br />For whatever reason I now have 3 different start menus, one on each of my 2 RDS servers and a totally different one on my test user.<br /><br />I have tried setting various group policy options (group policy is set on my main domain controller that doesn't have the start menu installed) and then done a gpupdate /force on the RDS servers and the test client but nothing changes... it seems that nothing is linked any more....... HELP lol<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12701">derekmines</a> — Fri Feb 12, 2016 8:42 am</p><hr />
]]></content>
</entry>
</feed>