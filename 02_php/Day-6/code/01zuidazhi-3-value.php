<?php 
//写一个函数，能够计算（求）出3个数中的最大值
//比如：3, 2, 4》》4
//比如：3， 3， 2》》3
//比如：3， 5， 2》》5
function getMaxIn3Value($n1, $n2, $n3)
{
	if($n1 >= $n2 && $n1>= $n3){
		return $n1;
	}
	elseif($n2 >= $n1 && $n2>= $n3){
		return $n2;
	}
	else
	{
		return $n3;
	}
}



 ?>