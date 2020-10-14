<?php
//实例：制作图像水印效果
//(1)从已知图像创建画布
$filename = "./images/img02.jpg";
$img = imagecreatefromjpeg($filename);

//(2)往图像上写入一行TTF字符串
$color = imagecolorallocatealpha($img,0xFF,0x00,0x00,100); //分配半透明颜色
$fontfile = "e:/itcast/lesson/PHP4/images/msyh.ttf";
$str = "大美女";
imagettftext($img,120,0,50,200,$color,$fontfile,$str);

//(3)输出图像，并销毁图像
header("content-type:image/png");
imagepng($img);
imagedestroy($img);