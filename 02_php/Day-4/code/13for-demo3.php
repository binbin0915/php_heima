<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

//输出1-100之间的数，并且要求：
//能被3整除的使用“三”代替，能被5整除的使用“五”代替，
//能同时被两者整除的用“三五”代替。

for($i = 1; $i <= 100; ++$i)
{
	if($i % 3 == 0 && $i % 5 == 0)
	{
		echo '三五,';
	}
	elseif($i % 5 == 0)
	{
		echo "五,";
	}
	elseif($i % 3 == 0)
	{
		echo "三,";		
	}
	else
	{
		echo "$i, ";
	}
	
}


 ?>
</body>
</html>