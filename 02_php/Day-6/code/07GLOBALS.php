<?php 
//演示$GLOBALS
$v1 = 1;
function func1(){
	//echo $v1;	//报错！
	//可以借助GLOBALS超全局变量来使用全局变量
	echo "<br>在函数中：v1 = " . $GLOBALS['v1'];
	//也可以去修改全局变量
	$GLOBALS['v1']++;
}
func1();
echo "<br>在函数外：v1 = " . $v1;


echo "<hr>";
//对比关键字global
$n1 = 1;
function func2(){
	//其含义是：定义一个局部变量$n1
	//并且，该变量跟全局的$n1同名，并处于”引用关系“
	global $n1;
	echo "<br>在函数中：n1 = " . $n1;
	$n1++;
}

func2();
echo "<br>在函数外：n1 = " . $n1;