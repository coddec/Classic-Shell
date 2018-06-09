<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=10&amp;t=6444" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2016-09-07T17:37:41-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=10&amp;t=6444</id>
<entry>
<author><name><![CDATA[charles.milette]]></name></author>
<updated>2016-09-07T17:37:41-07:00</updated>
<published>2016-09-07T17:37:41-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=29239#p29239</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=29239#p29239"/>
<title type="html"><![CDATA[Re: Questions about taskbar background transparency]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=29239#p29239"><![CDATA[
I found an even better way!<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">#include &lt;windows.h&gt;<br />#include &quot;stdafx.h&quot;<br /><br />TCHAR szClassName&#91;&#93; = TEXT(&quot;Blur&quot;);<br /><br />LRESULT CALLBACK WndProc(HWND hWnd, UINT msg, WPARAM wParam, LPARAM lParam)<br />{<br />   switch (msg)<br />   {<br />   case WM_NCHITTEST:<br />      wParam = DefWindowProc(hWnd, msg, wParam, lParam);<br />      if (wParam == HTCLIENT)<br />         return HTCAPTION;<br />      else<br />         return wParam;<br />   case WM_DESTROY:<br />      PostQuitMessage(0);<br />      break;<br />   default:<br />      return DefWindowProc(hWnd, msg, wParam, lParam);<br />   }<br />   return 0;<br />}<br /><br />void SetWindowBlur(HWND hWnd)<br />{<br />   const HINSTANCE hModule = LoadLibrary(TEXT(&quot;user32.dll&quot;));<br />   if (hModule)<br />   {<br />      struct ACCENTPOLICY<br />      {<br />         int nAccentState;<br />         int nFlags;<br />         int nColor;<br />         int nAnimationId;<br />      };<br />      struct WINCOMPATTRDATA<br />      {<br />         int nAttribute;<br />         PVOID pData;<br />         ULONG ulDataSize;<br />      };<br />      typedef BOOL(WINAPI*pSetWindowCompositionAttribute)(HWND, WINCOMPATTRDATA*);<br />      const pSetWindowCompositionAttribute SetWindowCompositionAttribute = (pSetWindowCompositionAttribute)GetProcAddress(hModule, &quot;SetWindowCompositionAttribute&quot;);<br />      if (SetWindowCompositionAttribute)<br />      {<br />         ACCENTPOLICY policy = { 3, 0, 0, 0 };<br />         WINCOMPATTRDATA data = { 19, &amp;policy, sizeof(ACCENTPOLICY) };<br />         SetWindowCompositionAttribute(hWnd, &amp;data);<br />      }<br />      FreeLibrary(hModule);<br />   }<br />}<br /><br />int WINAPI WinMain(HINSTANCE hInstance, HINSTANCE hPreInst, LPSTR pCmdLine, int nCmdShow)<br />{<br />   MSG msg;<br />   WNDCLASS wndclass = {<br />      0,<br />      WndProc,<br />      0,<br />      0,<br />      hInstance,<br />      0,<br />      LoadCursor(0, IDC_ARROW),<br />      (HBRUSH)GetStockObject(BLACK_BRUSH),<br />      0,<br />      szClassName<br />   };<br />   RegisterClass(&amp;wndclass);<br />   RECT taskpos;<br />   HWND taskbar = FindWindow(L&quot;Shell_TrayWnd&quot;, NULL);<br />   GetWindowRect(taskbar, &amp;taskpos);<br />   HWND hWnd = CreateWindowEx(<br />      WS_EX_TOOLWINDOW | WS_EX_TOPMOST ,<br />      szClassName,<br />      TEXT(&quot;Blur&quot;),<br />      WS_POPUP,<br />      taskpos.left,<br />      taskpos.top,<br />      taskpos.right - taskpos.left,<br />      taskpos.bottom - taskpos.top,<br />      0,<br />      0,<br />      hInstance,<br />      0<br />   );<br />   SetParent(taskbar, hWnd);<br />   SetWindowBlur(hWnd);<br />   ShowWindow(hWnd, SW_SHOW);<br />   // i wanna add some darkening effect later on, draw a half-transparent black rectangle on the whole window<br />   while (GetMessage(&amp;msg, 0, 0, 0))<br />   {<br />      TranslateMessage(&amp;msg);<br />      DispatchMessage(&amp;msg);<br />   }<br />   return msg.wParam;<br />}</div><br /><br />Just create a window with the same size and position as the taskbar and then set the taskbar as the child of this window. This gives you total control over the taskbar's background (you can draw anything in the window, and it will be the taskbar's background.)<br /><br />Sorry if the code is a bit messy, that's a prototype.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14534">charles.milette</a> — Wed Sep 07, 2016 5:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-08-04T07:00:04-07:00</updated>
<published>2016-08-04T07:00:04-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28168#p28168</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28168#p28168"/>
<title type="html"><![CDATA[Re: Questions about taskbar background transparency]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28168#p28168"><![CDATA[
I am doing this when the taskbar gets WM_PAINT message. And in few other cases to prevent flickering.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Thu Aug 04, 2016 7:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[charles.milette]]></name></author>
<updated>2016-08-03T17:10:12-07:00</updated>
<published>2016-08-03T17:10:12-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28137#p28137</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28137#p28137"/>
<title type="html"><![CDATA[Re: Questions about taskbar background transparency]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28137#p28137"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />When Classic Shell does it, or when you do it?<br /></div><br /><br /><br />When I do it.<br /><br /><img src="https://i.imgur.com/GAw5Vyp.gif" alt="" /><br /><br />For reference, here's my (quickly written) code:<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">using System;<br />using System.Runtime.InteropServices;<br /><br />public class TransparentTaskbar {<br />static class Interop {<br />&#91;DllImport(&quot;user32.dll&quot;, SetLastError = true)&#93;<br />internal static extern IntPtr FindWindow(string lpClassName, string lpWindowName);<br /><br />&#91;DllImport(&quot;user32.dll&quot;)&#93;<br />internal static extern int SetWindowCompositionAttribute(IntPtr hwnd, ref WindowCompositionAttributeData data);<br /><br />&#91;StructLayout(LayoutKind.Sequential)&#93;<br />internal struct WindowCompositionAttributeData {<br />public WindowCompositionAttribute Attribute;<br />public IntPtr Data;<br />public int SizeOfData;<br />}<br /><br />&#91;StructLayout(LayoutKind.Sequential)&#93;<br />internal struct AccentPolicy {<br />public AccentState AccentState;<br />public AccentFlags AccentFlags;<br />public uint GradientColor;<br />public int AnimationId;<br />}<br /><br />&#91;Flags&#93;<br />internal enum AccentFlags {<br />// ...<br />DrawLeftBorder = 0x20,<br />DrawTopBorder = 0x40,<br />DrawRightBorder = 0x80,<br />DrawBottomBorder = 0x100,<br />DrawAllBorders = (DrawLeftBorder | DrawTopBorder | DrawRightBorder | DrawBottomBorder)<br />// ...<br />}<br /><br />internal enum WindowCompositionAttribute {<br />// ...<br />WCA_ACCENT_POLICY = 19<br />// ...<br />}<br /><br />internal enum AccentState {<br />ACCENT_DISABLED = 0,<br />ACCENT_ENABLE_GRADIENT = 1,<br />ACCENT_ENABLE_TRANSPARENTGRADIENT = 2,<br />ACCENT_ENABLE_BLURBEHIND = 3,<br />ACCENT_INVALID_STATE = 4<br />}<br />}<br /><br />public static void Main(string&#91;&#93; CommandLine) {<br />var accent = new Interop.AccentPolicy();<br />accent.AccentState = Interop.AccentState.ACCENT_ENABLE_BLURBEHIND;<br /><br />var accentPtr = Marshal.AllocHGlobal(Marshal.SizeOf(accent));<br />Marshal.StructureToPtr(accent, accentPtr, false);<br /><br />var data = new Interop.WindowCompositionAttributeData();<br />data.Attribute = Interop.WindowCompositionAttribute.WCA_ACCENT_POLICY;<br />data.SizeOfData = Marshal.SizeOf(accent);<br />data.Data = accentPtr;<br /><br />Interop.SetWindowCompositionAttribute(Interop.FindWindow(&quot;Shell_TrayWnd&quot;, null), ref data);<br />}<br />}</div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14534">charles.milette</a> — Wed Aug 03, 2016 5:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-08-03T13:47:59-07:00</updated>
<published>2016-08-03T13:47:59-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28109#p28109</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28109#p28109"/>
<title type="html"><![CDATA[Re: Questions about taskbar background transparency]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28109#p28109"><![CDATA[
When Classic Shell does it, or when you do it?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Aug 03, 2016 1:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[charles.milette]]></name></author>
<updated>2016-08-03T11:35:44-07:00</updated>
<published>2016-08-03T11:35:44-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28091#p28091</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28091#p28091"/>
<title type="html"><![CDATA[Re: Questions about taskbar background transparency]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28091#p28091"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />On Windows 10 this is done by using the undocumented function SetWindowCompositionAttribute. You can control the glass color and opacity of any window.<br /></div><br /><br /><br />As soon as the Windows 10 start menu is opened, the effect reverts back to normal. Do you know the way to prevent that?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14534">charles.milette</a> — Wed Aug 03, 2016 11:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[charles.milette]]></name></author>
<updated>2016-08-03T08:15:51-07:00</updated>
<published>2016-08-03T08:15:51-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28070#p28070</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28070#p28070"/>
<title type="html"><![CDATA[Re: Questions about taskbar background transparency]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28070#p28070"><![CDATA[
Thanks! Will check that out.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14534">charles.milette</a> — Wed Aug 03, 2016 8:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2016-08-03T07:45:34-07:00</updated>
<published>2016-08-03T07:45:34-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28067#p28067</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28067#p28067"/>
<title type="html"><![CDATA[Re: Questions about taskbar background transparency]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28067#p28067"><![CDATA[
On Windows 10 this is done by using the undocumented function SetWindowCompositionAttribute. You can control the glass color and opacity of any window.<br />On older versions it is achieved by replacing the painting of the taskbar window with custom code.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Wed Aug 03, 2016 7:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[charles.milette]]></name></author>
<updated>2016-08-03T07:35:18-07:00</updated>
<published>2016-08-03T07:35:18-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28064#p28064</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28064#p28064"/>
<title type="html"><![CDATA[Questions about taskbar background transparency]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=6444&amp;p=28064#p28064"><![CDATA[
As mentionned in <a href="http://www.ghacks.net/2015/09/13/make-your-windows-10-taskbar-100-transparent/" class="postlink">this article</a>, it is possible to make the taskbar's background fully transparent with Classic Shell.<br /><br />However, I feel that installing Classic Shell for this only feature overkill.<br /><br />I'd like to know how Classic Shell does this, so I can write a tiny program dedicated to do that (and maybe add some features, such as having the taskbar transparent only when you're on the desktop)<br /><br />I tried searching in the old source code, but the feature wasn't introduced yet.<br /><br />If possible, I'd also appreciated having code snippets.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=14534">charles.milette</a> — Wed Aug 03, 2016 7:35 am</p><hr />
]]></content>
</entry>
</feed>