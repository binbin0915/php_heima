<?php
//判断表单是否合法提交
if(isset($_POST['token']) && $_POST['token']=='upload')
{
	/*
		(1)判断上传文件有没有错误发生
		(2)判断上传文件是否超过2MB大小
		(3)判断上传文件是不是图片
		(4)移动临时文件到虚拟目录中：取出文件扩展名、文件名唯一性
	 */

	//(1)判断上传文件有没有错误发生
	if($_FILES['uploadFile']['error']!=0)
	{
		echo "<h2>上传文件发生了错误！</h2>";
		die();
	}

	//(2)判断上传文件大小是否超过2MB
	if($_FILES['uploadFile']['size']>2*1024*1024)
	{
		echo "<h2>文件大小超出php.ini中的限制！</h2>";
		die();
	}

	//(3)判断上传文件是不是图片
	$arr = array('image/jpeg','image/png','image/gif');
	$type = $_FILES['uploadFile']['type'];
	if(!in_array($type,$arr))
	{
		echo "<h2>必须上传图像！</h2>";
		die();
	}

	//(4)移动临时文件，到./upload目录中
	$ext = pathinfo($_FILES['uploadFile']['name'],PATHINFO_EXTENSION); //jpg
	$tmp_name = $_FILES['uploadFile']['tmp_name'];
	$dst_name = "./upload/".uniqid().".".$ext;
	move_uploaded_file($tmp_name,$dst_name);
	echo "<h2>文件上传成功</h2>";
	die();
}else
{
	echo "非法操作";
}