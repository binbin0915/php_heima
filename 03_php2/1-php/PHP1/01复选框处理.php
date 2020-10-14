<?php
//判断表单是否提交
if(isset($_POST['token']) && $_POST['token']=='add')
{
	print_r($_POST);
	//将$_POST['hobby']中的所有数据连成一个字符串
	//implode()将数组元素连成一个字符串
	//explode()将一个字符串分割成一个数组
	$hobby = implode(',',$_POST['hobby']);
	echo $hobby;
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
爱好：
<input type="checkbox" name="hobby[]" value="画画">画画
<input type="checkbox" name="hobby[]" value="音乐">音乐
<input type="checkbox" name="hobby[]" value="电脑">电脑
<input type="checkbox" name="hobby[]" value="游戏">游戏
<input type="checkbox" name="hobby[]" value="开车">开车
<input type="submit" value="提交">
<input type="hidden" name="token" value="add">
</form>
</body>
</html>