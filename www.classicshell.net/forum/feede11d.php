<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7783" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-01T11:58:43-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7783</id>
<entry>
<author><name><![CDATA[lechardonneret]]></name></author>
<updated>2017-08-01T11:58:43-07:00</updated>
<published>2017-08-01T11:58:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33546#p33546</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33546#p33546"/>
<title type="html"><![CDATA[Re: deploy classic shell start menu for all domain users AD2]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33546#p33546"><![CDATA[
<h4>Thanks gaurav I installed the gpo at the server and I applied it all is ok, now remains my second question, the xml templates that I customized containing the</h4><h4>shortcuts of the specific applications for each user how we can integrate this From the active directory for domain users. thank you for the answer.</h4><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22383">lechardonneret</a> — Tue Aug 01, 2017 11:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-31T22:43:54-07:00</updated>
<published>2017-07-31T22:43:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33537#p33537</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33537#p33537"/>
<title type="html"><![CDATA[Re: deploy classic shell start menu for all domain users AD2]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33537#p33537"><![CDATA[
Classic Shell automatically installs for all users on a computer and by default, it starts automatically for all users too when Windows boots.<br /><br />Open Classic Start Menu Settings and go to General Behavior tab. Check &quot;Start automatically for this user&quot; in the user account where it's not loading (and where you are getting the Windows 7 Start menu).<br /><br />Extract Group Policy templates from C:\Program Files\Classic Shell\PolicyDefinitions.zip and then you can configure it for All Users under Computer Configuration.<br /><br />To install Group Policy administrative templates on a single machine, extract the files from C:\Program Files\Classic Shell\PolicyDefinitions.zip to C:\Windows\PolicyDefinitions<br /><br />To install Group Policy administrative templates to a Windows Server 2012 domain, extract the files from the archive to \\&lt;yourdomainname&gt;\SYSVOL\yourdomainname\Policies\PolicyDefinitions.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jul 31, 2017 10:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lechardonneret]]></name></author>
<updated>2017-07-31T13:15:53-07:00</updated>
<published>2017-07-31T13:15:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33533#p33533</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33533#p33533"/>
<title type="html"><![CDATA[deploy classic shell start menu for all domain users AD2012]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7783&amp;p=33533#p33533"><![CDATA[
Hi all ;<br /><br />I have a windows 7 machine joined to a server active directory 2012 there I installed classic shell start menu in user mode local it works very well I even create xml templates with type of shortcuts installed in order to deploy them easily to others Local users; When i create domain user when i authenticate to domain users account i have normal windows 7 start menu; My question is how to install this classic shell start menu also to the domain users the second questions how to import with the parameters from the domain for all users thank you.<br />NB: All machines installed in virtualbox mode.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22383">lechardonneret</a> — Mon Jul 31, 2017 1:15 pm</p><hr />
]]></content>
</entry>
</feed>