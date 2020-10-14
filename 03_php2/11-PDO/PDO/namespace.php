<?php
//声明第1个命名空间
namespace App\Home\Controller;

//定义一个学生类
class Student{
	private $name = "张三丰";
	private $age  = 24;
	public function __construct(){
		echo "{$this->name}的年龄是{$this->age}岁！<br>";
	}
}