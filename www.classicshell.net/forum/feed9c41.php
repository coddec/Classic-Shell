<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=1064" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-08-09T00:23:48-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=1064</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-08-09T00:23:48-07:00</updated>
<published>2013-08-09T00:23:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5518#p5518</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5518#p5518"/>
<title type="html"><![CDATA[Re: Disable Windows Explorer thumbnails selectively]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5518#p5518"><![CDATA[
i'm not sure why it is caching the entirety of folders you haven't yet entered, as far as ive seen this has never been the case. but i haven't looked to deep into it.<br /><br /><br />I have personally noted some slowdowns after you hit around the 5k filemark, with anything above 15k being considerably slow (3-5 seconds), but seeing as i am not having the same caching problems as you, this problem may be compounding yours.<br /><br /><br />Is it only children that cause issues?, and not grandchildren of the folder you have open? (try nesting your child folder within a second folder and see if it alleviates some of the 'stress'<br /><br />Also maybe this 'fix' might help: <a href="http://www.addictivetips.com/windows-tips/stopprevent-windows-7-from-deleting-thumbnail-cache/" class="postlink">http://www.addictivetips.com/windows-tips/stopprevent-windows-7-from-deleting-thumbnail-cache/</a><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Fri Aug 09, 2013 12:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-08-08T22:36:26-07:00</updated>
<published>2013-08-08T22:36:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5517#p5517</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5517#p5517"/>
<title type="html"><![CDATA[Re: Disable Windows Explorer thumbnails selectively]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5517#p5517"><![CDATA[
Hm, you might be right. Maybe I should look deeper into this. I am not the only one who has that sort of problem though, I've seen quite a few other people being dissatisfied with this caching. But after your post, I decided that I will give it another try to see if the issue is not so bad as it first seemed.<br /><br />And yes... It does not &quot;freeze&quot; Explorer while caching, but it is thrashing my hard drive and slowing my Windows Explorer &quot;browsing&quot; to a crawl while it caches. I enter any of my external hard drives, and it caches like hell, thrashing my hard drive and slowing down my folder &quot;browsing&quot;. I hope you understand that I see that as an issue. All I need are thumbnails for my images. And I sure as hell <span style="text-decoration: underline">don't want Windows to cache a folder until I bloody enter it</span>. <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br /><div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />Maybe you could split your folders into smaller volumes of 10,000 or less images...<br /></div>And what would that accomplish? Say, I have &quot;Images&quot; folder. In it, I have &quot;Images 1&quot;,&quot;Images 2&quot;, &quot;Images 3&quot;, &quot;Images 4&quot; and &quot;Images 5&quot; folders with 10.000 pictures in each. BUT, it is enough to JUST enter root &quot;Images&quot; folder, and Windows Explorer will start looking in all five folders to display their contents on folder icons. <span style="text-decoration: underline">Dividing images into different folders will accomplish nothing if Windows Explorer will dig into them all to display folder thumbnails anyway</span>.<br /><br />P.S. I have a habit of underlining mains point of my posts.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Thu Aug 08, 2013 10:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-08-08T17:05:31-07:00</updated>
<published>2013-08-08T17:05:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5509#p5509</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5509#p5509"/>
<title type="html"><![CDATA[Re: Disable Windows Explorer thumbnails selectively]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5509#p5509"><![CDATA[
I have more than a few hundred pictures <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> (some folders have 30,000 images in them), meaning my situation is seemingly similar to yours... (or atleast was, back when i had w7)<br /><br /><br />The images do take time to cache, but I could still browse the folders (with 10-30k images in them) before it finished the caching, windows would simply supply placeholder icons.<br /><br /><br />Meaning something particular about your setup is causing the issue.. making this a <em>bug</em>, unrelated to classic shell, and probably to rare to warrant its future addition..<br /><br /><br /><br /><br />Maybe you could split your folders into smaller volumes of 10,000 or less images...<br /><br /><br />Though i don't think the sub-folder caching specifically is causing the issue,<br />you could try applying a custom icon to all the folders within your problem directory, and see if that helps. (not sure if there is an automated way to do this though, so you may need to google)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Thu Aug 08, 2013 5:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-08-08T12:10:11-07:00</updated>
<published>2013-08-08T12:10:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5501#p5501</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5501#p5501"/>
<title type="html"><![CDATA[Re: Disable Windows Explorer thumbnails selectively]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5501#p5501"><![CDATA[
They are cached. Until you restart your computer. Then all over again - while you're working with hundreds of folders and hundreds of files, it takes time and time loading them. I don't need Windows spending time loading <em>stuff I don't use</em>. Its a waste of resources and a waste of time. But not having thumbnails on pictures makes me waste time also, so its a no-win situation. And what do you mean, you've never seen this problem? Windows takes times to scan all files in all folders, it happens on every computer. Then you don't have nearly enough files as some people do. Few hundreds of pictures won't cut it, I have hard drives filled with thousands of files of different kind.<br /><br />P.S. It doesn't matter if you haven't run into this problem. I need it, I'm asking for it. This problem arises under the conditions I am working. If you have different conditions and are not facing this problem - I am happy for you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Thu Aug 08, 2013 12:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-08-08T06:33:24-07:00</updated>
<published>2013-08-08T06:33:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5488#p5488</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5488#p5488"/>
<title type="html"><![CDATA[Re: Disable Windows Explorer thumbnails selectively]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5488#p5488"><![CDATA[
generally the folder thumbnail should be cached.., and ive never seen this problem.<br />Even in a folder with 500 folders, with 400,000 images spread among them (I collect pictures..)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Thu Aug 08, 2013 6:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-08-08T02:05:36-07:00</updated>
<published>2013-08-08T02:05:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5483#p5483</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5483#p5483"/>
<title type="html"><![CDATA[Disable Windows Explorer thumbnails selectively]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1064&amp;p=5483#p5483"><![CDATA[
There is one rather important issue in Windows 7. By default, Windows Explorer shows file and folder thumbnails. It shows preview of pictures - which is good - and then it looks inside each and every folder to display its contents on the folder icon - which is bad.<br /><br />Imagine I open a place (for example external hard drive) with lots of folders in it. Then Windows Explorer takes up to 10 seconds to look inside each and every folder. Which gets very, very maddening, for I can't even use the window until this shit is done looking into every folder. I don't need this. Any user that works a lot with folders doesn't need this. I don't want to wait for 10 seconds each time, so I have disabled thumbnails, and now Windows Explorer loads everything fast.<br />...but the thumbnails on Windows images (jpeg, png, etc) also got disabled.<br /><br />So I would very much like to have a possibility of still displaying image/video content of the files on a thumbnail, but PREVENT Windows Explorer from digging folders every time, killing my work and making me wait.<br /><br /><br />Is there any chance of doing that?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Thu Aug 08, 2013 2:05 am</p><hr />
]]></content>
</entry>
</feed>