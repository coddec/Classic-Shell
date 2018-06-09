<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=17&amp;t=4390" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-03-25T20:48:04-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=17&amp;t=4390</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-03-25T20:48:04-07:00</updated>
<published>2015-03-25T20:48:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18366#p18366</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18366#p18366"/>
<title type="html"><![CDATA[Re: Question - How to change folder icons?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18366#p18366"><![CDATA[
This tutorial might help: <!-- m --><a class="postlink" href="http://winaero.com/blog/get-windows-8-icons-back-in-windows-10/">http://winaero.com/blog/get-windows-8-i ... indows-10/</a><!-- m --> It outlines the desktop.ini steps. Although it doesn't mention two things: 1. For UAC protected folders, desktop.ini must be opened in an elevated instance of Notepad. 2. You have to set the &quot;read only&quot; or &quot;system&quot; attribute on a folder so Explorer shows its customized icon.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Mar 25, 2015 8:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[chantecler]]></name></author>
<updated>2015-03-25T16:57:27-07:00</updated>
<published>2015-03-25T16:57:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18363#p18363</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18363#p18363"/>
<title type="html"><![CDATA[Re: Question - How to change folder icons?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18363#p18363"><![CDATA[
Thank you GauravK<br /><br />I downloaded the evaluation version of Microangelo On Display and it worked just fine.<br /><br />Now my dilemma is whether to learn how to do the changes by myself or to buy the software but, as you pointed out before, it may not worth the price. It is an excellent software, I'm just saying it for the little use I'm going to make of it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9760">chantecler</a> — Wed Mar 25, 2015 4:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-03-24T06:08:11-07:00</updated>
<published>2015-03-24T06:08:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18320#p18320</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18320#p18320"/>
<title type="html"><![CDATA[Re: Question - How to change folder icons?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18320#p18320"><![CDATA[
Changing icons for non-UAC protected folders works by right clicking the folder -&gt; Properties -&gt; Customize tab.<br /><br />Changing icons for folders protected by User Account Control has been made extremely hard ever since Windows Vista. For folders which are protected by UAC (such as the folders inside C:\ProgramData\Microsoft\Windows\Start Menu\Programs), you need to elevate the program which changes the icon using the desktop.ini method. However, Microsoft doesn't easily allow Explorer.exe to be elevated (which is the process responsible for changing icon from the Properties).<br /><br />Also, changing icon manually is a very tedious process because it requires modifying desktop.ini with elevated permissions again and setting the right attributes for the folder (for Explorer to show the icon correctly). Finally, a bug in the Explorer shell introduced ever since Vista causes icons to not refresh correctly unless some undocumented API function is called.<br /><br />I use a commercial app to effortlessly change icons from the context menu. It is called Microangelo OnDisplay: <!-- m --><a class="postlink" href="https://shopper.mycommerce.com/checkout/product/15248-3">https://shopper.mycommerce.com/checkout/product/15248-3</a><!-- m --> It does all the hard work of correctly modifying desktop.ini in elevated mode for UAC protected folders, setting the right folder attributes and refreshing the icon cache. OnDisplay also has an excellent icon handler shell extension so it can change literally any Windows icon, gives you control over icon overlays etc. But at $25, it doesn't exactly offer much value though. Should've been priced $3 or $5 at most.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Mar 24, 2015 6:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[chantecler]]></name></author>
<updated>2015-03-22T20:58:25-07:00</updated>
<published>2015-03-22T20:58:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18291#p18291</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18291#p18291"/>
<title type="html"><![CDATA[Re: Question - How to change folder icons?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18291#p18291"><![CDATA[
Apparently the issue has something to do with the read-only attribute that I cannot get to modify, even as an administrator. I'll let you know when I find a solution.<br /><br />Once again, thanks a lot<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9760">chantecler</a> — Sun Mar 22, 2015 8:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-03-22T20:15:31-07:00</updated>
<published>2015-03-22T20:15:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18290#p18290</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18290#p18290"/>
<title type="html"><![CDATA[Re: Question - How to change folder icons?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18290#p18290"><![CDATA[
Unfortunately there is nothing in that utility that can help with icons.<br />The method I described worked for this person: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=4343">viewtopic.php?f=12&amp;t=4343</a><!-- l --><br /><br />Did the folder icons change in Explorer?<br />Are you certain you are deleting the file while the menu is not active?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 22, 2015 8:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[chantecler]]></name></author>
<updated>2015-03-22T20:08:12-07:00</updated>
<published>2015-03-22T20:08:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18289#p18289</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18289#p18289"/>
<title type="html"><![CDATA[Re: Question - How to change folder icons?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18289#p18289"><![CDATA[
Ivo<br /><br />Thanks for your reply. <br /><br />It didn't work.<br /><br />May I send you the file I obtained from the Classic Shell Utility in a private message? I don't feel comfortable making it public.<br /><br />Thanks again<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9760">chantecler</a> — Sun Mar 22, 2015 8:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-03-22T17:32:51-07:00</updated>
<published>2015-03-22T17:32:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18287#p18287</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18287#p18287"/>
<title type="html"><![CDATA[Re: Question - How to change folder icons?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18287#p18287"><![CDATA[
You may have some luck changing multiple icons at the same time by selecting the folders in Explorer and editing the properties. When I tried it I got mixed results. You may have better luck.<br /><br />If the start menu doesn't show the changed icons, after you are done, exit the menu (right-click on the start button -&gt; Exit), then go to the folder %LOCALAPPDATA%\ClassicShell and delete the file DataCahe.db. Then run ClassicStartMenu.exe. The icons should be changed.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 22, 2015 5:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[chantecler]]></name></author>
<updated>2015-03-22T17:24:15-07:00</updated>
<published>2015-03-22T17:24:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18286#p18286</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18286#p18286"/>
<title type="html"><![CDATA[Question - How to change folder icons?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4390&amp;p=18286#p18286"><![CDATA[
Hi all,<br /><br /><br />I would like to change the folder icons shown in the Programs sub-menu. Here is what I have been doing: I right click on an icon, select properties, select customize, click on &quot;change icon&quot;, select an icon from a copy of the WindowsXP shell32.dll file that I renamed shell32XP.dll and stored in my system32 folder, click on &quot;Apply&quot; and it appears as if the system takes the change but the program sub-menu remains unchanged.<br /><br /><br />What am I doing wrong?<br /><br /><br />Is there any way to change all the Programs sub-menu folder icons at a time?<br /><br /><br />Do I have to change them one by one?<br /><br /><br />Thanks for your help<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9760">chantecler</a> — Sun Mar 22, 2015 5:24 pm</p><hr />
]]></content>
</entry>
</feed>