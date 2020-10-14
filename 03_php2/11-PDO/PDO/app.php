<?php
//数据库配置信息
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=itcast;charset=utf8";
$username = "root";
$password = "root";

//创建PDO类的对象
$pdo = new PDO($dsn,$username,$password);

//制作相同结构的SQL语句，数据部分用占位符代替
$sql = "INSERT INTO student(name,salary,bonus,city) VALUES(?,?,?,?)";

//预编译相同结构的SQL语句(含有占位符)
$PDOStatement = $pdo->prepare($sql);

//给问号(?)占位符绑定数据：1对应第1个问号，2对应第2个问号，以此类推...
$PDOStatement->bindValue(1,'张四五');
$PDOStatement->bindValue(2,9000);
$PDOStatement->bindValue(3,900);
$PDOStatement->bindValue(4,'山西省');

//执行绑定数据预处理SQL语句
$PDOStatement->execute();