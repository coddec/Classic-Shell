<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7868" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-01T23:16:24-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7868</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-01T23:16:24-07:00</updated>
<published>2017-09-01T23:16:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7868&amp;p=33910#p33910</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7868&amp;p=33910#p33910"/>
<title type="html"><![CDATA[Re: Unable to install Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7868&amp;p=33910#p33910"><![CDATA[
It looks like the in-place upgrade from XP to Windows 7 may have messed up some NTFS permissions on your drive.<br /><br />In File Explorer, open the Properties of C:\Program Files and C:\ProgramData\ folders. Go to the Security tab and make sure the Owner is set to TrustedInstaller. Also, the TrustedInstaller, SYSTEM, CREATOR OWNER accounts and the &quot;Administrators&quot; group must have Full Control over this folder (and its subfolders).<br /><br />Check out this tutorial to understand how to take ownership and give the right permissions to a folder: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-take-ownership-and-get-full-access-to-files-and-folders-in-windows-10/">http://winaero.com/blog/how-to-take-own ... indows-10/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Sep 01, 2017 11:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GiliPollas]]></name></author>
<updated>2017-09-01T14:56:11-07:00</updated>
<published>2017-09-01T14:56:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7868&amp;p=33907#p33907</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7868&amp;p=33907#p33907"/>
<title type="html"><![CDATA[Unable to install Classic Shell]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7868&amp;p=33907#p33907"><![CDATA[
Please forgive me if I'm posting in the wrong place but I've never posted here before.<br />I have just installed Win7 Ultimate on a computer that previously had WinXP on it. It created the Windows.old folder.<br />I've installed all the windows updates and some programs and everything appears to be working fine. <br />I've now tried to install Classic shell and it fails every time with the message &quot;Warning 1909&quot; &quot;Could not create shortcut Classic Help.lnk. Verify that the destination folder exists and that you can access it&quot; I've tried installing it by logging on using the Administrator account. I've tried logging on as a standard user then using run as administrator. I've tried installing everything and installing individual sections. Nothing works, I always get the same error message. It hasn't happened with anything else that I've installed. Any constructive suggestions would be very much appreciated.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=23563">GiliPollas</a> — Fri Sep 01, 2017 2:56 pm</p><hr />
]]></content>
</entry>
</feed>