<?php
//判断文件是否存在
$dirname = "./public";
if(file_exists($dirname))
{
	//判断是不是目录
	if(is_dir($dirname))
	{
		//删除目录：该目录必须是空的
		rmdir($dirname);
	}
}