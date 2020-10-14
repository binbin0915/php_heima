<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

$n1 = "100";	//当做二进制数字字符串
$n2 = "17";		//当做8进制数字字符串
$n3 = "1b";		//当做16进制数字字符串

echo "<br>二进制100转换为10进制为："  . bindec($n1);
echo "<br>8进制17转换为10进制为："  . octdec($n2);
echo "<br>16进制1b转换为10进制为："  . hexdec($n3);

 ?>
</body>
</html>