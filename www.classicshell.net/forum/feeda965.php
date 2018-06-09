<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=8&amp;t=149" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-01-25T19:42:30-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=8&amp;t=149</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-01-25T19:42:30-07:00</updated>
<published>2013-01-25T19:42:30-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=149&amp;p=576#p576</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=149&amp;p=576#p576"/>
<title type="html"><![CDATA[Re: How to change a custom toolbar button &quot;Text&quot; and &quot;ICON&quot;.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=149&amp;p=576#p576"><![CDATA[
Sorry, not possible. The icons are only loaded when the toolbar is created.<br />The only thing you can do is enable or disable custom commands. Look at the end of the Settings section in the help how to force a refresh.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Jan 25, 2013 7:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CarlCzarnecki]]></name></author>
<updated>2013-01-25T19:21:50-07:00</updated>
<published>2013-01-25T19:21:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=149&amp;p=575#p575</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=149&amp;p=575#p575"/>
<title type="html"><![CDATA[How to change a custom toolbar button &quot;Text&quot; and &quot;ICON&quot;.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=149&amp;p=575#p575"><![CDATA[
--- Feature Request ---<br />Applies to: Classic Shell, Classic Explorer, Custom ToolBar Button<br />--- Objective ---<br />When a custom ToolBar button is clicked, I want to change the button ICON and the button Text.<br />This is necessary to reflect the current state of the action that was performed.<br />--- Example ---<br />Change the button &quot;Text&quot;.<br />$Key = &quot;HKEY_CURRENT_USER\Software\IvoSoft\ClassicExplorer&quot;<br />$ValueName = &quot;ToolbarItems&quot;<br />$ValueType = &quot;REG_MULTI_SZ&quot;<br />$Data = RegRead( $Key, $ValueName )<br />$Label1 = &quot;TestButton.Label=OldText&quot;<br />$Label2 = &quot;TestButton.Label=NewText&quot;<br />If StringInStr( $Data, $Label1 ) Then<br />$Data = StringReplace( $Data, $Label1, $Label2 )<br />Else<br />$Data = StringReplace( $Data, $Label2, $Label1 )<br />EndIf<br />RegWrite( $Key, $ValueName, $ValueType, $Data )<br />The TestButton.Label does change, but I have to close the Windows Explorer then reopen it for the changes to be reflected.<br />How do I force Classic Explorer to refresh the ToolBar (on-the-fly) under program control?<br />Maybe I could call something in... C:\Program Files\Classic Shell\ClassicExplorer64.dll<br />Thank You in advance.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=203">CarlCzarnecki</a> — Fri Jan 25, 2013 7:21 pm</p><hr />
]]></content>
</entry>
</feed>