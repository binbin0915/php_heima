<?php 
$v1 = 1;
$result = isset($v1);	//将对变量v1的判断结果放到$result中
echo $result;	//实际结果是“true”，但echo输出后为“1”
echo "<br>";
var_dump($result);	//这也是输出！
					//var_dump()可以输出一个变量的完整信息
$result2 = isset($v3);
echo "<br>v3的结果为：";
var_dump($result2);
//下面演示unset掉一个变量后的结果：
unset($v1);	//销毁该变量！
$result3 = isset($v1);
echo "<br>v1被unset()之后为：";
var_dump($result3);
echo $v1;


 ?>