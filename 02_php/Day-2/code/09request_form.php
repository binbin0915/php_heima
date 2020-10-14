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
if( isset($_REQUEST['num1']) ) 
{
	$n1 = $_REQUEST['num1'];
	$n2 = $_REQUEST['num2'];
	$result = $n1 + $n2;
	//echo "<br>计算结果为：" , $result;
	
	echo "<br>用户名：", $_REQUEST['userName'];
	echo "<br>你的账户余额为：0,请交费。。。";
}
 ?>

<body>
	<form action="09request_form.php?id=10&userName=zhangsan" method="post">
		<!-- 这种表单形式，才可以让一个表单同时提交get数据和post数据：
		action中的地址里的？后的数据是get数据
		form表单中的各个表单项，就是post数据！ -->
		数字1<input type="text" name="num1" value="<?php echo $n1;  ?>">
		+
		<input type="text" name="num2" value="<?php echo $n2;  ?>">
		<input type="submit" value="=">
		<input type="text" name="result" value="<?php echo $result;  ?>">
	</form>
</body>
</html>
