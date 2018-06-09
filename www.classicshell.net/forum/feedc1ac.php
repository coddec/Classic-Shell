<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4043" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-12-26T03:10:42-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4043</id>
<entry>
<author><name><![CDATA[FMJ]]></name></author>
<updated>2014-12-26T03:10:42-07:00</updated>
<published>2014-12-26T03:10:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4043&amp;p=17133#p17133</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4043&amp;p=17133#p17133"/>
<title type="html"><![CDATA[[TUTO] Network Connections and ControlPanel expandable List]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4043&amp;p=17133#p17133"><![CDATA[
Hello,<br /><br />I would liked to recover an old Classic Shell feature, no more supported obviously : from the Start Menu, the possibility to open Network Connections and ControlPanel with an expandable list.<br /><br />I find it's especially usefull with Network connections : I can enable/disable/edit/etc. a network connection in 2 clicks, as quickly as with XP. The multi-windows Network menu of Win Vista/7/9 is much more slow !<br /><br />It's pretty easy to do : this trick only uses the Windows Shell commands.<br /><br /><br />1. From Desktop, right click on the Classic Shell icon and select &quot;Settings&quot;<br /><br />2. Select the &quot;Customize Start Menu&quot; tab<br /><br />3. In the right column (&quot;Available commands&quot;), drag and drop the &quot;Custom&quot; command (at the bottom of list) and put it in the left column, for instance below the already existing &quot;Network Connections&quot; command.<br /><br />4. Double click on this &quot;Custom&quot; command. A new window &quot;Edit Menu Item&quot; opens. Change the following items :<br />  <br />    &gt; Command : Let it blank<br />    &gt; Link: Enter this command  ::{7007ACC7-3202-11D1-AAD2-00805FC1270E}<br />    &gt; Label :   Write &quot;Network Connections &quot; (in fact, what you want)<br /><br />5. Right click 2 times on &quot;OK&quot; and that's it ! Enjoy<br /><br /><br />For Control Panel, it's the same procedure, but replace the Link:  with ::{21EC2020-3AEA-1069-A2DD-08002B30309D}   and give the appropriate name with Label:<br /><br />There're a good amount of shell command to satisfy personalization enthousiasts !<br /><a href="http://winaero.com/blog/the-most-comprehensive-list-of-shell-locations-in-windows-8/" class="postlink">http://winaero.com/blog/the-most-comprehensive-list-of-shell-locations-in-windows-8/</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=6446">FMJ</a> — Fri Dec 26, 2014 3:10 am</p><hr />
]]></content>
</entry>
</feed>