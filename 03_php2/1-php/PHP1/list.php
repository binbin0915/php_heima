<?php
//包含连接数据库的公共文件
require_once("./conn.php");
//执行查询的SQL语句
$sql = "SELECT * FROM student ORDER BY id DESC";
$result = mysqli_query($link,$sql);
//获取所有行数据
$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
//获取学生人数
$records = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>学生信息管理中心</title>
<script type="text/javascript">
//定义一个JS的提示函数
function confirmDel(id)
{
	//询问是否要删除？
	if(window.confirm("你真的要删除吗？"))
	{
		//如果单击"确定"按钮，跳转到delete.php页面
		location.href = "./delete.php?id="+id;
	}
}
</script>
</head>
<body>
<div style="text-align:center;padding-bottom: 10px;">
	<h2>学生信息管理中心</h2>
	<a href="./add.php">添加学生</a>
	共有<font color=red><?php echo $records?></font>个学生信息
</div>
<table width="600" border="1" align="center" rules="all" cellpadding="5">
	<tr bgcolor='#ccc'>
		<th>编号</th>
		<th>姓名</th>
		<th>性别</th>
		<th>年龄</th>
		<th>学历</th>
		<th>工资</th>
		<th>奖金</th>
		<th>籍贯</th>
		<th>操作选项</th>
	</tr>
	<?php
	//循环二维数组
	foreach($arrs as $arr){
	?>
	<tr align="center">
		<td><?php echo $arr['id']?></td>
		<td><?php echo $arr['name']?></td>
		<td><?php echo $arr['sex']?></td>
		<td><?php echo $arr['age']?></td>
		<td><?php echo $arr['edu']?></td>
		<td><?php echo $arr['salary']?></td>
		<td><?php echo $arr['bonus']?></td>
		<td><?php echo $arr['city']?></td>
		<td>
			<a href="">修改</a> | 
			<a href="#" onClick="confirmDel(<?php echo $arr['id']?>)">删除</a>
		</td>
	</tr>
	<?php }?>
</table>
</body>
</html>
