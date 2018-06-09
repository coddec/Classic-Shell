
If you don't want the dark yellow blend new programs color on  mrbumpy409 .skin7,
you will need to open up the text in the .skin7 file with Resource Hacker.
Use the Classic Shell Utility to find a color you like and change the text tint1 color for any new selection.
There are multiple lines that require changing.

If you want a slightly easier approach, copy either the first group of text , or the second group and paste at very bottom of the text script.
Click on the Compile button and save as a different name.skin7



;To get that system accent color like on the Windows icons,
;copy and paste below text.

OPTION NEWCOLOR="New programs Accent color",0,

[NEWCOLOR]
Main_new_selection_tint1=$SystemAccentLight1|$StartBackground
Main2_new_selection_tint1=$SystemAccentLight1|$StartBackground
Submenu_new_selection_tint1=$SystemAccentLight1|$StartBackground
Programs_new_selection_tint1=$SystemAccentLight1|$StartBackground






;To get say a dark turquoise color blend use this below text instead:


OPTION NEWCOLOR="New programs Turquoise color",0,

[NEWCOLOR]
Main_new_selection_tint1=$FilesAppPickerPaneHighlight
Main2_new_selection_tint1=$FilesAppPickerPaneHighlight
Submenu_new_selection_tint1=$FilesAppPickerPaneHighlight
Programs_new_selection_tint1=$FilesAppPickerPaneHighlight