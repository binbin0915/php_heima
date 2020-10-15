<?php
//当前页面，session的存储就存储到memcache里面了
ini_set('session.save_handler','memcache');
ini_set('session.save_path','tcp://localhost:11211');
//正常的存储session数据即可
session_start();
$_SESSION['username'] = 'dabao';
$_SESSION['age']=13;
echo session_id();//输出一个session的id;
?>