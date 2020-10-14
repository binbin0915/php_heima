<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>文件头部</h1>
<?php 
	include './inc/nav.html';
 ?>
 <hr>

<?php 
	include './inc/page1.php';
	echo "<br>当前的页码为：" . $page;
 ?>

</body>
</html>