<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=539" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-05-04T06:58:42-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=539</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-05-04T06:58:42-07:00</updated>
<published>2013-05-04T06:58:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=3124#p3124</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=3124#p3124"/>
<title type="html"><![CDATA[Re: GetLastError: 5 install fail]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=3124#p3124"><![CDATA[
Something is wrong with the permissions of the files where Classic Shell is installed or where it creates shortcuts. Try turning on the MSI logging with the /l switch as shown here: <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#install_commands">http://www.classicshell.net/faq/#install_commands</a><!-- m -->.<br /><br />Also, go to C:\ProgramData\Microsoft\Windows\Start Menu\Programs, open that folder's properties and from the Security tab, try giving the SYSTEM group full permissions if it doesn't already have, including replacing all child object permissions. If it fails, do the same for C:\Program Files\Classic Shell\ folder. Give full permissions to SYSTEM group including child objects.<br /><br />Then try if installation succeeds again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat May 04, 2013 6:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jjunkk]]></name></author>
<updated>2013-05-03T12:00:45-07:00</updated>
<published>2013-05-03T12:00:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=3119#p3119</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=3119#p3119"/>
<title type="html"><![CDATA[Re: GetLastError: 5 install fail]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=3119#p3119"><![CDATA[
Update:<br /><br />When trying to install or update Classic Shell on my Samsung 840 series SSD I get the failed message (<span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="font-size: 100%; line-height: 116%;">&quot;GetLastError: 5&quot;&#41;</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="font-size: 100%; line-height: 116%;">However, when updating or installing CS on my Seagate Momentus XT SATA plater drive the install goes flawlessly.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="font-size: 100%; line-height: 116%;">The operating system on the Seagate drive was cloned from the SSD drive, so they are identical.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="font-size: 100%; line-height: 116%;">Somehow CS is having a problem with the SSD drive and not Windows 8.</span></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"></span></span><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="font-size: 100%; line-height: 116%;">So for now I have to update CS on my Seagate plater drive, then clone it to the SSD.</span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=607">jjunkk</a> — Fri May 03, 2013 12:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-04-16T18:11:55-07:00</updated>
<published>2013-04-16T18:11:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=2795#p2795</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=2795#p2795"/>
<title type="html"><![CDATA[Re: GetLastError: 5 install fail]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=2795#p2795"><![CDATA[
Looks like the uninstaller tries to delete the shortcuts in the start menu but fails. Something is wrong with your permissions.<br />See if you can manually delete the Classic Shell folder in C:\ProgramData\Microsoft\Windows\Start Menu\Programs<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Apr 16, 2013 6:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jjunkk]]></name></author>
<updated>2013-04-16T18:07:14-07:00</updated>
<published>2013-04-16T18:07:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=2794#p2794</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=2794#p2794"/>
<title type="html"><![CDATA[GetLastError: 5 install fail]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=539&amp;p=2794#p2794"><![CDATA[
Windows 8 Pro 64 bit.<br />When trying to install Classic Shell 3.6.7 the install fails.<br />Keep getting error &quot;GetLastError: 5&quot;<br />Then Classic Shell backs out of the install.<br />After the back out my start menu has changed with an added $Menu. beginning.<br />Windows is reporting Classic Shell 3.6.7 is an incompatible program.<br />Even tried to extract the MSI file, but that failed also.<br />Does anyone know what is going on?<br />See attached captures.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=607">jjunkk</a> — Tue Apr 16, 2013 6:07 pm</p><hr />
]]></content>
</entry>
</feed>