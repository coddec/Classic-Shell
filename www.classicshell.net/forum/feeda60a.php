<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=335" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-03-05T13:13:41-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=335</id>
<entry>
<author><name><![CDATA[Elancore]]></name></author>
<updated>2013-03-05T13:13:41-07:00</updated>
<published>2013-03-05T13:13:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1737#p1737</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1737#p1737"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1737#p1737"><![CDATA[
Perfect, thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=406">Elancore</a> — Tue Mar 05, 2013 1:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-03-05T10:31:50-07:00</updated>
<published>2013-03-05T10:31:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1731#p1731</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1731#p1731"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1731#p1731"><![CDATA[
yet it does.... maybe windows happens to use the same syntax to get current directory (it seemed kinda familiar to me before classic shell)<br /><br />but you can try it yourself (i can only confirm for w8pro but i would imagine w7 should work to)<br /><br />just make a new folder, throw 1-2 files in it (or right-click create new) text, and bitmaps<br />just make sure the file in the folder doesnt have spaces in the name or it wont work<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Tue Mar 05, 2013 10:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-05T08:57:10-07:00</updated>
<published>2013-03-05T08:57:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1728#p1728</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1728#p1728"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1728#p1728"><![CDATA[
It can't work in the address bar because the address bar doesn't know anything about %1<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Mar 05, 2013 8:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-03-04T18:13:25-07:00</updated>
<published>2013-03-04T18:13:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1695#p1695</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1695#p1695"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1695#p1695"><![CDATA[
without cd cmd opens to C:\Windows for me..<br />and with this script this could potentially be very bad XD<br /><br />the /C part just tells the script to close after running so removal of that shows it opens to the windows dir..<br /><br />so if you want to see whats happening just remove the /C part <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />EDIT UPDATE: this works if i paste into the address bar, but not as a command on one of your buttons:<br /><br />C:\Windows\System32\cmd.exe /C cd &quot;%1&quot; &amp; for %a in (*.*) do ren %a AddThis%a<br /><br /><br />....?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Mar 04, 2013 6:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-04T17:30:48-07:00</updated>
<published>2013-03-04T17:30:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1693#p1693</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1693#p1693"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1693#p1693"><![CDATA[
Not sure. You can run something like Process Monitor to see what the first command really expands to.<br />However you don't need the cd because the command runs in the current folder anyway.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Mar 04, 2013 5:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-03-04T17:23:49-07:00</updated>
<published>2013-03-04T17:23:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1692#p1692</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1692#p1692"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1692#p1692"><![CDATA[
Why does <br /><br /><br />C:\Windows\System32\cmd.exe /C  cd &quot;%1&quot; &amp;&amp; for %a in (*.*) do ren %a AddThis%a<br />Not work while<br /><br />C:\Windows\System32\cmd.exe /C  cd &quot;C:\Users\Jesse\Desktop\aa&quot; &amp;&amp; for %a in (*.*) do ren %a AddThis%a<br /><br />Works<br /><br />In the first example its recognizing the first command, and then terminating, while in the second it runs both...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Mar 04, 2013 5:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-03-04T15:33:32-07:00</updated>
<published>2013-03-04T15:33:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1686#p1686</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1686#p1686"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1686#p1686"><![CDATA[
cmd.exe /C ren &quot;%2&quot; &quot;word.txt&quot;<br /><br /><br />is what you should have put, he forgot the quotes <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />and as he said replace word.txt with whatever<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Mon Mar 04, 2013 3:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-04T15:25:21-07:00</updated>
<published>2013-03-04T15:25:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1685#p1685</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1685#p1685"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1685#p1685"><![CDATA[
If you want the selected file to be renamed to &quot;hello&quot;, then replace &quot;word.txt&quot; with &quot;hello&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Mar 04, 2013 3:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Elancore]]></name></author>
<updated>2013-03-04T13:50:17-07:00</updated>
<published>2013-03-04T13:50:17-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1682#p1682</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1682#p1682"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1682#p1682"><![CDATA[
I'm sorry, I don't know what I did wrong, I think there is a syntax error?<br /><br /><img src="http://i.imgur.com/CSnNx3U.jpg" alt="" /><br /><br />I select file (1) then I click the button (2)<br /><br />I want the file name to be &quot;hello&quot; for example.<br /><br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=406">Elancore</a> — Mon Mar 04, 2013 1:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-03-04T01:30:01-07:00</updated>
<published>2013-03-04T01:30:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1662#p1662</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1662#p1662"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1662#p1662"><![CDATA[
RenameMaster is an awesome, easy-to-use program that can rename files in many different ways<br /><br />you can download it here  <!-- m --><a class="postlink" href="http://www.joejoesoft.com/cms/showpage.php?cid=108">http://www.joejoesoft.com/cms/showpage.php?cid=108</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Mon Mar 04, 2013 1:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-03T14:12:12-07:00</updated>
<published>2013-03-03T14:12:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1639#p1639</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1639#p1639"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1639#p1639"><![CDATA[
You don't need a bat file. Simply use the command directly in the button.<br />You don't need word.txt. In fact it will cause the command to fail because it will conflict with the file you are trying to rename.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 03, 2013 2:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Elancore]]></name></author>
<updated>2013-03-03T13:56:33-07:00</updated>
<published>2013-03-03T13:56:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1638#p1638</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1638#p1638"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1638#p1638"><![CDATA[
Sorry I'm not pro in these stuff but it didn't work, maybe I did something wrong?<br /><br />I made 2 files:<br />rename.bat<br />word.txt<br /><br />in rename.bat I put<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">cmd.exe /C ren %2 word.txt</div><br /><br />I use classic shell custom command button to target that rename.bat file, is that correct?<br /><br />Thx<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=406">Elancore</a> — Sun Mar 03, 2013 1:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-03T12:49:01-07:00</updated>
<published>2013-03-03T12:49:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1637#p1637</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1637#p1637"/>
<title type="html"><![CDATA[Re: Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1637#p1637"><![CDATA[
Maybe something like &quot;cmd.exe /C ren %2 word.txt&quot;<br />It will fail if there is already a file with that name.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 03, 2013 12:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Elancore]]></name></author>
<updated>2013-03-03T12:42:36-07:00</updated>
<published>2013-03-03T12:42:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1636#p1636</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1636#p1636"/>
<title type="html"><![CDATA[Rename selected file with &quot;somethng&quot;]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=335&amp;p=1636#p1636"><![CDATA[
Hi everyone..<br /><br />I'm looking for a way or a patch command to rename selected file with a specific word?<br /><br />Thanks for help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=406">Elancore</a> — Sun Mar 03, 2013 12:42 pm</p><hr />
]]></content>
</entry>
</feed>