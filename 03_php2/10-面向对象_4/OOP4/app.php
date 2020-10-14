<?php
//定义一个数据库工具类
class Db
{
	//私有的数据库配置信息
	private $db_host; //主机名
	private $db_user; //用户名
	private $db_pass; //密码
	private $db_name; //数据库名
	private $charset; //字符集
	private $link; //连接对象

	//公共的构造方法：数据库对象初始化
	public function __construct($config=array())
	{
		$this->db_host = $config['db_host'];
		$this->db_user = $config['db_user'];
		$this->db_pass = $config['db_pass'];
		$this->db_name = $config['db_name'];
		$this->charset = $config['charset'];
		//一个方法只做一件事
		$this->connectDb(); //连接MySQL服务器
		$this->selectDb(); //选择数据库
		$this->setCharset(); //设置字符集
	}

	//私有的连接MySQL服务器方法
	private function connectDb()
	{
		if(!$this->link = @mysqli_connect($this->db_host, $this->db_user, $this->db_pass))
		{
			echo "连接MySQL服务器失败！";
			die();
		}
	}

	//私有的选择数据库的方法
	private function selectDb()
	{
		if(!mysqli_select_db($this->link, $this->db_name))
		{
			echo "选择数据库{$this->db_name}失败！";
			die();
		}
	}

	//私有的设置字符集
	private function setCharset()
	{
		mysqli_set_charset($this->link, $this->charset);
	}

	//当对象序列化时，魔术方法__sleep()会自动调用
	//在__sleep()中工作：清理不需要的属性
	public function __sleep()
	{
		//返回要序列化的对象属性的数组
		return array('db_host','db_user','db_pass','db_name','charset');
	}

	//当对象反序列化时，魔术方法__wakeup()会自动调用
	//__wakeup()作用：对象初始化
	public function __wakeup()
	{
		$this->connectDb(); //连接MySQL服务器
		$this->selectDb(); //选择数据库
		$this->setCharset(); //设置字符集	
	}
}

//读取记事本的对象序列化字符串
$str = file_get_contents('./2.txt');
//对象反序列化
$db = unserialize($str);
//打印$db对象
var_dump($db);