<?php
$pdo = new PDO('mysql:host=localhost; dbname=test; charset=utf8', 'root', '123');

//必须自己定义的变量
$pageSize = 3; //表示每页显示3条数据
$p = $_GET['p'] ?? 1; //表示当前的页码

//写SQL，查询每页的数据
$sql = "select * from sheng limit " . ($p-1)*$pageSize . ',' . $pageSize;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//print_r($data);

/*****************************************************/
//下面制作分页页码
//上一页
if($p<=1){
    $prev = "<a href='javascript:void(0);' pp='1'>上一页</a>";
}else{
    $prev = "<a href='javascript:void(0);' pp='".($p-1)."'>上一页</a>";
}
//下一页
//判断下一页，必须知道一共有多少页，必须知道有多少条数据
$sql_count = "select count(*) from sheng";
$stmt = $pdo->prepare($sql_count);
$stmt->execute();
$count = $stmt->fetchColumn(); //总记录数
//echo $count;
$maxPage = ceil($count/$pageSize); //最大页
if($p<$maxPage){
    $next = "<a href='javascript:void(0);' pp='".($p+1)."'>下一页</a>";
}else{
    $next = "<a href='javascript:void(0);' pp='$maxPage'>下一页</a>";
}
$page = $prev . $next;

/*************** 将每页数据和分页页码返回给JS *******************/
$result = [$data, $page]; //将每页数据和分页页码放到一个数组中，一起返回
echo json_encode($result);
?>


