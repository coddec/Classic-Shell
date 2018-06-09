<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7921" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-09-22T08:17:45-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7921</id>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-09-22T08:17:45-07:00</updated>
<published>2017-09-22T08:17:45-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34192#p34192</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34192#p34192"/>
<title type="html"><![CDATA[Re: User photo not loaded]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34192#p34192"><![CDATA[
Classic Shell uses the undocumented interface IUserTileStore to get the path to the user image.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Fri Sep 22, 2017 8:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[skonvols2k]]></name></author>
<updated>2017-09-21T11:50:22-07:00</updated>
<published>2017-09-21T11:50:22-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34181#p34181</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34181#p34181"/>
<title type="html"><![CDATA[Re: User photo not loaded]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34181#p34181"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Classic Shell simply asks Windows what bitmap to use.<br />You need to figure out what is the difference between manually setting the picture and running your script. Possibly you can run Process Monitor and see what is written where.<br /></div><br /><br />Hi,<br />i certainly do that, can you help me explaining how Classic Shell asks to windows what bitmap to use? Is a file? a Reg value?<br />i'm a sysadmin so don't worry and be specific <img src="http://www.classicshell.net/forum/images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24304">skonvols2k</a> — Thu Sep 21, 2017 11:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2017-09-21T07:49:01-07:00</updated>
<published>2017-09-21T07:49:01-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34178#p34178</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34178#p34178"/>
<title type="html"><![CDATA[Re: User photo not loaded]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34178#p34178"><![CDATA[
Classic Shell simply asks Windows what bitmap to use.<br />You need to figure out what is the difference between manually setting the picture and running your script. Possibly you can run Process Monitor and see what is written where.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Sep 21, 2017 7:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[skonvols2k]]></name></author>
<updated>2017-09-21T06:16:13-07:00</updated>
<published>2017-09-21T06:16:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34177#p34177</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34177#p34177"/>
<title type="html"><![CDATA[Re: User photo not loaded]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34177#p34177"><![CDATA[
<div class="quotetitle">Gaurav wrote:</div><div class="quotecontent"><br />Try using Classic Start Menu's own &quot;User picture&quot; setting? It's on the General Behavior tab and its reg value is: HKCU\Software\IvoSoft\ClassicStartMenu\Settings. String value: UserPicturePath. A single high-res pic should work.<br /></div><br /><br />The strange think is that if you manually change user picture in windows settings, classic shell will automatically load it, but setting the user picture in windows via the provided script classicshell doesn't load that.<br />I will prefer that classicshell will load windows user picture automatically without setting the reg value you provide.<br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24304">skonvols2k</a> — Thu Sep 21, 2017 6:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-09-21T04:25:31-07:00</updated>
<published>2017-09-21T04:25:31-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34175#p34175</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34175#p34175"/>
<title type="html"><![CDATA[Re: User photo not loaded]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34175#p34175"><![CDATA[
Try using Classic Start Menu's own &quot;User picture&quot; setting? It's on the General Behavior tab and its reg value is: HKCU\Software\IvoSoft\ClassicStartMenu\Settings. String value: UserPicturePath. A single high-res pic should work.<br /><br />If you change the Classic Start Menu Registry key, make sure to exit the Start Menu first and then start it again:<br />C:\Program Files\Classic Shell\ClassicStartMenu.exe -exit<br />C:\Program Files\Classic Shell\ClassicStartMenu.exe<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Thu Sep 21, 2017 4:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[skonvols2k]]></name></author>
<updated>2017-09-20T13:01:20-07:00</updated>
<published>2017-09-20T13:01:20-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34168#p34168</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34168#p34168"/>
<title type="html"><![CDATA[User photo not loaded]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7921&amp;p=34168#p34168"><![CDATA[
Hi,<br />as many users do i have my company's users photos loaded in active directory, Windows 10 users' photos are loaded by the powershell logon below:<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&#91;CmdletBinding(SupportsShouldProcess=$true)&#93;Param()<br />function Test-Null($InputObject) { return !(&#91;bool&#93;$InputObject) }<br /><br />Function ResizeImage() {<br />param(&#91;String&#93;$ImagePath, &#91;Int&#93;$Quality = 90, &#91;Int&#93;$targetSize, &#91;String&#93;$OutputLocation)<br /><br />Add-Type -AssemblyName &quot;System.Drawing&quot;<br /><br />$img = &#91;System.Drawing.Image&#93;::FromFile($ImagePath)<br /><br />$CanvasWidth = $targetSize<br />$CanvasHeight = $targetSize<br /><br />#Encoder parameter for image quality<br />$ImageEncoder = &#91;System.Drawing.Imaging.Encoder&#93;::Quality<br />$encoderParams = New-Object System.Drawing.Imaging.EncoderParameters(1)<br />$encoderParams.Param&#91;0&#93; = New-Object System.Drawing.Imaging.EncoderParameter($ImageEncoder, $Quality)<br /><br /># get codec<br />$Codec = &#91;System.Drawing.Imaging.ImageCodecInfo&#93;::GetImageEncoders() | Where {$_.MimeType -eq 'image/jpeg'}<br /><br />#compute the final ratio to use<br />$ratioX = $CanvasWidth / $img.Width;<br />$ratioY = $CanvasHeight / $img.Height;<br /><br />$ratio = $ratioY<br />if ($ratioX -le $ratioY) {<br />$ratio = $ratioX<br />}<br /><br />$newWidth = &#91;int&#93; ($img.Width * $ratio)<br />$newHeight = &#91;int&#93; ($img.Height * $ratio)<br /><br />$bmpResized = New-Object System.Drawing.Bitmap($newWidth, $newHeight)<br />$graph = &#91;System.Drawing.Graphics&#93;::FromImage($bmpResized)<br />$graph.InterpolationMode = &#91;System.Drawing.Drawing2D.InterpolationMode&#93;::HighQualityBicubic<br /><br />$graph.Clear(&#91;System.Drawing.Color&#93;::White)<br />$graph.DrawImage($img, 0, 0, $newWidth, $newHeight)<br /><br />#save to file<br />$bmpResized.Save($OutputLocation, $Codec, $($encoderParams))<br />$bmpResized.Dispose()<br />$img.Dispose()<br />}<br /><br />#get sid and photo for current user<br />$user = (&#91;ADSISearcher&#93;&quot;(&amp;(objectCategory=User)(SAMAccountName=$env:username))&quot;).FindOne().Properties<br />$user_photo = $user.thumbnailphoto<br />$user_sid = &#91;System.Security.Principal.WindowsIdentity&#93;::GetCurrent().User.Value<br />Write-Verbose &quot;Updating account picture for $($user.displayname)...&quot;<br /><br />#continue if an image was returned<br />If ((Test-Null $user_photo) -eq $false) <br />{<br />Write-Verbose &quot;Success. Photo exists in Active Directory.&quot;<br /><br />#set up image sizes and base path<br />$image_sizes = @(32, 40, 48, 96, 192, 200, 240, 448)<br />$image_mask = &quot;Image{0}.jpg&quot;<br />$image_base = $env:public + &quot;\AccountPictures&quot;<br /><br />#set up registry<br />$reg_base = &quot;HKLM:\SOFTWARE\Microsoft\Windows\CurrentVersion\AccountPicture\Users\{0}&quot;<br />$reg_key = &#91;string&#93;::format($reg_base, $user_sid)<br />$reg_value_mask = &quot;Image{0}&quot;<br />If ((Test-Path -Path $reg_key) -eq $false) { New-Item -Path $reg_key } <br /><br />#save images, set reg keys<br />ForEach ($size in $image_sizes)<br />{<br />#create hidden directory, if it doesn't exist<br />$dir = $image_base + &quot;\&quot; + $user_sid<br />If ((Test-Path -Path $dir) -eq $false) { $(mkdir $dir).Attributes = &quot;Hidden&quot; }<br /><br />#save photo to disk, overwrite existing files<br />$file_name = (&#91;string&#93;::format($image_mask, $size))<br />$pathtmp = $dir + &quot;\_&quot; + $file_name<br />$path = $dir + &quot;\&quot; + $file_name<br />Write-Verbose &quot; saving: $file_name&quot;<br />$user_photo | Set-Content -Path $pathtmp -Encoding Byte -Force<br />ResizeImage $pathtmp $size $size $path<br />Remove-Item $pathtmp<br /><br />#save the path in registry, overwrite existing entries<br />$name = &#91;string&#93;::format($reg_value_mask, $size)<br />$value = New-ItemProperty -Path $reg_key -Name $name -Value $path -Force<br />}<br /><br />Write-Verbose &quot;Done.&quot;<br />} else { Write-Error &quot;No photo found in Active Directory for $env:username&quot; }</div><br /><br />The script basicly write a file for each resolution in C:\Users\Public\AccountPictures and creates the appropiate records in registry in HKLM:\SOFTWARE\Microsoft\Windows\CurrentVersion\AccountPicture\Users<br /><br />With this method user's photo is correctly show at login and in all other places, except for in classicshell menu, it show the anonimusgray photo<br /><br />it's possibile to fix that?<br /><br />Thanks<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=24304">skonvols2k</a> — Wed Sep 20, 2017 1:01 pm</p><hr />
]]></content>
</entry>
</feed>