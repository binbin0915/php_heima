<?php
//定义最终的新闻控制器类，并继承基础控制器类
final class NewsController extends BaseController{
	//首页显示
	public function index(){
		$modelObj = FactoryModel::getInstance("NewsModel");
		$arrs = $modelObj->fetchAll();
		include "./View/News/index.html";
	}
	//删除记录
	public function delete(){
		$id = $_GET['id'];
		$modelObj = FactoryModel::getInstance("NewsModel");
		if($modelObj->delete($id))
		{
			$this->jump("id={$id}的记录删除成功！","?c=News");
		}else
		{
			$this->jump("id={$id}的记录删除失败！","?c=News");	
		}
	}
}