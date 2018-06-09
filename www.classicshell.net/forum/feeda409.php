<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=7&amp;t=7016" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-10-26T12:54:50-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=7&amp;t=7016</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-10-26T12:54:50-07:00</updated>
<published>2016-10-26T12:54:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30075#p30075</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30075#p30075"/>
<title type="html"><![CDATA[Re: Forcing Classic shell to work for all users who log into]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30075#p30075"><![CDATA[
Classic Shell can only be installed for all users, but once installed, you can turn it off for certain user accounts and keep it on only for a particular account.<br /><br />Looks for a setting called &quot;Start automatically for this user&quot; in the General Behavior tab in the Start menu settings. Uncheck it for the user accounts for which you don't want it to start.<br /><br />Or change the default for all users using the Registry to not start automatically (look in the Help file -&gt; Administrative Settings section of Start Menu) and then check that option only for the few accounts for which you want it to start.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Wed Oct 26, 2016 12:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[red71run]]></name></author>
<updated>2016-10-26T12:19:55-07:00</updated>
<published>2016-10-26T12:19:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30074#p30074</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30074#p30074"/>
<title type="html"><![CDATA[Re: Forcing Classic shell to work for all users who log into]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30074#p30074"><![CDATA[
<div class="quotetitle">Jcee wrote:</div><div class="quotecontent"><br />I think he means everyone shares the machines, and logs in with a username/password.<br /><br />IDK if there is a specific way, but you could remove classic shell from startup, then create a .bat file that starts classic shell and throw it in:<br />C:\Users\*USERNAME*\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup<br />There will be a small delay before classic shell is available after the system boots<br /></div><br /><br />Exactly what I meant. I want to install this on only six machines. There are several different users who log into the machines every day and they get confused easily, I do not want it to pop up asking what shell they want to use, but instead fool them into thinking it is Win 7. There is only one user who has complained about Wind 8.1, and unfortunately it is the CEO... I have never created a .bat file though.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15849">red71run</a> — Wed Oct 26, 2016 12:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jcee]]></name></author>
<updated>2016-10-26T11:04:50-07:00</updated>
<published>2016-10-26T11:04:50-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30070#p30070</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30070#p30070"/>
<title type="html"><![CDATA[Re: Forcing Classic shell to work for all users who log into]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30070#p30070"><![CDATA[
I think he means everyone shares the machines, and logs in with a username/password.<br /><br />IDK if there is a specific way, but you could remove classic shell from startup, then create a .bat file that starts classic shell and throw it in:<br />C:\Users\*USERNAME*\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup<br />There will be a small delay before classic shell is available after the system boots<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=62">Jcee</a> — Wed Oct 26, 2016 11:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-10-26T10:10:13-07:00</updated>
<published>2016-10-26T10:10:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30069#p30069</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30069#p30069"/>
<title type="html"><![CDATA[Re: Forcing Classic shell to work for all users who log into]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30069#p30069"><![CDATA[
Classic Shell installs for all users. If you have 194 machines where you don't want to have Classic Shell, then don't install it there <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Oct 26, 2016 10:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[red71run]]></name></author>
<updated>2016-10-26T09:42:01-07:00</updated>
<published>2016-10-26T09:42:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30067#p30067</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30067#p30067"/>
<title type="html"><![CDATA[Forcing Classic shell to work for all users who log into pc.]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7016&amp;p=30067#p30067"><![CDATA[
I have a executive who hates Win 8.1. I installed Classic Shell on one of the machines chose Win 7 and it worked great. How would I force Classic shell to work for each user on just the 6 machines out of the 200 that I have?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=15849">red71run</a> — Wed Oct 26, 2016 9:42 am</p><hr />
]]></content>
</entry>
</feed>