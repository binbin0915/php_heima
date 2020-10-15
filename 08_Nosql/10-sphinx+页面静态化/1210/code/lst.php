<?php
//取出数据
$pdo = new PDO('mysql:host=localhost;dbname=php69','root','root');
$pdo->exec('set names utf8');
$res = $pdo->query("select id,title,description from movie");
$data = $res->fetchAll(PDO::FETCH_ASSOC);
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
<table width="500" border="1">
	<tr>
		<td>名称</td>
		<td>详情</td>
	</tr>
	<?php foreach($data as $v){?>
	<tr>
		<td><?php echo $v['title']?></td>
		<td><a href="newsinfo.php?id=<?php echo $v['id']?>">详情</a></td>
	</tr>
	<?php }?>
</table>
</body>
</html>
