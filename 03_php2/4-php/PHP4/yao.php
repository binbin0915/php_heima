<?php


echo uniqid()."<br>"; //默认是13位唯一的随机字符串
echo uniqid('s_')."<br>"; //前缀
echo uniqid('s_',true); //后缀