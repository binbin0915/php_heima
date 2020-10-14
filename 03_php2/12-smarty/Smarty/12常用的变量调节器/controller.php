<?php
//包含Smarty类文件
require_once("./Smarty/libs/Smarty.class.php");
//创建Smarty类的对象
$smarty = new Smarty();
//Smarty配置：左右定界符
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

//向视图赋值
$title1 = "Welcome to Itcast!";
$title2 = "Welcome\nto\nItcast!";
$smarty->assign("title1",$title1);
$smarty->assign("title2",$title2);

//显示视图文件
$smarty->display("./view.html");