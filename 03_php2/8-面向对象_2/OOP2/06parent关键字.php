<?php

//定义一个学生类
class Student
{
	const TITLE = "PHP第69期就业班";
	protected static $count = 60;
}

//定义一个传智学生类
class ItcastStudent extends Student
{
	const TITLE = "PHP第70期就业班";
	protected static $count = 160;
	public function showInfo()
	{
		$str = "父类常量：".parent::TITLE;
		$str .= "<br>子类常量：".self::TITLE;
		$str .= "<br>父类静态属性：".parent::$count;
		$str .= "<br>子类静态属性：".self::$count;
		echo $str;
	}
}
//创建传智学生类对象
$obj = new ItcastStudent();
$obj->showInfo();

