<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=5833" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-03-21T21:26:03-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=5833</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-03-21T21:26:03-07:00</updated>
<published>2016-03-21T21:26:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5833&amp;p=25836#p25836</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5833&amp;p=25836#p25836"/>
<title type="html"><![CDATA[Re: Feature Request for Classic Explorer Toolbar.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5833&amp;p=25836#p25836"><![CDATA[
Nice idea. A simple VBScript if Ivo agrees to implement it as an internal command can also do the trick:<br /><br />Hidden = &quot;HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced\Hidden&quot;<br />SHidden = &quot;HKCU\Software\Microsoft\Windows\CurrentVersion\Explorer\Advanced\ShowSuperHidden&quot;<br />Set Sh = WScript.CreateObject(&quot;WScript.Shell&quot;)<br />St = Sh.RegRead(Hidden)<br />If St = 2 Then<br />Sh.RegWrite Hidden, 1, &quot;REG_DWORD&quot;<br />Sh.RegWrite SHidden, 1, &quot;REG_DWORD&quot;<br />Else<br />Sh.RegWrite Hidden, 2, &quot;REG_DWORD&quot;<br />Sh.RegWrite SHidden, 0, &quot;REG_DWORD&quot;<br />End If<br />Sh.SendKeys(&quot;{F5}&quot;)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Mar 21, 2016 9:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CarlCzarnecki]]></name></author>
<updated>2016-03-21T16:27:40-07:00</updated>
<published>2016-03-21T16:27:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5833&amp;p=25827#p25827</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5833&amp;p=25827#p25827"/>
<title type="html"><![CDATA[Feature Request for Classic Explorer Toolbar.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5833&amp;p=25827#p25827"><![CDATA[
Feature Request for Classic Explorer Toolbar.<br />Source Code included in the attached zip file.<br />Add 2 additional buttons to the toolbar:<br />[Hidden] (View Hidden Files - Toggle ON/OFF)<br />[Super Hidden] (View Super Hidden Files - Toggle ON/OFF)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=203">CarlCzarnecki</a> — Mon Mar 21, 2016 4:27 pm</p><hr />
]]></content>
</entry>
</feed>