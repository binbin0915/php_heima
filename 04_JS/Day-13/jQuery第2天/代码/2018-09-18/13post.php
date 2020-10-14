<?php
//接收传递过来的数据
file_put_contents('post.txt', print_r($_POST, true));
//返回个JS一个值
//echo 4556;

//返回JSON格式的数据
$arr = [
    ['id'=>1, 'name'=>'曹操'],
    ['id'=>2, 'name'=>'袁绍'],
    ['id'=>3, 'name'=>'刘备']
];

echo json_encode($arr);