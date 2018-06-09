<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=19&amp;t=864" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-07-17T03:43:24-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=19&amp;t=864</id>
<entry>
<author><name><![CDATA[Seryi]]></name></author>
<updated>2013-07-17T03:43:24-07:00</updated>
<published>2013-07-17T03:43:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4804#p4804</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4804#p4804"/>
<title type="html"><![CDATA[Re: Win8.1 icons like /billenear resized/ 8 bpp color]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4804#p4804"><![CDATA[
In latest build - fixed.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=204">Seryi</a> — Wed Jul 17, 2013 3:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Seryi]]></name></author>
<updated>2013-07-08T11:26:13-07:00</updated>
<published>2013-07-08T11:26:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4606#p4606</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4606#p4606"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4606#p4606"><![CDATA[
Now look at all those icons - most likely in the Windows 8.1 icons are displayed in 8 bpp color instead of 32 bpp, so the control panel icon with a white stripe at the bottom.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=204">Seryi</a> — Mon Jul 08, 2013 11:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-08T10:57:10-07:00</updated>
<published>2013-07-08T10:57:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4605#p4605</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4605#p4605"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4605#p4605"><![CDATA[
The problem is not extracting images from imageres.dll. I can do that. The problem is extracting the correct image for a given folder (like Control Panel). The API for that is &quot;hey, Windows, give me the image for this folder&quot;. That's the buggy part. In some cases I can work around it, but in some cases I cannot.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 08, 2013 10:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Seryi]]></name></author>
<updated>2013-07-08T10:23:26-07:00</updated>
<published>2013-07-08T10:23:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4604#p4604</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4604#p4604"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4604#p4604"><![CDATA[
MultiExtractor can easy extract resources. There are only 2 formats - ICO (up to 256x256) and 256x256 PNG. As seems from my table above - original Windows 7 get not scaled images, CS - scaled from 256x256 (Win 7 documents). Then may be enable scaling and for 125% screen trimming?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=204">Seryi</a> — Mon Jul 08, 2013 10:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-08T09:38:42-07:00</updated>
<published>2013-07-08T09:38:42-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4600#p4600</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4600#p4600"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4600#p4600"><![CDATA[
The icons in imageres.dll contain multiple sizes and formats - from 16x16 with 2-bit colors to 256x256 with 32-bit colors. I think the highest resolution is stored as PNG and the lower are BMPs (or something similar).<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 08, 2013 9:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Seryi]]></name></author>
<updated>2013-07-08T09:17:50-07:00</updated>
<published>2013-07-08T09:17:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4599#p4599</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4599#p4599"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4599#p4599"><![CDATA[
Something is amiss ... If you look at the imageres.dll using MultiExtractor - that there is only a 256x256 PNG ... Then what is the point in the 64x64?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=204">Seryi</a> — Mon Jul 08, 2013 9:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-08T08:35:59-07:00</updated>
<published>2013-07-08T08:35:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4596#p4596</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4596#p4596"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4596#p4596"><![CDATA[
Images work best at their native size, without any shrinking shenanigans. Since most people run 96 DPI, they will always see a shrunken image.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 08, 2013 8:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-08T08:32:28-07:00</updated>
<published>2013-07-08T08:32:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4595#p4595</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4595#p4595"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4595#p4595"><![CDATA[
But why 64 x 64? Then there should have been one big 256 x 256 user frame which gets shrunk and the icons too.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jul 08, 2013 8:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-08T08:13:22-07:00</updated>
<published>2013-07-08T08:13:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4594#p4594</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4594#p4594"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4594#p4594"><![CDATA[
No. I have decided to make the size DPI-independent for two reasons - First, the skin needs only one picture frame, not 3 or 4 like the Aero theme, and Second, I don't want to depend on icons having a larger image than 64x64.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 08, 2013 8:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-08T00:46:48-07:00</updated>
<published>2013-07-08T00:46:48-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4589#p4589</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4589#p4589"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4589#p4589"><![CDATA[
But the DPI problem is there on Windows 7/8.0 too. When the DPI/PPI is increased, the icon doesn't get larger like the Windows 7 menu's icon does due to this bug in IShellItemImageFactory interface?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Jul 08, 2013 12:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Seryi]]></name></author>
<updated>2013-07-08T00:24:20-07:00</updated>
<published>2013-07-08T00:24:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4588#p4588</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4588#p4588"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4588#p4588"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />I will run some tests and may have to create an example for Microsoft to reproduce the problem.<br /></div><br /><br />Maybe then they will have time fixed a problem in the final version, if hurry.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=204">Seryi</a> — Mon Jul 08, 2013 12:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-08T00:03:24-07:00</updated>
<published>2013-07-08T00:03:24-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4586#p4586</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4586#p4586"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4586#p4586"><![CDATA[
IExtractIcon can only reliably get icons of standard sizes. Doesn't work for larger icons.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Jul 08, 2013 12:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2013-07-07T23:54:36-07:00</updated>
<published>2013-07-07T23:54:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4584#p4584</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4584#p4584"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4584#p4584"><![CDATA[
Is IShellItemImageFactory the only interface for that or the legacy IExtractIcon will also work?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Jul 07, 2013 11:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-07-07T23:41:54-07:00</updated>
<published>2013-07-07T23:41:54-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4582#p4582</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4582#p4582"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4582#p4582"><![CDATA[
I am not referencing anything. I am asking the OS to give me the image for the folder (like Control Panel). That's where it is failing.<br />If you manually select the icon in the start menu settings (like imageres.dll,27) then it looks OK. Because it is being loaded by my own code.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Jul 07, 2013 11:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Seryi]]></name></author>
<updated>2013-07-07T23:37:01-07:00</updated>
<published>2013-07-07T23:37:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4581#p4581</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4581#p4581"/>
<title type="html"><![CDATA[Re: Win8.1 icons like billenear resized]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=864&amp;p=4581#p4581"><![CDATA[
I mean - to make reference to the ICO instead of PNG - as in the file imageres.dll images are duplicated in different formats.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=204">Seryi</a> — Sun Jul 07, 2013 11:37 pm</p><hr />
]]></content>
</entry>
</feed>