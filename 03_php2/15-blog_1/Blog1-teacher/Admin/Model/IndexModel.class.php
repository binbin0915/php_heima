<?php
//声明命名空间
namespace Admin\Model;
use Frame\Libs\Db;

//定义首页模型类
final class IndexModel
{
	//获取多行数据
	public function fetchAll()
	{
		//创建数据库工具类对象
		$db = Db::getInstance();

		//构建查询的SQL语句
		$sql = "SELECT * FROM student ORDER BY id DESC";
		//执行SQL语句，并返回二维数组
		return $db->fetchAll($sql);
	}
}