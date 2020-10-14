<?php 
//课间练习：
//	使用for循环来求如下数组的平均值：
$arr1 = [
		'a'=>18, 
		20, 
		'cc'=>10, 
		2 => 11 
	];
$len = count($arr1);	//长度
$sum = $count = 0;		//初始化2个变量的值
for($i = 0; $i < $len; $i++)
{
	$sum += current($arr1);	//取得当前项的值
	$count++;		//计数
	next($arr1);	//指针后移一位
}

echo "<br>平均值为：" . $sum / $count;

