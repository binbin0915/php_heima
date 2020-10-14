<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
	echo "<table border='1' width=400 height=100>";
	$n = 0;
	for($i = 1; $i <= 4; $i++)
	{
		echo "<tr>";//输出行的开始标签
		for($k = 1; $k <= 6; $k++)
		{
			$n++;
			echo "<td>$n</td>";
		}
		echo "</tr>";//输出行的结束标签
	}

 ?>
</table>
<?php 
	echo $n;
 ?>

</body>
</html>