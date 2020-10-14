<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	if( !empty($_POST['year']))
	{
		$year = $_POST['year'];	//永远是字符串！
		if(is_numeric($year))
		{
			$year2 = (int)$year;//转换为整数
			if($year2 == $year)	//如果原数和转换后的数相等，说明就是整数
			{
				if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
				{echo $year . "是闰年。";}
				else
				{echo "{$year}不是闰年。";}
			}
			else
			{echo "年份应该为整数!";}	
		}
		else
		{echo "请输入整数!";}	
	}
	else
	{echo "<font color='red' >请输入年份</font>";}	
 ?>
<form action="" method="post">
	请输入年份：<input type="text" name="year">
	<input type="submit" value="判断">
</form>
</body>
</html>