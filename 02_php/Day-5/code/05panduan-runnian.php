<?php 
//课堂练习：
//定义一个函数，该函数可以判断一个年份数（整数）是否为闰年。
//扩展（进一步）：利用该函数，输出2000年到2100年范围中的所有闰年。

echo "<hr>";

function is_runnian( $year )
{
	if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

for($i = 2000; $i <= 2100; $i++)
{
	if( is_runnian( $i ) )
	{
		echo "$i ";
	}
}

 ?>