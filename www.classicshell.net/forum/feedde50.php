<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4578" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-05-18T11:28:58-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4578</id>
<entry>
<author><name><![CDATA[icebun]]></name></author>
<updated>2015-05-18T11:28:58-07:00</updated>
<published>2015-05-18T11:28:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19481#p19481</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19481#p19481"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19481#p19481"><![CDATA[
Hi GauravK,<br /><br />Thanks for staying with me on this.<br /><br />Let me clarify:-<br /><br />Originally, I started with a <strong>Classic 2 Column Start Menu</strong> and tied this in with MS Group Polices.<br /><br />As I result I could not get the <strong>Log Off</strong> menu to appear in the second column.<br /><br />The best I could do was get the <strong>Shutdown... </strong>option to display with the action against this to be<strong> log off</strong>.<br /><br /><br />After posting my query on the forum, I then proceeded to change to the <strong>Windows 7 style Menu</strong> and without making any changes on the MS GPO side, the <strong>Log Of</strong>f button correctly displayed itself <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> <br /><br /><br />Then I got an update from you making reference to entering the registry string value of the <strong>Menu items</strong> policy.<br /><br />So I reverted back to a <strong>2 Column Start Menu</strong>, configured a lock down setting against this and after issuing a GPupdate /force tried the results which was the same as before <img src="http://www.classicshell.net/forum/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very Sad" /><br /><br />Can you please explain if the entries in the <strong>Menu items</strong> override the MS GPO? I much prefer to rely on GPO as I can ensure Domain Admins can be excluded from the locked down version of the <strong>Start Menu.</strong><br /><br />As mentioned before, some Group Polices seem to work without the need for any entries in the Menu items rule (but not all unfortunately).<br /><br />Hope this makes sense.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2008">icebun</a> — Mon May 18, 2015 11:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-05-18T10:18:49-07:00</updated>
<published>2015-05-18T10:18:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19479#p19479</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19479#p19479"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19479#p19479"><![CDATA[
The policy &quot;Menu items for classic menu with two columns&quot; will only affect the &quot;Classic with two columns&quot; style. If you are using the Windows 7 style, why should it affect that? <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />- For classic single column, reg value is MenuItems1. Policy setting is &quot;Menu items for classic menu with one column&quot;. And you must be using that style.<br />- For classic with two columns, reg value is MenuItems2. Policy setting is &quot;Menu items for classic menu with two columns&quot;. And you must be using that style.<br />- For Windows 7 style, reg value is MenuItems7. Policy setting is &quot;Menu items for the Windows 7 stye&quot;. And you must be using that style.<br /><br />You can also enforce the style through the policy setting: &quot;Menu style&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon May 18, 2015 10:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[icebun]]></name></author>
<updated>2015-05-18T07:38:40-07:00</updated>
<published>2015-05-18T07:38:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19474#p19474</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19474#p19474"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19474#p19474"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Looks like the policy editor doesn't like it when there is a blank line at the end of the text. Remove the last blank line and try again.<br /></div><br /><br /><br />Hi Ivo,<br /><br />That has allowed my to save the entry but after issuing a GPupdate /force, I still don't see any differences.<br /><br />I am happy to stick with the Windows 7 style as just using MS GPO I was able to get the correct behaviour of the log off button.<br /><br />Can you advise why some GPO rules work and others don't? <br /><br />Do entries in <strong>Menu items for Windows 7 style</strong> supercede entries in the MS GPO? I am not 100% of the relationship this setting has with the MS GPO.<br /><br />How can I ensure Domain Admin admins are not locked out of a fixed settings?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2008">icebun</a> — Mon May 18, 2015 7:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-05-18T07:21:09-07:00</updated>
<published>2015-05-18T07:21:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19473#p19473</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19473#p19473"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19473#p19473"><![CDATA[
Looks like the policy editor doesn't like it when there is a blank line at the end of the text. Remove the last blank line and try again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon May 18, 2015 7:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[icebun]]></name></author>
<updated>2015-05-18T02:46:34-07:00</updated>
<published>2015-05-18T02:46:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19469#p19469</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19469#p19469"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19469#p19469"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />You have to copy the text from the 'MenuItems2' value in Registry Editor and paste it inside Group Policy Editor's policy setting after enabling the policy and setting it to &quot;Locked to this value&quot;.<br /></div><br /><br /><br />Hi GauravK, that is what I did. Please see attached file. Am I missing another step?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2008">icebun</a> — Mon May 18, 2015 2:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-05-18T02:18:37-07:00</updated>
<published>2015-05-18T02:18:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19468#p19468</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19468#p19468"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19468#p19468"><![CDATA[
You have to copy the text from the 'MenuItems2' value in Registry Editor and paste it inside Group Policy Editor's policy setting after enabling the policy and setting it to &quot;Locked to this value&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon May 18, 2015 2:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[icebun]]></name></author>
<updated>2015-05-18T02:11:14-07:00</updated>
<published>2015-05-18T02:11:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19467#p19467</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19467#p19467"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19467#p19467"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br />'Shutdown Command' policy is for Windows 7 style menu. To set the shutdown commands for the Classic styles, you must set the policy setting &quot;Menu items for classic menu with two columns&quot;.<br /><br />See this topic: <a href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=3374" class="postlink">How to customize menu items &amp; enforce them via Group Policy</a> on how to correctly configure the policy &quot;Menu items for classic menu with two columns&quot;.<br /></div><br /><br /><br /><br />Hi GauravK, I configured the Start Menu the way I wanted it and then tried add the string value contained in <strong>Menu items for classic menu with two columns.</strong><br /><br /><br />When pasting, I got the following message:- No text was entered for this field. Make sure you enter text.<br /><br />The text string begins <strong>Classic Shell 2 Column</strong>, followed by <strong>Items=COLUMN_PADDING, ProgramsMenu etc.</strong><br /><br /><br />Not sure where I am going wrong copying and pasting text. In addition, how will this affect Administators. With GPO I can make an exception but I don't see the option here. Do I set as default, hide the settings tools and get the Administrators to modify their own start menu?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2008">icebun</a> — Mon May 18, 2015 2:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[icebun]]></name></author>
<updated>2015-05-18T02:03:08-07:00</updated>
<published>2015-05-18T02:03:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19466#p19466</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19466#p19466"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19466#p19466"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Download the Classic Shell Utility from here: <!-- m --><a class="postlink" href="http://www.classicshell.net/downloads/">http://www.classicshell.net/downloads/</a><!-- m --><br />Run it and send me the log file.<br /></div><br /><br /><br /><br />Please find attached the log file.<br /><br /><br /><br /><br /><br /><br />If I use the Windows 7 style I get the correct behaviour, albeit with some of the GPO not working (e.g. User Icon still displays even though it is turned off in GPO).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2008">icebun</a> — Mon May 18, 2015 2:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-05-16T11:34:09-07:00</updated>
<published>2015-05-16T11:34:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19420#p19420</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19420#p19420"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19420#p19420"><![CDATA[
'Shutdown Command' policy is for Windows 7 style menu. To set the shutdown commands for the Classic styles, you must set the policy setting &quot;Menu items for classic menu with two columns&quot;.<br /><br />See this topic: <a href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=3374" class="postlink">How to customize menu items &amp; enforce them via Group Policy</a> on how to correctly configure the policy &quot;Menu items for classic menu with two columns&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat May 16, 2015 11:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-05-16T09:41:11-07:00</updated>
<published>2015-05-16T09:41:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19416#p19416</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19416#p19416"/>
<title type="html"><![CDATA[Re: Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19416#p19416"><![CDATA[
Download the Classic Shell Utility from here: <!-- m --><a class="postlink" href="http://www.classicshell.net/downloads/">http://www.classicshell.net/downloads/</a><!-- m --><br />Run it and send me the log file.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat May 16, 2015 9:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[icebun]]></name></author>
<updated>2015-04-29T03:24:23-07:00</updated>
<published>2015-04-29T03:24:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19182#p19182</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19182#p19182"/>
<title type="html"><![CDATA[Group Policy - How to correctly set the Log Off option]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4578&amp;p=19182#p19182"><![CDATA[
Classic Menu 2 column.<br /><br />I have tried a combination of options to correctly provide a Log Off option and the only way I have managed to get this to work is as follows:-<br /><br />Show Log Off - Enabled<br />State: Locked to this value<br />Show Log Off - Ticked<br /><br />Shutdown - Enabled<br />State: Locked to this value<br />Shutdown - Display as a link<br /><br />Shutdown Command- Enabled<br />State: Locked to this value<br />Shutdown Command - Log off<br /><br /><br /><br /><br />So the end result is that it will display the<strong> Shutdown...</strong> command but it will actually perform a log off. Which is fine but a bit confusing to others.<br /><br />If I enable <strong>Shutdown</strong> but set this to <strong>Don't display this item</strong>, I don't get any options at all, even to log off.<br /><br />If it is set to <strong>Display as a Menu</strong> then I get some unwanted options such as <strong>Sleep</strong>, <strong>Lock</strong> etc. <br /><br /><br /><br />Where am I going wrong?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2008">icebun</a> — Wed Apr 29, 2015 3:24 am</p><hr />
]]></content>
</entry>
</feed>