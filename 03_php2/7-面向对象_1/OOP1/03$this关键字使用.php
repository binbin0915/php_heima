<?php
//定义一个学生类
class Student {
	//私有的成员属性：类外无法访问
	private $name = "张三丰";
	private $age  = 24;

	//受保护的成员方法
	protected function showLine(){
		return "<hr>";
	}
	//公共的成员(对象)方法
	//$this变量只能在成员方法中使用
	public function showInfo() 	{
		//在成员方法中，使用$this变量代替传递进来的$obj对象
		//$this和$obj指向的是同一个对象
		$str = "<h2>{$this->name}的基本信息</h2>";
		$str .= $this->showLine();
		$str .= "{$this->name}的年龄是{$this->age}岁！";
		echo $str;
	}
}
//创建学生类的对象
$obj = new Student;
//调用对象的方法
$obj->showInfo();