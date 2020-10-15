<?php
$mem = new Memcache();
$mem->connect('localhost',11211);
//非标量数据，存储到memcache里面；
//数组类型
/*$mem->set('array',['name'=>'xiongda','age'=>12],0,1200);
//对象类型
class Dog{

}
$dog = new Dog();
$dog->name = 'saihu';
$dog->age = 2;
$mem->set('object',$dog,0,1200);
//资源类型
$resource = fopen('./demo1.php','r');
$mem->set('resource',$resource,0,1200);
//null类型
$mem->set('null',null,0,1200);*/
//获取非标量类型的数据
$array = $mem->get('array');
var_dump($array);
echo '<hr>';
$object = $mem->get('object');
var_dump($object);
echo '<hr>';
$resource = $mem->get('resource');
var_dump($resource);
echo '<hr>';
$null = $mem->get('null');
var_dump($null);
echo 'ok';
?>