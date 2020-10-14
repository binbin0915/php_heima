<?php
//包含基础控制器类
require_once("./BaseController.class.php");

//定义最终的学生控制器类，并继承基础控制器类
final class StudentController extends BaseController{
	//首页显示
	public function index(){
		$modelObj = FactoryModel::getInstance("StudentModel");
		$arrs = $modelObj->fetchAll();
		include "./StudentIndexView.html";
	}

	//显示修改的表单
	public function edit()
	{
		//获取地址栏id
		$id = $_GET['id'];
		//创建学生模型类对象
		$modelObj = FactoryModel::getInstance("StudentModel");
		//获取指定id的数据
		$arr = $modelObj->fetchOne($id);
		//包含修改的视图文件
		include "./StudentEditView.html";
	}

	//更新数据
	public function update()
	{
		//获取表单提值
		$id	= $_POST['id'];
		$data['name']	= $_POST['name'];
		$data['sex']	= $_POST['sex'];
		$data['age']	= $_POST['age'];
		$data['edu']	= $_POST['edu'];
		$data['salary']	= $_POST['salary'];
		$data['bonus']	= $_POST['bonus'];
		$data['city']	= $_POST['city'];

		//创建学生模型类对象
		$modelObj = FactoryModel::getInstance("StudentModel");

		//判断数据是否更新成功
		if($modelObj->update($data,$id))
		{
			$this->jump("id={$id}的记录更新成功！");
		}else
		{
			$this->jump("id={$id}的记录更新失败！");
		}
	}

	//删除记录
	public function delete(){
		$id = $_GET['id'];
		$modelObj = FactoryModel::getInstance("StudentModel");
		if($modelObj->delete($id))
		{
			$this->jump("id={$id}的记录删除成功！");
		}else
		{
			$this->jump("id={$id}的记录删除失败！");		
		}
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
			$this->jump("记录添加成功！");		
		}else
		{
			$this->jump("记录添加失败！");		
		}
	}
}
//获取用户动作参数
$ac = isset($_GET['ac']) ? $_GET['ac'] : 'index';
//创建学生控制器类的对象
$controllerObj = new StudentController();
//根据用户的不同动作，调用不同的方法
$controllerObj->$ac();