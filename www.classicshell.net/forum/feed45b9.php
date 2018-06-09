<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4853" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-08-03T04:49:48-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4853</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-08-03T04:49:48-07:00</updated>
<published>2015-08-03T04:49:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20627#p20627</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20627#p20627"/>
<title type="html"><![CDATA[Re: Menu Spacing in Classic Start Menu 4.2.3 on Win 10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20627#p20627"><![CDATA[
@Archway, the spacing is small but there is an advantage to it that if you enable all the items, they all can fit on the screen even on smaller displays.<br /><br />But if you want to increase the spacing here are some instructions to make it simple:<br /><br />You need to edit whichever skin you use in Resource Hacker. Windows 7 style skins have the extension*.skin7, Classic styles have it *.skin. Copy the skin somewhere else from C:\Program Files\Classic Shell\Skins, rename it to something else and open it in Resource Hacker. Find/locate the property Ivo mentioned called &quot;Main2_Text_padding&quot;. Change the 2nd and 4th values of &quot;Main2_text_padding&quot; parameter under that section to some higher value. Compile the script, save changes and copy the renamed skin back to C:\Program Files\Classic Shell\Skins. Switch to the modified skin from Settings -&gt; Skins tab. Now you will have the right side with larger spacing.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Aug 03, 2015 4:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-08-02T08:49:53-07:00</updated>
<published>2015-08-02T08:49:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20581#p20581</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20581#p20581"/>
<title type="html"><![CDATA[Re: Menu Spacing in Classic Start Menu 4.2.3 on Win 10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20581#p20581"><![CDATA[
There is no setting, but you can edit the skin the increase the padding. Here's how: <!-- m --><a class="postlink" href="http://www.classicshell.net/tutorials/skintutorial.html">http://www.classicshell.net/tutorials/skintutorial.html</a><!-- m --><br />The property you need to change is Main2_text_padding<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Aug 02, 2015 8:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Archway]]></name></author>
<updated>2015-08-02T01:31:38-07:00</updated>
<published>2015-08-02T01:31:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20570#p20570</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20570#p20570"/>
<title type="html"><![CDATA[Menu Spacing in Classic Start Menu 4.2.3 on Win 10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4853&amp;p=20570#p20570"><![CDATA[
Just moved to Win 10 from Win 7, helped by Classic Shell to overcome the poor start menu in Win 10 (many thanks...).<br /><br />I have recreated the Start Menu I had in Win 7 except you will see that the spacing of the menu items (right hand column) is all wrong - they are all squashed at the top whereas in Win 7 they would have been spaced out equally down the whole of the right column.<br /><br />Have I overlooked a setting for specifying this? If not, could I propose adjustment of this as a development request?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=10953">Archway</a> — Sun Aug 02, 2015 1:31 am</p><hr />
]]></content>
</entry>
</feed>