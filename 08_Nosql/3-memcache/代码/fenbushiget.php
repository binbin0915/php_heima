<?php
$mem  = new Memcache();
//连接memcach服务器
$mem->addServer('localhost',11211);
$mem->addServer('localhost',8888);
//正常获取数据
$age  = $mem->get('age');
var_dump($age);
$name = $mem->get('name');
var_dump($name);
$height = $mem->get('height');
var_dump($height);
$email = $mem->get('email');
var_dump($email);
?>