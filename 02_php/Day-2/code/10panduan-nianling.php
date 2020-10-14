<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php 

//如果有age数据提交过来
if(isset( $_POST['age'] ) )
{
	$age = $_POST['age'];//取得该age数据
	//然后判断其大小
	if($age > 18)
	{
		echo "可以上网";
	}
	else
	{
		echo "no！";
	}
}
 ?>
<body>
	<form action="" method="post">
		你贵庚： <input type="text" name="age">
		<input type="submit" value="提交">
	</form>
</body>
</html>