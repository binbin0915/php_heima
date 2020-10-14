<?php
//更改文件或目录的权限，权限值不能加引号
$dirname = "./itcast";
//windows会忽略权限值，而linux下才有效果
chmod($dirname,0754);
//获取文件的权限值，返回十进制
$int = fileperms($dirname);
//十进制转成8进制
$int = decoct($int);
//截取字符串：40777转成0777
echo substr($int,-4);