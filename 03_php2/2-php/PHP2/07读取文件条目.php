<?php
//实例：读取目录中的条目
$dirname = "./itcast";
//打开目录，返回目录句柄资源
$handle = opendir($dirname);
//从目录句柄资源中取回所有条目(文件或目录)
//循环结束标志：当资源中所有条目全部读取完毕，返回false
while($line = readdir($handle))
{
	echo iconv('utf-8','utf-8',$line)."<br>";
}
