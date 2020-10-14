<?php
//必须指定header，告诉浏览器，返回的内容是xml格式
header('content-type:text/xml');
//读取xml文件，然后返回
echo file_get_contents('05book.xml');