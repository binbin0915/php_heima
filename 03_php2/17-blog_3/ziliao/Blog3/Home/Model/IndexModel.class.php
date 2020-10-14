<?php
//声明命名空间
namespace Home\Model;
use Frame\Libs\BaseModel;

//定义首页模型类，并继承基础模型类
final class IndexModel extends BaseModel
{
	//获取多行数据
	public function fetchAll()
	{
		//构建查询的SQL语句
		$sql = "SELECT * FROM student ORDER BY id DESC";
		//执行SQL语句，并返回二维数组
		return $this->pdo->fetchAll($sql);
	}
}