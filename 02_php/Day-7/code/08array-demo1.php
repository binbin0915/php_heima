<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//求以下数组的所有项的总和：
$arr1 = [8, 12, 3, 14, 25];
$len = count($arr1);
$sum = 0;
for($i = 0; $i < $len; $i++)
{
	$sum += $arr1[$i];
}
echo "<br>arr1的总和为：$sum";

//求以下数组的所有项的总和：
$arr2 = [
			[8, 12, 3, 5],
			[11, 2, 5, 7],
			[12, 18, 3,2],
		];
$arr2 = [
		[1,2,3],
		[4,5,6,7],
		[8,9,10,11,12],
	];
$len = count($arr2);	//3
$sum2 = 0;		//总和
$count = 0;		//个数
for($i = 0; $i < $len;  $i++)
{
	$temp = $arr2[$i];	//这是一个数组！
	$len2 = count($temp);//应该是4
	for($j = 0; $j < $len2; $j++)
	{
		$sum2 += $temp[$j];
		$count++;
	}
}
echo "<br>arr2的总和为：$sum2";
echo "，平均值为：" . $sum2/$count;


 ?>
</body>
</html>