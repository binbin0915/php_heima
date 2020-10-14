<?php

//定义一个学生类
class Student {
	const TITLE = "<h2>PHP第69期就业班</h2>";
	protected static $count = 60;
	protected $name = "张三丰";
	protected static function readMe(){
		return __METHOD__;
	}
	protected function showInfo(){
		return __METHOD__;
	}
}

//定义一个传智学生类
class ItcastStudent extends Student {
	public function abc() {
		$str = self::TITLE;
		$str .= "班级人数：".ItcastStudent::$count;
		$str .= "<br>姓名：{$this->name}";
		$str .= "<br>静态方法：".self::readMe();
		$str .= "<br>成员方法：".$this->showInfo();
		echo $str;
	}
}
//创建传智学生类对象
$obj = new ItcastStudent();
$obj->abc();

