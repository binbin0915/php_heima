<?php
//包含数据库工具类
require_once("./Db.class.php");
//定义新闻模型类
class NewsModel
{
	//私有的保存数据库对象的属性
	private $db = null;

	//构造方法
	public function __construct()
	{
		//创建Db类对象
		$arr = array(
				'db_host' => 'localhost',
				'db_user' => 'root',
				'db_pass' => 'root',
				'db_name' => 'itcast',
				'charset' => 'utf8'
			);
		$this->db = Db::getInstance($arr);
	}

	//获取多行数据
	public function fetchAll()
	{
		//构建查询的SQL语句
		$sql = "SELECT * FROM news ORDER BY nid DESC";
		//执行SQL语句，返回二维数组
		return $this->db->fetchAll($sql);
	}

	//删除记录
	public function delete($id)
	{
		//构建删除的SQL语句
		$sql = "DELETE FROM news WHERE nid={$id}";
		//执行SQL语句，并返回布尔值
		return $this->db->exec($sql);
	}
}