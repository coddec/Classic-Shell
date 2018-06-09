<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=526" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-04-17T11:58:05-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=526</id>
<entry>
<author><name><![CDATA[beatsurfer]]></name></author>
<updated>2013-04-17T11:58:05-07:00</updated>
<published>2013-04-17T11:58:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2820#p2820</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2820#p2820"/>
<title type="html"><![CDATA[Re: Win8 Shut down and install Updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2820#p2820"><![CDATA[
Thank you for your fast and usefull reply. It's much better now<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=591">beatsurfer</a> — Wed Apr 17, 2013 11:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-14T20:07:28-07:00</updated>
<published>2013-04-14T20:07:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2751#p2751</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2751#p2751"/>
<title type="html"><![CDATA[Re: Win8 Shut down and install Updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2751#p2751"><![CDATA[
Unfortunately, there is no API provided by MS for &quot;Install Updates and Shutdown&quot; functionality. But you can customize the Shutdown actions on the Customize Start Menu tab.<br /><br />Open Classic Start Menu Settings, enable All Settings radio button and go to Customize Start Menu tab. In the left column, double click &quot;ShutdownBoxItem&quot;. Its &quot;Command&quot; is the default action. You can set the default to whatever you want.<br /><br />You can also add a custom command or item for &quot;Install Updates and Restart or Shutdown&quot; by dragging a &quot;Custom Command&quot; from the right column. There is this free third party tool called WUInstall: <!-- m --><a class="postlink" href="http://www.wuinstall.com/index.php/en">http://www.wuinstall.com/index.php/en</a><!-- m --> that completely controls every aspect of Windows Update installation. Free version has dozens of switches including check, download, install and reboot/shutdown automatically. Since Classic Start Menu allows for any custom command, we can add a command to WUInstall.exe which calls the right switches. e.g. WUInstall /silent /install /reboot or WUInstall /quiet /install /shutdown.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Apr 14, 2013 8:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[beatsurfer]]></name></author>
<updated>2013-04-14T14:25:33-07:00</updated>
<published>2013-04-14T14:25:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2747#p2747</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2747#p2747"/>
<title type="html"><![CDATA[Win8 Shut down and install Updates]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=526&amp;p=2747#p2747"><![CDATA[
In Windows 8 when new Updates are ready to install, it shuld be a Menu Entry called &quot;Install Updates AND Shutdown&quot; in the Shut down menu. Now i only have &quot;Shut down&quot; OR &quot;Install Updates and restart&quot; Entries. Plus the default Menu Entry jumps to &quot;Switch User&quot;. It's very bad when you don't look exactly to the Monitor and just press Enter and walk away.<br />In Windows 7 automatically a yellow Shield Icon cames to the Shut down Button in the Startmenu. <br />Please do something like that for Windows 8 <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=591">beatsurfer</a> — Sun Apr 14, 2013 2:25 pm</p><hr />
]]></content>
</entry>
</feed>