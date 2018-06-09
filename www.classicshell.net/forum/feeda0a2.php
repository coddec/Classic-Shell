<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=6440" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-11-08T07:57:55-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=6440</id>
<entry>
<author><name><![CDATA[Marc49]]></name></author>
<updated>2016-11-08T07:57:55-07:00</updated>
<published>2016-11-08T07:57:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=30274#p30274</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=30274#p30274"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=30274#p30274"><![CDATA[
There is a very powerful set of tools that can possibly help with MBR problems.  It is very powerful and does require a modicum of knowledge to use it safely.  Its called DFSee ( <!-- m --><a class="postlink" href="http://www.dfsee.com/dfsee/download.php">http://www.dfsee.com/dfsee/download.php</a><!-- m --> ) Again, it is extremely powerful and if improperly used can destroy the data on the disk you're trying to resurrect.  It is normally burned to a CDROM or a USB flash drive and booted from.  RTFM!!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=16085">Marc49</a> — Tue Nov 08, 2016 7:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2016-09-01T20:02:15-07:00</updated>
<published>2016-09-01T20:02:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29161#p29161</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29161#p29161"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29161#p29161"><![CDATA[
Thank you, Gaurav, for your reply.<br /><br />I spend 2-1/2 hours on the phone with tech support from Dell (in the Philippines) on August 3rd, and we tried every one of the troubleshooting methods available on the bootable Windows 10 rescue disk I created shortly after purchasing the computer. They advised me to create a different one with the computer I was using that purportedly contained more sophisticated tools but even though the Windows Vista program downloaded the file, it couldn't open it so I couldn't do what the technicians wanted me to do before copying the files to a Flash drive. They submitted a request to have me sent a Windows 10 Recovery flash drive which I used to install Windows 10 on a blank 1TB hard drive.<p>Statistics: Posted by Guest — Thu Sep 01, 2016 8:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-29T23:31:21-07:00</updated>
<published>2016-08-29T23:31:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29108#p29108</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29108#p29108"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29108#p29108"><![CDATA[
<div class="quotetitle">Guest wrote:</div><div class="quotecontent"><br />I got infected August 2nd - minutes after installing the Windows 10 Anniversary Update - when I saw that the update caused the Classic Shell to not work any longer.....Thank you in advance for any legitimate replies!<br /></div><br /><br /><br />I think you should try running Troubleshoot -&gt; Advanced Options -&gt; Startup Repair from the Recovery Environment of the same disk as the Windows version you have installed. If you have Windows 10, run the Startup Repair from a Windows 10 bootable USB disk. You didn't say you tried that already.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Mon Aug 29, 2016 11:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2016-08-29T21:05:36-07:00</updated>
<published>2016-08-29T21:05:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29107#p29107</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29107#p29107"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=29107#p29107"><![CDATA[
I got infected August 2nd - minutes after installing the Windows 10 Anniversary Update - when I saw that the update caused the Classic Shell to not work any longer. Yes, I did ignore the warnings because this a new computer (DEC.) and the warnings were unfamiliar. I had previously installed this program, so I thought it was Windows trying to discourage me. Oops.<br /><br />I ran my recovery flash drive and got into the Recovery screen and went to Advanced options; Command prompt; ran Chkdsk/F and got the message &quot;Windows cannot run disk checking on this volume because it is write protected&quot;. I ran the bootrec /fixmbr and even though it showed &quot;This operation completed successfully&quot; it didn't work. So, I found a different website that gave me something else to try.<br /><br />I went through the same steps and when I got the command prompt I ran the following commands:<br />bootrec/fixboot<br />bcdedit/export c:\bcdbackup<br />bootrec/rebuildbcd<br /><br />I got this: &quot;Scanning all disks for Windows installations&quot;.<br />Then: &quot;Successfully scanned all Windows installations. Total identified Windows installations: 0&quot;<br /><br />I ran other commands, which I didn't copy so in order to tell you what they were I would have to reconnect the computer I was using in the hopes I saved the page in Favorites. It is running Vista 64bit and I got so frustrated with it I bought an HP notebook for $239 that isn't a bad piece of equipment thus far...<br /><br />Anyway, I ran all of it and this is what I got:<br /><br />DISKPART&gt; list volume<br /><br />Volume ### Ltr Label Fs Type Size Status Info<br />-------------- --- ----- -- ---- ---- ------ ----<br />Volume 0 E DVD-ROM 304 MB Healthy <br />Volume 1 C OS NTSF Partition 918 GB Healty<br />Volume 2 ESP FAT32 Partition 200 MB Healthy Hidden<br />Volume 3 WINRETOOLS NTSF Partition 855 MB Healthy Hidden<br />Volume 4 Image NTSF Partition 11 GB Healty Hidden<br />Volume 5 D Recovery FAT32 Removable 29 GB Healthy <br /><br />DISKPART&gt; select volume 2<br /><br />Volume 2 is the selected volume.<br /><br />DISKPART&gt; assign letter-z<br /><br />Diskpart successfully assigned the drive letter or mount point<br /><br />DISKPART&gt; exit<br /><br />Leaving Diskpart...<br /><br />x:\windows\system32&gt;bcdboot C:\windows/s Z:f UEFI<br /><br />Bcdboot - boot file creation and repair tool.<br /><br />The bcdboot.exe command-line tool is used to copy critical boot files to the<br />system partition and to create a new system BCD store.<br /><br />bcdboot &lt;source&gt; [/l &lt;locale&gt;] [/s &lt;volume -letter&gt; [/f &lt;firmware.]] [/v]<br />[/m [{OS Loader ID}]] [/addlast] [/p] [/c]<br /><br /><br />That is as far as the instructions took me.<br />What did I get?<br /><br />&quot;Windows failed to start.&quot;<br /><br />That's where I'm at.<br /><br />I put in a new hard drive and installed Windows 10 Restore Media from a flash drive I got from Dell. I connected the original hard drive hoping it would act like a slave drive, but just like when I connected the original hard drive to the computer with Vista using a USB to IDE/SATA adapter: the hard drive isn't found.<br /><br />It has been 25 years since my days as a student at Control Data Institute and I've only worked with dos a few times since then. I can pull up the directory of disk X and see all the files, so it is all still there, of course, but the infection seems to have carried with some root files and I feel like I didn't go in depth enough to isolate the boot record and change it, or changing it didn't work because the infection is inside any file I'm using to change the boot record. <br /><br />If nobody has any suggestions for going forward from where I've presently gotten the hard drive to, I might try to revert it back to the original file structure in the original drive partition: if I can find the instructions I used and reverse the command directions. Then I'll probably try the Rufus or maybe Testdisk.<br /><br />I'm okay with messing with it for a while since I can't do much worse than the unusable condition it is already in.<br /><br />Should all my tinkering fail to restore the disk to bootable condition, does anybody have any suggestions on how to find my documents and photos and transfer them to a flash drive? I suppose the data isn't damaged--only the MBR--so it would be safe to extract if I can find a method for doing so.<br /><br />Thank you in advance for any legitimate replies!<p>Statistics: Posted by Guest — Mon Aug 29, 2016 9:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2016-08-25T05:25:36-07:00</updated>
<published>2016-08-25T05:25:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28870#p28870</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28870#p28870"/>
<title type="html"><![CDATA[Re: Repair Master Boot Record for Windows 10]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28870#p28870"><![CDATA[
<div class="quotetitle">SquaredCircle84 wrote:</div><div class="quotecontent"><br />Thank you for the easy-to-follow guide. I'm setting up my flash drive as I type this, and will check in when everything is done. Will I need my product key or anything for this?<br /></div><br /><br /><br />No you will not<p>Statistics: Posted by Guest — Thu Aug 25, 2016 5:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2016-08-25T05:24:09-07:00</updated>
<published>2016-08-25T05:24:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28869#p28869</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28869#p28869"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28869#p28869"><![CDATA[
This really helped me out thanks to everyone! <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" />:D:D:D:D:D<p>Statistics: Posted by Guest — Thu Aug 25, 2016 5:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OldRocker]]></name></author>
<updated>2016-08-23T11:47:37-07:00</updated>
<published>2016-08-23T11:47:37-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28831#p28831</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28831#p28831"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28831#p28831"><![CDATA[
Thanks for reply Gaurav.  Obviously thought it was related because it happened upon installing CS.  Could be coincidence.  Have a 26 year experienced repair person checking it out.  Malware may have loaded at same time, or more likely back sector on aging hard drive with CS installation caused boot corruption.  Great forum.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14861">OldRocker</a> — Tue Aug 23, 2016 11:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-23T00:10:12-07:00</updated>
<published>2016-08-23T00:10:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28823#p28823</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28823#p28823"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28823#p28823"><![CDATA[
The above steps are only if your PC was infected by malware during the extremely short period of time (a few hours on August 2nd, 2016) during which Classic Shell's installer was compromised. It was rectified within just a few hours so it is highly unlikely that the fake malware-infected installer is still in circulation. If your PC's booting broke recently, it is most definitely by some other reason and is not related to Classic Shell. <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Aug 23, 2016 12:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[OldRocker]]></name></author>
<updated>2016-08-22T22:10:02-07:00</updated>
<published>2016-08-22T22:10:02-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28821#p28821</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28821#p28821"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28821#p28821"><![CDATA[
I installed CS on an up to date Win 10 machine today and it froze the computer.  I have tried this fix, and whether I put the listed MediaCreation Tool application for the Windows 10 boot disc file on a USB flash drive or a CD, and set the appropriate boot order thru BIOS or F9, it is clearly accessing whichever I use but the application does not launch to show the Windows 10 screen where I can choose Repair.  It just keeps going into the Preparing Automatic Repair mode, then Diagnosing PC, then I get the 2 choices of Automatic Repair Restart of Advanced Options.  Unfortunately even tho I enabled Restore Points and had some the latest Win 10 update disabled Restore and removed the restore points so have not option for restore points in Advanced Options Restore.  Am I missing a step to get the MediaCreation Tool app to launch?  Thank you!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14861">OldRocker</a> — Mon Aug 22, 2016 10:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-08-08T13:50:49-07:00</updated>
<published>2016-08-08T13:50:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28400#p28400</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28400#p28400"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28400#p28400"><![CDATA[
All releases of Classic Shell are signed. People who got infected bypassed the UAC prompt warning about unsigned code.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Aug 08, 2016 1:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anonymous]]></name></author>
<updated>2016-08-08T13:39:56-07:00</updated>
<published>2016-08-08T13:39:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28399#p28399</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28399#p28399"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28399#p28399"><![CDATA[
Can you sign your packages to help users avoid all this?<br /><br /><!-- m --><a class="postlink" href="https://www.gnupg.org/download/integrity_check.html">https://www.gnupg.org/download/integrity_check.html</a><!-- m --><br /><br />Thanks,<br />-dkw<p>Statistics: Posted by Guest — Mon Aug 08, 2016 1:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-05T23:03:08-07:00</updated>
<published>2016-08-05T23:03:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28302#p28302</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28302#p28302"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28302#p28302"><![CDATA[
@TheFly, here's a guide for GParted: <!-- m --><a class="postlink" href="http://gparted.org/h2-fix-msdos-pt.php">http://gparted.org/h2-fix-msdos-pt.php</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Aug 05, 2016 11:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TheFly]]></name></author>
<updated>2016-08-05T14:52:26-07:00</updated>
<published>2016-08-05T14:52:26-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28283#p28283</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28283#p28283"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28283#p28283"><![CDATA[
Okay I can switch between devices, under Gparted &gt; devices... <br /><br />/Dev/SDA is the 500gb HDD<br />/Dev/SDB is the 250gb SSD<br /><br />Under the SSD<br /><br /><!-- m --><a class="postlink" href="http://imgur.com/0FrE1Ud">http://imgur.com/0FrE1Ud</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14574">TheFly</a> — Fri Aug 05, 2016 2:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TheFly]]></name></author>
<updated>2016-08-05T14:38:25-07:00</updated>
<published>2016-08-05T14:38:25-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28281#p28281</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28281#p28281"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28281#p28281"><![CDATA[
Alright I'm in Gparted.  What do I do. Cmooon I'm almost home.<br /><br />My HDD is a500gb drive.<br /><br />I see a long grey strip that goes from one side of the window to the other, in it says 465.76gb unallocated.  This is the drive!  What do I do??<br /><br />Down below it says<br /><br />Partition. File system. Size. Used.  Unused. Flags.<br /><br />Unallocated.. unallocated.. 465.75 GiB ... Blank, blank, blank.<br /><br />As for the C drive, how would I fix that, I don't see it here.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14574">TheFly</a> — Fri Aug 05, 2016 2:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-04T23:01:20-07:00</updated>
<published>2016-08-04T23:01:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28237#p28237</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28237#p28237"/>
<title type="html"><![CDATA[Re: [How to] Repair Master Boot Record]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6440&amp;p=28237#p28237"><![CDATA[
@TheFly You mean it does not boot? You may have chosen the incorrect partition scheme for the USB. Try switching between UEFI and BIOS in Rufus. Use FAT32 file system and see if it boots.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Aug 04, 2016 11:01 pm</p><hr />
]]></content>
</entry>
</feed>