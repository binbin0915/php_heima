<?php 
/*
定义一个函数，该函数能够判断一个数字是否是一个素数（也叫质数），
是就返回true，否则就返回false。
并利用该函数的功能，输出2-200之间的所有素数。
注：素数就是只能被1和它本身整除的数。——即只有两个可以整除的数
*/
//功能：判断一个数是否为素数
function is_leap($n){
	$count = 0;
	for($i = 1; $i<= $n; $i++)
	{
		if($n % $i == 0)
		{
			$count++;
		}
	}	
	if($count == 2)	//只有两个可以整除的数，就是素数
	{
		return true;
	}
	return false;
}
echo "<br>2是否素数：";  var_dump(is_leap(2));
echo "<br>3是否素数：";  var_dump(is_leap(3));
echo "<br>19823是否素数：";  var_dump(is_leap(19823));

echo "<hr>";
$count = 0;
for($i = 2; $i<=200; $i++)
{
	if(is_leap($i))
	{
		echo "$i ";
		$count++;
	}
}
echo "<br>共有{$count}个";
