<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=230" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-02-09T16:03:30-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=230</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-09T16:03:30-07:00</updated>
<published>2013-02-09T16:03:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=1000#p1000</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=1000#p1000"/>
<title type="html"><![CDATA[Re: font smoothing option forces ClearType in Windows 8 Pro ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=1000#p1000"><![CDATA[
Classic Shell uses the setting to create its own fonts, which are only used at run-time and not stored anywhere.<br />If there is any lasting effect on the system caused by this, that means something has detected the fonts used by the start menu and modified some system settings. This is HIGHLY unlikely. Even if that's the case, it indicates a bug in the OS or the graphic drivers.<br /><br />Here are a few more likely scenarios:<br />   * Some program forced Clear Type by changing the system setting instead of doing it the right way<br />   * The system has run a performance test and adjusted the performance settings based on the hardware speed<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 09, 2013 4:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[see shell]]></name></author>
<updated>2013-02-09T15:51:36-07:00</updated>
<published>2013-02-09T15:51:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=999#p999</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=999#p999"/>
<title type="html"><![CDATA[Re: font smoothing option forces ClearType in Windows 8 Pro ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=999#p999"><![CDATA[
Ok, I checked advanced system settings and discovered edge smoothing was enabled (I had disabled it upon installing W8).  I should have checked that prior to posting, as disabling it [again] fixed File Explorer, et al. However, there's still fuzzy text in some system windows and not others.<br /><br />Somehow, somewhere W8 and/or AMD had a disagreement with Classic Shell, because to reiterate, NO text was fuzzy in any window prior to tinkering with Classic Shell and upon reboot thereafter.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=290">see shell</a> — Sat Feb 09, 2013 3:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-09T14:59:30-07:00</updated>
<published>2013-02-09T14:59:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=996#p996</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=996#p996"/>
<title type="html"><![CDATA[Re: font smoothing option forces ClearType in Windows 8 Pro ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=996#p996"><![CDATA[
The Classic Shell setting only controls the fonts used by the start menu. No other applications are affected.<br />If you are seeing font changes elsewhere in your system, it must be some other setting or software.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 09, 2013 2:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[see shell]]></name></author>
<updated>2013-02-09T14:47:55-07:00</updated>
<published>2013-02-09T14:47:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=995#p995</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=995#p995"/>
<title type="html"><![CDATA[font smoothing option forces ClearType in Windows 8 Pro x64]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=230&amp;p=995#p995"><![CDATA[
After disabling font smoothing in Classic Shell 3.6.5 settings, the start menu text is sharp and SOME Windows text is sharp (dialog menus and buttons, etc.). However, some Windows system text is now fuzzy (i.e., as if ClearType were on, even though I turned it off via W8 display settings -- this includes dialog box text).<br /><br />I tried the following to restore text to its former sharpness across all of Window 8, to no avail:<br />1. toggled smoothing settings in Classic Shell<br />2. toggled ClearType in W8<br />3. uninstalled Classic Shell, rebooted then tried toggling ClearType and tuning<br />4. verified ClearType is off via regedit<br />5. tried AMD driver &quot;fixes&quot; (e.g., verified morph filtering is off)<br /><br />I AM able to sharpen text in Firefox, et al, by changing the programs' own settings and those settings hold.<br />However, fuzzy text remains in other programs, including File Explorer, for example.<br /><br />Since all my text was sharp across W8 until I disabled font smoothing in Classic Shell, and now ClearType is apparently stuck ON, and uninstalling Classic Shell doesn't fix it, I assume there is a reg entry (or more) which need to be changed back to normal (pre Classic Shell). Since Classic Shell can't do this on its own and since uninstalling it doesn't work, I consider this a bug.<br /><br />Forced fuzzy text on my CRT is most annoying and causes eyestrain. What reg entries do I need to change to restore sharp text? If you don't get back with a fix soon, I fear I'm faced with a refresh (if that will even work).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=290">see shell</a> — Sat Feb 09, 2013 2:47 pm</p><hr />
]]></content>
</entry>
</feed>