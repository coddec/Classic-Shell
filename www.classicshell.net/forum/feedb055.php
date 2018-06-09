<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7852" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-26T13:16:13-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7852</id>
<entry>
<author><name><![CDATA[MattM]]></name></author>
<updated>2017-08-26T13:16:13-07:00</updated>
<published>2017-08-26T13:16:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33846#p33846</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33846#p33846"/>
<title type="html"><![CDATA[Re: Missing Text in Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33846#p33846"><![CDATA[
Cheers will give that a try usually logging on and off dosent fix it but a restart does and then the PC can be fine for a few weeks until it happens again. It’s so annoying as it’s intermittent and I can’t trigger it to happen.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23310">MattM</a> — Sat Aug 26, 2017 1:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-26T12:05:18-07:00</updated>
<published>2017-08-26T12:05:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33845#p33845</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33845#p33845"/>
<title type="html"><![CDATA[Re: Missing Text in Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33845#p33845"><![CDATA[
To test if Classic Shell is the cause, you can temporarily exit the menu. Right click the Start button and choose Exit or run it with the following switch:<br />C:\Program Files\Classic Shell\ClassicStartMenu.exe -exit<br /><br />If your problem persists, then it's not caused by Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Aug 26, 2017 12:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MattM]]></name></author>
<updated>2017-08-26T11:28:47-07:00</updated>
<published>2017-08-26T11:28:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33844#p33844</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33844#p33844"/>
<title type="html"><![CDATA[Re: Missing Text in Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33844#p33844"><![CDATA[
Yep the windows 10 start menu is an issue that’s why I’ve turned to classic shell to keep it working. This issue only happens to PCs with Classic shell installed I’m thinking i should try just installing the classic shell start menu and not the full classic shell but I need to deploy it though group policy and I don’t know how to deploy just the start menu from the msi.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23310">MattM</a> — Sat Aug 26, 2017 11:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-26T09:50:09-07:00</updated>
<published>2017-08-26T09:50:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33840#p33840</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33840#p33840"/>
<title type="html"><![CDATA[Re: Missing Text in Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33840#p33840"><![CDATA[
Why do you think this is related to Classic Shell? Does it happen when the Start Menu is not running and when Classic Shell Explorer extensions are disabled? Classic Shell only adds a Start menu, some Taskbar modifications and Explorer addons. It does not replace File Explorer or modify desktop icons or the Explorer shell's text rendering.<br /><br />This can be a graphics driver issue or a problem with the disastrous and crappy Windows 10.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Aug 26, 2017 9:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MattM]]></name></author>
<updated>2017-08-25T08:49:29-07:00</updated>
<published>2017-08-25T08:49:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33824#p33824</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33824#p33824"/>
<title type="html"><![CDATA[Missing Text in Explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7852&amp;p=33824#p33824"><![CDATA[
I’ve got a strange issue with ClassicShell. I’ve got it running well on Windows 10 but say every 1 in 50 times a user logs on to the PC all text is missing from everywhere desktop icons, start menu, file explorer all the images are there but no text or you can just see the text faintly. After a reboot all is fine again. This issue is happening on multiple PC and happens for all users on that PC until it’s rebooted. I cant find any way to trigger this bug but I did manage to export the registry of on if he PCs both with and without the issue happening but I can see any obvious differences.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23310">MattM</a> — Fri Aug 25, 2017 8:49 am</p><hr />
]]></content>
</entry>
</feed>