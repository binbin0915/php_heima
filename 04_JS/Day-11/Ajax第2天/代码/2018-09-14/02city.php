<?php
//连接数据库
$dsn = 'mysql:host=localhost; dbname=test; charset=utf8';
$pdo = new PDO($dsn, 'root', '123');

//获取type
$type = $_GET['type'];
if($type == 'sheng'){
    //写SQL
    $sql = 'select * from sheng';
} elseif ($type == 'shi'){
    $Pcode = $_GET['Pcode'];
    //写SQL
    $sql = 'select * from shi where ProvinceCode = ' . $Pcode;
} elseif ($type == 'xian'){
    $Ccode = $_GET['Ccode'];
    $sql = "select * from xian where CityCode = $Ccode";
}
////////////////////////////////////////////
//预处理
$stmt = $pdo->prepare($sql); //返回值是PDOStatement对象，结果集对象
//如果SQL中有占位符（? 或 :xxx），则需要使用bindValue绑定值
//执行
$stmt->execute();
//获取结果
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//print_r($data);
echo json_encode($data);
