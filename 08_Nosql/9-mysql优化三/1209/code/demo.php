<?php
$pdo  = new PDO('mysql:host=localhost;dbname=php69','root','root');
$pdo->exec('set names utf8');
//执行两天SQL语句
//开启一个事务
$pdo->beginTransaction();
$res1 = $pdo->exec("insert into user values(9,'xiaobai1',23,'xiaobai1@sohu.com',2)");
$res2 = $pdo->exec("insert into user values(10,'xiaobai2',23,'xiaobai2@sohu.com',3)");
if(!$res1 || !$res2){
	//以上语句只要有一个执行错误，都进入此处
	$pdo->rollback();
}else {
	//提交事务
	$pdo->commit();
}
echo 'ok';
?>