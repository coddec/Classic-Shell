<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=345" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-03-06T16:24:20-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=345</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-03-06T16:24:20-07:00</updated>
<published>2013-03-06T16:24:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=345&amp;p=1760#p1760</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=345&amp;p=1760#p1760"/>
<title type="html"><![CDATA[Re: Outlook Hyperlinks Disabled - Fixed]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=345&amp;p=1760#p1760"><![CDATA[
this would not be a classic shell bug but one with Torch<br /><br /><br />I asume you installed this, or it came pre-installed..?<br /><a href="http://www.torchbrowser.com/" class="postlink">http://www.torchbrowser.com/</a><br /><br /><br />classic shell doesnt install torch<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Mar 06, 2013 4:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ledieb]]></name></author>
<updated>2013-03-06T12:47:23-07:00</updated>
<published>2013-03-06T12:47:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=345&amp;p=1758#p1758</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=345&amp;p=1758#p1758"/>
<title type="html"><![CDATA[Outlook Hyperlinks Disabled - Fixed]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=345&amp;p=1758#p1758"><![CDATA[
After installing the Start Menu, I was unable to open any hyperlinks directly from my Outlook email. I got the error message “This operation has been cancelled due to restrictions in effect on this computer. Please contact your system administrator.” In looking for a solution to this problem, I went to this site: <!-- m --><a class="postlink" href="http://www.slipstick.com/problems/this-operation-has-been-cancelled-due-to-restrictions">http://www.slipstick.com/problems/this- ... strictions</a><!-- m -->. They suggested:<br /><ol style="list-style-type: decimal"><li>Start, click Run, type Regedit in the Open box, and then click OK.</li><li>Browse to <strong>HKEY_CURRENT_USER\Software\Classes\.html</strong></li><li>Right click the value for the .html key and select Modify…</li><li>Change the value from “ChromeHTML” to “<strong>htmlfile</strong>” (or from FireFoxHTML to htmlfile)</li><li>Repeat for .htm, shtml, .xht, .xhtml, .xhtm keys</li></ol>I did so, and noticed that the values for all the keys were set to TorchHTML. I followed the instructions and it fixed the problem. I am sharing this in case anyone else has the same dilemma.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=419">ledieb</a> — Wed Mar 06, 2013 12:47 pm</p><hr />
]]></content>
</entry>
</feed>