<?php
//header("Cache-Control:no-cache");
//header("Pragma:no-cache");
//header("Expires:-1");

//工作是：验证提交用户输入的用户名是否已经被注册
//为了简化，模拟用户'zhangsan'、'lisi'、‘wangwu’ 已经被注册，其他用户名都可用
$arr = ['zhangsan','lisi', 'wangwu', 'aaa', 'bbb','ccc','ddd','fff', 'ggg'];

//接收发送过来的数据，并判断
$u = $_GET['u'];
//判断
if(in_array($u, $arr)){
    //说明用户名已经存在
    echo 1;
}else{
    //说明用户名可用
    echo 0;
}