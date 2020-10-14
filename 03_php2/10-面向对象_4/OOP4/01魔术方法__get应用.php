<?php
class Student
{
	//私有的成员属性
	private $name = "张三";
	private $age  = 24;
	//当访问不可访问属性时，__get()魔术方法会自动调用
	public function __get($n)
	{
		return $this->$n;
	}
}
//创建学生类对象
$obj = new Student();
//访问私有的属性
echo "{$obj->name}的年龄是{$obj->age}岁！";