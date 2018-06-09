<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=8071" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-11-24T12:46:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=8071</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-11-24T12:46:32-07:00</updated>
<published>2017-11-24T12:46:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8071&amp;p=34827#p34827</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8071&amp;p=34827#p34827"/>
<title type="html"><![CDATA[Re: Classic Shell&gt; Taskbar&gt; Taskbar color XML settings load ]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8071&amp;p=34827#p34827"><![CDATA[
There is more to changing the taskbar color than just changing the registry setting. When you edit the color via the settings GUI, some extra work is performed. Looks like when loading XML it doesn't happen. I'll log it as a bug.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Nov 24, 2017 12:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xekon]]></name></author>
<updated>2017-11-04T12:16:22-07:00</updated>
<published>2017-11-04T12:16:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8071&amp;p=34653#p34653</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8071&amp;p=34653#p34653"/>
<title type="html"><![CDATA[Classic Shell&gt; Taskbar&gt; Taskbar color XML settings load bug]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8071&amp;p=34653#p34653"><![CDATA[
I have integrated the Classic Shell installer using NTlite into my windows 8.1 iso, using:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">/qn ADDLOCAL=ClassicStartMenu START_MENU_FOLDER=0</div><br /><br />Once windows is finished installing, I click the start button, the initial classic shell screen pops up to have you pick your style, I click the backup button and load my previously saved settings from XML file.<br /><br />All of the settings load correctly, Except the taskbar color setting does not take effect until after I reboot.<br /><br />If I modify the taskbar color, and then modify it back, it will take place immediately without a reboot.<br /><br />So it almost seems as though on a fresh install of windows, when you load the settings from XML, the taskbar color should be applied twice to overcome this bug.<br /><br />I do not know if Classic Shell is still open source, if it is I would be happy to take a look at this particular problem and provide a pull request with a fix.<br /><br />EDIT: I ended up loading my settings via registry, prior to installing classicshell, that worked perfectly <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br />used the info in these threads:<br /><!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewtopic.php?f=7&amp;t=8048">viewtopic.php?f=7&amp;t=8048</a><!-- l --><br /><!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewtopic.php?f=7&amp;t=1417">viewtopic.php?f=7&amp;t=1417</a><!-- l --><br /><!-- l --><a class="postlink-local" href="http://classicshell.net/forum/viewtopic.php?f=7&amp;t=1847">viewtopic.php?f=7&amp;t=1847</a><!-- l --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=26294">xekon</a> — Sat Nov 04, 2017 12:16 pm</p><hr />
]]></content>
</entry>
</feed>