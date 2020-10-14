<?php
//更改目录或文件名称，确定原目录必须存在
//注意：如果原目录和新目录都位于同一个父目录下，则认为是改名；
//注意：如果原目录和新目录位于不同父目录下，则认为是移动。
$oldname = "./public";
$newname = "./itcast/public";
rename($oldname,$newname);