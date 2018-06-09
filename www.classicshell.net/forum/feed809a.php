<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7731" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-11T07:35:13-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7731</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-11T07:35:13-07:00</updated>
<published>2017-07-11T07:35:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33263#p33263</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33263#p33263"/>
<title type="html"><![CDATA[Re: Unable to Search PC Settings on Microsoft Surface Pro (2]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33263#p33263"><![CDATA[
Well I've noticed that as Windows 10 upgrades constantly, eventually at some point, the PC Settings search stops working in the Classic Start Menu (something related to Windows Search or indexing breaks in Windows though, not in CSM). I haven't been able to figure out the reason.<br /><br />My Creators Update also suddenly can't find PC Settings via CSM but StartIsBack installed on the same installation (but not active at the same time as CS, can find them). With my Anniversary Update installation, the opposite was true. PC Settings search was broken in StartIsBack but worked in Classic Start Menu. I only activate one of the two Start menus at a time so they don't conflict. Cortana search also has no issues finding PC Settings. But CSM doesn't find them currently. I've tried rebuilding the search index and made sure the PC Settings folder is indexed:<br /><br />C:\Users\&lt;USER FOLDER&gt;\AppData\Local\Packages\windows.immersivecontrolpanel_cw5n1h2txyewy\LocalState\Indexed\Settings\en-US<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jul 11, 2017 7:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jylong_away]]></name></author>
<updated>2017-07-11T03:52:43-07:00</updated>
<published>2017-07-11T03:52:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33256#p33256</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33256#p33256"/>
<title type="html"><![CDATA[Re: Unable to Search PC Settings on Microsoft Surface Pro (2]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33256#p33256"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />I see.<br />Can you find them in Cortana? I think she's using the same search index as the start menu.<br /></div><br /><br />It's quite strange, but Cortana on my Surface Pro also comes up with different (less) search results when looking for things like Wifi Settings, etc.<br /><br />I have included a screencap below of Classic Shell from my Laptop.  I have searched for the work 'Network' as an example, and there is a section that you can see titled 'PC Settings' which contains a few options from the Metro Settings.  The Surface Pro does not have this when searching for the same terms.<br /><br />I wonder if it has something to do with the Cortana search index, but am not sure how to modify this.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21611">jylong_away</a> — Tue Jul 11, 2017 3:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-10T13:55:06-07:00</updated>
<published>2017-07-10T13:55:06-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33249#p33249</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33249#p33249"/>
<title type="html"><![CDATA[Re: Unable to Search PC Settings on Microsoft Surface Pro (2]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33249#p33249"><![CDATA[
I see.<br />Can you find them in Cortana? I think she's using the same search index as the start menu.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 10, 2017 1:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jylong_away]]></name></author>
<updated>2017-07-10T13:41:05-07:00</updated>
<published>2017-07-10T13:41:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33247#p33247</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33247#p33247"/>
<title type="html"><![CDATA[Re: Unable to Search PC Settings on Microsoft Surface Pro (2]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33247#p33247"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />In general there is no such file called &quot;PC Settings&quot;. When your laptop finds it, what does it do when you run it? Where exactly is this file (which folder)?<br /></div><br /><br /><br />Apologies - I should have been clearer. 'PC settings' is basically the category that all the new Windows 10 settings comes under in Classic Shell.  It's not a file or folder in itself.  In fact, the Search Bocxoptions for Classic Shell has the option to include or exclude them in searches. The peoblem with the Surface Pro is that the Settings are excluded from the search even when the option is selected.<br /><br />I do not have access to my home computer at the moment, but will Screen cap what I mean when I get back.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21611">jylong_away</a> — Mon Jul 10, 2017 1:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-07-10T08:24:28-07:00</updated>
<published>2017-07-10T08:24:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33246#p33246</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33246#p33246"/>
<title type="html"><![CDATA[Re: Unable to Search PC Settings on Microsoft Surface Pro (2]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33246#p33246"><![CDATA[
In general there is no such file called &quot;PC Settings&quot;. When your laptop finds it, what does it do when you run it? Where exactly is this file (which folder)?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 10, 2017 8:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jylong_away]]></name></author>
<updated>2017-07-10T07:44:46-07:00</updated>
<published>2017-07-10T07:44:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33243#p33243</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33243#p33243"/>
<title type="html"><![CDATA[Unable to Search PC Settings on Microsoft Surface Pro (2017)]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7731&amp;p=33243#p33243"><![CDATA[
I have two new-ish Windows 10 computers at home.  One is an Asus laptop running Windows 10 Pro (upgraded from Home), and one is a new Surface Pro which came with Win 10 Pro.  Both units have the Creator update, and are up-to-date with the smaller Win10 updates.<br /><br />I've installed Classic Shell on both of these machines (v. 4.3.0), and notice that on the Surface Pro, 'PC settings' do not show up as part of the search results.  I've tried tweaking every setting I can think of (file search is on, indexing is on), and I've even returned to default settings on both machines.  Same thing happens every time - Classic Shell on the laptop gives me 'PC Settings' when I search, but the Surface Pro doesn't.<br /><br />I've read one thread from way back involving a Surface Pro 3, but nothing recent.  Has anyone with a Surface Pro had this problem?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=21611">jylong_away</a> — Mon Jul 10, 2017 7:44 am</p><hr />
]]></content>
</entry>
</feed>