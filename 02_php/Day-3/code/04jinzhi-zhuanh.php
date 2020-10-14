<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php 
$n1 = "";
$n2 = "";
$zh = "";
if(isset($_POST['submit1'])){
	$n1 = $_POST['n1'];
	$zh = $_POST['zhuanhuan'];
	if($n1){	//判断如果有数据！
		if( $zh == "10to2" )
		{
			$n2 = decbin($n1);
		}
		if( $zh == "10to8" )
		{
			$n2 = decoct($n1);
		}
	}
	
}
 ?>
<body>
	<form action="" method="post">
		<input type="text" name="n1" value="<?php echo $n1;?>">
		<select name="zhuanhuan">
			<option value="10to2" <?php if($zh == "10to2"){ echo "selected"; } ?> >10to2</option>
			<!-- <option value="10to8" 如果$zh等于"10to8"就输出selected  >10to8</option> -->
			<option value="10to8" <?php if($zh == "10to8"){ echo "selected"; } ?> >10to8</option>
		</select>
		<input type="submit" name="submit1" value="转换">
		<input type="text" name="n2" value="<?php echo $n2;?>">
	</form>
</body>
</html>