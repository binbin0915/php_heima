<?php
//定义一个学生类
class Student
{
	//声明一个类常量
	const TITLE = "localhost";
	//声明一个成员方法
	public function showInfo()
	{
		echo "主机名：".self::TITLE;
		echo "<br>主机名：".static::TITLE;
		echo "<br>姓名：".static::$name;
	}
}
//定义传智学生类，并继承学生类
class ItcastStudent extends Student
{
	//声明一个类常量
	const TITLE = "127.0.0.1";
	//声明一个静态属性
	public static $name = "张三四";
}
//创建传智学生类对象
$obj = new ItcastStudent();
//调用对象的showInfo()方法
$obj->showInfo();