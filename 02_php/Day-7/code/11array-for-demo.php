<?php 
//请用for（即不用foreach）来遍历如下数组，
////并按顺序输出其每一个单元的键和值：
///提示：count()函数可以求数组的长度
$arr1 = array("a",  2=>"b",  "c",  "x"=>"d",  "e");	

$v1 = current($arr1);	//"a";
$k1 = key($arr1);		//0
next($arr1);			//指针往后移动一位
$v2 = current($arr1);	//'b'
$k2 = key($arr1);		//2
end($arr1);				//指针移动到最后一个单元
$v3 = current($arr1);	//'e'
$k3 = key($arr1);		//4

//先将指针移回第一个：
reset($arr1);
$len = count($arr1);
for($i = 0; $i < $len; $i++)
{
	$key = key($arr1);
	$value = current($arr1);
	echo "<br>$key :::: $value";
	next($arr1);	
}

