// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

// StringUtils is also available under the CPOL license as part of the FormatString article
// on CodeProject: http://www.codeproject.com/KB/string/FormatString.aspx

#include <stdafx.h>
#include "StringUtils.h"
#include <stdio.h>
#include <assert.h>

#ifndef STR_USE_WIN32_CONV
#include <stdlib.h>
#endif

///////////////////////////////////////////////////////////////////////////////

#ifdef STR_USE_WIN32_DBCS
static int g_MaxCharSize=0;
#endif

// Returns 1 if the ANSI code page is single-byte, or 2 if it is double-byte (DBCS)
int GetMaxCharSize( void )
{
#ifdef STR_USE_WIN32_DBCS
	if (!g_MaxCharSize)
	{
		CPINFO info;
		if (GetCPInfo(CP_ACP,&info))
			g_MaxCharSize=info.MaxCharSize;
	}
	return g_MaxCharSize;
#else
	return MB_CUR_MAX;
#endif
}

// Copies src to dst. size is the size of dst in bytes, including the terminating 0.
// Returns the number of characters copied, excluding the terminating 0.
// The return value is <=size-1. If size is 0, returns 0 and does nothing.
// The result in dst is always 0 terminated.
int Strcpy( char *dst, int size, const char *src )
{
	assert(dst);
	assert(src);
	assert(size>0);
	if (size<=0) return 0;
	char *dst0=dst;
	if (GetMaxCharSize()==1)
	{
		// SBCS version
		while (size>1)
		{
			if (*src==0) break;
			*dst++=*src++;
			size--;
		}
	}
	else
	{
		// DBCS version
		while (size>1)
		{
			if (*src==0) break;
#ifdef STR_USE_WIN32_DBCS
			if (IsDBCSLeadByte((BYTE)*src))
			{
#else
			if (isleadbyte((unsigned char)*src))
			{
#endif
				if (size==2) break;
				if (src[1]==0) break;
				*dst++=*src++;
				*dst++=*src++;
				size-=2;
			}
			else
			{
				*dst++=*src++;
				size--;
			}
		}
	}
	*dst=0;
	return (int)(dst-dst0);
}

int Strcpy( wchar_t *dst, int size, const wchar_t *src )
{
	assert(dst);
	assert(src);
	assert(size>0);
	if (size<=0) return 0;
	int len=Strlen(src);
	if (len>size-1)
		len=size-1;
	if (len>0 && src[len]>=0xDC00 && src[len]<=0xDFFF) // check for trailing surrogate
		len--;
	memcpy(dst,src,len*sizeof(wchar_t));
	dst[len]=0;
	return len;
}

// Copies src to dst. size is the size of dst in characters, including the terminating 0.
// Copies up to len characters and always appends terminating 0.
int Strncpy( char *dst, int size, const char *src, int len )
{
	assert(dst);
	assert(src);
	assert(size>0);
	if (size<=0) return 0;
	char *dst0=dst;
	const char *end=src+len;
	if (GetMaxCharSize()==1)
	{
		// SBCS version
		while (size>1)
		{
			if (src==end) break;
			*dst++=*src++;
			size--;
		}
	}
	else
	{
		// DBCS version
		while (size>1)
		{
			if (src==end) break;
#ifdef STR_USE_WIN32_DBCS
			if (IsDBCSLeadByte((BYTE)*src))
			{
#else
			if (isleadbyte((unsigned char)*src))
			{
#endif
				if (size==2) break;
				if (src+1==end) break;
				*dst++=*src++;
				*dst++=*src++;
				size-=2;
			}
			else
			{
				*dst++=*src++;
				size--;
			}
		}
	}
	*dst=0;
	return (int)(dst-dst0);
}

int Strncpy( wchar_t *dst, int size, const wchar_t *src, int len )
{
	assert(dst);
	assert(src);
	assert(size>0);
	if (size<=0) return 0;
	if (len>size-1)
		len=size-1;
	if (len>0 && src[len]>=0xDC00 && src[len]<=0xDFFF) // check for trailing surrogate
		len--;
	memcpy(dst,src,len*sizeof(wchar_t));
	dst[len]=0;
	return len;
}

// Appends src to dst. size is the size of dst in bytes, including the terminating 0.
// Returns the number of characters copied, excluding the terminating 0.
// The return value is <=size-1-strlen(dst). If size>=strlen(dst), returns 0 and does nothing.
// The result in dst is always 0 terminated.
int Strcat( char *dst, int size, const char *src )
{
	assert(dst);
	int len=Strlen(dst);
	assert(len<size);
	return Strcpy(dst+len,size-len,src);
}

int Strcat( wchar_t *dst, int size, const wchar_t *src )
{
	assert(dst);
	int len=Strlen(dst);
	assert(len<size);
	return Strcpy(dst+len,size-len,src);
}

// Writes formatted string to dst. size is the size of dst in characters, including the terminating 0.
// Returns the number of characters written, excluding the terminating 0.
// The return value is <=size-1. If size is 0, returns 0 and does nothing.
// The result in dst is always 0 terminated.
int Sprintf( char *dst, int size, const char *format, ... )
{
	va_list args;
	va_start(args,format);
	int len=Vsprintf(dst,size,format,args);
	va_end(args);
	return len;
}

int Sprintf( wchar_t *dst, int size, const wchar_t *format, ... )
{
	va_list args;
	va_start(args,format);
	int len=Vsprintf(dst,size,format,args);
	va_end(args);
	return len;
}

int Vsprintf( char *dst, int size, const char *format, va_list args )
{
	assert(dst);
	assert(format);
	assert(size>0);
	if (size<=0) return 0;
#if _MSC_VER>=1400 // VC8.0
	int len=_vsnprintf_s(dst,size,size-1,format,args);
#else
	int len=_vsnprintf(dst,size-1,format,args);
#endif
	if (len<0)
		len=size-1;
	dst[len]=0;
	return len;
}

int Vsprintf( wchar_t *dst, int size, const wchar_t *format, va_list args )
{
	assert(dst);
	assert(format);
	assert(size>0);
	if (size<=0) return 0;
#if _MSC_VER>=1400 // VC8.0
	int len=_vsnwprintf_s(dst,size,size-1,format,args);
#else
	int len=_vsnwprintf(dst,size-1,format,args);
#endif
	if (len<0)
		len=size-1;
	dst[len]=0;
	return len;
}

// Outputs a formatted debug string
void Trace( const char *format, ... )
{
	va_list args;
	va_start(args,format);
	char buf[1024];
	Vsprintf(buf,_countof(buf)-2,format,args);
	Strcat(buf,_countof(buf),"\r\n");
	OutputDebugStringA(buf);
	va_end(args);
}

void Trace( const wchar_t *format, ... )
{
	va_list args;
	va_start(args,format);
	wchar_t buf[1024];
	Vsprintf(buf,_countof(buf)-2,format,args);
	Strcat(buf,_countof(buf),L"\r\n");
	OutputDebugStringW(buf);
	va_end(args);
}

// Convert between multi-byte and wide characters. size is the size of dst in characters, including the
// terminating 0.
// Return the number of characters copied, excluding the terminating 0.
// The return value is <=size-1. If size is 0, returns 0 and does nothing.
// The result in dst is always 0 terminated.

#ifdef STR_USE_WIN32_CONV
int MbsToWcs( wchar_t *dst, int size, const char *src, int codePage )
{
	if (!dst)
		return MultiByteToWideChar(codePage,0,src,Strlen(src),NULL,0);

	assert(size);
	if (size==0) return 0;
	if (size==1)
	{
		dst[0]=0;
		return 0;
	}
	int len=Strlen(src);
	dst[size-2]=0;
	int res=MultiByteToWideChar(codePage,0,src,len,dst,size-1);
	if (res)
	{
		// the result fits
		dst[res]=0;
		return res;
	}
	if (GetLastError()!=ERROR_INSUFFICIENT_BUFFER)
	{ // some unknown error
		dst[0]=0;
		return 0;
	}

	if (!dst[size-2]) // could not fit a surrogate pair
		return size-2;
	dst[size-1]=0;
	return size-1;
}

int WcsToMbs( char *dst, int size, const wchar_t *src, int codePage )
{
	if (!dst)
		return WideCharToMultiByte(codePage,0,src,Strlen(src),NULL,0,NULL,NULL);

	assert(size);
	if (size==0) return 0;
	if (size==1)
	{
		dst[0]=0;
		return 0;
	}
	int len=Strlen(src);
	int l=size;
	if (l>10) l=10;
	memset(dst+size-l,0,l); // fill the end with zeros (up to 10 bytes)
	int res=WideCharToMultiByte(codePage,0,src,len,dst,size-1,NULL,NULL);
	if (res)
	{
		// the result fits
		dst[res]=0;
		return res;
	}
	if (GetLastError()!=ERROR_INSUFFICIENT_BUFFER) // some unknown error
	{
		dst[0]=0;
		return 0;
	}

	// find the last non-zero to return the correct length
	for (len=size-1;len>0;len--)
		if (dst[len-1])
			return len;
	return 0;
}
#else
int MbsToWcs( wchar_t *dst, int size, const char *src )
{
	if (!dst)
	{
#if _MSC_VER>=1400 // VC8.0
		size_t res;
		if (mbstowcs_s(&res,NULL,0,src,0)!=0)
			return 0;
		return (int)res-1;
#else
		int res=(int)mbstowcs(NULL,src,0);
		if (res<0) return 0;
		return res;
#endif
	}

	assert(size);
	if (size==0) return 0;
	if (size==1)
	{
		dst[0]=0;
		return 0;
	}
#if _MSC_VER>=1400 // VC8.0
	size_t res;
	mbstowcs_s(&res,dst,size,src,_TRUNCATE);
	return (int)res-1;
#else
	int res=(int)mbstowcs(dst,src,size-1);
	if (res<0)
	{
		dst[0]=0;
		return 0;
	}
	if (res==size-1)
		dst[res]=0;
	return res;
#endif
}

int WcsToMbs( char *dst, int size, const wchar_t *src )
{
	if (!dst)
	{
#if _MSC_VER>=1400 // VC8.0
		size_t res;
		if (wcstombs_s(&res,NULL,0,src,0)!=0)
			return 0;
		return (int)res-1;
#else
		int res=(int)wcstombs(NULL,src,0);
		if (res<0) return 0;
		return res;
#endif
	}

	assert(size);
	if (size==0) return 0;
	if (size==1)
	{
		dst[0]=0;
		return 0;
	}

#if _MSC_VER>=1400 // VC8.0
	size_t res;
	if (wcstombs_s(&res,dst,size,src,_TRUNCATE)!=0)
	{
		dst[0]=0;
		return 0;
	}
	return (int)res-1;
#else
	int res=(int)wcstombs(dst,src,size-1);
	if (res<0)
	{
		dst[0]=0;
		return 0;
	}
	if (res==size-1)
		dst[res]=0;
	return res;
#endif
}
#endif

///////////////////////////////////////////////////////////////////////////////

const char *GetToken( const char *text, char *token, int size, const char *separators )
{
	while (*text && strchr(separators,*text))
		text++;
	const char *c1=text,*c2;
	if (text[0]=='\"')
	{
		c1++;
		c2=strchr(c1,'\"');
	}
	else
	{
		c2=c1;
		while (*c2!=0 && !strchr(separators,*c2))
			c2++;
	}
	if (!c2) c2=text+strlen(text);
	int l=(int)(c2-c1);
	if (l>size-1) l=size-1;
	memcpy(token,c1,l);
	token[l]=0;

	if (*c2) return c2+1;
	else return c2;
}

const wchar_t *GetToken( const wchar_t *text, wchar_t *token, int size, const wchar_t *separators )
{
	while (*text && wcschr(separators,*text))
		text++;
	const wchar_t *c1=text,*c2;
	if (text[0]=='\"')
	{
		c1++;
		c2=wcschr(c1,'\"');
	}
	else
	{
		c2=c1;
		while (*c2!=0 && !wcschr(separators,*c2))
			c2++;
	}
	if (!c2) c2=text+wcslen(text);
	int l=(int)(c2-c1);
	if (l>size-1) l=size-1;
	memcpy(token,c1,l*2);
	token[l]=0;

	if (*c2) return c2+1;
	else return c2;
}
