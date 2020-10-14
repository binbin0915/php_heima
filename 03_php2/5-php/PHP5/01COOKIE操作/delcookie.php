<?php
//删除COOKIE数据：设置有效期为过去的某一个时间
//setcookie("username","admin",time()-1);
//setcookie("password","123456",time()-10);

//删除COOKIE：设置COOKIE的值为false或空字符串
setcookie("username",false);
setcookie("password","");