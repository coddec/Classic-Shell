<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=1699" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-11-25T10:43:33-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=1699</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-11-25T10:43:33-07:00</updated>
<published>2013-11-25T10:43:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9087#p9087</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9087#p9087"/>
<title type="html"><![CDATA[Re: How do I remove &quot;Pin to Start Menu&quot; from RMB context men]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9087#p9087"><![CDATA[
If you use the supraspecies solution above, it will reappear the next time you update Classic Shell.<br />If you use the solution by suixelo listed here: <!-- l --><a class="postlink-local" href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=1746#p9012">viewtopic.php?f=7&amp;t=1746#p9012</a><!-- l --> then it will most likely be permanent.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Nov 25, 2013 10:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Bellzemos]]></name></author>
<updated>2013-11-25T10:09:18-07:00</updated>
<published>2013-11-25T10:09:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9084#p9084</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9084#p9084"/>
<title type="html"><![CDATA[Re: How do I remove &quot;Pin to Start Menu&quot; from RMB context men]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9084#p9084"><![CDATA[
I see. Can someone tell me exactly what to do in regedit to disable the feature from the contex menu in Windows Explorer? Also, is this safe? Can there be problems with Windows, maybe after an update or a Classic Shell update? Thank you!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2025">Bellzemos</a> — Mon Nov 25, 2013 10:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-11-24T17:46:33-07:00</updated>
<published>2013-11-24T17:46:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9072#p9072</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9072#p9072"/>
<title type="html"><![CDATA[Re: How do I remove &quot;Pin to Start Menu&quot; from RMB context men]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9072#p9072"><![CDATA[
No. The context menus are controlled by the registry.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Nov 24, 2013 5:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Bellzemos]]></name></author>
<updated>2013-11-24T16:18:18-07:00</updated>
<published>2013-11-24T16:18:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9071#p9071</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9071#p9071"/>
<title type="html"><![CDATA[Re: How do I remove &quot;Pin to Start Menu&quot; from RMB context men]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=9071#p9071"><![CDATA[
Hello! I would also like to remove that option from the Windows Explorer context menu. Is it possible to do it in another way (without editing the registry)? Thank you!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2025">Bellzemos</a> — Sun Nov 24, 2013 4:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-11-12T13:51:01-07:00</updated>
<published>2013-11-12T13:51:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=8669#p8669</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=8669#p8669"/>
<title type="html"><![CDATA[Re: How do I remove &quot;Pin to Start Menu&quot; from RMB context men]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=8669#p8669"><![CDATA[
HKEY_CLASSES_ROOT\exefile\shellex\ContextMenuHandlers\StartMenuExt<br />HKEY_CLASSES_ROOT\lnkfile\shellex\ContextMenuHandlers\StartMenuExt<br /><br />^ Found it. This is it.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Tue Nov 12, 2013 1:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[supraspecies]]></name></author>
<updated>2013-11-12T13:37:07-07:00</updated>
<published>2013-11-12T13:37:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=8668#p8668</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=8668#p8668"/>
<title type="html"><![CDATA[How do I remove &quot;Pin to Start Menu&quot; from RMB context menu?]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=1699&amp;p=8668#p8668"><![CDATA[
I'm not even using Start Menu pinning, this option is useless to me. How do I remove it from right mouse button context menu? I haven't found references to it in the registry, and I haven't found anything in Classic Shell settings (Classic Explorer included). Don't tell me its impossible to remove...<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=659">supraspecies</a> — Tue Nov 12, 2013 1:37 pm</p><hr />
]]></content>
</entry>
</feed>