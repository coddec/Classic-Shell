<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=139" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-01-24T13:51:42-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=139</id>
<entry>
<author><name><![CDATA[Cuvis]]></name></author>
<updated>2013-01-24T13:51:42-07:00</updated>
<published>2013-01-24T13:51:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=533#p533</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=533#p533"/>
<title type="html"><![CDATA[Re: Does per-user configuration override HKLM configuration?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=533#p533"><![CDATA[
That's perfect.  We lock our users out of Regedit using Group Policy, so the fact that they can re-enable settings is no problem at all.  Thanks!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=195">Cuvis</a> — Thu Jan 24, 2013 1:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-24T13:02:18-07:00</updated>
<published>2013-01-24T13:02:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=532#p532</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=532#p532"/>
<title type="html"><![CDATA[Re: Does per-user configuration override HKLM configuration?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=532#p532"><![CDATA[
HKLM takes precedence obviously, otherwise it defeats the purpose of allowing an admin to lock certain settings.<br />If you have a way to prevent users from accessing the HKCU (like with regedit), you can adjust their settings and then set EnableSettings to 0 to disable the settings UI. If you set EnableSettings to 0 in HKCU, it will be per user. If you set it in HKLM, it will be for all users. Of course if a user has access to regedit he can re-enable his settings. He won't even need to, as he can edit the settings directly in the registry.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jan 24, 2013 1:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Cuvis]]></name></author>
<updated>2013-01-24T12:56:11-07:00</updated>
<published>2013-01-24T12:56:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=531#p531</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=531#p531"/>
<title type="html"><![CDATA[Re: Does per-user configuration override HKLM configuration?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=531#p531"><![CDATA[
Damn, that's a problem, then.  Thanks for the prompt answer, even if it wasn't what I wanted to hear.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=195">Cuvis</a> — Thu Jan 24, 2013 12:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-24T12:55:19-07:00</updated>
<published>2013-01-24T12:55:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=530#p530</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=530#p530"/>
<title type="html"><![CDATA[Re: Does per-user configuration override HKLM configuration?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=530#p530"><![CDATA[
HKLM.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jan 24, 2013 12:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Cuvis]]></name></author>
<updated>2013-01-24T12:53:48-07:00</updated>
<published>2013-01-24T12:53:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=529#p529</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=529#p529"/>
<title type="html"><![CDATA[Re: Does per-user configuration override HKLM configuration?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=529#p529"><![CDATA[
OK, but if it exists in both, which one takes precedence?  The HKLM setting or the HKCU setting?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=195">Cuvis</a> — Thu Jan 24, 2013 12:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-24T12:52:54-07:00</updated>
<published>2013-01-24T12:52:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=528#p528</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=528#p528"/>
<title type="html"><![CDATA[Re: Deploying Classic Start Menu in an enterprise]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=528#p528"><![CDATA[
If a setting exists in the HKLM branch or in both, it is locked. If it exists only in HKCU branch, it is user-changeable. It's like Group Policy's Computer Configuration vs User Configuration, but unlike Policy, it's not enforced if in HKCU. So more like Group Policy Preferences.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jan 24, 2013 12:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Cuvis]]></name></author>
<updated>2013-01-24T12:53:05-07:00</updated>
<published>2013-01-24T12:48:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=527#p527</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=527#p527"/>
<title type="html"><![CDATA[Does per-user configuration override HKLM configuration?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=139&amp;p=527#p527"><![CDATA[
I'm looking at deploying Classic Start Menu in an enterprise as part of our migration to Win 7. I saw in another topic that one can &quot;lock&quot; settings down by exporting them from the HKCU hive in the registry and putting them into the HKLM hive, but I'd like to also have some per-user settings (for instance, removing the Control Panel from the menu for non-admin users). Would I be able to write these directly into HKCU and have them override the settings in HKLM? If not, is there a way to lock out the settings dialog and still be able to write settings into HKCU?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=195">Cuvis</a> — Thu Jan 24, 2013 12:48 pm</p><hr />
]]></content>
</entry>
</feed>