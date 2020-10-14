<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
// 假设给定一个整数表示一个员工的年龄，
// 如果该年龄为整十的数，
// 或者年龄的平方除以100在10~20之间，
// 则公司在当年年底会给该员工发特别奖。
// 请写出程序来判断某个年龄的员工是否可以得奖。
$age = 20;	//当age为20,30,就会发生短路
if($age % 10 == 0 || $age*$age/100>=10 && $age*$age/100<= 20)
{
	echo "<br>可以得奖";
}
else
{
	echo "<br>不可以得奖";
}

echo "<br>再来一个写法：";
//这个，对于32也会短路
if($age*$age/100>=10 && $age*$age/100<= 20 || $age % 10 == 0)
{
	echo "<br>可以得奖";
}
else
{
	echo "<br>不可以得奖";
}


 ?>
</body>
</html>