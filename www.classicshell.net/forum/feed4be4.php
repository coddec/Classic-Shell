<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=179" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-03-28T15:06:59-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=179</id>
<entry>
<author><name><![CDATA[nemos]]></name></author>
<updated>2013-03-28T15:06:59-07:00</updated>
<published>2013-03-28T15:06:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2319#p2319</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2319#p2319"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2319#p2319"><![CDATA[
<div class="quotetitle">nemos wrote:</div><div class="quotecontent"><br /><div class="quotetitle">nemos wrote:</div><div class="quotecontent"><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><span style="color:#808080;">- Yes, you need to backup from each component</span><br /><span style="color:#800080;"><strong>- It is possible to re-use the exported XML across Windows editions. e.g. Pro to Ultimate</strong></span><br /><span style="color:#808080;">- It is possible to re-use the exported XML across OS versions but not recommended since the settings are different on each OS. The OS-specific settings will be ignored</span>.<br /></div><br />Are there any requirements for a successful import, like same Windows Update level for both installations?</div><br /><br /><div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Of course the settings must be compatible - for example if you use a command or a custom icon with a fixed path, that path must exist on the new machine as well.<br /></div><br />Hmmm... That leads me to another Q <img src="http://www.classicshell.net/forum/images/smilies/icon_e_geek.gif" alt=":geek:" title="Geek" /><br />The Pinned Apps, the Recent Apps, the Programs and the Recent Items that I see in my <span style="text-decoration: underline"><strong><span style="background-color:#00ccff;">Classic Start Menu</span></strong></span> (<span style="color:#ff0000;"><strong>TNX once again!</strong></span>) are coming from the original Win installation or from a Classic Shell location?<br />...No rush - I will test it tomorrow and I will post the A <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /></div><br />[<span style="text-decoration: underline">Just confirmed that</span>] XMLs exported from Win7ultimate 64bit are imported successfully to Win7pro 32bit. No need for configuration from scratch - just a few clicks and off we go <img src="http://www.classicshell.net/forum/images/smilies/icon_cool.gif" alt="8-)" title="Cool" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_cool.gif" alt="8-)" title="Cool" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_cool.gif" alt="8-)" title="Cool" /> <img src="http://www.classicshell.net/forum/images/smilies/icon_cool.gif" alt="8-)" title="Cool" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=299">nemos</a> — Thu Mar 28, 2013 3:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-03-25T04:52:08-07:00</updated>
<published>2013-03-25T04:52:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2223#p2223</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2223#p2223"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2223#p2223"><![CDATA[
The Pinned apps are not actually true pinned apps. They are the combined contents of the %appdata%\Microsoft\Windows\Start Menu and %ProgramData%\Microsoft\Windows\Start Menu folders. (Advantage: No need to pin them every time or pin them manually on every computer, just simple copy-paste shortcuts will do). Nevertheless, if you want to add a &quot;Pin to Classic Start Menu&quot; command in your right click menu for everything on your computer, follow this tutorial in the forums: <!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewtopic.php?f=5&amp;t=61">viewtopic.php?f=5&amp;t=61</a><!-- l --><br /><br />Recent Apps for now are only the things started from Classic Start Menu. Apps started from elsewhere are not shown in the Recent list. So it is a list maintained by Classic Start Menu.<br /><br />Programs is the combined contents of per-user and all users programs folders on a Windows installation (%appdata%\Microsoft\Windows\Start Menu\Programs and %ProgramData%\Microsoft\Windows\Start Menu\Programs)<br /><br />Recent Items (Recent Documents) %appdata%\Microsoft\Windows\Recent and jumplists are both maintained by Windows.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Mar 25, 2013 4:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nemos]]></name></author>
<updated>2013-03-25T03:44:46-07:00</updated>
<published>2013-03-25T03:44:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2222#p2222</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2222#p2222"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2222#p2222"><![CDATA[
<div class="quotetitle">nemos wrote:</div><div class="quotecontent"><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><span style="color:#808080;">- Yes, you need to backup from each component</span><br /><span style="color:#800080;"><strong>- It is possible to re-use the exported XML across Windows editions. e.g. Pro to Ultimate</strong></span><br /><span style="color:#808080;">- It is possible to re-use the exported XML across OS versions but not recommended since the settings are different on each OS. The OS-specific settings will be ignored</span>.<br /></div><br />Are there any requirements for a successful import, like same Windows Update level for both installations?</div><br /><br /><div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Of course the settings must be compatible - for example if you use a command or a custom icon with a fixed path, that path must exist on the new machine as well.<br /></div><br />Hmmm... That leads me to another Q <img src="http://www.classicshell.net/forum/images/smilies/icon_e_geek.gif" alt=":geek:" title="Geek" /><br />The Pinned Apps, the Recent Apps, the Programs and the Recent Items that I see in my <span style="text-decoration: underline"><strong><span style="background-color:#00ccff;">Classic Start Menu</span></strong></span> (<span style="color:#ff0000;"><strong>TNX once again!</strong></span>) are coming from the original Win installation or from a Classic Shell location?<br />...No rush - I will test it tomorrow and I will post the A <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=299">nemos</a> — Mon Mar 25, 2013 3:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-25T02:30:04-07:00</updated>
<published>2013-03-25T02:30:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2221#p2221</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2221#p2221"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2221#p2221"><![CDATA[
possibly maybe a message could pop up telling me what items do not exist in the new location while unpacking.. stating &quot;this software doesnt exist in this location, would you like to browse for this software, or Skip this Item?&quot;<br /><br />Ideally it would also export a list of dependent software &amp; install locations that we could generate &amp; read separately and then we could prep the system before unpacking the CS Installation<br /><br />It wouldnt have to read inside the Bat file, but even it probably could scan the contents of Bat files and simply give the name of any .exe files it finds, or perhaps the whole location to the .exe file... if its a Bat call to Bat then it wouldnt read any related .exe files at all.. but a Bat file call within a Bat could produce an error stating that the Bat file references a Bat or script file and may not work.. or it could simply export a list of all locations by scanning for .bat, .vbs, .exe within .vbs &amp; .bat files, and put them in columns stating that the following appear to be / might be dependent on the following files &amp; locations..<br /><br />but bats would just ask to change L:\Bats to E:\Bats across the board.. any button or menu item ending with a .bat extension would simply be flagged and changed to a different Drive &amp;/or Path, via a prompt during unpacking to switch any &quot;L:\David&quot; Directory to an &quot;E:\Lisa&quot; Directory<br /><br />or at the very least, simply give us a single page scrollable interface where we can just edit all of our custom locations one by one down the list by browsing to the same file or command on the new computers location, all in one window.. so we dont have to open them all one by one, wondering which ones work and which ones dont..<br /><br />But Icons &amp; Orbs would be cool to pack, as long as they are from .ico or .png files.. no need to extract them from dll.s or .exe's unless its possible to <br /><br />anyway, just my thoughts. <br /><br />thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Mon Mar 25, 2013 2:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-24T20:32:40-07:00</updated>
<published>2013-03-24T20:32:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2218#p2218</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2218#p2218"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2218#p2218"><![CDATA[
That's not possible. What if the bat file calls another bat file or some exe? What if the link points to software that requires installation? What if that installation has a dependency on another software?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 24, 2013 8:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-24T20:27:47-07:00</updated>
<published>2013-03-24T20:27:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2216#p2216</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2216#p2216"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2216#p2216"><![CDATA[
maybe a find &amp; replace through the XML file?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Sun Mar 24, 2013 8:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-24T20:25:40-07:00</updated>
<published>2013-03-24T20:25:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2215#p2215</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2215#p2215"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2215#p2215"><![CDATA[
I'd like to have the ability to &quot;pack&quot; the entire installation &amp; and all customizations required for it to run on a different computer..<br /><br />including pinned items, bat files, vbscripts, links to all icons<br /><br />actually, I'd like a report, on what all is accessed by Classic Shell, that would need to be placed in a nother compter for everything to work, including a list of all locations of files used in Classic Shell, so that I could place those files in the same location<br /><br />or better yet, a Link Mapper, that changes all the internal Classic Shell links to items in &quot;L:\My Bat Files&quot; or &quot;L:\My Admin Shortcuts&quot; and &quot;L:\My VB Scripts&quot; to the E:\ drive on another computer..<br /><br /> like a Drive Remapper or where you could substitute &quot;L:\Computing\My Bat Files&quot; to &quot;E:\Lisa's Computer Stuff\My Bat Files&quot;<br /><br />to easily transfer everything to new computers<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Sun Mar 24, 2013 8:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-24T09:15:18-07:00</updated>
<published>2013-03-24T09:15:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2211#p2211</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2211#p2211"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2211#p2211"><![CDATA[
Of course the settings must be compatible - for example if you use a command or a custom icon with a fixed path, that path must exist on the new machine as well.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 24, 2013 9:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-03-24T03:22:43-07:00</updated>
<published>2013-03-24T03:22:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2209#p2209</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2209#p2209"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2209#p2209"><![CDATA[
No there isn't any requirement. Windows settings are not even touched. Everything is done by its own code.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Mar 24, 2013 3:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nemos]]></name></author>
<updated>2013-03-24T03:16:21-07:00</updated>
<published>2013-03-24T03:16:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2208#p2208</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2208#p2208"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2208#p2208"><![CDATA[
<div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br /><span style="color:#808080;">- Yes, you need to backup from each component</span><br /><span style="color:#800080;"><strong>- It is possible to re-use the exported XML across Windows editions. e.g. Pro to Ultimate</strong></span><br /><span style="color:#808080;">- It is possible to re-use the exported XML across OS versions but not recommended since the settings are different on each OS. The OS-specific settings will be ignored</span>.<br /></div><br /><br /><br />Are there any requirements for a successful import, like same Windows Update level for both installations?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=299">nemos</a> — Sun Mar 24, 2013 3:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-03-24T03:02:14-07:00</updated>
<published>2013-03-24T03:02:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2207#p2207</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2207#p2207"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2207#p2207"><![CDATA[
- Yes, you need to backup from each component<br />- It is possible to re-use the exported XML across Windows editions. e.g. Pro to Ultimate<br />- It is possible to re-use the exported XML across OS versions but not recommended since the settings are different on each OS. The OS-specific settings will be ignored.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Mar 24, 2013 3:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nemos]]></name></author>
<updated>2013-03-24T02:26:05-07:00</updated>
<published>2013-03-24T02:26:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2205#p2205</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2205#p2205"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=2205#p2205"><![CDATA[
Questions regarding the backup feature ...<br />- Do I need to backup settings from every instance of Classic Shell (Explorer, Start Menu, IE9)? Or, if I make an export from Classic Shell Explorer, it also contains the settings for Classic Shell Start Menu?<br />- Is it possible to import to a Win7pro installation the xml-file exported from a Win7ultimate installation?<br />- Is the xml-file exported from a Win7 installation suitable for a Win8 installation?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=299">nemos</a> — Sun Mar 24, 2013 2:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[themx]]></name></author>
<updated>2013-02-01T09:18:48-07:00</updated>
<published>2013-02-01T09:18:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=764#p764</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=764#p764"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=764#p764"><![CDATA[
thanks for the quick reply .... I missed that ...it has been a long night<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=239">themx</a> — Fri Feb 01, 2013 9:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-01T09:16:21-07:00</updated>
<published>2013-02-01T09:16:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=763#p763</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=763#p763"/>
<title type="html"><![CDATA[Re: Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=763#p763"><![CDATA[
There are two ways:<br />From the settings use the Backup button to export or import XML file.<br />Save the contents of the HKCU\Software\IvoSoft registry key.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Feb 01, 2013 9:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[themx]]></name></author>
<updated>2013-02-01T08:43:15-07:00</updated>
<published>2013-02-01T08:43:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=761#p761</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=761#p761"/>
<title type="html"><![CDATA[Is there anyway to export settings?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=179&amp;p=761#p761"><![CDATA[
First off thank you for an excellent tool. Darn shame MS takes it upon themselves to make it needed.<br /> <br />I've been tweaking my menu for a few hours here off and on with a fresh 2012 VM lab I'm playing with and now I'm looking at going through the process for any and all comps I toss into it not to mention my real computer when I get around to getting 8 installed. I shutter to think how much longer I would have been at it if I would have relied  on metro ......<br /> <br />Is there a list of files and or keys needed or a tool to export the settings and menu config?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=239">themx</a> — Fri Feb 01, 2013 8:43 am</p><hr />
]]></content>
</entry>
</feed>