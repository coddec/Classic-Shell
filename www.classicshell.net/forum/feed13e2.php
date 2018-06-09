<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=970" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-22T06:19:57-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=970</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-22T06:19:57-07:00</updated>
<published>2013-07-22T06:19:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=970&amp;p=4968#p4968</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=970&amp;p=4968#p4968"/>
<title type="html"><![CDATA[Re: Open multiple selected files/folders by programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=970&amp;p=4968#p4968"><![CDATA[
%2 only works for a single selected item in Classic Explorer. There is %3, %4 and %5 (which you must have read in the help file) but they will require creating a batch file or using custom utilities to send selected files to a text file. %5 can be used to return a command back to Classic Explorer.<br /><br />There is a simpler way. You could try creating a secondary context menu verb directly in the registry if you know how or using an app like Default Programs Editor (easier way). By default, Windows restricts opening of multiple files if more than 15 of them are selected but a registry tweak can override that. Go to HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer and create a DWORD value called MultipleInvokePromptMinimum. Set the value in decimals to the number of files you want till which the context menu open, edit, etc verbs won't be restricted. e.g if you set it to 100, the verb will be disabled after selecting 101 files. Then you can select multiple files and invoke the right click verb with your custom program such as Notepad++ on all of them.<br /><br />There is also the free StExBar toolbar that does have the ability to create custom commands that work on multiple selected files.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jul 22, 2013 6:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tacmorc]]></name></author>
<updated>2013-07-22T00:57:32-07:00</updated>
<published>2013-07-22T00:57:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=970&amp;p=4965#p4965</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=970&amp;p=4965#p4965"/>
<title type="html"><![CDATA[Open multiple selected files/folders by programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=970&amp;p=4965#p4965"><![CDATA[
Hello,<br /><br />I've created serveral shortcuts for classic explorer to the toolbar with the %2 command. To open a selected file or folder directly by the programs shortcut.<br /><br />But I wasn't able to get the command working with multiple selected files and folders. The programs just start with a blank page or an empty/standard path.<br /><br />I tried open multiple files with notepad++. But with the command notepad++.exe %2 it just opens a blank page, when selected more than one file.<br /><br />So is it even possible ? Maybe through an extern shortcut or cmd command or Batch ?<br /><br />What about &quot;send to&quot; are there any commands for it to use with ClassicExplorer or extern methods like above ?<br /><br />regards<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1154">Tacmorc</a> — Mon Jul 22, 2013 12:57 am</p><hr />
]]></content>
</entry>
</feed>