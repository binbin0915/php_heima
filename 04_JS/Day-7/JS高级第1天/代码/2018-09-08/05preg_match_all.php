<?php
$str = '1122 3455 6677 8989';
$r = '/(\d)\1(\d)\2/';
echo preg_match_all($r, $str, $out);
echo '<pre>';
print_r($out);