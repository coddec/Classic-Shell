<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=2158" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-04-19T04:19:43-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=2158</id>
<entry>
<author><name><![CDATA[w7pro]]></name></author>
<updated>2016-04-19T04:19:43-07:00</updated>
<published>2016-04-19T04:19:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=26217#p26217</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=26217#p26217"/>
<title type="html"><![CDATA[Re: Once more: Disable Explorer's auto-sort /w detailed idea]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=26217#p26217"><![CDATA[
Anyone came with a solution yet?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=12353">w7pro</a> — Tue Apr 19, 2016 4:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Spike2]]></name></author>
<updated>2014-02-18T12:02:56-07:00</updated>
<published>2014-02-18T12:02:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=11041#p11041</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=11041#p11041"/>
<title type="html"><![CDATA[Re: Once more: Disable Explorer's auto-sort /w detailed idea]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=11041#p11041"><![CDATA[
Sounds interesting... perhaps there's a possiblity of using the &quot;bags&quot;-keys in the registry so that a directory doesn't need to be reclassified as a drive but just needs to inherit the display properties from it....<br /><br />Hmm, seems like I'll install a new Win7-VM in the next days, this could be worth to be elaborated....<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2976">Spike2</a> — Tue Feb 18, 2014 12:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-02-15T09:30:53-07:00</updated>
<published>2014-02-15T09:30:53-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10952#p10952</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10952#p10952"/>
<title type="html"><![CDATA[Re: Once more: Disable Explorer's auto-sort /w detailed idea]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10952#p10952"><![CDATA[
I suspect it is based on the classification of Drive vs Directory in HKCR. However I don't know how I can re-classify a directory to be a drive or what the consequences of that would be.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sat Feb 15, 2014 9:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Spike2]]></name></author>
<updated>2014-02-14T10:36:07-07:00</updated>
<published>2014-02-14T10:36:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10934#p10934</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10934#p10934"/>
<title type="html"><![CDATA[Re: Once more: Disable Explorer's auto-sort /w detailed idea]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10934#p10934"><![CDATA[
Well, most probably I'll switch to explorer++ once XP's support ends and I'm forced to upgrade to Win7. At least this nice open-source-app is configurable so that it exactely looks and works like XP's explorer. Together with changed windows' settings for fonts this is the nearest to the initial feature request in this thread, which can be achieved. <br /><br /><br />But if someone should discover this thread (i.e. per google) and is looking for closer information for further tries to prevent the forced &quot;instant-F5&quot; in WinVista/7/8's Explorer, here are the last things I could figure out: <br /><br />- most probably it is NOT the API-function PathIsRoot() from shlwapi.dll (changing the call to a NOP with a just-in-time-debugger leads to nothing except explorer.exe's crashs when reboot or shutdown is initiated) <br /><br />- changing the JNZ-command after this API-call to a JMP has the same results <br /><br />--&gt; most probably this &quot;functionality&quot; is hardcoded in explorer.exe <br />--&gt; therefore I'll not make any more tries, because even if I was successful, there's great danger that some other things get broken - the consequences might reach from crashes to data loss<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2976">Spike2</a> — Fri Feb 14, 2014 10:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-02-13T11:27:13-07:00</updated>
<published>2014-02-13T11:27:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10917#p10917</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10917#p10917"/>
<title type="html"><![CDATA[Re: Once more: Disable Explorer's auto-sort /w detailed idea]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10917#p10917"><![CDATA[
Yes, this is so frustrating that I did try a lot of file managers just to get away from this shit but no file manager has all features and shell extension handlers of Explorer. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_sad.gif" alt=":(" title="Sad" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Feb 13, 2014 11:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Spike2]]></name></author>
<updated>2014-02-13T11:24:56-07:00</updated>
<published>2014-02-13T11:24:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10916#p10916</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10916#p10916"/>
<title type="html"><![CDATA[Re: Once more: Disable Explorer's auto-sort /w detailed idea]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10916#p10916"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Classic Shell does not hook any APIs. Also changing the behavior of some system function can have effect on many features. And also it is very unlikely that this particular function is used to determine the behavior you describe. <br />So no.<br /></div> <br />Oh sorry, as already stated, I just know very little C++ nowadays and with a quick look I just saw a THREAD_ATTACH somewhere and therefore thought API-Hooking was used. <br />  <br />It's a pity that nothing can be done against this usability nightmare. <br />  <br />  <br />I mean - one of the very basic functions an operating system should provide is file management - so it has been since the very first days of MS-DOS and it's just not understandable that Microsoft cripples this functionality deliberately... <br />  <br />  <br />  <br />Best regards, <br />  <br />  <br />Spike2<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2976">Spike2</a> — Thu Feb 13, 2014 11:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2014-02-11T23:28:21-07:00</updated>
<published>2014-02-11T23:28:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10883#p10883</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10883#p10883"/>
<title type="html"><![CDATA[Re: Once more: Disable Explorer's auto-sort /w detailed idea]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10883#p10883"><![CDATA[
This would be worth doing if it was possible as this is most definitely the number 1 serious usability issue with newer releases of Windows today. It's so horrible but I've had to live with it all these years because of Microsoft's forced obsolescence of XP.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Feb 11, 2014 11:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-02-11T22:35:55-07:00</updated>
<published>2014-02-11T22:35:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10870#p10870</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10870#p10870"/>
<title type="html"><![CDATA[Re: Once more: Disable Explorer's auto-sort /w detailed idea]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10870#p10870"><![CDATA[
Classic Shell does not hook any APIs. Also changing the behavior of some system function can have effect on many features. And also it is very unlikely that this particular function is used to determine the behavior you describe.<br />So no.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Feb 11, 2014 10:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Spike2]]></name></author>
<updated>2014-02-11T14:06:30-07:00</updated>
<published>2014-02-11T14:06:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10856#p10856</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10856#p10856"/>
<title type="html"><![CDATA[Once more: Disable Explorer's auto-sort /w detailed idea how]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2158&amp;p=10856#p10856"><![CDATA[
Hello, <br /><br /><br /><br />quite some time ago, ~ 2 years or so, in the old forum there was a feature request about disabling explorer's auto-sort (the &quot;instant F5&quot; after any change in a folder) - even for list view. <br /><br />Until now there hasn't been a solution for that anywhere on the net and that time ago classic shell's dev said that this couldn't be achieved since it obviously was done delibaretly by MS and cannot be changed. Until now I'm using WinXP since this is the main show stopper for any newer version for me since I do a lot of file management and don't want to change to another program but keep the well-known explorer... <br /><br /><br />Nevertheless in the last days I did a bit of researching and I think there might be a possiblity to revert back to XP behaviour of NOT auto-sorting but placing new (i.e. newly unpacked) files at the end of the list until next *manual* F5. <br /><br /><br />As you can read and experience, Win7's explorer doesn't do this auto-sort in two cases: <br /><br />1) The directory is a network drive. <br />2) The directory is a root directory. <br /><br />Therefore I thougt that it perhaps could be possible to disable auto-sort, if windows' explorer would think in *every* directory that it was a network or root drive. <br />So I dug into the depths of windows and as far as I could learn the explorer.exe uses the function PathIsRoot() from the shlwapi.dll (located @ %windir%\system32 for x86-version of win7). <br /><br />So my idea is to just hook shlwapi::PathIsRoot() and if it is called by explorer.exe <em>always</em> &quot;true&quot; is returned, otherwise the call is simply wrapped (means given to shlwapi.dll and the correct result is returned). <br /><br /><br />After a quick look in Classic Shell's source code (the last public one) I saw - just as I expected - that DLL hooks are used, so it shouldn't be too hard to implement another hook. <br /><br /><br />I can't try it myself since... <br />1) I don't have any compiler installed, <br />2) the last time when I used C++ is some years ago, <br />3) and when I did it was just a hobby and <br />4) I was never really good at it <br />5) and therefore I don't even know if it is possible while hooking an API-call to see which thread called it (to selectively just fake the answer for the explorer.exe and NOT for other threads for not breaking things).<br /><br /><br />But since classic shell is already using DLL-hooking mechanism I'd love to see you giving this possibility a try and perhaps end with that the &quot;instant-F5&quot; nightmare of me and other users... <br /><br /><br /><br /><br />Regards, <br /><br /><br />Spike2<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2976">Spike2</a> — Tue Feb 11, 2014 2:06 pm</p><hr />
]]></content>
</entry>
</feed>