<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php 

if(isset($_POST['chengji']) )
{
	$cj = $_POST['chengji'];
	//var_dump($cj);
	echo "<br>";
	//如果输入的是数字！
	if( is_numeric($cj))
	{
		if($cj >= 60)
		{
			echo "ok，及格了";
		}
		else
		{
			echo "不及格，补考吧";
		}
	}
	else
	{
		echo "你别瞎搞了！";
	}
	
}

 ?>
<body>
	<form action="" method="post">
		请输入成绩：
		<input type="text" name="chengji">
		<input type="submit" value="提交">
	</form>
</body>
</html>