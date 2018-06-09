<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6949" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-10-13T08:48:12-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6949</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-13T08:48:12-07:00</updated>
<published>2016-10-13T08:48:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29813#p29813</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29813#p29813"/>
<title type="html"><![CDATA[Re: Start menu hover delay is ignored and another issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29813#p29813"><![CDATA[
Well, copying the batch file needs admin rights, as well as the installation of Classic Shell.<br />However importing the settings doesn't because it applies to the current user only.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Oct 13, 2016 8:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wazer]]></name></author>
<updated>2016-10-10T16:34:39-07:00</updated>
<published>2016-10-10T16:34:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29788#p29788</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29788#p29788"/>
<title type="html"><![CDATA[Re: Start menu hover delay is ignored and another issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29788#p29788"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />If you exit the start menu, does the taskbar change? If not, then the problem is not related to Classic Shell. Either way, you can use the Classic Shell settings to choose the color and transparency (even texture) for the taskbar.<br /><br />As for the batch file, you don't have to copy the xml file to the folder. Just use it from its current location.<br /></div><br /><br /><br />I thought it needed admin rights?<br /><br />I just tested this<br /><br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">ClassicShellSetup_4_3_0.exe /qn<br />&quot;%PROGRAMFILES%\Classic Shell\ClassicStartMenu.exe&quot; -xml &quot;%~dp0\classicshell_menu_settings.xml&quot;</div><br /><br /><br />Seems to work ok?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15570">wazer</a> — Mon Oct 10, 2016 4:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-10T07:41:51-07:00</updated>
<published>2016-10-10T07:41:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29781#p29781</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29781#p29781"/>
<title type="html"><![CDATA[Re: Start menu hover delay is ignored and another issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29781#p29781"><![CDATA[
If you exit the start menu, does the taskbar change? If not, then the problem is not related to Classic Shell. Either way, you can use the Classic Shell settings to choose the color and transparency (even texture) for the taskbar.<br /><br />As for the batch file, you don't have to copy the xml file to the folder. Just use it from its current location.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Oct 10, 2016 7:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wazer]]></name></author>
<updated>2016-10-09T21:27:21-07:00</updated>
<published>2016-10-09T21:27:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29774#p29774</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29774#p29774"/>
<title type="html"><![CDATA[Re: Start menu hover delay is ignored and another issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29774#p29774"><![CDATA[
I made this..<br /><br />Can it be done better?<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">@echo off<br /><br />:: BatchGotAdmin<br />:-------------------------------------<br />REM  --&gt; Check for permissions<br />&gt;nul 2&gt;&amp;1 &quot;%SYSTEMROOT%\system32\cacls.exe&quot; &quot;%SYSTEMROOT%\system32\config\system&quot;<br /><br />REM --&gt; If error flag set, we do not have admin.<br />if '%errorlevel%' NEQ '0' (<br />    echo Requesting administrative privileges...<br />    goto UACPrompt<br />) else ( goto gotAdmin )<br /><br />:UACPrompt<br />    echo Set UAC = CreateObject^(&quot;Shell.Application&quot;^) &gt; &quot;%temp%\getadmin.vbs&quot;<br />    echo UAC.ShellExecute &quot;%~s0&quot;, &quot;&quot;, &quot;&quot;, &quot;runas&quot;, 1 &gt;&gt; &quot;%temp%\getadmin.vbs&quot;<br /><br />    &quot;%temp%\getadmin.vbs&quot;<br />    exit /B<br /><br />:gotAdmin<br />    if exist &quot;%temp%\getadmin.vbs&quot; ( del &quot;%temp%\getadmin.vbs&quot; )<br />    pushd &quot;%CD%&quot;<br />    CD /D &quot;%~dp0&quot;<br /><br /><br />:: script below here<br />:-------------------------------------<br /><br /><br />::MSIEXEC /i &quot;ClassicShellSetup_4_3_0.exe&quot; APPLICATIONFOLDER=&quot;%PROGRAMFILES%\Classic Shell&quot; /qn /norestart<br />ClassicShellSetup_4_3_0.exe /qn<br />xcopy classicshell_menu_settings.xml /f /Y &quot;%PROGRAMFILES%\Classic Shell&quot;<br />pushd c:<br />timeout /T 1 /NOBREAK &gt;NUL<br />CD &quot;%PROGRAMFILES%\Classic Shell&quot;<br />timeout /T 1 /NOBREAK &gt;NUL<br />ClassicStartMenu.exe -xml &quot;classicshell_menu_settings.xml&quot;</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15570">wazer</a> — Sun Oct 09, 2016 9:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wazer]]></name></author>
<updated>2016-10-09T20:48:58-07:00</updated>
<published>2016-10-09T20:48:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29773#p29773</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29773#p29773"/>
<title type="html"><![CDATA[Re: Start menu hover delay is ignored and another issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29773#p29773"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />The menu hover time is controlled by the &quot;Menu delay&quot; setting in the General Behavior tab, and by default is equal to the system setting.<br />The &quot;sub-menu animation speed&quot; is about how long the fade-in animation will take.<br /><br />The transparency of the taskbar is controlled from the Taskbar tab. If &quot;Customize taskbar&quot; is unchecked, Classic Shell will not touch the taskbar look at all.<br /></div><br /><br />Thanks for the info.<br /><br />I corrected the default sub animation speed to 400 which is windows default, it was on 0.<br /><br /><br />However I have not customized task bar checked and it still gave me transparency even tho windows was set not to.<br /><br /><br />And to another point maybe its feature wize and maybe its already here?.<br /><br />But would be cool if we could make silent installers with param to take settings from already backup xml file?<br /><br />like<br /><br />classic_shell_setup.exe /silent /import backup.xml<br /><br />Obvious backup.xml would be in the same folder as classic shell installer<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15570">wazer</a> — Sun Oct 09, 2016 8:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-09T19:53:29-07:00</updated>
<published>2016-10-09T19:53:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29772#p29772</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29772#p29772"/>
<title type="html"><![CDATA[Re: Start menu hover delay is ignored and another issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29772#p29772"><![CDATA[
The menu hover time is controlled by the &quot;Menu delay&quot; setting in the General Behavior tab, and by default is equal to the system setting.<br />The &quot;sub-menu animation speed&quot; is about how long the fade-in animation will take.<br /><br />The transparency of the taskbar is controlled from the Taskbar tab. If &quot;Customize taskbar&quot; is unchecked, Classic Shell will not touch the taskbar look at all.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Oct 09, 2016 7:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wazer]]></name></author>
<updated>2016-10-09T19:14:47-07:00</updated>
<published>2016-10-09T19:14:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29771#p29771</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29771#p29771"/>
<title type="html"><![CDATA[Start menu hover delay is ignored and another issue]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6949&amp;p=29771#p29771"><![CDATA[
So I recorded this video so you can better see whats going on.<br /><br />When moving my mouse over all programs and shutdown &quot;&gt;&quot; logo the menus instantly appears.<br /><br />Also it seems that you cannot remove the popups/hover/expand when moving mouse away from startmenu aiming at other programs or inside the startmenu random places will close them again.<br /><br />I think they should follow the default windows hover delay or at least read it from the registry<br /><br />which is.<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Serialize&quot; StartupDelayInMSec <br />HKCU\Control Panel\Desktop&quot; MenuShowDelay<br />HKCU\Control Panel\Mouse&quot;MouseHoverTime</div><br /><br /><br />Forum error?<br /><br />The forum board does not regnoize youtu<strong>.</strong>be urls.<br /><br />corrected to default youtube.com url.<br /><br /><br />Anyways the video.<br /> <strong>script</strong> <br /><br /><br /><br /><br />Right now my task-bar and everything has disabled transparency but start menu is transparency as see on screenshot.<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&#91;HKEY_CURRENT_USER\SOFTWARE\Microsoft\Windows\CurrentVersion\Themes\Personalize&#93;<br />&quot;EnableTransparency&quot;=dword:00000000</div><br /><br /><br />I know you can find it under Skin &gt; opaque (enable/disable)<br /><br />But read registry and if trans enable make it fit?<br /><br /><br /><br /><br /><img src="http://image.prntscr.com/image/c149174b88684d7da1709c99a8e729ed.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15570">wazer</a> — Sun Oct 09, 2016 7:14 pm</p><hr />
]]></content>
</entry>
</feed>