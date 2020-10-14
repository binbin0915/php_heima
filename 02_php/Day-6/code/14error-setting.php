<?php
//演示3种常见的错误：
ini_set("display_errors", 1);	//
//ini_set("error_reporting",E_NOTICE | E_ERROR);
ini_set("error_reporting",E_WARNING);
echo $v1;
echo "<h3>111</h3>";

include './no-this-file.php';
echo "<h3>222</h3>";

$n2 = raund(2.6);
echo "<h3>333</h3>";


