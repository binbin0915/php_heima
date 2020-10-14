<?php

//定义小灵通的接口
interface XiaoLingTong
{
	//定义打电话的抽象方法
	public function tel();
}
//定义Mp3接口
interface Mp3
{
	//定义听音乐的抽象方法
	public function music();
}
//定义Mp4接口，并继承Mp3接口
interface Mp4 extends Mp3
{
	//定义看电影的抽象方法
	public function video();
}
//定义手机类，并实现以上所有接口功能
class Mobile implements XiaoLingTong,Mp4
{
	//重写tel()抽象方法
	public function tel(){
		echo "正在打电话！<br>";
	}
	//重写music()抽象方法
	public function music(){
		echo "正在听音乐！<br>";
	}
	//重写video()抽象方法
	public function video(){
		echo "正在看电影！<br>";
	}
	//添加打游戏方法
	public function game(){
		echo "正在打游戏！";
	}
}
//创建手机类对象
$obj = new Mobile();
$obj->tel();
$obj->music();
$obj->video();
$obj->game();