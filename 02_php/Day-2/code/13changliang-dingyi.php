<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
// 定义常量的形式1
define("PI1", 3.14);
// 定义常量的形式2
const PI2 = 3.1416;

// 计算半径为2的圆的面积，用PI1作为圆周率
$s1 = PI1 * 2 * 2;	//
// 计算半径为3的圆的面积，用PI2作为圆周率
$s2 = PI2 * 3 * 3;
// 计算半径为4的圆的面积，用PI1作为圆周率
$s3 = constant("PI1") * 4 * 4;

echo "<br>面积1为：", $s1;
echo "<br>面积2为：", $s2;
echo "<br>面积3为：", $s3;





// 如果常量PI1没有定义过，
if( !defined("PI1") )
{
	//那么这里就去定义它！
	define("PI1", 3.14);
}
// 计算半径为2的圆的面积，用PI1作为圆周率
$s1 = PI1 * 2 * 2;	//这里就直接使用该常量

 ?>
</body>
</html>