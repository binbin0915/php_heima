<?php 
//声明命名空间
namespace Home\Controller;
use \Frame\Libs\BaseModel;

//定义用户模型类，并继承基础模型类
class UserModel extends BaseModel
{
	//私有的数据表名称
	protected $table = "user";
}