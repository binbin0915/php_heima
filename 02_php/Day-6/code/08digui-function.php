<?php 
function f1( $n )
{
	$n++;
	echo "$n ";
	if($n < 5)
	{
		f1( $n );
	}
	echo "$n ";
}
f1(1);
