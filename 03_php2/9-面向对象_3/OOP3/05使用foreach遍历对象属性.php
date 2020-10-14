<?php
//定义一个学生类
class Student
{
	protected $name = "张三丰";
	private $age  = 24;
	public  $edu  = "大专";
	//在类内遍历对象属性
	public function showInfo()
	{
		//在类外遍历对象的属性
		echo "<h2>在类内遍历对象的属性</h2>";
		foreach($this as $key=>$value)
		{
			echo "\$this->{$key} = {$value}<br>";
		}		
	}
}
//创建学生类对象
$obj = new Student();
$obj->showInfo();
//在类外遍历对象的属性
echo "<h2>在类外遍历对象的属性</h2>";
foreach($obj as $key=>$value)
{
	echo "\$obj->{$key} = {$value}<br>";
}