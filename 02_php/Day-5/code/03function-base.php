<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.box{
			border:solid 1px red;
			width: 300px;
		}
	</style>
</head>
<body>
	<?php 

function  sandaogang($n)
{
	for($i = 1; $i <= $n; $i++)
	{
		echo "<hr color=red>";
	}
}






sandaogang(2);

define("PI", 3.14);
//求半径为r的圆的面积
function circleArea($r)
{
	$s = PI * $r * $r;
	return $s;	//返回计算的结果
}
$s1 = circleArea(1);
echo "<br>半径为1的圆面积为：$s1";
$s2 = circleArea(3);
echo "<br>半径为3的圆面积为：$s2";
$s3 = circleArea(5.7);
echo "<br>半径为5.7的圆面积为：$s3";























?>

<div class="box">
	一些文字。。。、
	<?php 
		sandaogang(4);
	 ?>
</div>
</body>
</html>
