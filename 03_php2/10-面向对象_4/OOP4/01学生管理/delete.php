<?php
//包含连接数据库的公共文件
require_once("./conn.php");

//获取地址栏传递的参数
$id = $_GET['id'];

//构建删除的SQL语句
$sql = "DELETE FROM student WHERE id={$id}";

//判断记录是否删除成功
if($db->exec($sql))
{
	echo "id={$id}的记录删除成功！";
	header("refresh:3;url=./list.php");
	die();
}else
{
	echo "id={$id}的记录删除失败！";
	header("refresh:3;url=./list.php");
	die();
}

