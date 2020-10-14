<?php
//创建一个空画布
$img = imagecreatetruecolor(300,100);
//分配颜色
$color1 = imagecolorallocate($img,0,0,0); //黑色
$color2 = imagecolorallocate($img,255,0,0); //红色
//填充背景色
imagefill($img,0,0,$color1);
//获取画布的宽度和高度
$imgWidth = imagesx($img);
$imgHeight = imagesy($img);
//获取一个指定字体的宽度和高度
$font = 5;
$fontWidth = imagefontwidth($font);
$fontHeight = imagefontheight($font);
//计算字符串的起点坐标
$str = "Welcome to Itcast!";
$x = ($imgWidth-$fontWidth*strlen($str))/2;
$y = ($imgHeight-$fontHeight)/2;
//往图像上写入一行字符串(非中文)
//imagestring(图像资源,字号大小,X坐标,Y坐标,字符串,文字颜色)
imagestring($img,$font,$x,$y,$str,$color2);
//输出图像到浏览器
header("Content-Type:image/png");
imagepng($img);
//销毁图像资源
imagedestroy($img);