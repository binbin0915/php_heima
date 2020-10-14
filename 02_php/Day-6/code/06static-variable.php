<?php 
//一个普通局部变量，一个静态变量，
//都进行简单++操作。多次调用函数，并输出他们的值。

function static_demo()
{
	$p1 = 1;
	static $p2 = 1;	//静态变量修饰符
	$p1++;
	$p2++;

	echo "<br>p1=$p1, p2=$p2";
}
static_demo();
static_demo();
static_demo();
