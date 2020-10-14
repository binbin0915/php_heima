<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
    $a1 = 2500.1;
    $a2 = 2171;
    $a3 = 3017;
    $a4 = 1350.9;
    // echo "1.上海人口： ", $a1;echo "万<br>";
    // echo "2.北京人口： ", $a2;echo "万<br>";
    // echo "3.重庆人口： ", $a3;echo "万<br>";
    // echo "4.广州人口： ", $a4;echo "万<br>";
?>
<body>
     <form action="" method="get">
	    <ol>
		    <li>上海人口： <?php echo $a1 ?> 万</li>
		    <li>北京人口： <?php echo $a2 ?> 万</li>
		    <li>重庆人口： <?php echo $a3 ?> 万</li>
		    <li>广州人口： <?php echo $a4 ?> 万</li>
	    </ol>
	</form>
</body>
</html>