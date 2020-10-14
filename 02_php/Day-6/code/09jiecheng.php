<?php
/*
计算5的阶层；
分析：
数学上阶乘可以这样来描述：一个数n的阶乘，是n-1的阶乘，乘以n的结果！
假设，我们有一个函数 jieceng(),它可以计算任意正整数n的阶乘，类似这样：
$n = 5;	//或等于10， 13，等等都无所谓。
$result = jiecheng($n);
*/

function jiecheng($n)
{
	if($n == 1)
	{
		return 1;
	}
	$re = $n * jiecheng($n-1);
	return $re;
}
$result1 = jiecheng(5);	//
echo "<br>5的阶乘为：$result1";
$result2 = jiecheng(10);	//
echo "<br>10的阶乘为：$result2";
echo "<br>15的阶乘为：" . jiecheng(15);



