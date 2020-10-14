<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table border="1" width="700" height="200">
<?php 
	for($i = 1; $i <= 9; $i++)
	{
		echo "<tr>";//输出行的开始标签
		for($k = 1; $k <= $i; $k++)
		{
			$s = $k*$i;
			//echo "<td>{$k}X$i=$s</td>";
			//上一行还有一种写法如下：
			echo "<td>{$k}X$i=" . $k*$i . "</td>";
		}
		echo "</tr>";//输出行的结束标签
	}
?>
</table>

</body>
</html>