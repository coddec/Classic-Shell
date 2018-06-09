<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=7609" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-05-20T18:36:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=7609</id>
<entry>
<author><name><![CDATA[Yaron]]></name></author>
<updated>2017-05-20T18:36:45-07:00</updated>
<published>2017-05-20T18:36:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32722#p32722</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32722#p32722"/>
<title type="html"><![CDATA[Re: No dimensions for BMP, JPG and GIF images]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32722#p32722"><![CDATA[
Hello Gaurav,<br /><br />Thanks for replying. It's kind of you.<br /><br />After some trial and error, the following code worked for me.<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Windows Registry Editor Version 5.00<br /><br />&#91;HKEY_CLASSES_ROOT\SystemFileAssociations\.bmp&#93;<br />&quot;PreviewDetails&quot;=&quot;prop:*System.Image.Dimensions;*System.Size;*System.DateCreated;&quot;<br />&quot;FullDetails&quot;=&quot;prop:System.PropGroup.Origin;System.Photo.DateTaken;System.PropGroup.Image;System.Image.Dimensions;System.Image.HorizontalSize;System.Image.VerticalSize;System.Image.BitDepth;System.PropGroup.FileSystem;System.ItemNameDisplay;System.ItemType;System.ItemFolderPathDisplay;System.DateCreated;System.DateModified;System.Size;System.FileAttributes;System.OfflineAvailability;System.OfflineStatus;System.SharedWith;System.FileOwner;System.ComputerName&quot;<br />&quot;InfoTip&quot;=&quot;prop:System.ItemType;*System.Image.Dimensions;*System.Size&quot;<br />&quot;ExtendedTileInfo&quot;=&quot;prop:System.ItemType;*System.Image.Dimensions&quot;<br />&quot;ImageOptionFlags&quot;=dword:00000001<br /><br />&#91;HKEY_CLASSES_ROOT\SystemFileAssociations\.bmp\OpenWithList&#93;<br /><br />&#91;HKEY_CLASSES_ROOT\SystemFileAssociations\.bmp\OpenWithList\PhotoViewer.dll&#93;<br /></div><br /><br />The code existed for PNG and I slightly modified it for BMP, GIF and JPG.<br /><br />I appreciate your suggestion but I'd rather not mess with the Registry again as long as it works. :)<br /><br />Best regards.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=102">Yaron</a> — Sat May 20, 2017 6:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-05-20T13:45:49-07:00</updated>
<published>2017-05-20T13:45:49-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32721#p32721</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32721#p32721"/>
<title type="html"><![CDATA[Re: No dimensions for BMP, JPG and GIF images]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32721#p32721"><![CDATA[
Details pane contents are not modified by Classic Shell in any way. You can tweak the Registry to modify them.<br /><br />Status bar contents are same as what the tooltip/infotip shows. Classic Shell does not touch them either. They are also adjustable in the Registry.<br /><br />For PNG, try this:<br /><br />HKEY_CLASSES_ROOT\pngfile<br /><br />String value: InfoTip.<br />String value: PreviewDetails<br />Value data: prop:System.Image.Dimensions<br /><br />See the full reference here: <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/ff521691(v=vs.85).aspx" class="postlink">https://msdn.microsoft.com/en-us/library/windows/desktop/ff521691(v=vs.85).aspx</a><br /><br />Also, see the existing Registry values at HKEY_CLASSES_ROOT\ContentDirectory.item.imageItem and copy-paste them.<br /><br />If you mark a directory as containing Pictures (apply the Pictures template), it should show the dimensions in Details pane.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat May 20, 2017 1:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Yaron]]></name></author>
<updated>2017-05-15T06:15:59-07:00</updated>
<published>2017-05-15T06:15:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32645#p32645</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32645#p32645"/>
<title type="html"><![CDATA[No dimensions for BMP, JPG and GIF images]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7609&amp;p=32645#p32645"><![CDATA[
Hello,<br /><br />I've recently reinstalled Windows 7 and Classic Shell.<br /><br />Dimensions of BMP, JPG and GIF images are not displayed in the Details Pain or the Status Bar.<br />(The dimensions are displayed if I add the Dimensions *column* but I want to see that in the Details Pain).<br />Dimensions of PNG images *are* displayed.<br /><br />I've read <a href="https://answers.microsoft.com/en-us/windows/forum/windows_7-files/need-more-details-in-windows-explorer-details-pane/92df813a-0ff3-4838-b5bb-9511fcf1a803" class="postlink">this</a> article and added &quot;PerceivedType&quot;=&quot;image&quot; to [HKEY_CLASSES_ROOT\.bmp], but it hasn't solved the problem.<br /><br />Running <strong>assoc .BMP</strong>, I get &quot;File association not found&quot;. But I've associated BMP to an app and it does open it.<br /><br />What else can I try?<br /><br />I'd appreciate your help.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=102">Yaron</a> — Mon May 15, 2017 6:15 am</p><hr />
]]></content>
</entry>
</feed>