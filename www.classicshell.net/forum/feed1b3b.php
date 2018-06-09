<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=128" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-04-18T08:03:21-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=128</id>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-04-18T08:03:21-07:00</updated>
<published>2013-04-18T08:03:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=2845#p2845</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=2845#p2845"/>
<title type="html"><![CDATA[Re: Option 'Skip Metro Screen' Ignored After Disabling Hiber]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=2845#p2845"><![CDATA[
Im having a similar problem on my laptop, which is a fairly new/clean install of w8, fully updated. Ive tried skip metro suite to, neither that or classic shells skips the start screen, and i ended up installing some program called &quot;bypass_modernui_v066&quot; which modify system files to accomplish it.., ill post if i find out why classic shells bypass wont work.<br /><br />Yes clicking the desktop button right on the metro UI yields the start button.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Thu Apr 18, 2013 8:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[veletron]]></name></author>
<updated>2013-01-22T17:29:14-07:00</updated>
<published>2013-01-22T17:29:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=482#p482</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=482#p482"/>
<title type="html"><![CDATA[Re: Option 'Skip Metro Screen' Ignored After Disabling Hiber]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=482#p482"><![CDATA[
Hi<br /><br />Yes, I see the start button. Everything functions normally apart from the skip option. I should have also mentioned that the machine logs in automatically. Perhaps a timing issue related to this?<br /><br />I ended up disabling the hibernate support, and the 'skip' option in classic shell and using <!-- m --><a class="postlink" href="http://winaero.com/comment.php?comment.news.103">http://winaero.com/comment.php?comment.news.103</a><!-- m --> to do the skip (I guess it 'just' messes with the registry).<br /><br />Thus far, this appears to work well.<br /><br />Nigel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=181">veletron</a> — Tue Jan 22, 2013 5:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-22T15:19:51-07:00</updated>
<published>2013-01-22T15:19:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=477#p477</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=477#p477"/>
<title type="html"><![CDATA[Re: Option 'Skip Metro Screen' Ignored After Disabling Hiber]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=477#p477"><![CDATA[
If you immediately click on the Desktop tile, do you see a start button or not?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Jan 22, 2013 3:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[veletron]]></name></author>
<updated>2013-01-22T14:37:12-07:00</updated>
<published>2013-01-22T14:37:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=474#p474</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=474#p474"/>
<title type="html"><![CDATA[Option 'Skip Metro Screen' Ignored After Disabling Hibernate]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=128&amp;p=474#p474"><![CDATA[
Hi<br /><br />I am running Classic Shell on a windows 8 Pro PC that's on 24/7. (My media center machine). Classic Shell works great, and is set to skip the metro screen at startup, with MCE then living in a startup group on the win8 desktop.<br /><br />I would like to disable hibernate support, this getting back valuable space on an SSD. Since machine is 'always on', hibernate makes little sense.<br /><br />Unfortunately, disabling hibernate support (on command line with '<span style="color:#333333;"><span style="font-family:Segoe UI, Arial, Verdana, Tahoma, sans-serif;"><strong>powercfg.exe /hibernate off&#39;&#41; </strong></span></span>- also means that the option 'Skip Metro Screen' gets ignored. I have tried unsetting, rebooting and then resetting the 'skip metro screen' option, but I always end up in metro, not the desktop.<br /><br />If I turn hibernate back on again '<span style="color:#333333;"><span style="font-family:Segoe UI, Arial, Verdana, Tahoma, sans-serif;"><strong>powercfg.exe /hibernate on</strong></span></span>' and reboot then the 'Skip Metro Screen' option works perfectly again.<br /><br />This is fully repeatable.<br /><br />Any idea's how to solve?<br /><br />Kind Regards<br /><br />Nigel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=181">veletron</a> — Tue Jan 22, 2013 2:37 pm</p><hr />
]]></content>
</entry>
</feed>