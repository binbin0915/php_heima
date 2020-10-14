<?php
//包含工厂模型类
require_once("./FactoryModel.class.php");

//定义最终的学生控制器类
final class StudentController
{
	public function delete(){
		$id = $_GET['id'];
		$modelObj = FactoryModel::getInstance("StudentModel");
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
		$modelObj = FactoryModel::getInstance("StudentModel");
		$arrs = $modelObj->fetchAll();
		include "./StudentIndexView.html";
	}

	//显示添加的表单
	public function add()
	{
		include "./StudentAddView.html";
	}

	//插入数据的方法
	public function insert()
	{
		//创建学生类对象
		$modelObj = FactoryModel::getInstance("StudentModel");
		//获取表单提交数据
		$data['name']	= $_POST['name'];
		$data['sex']	= $_POST['sex'];
		$data['age']	= $_POST['age'];
		$data['edu']	= $_POST['edu'];
		$data['salary']	= $_POST['salary'];
		$data['bonus']	= $_POST['bonus'];
		$data['city']	= $_POST['city'];
		//判断记录是否添加成功
		if($modelObj->insert($data))
		{
			echo "<h2>记录添加成功！</h2>";
			header("refresh:3;url=?");
			die();			
		}else
		{
			echo "<h2>记录添加失败！</h2>";
			header("refresh:3;url=?");
			die();				
		}
	}
}
//获取用户动作参数
$ac = isset($_GET['ac']) ? $_GET['ac'] : '';
//创建学生控制器类的对象
$controllerObj = new StudentController();
//根据用户的不同动作，调用不同的方法
if($ac=='delete')
{
	$controllerObj->delete();
}else if($ac=='add')
{
	$controllerObj->add();
}else if($ac=='insert')
{
	$controllerObj->insert();
}else{
	$controllerObj->index();
}