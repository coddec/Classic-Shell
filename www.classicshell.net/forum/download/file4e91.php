: Use Resource Hacker to open Tenified .skin7
Add all this text below at very bottom of skin text, click the complile button, 
and save as Tenified-Classic.skin




OPTION NO_ICONS=#7008,0, TWO_COLUMNS
OPTION CAPTION=#7003,0
OPTION OLD_SEARCH_BOX="Framed searchbox",1


[NO_ICONS]
Main_no_icons2=1
Main2_text_padding=1,7,8,7,100%

[CAPTION]
Caption_padding=3,3,0,12,100%

[NOT CAPTION]
Main_bitmap_slices_X=0,0,0,12,8,6

[OLD_SEARCH_BOX]
Search_frame=1
Search_bitmap_tint1=#FFFFFF

[USER_IMAGE AND (NOT TWO_COLUMNS OR NOT CAPTION)]
Main_padding=11,72,4,9
User_frame_position=-10,10

[USER_IMAGE AND TWO_COLUMNS]
User_frame_position=-10,10
Main2_padding=3,72,5,9

[HIGH_DPI AND USER_IMAGE AND (NOT TWO_COLUMNS OR NOT CAPTION)]
Main_padding=11,90,4,9
User_frame_position=-10,10

[HIGH_DPI AND USER_IMAGE AND TWO_COLUMNS]
User_frame_position=-10,10
Main2_padding=3,90,5,9
