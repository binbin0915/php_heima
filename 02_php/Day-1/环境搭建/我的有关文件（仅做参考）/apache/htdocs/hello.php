<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		/*css代码*/
	</style>
	<script>
		// js代码在这里。。。
	</script>
</head>
<body>
<?php 
	// php代码在这里
	echo '<h1>hello world!</h1>' ;
	echo date("当前时间：Y-m-d  H:i:s") ;
	echo "<br>" ;
	if(   mysqli_connect('localhost', 'root', '123' )   )
	{
		echo "连库成功！" ;
	}
	else
	{
		echo "连接失败！" ;
	}
?>
</body>
</html>