<?php
//当前页面，session的存储就存储到memcache里面了
ini_set('session.save_handler','memcache');
ini_set('session.save_path','tcp://localhost:11211');
//获取session数据，还是正常获取即可
session_start();
$username = $_SESSION['username'];
echo $username;
echo '<hr>';
$age = $_SESSION['age'];
echo $age;


?>