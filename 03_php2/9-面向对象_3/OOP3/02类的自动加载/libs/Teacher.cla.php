<?php
//定义一个教师类
class Teacher
{
	private $name = "刘保峰";
	private $school = "北京科技大学";
	public function __construct(){
		echo "{$this->name}毕业于{$this->school}！";
	}
}