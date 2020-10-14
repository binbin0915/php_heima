<?php
//反序列化：序列化字符串，还原成原始变量
//读取记事本的数据
$str = file_get_contents('./1.txt');
//将序列化字符串，还原成变量
$arr = unserialize($str);
//打印变量
print_r($arr);