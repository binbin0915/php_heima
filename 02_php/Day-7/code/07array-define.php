<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

//定义数组的多种形式
$a1 = [5, 1.2, true, 'abc'];
$a2 = array(5, 1.2, true, 'abc');

$a3 = ['a'=>5, 'b'=>1.2, 5=>true, 3=>'abc'];

$a4 = array(
		'host'=>'localhost',
		'db' => 'test',
		'user' => 'root',
		'pass' => '123',
	);
//也可以直接给一个数组变量的元素赋值，也构成数组：
$a5['name'] = '张三丰';//此时就已经创建了一个数组变量$a5
$a5['age'] = 18;
$a5['gender'] = '男';
//上述3行也可以这样写：
$a5 = ['name'=>'张三丰', 'age'=>18, 'gender'=>'男'];


//数组下标识别：
$a6 = array(
	'a' => 'abc',
	'def',		//0
	18,			//1
	5=>20,		//5
	'b'=>22,
	30,			//6
	);
 ?>
</body>
</html>