<?php
//是连接数据库，查询省、市、县
$pdo = new PDO('mysql:host=localhost; dbname=test; charset=utf8', 'root', '123');

//获取地址栏的参数type
$type = $_GET['type'];

if($type == 'sheng'){
    $sql = 'select * from sheng';
    $stmt = $pdo->prepare($sql); //预处理，返回值是 PDOStatement 对象
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
}