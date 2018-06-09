<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=13&amp;t=8070" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2018-05-09T04:42:15-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=13&amp;t=8070</id>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2018-05-09T04:42:15-07:00</updated>
<published>2018-05-09T04:42:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35803#p35803</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35803#p35803"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35803#p35803"><![CDATA[
VERY LOW 2D PERFORMANCE ON AMD RADEON DRIVER<br /><br />OS: Windows 7 SP1 Ultimate<br />Graphic card: ASUS Radeon R7 360 2G (2016 release)<br />Driver: Catalyst v15.7.1 .. Crimson v18.4.1 (any version)<br /><br />==============<br /><br />2D Test<br />Downloads (2DTest32.exe + source code)<br /><!-- m --><a class="postlink" href="https://github.com/JMKh3r/2DTest/releases/tag/1.1.0.0">https://github.com/JMKh3r/2DTest/releases/tag/1.1.0.0</a><!-- m --><br /><br />==============<br /><br />Results:<br /><br />&quot;Windows AERO Theme&quot;<br />5..8 msec - good performance<br /><br />&quot;Windows Basic Theme&quot; or &quot;Windows Classic Theme&quot;<br />130..170 msec - bad performance. Very low performance!<br /><br />VIDEO this bug - &quot;bandicam 2018-05-09 13-28-33-165.avi&quot; (49 Mb)<br /><!-- m --><a class="postlink" href="https://fex.net/211199603972?fileId=463520324">https://fex.net/211199603972?fileId=463520324</a><!-- m --><br />or<br /><!-- m --><a class="postlink" href="http://files.dp.ua/file?source=18050914003256042469">http://files.dp.ua/file?source=18050914003256042469</a><!-- m --><br />or<br /><!-- m --><a class="postlink" href="https://ru.files.fm/u/q2fepmry">https://ru.files.fm/u/q2fepmry</a><!-- m --><br /><br />P.S.: In addition, on the old graphic card HD4670 (2009 release) <br />with Catalyst v13.9 there is no problem.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Wed May 09, 2018 4:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2018-05-07T15:52:55-07:00</updated>
<published>2018-05-07T15:52:55-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35801#p35801</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35801#p35801"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35801#p35801"><![CDATA[
Эксперимент №1<br /><br />Обнаружил проблему АМД драйверов в классической теме Windows 7 - крайне плохая производительность 2D. Но далее, оказалось, что при изменении границы окна или при перемещении окна - происходит резкое увеличение 2D производительности. Данный эффект можно просмотреть на видео. <br /><br />В окне спектра плеера foobar2000 картинка отрисовывается медленно, линии рвутся на части картинка дрожит. Но если двигать рамку или перемещать окно по экрану - скорость отрисовки ЗНАЧИТЕЛЬНО возрастает!! Проблема наблюдается на видеокарте ASUS R7 360 2G и любой версии драйвера от Catalyst 15.7.1 до Crimson 18.4.1. На старой видеокарте HD4670 и драйвере Catalyst 13.9 этой проблемы нет и производительность в 2D режиме гораздо выше. Значит проблема появилась в период 2013-2015 год и не решилась разработчиками АМД до сих пор никак!!!<br /><br />Видеозапись глюка - <!-- m --><a class="postlink" href="http://files.d-lan.dp.ua/download?file=787bd8c65445d4f22dc2bd8494496178">http://files.d-lan.dp.ua/download?file= ... 8494496178</a><!-- m --><br /><br />Эксперимент №2<br /><br />Благодаря форумчанину с ником Михалыч, который написал чудесную программу для тестирования 2D я наглядно покажу, что работа видеодрайверов АМД в классической теме Виндовс 7 не выдерживает никакой критики. Программа производит вывод сетки из линий черного, красного и синего цветов последовательно, потом вычисляет время отрисовки и отображает на экран. Алгоритм работы представлен на картинке - <!-- m --><a class="postlink" href="http://picsee.net/upload/2018-05-05/113e54b1f67a.JPG">http://picsee.net/upload/2018-05-05/113e54b1f67a.JPG</a><!-- m --><br /><br />Сама программа + её исходник - <!-- m --><a class="postlink" href="https://github.com/JMKh3r/2DTest/releases/tag/1.1.0.0">https://github.com/JMKh3r/2DTest/releases/tag/1.1.0.0</a><!-- m --><br /><br />Смотрите сами насколько криво реализован вывод 2D в АМД драйверах. Мега крутое АМД &quot;ускорение&quot; проигрывает в 7 раз (!!!) встроенной в винду программной отрисовке (140 мс против 20 мс). Наверняка им драйвер пишут студенты троешники. Они линии не способны отрисовать. Позорище!!! Ха-ха-ха!!!<br /><br />Видеозапись глюка - <!-- m --><a class="postlink" href="http://files.d-lan.dp.ua/download?file=cb02328d1f9561f988ae30cd5e3c7f42">http://files.d-lan.dp.ua/download?file= ... cd5e3c7f42</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Mon May 07, 2018 3:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2018-04-24T13:35:11-07:00</updated>
<published>2018-04-24T13:35:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35762#p35762</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35762#p35762"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35762#p35762"><![CDATA[
Очень важная информация.<br /><br />Тестируя долгое время тормозную работу классической темы, я немного заблуждался. Я считал что 100% проблем идут со стороны ОС Windows 7 - мол только она виноватая в отсутствии ускорения GPU в 2D на классической теме Win 7. Извините я ошибся! Windows 7 только на 20% виновата. На 80% тормозности классического интерфейа - виновны рукожопые программисты AMD, которые не смогли нормально реализовать функции по 2D отрисовке в своих видеодрайверах. <br /><br />Читая мои посты, часть пользователей в недоумении не понимала, где же я вижу те тормоза? Мол тиринги небольшие есть, не всё так плохо.... Вообщем, если у вас видеокарта от NVidia (GeForse GT, GTS, GTX...) или интегрированная в процесор Intel - то у вас эти проблемы выражены раз в 10 меньше, чем у обладалелей видеокарт Radeon от АМД. В AMD реализация 2D начиная с 2010 года - просто полный фуфел. И за 8 лет абсолютно ничего не изменилось!<br /><br />В 3D АМД-ешные видеокарты пытаются тягаться с НВидией, быть &quot;на уровне&quot; или проигрывать в 2 раза. То в реализации 2D АМД-дешные видеокарты проигрывают не только Нвидиевским в огромное количество раз, проигрывают интегрированным в процессор и более того - даже проигрывают своим же АМД-шным &quot;дедушкам&quot; - картам 10 летней давности. В компании АМД видимо осталось 3 программиста, которые как-то тянут направление 3D по играм и абсолютно пофиг на 2D.<br /><br />Вывод:<br />Если вы работаете в классической теме Win7 с векторной графикой или САПР-пакетами, то есть вам нужна быстрая отрисовка в 2D - не устанавливайте видеокарту от AMD Radeon. Реализация 2D в них не выдерживает никакой критики и не исправляется годами!<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Tue Apr 24, 2018 1:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2018-02-09T13:12:59-07:00</updated>
<published>2018-02-09T13:12:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35403#p35403</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35403#p35403"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35403#p35403"><![CDATA[
В предложенной теме &quot;Classic AE ROB v5&quot;, к сожалению, есть проблемы из-за применения патча ROB.<br />Таких программ не много, но уже 2 нашлось - CorelDraw Х4 и VLC-плеер.<br /><br />VLC рисует нестандартного вида меню, которое глючит из-за патча ROB,<br />отображая вместо меню, пустые серые полоски/прямоугольники на весь экран.<br />А в CorelDraw Х4 - не подсвечивается выделение на выбранной кнопке.<br /><br />Для таких случаев, предлагаю вариант той-же темы, но без патча ROB - &quot;Classic AE without ROB v5&quot;.<br /><!-- m --><a class="postlink" href="http://rgho.st/6XzCB7clt">http://rgho.st/6XzCB7clt</a><!-- m --><br /><br />C данной темой всё будет правильно работать, но к сожалению, без привычного классического вида меню.<br />Темно синей планки с белым текстом под выделением не будет. Цвет голубой планки можно изменить<br />на другой, но как было в классике - без патча не вернуть.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Fri Feb 09, 2018 1:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2018-01-21T10:14:05-07:00</updated>
<published>2018-01-21T10:14:05-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35301#p35301</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35301#p35301"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35301#p35301"><![CDATA[
Unfortunately, &quot;Classic_AE_ROB_v5&quot; - does not similar 100% classical theme Win7.<br />I search for WindowBlinds theme on 100% identical original classical theme.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Sun Jan 21, 2018 10:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[redblade8]]></name></author>
<updated>2018-01-20T22:08:35-07:00</updated>
<published>2018-01-20T22:08:35-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35294#p35294</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35294#p35294"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35294#p35294"><![CDATA[
I'm answering because windows classic is windows classic, and I was hoping that I could be of some use to you &amp; try to help you.<br /><br />That's awesome that you found a solution mate. =)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1899">redblade8</a> — Sat Jan 20, 2018 10:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2017-12-24T09:52:03-07:00</updated>
<published>2017-12-24T09:52:03-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35112#p35112</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35112#p35112"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35112#p35112"><![CDATA[
<span style="text-decoration: underline"><strong>Windows 7 AERO Classic Theme </strong><strong>with GPU acceleration</strong></span><br /><br /><br />Modifications of original classic theme with <strong>graphic acceleration</strong><br />Based - &quot;Classic AE 2.5.3&quot; <a href="https://saarineames.deviantart.com/art/Classic-AE-2-5-3-Final-343638171" class="postlink">https://saarineames.deviantart.com/art/Classic-AE-2-5-3-Final-343638171</a><span style="color:#333333;"><span style="font-family:Verdana, Arial, Helvetica, sans-serif;"></span></span><br /><strong>Classic_AE_ROB_v5 - </strong>Version 5 (December 14, 2017)<br /> <br /><strong>Complete list of modifications:</strong><br />1) Added a gradient to the window title<br />2) The correct color of the text in the active and inactive window titles<br />3) Normal Tahoma-font (without ClearType)<br />4) The correct gray color in all elements of the interface RGB (212, 208, 200)<br />5) Correct TrackBar<br />6) Classic menu (dark blue selection + color inverting<br />in the white text for the highlighted item) - thanks to the patch R.O.B.<br />7) Animation for ProgressBar is disabled<br /><br /> <br /><strong>Download theme &quot;Classic_AE_ROB_v5&quot;:</strong><br /><a href="http://my-files.ru/j6eunl" class="postlink">http://my-files.ru/j6eunl</a><br /><a href="http://rgho.st/8yLfW8Spk" class="postlink">http://rgho.st/8yLfW8Spk</a><br /><br /><br /><strong>Install:</strong><br />1) Install &quot;UxStyle&quot; for your Windows 7 OS (32- or 64-bit)<br /><!-- m --><a class="postlink" href="http://uxstyle.com/builds/UxStyle_Core_jul13_bits.zip">http://uxstyle.com/builds/UxStyle_Core_jul13_bits.zip</a><!-- m --><br />If UxStyle is already installed - then this step is skipped. UxStyle allows you to add third-party themes to the system.<br />2) Unpack the theme &quot;Classic AE ROB v5&quot; in the path c:\WINDOWS\Resources\Themes\<br />3) Go to &quot;Personalization&quot; and switch to &quot;Classic AE ROB v5&quot;<br />4) Restart your PC. Without a reboot, the context menus may not appear. After reboot - everything will be OK.<br />5) Enjoy the classic design <strong>with GPU acceleration</strong><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Sun Dec 24, 2017 9:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2017-12-14T12:10:08-07:00</updated>
<published>2017-12-14T12:10:08-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35037#p35037</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35037#p35037"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35037#p35037"><![CDATA[
If you do not understand the problem then why are you answering? <br />The difference between classic theme (&quot;win95&quot; with &quot;win7&quot;) is obvious.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Thu Dec 14, 2017 12:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[redblade8]]></name></author>
<updated>2017-12-13T17:10:51-07:00</updated>
<published>2017-12-13T17:10:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35030#p35030</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35030#p35030"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35030#p35030"><![CDATA[
Thanks splitwirez. It's such a small difference that I don't notice. I still don't notice the difference by looking at the pictures that Felix posted.<br />I'm pretty sure that you can make the titlebar have the same gradient colors as windows 7 has instead of just the blue. I know that windows 98 had that.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1899">redblade8</a> — Wed Dec 13, 2017 5:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2017-12-13T13:44:59-07:00</updated>
<published>2017-12-13T13:44:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35028#p35028</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35028#p35028"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35028#p35028"><![CDATA[
redblade8<br /><br />Classic Theme Windows 95<br /><img src="http://picsee.net/upload/2017-12-13/0b7cab2f3b3b.jpg" alt="" /><br /><br /><br />Classic Theme Windows 7<br /><img src="http://picsee.net/upload/2017-04-23/0854d412c19b.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Wed Dec 13, 2017 1:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Splitwirez]]></name></author>
<updated>2017-12-12T21:26:13-07:00</updated>
<published>2017-12-12T21:26:13-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35019#p35019</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35019#p35019"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35019#p35019"><![CDATA[
<div class="quotetitle">redblade8 wrote:</div><div class="quotecontent"><br />I didn't notice, and still don't see the difference between the windows classic for windows 7 when it came out in 2009, and the classic theme for windows 95/98 which I linked. You can change the title bar colors in windows 7 to look exactly like the windows 95/98 theme that I linked. If it has bugs, then I suppose that it's not fully developed then. If you can change the colors in windows blinds, that'd be nice to have.<br /></div><br />The edges of things are pure black and white in 95, but in 2K and newer, they're softer greyish shades.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=9454">Splitwirez</a> — Tue Dec 12, 2017 9:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[redblade8]]></name></author>
<updated>2017-12-12T17:46:41-07:00</updated>
<published>2017-12-12T17:46:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35018#p35018</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35018#p35018"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=35018#p35018"><![CDATA[
I didn't notice, and still don't see the difference between the windows classic for windows 7 when it came out in 2009, and the classic theme for windows 95/98 which I linked. You can change the title bar colors in windows 7 to look exactly like the windows 95/98 theme that I linked. If it has bugs, then I suppose that it's not fully developed then. If you can change the colors in windows blinds, that'd be nice to have.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1899">redblade8</a> — Tue Dec 12, 2017 5:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[felix1]]></name></author>
<updated>2017-12-04T11:56:14-07:00</updated>
<published>2017-12-04T11:56:14-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34932#p34932</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34932#p34932"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34932#p34932"><![CDATA[
<div class="quotetitle">redblade8 wrote:</div><div class="quotecontent"><br />You don't search for 'classic theme &amp; windows 7', the theme just has to work with windows blinds, so just search for classic theme. <br />Here is a windows blinds theme that has windows 95/98 classic theme, which is what you want. <!-- m --><a class="postlink" href="https://www.wincustomize.com/explore/windowblinds/8628/">https://www.wincustomize.com/explore/windowblinds/8628/</a><!-- m --><br /></div><br /><br /><br />Unfortunately, this theme is not suitable.<br />- This theme is not completed and <span style="text-decoration: underline">has much bugs</span>.<br />- Alas, but this style Windows 95 (elements, colors).<br />I need to get the classic style of Windows 7.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=27414">felix1</a> — Mon Dec 04, 2017 11:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[redblade8]]></name></author>
<updated>2017-12-03T18:16:40-07:00</updated>
<published>2017-12-03T18:16:40-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34918#p34918</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34918#p34918"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34918#p34918"><![CDATA[
You don't search for 'classic theme &amp; windows 7', the theme just has to work with windows blinds, so just search for classic theme. <br />Here is a windows blinds theme that has windows 95/98 classic theme, which is what you want. <!-- m --><a class="postlink" href="https://www.wincustomize.com/explore/windowblinds/8628/">https://www.wincustomize.com/explore/windowblinds/8628/</a><!-- m --><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1899">redblade8</a> — Sun Dec 03, 2017 6:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Anixx]]></name></author>
<updated>2017-12-03T16:45:52-07:00</updated>
<published>2017-12-03T16:45:52-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34915#p34915</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34915#p34915"/>
<title type="html"><![CDATA[Re: GPU acceleration in Windows 7 Classic Theme]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=8070&amp;p=34915#p34915"><![CDATA[
You can use any color scheme you prefer, the colors are stored in registry. If you want everything Win2000-like, you can do it.<br /><br /><img src="http://storage5.static.itmages.ru/i/17/1203/h_1512344733_3266093_7bdc130edb.png" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=1730">Anixx</a> — Sun Dec 03, 2017 4:45 pm</p><hr />
]]></content>
</entry>
</feed>