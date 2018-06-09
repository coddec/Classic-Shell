<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=6325" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-07-15T05:47:32-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=6325</id>
<entry>
<author><name><![CDATA[ducof]]></name></author>
<updated>2016-07-15T05:47:32-07:00</updated>
<published>2016-07-15T05:47:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6325&amp;p=27560#p27560</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6325&amp;p=27560#p27560"/>
<title type="html"><![CDATA[autocorrection/completion]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6325&amp;p=27560#p27560"><![CDATA[
Add autocorrection/completion function fot explorer pat, with its custom rules in txt<br /><br /><strong>1. Make any path , exe cmd or other resolve to only path and not execute, same as &quot;show file in folder&quot;</strong><br />c:\folder\file.exe<br />to:<br />c:\folder\ and highlights or not &quot;file.exe&quot;<br /><br /><strong>2. Make resolve not existing path to nearest</strong><br />c:\superwindows\supersystem32\<br />will resolve to nearest exist path:<br />c:\<br /><br /><strong>2.1 also as first paragraph to second</strong><br />c:\super-windows\super-system32\super.exe<br />c:\<br /><br /><br /><strong>3. Cmd and custom unknow symbols resolve to normal path</strong><br />C:\&gt;”Program Files\Windows Resource Kits\Tools\compress.exe”<br />will autocorrect to:<br />C:\Program Files\Windows Resource Kits\Tools\<br /><br /><strong>4. If path not exist or any eror it will blink red without message &quot;error-ok&quot;</strong><br /><br /><strong>Custom updatable:</strong><br />C:\Users\username\folder<br />will resolve if there no this folder to<br />C:\Users\%username%\folder<br /><br />C:\ windows \ system32<br />C:\windows\system32<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=13922">ducof</a> — Fri Jul 15, 2016 5:47 am</p><hr />
]]></content>
</entry>
</feed>