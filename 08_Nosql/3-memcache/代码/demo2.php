<?php
$mem  = new Memcache();
$mem->connect('localhost',11211);
//标量数据的存储到memcache里面；
//整型数据
/*$mem->set('int',12,0,1200);
//浮点型
$mem->set('float',12.23,0,1200);
//字符串
$mem->set('string','welcome to beijing',0,1200);
//布尔类型
$mem->set('boolen1',true,0,1200);
$mem->set('boolen2',false,0,1200);*/
//获取数据
$int = $mem->get('int');
var_dump($int);
echo '<hr>';
$float = $mem->get('float');
var_dump($float);
echo '<hr>';
$string = $mem->get('string');
var_dump($string);
echo '<hr>';
$boolen1 = $mem->get('boolen1');
var_dump($boolen1);
echo '<hr>';
$boolen2 = $mem->get('boolen2');
var_dump($boolen2);
echo 'ok';
?>