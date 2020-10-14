<?php
//实例：读取记事本的学生信息数据
$filename = "./images/student.txt";
//以只读方式打开
$handle = fopen($filename,'rb');
//循环读取所行数据：碰到换行符、文件结束符都会终止读取
while($str = fgets($handle))
{
	echo iconv('gbk','utf-8',$str)."<br>";
}
