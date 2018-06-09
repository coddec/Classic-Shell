0: version=a00, PID=7144, TID=2104, LID=1

15: ItemOptions[0]=1
15: ItemOptions[1]=0
15: ItemOptions[2]=0
15: ItemOptions[3]=3
15: ItemOptions[4]=3
15: ItemOptions[5]=3
15: ItemOptions[6]=3
15: ItemOptions[7]=0
15: ItemOptions[8]=3
15: ItemOptions[9]=3
15: ItemOptions[10]=3
15: ItemOptions[11]=0
15: ItemOptions[12]=3
15: ItemOptions[13]=1
15: ItemOptions[14]=0
15: ItemOptions[15]=1
15: ItemOptions[16]=3
15: ItemOptions[17]=3
15: ItemOptions[18]=3
15: ItemOptions[19]=3
15: ItemOptions[20]=3
15: ItemOptions[21]=0
15: ItemOptions[22]=0
15: ItemOptions[23]=3
15: ItemOptions[24]=0
15: ItemOptions[25]=1
15: ItemOptions[26]=0
15: ItemOptions[27]=3
15: ItemOptions[28]=0
15: ItemOptions[29]=3
15: ItemOptions[30]=3
15: ItemOptions[31]=3
31: Open Menu, ptr=000000000BD05930, index=-1, options=00000C10
31: Taskbar Rect: 0, 0, 1920, 30
31: Main Rect: 0, 0, 1920, 1200
31: Start Rect: 0, -4, 38, 34
31: Start Button: 00020190
31: Programs, 0x20000000, 0x00000001
31: Programs, 0x20000000, 0x00000001
109: Activate Item, ptr=000000000BD05930, index=11, type=0
765: Activate Item, ptr=000000000BD05930, index=4, type=1
765: Open Menu, ptr=000000000BD05C10, index=4, options=00000C00
875: Activate Item, ptr=000000000BD05930, index=5, type=1
875: Open Menu, ptr=000000000BC0C990, index=5, options=00000C00
875: Close Menu, ptr=000000000BD05C10
1015: Activate Item, ptr=000000000BD05930, index=6, type=1
1015: Close Menu, ptr=000000000BC0C990
1015: Activate Item, ptr=000000000BD05930, index=6, type=0
1484: Activate Item, ptr=000000000BD05930, index=6, type=4
1500: Close Menu, ptr=000000000BD05930


Here's the log for doing the same thing with the CompatibilityFixes value set back to 0x20 (and seeing the proper Run dialog):

0: version=a00, PID=5760, TID=5192, LID=1

15: ItemOptions[0]=1
15: ItemOptions[1]=0
15: ItemOptions[2]=0
15: ItemOptions[3]=3
15: ItemOptions[4]=3
15: ItemOptions[5]=3
15: ItemOptions[6]=3
15: ItemOptions[7]=0
15: ItemOptions[8]=3
15: ItemOptions[9]=3
15: ItemOptions[10]=3
15: ItemOptions[11]=0
15: ItemOptions[12]=3
15: ItemOptions[13]=1
15: ItemOptions[14]=0
15: ItemOptions[15]=1
15: ItemOptions[16]=3
15: ItemOptions[17]=3
15: ItemOptions[18]=3
15: ItemOptions[19]=3
15: ItemOptions[20]=3
15: ItemOptions[21]=0
15: ItemOptions[22]=0
15: ItemOptions[23]=3
15: ItemOptions[24]=0
15: ItemOptions[25]=1
15: ItemOptions[26]=0
15: ItemOptions[27]=3
15: ItemOptions[28]=0
15: ItemOptions[29]=3
15: ItemOptions[30]=3
15: ItemOptions[31]=3
15: Open Menu, ptr=000000000CB85CD0, index=-1, options=00000C10
15: Taskbar Rect: 0, 0, 1920, 30
15: Main Rect: 0, 0, 1920, 1200
15: Start Rect: 0, -4, 38, 34
15: Start Button: 000301B0
31: Programs, 0x20000000, 0x00000001
31: Programs, 0x20000000, 0x00000001
94: Activate Item, ptr=000000000CB85CD0, index=11, type=0
672: Activate Item, ptr=000000000CB85CD0, index=4, type=1
672: Open Menu, ptr=000000000C989120, index=4, options=00000C00
781: Activate Item, ptr=000000000CB85CD0, index=5, type=1
781: Open Menu, ptr=000000000CAD4760, index=5, options=00000C00
781: Close Menu, ptr=000000000C989120
937: Activate Item, ptr=000000000CB85CD0, index=6, type=1
937: Close Menu, ptr=000000000CAD4760
937: Activate Item, ptr=000000000CB85CD0, index=6, type=0
1703: Activate Item, ptr=000000000CB85CD0, index=6, type=4
1703: Close Menu, ptr=000000000CB85CD0