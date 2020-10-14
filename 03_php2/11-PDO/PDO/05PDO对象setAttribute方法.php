<?php
//数据库配置信息
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=itcast;charset=utf8";
$username = "root";
$password = "root";

//创建PDO类的对象
$pdo = new PDO($dsn,$username,$password);
//设置PDO属性：设置从结果集提取数组的类型为关联数组
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//执行查询的SQL语句，执行成功返回结果集对象(PDOStatement类)
$sql = "SELECT * FROM student";
$PDOStatement = $pdo->query($sql);

//遍历结果集对象，取出每一行数据(一维数组)
foreach($PDOStatement as $arr)
{
	print_r($arr);
}