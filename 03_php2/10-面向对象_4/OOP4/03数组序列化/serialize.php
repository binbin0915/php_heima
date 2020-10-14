<?php
//数组变量序列化
$arr = array(
		'db_host' => 'localhost',
		'db_user' => 'root',
		'db_pass' => 'root',
		'db_name' => 'itcast',
	);
//序列化：将变量转成可保存的字符串
$str = serialize($arr);
//将序列化字符串，保存到记事本
file_put_contents('./1.txt',$str);