<?php
//自定义错误，分2步：
//1，声明，我们自己使用自己的函数来处理错误
//set_error_handler("处理错误的自己的函数名");
set_error_handler("my_error_handler");
//2，定义该函数！
function my_error_handler($errCode, $errMsg, $errFile, $errLine)
//参数解释：errCode错误代号，errMsg错误信息，errfile错误文件，errline行号
//此形参顺序固定，而且是由系统会调用该函数并传入实参数据！
{
	//此函数中，我们就可以去自己显示有关错误信息，和记录信息
	$str = "<p>大事不好了，发生错误了，快来人啊。。。";
	$str .= "<br>发生时间：" . date('Y-m-d H:i:s');
	$str .= "<br>错误代号：" . $errCode;
	$str .= "<br>错误信息：" . $errMsg;
	$str .= "<br>错误文件：" . $errFile;
	$str .= "<br>错误行号：" . $errLine;
	$str .= "</p>";
	echo $str;
	//也可以在这里继续去“记录错误”——就是错误日志
	//FILE_APPEND表示该函数使用“追加模式”来写入数据
	file_put_contents("./error.html", $str, FILE_APPEND);
}

//先给出几个出错的代码：
echo "<br>v1=$v1";	//未定义的变量

include './no-this-file.php';	//载入失败

function I1(){}
l1();		//调用不存在的函数；

echo "<p>最后的段落</p>";

