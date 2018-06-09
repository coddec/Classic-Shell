<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=1259" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-11-09T03:22:54-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=1259</id>
<entry>
<author><name><![CDATA[Interruption]]></name></author>
<updated>2013-11-09T03:22:54-07:00</updated>
<published>2013-11-09T03:22:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=8587#p8587</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=8587#p8587"/>
<title type="html"><![CDATA[Re: Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=8587#p8587"><![CDATA[
Hi!<br />I have the same problem:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&quot;The module c: \ windows \ syswow64 \ startmenuhelper32.dll failed to register. HRESULT -2147024891. Contact your support personal&quot;<br />&quot;The module c: \ windows \ syswow64 \ startmenuhelper64.dll failed to register. HRESULT -2147024891. Contact your support personal&quot;</div><br /><br />The problem was solved here:<br />DrWeb systray icon - Tools - Settings - Preventive Protection - Level of suspicious activity blocking - Change - Executable files associations<br />Change this from the &quot;Block&quot; to &quot;Ask&quot; ... and confirm when DrWeb ask register StartMenuHelperXX.dll<br /><br />ps. Sory my bad English ... it's all Google Translator <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />))<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2165">Interruption</a> — Sat Nov 09, 2013 3:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-09-17T09:58:13-07:00</updated>
<published>2013-09-17T09:58:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6635#p6635</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6635#p6635"/>
<title type="html"><![CDATA[Re: Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6635#p6635"><![CDATA[
Oh so you are able to install after uninstalling your antivirus? That's clearly a compatibility issue of your AV which is somehow preventing the DLL from registering properly either by blocking access to it or something else. You should report it to the AV vendor so he can update it to not detect that DLL as a false positive which is possibly what it is doing.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Sep 17, 2013 9:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pois22ple]]></name></author>
<updated>2013-09-17T09:48:37-07:00</updated>
<published>2013-09-17T09:48:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6634#p6634</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6634#p6634"/>
<title type="html"><![CDATA[Re: Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6634#p6634"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />You can continue with the installation, then using an admin command prompt type the following commands:<br />regsvr32 startmenuhelper32.dll<br />regsvr32 startmenuhelper64.dll<br />It may still fail, but it may also give you more detailed error information.<br /></div><br />I use on my system (w8 x64) DrWeb antivirus 9.0 beta. <br />When I try execute:<br /><strong>regsvr32 startmenuhelper32.dll<br />regsvr32 startmenuhelper64.dll <br /></strong>I got a message &quot;0x80070005 error trying to register DLL&quot;. <br /><br />I try use then recommendation from <br /><!-- m --><a class="postlink" href="http://social.technet.microsoft.com/Forums/windows/en-US/71037d62-d842-44a3-86df-6ed74df6fc39/0x80070005-error-trying-to-register-dll">http://social.technet.microsoft.com/For ... gister-dll</a><!-- m -->. <br /><br />But, I can install Classic Shell 3.9.5 only, when I unistall DrWeb 9.0 beta.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1603">pois22ple</a> — Tue Sep 17, 2013 9:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-09-17T08:20:37-07:00</updated>
<published>2013-09-17T08:20:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6623#p6623</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6623#p6623"/>
<title type="html"><![CDATA[Re: Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6623#p6623"><![CDATA[
You can continue with the installation, then using an admin command prompt type the following commands:<br />regsvr32 startmenuhelper32.dll<br />regsvr32 startmenuhelper64.dll<br />It may still fail, but it may also give you more detailed error information.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Sep 17, 2013 8:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pois22ple]]></name></author>
<updated>2013-09-16T23:27:22-07:00</updated>
<published>2013-09-16T23:27:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6606#p6606</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6606#p6606"/>
<title type="html"><![CDATA[Re: Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6606#p6606"><![CDATA[
1. My system windows 8 x64. Early I work with version 3.9.3 - this good.<br />Yesterday I decided to upgrade to 3.9.5.<br />The install was a mistake - &quot;Модуль c:\windows\syswow64\startmenuhelper32.dll failed to register. HRESULT -2147024891. Contact your support personal&quot;. My answer was &quot;Cancel&quot;.<br /><br />Then I uninstall version 3.9.3 and try install it again. Now I have previous error - &quot;Модуль c:\windows\syswow64\startmenuhelper32.dll failed to register. HRESULT -2147024891. Contact your support personal&quot;.<br /><br />I uninstall version 3.9.3 and install 3.6.8. This version installation is good.<br /><br />2. Upgrade to 3.9.5 from 3.9.3 on windows 7 (x64 and x86) is good.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1603">pois22ple</a> — Mon Sep 16, 2013 11:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-09-16T08:26:27-07:00</updated>
<published>2013-09-16T08:26:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6600#p6600</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6600#p6600"/>
<title type="html"><![CDATA[Re: Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6600#p6600"><![CDATA[
If a setting is manually modified (shown in bold), then it will preserve its value. If a setting is not bold then it will use whatever the default value is. The default value is something that depends on various factors, like OS version, DPI settings, etc. Also sometimes it changes between Classic Shell versions because I chose to do it. I don't do this often, and I'm doing it during the beta more often than during regular releases.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Sep 16, 2013 8:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-09-16T08:22:21-07:00</updated>
<published>2013-09-16T08:22:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6599#p6599</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6599#p6599"/>
<title type="html"><![CDATA[Re: Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6599#p6599"><![CDATA[
The settings were preserved i.e. the custom button path etc. but the &quot;Replace Start Button&quot; wasn't checked on upgrade.<br />Could it be because this is build 9431 not RTM?<br />Pete<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Mon Sep 16, 2013 8:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-09-16T08:19:28-07:00</updated>
<published>2013-09-16T08:19:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6598#p6598</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6598#p6598"/>
<title type="html"><![CDATA[Re: Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6598#p6598"><![CDATA[
Hm, if you have a custom button it should have been preserved. If you were using the default Classic Shell button then the change is expected. The default was changed for Windows 8.1 to use the OS button.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Sep 16, 2013 8:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PGomersall]]></name></author>
<updated>2013-09-16T08:07:40-07:00</updated>
<published>2013-09-16T08:07:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6597#p6597</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6597#p6597"/>
<title type="html"><![CDATA[Upgrade check?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1259&amp;p=6597#p6597"><![CDATA[
Ivo,<br />First thanks for the RC!<br />I am running 8.1 enterprise with 3.9.3 installed and have a custom start button defined. When I upgrade to 3.9.5 the Start Button is not enabled. Is it possible to do some check for this so that with upgrade the button is enabled if it is previously in use?<br />Regards,<br />Pete<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=566">PGomersall</a> — Mon Sep 16, 2013 8:07 am</p><hr />
]]></content>
</entry>
</feed>