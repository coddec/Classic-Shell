<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=7493" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-04-16T15:26:06-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=7493</id>
<entry>
<author><name><![CDATA[cs88]]></name></author>
<updated>2017-04-16T15:26:06-07:00</updated>
<published>2017-04-16T15:26:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32255#p32255</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32255#p32255"/>
<title type="html"><![CDATA[Re: &quot;Open in new window&quot; doesn't work anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32255#p32255"><![CDATA[
I've just found a thread on the Internet, discussing Classic Shell, and they suggested to Disable / Enable in IE 3 related add-ons: Classic Explorer Bar + Explorer BHO Class + ClassicIEBHO Class. I Disabled them (without rebooting computer) and the problem persisted. I guess it means, that the problem is somehow deeper and reinstalling Classic Shell may not help in this case.<br /><br />BTW, what exactly the option &quot;<em>Auto-navigate to selected folder</em>&quot; suppose to do / change?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13132">cs88</a> — Sun Apr 16, 2017 3:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cs88]]></name></author>
<updated>2017-04-16T14:53:56-07:00</updated>
<published>2017-04-16T14:53:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32254#p32254</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32254#p32254"/>
<title type="html"><![CDATA[Re: &quot;Open in new window&quot; doesn't work anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32254#p32254"><![CDATA[
@<strong><span style="font-family:Lucida Grande, Verdana, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">Gaurav, </span></span></strong>hank you for looking at your registry settings. I've compared them to mine and those are exactly the same.<br /><br />In attempt to fix the problem I've unregistered &quot;mousefocus.dll&quot; and set Classic Shell option &quot;<em>Settings | Navigation Pane | Auto-navigate to the selected folder</em>&quot; to &quot;<em>When using the keyboard</em>&quot;.(as it allows to keep correct path to the folder to open in Address Bar).<br /><br />Now to open new folder in new WE I have to do:<br />1. Right click on the folder (let say it's &quot;C:\WINDOWS\System32\drivers\etc&quot;) in Navigation Pane and choose &quot;<em>Open in new window</em>&quot;<br />2. In new WE I have to press TAB 3 times to put focus on drive C:<br />3. Press Right Arrow 4 times to open destination folder...<br /><br />Is it how you do it too? I remember a month ago I was able to accomplish the task just with p.1 (see above)...<br /><br />I'd hate to uninstall CS and install it back in order to try to fix it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13132">cs88</a> — Sun Apr 16, 2017 2:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-04-14T22:27:31-07:00</updated>
<published>2017-04-14T22:27:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32234#p32234</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32234#p32234"/>
<title type="html"><![CDATA[Re: &quot;Open in new window&quot; doesn't work anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32234#p32234"><![CDATA[
Try merging this into the Registry. If that doesn't work, I don't know.<br /><br />Windows Registry Editor Version 5.00<br /><br />[HKEY_CLASSES_ROOT\Folder\shell\opennewwindow]<br />&quot;OnlyInBrowserWindow&quot;=&quot;&quot;<br />&quot;LaunchExplorerFlags&quot;=dword:00000001<br />&quot;MUIVerb&quot;=&quot;@shell32.dll,-8517&quot;<br />&quot;MultiSelectModel&quot;=&quot;Document&quot;<br /><br />[HKEY_CLASSES_ROOT\Folder\shell\opennewwindow\command]<br />&quot;DelegateExecute&quot;=&quot;{11dbb47c-a525-400b-9e80-a54615a090c0}&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Apr 14, 2017 10:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cs88]]></name></author>
<updated>2017-04-14T16:45:59-07:00</updated>
<published>2017-04-14T16:45:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32232#p32232</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32232#p32232"/>
<title type="html"><![CDATA[Re: &quot;Open in new window&quot; doesn't work anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32232#p32232"><![CDATA[
Good to know that. But the reason why I'm asking question in this forum is - I see different (and related) behavior depending on Classic Shell options: &quot;Navigation pane style | Auto-navigate to the selected folder&quot;.<br /><br />Here is what I see if &quot;Auto-navigate to the selected folder&quot; is set to:<br />1. Default / When using the keyboard<br />Navigate: only correct drive, folder is not opened<br />Address bar: showing correct folder<br />Right panel: correct folder's content<br />2. Always<br />Navigate: only correct drive, folder is not opened<br />Address bar: correct drive only without path to folder<br />Right panel: root folders of the drive with focus on first folder in the path.<br /><br />In the first case at least address bar indicates correct folder... Then I have manually go there by using Right arrow key pressing it multiple times.<br /><br />I'd like to to have &quot;Always&quot; option (as it emulates WXP style of navigation), but it doesn't even allow me to navigate to the requested folder with Right arrow key (as in #1 case above).<br /><br />It's weird. I saw it working well, and not it's not... Do you have any advice on re-registering some DLL (assuming it was somehow unregistered) or check some  registry values to make it work?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13132">cs88</a> — Fri Apr 14, 2017 4:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-04-13T22:12:28-07:00</updated>
<published>2017-04-13T22:12:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32228#p32228</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32228#p32228"/>
<title type="html"><![CDATA[Re: &quot;Open in new window&quot; doesn't work anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32228#p32228"><![CDATA[
'Open in new window' is a Windows command and has nothing to do with Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Apr 13, 2017 10:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cs88]]></name></author>
<updated>2017-04-13T13:23:14-07:00</updated>
<published>2017-04-13T13:23:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32225#p32225</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32225#p32225"/>
<title type="html"><![CDATA[&quot;Open in new window&quot; doesn't work anymore]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7493&amp;p=32225#p32225"><![CDATA[
Recently I've noticed. that the context menu option for a folder &quot;Open in new window&quot; doesn't work as it used before. It opens new WE with focus on Navigation panel for the drive. But I doesn't open / expand to the folder itself. And now I have to navigate to it manually...<br /><br />How to fix that?<br /><br />Related &quot;Classic Explorer&quot; options:<br />Navigation Pane | Auto-navigate to the selected folder = Always<br /><br />Also (and I think it's related), I used to start WE with AutoHotkey command:<br /> Run,%A_WinDir%\Explorer.exe /e,d:\<br />That opened WE and expanded its left panel with folders on D:. Not anymore...<br /><br />I'm using &quot;Classic Shell&quot; version 4.3.0 with registered mousefocus.dll (to put focus in new WE).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13132">cs88</a> — Thu Apr 13, 2017 1:23 pm</p><hr />
]]></content>
</entry>
</feed>