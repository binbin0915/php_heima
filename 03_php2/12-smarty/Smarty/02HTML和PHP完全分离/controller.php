<?php
//定义两个变量
$name = "张三丰";
$age  = 25;

//读取视图文件代码
$str = file_get_contents("./view.html");
//替换PHP标记为"{"或"}"
$str = str_replace('{','<?php echo ',$str);
$str = str_replace('}','?>',$str);
//将替换完成的字符串，再写入view.html
file_put_contents("view.html",$str);

//包含视图文件
include "./view.html";