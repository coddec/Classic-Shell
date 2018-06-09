<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=7623" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-10T07:46:08-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=7623</id>
<entry>
<author><name><![CDATA[Stamimail]]></name></author>
<updated>2017-08-10T07:46:08-07:00</updated>
<published>2017-08-10T07:46:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33615#p33615</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33615#p33615"/>
<title type="html"><![CDATA[Re: Question| How to send folders/files to a program by butt]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33615#p33615"><![CDATA[
<div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />You can use a batch file to delete the .tmp file and include the Rename command in that batch file.<br /></div>I have already understood it, but I haven't the scripting knowledge. Do you know what is the code I need to put in the bat file? thanks.<br /><div class="quotetitle"><b>Quote:</b></div><div class="quotecontent"><br />The file order issue is buggy Windows Explorer behavior I think (of the File Pane).<br /></div>Is this something can be fixed by Classic Shell? (Feature Request)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=463">Stamimail</a> — Thu Aug 10, 2017 7:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-10T06:09:52-07:00</updated>
<published>2017-08-10T06:09:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33613#p33613</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33613#p33613"/>
<title type="html"><![CDATA[Re: Question| How to send folders/files to a program by butt]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33613#p33613"><![CDATA[
You can use a batch file to delete the .tmp file and include the Rename command in that batch file.<br /><br />The file order issue is buggy Windows Explorer behavior I think (of the File Pane). You could try selecting it differently using the mouse or using the keyboard.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Aug 10, 2017 6:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stamimail]]></name></author>
<updated>2017-08-09T14:43:30-07:00</updated>
<published>2017-08-09T14:43:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33608#p33608</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33608#p33608"/>
<title type="html"><![CDATA[Re: Question| How to send folders/files to a program by butt]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=33608#p33608"><![CDATA[
I got some help. The following command works for me:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&quot;C:\Program Files (x86)\ReNamer\ReNamer.exe&quot; /list %3</div><br />But I have 2 probelms:<br />1. Using this command, how do I delete the .tmp file in %temp%?<br />2. Assume I select the 4 first files of mp3 files folder:<br /><br /><span style="background-color:#99ccff;">1.mp3<br />2.mp3<br />3.mp3<br />4.mp3</span><br />5.mp3<br />6.mp3<br />7.mp3<br /><br />and then I click the &quot;custom button&quot; in Classic Bar - It sends the list to Renamer in this way:<br /><br />4.mp3<br />1.mp3<br />2.mp3<br />3.mp3<br /><br />It's not the desired behaviour. The user is expecting to have the order of the files in the list in the same order of the files in the folder, no matter what the order of the selection was (no matter what file selected first/last).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=463">Stamimail</a> — Wed Aug 09, 2017 2:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stamimail]]></name></author>
<updated>2017-06-13T05:03:08-07:00</updated>
<published>2017-06-13T05:03:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32996#p32996</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32996#p32996"/>
<title type="html"><![CDATA[Re: Question| How to send folders/files to a program by butt]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32996#p32996"><![CDATA[
It doesn't work for me for some reason.<br />Which version of Classic shell I need for that?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=463">Stamimail</a> — Tue Jun 13, 2017 5:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stamimail]]></name></author>
<updated>2017-06-04T05:10:40-07:00</updated>
<published>2017-06-04T05:10:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32882#p32882</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32882#p32882"/>
<title type="html"><![CDATA[Re: Question| How to send folders/files to a program by butt]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32882#p32882"><![CDATA[
I guess I need to use %4 in my case.<br />Unfortunately I don't have enough experience with batch scripting.<br />Can I get help with this?<br />How to make correctly the batch file for sending selected folders&amp;files to a program?<br />thanks in advance.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=463">Stamimail</a> — Sun Jun 04, 2017 5:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-20T12:28:05-07:00</updated>
<published>2017-05-20T12:28:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32716#p32716</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32716#p32716"/>
<title type="html"><![CDATA[Re: Question| How to send folders/files to a program by butt]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32716#p32716"><![CDATA[
You can use the following placeholders in a Custom button's Command or Link field:<br /><br />◦%1 is the path of the current folder. Keep in mind that if the current folder is a root of a drive it will end with a backslash (like C:\)<br /><br />◦%2 is the path of the selected file (only when a single file is selected). Does not work for multiple selected files<br /><br />◦%3 is a name of a temporary text file that contains all selected files. Each line in the text file contains one file with its full path. Meaning you will have to first output multiple selected files to a temporary text file in %tmp% for example.<br /><br />◦%4 is the same as %3, but the file is in Unicode (UTF16) format. The file contains no byte order mark. %3 and %4 can't both be used by the same command<br /><br />Note to developers: When %3 or %4 is used, it is the responsibility of the command to delete the temporary file when it finishes. Otherwise the temp file will be left behind and waste disk space. Also if the command is a console application or a batch file it will be launched in silent mode with no console window<br /><br /><br />◦%5 is a name of a temporary text file, which can be used to return a command back to Classic Explorer. If the first 2 bytes of the file are 255 and 254, the file is treated as Unicode. Only one command can be used at a time. The command can be:<br />◾open &lt;folder name&gt; - causes Explorer to navigate to the given folder<br />◾select &lt;list of file names&gt; - selects the given files, deselects the rest. The file names must be separated by a tab or a newline character. The files should not contain a path. If they do, the path will be ignored<br /><br />◾refresh - refreshes Explorer<br />◦Note to developers: commands using %5 will run in silent mode (like commands using %3 or %4) but also Explorer will wait for the process to finish. The process must finish as quickly as possible, because Explorer will be frozen during the execution of the command<br /><br />****************************************************************************<br />An example:<br /><br />Copy selected files to the parent folder<br /><br />Create a batch file called C:\CopyParent.bat:<br /> set list=%1<br /> set list=%list:&quot;=%<br /> for /F &quot;delims=&quot; %%i in (%list%) do copy /Y &quot;%%i&quot; ..<br /> del %1<br /> <br />Use this command: C:\CopyParent.bat &quot;%3&quot;. %3 will be replaced by a text file containing the full names of all selected files. The batch file will read each line of that text file, and copy each of the selected files to the parent folder. At the end the batch file deletes the initial temp file. The first two set commands remove the quotes from the %1 parameter.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat May 20, 2017 12:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Stamimail]]></name></author>
<updated>2017-05-19T08:05:58-07:00</updated>
<published>2017-05-19T08:05:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32705#p32705</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32705#p32705"/>
<title type="html"><![CDATA[Question| How to send folders/files to a program by button?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7623&amp;p=32705#p32705"><![CDATA[
I wanted to send folders/files selected to Renamer by Classic Explorer button<br /><!-- m --><a class="postlink" href="http://www.den4b.com/forum/viewtopic.php?id=2312">http://www.den4b.com/forum/viewtopic.php?id=2312</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=463">Stamimail</a> — Fri May 19, 2017 8:05 am</p><hr />
]]></content>
</entry>
</feed>