<?php
//包含namespace.php文件
require_once("./namespace.php");

//(1)创建学生类对象
$obj = new App\Student();

//(2)调用getMaxInt()函数
App\getMaxInt();

//(3)访问const定义的常量
echo App\TITLE;

//(4)普通代码直接访问，不带空间名
//原来怎么访问，还怎么访问
echo "<br>".$a;