<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=4758" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-07-26T22:27:48-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=4758</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-07-26T22:27:48-07:00</updated>
<published>2015-07-26T22:27:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20309#p20309</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20309#p20309"/>
<title type="html"><![CDATA[Re: Can't run application with a parameter from the search b]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20309#p20309"><![CDATA[
Command line switches for programs should work in the search box again in Classic Shell 4.2.3 release candidate.<br /><br />However, neither Ivo nor I could reproduce the issue where the &quot;Run&quot; item doesn't work on Windows 10.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jul 26, 2015 10:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-07-05T22:33:03-07:00</updated>
<published>2015-07-05T22:33:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20113#p20113</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20113#p20113"/>
<title type="html"><![CDATA[Re: Can't run application with a parameter from the search b]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20113#p20113"><![CDATA[
Since 10162 went in as an upgrade, most of the customizations were already there.  Unfortunately it didn't start working.<br /><br />I plan to do a clean install of the GA version when it comes out.  I'll track whether Run works on a virgin system and assuming it does, then what I tweak that causes it to fail.<br /><br />I am seeing some error events in the Windows Application log.  This is probably part of what's wrong...<br /><br />Faulting application name: ShellExperienceHost.exe, version: 10.0.10162.0, time stamp: 0x5592109c<br />Faulting module name: StartUI.dll, version: 10.0.10162.0, time stamp: 0x5592080b<br />Exception code: 0xc0000005<br />Fault offset: 0x000000000003c1c3<br />Faulting process id: 0x1710<br />Faulting application start time: 0x01d0b7ad0302aebe<br />Faulting application path: C:\Windows\SystemApps\ShellExperienceHost_cw5n1h2txyewy\ShellExperienceHost.exe<br />Faulting module path: C:\Windows\SystemApps\ShellExperienceHost_cw5n1h2txyewy\StartUI.dll<br />Report Id: a7caeed1-e1ee-4c8a-9527-08a8886c96d0<br />Faulting package full name: Microsoft.Windows.ShellExperienceHost_1000.10162.0.0_neutral_neutral_cw5n1h2txyewy<br />Faulting package-relative application ID: App<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Sun Jul 05, 2015 10:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-07-02T22:12:35-07:00</updated>
<published>2015-07-02T22:12:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20089#p20089</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20089#p20089"/>
<title type="html"><![CDATA[Re: Can't run application with a parameter from the search b]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20089#p20089"><![CDATA[
Please try the Run command before you do any customizations to 10162 to make sure it is broken from the start.<br />There are no logs that can help diagnose it. If you still have problems after the upgrade I will have to make a small test program for you to try.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jul 02, 2015 10:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-07-02T21:42:31-07:00</updated>
<published>2015-07-02T21:42:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20088#p20088</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20088#p20088"/>
<title type="html"><![CDATA[Re: Can't run application with a parameter from the search b]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20088#p20088"><![CDATA[
Well, I *had* 10159 (x64), but Microsoft has seen fit to send out another one.  Seems like all my time any more doing is in reworking the config settings I like after new builds reset most of it.<br /><br />I'll let you know if 10162 (or whatever this new one is going in now) allows the run prompt to come up.<br /><br />Assuming the problem continues, do you have a log or something that I can look in to see why it's just ignoring the request for Run?<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Thu Jul 02, 2015 9:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-07-02T08:58:00-07:00</updated>
<published>2015-07-02T08:58:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20083#p20083</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20083#p20083"/>
<title type="html"><![CDATA[Re: Can't run application with a parameter from the search b]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20083#p20083"><![CDATA[
Run command works for me too.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jul 02, 2015 8:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-07-02T08:05:19-07:00</updated>
<published>2015-07-02T08:05:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20082#p20082</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20082#p20082"/>
<title type="html"><![CDATA[Re: Can't run application with a parameter from the search b]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20082#p20082"><![CDATA[
Hm, the Run command works for me on build 10130, with both Classic and Windows 7 styles.<br />What build do you have? is it 32 or 64 bit?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jul 02, 2015 8:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-07-02T07:39:49-07:00</updated>
<published>2015-07-02T07:39:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20080#p20080</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20080#p20080"/>
<title type="html"><![CDATA[Re: Can't run application with a parameter from the search b]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20080#p20080"><![CDATA[
Well the 1st bug you reported is also correct. For example, in the Windows 7 Start Menu or at command prompt, or Run dialog, if we type:<br />regedit -M<br />It opens multiple instances of Regedit (because the -m switch is being sent correctly)<br />In Classic Start Menu, regedit -M doesn't open another instance of Regedit because the parameter is being ignored.<br /><br />Thanks for reporting the bug <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />Btw I checked previous versions and this bug/regression is new for Classic Shell 4.2.2 beta. Earlier versions are not affected.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jul 02, 2015 7:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-07-02T04:49:49-07:00</updated>
<published>2015-07-02T04:49:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20078#p20078</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20078#p20078"/>
<title type="html"><![CDATA[Re: Can't run application with a parameter from the search b]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20078#p20078"><![CDATA[
OK, on the first item, I now realize the &quot;See more results&quot; entry comes from the <strong>[ ] Search files</strong> box being checked.  It's also checked on my Win 8.1 system, but I keep the search indexer disabled, so it was non-functional (and showing a red mark).<br /><br />However, the Run box is still non-functional.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Thu Jul 02, 2015 4:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2015-07-02T04:50:47-07:00</updated>
<published>2015-07-02T04:41:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20077#p20077</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20077#p20077"/>
<title type="html"><![CDATA[Can't run application with a parameter from the search box]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4758&amp;p=20077#p20077"><![CDATA[
Up to build 10074 (I think - I could be off a few builds), I could run an application <strong>with a parameter</strong> <br />from the Search box or Run option in Classic Shell.<br /><br />Now the addition of a parameter causes an Explorer window to open with a failed search.<br /><br />As an example, I have a small application that pops up a message box.  If I enter the following:<br /><br /><img src="http://Noel.ProDigitalSoftware.com/ForumPosts/Win10/10159/TypingInSearchBox.png" alt="" /><br /><br />I get no run of the application, but instead this failed search:<br /><br /><img src="http://Noel.ProDigitalSoftware.com/ForumPosts/Win10/10159/SearchPopsUp.png" alt="" /><br /><br />Running the same command from a CMD window, the application is run successfully:<br /><br /><img src="http://Noel.ProDigitalSoftware.com/ForumPosts/Win10/10159/SuccessfulRun.png" alt="" /><br /><br /><br />Note that when I do the same thing from Classic Shell 4.2.2 in Win 8.1 the &quot;See more results&quot; <br />submenu item does NOT pop up and when I hit return I DO see the application run properly with the parameters.  This is the more preferable result.<br /><br /><img src="http://Noel.ProDigitalSoftware.com/ForumPosts/Win10/10159/NoSeeMoreResults.png" alt="" /><br /><br /><br /><span style="text-decoration: underline">A secondary problem:</span> <br /><br />On Win 10 any attempt to bring up the Run box from Classic Shell yields nothing at all.<br /><br /><img src="http://Noel.ProDigitalSoftware.com/ForumPosts/Win10/10159/RunNothing.png" alt="" /><br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Thu Jul 02, 2015 4:41 am</p><hr />
]]></content>
</entry>
</feed>