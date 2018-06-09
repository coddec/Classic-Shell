<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7751" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-20T06:48:31-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7751</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-20T06:48:31-07:00</updated>
<published>2017-07-20T06:48:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33407#p33407</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33407#p33407"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33407#p33407"><![CDATA[
As far as I know the Home edition should not have any policies set. See if you can delete the two NoClose that you found. Maybe even having 0 there throws Windows off.<br />Other than that, no ideas.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jul 20, 2017 6:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[phreich]]></name></author>
<updated>2017-07-20T04:20:31-07:00</updated>
<published>2017-07-20T04:20:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33404#p33404</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33404#p33404"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33404#p33404"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Actually, it is probably here: HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Policies\Explorer<br /></div><br /><br /><br />I did a regedit, and searched for NoClose, and found something interesting -- there were 4 entries that were formatted like the first key you mentioned, but they contained the following REG_SZ type entry: &quot;**del.NoClose&quot;, with a value of 0 (zero). It looks like something changed the names of these keys -- it wasn't me.<br /><br />There were two places in the registry that were formatted like the second example you have, but the REG_SZ type entry was &quot;NoClose&quot;, both had a value of 0 (zero).<br /><br />I assume that the value of 0 (zero) is probably the default, which means the start button should be enabled -- correct?<br /><br />I did not find one that had a value of 48. I don't think searching through the registry for &quot;48&quot; is going to find it -- there will be too many hits to ever find the right one.<br /><br />Any further ideas?<br /><br />Thanks,<br />Philip<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21860">phreich</a> — Thu Jul 20, 2017 4:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-19T23:09:38-07:00</updated>
<published>2017-07-19T23:09:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33396#p33396</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33396#p33396"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33396#p33396"><![CDATA[
Actually, it is probably here: HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Policies\Explorer<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 19, 2017 11:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-19T23:07:43-07:00</updated>
<published>2017-07-19T23:07:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33395#p33395</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33395#p33395"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33395#p33395"><![CDATA[
Search the registry for a value named &quot;NoClose&quot; and delete it.<br /><br />For me it is here: HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Group Policy Objects\{212B0188-33B8-42FA-9A4F-C48AEA1F5EDF}User\Software\Microsoft\Windows\CurrentVersion\Policies\Explorer<br /><br />I don't know if the location is the same for everybody<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 19, 2017 11:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[phreich]]></name></author>
<updated>2017-07-19T22:55:04-07:00</updated>
<published>2017-07-19T22:55:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33394#p33394</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33394#p33394"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33394#p33394"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />the REST_NOCLOSE policy is set to 48. That's un unusual value. It should be either 0 or 1.<br />It corresponds to this policy: &quot;Administrative Templates\Start Menu and Taskbar\Remove and prevent access to the Shut Down, Restart, Sleep, and Hibernate commands&quot;<br />See if you can disable it from gpedit.msc.<br /></div><br /><br /><br />I found and installed gpedit.msc (I am running win 10 home edition), and updated the value to &quot;disabled&quot;, rebooted the machine, and the behavior stayed the same. Is there a registry value I should be looking for?<br /><br />Attached is another dump from your utility.<br /><br />Philip<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21860">phreich</a> — Wed Jul 19, 2017 10:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-19T22:02:33-07:00</updated>
<published>2017-07-19T22:02:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33393#p33393</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33393#p33393"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33393#p33393"><![CDATA[
the REST_NOCLOSE policy is set to 48. That's un unusual value. It should be either 0 or 1.<br />It corresponds to this policy: &quot;Administrative Templates\Start Menu and Taskbar\Remove and prevent access to the Shut Down, Restart, Sleep, and Hibernate commands&quot;<br />See if you can disable it from gpedit.msc.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jul 19, 2017 10:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[phreich]]></name></author>
<updated>2017-07-19T18:29:28-07:00</updated>
<published>2017-07-19T18:29:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33390#p33390</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33390#p33390"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33390#p33390"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />OK, download the Classic Shell Utility from here: <!-- m --><a class="postlink" href="http://www.classicshell.net/downloads/">http://www.classicshell.net/downloads/</a><!-- m --><br />Run it, save a system log and send it to me.<br /></div><br /><br />I already did.  It is attached to the first post.<br /><br />Thanks,<br />Philip<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21860">phreich</a> — Wed Jul 19, 2017 6:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-17T09:06:24-07:00</updated>
<published>2017-07-17T09:06:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33351#p33351</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33351#p33351"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33351#p33351"><![CDATA[
OK, download the Classic Shell Utility from here: <!-- m --><a class="postlink" href="http://www.classicshell.net/downloads/">http://www.classicshell.net/downloads/</a><!-- m --><br />Run it, save a system log and send it to me.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 17, 2017 9:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[phreich]]></name></author>
<updated>2017-07-17T08:43:51-07:00</updated>
<published>2017-07-17T08:43:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33350#p33350</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33350#p33350"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33350#p33350"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />It sounds like shutting down is disabled for your PC.<br />If you click on the Desktop, then press Alt+F4, do you see &quot;shut down&quot; in the list?<br /></div><br /><br />No, shutdown is not disabled.  When I press Alt+F4, it brings up the windows 10 shutdown options.<br /><br />Good thinking though....<br /><br />Thanks,<br />Philip<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21860">phreich</a> — Mon Jul 17, 2017 8:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-17T08:13:01-07:00</updated>
<published>2017-07-17T08:13:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33349#p33349</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33349#p33349"/>
<title type="html"><![CDATA[Re: windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;lo]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33349#p33349"><![CDATA[
It sounds like shutting down is disabled for your PC.<br />If you click on the Desktop, then press Alt+F4, do you see &quot;shut down&quot; in the list?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 17, 2017 8:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[phreich]]></name></author>
<updated>2017-07-17T08:40:45-07:00</updated>
<published>2017-07-17T08:06:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33348#p33348</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33348#p33348"/>
<title type="html"><![CDATA[windows 10 ver 1703, installed CSM and &quot;shutdown&quot; is &quot;logoff]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7751&amp;p=33348#p33348"><![CDATA[
Hi,<br /><br />I was just upgraded to the windows creators update 1703. I was having problems with the start menu after it installed, and so I decided to download and install CSM because I was pretty fed up with the windows 10 start menu anyway.<br /><br />However, after installation, the following occurred:<br />Instead of seeing a &quot;stutdown&quot; menu, what I see is a &quot;logoff&quot; menu.<br /><br />I went into the CSM settings, and no matter what shutdown setting I tried to apply, this did not change.<br /><br />Maybe a clue is that the option to &quot;Show shutdown during remote session&quot; has a lock on it, and says it is disabled due to group policies, but I haven't set any group policies. I am using windows 10 home edition, so I don't have the policy editor....<br />The settings I have set in the CSM shutdown settings selected are: Shutdown Dialog, and I have put the following commands in the &quot;shutdown menu items&quot; list: &quot;switch_user,logoff,restart,sleep,hibernate,shutdown,lock&quot;. I also tried leaving the &quot;shutdown menu items&quot; list blank, which is supposed to default to all options, but that didn't work either.<br /><br />I am able to use the win-x menu to shutdown the computer, and all the options show up there, but I would prefer to have this working in CSM.<br /><br />Also, sometimes apps like &quot;system&quot; won't launch. I don't know why, sometimes they work, sometimes they don't. Maybe this is a windows issue instead of a CSM issue. I don't know.<br /><br />I have attached a screenshot showing CSM, and also a system log produced by your CSM utility.<br /><br />Thanks for the help,<br />Philip<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21860">phreich</a> — Mon Jul 17, 2017 8:06 am</p><hr />
]]></content>
</entry>
</feed>