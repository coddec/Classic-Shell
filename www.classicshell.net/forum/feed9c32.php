<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7865" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-05T08:06:20-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7865</id>
<entry>
<author><name><![CDATA[buketdude]]></name></author>
<updated>2017-09-05T08:06:20-07:00</updated>
<published>2017-09-05T08:06:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33955#p33955</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33955#p33955"/>
<title type="html"><![CDATA[Re: Group Policy - Menu Items For The Windows 7 Style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33955#p33955"><![CDATA[
thanks..that worked!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23523">buketdude</a> — Tue Sep 05, 2017 8:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-05T07:52:44-07:00</updated>
<published>2017-09-05T07:52:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33954#p33954</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33954#p33954"/>
<title type="html"><![CDATA[Re: Group Policy - Menu Items For The Windows 7 Style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33954#p33954"><![CDATA[
For Customize Start Menu tab, you must right click in an empty (white) area and choose &quot;Reset Start Menu&quot;. Then the policy setting should show the customized items but users will be able to override it.<br /><br />To deploy the policy setting though, you will first have to use the Customize Start Menu tab in the Settings UI. Then export the registry values from HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Settings:  MenuItems7 reg value. Copy them to the policy and reset the Start menu on the Customize tab.<br /><br />After the policy setting is in effect and the Start menu has been restarted, the changes should take effect.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Sep 05, 2017 7:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[buketdude]]></name></author>
<updated>2017-09-05T07:27:59-07:00</updated>
<published>2017-09-05T07:27:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33953#p33953</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33953#p33953"/>
<title type="html"><![CDATA[Re: Group Policy - Menu Items For The Windows 7 Style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33953#p33953"><![CDATA[
I don't see the set default for customizing the start menu....I see it on other settings though<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23523">buketdude</a> — Tue Sep 05, 2017 7:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[buketdude]]></name></author>
<updated>2017-09-05T07:12:39-07:00</updated>
<published>2017-09-05T07:12:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33952#p33952</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33952#p33952"/>
<title type="html"><![CDATA[Re: Group Policy - Menu Items For The Windows 7 Style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33952#p33952"><![CDATA[
I am trying to change the &quot;Customize Start Menu&quot;..in GP its called Menu Items for the Windows 7 Style. I am changing the value as well as setting it to unlocked. I will try out your suggestion now..thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23523">buketdude</a> — Tue Sep 05, 2017 7:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-02T00:03:51-07:00</updated>
<published>2017-09-02T00:03:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33915#p33915</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33915#p33915"/>
<title type="html"><![CDATA[Re: Group Policy - Menu Items For The Windows 7 Style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33915#p33915"><![CDATA[
Which policy setting are you having this issue with? When you set it to Unlocked in GPO, are you customizing the value in the Group Policy UI? Also, there is a requirement that in the Settings GUI, the same setting's value must not be changed (it must be the default value). To set a customized setting to its default value in the Settings GUI, right click it and click &quot;Set default&quot;. Then use Group Policy -&gt; Unlocked setting to change the default (without locking it).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Sep 02, 2017 12:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[buketdude]]></name></author>
<updated>2017-08-31T11:55:07-07:00</updated>
<published>2017-08-31T11:55:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33897#p33897</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33897#p33897"/>
<title type="html"><![CDATA[Group Policy - Menu Items For The Windows 7 Style]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7865&amp;p=33897#p33897"><![CDATA[
I am having an issue with this item in Group Policy. If I set it how I want it and put the state to locked it is fine. However, if I put it to unlocked it resets items to default..although it says that it should use the specified value, and allow users to change<br /><br /><strong>If you set the state to 'Unlocked', the default value for the setting will be changed to the specified value. Individual users can override the setting.</strong><br /><br /><br />Any help would be appreciated. My goal is to set it up how we want it when we deploy a laptop but allow users to change these items if they wish<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23523">buketdude</a> — Thu Aug 31, 2017 11:55 am</p><hr />
]]></content>
</entry>
</feed>