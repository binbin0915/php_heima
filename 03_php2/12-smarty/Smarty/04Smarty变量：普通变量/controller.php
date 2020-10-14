<?php
//包含Smarty类文件
require_once("./Smarty/libs/Smarty.class.php");
//创建Smarty类的对象
$smarty = new Smarty();
//Smarty配置：左右定界符
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

//向视图赋值
class Student{
	public $title = "PHP第69期就业班";
	public function showInfo(){
		echo __METHOD__;
	}
}
$obj = new Student();
$arr = array('13011045678','010-12345678');
$smarty->assign("name","张三丰");
$smarty->assign("age",24);
$smarty->assign("isMarried",true);
$smarty->assign("salary",6709.98);
$smarty->assign("arr",$arr);
$smarty->assign("obj",$obj);

//显示视图文件：查找App/Home/View/view.html文件
$smarty->display("./view.html");