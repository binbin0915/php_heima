<?php

//定义第1个接口InterA
interface InterA
{
	const TITLE = "PHP第69期就业班";
	//定义一个成员抽象方法
	public function showInfo($a,$b);
}

//定义第2个接口InterB
interface InterB
{
	//定义一个静态抽象方法
	public static function readMe();
}

//定义学生类，并实现接口功能
class Student implements InterA,InterB
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
//创建学生类对象
$obj = new Student();
$obj->showInfo('张三四',26);
$obj->readMe();