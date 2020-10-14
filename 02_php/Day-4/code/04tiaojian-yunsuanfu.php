<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

$year = 2003;	//年份
$is_runnian =  ($year % 4 == 0 && $year % 100 != 0  || $year % 400 == 0) ? "是闰年" : "不是闰年";
echo $year,$is_runnian;
 
 ?>
</body>
</html>