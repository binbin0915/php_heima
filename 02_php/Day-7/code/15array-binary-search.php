<?php
//演示数组的二分查找算法：
//前提：
//1，索引数组；
//2，数组是已经排好序的了。
$arr1 = [2, 5, 8];//, 10, 15, 18, 22, 24, 24, 28,33, 35, 50, 55, 56, 57, 60, 61, 62, 66, 70];
$search = 3;	//具体分析，可以将该数据修改为不同的值，比如：2， 5， 8，
//原理：每次都找该数组的某一段的中间项，并跟要找的目标进行“对比”
//1，如果刚好相等，则就算找出来了
//2, 如果中间项比目标大，就只要去左边的那一半中找
//3, 如果中间项比目标小，就只要去右边的那一半中找

//假设有这么一个函数，它能够从某个数组$arr中的某个下标范围($start---$end)中找指定的数据$value
//这里，假设：$start一定是不能大于$end，否则，我们就认为找不到了！
function  binary_search($arr, $value, $start, $end)
{
	if($start > $end)
	{
		return false;
	}

	$mid = floor(($start + $end)/2);	//取得两个下标中的中间下标（一半位置)
	$mid_value = $arr[$mid];	//中间项的值
	//如果刚好相等，则就算找出来了
	if($mid_value == $value){
		return true;
	}
	//如果中间项比目标大，就只要去左边的那一半中找
	elseif($mid_value > $value)	//
	{
		$new_start = $start;
		$new_end = $mid-1;
		return binary_search($arr, $value, $new_start, $new_end);
	}
	//如果中间项比目标小，就只要去右边的那一半中找
	else
	{
		$new_start = $mid+1;
		$new_end = $end;
		return binary_search($arr, $value, $new_start, $new_end);
	}

}
$len = count($arr1);
$result = binary_search($arr1,$search, 0, $len-1);
var_dump($result);