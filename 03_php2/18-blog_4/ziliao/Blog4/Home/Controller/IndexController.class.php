<?php
//声明命名空间file:/F:/Second-mysql/Day-17/Blog1/Home/Conf/
namespace Home\Controller;
use \Frame\Libs\BaseController;
use \Home\Model\LinksModel;
use \Home\Model\CategoryModel;
use \Home\Model\ArticleModel;

//定义首页控制器类，并继承基础控制器类
class IndexController extends BaseController
{
	//首页显示方法
	public function index()
	{
		//(1)获取友情链接数据
		$links = LinksModel::getInstance()->fetchAll();

		//(2)获取无限级分类数据
		$categorys = CategoryModel::getInstance()->categoryList(
			CategoryModel::getInstance()->fetchAllWithJoin()
		);

		//(3)获取文章按月份归档数据
		$months = ArticleModel::getInstance()->fetchAllWithCount();

		//(4)构建搜索的条件
		$where = "2>1";
		if(!empty($_GET['category_id'])) $where .= " AND category_id=".$_GET['category_id'];
		if(!empty($_REQUEST['keyword'])) $where .= " AND title LIKE '%".$_REQUEST['keyword']."%'";

		//(5)构建分页参数
		$pagesize		= 5;
		$page 			= isset($_GET['page']) ? $_GET['page'] : 1;
		$startrow		= ($page-1)*$pagesize;
		$records 		= ArticleModel::getInstance()->rowCount($where);
		$params			= array('c'=>CONTROLLER,'a'=>ACTION);
		if(!empty($_GET['category_id'])) $params['category_id'] = $_GET['category_id'];
		if(!empty($_REQUEST['keyword'])) $params['keyword'] = $_REQUEST['keyword'];		

		//(6)获取分页字符串数据
		$pageObj = new \Frame\Vendor\Pager($records,$pagesize,$page,$params);
		$pageStr = $pageObj->showPage();

		//(7)获取文章连表查询的分页数据
		$articles = ArticleModel::getInstance()->fetchAllWithJoin($where,$startrow,$pagesize);

		//(8)向视图赋值，并显示视图
		$this->smarty->assign(array(
				'links'		=> $links,
				'categorys'	=> $categorys,
				'months'	=> $months,
				'articles'	=> $articles,
				'pageStr'	=> $pageStr,
			));
		$this->smarty->display("index.html");
	}

	//显示列表页
	public function showList()
	{
		//(1)获取友情链接数据
		$links = LinksModel::getInstance()->fetchAll();

		//(2)获取无限级分类数据
		$categorys = CategoryModel::getInstance()->categoryList(
			CategoryModel::getInstance()->fetchAllWithJoin()
		);

		//(3)获取文章按月份归档数据
		$months = ArticleModel::getInstance()->fetchAllWithCount();

		//(4)构建搜索的条件
		$where = "2>1";
		if(!empty($_GET['category_id'])) $where .= " AND category_id=".$_GET['category_id'];
		if(!empty($_REQUEST['keyword'])) $where .= " AND title LIKE '%".$_REQUEST['keyword']."%'";

		//(5)构建分页参数
		$pagesize		= 30;
		$page 			= isset($_GET['page']) ? $_GET['page'] : 1;
		$startrow		= ($page-1)*$pagesize;
		$records 		= ArticleModel::getInstance()->rowCount($where);
		$params			= array('c'=>CONTROLLER,'a'=>ACTION);
		if(!empty($_GET['category_id'])) $params['category_id'] = $_GET['category_id'];
		if(!empty($_REQUEST['keyword'])) $params['keyword'] = $_REQUEST['keyword'];		

		//(6)获取分页字符串数据
		$pageObj = new \Frame\Vendor\Pager($records,$pagesize,$page,$params);
		$pageStr = $pageObj->showPage();

		//(7)获取文章连表查询的分页数据
		$articles = ArticleModel::getInstance()->fetchAllWithJoin($where,$startrow,$pagesize);

		//(8)向视图赋值，并显示视图
		$this->smarty->assign(array(
				'links'		=> $links,
				'categorys'	=> $categorys,
				'months'	=> $months,
				'articles'	=> $articles,
				'pageStr'	=> $pageStr,
			));
		$this->smarty->display("list.html");
	}

	//显示详细内容
	public function content()
	{
		$id = $_GET['id'];
		//(1)更新文章阅读数
		ArticleModel::getInstance()->updateRead($id);

		//(2)根据ID获取连表查询的文章数据
		$article = ArticleModel::getInstance()->fetchOneWithJoin($id);

		//(3)获取当前ID的前一篇和后一篇
		$prevNext[] = ArticleModel::getInstance()->fetchOne("id<$id","id DESC");
		$prevNext[] = ArticleModel::getInstance()->fetchOne("id>$id","id ASC");

		//向视图赋值，并显示视图
		$this->smarty->assign(array(
				'article'	=> $article,
				'prevNext'	=> $prevNext,

			));
		$this->smarty->display("content.html");
	}

	//文章点赞
	public function praise()
	{
		//获取文章ID
		$id = $_GET['id'];

		//判断用户是否登录
		if(!empty($_SESSION['username']))
		{
			//每篇文章只能点赞一次
			if(empty($_SESSION['praise'][$id]))
			{
				//更新点赞数
				ArticleModel::getInstance()->updatePraise($id);
				//保存当前ID的状态
				$_SESSION['praise'][$id] = true;
				$this->jump("id={$id}的文章点赞成功！","?c=Index&a=content&id=$id");
			}else
			{
				//同一篇文章只能点赞一次
				$this->jump("同一篇文章只能点赞一次！","?c=Index&a=content&id=$id");
			}
		}else
		{
			//如果没有登录，跳转到登录页面
			$this->jump("请先登录，才能点赞！","admin.php?c=User&a=login");
		}
	}
}
