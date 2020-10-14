<?php
//定义一个学生类
class Student {
	//声明类常量
	const DB_HOST = "localhost";
	const DB_USER = "root";
	const DB_PASS = "root";

	//公共的成员方法
	public function showInfo() {
		$str = "<h2>在类内访问类常量</h2>";
		$str .= "主机名：".Student::DB_HOST;
		$str .= "<br>用户名：".Student::DB_USER;
		$str .= "<br>密码：".Student::DB_PASS;
		echo $str;
	}
}
//用静态化方式，直接访问类常量，不需要创建对象
$str = "<h2>在类外访问类常量</h2>";
$str .= "主机名：".Student::DB_HOST;
$str .= "<br>用户名：".Student::DB_USER;
$str .= "<br>密码：".Student::DB_PASS;
echo $str;

//创建学生类对象
$obj = new Student();
$obj->showInfo();