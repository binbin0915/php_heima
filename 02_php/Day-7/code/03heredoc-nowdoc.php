<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
$v1 = "提交";
//演示heredoc字符串

if( !empty($v1)) {
	$str = <<< "AAA"
	这里开始写字符串的内容，可以写多行
	<br>通常这种字符串适用于“很多行”的字符串形式
	<br>比如可以写一大段html，css或js代码。。。,
	<br>比如：<input type="text"  name="n1" value='请输出用户名' />
	<br><input type="button" value="$v1" />
AAA;

	echo $str;

}

echo "<hr>";

//演示nowdoc字符串
$str2 = <<< 'BBB'
这里开始写字符串的内容，可以写多行
<br>通常这种字符串适用于“很多行”的字符串形式
<br>比如可以写一大段html，css或js代码。。。,
<br>比如：<input type="text"  name="n1" value='请输出用户名' />
<br><input type="button" value="$v1" />
BBB;

echo $str2;




 ?>
</body>
</html>