<?php
class Student
{
	//私有的成员属性
	private $name = "张三";
	private $age  = 24;
	//当给不可访问的属性赋值时，__set()魔术方法自动调用
	public function __set($n,$v)
	{
		$this->$n = $v;
	}
}
//创建学生类对象
$obj = new Student();
//修改私有属性
$obj->name = "刘明明";
$obj->age  = 29;

var_dump($obj);