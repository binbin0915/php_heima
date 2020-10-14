<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php 
/*
给定一个任意整数，请判断该数是否能被3整除并且还能被5整除！
*/
$n1 = 15;	//比如13,19,20,21，
if( $n1 % 3 == 0 && $n1 % 5 == 0)
{
	echo "ok，满足条件";
}
else
{
	echo "no，不满足条件";
}

 ?>
<body>

</body>

</html>