<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
/*
如果我有钱，那么我的规划是：
有10万以上，买一个汽车
有2万以上，买一个摩托车
有5000以上，买一个电动单车
有1000以上，买自行车
*/

$money = 999;
if( $money >= 100000)
{
	echo "买汽车";
}
elseif($money >= 20000)
{
	echo "买摩托";
}
elseif($money >= 5000)
{
	echo "买电动单车";
}
elseif($money >= 1000)
{
	echo "自行车";
}
else
{
	echo "搬砖去吧";
}

?>
</body>
</html>