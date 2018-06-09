<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=8082" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-11-24T12:34:58-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=8082</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-11-24T12:34:58-07:00</updated>
<published>2017-11-24T12:34:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8082&amp;p=34821#p34821</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8082&amp;p=34821#p34821"/>
<title type="html"><![CDATA[Re: Windows 10 Updates - Classic shell needs to configure it]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8082&amp;p=34821#p34821"><![CDATA[
The helper DLL does more than just update it's COM registration.<br />It hooks into Explorer in a special way to make it possible for the start menu to launch as soon as you log in, not after 10 seconds (like other auto-start programs).<br />That registration is lost between Windows updates.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Nov 24, 2017 12:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RAY93051]]></name></author>
<updated>2017-11-10T15:36:31-07:00</updated>
<published>2017-11-10T15:36:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8082&amp;p=34682#p34682</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8082&amp;p=34682#p34682"/>
<title type="html"><![CDATA[Windows 10 Updates - Classic shell needs to configure itself]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8082&amp;p=34682#p34682"><![CDATA[
Hey folks,<br /><br />I have quite a few Win 10 machines under administration where the users that are using it do not have Admin rights. When Win 10 1607 updated to 1703 my users got the “Classic shell needs to configure itself for the new OS” dialog but they could not execute it because they didn’t have admin rights. In a test env I found that this will happen again when 1709 lands on these machines.<br /><br />I found this thread in the forums: <a href="http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=5735" class="postlink">http://www.classicshell.net/forum/viewtopic.php?f=7&amp;t=5735</a><br /><br />That suggest:<br />1) In the registry, open HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Run, and find the value &quot;Classic Start Menu&quot;. Replace the &quot;-autorun&quot; parameter with &quot;-startup&quot;. This will stop the upgrading.<br />2) After the upgrade of Windows, run regsvr32 %windir%\System32\StartMenuHelper64.dll (or StartMenuHelper32.dll for 32-bit Windows)<br /><br />This works but I am questioning do I need to re-register the StartMenuHelper64.dll still? (This will be tricky to pull off in my environment) <br /><br />I used the Nirsoft dll registration viewer and noticed that StartMenuHelper64.dll is already registered even after the update to 1703 (which makes sense since if every update causes the system to lose their 3<sup>rd</sup> party dll registrations that would be a nightmare!)<br /><br />So the question is can I get away with simply setting option 1 only from above on my systems? Or is the dll re-registration an absolute requirement? Cause it would be a lot simpler for roll outs where I install Classic Shell and the change the reg key right after and not worry about this.<br /><br />Thanks in advance!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=26621">RAY93051</a> — Fri Nov 10, 2017 3:36 pm</p><hr />
]]></content>
</entry>
</feed>