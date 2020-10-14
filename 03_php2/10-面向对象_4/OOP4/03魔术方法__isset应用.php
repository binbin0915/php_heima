<?php
class Student
{
	//私有的成员属性
	private $name = "张三";
	private $age  = 24;
	//当对不可访问的属性应用isset()或empty()时，__isset()会自动调用
	public function __isset($n)
	{
		return isset($this->$n);
	}
}
//创建学生类对象
$obj = new Student();
//判断私有属性是否存在
if(isset($obj->name))
{
	echo "存在";
}else
{
	echo "不存在或不可访问";
}
