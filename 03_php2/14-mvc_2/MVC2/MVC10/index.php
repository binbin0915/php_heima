<?php
//包含所有类文件
require_once("./Frame/BaseController.class.php");
require_once("./Frame/FactoryModel.class.php");
require_once("./Frame/Db.class.php");
require_once("./Frame/BaseModel.class.php");
require_once("./Model/StudentModel.class.php");
require_once("./Model/NewsModel.class.php");
require_once("./Controller/StudentController.class.php");
require_once("./Controller/NewsController.class.php");

//获取用户动作参数
$ac = isset($_GET['ac']) ? $_GET['ac'] : 'index';
//创建学生控制器类的对象
$controllerObj = new StudentController();
//根据用户的不同动作，调用不同的方法
$controllerObj->$ac();