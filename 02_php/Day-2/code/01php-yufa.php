<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
	/*
	输出欢迎信息，
	并显示当前日期和星期
	*/
	echo "<h1>一个标题</h1>";
	echo "欢迎光临，今日是：";
	echo date("Y年m月d日");
	echo date(" 星期 w");		//w表示星期的“数字”
?>
</body>
</html>