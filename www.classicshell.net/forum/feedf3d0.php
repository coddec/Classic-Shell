<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=1270" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-09-18T19:30:47-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=1270</id>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-09-18T19:30:47-07:00</updated>
<published>2013-09-18T19:30:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6681#p6681</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6681#p6681"/>
<title type="html"><![CDATA[Re: Disable initial switch to Aero Glass]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6681#p6681"><![CDATA[
Thank you, I will look into it. I expect that &quot;switch&quot; to leave something in the registry, like:<br /><br />&quot;AeroShown&quot;=&quot;1&quot; or something of that sort. Windows has to let itself know it has already done it once.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Wed Sep 18, 2013 7:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-18T10:26:12-07:00</updated>
<published>2013-09-18T10:26:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6676#p6676</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6676#p6676"/>
<title type="html"><![CDATA[Re: Disable initial switch to Aero Glass]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6676#p6676"><![CDATA[
Not sure if the initial switch can be prevented but maybe you can use Winaero Theme Switcher to switch back to the Basic theme after it automatically turns on Aero Glass: <!-- m --><a class="postlink" href="http://winaero.com/comment.php?comment.news.209">http://winaero.com/comment.php?comment.news.209</a><!-- m --> It supports a cmd line syntax:<br /><br />ThemeSwitcher.exe %windir%\Resources\Ease of Access Themes\basic.theme<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Sep 18, 2013 10:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-09-17T13:53:26-07:00</updated>
<published>2013-09-17T13:53:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6644#p6644</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6644#p6644"/>
<title type="html"><![CDATA[Disable initial switch to Aero Glass]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1270&amp;p=6644#p6644"><![CDATA[
You likely know that after you install Windows 7 and a video driver, after a short while OS checks performance and automatically switches to Aero Glass. I would like to prevent that first-time switch.<br /><br />I have disabled machine performance check (that switches between Glass and Basic as you, for example, run a game):<br /><br />[HKEY_CURRENT_USER\Software\Microsoft\Windows\DWM]<br />&quot;UseMachineCheck&quot;=dword:00000000<br /><br />My Windows installs with performance settings set to Custom:<br /><br />[HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\VisualEffects]<br />&quot;VisualFXSetting&quot;=dword:00000003<br /><br />My Desktop Composition should be disabled by default:<br /><br />[HKEY_CURRENT_USER\Software\Microsoft\Windows\DWM]<br />&quot;CompositionPolicy&quot;=dword:00000001<br /><br />--------------------------------------<br /><br />And STILL it switches to Aero Glass after a fresh install the instant it detects my machine is capable of it. I would like to know where is that setting (likely a registry key).<br /><br />&quot;CompositionPolicy&quot; switches to &quot;0&quot;, by the way.<br /><br />I don't want to completely remove Aero Glass or make Desktop Composition impossible to be turned on. I don't want to break things. I Just want to disable the initial switch.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Tue Sep 17, 2013 1:53 pm</p><hr />
]]></content>
</entry>
</feed>