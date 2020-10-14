<?php
$str = '1122 4455';
$r = "/(\d)\1(\d)\2/";

echo preg_match_all($r, $str);