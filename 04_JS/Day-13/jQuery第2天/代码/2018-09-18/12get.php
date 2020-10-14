<?php
//接收发送过来的数据
file_put_contents('get.txt', print_r($_GET, true));
//返回给JS一个值
echo 123;