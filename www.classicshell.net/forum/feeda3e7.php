<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=5&amp;t=302" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-02-24T05:55:04-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=5&amp;t=302</id>
<entry>
<author><name><![CDATA[Tenzen]]></name></author>
<updated>2013-02-24T05:55:04-07:00</updated>
<published>2013-02-24T05:55:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=302&amp;p=1376#p1376</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=302&amp;p=1376#p1376"/>
<title type="html"><![CDATA[Icon Harvesting from your Computer, for Menu Customization]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=302&amp;p=1376#p1376"><![CDATA[
Most of the Common System Icons are found in the following 2 .DLL files:<br /><ul><li>C:\Windows\System32\imageres.dll</li><li>C:\Windows\System32\shell32.dll</li></ul>Here's how to get all of the Icons from your computer into one folder, to help you in customizing Classic Shell &amp; Classic Explorer:<br /><ul><li>Download Resources Extract, from Nirsoft here: <a href="http://www.nirsoft.net/utils/resourcesextract.zip" class="postlink">Resources Extract</a></li><li> Run the File</li><li> Where it says &quot;Filename/Wildcard&quot; put in any location on your computer, and select any .dll, .exe. .cpl or .ocx file, and click Open</li><li> Delete the Name (but leave the extension, and put a ' * ' instead, like this:<ul><li>instead of C:\Windows\System32\explorer.exe</li><li> change it to C:\Windows\System32\*.exe</li></ul></li><li>Select a Destination Folder on your hard Drive, such as E:\Icons\Extracted Icons.. it could easily be over 500 MB, or even a GB or more, depending on whats on your system</li><li> Select &quot;Icons&quot; in the &quot;Resource Types to Extract&quot;, and deselect all the rest</li><li> Select &quot;Scan Subfolders&quot;</li><li> in &quot;Subfolders Depth&quot;, select &quot;unlimited&quot;</li><li> Select &quot;Automatically Open destination folder&quot;</li><li> in &quot;If filename already exists&quot;, select &quot;Overwrite Existing File&quot;</li><li> in &quot;Multiple Files Mode&quot;, select &quot;Extract all files into one folder&quot;</li><li> Click Start, and wait for it to finish</li><li>its a good idea to run the scan a few times, and scan different parent directories for at least both EXE &amp; DLL files, (and .CPL &amp; .OCX are useful too) such as:<ul><li> C:\*.exe</li><li> C:\*.dll</li><li> C:\*.cpl</li><li> C:\*.ocx</li><li> D:\*.exe</li><li> D:\*.dll</li><li> D:\*.cpl</li><li> D:\*.ocx</li><li> E:\*.exe</li><li> E:\*.dll</li><li> E:\*.cpl</li><li> E:\*.ocx</li><li> etc</li><li> always saving to the same folder</li></ul></li></ul>**You can run multiple instances of the program, so you can search several locations at the same time and add them all to the same folder<br /><br />it might take a long time, and theres alot of Icons... so depending on your needs, you may just want to scan folders you know you need something from, such as:<ul><ul><li> D:\Program Files\*.exe<br /><li> D:\Program Files\*.dll</li><li> D:\Program Files\*.cpl</li><li> D:\Program Files\*.ocx</li><li> D:\Program Files (x86)\*.exe</li><li> D:\Program Files (x86)\*.dll</li><li> D:\Program Files (x86)\*.cpl</li><li> D:\Program Files (x86)\*.ocx</li><li> C:\Windows\System32\*.exe</li><li> C:\Windows\System32\*.dll</li><li> C:\Windows\System32\*.cpl</li><li> C:\Windows\System32\*.ocx</li><li> etc</li></ul></li></ul>**Click on &quot;Save Config&quot; &amp; save it in the same directory as the program, to keep this search criteria easy to load<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=359">Tenzen</a> — Sun Feb 24, 2013 5:55 am</p><hr />
]]></content>
</entry>
</feed>