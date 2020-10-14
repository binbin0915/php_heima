<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//从1-10（含1和10）进行循环并输出该数字，并要求能被3整除就不输出，
//能被9整除就终止循环。最后再输出循环循环变量的值。

for($i = 1; $i <= 10; $i++)
{
	if($i % 3 == 0)
	{
		continue;//中断当次循环，继续下一次
	}
	if($i % 9 == 0)
	{
		break;	//完全终止当前循环（跳出去了，不再循环）
	}
	echo "$i, ";
}
echo "<br>$i";


 ?>
</body>
</html>