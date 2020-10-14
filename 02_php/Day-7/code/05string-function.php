<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<pre>
	<?php 
	$arr1 = ['中', '国', 12, 18];
	//echo $arr1;//报错，输出“Array”,没有实际意义
	print_r($arr1);
	echo "<br>";
	var_dump($arr1);

	echo "<hr>";

	 ?>
	</pre>

	<?php 

	$str1 = nl2br("abc\ndefg");
	echo $str1;

	echo "<hr>";
	$str2 = htmlspecialchars("if a<b && b>c then ok!");
	echo $str2;

	 ?>
</body>
</html>