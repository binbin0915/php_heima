<?php
//开启SESSION会话
session_start();
//删除SESSION数据：也包括删除内存中的SESSION数据
unset($_SESSION['username']);
unset($_SESSION['password']);

//删除SESSION文件
session_destroy();

//删除对应的SessID
setcookie("PHPSESSID",false);

//打印$_SESSION数组
print_r($_SESSION);