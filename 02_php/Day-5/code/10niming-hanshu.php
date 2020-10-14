<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//定义一个匿名函数，该函数可以计算两个数的最小公倍数，
//并调用该函数算出6和8的最小公约数。

$gongbeishu = function ($n, $m){
	for($i = $n; $i >= $n; $i+=$n){
		if($i % $m == 0)
		{
			return $i;
		}
	}
};

$result1 = $gongbeishu(3, 5);	//应该15
echo "<br>result1 = $result1";
$result2 = $gongbeishu(6, 8);	//应该24
echo "<br>result2 = $result2";

 ?>
</body>
</html>