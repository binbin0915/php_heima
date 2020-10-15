<?php
error_reporting(0);
require 'sphinxapi.php';//引入接口文件
$sc = new SphinxClient();//创建一个操作对象
//连接sphinx服务器
$sc->setServer('localhost',9312);
//定义一个关键词
$keyword = '大刀王五';
//设置使用的索引
$indexName = 'movie';//就是配置文件里面index 后面的名称；
//设置匹配模式
$sc->setMatchMode(SPH_MATCH_ALL);//同时包含匹配模式
//$sc->setMatchMode(SPH_MATCH_ANY);//配置关键词中的任意一个词即可
//$sc->setMatchMode(SPH_MATCH_PHRASE);//匹配的关键词不能分割
//$sc->setMatchMode(SPH_MATCH_EXTENDED);//扩展匹配，
//$sc->setMatchMode(SPH_MATCH_BOOLEAN);
//开始查询
$res = $sc->query($keyword,$indexName);
//根据返回的id,从myql中获取数据
$ids = implode(',',array_keys($res['matches']));
//连接mysql服务器
$pdo = new PDO('mysql:host=localhost;dbname=php69','root','root');
$pdo->exec('set names utf8');
$res = $pdo->query("select id,title,description from movie where id in($ids)");
$data = $res->fetchAll(PDO::FETCH_ASSOC);
//给查询出的数据，进行标注关键词
//echo '<pre>';
foreach($data as $v){
	//调用标注方法；
	//第一个参数，一行数据
	//第二个参数，索引的名称
	//第三个参数，查询的关键词
	//第四个参数，是一个数组，给关键词添加样式的；
	$row = $sc->buildExcerpts($v,$indexName,$keyword,[
		'before_match'=>"<font color='red'>",
		'after_match'=>'</font>'
	]);
	//buildExcerpts方法返回值是一个索引数组，
	echo $row[1].'<br/>';
	echo $row[2].'<hr>';
	//print_r($row);

}