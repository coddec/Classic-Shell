<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7955" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-10-03T11:42:11-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7955</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-10-03T11:42:11-07:00</updated>
<published>2017-10-03T11:42:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7955&amp;p=34301#p34301</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7955&amp;p=34301#p34301"/>
<title type="html"><![CDATA[Re: Task Bar hangs after Office 2016 install from Office 365]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7955&amp;p=34301#p34301"><![CDATA[
What is your version of Windows? I assume it is Windows 10?<br /><br />You can exit the Start Menu by right clicking the Start button -&gt; Exit. You can load it again by launching C:\Program Files\Classic Shell\ClassicStartMenu.exe. The Classic Shell Start Menu automatically loads when Explorer.exe loads. You can disable this behavior too by going to Classic Start Menu Settings -&gt; General Behavior tab -&gt; Uncheck &quot;Start automatically for this user&quot;.<br /><br />From what you describe, it is clear that some version of Classic Shell that you had installed was crashing Explorer.exe on your Windows 10. Re-installing the latest Classic Shell seems to have fixed the problem for you. It is definitely not related to whether Office installer creates program groups. I have Office 2016 installed too (but on Windows 8.1) and had no issues.<br /><br />Windows 10 because it updates continuously occasionally has issues with Classic Shell. You need to always keep Classic Shell also up-to-date for smooth operation. Also Windows 10 updates are well known for breaking or outright uninstalling certain desktop apps or damaging their configuration after OS updates have been installed. A misconfiguration in the Registry can also cause Explorer.exe to crash when the Classic Shell Start Menu is running. When you re-installed the latest version, the missing files or Registry configuration might have gotten repaired.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Oct 03, 2017 11:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jkotuby]]></name></author>
<updated>2017-10-03T07:45:39-07:00</updated>
<published>2017-10-03T07:45:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7955&amp;p=34300#p34300</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7955&amp;p=34300#p34300"/>
<title type="html"><![CDATA[Task Bar hangs after Office 2016 install from Office 365]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7955&amp;p=34300#p34300"><![CDATA[
Hi Everyone,<br />Been stumped for 2 days. I have been using Classic Shell Start menu for several years. Our office just upgraded to Office 365 and I have been trying to install Office 2016 but having problems. The install states that it completed successfully. But then after clicking the &quot;Close&quot; button on the Office 2016 Install screen, the Task Bar goes black and no &quot;pinned&quot; apps show up. &quot;Start&quot; is non-responsive and the Desktop Icons do not display their images. 3 times, once after each install attempt, I issued a remote reboot command from one of our Domain Controllers to my workstation. After logging back into the workstation there is no sign of the Office 2016 applications.<br /><br />While reading the Microsoft documents, I noticed that they all referred to &quot;Click Start-&gt;All Apps&quot;. It was then that I realized I was using Classic Shell, because it uses&quot;All Programs&quot; not &quot;All Apps&quot;. So...I uninstalled Classic Shell and behold! There were the new Office 2016 Programs listed under All Apps!<br /><br />I just downloaded and re-installed the newest version of Classic Shell and everything is working again.<br />I think that Classic Shell was causing the Start Menu and Task-bar to lock as it was trying to reconcile the new Office 2016 programs. Office 2016 does NOT use a Program Group. Maybe that is what caused the problem? One time only I was able to wake up the Classic Shell menu, after an attempted Office 2016 install, by pressing CTRL-ESC...but the newly installed Office Programs did not appear.<br /><br />I will now proceed to install Office 2016 on the other workstations. But first I will remove Classic Shell until after the install.<br />Is there a way to temporarily suspend Classic Shell during the Install? And then turn it back on?<br /><br />Just thought I would post my experience in case others have the same problem.<br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24835">jkotuby</a> — Tue Oct 03, 2017 7:45 am</p><hr />
]]></content>
</entry>
</feed>