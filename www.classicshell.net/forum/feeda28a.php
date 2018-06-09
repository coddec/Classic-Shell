<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6884" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-11-20T10:32:10-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6884</id>
<entry>
<author><name><![CDATA[Willy2]]></name></author>
<updated>2016-11-20T10:32:10-07:00</updated>
<published>2016-11-20T10:32:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=30415#p30415</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=30415#p30415"/>
<title type="html"><![CDATA[Re: Problem when killing &amp; restarting Explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=30415#p30415"><![CDATA[
(Didn't have time too reply earlier)<br /><br />- Did some testing. And the results are interesting &amp; revealing. &quot;Windows Repair&quot; (WR) (See above) &quot;breaks&quot; Classic Shell (CS). WR stops the process &quot;Explorer.exe&quot;, deletes the iconcaches and then re-starts Explorer.exe. But then CS doesn't show up anymore. Then the CS &quot;Start&quot; button reverts to the default button. These actions were done under a user account, not the administrator account.<br />- However, when I then kill &amp; re-start Explorer.exe (using Task Manager) then CS re-emerges without a hiccup, in its former glory.<br />- So, WR seems to be the cause of this odd behaviour of CS.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13185">Willy2</a> — Sun Nov 20, 2016 10:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-25T23:07:27-07:00</updated>
<published>2016-09-25T23:07:27-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=29525#p29525</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=29525#p29525"/>
<title type="html"><![CDATA[Re: Problem when killing &amp; restarting Explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=29525#p29525"><![CDATA[
Probably that program runs as admin, and then it restarts Explorer as admin too. Try restarting Explorer yourself from Task Manager.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Sep 25, 2016 11:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Willy2]]></name></author>
<updated>2016-09-25T14:45:46-07:00</updated>
<published>2016-09-25T14:45:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=29524#p29524</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=29524#p29524"/>
<title type="html"><![CDATA[Problem when killing &amp; restarting Explorer.exe]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6884&amp;p=29524#p29524"><![CDATA[
(I searched the forum but didn't find a similar thread in which this bug (is it a bug ??) was brought forward.)<br /><br />- When I run a program called &quot;Tweaking's Windows Repair&quot; (<!-- m --><a class="postlink" href="http://www.tweaking.com">http://www.tweaking.com</a><!-- m -->) on my Win 7 SP 1 system then in one repair (&quot;Repair Icons&quot;) the process &quot;Explorer.exe&quot; is killed and restarted. Running this repair is needed to make Windows re-generate the (corrupted) Windows thumbnail caches. After Explorer is restarted &quot;Classic Shell&quot; (CS) doesn't work anymore, then (among others) the default Windows &quot;Start&quot; button is back again. (Although the process &quot;ClassicMenu.exe&quot; keeps running). I have to restart my system to get CS working again.<br /><br />- I know that when Explorer.exe is re-started then it sends out a socalled &quot;Explorer started&quot; Event to inform other programs that &quot;Explorer.exe&quot; has been restarted. Does CS reply to this Event at all ? Or is this Event &quot;lost&quot; or &quot;absorbed&quot; somewhere by other program that is running ? I ask because some other programs also fail to respond to this Event.<br /><br />- Is there a work-around, a fix for this problem ? To be fixed in the next version ? (Should this thread be moved to the &quot;Requests&quot; subforum ??).<br /><br />(Still love the program, though).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13185">Willy2</a> — Sun Sep 25, 2016 2:45 pm</p><hr />
]]></content>
</entry>
</feed>