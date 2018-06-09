<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=52" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-02-12T14:47:35-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=52</id>
<entry>
<author><name><![CDATA[Michael]]></name></author>
<updated>2014-02-12T14:47:35-07:00</updated>
<published>2014-02-12T14:47:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10896#p10896</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10896#p10896"/>
<title type="html"><![CDATA[Re: All user profiles Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10896#p10896"><![CDATA[
Thanks guys for your answers.<br />That's the info which i needed.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2989">Michael</a> — Wed Feb 12, 2014 2:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-02-12T12:23:44-07:00</updated>
<published>2014-02-12T12:23:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10894#p10894</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10894#p10894"/>
<title type="html"><![CDATA[Re: All user profiles Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10894#p10894"><![CDATA[
@Michael, for any program which you want to make available for all users, copy the shortcuts from C:\Users\&lt;your user name&gt;\AppData\Roaming\Microsoft\Windows\Start Menu\Programs to<br />C:\ProgramData\Microsoft\Windows\Start Menu\Programs<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Feb 12, 2014 12:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-02-12T10:41:48-07:00</updated>
<published>2014-02-12T10:41:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10889#p10889</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10889#p10889"/>
<title type="html"><![CDATA[Re: All user profiles Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10889#p10889"><![CDATA[
8.1 works the same way in principle. Programs can be installed for the current user or for all users. You will see that Classic Shell correctly installs for all users and should appear in the start menu regardless of the user. Some installers may choose to put their shortcuts in the current user despite being installed for all users (which would be wrong).<br />It is possible because of UAC that was introduced in Vista some older installers may be incompatible.<br />Without specifics - what program is missing and how was it installed - it is hard to answer this in general.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Feb 12, 2014 10:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Michael]]></name></author>
<updated>2014-02-12T10:06:18-07:00</updated>
<published>2014-02-12T10:06:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10888#p10888</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10888#p10888"/>
<title type="html"><![CDATA[Re: All user profiles Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10888#p10888"><![CDATA[
I'm so happy with ClassicShell and hope you keep the good work running. Thank you.<br /><br />I upgraded directly from XP to 8.1.<br />I recently created a second account (normal user, not admin) and realized that the installed program group (with the first user (admin)) didn't show up in the second user!<br />This behaviour is strange and new to me. In WinXP there was a User and a start menu folder where programs could install their links so that they can show up for all users on the local machine (especially when installed via admin account). <br />Is this behaviour removed/changed in Windows 8.1 ??<br /><br />Do i now have to manually copy the entries from one account to another ( and where are they stored??) ?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2989">Michael</a> — Wed Feb 12, 2014 10:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-01-20T00:08:49-07:00</updated>
<published>2014-01-20T00:08:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10220#p10220</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10220#p10220"/>
<title type="html"><![CDATA[Re: All user profiles Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=10220#p10220"><![CDATA[
Classic Shell 4.0.4 introduces Group Policy support for its own settings. The file, C:\Program Files\Classic Shell\PolicyDefinitions.zip includes the policy definitions. If you have an Active Directory domain, extract the files to %logonserver%\sysvol\%userdnsdomain%\policies\PolicyDefinitions\ or whatever your Group Policy Central Store is. For Local Group Policy, extract them to C:\Windows\PolicyDefinitions folder.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 20, 2014 12:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mxzlmar]]></name></author>
<updated>2013-01-08T16:37:17-07:00</updated>
<published>2013-01-08T16:37:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=119#p119</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=119#p119"/>
<title type="html"><![CDATA[Re: All user profiles Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=119#p119"><![CDATA[
That seems to work great! Thanks for the help<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=101">mxzlmar</a> — Tue Jan 08, 2013 4:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-08T13:34:09-07:00</updated>
<published>2013-01-08T13:34:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=113#p113</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=113#p113"/>
<title type="html"><![CDATA[Re: All user profiles Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=113#p113"><![CDATA[
Look at the Administrative Settings section in the help. Basically you have to copy some registry values from HKCU\Software\IvoSoft\ClassicStartMenu into HKLM\Software\IvoSoft\ClassicStartMenu. Those settings will be forced on all users and can't be changed. How do you find the names of the values? Most are obvious. In your case look at Skin1, SkinOptions1, SkinVariation1.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jan 08, 2013 1:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mxzlmar]]></name></author>
<updated>2013-01-08T13:17:47-07:00</updated>
<published>2013-01-08T13:17:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=110#p110</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=110#p110"/>
<title type="html"><![CDATA[All user profiles Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=52&amp;p=110#p110"><![CDATA[
Hello,<br /><br />I have been trying to figure out a process for putting the classic shell skin that I have saved on all users profiles. I tried saving a registry key from a saved profile, and a few other tests that haven't worked. This is on a domain network so I don't know if there is an additional step I am missing. At this point I have had to log onto each user profile after they login first time, and backup/load the xml file. Thank you for your help. Mike<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=101">mxzlmar</a> — Tue Jan 08, 2013 1:17 pm</p><hr />
]]></content>
</entry>
</feed>