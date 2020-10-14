<?php
//类的自动加载：注册类的装载规则
spl_autoload_register("func1");
spl_autoload_register("func2");
function func1($className){
	//构建类文件的路径
	$filename = "./public/$className.class.php";
	//如果类文件存在，则包含
	if(file_exists($filename)) require_once($filename);
}
function func2($className){
	//构建类文件的路径
	$filename = "./libs/$className.cla.php";
	//如果类文件存在，则包含
	if(file_exists($filename)) require_once($filename);
}
//创建学生类对象
$obj1 = new Student();
//创建教师类对象
$obj2 = new Teacher();