<?php
//包含Smarty类文件
require_once("./Smarty/libs/Smarty.class.php");
//创建Smarty类的对象
$smarty = new Smarty();
//Smarty配置：左右定界符
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

//向视图赋一维数组
$arr = array(
		'db_host' => 'localhost',
		'db_user' => 'root',
		'db_pass' => 'root',
		'db_name' => 'itcast',
	);
$smarty->assign("arr",$arr);

//显示视图文件
$smarty->display("./view.html");