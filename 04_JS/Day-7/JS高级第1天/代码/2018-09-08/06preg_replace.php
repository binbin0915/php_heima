<?php
//$str = 'hello world';
//$r = '/(l)/';
//echo preg_replace($r, 'L', $str);
//echo preg_replace($r, '$1$1', $str);

$arr = array('JavaScript', 'ES5', 'php7');
$res = preg_replace('/(\d)/', '$1$1', $arr);
echo '<pre>';
print_r($res);