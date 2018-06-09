<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=537" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-11-15T05:55:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=537</id>
<entry>
<author><name><![CDATA[Hadden]]></name></author>
<updated>2015-11-15T05:55:45-07:00</updated>
<published>2015-11-15T05:55:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=23497#p23497</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=23497#p23497"/>
<title type="html"><![CDATA[Re: [SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=23497#p23497"><![CDATA[
I vote for that <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br />I used the dll hack from 7 to 10 b10240 (after disabling metro in explorer).<br />Now it stopped to work on b10586: probably due lack of uxtheme support.<br />A very experimental option, with some injection, will be cool: could be &quot;dangerous&quot; in the case you haven't classic toolbar with needed buttons (menu bar goes on when you &quot;hide/disable&quot; command bar)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2108">Hadden</a> — Sun Nov 15, 2015 5:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-10-13T04:05:19-07:00</updated>
<published>2013-10-13T04:05:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7281#p7281</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7281#p7281"/>
<title type="html"><![CDATA[Re: [SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7281#p7281"><![CDATA[
uninstalled through conventional means sure... but programs arnt always uninstalled that way. and currently if a user goes to the classic shell directory and just deletes everything, the system runs fine as if classic shell were never installed, however if it were to modify other system properties.. that would not be the case..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sun Oct 13, 2013 4:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ittays]]></name></author>
<updated>2013-10-12T14:42:55-07:00</updated>
<published>2013-10-12T14:42:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7252#p7252</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7252#p7252"/>
<title type="html"><![CDATA[Re: [SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7252#p7252"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />The registry changes made by classic shell only affect classic shell, something like this would persist after classic shell was uninstalled. which is one of the reasons classic shell doesn't go into it.<br /></div>Changes to the registry can be reversed when uninstalling and this is probably what CS does too; but that is not the issue. <br /><br />CS writing some of it's own parameters to the registry while probably true, should not be confused with what a program like CS needs to do in order to affect the behavior of another application, in this case a major Windows component like Explorer. It is most probable that changing the behavior of Explorer in the ways that CS does, must involve not only changing some of Explorer's registry setting, but also some much more intimate / intrusive mechanism(s) - as NoelC has correctly assumed. In order to affect an application's behavior through the registry, that application i.e. Explorer needs to be pre-programmed to be able to respond to what is written/modified in the registry. If Explorer was pre-programmed to optionally do the things that CS offers, it would probably default to doing them itself, or at least offer them to users as setup options - which it does not and this is why a more sophisticated solution like CS is called for.<br /><br />So I agree with <span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">NoelC </span></span></span>that CS probably needs to significantly touch on Explorer's internal logic, not only on it's parameters exposed in the registry.<br /><br />However <br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br /><span style="background-color:#ffffff;"><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">It requires modifying system files by resource hacking, a registry hack can&#39;t hide the command bar AFAIK. Out of Classic Shell&#39;s scope since it is more dangerous to modify system files</span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">on disk</span></span><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;">.</span></span></span><br /></div>So maybe the problem the developers see is in modifying system files, as opposed to what CS probably does currently: programatically bypass / add to / replace parts of Explorer's code without ever touching its code or files (probably done by intercepting and responding at run-time to system &quot;messages&quot; intended for Explorer). <br /><br />Of course keeping Explorer files untouched is safer than changing them, because Microsoft can later decide to change those file and this can complicate things. But I still wonder, Ivo &amp; Co., in what way is what CS is doing right now to Explorer's internal logic (alas &quot;from the outisde&quot;) less dangerous all-in-all than changing a single UI parameter inside a DLL ? It would seem both are somewhat dangerous, but isn't the former more prone to disaster than the latter ?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1715">ittays</a> — Sat Oct 12, 2013 2:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ittays]]></name></author>
<updated>2013-10-12T12:55:32-07:00</updated>
<published>2013-10-12T12:55:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7250#p7250</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7250#p7250"/>
<title type="html"><![CDATA[Re: [SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7250#p7250"><![CDATA[
<div class="quotetitle">NoelC wrote:</div><div class="quotecontent"><br />I have a question for the above poster (ittays)... Does that askvg.com hack end up breaking system protection (i.e., does the system fail an SFC /VERIFYONLY check) after it's done?<br /><br />-Noel<br /></div><br />The answer is I don't know, and I don't even know what SFC, VERIFYONLY are...<br /><br />However the hack seems to involve merely hiding the toolbar only by tweaking its size, not affecting it in any other sense. <br /><br />So my guess is it should have no effect on anything related to protection.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1715">ittays</a> — Sat Oct 12, 2013 12:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-10-12T06:17:03-07:00</updated>
<published>2013-10-12T06:17:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7239#p7239</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7239#p7239"/>
<title type="html"><![CDATA[Re: [SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7239#p7239"><![CDATA[
The registry changes made by classic shell only affect classic shell, something like this would persist after classic shell was uninstalled. which is one of the reasons classic shell doesn't go into it. Though I agree there should be A utility that combines all the different registry hacks into an easy to use interface, that can be ran with a settings file to restore all those hacks on a new system. I don't believe classic shell should be that utility. (not that I have any say in the decision anyways <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" />)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Sat Oct 12, 2013 6:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[NoelC]]></name></author>
<updated>2013-10-12T03:26:49-07:00</updated>
<published>2013-10-12T03:26:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7234#p7234</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7234#p7234"/>
<title type="html"><![CDATA[Re: [SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=7234#p7234"><![CDATA[
With all due respect I find the answer &quot;it requires hacking so we don't want to do it&quot; a bit unsatisfying, since ClassicShell already watches events and gets involved in the intimate details of what's happening inside Explorer.  But I do understand that it's complicated to try to alter the behavior of a system utility from the inside out.<br /> <br />I have a question for the above poster (ittays)...  Does that askvg.com hack end up breaking system protection (i.e., does the system fail an SFC /VERIFYONLY check) after it's done?<br /> <br />Thanks.<br /> <br />-Noel<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=552">NoelC</a> — Sat Oct 12, 2013 3:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ittays]]></name></author>
<updated>2013-10-03T17:20:14-07:00</updated>
<published>2013-10-03T17:20:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=6925#p6925</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=6925#p6925"/>
<title type="html"><![CDATA[Re: [SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=6925#p6925"><![CDATA[
1) I absolutely agree the command bar is redundant, takes us back from toolbars to text buttons, does so with a small set of commands (which only uncle MS chooses for us) leaving us with the need to continue using menus / context-menus / other toolbars, and for this half-baked stupidity forces us to loose precious horizontal space. Go figure MS..! <br /><br />2) I did this: <br /><a href="http://www.askvg.com/how-to-make-folder-band-auto-hidden-in-windows-vista/" class="postlink">How to Auto-Hide or Disable Command Bar in Windows Vista and 7 Explorer?</a> from askvg.com<br />it worked great on Win7 64bit<br />The &quot;hack&quot; seems a very minor one (adding a line of text in a .dll file) and easy to roll back.<br />Now, thanks to this and to CS, I have one single menu+tool bar and it's very convenient, logical, customizeable and economic.<br /><br />Thanks CS!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1715">ittays</a> — Thu Oct 03, 2013 5:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-04-16T08:55:21-07:00</updated>
<published>2013-04-16T08:55:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=2782#p2782</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=2782#p2782"/>
<title type="html"><![CDATA[Re: [SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=2782#p2782"><![CDATA[
It requires modifying system files by resource hacking, a registry hack can't hide the command bar AFAIK. Out of Classic Shell's scope since it is more dangerous to modify system files <strong>on disk</strong>. But you can customize the Command Bar using the free Explorer Toolbar Editor: <!-- m --><a class="postlink" href="http://winaero.com/comment.php?comment.news.16">http://winaero.com/comment.php?comment.news.16</a><!-- m --> .<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Apr 16, 2013 8:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[truthmonger]]></name></author>
<updated>2013-04-16T08:37:30-07:00</updated>
<published>2013-04-16T08:37:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=2779#p2779</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=2779#p2779"/>
<title type="html"><![CDATA[[SUGGESTION] Option to hide Windows Explorer command bar]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=537&amp;p=2779#p2779"><![CDATA[
The Windows Vista/7/8 command bar is largely useless and never touched after you've chosen your preferred layout. Classic Shell makes it even <strong>more</strong> redundant since the terrible default layouts are among the biggest mistakes that CS fixes. It would incredibly nice if we could reclaim that large amount of vertical space taken up by the command bar in Windows Explorer. I'm currently using a tiny reghack to do this and I've no doubt the CS team could add this function without much trouble. Please consider adding this feature! Thanks for all you guys do..I literally couldn't use Win7 without CS!!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=604">truthmonger</a> — Tue Apr 16, 2013 8:37 am</p><hr />
]]></content>
</entry>
</feed>