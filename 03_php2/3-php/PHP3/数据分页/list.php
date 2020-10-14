<?php
//包含连接数据库的公共文件
require_once("./conn.php");

//每页显示多少条
$pagesize = 10;
//获取当前页码和计算开始行号
$page = isset($_GET['page']) ? $_GET['page'] : 1; //当前页码
$startrow = ($page-1)*$pagesize; //开始行号
//获取总记录数和计算总页数
$sql = "SELECT * FROM student";
$result = mysqli_query($link,$sql);
$records = mysqli_num_rows($result);
$pages = ceil($records/$pagesize);

//构建查询的分页的SQL语句
$sql .= " ORDER BY id DESC LIMIT {$startrow},{$pagesize}";
//执行SQL语句，并返回结果集对象
$result = mysqli_query($link,$sql);
//从结果集中获取多行数据
$arrs = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
<style type="text/css">
.pagelist{}
.pagelist a{padding:3px 8px;text-decoration: none;margin:0px 3px;border:1px solid #ccc;}
.pagelist a:hover{color:red;background-color:#99cc00;}
.pagelist span{padding:3px 8px;}
</style>
</head>
<body>
<div style="text-align:center;padding-bottom: 10px;">
	<h2>学生信息管理中心</h2>
	<a href="./add.php">添加学生</a>
	共有<font color=red>560</font>个学生信息
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
	<tr>
		<td colspan="9" align="center" height="50" class="pagelist">
			<?php
			//循环起点和终点
			$start = $page-5;
			$end   = $page+4;
			//如果当前页<=6时
			if($page<=6)
			{
				$start = 1;
				$end   = 10;
			}
			//如果$page>=$pages-4
			if($page>=$pages-4)
			{
				$start = $pages-9;
				$end   = $pages;
			}
			//如果$pages<10
			if($pages<10)
			{
				$start = 1;
				$end   = $pages;
			}
			//循环输出所有页码
			for($i=$start;$i<=$end;$i++)
			{
				//当前页不加链接
				if($page==$i)
				{
					echo "<span>$i</span>";
				}else
				{
					echo "<a href='list.php?page=$i'>$i</a>";
				}
			}
			?>
		</td>
	</tr>
</table>
</body>
</html>