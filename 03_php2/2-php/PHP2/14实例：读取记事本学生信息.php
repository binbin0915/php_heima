<?php
//实例：读取记事本学生信息，并用表格显示出来
$filename = "./images/student.txt";
//将记事本数据读入到数组中
$arr = file($filename,2|4);
//构建输出的表格字符串
$str = "<table border='1'>";
foreach($arr as $value)
{
	//将取到的每个数组元素的值，分割成一维数组
	$arr2 = explode(',',$value);
	$str .= "<tr>";
	foreach($arr2 as $value2)
	{
		$str .= "<td>".iconv('gbk','utf-8',$value2)."</td>";
	}
	$str .= "</tr>";
}
$str .= "</table>";

//输出结果字符集
echo $str;