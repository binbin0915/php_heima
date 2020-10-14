<?php 
//header("content-type:text/html; charset=gbk");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	
<?php 

$str1 = 'abcdefg';
$str2 = "abcd\tefg";
$str3 = '我是chinese';

echo "<br>str1的strlen()求得的长度为：" . strlen($str1);
echo "<br>str2的strlen()求得的长度为：" . strlen($str2);
echo "<br>str3的strlen()求得的长度为：" . strlen($str3);

echo "<hr>";

echo "<br>str1的 mb_strlen()求得的长度为：" . mb_strlen($str1);
echo "<br>str2的 mb_strlen()求得的长度为：" . mb_strlen($str2);
echo "<br>str3的 mb_strlen()求得的长度为：" . mb_strlen($str3);


 ?>
</body>
</html>