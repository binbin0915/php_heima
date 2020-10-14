<?php
//定义一个学生类
class Student
{
	private $name = "张三四";
	private $age  = 24;
	public function __construct(){
		echo "{$this->name}的年龄是{$this->age}岁！<br>";
	}
}