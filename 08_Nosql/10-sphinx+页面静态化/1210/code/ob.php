<?php
ob_start();//开启ob缓存
echo '222';

ob_flush();//把ob缓存里面的数据移动到程序缓存，并不关闭ob缓存；
echo 'ok';
header('content-type:text/html;charset=utf8');



?>