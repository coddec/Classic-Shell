<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=992" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-26T20:18:40-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=992</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-26T20:18:40-07:00</updated>
<published>2013-07-26T20:18:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=992&amp;p=5137#p5137</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=992&amp;p=5137#p5137"/>
<title type="html"><![CDATA[Re: Classic Start Menu New Software Advice Needed]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=992&amp;p=5137#p5137"><![CDATA[
Here's how it works:<br />There are two main Start Menu folders:<br />C:\Users\user\...<br />C:\ProgramData\Microsoft\...<br /><br />Both Start Menu folders have a subfolder called Programs.<br /><br />The start menu shows the combined contents of both Start Menu folders (excluding the Programs folder) above the line. It shows the combined contents of both Programs folders below the line.<br /><br />So if you want something to show for all users you need to place it into the common Start Menu folder. You can't do that with drag/drop because drag/drop prefers the user-specific folder. You need to open the folder in Explorer and place the shortcuts manually.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Jul 26, 2013 8:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RNFolsom]]></name></author>
<updated>2013-07-26T10:50:11-07:00</updated>
<published>2013-07-26T10:50:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=992&amp;p=5118#p5118</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=992&amp;p=5118#p5118"/>
<title type="html"><![CDATA[Classic Start Menu New Software Advice Needed]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=992&amp;p=5118#p5118"><![CDATA[
Is there any way to have Classic Start Menu at a location common to all Accounts?<br /><br />I am setting up a new Win7sp1 64-bit laptop, and every time I install additional software, I have to modify each account's Classic Start Menu. That can be a bit of a time sink.<br /><br />Installations are done while I am in my Administrator account, and so the newly installed software's shortcuts show up in the Administrator Account's Classic Start Menu below the horizontal line, into the Programs folder. That's not a problem because I can drag (right-click to move) the new shortcuts out of Programs and into a location above the horizontal line, if I want them there (above the line).<br /><br />Unfortunately, the new software's shortcuts do not magically appear in the other accounts. So in the other accounts, one solution is to create new shortcuts, which is time consuming, especially for software with many components (e.g. WordPerfect Office) software.<br /><br />As an alternative, I tried copying the entire Administrator Account's Classic Start Menu into a Standard User Account's start menu (locations given below), and somehow I made such a mess in both accounts' start menus that I needed to restore a Partition C: backup. I will now have to reinstall the new software (WordPerfect Office).<br />Part of the difficulty is that, as described below (under the ==== line), the start menus are a composite of information at two locations.<br /><br />I would appreciate any comments, suggestions, or other advice about a way to have a Classic Start Menu at a location common to all Accounts, or to simplify a way of copying the Administrator's new software Start Menu items into the other user accounts.<br /><br />R.N. (Roger) Folsom<br /><br />================================================================<br /><br />START MENU SOURCE LOCATIONS<br /><br />My naive experience (new Win7sp1 user on new laptop) is that each Account's Classic Start Menu is located in partition C: at<br />Users\&lt;AccountName&gt;\AppData\Roaming\Microsoft\Windows\Start Menu.<br /><br />And below a horizontal line, the Programs folder includes some shortcuts I have added (such as shortcuts to Acronis backup software), and shortcuts to folders listed in partition C: at<br />ProgramData\Microsoft\Windows\Start Menu\Programs.<br />At least on my Win7sp1 laptop that location has the following folders:<br />Administrative Tools<br />Intel<br />Intel PROset Wireless<br />Maintenance<br />qNVIDIA Corporation<br />Startup<br />Tablet PC [not relevant to my new traditional keyboard laptop, but it's there anyway]<br />Uninstallers [I think added by me, but I didn't know it would go into this location]<br />plus a desktop.ini file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=487">RNFolsom</a> — Fri Jul 26, 2013 10:50 am</p><hr />
]]></content>
</entry>
</feed>