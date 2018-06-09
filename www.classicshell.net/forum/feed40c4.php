<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=4660" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-03T05:37:38-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=4660</id>
<entry>
<author><name><![CDATA[Stamimail]]></name></author>
<updated>2017-09-03T05:37:38-07:00</updated>
<published>2017-09-03T05:37:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=33925#p33925</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=33925#p33925"/>
<title type="html"><![CDATA[Re: New text file / New notepad document to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=33925#p33925"><![CDATA[
Note that this command available also via Explorer Menu:<br />In Explorer:<br />Alt or F10 &gt; File &gt; New<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=463">Stamimail</a> — Sun Sep 03, 2017 5:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nathan323]]></name></author>
<updated>2017-08-26T06:58:32-07:00</updated>
<published>2017-08-26T06:58:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=33832#p33832</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=33832#p33832"/>
<title type="html"><![CDATA[Re: New text file / New notepad document to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=33832#p33832"><![CDATA[
Thankyou Stamimail, this gave me the kickstart to work on this again. I checked out old mates script idea and the problem was it depended on where the mouse was positioned to work properly. I've now got a working Autohotkey script that factors this in, works great.<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">SetMouseDelay, 0<br /><br />MouseGetPos, mouseposX<br />ControlGetPos, , buttonY, , , ToolbarWindow325, A ; gets <br /><br />RestoreClip := Clipboard<br />Send !d<br />Sleep 10<br />FolderPath := Clip()<br /><br />buttonY += 86<br />MouseMove, %mouseposX%, %buttonY%<br /><br />Click, Right<br />Sleep, 10<br />SendRaw, wt<br /><br />Clipboard := RestoreClip<br /><br />ExitApp<br />Return<br /></div><br /><br />Set the saved script as button Command in Classic Shell and will be good to go.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16387">nathan323</a> — Sat Aug 26, 2017 6:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stamimail]]></name></author>
<updated>2017-06-04T05:32:02-07:00</updated>
<published>2017-06-04T05:32:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=32883#p32883</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=32883#p32883"/>
<title type="html"><![CDATA[Re: New text file / New notepad document to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=32883#p32883"><![CDATA[
<div class="quotetitle">nathan323 wrote:</div><div class="quotecontent"><br />Is there any way to emulate exactly the behaviour you see when right-clicking the whitespace of a folder and choosing New-Text Document?<br /><br />ie. a text file is created in current folder with title text highlighted ready for renaming.<br /></div><br />Not exactly the same thing, but may help<br /><!-- m --><a class="postlink" href="https://superuser.com/questions/1091268/how-to-create-a-new-text-document-txt-file-by-a-hotkey">https://superuser.com/questions/1091268 ... y-a-hotkey</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=463">Stamimail</a> — Sun Jun 04, 2017 5:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nathan323]]></name></author>
<updated>2016-11-26T16:04:15-07:00</updated>
<published>2016-11-26T16:04:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30558#p30558</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30558#p30558"/>
<title type="html"><![CDATA[Re: New text file / New notepad document to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30558#p30558"><![CDATA[
Ok thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16387">nathan323</a> — Sat Nov 26, 2016 4:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-11-26T01:48:43-07:00</updated>
<published>2016-11-26T01:48:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30540#p30540</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30540#p30540"/>
<title type="html"><![CDATA[Re: New text file / New notepad document to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30540#p30540"><![CDATA[
No there isn't.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Nov 26, 2016 1:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nathan323]]></name></author>
<updated>2016-11-26T00:05:57-07:00</updated>
<published>2016-11-26T00:05:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30538#p30538</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30538#p30538"/>
<title type="html"><![CDATA[Re: New text file / New notepad document to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=30538#p30538"><![CDATA[
Is there any way to emulate exactly the behaviour you see when right-clicking the whitespace of a folder and choosing New-Text Document?<br /><br />ie. a text file is created in current folder with title text highlighted ready for renaming.<br /><br /><br />I went to the registry and found the ShellNew key for .txt files, the ItemName string has value &quot;@%SystemRoot%\system32\notepad.exe,-470&quot;<br />I hoped this could put into the command field of the custom button, but unfortunately didnt work..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16387">nathan323</a> — Sat Nov 26, 2016 12:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-07-08T21:04:25-07:00</updated>
<published>2015-07-08T21:04:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=20152#p20152</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=20152#p20152"/>
<title type="html"><![CDATA[Re: How can i add command &quot;new notepad&quot; to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=20152#p20152"><![CDATA[
Well that's how it's supposed to be. The command does not itself create the new document. It starts Notepad and tells it to create the new document called &quot;New text document.txt&quot; if one doesn't exist already. Click Yes and the text file will be created.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jul 08, 2015 9:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[str8arrow]]></name></author>
<updated>2015-07-08T16:38:24-07:00</updated>
<published>2015-07-08T16:38:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=20151#p20151</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=20151#p20151"/>
<title type="html"><![CDATA[Re: How can i add command &quot;new notepad&quot; to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=20151#p20151"><![CDATA[
Hi - PLEASE HELP! I used the suggested command to create a CUSTOM TOOLBAR button that creates a <br />&quot;New Text Document.txt&quot; (at the current location/within current folder) <br /><br />BUT EACH TIME  I USE THIS BUTTON I get a popup box &quot;New Text Document.txt&quot; was not found at this location. Create new document at this location?&quot; You must click yes to continue. <br /><br />It's very irritating. PLEASE HELP!!!!<br /><br />Thanks.<br />str8arrow<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10709">str8arrow</a> — Wed Jul 08, 2015 4:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[BitOn]]></name></author>
<updated>2015-05-26T09:53:37-07:00</updated>
<published>2015-05-26T09:53:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19575#p19575</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19575#p19575"/>
<title type="html"><![CDATA[Re: How can i add command &quot;new notepad&quot; to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19575#p19575"><![CDATA[
Thanks, it's work. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10334">BitOn</a> — Tue May 26, 2015 9:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-05-26T09:11:05-07:00</updated>
<published>2015-05-26T09:11:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19574#p19574</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19574#p19574"/>
<title type="html"><![CDATA[Re: How can i add command &quot;new notepad&quot; to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19574#p19574"><![CDATA[
By new notepad, you mean only opening a new instance of Notepad or new text document in the current folder where you are browsing?<br /><br />For only opening Notepad, add a Custom command to the toolbar. To add a Custom button, open Classic Explorer Settings and go to the Toolbar Buttons tab. In the right column, scroll all the way down and drag the Custom item from the right column to the left and position it where you want.<br /><br />Then double click &quot;Custom&quot; and in the command field, type: C:\Windows\notepad.exe. Pick an icon and label if you want.<br /><br />If you want to add a button to a create a new text file, use this command instead in the Custom button: notepad &quot;%1%\New Text Document.txt&quot;. This will start Notepad and it will ask to create a new text document in the current folder where you are.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue May 26, 2015 9:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[BitOn]]></name></author>
<updated>2015-05-26T08:53:01-07:00</updated>
<published>2015-05-26T08:53:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19573#p19573</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19573#p19573"/>
<title type="html"><![CDATA[New text file / New notepad document to toolbar button ?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4660&amp;p=19573#p19573"><![CDATA[
How can i add command &quot;<strong><span style="text-decoration: underline">new notepad</span></strong>&quot; to toolbar button ?<br /><br />Custom button have a &quot;<span style="text-decoration: underline">new folder</span>&quot; command, but don't have a &quot;new notepad&quot; command to quickly create the new notepad in window. Notepad is a often use command too.<br /><br />please answer me.<br /><br />classicshell 4.0.4<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10334">BitOn</a> — Tue May 26, 2015 8:53 am</p><hr />
]]></content>
</entry>
</feed>