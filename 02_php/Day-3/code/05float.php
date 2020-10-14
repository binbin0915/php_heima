<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$v1 = 0.1;
$v2 = 0.2;
$v3 = 0.3;
if( $v3 == $v1 + $v2)
{
	echo "相等1";
}
else
{
	echo "不相等1";
}
echo "<h1>下面来对其做“正确的比较方式”</h1>";
//假设目前需要精确到小数点后4位,
//那么就乘以10000，然后转换为整数去比较
if( round($v3 * 10000) == round( ($v1 + $v2) * 10000 ) ) 
{
	echo "相等2";
}
else
{
	echo "不相等2";
}


 ?>
</body>
</html>