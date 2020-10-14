<?php
//声明命名空间
namespace Admin\Model;
use \Frame\Libs\BaseModel;

//定义分类模型类，并继承基础模型类
class CategoryModel extends BaseModel
{
	//受保护的数据表名称
	protected $table = "category2";

	//获取无限级分类数据的方法
	public function categoryList($arrs,$level=0,$pid=0)
	{
		//参数说明：$arrs代表原始分类数据，$level代表菜单等级，$pid代表上层菜单id值
		//静态变量：一定是在函数中定义的，第1次调用函数时初始化一次，第2次以后调用不
		//再初始化。静态变量的值，在函数执行完毕不会消失。
		static $categorys = array();
		
		//循环原始的分类数组
		foreach($arrs as $arr)
		{
			//查找下级菜单
			if($arr['pid']==$pid)
			{
				$arr['level'] = $level;
				$categorys[] = $arr;
				//递归调用
				$this->categoryList($arrs,$level+1,$arr['id']);
			}
		}
		//返回结果
		return $categorys;
	}
}