<?php
//连接memcache服务器
$mem = new Memcache();
//连接两台memcache服务器
$mem->addServer('localhost',11211);
$mem->addServer('localhost',8888);
//设置缓存数据
$mem->set('name','paidaxing',0,3600);
$mem->set('age','12',0,3600);
$mem->set('email','paidaxing@sohu.com',0,3600);
$mem->set('height','198',0,3600);
echo 'ok';
?>