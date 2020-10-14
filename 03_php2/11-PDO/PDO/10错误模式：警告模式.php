<?php
//数据库配置信息
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=itcast;charset=utf8";
$username = "root";
$password = "root";

//创建PDO类的对象
$pdo = new PDO($dsn,$username,$password);
//设置错误报告模式为：警告模式
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

//执行查询的SQL语句，执行成功返回结果集对象(PDOStatement类)
$sql = "SELECT * FROM student WHERE id=abc";
$PDOStatement = $pdo->query($sql);
