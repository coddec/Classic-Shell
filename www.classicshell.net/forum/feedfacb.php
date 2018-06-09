<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=5&amp;t=61" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-06-17T06:15:41-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=5&amp;t=61</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-17T06:15:41-07:00</updated>
<published>2013-06-17T06:15:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=3756#p3756</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=3756#p3756"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=3756#p3756"><![CDATA[
Btw, to uninstall this context menu tweak, merge this reg (paste into Notepad, save as .REG and merge it). Then, delete makelink.exe and shellexecute.exe if you no longer need them.<br /><br />Windows Registry Editor Version 5.00<br /><br />[-HKEY_CURRENT_USER\Software\Classes\*\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\AllFileSystemObjects\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\Drive\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\lnkfile\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\InternetShortcut\Shell\PintoClassicStartMenu]<br /><br />[-HKEY_CURRENT_USER\Software\Classes\Microsoft.Website\Shell\PintoClassicStartMenu]<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jun 17, 2013 6:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-25T06:16:24-07:00</updated>
<published>2013-04-25T06:16:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2982#p2982</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2982#p2982"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2982#p2982"><![CDATA[
Fixed it..<br /><br />shellexecute /F:shutdown.exe /P:-a /R:hidden<br /><br />makes sense..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 25, 2013 6:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-25T06:12:13-07:00</updated>
<published>2013-04-25T06:12:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2981#p2981</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2981#p2981"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2981#p2981"><![CDATA[
so, if this works:<br /><br />shellexecute /F:shutdown.exe /P:-s -t 3600 /R:hidden<br /><br />Why doesnt this work?:<br /><br />shellexecute /F:shutdown.exe -a /R:hidden<br /><br />anyway to use shell execute to get:   &quot;shutdown -a&quot;  (cancel Shutdown)  to work hidden?<br /><br />thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 25, 2013 6:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-11T03:59:44-07:00</updated>
<published>2013-04-11T03:59:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2643#p2643</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2643#p2643"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2643#p2643"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />Try &quot;J:\My Portable Apps\ShellExecute.exe&quot; /F:&quot;cmd /c &quot;J:\My Portable Apps\Shortcut.bat&quot;&quot; /R:Hidden<br /></div><br /><br />well, that looks very promising.. <br /><br />I couldnt get it to work, but using cmd would seem to be whats missing<br /><br />what about something like &quot;cmd /c &quot;J:\My Portable Apps\ShellExecute.exe&quot;&quot; /F:&quot;J:\My Portable Apps\Shortcut.bat&quot; /R:Hidden<br /><br />that didnt work, but putting cmd at the beginning would maybe allow shell.exe to run in cmd.. anyway, i think it needs to run through cmd somehow.. another program or method perhaps<br /><br />thanks for the ideas<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 11, 2013 3:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-11T03:50:33-07:00</updated>
<published>2013-04-11T03:50:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2642#p2642</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2642#p2642"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2642#p2642"><![CDATA[
well, I see its from the fact that its even in a Bat file..<br /><br />Apparently, Shellexecute's '/r:hidden' cannot be used from batch files, as the window just pops up anyway, because its a batch file..<br /><br />So, it would seem that in order to run a Shellexecute /r:hidden command from a USB drive, you'd have to have something like a shortcut creator that bundles Icons, AND that accepts dos commands directly, AND that uses relative paths..<br /><br />anyone know of such a program?<br /><br />instead of Bat to EXE, maybe something like a CMD to EXE or something<br /><br />or maybe you'd just have to write your own VB script and bundle it with an Icon in an Exe wrapper...<br /><br />and all this because Windows doesnt know how to handle Relative Paths..<br /><br />I can see people leaving to Linux over this issue alone..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 11, 2013 3:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-11T03:46:37-07:00</updated>
<published>2013-04-11T03:46:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2641#p2641</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2641#p2641"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2641#p2641"><![CDATA[
Try &quot;J:\My Portable Apps\ShellExecute.exe&quot; /F:&quot;cmd /c &quot;J:\My Portable Apps\Shortcut.bat&quot;&quot; /R:Hidden<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Apr 11, 2013 3:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-11T03:08:59-07:00</updated>
<published>2013-04-11T03:08:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2639#p2639</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2639#p2639"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2639#p2639"><![CDATA[
any idea why not?<br /><br />do u know why this might not be hiding the dos window:<br /><br />&quot;J:\My Portable Apps\ShellExecute.exe&quot; /F:&quot;J:\My Portable Apps\Shortcut.bat&quot; /R:Hidden<br /><br />it runs as if there was no shellexecute /r:hidden at all, popping up a dos window<br /><br />also tried it as:<br /><br />&quot;&quot;&quot;J:\My Portable Apps\ShellExecute.exe&quot;&quot;&quot; /F:&quot;&quot;&quot;J:\My Portable Apps\Shortcut.bat&quot;&quot;&quot; /R:Hidden<br /><br />same behavior<br /><br />also same thing if I go straight to the .exe file, as such:<br /><br />&quot;J:\My Portable Apps\ShellExecute.exe&quot; /F:&quot;J:\My Portable Apps\Program.exe&quot; /R:Hidden<br /><br /><br />thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Thu Apr 11, 2013 3:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-10T22:01:48-07:00</updated>
<published>2013-04-10T22:01:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2628#p2628</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2628#p2628"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2628#p2628"><![CDATA[
Nope, relative path won't work. Environment variables may work or adding the folder to the system path.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Apr 10, 2013 10:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-10T19:57:55-07:00</updated>
<published>2013-04-10T19:57:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2622#p2622</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2622#p2622"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=2622#p2622"><![CDATA[
Hey, back to ask the master...<br /><br />any idea if Shell Execute can be used in a script with a relative path?<br /><br />The Batch File is:<br />----------------------------------------------------<br />set drive=%cd:~0,3%<br />echo %drive%<br /><br />start &quot;&quot; &quot;%drive%Portable Apps\Start.exe&quot;<br />----------------------------------------------------<br />it works great as is.. but a Dos Window pops up, and I'm trying to get rid of that..<br /><br />Its to be run from a USB Drive on multiple computers where the Drive letter wont be the same from PC to PC<br /><br />I cant figure out the syntax..<br /><br />so far I've tried:<br />----------------------------------------------------<br />set drive=%cd:~0,3%<br />echo %drive%<br /><br />start &quot;&quot; &quot;%drive%Portable Apps\ShellExecute.exe /F:start &quot;&quot; &quot;%drive%Portable Apps\Start.exe&quot; /R:hidden&quot;<br />--------------------------------------------------------------------------<br />set drive=%cd:~0,3%<br />echo %drive%<br /><br />start &quot;&quot; &quot;%drive%Portable Apps\ShellExecute.exe /F:start &quot;&quot; &quot;%drive%Portable Apps\Start.exe&quot; /R:hidden<br />----------------------------------------------------------------<br />set drive=%cd:~0,3%<br />echo %drive%<br /><br />start &quot;&quot; &quot;%drive%Portable Apps\ShellExecute.exe /F:start &quot;%drive%Portable Apps\Start.exe&quot; /R:hidden<br />----------------------------------------------------------------<br />set drive=%cd:~0,3%<br />echo %drive%<br /><br />start &quot;&quot; &quot;%drive%Portable Apps\ShellExecute.exe /F:start %drive%Portable Apps\Start.exe /R:hidden<br />----------------------------------------------------------------<br />set drive=%cd:~0,3%<br />echo %drive%<br /><br />start &quot;&quot; &quot;%drive%Portable Apps\ShellExecute.exe /F:start &quot;Portable Apps\Start.exe&quot; /R:hidden&quot;<br />----------------------------------------------------------------<br />set drive=%cd:~0,3%<br />echo %drive%<br /><br />start &quot;&quot; &quot;%drive%Portable Apps\ShellExecute.exe /F:start &quot;Portable Apps\Start.exe&quot; /R:hidden<br />------------------------------------------------------------------<br />set drive=%cd:~0,3%<br />echo %drive%<br /><br />start &quot;&quot; &quot;%drive%Portable Apps\ShellExecute.exe /F:start Portable Apps\Start.exe /R:hidden<br />-----------------------------------------------------------------<br /><br />Anyway, none of those work... I put Shell Execute on the USB Drive in a folder I named &quot;Portable Apps&quot;... then I am trying to make the batch file launch the program &quot;Start.exe&quot; located on the same USB in the same folder<br /><br />is that possible??<br /><br />thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Wed Apr 10, 2013 7:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-01T19:36:52-07:00</updated>
<published>2013-03-01T19:36:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1557#p1557</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1557#p1557"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1557#p1557"><![CDATA[
shellexecute /F:shutdown.exe /P:-s -t 300 /R:hidden typed directly into the &quot;Edit Button's&quot; &quot;Command&quot; field worked perfectly!<br /><br />wow, so Classic Shell's own &quot;Command&quot; box functions exactly like the Windows Command Dialog?.... i wasnt aware of that.. i thought it just recognized some basic commands..<br /><br />thats a super powerful tool<br /><br />thanks again, i'll update the tut<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Fri Mar 01, 2013 7:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-03-01T11:12:38-07:00</updated>
<published>2013-03-01T11:12:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1548#p1548</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1548#p1548"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1548#p1548"><![CDATA[
shellexecute and other executables just need to be in your system path. Are you linking to the batch file? You don't need the batch file at all. Just use the above command as the Start Menu command, just like you would use it from the Run dialog.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Mar 01, 2013 11:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-01T07:19:21-07:00</updated>
<published>2013-03-01T07:19:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1541#p1541</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1541#p1541"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1541#p1541"><![CDATA[
i still get a little black box.. it seems its only half the black box, before i think it was 2 black boxes one after another, now maybe its just one..<br /><br />am i having an extra black box pop up somehow??<br /><br />and is your shellexecute.exe just in your C:\Windows folder<br /><br />im in Win7 Ultimate 64-bit<br /><br />thanks for ur help<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Fri Mar 01, 2013 7:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-03-01T07:03:27-07:00</updated>
<published>2013-03-01T07:03:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1540#p1540</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1540#p1540"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1540#p1540"><![CDATA[
shellexecute /F:shutdown.exe /P:-s -t 300 /R:hidden works perfectly. It can't be that you are not noticing the /P switch even after mentioning it 3 times? <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Mar 01, 2013 7:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-01T06:14:53-07:00</updated>
<published>2013-03-01T06:14:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1536#p1536</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1536#p1536"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1536#p1536"><![CDATA[
well, i tried the following:<br /><br />shellexecute.exe /F:shutdown.exe -s -t 300 /R:hidden<br />shellexecute.exe /F:shutdown -s -t 300 /R:hidden<br />shellexecute /F:shutdown.exe -s -t 300 /R:hidden<br />shellexecute /F:shutdown -s -t 300 /R:hidden<br />shellexecute.exe /R:hidden /F:shutdown -s -t 300<br /><br />but couldnt figure it out.. its ok, i dont mind the boxes popping up, it shows me its working anyway<br /><br />thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Fri Mar 01, 2013 6:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-02-28T22:19:09-07:00</updated>
<published>2013-02-28T22:19:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1532#p1532</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1532#p1532"/>
<title type="html"><![CDATA[Re: How to add &quot;Pin to Start Menu&quot; functionality]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=61&amp;p=1532#p1532"><![CDATA[
If you enter just shellexecute it will show you the syntax. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />  /F: &lt;file to run&gt; /P:&lt;parameters to pass&gt; /R:&lt;window state&gt;. So for your shutdown.exe, it should be:   shellexecute /F:shutdown.exe /P:-s -t 300 /R:hidden. I haven't tested it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Feb 28, 2013 10:19 pm</p><hr />
]]></content>
</entry>
</feed>