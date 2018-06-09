<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=6603" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-08-28T05:11:38-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=6603</id>
<entry>
<author><name><![CDATA[dethtroll]]></name></author>
<updated>2016-08-28T05:11:38-07:00</updated>
<published>2016-08-28T05:11:38-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29074#p29074</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29074#p29074"/>
<title type="html"><![CDATA[Re: Column headers filtering using boolean OR/AND]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29074#p29074"><![CDATA[
Sorry, I didn't quite understand what you mean.<br />I noticed I could use search box to get wanted result, but it's not very useful because of a lot of typing. I’m just asking about possibility to attach different way of filtering files to column drop down menu. As far as I understand this is not possible using instruments given by windows explorer, the only way to do that is to inject custom code. You are familiar with that, your tool shows it as clear as it can be, that's why I asked my question here. I'm interesting in possibility of making this thing, if it's not possible - well, I can live with that, but if there is a way to implement that - it would be very handy. I even think that could breath in new life to windows explorer and the way of organizing photo libraries =)<br />Anyway I just asked <img src="http://www.classicshell.net/forum/images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14890">dethtroll</a> — Sun Aug 28, 2016 5:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-28T04:40:09-07:00</updated>
<published>2016-08-28T04:40:09-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29072#p29072</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29072#p29072"/>
<title type="html"><![CDATA[Re: Column headers filtering using boolean OR/AND]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29072#p29072"><![CDATA[
For that, could you not use the Explorer search box?<br /><br />tags:family AND tags:vacation<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Aug 28, 2016 4:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dethtroll]]></name></author>
<updated>2016-08-28T04:11:44-07:00</updated>
<published>2016-08-28T04:11:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29071#p29071</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29071#p29071"/>
<title type="html"><![CDATA[Re: Column headers filtering using boolean OR/AND]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29071#p29071"><![CDATA[
Excuse me for bad explanation. I was talking about windows explorer is applying filter using OR operator for multiple selected items under the same column. It is almost always is the only reasonable solution, because there is no sense in using AND operator to filter files by name for example (file cannot have name which first letter belong to different ranges: 0-9 and A-H at the same time, it can't have date of creation that is laying in different date ranges that don't intersect, and so on). So explorer using OR operator to apply filter that contains several values under the single column. Generally, filters look like next examples. Filter by name: [0-9] OR [A-H], filter by date: [01.01.2006] OR [02.01.2006].<br />But used logic reduce advantages of filtering files by applied tags. Searching would be much powerful if instead of using OR only, it supports AND operator too. For example, I have gallery of photos, which were tagged with 'family', 'friends' and 'vacation' tags. If I choose 'family' and 'vacation' tags I will get result that contains mixed set of photos with vacation I spent with my family or my friends [filter: family OR vacation], but I want to have ability to filter all my photos precisely: by filtering them using 'family' and 'vacation' tags applied to photo at the same time [filter: family AND vacation].<br />I understand I can reach same result using search input, but it becomes almost unusable in case list of applied tags is huge and length of single tag is greater that a few letters.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14890">dethtroll</a> — Sun Aug 28, 2016 4:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2016-08-28T03:29:56-07:00</updated>
<published>2016-08-28T03:29:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29067#p29067</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29067#p29067"/>
<title type="html"><![CDATA[Re: Column headers filtering using boolean OR/AND]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=29067#p29067"><![CDATA[
Are you talking about the case when selecting multiple values for the same property or when filtering by different properties? I observed that Explorer was using AND operator if you select multiple properties. e.g. if you select, PNG for type and large size in a folder of assorted images, the filtering behavior was equivalent to entering type:PNG AND size:large in the Explorer search box.<br /><br />Did the Vista Explorer use the boolean AND operator? Can you give some examples of AND operator and how Explorer is using OR when filtering by property?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sun Aug 28, 2016 3:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dethtroll]]></name></author>
<updated>2016-08-25T02:35:05-07:00</updated>
<published>2016-08-25T02:35:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=28867#p28867</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=28867#p28867"/>
<title type="html"><![CDATA[Column headers filtering using boolean OR/AND]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6603&amp;p=28867#p28867"><![CDATA[
Sorry if I missed something, but I did not find any related topic on the forum.<br />Is it technically possible to add custom menu item to filtering menu of column header?<br /><br />I understand this is absolutely new feature, but I just started using your app after I found it solves the problem with showing these details headings in every view, so I can filter files by tags anytime I need it. But I found it’s not very useful because explorer use only boolean OR for filtering, what is not the best way for filtering using tags - it would be much better if filter could support additional boolean AND operator. So the question: is it possible to add custom menu item with checkbox - [x] All (or Any, it doesn't matter)? I know explorer shows even advanced calendar control, so it definetly have some kind of API for working with drop down menus and file filtering, I only don't know are these tools are opened to developers. <br />I'm a programmer, but I have no experience programming windows explorer, therefor I ask you guys<br /><br />Windows Vista with header/footer and separator menu items<br /><img src="http://www.activewin.com/winvista/images/Windows%20Explorer%20-%20Column%20Headings.png" alt="" /><br /><br />Filtering by date using Calendar control.<br /><img src="http://winaero.com/blog/wp-content/uploads/2014/03/Headers-in-List-View.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14890">dethtroll</a> — Thu Aug 25, 2016 2:35 am</p><hr />
]]></content>
</entry>
</feed>