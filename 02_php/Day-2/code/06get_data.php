<?php 
//通过$_GET变量获得表单以get方式提交的数据！
$name = $_GET['userName'];
$age = $_GET["age"];

echo "<br>姓名为：", $name;
echo "<br>年龄为：", $age;
 ?>