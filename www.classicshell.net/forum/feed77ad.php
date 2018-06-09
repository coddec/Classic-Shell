<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=1742" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-08T03:31:52-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=1742</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-08T03:31:52-07:00</updated>
<published>2016-08-08T03:31:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=28386#p28386</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=28386#p28386"/>
<title type="html"><![CDATA[Re: Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=28386#p28386"><![CDATA[
Classic Shell 4.3.0 now has built-in Explorer toolbar buttons for this.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Aug 08, 2016 3:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Agent007]]></name></author>
<updated>2014-08-18T09:04:32-07:00</updated>
<published>2014-08-18T09:04:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=14484#p14484</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=14484#p14484"/>
<title type="html"><![CDATA[Re: Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=14484#p14484"><![CDATA[
Hello.<br />The script for show hidden files from askvg.com works perfectly, but show <span style="text-decoration: underline">all</span> hidden files an folders, including the special <strong>system</strong> files (SHidden or &quot;superHidden&quot;).<br />In the majority of cases, it is not necessary to show hidden system files.<br />I think we can distinguish two types of hidden files with two scripts. I tried it and it works:<br /><br /><strong>Script for Hidden Files:</strong><br /><em>Hidden = &quot;HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced\Hidden&quot;<br />SHidden = &quot;HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced\ShowSuperHidden&quot;<br />Set Sh = WScript.CreateObject(&quot;WScript.Shell&quot;)<br />St = Sh.RegRead(Hidden)<br />If St = 2 Then<br />Sh.RegWrite Hidden, 1, &quot;REG_DWORD&quot;<br />Else<br />Sh.RegWrite Hidden, 2, &quot;REG_DWORD&quot;<br />Sh.RegWrite SHidden, 0, &quot;REG_DWORD&quot;<br />End If<br />Sh.SendKeys(&quot;{F5}&quot;)</em><br /><br /><strong>Script for SystemHidden Files:</strong><br /><em>Hidden = &quot;HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced\Hidden&quot;<br />SHidden = &quot;HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced\ShowSuperHidden&quot;<br />Set Sh = WScript.CreateObject(&quot;WScript.Shell&quot;)<br />St = Sh.RegRead(SHidden)<br />If St = 0 Then<br />Sh.RegWrite SHidden, 1, &quot;REG_DWORD&quot;<br />Sh.RegWrite Hidden, 1, &quot;REG_DWORD&quot;<br />Else<br />Sh.RegWrite SHidden, 0, &quot;REG_DWORD&quot;<br />End If<br />Sh.SendKeys(&quot;{F5}&quot;)</em><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4123">Agent007</a> — Mon Aug 18, 2014 9:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-07-08T23:11:47-07:00</updated>
<published>2014-07-08T23:11:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13854#p13854</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13854#p13854"/>
<title type="html"><![CDATA[Re: Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13854#p13854"><![CDATA[
To toggle &quot;Always show icons, never thumbnails&quot;, the registry value is HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced\<strong>IconsOnly.<br /><br /></strong>Another way to toggle it is by using VBScript and adding it to the context menu. Download the attached ZIP and extract ToggleThumbs.vbs to your C:\Windows folder. Then double click to merge ToggleThumbs.reg into the Registry. You will get a context menu item called &quot;Toggle thumbnails&quot; when you right click the empty background of a folder.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jul 08, 2014 11:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-07-08T21:57:17-07:00</updated>
<published>2014-07-08T21:57:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13851#p13851</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13851#p13851"/>
<title type="html"><![CDATA[Re: Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13851#p13851"><![CDATA[
Remove the lines from the script that contain the word &quot;SHidden&quot; and leave everything else. This will stop toggling the system files.<br /><br />I don't know how to toggle the icon setting. You need to find what registry key (if any) controls that behavior. And even then it will depend on the implementation of Explorer whether the registry change will be respected.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jul 08, 2014 9:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2014-07-08T15:58:13-07:00</updated>
<published>2014-07-08T15:58:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13847#p13847</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13847#p13847"/>
<title type="html"><![CDATA[Re: Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=13847#p13847"><![CDATA[
I like being able to do this, but this toggles the &quot;show protected system files&quot; property as well. Is there a way to do this without toggling that?<br /><br />Also, is there a way to toggle the &quot;Always show icons, never thumbnails&quot;?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Tue Jul 08, 2014 3:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-11-19T09:19:21-07:00</updated>
<published>2013-11-19T09:19:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8917#p8917</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8917#p8917"/>
<title type="html"><![CDATA[Re: Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8917#p8917"><![CDATA[
This code is from the classic shell help document<br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br /><h3>3&#41; Copy selected files to the parent folder</h3>Create a batch file called <strong>C:\CopyParent.bat:<br /><span style="font-family:monospace;">set list=%1<br />set list=%list:&quot;=%<br />for /F &quot;delims=&quot; %%i in &#40;%list%&#41; do copy /Y &quot;%%i&quot; ..<br />del %1</span></strong> <br /><br />Use this command: <strong>C:\</strong><strong>CopyParent</strong><strong>.bat &quot;%3&quot;</strong>. %3 will be replaced by a text file containing the full names of all selected files. The batch file will read each line of that text file, and copy each of the selected files to the parent folder. At the end the batch file deletes the initial temp file. The first two <strong>set</strong> commands remove the quotes from the %1 parameter.<br /></div><br /><br />This is a modification of the above script, Though I suspect you want a single button to toggle the hidden state (which I have been unable to figure out thusfar, and maybe someone else can help with formatting the IF statement)<br /><br />this will hide the selected files<br />@echo on<br />set list=%1<br /> set list=%list:&quot;=%<br /> for /F &quot;delims=&quot; %%i in (%list%) do attrib +H &quot;%%i&quot;<br /> del %1<br /><br /><br /><br />this will un-hide the selected files<br />@echo on<br />set list=%1<br /> set list=%list:&quot;=%<br /> for /F &quot;delims=&quot; %%i in (%list%) do attrib -H &quot;%%i&quot;<br /> del %1<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Nov 19, 2013 9:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Digital-Joe]]></name></author>
<updated>2013-11-19T01:52:17-07:00</updated>
<published>2013-11-19T01:52:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8908#p8908</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8908#p8908"/>
<title type="html"><![CDATA[Re: Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8908#p8908"><![CDATA[
Thanks,<br />it works perfectly<br /><br />is there a way i could also make a button that actually toggles the hide property of the file?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2288">Digital-Joe</a> — Tue Nov 19, 2013 1:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-11-18T18:32:44-07:00</updated>
<published>2013-11-18T18:32:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8893#p8893</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8893#p8893"/>
<title type="html"><![CDATA[Re: Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8893#p8893"><![CDATA[
<!-- m --><a class="postlink" href="http://www.askvg.com/create-simple-script-to-show-hide-hidden-files-and-folders-in-windows-xp-vista-and-7/">http://www.askvg.com/create-simple-scri ... sta-and-7/</a><!-- m --><br /><br />then set it in the command field for a custom button <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Nov 18, 2013 6:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Digital-Joe]]></name></author>
<updated>2013-11-18T13:36:22-07:00</updated>
<published>2013-11-18T13:36:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8888#p8888</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8888#p8888"/>
<title type="html"><![CDATA[Custom button: show hidden files/folders]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1742&amp;p=8888#p8888"><![CDATA[
Hi, <br /><br />i want to make a custom button in the explorer bar that shows or hides hidden files and folders. <br />however this is not one of the standard functions, what should i input in the command section of the custom button to make this happen?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2288">Digital-Joe</a> — Mon Nov 18, 2013 1:36 pm</p><hr />
]]></content>
</entry>
</feed>