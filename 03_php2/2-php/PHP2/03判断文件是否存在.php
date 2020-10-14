<?php
//判断文件是否存在
$dirname = "./public";
if(file_exists($dirname))
{
	echo "{$dirname}文件存在！<br>";
	//如果文件存在，再判断它是目录还是普通文件
	if(is_dir($dirname))
	{
		echo "{$dirname}是一个目录！";
	}else
	{
		echo "{$dirname}不是目录！";
	}

}else
{
	echo "{$dirname}文件不存在！";
}