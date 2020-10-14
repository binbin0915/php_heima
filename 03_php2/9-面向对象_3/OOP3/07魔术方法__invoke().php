<?php
//定义一个学生类
class Student
{
	protected $name = "张三丰";
	private $age  = 24;
	public  $edu  = "大专";
	//魔术方法__invoke()：把对象当成函数调用时，自动调用
	public function __invoke()
	{
		echo "我喝多了！";
	}
}
//创建学生类对象
$obj = new Student();
//将对象当成函数调用时
$obj();

//**********************************************
//数组元素的值，八大数据类型都可以
$arr = array(10,20,30);
$arr[0] = function(){
	echo "OK";
};
//调用函数
$arr[0]();
