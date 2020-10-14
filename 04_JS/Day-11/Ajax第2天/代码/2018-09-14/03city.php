<?php
//
//$filename = isset($_GET['filename']) ? $_GET['filename'] : 0;
$filename = $_GET['filename'] ?? 0;  // php7新增语法
echo file_get_contents("city/$filename.json");