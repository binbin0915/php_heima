<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$n1 = 123;
//将它转换为2,8,16进制分别如下：
$v1 = decbin($n1);
$v2 = decoct($n1);
$v3 = dechex($n1);
echo "<br>v1 = 0b" . $v1;
echo "<br>v2 = 0" . $v2;
echo "<br>v3 = 0x" . $v3;


 ?>
</body>
</html>