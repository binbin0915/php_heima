<?php
//包含连接数据库的公共文件
require_once("./conn.php");

//每页显示条数
$pagesize = 10;
//获取当前页码和计算开始行号
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$startrow = ($page-1)*$pagesize;

//获取总记录数和计算总页数
$sql = "SELECT * FROM student";
$records = $db->rowCount($sql);
$pages = ceil($records/$pagesize);

//构建分页查询的SQL语句
$sql = "SELECT * FROM student ORDER BY id DESC LIMIT {$startrow},{$pagesize}";
//获取多行数据
$arrs = $db->fetchAll($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>学生信息管理中心</title>
<script type="text/javascript">
//定义JS跳转的函数
function confirmDel(id)
{
	//询问是否要删除：单击"确定"按钮返回true，单击"取消"返回false
	if(window.confirm("你真的要删除吗？"))
	{
		//跳转到delete.php页面
		location.href = "./delete.php?id="+id;
	}
}
</script>
<style type="text/css">
.pagelist{}
.pagelist a{padding:3px 8px;text-decoration: none;margin:0px 3px;border:1px solid #ccc;}
.pagelist a:hover{color:red;background-color:#99cc00;}
.pagelist span{padding:3px 8px;}
</style>
</head>
<body>
<div style="text-align: center;padding-bottom:10px;">
	<h2>学生信息管理中心</h2>
	<a href="">添加学生</a> 
	共有<font color='red'><?php echo $records?></font>个学生
</div>
<table width='600' border='1' bordercolor='#ccc' rules="all" cellpadding="5" align="center">
	<tr bgcolor='#f0f0f0'>
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
			<a href="./edit.php">修改</a> | 
			<a href="javascript:void(0)" onClick="confirmDel(<?php echo $arr['id']?>)">删除</a>
		</td>
	</tr>
	<?php }?>
	<tr>
		<td class="pagelist" colspan="9" align="center">
			<?php
			//创建分页类对象
			$pageObj = new Pager($page,$pages);
			//调用分页方法，显示分页结果
			$pageObj->fenye();
			?>
		</td>
	</tr>
</table>
</body>
</html>