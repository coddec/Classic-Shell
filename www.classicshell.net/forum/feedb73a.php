<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=2743" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-06-14T00:38:58-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=2743</id>
<entry>
<author><name><![CDATA[jacoch]]></name></author>
<updated>2014-06-14T00:38:58-07:00</updated>
<published>2014-06-14T00:38:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13353#p13353</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13353#p13353"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13353#p13353"><![CDATA[
I'm on Win 8.1. But no need to copy the profile. If I use a local profile, the same delay appears. I can reproduce it each time just by quitting Classic Shell and reopen it. The first time it opens, the delay appears. I've created a dump. Hope it can help find the culprit: <!-- m --><a class="postlink" href="https://dl.dropboxusercontent.com/u/2573638/Procdump.zip">https://dl.dropboxusercontent.com/u/257 ... ocdump.zip</a><!-- m -->.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3872">jacoch</a> — Sat Jun 14, 2014 12:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gkarasik]]></name></author>
<updated>2014-06-13T16:30:44-07:00</updated>
<published>2014-06-13T16:30:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13342#p13342</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13342#p13342"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13342#p13342"><![CDATA[
<div class="quotetitle">jacoch wrote:</div><div class="quotecontent"><br /><div class="quotetitle">gkarasik wrote:</div><div class="quotecontent"> <br />It would be useful to me to compare notes: When you are off the domain, are you logging in with a local-machine profile or with the domain profile? <br />Also, my delay comes back if I've been away from the workstation for several minutes. Does your delay return after some minutes when the workstation is idle? <br />GaryK<br /></div> <br /><br />Sorry for the delay. Was away for a few days. When I'm off the domain, I use my domain profile to keep all my settings. Same result if I'm away from workstation for some time, the delay comes back. I have the feeling that Classic Shell is waiting for the system to finish a task, as I can see the same delay when pressing Ctrl-Alt-Del to login. There should be some DNS timeout or something like this. But why does Classic Shell do such call as I don't have any shortcut pointing to the domain? I'll do a dump asap.</div> <br />  <br />If you've said, I missed it--is this Win 7? <br />  <br />There's a free utility, Default Profile (<a href="http://www.forensit.com/support-downloads.html#DefProf" class="postlink">http://www.forensit.com/support-downloads.html#DefProf</a>), from Forensit, that will create a Default Profile that allows you to duplicate settings. You set up a profile (call it &quot;StandardProf&quot;) the way you want it, then you run &quot;DefProf StandardProf.&quot; The next time you logon as someone who hasn't before logged on, it will create the new profile with the settings from StandareProf. The point being that you could then have a local-machine profile with the same settings as your domain profile. I'm just wondering if the delay would still be there. The machine I'm having the problem with is a member of a workgroup, not a domain. When the same machine is joined to a domain, the problem goes away.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3863">gkarasik</a> — Fri Jun 13, 2014 4:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jacoch]]></name></author>
<updated>2014-06-13T15:40:59-07:00</updated>
<published>2014-06-13T15:40:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13341#p13341</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13341#p13341"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13341#p13341"><![CDATA[
<div class="quotetitle">gkarasik wrote:</div><div class="quotecontent"><br />It would be useful to me to compare notes: When you are off the domain, are you logging in with a local-machine profile or with the domain profile? <br />Also, my delay comes back if I've been away from the workstation for several minutes. Does your delay return after some minutes when the workstation is idle? <br />GaryK<br /></div><br /><br />Sorry for the delay. Was away for a few days. When I'm off the domain, I use my domain profile to keep all my settings. Same result if I'm away from workstation for some time, the delay comes back. I have the feeling that Classic Shell is waiting for the system to finish a task, as I can see the same delay when pressing Ctrl-Alt-Del to login. There should be some DNS timeout or something like this. But why does Classic Shell do such call as I don't have any shortcut pointing to the domain? I'll do a dump asap.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3872">jacoch</a> — Fri Jun 13, 2014 3:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gkarasik]]></name></author>
<updated>2014-06-06T08:28:24-07:00</updated>
<published>2014-06-06T08:28:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13229#p13229</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13229#p13229"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13229#p13229"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />I don't know how Windows stores the locations of all system folders. Some are in the registry (user files, pictures) but others may be stored in some system files. <br />In the next version I will try a different approach to determine the locations of the system folders, which may or may not fix your problem.<br /></div> <br /><br /><br />I look forward to that, and it's kind of you, particularly because I don't believe the problem lies in your software but rather in Window's leaving some residual record (maybe in AD?) of the DC in my system after the workstation's been pulled from the domain. <br /><br />One further observation: I have a small home network and so can't have multiple machines with the same name. If the workstation's machine name is changed from TSServer but if I put a line identifying TSServer and the workstation's IP address in the LMHosts file, there is no delay. Of course, this screws up the workstation's network browsing, so it's not a good workaround, but I do think it's interesting. <br /><br />GaryK<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3863">gkarasik</a> — Fri Jun 06, 2014 8:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-06T07:57:36-07:00</updated>
<published>2014-06-06T07:57:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13228#p13228</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13228#p13228"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13228#p13228"><![CDATA[
I don't know how Windows stores the locations of all system folders. Some are in the registry (user files, pictures) but others may be stored in some system files.<br />In the next version I will try a different approach to determine the locations of the system folders, which may or may not fix your problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Jun 06, 2014 7:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gkarasik]]></name></author>
<updated>2014-06-05T18:49:12-07:00</updated>
<published>2014-06-05T18:49:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13216#p13216</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13216#p13216"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13216#p13216"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />According to the dump file, the start menu is trying to figure out if the current folder is one of the system folders. It is likely that the system is trying to find the location of all such folders (start menu, control panel, user documents, etc.) before it can tell if mine is one of them. Search in the registry for \\TSServer and you may find what is tripping the system.<br /></div> <br /><br />Here's an intesting bit of information: According to the dump, Explorer is looking for the former domain controller [url=file://\\TSServer]\\TSServer[/url]. I renamed the workstation TSServer, and the delay has gone away. So clearly the workstation is somewhere e neme TSServer, but I can't figure out where. It's not in the registry, and I've cleared the ARP cache with no results. I don't know where else to look. <br /><br />This is unsatisfactory as a long-term workaround because the server is named TSServer, and the workstation has to VPN to it and map drives to it. <br /><br />GaryK<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3863">gkarasik</a> — Thu Jun 05, 2014 6:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gkarasik]]></name></author>
<updated>2014-06-05T07:52:14-07:00</updated>
<published>2014-06-05T07:52:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13210#p13210</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13210#p13210"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13210#p13210"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />According to the dump file, the start menu is trying to figure out if the current folder is one of the system folders. It is likely that the system is trying to find the location of all such folders (start menu, control panel, user documents, etc.) before it can tell if mine is one of them. Search in the registry for \\TSServer and you may find what is tripping the system.<br /></div> <br /><br />That's the first thing I tried. I found a couple of references to [url=file://\\TSServer]\\TSServer[/url] and removed them. Didn't affect the delay.  <br />  <br />GaryK<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3863">gkarasik</a> — Thu Jun 05, 2014 7:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-05T07:44:08-07:00</updated>
<published>2014-06-05T07:44:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13209#p13209</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13209#p13209"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13209#p13209"><![CDATA[
According to the dump file, the start menu is trying to figure out if the current folder is one of the system folders. It is likely that the system is trying to find the location of all such folders (start menu, control panel, user documents, etc.) before it can tell if mine is one of them. Search in the registry for \\TSServer and you may find what is tripping the system.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Jun 05, 2014 7:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gkarasik]]></name></author>
<updated>2014-06-05T07:26:11-07:00</updated>
<published>2014-06-05T07:26:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13208#p13208</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13208#p13208"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13208#p13208"><![CDATA[
<div class="quotetitle">gkarasik wrote:</div><div class="quotecontent"><br />First, I think the problem's on my end, not with Classic Shell, so I appreciate your giving up your time to think about it. What I'm saying is that there are no shortcuts (nor mapped drives) that access this path. There were once; this workstation was once part of a domain that accessed \\TSServer\Users, but it was removed from that domain. It is now part of a workgroup. I'm thinking that there's some kind of network caching, and I have to figure out how to clear that. <br /><br />GaryK<br /></div> <br /><br />  <br />FYI, I deleted all the shortcuts in the Start Menu, and the delay is still there. Also, there's no delay with the native Win7 start menu, nor is there a delay with other start-menu replacements. <br />  <br />I still believe the cause of this is not Classic Shell but something residual in the system leftover from when the workstation was a member of the domain, but I can't isolate that. I've tried deleting the ARP cache both using arp.exe and netsh, but the delay is still present. I can shorten the delay (10-12 seconds instead of 30) if I disable LMHosts lookup in the WINS tab of the local adapter. <br />  <br />GaryK<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3863">gkarasik</a> — Thu Jun 05, 2014 7:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-06-05T01:04:49-07:00</updated>
<published>2014-06-05T01:04:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13194#p13194</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13194#p13194"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13194#p13194"><![CDATA[
<div class="quotetitle">jacoch wrote:</div><div class="quotecontent"><br />So I'm sorry to let you know that I have the exact same problem. My workstation is part of a domain. The menu opens fine when I'm connected to the network. When I'm on the road, I have a huge delay the first time the menu opens. I have looked at the log and no shortcut seems to point to my network. I'm not sure what the first number means in your log, but if it's the time, I have the delay right at the beginning:<br /><br />0: version=603, PID=636, TID=5356, LID=6<br />15140: ItemOptions[0]=3<br />15140: ItemOptions[1]=3<br />15140: ItemOptions[2]=3<br />15140: ItemOptions[3]=3<br /><br />Could another dump be useful to you?<br />Jacques<br /></div><br /><br />Yes please capture a dump.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jun 05, 2014 1:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gkarasik]]></name></author>
<updated>2014-06-04T14:43:43-07:00</updated>
<published>2014-06-04T14:43:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13186#p13186</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13186#p13186"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13186#p13186"><![CDATA[
<div class="quotetitle">jacoch wrote:</div><div class="quotecontent"><br />Hi. First of all, as it's my first post, many thanks for your useful utility. <br /><br />So I'm sorry to let you know that I have the exact same problem. My workstation is part of a domain. The menu opens fine when I'm connected to the network. When I'm on the road, I have a huge delay the first time the menu opens. I have looked at the log and no shortcut seems to point to my network. I'm not sure what the first number means in your log, but if it's the time, I have the delay right at the beginning: <br /><br />0: version=603, PID=636, TID=5356, LID=6 <br />15140: ItemOptions[0]=3 <br />15140: ItemOptions[1]=3 <br />15140: ItemOptions[2]=3 <br />15140: ItemOptions[3]=3 <br /><br />Could another dump be useful to you? <br />Jacques<br /></div>  <br />  <br />It would be useful to me to compare notes: When you are off the domain, are you logging in with a local-machine profile or with the domain profile? <br />  <br />Also, my delay comes back if I've been away from the workstation for several minutes. Does your delay return after some minutes when the workstation is idle? <br />  <br />GaryK<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3863">gkarasik</a> — Wed Jun 04, 2014 2:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jacoch]]></name></author>
<updated>2014-06-04T12:28:58-07:00</updated>
<published>2014-06-04T12:28:58-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13185#p13185</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13185#p13185"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13185#p13185"><![CDATA[
Hi. First of all, as it's my first post, many thanks for your useful utility.<br /><br />So I'm sorry to let you know that I have the exact same problem. My workstation is part of a domain. The menu opens fine when I'm connected to the network. When I'm on the road, I have a huge delay the first time the menu opens. I have looked at the log and no shortcut seems to point to my network. I'm not sure what the first number means in your log, but if it's the time, I have the delay right at the beginning:<br /><br />  0: version=603, PID=636, TID=5356, LID=6<br />   15140: ItemOptions[0]=3<br />   15140: ItemOptions[1]=3<br />   15140: ItemOptions[2]=3<br />   15140: ItemOptions[3]=3<br /><br />Could another dump be useful to you?<br />Jacques<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3872">jacoch</a> — Wed Jun 04, 2014 12:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gkarasik]]></name></author>
<updated>2014-06-04T08:07:37-07:00</updated>
<published>2014-06-04T08:07:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13182#p13182</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13182#p13182"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13182#p13182"><![CDATA[
First, I think the problem's on my end, not with Classic Shell, so I appreciate your giving up your time to think about it. What I'm saying is that there are no shortcuts (nor mapped drives) that access this path. There were once; this workstation was once part of a domain that accessed \\TSServer\Users, but it was removed from that domain. It is now part of a workgroup. I'm thinking that there's some kind of network caching, and I have to figure out how to clear that.<br /><br />GaryK<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3863">gkarasik</a> — Wed Jun 04, 2014 8:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-06-04T07:58:59-07:00</updated>
<published>2014-06-04T07:58:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13181#p13181</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13181#p13181"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13181#p13181"><![CDATA[
Are you saying  that the path is invalid? If so you need to remove all shortcuts that use it, otherwise they will block until the network times out.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jun 04, 2014 7:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gkarasik]]></name></author>
<updated>2014-06-04T06:45:48-07:00</updated>
<published>2014-06-04T06:45:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13179#p13179</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13179#p13179"/>
<title type="html"><![CDATA[Re: Opening delay]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2743&amp;p=13179#p13179"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Looks like it is trying to resolve a network path, and that takes a long time (maybe because the path is invalid or inaccessible). Does \\TSServer\Users mean anything to you? Maybe you have a link to a network resource in your start menu, and at that time it is either disconnected or you don't have permissions to access it.<br /></div> <br />Yes, \\TSServer\Users is the domain Users directory, but it is no longer mapped anywhere. <br /><br />GaryK<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=3863">gkarasik</a> — Wed Jun 04, 2014 6:45 am</p><hr />
]]></content>
</entry>
</feed>