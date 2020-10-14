<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//公鸡5元一只，母鸡3元一只，小鸡1元3只，100元买了100只鸡，问各多少只？
/*
如果公鸡1只，母鸡1只，小鸡1只，则总价为：...... 不对。
如果公鸡1只，母鸡1只，小鸡2只，则总价为：...... 不对。
如果公鸡1只，母鸡1只，小鸡3只，则总价为：...... 不对。
......
如果公鸡1只，母鸡2只，小鸡1只，则总价为：...... 不对。
如果公鸡1只，母鸡2只，小鸡2只，则总价为：...... 不对。
如果公鸡1只，母鸡2只，小鸡3只，则总价为：...... 不对。
......  .........    .........
如果公鸡100只，母鸡100只，小鸡100只，则总价为：...... 不对。
这种编程思想，叫做“穷举”，就是将所有可能的答案都罗列出来，然后挨个去“验证”
 */
$count = 0;	//用于记录运行（计算）的次数！
for($gongji = 0; $gongji <= 100; $gongji++)
{
	for($muji = 0; $muji <= 100; $muji++)
	{
		for($xiaoji = 0; $xiaoji <= 100; $xiaoji++)
		{
			if($gongji + $muji + $xiaoji == 100 && $gongji*5 + $muji*3 + $xiaoji/3 == 100)
			{
				echo "<br>公鸡:$gongji, 母鸡:$muji, 小鸡:$xiaoji";
			}
			$count++;
		}
	}
}
echo "<br>运行次数：$count";

echo "<h3>改进1：</h3>";
$count = 0;	//用于记录运行（计算）的次数！
for($gongji = 0; $gongji <= 100/5; $gongji++)
{
	for($muji = 0; $muji <= 100/3; $muji++)
	{
		for($xiaoji = 0; $xiaoji <= 100; $xiaoji++)
		{
			if($gongji + $muji + $xiaoji == 100 && $gongji*5 + $muji*3 + $xiaoji/3 == 100)
			{
				echo "<br>公鸡:$gongji, 母鸡:$muji, 小鸡:$xiaoji";
			}
			$count++;
		}
	}
}
echo "<br>运行次数：$count";

echo "<h3>改进2：</h3>";
$count = 0;	//用于记录运行（计算）的次数！
for($gongji = 0; $gongji <= 100/5; $gongji++)
{
	for($muji = 0; $muji <= 100/3; $muji++)
	{
		//在公鸡母鸡数量确定了之后，小鸡的数量也可以确定了，所以，不用去循环了！！！
		//for($xiaoji = 0; $xiaoji <= 100; $xiaoji++)
		//{
			$xiaoji = 100 - $gongji - $muji;
			//既然小鸡数据根据条件算出，则无需再进行验证总数量了！
			if($gongji*5 + $muji*3 + $xiaoji/3 == 100)
			{
				echo "<br>公鸡:$gongji, 母鸡:$muji, 小鸡:$xiaoji";
			}
			$count++;
		//}
	}
}
echo "<br>运行次数：$count";

echo "<h3>改进3：</h3>";
$count = 0;	//用于记录运行（计算）的次数！
for($gongji = 0; $gongji <= 100/5; $gongji++)
{	
	//考虑公鸡在给定数量情况下，所划掉的钱，剩余的钱(100-$gongji*5)才可能去买母鸡
	for($muji = 0; $muji <= (100-$gongji*5)/3; $muji++)
	{
		//在公鸡母鸡数量确定了之后，小鸡的数量也可以确定了，所以，不用去循环了！！！
		//for($xiaoji = 0; $xiaoji <= 100; $xiaoji++)
		//{
			$xiaoji = 100 - $gongji - $muji;
			//既然小鸡数据根据条件算出，则无需再进行验证总数量了！
			if($gongji*5 + $muji*3 + $xiaoji/3 == 100)
			{
				echo "<br>公鸡:$gongji, 母鸡:$muji, 小鸡:$xiaoji";
			}
			$count++;
		//}
	}
}
echo "<br>运行次数：$count";

echo "<h3>改进4：</h3>";
$count = 0;	//用于记录运行（计算）的次数！
for($gongji = 0; $gongji <= 100/5; $gongji++)
{	
	//考虑公鸡在给定数量情况下，所划掉的钱，剩余的钱(100-$gongji*5)才可能去买母鸡
	for($muji = 0; $muji <= (100-$gongji*5)/3; $muji++)
	{
		//在公鸡母鸡数量确定了之后，小鸡的数量也可以确定了，所以，不用去循环了！！！
		//for($xiaoji = 0; $xiaoji <= 100; $xiaoji++)
		//{
			$xiaoji = 100 - $gongji - $muji;
			if($xiaoji % 3 != 0){//小数数量必须是3的倍数，否则不应该继续计算（判断）了
				continue;	//中断本次计算（判断）
			}
			//既然小鸡数据根据条件算出，则无需再进行验证总数量了！
			if($gongji*5 + $muji*3 + $xiaoji/3 == 100)
			{
				echo "<br>公鸡:$gongji, 母鸡:$muji, 小鸡:$xiaoji";
			}
			$count++;
		//}
	}
}
echo "<br>运行次数：$count";
 ?>
</body>
</html>