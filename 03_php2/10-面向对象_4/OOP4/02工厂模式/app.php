<?php
//类的自动加载
spl_autoload_register(function($className){
	//构建类文件的路径
	$filename = "./libs/$className.class.php";
	//如果类文件存在，则包含
	if(file_exists($filename))
	{
		echo $filename."<br>";
		require_once($filename);
	}
});

//创建矩形对象
$rectangle = Factory::getInstance("Rectangle");
$rectangle->draw();
echo "<hr>";

//创建圆形对象
$circle = Factory::getInstance("Circle");
$circle->draw();
echo "<hr>";

//创建线段对象
$line = Factory::getInstance("Line");
$line->draw();

