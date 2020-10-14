<?php
/*$str = 'hello world';
$r = '/[a-z]/';*/
/**
 * preg_match
 * 返回值是0或者1
 * $r  正则表达式
 * $str 要执行正则匹配的字符串
 * $out 匹配的内容，是一个数组形式
 */
/*echo preg_match($r, $str, $out);
echo '<pre>';
print_r($out);*/

/********************* 带有子表达式的例子 *********************/
$str = '1122 3455 6677 8989';
$r = '/(\d)\1(\d)\2/';
echo preg_match($r, $str, $out);
echo '<pre>';
print_r($out);