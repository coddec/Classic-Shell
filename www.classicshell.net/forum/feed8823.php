<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=2705" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-05-28T12:28:37-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=2705</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-05-28T12:28:37-07:00</updated>
<published>2014-05-28T12:28:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13032#p13032</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13032#p13032"/>
<title type="html"><![CDATA[Re: GPO setting that removes &quot;Default Programs and Settings&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13032#p13032"><![CDATA[
I don't know anything about that. Maybe that tool only supports simple policies. Try gpedit.msc instead.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed May 28, 2014 12:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dabomb311]]></name></author>
<updated>2014-05-28T10:41:56-07:00</updated>
<published>2014-05-28T10:41:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13030#p13030</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13030#p13030"/>
<title type="html"><![CDATA[Re: GPO setting that removes &quot;Default Programs and Settings&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13030#p13030"><![CDATA[
I guess I should have first told you that I am doing this in Desktop Authority. I don't see a box. That might be why..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3827">dabomb311</a> — Wed May 28, 2014 10:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-05-28T08:50:13-07:00</updated>
<published>2014-05-28T08:50:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13023#p13023</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13023#p13023"/>
<title type="html"><![CDATA[Re: GPO setting that removes &quot;Default Programs and Settings&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13023#p13023"><![CDATA[
When you select the &quot;Enabled&quot; option, the edit box in the bottom-left quarter will become enabled and you can paste the text there.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed May 28, 2014 8:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dabomb311]]></name></author>
<updated>2014-05-28T08:40:47-07:00</updated>
<published>2014-05-28T08:40:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13017#p13017</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13017#p13017"/>
<title type="html"><![CDATA[Re: GPO setting that removes &quot;Default Programs and Settings&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13017#p13017"><![CDATA[
Where do I paste it at? All I see is    <br /> <br />Menu items for the Windows 7 Style<br />--------------------------------------------------<br /> Policy State - Enabled<br /> <br /> <br />---------------Additional----------------------------<br />State - Locked to this value<br /> <br />Policy Explanation:  etc...<br /> <br />supported on  etc...<br /> <br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3827">dabomb311</a> — Wed May 28, 2014 8:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-05-28T08:25:09-07:00</updated>
<published>2014-05-28T08:25:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13015#p13015</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13015#p13015"/>
<title type="html"><![CDATA[Re: GPO setting that removes &quot;Default Programs and Settings&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13015#p13015"><![CDATA[
1. Assuming that you can using the Windows 7 style, configure the Start Menu as you want using the Customize Start Menu tab of the settings UI.<br /><br />2. Open Registry Editor and go to this registry key:<br />HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Settings<br /><br />3. Locate and double click the value called &quot;MenuItems7&quot;. Select all the text and copy it.<br /><br />4. Now locate the Group Policy setting called &quot;Menu items for the Windows 7 style&quot;, double click it. After you enable it, you will see a white box below. Paste there what you copied in step 3. Click OK.<br /><br />5. Restart the menu for settings to take effect.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed May 28, 2014 8:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dabomb311]]></name></author>
<updated>2014-05-28T08:12:06-07:00</updated>
<published>2014-05-28T08:12:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13014#p13014</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13014#p13014"/>
<title type="html"><![CDATA[GPO setting that removes &quot;Default Programs and Settings&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2705&amp;p=13014#p13014"><![CDATA[
I have been going through all of the GPO settings for Classic Shell and I cannot locate the correct one that removes the &quot;Default Programs and Settings&quot; or it may just be &quot;Default Programs&quot;<br /><br />Any help would be much appreciated.. <br /><br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3827">dabomb311</a> — Wed May 28, 2014 8:12 am</p><hr />
]]></content>
</entry>
</feed>