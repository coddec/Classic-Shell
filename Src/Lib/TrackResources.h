// Classic Shell (c) 2009-2017, Ivo Beltchev
// Open-Shell (c) 2017-2018, The Open-Shell Team
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

//#define TRACK_GDI_RESOURCES
#ifndef _DEBUG
#undef TRACK_GDI_RESOURCES
#endif

#ifdef TRACK_GDI_RESOURCES

#undef CreateFont
#undef CreateFontIndirect
#undef LoadImage

#define CreateCompatibleDC(hdc) TrackCreateCompatibleDC(hdc,__FILE__,__LINE__)
#define CreateFont(cHeight,cWidth,cEscapement,cOrientation,cWeight,bItalic,bUnderline,bStrikeOut,iCharSet,iOutPrecision,iClipPrecision,iQuality,iPitchAndFamily,pszFaceName) TrackCreateFont(cHeight,cWidth,cEscapement,cOrientation,cWeight,bItalic,bUnderline,bStrikeOut,iCharSet,iOutPrecision,iClipPrecision,iQuality,iPitchAndFamily,pszFaceName,__FILE__,__LINE__)
#define CreateFontIndirect(lplf) TrackCreateFontIndirect(lplf,__FILE__,__LINE__)
#define LoadImage(hInst,name,type,cx,cy,fuLoad) TrackLoadImage(hInst,name,type,cx,cy,fuLoad,__FILE__,__LINE__)
#define CreateDIBSection(hdc,lpbmi,usage,ppvBits,hSection,offset) TrackCreateDIBSection(hdc,lpbmi,usage,ppvBits,hSection,offset,__FILE__,__LINE__)
#define CreateBitmap(nWidth,nHeight,nPlanes,nBitCount,lpBits) TrackCreateBitmap(nWidth,nHeight,nPlanes,nBitCount,lpBits,__FILE__,__LINE__)
#define CreateCompatibleBitmap(hdc,cx,cy) TrackCreateCompatibleBitmap(hdc,cx,cy,__FILE__,__LINE__)
#define AddTrackedObject(obj) TrackAddTrackedObject(obj,__FILE__,__LINE__)
#define AddTrackedIcon(hIcon) TrackAddTrackedIcon(hIcon,__FILE__,__LINE__)

#define DeleteDC(hdc) TrackDeleteDC(hdc)
#define DeleteObject(obj) TrackDeleteObject(obj)
#define DestroyIcon(hIcon) TrackDestroyIcon(hIcon)

HDC TrackCreateCompatibleDC( HDC hdc, const char *file, int line );
HFONT TrackCreateFont( int cHeight, int cWidth, int cEscapement, int cOrientation, int cWeight, DWORD bItalic, DWORD bUnderline, DWORD bStrikeOut, DWORD iCharSet, DWORD iOutPrecision, DWORD iClipPrecision, DWORD iQuality, DWORD iPitchAndFamily, LPCWSTR pszFaceName, const char *file, int line );
HFONT TrackCreateFontIndirect( const LOGFONT *lplf, const char *file, int line );
HANDLE TrackLoadImage( HINSTANCE hInst, LPCWSTR name, UINT type, int cx, int cy, UINT fuLoad, const char *file, int line );
HBITMAP TrackCreateDIBSection( HDC hdc, CONST BITMAPINFO *lpbmi, UINT usage, VOID **ppvBits, HANDLE hSection, DWORD offset, const char *file, int line );
HBITMAP TrackCreateBitmap( int nWidth, int nHeight, UINT nPlanes, UINT nBitCount, CONST VOID *lpBits, const char *file, int line );
HBITMAP TrackCreateCompatibleBitmap( HDC hdc, int cx, int cy, const char *file, int line );
void TrackAddTrackedObject( HGDIOBJ obj, const char *file, int line );
void TrackAddTrackedIcon( HICON hIcon, const char *file, int line );

BOOL TrackDeleteDC( HDC hdc );
BOOL TrackDeleteObject( HGDIOBJ obj );
BOOL TrackDestroyIcon( HICON hIcon );

void DumpResourceLeaks( void );

#else
#define AddTrackedObject(obj)
#define AddTrackedIcon(hIcon)
#endif
