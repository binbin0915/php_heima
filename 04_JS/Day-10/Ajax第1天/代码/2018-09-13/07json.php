<?php
//服务器返回JSON格式的数据
$arr = [
    ['id'=>1, 'name'=>'西施', 'nickname'=>'沉鱼'],
    ['id'=>2, 'name'=>'王昭君', 'nickname'=>'落雁'],
    ['id'=>3, 'name'=>'貂蝉', 'nickname'=>'闭月'],
    ['id'=>4, 'name'=>'曹浩', 'nickname'=>'羞花']
];

//print_r($arr);
echo json_encode($arr);