<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//求7到177之间能被7整除的数的平均值。

$n = 7;
$sum = 0;	//总和
$count = 0;	//个数
do
{
	//.......做点什么。。。。
	if($n % 7 == 0)
	{
		$sum += $n;		//累加器
		$count++;		//计数器
	}
	
	$n++;
}while( $n <= 177 );

$avg = $sum / $count;	//平均值
echo $avg;

 ?>
</body>
</html>