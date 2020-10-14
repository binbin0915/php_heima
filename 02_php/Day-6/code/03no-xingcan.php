<?php 
//定义一个函数，该函数可以求出所给定的若干个数据中的奇数的和。
function jishuhe()
{
	$all_args = func_get_args();	//得到所有实参，是一个数组！
	$count = count($all_args);		//取得数组的长度（元素个数)
	$sum = 0;
	//对该数组（也就是所有实参）进行遍历循环
	for($i = 0; $i < $count; $i++)
	{
		if($all_args[$i] % 2 == 1)
		{
			$sum += $all_args[$i];	//累加器
		}
	}
	return $sum;
}

$he1 = jishuhe(1, 5, 2, 8, 7);
echo "<br>和1为：$he1";
$he2 = jishuhe(11, 3, 2, 8, 4, 10, 12);
echo "<br>和2为：$he2";

