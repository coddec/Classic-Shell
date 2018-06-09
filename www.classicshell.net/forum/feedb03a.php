<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4167" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-03-27T13:04:54-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4167</id>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-03-27T13:04:54-07:00</updated>
<published>2015-03-27T13:04:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18419#p18419</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18419#p18419"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18419#p18419"><![CDATA[
I just ran:<br /><br />C:\&gt;dism /online /cleanup-image /restorehealth<br /><br />and<br /><br />C:\&gt;sfc /scannow<br /><br />I did a Restart . . . and Search remains Hidden . . . so, I see that they do not restore the &quot;Hidden&quot; Attribute . . . Yay!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Fri Mar 27, 2015 1:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-03-27T11:45:46-07:00</updated>
<published>2015-03-27T11:45:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18418#p18418</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18418#p18418"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18418#p18418"><![CDATA[
It seems like this could be an option in the CS settings - to set the &quot;Hidden&quot; Attribute for &quot;Programs / Search&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Fri Mar 27, 2015 11:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-03-27T11:39:20-07:00</updated>
<published>2015-03-27T11:39:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18417#p18417</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18417#p18417"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=18417#p18417"><![CDATA[
Where did this post go?<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />Hello mb1280,<br /><br />You are receiving this notification because you are watching the topic, &quot;Search box and Programs / Search&quot; at &quot;Classic Shell.&quot;. There is a new reply by GauravK:<br /><br />You can just set the &quot;Hidden&quot; attribute on the Search shortcut to hide it from the Start Menu without deleting it.<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />Hey, that works!  Thank you!<br /><br />I see that to get it back:<br /><br />Right-click Start / All Users / go to Start Menu - Programs<br />. . . in File Explorer, click on View / [check] Hidden items (to see them)<br />. . . right-click on &quot;Search&quot; / Properties / General tab - and [un-check] Hidden (to show it)<br />. . . Observation:  I see that another hidden item appears:  Tablet PC<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Fri Mar 27, 2015 11:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-01-21T15:24:06-07:00</updated>
<published>2015-01-21T15:24:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17576#p17576</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17576#p17576"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17576#p17576"><![CDATA[
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<span style="color:#0000ff;"><br /><br />Summary of what I found, details below:<br /><br />1.) I put a copy of &quot;Programs / Search&quot; in the &quot;Windows System&quot; folder<br />2.) I then deleted &quot;Programs / Search&quot;<br />3.) DISM found no corruption<br />4.) SFC saw this as a corruption, and put &quot;Programs / Search&quot; back<br />5.) There is no issue, if you then delete the copy of &quot;Windows System / Search&quot;<br />6.) Unless SFC is changed, it will always put &quot;Programs / Search&quot; back</span><br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />If I click Programs / Search . . . it opens up the Win 8.1 Search, on the right side<br />. . . it says: Search - Everywhere<br /><br />Right-click Start / Open All Users . . . I &quot;Copy and Paste&quot; &quot;Search&quot; into &quot;Windows System&quot;<br />. . . Would there be a difference if I had &quot;Cut and Pasted&quot; it? I have seen there can be, in Excel.<br />. . . I click on &quot;Search&quot; in &quot;Windows System,&quot; and it does the same thing<br /><br />Right-click Start / Open All Users . . . I delete Programs / &quot;Search&quot;<br />. . . There would probably have been no difference if I had deleted it directly from the Start Menu<br />. . . I click on it in &quot;Windows System,&quot; and it's still working - so far, so good<br /><br />I do a Restart . . . upon returning to Desktop, everything is the same<br />. . . I click on it in &quot;Windows System,&quot; and it's still working<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />This is what I do, when I do updates - I just have the OS running:<br />Start / Run / msconfig / System Configuration / Services tab / [check] Hide all Microsoft services / Disable all / Apply / Ok / Exit without Restart<br />CCleaner / Tools / Startup / highight all / Disable<br />Restart<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />Run as Administrator, from an elevated command prompt<br />C:\&gt;dism /online /cleanup-image /restorehealth<br /><br />Deployment Image Servicing and Management tool<br />Image Version: 6.2.9200.16384 . . . Win 8 <br />Image version: 6.3.9600.17031 . . . 05/24/14 Win 8.1 ... 01/21/15<br /><br />What I usually see:<br />The restore operation completed successfully.<br />The component store corruption was repaired. The operation completed successfully.<br /><br />03/24/14 ... 13-14 minutes<br />04/10/14 ... 15-16 minutes<br />05/24/14 ... 09-10 minutes in Win 8.1<br />10/30/14 ... 11-12 minutes<br />11/27/14 ... 17-18 minutes<br />12/10/14 ... 22-23 minutes<br />01/21/15 ... 18-20 minutes ... I got the &quot;operation completed successfully&quot; message above<br />. . . Why doesn't it tell you what it fixed?<br />. . . It did not put &quot;Search&quot; back in the root of Programs<br />. . . I click on &quot;Search&quot; in &quot;Windows System,&quot; and it still pops out on the right side<br />. . . I tested it by searching for &quot;msconfig,&quot; and that came up normally<br />. . . I do a Restart to re-establish my basline, and next . . .<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />Run as Administrator, from an elevated command prompt<br />C:\&gt;sfc /scannow<br /><br />What I usually see:<br />Windows Resource Protection did not find any integrity violations.<br /><br />02/18/14 ... 16-17 minutes - XP took 24 mins<br />05/24/14 ... 15-16 minutes in Win 8.1<br />10/30/14 ... 17-18 minutes<br />11/27/14 ... 19-20 minutes<br />12/10/14 ... 21-22 minutes<br />01/21/15 ... 23-24 minutes ... It found corruption, and fixed it:<br />. . . <br />Windows Resource Protection found corrupt files and successfully repaired<br />them. Details are included in the CBS.Log windir\Logs\CBS\CBS.log. For<br />example C:\Windows\Logs\CBS\CBS.log. Note that logging is currently not<br />supported in offline servicing scenarios.<br /><br />. . . It has put Search back in the root of Programs!<br />. . . Both Shortcuts do the same thing<br />. . . I might as well delete the Shortcut in Windows System<br />. . . Restart<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />. . . If I re-run DISM, what does it say? The same, standard message:<br />The restore operation completed successfully.<br />The component store corruption was repaired. The operation completed successfully.<br /><br />Restart<br /><br />. . . If I re-run sfc, what does it say?<br />Windows Resource Protection did not find any integrity violations.<br />. . . This seems to indicate that there are no issues if I delete the copy of Search that I created <br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />Start / Run / msconfig / System Configuration / Services tab / Enable all / Apply / Ok / Exit without Restart<br />CCleaner / Tools / Startup / highight all / Enable<br />Restart<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />Ok, fine, it's not a big deal, seeing &quot;Programs / Search&quot;<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Wed Jan 21, 2015 3:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-01-21T10:52:15-07:00</updated>
<published>2015-01-21T10:52:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17575#p17575</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17575#p17575"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17575#p17575"><![CDATA[
It doesn't hide Search because it is not an app. It runs some DLL to show the search sidebar.<br /><br />Try moving it and see what happens. I can't tell you what will break or where can you move it without breaking anything.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jan 21, 2015 10:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-01-20T11:22:30-07:00</updated>
<published>2015-01-20T11:22:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17565#p17565</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17565#p17565"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17565#p17565"><![CDATA[
Yes . . the Search shortcut in the Programs folder. Here's why I'm asking - from my notes:<br /><br />Main Menu / [check] Hide app shortcuts<br /><br />Within Programs at the bottom (items not in a folder), this hides:<br />. . . Camera, OneDrive, PC Settings, Photos, Store<br />But why doesn't it hide &quot;Search&quot;? Search is not an app, but it is in the same area.<br />I have deleted it before, but forget why I determined that I shouldn't do that.<br />Something didn't work, but I forget what.<br />From memory, if I run DISM from an elevated command prompt:<br />. . . C:\&gt;dism /online /cleanup-image /restorehealth<br />it will put Search back, and things are restored to working order.<br />I'm just asking about this now, because I was going through all of the CS settings.<br />It looks like if I hide things through the CS settings, I'm safe,<br />. . . but I don't see how to hide &quot;Programs / Search&quot;<br />Could there be an option under Main Menu that moves it for you, to something like:<br />. . . Administrative Tools, Windows Accessories, or Windows System?<br />. . . Some place that has been determined to leave everything working.<br />. . . I wonder if you later ran DISM, though, would it re-create Search in Programs.  Probably, yes.<br />. . . So, you would just have to re-check that setting in CS<br />. . . . . . Would it create a duplicate of it?  Should the previous one then be deleted?<br />. . . . . . Could the CS setting handle all of this?  IDK.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Tue Jan 20, 2015 11:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-01-19T22:06:02-07:00</updated>
<published>2015-01-19T22:06:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17554#p17554</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17554#p17554"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17554#p17554"><![CDATA[
If you are talking about the Search shortcut in the Programs folder, you can try deleting it. I suspect it might break something, like the search charm or the search functionality in the start screen.<br />Somebody was complaining here that he deleted the IE shortcut and the Metro IE broke.<br /><br />Instead of deleting it move it somewhere else, like to the desktop. See what breaks. If you don't see any problems for a few days then delete it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 19, 2015 10:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2015-01-19T21:57:53-07:00</updated>
<published>2015-01-19T21:57:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17553#p17553</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17553#p17553"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17553#p17553"><![CDATA[
right click start button<br />choose settings<br />click the text input at the top left<br />type 'show se'<br />all the options that apply should be listed below<br />select the 'no search box' radio button<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Jan 19, 2015 9:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-01-19T21:36:34-07:00</updated>
<published>2015-01-19T21:36:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17552#p17552</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17552#p17552"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17552#p17552"><![CDATA[
I see . . . any idea how I hide it?  I don't see how in Customize Start Menu.  What I've done:<br /><br />right-click, delete these<br /><br />Current menu items / Search menu . . . it doesn't do anything when you click on it, don't need it either<br /><br />Current menu items / Search box . . . keep<br /><br />Current menu items / Apps<br /><br />Current menu items / Shutdown dialog / Hibernate<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Mon Jan 19, 2015 9:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2015-01-19T19:19:40-07:00</updated>
<published>2015-01-19T19:19:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17550#p17550</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17550#p17550"/>
<title type="html"><![CDATA[Re: Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17550#p17550"><![CDATA[
Basically theres no reason you would <strong>need</strong> it, other than custom, or ease of use (I find it easier for example to open the calculator by typing [Win];c;a;[Enter] as opposed to finding it in the subfolders. <br />The same steps on the charms bar:[Win+S];c;a;[Enter]. In other-words the 'new' method actually requires slightly more work; It does support web searches natively though; which is something that takes a bit of work to get on the start menu's search.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Jan 19, 2015 7:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-01-19T14:03:08-07:00</updated>
<published>2015-01-19T14:03:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17546#p17546</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17546#p17546"/>
<title type="html"><![CDATA[Search box and Programs / Search]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4167&amp;p=17546#p17546"><![CDATA[
Is there any reason I shouldn't want to get rid of the Win 8.1 Search, under Programs / Search?  How do I do it?<br /><br />I have the Search box.  It has a tab for settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Mon Jan 19, 2015 2:03 pm</p><hr />
]]></content>
</entry>
</feed>