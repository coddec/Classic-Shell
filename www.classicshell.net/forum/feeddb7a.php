<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=8179" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2018-04-19T04:15:26-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=8179</id>
<entry>
<author><name><![CDATA[fonpaolo]]></name></author>
<updated>2018-04-19T04:15:26-07:00</updated>
<published>2018-04-19T04:15:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35754#p35754</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35754#p35754"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35754#p35754"><![CDATA[
I don't know if this is applicable with CS or not, however I'm using it often (thanks to Windows 10... <img src="http://www.classicshell.net/forum/images/smilies/icon_mad.gif" alt=":mad:" title="Mad" /> ).<br />Open regedit (Win+r):<br />- for 32 bit system, find &quot;HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Run&quot;, add a new value, call it &quot;ClassicShell&quot; and edit the path (empty) with the path to ClassicShell.exe.<br />- for 64 bit system. find &quot;HKEY_LOCAL_MACHINE\SOFTWARE\Wow64Node\Microsoft\Windows\CurrentVersion\Run&quot; and do the same as above.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16365">fonpaolo</a> — Thu Apr 19, 2018 4:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2018-04-19T01:11:15-07:00</updated>
<published>2018-04-19T01:11:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35753#p35753</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35753#p35753"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35753#p35753"><![CDATA[
Im on a fairly recent build 1709 ver 16299.371 and classic shell works fine. also its unlikely they have or ever will release an 'intentional' patch to break classic shell. Not that they have to, because there are so many ways it happens naturally <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />When you installed, did you just download the installer and run it on the new copy of windows? or try to copy the folder from your old copy? (probably not, but I thought I'd ask)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Thu Apr 19, 2018 1:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[metalgina]]></name></author>
<updated>2018-04-18T16:11:06-07:00</updated>
<published>2018-04-18T16:11:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35752#p35752</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35752#p35752"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35752#p35752"><![CDATA[
I'm having the EXACT same problem right now! I've had to reinstall windows 10 AGAIN because of it's psychotic personality problems. The install before this one my CM worked fine, as it always has. But now, it doesn't start! I've tried EVERYTHING and it won't start automatically. I have to manually start it. I'm thinking W10 is killing it or something, but the install just before this one it was working fine, could they have put an update in there to ignore CM -autorun this quickly? Please, I would really like some help on this. Is CM going to me a manual program from now on or do I just have a buggy install?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=816">metalgina</a> — Wed Apr 18, 2018 4:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-12-19T17:43:04-07:00</updated>
<published>2017-12-19T17:43:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35079#p35079</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35079#p35079"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35079#p35079"><![CDATA[
If that is your classic shell install directory...<br />basically look for this file:  <span style="background-color:#dce1e5;"><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">ClassicExplorerSettings.exe</span></span></span><br /><span style="background-color:#dce1e5;"><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">and thats the directory you need.</span></span></span><br /><br />Also if you do as IVO said, he can get to the real root of the issue and fix it proper (so itl startup right away)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Dec 19, 2017 5:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[freegamesapk]]></name></author>
<updated>2017-12-19T16:26:04-07:00</updated>
<published>2017-12-19T16:26:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35078#p35078</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35078#p35078"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35078#p35078"><![CDATA[
i have windows in e drive so and i am not getting C:\Users\blood\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup should i use E:\Users\blood\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup ?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=28496">freegamesapk</a> — Tue Dec 19, 2017 4:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-12-19T10:09:57-07:00</updated>
<published>2017-12-19T10:09:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35074#p35074</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35074#p35074"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35074#p35074"><![CDATA[
The -launch text should be outside the quotes<br /><br />For me its: <br />&quot;C:\Program Files\Classic Shell\ClassicExplorerSettings.exe&quot; -launch<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Dec 19, 2017 10:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-12-19T09:56:06-07:00</updated>
<published>2017-12-19T09:56:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35073#p35073</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35073#p35073"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35073#p35073"><![CDATA[
Download the Classic Shell Utility from here: <!-- m --><a class="postlink" href="http://www.classicshell.net/downloads">http://www.classicshell.net/downloads</a><!-- m --><br />Run it, choose the setting to save a system log, and send that log to me. You can attach it here or drop it into the mediafire drop folder.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Dec 19, 2017 9:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gstewart8]]></name></author>
<updated>2017-12-19T07:15:49-07:00</updated>
<published>2017-12-19T07:15:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35072#p35072</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35072#p35072"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35072#p35072"><![CDATA[
Thanks for the quick response.<br />CS still does not load automatically. I wonder if I am using the correct shortcut. <br />This is what I entered in the shortcut field and placed in the startup folder: &quot;ClassicStartMenu.exe - launch&quot;<br />Is this correct?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27410">gstewart8</a> — Tue Dec 19, 2017 7:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2017-12-18T19:45:08-07:00</updated>
<published>2017-12-18T19:45:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35067#p35067</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35067#p35067"/>
<title type="html"><![CDATA[Re: CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35067#p35067"><![CDATA[
Throw a shortcut to the classic shell settings in this folder:<br />C:\Users\blood\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup<br /><br />Then right click this shortcut, select properties, and add -launch to the end of the text in the target field<br /><br />This should run classic shell with a bit of a delay (5~10 seconds after startup) but automatically<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Dec 18, 2017 7:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gstewart8]]></name></author>
<updated>2017-12-18T17:15:01-07:00</updated>
<published>2017-12-18T17:15:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35066#p35066</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35066#p35066"/>
<title type="html"><![CDATA[CS does not launch with Windows.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8179&amp;p=35066#p35066"><![CDATA[
Although I have selected the option to start CS on windows startup, this does not happen. I have to launch the setting menu first after which CS works. I am using Win 10. Does anyone have a fix for this annoying problem? Thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27410">gstewart8</a> — Mon Dec 18, 2017 5:15 pm</p><hr />
]]></content>
</entry>
</feed>