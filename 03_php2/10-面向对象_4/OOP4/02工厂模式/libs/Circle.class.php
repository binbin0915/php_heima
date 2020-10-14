<?php
//定义圆形类，并实现形状接口
class Circle implements Shape
{
	//重写draw()方法
	public function draw()
	{
		echo "正在绘制圆形！";
	}
}