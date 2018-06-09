<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=5937" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-04-21T06:15:31-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=5937</id>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2016-04-21T06:15:31-07:00</updated>
<published>2016-04-21T06:15:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26265#p26265</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26265#p26265"/>
<title type="html"><![CDATA[Re: Query About Network Access]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26265#p26265"><![CDATA[
Per my observations usually it's a windows service running under svchost, System, or the Local Security Authority Service that do certificate revocation checks online.  Only VERY rarely does Explorer try to communicate at all.  That's what caught my eye.<br /><br />And I have SmartScreen completely disabled.<br /><br />Thanks for the link, Gaurav.  I see now that ctldl.windowsupdate.com probably should be allowed through the firewall.<br /><br />Thanks for the tip on disabling the auto-update checks, Ivo.  Somehow I missed seeing that little checkbox on my Win 8.1 system.  I had disabled it on my Win 7 system, so now I know that Classic Shell's auto-update check had nothing to do with the comms on that system.<br /><br />I have no problem remembering to do update checks myself, and now I can continue to watch for other Explorer comms on the Win 8.1 system and know that Classic Shell isn't causing them.<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Thu Apr 21, 2016 6:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-04-20T09:13:32-07:00</updated>
<published>2016-04-20T09:13:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26250#p26250</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26250#p26250"/>
<title type="html"><![CDATA[Re: Query About Network Access]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26250#p26250"><![CDATA[
It might have something to do with SmartScreen built into Windows 8 and above. Explorer verifies the digital signature on signed software by contacting the signing authority which can be Comodo, Verisign etc. Certificate checks are performed when signed software is executed. Windows also automatically updates root certificates from the URL you mentioned according to this page: <!-- m --><a class="postlink" href="https://technet.microsoft.com/en-us/library/dn265983.aspx">https://technet.microsoft.com/en-us/lib ... 65983.aspx</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Apr 20, 2016 9:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-04-20T08:35:30-07:00</updated>
<published>2016-04-20T08:35:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26249#p26249</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26249#p26249"/>
<title type="html"><![CDATA[Re: Query About Network Access]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26249#p26249"><![CDATA[
You can disable the Classic Shell checks from the &quot;Classic Shell Update&quot; tool. Uncheck &quot;Automatically check for new versions&quot;.<br /><br />I don't know why Explorer would try to check for updates. Maybe some new patch added such feature.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Apr 20, 2016 8:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2016-04-20T08:24:10-07:00</updated>
<published>2016-04-20T08:24:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26248#p26248</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26248#p26248"/>
<title type="html"><![CDATA[Query About Network Access]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5937&amp;p=26248#p26248"><![CDATA[
Recently I observed Classic Shell doing an update check via an http: (port 80) request of <!-- m --><a class="postlink" href="http://www.classicshell.net">http://www.classicshell.net</a><!-- m -->.  This was when I logged-in.   This is fine, expected, and I've allowed it, but I would like to ask:<br /><br />I saw several other communications attempts by Explorer.exe happen in the same second, one of which was a check of ctldl.windowsupdate.com (which my firewall blocked), and of crl.microsoft.com (which was allowed)...<br /><br />Explorer.exe is NOT in the normal habit of communicating online.  This is the first time I've seen Explorer try to make an online connection in over a month.  The Classic Shell update check I fully understand, as that's where you have to run to implement your Start Menu, but the other comms bother me.  Let's just say I'm sensitive to Microsoft pushing things on me that I haven't approved.<br /><br />I've seen such comms on Win 7, 8.1, and 10 systems.  In fact, they all happened in the past 24 hours on all three different operating systems.<br /><br />I don't believe it's Classic Shell doing or causing this ctldl.windowsupdate.com check because it has been observed happening <em>without</em> a classicshell.net query as well, but I was wondering:<br /><br /><strong>Do you have any insight as to why Explorer only VERY occasionally attempts online communications, especially with ctldl.windowsupdate.com?</strong><br /><br />I have only a minimum of shell extensions and these systems are definitely infection-free.  I have also disabled the Windows Update service on all systems, and reconfigure when I want to check for updates.<br /><br />Also, is there a setting I can throw that would make Classic Shell only check for updates when I request it?<br /><br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Wed Apr 20, 2016 8:24 am</p><hr />
]]></content>
</entry>
</feed>