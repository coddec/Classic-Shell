<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=1741" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-11-18T06:40:30-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=1741</id>
<entry>
<author><name><![CDATA[eewoke]]></name></author>
<updated>2013-11-18T06:40:30-07:00</updated>
<published>2013-11-18T06:40:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8877#p8877</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8877#p8877"/>
<title type="html"><![CDATA[Re: partially deleted old version]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8877#p8877"><![CDATA[
Thanks for your help! I will try later when I am at home.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2283">eewoke</a> — Mon Nov 18, 2013 6:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-11-18T06:29:30-07:00</updated>
<published>2013-11-18T06:29:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8875#p8875</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8875#p8875"/>
<title type="html"><![CDATA[Re: partially deleted old version]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8875#p8875"><![CDATA[
First, before trying the next steps, try to download the installer of the exact version you have installed and see if can be removed. <br /><br />See here for installers for older versions: <!-- m --><a class="postlink" href="http://www.classicshell.net/downloads/">http://www.classicshell.net/downloads/</a><!-- m --> <br /><br />If despite running the installer of the version of Classic Shell you have, it can't be uninstalled, then read on. It means that your Classic Shell installation is in a partially installed state. This is a Windows Installer issue (system related). It can happen with any other software that uses Windows Installer, not just Classic Shell, nor something that is caused by Classic Shell, but due to the installation system it uses. <br /><br /><br />To fix this, there used to be an unsupported tool by Microsoft for cleaning up partially uninstalled Windows Installer-based applications called Windows Installer Cleanup Utility. Download this tool from here: <a href="http://www.softpedia.com/get/Security/Secure-cleaning/Windows-Installer-CleanUp-Utility.shtml" class="postlink">http://www.softpedia.com/get/Security/Secure-cleaning/Windows-Installer-CleanUp-Utility.shtml</a> , install it and open it. <strong>Note that you must install and run Windows Installer Cleanup Utility as administrator (with elevated rights)</strong>. Be careful with the use of this tool. It should list all applications on your system which use Windows Installer including some version of Classic Shell. Select Classic Shell in that list (and make sure you don't select any other product) and click &quot;Remove&quot;. Let it remove and then click Exit. <br /><br />Now try installing the latest version of Classic Shell and it should work. If no version of Classic Shell appears in Windows Installer Cleanup utility, exit the tool without doing anything and remove the tool from Programs and Features. <br /><br /><br />Also, note this tool is recommended only for your convenience. Classic Shell does not bear responsibility for Windows related issues or anything that may happen from the use of third party tools we recommend for troubleshooting.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Nov 18, 2013 6:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eewoke]]></name></author>
<updated>2013-11-18T06:22:00-07:00</updated>
<published>2013-11-18T06:22:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8874#p8874</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8874#p8874"/>
<title type="html"><![CDATA[partially deleted old version]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1741&amp;p=8874#p8874"><![CDATA[
Hi,<br /> <br />I partially deleted an old version due to a power fail. No I cann not install the latest version anymore. During installation the program tries to deinstall the old version and can not proceed. I asume I need to delete some registry files. Can someone point me out which files i need to delete in my registry? Or is there another solution?<br /> <br />Thanks in advance!<br /> <br />Cheers,<br /> <br />eewoke<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2283">eewoke</a> — Mon Nov 18, 2013 6:22 am</p><hr />
]]></content>
</entry>
</feed>