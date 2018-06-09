<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=4722" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2015-06-12T03:51:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=4722</id>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-06-12T03:51:45-07:00</updated>
<published>2015-06-12T03:51:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19831#p19831</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19831#p19831"/>
<title type="html"><![CDATA[Re: What happens if you move the Start Menu folders around]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19831#p19831"><![CDATA[
I was able to hide &quot;Programs / Search&quot; before.  I wonder what happened since then.<br /><br />The way I have the folders now is a good compromise.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Fri Jun 12, 2015 3:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2015-06-11T22:31:33-07:00</updated>
<published>2015-06-11T22:31:33-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19829#p19829</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19829#p19829"/>
<title type="html"><![CDATA[Re: What happens if you move the Start Menu folders around]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19829#p19829"><![CDATA[
Well Microsoft has done a mistake and included the Start Menu folder structure too under DISM and protected it using SFC/Windows File Protection. If you move and later run SFC or DISM, it will try to put it back. So just don't do it or don't expect to have the ability to move built-in folders without Windows considering it &quot;broken&quot;.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Jun 11, 2015 10:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mb1280]]></name></author>
<updated>2015-06-11T20:45:47-07:00</updated>
<published>2015-06-11T20:45:47-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19826#p19826</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19826#p19826"/>
<title type="html"><![CDATA[What happens if you move the Start Menu folders around]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=4722&amp;p=19826#p19826"><![CDATA[
Using Win 8.1 . . . I would like to share my current results on what happens if you move the Windows folders around<br /><br />* * * * * * * * * * * * * * * * * * * * * * * * * * * * * *<br /><br />Put the &quot;Windows 10 Technical Preview&quot; in Windows Accessories<br /><br />The Start Screen . . . It's ok for it to stay where it is<br />If you try to delete it, or move it from the &quot;User&quot; account to &quot;All,&quot; it immediately puts itself back under &quot;User&quot;<br /><br />Administrative Tools . . . Security won't let you move it to a folder<br /><br />I tried moving these to a folder - but DISM partially restores them:<br />Windows Accessories<br />Windows Ease of Access<br />Windows System<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />Hide these using: Properties / General / [check] Hidden<br /><br />Documents . . . why doesn't CS do it? it's checked<br />Pictures . . . why doesn't CS do it? it's checked<br /><br />Maintenance folder . . . I thought it wouldn't let me hide this, even after a Restart,<br />. . . but I see that you have to Hide it under both &quot;Open All Users&quot; and &quot;Open&quot;<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />Search . . . It won't let me Hide this, it's greyed out<br />. . . Why could I hide this before, but not now?<br />. . . Even if you go under the Security tab, and give &quot;Full Control&quot; to all of them, &quot;Hide&quot; remains greyed out<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />. . . what happens if I then run DISM?<br /><br />C:\WINDOWS\system32&gt;cd\<br />C:\&gt;dism /online /cleanup-image /restorehealth<br />Deployment Image Servicing and Management tool<br />Version: 6.3.9600.17031<br />Image Version: 6.3.9600.17031<br />[==========================100.0%==========================]<br />The restore operation completed successfully. The component store corruption was repaired. The operation completed successfully.<br />C:\&gt;<br /><br />. . . I don't see any changes.<br />. . . DISM does not restore the original &quot;Search&quot; Security settings . . . even after a Restart<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />. . . what happens if I then run SFC?<br /><br />C:\&gt;sfc /scannow<br />Beginning system scan. This process will take some time.<br />Beginning verification phase of system scan.<br />Verification 100% complete.<br />Windows Resource Protection found corrupt files and successfully repaired them.<br />Details are included in the CBS.Log windir\Logs\CBS\CBS.log.<br />For example C:\Windows\Logs\CBS\CBS.log.<br />Note that logging is currently not supported in offline servicing scenarios.<br /><br />It partially restores the following, with some slight differences in the file names:<br /><br />Accessibility / Speech Recognition . . . %windir%\Speech\Common\sapisvr.exe -SpeechUX<br />Accessories<br />System Tools<br /><br />. . . Delete them, because these shortcuts are in the folders I moved<br />. . . SFC does not restore the original &quot;Search&quot; Security settings . . . even after a Restart<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />What happens if I delete &quot;Search&quot; and then run:<br /><br />DISM - same message as above - &quot;Search&quot; was not been restored - I don't see any changes, even after a Restart<br /><br />SFC - same message as above, and these are partially restored:<br /><br />Accessibility / Speech Recognition<br />Accessories vs. Windows Accessories<br />System Tools<br /><br />. . . but &quot;Search&quot; is back, with the original Security settings restored<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />So to make things simple, just leave the these Windows Folders as they are:<br /><br />Administrative Tools<br />Windows Accessories<br />Windows Ease of Access<br />Windows System<br /><br />. . . and let &quot;Search&quot; stay there<br /><br />After I put these folders back, and re-ran DISM and SFC, it said that it didn't find any violations<br /><br />- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br />Attached please see screenshot, this is the best way I've thought of to organize things, by group / priority of use / using alpha sort<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1796">mb1280</a> — Thu Jun 11, 2015 8:45 pm</p><hr />
]]></content>
</entry>
</feed>