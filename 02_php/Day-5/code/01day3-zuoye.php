<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body{
			font-family: 仿宋;
		}
	</style>
</head>
<body>
	
<?php
$n = 7;
//输出n行n列的星星图案
echo "<br>图案A:";
for($i = 1; $i <= $n; $i++)
{
	echo "<br>";
	//echo "****";
	for($k = 1; $k <= $n; $k++)
	{
		echo "*";
	}
}


//输出n行n列的三角图案
echo "<br>图案B:";
for($i = 1; $i <= $n; $i++)
{
	echo "<br>";
	//echo "****";
	for($k = 1; $k <= $i; $k++)
	{
		echo "*";
	}
}
//
echo "<br>图案C:";
for($i = 1; $i <= $n; $i++)
{
	echo "<br>";
	//echo "****";
	for($k = 1; $k <= $i*2-1; $k++)
	{
		echo "*";
	}
}


//
echo "<br>图案CCCCC:";
for($i = 1; $i <= $n; $i++)
{
	echo "<br>";
	//echo "****";
	for($k = 1; $k <= $i*3-5; $k++)
	{
		echo "*";
	}
}
//
echo "<br>图案D:";
for($i = 1; $i <= $n; $i++)
{
	echo "<br>";
	//一行的前面，先输出若干个空格：
	for($j = 1; $j <= $n - $i; $j++)
	{
		echo "&ensp;";
	}
	

	//然后才开始输出这一行的星号！
	for($k = 1; $k <= $i*2-1; $k++)
	{
		echo "*";
	}
}

 ?>