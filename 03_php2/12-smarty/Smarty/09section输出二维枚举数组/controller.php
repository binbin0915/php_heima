<?php
//包含Smarty类文件
require_once("./Smarty/libs/Smarty.class.php");
//创建Smarty类的对象
$smarty = new Smarty();
//Smarty配置：左右定界符
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

//向视图赋二维枚举数组
$arrs = array(
		array(10010,'张三','山东省'),
		array(10020,'李四','山西省'),
		array(10030,'王五','河南省'),
	);
$smarty->assign("arrs",$arrs);

//显示视图文件
$smarty->display("./view.html");