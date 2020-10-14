<?php 
//定义一个函数，该函数可以返回所给定的任意两个数字之间的随机整数。

function suiji($p1, $p2)
{
	if($p1>$p2)
	{
		$num_max = $p1;
		$num_min = $p2;
	}
	else
	{
		$num_max = $p2;
		$num_min = $p1;
	}

	return mt_rand($num_min, $num_max);
}
echo "<br>10-20的随机数：" . suiji(10, 20);
echo "<br>20-15的随机数：" . suiji(20, 15);
echo "<br>15-15的随机数：" . suiji(15, 15);


// function sj()
// {





// 	return 
// }
$num  = range(10, 30);
shuffle($num);
for ($i=0; $i <6 ; $i++) { 
	echo $num[$i] &ensp;
}