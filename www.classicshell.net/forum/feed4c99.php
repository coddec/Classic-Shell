<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=5638" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-01-28T00:34:44-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=5638</id>
<entry>
<author><name><![CDATA[slwtx1983]]></name></author>
<updated>2016-01-28T00:34:44-07:00</updated>
<published>2016-01-28T00:34:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24836#p24836</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24836#p24836"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24836#p24836"><![CDATA[
You are not lying.  I was not happy with the lack of start menu in 8.  However, windows promised to bring it back in 8.1 and wow did they disappoint.  It was then that I ran out and found classic she'll, and I was glad I did.  Mostly because when Windows 10 was released, the start menu was equally disappointing.  Every end user that I come across that says they updated to 10 and hate it, are immediately turned around after I install Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12569">slwtx1983</a> — Thu Jan 28, 2016 12:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-01-27T23:35:19-07:00</updated>
<published>2016-01-27T23:35:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24833#p24833</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24833#p24833"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24833#p24833"><![CDATA[
@slwtx1983, No I am not its developer. I wrote an article about it since I use it myself and many others like Classic Shell that make the Windows experience a million times better.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 27, 2016 11:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[slwtx1983]]></name></author>
<updated>2016-01-27T22:26:42-07:00</updated>
<published>2016-01-27T22:26:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24831#p24831</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24831#p24831"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24831#p24831"><![CDATA[
Yeah, I found your source code from many moons ago.  <!-- m --><a class="postlink" href="http://www.codeproject.com/Articles/45430/Classic-Shell">http://www.codeproject.com/Articles/45430/Classic-Shell</a><!-- m -->.  Looks like IShellDispatch::ShutdownWindows() was definitely the correct code.<br /><br />Gaurav - I do use the event trackers, but thank you so darn much for that ShutdownGuard app.  I'll definitely check this out and am excited at the prospect.  It looks like this is your app, correct?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12569">slwtx1983</a> — Wed Jan 27, 2016 10:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-01-27T18:53:36-07:00</updated>
<published>2016-01-27T18:53:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24825#p24825</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24825#p24825"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24825#p24825"><![CDATA[
I think your problem is solved then since you can hide Restart and Shutdown and keep only the Shutdown dialog, in Windows 7 style. You however get to choose only one default action in that dialog - either Restart or Shutdown.<br /><br />If you are using the Event Tracker to only block a shutdown or restart which might be initially accidentally, there is another app which can block such events called ShutdownGuard: <!-- m --><a class="postlink" href="http://winaero.com/blog/avoid-accidental-and-automatic-shut-down-or-restart-with-shutdownguard/">http://winaero.com/blog/avoid-accidenta ... downguard/</a><!-- m --> Unless you use the Event Tracker to really log the reason every time and not just to block the 1-click Shutdown/Restart, then this app should also do the trick on a datacenter where uptime is most important. It can block even programmatic shutdowns/restarts such as the one initiated by Windows Update, or some installer or some malware.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 27, 2016 6:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-27T14:35:48-07:00</updated>
<published>2016-01-27T14:35:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24817#p24817</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24817#p24817"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24817#p24817"><![CDATA[
I don't have the source code at the moment, but I think it's this one:<br /><a href="https://msdn.microsoft.com/en-us/library/windows/desktop/gg537727(v=vs.85).aspx" class="postlink">https://msdn.microsoft.com/en-us/library/windows/desktop/gg537727(v=vs.85).aspx</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jan 27, 2016 2:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[slwtx1983]]></name></author>
<updated>2016-01-27T14:11:11-07:00</updated>
<published>2016-01-27T14:11:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24816#p24816</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24816#p24816"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24816#p24816"><![CDATA[
I looked on the dev site and couldn't find the specific API.  Do you have a link to the API that calls the Shutdown dialog box, or perhaps the API name, so I can look it up?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12569">slwtx1983</a> — Wed Jan 27, 2016 2:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-27T13:53:51-07:00</updated>
<published>2016-01-27T13:53:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24815#p24815</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24815#p24815"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24815#p24815"><![CDATA[
I am not dealing with the shutdown event tracker at all.<br />I am just showing the Shutdown dialog - the same one you get when you click on the Desktop and press Alt+F4. It is not done via command line. There is an API for it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jan 27, 2016 1:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[slwtx1983]]></name></author>
<updated>2016-01-27T13:41:05-07:00</updated>
<published>2016-01-27T13:41:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24814#p24814</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24814#p24814"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24814#p24814"><![CDATA[
How does it currently call the event tracker?  Is it not possible to simply call the event tracker the same way but with a different command.  Can you let me know how it currently calls the shutdown event tracker dialog box?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12569">slwtx1983</a> — Wed Jan 27, 2016 1:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-27T13:19:49-07:00</updated>
<published>2016-01-27T13:19:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24811#p24811</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24811#p24811"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24811#p24811"><![CDATA[
I understand what you mean by Restart vs Shutdown, however if the suggested change is to use the Shutdown dialog, I don't see the difference - both would bring up the exact same dialog with the same setting selected by default.<br />If you suggest to instead bring up some other UI, I would like to know how to do that. What is the command to open the Shutdown Event Tracker in restart or shutdown mode?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jan 27, 2016 1:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[slwtx1983]]></name></author>
<updated>2016-01-27T12:26:52-07:00</updated>
<published>2016-01-27T12:26:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24808#p24808</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24808#p24808"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24808#p24808"><![CDATA[
It may not sound useful to you, but Windows Server 2003 and up all follow the same principal for Restart and Shutdown.  Both, by default, bring up the Shutdown Event Tracker.  The difference being that when you restart, it defaults the setting to &quot;Reboot&quot; and when you shutdown, the default setting is &quot;Shutdown&quot;.  I am not sure why that seems less than useful to you, but tracking reboot and shutdown events is very popular.<br /><br />Also, yes, configuring servers is expected.  Owning a company that hosts servers, I don't have the liberty of running a single Group Policy.  I'd have to configure it for each new environment.  As stated, it isn't a horrible ordeal.  I basically use an Image with ClassicShell preinstalled.  I just need to launch the image and adjust the registry so that it disables the Restart option.<br /><br />The main issue with disabling the Restart option, is that post Server 2003, the Shutdown and Restart options are not merged.  People are used to having separate options for Shutdown and Restart since Server 2008.  It isn't the same as the previous versions and therefore it requires a small amount of training.  My goal was to see if we could just make them the same.  If shutdown event tracker is enabled, Shutdown and Restart should be the same.  Disabling it is a possibility, just as not using Windows at all is sometimes a possibility.  It just doesn't follow the same rules as Windows Server has for the last 8 years.  Useful is not really the point.  Continuity is what is in question here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12569">slwtx1983</a> — Wed Jan 27, 2016 12:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-01-27T11:00:21-07:00</updated>
<published>2016-01-27T11:00:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24805#p24805</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24805#p24805"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24805#p24805"><![CDATA[
So basically you want Restart to do the same as Shutdown? That doesn't sound very useful, as you could just remove Restart from the menu.<br /><br />I think it's expected that you have to do some configuration on a new server. Particularly since you can adjust the contents of the shutdown menu from the group policies. It can be rolled into whatever setup you do on new machines.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jan 27, 2016 11:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[slwtx1983]]></name></author>
<updated>2016-01-27T10:38:02-07:00</updated>
<published>2016-01-27T10:38:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24804#p24804</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24804#p24804"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24804#p24804"><![CDATA[
I love the info.  Thank you so much for all your help.  Let me first start by answering your question. I am using the Windows 7 theme in Classic Shell.  Let me then let you know why I submitted my query.  The other day, I was working remotely on a production Hyper-V server in my datacenter.  I went to Log Off, but my mouse lagged and clicked on the Shutdown button.  Luckily, it is in a cluster so there was no customer downtime, but it was a dangerous mistake to make.  I have never changed any settings in the Classic Shell on these machines, and it definitely didn't give me the Shutdown Tracker.  In fact, I went through the other day and was playing with it, and none of the server have the Shutdown Tracker turned on by default.  I ended up going through and setting each of them to completely disable the shutdown and restart options, and set Log Off as the primary button.  I'd rather use commandline to shutdown and reboot my servers in the datacenter, than make that mistake again.<br /><br />I'd figure what you said to be true, that by default it is always set to use the Shutdown Tracker dialog on a server.  Like the old Server 2003 days, I could disable the Restart button, and everyone would just click Shutdown, even if they wanted to restart.  I was mostly just coming here hoping to figure out if the Restart command could at least follow the current setting for the Shutdown button inside the ClassicShell start menu.  So if the Shutdown button is set to open the tracker, then the Restart button would do the same (out of the box).  Just in case I install it on a new server and forget to update the Restart button configuration.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12569">slwtx1983</a> — Wed Jan 27, 2016 10:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-01-26T23:50:28-07:00</updated>
<published>2016-01-26T23:50:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24788#p24788</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24788#p24788"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24788#p24788"><![CDATA[
The short answer is no to both your questions, unless you are willing to do some configuration, and even then, only the classic style of the menu can open the Shutdown dialog with Event Tracker UI when you click either &quot;Restart&quot; or &quot;Shutdown&quot;.<br /><br />The user interface that Windows 8 or Windows 10 display for the Shutdown Event Tracker is a new addition to these OSes since these OSes no longer call the old Shutdown dialog via their Start Menu/Start screen. Microsoft has not allowed a way for third party developers to call this Metro style UI. <strong>So, the old Shutdown dialog is the only way possible to use Classic Shell's menu and use the Shutdown Event Tracker.</strong><br /><br /><br />Now, only in Classic styles of the menu, there *<em>is</em>* a way to launch the old Shutdown dialog when you click &quot;Restart&quot;. For that you'll have to do some configuration in Classic Start Menu Settings. Go to the Customize Start Menu tab and in the left column, scroll down and locate the &quot;restart&quot; item. Double click this to bring up the &quot;Edit Menu Item&quot; dialog. Change the Command to &quot;Shutdown_box&quot; from &quot;restart&quot; but keep the &quot;Label&quot; and &quot;Tip&quot; unchanged. Click OK to save settings. Repeat this for &quot;Shutdown&quot; too if you want (Change command to &quot;Shutdown_Box). Click OK in the main settings dialog to save changes and close it.<br /><br />Now when users click &quot;Restart&quot;, they will get the old dialog and if the policy for Shutdown Event Tracker is enabled, you can document the reason there.<br /><br />If you are using the &quot;Windows 7 style&quot; of CSM, then it doesn't allow customizing the &quot;Command&quot; field of the power related actions. You can only hide certain actions there as I showed in the screenshot above and make the default command as &quot;Shutdown dialog&quot;.<br /><br />The default command that this old dialog itself uses can be customized by editing the Registry: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-set-the-default-action-for-the-shutdown-dialog-in-windows-10/">http://winaero.com/blog/how-to-set-the- ... indows-10/</a><!-- m --><br /><br />On server, the shutdown tracker is turned on by default, so the OLD Shutdown dialog (that is part of Windows, not Classic Shell btw) *<em>should*</em> also have it enabled out-of-the-box but you will still have to at least configure Classic Shell to call this old dialog (for Windows 7 style). Classic Shell supports Group Policy too and the settings can be imported via command line, the installer supports command line switches also.<br /><br />Which style of the Classic Shell menu are you using - Classic style or Windows 7 style?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jan 26, 2016 11:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[slwtx1983]]></name></author>
<updated>2016-01-26T23:20:05-07:00</updated>
<published>2016-01-26T23:20:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24786#p24786</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24786#p24786"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24786#p24786"><![CDATA[
Yes, I believe I already mentioned that above.  My main question was 2 fold.  1. Can there be a setting to launch the Shutdown dialog on a restart.  2. Can it be setup to simply follow the current machines local policy by default.  So if it is a server machine, the server shutdown tracker is turned on by default.  Can the classicshell start menu be setup to detect the windows machines current shutdown tracker setting and use that setting for Shutdown and Restart automatically?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12569">slwtx1983</a> — Tue Jan 26, 2016 11:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-01-26T22:51:38-07:00</updated>
<published>2016-01-26T22:51:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24785#p24785</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24785#p24785"/>
<title type="html"><![CDATA[Re: Shutdown Event Tracker]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5638&amp;p=24785#p24785"><![CDATA[
@slwtx1983, The supported way to use the Shutdown Event Tracker UI via Classic Shell's Start Menu is setting the Shutdown command in Classic Shell to &quot;Shutdown dialog&quot; for the Windows 7 style or to &quot;shutdown_box&quot; for the Classic styles. Then, if the policy setting &quot;Display Shutdown Event Tracker&quot; is enabled, you get the Shutdown Event Tracker UI. That dialog contains all the actions you need - Shutdown, Restart and others. You can also customize the default command used in that Shutdown dialog using this method: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-set-the-default-action-for-the-shutdown-dialog-in-windows-10/">http://winaero.com/blog/how-to-set-the- ... indows-10/</a><!-- m --> so if &quot;Restart&quot; is the command you use more frequently, you can set the default to &quot;Restart&quot; for the Shutdown dialog. There are easy ways to change the action in the Shutdown dialog - arrow keys, pressing the keyboard accelerator (S for Shutdown, R for Restart and so on) besides mouse and touch. So there exists at least this one way to document the Shutdown/Restart reason and still use Classic Start Menu.<br /><br />If you are using the Windows 7 style, just don't use the standalone &quot;Shutdown&quot; and &quot;Restart&quot; commands and train everyone to use the &quot;Shutdown...&quot; command which displays the dialog. You can also hide the other commands to prevent them from being used. In Windows 7 style, see the setting &quot;Shutdown menu items&quot;. If you configure it as shown in the screenshot below, you get a Shutdown menu with the &quot;Restart&quot; command hidden so everyone can be redirected to use &quot;Shutdown...&quot; command.<br /><br />In Classic styles, the Shutdown commands themselves can also be customized from the &quot;Customize Start Menu&quot; tab so you can set all of them to &quot;shutdown_box&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jan 26, 2016 10:51 pm</p><hr />
]]></content>
</entry>
</feed>