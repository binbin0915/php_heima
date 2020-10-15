<?php
$mem  = new Memcache();//实例化一个类，创建一个对象

$mem->connect('localhost',11211);//连接memcache服务器
//添加一个username的键，值是libai,不压缩，缓存周期时120秒
/*$mem->add('username','libai',0,120);
$mem->add('age','12',0,120);*/
//获取存储的值
/*$username = $mem->get('username');
echo $username;
echo '<hr>';
$age = $mem->get('age');
echo $age;
echo '<hr>';
echo 'ok';*/

$res = $mem->getStats();
echo '<pre>';
print_r($res);
?>