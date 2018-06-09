<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr" lang="en-gb">

<!-- Mirrored from www.classicshell.net/forum/viewtopic.php?f=17&t=5655&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 10:12:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Language" content="en-gb">
<meta name="robots" content="noindex" />
<title>Classic Shell :: View topic - Windows Vista Start Menu Skin</title>

<style type="text/css">
<!--

body {
	font-family: Verdana,serif;
	font-size: 10pt;
}

img {
	border: 0;
}

td {
	font-family: Verdana,serif;
	font-size: 10pt;
	line-height: 150%;
}

.code, .codecontent, 
.quote, .quotecontent {
	margin: 0 5px 0 5px;
	padding: 5px;
	font-size: smaller;
	border: black solid 1px;
}

.quotetitle {
	color: black;
	display : block;
	font-weight: bold;
}

.forum {
	font-family: Arial,Helvetica,sans-serif;
	font-weight: bold;
	font-size: 18pt;
}

.topic {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 14pt;
	font-weight: bold;
}

.gensmall {
	font-size: 8pt;
}

hr {
	color: #888;
	height: 3px;
	border-style: solid;
}

hr.sep {
	color: #aaa;
	height: 1px;
	border-style: dashed;
}
//-->
</style>

</head>
<body>

<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
<tr>
	<td colspan="2" align="center"><span class="Forum">Classic Shell</span><br /><span class="gensmall"><a href="index.html">http://www.classicshell.net/forum/</a></span></td>
</tr>
<tr>
	<td colspan="2"><br /></td>
</tr>
<tr>
	<td><span class="topic">Windows Vista Start Menu Skin</span><br /><span class="gensmall"><a href="viewtopic88c0.html?f=17&amp;t=5655">http://www.classicshell.net/forum/viewtopic.php?f=17&amp;t=5655</a></span></td>
	<td align="right" valign="bottom"><span class="gensmall">Page <strong>1</strong> of <strong>2</strong></span></td>
