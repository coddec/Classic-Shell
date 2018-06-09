<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7864" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2018-03-19T07:14:20-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7864</id>
<entry>
<author><name><![CDATA[sublue]]></name></author>
<updated>2018-03-19T07:14:20-07:00</updated>
<published>2018-03-19T07:14:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=35587#p35587</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=35587#p35587"/>
<title type="html"><![CDATA[Re: Jump lists disappeared but only for Adobe programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=35587#p35587"><![CDATA[
I had a similar problem and was able to repair it by repairing the program (Control Panel&gt;Programs and Features).  The program I had trouble with (Excel 2016) had a repair feature.  <br /><br />On a note I had installed a second copy of Excel (2009) on the system and it did have a jump list. I got the idea to repair the program because I also installed Quickbooks and then Quicken and noticed that only Quicken now has a jump list.<br /><br />Hope this helps whoever found this string<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=31811">sublue</a> — Mon Mar 19, 2018 7:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shopyves]]></name></author>
<updated>2017-08-31T13:00:10-07:00</updated>
<published>2017-08-31T13:00:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33899#p33899</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33899#p33899"/>
<title type="html"><![CDATA[Re: Jump lists disappeared but only for Adobe programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33899#p33899"><![CDATA[
Hi Gaurav,<br /><br />I fixed it! For reference, I cleared all jumplists via command prompt (by the method in this article <!-- m --><a class="postlink" href="https://www.sevenforums.com/tutorials/81483-jump-lists-reset-clear-all-items.html">https://www.sevenforums.com/tutorials/8 ... items.html</a><!-- m -->) and now the 'recent items' are populating again so I can pin them. Bizarre it happened even, but thanks for all of your help!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16989">shopyves</a> — Thu Aug 31, 2017 1:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shopyves]]></name></author>
<updated>2017-08-31T12:01:21-07:00</updated>
<published>2017-08-31T12:01:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33898#p33898</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33898#p33898"/>
<title type="html"><![CDATA[Re: Jump lists disappeared but only for Adobe programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33898#p33898"><![CDATA[
Hi,<br /><br />Thanks for your reply. This is really useful. I tried pinning them to the taskbar and the pinned items weren't showing so it must be a jumplist functionality issue, although ClassicShell can't be pulling its data from those destinations which I know musn't sound right.<br /><br />The folders were only accessible if I pasted the address into explorer which is strange and their content unfortunately doesn't correspond to the data of the ClassicShell menu. When I go into CustomDestinations there are only four files and when I look up their ids (<!-- m --><a class="postlink" href="http://www.forensicswiki.org/wiki/List_of_Jump_List_IDs">http://www.forensicswiki.org/wiki/List_of_Jump_List_IDs</a><!-- m -->), they relate to chrome, IE and programs I never use, so none of them relate to the programs that have a pinned menu. So the pinned items from ClassicShell that are still working (such as Notepad, Word 2016 etc) must be filed somewhere else but looking through all the folders in that destination there isn't anywhere I can find them (see attached pics). Would you have any other suggestion where the back end for the ClassicShell link files can be? Or obviously any further suggestions just to get the adobe ones working would be great! I'm on Windows 10<br /><br />Many Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16989">shopyves</a> — Thu Aug 31, 2017 12:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-31T10:26:33-07:00</updated>
<published>2017-08-31T10:26:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33896#p33896</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33896#p33896"/>
<title type="html"><![CDATA[Re: Jump lists disappeared but only for Adobe programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33896#p33896"><![CDATA[
Note that all jumplist data is maintained by Windows and Classic Shell simply shows it.<br /><br />Jumplists require many things to work properly in the Start menu:<br />- The shortcut for the program must not be corrupted or invalid/broken. Does the Taskbar show jumplists when the program is running? Does a shortcut of that app pinned to the Taskbar show jumplists?<br />- The jumplist data maintained by Windows must not be corrupted. It is stored in C:\Users\&lt;YOUR USER NAME&gt;\AppData\Roaming\Microsoft\Windows\Recent\AutomaticDestinations (for recent jumplist) and in C:\Users\&lt;YOUR USER NAME&gt;\AppData\Roaming\Microsoft\Windows\Recent\CustomDestinations (for pinned jumplist).<br />- If you have any software to modify taskbar behavior e.g., not combine taskbar icons, it can change the AppID (depending on what settings are set) and if the AppID is different, the jumplists for those programs may not show. AppID is dependent on the shortcut and sometimes it can change unexpectedly.<br /><br />Try turning off the setting 'Show recently opened items in jumplists on Start' and turn it on again.<br />Try right clicking the shortcut that does not show the jumplist in the Start menu and click Pin to Taskbar. Does it then show the jumplist on the Taskbar? If not, there's something wrong with the operating system's jumplist functionality, and it is not related to Classic Shell.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Aug 31, 2017 10:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shopyves]]></name></author>
<updated>2017-08-31T07:35:56-07:00</updated>
<published>2017-08-31T07:35:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33895#p33895</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33895#p33895"/>
<title type="html"><![CDATA[Jump lists disappeared but only for Adobe programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7864&amp;p=33895#p33895"><![CDATA[
Hi All,<br /><br />Any help would be really appreciated. My Classic Shell start menu has suddenly disabled the jumplists from Adode programs only (that are pinned to my start menu).For all other programs pinned items stayed ok but recent items cleared. Recent items for them seem to be repopulating now. So all jumplists for other pinned progams are working fine but it's just the Adobe programs (Illustrator, Photoshop etc) where the jumplist won't show up (ie. no little arrow is coming up after the program name), so I can't start repinning the items. Note, when I got to 'Open Recent Files' inside the program its fine, so its definitely a classic shell thing.<br /><br />I use the pinned items shortcuts religiously for my work daily so this is really slowing me down.<br /><br />It happened just randomly yesterday after I turned on the computer. There hadn't been a windows update and I can't track how to check when the Classic Shell auto-updated but looking at this site I don't think it was yesterday.<br /><br />Things I've tried:<br />* Rebooting the computer<br />*Reinstalling the latest Classic Shell version<br />* Restoring the computer to a restore point a couple of days ago<br />* Opening loads of files in Adobe programs to see if a new 'recent items' jumplist starts populating<br />* Deleting programs from the start menu and then repinning<br />* Checking that 'show recently opened items in jumplists on Start' is switched on. It is. <br /><br />Nothings working. See pic attached that reiterates the problem. Any suggestions as to what could have happened?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16989">shopyves</a> — Thu Aug 31, 2017 7:35 am</p><hr />
]]></content>
</entry>
</feed>