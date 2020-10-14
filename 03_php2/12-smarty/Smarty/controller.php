<?php
//包含Smarty类文件
require_once("./Smarty/libs/Smarty.class.php");
//创建Smarty类的对象
$smarty = new Smarty();
//Smarty配置：左右定界符
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

//向视图赋值
$title = "中方代表将赴美谈判特朗普却在此时发推抹黑中国";
$smarty->assign('title',$title);

//显示视图文件
$smarty->display("./view.html");