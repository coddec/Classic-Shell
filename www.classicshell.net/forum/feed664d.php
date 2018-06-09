<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=5446" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-12-18T17:22:21-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=5446</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2015-12-18T17:22:21-07:00</updated>
<published>2015-12-18T17:22:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24084#p24084</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24084#p24084"/>
<title type="html"><![CDATA[Re: Dont open menu on [Win] Hold]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24084#p24084"><![CDATA[
Ah ok, if its not something relatively easy to implement, or requires something like elevating privileges. than I fully understand it not being implemented <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />Im sure ill find another way around this problem, likely via Auto hotkey or the like<br />(setting [win key] to do nothing in classic shell, adding a new hotkey for the menu, and triggering that hotkey via ahk, when a shortpress is detected)<br /><br />UPDATE: here is the script, the shortcut to open classic shell is now alt+ctrl+r (and this script sends that if the LWin key is held less than .2 seconds)<br />Otherwise it holds down the RWin key until you release the LWin key. (after the initial .21 seconds)<br />Heres the code if anyone is interested<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&lt;&lt;$LWin::<br />    KeyWait, LWin, T0.01               <br />    If ErrorLevel                         <br />      {<br />      <br />        KeyWait, LWin, T.2             ; Wait .25 to see if key is held<br /><br />        If !ErrorLevel                  ; No timeout, so key was released<br />          {  <br />           Send ^!r<br />            Return<br />          }         <br /><br />       Send {RWin down}<br />        KeyWait, LWin                   ; Wait for button to be released<br />        Send {RWin up}      <br />        Return<br />      }<br />      <br />      <br />Return</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Fri Dec 18, 2015 5:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2015-12-18T10:23:43-07:00</updated>
<published>2015-12-18T10:23:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24078#p24078</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24078#p24078"/>
<title type="html"><![CDATA[Re: Dont open menu on [Win] Hold]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24078#p24078"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Classic Shell does not access the Win key directly. It hooks into the original start menu/start screen activation.<br />It is not possible to hook the keyboard reliably unless you are running as admin. The start menu runs inside the Explorer process, which is not elevated.<br /></div><br /><br />Just a thought...does that mean you can't modify the original trigger/activation/whatever to behave as described above? ._.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Fri Dec 18, 2015 10:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-12-18T09:00:12-07:00</updated>
<published>2015-12-18T09:00:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24075#p24075</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24075#p24075"/>
<title type="html"><![CDATA[Re: Dont open menu on [Win] Hold]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=24075#p24075"><![CDATA[
Classic Shell does not access the Win key directly. It hooks into the original start menu/start screen activation.<br />It is not possible to hook the keyboard reliably unless you are running as admin. The start menu runs inside the Explorer process, which is not elevated.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Dec 18, 2015 9:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2015-12-08T15:44:38-07:00</updated>
<published>2015-12-08T15:44:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=23920#p23920</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=23920#p23920"/>
<title type="html"><![CDATA[Dont open menu on [Win] Hold]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5446&amp;p=23920#p23920"><![CDATA[
I have several shortcuts/functions that I would like to tie to mouse, using the windows key as a modifier (IE win+scrollwheel for volume). However both programs Ive used capable of doing this, don't seem to stop the start menu from opening on key-release.<br /><br /><br />I was wondering if you could add a checkbox '<em>Dont open menu if [win] key is held.</em>' I would suggest maybe 250-400 ms as a  hardcoded value.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Dec 08, 2015 3:44 pm</p><hr />
]]></content>
</entry>
</feed>