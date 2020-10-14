<?php
//把提交过来的数据，存放到一个文件中
file_put_contents('post.txt', print_r($_POST, true));
//把获取的图片的信息，存放到一个文件
file_put_contents('file.txt', print_r($_FILES, true));
//完成上传
//move_uploaded_file(临时文件, 上传到哪里);
//创建存放文件的目录
$dir = './Uploads/' . date('Y/m/');
if(!file_exists($dir)){
    mkdir($dir, 0777, true); //第三个参数true表示可以创建深层次的目录
}
//制定不重复的文件名
$filename = uniqid();
//获取扩展名
$ext = strrchr($_FILES['pic']['name'], '.'); // .png 或 .jpg
move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $filename . $ext);