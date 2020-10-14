<?php
//包含模型类文件
require_once("./model.class.php");
//获取地址栏传递的参数
$type = isset($_GET['type']) ? $_GET['type'] : 3;
//创建模型类对象
$modelObj = new DateTime2();
//根据传递的不同客户参数，调用模型类的不同方法
switch($type)
{
	case 1:
		//调用模型类对象的getDate()方法
		$str = $modelObj->getDate();
		break;
	case 2:
		//调用模型类对象的getTime()方法
		$str = $modelObj->getTime();
		break;
	default:
		//调用模型类对象的getDateTime()方法
		$str = $modelObj->getDateTime();
}
//包含视图文件
include "./view.html";