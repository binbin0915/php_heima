<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//错误抑制符

if(@mysqli_connect('localhost','root','1234'))
{
	echo "成功！";
}
else{
	echo "连接失败";
}

 ?>
</body>
</html>