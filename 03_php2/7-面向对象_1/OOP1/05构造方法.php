<?php
//定义一个学生类
class Student {
	//私有的成员属性：在项目中，成员属性没有具体的数据，可以有默认值
	//所有数据都来自外部传递，所有属性一般都是私有的
	private $name;
	private $sex;
	private $age;

	//公共的构造方法
	public function __construct($name2,$sex2,$age2){
		$this->name = $name2;
		$this->sex  = $sex2;
		$this->age  = $age2;
	}

	//公共的自我显示的方法
	public function showInfo(){
		$str = "姓名：{$this->name}";
		$str .= "<br>性别：{$this->sex}";
		$str .= "<br>年龄：{$this->age}";
		echo $str;
	}
}
//创建学生类的对象
$obj = new Student("张三四","男",26);
$obj->showInfo();