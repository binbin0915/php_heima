<?php
//获取路由参数
$p = isset($_GET['p']) ? $_GET['p'] : 'Home'; //平台参数
$c = isset($_GET['c']) ? $_GET['c'] : 'Student'; //控制器名
$a = isset($_GET['a']) ? $_GET['a'] : 'index'; //动作名
define("PLAT",$p);

//类的自动加载
spl_autoload_register(function($className){
	//类文件路径数组
	$arr = array(
			"./Frame/$className.class.php",
			"./App/".PLAT."/Model/$className.class.php",
			"./App/".PLAT."/Controller/$className.class.php"
		);
	//循环数组
	foreach($arr as $filename)
	{
		//如果类文件路径存在，则包含
		if(file_exists($filename)){
			echo $filename."<br>";
			require_once($filename);
		}
	}
});

//创建控制器类的对象：StudentController
$controllerClassName = $c . "Controller";
$controllerObj = new $controllerClassName();

//根据用户的不同动作，调用不同的方法
$controllerObj->$a();