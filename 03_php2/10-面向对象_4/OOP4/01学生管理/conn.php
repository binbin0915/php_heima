<?php
//类的自动加载
spl_autoload_register(function($className){
	//构建类文件的路径
	$filename = "./libs/$className.class.php";
	//如果类文件存在，则包含
	if(file_exists($filename))	require_once($filename);
});

//创建数据库类的对象
$arr = array(
		'db_host'	=> 'localhost',
		'db_user'	=> 'root',
		'db_pass'	=> 'root',
		'db_name'	=> 'itcast',
		'charset'	=> 'utf8'
	);
$db = Db::getInstance($arr);