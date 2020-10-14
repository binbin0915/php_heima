<?php

//定义一个学生类
class Student
{
	//公共的成员属性
	public $name = "张三四";
}

//创建学生类的对象
$obj = new Student;

//修改属性：给成员属性重新赋值
$obj->name = "传智播客";
//添加属性：给当前对象添加一个新属性
$obj->age = 24;
//删除属性：使用unset()可以删除变量、数组元素、对象属性等
unset($obj->age);
//读取属性
echo "我的名字叫：{$obj->name}";