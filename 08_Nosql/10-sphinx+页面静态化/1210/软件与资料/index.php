<?php
require 'sphinxapi.php';//引入接口文件
//创建一个sphinx的对象
$sc = new SphinxClient();
//连接sphinx的服务器
//$sc->setServer("服务器的ip地址",端口号);
$sc->setServer("localhost",9312);
//就开始执行查询
$keyword = "大刀王五";//定义查询的关键词
$indexName = 'movie';//定义索引的名称
//设置匹配模式
$sc->setMatchMode(SPH_MATCH_ANY);
$res = $sc->query($keyword,$indexName);
//echo '<pre>';
//print_r($res);exit;
//根据返回的id查找myql数据库
$id = array_keys($res['matches']);//返回的是一个一维数组，
$id = implode(',',$id);//把一个数组转换成用逗号分割的一个字符串，比如  1,2,3,4
$conn = mysql_connect('localhost','root','root');
mysql_query('use php');
mysql_query('set names utf8');
$sql="select  id,title,description from movie where id in($id)";
$res = mysql_query($sql);
$data = array();
while($row=mysql_fetch_assoc($res)){
        $data[]=$row;
}
foreach($data as $v){
        //参数1：在此处循环的一维数组
        //参数2：是索引的名称
        //参数3：是查询的关键词
        //参数4：是添加的样式
        //该函数返回的结果是一个索引数组了。
        $row = $sc->buildExcerpts($v,$indexName,$keyword,array(
            'before_match'=>   "<font color='red'>",
            'after_match'=>"</font>"
        ));
        echo $row[1].'<br/>';
        echo $row[2].'<hr>';
}
?>