<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//定义一个函数，该函数可以计算给定半径的球的体积，
//其中圆周率π默认使用3.14，也可以根据不同精度的需要给定不同的圆周率。

function ball_tiji($r, $pi=3.14)
{
	$s = $pi * 4 * $r * $r * $r / 3;
	return $s;
}
$s1 = ball_tiji(1);
echo "<br>半径为1的球的体积为：$s1";

$s2 = ball_tiji(1, 3.1416);
echo "<br>半径为1的球的体积为：$s2";

 ?>
</body>
</html>