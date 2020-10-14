<?php
//包含Smarty类文件
require_once("./Smarty/libs/Smarty.class.php");
//创建Smarty类的对象
$smarty = new Smarty();
//Smarty配置：左右定界符
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
//Smarty配置：修改配置目录
$smarty->setConfigDir("./MyConfig/");

//显示视图文件：查找App/Home/View/view.html文件
$smarty->display("./view.html");