<?php
$arr1 = ['apple', 'banana', 'pear'];
$arr2 = ['one'=>'LiuBei', 'two'=>'GuanYu', 'three'=>'CaoHao'];

//把上面两个数组，转换成JSON
$str1 = json_encode($arr1);
echo $str1; // ["apple","banana","pear"]
echo '<br>';
$str2 = json_encode($arr2);
echo $str2; // {"one":"LiuBei","two":"GuanYu","three":"CaoHao"}

//将str1和str2转成PHP数据
echo '<pre>';
print_r(json_decode($str1));
print_r(json_decode($str2, true));