<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<?php 
$n1 = "";
$n2 = "";
$result = "";
if( isset($_POST['num1']) ) 
{
	$n1 = $_POST['num1'];
	$n2 = $_POST['num2'];
	$result = $n1 + $n2;
	//echo "<br>计算结果为：" , $result;
}
 ?>

<body>
	<!-- action留空表示提交给自己（本页) -->
	<form action="" method="post">

		数字1<input type="text" name="num1" value="<?php echo $n1;  ?>">
		<!-- 有兴趣有时间的同学，可以把这个"+"用一个select来代替，用户可以选择加减乘除 -->
		+
		数字2<input type="text" name="num2" value="<?php echo $n2;  ?>">
		<input type="submit" value="=">
		<input type="text" name="result" value="<?php echo $result;  ?>">
	</form>
</body>
</html>
