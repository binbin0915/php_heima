<?php
$pdo  = new PDO('mysql:host=localhost;dbname=php69','root','root');
$pdo->exec('set names utf8');
//添加锁
//$pdo->exec('lock table a write');
$fh = fopen('./lock.txt','w');
flock($fh,LOCK_EX);
//取出id的值
$res = $pdo->query('select id from a');
$info = $res->fetch(PDO::FETCH_ASSOC);
$id = $info['id'];
//给id的值加1操作
$id = $id+1;
//把该值再写入；
$pdo->exec("update a set id=$id");
//$pdo->exec('unlock tables');//是否锁
flock($fh,LOCK_UN);
echo 'ok';
?>