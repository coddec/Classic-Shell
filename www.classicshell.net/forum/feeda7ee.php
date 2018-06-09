<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=1580" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-10-27T20:48:46-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=1580</id>
<entry>
<author><name><![CDATA[Weboh]]></name></author>
<updated>2016-10-27T20:48:46-07:00</updated>
<published>2016-10-27T20:48:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1580&amp;p=30105#p30105</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1580&amp;p=30105#p30105"/>
<title type="html"><![CDATA[Re: What to do when Explorer features of ClassicShell don't]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1580&amp;p=30105#p30105"><![CDATA[
Also note: Not all features work in Windows 8 and up. The following do not:<br /><ul><li>The replacement copy dialog</li><li>The up button.<br /><br />Windows 10 only:</li><li>The&quot;Windows XP Classic Style&quot; option for the tree (that adds the dotted lines trailing each folder) can't and won't work with Windows 10.</li></ul><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3392">Weboh</a> — Thu Oct 27, 2016 8:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-10-27T23:17:54-07:00</updated>
<published>2013-10-27T23:17:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1580&amp;p=8101#p8101</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1580&amp;p=8101#p8101"/>
<title type="html"><![CDATA[What to do when Explorer features of ClassicShell don't work]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1580&amp;p=8101#p8101"><![CDATA[
<strong>What to do when Classic Explorer doesn't work?</strong><br /><ul><li>Open a new Windows Explorer window (Win key+E)</li><li><strong>For Windows 7:</strong> Press Alt+V to open the View menu. Open the &quot;Toolbars&quot; sub-menu and select &quot;Classic Explorer Bar&quot;. Keep in mind that the menu will always be displayed as long as the toolbar is visible.</li><li><strong>For Windows 8/8.1 and Windows 10:</strong> Press Alt+V to open the View tab of the ribbon. Click on the down arrow in the &quot;Options&quot; section. Select &quot;Classic Explorer Bar&quot;.</li></ul> If the &quot;Classic Explorer Bar&quot; option is not available or is grayed out, there are 2 things to check:<br /><ol style="list-style-type: decimal"><li>Run Internet Explorer and go to <strong>Tools -&gt; Manage Add-ons</strong>. Find &quot;Classic Explorer Bar&quot; and &quot;ExplorerBHO Class&quot; and make sure they are both Enabled.<br /><img src="http://classicshell.net/images/manage_addons.png" alt="" /></li><li>Open the <strong>Internet Options</strong> and go to the <strong>Advanced</strong> tab. Find and check the option &quot;Enable third-party browser extensions&quot;. This is usually enabled by default, but may be disabled for server editions of Windows.<br /><img src="http://classicshell.net/images/internet_options.png" alt="" /></li></ol>Why is Internet Explorer involved in all this? The thing is that Windows Explorer and Internet Explorer share the same architecture and the same security settings. Since most settings only affect web browsing, Microsoft has decided to call the whole feature &quot;Internet Options&quot;.<br /><br /><strong>Note:</strong> You may have to repeat the process if you install a new version of Internet Explorer (like IE9, IE10, IE11).<br /><br />Also, due to a bug in Windows, sometimes File Explorer gets confused between addons, especially when there are multiple addons and one of the addons is updated or uninstalled &amp; reinstalled. To fix this, open Registry Editor (Regedit.exe), go to HKEY_CURRENT_USER\Software\Microsoft\Internet Explorer\Toolbar\<strong>ShellBrowser</strong> and delete the <strong>ITBar7Layout</strong> value. Thereafter, Explorer won't get confused which toolbar it enables/disables. After deleting the <strong>ITBar7Layout</strong> value, you must enable the Classic Explorer toolbar once again in Explorer as mentioned above.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Oct 27, 2013 11:17 pm</p><hr />
]]></content>
</entry>
</feed>