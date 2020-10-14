<?php
//获取地址栏传递的参数
$f = $_GET['f'];

//加密字符串，与真实文件名的对应关系
$arr = array(
		'3109ced344db6cdb6424761b1354ccac' => array('./images/winRAR.rar','winRAR压缩.rar'),
		'aed34b9f60ee115dfa7918b742336277' => array('./images/movie.avi','昨日回顾.avi'),
		'22511156cd65157bfa0db0ff8b93cdd2' => array('./images/img01.jpg','宝宝.jpg')
	);


//告诉浏览器内容类型为八位的二进制数据流
header("Content-Type:application/octet-stream");
//告诉浏览器数据的处置方式，为附件方式保存
header("Content-Disposition:attachment;filename=".iconv('utf-8','gbk',$arr[$f][1]));
//只读方式打开文件
$handle = fopen($arr[$f][0],'rb');
//循环从文件资源中取数据
while($str = fread($handle,1024))
{
	echo $str; //发送客户端
}