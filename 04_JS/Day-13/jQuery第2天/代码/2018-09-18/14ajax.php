<?php
file_put_contents('ajax.txt', print_r($_POST, true));

//返回JSON格式的数据
$arr = [
    ['id'=>1, 'name'=>'曹操'],
    ['id'=>2, 'name'=>'袁绍'],
    ['id'=>3, 'name'=>'刘备']
];

echo json_encode($arr);
