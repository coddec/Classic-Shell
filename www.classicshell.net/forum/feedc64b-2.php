<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6809" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-09-10T10:06:08-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6809</id>
<entry>
<author><name><![CDATA[callingdoug]]></name></author>
<updated>2016-09-10T10:06:08-07:00</updated>
<published>2016-09-10T10:06:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29273#p29273</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29273#p29273"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29273#p29273"><![CDATA[
resolved the notepad issue.<br />permissions were all wacked on those files but even with me re-establishing permissions they were still dead.  <br /><br />just spent 5 hours uninstalling and reinstalling programs.  this was something I didn't even know about until I needed a seldom used program that was on the start menu list and was in the all programs list.  makes me wonder if anyone else has the same issue but doesn't know it yet.<br /><br />anyway, that's it for me.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14831">callingdoug</a> — Sat Sep 10, 2016 10:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-10T07:05:49-07:00</updated>
<published>2016-09-10T07:05:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29272#p29272</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29272#p29272"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29272#p29272"><![CDATA[
Oh. Then it is most likely a permission issue. If the target EXE exists, but the shortcut can't open it to get the icon out of it, then you will see a white icon.<br />Usually Notepad launching on startup is because the desktop.ini file in the Startup folder got unhidden. And if on top you don't have permissions for it, you will get the Access Denied message.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Sep 10, 2016 7:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[callingdoug]]></name></author>
<updated>2016-09-09T23:58:02-07:00</updated>
<published>2016-09-09T23:58:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29268#p29268</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29268#p29268"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29268#p29268"><![CDATA[
well, for sure it's from the anniversary update.  I did a system restore to before it.  reinstalled a few of the easy programs, then reinstalled the anniversary update and lo and behold, the links are dead again.  dang it (you can increase the level of that...)!<br />I tried deleting the file you suggested and that didn't work.  I guess I'm back to reinstalling all the programs.  <br /><br />I've found on the few I did, some I had to uninstall first and then reinstall.  others I could just reinstall over the top.  going to be a long few days of reloading unless someone else has a bright idea.<br /><br />and another unrelated thing in case anyone else has the same issue, when the problem started I also started getting Notepad startup up at launch with an error message saying Access is denied.  Still not sure what to do about that...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14831">callingdoug</a> — Fri Sep 09, 2016 11:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-09T23:39:31-07:00</updated>
<published>2016-09-09T23:39:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29267#p29267</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29267#p29267"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29267#p29267"><![CDATA[
If only the icons are broken, you could try deleting %localappdata%\ClassicShell\DataCache.db and log out and login again. See if the icons return. Maybe the Anniversary Update corrupted that file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Sep 09, 2016 11:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-09T23:09:37-07:00</updated>
<published>2016-09-09T23:09:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29266#p29266</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29266#p29266"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29266#p29266"><![CDATA[
Understood. I've never seen that before. I don't have any recommendations how to fix it, aside from running all installers in Repair mode.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 09, 2016 11:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[callingdoug]]></name></author>
<updated>2016-09-09T20:50:50-07:00</updated>
<published>2016-09-09T20:50:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29265#p29265</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29265#p29265"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29265#p29265"><![CDATA[
the software is there.  I can run the programs from the shortcuts in my initial list when I click the windows start button.  I can also go to the folders on the C drive and run the programs.  none of them are uninstalled, the links in the start menu folders are what's not working.<br />attached pics show the links in the initial list of the start button and what it looks like in the start menu folder<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14831">callingdoug</a> — Fri Sep 09, 2016 8:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-09T20:46:43-07:00</updated>
<published>2016-09-09T20:46:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29264#p29264</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29264#p29264"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29264#p29264"><![CDATA[
That's precisely what I mean. Looks like the software is just not there. Possibly got uninstalled by the upgrade process.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 09, 2016 8:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[callingdoug]]></name></author>
<updated>2016-09-09T18:38:34-07:00</updated>
<published>2016-09-09T18:38:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29263#p29263</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29263#p29263"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29263#p29263"><![CDATA[
no change to the OS drive letter, still C.  and I see no way to repair the shortcuts, properties doesn't show a way to re-link them.  it's also interesting when I click on what should be a shortcut link in the folder, nothing happens.  no error message, no action that says it's looking, nothing.<br /><br />&quot;&quot;BTW, does the software work if you run it from the Windows 10 start menu?&quot;&quot;  --- do you mean the programs like VLC?  if that's what you mean, there is no VLC link in the win 10 start menu under apps nor are there for most of the programs, they are also not shown as a list.  if you mean something else, please explain.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14831">callingdoug</a> — Fri Sep 09, 2016 6:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-09T18:28:34-07:00</updated>
<published>2016-09-09T18:28:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29262#p29262</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29262#p29262"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29262#p29262"><![CDATA[
Is it possible the upgrade changed your OS drive from C to D or something?<br />While it is possible to repair most shortcuts (assuming the software is still installed an functioning), the Office shortcuts are special and can't be edited manually.<br /><br />BTW, does the software work if you run it from the Windows 10 start menu?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 09, 2016 6:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[callingdoug]]></name></author>
<updated>2016-09-09T18:03:37-07:00</updated>
<published>2016-09-09T18:03:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29261#p29261</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29261#p29261"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29261#p29261"><![CDATA[
hmmm, what's odd is that not just some of them, ALL of them are bad.  while the update might have moved some folders, though I'm not sure how/why, to move them all.  even the microsoft office links are missing.  any suggestion on a way to rebuild the links in the folders without having to reinstall the programs.  even manually updating each link would be more desirable that reinstalling all the programs.  and I mentioned before, when you first click on the windows buttons, all of those shortcuts work.  its' only the ones under all programs...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14831">callingdoug</a> — Fri Sep 09, 2016 6:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-09T17:44:34-07:00</updated>
<published>2016-09-09T17:44:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29260#p29260</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29260#p29260"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29260#p29260"><![CDATA[
Classic Shell does not add or remove items in those folders. If the shortcuts got deleted or corrupted, then it was a result of the upgrade.<br />I think the most common cause for a broken shortcut with a blank icon is if the target file (the EXE, or document, or whatever) got deleted or moved.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 09, 2016 5:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[callingdoug]]></name></author>
<updated>2016-09-09T17:38:28-07:00</updated>
<published>2016-09-09T17:38:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29259#p29259</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29259#p29259"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29259#p29259"><![CDATA[
I understand the start menu function.  the programs have been there for over 2 years of using classic shell starting with windows 8 and then to windows 10.  they worked until the recent anniversary upgrade of win 10, then I got the result of the pic above.  <br /><br />and looking in the folder as you suggested, no, they are not there.  same view as before except the blank page shows it's a shortcut to the program<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14831">callingdoug</a> — Fri Sep 09, 2016 5:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-09-09T17:24:23-07:00</updated>
<published>2016-09-09T17:24:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29258#p29258</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29258#p29258"/>
<title type="html"><![CDATA[Re: &quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29258#p29258"><![CDATA[
The start menu simply displays the contents of the Start Menu folders. That's where installers put the shortcuts.<br />Right-click on All Programs and select &quot;Open All Users&quot;. This will open one of the folders in Explorer. Select &quot;Open&quot; to open the other folder. Then see in both folders if the links you need are still there.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 09, 2016 5:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[callingdoug]]></name></author>
<updated>2016-09-09T17:19:44-07:00</updated>
<published>2016-09-09T17:19:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29257#p29257</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29257#p29257"/>
<title type="html"><![CDATA[&quot;all programs&quot; links in folders are missing, none work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6809&amp;p=29257#p29257"><![CDATA[
after the recent windows 10 anniversary update and an update to classic shell 4.3, all my start menu folders in the &quot;all programs&quot; section have lost their links. they look like the attached pic. they not only have missing icons, they are no longer linked to the programs and the only way to fix it is to re-install all the programs.<br />I tried uninstalling classic shell, restarting and then re-installing classic shell - no change<br />the shortcut links in the start menu are still good (when you first click on the windows button, that list of programs I've set up), it's just when you go to &quot;all programs&quot; at the bottom and it takes you to the folders of installed programs that the links are the issue.<br /><br />please, anything on this?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14831">callingdoug</a> — Fri Sep 09, 2016 5:19 pm</p><hr />
]]></content>
</entry>
</feed>