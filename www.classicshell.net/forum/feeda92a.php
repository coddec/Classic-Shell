<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=188" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-01-20T02:25:54-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=188</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-01-20T02:25:54-07:00</updated>
<published>2014-01-20T02:25:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=10231#p10231</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=10231#p10231"/>
<title type="html"><![CDATA[Re: Setting column width of main menu has no effect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=10231#p10231"><![CDATA[
There is a new hidden setting added in Classic Shell 4.0.4 to change the All Programs width of the Start Menu in Windows 7 style: HKCU\Software\IvoSoft\ClassicStartMenu\Settings. DWORD value: ProgramsWidth. The value data should be entered in decimals. Delete the value to revert to the default programs width.<br /><br />The same setting is also there in Classic Shell's Group Policy settings: &quot;Programs pane width&quot;.<br /><br />You must exit the Start Menu and start it again from C:\Program Files\Classic Shell\ClassicStartMenu.exe after changing the setting.<br /><br />For the Classic style, the Main menu width is still only an upper limit and the minimum width is determined by how long the names of the items are in the menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jan 20, 2014 2:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jolle]]></name></author>
<updated>2013-02-03T10:14:06-07:00</updated>
<published>2013-02-03T10:14:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=833#p833</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=833#p833"/>
<title type="html"><![CDATA[Re: setting column with of main menu has no effect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=833#p833"><![CDATA[
Oh no! Sorry guys, sometimes I'm a bit slow-witted! <img src="http://www.classicshell.net/forum/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br />Of course I can name it &quot;&amp;Programme&amp;&quot; (the German word), so the trick posted by <strong>GauravK</strong> works fine.<br /> <br />Thanks a lot and keep it up!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=252">Jolle</a> — Sun Feb 03, 2013 10:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jolle]]></name></author>
<updated>2013-02-04T09:23:06-07:00</updated>
<published>2013-02-03T08:14:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=826#p826</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=826#p826"/>
<title type="html"><![CDATA[Re: setting column with of main menu has no effect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=826#p826"><![CDATA[
Yes, I want to set the minimum width. Maybe the trick works, but I'm using the German language pack and the value in LABEL is $Menu.Programs (no ampersand sign there). So I think the spaces have to be inserted in the language DLL, but ... <img src="http://www.classicshell.net/forum/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very Sad" /> <br />Correct?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=252">Jolle</a> — Sun Feb 03, 2013 8:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-02-03T02:05:35-07:00</updated>
<published>2013-02-03T02:05:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=819#p819</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=819#p819"/>
<title type="html"><![CDATA[Re: setting column with of main menu has no effect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=819#p819"><![CDATA[
Do you want to control minimum width or maximum width? As Ivo said, the &quot;Main menu width&quot; controls maximum width, so you can set it as you want to a width beyond which if the program name goes, it will be truncated and shown as ....<br />To set the Minimum width, there is not a setting available but you can use a very easy trick to set it. Go to Customize Start Menu tab in Settings, locate any item in the left column, for instance, &quot;ProgramsMenu&quot;. Double click &quot;ProgramsMenu&quot; and insert as many spaces as you want in its LABEL after the word &quot;&amp;Programs&quot; to increase the width as required, and finally end the LABEL again with an ampersand (&amp;). e.g. if your ProgramsMenu label is: &amp;Programs, change it to: <br /><br />&amp;Programs (multiple spaces) &amp; <br />(varying the space as needed, just making sure it ends with an &amp;). That will make the minimum width fixed. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> Let me know if this helps.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Feb 03, 2013 2:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-02T21:31:58-07:00</updated>
<published>2013-02-02T21:31:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=814#p814</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=814#p814"/>
<title type="html"><![CDATA[Re: setting column with of main menu has no effect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=814#p814"><![CDATA[
Neither. The setting only controls the max limit for the width.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 02, 2013 9:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jolle]]></name></author>
<updated>2013-02-04T09:20:15-07:00</updated>
<published>2013-02-02T20:30:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=813#p813</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=813#p813"/>
<title type="html"><![CDATA[Setting column width of main menu has no effect]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=188&amp;p=813#p813"><![CDATA[
Hi!<br /><br />I would like to fix the column width of main menu, so it is no longer dependent on the names of recently used programs. Therefor I set the column width to 100 (menu look tab), but it has no effect. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /> [I tried also larger values - didn't work either.] I'm using CSM 3.6.5, XP style (2 columns) on Win8 (64bit).<br /><br />Is this a bug or did I do anything wrong?<br /><br />Kind regards<br />Jolle<br />(Germany)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=252">Jolle</a> — Sat Feb 02, 2013 8:30 pm</p><hr />
]]></content>
</entry>
</feed>