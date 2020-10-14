<?php
//实例：写入文件内容
$filename = "./images/student.txt";
//以追加方式打开文件
$handle = fopen($filename,'ab');
//写入一行数据：windows下换行符为'\r\n'，linux换行符为'\n'
$str = "10040,李五,男,28,高中,4000,500,山西省\r\n";
fwrite($handle,iconv('utf-8','gbk',$str));
fclose($handle);