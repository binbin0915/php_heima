<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px " cellspacing="0PX">
	    <tr>
	    	<td>元素名称</td>
	    	<td>使用形式</td>
	    	<td>结果</td>
	    	<td>含义</td>
	    </tr>
	    <tr>
	    	<td>PHP_SELF</td>
	    	<td>$_SERVER['PHP_SELF']</td>
	    	<td><?php echo $_SERVER['PHP_SELF'];?></td>
	    	<td>表示当前请求的网页页面地址</td>
	    </tr>
	    <tr>
	    	<td>SERVER_NAME</td>
	    	<td>$_SERVER['SERVER_NAME']</td>
	    	<td><?php echo $_SERVER['SERVER_NAME'];?></td>
	    	<td>表示当前的服务器名</td>
	    </tr>
	    <tr>
	    	<td>DOCUMENT_ROOT</td>
	    	<td>$_SERVER['DOCUMENT_ROOT']</td>
	    	<td><?php echo $_SERVER['DOCUMENT_ROOT'];?></td>
	    	<td>表示当前请求的网站物理路径</td>
	    </tr>
	    <tr>
	    	<td>REMOTTE_ADDR</td>
	    	<td>$_SERVER['REMOTE_ADDR']</td>
	    	<td><?php echo $_SERVER['REMOTE_ADDR'];?></td>
	    	<td>表示当前请求的客户端的IP地址</td>
	    </tr>
	</table>
</body>
</html>