<?php
//声明命名空间：空间名要与所在目录路径一致
namespace Admin\Controller;
use \Frame\Libs\BaseController;
// use \Admin\Model\IndexModel;

//定义最终的首页控制器类
final class IndexController extends BaseController
{
	//首页方法
	public function index()
	{
		// //创建模型类对象
		// $modelObj = new IndexModel();
		// //获取多行数据
		// $arrs = $modelObj->fetchAll();
		// //包含视图文件
		// include VIEW_PATH."index.html";
			// //创建模型类对象
			// $modelObj = IndexModel::getInstance();
			// //获取多行数据
			// $arrs = $modelObj->fetchAll();
			// //向视图赋值，并显示视图
			// $this->smarty->assign("arrs",$arrs);
			// $this->smarty->display("index.html");
		//显示视图文件
		//权限验证
		$this->denyAccess();
		$this->smarty->display("index.html");
	}
	//显示顶部框架
	public function top()
	{
		//权限验证
		$this->denyAccess();
		$this->smarty->display("top.html");
	}
	//显示左侧框架
	public function left()
	{
		//权限验证
		$this->denyAccess();
		$this->smarty->display("left.html");
	}
	//显示中间框架
	public function center()
	{
		//权限验证
		$this->denyAccess();
		$this->smarty->display("center.html");
	}
	//显示主要框架
	public function main()
	{
		//权限验证
		$this->denyAccess();
		$this->smarty->display("main.html");
	}
}