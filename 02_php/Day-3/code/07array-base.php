<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//定义数组
$info2  =  array('name' => '张三丰',  'age'=>18,  'gender' => "男" );

//给数组某项赋值
$info2['age'] = 19;		//重新对该数组的age这一项赋值

//使用数组（使用单项）
echo "姓名：" . $info2['name'];
echo "<br>年龄：" . $info2['age'];
//使用数组（使用整体)：
echo "<br><pre>";
print_r($info2);	//打印（输出）该数组
echo "</pre>";

 ?>
</body>
</html>