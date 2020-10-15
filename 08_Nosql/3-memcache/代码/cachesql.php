<?php
//连接memcache服务器，获取数据
$mem  = new Memcache();
$mem->connect('localhost',11211);
//设计一个键的名称，把data字符串当成键的名称；
$data = $mem->get('data');//获取失败返回false,获取成功就直接返回数据了
//var_dump($data);
if(!$data){
	echo 'a';
	//从memcache里面获取数据失败，则连接mysql数据库，获取数据
	$pdo = new PDO('mysql:host=localhost;dbname=php','root','root');
	$pdo->exec('set names utf8');
	//查询语句
	$sql = 'select * from it_user';
	$res = $pdo->query($sql);
	$data = $res->fetchAll(PDO::FETCH_ASSOC);
	//把查询到的数据，给缓存到memcache服务器里面；
	$mem->set('data',$data,0,3600);
}
echo '<pre>';
print_r($data);

?>