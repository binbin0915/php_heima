<?php 

//演示函数return语句之后不再执行！
function f1( $p1 , $p2 )
{
	$s1 = $p1 + $p2;
	return $s1;
	$s2 = $p1*$p1 + $p2*$p2;
	return $s2;
}
$result1 = f1(1,2)*4-5;
echo "<br>result1 = $result1";
echo "<br>";
echo f1(1,4);

echo "<hr>";
//计算两数的平方和与两数的平方差相除的结果。
function suibian($x, $y)
{
	$he = $x*$x + $y*$y;
	$cha = $x*$x - $y*$y;
	if($cha != 0){
		return $he / $cha;
	}
	else
	{
		return "数据有误（两个数不能相等）";
	}
	
}
$v1 = suibian(3,4);
echo "<br>平方和差相除为：" . $v1 ;
echo "<br>平方和差相除为：" . suibian(5,3) ;
echo "<br>平方和差相除为：" . suibian(4,4) ;


//演示函数不返回值，只使用return 结束的情形：
function f2(){
	echo "<hr>";
	return ;		//这里就结束函数了（没有返回数据）
	echo "<hr>";	//此行不执行！
}
f2();
$v2 = f2();	//结果$v2是什么？实际是null
var_dump($v2);	//null

 ?>