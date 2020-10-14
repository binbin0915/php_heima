<?php
//数据库配置信息
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=itcast;charset=utf8";
$username = "root";
$password = "root";

//创建PDO类的对象
$pdo = new PDO($dsn,$username,$password);

//执行插入的SQL语句
$sql = "INSERT INTO student(name,salary,bonus,city) VALUES('刘芒芒',8000,400,'安徽省')";
$pdo->exec($sql);
//获取最后插入成功的记录的id
$id = $pdo->lastInsertId();
echo "最后插入成功的记录ID是：{$id}";