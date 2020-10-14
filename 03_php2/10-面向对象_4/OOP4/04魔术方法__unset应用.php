<?php
class Student
{
	//私有的成员属性
	private $name = "张三";
	private $age  = 24;
	//当对私有属性应用unset()时，魔术方法__unset()自动调用
	public function __unset($n)
	{
		unset($this->$n);
	}
}
//创建学生类对象
$obj = new Student();
//删除对象属性
unset($obj->name);

var_dump($obj);