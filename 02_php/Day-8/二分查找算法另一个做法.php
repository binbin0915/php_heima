<?php 

$arr1 = [2, 5, 8, 10, 15, 18, 22, 24, 24, 28,33, 35, 50, 55, 56, 57, 60, 61, 62, 66, 70];
$search = 5;	//具体分析，可以将该数据修改为不同的值，比如：2， 5， 8，

$result = bin_search($arr1, $search, 0, count($arr1)-1 );
var_dump($result);

function bin_search($arr, $value, $start, $end)
{
	for($i = 1; $i > 0; $i++)
	{
		if($start > $end)
		{
			return false;
		}
		//找出$start和$end的中间位置：
		$mid = floor(   ($start + $end)/2    );
		$mid_value = $arr[$mid];
		if($mid_value == $value)
		{
			return true;
		}
		//中间值大于要找的目标值，则只要去中间值的左边找：
		elseif($mid_value > $value)
		{
			$start = $start;
			$end = $mid - 1;
		}
		//中间值小于于要找的目标值，则只要去中间值的右边找：
		elseif($mid_value < $value)
		{
			$start = $mid + 1;
			$end = $end;
		}
	}
}
