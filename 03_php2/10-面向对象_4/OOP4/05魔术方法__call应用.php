<?php
class Student
{
	//私有的成员属性
	private $name = "张三";
	private $age  = 24;
	//当访问不存在或不可访问的方法时，魔术方法__call()自动调用
	//参数：$func是传递过来的方法名称，$args是传递过来的参数数组
	public function __call($func,$args)
	{
		echo "方法{$func}(".implode(',',$args).")不存在或不可访问！";
	}
}
//创建学生类对象
$obj = new Student();
//调用一个不存在的方法
$obj->showInfo("张三",24);