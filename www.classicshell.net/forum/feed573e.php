<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=9&amp;t=22" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-01-07T22:59:30-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=9&amp;t=22</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-07T22:59:30-07:00</updated>
<published>2013-01-07T22:59:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=77#p77</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=77#p77"/>
<title type="html"><![CDATA[Re: Need to move the Menu Bar . . .]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=77#p77"><![CDATA[
There was a reg key which works only for IE7 and IE8 to move the menu bar to the top:<br /><br />Windows Registry Editor Version 5.00<br />[HKEY_CURRENT_USER\Software\Microsoft\Internet Explorer\Toolbar\WebBrowser] <br />&quot;ITBar7Position&quot;=dword:00000001<br /><br />IE9 broke it unfortunately, so that way isn't supported either.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 07, 2013 10:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-07T11:39:43-07:00</updated>
<published>2013-01-07T11:39:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=40#p40</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=40#p40"/>
<title type="html"><![CDATA[Re: Need to move the Menu Bar . . .]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=40#p40"><![CDATA[
I don't think that's possible. For security the IE9/10 is split into 2 processes - one for the main frame that runs with higher integrity level and one for each of the tabs, that run at lower integrity level. The address bar and the tabs belong to the main process and the menu and status bar are part of the child process. So it is not possible to rearrange the elements freely as they belong to different processes.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 07, 2013 11:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DJGM1974]]></name></author>
<updated>2013-01-07T11:12:33-07:00</updated>
<published>2013-01-07T11:12:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=39#p39</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=39#p39"/>
<title type="html"><![CDATA[Need to move the Menu Bar . . .]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=22&amp;p=39#p39"><![CDATA[
<span style="font-family:Arial;">There&#39;s one thing I&#39;d like to see Classic IE9 do ... give the option to move the Menu Bar back to its <strong>correct</strong> placement<br />in between the Title Bar and Address Bar. The <strong>unmoveable</strong> default position below the Address Bar and Tabs is just<br />plain <span style="text-decoration: underline"><strong>wrong</strong></span>. The only element of the IE9-10 GUI layout that is in the right place is the Title Bar. Everything else is<br />just completely</span><span style="font-family:Arial;"><span style="font-family:Arial;">and utterly</span> wrong on that GUI layout when all the hidden elements are unhidden.<br /><br />Any chance of this in a future version of the Classic IE9 feature of Classic Shell?<br /></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=77">DJGM1974</a> — Mon Jan 07, 2013 11:12 am</p><hr />
]]></content>
</entry>
</feed>