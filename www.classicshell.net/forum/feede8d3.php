<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=8215" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2018-01-04T09:35:57-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=8215</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2018-01-04T09:35:57-07:00</updated>
<published>2018-01-04T09:35:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8215&amp;p=35199#p35199</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8215&amp;p=35199#p35199"/>
<title type="html"><![CDATA[Re: Classic Shell Conflict with &quot;AutoCorrect&quot; AutoHotkey Mac]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8215&amp;p=35199#p35199"><![CDATA[
It might be related to the shortcut conflicting<br />I had a similar issue with one of my configuartions. (except my hotkey was win+mousewheel for volume)<br />Since your already using auto-hotkey this should be fairly easy <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />1 right click start button, go to settings<br />2. check 'show all settings' <br />3 on the controls tab, change 'windows key opens' to nothing<br />4 also change 'additional classic menu hotkey (for me I used ctrl+shift+r)<br /><br />This auto-hotkey script checks if the windows key was pressed (Less than .25 seconds) or held (over .25 seconds) and only sends the (ctrl+shift+r)hotkey if it was 'pressed' otherwise just passes the regular windows hotkey through<br /><br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">#NoTrayIcon<br />&lt;&lt;$LWin::<br />    KeyWait, LWin, T0.00               <br />    If ErrorLevel                         <br />      {<br />      <br />        KeyWait, LWin, T.3             ; Wait .25 to see if key is held<br /><br />        If !ErrorLevel                  ; No timeout, so key was released<br />          {  <br />           Send +^r<br />            Return<br />          }         <br /><br />       Send {RWin down}<br />        KeyWait, LWin                   ; Wait for button to be released<br />        Send {RWin up}      <br />        Return<br />      }<br />      <br />      <br />Return</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Thu Jan 04, 2018 9:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Neelix]]></name></author>
<updated>2018-01-04T08:55:26-07:00</updated>
<published>2018-01-04T08:55:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8215&amp;p=35198#p35198</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8215&amp;p=35198#p35198"/>
<title type="html"><![CDATA[Classic Shell Conflict with &quot;AutoCorrect&quot; AutoHotkey Macro]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8215&amp;p=35198#p35198"><![CDATA[
I am using the AutoCorrect script for AutoHotkey. <br /><!-- m --><a class="postlink" href="https://gist.github.com/endolith/876629">https://gist.github.com/endolith/876629</a><!-- m --><br /><br />the hotkey to launch is Win + H. I have noticed my mouse will randomly jump off the screen, windows will maximize/minimize, and I will loose the G key or it will behave as if the Windows Key is stuck down and every time the ClassicShell start menu will pop up. The solution is to hit the windows key several times which will let you exit back to the AutoHotkey inputbox to finish adding the spelling correction however it will still minimize or maximize windows randomly. I traced the problem to ClassicShell and tried disabling Windows key hotkeys under the &quot;Controls&quot; menu but it did not help. If I close ClassicShell the problem goes away so I'm pretty sure the issue is with ClassicShell but I'm not sure how to fix it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=29208">Neelix</a> — Thu Jan 04, 2018 8:55 am</p><hr />
]]></content>
</entry>
</feed>