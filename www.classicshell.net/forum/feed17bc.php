<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=392" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-03-17T08:42:59-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=392</id>
<entry>
<author><name><![CDATA[XSPR]]></name></author>
<updated>2013-03-17T08:42:59-07:00</updated>
<published>2013-03-17T08:42:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2007#p2007</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2007#p2007"/>
<title type="html"><![CDATA[Re: Win 7 Explorer left pane scroll fix ONLY? TVM_ENSUREVISI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2007#p2007"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />I disable TVM_ENSUREVISIBLE for the root item if it is not currently selected.<br /><br />The auto-scrolling to the top is a feature of the underlying tree view control. It is not something that can be easily disabled.<br /></div><br /><br />Thank you sir!  If I wanted to make a DLL or a standalone program that only disables TVM_ENSUREVISIBLE, as you already coded in Classic Shell, what are the necessary parts besides the hook function CExplorerBHO::SubclassTreeProc that subclasses the tree view control?  (I apologize if this is too technical a question for these forums.)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=465">XSPR</a> — Sun Mar 17, 2013 8:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-03-17T08:08:36-07:00</updated>
<published>2013-03-17T08:08:36-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2006#p2006</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2006#p2006"/>
<title type="html"><![CDATA[Re: Win 7 Explorer left pane scroll fix ONLY? TVM_ENSUREVISI]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2006#p2006"><![CDATA[
I disable TVM_ENSUREVISIBLE for the root item if it is not currently selected.<br /><br />The auto-scrolling to the top is a feature of the underlying tree view control. It is not something that can be easily disabled.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Sun Mar 17, 2013 8:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[XSPR]]></name></author>
<updated>2013-03-17T00:53:04-07:00</updated>
<published>2013-03-17T00:53:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2002#p2002</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2002#p2002"/>
<title type="html"><![CDATA[Win 7 Explorer left pane scroll fix ONLY? TVM_ENSUREVISIBLE]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=392&amp;p=2002#p2002"><![CDATA[
Hello!  Classic Shell looks very impressive.  However, it does a lot.  I know some things are configurable, but I am really only interested in one thing: <em>Only</em> a fix for the left pane autoscroll bug in Windows 7 Explorer.  If this is not possible, I have some <span style="text-decoration: underline">technical questions</span> about how to make such a small program myself.<br /><br />I took a look at the source code and the nice article about it here (thanks Mr. Beltchev!):<br /><!-- m --><a class="postlink" href="http://www.codeproject.com/Articles/45430/Classic-Shell">http://www.codeproject.com/Articles/45430/Classic-Shell</a><!-- m --><br /><br />From what I understand, the solution Classic Shell implements is to make that C++ hook/callback function, which prevents (one of?) the TVM_ENSUREVISIBLE messages from getting sent.  Is that correct?<br /><br />I am more familiar with C# than C++, so the code and its context was hard for me to understand.  Using Spy++ 8 and BlitzPlus, I was able to find and programmatically get the handle hwnd of the tree view that sends the TVM_ENSUREVISIBLE messages.  BlitzPlus is a language that can use a custom DLL's functions written in C++ if I declare them.  I don't have much experience with hooks and callbacks-- and I'm afraid I might cause problems or lock up my system.<br /><br />I wish I could eradicate <em>all </em>auto-scrolling behavior in Windows 7 Explorer, including the &quot;feature&quot; of auto-scrolling an expanding folder to the top of the pane.  I guess it's trying to show me all the subfolders, or as many of them as it can show.  But it is jarring and I'd prefer to do the scrolling myself.  Whether it scrolls to the top or the bottom, it is annoying for me because it's easy to lose my place and become momentarily distracted, having to re-navigate that &quot;navigation&quot; pane myself.<br /><br />The bug fix, as performed in Classic Shell, seems to ignore <strong>ONE </strong>of the TVM_ENSUREVISIBLE messages.  Or is it any TVM_ENSUREVISIBLE message?  The bug happens <span style="text-decoration: underline"><em>randomly </em></span>on folders that haven't been opened that session, correct?  So for the times that the bug doesn't occur, can it avoid the &quot;feature&quot; of autoscrolling which puts the expanding folder at the top?  I.e. can a small program be made with a hooked callback function that tells Explorer's tree view to ignore <strong>ANY </strong>autoscrolling behavior, including the feature of placing it at the top?  I'd settle for just the bug fix (to prevent it placing it at the bottom), but eradicating any autoscrolling in that left pane would be ideal.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=465">XSPR</a> — Sun Mar 17, 2013 12:53 am</p><hr />
]]></content>
</entry>
</feed>