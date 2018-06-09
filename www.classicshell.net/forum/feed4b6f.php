<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=467" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-04-03T02:50:00-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=467</id>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-03T02:50:00-07:00</updated>
<published>2013-04-03T02:50:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2430#p2430</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2430#p2430"/>
<title type="html"><![CDATA[Re: Create a List of Folder Contents]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2430#p2430"><![CDATA[
but i'd still like the FilemenuTools context menu to work with this, if anyone knows how<br /><br />typing shellexecute.exe /F:L:\Tenzen's Data\Computing\Bat Files\File Listing.bat /R:hidden into the Program field doesnt work...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Wed Apr 03, 2013 2:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-03T00:56:50-07:00</updated>
<published>2013-04-03T00:56:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2426#p2426</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2426#p2426"/>
<title type="html"><![CDATA[Re: Create a List of Folder Contents]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2426#p2426"><![CDATA[
ok, I did it with Classic Explorer<br /><br />I put this in the Command Box:<br /><br />shellexecute.exe /F:L:\Tenzen's Data\Computing\Bat Files\File Listing.bat /R:hidden<br /><br />and Bat file conents are: dir /a /b /-p /o:gen &gt;FileList.txt<br /><br />you dont need to select any folder, it will output the contents of the current folder to a txt right there<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Wed Apr 03, 2013 12:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-03T00:49:15-07:00</updated>
<published>2013-04-03T00:49:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2423#p2423</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2423#p2423"/>
<title type="html"><![CDATA[Re: Create a List of Folder Contents]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2423#p2423"><![CDATA[
well, I created a Bat file instead, containing the line:  dir /a /b /-p /o:gen &gt;FileList.txt<br /><br />In FileMenuTools i was able to select &quot;Run a Program&quot; then in &quot;Program&quot; browse to that Bat file, and name the New action &quot;Create File Listing&quot;<br /><br />Right-Clicking a Folder and going to FileMenuTools&gt;Create File Listing creates FileList.txt inside the selected folder containing the contents<br /><br />but the Command Prompt Window Flashes, which is fine.. but would better if it didnt, if anyone knows how to stop that from happening, let me know, thanks..<br /><br />I tried C:\Windows\shellexecute.exe /L:\David's Data\Computing\Bat Files\File Listing.bat but that didnt work.. and FilemenuTools doesnt seem to support VBScripts<br /><br />And then, I tried putting both a BAT &amp; a VBS  in a new Classic Explorer button, as well as the straight dir &gt; command, selected a folder then hit the new button, but all 3 didnt work<br /><br />the VBscript was:<br /><br />Dim WSHShell<br />Set WSHShell=WScript.CreateObject(&quot;WScript.Shell&quot;)<br />WSHShell.Run &quot;&quot;&quot;L:\Tenzen's Data\Computing\Bat Files\File Listing.bat&quot;&quot;&quot;, 0<br /><br />anyone know if thats possible?<br /><br />anyway, i found one work around, just has the Cmd window pop up &amp; disappear... but its ok if thats the best that can be done<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Wed Apr 03, 2013 12:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-04-03T00:31:11-07:00</updated>
<published>2013-04-03T00:31:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2422#p2422</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2422#p2422"/>
<title type="html"><![CDATA[Create a List of Folder Contents]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=467&amp;p=2422#p2422"><![CDATA[
I wonder if anyone can help me either through Classic Explorer or FileMenuTools<br /><br />I want to execute the command:   dir /a /b /-p /o:gen &gt;FileList.txt<br /><br />or   dir &gt; /b &gt;FileList.txt<br /><br />to create a text list of all of the current folder's contents, r the selected folder's contents<br /><br />thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Wed Apr 03, 2013 12:31 am</p><hr />
]]></content>
</entry>
</feed>