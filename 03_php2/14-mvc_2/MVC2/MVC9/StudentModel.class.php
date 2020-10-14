<?php
//包含基础模型类
require_once("./BaseModel.class.php");

//定义学生模型类，并继承基础模型类
class StudentModel extends BaseModel
{
	//获取一行数据
	public function fetchOne($id)
	{
		//构建查询的SQL语句
		$sql = "SELECT * FROM student WHERE id={$id}";
		//执行SQL语句，返回一维数组
		return $this->db->fetchOne($sql);
	}

	//获取多行数据
	public function fetchAll()
	{
		//构建查询的SQL语句
		$sql = "SELECT * FROM student ORDER BY id DESC";
		//执行SQL语句，返回二维数组
		return $this->db->fetchAll($sql);
	}

	//删除记录
	public function delete($id)
	{
		//构建删除的SQL语句
		$sql = "DELETE FROM student WHERE id={$id}";
		//执行SQL语句，并返回布尔值
		return $this->db->exec($sql);
	}

	//添加记录
	public function insert($data)
	{
		//构建"字段列表"和"值列表"字符串
		$fields = '';
		$values = '';
		foreach($data as $key=>$value)
		{
			$fields .= "$key,";
			$values .= "'$value',";
		}
		//去除结尾的逗号
		$fields = rtrim($fields,',');
		$values = rtrim($values,',');
		//构建插入的SQL语句：INSERT INTO news(title,content,hits) VALUES('标题','内容','30')
		$sql = "INSERT INTO student($fields) VALUES($values)";
		//执行SQL语句，并返回布尔值
		return $this->db->exec($sql);
	}

	//更新记录
	public function update($data,$id)
	{
		//构建"字段名=字段值"的字符串
		$str = "";
		foreach($data as $key=>$value)
		{
			$str .= "{$key}='{$value}',";
		}
		//去除结尾的逗号
		$str = rtrim($str,',');
		//构建更新的SQL语句：UPDATE news SET title='标题',content='内容' WHERE id=5
		$sql = "UPDATE student SET {$str} WHERE id={$id}";
		//执行SQL语句，并返回布尔值
		return $this->db->exec($sql);
	}
}