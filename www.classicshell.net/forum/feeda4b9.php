<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=1530" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-01-20T09:22:22-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=1530</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-01-20T09:22:22-07:00</updated>
<published>2014-01-20T09:22:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=10248#p10248</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=10248#p10248"/>
<title type="html"><![CDATA[Re: Remember installer settings for updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=10248#p10248"><![CDATA[
In Classic Shell 4.0.4, the installer now preserves the selected components during upgrade so you don't have to de-select the features that are not installed every time you update Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 20, 2014 9:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GregDude]]></name></author>
<updated>2013-10-25T08:32:31-07:00</updated>
<published>2013-10-25T08:32:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7962#p7962</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7962#p7962"/>
<title type="html"><![CDATA[Re: Remember installer settings for updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7962#p7962"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />There is no guarantee that the new version will have the same features as the old one. What if features are added, removed, or renamed?<br /></div><br />Fair enough, but when was the last time the feature set changed? It's been the same 4 (I think) features as long as I've used ClassicShell.  If it is an installer option, perhaps the installer already takes care of this with feature Id's that will either match or not.  If it works *most* of the time... win!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=128">GregDude</a> — Fri Oct 25, 2013 8:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-10-25T08:23:06-07:00</updated>
<published>2013-10-25T08:23:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7961#p7961</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7961#p7961"/>
<title type="html"><![CDATA[Re: Remember installer settings for updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7961#p7961"><![CDATA[
There is no guarantee that the new version will have the same features as the old one. What if features are added, removed, or renamed?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Oct 25, 2013 8:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GregDude]]></name></author>
<updated>2013-10-25T03:19:21-07:00</updated>
<published>2013-10-25T03:19:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7941#p7941</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7941#p7941"/>
<title type="html"><![CDATA[Re: Remember installer settings for updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7941#p7941"><![CDATA[
Excellent! When upgrading, you just want the new version, not a new configuration.<br />Hope the change can go in the next build.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=128">GregDude</a> — Fri Oct 25, 2013 3:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-24T06:46:53-07:00</updated>
<published>2013-10-24T06:46:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7899#p7899</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7899#p7899"/>
<title type="html"><![CDATA[Re: Remember installer settings for updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7899#p7899"><![CDATA[
I guess this is just a matter of setting MigrateFeatures=&quot;yes&quot; for the UpgradeVersion element in the installer: <!-- m --><a class="postlink" href="http://wixtoolset.org/documentation/manual/v3/xsd/wix/upgradeversion.html">http://wixtoolset.org/documentation/man ... rsion.html</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Oct 24, 2013 6:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GregDude]]></name></author>
<updated>2013-10-24T06:06:11-07:00</updated>
<published>2013-10-24T06:06:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7894#p7894</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7894#p7894"/>
<title type="html"><![CDATA[Remember installer settings for updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1530&amp;p=7894#p7894"><![CDATA[
Every time I update ClassicShell, I must uncheck the features I don't use.<br />It would be great if the installer/updater could remember which features were installed last time and start with those options checked and unchecked respectively.<br /><br />For the record, I use the StartMenu to make Windows 8 usable, but don't care for IE8 or Explorer features.  I expect many Windows 8 users would appreciate that configuration.<br /><br />Thanks for the excellent Classic Shell and listening for feature requests <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=128">GregDude</a> — Thu Oct 24, 2013 6:06 am</p><hr />
]]></content>
</entry>
</feed>