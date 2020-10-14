<?php
//开启SESSION会话
//产生新的SessionID或重用传递过来的SessionID
//产生SessionID，并创建对应的Session文件
session_start();
//添加SESSION数据
$_SESSION['username'] = "admin";
$_SESSION['password'] = "123456";
