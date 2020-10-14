<?php
//声明一个App命名空间
namespace App;

//(1)定义一个学生类
class Student{
	private $name = "张三丰";
	private $age  = 24;
	public function __construct(){
		echo "{$this->name}的年龄是{$this->age}岁！<br>";
	}
}

//(2)定义一个普通函数
function getMaxInt(){
	echo "PHP最大整数：".PHP_INT_MAX."<br>";
}

//(3)定义一个局部常量(const)
const TITLE = "PHP第69期就业班";

//(4)其它的普通代码(除以上三种类型外)
//普通代码不存在空间中，普通代码存在于全局空间中
$a = 100;