</tr>
</table>



	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Sat Jan 30, 2016 10:12 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hello everyone, I have just joined the Classic Shell forums, but I've been using Classic Shell itself for some time now.<br /><br />So, I made a Vista start menu skin for Classic Shell! It's about 95-98% identical to the original, in both functionality and looks. There are still some issues I haven't fixed yet, but let me explain the whole story.<br /><br />Firstly, I was told by a friend to try Windows 8 once again, so I would need Classic Shell anyway for this. Well, I did so and then it worked like a charm. Then, since we both love Vista, he found a Vista skin here by Splitwirez, which is a WIP and adds the power buttons in the menu. Although, there's the issue of the buttons looking very condensed and a bit big (or very expanded if classic shell is used in another language or has another shutdown button as default). The fix here is: the original themes included with classic shell use text as the shutdown button, right? Well, basically I had to modify the language ini file to get the length of the button to be kinda exact to the original. So, if you use this theme, don't ask why you see something like &quot;<em>Sh&amp;ut Downaliiiigi</em>&quot; in the ini file or the power button if you revert to another theme <img src="images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><br /><br />Then, I went to the skin7 file itself. Basically, here you'd need an image editor like Photoshop to get the skin to look perfect. I used CS6 for this theme, and messed with the skin bitmaps and code for hours. I also had to shrink the shutdown text size to get the button size as close as it can be to the original. The hovering colors are almost identical to the original, the search box color was modified to suit a Vista theme (really, getting the Search box to be exactly like the original won't ever happen, because you need to get the glass effect the menu has itself in a bitmap that expands to fit the search box size in the start menu).<br /><br /><br /><span style="font-family:Segoe UI;"><em><strong>This theme provides:</strong></em></span><br /><ul><li><span style="font-family:Segoe UI;">Excellent looks of the Windows NT 6.0 Start Menu &#40;Vista and Server 2008&#41;</span></li><li><span style="font-family:Segoe UI;">Almost 100% resemblance of the Vista hovering colors</span></li><li><span style="font-family:Segoe UI;">Fully working and perfectly fit power buttons</span></li><li><span style="font-family:Segoe UI;">A beautiful Search box to search whatever you want</span></li></ul><span style="font-family:Segoe UI;"><strong><br /><em>Here are the known issues of the theme for now:</em></strong></span><br /><ul><li><span style="font-family:Segoe UI;">Power button can&#39;t have both shutdown and lock functions in the same bitmap, as only Vista can have 2 functions in its power button at the same time in the same bitmap.</span></li><li><span style="font-family:Segoe UI;">The user frame at the top of the menu isn&#39;t the glossy one found in Vista and Server 2008.</span></li><li><span style="font-family:Segoe UI;">If you decide to revert to another theme that uses text in the power button, you&#39;ll notice the &quot;Sh&amp;ut Downalliiiigi&quot; text used to extend the power button to the length of the original, so you&#39;ll have to modify the language ini file by yourself and change that in your language &#40;for example, look for the Menu.Shutdown line in the en-US section, if you use Classic Shell in English of the US&#41;, or recover it by using your backup copy of the ini file.</span></li><li><span style="font-family:Segoe UI;">The glass buttons in the right glass section of the start menu are not really similar to the original Vista ones.</span></li><li><span style="font-family:Segoe UI;">If you use a language that doesn&#39;t have Latin characters, you won&#39;t get the &quot;correct&quot; power button, and if you do modify the ini, make sure you have English installed as an input language in your computer.</span></li><li><span style="font-family:Segoe UI;">This theme has only been tested in Windows 8, Server 2012 and Server 2012 R2. You might get an issue if you use another OS, but that&#39;s highly unlikely to happen.</span></li></ul><span style="font-family:Segoe UI;"><strong><br /><em>Prerequisites to make the skin function properly:</em></strong></span><br /><ul><li><span style="font-family:Segoe UI;">Make sure you have installed glass8 if you use Classic Shell in Windows 8 and later.</span></li><li><span style="font-family:Segoe UI;">If you haven&#39;t done so yet, enable Aero Glass for Classic Shell &#40;check &quot;show all settings&quot;, go to Menu Look and you&#39;ll find the option there&#41;</span></li><li><span style="font-family:Segoe UI;">Enable &quot;Reduce glass color&quot; to make it look like the Vista one.</span></li><li><span style="font-family:Segoe UI;">And, if you want a real Vista start menu, get the Vista start orb</span> <img src="images/smilies/icon_razz.gif" alt=":P" title="Razz" /></li></ul><br /><br />That's it all! Link is here: <!-- m --><a class="postlink" href="https://mega.nz/#!TEEijKoZ!R72AMXvaH_O4kzDNpLyKJb7_Wiwjd09Z1-vYhw0e20w">https://mega.nz/#!TEEijKoZ!R72AMXvaH_O4 ... -vYhw0e20w</a><!-- m -->

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/filea306.php?id=3090" alt="Vista start menu 3.png" /><br />
			<span class="gensmall">Vista start menu 3.png [ 682.22 KiB | Viewed 41627 times ]</span>
		

		<br />
	</td>
				</tr>
			
				<tr>
					<td>
			<img src="download/fileb013.png?id=3089" alt="Vista start menu 2.png" /><br />
			<span class="gensmall">Vista start menu 2.png [ 682.22 KiB | Viewed 41627 times ]</span>
		

		<br />
	</td>
				</tr>
			
				<tr>
					<td>
			<img src="download/file8c60.png?id=3088" alt="Vista start menu 1.png" /><br />
			<span class="gensmall">Vista start menu 1.png [ 682.22 KiB | Viewed 41627 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sat Jan 30, 2016 11:14 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />I love the smell of fresh coffee, and new skins in the morning.<br /><br />I'm flabbergasted!<br />Wow. Has nice delicate powder buttons on white menus.<br />You even did the new programs buttons too. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>a11ryanc</b> [ Sat Jan 30, 2016 11:47 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Very comparable to the original Vista menu, you really masted the small details quite well. Looks excellent <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Sat Jan 30, 2016 12:52 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Haha, thanks you two. It was pretty easy to find the colors for the buttons and such, but time-consuming to create the images. At least Server 2012 is awesome to work on with Photoshop CS6, and with those mods, you can barely tell if that's really Vista or not  <img src="images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Splitwirez</b> [ Sat Jan 30, 2016 2:05 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Oh geez, I literally just finished making my own Vista menu &gt;.&lt;<br /><br />EDIT: Yeah, yours is definitely better ._.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sat Jan 30, 2016 2:10 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />It's never finished.<br />You will have to make the scroll bar as well. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> <br />Time to get bizzeey. <img src="images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Sat Jan 30, 2016 2:45 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />What. The scroll bar is the same as in Vista  <img src="images/smilies/icon_neutral.gif" alt=":|" title="Neutral" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sat Jan 30, 2016 4:17 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Too many power shutdowns where I live.<br /><br />Hi OneSerendipity.<br /><br /><br />Unless it is overwritten by special  custom scroll bitmaps, <br />the default operating sytem is what shows up, at least in Win 10.<br /><br />Also.<br />There is a way to turn off glass color in the script for the shutdown button:<br /><br />[NOT DISABLE_MASK]<br /><br />Main2_selection_mask=#800000<br />Main2_split_selection_mask=#800000<br />Shutdown_selection_mask=<span style="background-color:#ffff00;">0</span><br />Shutdown_selection_search_mask=<span style="background-color:#ffff00;">0</span><br />Shutdown_selection_jump_mask=<span style="background-color:#ffff00;">0</span>

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sat Jan 30, 2016 5:15 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hi OneSerendipity.<br /><br />I also put this in to get the button to expand right off the bat:<br /><br />Shutdown_text_padding=72,22,30,0,100%<br />Shutdown_padding=0,9,0,4,100%<br />Shutdown_font=&quot;Segoe UI&quot;,normal,-1<br />Shutdown_text_color=#000000,#000000<br /><br />I was giving Splitwirez similar info too.<br />Perhaps you can corroborate together to fix the remaining nuances? <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file1e45.png?id=3093" alt="Screenshot (67).png" /><br />
			<span class="gensmall">Screenshot (67).png [ 9.12 KiB | Viewed 41532 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Splitwirez</b> [ Sat Jan 30, 2016 5:52 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" /><div class="quotetitle">juniper7 wrote:</div><div class="quotecontent">Hi OneSerendipity.<br /><br />I also put this in to get the button to expand right off the bat:<br /><br />Shutdown_text_padding=72,22,30,0,100%<br />Shutdown_padding=0,9,0,4,100%<br />Shutdown_font=&quot;Segoe UI&quot;,normal,-1<br />Shutdown_text_color=#000000,#000000<br /><br />I was giving Splitwirez similar info too.<br />Perhaps you can corroborate together to fix the remaining nuances? <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /></div><br />I have a better idea...<br /><img src="../../www.vistastartmenu.com/press/bigscreen.png" alt="" /><br /><br /><br />Now <em>THIS</em> is a Vista Start menu <img src="images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><br /><br />EDIT: The joke is that that menu is from a piece of software called &quot;<a href="http://www.vistastartmenu.com/index.html" class="postlink">Vista Start Menu</a>&quot; .-.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Gaurav</b> [ Sun Jan 31, 2016 1:08 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Nice looking skin but as you said to get the full effect, you really need Aero Glass working on Windows 8. Also for a higher DPI (150%), it needs work. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Sun Jan 31, 2016 1:45 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Thanks Gaurav, it's nice to see that something I made was finally good in the end.<br /><br />And yeah juniper7, Splitwirez and I may also collaborate in this to get that skin perfect <img src="images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br /><br /><br />Edit: Added a picture of how the orange color in All Programs looks like when you install new apps.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file8197.png?id=3094" alt="Vista start menu 4.png" /><br />
			<span class="gensmall">Vista start menu 4.png [ 43.31 KiB | Viewed 41486 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Splitwirez</b> [ Sun Jan 31, 2016 7:10 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" /><div class="quotetitle">OneSerendipity wrote:</div><div class="quotecontent">-snip-</div><br />I think I have a Vista install disk lying around somewhere. Been debating installing it on one of my spare craptops. Do you have a Vista install somewhere, or is this all from screenies? If you're using screenies, I can try to get you that userpic frame (if I can find it ;-; )...<br /><br />EDIT: WAIT A SECOND...<br /><br />...how about we put in a feature request to add a way to simply hide the shutdown button's text, preferably in the skin itself? If that were to be added, this Vista skin might just be able to become viable for inclusion into Classic Shell itself!! :OD

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sun Jan 31, 2016 8:05 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hi OneSerendipity.<br />&quot;Collaborate&quot; is the better word to use, yes. <br /><br />Splitwirez probably has the original glass buttons. I deleted all that stuff. <br />From what I recall, all the menu parts, like picture frame were not in the msstyles file. <br />Parts were scattered in other dlls in system. Tiny scroll parts are usually in the msstyle file.<br /><br /><br /><br /><br /><br /><br />About the search box<br /><br />The good news is Ivo recently made it possible to have full glass on first column, <br />without problems with some text becoming see through.<br />What that means is, the transparent glass gap can be put into the bitmaps, <br />to get closer to matching original. <br />I don't think it's possible to only have the search results on half the menu though. <br /><br />As well, the sides of search box may not come to same width, from what I tried way back, <br />with a Vista/beta hybrid. Who knows, I just wasn't trying hard enough? <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br /><br /><br />I just sent too late. Splitwirez  beat me to it.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Splitwirez</b> [ Sun Jan 31, 2016 8:12 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" /><div class="quotetitle">juniper7 wrote:</div><div class="quotecontent">Hi OneSerendipity.<br />&quot;Collaborate&quot; is the better word to use, yes. <br /><br />Splitwirez probably has the original glass buttons. I deleted all that stuff. <br />From what I recall, all the menu parts, like picture frame were not in the msstyles file. <br />Parts were scattered in other dlls in system. Tiny scroll parts are usually in the msstyle file.<br /><br /><br /><br /><br /><br /><br />About the search box<br /><br />The good news is Ivo recently made it possible to have full glass on first column, <br />without problems with some text becoming see through.<br />What that means is, the transparent glass gap can be put into the bitmaps, <br />to get closer to matching original. <br />I don't think it's possible to only have the search results on half the menu though. <br /><br />As well, the sides of search box may not come to same width, from what I tried way back, <br />with a Vista/beta hybrid. Who knows, I just wasn't trying hard enough? <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br /><br /><br />I just sent too late. Splitwirez beat me to it.</div><br />Once again, I still want a Windows Vista skin style <img src="images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><br /><br />EDIT: Also I suspect the user image frame would be in explorer.exe , as that's where it is in Windows 7. I'll look around for other useful stuff...<br /><br />MOAR EDIT: Also, I'm installing Vista on one of my Windows experimentation computers now :OD

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Sun Jan 31, 2016 10:31 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />I already have a Vista SP2 ISO and a Server 2008 disc, so we can find the userframe in there.<br /><br />edit: Look what I found in explorer.exe, too <img src="images/smilies/icon_razz.gif" alt=":P" title="Razz" />

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/filefc0e.png?id=3097" alt="Buttons.png" /><br />
			<span class="gensmall">Buttons.png [ 112.68 KiB | Viewed 41428 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sun Jan 31, 2016 10:34 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />I forgot where I found the user picture frame, way back. I only have the merged version in the Vistabeta5112+ skin.<br />Best to go for original.<br /><br />I made the Vista scroll bar up lickety–split.<br />Not exact function, very close though.<br />I'll put in a Zip, for both of you, if you want it? <br />Combination screen grab, and modded real, to fit CSM. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/filebd2a.php?id=3096">Vista Scroll bar.zip</a> [3.2 KiB]
			</span><br />
			<span class="gensmall">Downloaded 309 times</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Sun Jan 31, 2016 10:54 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />I have found the user frame already <img src="images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br /><br />Now, I wonder... will be able to get those buttons to function as they show themselves, or we will be stuck in just one? I mean, will we ever be able to change the shutdown button function, but change the button bitmap too that corresponds to the function at the same time, without having to change them?<br /><br /><br />edit: Now, for en-US, found out that you won't need to change the language text to get the button at the right size, almost. I got your patch for the text and icon padding, and it worked like a charm.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/filef9ca-2.png?id=3099" alt="Screenshot.png" /><br />
			<span class="gensmall">Screenshot.png [ 54.52 KiB | Viewed 41421 times ]</span>
		

		<br />
	</td>
				</tr>
			
				<tr>
					<td>
			<img src="download/file3b0a.php?id=3098" alt="Userframe.bmp" /><br />
			<span class="gensmall">Userframe.bmp [ 16.05 KiB | Viewed 41425 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Splitwirez</b> [ Sun Jan 31, 2016 12:50 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" /><div class="quotetitle">OneSerendipity wrote:</div><div class="quotecontent">Now, I wonder... will be able to get those buttons to function as they show themselves, or we will be stuck in just one? I mean, will we ever be able to change the shutdown button function, but change the button bitmap too that corresponds to the function at the same time, without having to change them?</div><br /><br />&gt;Implying I never mentioned requesting a Vista menu style<br />&gt;I did mention requesting a Vista menu style

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sun Jan 31, 2016 1:28 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hello OneSerendipity .<br />Something odd.<br />On your button the black dot is lower, and can be seen.<br />Mine is right on the black line.<br />Maybe shutdown text padding needs to increase by 1 pixel. Maybe some keystroke changes position ? Dunno why?<br /><br /><br />Anyway, I'm going to call it quits for today. Just going in circles now.<br />I can't figure out how to get the search box over more to the right. <img src="images/smilies/icon_neutral.gif" alt=":|" title="Neutral" /><br />What I was afraid of.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file4653.png?id=3102" alt="Almost Vista.png" /><br />
			<span class="gensmall">Almost Vista.png [ 56.92 KiB | Viewed 41403 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sun Jan 31, 2016 1:53 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Rats. It does it on mine too, when menu is opened with &quot;windows&quot; key. Not with mouse open.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>a11ryanc</b> [ Sun Jan 31, 2016 9:25 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" /><div class="quotetitle">juniper7 wrote:</div><div class="quotecontent">Hello OneSerendipity .<br />Something odd.<br />On your button the black dot is lower, and can be seen.<br />Mine is right on the black line.<br />Maybe shutdown text padding needs to increase by 1 pixel. Maybe some keystroke changes position ? Dunno why?<br /><br /><br />Anyway, I'm going to call it quits for today. Just going in circles now.<br />I can't figure out how to get the search box over more to the right. <img src="images/smilies/icon_neutral.gif" alt=":|" title="Neutral" /><br />What I was afraid of.</div><br /><br />Unusual issue. None the less, that looks pretty nice <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Was unaware Classic Shell could take a transparent resource in that regard. Mind sharing the resources/bitmaps used?<br /><br />Anyway, if anybody else is up to it. How about doing a single Vista inspired power button, with text? I ask considering that CS can only display a single power function at a time. Would make sense to have an alternative, clearly displaying said functionality. Somebody I know from Deviantart has already created something along those lines with StartIsBack <br />(not my screenshot)<br /><br /><img src="https_/i.imgur.com/2YvOAJQ.html" alt="" /><br /><img src="https_/i.imgur.com/2YvOAJQ.html" alt="" />

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file8ade.png?id=3104" alt="Capture.PNG" /><br />
			<span class="gensmall">Capture.PNG [ 129.52 KiB | Viewed 41356 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Splitwirez</b> [ Mon Feb 01, 2016 6:17 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" /><div class="quotetitle">a11ryanc wrote:</div><div class="quotecontent"><div class="quotetitle">juniper7 wrote:</div><div class="quotecontent">Hello OneSerendipity .<br />Something odd.<br />On your button the black dot is lower, and can be seen.<br />Mine is right on the black line.<br />Maybe shutdown text padding needs to increase by 1 pixel. Maybe some keystroke changes position ? Dunno why?<br /><br /><br />Anyway, I'm going to call it quits for today. Just going in circles now.<br />I can't figure out how to get the search box over more to the right. <img src="images/smilies/icon_neutral.gif" alt=":|" title="Neutral" /><br />What I was afraid of.</div><br /><br />Unusual issue. None the less, that looks pretty nice <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> Was unaware Classic Shell could take a transparent resource in that regard. Mind sharing the resources/bitmaps used?<br /><br />Anyway, if anybody else is up to it. How about doing a single Vista inspired power button, with text? I ask considering that CS can only display a single power function at a time. Would make sense to have an alternative, clearly displaying said functionality. Somebody I know from Deviantart has already created something along those lines with StartIsBack <br />(not my screenshot)<br /><br /><img src="https_/i.imgur.com/2YvOAJQ.html" alt="" /><br /><img src="https_/i.imgur.com/2YvOAJQ.html" alt="" /></div><br /><br />Eww, no. What? That wouldn't even be Vista anymore D:<br /><br /><br />WAIT A SECOND...WHAT IF WE USED AN INVISIBLE FONT FOR THE POWER BUTTON?? :OD

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Ivo</b> [ Mon Feb 01, 2016 8:38 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />You can use &quot;font=none&quot; if you want no text. Then play with the icon padding to achieve the desired size of the button.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Splitwirez</b> [ Mon Feb 01, 2016 10:50 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" /><div class="quotetitle">Ivo wrote:</div><div class="quotecontent">You can use &quot;font=none&quot; if you want no text. Then play with the icon padding to achieve the desired size of the button.</div><br /><br />Oh, really??<br /><br />Good to know :OD

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Mon Feb 01, 2016 10:58 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Yeah, tried it myself, I still can't get how to use those padding settings though  <img src="images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Mon Feb 01, 2016 3:16 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hello Team Vista.<br /><br /><br />There's a tiny black dot on the button today. La la la.<br />That black dot is the shrunken underline.<br /><br />Not successful yet with Ivo's recommendation. <br /><br />&quot;font=none&quot; like Shutdown_font=none<br />or Shutdown_font=&quot;none&quot; no worky for me. <br /><br />The other option for the text, is change shutdown button text to white,<br />and adjust it's text padding to be right on top of the white padlock, to obscure it.<br /><br /><br />Other.<br /><br />The search ends with solution, and compromise.<br /><br />I did find a way to get the right end of search box to line up. <br />It entails setting the main column's right padding to 0, <br />and adding a physical 3 pixel invisible padding to the main buttons and scroll bitmaps, <br />to make up the difference. <br />It does make the scroll look skinnier though. <br />Probably the blue split line on jumplist bitmap, <br />would need to be recentered as well. <br /><br />As it's not my skin, and only helping out, it's probably best to have less complication, <br />and leave search box ends a bit short. 2 p on left, 3 p on right.<br />I will put the bitmaps and text changes in a zip for you later this evening. <br />This will be the simple version (search not at white border). I need to rework back to what I had .<br /><br />Next.<br />Who wants to alter the tapered ends of separators in second column?<br />It needs to be changed to original dead stop type.<br /><br />What else. Um..<br />The programs button text needs to be bolder. Put this in the script&#058;<br />&quot;Programs_button_font=&quot;Segoe UI&quot;,bold,-9&quot; <br /><br />More.<br />It might be worth it to make the black part of shutdown button a tiny bit transparent to let desktop color show through.<br />It will take away some pop though, but looks more original. <br /><br /><br />Ooh.<br />I find it nice to have extra option to set menu to black/no transparency.<br />Guess that could be another option for you. It's like the basic non aero look. Just won't have the blue slate buttons.<br /><br />Just stick it at the end of script.<br /><br />OPTION REGION=&quot;No transparency&quot;,0<br /><br />[REGION]<br />Main_opacity=region<br />Main2_opacity=region<br /><br />One big question.<br />Did anybody find the original glass buttons?<br />All I could find was a very dark version.<br />I think I'll make an Ivo /Vista button hybrid to get that original light halo around the edge.<br /><br />Gotta go and eat something. Will come back in a couple of hours. <img src="images/smilies/icon_razz.gif" alt=":P" title="Razz" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Mon Feb 01, 2016 7:17 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />More or less finished the buttons. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> <br />In Zip below picture.<br /><br />I used the alpha layer from the dark button in msstyles file. <br />That's all I could find. Maybe MS adds brightness/gamma electronically to it, when menu is drawn?<br />Could never get it to look correct, the way it was.<br />Anyway, put the rgb of CSM button in middle, and copied just the 1 pixel edge from dark button, both layers. <br />Converged it all, with a little brightness boost. <br /><br />It almost looks same on a non transparent background,(see picture)<br />Seems ok on transparent. (No picture). In Win10, I even put CSM opacity to 0 to make blur more transparent.<br />Still buttons and menu don't match the clearness of blur in Vista, and Win7.<br /><br />Because the buttons got a bit bigger, this text has to replace original to match:<br /><br /><br />Main2_selection=10<br />Main2_selection_slices_X=<span style="background-color:#ffff00;">5</span>,63,<span style="background-color:#ffff00;">5</span><br />Main2_selection_slices_Y=<span style="background-color:#ffff00;">5</span>,20,<span style="background-color:#ffff00;">5</span><br /><br />Main2_split_selection=16<br />Main2_split_selection_slices_X=<span style="background-color:#ffff00;">5</span>,63,4,0,16,<span style="background-color:#ffff00;">5</span><br />Main2_split_selection_slices_Y=<span style="background-color:#ffff00;">5</span>,20,<span style="background-color:#ffff00;">5</span><br /><br /><br />Also had to change the text padding to get button to be same height as in Vista:<br /><br />Main2_text_padding=1,<span style="background-color:#ffff00;">9</span>,8,<span style="background-color:#ffff00;">9</span>,100%<br />I do find buttons looks homogenous, when there is a tiny bit of glass color on the buttons.<br /><br />Here is what I put back in:<br /><br />[NOT DISABLE_MASK]<br /><br />Main2_selection_mask=#200000<br />Main2_split_selection_mask=#200000<br />Shutdown_selection_mask=#100000<br />Shutdown_selection_search_mask=#100000<br />Shutdown_selection_jump_mask=#100000<br /><br /><br /><br />Will have to be another day before uploading the 3 menu bitmaps, with the higher white zone.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file07ce.png?id=3120" alt="Captu1245tge.PNG" /><br />
			<span class="gensmall">Captu1245tge.PNG [ 30.42 KiB | Viewed 41267 times ]</span>
		

		<br />
	</td>
				</tr>
			
				<tr>
					<td>
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/file5bd7.php?id=3119">Buttons.zip</a> [12.67 KiB]
			</span><br />
			<span class="gensmall">Downloaded 284 times</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Tue Feb 02, 2016 9:31 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Yeah, couldn't understand some things about the search box yet, but whatever. I'll make new buttons for the menu, as I found the original source <img src="images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />Edit: I made a Vista Basic theme if anyone wants, too.<br />Have only made those buttons on the right, and some experiments with the search box (not done yet).

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file14d6.png?id=3142" alt="Vista start menu 1.png" /><br />
			<span class="gensmall">Vista start menu 1.png [ 35.63 KiB | Viewed 41219 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Tue Feb 02, 2016 2:36 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hi OneSerendipity, and rest of team.<br /><br />Here are your menu bitmaps back.<br />I did not change anything on the black bitmaps, <br />except for moving the white part up higher to match original.<br /><br /><br />As the skin file has the main, jump, and search bitmap masks just sitting there doing nothing, <br />I did however turn them back into red masks. Mild, not strong. <br />I took the alpha layer of your bitmaps, made negative, and turned to red. <br />The reason I did was in Win 10, I have to put opacity to 0 to get to look like Vista. <br />Problem is, all the glass color is stripped away at that level. This puts some color back in menu.<br />It can be easily shut off anyway, for other operating systems.<br /><br />The search background bitmaps had to be modified to get the box skinny looking.<br /><br /><br />Search box<br />If it really bothers you about the search box ends not coming to the ends,<br />another way is burn it into the main, jump, and search bitmaps.<br /><br /><br />Glass Buttons<br />Be great if you get the original glass buttons.<br />Still the ones I made aren't that bad. Just need to darken 2 pixels in each corner.<br /><br /><br />The black spot on shutdown button.<br />Ended up putting on top line, so English &quot;shutdown&quot; language, and its underline are hidden.<br />Other languages like German will have the underline in a different place.<br />Hope Ivo gives us more info on turning off the text? <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />All the settings I gave already as well as these updated ones, help to make it look more like Vista.<br />I have no issues with it on my Win 10 system. Thanks <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> <br />Hope I didn't miss anything.<br /><br />One more thing. Even though it's not pure Vista, it would still be nice to make a Vista skin with a regular shutdown button,<br />for people who might get confused by the function. I'm sure a11ryanc and others would be happy. <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />Here are the changes:<br /><br /><br /><br /><br />Main_opacity=fullglass<br />Main2_opacity=fullglass<br /><br /><br /><br /><br />Main_bitmap_slices_Y=13,329,43<br />Main_bitmap_search_slices_Y=13,329,43<br />Main_bitmap_jump_slices_Y=13,329,43<br /><br />Main_padding=10,10,3,4<br />Main_search_padding=10,10,10,4<br />Main_jump_padding=3,10,10,4<br /><br />Main2_padding=3,10,4,4<br /><br />Search_padding=0,9,2,4,100%,100%,0%,100%<br />Search_frame=0<br />Search_background=23<br />Search_background_mask=24<br />Search_background_slices_X=1,1,2, 1,17,7, 0,1,0<br />Search_background_slices_Y=1,5,3, 0,4,0, 3,3,1<br />Search_background_padding=3,-3,0,0<br /><br /><br />Shutdown_text_padding=53,0,49,21,100%<br />Shutdown_padding=0,9,0,3,100%<br />Shutdown_font=&quot;Segoe UI&quot;,normal,-1<br />Shutdown_text_color=#000000,#000000

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/filec9e3.php?id=3143">Bitmap Main.zip</a> [29.29 KiB]
			</span><br />
			<span class="gensmall">Downloaded 289 times</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Tue Feb 02, 2016 3:18 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Thanks a lot for helping with this, I'll be working on the power buttons for now. <img src="images/smilies/icon_e_wink.gif" alt=";)" title="Wink" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Tue Feb 02, 2016 3:21 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />The only problem I found, is higher dot per inch, the search area looks terrible, as the main bitmap can not stretch the white portion higher. <br />Too bad. Any way I'm enjoying it 100% at 100% size. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>a11ryanc</b> [ Tue Feb 02, 2016 3:45 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Thanks for sharing, juniper7.<br />This how everything looks on my end, probably a bit too much like Vista  <img src="images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />And yes, I do use 8.0 over 8.1 I Find it's DWM performance snappier, and it has a tendency of accepting mods with less regression. Can install 2012 R1 if the lack of Windows Updates ever become a bothersome.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/file53b2.jpg?id=3144">Untitled.jpg</a> [264.37 KiB]
			</span><br />
			<span class="gensmall">Not downloaded yet</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Tue Feb 02, 2016 4:05 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hey a11ryanc, and everybody else.<br /><br />You are so fast. You really know what you are doing.<br />Apparently I don't. I just realized if large fonts is turned on, the shutdown button goes wonky.<br />The shutdown text padding is hiding in the large font section.<br /><br />[LARGE_FONT]<br /><br />;Shutdown_text_padding=10,5,12,6,100%<br />Shutdown_text_padding=53,0,49,21,100%<br /><br />Have to change to new setting, or just delete the shutdown padding text in large fonts.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Wed Feb 03, 2016 3:14 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Guys, I have found something we need to adjust for the power button. I made a shutdown power button to test in the menu, and it looks pretty awful, because it's a bit stretched (137x24) from the original size (129x24). The second column needs to be adjusted to that size and we need bigger buttons in the same column, too.<br /><br />Here's the image of how the menu looks like now: <!-- m --><a class="postlink" href="../../ft.trillian.im/d0e126060e6636736853e7a887355c68b48441ae/6F1Rr8y7RAqLpqms41e6c8KOZAFWR.jpg">http://ft.trillian.im/d0e126060e6636736 ... OZAFWR.jpg</a><!-- m -->

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Wed Feb 03, 2016 5:29 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />First try and reduce the left and right shutdown text padding, (the first and third  number),<br />until you get what you want. <br /><br />To adjust how much area space outside of shutdown button,<br />adjust Shutdown_padding to taste.<br /><br />To match original Vista, for the other second column buttons left and right space outside,<br />about&#058;<br />Main2_padding=<span style="background-color:#ffff00;">5</span>,10,<span style="background-color:#ffff00;">7</span>,4<br /><br />Bigger buttons,Huh?<br /><br />Sorry I don't understand everything.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Wed Feb 03, 2016 5:35 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Could be a good single one with white text.<br />Have the icon picture on left, and shutdown text to the right. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br />Editing of bitmap and slices break points required though.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/filee5d6.png?id=3154" alt="6F1Rr8y7RAqLpqms41e6c8KOZAFWR[1] copy.png" /><br />
			<span class="gensmall">6F1Rr8y7RAqLpqms41e6c8KOZAFWR[1] copy.png [ 17.18 KiB | Viewed 41070 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Thu Feb 04, 2016 5:26 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Okay, thanks for the advice. I uploaded a Vista start menu screenshot to show how ours is supposed to be like. The buttons I'm trying to talk about are those in the second column (Computer, Control Panel...). In Vista, they're much bigger and not that condensed as they are in this menu. Also, I got the main padding to be exactly the same of Vista (the left menu). Now the Search box looks smaller, as it needs to be stretched to the main menu's size, and the All Programs button needs resizing, too.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file63e3.jpg?id=3155" alt="Screenshot.jpg" /><br />
			<span class="gensmall">Screenshot.jpg [ 35.02 KiB | Viewed 41027 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Thu Feb 04, 2016 8:15 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hi OneSerendipity.<br /><br />Um, kind of hard to see what you are talking about. The only button I see is the shutdown button.<br /><br />Upload one or two pictures with the buttons showing, so Dr. Juniper can diagnose health issue.<img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />Did you replace the second column button bitmaps with the updated new dimensions/padding from above?<br />The 2 x picture of mine above shows the height/ width exactly same as Vista. <br />It just needed the extra outside padding.<br />Got a feeling your going for the complicated way, <br />where buttons and scroll bitmaps need extra invisible pixels attached to right side?<br /><br />Theres is not much we can do about different sizes, fonts etc, for the main buttons.<br />Just like XP has different size icons, fonts. Ivo said not possible.<br /><br />Get back to you evening.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Thu Feb 04, 2016 9:11 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Well, to describe this better, I'm gonna post two screenshots of the buttons I'm talking about (the one in the classic shell start menu skin and the original Vista one). That one is a bit too small. (check photos labeled Screenshot and vista start menu 1)<br /><br /><br />Also, I uploaded the image of the original menu showing how the all programs icon/text should be like in size (remember, in Vista with the English language pack, the All Programs text uses Tahoma as its font instead of bold Segoe UI, which is what some other language packs like Greek use).

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file8069.jpg?id=3162" alt="Screenshot 2.jpg" /><br />
			<span class="gensmall">Screenshot 2.jpg [ 35.54 KiB | Viewed 41014 times ]</span>
		

		<br />
	</td>
				</tr>
			
				<tr>
					<td>
			<img src="download/file63db.jpg?id=3161" alt="Screenshot.jpg" /><br />
			<span class="gensmall">Screenshot.jpg [ 35.4 KiB | Viewed 41014 times ]</span>
		

		<br />
	</td>
				</tr>
			
				<tr>
					<td>
			<img src="download/file09c6.png?id=3160" alt="Vista start menu 1.png" /><br />
			<span class="gensmall">Vista start menu 1.png [ 77.97 KiB | Viewed 41014 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Thu Feb 04, 2016 2:29 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Dr. Juniper will comment now, instead of tonight. <br /><br />The prognosis is the menu can live, but needs to get rid of some extra baggage in the second column,<br />and if you are really particular about having the extra main padding pixels, <br />then it is better to have a menu operation.<br /><br />There is no way to get it exactly like original, for even changing to large font option, or different font,<br />the height, and width changes dramatically. Ivo made it this way to shrink/expand.<br /><br /><br />From what I can see, you will have to reset second column ( Main2_text_padding ), to different values. <br />It is hiding just above the search text location.<br />Increase second and forth number to adjust height.<br />Decrease the third number to shrink the right side. <br /><br />If I remember correctly ( Main2_arrow_padding ), reducing those numbers a little, helps shrink right part too.<br />Just don't go overboard, as text may become too close to arrows or end of button.<br /><br />There is another way to shrink the width in CSM settings, in the &quot;Main Menu&quot; tab. <br />You would have to inform the user to adjust to the proper values, or provide an XML file for them to load. <br /><br /><br />Try all those things first. If you still want the search box ends to match the white menu, then it's best to embed the search box into the bitmaps.<br />You would still need to use the search background/search background mask bitmaps.<br />Just make the border on the bitmap 23 transparent, as it's going to be burnt in on the menu bitmaps. <br />Since you know your way around using Adobe, I'm sure you can copy left part, paste, copy right part, paste, copy middle, n paste, and your done.<br />If you are going to include main menu bitmap mask in your final, will have to make the same search area black, so no color bleeds through. <br /><br />Would have to put separators through image editor to make correct end distance, once all paddings finished. <br /><br />I may not be able to help much anymore, cause you know as much as I do now.<img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br />Would have to go to the masters for more info.<br /><br />Really have to go Bye.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Thu Feb 04, 2016 6:02 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />I forgot about you asking about the programs button.<br />It's all the same procedure.<br />First number is left, second top, third right, forth bottom.<br /><br />Just follow chicken scratchings.<br /><br /><strike>Search_background_padding &#40;top&#41;</strike> <span style="background-color:#ffff00;">Search_padding=0,11,2,4,100%,100%,0%,100%</span><br /><br />Programs_button_text_padding (top and bottom)<br /><br />Main_icon_padding (top and Bottom) <br /><br />Main_separator, Main2_separator (add invisible padding pixels to bitmap top and bottom)<br /><br /><img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br />EDIT: Correction. See how easy it is to get the words mixed up! <img src="images/smilies/icon_redface.gif" alt=":oops:" title="Embarrassed" />

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file8f40.jpg?id=3165" alt="qwertyu.jpg" /><br />
			<span class="gensmall">qwertyu.jpg [ 84.56 KiB | Viewed 40884 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>OneSerendipity</b> [ Fri Feb 05, 2016 2:26 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Could you please also post how you have set it up too, if you don't mind? I have some issues figuring out how to do those changes, they get messed up.

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Fri Feb 05, 2016 4:47 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />I never did set it up any further. I was just visualizing it in my brain. <img src="images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br />Kind of busy with rest of life.<br /><br />I'll work on the menu bitmaps embedding.<br />Only half finished, cause got to a bit of a snafu in the search menu bitmap dept. It stretches all way to right edge.<br />I'm sure there is a way around it, but will take time for neurons to fire up a solution.<br />Probably making a modified search box to only show on search, is the answer.  <img src="images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /> <br /><br />For the bitmaps that I just tested, that work with text that I had given before,<br />this will set the search box at the edge for main menu, and jumplist menu only. <br /><br />To make the space at bottom of &quot;all Programs button&quot;<br />Search_padding=0,11,2,4,100%,100%,0%,100%<br /><br />Don't know when I can come back.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/file1a41.php?id=3164">newbimaps.zip</a> [19.1 KiB]
			</span><br />
			<span class="gensmall">Downloaded 283 times</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Fri Feb 05, 2016 6:49 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />I don't see anything else in the skinning tutorial.<br /><br />I think this is as good as it gets for the search box. Not perfect. <img src="images/smilies/icon_neutral.gif" alt=":|" title="Neutral" /> <br />In search mode menu, it will not match (will not get to same point as regular main menu view).<br /><br />Will have to add two extra bitmaps into the file, not replace.<br /><br />Have all this text:<br /><br /><br /><br /><br /><br />Search_padding=0,11,2,4,100%,100%,0%,100%<br />Search_frame=0<br />Search_background=23<br />Search_background_mask=24<br />Search_background_slices_X=1,1,2, 1,17,7, 0,1,0<br />Search_background_slices_Y=1,5,3, 0,4,0, 3,3,1<br />Search_background_padding=3,-3,0,0<br />Search_hint_font=&quot;Segoe UI&quot;,italic,-9<br /><br />Search_background_search=37 <br />Search_background_search_mask=38 <br />Search_background_search_slices_X=1,1,2, 1,17,7, 0,1,0<br />Search_background_search_slices_Y=1,5,3, 0,4,0, 3,3,1<br />Search_background_search_padding=3,-3,0,0<br /><br /><br /><br />I tried this in place of part of above. <br /><br />Search_background_search_slices_X=1,1,2, 1,17,4, 3,1,0<br /><br />It gets a little closer to right, but offsets the search button on the X.<br />Oh if you are wondering why the top and bottom of that button overlaps on the frame, <br />it's because I had to shrink the height of the regular size search box to Vista narrow.<br />There is a way to make it better, by adding invisible bitmap padding on top &amp; bottom on main selector button.<br />I don't think it's a good idea. It will increase the height of menu, an additional 2 pixels for every entry on the menu.

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/fileb581.php?id=3166">Additional search bitmaps  for search menu.zip</a> [1.03 KiB]
			</span><br />
			<span class="gensmall">Downloaded 283 times</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Fri Feb 05, 2016 8:04 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Here is a bit more to change. <br />You can tweakim some more. It not exact, very close though:<br /><br />Main_separator=17<br />Main_separator_slices_X=10,3,10<br /><br /><br /><br />Programs_button_text_padding=1,4,8,4,100%<br />Programs_button_new_text_padding=1,4,8,4,100%<br /><br /><br /><br />This wasn't even in the file. Was only in head! Have to add it:<br /><br />Main_icon_padding=3,2,3,2,100%<br /><br /><br />Have a nice weekend <img src="images/smilies/icon_razz.gif" alt=":P" title="Razz" />

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/file5a96.php?id=3167">Bitmap 17.zip</a> [170 Bytes]
			</span><br />
			<span class="gensmall">Downloaded 262 times</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Thu Feb 11, 2016 2:57 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Never give up.<br /><br />Hi OneSerendipity.<br />I don't know if you are still around.<br />While fixing somebodies washing machine, (they put carpets in, that seized it, &amp; broke the motor coupler), <img src="images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> <br />I was daydreaming about a different approach to the search surround area.<br />It may actually work for 100% up to 150% menu sizing. There will probably be a little bit of pixel darkness/brightness mismatch,<br />on a two semi transparent white lines. This will happen when part of the search bitmap overlaps on the main menu bitmap.<br />It should (fingers crossed), keep the search box at same place through the different main, search, jump modes. <br /><br />I just don't have time to try out everything. It may be end of this weekend, or next weekend. All the main and search bitmaps would have to change.<br />All depends on the padding issue. Just when I think I know it, and the meaning of life, it slips away, back to start again.<img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br />I would have to modify your bitmaps a little to get it to jive better, and also darken the bottom of menu to look more like Vista.<br /><br />Just like windows updates, there is always another update. <img src="images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" />

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sat Feb 13, 2016 10:59 am ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />Hello OneSerendipity and Splitwirez. <br /><br />Thank you.<br />As you found the original transparent shutdown buttons,<br />I composited them with different color version. <br />If anybody wants it, make sure to copy/save the best browser way to get the transparent alpha layer, (32 bit) intact.<br />Then just swap it out.<br /><br />Now a request from both of you, &quot;Windows tourists&quot;. Have any of you ever seen bigger shutdown/padlock icons, with the same character<br />as in the two sizes on the shutdown buttons, in the files anywhere?<br />I'm struggling to make 150% size buttons, but the icon pictures look so puny small. See picture.<br />They would need to be around 28 pixels high, to look normal. The original are about 17 &amp; 19 pixel size.<br /><br />Got stuck again on the search box padding. Getting closer. Am letting my brain work on it in the background.<br />Want to continue with the new altered menu bitmaps, and buttons. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" />

		
			<br clear="all" /><br />

			<table class="tablebg" width="100%" cellspacing="1">
			<tr>
				<td><b class="genmed">Attachments: </b></td>
			</tr>
			
				<tr>
					<td>
			<img src="download/file5fda.php?id=3197" alt="RED Transparent Shutdown button.bmp" /><br />
			<span class="gensmall">RED Transparent Shutdown button.bmp [ 36.33 KiB | Viewed 40366 times ]</span>
		

		<br />
	</td>
				</tr>
			
				<tr>
					<td>
			<img src="download/file6443.php?id=3196" alt="AMBER Transparent Shutdown button.bmp" /><br />
			<span class="gensmall">AMBER Transparent Shutdown button.bmp [ 36.33 KiB | Viewed 40366 times ]</span>
		

		<br />
	</td>
				</tr>
			
				<tr>
					<td>
			<img src="download/file0b9d.png?id=3194" alt="150%big button.PNG" /><br />
			<span class="gensmall">150%big button.PNG [ 5.33 KiB | Viewed 40400 times ]</span>
		

		<br />
	</td>
				</tr>
			
			</table>
		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>Splitwirez</b> [ Sat Feb 13, 2016 9:23 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />I feel like my name shouldn't even be credited for this. I mean, what have I actually contributed to it? &gt;.&lt;

		

		</td>
	</tr>
	</table>


	<hr width="85%" />

	<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
	<tr>
		<td width="10%" nowrap="nowrap">Author:&nbsp;</td>
		<td><b>juniper7</b> [ Sat Feb 13, 2016 10:10 pm ]</td>
	</tr>
	<tr>
		<td width="10%" nowrap="nowrap">Post subject:&nbsp;</td>
		<td><b>Re: Windows Vista Start Menu Skin</b></td>
	</tr>
	<tr>
		<td colspan="2"><hr class="sep" />If it wasn't for you Splitwirez, initiating the Vista like skin in the first place,<br />could never have progressed to what it is now, and can be, going forward. I thought you did the buttons set up?<br /><br />That's kind of like why I'm asking if you, or OneSerendipity could look for bigger icons that can be put on 150% size menu, <br />as Gaurav mentioned that 150% needs work. (Post way up near top.)<br />I downloaded a couple from internet, but because I suck big time in graphic arts, making them correct size came out looking like Sh%#$@!    <img src="images/smilies/icon_redface.gif" alt=":oops:" title="Embarrassed" />  <img src="images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br /><br />Maybe you can make the user picture frame better. Something odd with the way the downloaded one looks at the top.<br />It gets darker, instead of lighter. You could perfectionize it?   <img src="images/smilies/icon_neutral.gif" alt=":|" title="Neutral" />

		

		</td>
	</tr>
	</table>


<hr width="85%" />

<table width="85%" cellspacing="3" cellpadding="0" border="0" align="center">
<tr>
	<td><span class="gensmall">Page <strong>1</strong> of <strong>2</strong></span></td>
	<td align="right"><span class="gensmall">All times are UTC - 8 hours [ <abbr title="Daylight Saving Time">DST</abbr> ]</span></td>
</tr>
<tr>
	<td colspan="2" align="center"><span class="gensmall">Powered by phpBB&reg; Forum Software &copy; phpBB Group<br />https://www.phpbb.com/</span></td>
</tr>
</table>

</body>

<!-- Mirrored from www.classicshell.net/forum/viewtopic.php?f=17&t=5655&view=print by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 10:12:52 GMT -->
</html>