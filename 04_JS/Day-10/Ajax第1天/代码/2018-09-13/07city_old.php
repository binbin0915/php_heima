<?php
$pdo = new PDO('mysql:host=localhost; dbname=test; charset=utf8', 'root', '123');

// 约定请求会有一个区分取什么数据的参数type， type=p 表示获取省，type=c 表示获取市，type=a 表示获取区县
$type = $_GET['type'];
if($type == 'p'){
    $sql = "select * from province";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data); //将获取的数据转换成json，返回给浏览器
}elseif ($type == 'c'){
    $sql = "select * from city where ProvinceCode = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $_GET['Pcode']);
    $stmt->execute();
    $data = $stmt->fetchAll(2);
    echo json_encode($data);
}elseif ($type == 'a'){
    $sql = "select * from areacounty where CityCode = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $_GET['Ccode']);
    $stmt->execute();
    $data = $stmt->fetchAll(2);
    echo json_encode($data);
}
