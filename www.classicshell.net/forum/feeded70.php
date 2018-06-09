<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=5529" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-09-23T23:56:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=5529</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-09-23T23:56:32-07:00</updated>
<published>2016-09-23T23:56:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=29509#p29509</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=29509#p29509"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=29509#p29509"><![CDATA[
@ej5chfn6, per-monitor DPI scaling should work under the following conditions:<br /><br />- Make sure &quot;Let me choose one scaling level for all my displays&quot; is turned off (Windows 8.1). On Windows 10, it is not required, per-monitor display scaling is always on unless you set a custom DPI for all monitors from the DPI Scaling Control Panel.<br />- In Classic Start Menu Settings, on the Menu Look tab, locate the setting &quot;Override system DPI&quot;, right click it and click &quot;Set default&quot;.<br />- Make sure you are using Classic Shell 4.2.5 or later. It has new support for per-monitor DPI scaling. But only the text and menu elements are scaled independently for each monitor. The icon size depends on the global system DPI.<br /><br />Even in Windows 10 Anniversary Update, Windows or rather GDI has limitations with per-display scaling. Desktop icons for example, do not scale on a per-display basis when you are in &quot;extend&quot; display mode with different scale factors. The icons will remain incorrectly sized on some displays. Microsoft needs to fix it for Explorer.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Sep 23, 2016 11:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ej5chfn6]]></name></author>
<updated>2016-09-23T17:11:33-07:00</updated>
<published>2016-09-23T17:11:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=29502#p29502</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=29502#p29502"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=29502#p29502"><![CDATA[
Was there any progress on this front? I have two screen one at 100% and the other one at 200%. When I'm on the 200% the ClassShell menu is tiny. Overriding the DPI in the settings is not really an option as on the 100% display it is too large. Ideally, ClassicShell should take into account the DPI of the current display and perform properly. If it means having to do operations twice, I think most users will be happy without much performance degradation. Of course, this only applies to setup where the DPI is different between the displays.<br /><br />Thanks,<br />Manu<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15289">ej5chfn6</a> — Fri Sep 23, 2016 5:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2016-01-11T08:53:00-07:00</updated>
<published>2016-01-11T08:53:00-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24485#p24485</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24485#p24485"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24485#p24485"><![CDATA[
I agree that loading in the optimum icons for each display is the best option. Performance is secondary to me - an i7 should be able to draw a few extra icons! And then they should be cached.<br /><br />As it happens though, I've found Windows 10's handling of different density DPI displays to be so appalling across a range of apps, compounded when using mixed DPI screens, that I've decided to disable my high-res laptop display (it's a MacBook Pro) and ONLY power my two external monitors, when both plugged in.<br /><br />This gives me a 1920 x 1080 x 2 x normal DPI, as opposed to that PLUS 3600 x 2000 - but broken-looking applications.<br /><br />I can't tell you how disappointed I am with Microsoft on this one - though it's not totally fair to say this is their fault; developers should have grasped this nettle by now and upgraded their apps as SOME work flawlessly (though many of MS's own do NOT, Excel and Word being two).<br /><br />This has been the final nail in the coffin for me and my &quot;1 laptop / Win &amp; OSX&quot; dream... and strangely, the winner is OSX. Using a MBP under Windows has proved to be much more of a compromise than Apple would have you believe, and it's just going to be easier and cleaner to suffer some of the drawbacks of the Apple OS to get a much better overall experience (on this setup, at least). I'll only use Windows now if I'm doing Flash or Office development - all other web development I think is going to be Mac only.<br /><br />A bit of background for you there anyway <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />Cheers,<br />Dave<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Mon Jan 11, 2016 8:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-12-31T03:09:01-07:00</updated>
<published>2015-12-31T03:09:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24271#p24271</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24271#p24271"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24271#p24271"><![CDATA[
So if having only two icon sizes is fundamental to optimum performance, can it have a setting in a future version where if multiple displays with different DPIs are present, then the Start Menu uses *only* the small icon size for the normal DPI display (for main menu as well as submenu), and for the high DPI display, it uses *only* the large icon size (again for both main menu and submenu)?<br /><br />So essentially it's letting the user choose between different icon sizes per monitor vs the current design - different icon sizes per main menu and submenu? Of course, this edge case behavior would only be activated if multiple displays with a considerable difference in DPIs are present. Or it can be a user-controllable setting &quot;Use the same icon size for main menu and submenus but larger icon size on high DPI displays&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Dec 31, 2015 3:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-12-30T11:45:53-07:00</updated>
<published>2015-12-30T11:45:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24253#p24253</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24253#p24253"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24253#p24253"><![CDATA[
The start menu does not try to scale icons as it displays them. It will only scale them on loading, if the exact size is not available. That scaling may produce fuzzy icons. Once loaded, the size doesn't change.<br />The images are cached in memory and on disk, but only at their requested sizes. That's why changing the size can destroy the performance.<br /><br />Providing higher-res icons may or may not improve the quality. For example if you need 40x40, and you have 48x48, you will get some fuzziness. Adding a 256x256 will not make things better because the menu will still pick 48x48 as the closest size.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Dec 30, 2015 11:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-12-30T11:31:58-07:00</updated>
<published>2015-12-30T11:31:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24252#p24252</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24252#p24252"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24252#p24252"><![CDATA[
Hi Ivo,<br /><br />Thanks for the reply.<br /><br />Currently, that is what I've done; to find a setting that kinda works for both.<br /><br />I get the large and small icons thing (having made a bunch for my Windows 10 theme if you remember) I guess I just don't understand enough about Windows development, or its DPI scaling issues to understand why it might be prohibitively difficult to scale each Start Menu instance's icons separately, relative to the text size.<br /><br />Even on my secondary normal-dpi monitor, running alongside the laptop's primary high-dpi display, the icons look fuzzy compared to my separate, all normal-dpi system.<br /><br />I don't expect this post to change your mind, but I would be interested in knowing a bit more about it if you have time.<br /><br />Also, second question: would adding higher-res icons to the .ico files be a partial solution? Would these be loaded in and scaled in place of the smaller ones?<br /><br />Cheers,<br />Dave<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Wed Dec 30, 2015 11:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-12-29T10:23:52-07:00</updated>
<published>2015-12-29T10:23:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24240#p24240</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24240#p24240"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24240#p24240"><![CDATA[
That's unlikely to happen. Having only two icon sizes - small and large - is pretty fundamental to the architecture of the start menu.<br />You can however tweak the sizes in the Main Menu tab and try to pick a value that works well on both of your monitors.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Dec 29, 2015 10:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-12-29T09:59:02-07:00</updated>
<published>2015-12-29T09:59:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24239#p24239</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24239#p24239"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24239#p24239"><![CDATA[
I have to say, in this case I would prefer consistency over performance.<br /><br />If there was a way this could be offered in a future update, I would be all for it <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Tue Dec 29, 2015 9:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2015-12-29T09:49:54-07:00</updated>
<published>2015-12-29T09:49:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24238#p24238</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24238#p24238"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24238#p24238"><![CDATA[
Loading the icons is one of the more expensive parts of loading the start menu. Loading them in many different sizes will slow down the operation. That's why the per-monitor DPI is ignored for determining the icon sizes.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Dec 29, 2015 9:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-12-29T07:24:29-07:00</updated>
<published>2015-12-29T07:24:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24235#p24235</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24235#p24235"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24235#p24235"><![CDATA[
So having looked at this some more, I'm still getting discrepancies.<br /><br />Setting icon sizes to suit one monitor won't suit the other. <br /><br />Either the icons are too small on the high-DPI monitor, or freakishly large on the normal-DPI monitor.<br /><br />Is there no way to solve this?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Tue Dec 29, 2015 7:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-12-29T05:47:20-07:00</updated>
<published>2015-12-29T05:47:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24234#p24234</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24234#p24234"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24234#p24234"><![CDATA[
Hmm... seems like the tooltip is a Windows thing, as it happens even outside of CS.<br /><br />It's so frustrating! MS really have seemed to have dropped the ball with high DPI displays <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Tue Dec 29, 2015 5:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-12-29T05:41:55-07:00</updated>
<published>2015-12-29T05:41:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24233#p24233</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24233#p24233"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24233#p24233"><![CDATA[
Hi Gaurav,<br /><br />That's helped, certainly, thanks.<br /><br />As you say, the icons on the second display aren't respecting the scale of the monitor, but seem to be taking their lead from the global setting. Can this be fixed?<br /><br />Also, the tooltip text is also much bigger; screenshot attached.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Tue Dec 29, 2015 5:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-12-29T05:20:12-07:00</updated>
<published>2015-12-29T05:20:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24232#p24232</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24232#p24232"/>
<title type="html"><![CDATA[Re: Classic Start Menu scales incorrectly on mixed DPI scree]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24232#p24232"><![CDATA[
Are you using the latest version, Classic Shell 4.2.5 released in November? It has new support for per-monitor DPI scaling. The text and menu elements are scaled independently for each monitor. The icon size depends on the global system DPI. Try it without any compatibility settings like disabling scaling in its Properties.<br /><br />Also, on the Menu Look tab, locate the setting &quot;Override system DPI&quot;, right click it and click &quot;Set default&quot; so its value becomes 0. Then restart the menu and see if it scales correctly on the two separate displays.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Dec 29, 2015 5:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[davestewart]]></name></author>
<updated>2015-12-29T02:52:49-07:00</updated>
<published>2015-12-29T02:52:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24231#p24231</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24231#p24231"/>
<title type="html"><![CDATA[Classic Start Menu scales incorrectly on mixed DPI screens]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=5529&amp;p=24231#p24231"><![CDATA[
I've recently made the move to a high-DPI laptop with a secondary external screen, but unfortunately, Classic Shell exhibits scaling issues when displayed on the secondary monitor.<br /><br />It seems to somehow be taking the primary (high-DPI) settings and looks hugely enlarged.<br /><br />I haven't tried swapping the monitors in Display Settings to see if this has any effect, but I assume that this setup hasn't been considered when developing.<br /><br />I've also set Classic Shell to use &quot;Disable display scaling&quot; in its Application Properties, which brings some of its own issues (the layout in CS Settings is misdrawn to varying degrees in most panels) though seems to solve others.<br /><br />Would be great to at least get confirmation on this, and hopefully a fix at some point.<br /><br />Thanks,<br />Dave<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4261">davestewart</a> — Tue Dec 29, 2015 2:52 am</p><hr />
]]></content>
</entry>
</feed>