<?php
//实例：读取一张图片二进制数据
$filename = "./images/img01.jpg";
//以只读方式打开
$handle = fopen($filename,'rb');
//读取全部数据：filesize()函数获取文件大小，以字节为单位
$str = fread($handle,filesize($filename));
//告诉浏览器：以图片数据显示
header("Content-Type:image/png");
echo $str;
//关闭文件
fclose($handle);