<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=7632" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-05-24T21:57:40-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=7632</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-24T21:57:40-07:00</updated>
<published>2017-05-24T21:57:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32770#p32770</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32770#p32770"/>
<title type="html"><![CDATA[Re: How to create &quot;Play all&quot; icon/command]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32770#p32770"><![CDATA[
If you have tested and it works for more media players including those who can play video, do let us know. Unfortunately, Windows Media Player doesn't work. It uses DelegateExecute to enqueue files.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed May 24, 2017 9:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Rosco]]></name></author>
<updated>2017-05-24T19:33:54-07:00</updated>
<published>2017-05-24T19:33:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32769#p32769</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32769#p32769"/>
<title type="html"><![CDATA[Re: How to create &quot;Play all&quot; icon/command]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32769#p32769"><![CDATA[
Awesome Gaurav! It looks like it's working like I want it to in AIMP. Thank you!!  <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20305">Rosco</a> — Wed May 24, 2017 7:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-24T05:07:31-07:00</updated>
<published>2017-05-24T05:07:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32761#p32761</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32761#p32761"/>
<title type="html"><![CDATA[Re: How to create &quot;Play all&quot; icon/command]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32761#p32761"><![CDATA[
Well I tried just now with both AIMP and Winamp. For Winamp it works only for local paths but fails for network paths even if you have mapped a drive letter.<br /><br />For AIMP 4, it works the same as VLC or MPC-HC.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed May 24, 2017 5:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Rosco]]></name></author>
<updated>2017-05-23T22:08:23-07:00</updated>
<published>2017-05-23T22:08:23-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32759#p32759</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32759#p32759"/>
<title type="html"><![CDATA[Re: How to create &quot;Play all&quot; icon/command]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32759#p32759"><![CDATA[
Currently I'm using AIMP, I may go back to my old trusty Winamp soon though. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Thanks for you're help, I'll try your solution in the next day or 2 and get back to you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20305">Rosco</a> — Tue May 23, 2017 10:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-23T01:18:09-07:00</updated>
<published>2017-05-23T01:18:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32743#p32743</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32743#p32743"/>
<title type="html"><![CDATA[Re: How to creat &quot;Play all&quot; icon/command]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32743#p32743"><![CDATA[
The way &quot;Play All&quot; is implemented by Microsoft in Explorer is a disaster. It sends a ShellExecute command to every file. If your folder contains hundreds of files, your PC will freeze as it tries to open them all at once to queue them in the media player's playlist.<br /><br />If your media player supports command line switches (e.g. I use Media Player Classic Home Cinema), you can create a custom Explorer toolbar button as follows. In the Command field of the Custom button, specify:<br /><br />mpchc.exe &quot;%1&quot; <br /><br />I am using MPC-HC as an example. %1 is the path of the current folder.<br /><br />Usually, if your media player accepts a directory as a path to play all files inside it, it should work. It works for VLC too. For VLC, the button command should be:<br /><br />&quot;C:\Program Files\VideoLAN\VLC\vlc.exe&quot; &quot;%1&quot;.<br /><br />Which media player are you using?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue May 23, 2017 1:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Rosco]]></name></author>
<updated>2017-05-22T20:07:52-07:00</updated>
<published>2017-05-22T20:07:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32742#p32742</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32742#p32742"/>
<title type="html"><![CDATA[How to create &quot;Play all&quot; icon/command]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7632&amp;p=32742#p32742"><![CDATA[
I've recently switched over from Windows 7 to Win10. In both OS's there's an option to &quot;play all&quot; with the default media player if the folder contains music. I used to use this in Win7 but it's part of the ribbon now in Win10 and I've hidden the ribbon now that I'm using Classic Explorer. I only have about 10 icon shortcuts now but would like to know how to add a &quot;Play all&quot; icon for my music (if possible). One of the icons I now have is &quot;Select all&quot;, so while it would be an extra step to select all and then play all I could deal with that. Currently I need to select all and then right click on the files and play all with my media player.<br />Thanks in advance! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=20305">Rosco</a> — Mon May 22, 2017 8:07 pm</p><hr />
]]></content>
</entry>
</feed>