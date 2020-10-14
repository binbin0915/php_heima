<?php
//定义最终的学生控制器类，并继承基础控制器类
final class StudentController extends BaseController{
	//首页显示
	public function index(){
		$modelObj = FactoryModel::getInstance("StudentModel");
		$arrs = $modelObj->fetchAll();
		include VIEW_PATH."index.html";
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
		include VIEW_PATH."edit.html";
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
			$this->jump("id={$id}的记录更新成功！","?p=Home&c=Student");
		}else
		{
			$this->jump("id={$id}的记录更新失败！","?p=Home&c=Student");
		}
	}

	//删除记录
	public function delete(){
		$id = $_GET['id'];
		$modelObj = FactoryModel::getInstance("StudentModel");
		if($modelObj->delete($id))
		{
			$this->jump("id={$id}的记录删除成功！","?p=Home&c=Student");
		}else
		{
			$this->jump("id={$id}的记录删除失败！","?p=Home&c=Student");		
		}
	}

	//显示添加的表单
	public function add()
	{
		include VIEW_PATH."add.html";
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
			$this->jump("记录添加成功！","?p=Home&c=Student");		
		}else
		{
			$this->jump("记录添加失败！","?p=Home&c=Student");		
		}
	}
}