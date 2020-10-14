<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

$n1 = 10;
$n2 = 10;
$n1++;	//自加
++$n2;	//自加
echo "<br>n1加加后：" . $n1;
echo "<br>n2加加后：" . $n2;
//结论："++"运算，都是对相应的变量加1
//不管是放在前面(前++)，还是后面（后++）

echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";

$m1 = 10;
$s1 = $m1++;//这是后自加：先取值，再自加，再去进行其他运算
$s2 = ++$m2;//这是前自加：先自加，后取值，再去进行其他运算
echo "<br>此时，m1为：$m1", "，s1为：$s1";
echo "<br>此时，m2为：$m2", "，s2为：$s2";
echo "<br>m1:", $m1++ + 5;
echo "<br>m2:", ++$m2 + 5;

echo "<hr>";
echo "<br>m1:$m1";
echo "<br>m2:$m2";


 ?>
</body>
</html>