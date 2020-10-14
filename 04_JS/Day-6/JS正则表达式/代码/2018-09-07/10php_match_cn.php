<?php

$str = 'nihao, 中国';
//preg_match_all(正则表达式, 匹配的字符串, 匹配的内容);  //该函数和JS中的match一样
preg_match_all('/[\x{4e00}-\x{9fa5}]/u', $str, $out);

echo '<pre>';
print_r($out);