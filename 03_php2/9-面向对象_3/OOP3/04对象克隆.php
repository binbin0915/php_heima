<?php
//定义一个学生类
class Student
{
	private $name = "张三丰";
	private $age  = 24;
	//克隆方法：当对象克隆完成时，自动调用的方法
	public function __clone()
	{
		$this->name = "方俊英";
		$this->age  = 29;
	}
}

//创建学生类对象
$obj1 = new Student();
//克隆对象：将$obj1克隆一份，传给$obj2
//克隆对象，是两个独立的新对象
$obj2 = clone $obj1;
var_dump($obj1,$obj2);