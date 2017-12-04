// Classic Shell (c) 2009-2016, Ivo Beltchev
// Confidential information of Ivo Beltchev. Not for disclosure or distribution without prior written consent from the author

#pragma once

class ISettingsPanel;

extern int g_LanguageIDs[];
extern int g_LanguageIDCount;

ISettingsPanel *GetLanguageSettings( TSettingsComponent component );
