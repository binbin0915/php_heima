<?php
//包含工厂模型类
require_once("./FactoryModel.class.php");

//定义最终的新闻控制器类
final class NewsController{
	public function delete(){
		$id = $_GET['id'];
		$modelObj = FactoryModel::getInstance("NewsModel");
		if($modelObj->delete($id)){
			echo "<h2>id={$id}的记录删除成功！</h2>";
			header("refresh:3;url=?");
			die();
		}else{
			echo "<h2>id={$id}的记录删除失败！</h2>";
			header("refresh:3;url=?");
			die();		
		}
	}
	public function index(){
		$modelObj = FactoryModel::getInstance("NewsModel");
		$arrs = $modelObj->fetchAll();
		include "./NewsIndexView.html";
	}
}
//获取用户动作参数
$ac = isset($_GET['ac']) ? $_GET['ac'] : '';
//创建新闻控制器类的对象
$controllerObj = new NewsController();
//根据用户的不同动作，调用不同的方法
if($ac=='delete'){
	$controllerObj->delete();
}else{
	$controllerObj->index();
}