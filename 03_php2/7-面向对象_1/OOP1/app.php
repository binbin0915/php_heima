<?php
//定义一个学生类
class Student {
	//公共的析构方法
	public function __destruct()
	{
		echo "对象即将销毁！<br>";
	}
}
//创建学生类对象
$obj = new Student();
//手动删除对象
unset($obj);
echo "这是网页的最后一行代码";

