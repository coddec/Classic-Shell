<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=39" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-03-26T23:41:38-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=39</id>
<entry>
<author><name><![CDATA[conan.conan]]></name></author>
<updated>2014-03-26T23:41:38-07:00</updated>
<published>2014-03-26T23:41:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=11713#p11713</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=11713#p11713"/>
<title type="html"><![CDATA[Re: common dialog!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=11713#p11713"><![CDATA[
have got another idea...i think that, can you modify this common dialog only for MS office, because it's usually to use..like the way you did with IE option..hope that have more one tab for MS Office with classic common dialog..Many thanks...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=90">conan.conan</a> — Wed Mar 26, 2014 11:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-10-16T06:41:36-07:00</updated>
<published>2013-10-16T06:41:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=7372#p7372</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=7372#p7372"/>
<title type="html"><![CDATA[Re: common dialog!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=7372#p7372"><![CDATA[
Ha I used to do that all the time with the Kiosk at my school, so I could do more than just the 5 locations it would otherwise let you visit <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Oct 16, 2013 6:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rdefulio]]></name></author>
<updated>2013-10-15T11:55:06-07:00</updated>
<published>2013-10-15T11:55:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=7351#p7351</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=7351#p7351"/>
<title type="html"><![CDATA[Re: common dialog!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=7351#p7351"><![CDATA[
I'd like to re-open this conversation with a modified version of this request -- I've been fighting the common dialog battle for a while. It is possible to subclass the common dialog box at the time that it's created, and then intercept select components of the dialog box and make them invisible, or change their class to a read-only style. For example, the standard 2008/2012 common dialog box allows you to type any old thing you want in the top section, like 'cmd.exe'. And, if you aren't using AppLocker to restrict cmd.exe from running, your user's can quickly and easily get to a command prompt. This of course opens up a whole can of worms because windows runs your login script with cmd.exe so that gets blocked as well. In a terminal server environment this becomes a big problem. <br /><br />I've heard of enterprise-level solutions to &quot;locking down&quot; the common dialog box, but they also come with enterprise-level pricing which is impossible for a small company like ours to justify. For our in-house applications, the only solution I had was to subclass the common dialog box each and every time I used it in code, which is a management nightmare. But, it works.<br /><br />Here's a 'standard' common dialog box raised by the application without subclassing --<br /><br /><img src="http://imageshack.us/a/img855/6274/dic4.png" alt="" /><br /><br />Here is the same dialog after my code intercepts the call to the common dialog, subclasses the form, and then &quot;hides&quot; some of the naughty features --<br /><br /><br /><img src="http://imageshack.us/a/img824/2286/ur96.png" alt="" /><br /><br /><br />This is an extremely low tech solution to the problem. However, there is no solution for other applications whose source code I don't have (like 'notepad.exe'). <br /><br />Some options that I think could be implemented by some program that already has the ability to hook into shell level actions (*cough* classicshell *cough*) would be --<br /><br /><ul><li>Hide Common Dialog Nav Box </li><li>Hide Common Dialog Tool Bar</li><li>Hide Common Dialog Network Places Frame (OFN_EX_NOPLACESBAR) </li><li>Force downgrade to XP-Style dialog box (OFN_EXPLORER, OFN_NONETWORKBUTTON)</li></ul>Print dialog also has issues that can be intercepted with a subclass <br /><br /><ul><li>PD_NONETWORKBUTTON</li><li>PD_DISABLEPRINTTOFILE</li><li>PD_HIDEPRINTTOFILE</li></ul><br />Note that OS versions prior to 2008 also had the following commondialog options which are no longer respected by Microsoft<br /><ul><li>Software\Microsoft\Windows\CurrentVersion\Policies\Comdlg32\NoComputersNearMe</li><li>Software\Microsoft\Windows\CurrentVersion\Policies\Comdlg32\NoEntireNetwork </li><li>Software\Microsoft\Windows\CurrentVersion\Policies\Comdlg32\NoNetHood </li><li>Software\Microsoft\Windows\CurrentVersion\Policies\Comdlg32\NoRecentDocsNetHood </li><li>Software\Microsoft\Windows\CurrentVersion\Policies\Comdlg32\NoStartMenuNetworkPlaces</li></ul><br />I don't think a system wide &quot;replacement&quot; of the common dialog box is feasible for all the reasons mentioned in the FAQ. There are just too many combinations, and the common dialog api exposes different functionality based on the &quot;size&quot; the structure passed to it, for backwards compatibility. The combinations are endless. But within a narrow set of parameters I think its possible to target specific graphical elements on the form at the time the dialog is created, and then use some windows messaging to hide them. I personally don't have the platform or the means to try and build my own system wide solution to the problem but I'd gladly work with anyone who wanted to try and tackle this at the system wide level.<br /><br />Thanks for listening!<br /><br />Ron<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1829">rdefulio</a> — Tue Oct 15, 2013 11:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[conan.conan]]></name></author>
<updated>2013-01-10T00:00:55-07:00</updated>
<published>2013-01-10T00:00:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=151#p151</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=151#p151"/>
<title type="html"><![CDATA[Re: common dialog!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=151#p151"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Not possible, here's why: <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#explorer_saveas">http://www.classicshell.net/faq/#explorer_saveas</a><!-- m --><br /></div><br /><br />hix..that's a pity!! but..any way.. i love classic shell<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=90">conan.conan</a> — Thu Jan 10, 2013 12:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2013-01-09T08:13:32-07:00</updated>
<published>2013-01-09T08:13:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=137#p137</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=137#p137"/>
<title type="html"><![CDATA[Re: common dialog!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=137#p137"><![CDATA[
ive been wondering about this (not the why as i read yours, but more of a how to get around without unleashing all hell)<br />i know you cant add it to the save dialogs because they could be modified, but is there a way to check if they are modified and if not add it (since 90% of them arnt modified as far as i can tell), and i asume code injection is a bad idea? <img src="http://www.classicshell.net/forum/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Jan 09, 2013 8:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-07T21:57:51-07:00</updated>
<published>2013-01-07T21:57:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=72#p72</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=72#p72"/>
<title type="html"><![CDATA[Re: common dialog!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=72#p72"><![CDATA[
Not possible, here's why: <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#explorer_saveas">http://www.classicshell.net/faq/#explorer_saveas</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jan 07, 2013 9:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[conan.conan]]></name></author>
<updated>2013-01-07T21:54:45-07:00</updated>
<published>2013-01-07T21:54:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=71#p71</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=71#p71"/>
<title type="html"><![CDATA[common dialog!!]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=39&amp;p=71#p71"><![CDATA[
hi..i love classic shell so much..we have got the function to make address bar to combobox drop down like XP..<br />-&gt;how can we do .. with common dialog with the same function when open/save file...<br />thanks..<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=90">conan.conan</a> — Mon Jan 07, 2013 9:54 pm</p><hr />
]]></content>
</entry>
</feed>