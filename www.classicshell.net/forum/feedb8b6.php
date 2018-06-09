<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=3256" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-10-13T09:18:03-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=3256</id>
<entry>
<author><name><![CDATA[nathanlock]]></name></author>
<updated>2014-10-13T09:18:03-07:00</updated>
<published>2014-10-13T09:18:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15255#p15255</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15255#p15255"/>
<title type="html"><![CDATA[Re: Re-directed appdata folder causes classic shell to lock]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15255#p15255"><![CDATA[
Thanks for your reply. <br />I have read that article before, but the decision has already been taken that the pros outweigh the cons, we have a lot of hotdesking going on here. <br />Any way it is a 100mb link - we are not talking a very slow wan connection. <br /><br /><div class="quotetitle">GauravK wrote:</div><div class="quotecontent"><br /><span style="color:#323d4f;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#ececec;">If you have the setting &quot;Pinned Programs folder&quot; set to &quot;Use Pinned folder&quot;, then any shortcuts pinned in the main menu are stored at %appdata%\ClassicShell\Pinned. Try changing this setting to &quot;Use Start Menu folder&quot; and see if the lock ups go away. <span style="color:#000000;"><span style="font-family:Verdana;"><br /></div></span></span></span></span></span> <br />No we dont have that setting set that way, but thanks for the suggestion. <br /><br />Your other point only refers to roaming profiles, we are not using those - they are a whole different ball game of headaches!!! <br /><br />So I just hope that Ivo is able implement a code fix for us. <br /><br />If he still needs a crashdump I will try and get permission from the managers here, but I may not be permitted to do so. <br /><br />Thanks for your help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4612">nathanlock</a> — Mon Oct 13, 2014 9:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-10-13T08:06:16-07:00</updated>
<published>2014-10-13T08:06:16-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15252#p15252</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15252#p15252"/>
<title type="html"><![CDATA[Re: Re-directed appdata folder causes classic shell to lock]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15252#p15252"><![CDATA[
Appdata redirection especially over a WAN is always likely to cause major gotchas. Some applications use AppData constantly. Certain applications will write and read tons of information to that folder. If the folder is not local, then the application performance might degrade. Redirecting AppData should be considered very carefully as there are many caveats and drawbacks. Read this: <a href="http://www.sepago.de/d/helge/2010/05/31/should-appdata-be-redirected-or-left-in-the-user-profile" class="postlink">Should AppData be Redirected or Left in the User Profile?</a>  Instead of redirecting AppData, exclude folders instead: <a href="http://blog.stealthpuppy.com/virtualisation/reduce-logon-times-by-excluding-the-bloat" class="postlink">http://blog.stealthpuppy.com/virtualisation/reduce-logon-times-by-excluding-the-bloat</a><br /><br />Btw in case of Classic Shell, %appdata%\ClassicShell isn't just used for the DataCache.db. If you have the setting &quot;Pinned Programs folder&quot; set to &quot;Use Pinned folder&quot;, then any shortcuts pinned in the main menu are stored at %appdata%\ClassicShell\Pinned. Try changing this setting to &quot;Use Start Menu folder&quot; and see if the lock ups go away. <br /><br />You can also capture a crash dump and slowdown dump as instructed here: <a href="http://www.classicshell.net/forum/viewtopic.php?f=12&amp;t=6" class="postlink">How to capture crash dumps</a> <br /><br />Instead of redirecting Appdata, have you tried/considered Microsoft UE-V?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Oct 13, 2014 8:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nathanlock]]></name></author>
<updated>2014-10-13T02:11:33-07:00</updated>
<published>2014-10-13T02:11:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15250#p15250</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15250#p15250"/>
<title type="html"><![CDATA[Re-directed appdata folder causes classic shell to lock up]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=3256&amp;p=15250#p15250"><![CDATA[
We use group policy folder re-direction with windows 8.1 to re-direct the roaming appdata folder to the network, this works fine on our main site, but on our remote site over the WAN it cause classic shell to lock up frequently and crash &amp; restart.<br /><br />If I turn off appdata folder redirection, we have no further problems.<br /><br />I tried one of your previous suggestions of setting the DataCache.db to read only, but this does not fix it.<br /><br />so a couple of points,<br /><br />surely classic shell settings should be in the roaming appdata folder, <em><strong><span style="color:#333333;"><span style="font-family:Segoe UI semibold, sans-serif, arial;"><span style="background-color:#e5e5e5;">%APPDATA%</span></span></span></strong></em><br />but all temporary files like Datacache etc, should be using %LOCALAPPDATA% appdata\local  ? <br /><br />I cannot deploy Windows 8.1 to our remote site until I have fixed this issue.<br /><br />Is there any chance you could produce a new version with either all temporary files pointing at %LOCALAPPDATA%  <br />or a group policy option to just point all settings at %LOCALAPPDATA% <br /><br />I hope you are able to address this soon, <br />Thank you for such amazing software.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=4612">nathanlock</a> — Mon Oct 13, 2014 2:11 am</p><hr />
]]></content>
</entry>
</feed>