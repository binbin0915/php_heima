<?php
$pdo  = new PDO('mysql:host=localhost;dbname=php69','dahei','123456');
$pdo->exec('set names utf8');
$query = $pdo->query('select * from goods_v1');
$data = $query->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($data);
?>