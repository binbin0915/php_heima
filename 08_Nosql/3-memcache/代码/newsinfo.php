<?php
//连接memcache服务器
$mem = new Memcache();
$mem->connect('localhost',11211);
//构建新闻详情的键
$id = (int)$_GET['id'];
$key = 'news_id_'.$id;
//先从memcache里面获取数据，
$info = $mem->get($key);
if(!$info){
	echo 'a';
	//获取失败，从mysql数据库里面获取数据
	$pdo = new PDO('mysql:host=localhost;dbname=php','root','root');
	$pdo->exec('set names utf8');
	$sql="select * from it_news where id=".$id;
	$res = $pdo->query($sql);
	$info = $res->fetch(PDO::FETCH_ASSOC);
	//缓存数据
	$mem->set($key,$info,0,3600);
}
echo $info['title'];
echo '<hr>';
echo $info['body'];
?>