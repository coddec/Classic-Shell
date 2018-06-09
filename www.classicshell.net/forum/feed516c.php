<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=975" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-23T10:12:39-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=975</id>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-07-23T10:12:39-07:00</updated>
<published>2013-07-23T10:12:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5013#p5013</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5013#p5013"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5013#p5013"><![CDATA[
I don't think it is a problem. On another system I tested the same reg file settings and it worked fine. On this machine the system seemed to know to create the folder in the users local start menu - I didn't need to pre-create it. Maybe just a glitch on this build I am working on.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Tue Jul 23, 2013 10:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-23T09:52:36-07:00</updated>
<published>2013-07-23T09:52:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5012#p5012</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5012#p5012"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5012#p5012"><![CDATA[
Hm, I see.<br />The admin item is one of those special items that combine two folders. At the moment I am assuming that both exist. Maybe I can relax the requirement and make it work if only one of the two exists.<br />You may get weird results though. If you drop an item in that folder and the user folder doesn't exist, the menu will try to add it to the common folder and potentially complain that you don't have admin rights.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 23, 2013 9:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-07-23T09:46:34-07:00</updated>
<published>2013-07-23T09:46:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5011#p5011</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5011#p5011"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5011#p5011"><![CDATA[
Ivo,<br />If I create the folder C:\Users\Default\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Administrative Tools then when an user account is first created it gets built in the users profile and I don't get the missing text.<br />Pete<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Tue Jul 23, 2013 9:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-23T09:37:05-07:00</updated>
<published>2013-07-23T09:37:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5010#p5010</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5010#p5010"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5010#p5010"><![CDATA[
Huh? How do you expect to place a non-existing folder in the start menu?<br />When the command is &quot;admin&quot;, then the text, icon, and most importantly - the sub-menu come from the system. If that folder doesn't exist there is nothing I can do.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 23, 2013 9:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-07-23T09:33:55-07:00</updated>
<published>2013-07-23T09:33:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5009#p5009</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5009#p5009"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5009#p5009"><![CDATA[
Ivo,<br />I have worked out what the problem is. If the folder %USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Administrative Tools doesn't exist then CSM shows &lt;No Text&gt; in the menu.  The link works correctly though to the system Admin Tools folder. If you create the folder log off and back on the correct text appears. Can you make this work if no user side folder exists?<br />It's not a problem as I now just make sure the folder exists in the Default profile.<br />Pete<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Tue Jul 23, 2013 9:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-23T08:06:39-07:00</updated>
<published>2013-07-23T08:06:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5008#p5008</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5008#p5008"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5008#p5008"><![CDATA[
This one applied fine on my machine and seems to be working.<br />Show me the HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Settings key from a machine that doesn't work.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 23, 2013 8:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-07-23T08:00:19-07:00</updated>
<published>2013-07-23T08:00:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5007#p5007</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5007#p5007"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5007#p5007"><![CDATA[
Ivo and GauravK,<br />Please find attached the reg (note I changed extension to txt as reg will not upload) file that we export and the import into default user ntuser.dat.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Tue Jul 23, 2013 8:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-23T07:54:26-07:00</updated>
<published>2013-07-23T07:54:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5006#p5006</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5006#p5006"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=5006#p5006"><![CDATA[
What happens if you apply the .reg file manually?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 23, 2013 7:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-22T23:59:08-07:00</updated>
<published>2013-07-22T23:59:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=4998#p4998</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=4998#p4998"/>
<title type="html"><![CDATA[Re: Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=4998#p4998"><![CDATA[
Can you try attaching the XML so what is wrong can be spotted. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jul 22, 2013 11:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-07-22T17:10:09-07:00</updated>
<published>2013-07-22T17:10:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=4993#p4993</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=4993#p4993"/>
<title type="html"><![CDATA[Possible bug in Customize Start Menu tab settings]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=975&amp;p=4993#p4993"><![CDATA[
Ivo,<br />I have been setting up some customization for our users. It involves setting up the UI and then exporting the settings to a reg file and placing then into the default user ntuser.dat. This involves some reorganization of the menu like Documents, Favorites Music and Pictures in alphabetic order. This bit works fine. However I also, in a similar way, move &quot;Administrative Tools&quot; item above &quot;Control Panel&quot; and enable it. For the new user this item is broken in the Customize Start Menu tab in that the text has gone from the Command Column; also in the start menu the text is gone; it does correctly point to Admin Tools though.<br />If you want the reg file of these changes let me know. Maybe I am just doing something wrong.<br />Pete<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Mon Jul 22, 2013 5:10 pm</p><hr />
]]></content>
</entry>
</feed>