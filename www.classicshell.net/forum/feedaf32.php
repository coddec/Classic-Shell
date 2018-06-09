<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4408" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-03-29T06:29:22-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4408</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-03-29T06:29:22-07:00</updated>
<published>2015-03-29T06:29:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18456#p18456</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18456#p18456"/>
<title type="html"><![CDATA[Re: Hide the Programs / &quot;Maintenance&quot; folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18456#p18456"><![CDATA[
The notes you keep in text files are a good idea for this since hiding unwanted items by setting the hidden attribute is a Windows setting. It should have no side effects other than not showing that item in the menu (unlike deleting it). Besides, Explorer will always show hidden items as long as it's configured to do that.<br /><br />You can hide the Search shortcut from an elevated (administrator) command prompt:<br />Attrib +h +s +r &quot;C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Search.lnk&quot;<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Mar 29, 2015 6:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-03-29T05:51:17-07:00</updated>
<published>2015-03-29T05:51:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18455#p18455</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18455#p18455"/>
<title type="html"><![CDATA[Re: Hide the Programs / &quot;Maintenance&quot; folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18455#p18455"><![CDATA[
Ok, sounds good, thanks.<br /><br />Is there a page that discusses these little details, and what you can do?<br /><br />Hiding:<br />the Apps vs.<br />Programs / Search<br />Programs / Maintenance folder<br /><br />That link could be referenced at the beginning of the Read Me file . . . things that can be done, but that you need to remain aware of<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Sun Mar 29, 2015 5:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-03-29T05:40:45-07:00</updated>
<published>2015-03-29T05:40:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18454#p18454</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18454#p18454"/>
<title type="html"><![CDATA[Re: Hide the Programs / &quot;Maintenance&quot; folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18454#p18454"><![CDATA[
Setting the Hidden attribute does not lead to non-functionality! I am only saying it is a Windows setting, Classic Shell will not touch Windows settings as there can be *POTENTIAL* problems in the future *if* Microsoft changes their OS as they like and people will blame Classic Shell.<br /><br />This is not a bug or issue in Classic Shell! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Windows 8/8.1 ships with the empty Maintenance folder and the entire Start Menu folder structure is still created and maintained by Windows. There is nothing to fix in Classic Shell.<br /><br />Microsoft can omit the empty 'Maintenance' folder in the next release of Windows. That is the only fix. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Mar 29, 2015 5:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-03-29T05:20:17-07:00</updated>
<published>2015-03-29T05:20:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18453#p18453</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18453#p18453"/>
<title type="html"><![CDATA[Re: Hide the Programs / &quot;Maintenance&quot; folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18453#p18453"><![CDATA[
Thanks Guarav<br /><br />Seeing the Maintenance folder empty in Win 8.1, and knowing how if I delete something because I don't want it, could break it (like Programs / Search, and the Apps), has made me think that CS was a little buggy - but still definitely usable.<br /><br />I keep notes in text files, of all the settings I change, so I can experiment, and get back to the default settings, if I need to.<br /><br />So, I am keeping notes on how I have hidden the Maintenance folder.<br /><br />Since there are issues like this, where setting Attributes could lead to non-functionality . . . why not just have a separate tab in the CS settings menu, that shows just these settings? . . . or make it a stand alone settings shortcut you go to, so people understand the significance of the settings?<br /><br />Put in explanations of what's going on, like above, before the setting . . . then if there's a problem, people will know where to go to reverse it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Sun Mar 29, 2015 5:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-03-28T20:59:22-07:00</updated>
<published>2015-03-28T20:59:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18446#p18446</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18446#p18446"/>
<title type="html"><![CDATA[Re: Hide the Programs / &quot;Maintenance&quot; folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18446#p18446"><![CDATA[
The Maintenance folder includes shortcuts on Windows 7. Only on Windows 8 is it empty. You can set the hidden attribute yourself.<br /><br />Changing Windows settings is something Classic Shell avoids doing as a feature as far as possible because if Microsoft redesigns the OS, the setting will stop working in Classic Shell. Only the features that are done by Classic Shell's own code are included. Hiding Metro shortcuts for example is not done by setting the hidden attribute.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Mar 28, 2015 8:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-03-28T09:32:06-07:00</updated>
<published>2015-03-28T09:32:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18437#p18437</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18437#p18437"/>
<title type="html"><![CDATA[Hide the Programs / &quot;Maintenance&quot; folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4408&amp;p=18437#p18437"><![CDATA[
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />I don't think I created the Programs / &quot;Maintenance&quot; folder.<br /><br />Mine is currently empty. Did I move some Shortcuts to somewhere else? Do any Shortcuts ever get put into it?<br /><br />I think that it's necessary to keep this folder, though, because I see it under my &quot;User&quot; profile, and, the &quot;All Users&quot; profile.<br /><br />Since it's empty, though, and I don't want to use it, I think I will hide it, like Programs / &quot;Search&quot; . . .<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />I see that this works on the Programs / &quot;Maintenance&quot; folder, also:<br /><br />Set the &quot;Hidden&quot; attribute on the &quot;Maintenance&quot; folder, to hide it from the Start Menu, without deleting it.<br /><br />I see that I have to do this in two places:<br /><br />Right-click Start / Open All Users / go to Start Menu - Programs<br />Right-click Start / Open . . . . . . / go to Start Menu - Programs<br />. . . in File Explorer, click on View / [check] Hidden items (to see them)<br />. . . right-click on the &quot;Maintenance&quot; folder / Properties / General tab - and [tick] Hidden (to Hide it)<br /><br />I just ran:<br /><br />C:\&gt;dism /online /cleanup-image /restorehealth<br /><br />and<br /><br />C:\&gt;sfc /scannow<br /><br />I did a Restart . . . and the &quot;Maintenance&quot; folder remains Hidden . . . so, I see that dism and sfc do not revert the &quot;Hidden&quot; Attribute setting to un-ticked<br /><br />It seems like this could be an option in the CS settings - to set the &quot;Hidden&quot; Attribute for the &quot;Programs / Maintenance&quot; folder<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Sat Mar 28, 2015 9:32 am</p><hr />
]]></content>
</entry>
</feed>