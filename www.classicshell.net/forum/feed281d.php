<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=269" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-01-20T00:11:02-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=269</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-01-20T00:11:02-07:00</updated>
<published>2014-01-20T00:11:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=10222#p10222</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=10222#p10222"/>
<title type="html"><![CDATA[Re: Classic Start Menu Settings for All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=10222#p10222"><![CDATA[
Classic Shell 4.0.4 introduces Group Policy support for its own settings. The file, C:\Program Files\Classic Shell\PolicyDefinitions.zip includes the policy definitions. If you have an Active Directory domain, extract the files to %logonserver%\sysvol\%userdnsdomain%\policies\PolicyDefinitions\ or whatever your Group Policy Central Store is. For Local Group Policy, extract them to C:\Windows\PolicyDefinitions folder.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 20, 2014 12:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-10-29T09:59:06-07:00</updated>
<published>2013-10-29T09:59:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=8172#p8172</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=8172#p8172"/>
<title type="html"><![CDATA[Re: Classic Start Menu Settings for All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=8172#p8172"><![CDATA[
The settings in HKLM don't go into a Settings sub-key. Use HKLM\Software\IvoSoft\ClassicStartMenu directly.<br />Also the items you currently have in HKLM\Software\IvoSoft\ClassicStartMenu, like &quot;ItemRanks&quot; and &quot;CSettingsDlg&quot; are ignored. They are ONLY per-user.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Oct 29, 2013 9:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thoffman]]></name></author>
<updated>2013-10-29T09:54:28-07:00</updated>
<published>2013-10-29T09:54:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=8171#p8171</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=8171#p8171"/>
<title type="html"><![CDATA[Re: Classic Start Menu Settings for All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=8171#p8171"><![CDATA[
Can you tell me what I'm doing wrong?  I had this working at one time on another computer, but for some reason I can't make this work anymore.  This is a domain joined computer, with the following registry key copied over to local machine, but anytime signing in with a new user all of my custom settings don't come across.  I'm running Windows 8.1<br /><br /><br /><br /><br /><br /><br /><br /><br />Windows Registry Editor Version 5.00<br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft]<br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicExplorer]<br />&quot;ShowedToolbar&quot;=dword:00000001<br />&quot;NewLine&quot;=dword:00000001<br />&quot;CSettingsDlg&quot;=hex:c8,01,00,00,c2,00,00,00,00,00,00,00,00,00,00,00,26,08,00,00,\<br />  00,00,0e,00<br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicExplorer\Settings]<br />&quot;Version&quot;=dword:04000002<br />&quot;TreeStyle&quot;=&quot;Vista&quot;<br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicShell]<br />&quot;Version&quot;=dword:00009c42<br />&quot;Path&quot;=&quot;C:\\Program Files\\Classic Shell\\&quot;<br />&quot;DefaultLanguage&quot;=&quot;&quot;<br />&quot;LastUpdateVersion&quot;=dword:04000002<br />&quot;LastUpdateTime&quot;=dword:0037376a<br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicShell\Settings]<br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicStartMenu]<br />&quot;ShowedStyle2&quot;=dword:00000001<br />&quot;ItemRanks&quot;=hex:48,53,4c,43,01,00,00,00,00,00,00,00,15,16,80,00,03,00,00,00,eb,\<br />  d3,ce,01,20,f1,44,0d,02,00,00,00,b9,d1,ce,01,7f,4f,ef,2f,03,00,00,00,f3,d3,\<br />  ce,01,74,b8,74,3f,01,00,00,00,b9,d1,ce,01,6b,3e,c4,7e,06,00,00,00,03,d2,ce,\<br />  01,49,6b,ed,94,01,00,00,00,ee,d1,ce,01,f9,1b,8e,a7,03,00,00,00,b7,d1,ce,01,\<br />  88,5d,69,b8,01,00,00,00,ef,d1,ce,01,70,fa,6f,c2,04,00,00,00,ff,d1,ce,01,36,\<br />  d4,8f,e3,04,00,00,00,b4,d1,ce,01,16,2c,93,e3,01,00,00,00,b8,d1,ce,01,f5,d5,\<br />  11,f7,03,00,00,00,df,d1,ce,01<br />&quot;CSettingsDlg&quot;=hex:c8,01,00,00,90,00,00,00,00,00,00,00,00,00,00,00,ea,0d,00,00,\<br />  00,00,00,00<br />&quot;LastProgramsTime&quot;=hex(b):35,c7,29,e4,f3,d3,ce,01<br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicStartMenu\MRU]<br />&quot;0&quot;=&quot;C:\\Windows\\regedit.exe&quot;<br />&quot;1&quot;=&quot;::{26EE0668-A00A-44D7-9371-BEB064C98683}\\0\\::{7B81BE6A-CE2B-4676-A29E-EB907A5126C5}&quot;<br />&quot;2&quot;=&quot;C:\\Windows\\System32\\secpol.msc&quot;<br />&quot;3&quot;=&quot;C:\\ProgramData\\Microsoft\\Windows\\Start Menu\\Programs\\Nitro Pro 8.lnk&quot;<br />&quot;4&quot;=&quot;::{26EE0668-A00A-44D7-9371-BEB064C98683}\\0\\::{36EEF7DB-88AD-4E81-AD49-0E313F0C35F8}&quot;<br />&quot;5&quot;=&quot;C:\\Windows\\System32\\cmd.exe&quot;<br />[HKEY_LOCAL_MACHINE\SOFTWARE\IvoSoft\ClassicStartMenu\Settings]<br />&quot;Version&quot;=dword:04000002<br />&quot;StartButtonType&quot;=&quot;CustomButton&quot;<br />&quot;StartButtonPath&quot;=&quot;%SystemDrive%\\Win8 Classic Shell\\CVJdp16.png&quot;<br />&quot;SkinW7&quot;=&quot;Windows 8&quot;<br />&quot;SkinVariationW7&quot;=&quot;&quot;<br />&quot;SkinOptionsW7&quot;=&quot;C26EAF5D|5D3248DC|1FC64124|5EA361A2|6EDFA36A|2E838408|22C9A1E2|0663DC39|&quot;<br />&quot;DisableHotCorner&quot;=&quot;DisableAll&quot;<br />&quot;SkipMetro&quot;=dword:00000001<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2044">thoffman</a> — Tue Oct 29, 2013 9:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-28T11:34:36-07:00</updated>
<published>2013-02-28T11:34:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1520#p1520</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1520#p1520"/>
<title type="html"><![CDATA[Re: Classic Start Menu Settings for All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1520#p1520"><![CDATA[
Look at the Administrative Settings section in the help. It explains the system and even has pictures.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Feb 28, 2013 11:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Joshab1177]]></name></author>
<updated>2013-02-28T11:05:35-07:00</updated>
<published>2013-02-28T11:05:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1519#p1519</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1519#p1519"/>
<title type="html"><![CDATA[Re: Classic Start Menu Settings for All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1519#p1519"><![CDATA[
I work for a college, and we are looking to use Classic Shell for our Win8 machines. I want to make it where all settings made under one account is set for all and locked down so they can not change it. I see above that mugabemkomo said how he did it. Not understanding how he did it though. Could someone explain how to do it?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=393">Joshab1177</a> — Thu Feb 28, 2013 11:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-02-19T09:56:07-07:00</updated>
<published>2013-02-19T09:56:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1236#p1236</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1236#p1236"/>
<title type="html"><![CDATA[Re: Classic Start Menu Settings for All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1236#p1236"><![CDATA[
Right click the Start button -&gt; Help. Look at the Administrative Settings section. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> You can lock down specific settings for all users or simply change the defaults for all users without locking them.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Feb 19, 2013 9:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mugabemkomo]]></name></author>
<updated>2013-02-19T07:56:20-07:00</updated>
<published>2013-02-19T07:56:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1233#p1233</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1233#p1233"/>
<title type="html"><![CDATA[Classic Start Menu Settings for All Users]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=269&amp;p=1233#p1233"><![CDATA[
Hi,<br /><br />recently I installed Classic Start Menu on Windows Server 2012.<br />I was wondering how I could use one setting for all users, or at least use the same basic template for all Users.<br /><br />Is that possible somehow?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=346">mugabemkomo</a> — Tue Feb 19, 2013 7:56 am</p><hr />
]]></content>
</entry>
</feed>