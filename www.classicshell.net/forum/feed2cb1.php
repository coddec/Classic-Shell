<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4430" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-09-23T03:24:20-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4430</id>
<entry>
<author><name><![CDATA[MenuPeak]]></name></author>
<updated>2015-09-23T03:24:20-07:00</updated>
<published>2015-09-23T03:24:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=22427#p22427</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=22427#p22427"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=22427#p22427"><![CDATA[
Is there a way to add a delay (in ms, or seconds for example) before the monitor is actually turned off?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3771">MenuPeak</a> — Wed Sep 23, 2015 3:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jourta]]></name></author>
<updated>2015-08-06T08:04:42-07:00</updated>
<published>2015-08-06T08:04:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20782#p20782</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20782#p20782"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20782#p20782"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />@jourta, as of Classic Shell 4.2.3, you cannot add custom commands/items to submenus in Windows 7 style<br /></div><br /><br />Yes and will there be an updated release with this feature?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11023">jourta</a> — Thu Aug 06, 2015 8:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MenuPeak]]></name></author>
<updated>2015-08-05T23:46:48-07:00</updated>
<published>2015-08-05T23:46:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20750#p20750</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20750#p20750"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20750#p20750"><![CDATA[
This is quite handy, thanks. Always used a separate program for this.<br /><br /><div class="quotetitle">AKsarben wrote:</div><div class="quotecontent"><br />This is for laptops? Seems like on a desktop all you need is to reach over and turn the power button off on the monitor.<br /></div><br />Works fine for desktops, sends the monitor into standby mode if you need to leave the PC for some time for example, and want to quickly turn the monitor off. I don't think it's good practice to switch the monitor off directly without allowing it to switch off on its own first (I could be wrong though). Depends on how each monitor works of course, surely their Off button behaves differently on each device. I'd also never switch my TV off directly without turning it off from the remote first (red/standby button).<br /><br />Something related: There's a <a href="http://www.tenforums.com/general-discussion/12596-monitor-display-will-not-turn-off.html#post319183" class="postlink">bug</a> somewhere in Windows 10 that prevents the monitor from turning off on some systems! Hope they fix it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3771">MenuPeak</a> — Wed Aug 05, 2015 11:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-05T21:42:33-07:00</updated>
<published>2015-08-05T21:42:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20746#p20746</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20746#p20746"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20746#p20746"><![CDATA[
@jourta, as of Classic Shell 4.2.3, you cannot add custom commands/items to submenus in Windows 7 style. You can however add the monitor_off command in the main menu, above the Shutdown button. <br /><br />Go to Customize Start Menu, scroll down and select the last item there, then press the Insert key on the keyboard. A new item will get added. Change its command from &quot;Administrative Tools&quot; to &quot;Custom&quot; and then double click its icon to bring up the &quot;Edit Menu Item&quot; dialog. <br /><br />In the Edit Menu Item dialog, specify the Command: monitor_off. For Label, specify: $Menu.MonitorOff. Set a suitable icon and click OK twice to save settings.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Aug 05, 2015 9:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jourta]]></name></author>
<updated>2015-08-05T14:00:09-07:00</updated>
<published>2015-08-05T14:00:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20734#p20734</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20734#p20734"/>
<title type="html"><![CDATA[Monitor off option in shutdown menu (Windows 7 style)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=20734#p20734"><![CDATA[
Hi!<br /><br />My computer doesn't support sleep functions that Classic Shell requires as mensioned <a href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=567" class="postlink">here</a>. I can however use the monitor_off command to put my computer to sleep normally. What I want is to add a similar customization feature like in Classic style menu to Windows 7 style menu as well. Now there is only one option to add an extra button to right column if you use Windows 7 style menu and want to use monitor_off command. I don't want extra buttons to right column but to add monitor_off function to the shutdown menu directly.<br /><br />Thanks in advance.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11023">jourta</a> — Wed Aug 05, 2015 2:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-04-06T23:48:56-07:00</updated>
<published>2015-04-06T23:48:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18682#p18682</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18682#p18682"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18682#p18682"><![CDATA[
Yes it is for laptops, tablets and any display which doesn't have a manual hardware power off button.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Apr 06, 2015 11:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[AKsarben]]></name></author>
<updated>2015-04-06T18:52:37-07:00</updated>
<published>2015-04-06T18:52:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18678#p18678</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18678#p18678"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18678#p18678"><![CDATA[
This is for laptops?  Seems like on a desktop all you need is to reach over and turn the power button off on the monitor.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9880">AKsarben</a> — Mon Apr 06, 2015 6:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-04-05T20:08:25-07:00</updated>
<published>2015-04-05T20:08:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18656#p18656</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18656#p18656"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18656#p18656"><![CDATA[
For the 'Label' of the command 'monitor_off', you can use the text: $Menu.MonitorOff so it is automatically translated if your language if it is non-English. For the icon, you can use the attached icon if you like.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Apr 05, 2015 8:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[BenJetson]]></name></author>
<updated>2015-04-05T13:13:35-07:00</updated>
<published>2015-04-05T13:13:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18646#p18646</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18646#p18646"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18646#p18646"><![CDATA[
I've marked the thread as &quot;solved.&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9864">BenJetson</a> — Sun Apr 05, 2015 1:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[BenJetson]]></name></author>
<updated>2015-04-05T13:12:20-07:00</updated>
<published>2015-04-05T13:12:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18645#p18645</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18645#p18645"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18645#p18645"><![CDATA[
I tried out the classic version of the menu, and I was really surprised at how much more customizable it was! I'm not a big fan of the cascading all programs menu though, so I think I'll be sticking with the Win7 style menu, with an option in the right side. Thanks for responding! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9864">BenJetson</a> — Sun Apr 05, 2015 1:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-04-02T12:57:04-07:00</updated>
<published>2015-04-02T12:57:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18550#p18550</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18550#p18550"/>
<title type="html"><![CDATA[Re: Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18550#p18550"><![CDATA[
You need to use the Classic style if you want to customize the shutdown menu. The Classic style is much more customizable.<br /><br />If you want to stick to the Windows 7 style, the only thing you can do is add an extra item to the right column. Add a new custom item in the Customize Start Menu tab, set its command to &quot;monitor_off&quot;, enter the text for the Label and optionally an icon.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Apr 02, 2015 12:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[BenJetson]]></name></author>
<updated>2015-04-02T12:32:58-07:00</updated>
<published>2015-04-02T12:32:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18549#p18549</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18549#p18549"/>
<title type="html"><![CDATA[Monitor off option in shutdown menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4430&amp;p=18549#p18549"><![CDATA[
Hi, I've been using the Classic Shell start menu for a while now, and stumbled upon this changelog in the MSFN forum (<a href="http://www.msfn.org/board/topic/163263-classic-shell-40/" class="postlink">linked here</a>). One of the changes mentioned in the post was &quot;A new turn off monitor command that you can add to your Shutdown submenu.&quot; I've been trying to add this setting to my shutdown menu, and can't seem to find the option. I looked to the tooltip of the shutdown menu items setting, and it doesn't appear to include it. Here's an image of the tooltip:<br /><br /><div align="center"><img src="http://i.imgur.com/dDUWMdS.png" alt="" /></div><br /><div align="justify">Is there any way to enable this? It&#39;d be handy at times where I need to quickly need to turn off the monitor. Thanks in advance for any help. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":&#41;" title="Smile" /></div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9864">BenJetson</a> — Thu Apr 02, 2015 12:32 pm</p><hr />
]]></content>
</entry>
</feed>