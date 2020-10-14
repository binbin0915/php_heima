<?php

//定义抽象学生类：子类方法的目录大纲
abstract class Student
{
	const TITLE = "PHP第69期就业班";
	//定义成员的抽象方法
	abstract protected function showInfo($a,$b);
	//定义静态的抽象方法
	abstract static public function readMe();
}
//定义传智学生类，并继承学生类
final class ItcastStudent extends Student
{
	//重写showInfo()抽象方法
	public function showInfo($name,$age){
		echo "{$name}的年龄是{$age}岁！<br>";
	}
	//重写readMe()抽象方法
	public static function readMe(){
		echo self::TITLE;
	}
}
//创建传智学生类对象
$obj = new ItcastStudent;
$obj->showInfo("张三四",24);
$obj->readMe();