<?php



//值传递的变量，变成"引用传地址"
//实例：定义一个函数，实现给数组添加元素
$arr1 = ['10010','张三丰',24];
$school1 = "北京科技大学";

function addElement(&$arr2,$school2)
{
	$arr2[] = $school2;
	print_r($arr2);
}

//调用函数
addElement($arr1,$school1);

//在函数外打印$arr1
print_r($arr1);