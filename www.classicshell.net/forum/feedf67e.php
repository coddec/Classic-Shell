<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=74" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-01-14T09:46:56-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=74</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-14T09:46:56-07:00</updated>
<published>2013-01-14T09:46:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=253#p253</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=253#p253"/>
<title type="html"><![CDATA[Re: Improved mouse handling in Start menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=253#p253"><![CDATA[
The fix for the first issue is to ignore the mouse click if it happens within half second of the menu opening by hover.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 14, 2013 9:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GregDude]]></name></author>
<updated>2013-01-14T03:16:12-07:00</updated>
<published>2013-01-14T03:16:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=242#p242</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=242#p242"/>
<title type="html"><![CDATA[Re: Improved mouse handling in Start menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=242#p242"><![CDATA[
@Ivo, thank you.<br /><br />@GauravK, I see what you mean. I like to click, but I think the sub menu often pops out just before I click causing it to close.  Changing the delays might help, as might the behavior such as 'if user clicks within a very short time after the sub menu opens, don't close' (because the user was unlikely intending to close the auto opened menu).  They delays and behavior in the Windows 7 Start and 'StartIsBack' (trying on another computer) seem to be good.<br /><br />An example of a program that stays on the screen after a recent item is selected is 'Visual Studio 2010'. I'm not sure I have a more common one to share, but that one has the delay all or most of the time. Thanks for you help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=128">GregDude</a> — Mon Jan 14, 2013 3:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-01-13T22:11:12-07:00</updated>
<published>2013-01-13T22:11:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=234#p234</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=234#p234"/>
<title type="html"><![CDATA[Re: Improved mouse handling in Start menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=234#p234"><![CDATA[
@GregDude, the button you are referring to is a split button. There is a &quot;Delay multiplier for split buttons&quot; setting on the 'General Behavior' tab using which you can control how fast the menu expands when the left portion of the split button is hovered over. It's expressed in percentage so if Menu Delay is 400 ms, Split Button delay multiplier is 200%, it means the split button menu will expand after 800 ms.<br /><br />But I get your suggestion. From what is happening I'm guessing is users put the mouse over a split button and don't expect it to expand at all unless the little arrow is clicked, but it expands unexpectedly after the timeout. If that is the behavior you want, increase the delay multiplier to a very high %.<br /><br /><br />Another confusing part is when an expanded submenu closes after clicking the right part of the button. Maybe, the menu closing again after clicking the split button's right area should be entirely done away with?<br />Btw, can you give an example for which program, the jumplist (recent submenu) is staying on the screen for some time and the menu not closing instantly?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jan 13, 2013 10:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-13T21:01:37-07:00</updated>
<published>2013-01-13T21:01:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=233#p233</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=233#p233"/>
<title type="html"><![CDATA[Re: Improved mouse handling in Start menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=233#p233"><![CDATA[
These are things I am investigating for the next version.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jan 13, 2013 9:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GregDude]]></name></author>
<updated>2013-01-13T20:56:54-07:00</updated>
<published>2013-01-13T20:56:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=232#p232</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=232#p232"/>
<title type="html"><![CDATA[Improved mouse handling in Start menu]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=74&amp;p=232#p232"><![CDATA[
Loving Classic Shell for Windows 8!<br /><br />I'd just like to request improved mouse handling if at all possible.<br /><br />This is a little hard to describe, hopefully this repro case will help:<br />1) Left click the Start button to open start menu.<br />2) Beside 'Shut Down' in the right panel, there is button '&gt;' to open sub menu.<br />Repeatedly try left clicking this button. Also move the cursor around while testing this.<br />3) Observe mouse interacting with menu.<br /><br />What I see here is the menu can open and close at unexpected times.<br />If the sub menu is opened via a 'click' instead of mouse 'hover', it should probably stay open, or open much longer.<br />This effect can also occur with the Recent sub menu that is accessible on many applications.<br /><br />Also, when an application is launched via the Recent sub menu, the Start menu should close instantly, in anticipation of the launch. It stays on screen for some time, tempting the user to click again, thinking the application has not launched.<br /><br />Compare the behavior of Classic Shell start menu with the original Windows Start menu. If this can be tightened up a little, it would be more responsive and easy to use.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=128">GregDude</a> — Sun Jan 13, 2013 8:56 pm</p><hr />
]]></content>
</entry>
</feed>