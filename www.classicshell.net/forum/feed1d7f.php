<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=6247" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-06-27T05:35:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=6247</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-06-23T13:37:59-07:00</updated>
<published>2016-06-23T13:37:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27302#p27302</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27302#p27302"/>
<title type="html"><![CDATA[Re: New buttons: copy path, show, refresh]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27302#p27302"><![CDATA[
@ducof, may I suggest the StExBar toolbar: <!-- m --><a class="postlink" href="http://stefanstools.sourceforge.net/StExBar.html">http://stefanstools.sourceforge.net/StExBar.html</a><!-- m --> for some excellent functionality: Copy Names, Copy Paths and a very handy filter box.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jun 23, 2016 1:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-06-23T11:34:10-07:00</updated>
<published>2016-06-23T11:34:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27301#p27301</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27301#p27301"/>
<title type="html"><![CDATA[Re: New buttons: copy path, show, refresh]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27301#p27301"><![CDATA[
There are already buttons for Refresh and for System files. For the System files button you need the new beta version 4.2.7.<br /><br />The rest you can do with a script of some sort. Look at the help for instructions how to get the current folder or the selected files.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jun 23, 2016 11:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ducof]]></name></author>
<updated>2016-06-27T05:35:45-07:00</updated>
<published>2016-06-23T11:07:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27300#p27300</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27300#p27300"/>
<title type="html"><![CDATA[New buttons: copy path, show, refresh]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6247&amp;p=27300#p27300"><![CDATA[
similiar themes but not full: <a href="http://classicshell.net/forum/viewtopic.php?f=8&amp;t=6133&amp;p=26916&amp;hilit=copy+path#p26916" class="postlink">http://classicshell.net/forum/viewtopic.php?f=8&amp;t=6133&amp;p=26916&amp;hilit=copy+path#p26916</a><br /><br />Feature Requests:<br /><br /><br />1.&quot;Copy current path button&quot; after &quot;filed path&quot; and before &quot;refresh button&quot; . Button size types 1,2,3 from refresh width [___] [ ]<br />C: &gt; windows &gt; [ copy] [ refresh]<br /><br /><br />Big panel options:<br />2. &quot;Copy current path&quot; <br />3. &quot;Copy all paths in opened folder&quot;<br />4. &quot;Copy only folders path&quot;<br />5. &quot;Copy only files path&quot;<br />6. &quot;refresh current window&quot; - big button on big panel, make same as F5 or smal refresh button<br />7. &quot;show/hide system protected files&quot; - show system file and refresh, as script do:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">SHidden = &quot;HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced\ShowSuperHidden&quot;<br />Set Sh = WScript.CreateObject(&quot;WScript.Shell&quot;)<br />St = Sh.RegRead(SHidden)<br />If St = 1 Then<br />Sh.RegWrite SHidden, 0, &quot;REG_DWORD&quot;<br />Else<br />Sh.RegWrite SHidden, 1, &quot;REG_DWORD&quot;<br />End If<br />Sh.SendKeys(&quot;{F5}&quot;)<br /></div><br /><br /><span style="color:#222222;"><span style="font-family:arial, sans-serif;"><span style="font-size: 100%; line-height: 116%;">8. Copy Names</span></span></span><br />9. <span style="color:#222222;"><span style="font-family:arial, sans-serif;"><span style="font-size: 100%; line-height: 116%;">Button Backup &quot;all names list&quot; + &quot;all paths list&quot; &#40;in option set default path&#41;. </span></span></span><span style="color:#222222;"><span style="font-family:arial, sans-serif;"><span style="font-size: 100%; line-height: 116%;">DropMenu after, with button &quot;chose folder to backup&quot;</span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13922">ducof</a> — Thu Jun 23, 2016 11:07 am</p><hr />
]]></content>
</entry>
</feed>