<?php

//定义一个学生类
class Student
{
	//定义类常量
	const TITLE = "<h2>第69PHP就业班</h2>";
	//私有的保存人数的静态属性：所有对象共享
	private static $count = 60;
	//公共的静态方法：在静态方法中$this不存在
	public static function showInfo()
	{
		$str = self::TITLE;
		$str .= "当前文件名：".__FILE__;
		$str .= "<br>当前函数名：".__FUNCTION__;
		$str .= "<br>当前方法名：".__METHOD__;
		$str .= "<br>班级人数：".self::$count;
		echo $str;
		//var_dump($this); $this不能存在于静态方法
	}
}
//在类外访问公共的静态方法
//访问类的内容(类常量、静态属性、静态方法),不需要创建对象，直接访问
//对象可以调用：成员属性、成员方法、静态方法
$obj = new Student();
$obj->showInfo();
