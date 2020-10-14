<?php
//包含Smarty类文件
require_once("./Smarty/libs/Smarty.class.php");
//创建Smarty类的对象
$smarty = new Smarty();
//Smarty配置：左右定界符
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

//向视图赋二维数组
$arrs = array(
		array(10010,'张三','男',24,6000,300),
		array(10020,'李四','女',28,9000,200),
		array(10030,'周五','男',29,12000,340),
		array(10040,'陆六','女',26,9800,230)
	);
$smarty->assign("arrs",$arrs);

//显示视图文件
$smarty->display("./view.html");