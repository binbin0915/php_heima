<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

//输出1-100之间能被3整除但不能被5整除的偶数。
for($i = 1; $i <= 100; $i++)
{
	if($i % 3 == 0 && $i % 5 != 0 && $i % 2 == 0)
	{
		echo "$i, ";
	}
}

 ?>
</body>
</html>