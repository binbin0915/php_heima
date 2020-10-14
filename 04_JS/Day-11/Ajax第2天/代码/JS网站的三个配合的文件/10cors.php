<?php
//* 表示所有的网站都可以来访问
//header("Access-Control-Allow-Origin:*");
// 设置只允许一个网站来访问
//header("Access-Control-Allow-Origin:http://www.ajax.com");

//设置允许三个网站来访问
$allow = [
	'http://www.ajax.com',
	'http://www.jquery.com',
	'http://www.oop.com'
];
//获取来访问的网站的域名
$domain = $_SERVER['HTTP_ORIGIN']; // 获取的是完整的域名
//$domain = $_SERVER['HTTP_REFERER']; // 获取是完整的域名+后面的参数
if(in_array($domain, $allow)){
	header("Access-Control-Allow-Origin:" . $domain);
}
echo '小伙，你又来了';