<?php

//定义一个学生类
class Student
{
	//公共的成员(对象)方法
	public function showInfo($name,$age)
	{
		return "{$name}的年龄是{$age}岁！";
	}
}

//创建学生类的对象
$obj = new Student;
//调用对象的方法
echo $obj->showInfo('刘明娟',25);