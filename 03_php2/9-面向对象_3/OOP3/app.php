<?php
//单例设计模式的核心代码
class Db {
	//私有的静态的保存对象的属性
	private static $obj = null;
	//私有的构造方法：阻止类外new对象
	private function __construct(){

	}
	//私有的克隆方法：阻止类外clone对象
	private function __clone(){}
	//公共的静态的创建对象的方法
	public static function getInstance(){
		//判断当前对象是否存在
		if(!self::$obj instanceof self)
		{
			//如果对象不存在，创建并保存它
			self::$obj = new self();
		}
		//返回对象
		return self::$obj;
	}
}
//创建数据库类的对象
$db1 = Db::getInstance();
$db2 = Db::getInstance();
var_dump($db1,$db2);
