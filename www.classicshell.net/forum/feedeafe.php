<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=2077" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2014-01-29T09:37:31-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=2077</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2014-01-29T09:37:31-07:00</updated>
<published>2014-01-29T09:37:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2077&amp;p=10494#p10494</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2077&amp;p=10494#p10494"/>
<title type="html"><![CDATA[Re: PolicyDefinitions Failure]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2077&amp;p=10494#p10494"><![CDATA[
1) Yes, those two settings have a bug. It will be fixed in the next version.<br /><br />2) You are mistaken about UTF-8. You are thinking of ANSI. UTF-8 can represent any language as UTF-16. It is just a different way of encoding the same characters.<br /><br />3) At the moment I have no interest in localizing the ADML files. Currently the only localization mechanism is with a DLL and ADML files can't be in DLLs. You are free of course to localize them and share them, however keep in mind that because of the way the files are generated, it is unlikely your work will be compatible with the next version of the files.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Jan 29, 2014 9:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[AlexanderJ]]></name></author>
<updated>2014-01-29T02:34:10-07:00</updated>
<published>2014-01-29T02:34:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=2077&amp;p=10485#p10485</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=2077&amp;p=10485#p10485"/>
<title type="html"><![CDATA[PolicyDefinitions Failure]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=2077&amp;p=10485#p10485"><![CDATA[
I found two Failures in the PolicyDefinition files<br />1. Emtpy stringdefinition in ClassicStartMenu.adml us-US:<br />&lt;string id=&quot;CSM_str_24&quot;&gt;&lt;/string&gt;<br />&lt;string id=&quot;CSM_str_26&quot;&gt;&lt;/string&gt;<br /><br />2. All Policydefinition should be in UTF-16 and not UTF-8, then it can be also translated into other languages with require UTF-16 e.g. German, French, etc.<br /><br />Found a way to use it. Translated ADML MUST written in UTF-8 Format with local language Setting. Best use Notepad++<br />regards AlexJ<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2850">AlexanderJ</a> — Wed Jan 29, 2014 2:34 am</p><hr />
]]></content>
</entry>
</feed>