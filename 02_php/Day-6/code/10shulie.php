<?php 
//计算斐波那契数列第10项的值：1, 1, 2, 3, 5, 8, 13, 21, ...... 
//规则：从第3项开始，每一项都是其前面两项的和
//假设有个函数，可以计算斐波那契数列的第n项：

//此可以求出斐波那契的第n项的值
function feibo( $n )
{
	if($n > 2)	//第3项往后的项
	{
		$re = feibo($n-1) + feibo($n-2);
		return $re;

	}
	return 1;
}

echo "<br>第1项的值为：" . feibo(1);
echo "<br>第2项的值为：" . feibo(2);
echo "<br>第3项的值为：" . feibo(3);
echo "<br>第4项的值为：" . feibo(4);
echo "<br>第5项的值为：" . feibo(5);
echo "<br>第10项的值为：" . feibo(10);
echo "<br>第20项的值为：" . feibo(20);

 ?>