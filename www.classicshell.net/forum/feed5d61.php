<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=22&amp;t=6455" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-19T16:32:28-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=22&amp;t=6455</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-19T16:32:28-07:00</updated>
<published>2016-08-19T16:32:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28147#p28147</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28147#p28147"/>
<title type="html"><![CDATA[Re: Fixmbr and fixboot RUN SUCCESSFULLY--startup repair fail]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28147#p28147"><![CDATA[
When you created the boot disk, did the tool you use tell you if you were creating a UEFI/GPT boot disk BIOS/MBR disk? &quot;Legacy MBR&quot; can be disabled if you can boot successfully with a UEFI/GPT USB disk. If your Windows was installed with UEFI disabled, then legacy MBR must be enabled.<br /><br />Before you boot into the command prompt to try the recovery, try to disconnect or disable from BIOS/UEFI, any secondary hard drives which are not used for booting. Once you fix the boot drive, you can enable them again. Startup Repair might be successful with additional drives disabled.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Aug 19, 2016 4:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-08-03T15:56:00-07:00</updated>
<published>2016-08-03T15:56:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28128#p28128</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28128#p28128"/>
<title type="html"><![CDATA[Re: Fixmbr and fixboot RUN SUCCESSFULLY--startup repair fail]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28128#p28128"><![CDATA[
Don't know your specific problem for why the fix wont work. but if you can get to command prompt and you have another disk drive, you can easily transfer data to it (that you can later access on a clean copy of windows)<br /><br />Heres a list of necessary commands<br /><br />dir (list all the files and folders in a directory)<br />cd ..(moves up 1 directory/folder)<br />cd &quot;Directory name&quot; (moves into the selected directory, to get directory names in the current folder, you can type 'dir', this command h as no quotation marks)<br /><br />and the copy command: (which being more complicated warrants a link <a href="https://technet.microsoft.com/en-us/library/bb490886.aspx?f=255&amp;MSPPError=-2147217396" class="postlink">https://technet.microsoft.com/en-us/library/bb490886.aspx?f=255&amp;MSPPError=-2147217396</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Aug 03, 2016 3:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2016-08-03T13:46:18-07:00</updated>
<published>2016-08-03T13:46:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28106#p28106</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28106#p28106"/>
<title type="html"><![CDATA[Fixmbr and fixboot RUN SUCCESSFULLY--startup repair fails...]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6455&amp;p=28106#p28106"><![CDATA[
I was infected with the virus as everyone is aware of.<br /><br />For starters, should I have legacy boot enabled or disabled? I've tried the fix with both and nothing works. I'm able to get into command prompt with the recovery ISO on a USB, and I can run fixmbr and fixboot with no problems but when I go into startup repairs it tells me that it can't repair my PC and that's it. I don't know what to do because these are the only options at fixing my laptop and salvaging all my data. If there's no other option I'll have to do a clean install...<p>Statistics: Posted by Guest — Wed Aug 03, 2016 1:46 pm</p><hr />
]]></content>
</entry>
</feed>