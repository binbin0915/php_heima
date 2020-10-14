<?php 
function do_jpg($f){
	echo "<br>处理jpg图片。。。。";
}
function do_gif($f){
	echo "<br>处理gif图片。。。。";
}
function do_png($f){
	echo "<br>处理png图片。。。。";
}
$file = $_GET['file_name'];	//用户上传的文件名,比如123.jpg, 456.gif
//haystack表示：干草堆，neele：缝衣针
//strrchr()用于在一个字符串haystack中找出指定的某个字符串needle出现的最后位置往后的所有字符
//$houzhui =  strrchr(haystack, needle)
$houzhui =  strrchr($file, '.');//得到类似这样： ".gif",  ".jpg", ".png"
//substr($v1,位置p，[长度n])：取出字符串v1中从位置p开始之后的n个字符
//如果长度n省略，则一直取到最后
//比如：substr('abcdef', 3, 2): 'de'
//比如：substr('abcdef', 3, 3): 'def'
//比如：substr('abcdef', 3, 4): 'def'
//比如：substr('abcdef', 3): 	'def'
$houzhui = substr($houzhui,1);	//得到类似这样："gif",  "jpg", "png"

$func_name = "do_" . $houzhui;	//构建出可以使用的函数名,可能是上述3个函数之一的名字
$func_name( $file );//这就是可变函数的使用！实际使用的可能是：do_jpg(), do_gif(), do_png()之一






 ?>