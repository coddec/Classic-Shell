<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=5344" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-11-09T20:31:00-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=5344</id>
<entry>
<author><name><![CDATA[ZeroX4]]></name></author>
<updated>2015-11-09T20:31:00-07:00</updated>
<published>2015-11-09T20:31:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23376#p23376</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23376#p23376"/>
<title type="html"><![CDATA[Re: semi-portable classic explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23376#p23376"><![CDATA[
ow main gotz<br /><br />this is even better than i asked for<br /><br />i was able to create bat file which not only make classic explorer work right away<br />but also made it load my settings with info u provided<br /><br />in the end all i needed is to place this in .bat file <br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">regsvr32 /S ClassicExplorer32.dll<br />regsvr32 /S ClassicExplorer64.dll<br />ClassicExplorerSettings.exe -xml &quot;Explorer Settings.xml&quot;<br />exit</div><br /><br />mow i can install classic explorer and start menu with just 2 mouse clicks<br /><br />thanks allot <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11958">ZeroX4</a> — Mon Nov 09, 2015 8:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ZeroX4]]></name></author>
<updated>2015-11-09T18:54:21-07:00</updated>
<published>2015-11-09T18:54:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23373#p23373</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23373#p23373"/>
<title type="html"><![CDATA[Re: semi-portable classic explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23373#p23373"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br /><div class="quotetitle">ZeroX4 wrote:</div><div class="quotecontent">then i could create self extracting archive with that files which would extract them to my system and add option for reg files to auto-import registry keys so they would integrate with my registry<br /></div><br />Basically you are describing an installer <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Here's how you can run the installer in automated mode: <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#install_commands">http://www.classicshell.net/faq/#install_commands</a><!-- m --><br /><br />If you insist on doing this manually, you can run the commands &quot;regsvr32 ClassicExplorer32.dll&quot; and &quot;regsvr32 ClassicExplorer64.dll&quot; from admin command prompt. They will register the two DLLs in the system.</div><br /><br />well believe or not its not that simple<br /><br /><br />its not like i want to bypass installer or im to lazy to use it<br /><br />its more like my brain is already so damaged from games and cartoons that it dont function properly <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><br /><br />but in short of it i got tons of other programs and waisting time on remembering what to click and what not to click while installing any program or app is impossible to me + always there comes after installation configuration that need to be done <br /><br />and i just cant remember how i configured all programs before i reinstalled windows and configure them exactly the same and so i need to waist time on figuring that out<br /><br />so in the end i try as much as i can to portablize every program i can <br /><br />so far i portable or semi-portable this much stuff<br /><img src="http://i.imgur.com/ekjxVdL.png" alt="" /><br /><br />and trust me it really saves allot of time <br /><br />so i gonna check ur solution and thanks for ur time and ur help <img src="http://www.classicshell.net/forum/images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11958">ZeroX4</a> — Mon Nov 09, 2015 6:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-11-08T22:58:26-07:00</updated>
<published>2015-11-08T22:58:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23365#p23365</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23365#p23365"/>
<title type="html"><![CDATA[Re: semi-portable classic explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23365#p23365"><![CDATA[
<div class="quotetitle">ZeroX4 wrote:</div><div class="quotecontent"><br />then i could create self extracting archive with that files which would extract them to my system and add option for reg files to auto-import registry keys so they would integrate with my registry<br /></div><br />Basically you are describing an installer <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Here's how you can run the installer in automated mode: <!-- m --><a class="postlink" href="http://www.classicshell.net/faq/#install_commands">http://www.classicshell.net/faq/#install_commands</a><!-- m --><br /><br />If you insist on doing this manually, you can run the commands &quot;regsvr32 ClassicExplorer32.dll&quot; and &quot;regsvr32 ClassicExplorer64.dll&quot; from admin command prompt. They will register the two DLLs in the system.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Nov 08, 2015 10:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ZeroX4]]></name></author>
<updated>2015-11-08T22:46:12-07:00</updated>
<published>2015-11-08T22:46:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23364#p23364</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23364#p23364"/>
<title type="html"><![CDATA[Re: semi-portable classic explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23364#p23364"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />It is not possible. Shell extensions must be installed. They don't start themselves. Windows Explorer looks for them in the registry and loads them.<br /></div><br /><br /><br />if what u say is true then its more than possible to do what i want<br /><br />i would only  need to know which files need to be put where<br />and which keys from registry i need to export<br /><br />then i could create self extracting archive with that files which would extract them to my system and add option for reg files to auto-import registry keys so they would integrate with my registry<br /><br />so i only ask does any 1 know which files and which registry keys?<br /><br />dont get me wrong i dont want portable version<br /><br />i just need to portablize installation process cause that folder would just stay in d:\Programs\Classic Shell<br /><br />i just ask for which files and where<br />and which registry keys<br /><br />thats all i ask for<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11958">ZeroX4</a> — Sun Nov 08, 2015 10:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-11-08T10:53:59-07:00</updated>
<published>2015-11-08T10:53:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23362#p23362</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23362#p23362"/>
<title type="html"><![CDATA[Re: semi-portable classic explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23362#p23362"><![CDATA[
It is not possible. Shell extensions must be installed. They don't start themselves. Windows Explorer looks for them in the registry and loads them.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Nov 08, 2015 10:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ZeroX4]]></name></author>
<updated>2015-11-08T01:46:11-07:00</updated>
<published>2015-11-08T01:46:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23357#p23357</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23357#p23357"/>
<title type="html"><![CDATA[semi-portable classic explorer]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5344&amp;p=23357#p23357"><![CDATA[
well i dont need it portable and not all features just UP folder button<br /><br />so you guys can understand what i need lets put it this way<br /><br />i got 2 physical HDD's<br /><br />1 for windows and 2nd for all data<br /><br />i dont touch 2nd hdd with data<br />i just reinstall windows on 1st hdd<br /><br />so its kinda important to me to have all programs as much portable as it can be so i dont waist time on installing and configuring software again and again after every reinstall<br /><br />im able to add classic shell start menu.exe to startup and it lunch just fine <br />at 1st launch i just need to load my settings from .xml and that is perfectly fine with me and suits all my needs<br /><br />problem is classic start explorer <br />i just wanna from it that UP folder button all other functions dont really matter to me<br /><br />but problem is that in classic shell folder after installation i got only .exe for classic shell start menu settings for it and for classic explorer but there is no .exe file for classic explorer i could put in startup and so load settings for it from .xml<br /><br />i just need that UP folder  button and that would be perfectly enough for me <br /><br />i just need someone to tell me how to autostart or where to launch classic shell explorer<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=11958">ZeroX4</a> — Sun Nov 08, 2015 1:46 am</p><hr />
]]></content>
</entry>
</feed>