<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=8280" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2018-02-10T17:13:14-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=8280</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2018-02-10T17:13:14-07:00</updated>
<published>2018-02-10T17:13:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35410#p35410</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35410#p35410"/>
<title type="html"><![CDATA[Re: Loss of Keyboard after Installation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35410#p35410"><![CDATA[
After looking up confirmation. I cant seem to quickly find the method keytweak uses to remap, so I would actually agree that trying an alternative like Sharpkeys <!-- m --><a class="postlink" href="https://github.com/randyrants/sharpkeys">https://github.com/randyrants/sharpkeys</a><!-- m --> which does in-fact only write to the registry (which lets windows do the remapping itself)<br />This may solve your issue, if it is with keytweak.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat Feb 10, 2018 5:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[fonpaolo]]></name></author>
<updated>2018-02-10T07:26:33-07:00</updated>
<published>2018-02-10T07:26:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35409#p35409</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35409#p35409"/>
<title type="html"><![CDATA[Re: Loss of Keyboard after Installation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35409#p35409"><![CDATA[
Since I still use Win 7 Pro and never had a single trouble using Classic Shell, first of all, given that you're using a program to remap some keyboard keys, I would start disabling this last one.<br />The fact that Win+r is still working may be the prove that you haven't really &quot;lost&quot; the keyboard...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16365">fonpaolo</a> — Sat Feb 10, 2018 7:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2018-02-09T17:18:04-07:00</updated>
<published>2018-02-09T17:18:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35408#p35408</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35408#p35408"/>
<title type="html"><![CDATA[Re: Loss of Keyboard after Installation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35408#p35408"><![CDATA[
Show stopper indeed.. I haven't heard of it happening thusfar (maybe IVO has), and windows 7 compatibility should be pretty high, as it hasn't changed much. (unlike windows 10) but consider trying an older version of classic shell just in-case one of the new features broke compatibility.<br /><!-- m --><a class="postlink" href="https://sourceforge.net/projects/classicshell/files/Version%203.6.8%20general%20release/">https://sourceforge.net/projects/classi ... 20release/</a><!-- m --> being the most likely to work correctly, assuming you dont need the windows 7 style, or a customized taskbar.<br /><br /><br />You mention that they keyboard still works for 'win+r' does that mean that the keyboard functions normally for everything outside of classic shell when the error occurs? If-so you can right click and select exit to close classic shell, and then run it again from the default start menu.<br /><br />I havnt used macro express, but I have used keytweak with classic shell and without incident. *IIRC all it does is write the changes to the registry anyways*<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Fri Feb 09, 2018 5:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[fortdodge]]></name></author>
<updated>2018-02-09T16:20:14-07:00</updated>
<published>2018-02-09T16:20:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35406#p35406</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35406#p35406"/>
<title type="html"><![CDATA[Loss of Keyboard after Installation]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8280&amp;p=35406#p35406"><![CDATA[
I start with a functioning Win 7 SP 1 system. The main know operating system problem is an excessive number of Windows Explorer crashes followng file searches.<br /><br />I also use Macro Express for macros and Keytweak to remap some keys on the keyboard.<br /><br /><br />I install CSM 4 3 1 for the first time.<br /><br />After a few days of no problems and finally getting my menu right, I notice that my keyboard quits working. I key a key and nothing happens in any application. Windows + r continues to open the run box. The mouse and Windows otherwise seem to be OK. <br /><br /><br />I restart Windows, and my keyboard works fine. I go awhile and suddenly my keyboard stops working. I have to restart Windows. One day this happened five times.<br /><br />Following the CSM installation, I saw more Windows Explorer crashes.<br /><br />I ran system file check and Norton Security. They revealed no problems.<br /><br />I could not live with the no keyboard restart Windows cycle. I restored the Windows checkpoint before the CSM installation. Since the restoration, the loss of keyboard problem hasn't hapened. I think the number of Windows Explorer crashes has gone down.<br /><br />I didn't find this problem in the forum.<br /><br />I like CSM, but losing the keyboard and having to restart Windows is a show stopper.<br /><br />Any suggestions?<br /><br />I wondered if some post Win 7 fixes might not work under 7. Is there a pre Win 8 version around that I could try.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=30756">fortdodge</a> — Fri Feb 09, 2018 4:20 pm</p><hr />
]]></content>
</entry>
</feed>