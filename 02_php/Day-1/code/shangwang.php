<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<?php
if( isset($_GET["age"]) ){
	$age = $_GET["age"];

    if( $age>=18){
    	echo "可以上网";
    }
    else{
    	echo "滚回去";
    }
}
?>
<body>
    <form action="" method="get">
	    年龄：<input type="text" name="age">
	    <br>
	    <input type="submit" value="提交">
    </form>
</body>
</html>