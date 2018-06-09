<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7599" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-05-12T08:45:38-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7599</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-12T08:45:38-07:00</updated>
<published>2017-05-12T08:45:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32627#p32627</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32627#p32627"/>
<title type="html"><![CDATA[Re: Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32627#p32627"><![CDATA[
Before reformatting, make sure you have tried all boot options:<br /><br />- Safe Mode<br />- Safe Mode with Networking<br />- Last Known Good Configuration<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri May 12, 2017 8:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kouu]]></name></author>
<updated>2017-05-12T07:30:57-07:00</updated>
<published>2017-05-12T07:30:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32626#p32626</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32626#p32626"/>
<title type="html"><![CDATA[Re: Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32626#p32626"><![CDATA[
Hey,<br />Thanks for your response. I decided after spending a lot of time crying in a corner to reformate my windows and delete all my files. I didnt do it yet I did some manipulation yesterday in order to try saving my files with another computer. I'll try to do it later if I can... For the moment I cant even reformate my pc because my C:/ seems encrypted. Sadly I didnt know about the load hive things but I'll see if I can still go to the recovery environment but im not sure..<br />EDIT : Just tested I cant go to the recovery environment anymore. The last solution is to find a way for reformate my Pc... Thanks a lot for your help btw!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19964">Kouu</a> — Fri May 12, 2017 7:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-12T07:18:04-07:00</updated>
<published>2017-05-12T07:18:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32624#p32624</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32624#p32624"/>
<title type="html"><![CDATA[Re: Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32624#p32624"><![CDATA[
From the Recovery environment, it will not load the Registry of the installed Windows in C:\. For that you will have to use Load Hive functionality and navigate to C:\Windows\System32\config to load one of the hives.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri May 12, 2017 7:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kouu]]></name></author>
<updated>2017-05-11T04:40:23-07:00</updated>
<published>2017-05-11T04:40:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32617#p32617</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32617#p32617"/>
<title type="html"><![CDATA[Re: Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32617#p32617"><![CDATA[
Hi,<br />So the lid manip doesnt work. And ye this is what I did I was in the good path before trying to start regedit but I had an error that said I cant access...<br />EDIT : Nvm I have access to regedit through C: drive but cant open taskmgr or msconfig. In regedit I dont find anything about classic shell. For some reason there is nothing on regedit about startup programs... I checked in the Run and RunOnce key in order to see if classic shell was here (If I well understand this is where the list of programs on startup are on regedit) Im trying to open Msconfig from the recovery environment but I think its not possible... Im doing everything I did research for everything but Im out of solutions right now... Everytime Ive an idea about something I can do it doesnt works on the cmd... I have access denied for msconfig taskmgr is useless in the recovery environment coz I cant do anything from where I am. I checked the services I saw nothing under taskmgr plus I cant open a new task it seems that the recovery environment is really limited about what I can do...<br />EDIT2: I did 2 other things : chkdsk /f but didnt fixed anything. Also tried a sfc scannow but it doesnt work coz the disk is &quot;read only:No&quot; and I tried the bcd rebuild and the scan doesnt found windows install<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19964">Kouu</a> — Thu May 11, 2017 4:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-10T21:54:21-07:00</updated>
<published>2017-05-10T21:54:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32614#p32614</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32614#p32614"/>
<title type="html"><![CDATA[Re: Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32614#p32614"><![CDATA[
Did you try changing to C:\ drive and C:\Windows\system32 from X: drive? If the executables are not in the PATH, you must change to the correct path before running Regedit or Taskmgr.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed May 10, 2017 9:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kouu]]></name></author>
<updated>2017-05-10T21:17:03-07:00</updated>
<published>2017-05-10T21:17:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32613#p32613</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32613#p32613"/>
<title type="html"><![CDATA[Re: Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32613#p32613"><![CDATA[
Sadly I cant ctrl alt del when it boots to the black screen I already tried a lot <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /> Ill try the lid manip too when I can, need to sleep. Im using the last nvidia driver (881.1? Something like that) and I cant open taskmgr by doing that in the recovery environment for no reason I dont have access to taskmgr here but iVe access through X:\windows\system32. I think if I could open regedit through c:\ Id be able to kick classicshell from the startup program but I dont have the access too. Also thanks for your quick comments. I really appreciate im so desesperate right now<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19964">Kouu</a> — Wed May 10, 2017 9:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-10T20:43:06-07:00</updated>
<published>2017-05-10T20:43:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32612#p32612</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32612#p32612"/>
<title type="html"><![CDATA[Re: Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32612#p32612"><![CDATA[
Once the computer boots to the black screen, try pressing Ctrl+Alt+Del and see if you get any options. If you can start Task Manager from there, you might be able to launch Explorer.exe using File -&gt; New Task (Run)...<br /><br />If you can get to the Desktop somehow, download and run the Classic Shell Utility: <!-- m --><a class="postlink" href="http://www.mediafire.com/download/3ukeryzw41qpfz8/ClassicShellUtility.exe">http://www.mediafire.com/download/3uker ... tility.exe</a><!-- m --> to completely remove it. See if that makes your PC boot normally.<br /><br />Also at the black screen, try closing the lid of your laptop or pressing the power button to send it to sleep mode. Then open the lid again or press the power button to resume it from sleep. See if this makes it show the logon screen.<br /><br />The black screen issue was reported by many users but we could never find out what causes it.<br /><br />Some people reported that their Radeon driver was causing the black screen. These are some of the things others tried to get out of the black screen.<br /><br />Since you said you have access to the Recovery Environment command prompt (X:\Windows\system32), change it to C:\ by typing C: and press Enter. Then type CD Windows\system32 and press Enter. Then type Taskmgr and press Enter.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed May 10, 2017 8:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-05-10T20:37:58-07:00</updated>
<published>2017-05-10T20:37:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32611#p32611</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32611#p32611"/>
<title type="html"><![CDATA[Re: Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32611#p32611"><![CDATA[
If you can run Task Manager, then try running the Classic Shell installer again and use it to uninstall.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed May 10, 2017 8:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kouu]]></name></author>
<updated>2017-05-10T20:25:44-07:00</updated>
<published>2017-05-10T20:25:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32610#p32610</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32610#p32610"/>
<title type="html"><![CDATA[Stuck in blackscreen after unin/inst CShell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7599&amp;p=32610#p32610"><![CDATA[
Heyo,<br />So, after 8hours of tries and research on google I come here and pray that someone will read my topic... Today everything was okay before I decided to uninstall and install again classic shell. Im using classic shell since years but today I did a shitty mistake I guess. After uninstalling classic shell, I reinstalled it without rebooting my pc (ye was dumb and lazy...) and now Im crying... After the reinstallation I rebooted my pc and guess what? Blackscreeeeeen with my cursor who keep disapearing every 5sec after moving my mouse. So I cant do anything on my computer right now. Im stuck with the blackscreen without the possibility to loggin. Plus its the same problem when I tried to start in safemode. Blackscreen again. So here what I tried and what I can do from the menu of my pc after pressing F9:  <br />I cant : Open task manager for stopping classic shell, cant stop from the services too, cant have access to anything else than a prompt cmd in the menu of my laptop when I press F9 after a restart. (Im using win 8.1) BUT this command can only allows me to work on X:\Windows\System32 For no reason I cant do anything with the C:\ (where my main files and system32 is)    <br />  <br />What I did: Tried to fix this blackscreen with tons of solution I found on the internet, nothing worked. Tried a restore system using a saving point, nope didnt worked because the restore failed. I tried to repair, nope doesnt work too it doesnt want to repair anything. I tried to autoadminlogon for skipping the loggin page when I restart but nope doesnt worked. I tried to reboot using all the secrete shaolin techniques like pushing power button 30sec and move the battery etc etc etc I also tried to delete classic shell folder with the regedit explorer button after hitting &quot;file/import&quot; but apparently nothing changed hehe. I tried lot of other thing but cant tell you exactly coz my brain is empty 5am here and I cant think anymore.<br /><br /><br />What I want: A miracle. Plz if someone can help after reading my topic I'd make everything you want! I just dont know what to do for at least disabling classic shell at the startup, I spent hours and hours for trying to understand how the command prompt worked where I had it in the F9 menu of my window 8.1 (sorry dunno how to call that) anyway... Thanks a lot in advance and hope someone will read me and be able to help me... Also sorry for my english im from baguetteland.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=19964">Kouu</a> — Wed May 10, 2017 8:25 pm</p><hr />
]]></content>
</entry>
</feed>