<?php
//定义一个学生类
class Student
{
	protected $name = "张三丰";
	private $age  = 24;
	public  $edu  = "大专";
	//魔术方法__toString()：当将对象转成字符串时，自动调用
	public function __toString()
	{
		return "我喝多了！";
	}
}
//创建学生类对象
$obj = new Student();
//将对象转成字符串，然后再输出
echo $obj;
