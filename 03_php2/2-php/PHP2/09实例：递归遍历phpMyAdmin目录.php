<?php
//实例：递归显示phpMyAdmin目录中所有条目
/*
	分析过程：
	(1)函数递归：递归是通过函数调用自己来实现
	(2)操作顺序：打开目录——读取所有条目
	(3)递归条件：如果它是目录，则递归调用，即打开目录——读取目录条目
	(4)关闭目录
 */
function show_all_files($dir){
	//打开目录：返回目录句柄资源
	$handle = opendir($dir);
	echo "<ul>";
	//循环读取目录中所有条目
	while($line = readdir($handle))
	{
		//如果是'.'或'..'，则跳过
		if($line=='.' || $line=='..')
		{
			continue; //中止本次循环，开始下一次循环
			          //本次循环的剩余代码不再执行
		}
		echo "<li>$line</li>";
		//如果当前条目是目录，则递归调用：phpMyAdmin/js
		if(is_dir($dir."/".$line))  //退出递归的条件
		{
			show_all_files($dir."/".$line);
		}
	}
	echo "</ul>";
	//关闭目录
	closedir($handle);
}
//调用函数
show_all_files("./phpMyAdmin");