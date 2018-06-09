<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=1090" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-08-13T07:39:51-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=1090</id>
<entry>
<author><name><![CDATA[standarduser]]></name></author>
<updated>2013-08-13T07:39:51-07:00</updated>
<published>2013-08-13T07:39:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5653#p5653</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5653#p5653"/>
<title type="html"><![CDATA[Re: How to hide program from start menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5653#p5653"><![CDATA[
Thank you Ivo, reply was so short but helpful. I could search the web to find how to do it along with your link. Trick is to create a subkey NoStartPageAppUserModelIDs at HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\FileAssociation and add the AppUserModelID there as string value. AppUserModelID can be found by going to key at HKCR\ActivatableClasses\Package\&lt;packagename&gt;\Server\&lt;packagefullname&gt; string value AppUserModelID. App is now hidden from start menu and I am on my way. Woohoo <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1279">standarduser</a> — Tue Aug 13, 2013 7:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-08-13T06:50:28-07:00</updated>
<published>2013-08-13T06:50:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5651#p5651</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5651#p5651"/>
<title type="html"><![CDATA[Re: How to hide program from start menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5651#p5651"><![CDATA[
If you know the &quot;app user model id&quot; for the app you can exclude it following the directions here: <a href="http://msdn.microsoft.com/en-us/library/windows/desktop/dd378459(v=vs.85).aspx" class="postlink">http://msdn.microsoft.com/en-us/library/windows/desktop/dd378459(v=vs.85).aspx</a><br />Look at section #3. Keep in mind that the setting is global for all users of that machine.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Aug 13, 2013 6:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[standarduser]]></name></author>
<updated>2013-08-13T05:21:43-07:00</updated>
<published>2013-08-13T05:21:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5648#p5648</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5648#p5648"/>
<title type="html"><![CDATA[How to hide program from start menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1090&amp;p=5648#p5648"><![CDATA[
Title says it all - how to hide program from menu? I play Othello game from store <!-- m --><a class="postlink" href="http://apps.microsoft.com/windows/en-us/app/othello/91f0787f-168d-402b-ac50-2c9c9deddfe8">http://apps.microsoft.com/windows/en-us ... 9c9deddfe8</a><!-- m --> but I don't want it to appear in start menu or boss fires me if he finds out <img src="http://www.classicshell.net/forum/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" />. If I make shortcut hidden it hides from apps folder but not from list of commonly used programs.<br /><br />I should add that I did Remove from this list but it reappears in the list when it run the game again.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1279">standarduser</a> — Tue Aug 13, 2013 5:21 am</p><hr />
]]></content>
</entry>
</feed>