<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=815" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-07-26T22:55:22-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=815</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-07-26T22:55:22-07:00</updated>
<published>2015-07-26T22:55:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=20315#p20315</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=20315#p20315"/>
<title type="html"><![CDATA[Re: Picky feedback and also some praise]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=20315#p20315"><![CDATA[
Starting with Classic Shell 4.2.3 release candidate, you can right-click on a highlighted program and select &quot;Remove highlight&quot;. This is possible because the programs executed in the last 48 hours are stored in the Registry now.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jul 26, 2015 10:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[KennyVee]]></name></author>
<updated>2013-06-26T12:10:20-07:00</updated>
<published>2013-06-26T12:10:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4052#p4052</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4052#p4052"/>
<title type="html"><![CDATA[Re: Picky feedback and also some praise]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4052#p4052"><![CDATA[
Gotcha. I've created it and set the value to 2 (for two hours):<br /><br /><img src="http://25.media.tumblr.com/46b408136ea6d116de7e2a8670dc055c/tumblr_mp0l8bobpx1rgoq1io1_400.jpg" alt="" /><br /><br />Hopefully that takes care of that. Thank you very much for your assistance!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=927">KennyVee</a> — Wed Jun 26, 2013 12:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-26T12:04:31-07:00</updated>
<published>2013-06-26T12:04:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4049#p4049</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4049#p4049"/>
<title type="html"><![CDATA[Re: Picky feedback and also some praise]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4049#p4049"><![CDATA[
You have to create the OldPrograms DWORD value and set the count by changing it to Decimals from Hex. Classic Start Menu highlights programs installed in the last 48 hours by default (when the OldPrograms value doesn't exist). Yes if you reinstall a program, it will highlight it again. If you set OldPrograms to 1, it will highlight for 1 hour after installing it. After the program is installed and its program group is created in the Start Menu, running it once from the taskbar or elsewhere *should* un-highlight it.<br /><br />From my own usage, the Windows Vista/7/XP Start Menu doesn't always un-highlight every program after running it. I don't know how it decides a program is no longer &quot;newly installed&quot;. (Ivo might know).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jun 26, 2013 12:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[KennyVee]]></name></author>
<updated>2013-06-26T11:39:14-07:00</updated>
<published>2013-06-26T11:39:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4048#p4048</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4048#p4048"/>
<title type="html"><![CDATA[Re: Picky feedback and also some praise]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4048#p4048"><![CDATA[
Thanks for the answer on the highlighting, I'll have to adjust that for myself (oops, ran into a problem -- see below). Perhaps that can be a non-hidden option in the final version?<br /><br />The program that isn't un-highlighting is Mozilla Thunderbird, my email client. I re-installed it yesterday due to an issue I was having, and then today when I installed Classic Shell 3.9 it was highlighted despite having been run since then. I closed Thunderbird and reopened it using the taskbar, but it remained highlighted in the Start Menu. Opening it from within the Classic Shell Start Menu, however, did un-highlight it.<br /><br />I may be mis-remembering, but on my old Vista computer I seem to remember that once I opened the Windows Start Menu and opened the program sub-menu, the highlighting would be gone the next time I opened the menu. But I'm totally OK with having it set to a certain amount of time -- it's a solid solution.<br /><br />OK, I ran into a small problem when looking to adjust the time -- I don't seem to have an entry for &quot;OldProgramsAge&quot;<br /><br />Here's a screenshot of what I have there:<br /><br /><img src="http://25.media.tumblr.com/cb611c2e5e46f2d722384324959c78d4/tumblr_mp0jpdDLzG1rgoq1io1_1280.jpg" alt="" /><br /><br />Not quite sure what to try, since I don't want to just start changing things around willy-nilly.<br /><br /><br />Thanks to both of you for your replies!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=927">KennyVee</a> — Wed Jun 26, 2013 11:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-06-26T11:24:25-07:00</updated>
<published>2013-06-26T11:24:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4046#p4046</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4046#p4046"/>
<title type="html"><![CDATA[Re: Picky feedback and also some praise]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4046#p4046"><![CDATA[
Excellent feedback. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />To reduce confusion for the end user, I agree that the item *names* by default can be the same as the command on the right (although it has a limitation that it can only contain letters and numbers). Well I wonder if that limitation itself can be addressed, can it be Ivo, so item names can contain anything, including spaces? Then they can be the same as the right column. This will be definitely less confusing.<br /><br />The Blue shell logo for the Start button or for the settings button in Explorer can both be changed (it is after all just a button). Microsoft wanted it to be changed.<br /><br />The suggestion to remove the highlight without running it is a good one. But to add a context menu action to &quot;Unhighlight&quot; means it has to be localized in all the languages Classic Shell supports which is an obstacle. You can try this: you can adjust how long items stay highlighted. There is a hidden setting: &quot;OldProgramsAge&quot; (DWORD value) at HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Settings. Set it in Decimals to number of hours for which you want the highlight to remain. It can be 1 hour as well, so after 1 hour, the highlight will go away.<br /><br />Running a program pinned to the taskbar should de-highlight it in the Start Menu as well. Which program doesn't get de-highlighted for you after running from the Taskbar?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jun 26, 2013 11:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-06-26T11:22:11-07:00</updated>
<published>2013-06-26T11:22:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4045#p4045</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4045#p4045"/>
<title type="html"><![CDATA[Re: Picky feedback and also some praise]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4045#p4045"><![CDATA[
You can always import a custom image, and i believe the old one is on the forums still <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" />, the icon was removed as per microsoft's request, so it most likely wont be showing up again in any future versions <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />@highlighting newly installed; I dont think theres a way besides opening them, though what would you suggest? right clicking the icon and selecting 'un-highlight'? I think that most programs on most PC's open fairly quickly so you could just open and exit them real quick if the coloring bothers you.. <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />as for removing programs opened from things aside from the start menu, i dont think there is an easy/efficient way of doing this, or Ivo would have likely already done it <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Jun 26, 2013 11:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[KennyVee]]></name></author>
<updated>2013-06-26T10:30:46-07:00</updated>
<published>2013-06-26T10:30:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4043#p4043</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4043#p4043"/>
<title type="html"><![CDATA[Picky feedback and also some praise]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=815&amp;p=4043#p4043"><![CDATA[
I've installed and played around with CSM and various functions (including some that I don't generally use, like frequently used/recent programs), and so far so good on my end. My only minor suggestion is that in the &quot;Customize Start Menu&quot; tab in settings, the names of available features on the right don't match how they are listed on the left (for example, on the right it says &quot;Programs,&quot; and on the left it is listed as &quot;ProgramsMenu&quot; and &quot;User pictures&quot; becomes &quot;UserPicturesItem.&quot; Same goes for the Toolbar Buttons tab in the Classic Explorer settings.<br /><br />Obviously not too terribly annoying or anything, but in the final it may help avoid some troubleshooting with users who get confused by this.<br /><br />And the new blue shell logo will take some getting used to when I see it in Windows Explorer. I like it, it's just that I'm really used to the one with the Windows colors. Any chance of an option to customize that?<br /><br />I like the addition of highlighted entries for new programs -- but is there a way to un-highlight them after seeing the highlight without actually clicking to open the program? I like having the ability to verify that anything new is something that I did indeed install myself, but I don't always want to open the program right away (and in the case of one program, I've opened it several times since installing it, just from a pinned icon on the taskbar instead of from the start menu, but it remains highlighted).<br /><br />But I've got a homemade custom start button which carried over just fine from the old 3.6.7 installation, and the program itself seems much faster, hanging up a lot less than 3.6.7 does. Overall, this is a definite step up!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=927">KennyVee</a> — Wed Jun 26, 2013 10:30 am</p><hr />
]]></content>
</entry>
</feed>