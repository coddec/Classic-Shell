<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7797" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-08-07T04:12:44-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7797</id>
<entry>
<author><name><![CDATA[Uleti]]></name></author>
<updated>2017-08-07T04:12:44-07:00</updated>
<published>2017-08-07T04:12:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33579#p33579</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33579#p33579"/>
<title type="html"><![CDATA[Re: Does not work with a moved user folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33579#p33579"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br /><div class="quotetitle">Uleti wrote:</div><div class="quotecontent">I do not know, what I do know is that the stock Windows 10 menu works fine, so perhaps there is a bug in Classic Shell?<br /></div><br /><br /><br />The stock menu gets to use lots of undocumented/exclusive functions and APIs/methods not all of which are exposed to third party app developers.</div><br /><br /><br />Yes, I can imagine that dealing with such a terrible thing like %USERPROFILE%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs and <br />%SYSTEMDRIVE%\ProgramData\Microsoft\Windows\Start Menu\Programs requires a deeper documentation.<br /><br />Regards.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22548">Uleti</a> — Mon Aug 07, 2017 4:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-06T05:43:18-07:00</updated>
<published>2017-08-06T05:43:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33574#p33574</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33574#p33574"/>
<title type="html"><![CDATA[Re: Does not work with a moved user folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33574#p33574"><![CDATA[
<div class="quotetitle">Uleti wrote:</div><div class="quotecontent"><br />I do not know, what I do know is that the stock Windows 10 menu works fine, so perhaps there is a bug in Classic Shell?<br /></div><br /><br /><br />The stock menu gets to use lots of undocumented/exclusive functions and APIs/methods not all of which are exposed to third party app developers.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Aug 06, 2017 5:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Uleti]]></name></author>
<updated>2017-08-06T02:28:22-07:00</updated>
<published>2017-08-06T02:28:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33573#p33573</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33573#p33573"/>
<title type="html"><![CDATA[Re: Does not work with a moved user folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33573#p33573"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Classic Shell uses KNOWNFOLDERIDs, not environment variables. According to MSDN, KNOWNFOLDERIDs supersede both CSIDLs and environment variables and should be used because environment variables have insufficient coverage of Windows special folders. But it is possible that the KNOWNFOLDERIDs do not work properly for many redirected folders <strong>(Windows bug, maybe?)</strong>.<br /><br />In general, moving the Users folder is not supported very well by the operating system that's why I suggested you a method that's likely to work well with everything - sysprep.<br /><br />To fix the problem in Classic Shell would require using environment variables everywhere instead of KNOWNFOLDERIDs. Many system/special folders don't have environment variables but only have CSIDLs/KNOWNFOLDERIDs.<br /></div><br /><br /><br /><br />I do not know, what I do know is that the stock Windows 10 menu works fine, so perhaps there is a bug in Classic Shell? In addition this kind of messages from microsoft like that that used to point out the necessity of an annual reinstall, apart from being not relevant, shows the lack of a feature existing in UNIX-like OSs from already more than 60 years ago?<br /><br />Anyway, it's a pity, in those systems in which I do not need a partition with users' folders Classic Shell works properly and looks very well.<br /><br />Thanks for your kind attention.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22548">Uleti</a> — Sun Aug 06, 2017 2:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-05T22:40:26-07:00</updated>
<published>2017-08-05T22:40:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33570#p33570</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33570#p33570"/>
<title type="html"><![CDATA[Re: Does not work with a moved user folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33570#p33570"><![CDATA[
Classic Shell uses KNOWNFOLDERIDs, not environment variables. According to MSDN, KNOWNFOLDERIDs supersede both CSIDLs and environment variables and should be used because environment variables have insufficient coverage of Windows special folders. But it is possible that the KNOWNFOLDERIDs do not work properly for many redirected folders (Windows bug, maybe?).<br /><br />In general, moving the Users folder is not supported very well by the operating system that's why I suggested you a method that's likely to work well with everything - sysprep.<br /><br />To fix the problem in Classic Shell would require using environment variables everywhere instead of KNOWNFOLDERIDs. Many system/special folders don't have environment variables but only have CSIDLs/KNOWNFOLDERIDs.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Aug 05, 2017 10:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Uleti]]></name></author>
<updated>2017-08-05T21:16:52-07:00</updated>
<published>2017-08-05T21:16:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33568#p33568</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33568#p33568"/>
<title type="html"><![CDATA[Re: Does not work with a moved user folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33568#p33568"><![CDATA[
I've been using windows in this way for so long... with out problem... Besides the fact that Microsoft usually say too many things, saying that there is no support for something has no relevance. For example, Microsoft used to say that an annual reinstall was necessary, so what?<br /><br />The only thing to worry about is when a major update arrives or in case a reinstall is needed... Then, going back or disabling temporarily the relocated user accounts is enough.<br />b<br />Summing up: Classic Shell does not take correctly the environement settings, in the contrary, windows's menu does it. I guess it is not so difficult. No windows support was needed. But thank you anyway.<br /><br />If you consider it is not a bug, it would have been enough just saying it. <br /><br />Note: Some things about &quot;The right way&quot; according to you:<br /><br />1.- It is not officially supported either, isn't it? In other words, is as unsopported scenario as what I did, right?<br />2.- Read: &quot;I can admit that I do not know everything about Windows but normally I have at least heard of most things. Windows Audit Mode was something I had never heard of before so my mind wanted to know what it was.&quot; [...] &quot;Please note this has to be done from a fresh install.&quot; (oops) &quot;You cannot change the location of the Users folder after you have already started to use Windows already! &quot;(oops) [...] Important issue: &quot;At this point make sure all your drives are set up in their proper order and have their proper drive letters.&quot; You'll never know it for sure before installing.  (ooops, oops, oops) (See tenforums.com) &quot;At this point you can continue to use Windows just like you normally would but there are a few steps that I like to take to make sure that if for any reason a bad programmer calls the C:\Users folder or C:\ProgramData by its name instead of using system variables (the case of Classic Shell?) then we need to account for this. What I like to do is create 2 Junction point to cover this issue should it ever happen.&quot; Finally: This &quot;mklink /j C:\Users D:\Users (where D:\Users is the new location of your users folder)&quot; That used to work fine in Windows 7, not in Windows 10, oops (see tenforum.com)<br /><br />Summing up: Do not waste your time doing that.<br /><br />Do not get me wrong, I have only trying to say that (copy and paste from your -unsupported- &quot;right way&quot;): &quot;for any reason a bad programmer calls the C:\Users folder or C:\ProgramData by its name instead of using system variables&quot;?<br /><br />Note: The only &quot;right way according to what microsoft says&quot; is moving folders such as documents, music, video, etc., one by one. This &quot;right method&quot; leaves AppData completey in its original place -such folder, for example, allocate things like mailbox of outlook or thunderbird, webrowser caches, etc.- Yes, that is a supported scenario, so what? <br /><br />I will try the next version of Classic Shell in case this is going to be fixed some day. <br /><br />Best regards and thank you anyway.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22548">Uleti</a> — Sat Aug 05, 2017 9:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-08-05T12:02:20-07:00</updated>
<published>2017-08-05T12:02:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33565#p33565</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33565#p33565"/>
<title type="html"><![CDATA[Re: Does not work with a moved user folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33565#p33565"><![CDATA[
Microsoft's documentation here: <!-- m --><a class="postlink" href="https://docs.microsoft.com/en-us/windows-hardware/customize/desktop/unattend/microsoft-windows-shell-setup-folderlocations-profilesdirectory">https://docs.microsoft.com/en-us/window ... sdirectory</a><!-- m --> states:<br /><br />&quot;We don’t recommend using this setting, except perhaps in a test environment.&quot;<br /><br />&quot;Use this setting to move the user-profile folder (typically %SYSTEMDRIVE%\Users) to another location *<strong>during deployment</strong>*.&quot; So after the OS and programs are installed, moving it seems to be an unsupported scenario.<br /><br />Instead try this method to move the Users folder before starting to use Windows: <!-- m --><a class="postlink" href="http://caspan.com/2012/12/move-the-user-folder-to-a-separate-drive-the-right-way/">http://caspan.com/2012/12/move-the-user ... right-way/</a><!-- m --> (Move the User Folder To A Separate Drive/Partition (The Right Way)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Aug 05, 2017 12:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Uleti]]></name></author>
<updated>2017-08-05T10:07:33-07:00</updated>
<published>2017-08-05T10:07:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33564#p33564</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33564#p33564"/>
<title type="html"><![CDATA[Re: Does not work with a moved user folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33564#p33564"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Classic Shell gets the paths from Windows. It may not be enough to change the user folder in the registry - there is also the location of the start menu, pictures, documents, etc.<br /></div><br /><br /><br /><br /><span style="font-size: 100%; line-height: 116%;"><br /><span style="color:#212121;"><span style="font-family:arial, sans-serif;">Thanks for your reply ... All programs work well -including the stock menu, which is suposed to get the paths from windows as well- except Classic Shell. Unfortunately as long as this behavior persists I will not be able to use it. Thank you anyway.</span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22548">Uleti</a> — Sat Aug 05, 2017 10:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-08-05T09:55:51-07:00</updated>
<published>2017-08-05T09:55:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33563#p33563</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33563#p33563"/>
<title type="html"><![CDATA[Re: Does not work with a moved user folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33563#p33563"><![CDATA[
Classic Shell gets the paths from Windows. It may not be enough to change the user folder in the registry - there is also the location of the start menu, pictures, documents, etc.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Aug 05, 2017 9:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Uleti]]></name></author>
<updated>2017-08-05T09:18:33-07:00</updated>
<published>2017-08-05T09:18:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33562#p33562</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33562#p33562"/>
<title type="html"><![CDATA[Does not work with a moved %SystemDrive%\Users folder]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7797&amp;p=33562#p33562"><![CDATA[
Hello.<br /><br /><span style="font-size: 100%; line-height: 116%;">I moved de user folder to D:\New\User1 . I did it changhing at (1) <strong><span style="color:#141414;"><span style="font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;"><span style="background-color:#fefefe;"><em><span style="color:#0000b3;">HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\ProfileList , </span></em></span></span></span></strong><span style="background-color:#fefefe;"><span style="color:#0000b3;"><span style="font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;">&quot;%SystemDrive%\Users&quot;</span></span></span><br /><span style="background-color:#fefefe;"><span style="color:#0000b3;"><span style="font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;"></span></span></span><br /><span style="background-color:#fefefe;"><span style="color:#0000b3;"><span style="font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;">As a result many icons neither don&#39;t appear or don&#39;t work anymore. It seems as if Classic Shell don not find the path properly.</span></span></span><br /><span style="background-color:#fefefe;"><span style="color:#0000b3;"><span style="font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;"></span></span></span><br /><span style="color:#0000b3;"><span style="font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;"><span style="background-color:#fefefe;">With accounts created before that change &#40;1&#41; Classic Shell works ok. I guess Classic Shell need a settings option related with any account in particular.</span></span></span><br /><span style="background-color:#fefefe;"><span style="color:#0000b3;"><span style="font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;"></span></span></span><br /><span style="background-color:#fefefe;"><span style="color:#0000b3;"><span style="font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;">Thanks.</span></span></span></span><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22548">Uleti</a> — Sat Aug 05, 2017 9:18 am</p><hr />
]]></content>
</entry>
</feed>