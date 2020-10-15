<?php
//接收传递的id
$id = $_GET['id'];
//给生成静态页面命名
$filename = 'news_info_id'.$id.'.html';
//echo filemtime($filename);
//echo date('Y-m-d H:i:s','1544428654');
//exit;
if(file_exists($filename)  && filemtime($filename)+300>time()){
	include $filename;
	exit;
}
//开启ob缓存；
ob_start();
$pdo = new PDO('mysql:host=localhost;dbname=php69','root','root');
$pdo->exec('set names utf8');
$res = $pdo->query("select id,title,description from movie where id=$id");
$info = $res->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php echo $info['title']?>
<hr>
<?php echo $info['description']?>
</body>
</html>
<?php 
//把ob缓存里面的内容给取出来，写入到一个文件里面；
$content = ob_get_contents();
file_put_contents($filename,$content);
?>
