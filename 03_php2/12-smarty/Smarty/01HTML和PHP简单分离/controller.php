<?php
//包含连接数据库的公共文件
require_once("./conn.php");
//执行查询的SQL语句
$sql = "SELECT * FROM student ORDER BY id DESC";
$result = mysqli_query($link,$sql);
//获取所有行数据
$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
//获取学生人数
$records = mysqli_num_rows($result);

//包含视图文件
include "./view.html";