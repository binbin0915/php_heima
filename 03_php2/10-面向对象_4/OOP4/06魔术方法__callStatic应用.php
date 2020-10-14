<?php
class Student
{
	//私有的成员属性
	private $name = "张三";
	private $age  = 24;
	//用静态化方式访问不存在或不可访问的方法时，魔术方法__callStatic()自动调用
	//参数：$func是传递过来的方法名称，$args是传递过来的参数数组
	public static function __callStatic($func,$args)
	{
		echo "方法{$func}(".implode(',',$args).")不存在或不可访问！";
	}
}
//用静态化方法调用showInfo()方法
Student::showInfo('张三四',24,'男');