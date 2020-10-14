<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//取出如下若干个文件中的图片文件。
//假定：图片后缀为：.png,  .jpg, .gif
$files = array("abc.gif", "ab.v2.3.txt",  "dir1/gift.PNG",  "file1.JPG",  "gif动画制作教程.doc");
$len = count($files);	//得到数组长度
for($i = 0; $i < $len; $i++)
{
	$houzhui = strrchr($files[$i], '.');//得到类似".gif", '.txt'
	$houzhui = substr($houzhui, 1);//从位置1开始取到最后
	$houzhui = strtolower($houzhui);
	if($houzhui == "png" || $houzhui == "gif" || $houzhui == "jpg")
	{
		echo "<br>" . $files[$i];
	}
}


 ?>
</body>
</html>