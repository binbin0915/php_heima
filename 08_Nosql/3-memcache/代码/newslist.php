<?php
//连接memcache
$mem = new Memcache();
$mem->connect('localhost',11211);
//新闻列表页面，也可以缓存；
$data = $mem->get('news_list');
if(!$data){
	echo 'a';
	$pdo = new PDO('mysql:host=localhost;dbname=php','root','root');
	$pdo->exec('set names utf8');
	$res = $pdo->query('select * from it_news');
	$data = $res->fetchAll(PDO::FETCH_ASSOC);
	//缓存数据
	$mem->set('news_list',$data,0,3600);
}
?>
<table width="600" border="1">
	<tr>
		<td>编号</td>
		<td>标题</td>
		<td>详情</td>
	</tr>
	<?php foreach($data as $v){?>
		<tr>
			<td><?php echo $v['id']?></td>
			<td><?php echo $v['title']?></td>
			<td><a href="newsinfo.php?id=<?php echo $v['id']?>">详情</a></td>
		</tr>
	<?php }?>

</table>