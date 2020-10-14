<?php
//定义日期时间类
class DateTime2
{
	//返回当前日期数据
	public function getDate()
	{
		return date('Y-m-d');
	}

	//返回当前时间数据
	public function getTime()
	{
		return date("H:i:s");
	}

	//返回当前日期时间数据
	public function getDateTime()
	{
		return date("Y-m-d H:i:s");
	}
}