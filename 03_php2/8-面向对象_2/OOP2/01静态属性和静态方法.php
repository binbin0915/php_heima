<?php

//定义一个学生类
class Student
{
	//私有的保存人数的静态属性：所有对象共享
	private static $count = 60;
	//公共的静态方法
	public static function showInfo()
	{
		$str = "当前文件名：".__FILE__;
		$str .= "<br>当前函数名：".__FUNCTION__;
		$str .= "<br>当前方法名：".__METHOD__;
		$str .= "<br>班级人数：".Student::$count;
		echo $str;
	}
}
//在类外访问公共的静态方法
//访问类的内容(类常量、静态属性、静态方法),不需要创建对象，直接访问
Student::showInfo();
