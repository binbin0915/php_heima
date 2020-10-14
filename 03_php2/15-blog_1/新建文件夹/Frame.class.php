<?php 
//声明命名空间
namespace Frame;





//定义最终的框架初始类
final class Frame
{
	//公共的静态的框架初始化方法
	public static function run()
	{
		self::initConfig();		//初始化配置信息
		self::initRoute();		//初始化路由参数
		self::initConst();		//初始化常量定义
		self::initAutoLoad();	//初始化类的自动加载
		self::initDispatch();	//初始化请求分发
	}
}



















