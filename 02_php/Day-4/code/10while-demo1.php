<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

//求7到17的和。
$n = 7;
$sum = 0;
while ( $n <= 17)
{
	//$sum = $sum + $n;	//好low
	$sum += $n;
	$n++;
}

echo "和为$sum";

 ?>
</body>
</html>