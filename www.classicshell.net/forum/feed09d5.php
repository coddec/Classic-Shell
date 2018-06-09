<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=950" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-20T19:50:38-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=950</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-20T19:50:38-07:00</updated>
<published>2013-07-20T19:50:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4919#p4919</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4919#p4919"/>
<title type="html"><![CDATA[Re: &quot;Run As Administrator&quot; Troubles]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4919#p4919"><![CDATA[
Yes, the Run as admin appears for Explorer after that but it doesn't actually elevate Explorer to admin. You still get UAC prompts inside Explorer unless you edit the registry to remove the DCOM restriction as someone figured out in this thread: <!-- m --><a class="postlink" href="http://social.technet.microsoft.com/Forums/windows/en-US/1798a1a7-bd2e-4e42-8e98-0bc715e7f641/unable-to-open-an-elevated-windows-explorer-window">http://social.technet.microsoft.com/For ... rer-window</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jul 20, 2013 7:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wlpeavy]]></name></author>
<updated>2013-07-20T13:12:25-07:00</updated>
<published>2013-07-20T13:12:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4917#p4917</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4917#p4917"/>
<title type="html"><![CDATA[Re: &quot;Run As Administrator&quot; Troubles]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4917#p4917"><![CDATA[
Thanks GauravK! That got me started.<br />I was able to &quot;Create Shortcut&quot; for explorer.exe and cmd.exe and drop them both onto the Start Menu left pane.<br />Had to create the shortcut but it's expendable. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />FWIW, if you can drop these two onto the Start Menu in the left pane, you CAN run them as administrator!<br />You can also do it if you drill down to the .exe using explorer but I didn't find another way.<br />Thanks again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1137">wlpeavy</a> — Sat Jul 20, 2013 1:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-20T12:43:18-07:00</updated>
<published>2013-07-20T12:43:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4915#p4915</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4915#p4915"/>
<title type="html"><![CDATA[Re: &quot;Run As Administrator&quot; Troubles]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4915#p4915"><![CDATA[
Microsoft prevents Explorer from being Run as admin ever since Windows 7. To pin anything to the Start Menu, at the moment you must drag and drop it to the pinned area. The next version (which is in beta) will add pinning using right click menu. 'Pin to Start' pins it to the Start screen.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jul 20, 2013 12:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wlpeavy]]></name></author>
<updated>2013-07-20T12:22:32-07:00</updated>
<published>2013-07-20T12:22:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4914#p4914</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4914#p4914"/>
<title type="html"><![CDATA[Re: &quot;Run As Administrator&quot; Troubles]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4914#p4914"><![CDATA[
I couldn't get a screenshot of the &quot;Start Menu&quot; in Win7 style. <br />However, I went to Start Menu :<br />\Programs\Windows System\File Explorer and right-click to open properties menu <br />and there was no &quot;Run as administrator&quot; and &quot;Pin to Start&quot; did nothing. <br /><br />FWIW, I've observed this on two different installations.<br />Is there some setting I'm missing or what? <br />Confused...<br /><br />PS: I WAS able to use explorer to find &quot;explorer.exe&quot; in the Windows folder and I could run it as administrator that way,<br />but could not pin it to Start even though the context menu selection was there.<br /><br />Still confused... <br /><a href="http://www.classicshell.net/forum/posting.php?mode=edit&amp;f=8&amp;p=4914#" class="postlink">:(</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1137">wlpeavy</a> — Sat Jul 20, 2013 12:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-18T20:03:06-07:00</updated>
<published>2013-07-18T20:03:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4874#p4874</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4874#p4874"/>
<title type="html"><![CDATA[Re: &quot;Run As Administrator&quot; Troubles]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4874#p4874"><![CDATA[
Where do you see the program that doesn't have &quot;run as administrator&quot;? A screenshot would be nice.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jul 18, 2013 8:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wlpeavy]]></name></author>
<updated>2013-07-18T19:53:02-07:00</updated>
<published>2013-07-18T19:53:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4873#p4873</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4873#p4873"/>
<title type="html"><![CDATA[&quot;Run As Administrator&quot; Troubles]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=950&amp;p=4873#p4873"><![CDATA[
I installed on Win 8 Core and am having difficulty getting things to run as Administrator.  <br /><br />So far, I seem to have to pin a program to the start menu in order to get the offer of &quot;Run as Administrator&quot; when I right-click.  <br /><br />That's the only work-around I've found so far.<br /><br />It'd really be nice if the detail panel had this ability or even the start menu!<br />Some installers are self-extractors that need to run as administrator but I've not figured out how to get this done.<br /><br />Suggestions???<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1137">wlpeavy</a> — Thu Jul 18, 2013 7:53 pm</p><hr />
]]></content>
</entry>
</feed>