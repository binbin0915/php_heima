<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
// PHP_SELF：			表示当前请求的网页地址（不含域名部分）
// SERVER_NAME： 	表示当前请求的服务器名
// SERVER_ADDR：	表示当前请求的服务器IP地址
// DOCUMENT_ROOT：	表示当前请求的网站物理路径（apache设置站点时那个）
// REMOTE_ADDR：  	表示当前请求的客户端的IP地址
// SCRIPT_NAME：		表示当前网页地址
echo "<br>你访问的网页为：" , $_SERVER['PHP_SELF'];
echo "<br>你访问的网站为：" , $_SERVER['SERVER_NAME'];
echo "<br>你访问的网站物理路径为：" , $_SERVER['DOCUMENT_ROOT'];
echo "<br>你的IP为：",  $_SERVER['REMOTE_ADDR'];
$ip = $_SERVER['REMOTE_ADDR'];

file_put_contents("$ip.txt", $ip)

 ?>
</body>
</html>