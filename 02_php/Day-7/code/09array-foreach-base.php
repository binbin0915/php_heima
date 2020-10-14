<?php 
//使用foreach遍历如下数组：
$a3 = ['a'=>5, 'b'=>1.2, 5=>true, 3=>'abc'];
foreach($a3  as $value)
{
	echo "<br>$value"; 
}

//再加上$key的这个变量
foreach($a3  as $key => $value)
{
	echo "<br>$key : $value"; 
}

