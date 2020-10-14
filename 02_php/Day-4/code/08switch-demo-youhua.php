<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

//给出任意年份和月份，输出该月的天数。
$year = 2008;
$month = 22;
switch( $month )
{
	case 1:
	case 3:
	case 5:
	case 7:
	case 8:
	case 10:
	case 12:
		echo "{$year}年{$month}月的天数为31天";
		break;
	case 4:
	case 6:
	case 9:
	case 11:
		echo "{$year}年{$month}月的天数为30天";
		break;
	case 2:
		//如果是闰年
		if( $year % 4 == 0 && $year % 100 != 0  || $year % 400 == 0)
		{
			echo "{$year}年{$month}月的天数为29天";
		}
		else
		{
			echo "{$year}年{$month}月的天数为28天";
		}
		
		break;
	default:
		echo "没有该月份";
}

 ?>
</body>
</html>