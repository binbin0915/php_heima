<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//$c, $k, $g分别代表:长，宽，高
function biaomianji($c, $k, $g)
{
	$s = ($c*$k + $c*$g + $k*$g)*2;
	return $s;
}

$biaomianji1 = biaomianji(1, 1, 1);
echo "<br>表面积1为：$biaomianji1";

$biaomianji2 = biaomianji(1, 2, 3);
echo "<br>表面积2为：$biaomianji2";

$biaomianji3 = biaomianji(5, 2, 3);
echo "<br>表面积3为：$biaomianji3";

 ?>
</body>
</html>