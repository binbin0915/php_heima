<?php
//判断当前文件，是文件，还是目录
$dirname = "./public";
if(is_dir($dirname))
{
	echo "{$dirname}是目录！";
}else
{
	echo "{$dirname}是一个文件！";
}