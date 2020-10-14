<?php
//定义最终的单例的数据库工具类
class Db
{
	//私有的静态的保存对象的属性
	private static $obj = null;

	//私有的数据库配置信息
	private $db_host; //主机名
	private $db_user; //用户名
	private $db_pass; //密码
	private $db_name; //数据库名
	private $charset; //字符集
	private $link; 	  //连接对象	

	//私有的构造方法：阻止类外new对象
	private function __construct($config=array())
	{
		$this->db_host = $config['db_host'];
		$this->db_user = $config['db_user'];
		$this->db_pass = $config['db_pass'];
		$this->db_name = $config['db_name'];
		$this->charset = $config['charset'];
		$this->connectDb(); //连接MySQL服务器
		$this->selectDb();  //选择数据库
		$this->setCharset();//设置字符集
	}

	//私有的克隆方法：阻止类外clone对象
	private function __clone(){}

	//公共的静态的创建对象的方法
	public static function getInstance($arr)
	{
		//判断当前对象是否存在
		if(!self::$obj instanceof self)
		{
			//如果对象不存在，创建并保存它
			self::$obj = new self($arr);
		}
		//返回对象
		return self::$obj;
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

	//公共的析构方法
	public function __destruct()
	{
		mysqli_close($this->link); //断开MySQL连接
	}
}
//创建数据库类的对象
$arr = array(
		'db_host' => 'localhost',
		'db_user' => 'root',
		'db_pass' => '123456',
		'db_name' => 'phpshujuku',
		'charset' => 'utf8'
	);
$db1 = Db::getInstance($arr);
$db2 = Db::getInstance($arr);
var_dump($db1,$db2);
