<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=7278" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-01-25T20:48:28-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=7278</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-01-25T20:48:28-07:00</updated>
<published>2017-01-25T20:48:28-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31377#p31377</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31377#p31377"/>
<title type="html"><![CDATA[Re: Customising details pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31377#p31377"><![CDATA[
It is per file type or per perceived type (kind) of file. So the Registry keys will be different. The value of PreviewDetails will be different for each file type.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 25, 2017 8:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Legion]]></name></author>
<updated>2017-01-25T16:30:39-07:00</updated>
<published>2017-01-25T16:30:39-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31375#p31375</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31375#p31375"/>
<title type="html"><![CDATA[Re: Customising details pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31375#p31375"><![CDATA[
This is what I did. <br /><br />I couldn’t find: ‘HKEY_LOCAL_MACHINE\SOFTWARE\Classes\SystemFileAssociations' because the Key doesn’t exist<br /><br />In my machine the key is:<br /><br />HKEY_CLASSES_ROOT\SystemFileAssociations<br /><br />I added the following properties to each type, which now gives me relevant info and not useless info:<br /><br /><br />Video:<br /><br />prop:*System.Title;*System.Media.Duration;*System.Size;*System.Video.FrameWidth;*System.Video.FrameHeight;<br />*Icaros.VideoTracks;*Icaros.AudioTracks;*Icaros.SubtitleTracks;*System.Music.Genre;*System.Music.Artist;<br />*System.Video.TotalBitrate;*System.Video.FrameRate<br /><br />Audio:<br />prop:System.Music.Artist;System.Music.Genre;*System.Media.Duration;*System.Size;System.Title;<br />*System.Audio.EncodingBitrate<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17300">Legion</a> — Wed Jan 25, 2017 4:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Legion]]></name></author>
<updated>2017-01-25T11:26:43-07:00</updated>
<published>2017-01-25T11:26:43-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31372#p31372</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31372#p31372"/>
<title type="html"><![CDATA[Re: Customising details pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31372#p31372"><![CDATA[
I'm afraid you’re just deepening the confusion.<br /><br />First, I’m advised to create PreviewDetails and paste:<br /><br /><em>prop:System.FileVersion;System.Size;System.Kind;prop:System.Copyright;System.FileAttributes;System.SharingStatus;System.DateCreated;System.DateModified<br /></em><br />and now you’re saying it says:<br /><em><br />prop:System.DateModified;System.Size;System.DateCreated;*System.OfflineAvailability;*System.OfflineStatus;*System.SharedWith</em><br /><br />And even if I paste:<em><br /><br />prop:System.DateModified;System.Size;System.DateCreated;System.SharedWith<br /></em><br />it still makes no difference.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17300">Legion</a> — Wed Jan 25, 2017 11:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-01-25T10:46:46-07:00</updated>
<published>2017-01-25T10:46:46-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31371#p31371</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31371#p31371"/>
<title type="html"><![CDATA[Re: Customising details pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31371#p31371"><![CDATA[
Under this Reg key, HKEY_CLASSES_ROOT\*<br /><br />modify PreviewDetails. It says:<br /><br />prop:System.DateModified;System.Size;System.DateCreated;*System.OfflineAvailability;*System.OfflineStatus;*System.SharedWith<br /><br />So just keep prop:System.DateModified;System.Size;System.DateCreated;System.SharedWith<br /><br />and the other properties you removed will disappear.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Jan 25, 2017 10:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Legion]]></name></author>
<updated>2017-01-25T07:28:57-07:00</updated>
<published>2017-01-25T07:28:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31369#p31369</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31369#p31369"/>
<title type="html"><![CDATA[Re: Customising details pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31369#p31369"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />The key is to add the properties you want to show to the PreviewDetails string value.<br /></div><br /><br /><br />I’m confused. How do you actually get rid of ‘available offline’ or ‘rating’? If ‘System.OfflineAvailability’ was in the string then I simply remove it, but the only thing I can remove is ‘date created/modified’.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17300">Legion</a> — Wed Jan 25, 2017 7:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Legion]]></name></author>
<updated>2017-01-24T20:48:20-07:00</updated>
<published>2017-01-24T20:48:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31367#p31367</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31367#p31367"/>
<title type="html"><![CDATA[Re: Customising details pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31367#p31367"><![CDATA[
That's great. Thank you.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17300">Legion</a> — Tue Jan 24, 2017 8:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-01-24T20:32:19-07:00</updated>
<published>2017-01-24T20:32:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31366#p31366</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31366#p31366"/>
<title type="html"><![CDATA[Re: Customising details pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31366#p31366"><![CDATA[
Explorer Details pane can be customized using Registry, no such feature is planned for Classic Shell. See this article for one example of customizing the Details pane:<br /><br />How to show app version and other properties in details pane of Explorer: <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-show-app-version-and-other-properties-in-details-pane-of-explorer/">http://winaero.com/blog/how-to-show-app ... -explorer/</a><!-- m --> The key is to add the properties you want to show to the PreviewDetails string value.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Tue Jan 24, 2017 8:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Legion]]></name></author>
<updated>2017-01-24T18:44:21-07:00</updated>
<published>2017-01-24T18:44:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31364#p31364</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31364#p31364"/>
<title type="html"><![CDATA[Customising details pane]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7278&amp;p=31364#p31364"><![CDATA[
Among other things I'm heartily sick of seeing &quot;Available offline&quot; whenever the mouse hovers over virtually any file - I know they're available offline because they're on my computer. There's a registry fix customising the details, but it's for W8... there's no 'systemfileassosiations' in W10.<br /><br />So is there any way this can be done?<br /><br />Also, I'd like the next update to include the option of having the details pane at the bottom - OldNewExplorer is totally unstable.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=17300">Legion</a> — Tue Jan 24, 2017 6:44 pm</p><hr />
]]></content>
</entry>
</feed>