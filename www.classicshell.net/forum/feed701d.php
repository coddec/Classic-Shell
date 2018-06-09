<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=1191" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-08-30T08:52:18-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=1191</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-30T08:52:18-07:00</updated>
<published>2013-08-30T08:52:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6232#p6232</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6232#p6232"/>
<title type="html"><![CDATA[Re: Classic Shell on 2012 Servers - Security and Stability]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6232#p6232"><![CDATA[
Here's the official privacy policy: <!-- m --><a class="postlink" href="http://www.classicshell.net/privacy/">http://www.classicshell.net/privacy/</a><!-- m --><br />The only &quot;phone home&quot; feature is the auto-update and it can be disabled (or not installed in the first place).<br /><br />Versions 3.9.0 and later are digitally signed. You can at least trust that nobody has tampered with the installer since I made it. Versions 3.9.0 and later also don't use a service, so all pieces of Classic Shell (aside from the installer) run at normal integrity level, which improves security.<br /><br />Do not use the &quot;-nohook&quot; switch, particularly after version 3.9.0. It does not work in all cases and can cause performance issues.<br /><br />Also as the FAQ says if you have a legitimate need to a peek at the source code it can be arranged.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Aug 30, 2013 8:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-08-30T07:44:24-07:00</updated>
<published>2013-08-30T07:44:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6228#p6228</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6228#p6228"/>
<title type="html"><![CDATA[Re: Classic Shell on 2012 Servers - Security and Stability]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6228#p6228"><![CDATA[
To the best of my knowledge, Ivo (the developer) hasn't coded any backdoors in Classic Shell. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> You can check out the source yourself of the current stable version to check for yourself. The new beta version's source isn't open for reasons mentioned here: <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#general_oss">http://www.classicshell.net/faq/#general_oss</a><!-- m --> Disabling it in the firewall will only cause it to be unable to check for updates, no other functionality should be affected.<br /><br />As for stability, except for a rare crash which any software can have due to some incompatibility with other software or rare software/hardware configuration, Classic Shell is extremely stable. On production servers, it is recommended of course that you download the stable version which is used by millions daily. For extra stability on the server, you can install only the components you need.<br />The Start Menu EXE hooks into the Explorer.exe process, so if ever Explorer crashes become a problem in a very rare event, you can simply open the menu with a shortcut to ClassicStartMenu.exe and the -nohook parameter pinned to the taskbar. <strong>Although -nohook is really intended for troubleshooting, not for regular usage, do not use it</strong>. For regular usage, it's safe to run the Start Menu and allow it to hook into Explorer.exe (that is the only way it can integrate well with the system). It is extremely stable.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Aug 30, 2013 7:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrHaugen]]></name></author>
<updated>2013-08-30T07:34:48-07:00</updated>
<published>2013-08-30T07:34:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6227#p6227</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6227#p6227"/>
<title type="html"><![CDATA[Classic Shell on 2012 Servers - Security and Stability]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1191&amp;p=6227#p6227"><![CDATA[
Hi<br /><br />First I want to say thanks for creating a very nice application. I've used it for quite some time now and it's one of the best I've tried for this sort of tasks.<br /><br />We're considering using Classic Shell on our Windows 2012 servers in our company. We've got lots of servers, and more and more of them will become Windows 2012 from this point and forward.<br /><br />The biggest issue are our security concerns because it's created by a third party developer and not Microsoft. I'm not totally trusting Microsoft either after the NSA stuff going on, but let's not get there. Are there ANYTHING you guys can give us to ease our skepticism at all here? Is there any way to make sure this app does not include back doors, or phone home abilities? Like blocking the app in Windows FW would probably be one possibility. But it will not cover anything. I do certainly not believe you would add such things to the app, but I promise my boss that you don't either.<br /><br />The second biggest issue are stability. Could this app give us problems on production servers? Have there been issues with stability? And if there are issues, is it likely just to be problems with the Classic Shell program only, or underlaying components that could potentially bring the server to it's knees? I'm sure the older 3.6.8 version would be pretty stable, but even this one could create some problems perhaps?<br /><br /><br />I'd appreciate any help you can give us!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1486">MrHaugen</a> — Fri Aug 30, 2013 7:34 am</p><hr />
]]></content>
</entry>
</feed>