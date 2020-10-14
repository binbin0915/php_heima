<?php
//包含连接数据库的公共代码
require_once("./conn.php");

//获取地址栏传递的ID
$id = $_GET['id'];
//构建删除的SQL语句
$sql = "DELETE FROM student WHERE id=$id";
//执行SQL语句
if(mysqli_query($link,$sql))
{
	echo "<h2>id={$id}的记录删除成功！</h2>";
	//告诉浏览器执行代码：等待3秒，并跳转到list.php文件
	header("refresh:3;url=./list.php");
	die(); //中止程序向下运行
}
