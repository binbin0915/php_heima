<?php
//包含Smarty类文件
require_once("./Smarty/libs/Smarty.class.php");

//创建Smarty类的对象
$smarty = new Smarty();

//向视图赋值
$smarty->assign("name","张三丰");
$smarty->assign("age",24);

//显示视图文件
$smarty->display("./view.html");