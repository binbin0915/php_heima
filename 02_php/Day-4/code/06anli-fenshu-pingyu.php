<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		输入分数：<input type="text" name="score">（0-100之间）
		<br><input type="submit" value="做评语">
	</form>
	<h1>
	<?php 
		if(!empty( $_POST['score'] ))//如果不为空
		{
			$sc = $_POST['score'];
			if( $sc >= 90 )
			{
				echo "优秀";
			}
			elseif($sc >= 80)
			{
				echo "良好";
			}
			//。。。更多elseif分支，以及else情况
			//注意：
			//还要考虑分数不在这个范围的情况
			//还要考虑不是分数（比如字母）的情况
		}
		elseif(isset($_POST['score']) && $_POST['score'] == "0")
		{
			echo "不及格";
		}
		else{
			echo "请输入分数";
		}
	?>
	</h1>
</body>
</html>