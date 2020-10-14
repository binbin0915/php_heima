<?php 
//输出以下这个数组的每一项，并求其平均值：
$arr1 = array(11,  12,  13,  14);
$sum = $count = 0;	//一次性给两个变量赋初值
foreach($arr1  as  $value){
	$sum += $value;		//累加
	$count++;			//计数
}
echo "<br>平均值为：" . $sum / $count;

echo "<hr>";

//使用数组的遍历语法，求以下这个数组的最大值及其下标！
$arr2 = array(11,  18,  21, 14, 8);

//max于存储最大值，先取出第一个值放入（假设他就是最大值）
$max = $arr2[0];	
$max_key = 0;	//就用于存储最大值的下标，对应也存入0下标
foreach($arr2 as $key => $value)
{
	if($value > $max )
	{
		$max = $value;
		$max_key = $key;
	}
}
echo "<br>最大值：$max, 对应下标：$max_key";

 ?>