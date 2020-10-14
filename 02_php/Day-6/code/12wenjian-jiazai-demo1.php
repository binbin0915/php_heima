<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php 

echo "<br>当前路径为：" . __DIR__;
$file = __DIR__ . "\inc\page1.php";
echo "<br>想要载入的文件为：" .  $file;
include $file;
echo "<hr>";
echo "<hr>";
echo "<hr>";
$file2 = getcwd()  . "\inc\\nav.html";
echo "<br>又想要载入的文件为：" .  $file2;
include_once $file2;
include_once $file2;
 ?>
</body>
</html>