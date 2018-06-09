<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=6351" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-12T15:33:50-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=6351</id>
<entry>
<author><name><![CDATA[Brian Westlake]]></name></author>
<updated>2016-08-12T15:33:50-07:00</updated>
<published>2016-08-12T15:33:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=28558#p28558</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=28558#p28558"/>
<title type="html"><![CDATA[Re: -&gt; Start Menu -&gt; Programs:&quot;Sort By Name&quot; recursion]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=28558#p28558"><![CDATA[
Dear Mr Gaurav,<br /><br />Thank you very much for the information!<br /><br />Best regards,<br /><br />Brian Westlake<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14199">Brian Westlake</a> — Fri Aug 12, 2016 3:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-03T11:35:14-07:00</updated>
<published>2016-08-03T11:35:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=28090#p28090</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=28090#p28090"/>
<title type="html"><![CDATA[Re: -&gt; Start Menu -&gt; Programs:&quot;Sort By Name&quot; recursion]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=28090#p28090"><![CDATA[
A) Deleting the Registry key: HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order is equivalent to doing a recursive sort on all folders inside All Programs. Or rather it will sort by name every folder inside the Start Menu (by not storing the sort order for any of them). You can automate it using the reg.exe tool.<br /><br />B) The compact Classic Shell context menu can only be shown by All Programs, not for submenus inside it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Aug 03, 2016 11:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Brian Westlake]]></name></author>
<updated>2016-07-19T17:28:40-07:00</updated>
<published>2016-07-19T17:28:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=27670#p27670</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=27670#p27670"/>
<title type="html"><![CDATA[-&gt; Start Menu -&gt; Programs:&quot;Sort By Name&quot; recursion]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6351&amp;p=27670#p27670"><![CDATA[
Dear Classic Shell developers,<br /><br />Thank you very much for the continued development this sanity preservation tool in the windows wonderlands.<br /><br />I apologise if this feature request should be relegated to RTFM.<br /><br />With regards to &quot;sort by name&quot; (SBN), house-keeping in the &quot;-&gt; Start Menu -&gt; Programs&quot; (SMP) folder-tree, I have observed the possibility of a feature refinement.<br /><br />In the inevitable evolution and devolution of a computer system, applications are installed and de-installed, and updated, and it is not uncommon to sort applications into sub-folder categories, in the SMP, for aid in navigation, any new entries into such sub-folders are appended chronologically, rather than aphabetically.<br /><br />Sorting the &quot;top level&quot; of the SMP is easy, goto the &quot;programs&quot; let it cascade open, right click anywhere, either on white space, or a sub-folder, and you are presented with a very short context menu with the SBN function available, and the &quot;programs&quot; level is easily sorted alphabetically.<br /><br />However, in the case of a category sub-folder, &quot;-&gt; start menu -&gt; programs -&gt; category&quot;, sorting that alphabetically is much more problematic.<br /><br />1. If the category sub-folder is multiple column (relative to the screen), then there is ample &quot;launching space&quot; available to right-click, get up a compact context menu and then SBN.<br /><br />2. If the category sub-folder menu is shorter and single column,  by positioning the mouse &quot;just so&quot; in the cascaded sub-folder, scrolling all the way down to the SBN item,  in an extended context menu (usually right at the bottom!) and then all the sub-folder contents will be sorted alphabetically - there is no easily found launching space from which to access a very simple context menu.<br /><br />So some possible feature refinements:<br /><br />A. A context menu option to &quot;sort by name&quot; recursively, all sub-folders from any sub-folder node, rather than having to SBN in each and every sub-folder. In which case doing a SBN from the &quot;programs&quot; level should sort everything alphabetically.<br /><br />B. Options to enable and disable slim &quot;landing spaces&quot; (for the mouse pointer) either at the top or the bottom (both, one, neither) of  the classic shell menu for a sub-folder in the SMP menu tree, so that the compact Classic Shell context menu for that sub-folder in the SMP can be accessed easily.<br /><br />Features A. does not make feature B. redundant.<br /><br />Hopefully I have described the problem clearly.<br /><br />Thank you for your attention.<br /><br />Best regards,<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14199">Brian Westlake</a> — Tue Jul 19, 2016 5:28 pm</p><hr />
]]></content>
</entry>
</feed>