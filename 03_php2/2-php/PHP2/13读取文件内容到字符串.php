<?php
//实例：读取远程网页数据
$filename = "http://news.sina.com.cn";
//不用打开文件和关闭文件
$str = file_get_contents($filename);
//打开数组
print_r($str);